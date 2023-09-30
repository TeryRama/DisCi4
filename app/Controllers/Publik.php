<?php

namespace App\Controllers;

use App\Models\Area_model;
use App\Models\Artikel_model;
use App\Models\Barang_lainnya_model;
use App\Models\Barang_penting_model;
use App\Models\Grup_komoditas_model;
use App\Models\Image_artikel_model;
use App\Models\Kategori_artikel_model;
use App\Models\Komoditas_model;
use App\Models\Pasar_model;
use App\Models\Tanggapan_model;
use App\Models\Transaksi_barang_lainnya_model;
use App\Models\Transaksi_barang_penting_model;
use App\Models\Transaksi_model;

class Publik extends BaseController
{
    function __construct()
    {
        $this->session = \Config\Services::session();
        $this->request = \Config\Services::request();
        $this->db = \Config\Database::connect();

        $this->PM = new Pasar_model();
        $this->AM = new Area_model();
        $this->GKM = new Grup_komoditas_model();
        $this->KM = new Komoditas_model();
        $this->TM = new Transaksi_model();
        $this->KAM = new Kategori_artikel_model();
        $this->ARM = new Artikel_model();
        $this->IAM = new Image_artikel_model();
        $this->TBPM = new Transaksi_barang_penting_model();
        $this->BPM = new Barang_penting_model();
        $this->BLM = new Barang_lainnya_model();
        $this->TBLM = new Transaksi_barang_lainnya_model();
        $this->TPM = new Tanggapan_model();

        date_default_timezone_set("Asia/Jakarta");
    }

    public function index()
    {
        $data['title'] = "Home";
        $data['panel'] = "home";

        $artikel = $this->ARM->select('*')->join('tb_kategori_artikel', 'tb_artikel.artikel_kategori = tb_kategori_artikel.kategori_id')->where('artikel_status', '1')->where('artikel_akses', 'Published')->orderBy('artikel_create_time', 'DESC')->limit(4)->get()->getResult();
        $data['artikel'] = $artikel;

        $data['pasar'] = $this->PM->where('pasar_status', '1')->countAllResults();
        $data['pangan'] = $this->KM->where('komoditas_status', '1')->countAllResults();
        $penting = $this->BPM->where('barang_status', '1')->countAllResults();
        $lainnya = $this->BLM->where('barang_status', '1')->countAllResults();
        $data['penting'] = $penting + $lainnya;
        return view('page_home', $data);
    }

