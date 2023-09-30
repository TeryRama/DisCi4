<?php

namespace App\Controllers;

use App\Models\Artikel_model;
use App\Models\Kategori_artikel_model;
use App\Models\Page_management_model;
use App\Models\Area_model;
use App\Models\Barang_lainnya_model;
use App\Models\Barang_penting_model;
use App\Models\Distributor_barang_lainnya_model;
use App\Models\Distributor_barang_penting_model;
use App\Models\Distributor_stok_model;
use App\Models\Grup_komoditas_model;
use App\Models\Jualan_model;
use App\Models\Komoditas_model;
use App\Models\Komoditas_stok_model;
use App\Models\Log_model;
use App\Models\Pasar_model;
use App\Models\Pedagang_model;
use App\Models\Relasi_barang_lainnya_model;
use App\Models\Relasi_barang_penting_model;
use App\Models\Relasi_stok_model;
use App\Models\Tanggapan_model;
use App\Models\Transaksi_barang_lainnya_model;
use App\Models\Transaksi_barang_penting_model;
use App\Models\Transaksi_model;
use App\Models\Transaksi_stok_model;
use App\Models\User_level_model;
use App\Models\User_model;

class Admin extends BaseController
{

    function __construct()
    {


        $this->session = \Config\Services::session();
        $this->request = \Config\Services::request();
        $this->db = \Config\Database::connect();

        $this->KAM = new Kategori_artikel_model();
        $this->ARM = new Artikel_model();
        $this->PMM = new Page_management_model();
        $this->UM = new User_model();
        $this->PM = new Pasar_model();
        $this->LM = new Log_model();
        $this->AM = new Area_model();
        $this->GKM = new Grup_komoditas_model();
        $this->KM = new Komoditas_model();
        $this->ULM = new User_level_model();
        $this->TM = new Transaksi_model();
        $this->PDM = new Pedagang_model();
        $this->JM = new Jualan_model();
        $this->BPM = new Barang_penting_model();
        $this->DBPM = new Distributor_barang_penting_model();
        $this->RBPM = new Relasi_barang_penting_model();
        $this->TBPM = new Transaksi_barang_penting_model();
        $this->BLM = new Barang_lainnya_model();
        $this->DBLM = new Distributor_barang_lainnya_model();
        $this->RBLM = new Relasi_barang_lainnya_model();
        $this->TBLM = new Transaksi_barang_lainnya_model();
        $this->KSM = new Komoditas_stok_model();
        $this->DSM = new Distributor_stok_model();
        $this->RSM = new Relasi_stok_model();
        $this->TSM = new Transaksi_stok_model();
        $this->TPM = new Tanggapan_model();

        date_default_timezone_set('Asia/Jakarta');
        if (empty($_SESSION['user_id']) || $_SESSION['user_role'] != '4') {
            $_SESSION['msg_error'] = "Anda tidak memiliki akses !!";
            echo "
                <script>window.location.href = '" . base_url('/login') . "'</script>
            ";
        }
    }



