<?php

namespace App\Controllers;

use App\Models\Area_model;
use App\Models\Grup_komoditas_model;
use App\Models\Komoditas_model;
use App\Models\Pasar_model;
use App\Models\Transaksi_model;

class Action extends BaseController
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

        date_default_timezone_set("Asia/Jakarta");
    }


    // public function get_avg_kecamatan_by_komoditas()
    // {
    //     $date = $this->request->getGet('update');
    //     $komoditas = decrypt_url($this->request->getGet('komoditas'));
    //     $result = $this->AM->get_all_kecamatan();
    //     for ($i = 0; $i < count($result); $i++) {
    //         $avg = $this->TM->get_avg_by_kecamatan($result[$i]->code, $komoditas, $date);
    //         if ($avg[0]->rata_harga != null) {
    //             $result[$i]->avg = $avg[0]->rata_harga;
    //             $cek = $this->TM->get_last_avg_by_kecamatan_komoditas($result[$i]->code, $komoditas);
    //             $result[$i]->cek = $cek;
    //             if (count($cek) > 1) {
    //                 $result[$i]->avg_prev = $cek[1]->rata_harga;
    //             } else {
    //                 $result[$i]->avg_prev = $cek[0]->rata_harga;
    //             }


    //             if ($result[$i]->avg_prev > $result[$i]->avg) {
    //                 $result[$i]->status = "Harga Turun";
    //             } elseif ($result[$i]->avg_prev < $result[$i]->avg) {
    //                 $result[$i]->status = "Harga Naik";
    //             } else {
    //                 $result[$i]->status = "Harga Stabil";
    //             }
    //         } else {
    //             $result[$i]->avg = "0";
    //         }
    //         $result[$i]->satuan = $avg[0]->komoditas_satuan;
    //     }
    //     $data['data_result'] = $result;
    //     $detail = $this->KM->get_komoditas_by_id($komoditas);
    //     $data['komoditas'] = $detail;
    //     echo json_encode($data);
    //     exit;
    // }

    //cek

    public function get_transaksi_by_pasar()
    {
        $id = decrypt_url($this->request->getGet('pasar'));
        $date = $this->request->getGet('tanggal');
        if ($date == "") {
            $last_update = $this->TM->get_last_transaksi_by_pasar($id);
            $date = $last_update[0]->transaksi_tanggal;
        } else {
            $date = date('Y-m-d', strtotime($date));
        }
        $data['date_update'] = date('d-M-Y', strtotime($date));
        $result = $this->TM->get_transaksi_by_pasar_date($id, $date);
        for ($i = 0; $i < count($result); $i++) {
            $komoditas = $result[$i]->transaksi_komoditas;
            $get_transaksi = $this->TM->get_last_transaksi_by_komoditas_pasar_date($komoditas, $id, $date);
            if (count($get_transaksi) > 1) {
                $id_prev = $get_transaksi[1]->transaksi_id;
                $result[$i]->id_prev = $id_prev;
                $result[$i]->harga_prev = $this->TM->get_transaksi_by_id($id_prev)[0]->transaksi_harga;
            } else {
                $result[$i]->harga_prev = $result[$i]->transaksi_harga;
            }

            if ($result[$i]->harga_prev > $result[$i]->transaksi_harga) {
                $result[$i]->status = "Harga Turun";
                $result[$i]->selisih = rupiah($result[$i]->harga_prev - $result[$i]->transaksi_harga);
            } elseif ($result[$i]->harga_prev < $result[$i]->transaksi_harga) {
                $result[$i]->status = "Harga Naik";
                $result[$i]->selisih = rupiah($result[$i]->transaksi_harga - $result[$i]->harga_prev);
            } else {
                $result[$i]->status = "Harga Stabil";
                $result[$i]->selisih = "";
            }
        }
        $data['data_transaksi'] = $result;
        echo json_encode($data);
        exit;
    }

    // public function get_data_grafik_detail_komoditas()
    // {
    //     $tipe = $this->request->uri->getSegment(3);
    //     $komoditas = decrypt_url($this->request->uri->getSegment(4));
    //     $kecamatan = $this->request->uri->getSegment(5);
    //     $pasar = decrypt_url($this->request->uri->getSegment(6));
    //     $bulan = bulan_convert($this->request->uri->getSegment(7));
    //     $tahun = $this->request->uri->getSegment(8);

    //     if ($tipe == 'inhil') {
    //         $query = $this->TM->get_transaksi_grafik_inhil($bulan, $tahun, $komoditas);
    //     } elseif ($tipe == 'kecamatan') {
    //         $query = $this->TM->get_transaksi_grafik_kecamatan($kecamatan, $bulan, $tahun, $komoditas);
    //     } else {
    //         $query = $this->TM->get_transaksi_grafik_pasar($pasar, $bulan, $tahun, $komoditas);
    //     }
    //     $result['data_grafik'] = $query;
    //     for ($i = 0; $i < count($query); $i++) {
    //         $result['data_grafik'][$i]->transaksi_tanggal =  tgl_indo($query[$i]->transaksi_tanggal);
    //     }
    //     echo json_encode($result);
    //     exit;
    // }

    public function get_statistik_wilayah()
    {
        $tipe = $this->request->getGet('tipe');
        $kecamatan = $this->request->getGet('kecamatan');
        $pasar = decrypt_url($this->request->getGet('pasar'));
        $bulan = bulan_convert($this->request->getGet('bulan'));
        $tahun = $this->request->getGet('tahun');
        $date = $tahun . "-11" . $bulan . "-01";
        $last = date('t', strtotime($date));
        if ($bulan == date('m') && $tahun == date('Y')) {
            $last = date('d');
        }

        $komoditas = $this->KM->get_all_komoditas();
        for ($i = 0; $i < count($komoditas); $i++) {
            $harga_komoditas = array();
            $total = 0;
            if ($tipe == "pasar") {
                for ($x = 1; $x <= $last; $x++) {
                    $tanggal = $tahun . "-" . $bulan . "-" . tanggal_convert($x);
                    $harga_query = $this->TM->get_harga_by_komoditas_pasar_date($komoditas[$i]->komoditas_id, $pasar, $tanggal);
                    if (count($harga_query) > 0) {
                        $harga = $harga_query[0]->transaksi_harga;
                        array_push($harga_komoditas, $harga);
                        $total = '1';
                    } else {
                        array_push($harga_komoditas, "0");
                    }
                }
            }

            if ($tipe == "kecamatan") {
                for ($x = 1; $x <= $last; $x++) {
                    $tanggal = $tahun . "-" . $bulan . "-" . tanggal_convert($x);
                    $harga_query = $this->TM->get_avg_by_kecamatan($kecamatan, $komoditas[$i]->komoditas_id, $tanggal);
                    $harga = $harga_query[0]->rata_harga;
                    if ($harga != null) {
                        array_push($harga_komoditas, $harga);
                        $total = '1';
                    } else {
                        array_push($harga_komoditas, "0");
                    }
                }
            }

            $komoditas[$i]->harga = $harga_komoditas;
            if ($total != 0) {
                $harga_filter = array_filter($komoditas[$i]->harga, "zero_filter");
                $min = min($harga_filter);
                $rata = array_sum($harga_filter) / count($harga_filter);
            } else {
                $rata = 0;
                $min = 0;
            }
            $komoditas[$i]->min_harga = $min;
            $komoditas[$i]->max_harga = max($komoditas[$i]->harga);
            $komoditas[$i]->rata = round($rata, 0);
        }

        $result['last_date'] = $last;
        $result['komoditas'] = $komoditas;

        echo json_encode($result);
        exit();
    }

    public function get_statistik_komoditas()
    {
        $komoditas = decrypt_url($this->request->getGet('komoditas'));
        $bulan = bulan_convert($this->request->getGet('bulan'));
        $tahun = $this->request->getGet('tahun');
        $date = $tahun . "-11" . $bulan . "-01";
        $last = date('t', strtotime($date));
        if ($bulan == date('m') && $tahun == date('Y')) {
            $last = date('d');
        }

        $pasar = $this->PM->get_all_pasar();
        for ($i = 0; $i < count($pasar); $i++) {
            $harga_komoditas = array();
            $total = 0;
            for ($x = 1; $x <= $last; $x++) {
                $tanggal = $tahun . "-" . $bulan . "-" . tanggal_convert($x);
                $harga_query = $this->TM->get_harga_by_komoditas_pasar_date($komoditas, $pasar[$i]->pasar_id, $tanggal);
                if (count($harga_query) > 0) {
                    $harga = $harga_query[0]->transaksi_harga;
                    array_push($harga_komoditas, $harga);
                    $total = '1';
                } else {
                    array_push($harga_komoditas, "0");
                }
            }

            $pasar[$i]->harga = $harga_komoditas;
            if ($total != 0) {
                $harga_filter = array_filter($pasar[$i]->harga, "zero_filter");
                $min = min($harga_filter);
                $rata = array_sum($harga_filter) / count($harga_filter);
            } else {
                $rata = 0;
                $min = 0;
            }
            $pasar[$i]->min_harga = $min;
            $pasar[$i]->max_harga = max($pasar[$i]->harga);
            $pasar[$i]->rata = round($rata, 0);
        }

        $result['last_date'] = $last;
        $result['pasar'] = $pasar;

        echo json_encode($result);
        exit();
    }
}