    public function komoditas()
    {
        $data['title'] = "Harga Komoditas";
        $data['panel'] = "komoditas";
        $komoditas = $this->KM->get_all_komoditas();
        $last_update = date('Y-m-d');
        $cek_last_update = $this->TM->select('transaksi_tanggal')->groupBy('transaksi_tanggal')->where('transaksi_status', '1')->orderBy('transaksi_tanggal', 'DESC')->limit(1)->get()->getResult();
        if (count($cek_last_update) > 0) {
            $last_update = $cek_last_update[0]->transaksi_tanggal;
            for ($i = 0; $i < count($komoditas); $i++) {
                $avg = $this->TM
                    ->select('ROUND(AVG(transaksi_harga)) as rata_harga, transaksi_tanggal')
                    ->where('transaksi_komoditas', $komoditas[$i]->komoditas_id)
                    ->where('DATE(transaksi_tanggal)', $last_update)
                    ->where('transaksi_status', '1')
                    ->where('transaksi_harga >', '0')
                    ->get()
                    ->getResult();
                $komoditas[$i]->avg_harga = $avg[0]->rata_harga;

                $get_last_prev_date = $this->TM
                    ->select('transaksi_tanggal')
                    ->where('transaksi_komoditas', $komoditas[$i]->komoditas_id)
                    ->where('transaksi_status', '1')
                    ->where('transaksi_harga >', '0')
                    ->where('DATE(transaksi_tanggal) <', $last_update)
                    ->orderBy('transaksi_tanggal', 'DESC')
                    ->groupBy('transaksi_tanggal')
                    ->limit(1)
                    ->get()->getResult();

                if (count($get_last_prev_date) > 0) {
                    $komoditas[$i]->prev_date = $get_last_prev_date[0]->transaksi_tanggal;
                    $get_last_prev_avg = $this->TM
                        ->select('ROUND(AVG(transaksi_harga)) as rata_harga')
                        ->where('transaksi_komoditas', $komoditas[$i]->komoditas_id)
                        ->where('transaksi_status', '1')
                        ->where('transaksi_harga >', '0')
                        ->where('transaksi_tanggal', $komoditas[$i]->prev_date)
                        ->get()->getResult();
                    $komoditas[$i]->avg_prev =  $get_last_prev_avg[0]->rata_harga;
                } else {
                    $komoditas[$i]->avg_prev =  $komoditas[$i]->avg_harga;
                    $komoditas[$i]->prev_date = $last_update;
                }

                if ($komoditas[$i]->avg_harga > $komoditas[$i]->avg_prev) {
                    $komoditas[$i]->status =  'Harga Naik';
                } elseif ($komoditas[$i]->avg_harga < $komoditas[$i]->avg_prev) {
                    $komoditas[$i]->status =  'Harga Turun';
                } else {
                    $komoditas[$i]->status =  'Harga Stabil';
                }
            }
        } else {
            for ($i = 0; $i < count($komoditas); $i++) {
                $komoditas[$i]->avg_harga = 0;
                $komoditas[$i]->avg_prev = 0;
                $komoditas[$i]->status = "";
            }
        }
        $data['last_update'] = $last_update;
        $data['komoditas'] = $komoditas;


        $last_update_penting = date('Y-m-d');
        $penting = $this->BPM->select('barang_id, barang_nama, barang_satuan, barang_foto')->join('tb_grup_komoditas', 'tb_barang_penting.barang_grup = tb_grup_komoditas.grup_komoditas_id')->where('barang_status', '1')->where('grup_komoditas_status', '1')->get()->getResult();
        $cek_last_update_penting = $this->TBPM->select('transaksi_tanggal')->where('transaksi_status', '1')->groupBy('transaksi_tanggal')->orderBy('transaksi_tanggal', 'DESC')->limit(1)->get()->getResult();
        if (count($cek_last_update_penting) > 0) {
            $last_update_penting = $cek_last_update_penting[0]->transaksi_tanggal;
            foreach ($penting as $row) {
                $avg = $this->TBPM->select('ROUND(AVG(transaksi_harga)) as rata_harga, transaksi_tanggal')
                    ->where('transaksi_barang', $row->barang_id)
                    ->where('DATE(transaksi_tanggal)', $last_update_penting)
                    ->where('transaksi_status', '1')
                    ->where('transaksi_harga >', '0')
                    ->get()
                    ->getResult();
                $row->avg_harga = $avg[0]->rata_harga;
                $row->last_update = $last_update_penting;

                $get_last_prev_date_penting = $this->TBPM
                    ->select('transaksi_tanggal')
                    ->where('transaksi_barang', $row->barang_id)
                    ->where('transaksi_status', '1')
                    ->where('transaksi_harga >', '0')
                    ->where('DATE(transaksi_tanggal) <', $last_update_penting)
                    ->orderBy('transaksi_tanggal', 'DESC')
                    ->groupBy('transaksi_tanggal')
                    ->limit(1)
                    ->get()->getResult();

                if (count($get_last_prev_date_penting) > 0) {
                    $row->prev_date = $get_last_prev_date_penting[0]->transaksi_tanggal;
                    $get_last_prev_avg_penting = $this->TBPM
                        ->select('ROUND(AVG(transaksi_harga)) as rata_harga, transaksi_tanggal')
                        ->where('transaksi_barang', $row->barang_id)
                        ->where('transaksi_status', '1')
                        ->where('transaksi_harga >', '0')
                        ->where('transaksi_tanggal', $row->prev_date)
                        ->get()->getResult();
                    $row->avg_prev =  $get_last_prev_avg_penting[0]->rata_harga;
                } else {
                    $row->avg_prev =  $row->avg_harga;
                    $row->prev_date = $last_update;
                }

                if ($row->avg_harga > $row->avg_prev) {
                    $row->status =  'Harga Naik';
                } elseif ($row->avg_harga < $row->avg_prev) {
                    $row->status =  'Harga Turun';
                } else {
                    $row->status =  'Harga Stabil';
                }
            }
        } else {
            foreach ($penting as $row) {
                $row->avg_harga = 0;
                $row->avg_prev = 0;
                $row->status = "";
            }
        }
        $data['barang_penting'] = $penting;
        $data['last_update_penting'] = $last_update_penting;

        $last_update_lainnya = date('Y-m-d');
        $lainnya = $this->BLM->select('barang_id, barang_nama, barang_satuan, barang_foto')->join('tb_grup_komoditas', 'tb_barang_lainnya.barang_grup = tb_grup_komoditas.grup_komoditas_id')->where('barang_status', '1')->where('grup_komoditas_status', '1')->get()->getResult();
        $cek_last_update_lainnya = $this->TBLM->select('transaksi_tanggal')->where('transaksi_status', '1')->groupBy('transaksi_tanggal')->orderBy('transaksi_tanggal', 'DESC')->limit(1)->get()->getResult();
        if (count($cek_last_update_lainnya) > 0) {
            $last_update_lainnya = $cek_last_update_lainnya[0]->transaksi_tanggal;
            foreach ($lainnya as $row) {
                $avg = $this->TBLM->select('ROUND(AVG(transaksi_harga)) as rata_harga, transaksi_tanggal')
                    ->where('transaksi_barang', $row->barang_id)
                    ->where('DATE(transaksi_tanggal)', $last_update_lainnya)
                    ->where('transaksi_status', '1')
                    ->where('transaksi_harga >', '0')
                    ->get()
                    ->getResult();
                $row->avg_harga = $avg[0]->rata_harga;
                $row->last_update = $last_update_lainnya;

                $get_last_prev_date_lainnya = $this->TBLM
                    ->select('ROUND(AVG(transaksi_harga)) as rata_harga, transaksi_tanggal')
                    ->where('transaksi_barang', $row->barang_id)
                    ->where('transaksi_status', '1')
                    ->where('transaksi_harga >', '0')
                    ->where('DATE(transaksi_tanggal) <', $last_update_lainnya)
                    ->orderBy('transaksi_tanggal', 'DESC')
                    ->groupBy('transaksi_tanggal')
                    ->limit(1)
                    ->get()->getResult();

                if (count($get_last_prev_date_lainnya) > 0) {
                    $row->prev_date = $get_last_prev_date_lainnya[0]->transaksi_tanggal;
                    $get_last_prev_date_lainnya = $this->TBLM
                        ->select('ROUND(AVG(transaksi_harga)) as rata_harga')
                        ->where('transaksi_barang', $row->barang_id)
                        ->where('transaksi_status', '1')
                        ->where('transaksi_harga >', '0')
                        ->where('transaksi_tanggal', $row->prev_date)
                        ->get()->getResult();
                    $row->avg_prev =  $get_last_prev_date_lainnya[0]->rata_harga;
                } else {
                    $row->avg_prev =  $row->avg_harga;
                    $row->prev_date = $last_update;
                }

                if ($row->avg_harga > $row->avg_prev) {
                    $row->status =  'Harga Naik';
                } elseif ($row->avg_harga < $row->avg_prev) {
                    $row->status =  'Harga Turun';
                } else {
                    $row->status =  'Harga Stabil';
                }
            }
        } else {
            foreach ($lainnya as $row) {
                $row->avg_harga = 0;
                $row->avg_prev = 0;
                $row->status = "";
            }
        }
        $data['barang_lainnya'] = $lainnya;
        $data['last_update_lainnya'] = $last_update_lainnya;

        $artikel = $this->ARM->select('artikel_id, artikel_judul, artikel_url, artikel_create_time, artikel_gambar, kategori_nama')->join('tb_kategori_artikel', 'tb_artikel.artikel_kategori = tb_kategori_artikel.kategori_id')->where('artikel_status', '1')->where('artikel_akses', 'Published')->orderBy('artikel_create_time', 'DESC')->limit(5)->get()->getResult();
        $data['artikel'] = $artikel;

        return view('page_komoditas', $data);
        // echo json_encode($data);
        // exit;
    }