    public function dashboard()
    {
        $data['title'] = "Dashboard";
        $data['page_class'] = "dashboard";
        $data['sub_panel'] = "";
        $data['page_management'] = $this->PMM->get_all_data();

        $data['kategori'] = $this->KAM->select('kategori_id')->where('kategori_status', '1')->countAllResults();

        $data['artikel_draft'] = $this->ARM
            ->select('artikel_id')
            ->join('tb_kategori_artikel', 'tb_artikel.artikel_kategori = tb_kategori_artikel.kategori_id')
            ->where('artikel_akses', 'Draft')
            ->where('artikel_status', '1')
            ->where('kategori_status', '1')
            ->countAllResults();

        $data['artikel_publish'] = $this->ARM
            ->select('artikel_id')
            ->join('tb_kategori_artikel', 'tb_artikel.artikel_kategori = tb_kategori_artikel.kategori_id')
            ->where('artikel_akses', 'Published')
            ->where('artikel_status', '1')
            ->where('kategori_status', '1')
            ->countAllResults();

        $grup_pangan = $this->GKM->select('grup_komoditas_id')->where('grup_komoditas_tipe', 'Barang Pangan')->where('grup_komoditas_status', '1')->countAllResults();
        $grup_penting = $this->GKM->select('grup_komoditas_id')->where('grup_komoditas_tipe', 'Barang Penting')->where('grup_komoditas_status', '1')->countAllResults();
        $grup_lainnya = $this->GKM->select('grup_komoditas_id')->where('grup_komoditas_tipe', 'Barang Penting Lainnya')->where('grup_komoditas_status', '1')->countAllResults();
        $grup_stok = $this->GKM->select('grup_komoditas_id')->where('grup_komoditas_tipe', 'Stok')->where('grup_komoditas_status', '1')->countAllResults();

        $pangan = $this->KM->select('komoditas_id')->where('komoditas_status', '1')->countAllResults();
        $penting = $this->BPM->select('barang_id')->where('barang_status', '1')->countAllResults();
        $lainnya = $this->BLM->select('barang_id')->where('barang_status', '1')->countAllResults();
        $stok = $this->KSM->select('komoditas_id')->where('komoditas_status', '1')->countAllResults();

        $pedagang_pangan = $this->PDM->select('pedagang_id')->where('pedagang_status', '1')->countAllResults();
        $pedagang_penting = $this->DBPM->select('distributor_id')->where('distributor_status', '1')->countAllResults();
        $pedagang_lainnya = $this->DBLM->select('distributor_id')->where('distributor_status', '1')->countAllResults();
        $pedagang_stok = $this->DSM->select('distributor_id')->where('distributor_status', '1')->countAllResults();

        $pasar = $this->PM->select('pasar_id')->where('pasar_status', '1')->countAllResults();

        $data['pangan'] = [
            "grup" => $grup_pangan,
            "komoditas" => $pangan,
            "pasar" => $pasar,
            "pedagang" => $pedagang_pangan
        ];

        $data['penting'] = [
            "grup" => $grup_penting,
            "komoditas" => $penting,
            "distributor" => $pedagang_penting
        ];

        $data['lainnya'] = [
            "grup" => $grup_lainnya,
            "komoditas" => $lainnya,
            "distributor" => $pedagang_lainnya
        ];

        $data['stok'] = [
            "grup" => $grup_stok,
            "komoditas" => $stok,
            "distributor" => $pedagang_stok
        ];

        return view('admin/page_dashboard', $data);
    }

    public function kategori_artikel()
    {
        $data['title'] = "Kategori Artikel";
        $data['page_class'] = "kategori_artikel";
        $data['sub_panel'] = "";
        $data['page_management'] = $this->PMM->get_all_data();
        $data['kategori'] = $this->KAM->get_all_kategori();
        return view('admin/page_kategori_artikel', $data);
    }

    public function artikel()
    {
        $data['title'] = "Artikel";
        $data['page_class'] = "artikel";
        $data['sub_panel'] = "";
        $data['page_management'] = $this->PMM->get_all_data();
        $data['artikel'] = $this->ARM->get_all_artikel();
        for ($i = 0; $i < count($data['artikel']); $i++) {
            $autor = $this->UM->get_user_by_username($data['artikel'][$i]->artikel_create_by);
            $data['artikel'][$i]->autor = $autor[0]->user_name;
        }
        return view('admin/page_artikel', $data);
        // echo json_encode($data);
    }

    public function add_artikel()
    {
        $data['title'] = "Artikel";
        $data['page_class'] = "artikel";
        $data['sub_panel'] = "Tambah Artikel";
        $data['page_management'] = $this->PMM->get_all_data();
        $data['kategori'] = $this->KAM->get_all_kategori();
        $data['artikel_id'] = create_guid();
        $data['rand'] = "img-" . rand(1, 99999999);
        return view('admin/page_artikel_add', $data);
    }