    public function pasar()
    {
        $data['title'] = "Data Pasar";
        $data['panel'] = "data-pasar";
        $data['pasar'] = $this->PM->get_all_pasar();
        for ($i = 0; $i < count($data['pasar']); $i++) {
            $kec = $this->AM->get_area_by_code($data['pasar'][$i]->pasar_kecamatan);
            $kel = $this->AM->get_area_by_code($data['pasar'][$i]->pasar_kelurahan);
            $data["pasar"][$i]->nama_kecamatan = $kec[0]['name'];
            $data["pasar"][$i]->nama_kelurahan = $kel[0]['name'];
        }
        $artikel = $this->ARM->select('artikel_id, artikel_judul, artikel_url, artikel_create_time, artikel_gambar, kategori_nama')->join('tb_kategori_artikel', 'tb_artikel.artikel_kategori = tb_kategori_artikel.kategori_id')->where('artikel_status', '1')->where('artikel_akses', 'Published')->orderBy('artikel_create_time', 'DESC')->limit(5)->get()->getResult();
        $data['artikel'] = $artikel;
        return view('page_pasar', $data);
    }

    public function detail_komoditas()
    {
        $id = decrypt_small($this->request->uri->getSegment(2));
        $data['title'] = "Data Komoditas";
        $data['panel'] = "komoditas";
        $data['komoditas'] = $this->KM->get_komoditas_by_id($id);
        $harga = $this->TM->select('ROUND(AVG(tb_transaksi.transaksi_harga)) as rata_harga, tb_transaksi.transaksi_tanggal, tb_pasar.pasar_nama, _area.name')
            ->join('tb_pasar', 'tb_transaksi.transaksi_pasar = tb_pasar.pasar_id')
            ->join('_area', 'tb_pasar.pasar_kecamatan = _area.code')
            ->where('transaksi_komoditas', $id)
            ->where('transaksi_status', '1')
            ->where('transaksi_harga >', '0')
            ->orderBy('transaksi_tanggal', 'DESC')
            ->groupBy('transaksi_tanggal')
            ->limit(1)
            ->get()->getResult();
        $last_update = $harga[0]->transaksi_tanggal;
        $max = $this->TM->select('transaksi_harga')
            ->where('transaksi_komoditas', $id)
            ->where('transaksi_tanggal', $last_update)
            ->where('transaksi_status', '1')
            ->where('transaksi_harga >', '0')
            ->orderBy('transaksi_harga', 'DESC')
            ->limit(1)
            ->get()->getResult();
        $min = $this->TM->select('transaksi_harga')
            ->where('transaksi_komoditas', $id)
            ->where('transaksi_tanggal', $last_update)
            ->where('transaksi_status', '1')
            ->where('transaksi_harga >', '0')
            ->orderBy('transaksi_harga', 'ASC')
            ->limit(1)
            ->get()->getResult();
        $data['komoditas'][0]->komoditas_harga = $harga[0]->rata_harga;
        $data['komoditas'][0]->komoditas_harga_min = $min[0]->transaksi_harga;
        $data['komoditas'][0]->komoditas_harga_max = $max[0]->transaksi_harga;

        $transaksi = $this->TM->select('ROUND(AVG(tb_transaksi.transaksi_harga)) as rata_harga, tb_transaksi.transaksi_tanggal, tb_pasar.pasar_nama, _area.name')
            ->join('tb_pasar', 'tb_transaksi.transaksi_pasar = tb_pasar.pasar_id')
            ->join('_area', 'tb_pasar.pasar_kecamatan = _area.code')
            ->where('transaksi_komoditas', $id)
            ->where('transaksi_status', '1')
            ->where('transaksi_harga >', '0')
            ->where('transaksi_tanggal', $last_update)
            ->orderBy('transaksi_create_time', 'DESC')
            ->groupBy('transaksi_pasar')
            ->get()->getResult();
        $data['transaksi'] = $transaksi;

        $perubahan = $this->TM->select('ROUND(AVG(tb_transaksi.transaksi_harga)) as rata_harga, tb_transaksi.transaksi_tanggal, ROUND(AVG(tb_transaksi.transaksi_het)) as het')
            ->join('tb_pasar', 'tb_transaksi.transaksi_pasar = tb_pasar.pasar_id')
            ->join('_area', 'tb_pasar.pasar_kecamatan = _area.code')
            ->where('transaksi_komoditas', $id)
            ->where('transaksi_status', '1')
            ->where('transaksi_harga >', '0')
            ->where('transaksi_tanggal <=', $last_update)
            ->orderBy('transaksi_create_time', 'DESC')
            ->groupBy('transaksi_tanggal')
            ->limit('5')
            ->get()->getResult();
        $data['perubahan'] = $perubahan;

        $data['last_update'] = $last_update;

        $artikel = $this->ARM->select('artikel_id, artikel_judul, artikel_url, artikel_create_time, artikel_gambar, kategori_nama')->join('tb_kategori_artikel', 'tb_artikel.artikel_kategori = tb_kategori_artikel.kategori_id')->where('artikel_status', '1')->where('artikel_akses', 'Published')->orderBy('artikel_create_time', 'DESC')->limit(5)->get()->getResult();
        $data['artikel'] = $artikel;
        // echo json_encode($data);
        return view('page_detail_komoditas', $data);
    }

    public function detail_pasar()
    {
        $id = decrypt_small($this->request->uri->getSegment(2));
        $data['panel'] = "data-pasar";
        $data['pasar'] = $this->PM->get_pasar_by_id($id);
        for ($i = 0; $i < count($data['pasar']); $i++) {
            $kec = $this->AM->get_area_by_code($data['pasar'][$i]->pasar_kecamatan);
            $kel = $this->AM->get_area_by_code($data['pasar'][$i]->pasar_kelurahan);
            $data["pasar"][$i]->nama_kecamatan = $kec[0]['name'];
            $data["pasar"][$i]->nama_kelurahan = $kel[0]['name'];
        }
        $data['title'] = $data['pasar'][0]->pasar_nama;
        return view('page_detail_pasar', $data);
    }

    public function statistik_wilayah()
    {
        $data['panel'] = "statistik_wilayah";
        $data['title'] = "Statistik Wilayah";
        $data['kecamatan'] = $this->AM->get_all_kecamatan();
        $data['pasar'] = $this->PM->get_all_pasar();
        $artikel = $this->ARM->select('artikel_id, artikel_judul, artikel_url, artikel_create_time, artikel_gambar, kategori_nama')->join('tb_kategori_artikel', 'tb_artikel.artikel_kategori = tb_kategori_artikel.kategori_id')->where('artikel_status', '1')->where('artikel_akses', 'Published')->orderBy('artikel_create_time', 'DESC')->limit(5)->get()->getResult();
        $data['artikel'] = $artikel;

        if (isset($_GET['tipe']) && isset($_GET['psr']) && isset($_GET['kec'])) {
            $pasar = $_GET['psr'];
            $tipe = $_GET['tipe'];
            $kec = $_GET['kec'];
        } else {
            $pasar = "";
            $tipe = "";
            $kec = "";
        }

        if (!isset($_GET['bulan']) || $_GET['bulan'] == "" || !isset($_GET['tahun']) || $_GET['tahun'] == "") {
            $mn = date('m');
            $yn = date('Y');
            $first = $yn . '-' . $mn . '01';
            $last = $yn . '-' . $mn . '31';
        } else {
            $mn = $_GET['bulan'];
            $yn = $_GET['tahun'];
            $first = $yn . '-' . $mn . '01';
            $last = $yn . '-' . $mn . '31';
        }

        $get_tanggal = $this->TM
            ->select('transaksi_tanggal')
            ->where('transaksi_status', '1')
            ->where('YEAR(transaksi_tanggal)', $yn)
            ->where('MONTH(transaksi_tanggal)', $mn)
            ->groupBy('transaksi_tanggal')
            ->get()->getResult();
        $data['tanggal'] = $get_tanggal;
        $komoditas = $this->KM->select('komoditas_id, komoditas_nama')->join('tb_grup_komoditas', 'tb_komoditas.komoditas_grup = tb_grup_komoditas.grup_komoditas_id')->where('komoditas_status', '1')->where('grup_komoditas_status', '1')->get()->getResult();
        foreach ($komoditas as $row) {

            $harga = array();
            foreach ($get_tanggal as $r) {

                $transaksi = $this->TM
                    ->select('ROUND(AVG(tb_transaksi.transaksi_harga)) as rata_harga');
                if ($tipe == "kecamatan") {
                    $transaksi = $transaksi
                        ->join('tb_pasar', 'tb_transaksi.transaksi_pasar = tb_pasar.pasar_id')
                        ->where('pasar_kecamatan', $kec);
                }
                if ($tipe == "pasar") {
                    $transaksi = $transaksi
                        ->where('transaksi_pasar', decrypt_url($pasar));
                }
                $transaksi = $transaksi
                    ->where('transaksi_komoditas', $row->komoditas_id)
                    ->where('DATE(transaksi_tanggal)', $r->transaksi_tanggal)
                    ->where('transaksi_status', '1')
                    ->where('transaksi_harga >', '0')
                    ->groupBy('transaksi_tanggal')
                    ->get()->getResult();
                if (count($transaksi) > 0) {
                    array_push($harga, $transaksi[0]->rata_harga);
                } else {
                    array_push($harga, "-");
                }
            }
            $row->harga = $harga;
        }
        $data['komoditas'] = $komoditas;
        if ($tipe == "pasar") {
            $nama_pasar = $this->PM
                ->select('pasar_nama')
                ->where('pasar_id', decrypt_url($pasar))
                ->get()->getResult();
            $status = $nama_pasar[0]->pasar_nama;
        } elseif ($tipe == "kecamatan") {
            $nama_kecamatan = $this->AM
                ->select('name')
                ->where('code', $kec)
                ->get()->getResult();
            $status = $nama_kecamatan[0]->name;
        } else {
            $status = "Seluruh";
        }
        $data['status_filter'] = $status;

        return view('page_statistik_wilayah', $data);
        // echo json_encode($data);
    }