    public function edit_artikel()
    {
        $id = decrypt_url($this->request->uri->getSegment(4));
        $data['title'] = "Artikel";
        $data['page_class'] = "artikel";
        $data['sub_panel'] = "Edit Artikel";
        $data['page_management'] = $this->PMM->get_all_data();
        $data['kategori'] = $this->KAM->get_all_kategori();
        $data['token_edit'] = get_token(30);
        $data['artikel'] = $this->ARM->get_artikel_by_id($id);
        for ($i = 0; $i < count($data['artikel']); $i++) {
            $autor = $this->UM->get_user_by_username($data['artikel'][$i]->artikel_create_by);
            $data['artikel'][$i]->autor = $autor[0]->user_name;
        }
        return view('admin/page_artikel_edit', $data);
        // echo json_encode($data);
    }

    public function log()
    {
        $data['title'] = "Log System";
        $data['page_class'] = "system_log";
        $data['sub_panel'] = "";
        $data['page_management'] = $this->PMM->get_all_data();
        $data['log_100'] = $this->LM->get_100_log($_SESSION['user_username']);
        return view('admin/page_log', $data);
    }

    public function laporan_pangan()
    {
        $data['pasar'] = $this->PM->select('pasar_nama, pasar_id')->where('pasar_status', '1')->get()->getResult();
        $data['title'] = "Laporan Komoditas Pangan";
        $data['page_class'] = "laporan_pangan";
        $data['sub_panel'] = "";
        $data['page_management'] = $this->PMM->get_all_data();

        if (isset($_GET['pasar']) && isset($_GET['awal']) && isset($_GET['akhir'])) {
            $pasar = decrypt_url($_GET['pasar']);
            $grup = $this->GKM->select('grup_komoditas_id, grup_komoditas_nama')->where('grup_komoditas_tipe', 'Barang Pangan')->where('grup_komoditas_status', '1')->get()->getResult();
            $total = 0;
            foreach ($grup as $row) {
                $komoditas = $this->KM->select('komoditas_id')->where('komoditas_grup', $row->grup_komoditas_id)->where('komoditas_status', '1')->get()->getResult();

                foreach ($komoditas as $r) {
                    $transaksi = $this->TM
                        ->select('komoditas_nama, komoditas_satuan,  pedagang_nama, transaksi_harga, transaksi_het, pedagang_id')
                        ->join('tb_pedagang', 'tb_transaksi.transaksi_pedagang = tb_pedagang.pedagang_id')
                        ->join('tb_komoditas', 'tb_transaksi.transaksi_komoditas = tb_komoditas.komoditas_id')
                        ->join('tb_grup_komoditas', 'tb_komoditas.komoditas_grup = tb_grup_komoditas.grup_komoditas_id')
                        ->where('transaksi_pasar', $pasar)
                        ->where('transaksi_komoditas', $r->komoditas_id)
                        ->where('transaksi_tanggal', $_GET['awal'])
                        ->where('transaksi_status', '1')
                        ->where('komoditas_status', '1')
                        ->where('grup_komoditas_status', '1')
                        ->get()->getResult();
                    $no = 1;

                    foreach ($transaksi as $tr) {
                        $total = $total + 1;
                        $tr->no = $no++;
                        $transaksi2 = $this->TM
                            ->select('transaksi_harga')
                            ->where('transaksi_komoditas', $r->komoditas_id)
                            ->where('transaksi_pedagang', $tr->pedagang_id)
                            ->where('transaksi_pasar', $pasar)
                            ->where('transaksi_tanggal', $_GET['akhir'])
                            ->where('transaksi_status', '1')
                            ->get()->getResult();

                        if (count($transaksi2) > 0) {
                            $tr->transaksi_harga2 = $transaksi2[0]->transaksi_harga;
                            if ($tr->transaksi_harga != $tr->transaksi_harga2 && is_numeric($tr->transaksi_harga) && is_numeric($tr->transaksi_harga2)) {
                                $tr->perubahan = abs($tr->transaksi_harga - $tr->transaksi_harga2);
                                if ($tr->perubahan != 0 && $tr->transaksi_harga != 0) {
                                    $tr->persen = round((($tr->perubahan / $tr->transaksi_harga) * 100), 2);
                                } else {
                                    $tr->persen = "";
                                }
                            } else {
                                $tr->perubahan = "-";
                                $tr->persen = "";
                            }
                            if ($tr->transaksi_harga > $tr->transaksi_harga2) {
                                $tr->keterangan = 'Turun';
                            } elseif ($tr->transaksi_harga < $tr->transaksi_harga2) {
                                $tr->keterangan = 'Naik';
                            } elseif ($tr->transaksi_harga == $tr->transaksi_harga2) {
                                $tr->keterangan = 'Stabil';
                            }
                        } else {
                            $tr->transaksi_harga2 = "";
                            $tr->perubahan = "-";
                            $tr->persen = "";
                            $tr->keterangan = "";
                        }
                    }
                    $r->transaksi = $transaksi;
                }

                $row->komoditas = $komoditas;
            }
            $data['laporan'] = $grup;
            $data['total'] = $total;
            // echo json_encode($data);
        }

        // echo json_encode($data);
        return view('admin/page_laporan_komoditas', $data);
    }