    public function statistik_komoditas()
    {
        $data['panel'] = "statistik_komoditas";
        $data['title'] = "Statistik Komoditas";
        $data['komoditas'] = $this->KM->get_all_komoditas();
        return view('page_statistik_komoditas', $data);
    }



    public function artikel()
    {
        $data['panel'] = "artikel";
        $data['title'] = "Artikel";
        $artikel = $this->ARM
            ->select('artikel_id, artikel_judul, artikel_konten, artikel_url, artikel_gambar, kategori_nama, kategori_id, artikel_create_time, artikel_baca')
            ->join('tb_kategori_artikel', 'tb_artikel.artikel_kategori = tb_kategori_artikel.kategori_id')
            ->where('artikel_akses', 'Published')
            ->where('artikel_status', '1');
        if (isset($_GET['keyword']) && $_GET['keyword'] != "") {
            $artikel = $artikel->like('artikel_judul', $_GET['keyword'], 'both');
        }
        if (isset($_GET['kategori']) && $_GET['kategori'] != "") {
            $data['kat'] = $this->KAM->select('kategori_nama')->where('kategori_id', decrypt_small($_GET['kategori']))->get()->getResult();
            $artikel = $artikel->where('artikel_kategori', decrypt_small($_GET['kategori']));
        }

        $artikel = $artikel->orderBy('artikel_create_time', 'DESC')
            ->paginate(5, 'artikel');
        $pager = $this->ARM
            ->select('artikel_id, artikel_judul, artikel_konten, artikel_url, artikel_gambar, kategori_nama,  kategori_id,artikel_create_time, artikel_baca')
            ->join('tb_kategori_artikel', 'tb_artikel.artikel_kategori = tb_kategori_artikel.kategori_id')
            ->where('artikel_akses', 'Published')
            ->where('artikel_status', '1')
            ->pager;

        $kategori = $this->KAM->select('kategori_id, kategori_nama')->where('kategori_status', '1')->orderBy('kategori_nama', 'ASC')->get()->getResult();
        foreach ($kategori as $r) {
            $r->jumlah = $this->ARM->select('artikel_id')->where('artikel_kategori', $r->kategori_id)->where('artikel_status', '1')->countAllResults();
        }

        $data['berita'] = $artikel;
        $data['pager'] = $pager;
        $data['kategori'] = $kategori;
        $data['berita_update'] = $this->ARM->get_berita_update();
        $data['berita_populer'] = $this->ARM->get_berita_populer();

        return view('page_artikel', $data);
    }

    public function detail_artikel()
    {
        $url = $this->request->uri->getSegment(2);
        $data['artikel'] = $this->ARM
            ->select('artikel_id, artikel_judul, artikel_konten, artikel_gambar, kategori_nama, artikel_create_time, artikel_baca')
            ->join('tb_kategori_artikel', 'tb_artikel.artikel_kategori = tb_kategori_artikel.kategori_id')
            // ->where('artikel_akses', 'Published')
            ->where('artikel_status', '1')
            ->where('artikel_url', $url)
            ->get()->getResult();

        $data['desk'] = $data['artikel'][0]->artikel_judul;
        $data['img'] = $data['artikel'][0]->artikel_gambar;

        $data['galeri'] = $this->IAM
            ->select('img_nama')
            ->where('img_artikel', $data['artikel'][0]->artikel_id)
            ->where('img_status', '1')
            ->get()->getResult();
        $kategori = $this->KAM->select('kategori_id, kategori_nama')->where('kategori_status', '1')->orderBy('kategori_nama', 'ASC')->get()->getResult();
        foreach ($kategori as $r) {
            $r->jumlah = $this->ARM->select('artikel_id')->where('artikel_kategori', $r->kategori_id)->where('artikel_status', '1')->countAllResults();
        }

        $data['title'] = $data['artikel'][0]->artikel_judul;
        $data['panel'] = 'artikel';

        $data['kategori'] = $kategori;
        $data['berita_update'] = $this->ARM->get_berita_update();
        $data['berita_populer'] = $this->ARM->get_berita_populer();

        $baca = $data['artikel'][0]->artikel_baca + 1;
        $update = ["artikel_baca" => $baca, "artikel_id" => $data['artikel'][0]->artikel_id];
        $this->ARM->edit_artikel($update);

        return view('page_artikel_detail', $data);
    }