    public function laporan_pangan_tanggal()
    {
        $data['pasar'] = $this->PM->select('pasar_nama, pasar_id')->where('pasar_status', '1')->get()->getResult();
        $data['title'] = "Laporan Komoditas Pangan";
        $data['page_class'] = "laporan_pangan_tanggal";
        $data['sub_panel'] = "";
        $data['page_management'] = $this->PMM->get_all_data();

        if (isset($_GET['pasar']) && isset($_GET['awal']) && isset($_GET['akhir'])) {
            $pasar = decrypt_url($_GET['pasar']);
            $awal = date_create($_GET['awal']);
            $akhir = date_create($_GET['akhir']);
            $selisih = $akhir->diff($awal)->days + 1;

            $data['tanggal'] = array();
            for ($i = 0; $i < $selisih; $i++) {
                $tanggal = date('Y-m-d', strtotime($_GET['awal'] . ' + ' . $i . ' days'));
                array_push($data['tanggal'], $tanggal);
            }

            $komoditas = $this->KM->select('komoditas_id,komoditas_nama, komoditas_satuan')->join('tb_grup_komoditas', 'tb_komoditas.komoditas_grup = tb_grup_komoditas.grup_komoditas_id')->where('komoditas_status', '1')->where('grup_komoditas_status', '1')->orderBy('komoditas_grup', 'ASC')->get()->getResult();
            foreach ($komoditas as $row) {
                $harga = array();
                for ($i = 0; $i < $selisih; $i++) {
                    $tanggal_cek = date('Y-m-d', strtotime($_GET['awal'] . ' + ' . $i . ' days'));
                    $transaksi = $this->TM->select('transaksi_harga')->where('transaksi_komoditas', $row->komoditas_id)->where('transaksi_pasar', $pasar)->where('transaksi_status', '1')->where('transaksi_tanggal', $tanggal_cek)->orderBy('transaksi_tanggal', 'ASC')->get()->getResult();

                    if (count($transaksi) > 0) {
                        $data_transaksi = array();
                        foreach ($transaksi as $key) {
                            if ($key->transaksi_harga != 0 && $key->transaksi_harga != null) {
                                array_push($data_transaksi, $key->transaksi_harga);
                            }
                        }
                        $counts = array_count_values($data_transaksi);
                        $get_populer_value = array_slice($counts, 0, true);
                        if (count($get_populer_value)) {
                            $populer = $get_populer_value[0];
                            $status = 0;
                            foreach ($counts as $key) {
                                if ($key ==  $populer) {
                                    $status = $status + 1;
                                }
                            }
                            if ($status == 1) {
                                $values = array_count_values($data_transaksi);
                                arsort($values);
                                $dominan = array_slice(array_keys($values), 0, true);
                                $hasil = $dominan[0];
                            } else {
                                $hasil = round(array_sum($data_transaksi) / count($data_transaksi));
                            }
                        } else {
                            $hasil = "-";
                        }
                    } else {
                        $hasil = '-';
                    }
                    array_push($harga, $hasil);
                }
                $row->harga = $harga;
            }

            $data['komoditas'] = $komoditas;
        }

        // echo json_encode($data);
        return view('admin/page_laporan_komoditas_tanggal', $data);
    }