    public function privasi()
    {
        $data['panel'] = "";
        $data['title'] = "Kebijakan Privasi";
        return view('page_privasi', $data);
    }

    public function klinik_putri()
    {
        $data['panel'] = "inovasi";
        $data['title'] = "Klinik Putri";
        $data['berita_update'] = $this->ARM->get_berita_update();
        $data['berita_populer'] = $this->ARM->get_berita_populer();
        return view('page_klinik_putri', $data);
    }

    public function klinik_ikm()
    {
        $data['panel'] = "inovasi";
        $data['title'] = "Klinik IKM";
        $data['berita_update'] = $this->ARM->get_berita_update();
        $data['berita_populer'] = $this->ARM->get_berita_populer();
        return view('page_klinik_ikm', $data);
    }

    public function sibapokting()
    {
        $data['panel'] = "inovasi";
        $data['title'] = "Sibapokting Inhil";
        $data['berita_update'] = $this->ARM->get_berita_update();
        $data['berita_populer'] = $this->ARM->get_berita_populer();
        return view('page_sibapokting', $data);
    }

    public function priuk_wak_atan()
    {
        $data['panel'] = "inovasi";
        $data['title'] = "Priuk Wak Atan";
        $data['berita_update'] = $this->ARM->get_berita_update();
        $data['berita_populer'] = $this->ARM->get_berita_populer();
        return view('page_priuk_wak_atan', $data);
    }

    public function struktur()
    {
        $data['panel'] = "struktur";
        $data['title'] = "Struktur Organisasi";
        $data['berita_update'] = $this->ARM->get_berita_update();
        $data['berita_populer'] = $this->ARM->get_berita_populer();
        return view('page_struktur_organisasi', $data);
    }

    public function tugas()
    {
        $data['panel'] = "tugas";
        $data['title'] = "Tugas dan Fungsi";
        $data['berita_update'] = $this->ARM->get_berita_update();
        $data['berita_populer'] = $this->ARM->get_berita_populer();
        return view('page_tugas', $data);
    }
    public function kadis()
    {
        $data['panel'] = "kadis";
        $data['title'] = "Kepala Dinas";
        $data['berita_update'] = $this->ARM->get_berita_update();
        $data['berita_populer'] = $this->ARM->get_berita_populer();
        return view('page_jabatan', $data);
    }
    public function sekretaris()
    {
        $data['panel'] = "sekretaris";
        $data['title'] = "Sekretaris";
        $data['berita_update'] = $this->ARM->get_berita_update();
        $data['berita_populer'] = $this->ARM->get_berita_populer();
        return view('page_jabatan', $data);
    }
    public function bid_perdagangan()
    {
        $data['panel'] = "bid_perdagangan";
        $data['title'] = "Bidang Perdagangan";
        $data['berita_update'] = $this->ARM->get_berita_update();
        $data['berita_populer'] = $this->ARM->get_berita_populer();
        return view('page_jabatan', $data);
    }
    public function bid_pasar()
    {
        $data['panel'] = "bid_pasar";
        $data['title'] = "Bidang Pasar";
        $data['berita_update'] = $this->ARM->get_berita_update();
        $data['berita_populer'] = $this->ARM->get_berita_populer();
        return view('page_jabatan', $data);
    }
    public function bid_kemetrologian()
    {
        $data['panel'] = "bid_kemetrologian";
        $data['title'] = "Bidang Kemetrologian";
        $data['berita_update'] = $this->ARM->get_berita_update();
        $data['berita_populer'] = $this->ARM->get_berita_populer();
        return view('page_jabatan', $data);
    }
    public function bid_perindustrian()
    {
        $data['panel'] = "bid_perindustrian";
        $data['title'] = "Bidang Perindustrian";
        $data['berita_update'] = $this->ARM->get_berita_update();
        $data['berita_populer'] = $this->ARM->get_berita_populer();
        return view('page_jabatan', $data);
    }
    public function lapor()
    {
        $data['panel'] = "lapor";
        $data['title'] = "Lapor";
        $data['berita_update'] = $this->ARM->get_berita_update();
        $data['berita_populer'] = $this->ARM->get_berita_populer();
        return view('page_lapor', $data);
    }
    public function kritik()
    {
        $data['panel'] = "kritik";
        $data['title'] = "Kritik dan Saran";
        $data['berita_update'] = $this->ARM->get_berita_update();
        $data['berita_populer'] = $this->ARM->get_berita_populer();
        return view('page_kritik', $data);
    }

    public function add_kritik()
    {
        $data['tanggapan_id'] = null;
        $data['tanggapan_nama'] = $this->request->getPost('nama');
        $data['tanggapan_email'] = $this->request->getPost('email');
        $data['tanggapan_hp'] = $this->request->getPost('hp');
        $data['tanggapan_topik'] = $this->request->getPost('topik');
        $data['tanggapan_isi'] = $this->request->getPost('isi');
        $data['tanggapan_create_time'] = date('Y-m-d H:i:s');

        if ($this->TPM->add_tanggapan($data)) {
            $result['status'] = '1';
            $result['msg'] = 'Berhasil Menambahkan Kritik dan Saran';
        } else {
            $result['status'] = '0';
            $result['msg'] = 'Gagal Menambahkan Kritik dan Saran';
        }

        echo json_encode($result);
        exit;
    }
}