    public function laporan_penting()
    {
        $data['title'] = "Laporan Barang Penting";
        $data['page_class'] = "laporan_penting";
        $data['sub_panel'] = "";
        $data['page_management'] = $this->PMM->get_all_data();

        if (isset($_GET['tahun']) && isset($_GET['bulan'])) {
            $transaksi = $this->TBPM->select('transaksi_tanggal')->groupBy('transaksi_tanggal')->where('MONTH(transaksi_tanggal)', $_GET['bulan'])->where('YEAR(transaksi_tanggal)', $_GET['tahun'])->where('transaksi_status', '1')->get()->getResult();
            $data['tanggal'] = $transaksi;
            $komoditas = $this->BPM
                ->select('barang_nama, barang_satuan, barang_id')
                ->join('tb_grup_komoditas', 'tb_barang_penting.barang_grup = tb_grup_komoditas.grup_komoditas_id')
                ->where('barang_status', '1')
                ->where('grup_komoditas_status', '1')
                ->get()->getResult();

            foreach ($komoditas as $row) {
                $distributor = $this->RBPM
                    ->select('distributor_nama, distributor_id')
                    ->join('tb_distributor_barang_penting', 'tb_relasi_barang_penting.relasi_distributor = tb_distributor_barang_penting.distributor_id')
                    ->where('relasi_status', '1')
                    ->where('relasi_barang', $row->barang_id)
                    ->get()->getResult();
                if (count($distributor) > 0) {
                    $row->distributor = $distributor[0]->distributor_nama;
                    $row->distributor_id = $distributor[0]->distributor_id;
                } else {
                    $row->distributor = "";
                    $row->distributor_id = "";
                }

                for ($i = 0; $i < count($transaksi); $i++) {
                    $harga = $this->TBPM
                        ->select('transaksi_harga')
                        ->where('transaksi_tanggal', $transaksi[$i]->transaksi_tanggal)
                        ->where('transaksi_barang', $row->barang_id)
                        ->where('transaksi_distributor', $row->distributor_id)
                        ->get()->getResult();

                    if (count($harga) > 0) {
                        $row->$i = $harga[0]->transaksi_harga;
                    } else {
                        $row->$i = "-";
                    }
                }
            }

            $data['komoditas'] = $komoditas;
        }


        // echo json_encode($data);
        return view('admin/page_laporan_penting', $data);
    }

    public function laporan_lainnya()
    {
        $data['title'] = "Laporan Barang Penting Lainnya";
        $data['page_class'] = "laporan_lainnya";
        $data['sub_panel'] = "";
        $data['page_management'] = $this->PMM->get_all_data();

        if (isset($_GET['tahun']) && isset($_GET['bulan'])) {
            $transaksi = $this->TBLM->select('transaksi_tanggal')->groupBy('transaksi_tanggal')->where('MONTH(transaksi_tanggal)', $_GET['bulan'])->where('YEAR(transaksi_tanggal)', $_GET['tahun'])->where('transaksi_status', '1')->get()->getResult();
            $data['tanggal'] = $transaksi;
            $komoditas = $this->BLM
                ->select('barang_nama, barang_satuan, barang_id')
                ->join('tb_grup_komoditas', 'tb_barang_lainnya.barang_grup = tb_grup_komoditas.grup_komoditas_id')
                ->where('barang_status', '1')
                ->where('grup_komoditas_status', '1')
                ->get()->getResult();

            foreach ($komoditas as $row) {
                $distributor = $this->RBLM
                    ->select('distributor_nama, distributor_id')
                    ->join('tb_distributor_barang_lainnya', 'tb_relasi_barang_lainnya.relasi_distributor = tb_distributor_barang_lainnya.distributor_id')
                    ->where('relasi_status', '1')
                    ->where('relasi_barang', $row->barang_id)
                    ->get()->getResult();
                if (count($distributor) > 0) {
                    $row->distributor = $distributor[0]->distributor_nama;
                    $row->distributor_id = $distributor[0]->distributor_id;
                } else {
                    $row->distributor = "";
                    $row->distributor_id = "";
                }

                for ($i = 0; $i < count($transaksi); $i++) {
                    $harga = $this->TBLM
                        ->select('transaksi_harga')
                        ->where('transaksi_tanggal', $transaksi[$i]->transaksi_tanggal)
                        ->where('transaksi_barang', $row->barang_id)
                        ->where('transaksi_distributor', $row->distributor_id)
                        ->get()->getResult();

                    if (count($harga) > 0 && count($distributor) > 0) {
                        $row->$i = $harga[0]->transaksi_harga;
                    } else {
                        $row->$i = "-";
                    }
                }
            }

            $data['komoditas'] = $komoditas;
        }


        // echo json_encode($data);
        return view('admin/page_laporan_lainnya', $data);
    }

    public function laporan_stok()
    {
        $data['title'] = "Laporan Stok Komoditas";
        $data['page_class'] = "laporan_stok";
        $data['sub_panel'] = "";
        $data['page_management'] = $this->PMM->get_all_data();
        $total = 0;
        if (isset($_GET['tahun']) && isset($_GET['bulan'])) {
            $distributor = $this->DSM
                ->select('distributor_id')
                ->where('distributor_status', '1')
                ->get()->getResult();

            foreach ($distributor as $row) {
                $barang = $this->RSM
                    ->select('distributor_nama, distributor_alamat, distributor_kontak, komoditas_nama, komoditas_id, komoditas_satuan')
                    ->join('tb_komoditas_stok', 'tb_relasi_stok.relasi_barang = tb_komoditas_stok.komoditas_id')
                    ->join('tb_distributor_stok', 'tb_relasi_stok.relasi_distributor = tb_distributor_stok.distributor_id')
                    ->where('relasi_distributor', $row->distributor_id)
                    ->where('komoditas_status', '1')
                    ->where('relasi_status', '1')
                    ->get()->getResult();

                $no = 1;
                foreach ($barang as $r) {
                    $r->no = $no++;
                    $transaksi = $this->TSM
                        ->select('transaksi_stok,transaksi_ketahanan, transaksi_pemasok, transaksi_tanggal')
                        ->where('transaksi_distributor', $row->distributor_id)
                        ->where('transaksi_barang', $r->komoditas_id)
                        ->where('MONTH(transaksi_tanggal)', $_GET['bulan'])
                        ->where('YEAR(transaksi_tanggal)', $_GET['tahun'])
                        ->where('transaksi_status', '1')
                        ->orderBy('transaksi_tanggal', 'DESC')
                        ->limit(1)
                        ->get()->getResult();
                    if (count($transaksi)) {
                        $total = $total + 1;
                        $r->tanggal = tgl_indo($transaksi[0]->transaksi_tanggal);
                        $r->stok = $transaksi[0]->transaksi_stok;
                        $r->ketahanan = $transaksi[0]->transaksi_ketahanan;
                        $r->pemasok = $transaksi[0]->transaksi_pemasok;
                    } else {
                        $r->stok = "-";
                        $r->ketahanan = "-";
                        $r->pemasok = "-";
                        $r->tanggal = "-";
                    }
                }

                $row->komoditas = $barang;
            }
            $data['laporan'] = $distributor;
        }

        $data['total'] = $total;
        // echo json_encode($data);
        return view('admin/page_laporan_stok', $data);
    }

    public function kritik()
    {
        $data['title'] = "Kritik dan Saran";
        $data['page_class'] = "kritik";
        $data['sub_panel'] = "";
        $data['page_management'] = $this->PMM->get_all_data();
        $data['kritik'] = $this->TPM->select('*')->orderBy('tanggapan_create_time', 'DESC')->get()->getResult();
        return view('admin/page_kritik', $data);
    }
}
