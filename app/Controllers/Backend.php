<?php

namespace App\Controllers;

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
use App\Models\Transaksi_barang_lainnya_model;
use App\Models\Transaksi_barang_penting_model;
use App\Models\Transaksi_model;
use App\Models\Transaksi_stok_model;
use App\Models\User_level_model;
use App\Models\User_model;

class Backend extends BaseController
{

    function __construct()
    {
        $this->session = \Config\Services::session();
        $this->request = \Config\Services::request();
        $this->db = \Config\Database::connect();

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

        date_default_timezone_set("Asia/Jakarta");
    }

    public function index()
    {
        // $ar1[] = array("red" => 2, "green", "yellow", "blue");
        // $ar1[] = array("green", "yellow", "brown", "red", "white", "yellow");
        // $ar1[] = array("red", "green", "brown", "blue", "black", "yellow");
        // #$ar1= array("red","green","brown","blue","black","red","green"); // Possible with one or multiple Array



        // function array_icount_values($arr, $lower = true)
        // {
        //     $arr2 = array();
        //     if (!is_array($arr['0'])) {
        //         $arr = array($arr);
        //     }
        //     foreach ($arr as $k => $v) {
        //         foreach ($v as $v2) {
        //             if ($lower == true) {
        //                 $v2 = strtolower($v2);
        //             }
        //             if (!isset($arr2[$v2])) {
        //                 $arr2[$v2] = 1;
        //             } else {
        //                 $arr2[$v2]++;
        //             }
        //         }
        //     }
        //     return $arr2;
        // }

        // $res = array_icount_values($ar1);
        // echo json_encode($ar1);
        // $tes['pasar'] = encrypt_url('18');
        // $tes['komoditas'] = encrypt_url('1');
        // $tes['pedagang'] = encrypt_url('1');
        // $tes['user'] = encrypt_url('B6D50186-5717-4499-89E4-9EDD3DEE3233');
        // echo json_encode($tes);
        // return view("welcome_message");

        $data['role'] = encrypt_url('3');
        $data['pasar'] = encrypt_url('1');
        echo json_encode($data);
    }

    private function __addLog($modul, $aksi, $tipe, $user)
    {
        $data = array(
            "log_id" => null,
            "log_user" => $user,
            "log_time" => date("Y-m-d H:i:s"),
            "log_activity" => $aksi,
            "log_modul" => $modul,
            "log_type" => $tipe,
            "log_ip" => $_SERVER['REMOTE_ADDR'],
            "log_browser" => 'Aplikasi Android',
            "log_so" => 'Android',
        );

        $this->LM->add_new_log($data);
    }

    public function login()
    {
        $username = $this->request->getPost("username");
        $password = MD5($this->request->getPost("password"));

        $user = $this->UM->get_user_by_username($username);
        if (count($user)) {
            if (password_verify($password, $user[0]->user_password)) {
                if ($user[0]->user_status == "1" && $user[0]->user_role != "4") {
                    $this->__addLog('Login', 'login', 'Insert', $username);
                    if ($user[0]->user_role == '3' && $user[0]->user_fk != "") {
                        $pasar = $this->PM->select("pasar_nama, pasar_status")->where(["pasar_id" => $user[0]->user_fk])->get()->getResult();
                        if ($pasar[0]->pasar_status == '0') {
                            $response["status"] = "3";
                            $response["msg"] = "Pasar anda sudah tidak aktif!";
                            echo json_encode($response);
                            exit;
                        }
                        $foreign_name = $pasar[0]->pasar_nama;
                        $foreign = encrypt_url($user[0]->user_fk);
                    } else {
                        $foreign_name = null;
                        $foreign = "";
                    }
                    $response["status"] = "1";
                    $response["msg"] = "Berhasil Login";
                    $response["data"] = [
                        "user_id" => encrypt_url($user[0]->user_id),
                        "user_nama" => $user[0]->user_name,
                        "user_email" => $user[0]->user_email,
                        "user_username" => $user[0]->user_username,
                        "user_role" => $user[0]->user_role,
                        "user_role_nama" => $user[0]->user_level_name,
                        "user_role_foreign" => $foreign,
                        "user_role_foreign_name" => $foreign_name
                    ];
                    $update = [
                        "user_last_login" => date('Y-m-d H:i:s'),
                        "user_id" => $user[0]->user_id
                    ];
                    $this->UM->edit_user($update);
                } else {
                    $response["status"] = "3";
                    $response["msg"] = "Akun anda tidak aktif !";
                }
            } else {
                $response["status"] = "2";
                $response["msg"] = "Password yang anda masukkan salah!";
            }
        } else {
            $response["status"] = "0";
            $response["msg"] = "Username tidak terdaftar!";
        }

        echo json_encode($response);
        exit;
    }

    public function dashboard_info()
    {

        $id = ($this->request->getGet('id'));
        $date = date('Y-m-d');

        if ($id == "") {
            $response['status'] = 0;
            $response['msg'] = "Error";
            $response['data'] = "";
            $response['user'] = "";
        } else {
            $id = decrypt_url($id);
            $user = $this->UM->select('user_id,user_username, user_email, user_name, user_role, user_level_name, user_create_time, user_status, user_fk, user_image')->join('tb_user_level', 'tb_user.user_role = tb_user_level.user_level_id')->where('user_id', $id)->get()->getResult();

            if (count($user) == 0) {
                $response['status'] = 99;
                $response['msg'] = "Anda harus login terlebih dahulu";
                $response['data'] = (object) [];
                $response['user'] = (object) [];
            } else {
                if ($user[0]->user_status != '1') {
                    $response['status'] = 99;
                    $response['msg'] = "Sistem mendeteksi akun anda sudah tidak aktif";
                    $response['data'] = (object) [];
                    $response['user'] = (object) [];
                } else {
                    $role = $user[0]->user_role;
                    if ($role != '3') {
                        $jualan = $this->JM
                            ->select('jualan_id')
                            ->join('tb_komoditas', 'tb_jualan.jualan_komoditas = tb_komoditas.komoditas_id')
                            ->join('tb_grup_komoditas', 'tb_komoditas.komoditas_grup = tb_grup_komoditas.grup_komoditas_id')
                            ->join('tb_pedagang', 'tb_jualan.jualan_pedagang = tb_pedagang.pedagang_id')
                            ->where('jualan_status', '1')
                            ->where('grup_komoditas_status', '1')
                            ->where('komoditas_status', '1')
                            ->where('pedagang_status', '1')
                            ->countAllResults();
                        $tanggal = date('Y-m-d');
                        $transaksi = $transaksi = $this->TM
                            ->select('transaksi_id')
                            ->join('tb_komoditas', 'tb_transaksi.transaksi_komoditas = tb_komoditas.komoditas_id')
                            ->join('tb_grup_komoditas', 'tb_komoditas.komoditas_grup = tb_grup_komoditas.grup_komoditas_id')
                            ->join('tb_pedagang', 'tb_transaksi.transaksi_pedagang = tb_pedagang.pedagang_id')
                            ->join('tb_jualan', 'tb_pedagang.pedagang_id = tb_jualan.jualan_pedagang')
                            ->join('tb_pasar', 'tb_transaksi.transaksi_pasar = tb_pasar.pasar_id')
                            ->where('transaksi_status', '1')
                            ->where('komoditas_status', '1')
                            ->where('grup_komoditas_status', '1')
                            ->where('jualan_status', '1')
                            ->where('pedagang_status', '1')
                            ->where('pasar_status', '1')
                            ->where('transaksi_tanggal', $tanggal)
                            ->groupBy('transaksi_id')
                            ->countAllResults();
                        $kosong = $jualan - $transaksi;
                        if ($transaksi == 0 || $jualan == 0) {
                            $persen = 0;
                        } else {
                            $persen = ($transaksi / $jualan) * 100;
                        }

                        $data['jualan'] = $jualan;
                        $data['harga_input'] = $transaksi;
                        $data['harga_kosong'] = $kosong;
                        $data['persen_transaksi'] = round($persen, 0);


                        $foreign_name = "";
                        $foreign = "";

                        $datauser["user_id"] = encrypt_url($user[0]->user_id);
                        $datauser["user_nama"] = $user[0]->user_name;
                        $datauser["user_image"] = $user[0]->user_image;
                        $datauser["user_email"] = $user[0]->user_email;
                        $datauser["user_username"] = $user[0]->user_username;
                        $datauser["user_role"] = $user[0]->user_role;
                        $datauser["user_role_nama"] = $user[0]->user_level_name;
                        $datauser["user_role_foreign"] = $foreign;
                        $datauser["user_role_foreign_name"] = $foreign_name;

                        $data['komoditas_pangan'] = $this->KM->count_komoditas_by_filter("", "null");
                        $data['barang_penting'] = $this->BPM->count_barang_by_filter("", "null");
                        $data['barang_penting_lainnya'] =  $this->BLM->count_barang_by_filter("", "null");
                        $data['komoditas_stok'] = $this->KSM->count_komoditas_by_filter("", "null");

                        $response['status'] = 1;
                        $response['msg'] = "Data ditemukan";
                        $response['data'] = $data;
                        $response['user'] = $datauser;
                    } elseif ($role == '3') {
                        $pasar = $user[0]->user_fk;
                        $cek_pasar = $this->PM->select('pasar_status')->where('pasar_id', $pasar)->where('pasar_status', '1')->get()->getResult();
                        if (count($cek_pasar) == 0) {
                            $response['status'] = 99;
                            $response['msg'] = "Pasar sudah tidak aktif!!";
                            $response['data'] = (object) [];
                            $response['user'] = (object) [];
                        } else {
                            $jualan = $this->JM
                                ->select('jualan_id')
                                ->join('tb_komoditas', 'tb_jualan.jualan_komoditas = tb_komoditas.komoditas_id')
                                ->join('tb_grup_komoditas', 'tb_komoditas.komoditas_grup = tb_grup_komoditas.grup_komoditas_id')
                                ->join('tb_pedagang', 'tb_jualan.jualan_pedagang = tb_pedagang.pedagang_id')
                                ->where('pedagang_pasar', $pasar)
                                ->where('jualan_status', '1')
                                ->where('grup_komoditas_status', '1')
                                ->where('komoditas_status', '1')
                                ->where('pedagang_status', '1')
                                ->countAllResults();
                            $tanggal = date('Y-m-d');
                            $transaksi = $this->TM
                                ->select('transaksi_id')
                                ->join('tb_komoditas', 'tb_transaksi.transaksi_komoditas = tb_komoditas.komoditas_id')
                                ->join('tb_grup_komoditas', 'tb_komoditas.komoditas_grup = tb_grup_komoditas.grup_komoditas_id')
                                ->join('tb_pedagang', 'tb_transaksi.transaksi_pedagang = tb_pedagang.pedagang_id')
                                ->join('tb_jualan', 'tb_pedagang.pedagang_id = tb_jualan.jualan_pedagang')
                                ->join('tb_pasar', 'tb_transaksi.transaksi_pasar = tb_pasar.pasar_id')
                                ->where('transaksi_status', '1')
                                ->where('komoditas_status', '1')
                                ->where('grup_komoditas_status', '1')
                                ->where('jualan_status', '1')
                                ->where('pedagang_status', '1')
                                ->where('pasar_status', '1')
                                ->where('transaksi_pasar', $pasar)
                                ->where('transaksi_tanggal', $tanggal)
                                ->groupBy('transaksi_id')
                                ->countAllResults();
                            $kosong = $jualan - $transaksi;
                            if ($jualan == 0) {
                                $persen = 0;
                            } else {
                                $persen = ($transaksi / $jualan) * 100;
                            }


                            $data['jualan'] = $jualan;
                            $data['harga_input'] = $transaksi;
                            $data['harga_kosong'] = $kosong;
                            $data['persen_transaksi'] = round($persen, 0);

                            if ($user[0]->user_fk != null || $user[0]->user_fk != "") {
                                $pasar = $this->PM->select('pasar_nama')->where('pasar_id', $user[0]->user_fk)->get()->getResult();
                                $foreign_name = $pasar[0]->pasar_nama;
                            } else {
                                $foreign_name = "";
                            }

                            $datauser["user_id"] = encrypt_url($user[0]->user_id);
                            $datauser["user_nama"] = $user[0]->user_name;
                            $datauser["user_image"] = $user[0]->user_image;
                            $datauser["user_email"] = $user[0]->user_email;
                            $datauser["user_username"] = $user[0]->user_username;
                            $datauser["user_role"] = $user[0]->user_role;
                            $datauser["user_role_nama"] = $user[0]->user_level_name;
                            $datauser["user_role_foreign"] = encrypt_url($user[0]->user_fk);
                            $datauser["user_role_foreign_name"] = $foreign_name;

                            $response['status'] = 1;
                            $response['msg'] = "Data ditemukan";
                            $response['data'] = $data;
                            $response['user'] = $datauser;
                        }
                    }
                }
            }
        }
        echo json_encode($response);
        exit;
    }

    public function detail_user()
    {
        $id = decrypt_url($this->request->getGet('id'));
        $user = $this->UM->select('user_id,user_username, user_email, user_name, user_role, user_level_name, user_create_time, user_status, user_fk, user_image')->join('tb_user_level', 'tb_user.user_role = tb_user_level.user_level_id')->where('user_id', $id)->get()->getResult();
        if (count($user) > 0) {
            if ($user[0]->user_fk != null || $user[0]->user_fk != "") {
                $pasar = $this->PM->select('pasar_nama')->where('pasar_id', $user[0]->user_fk)->get()->getResult();
                $foreign_name = $pasar[0]->pasar_nama;
            } else {
                $foreign_name = "";
            }

            $datauser["user_id"] = encrypt_url($user[0]->user_id);
            $datauser["user_nama"] = $user[0]->user_name;
            $datauser["user_image"] = $user[0]->user_image;
            $datauser["user_email"] = $user[0]->user_email;
            $datauser["user_username"] = $user[0]->user_username;
            $datauser["user_role"] = $user[0]->user_role;
            $datauser["user_role_nama"] = $user[0]->user_level_name;
            $datauser["user_role_foreign"] = encrypt_url($user[0]->user_fk);
            $datauser["user_role_foreign_name"] = $foreign_name;

            $response['status'] = 1;
            $response['msg'] = "Data ditemukan";
            $response['data'] = "";
            $response['user'] = $datauser;
        } else {
            $response['status'] = 0;
            $response['msg'] = "Error";
            $response['data'] = "";
        }
        echo json_encode($response);
        exit;
    }

    public function get_data_pasar()
    {
        $page = $this->request->getGet("page");
        $limit = $this->request->getGet("limit");
        $item = $page * $limit;
        $keyword = $this->request->getGet("keyword");
        $pasar = $this->PM->get_pasar_by_filter($item, $keyword);
        if (count($pasar) > 0) {
            $response["status"] = 1;
            $response["msg"] = "Data ditemukan";
            $response["total_data"] = $this->PM->count_pasar_by_filter($keyword);
            $response["data_pasar"] = array();

            foreach ($pasar as $row) {

                $kec = $this->AM->get_area_by_code($row->pasar_kecamatan);
                $kel = $this->AM->get_area_by_code($row->pasar_kelurahan);
                $data["pasar_id"] = encrypt_url($row->pasar_id);
                $data["pasar_nama"] = $row->pasar_nama;
                $data["pasar_alamat"] = $row->pasar_alamat;
                $data["pasar_kecamatan_kode"] = $row->pasar_kecamatan;
                $data["pasar_kelurahan_kode"] = $row->pasar_kelurahan;
                $data["pasar_kecamatan"] = $kec[0]['name'];
                $data["pasar_kelurahan"] = $kel[0]['name'];
                array_push($response["data_pasar"], $data);
            }
        } else {
            $response["status"] = 0;
            $response["msg"] = "Data tidak ditemukan";
            $response["data_pasar"] = array();
        }
        echo json_encode($response);
        exit;
    }

    public function add_pasar()
    {
        $data['pasar_id'] = null;
        $data['pasar_nama'] = anti_injection($this->request->getPost('nama'));
        $data['pasar_alamat'] = anti_injection($this->request->getPost('alamat'));
        $data['pasar_kecamatan'] = anti_injection($this->request->getPost('kecamatan'));
        $data['pasar_kelurahan'] = anti_injection($this->request->getPost('kelurahan'));
        $data['pasar_create_by'] = anti_injection($this->request->getPost('username'));
        $data['pasar_status'] = '1';
        $data['pasar_create_time'] = date('Y-m-d H:i:s');

        if ($this->PM->add_pasar($data)) {
            $this->__addLog('Data Pasar', json_encode($data), 'Insert', $data['pasar_create_by']);
            $response["status"] = 1;
            $response["msg"] = "Berhasil menambahkan data";
        } else {
            $response["status"] = 0;
            $response["msg"] = "Gagal menambahkan data";
        }

        echo json_encode($response);
        exit;
    }

    public function edit_pasar()
    {
        $data['pasar_id'] = decrypt_url($this->request->getPost('id'));
        $data['pasar_nama'] = anti_injection($this->request->getPost('nama'));
        $data['pasar_alamat'] = anti_injection($this->request->getPost('alamat'));
        $data['pasar_kecamatan'] = anti_injection($this->request->getPost('kecamatan'));
        $data['pasar_kelurahan'] = anti_injection($this->request->getPost('kelurahan'));
        $data['pasar_update_by'] = anti_injection($this->request->getPost('username'));
        $data['pasar_status'] = '1';
        $data['pasar_update_time'] = date('Y-m-d H:i:s');

        if ($this->PM->edit_pasar($data)) {
            $this->__addLog('Data Pasar', json_encode($data), 'Update', $data['pasar_update_by']);
            $response["status"] = 1;
            $response["msg"] = "Berhasil perbarui data";
        } else {
            $response["status"] = 0;
            $response["msg"] = "Gagal perbarui data";
        }

        echo json_encode($response);
        exit;
    }

    public function delete_pasar()
    {
        $data['pasar_id'] = decrypt_url($this->request->getPost('id'));
        $data['pasar_update_by'] = anti_injection($this->request->getPost('username'));
        $data['pasar_status'] = '0';
        $data['pasar_update_time'] = date('Y-m-d H:i:s');

        if ($this->PM->edit_pasar($data)) {
            $this->__addLog('Data Pasar', json_encode($data), 'Delete', $data['pasar_update_by']);
            $response["status"] = 1;
            $response["msg"] = "Berhasil menghapus data";
        } else {
            $response["status"] = 0;
            $response["msg"] = "Gagal menghapus data";
        }

        echo json_encode($response);
        exit;
    }

    public function get_detail_pasar()
    {
        $id = decrypt_url($this->request->getGet("id"));
        $pasar = $this->PM->select("*")->where(["pasar_id" => $id])->get()->getResult();
        if (count($pasar) > 0) {
            $response["status"] = 1;
            $response["msg"] = "Data ditemukan";
            $response["total_data"] = count($pasar);
            $response["data_pasar"] = array();
            foreach ($pasar as $row) {
                $kec = $this->AM->get_area_by_code($row->pasar_kecamatan);
                $kel = $this->AM->get_area_by_code($row->pasar_kelurahan);
                $data["pasar_id"] = encrypt_url($row->pasar_id);
                $data["pasar_nama"] = $row->pasar_nama;
                $data["pasar_alamat"] = $row->pasar_alamat;
                $data["pasar_kecamatan_kode"] = $row->pasar_kecamatan;
                $data["pasar_kelurahan_kode"] = $row->pasar_kelurahan;
                $data["pasar_kecamatan"] = $kec[0]['name'];
                $data["pasar_kelurahan"] = $kel[0]['name'];
                array_push($response["data_pasar"], $data);
            }
        } else {
            $response["status"] = "0";
            $response["msg"] = "Data tidak ditemukan";
            $response["data_pasar"] = array();
        }
        echo json_encode($response);
        exit;
    }

    public function get_kecamatan()
    {
        $kecamatan = $this->AM->get_all_kecamatan();
        if (count($kecamatan) > 0) {
            $response["status"] = 1;
            $response["msg"] = "Data ditemukan";
            $response["data_area"] = array();

            $null['area_id'] = '';
            $null['area_nama'] = 'Pilih Kecamatan';
            array_push($response["data_area"], $null);

            foreach ($kecamatan as $row) {
                $data["area_id"] = $row->code;
                $data["area_nama"] = $row->name;
                array_push($response["data_area"], $data);
            }
        } else {
            $response["status"] = 0;
            $response["msg"] = "Data tidak ditemukan";
        }

        echo json_encode($response);
        exit;
    }

    public function get_kelurahan()
    {
        $kecamatan = $this->request->getGet('kecamatan');
        $kelurahan = $this->AM->get_kelurahan_by_kecamatan($kecamatan);

        if (count($kelurahan) > 0) {
            $response["status"] = 1;
            $response["msg"] = "Data ditemukan";
            $response["data_area"] = array();
            $null['area_id'] = '';
            $null['area_nama'] = 'Pilih Kelurahan';
            array_push($response["data_area"], $null);
            foreach ($kelurahan as $row) {
                $data["area_id"] = $row->code;
                $data["area_nama"] = $row->name;
                array_push($response["data_area"], $data);
            }
        } else {
            $response["status"] = 0;
            $response["msg"] = "Data tidak ditemukan";
        }

        echo json_encode($response);
        exit;
    }

    public function get_grup_komoditas()
    {
        $page = $this->request->getGet("page");
        $limit = $this->request->getGet("limit");
        $item = $page * $limit;
        $keyword = $this->request->getGet("keyword");
        $tipe = $this->request->getGet("tipe");
        $grup = $this->GKM->select("*")->where(["grup_komoditas_status" => "1"]);
        if ($tipe != "") {
            $grup = $grup->where('grup_komoditas_tipe', $tipe);
        }
        if ($keyword != "") {
            $grup = $grup->like('grup_komoditas_nama', $keyword, 'both');
        }
        if ($item != 0) {
            $grup = $grup->limit($item);
        }
        $grup = $grup->orderBy('grup_komoditas_create_time', 'DESC')->get()->getResult();

        if (count($grup) > 0) {
            $response["status"] = 1;
            $response["msg"] = "Data ditemukan";
            $response["total_data"] = $this->GKM->count_grup_komoditas_by_filter($tipe, $keyword);
            $response["data_grup_komoditas"] = array();

            foreach ($grup as $row) {
                $data["grup_komoditas_id"] = encrypt_url($row->grup_komoditas_id);
                $data["grup_komoditas_nama"] = $row->grup_komoditas_nama;
                $data["grup_komoditas_tipe"] = $row->grup_komoditas_tipe;
                array_push($response["data_grup_komoditas"], $data);
            }
        } else {
            $response["status"] = "0";
            $response["msg"] = "Data tidak ditemukan";
            $response["data_grup_komoditas"] = array();
        }
        echo json_encode($response);
        exit;
    }

    public function add_grup_komoditas()
    {
        $data['grup_komoditas_id'] = null;
        $data['grup_komoditas_nama'] = anti_injection($this->request->getPost('nama'));
        $data['grup_komoditas_tipe'] = anti_injection($this->request->getPost('tipe'));
        $data['grup_komoditas_status'] = "1";
        $data['grup_komoditas_create_by'] = $this->request->getPost('username');
        $data['grup_komoditas_create_time'] = date('Y-m-d H:i:s');

        if ($this->GKM->add_grup_komoditas($data)) {
            $this->__addLog('Grup Komoditas', json_encode($data), 'Insert', $data['grup_komoditas_create_by']);
            $response["status"] = 1;
            $response["msg"] = "Berhasil menambahkan data";
        } else {
            $response["status"] = 0;
            $response["msg"] = "Gagal menambahkan data";
        }

        echo json_encode($response);
        exit;
    }

    public function edit_grup_komoditas()
    {
        $data['grup_komoditas_id'] = decrypt_url($this->request->getPost('id'));
        $data['grup_komoditas_nama'] = anti_injection($this->request->getPost('nama'));
        $data['grup_komoditas_tipe'] = anti_injection($this->request->getPost('tipe'));
        $data['grup_komoditas_status'] = "1";
        $data['grup_komoditas_update_by'] = $this->request->getPost('username');
        $data['grup_komoditas_update_time'] = date('Y-m-d H:i:s');

        if ($this->GKM->edit_grup_komoditas($data)) {
            $this->__addLog('Grup Komoditas', json_encode($data), 'Update', $data['grup_komoditas_update_by']);
            $response["status"] = 1;
            $response["msg"] = "Berhasil perbarui data";
        } else {
            $response["status"] = 0;
            $response["msg"] = "Gagal perbarui data";
        }

        echo json_encode($response);
        exit;
    }

    public function delete_grup_komoditas()
    {
        $data['grup_komoditas_id'] = decrypt_url($this->request->getPost('id'));
        $data['grup_komoditas_status'] = "0";
        $data['grup_komoditas_update_by'] = $this->request->getPost('username');
        $data['grup_komoditas_update_time'] = date('Y-m-d H:i:s');

        if ($this->GKM->edit_grup_komoditas($data)) {
            $this->__addLog('Grup Komoditas', json_encode($data), 'Delete', $data['grup_komoditas_update_by']);
            $response["status"] = 1;
            $response["msg"] = "Berhasil menghapus data";
        } else {
            $response["status"] = 0;
            $response["msg"] = "Gagal menghapus data";
        }

        echo json_encode($response);
        exit;
    }

    public function get_komoditas()
    {
        $page = $this->request->getGet("page");
        $limit = $this->request->getGet("limit");
        $item = $page * $limit;
        $keyword = $this->request->getGet("keyword");
        if ($this->request->getGet("grup") != "null") {
            $grup = decrypt_url($this->request->getGet("grup"));
        } else {
            $grup = "null";
        }
        $komoditas = $this->KM->get_all_komoditas_by_filter($item, $keyword, $grup);
        if (count($komoditas) > 0) {
            $response["status"] = 1;
            $response["msg"] = "Data ditemukan";
            $response["total_data"] = $this->KM->count_komoditas_by_filter($keyword, $grup);
            $response["data_komoditas"] = array();

            foreach ($komoditas as $row) {
                $data["komoditas_id"] = encrypt_url($row->komoditas_id);
                $data["komoditas_nama"] = $row->komoditas_nama;
                $data["komoditas_grup"] = encrypt_url($row->komoditas_grup);
                $data["komoditas_satuan"] = $row->komoditas_satuan;
                $data["komoditas_het"] = $row->komoditas_het;
                $data["komoditas_het_update_time"] = tgl_indo(date('Y-m-d', strtotime($row->komoditas_het_update_time)));
                $data["komoditas_foto"] = base_url($row->komoditas_foto);
                $data["komoditas_nama_grup"] = $row->grup_komoditas_nama;
                array_push($response["data_komoditas"], $data);
            }
        } else {
            $response["status"] = "0";
            $response["msg"] = "Data tidak ditemukan";
            $response["data_komoditas"] = array();
        }
        echo json_encode($response);
        exit;
    }

    public function add_komoditas()
    {
        $data['komoditas_id'] = null;
        $data['komoditas_grup'] = decrypt_url($this->request->getPost('grup'));
        $data['komoditas_nama'] = anti_injection($this->request->getPost('nama'));
        $data['komoditas_satuan'] = anti_injection($this->request->getPost('satuan'));
        $data['komoditas_het'] = anti_injection($this->request->getPost('het'));
        $data['komoditas_status'] = "1";
        $data['komoditas_create_by'] = $this->request->getPost('username');
        $data['komoditas_create_time'] = date('Y-m-d H:i:s');
        $data['komoditas_het_update_time'] = date('Y-m-d H:i:s');

        $patch = realpath(APPPATH . '..files/komoditas/');
        $short_patch = "files/komoditas/";
        if (isset($_FILES['image'])) {
            $validation = $this->validate([
                'rules' => 'uploaded[image]|mime_in[image,image/jpg,image/jpeg,image/png]|max_size[image,5120]'
            ]);
            if ($validation == FALSE) {
                $response["status"] = 0;
                $response["msg"] = "Foto tidak valid!";
                echo json_encode($response);
                exit;
            } else {
                $upload = $this->request->getFile('image');
                $image_name = $data['komoditas_nama'] . '-' . rand(1, 99) . date('YmdHis') . "." . $upload->getClientExtension();
                // $image = \Config\Services::image()
                //     ->withFile($upload);
                // if($image->save($patch.'/komoditas/'.$image_name,99)){
                if ($upload->move($patch, $image_name)) {
                    $data['komoditas_foto'] =  $short_patch . $image_name;
                } else {
                    $response["status"] = 0;
                    $response["msg"] = "Gagal mengupload gambar";
                    echo json_encode($response);
                    exit;
                }
            }
        } else {
            $response["status"] = 0;
            $response["msg"] = "Mohon pilih gambar";
            echo json_encode($response);
            exit;
        }

        if ($this->KM->add_komoditas($data)) {
            $this->__addLog('Komoditas', json_encode($data), 'Insert', $data['komoditas_create_by']);
            $response["status"] = 1;
            $response["msg"] = "Berhasil menambahkan data";
        } else {
            $response["status"] = 0;
            $response["msg"] = "Gagal menambahkan data";
        }

        echo json_encode($response);
        exit;
    }

    public function edit_komoditas()
    {
        $data['komoditas_id'] = decrypt_url($this->request->getPost('id'));
        $data['komoditas_grup'] = decrypt_url($this->request->getPost('grup'));
        $data['komoditas_nama'] = anti_injection($this->request->getPost('nama'));
        $data['komoditas_satuan'] = anti_injection($this->request->getPost('satuan'));
        $data['komoditas_het'] = anti_injection($this->request->getPost('het'));
        $data['komoditas_status'] = "1";
        $data['komoditas_update_by'] = $this->request->getPost('username');
        $data['komoditas_update_time'] = date('Y-m-d H:i:s');

        $het = $this->KM->select('komoditas_het')->where('komoditas_id', $data['komoditas_id'])->get()->getResult();
        if ($het[0]->komoditas_het != $data['komoditas_het']) {
            $data['komoditas_het_update_time'] = date('Y-m-d H:i:s');
        }

        $patch = realpath(APPPATH . '..files/komoditas/');
        $short_patch = "files/komoditas/";
        if (isset($_FILES['image'])) {
            $validation = $this->validate([
                'rules' => 'uploaded[image]|mime_in[image,image/jpg,image/jpeg,image/png]|max_size[image,5120]'
            ]);
            if ($validation == FALSE) {
                $response["status"] = 0;
                $response["msg"] = "Foto tidak valid!";
                echo json_encode($response);
                exit;
            } else {
                $upload = $this->request->getFile('image');
                $image_name = 'img-' . date('YmdHis') . $upload->getName();
                if ($upload->move($patch, $image_name)) {
                    $data['komoditas_foto'] =  $short_patch . $image_name;
                } else {
                    $response["status"] = 0;
                    $response["msg"] = "Gagal mengupload gambar";
                    echo json_encode($response);
                    exit;
                }
            }
        }

        if ($this->KM->edit_komoditas($data)) {
            $this->__addLog('Komoditas', json_encode($data), 'Update', $data['komoditas_update_by']);
            $response["status"] = 1;
            $response["msg"] = "Berhasil perbarui data";
        } else {
            $response["status"] = 0;
            $response["msg"] = "Gagal perbarui data";
        }

        echo json_encode($response);
        exit;
    }

    public function delete_komoditas()
    {
        $data['komoditas_id'] = decrypt_url($this->request->getPost('id'));
        $data['komoditas_status'] = "0";
        $data['komoditas_update_by'] = $this->request->getPost('username');
        $data['komoditas_update_time'] = date('Y-m-d H:i:s');

        if ($this->KM->edit_komoditas($data)) {
            $this->__addLog('Komoditas', json_encode($data), 'Delete', $data['komoditas_update_by']);
            $response["status"] = 1;
            $response["msg"] = "Berhasil menghapus data";
        } else {
            $response["status"] = 0;
            $response["msg"] = "Gagal menghapus data";
        }

        echo json_encode($response);
        exit;
    }

    public function get_user()
    {
        $page = $this->request->getGet("page");
        $limit = $this->request->getGet("limit");
        $item = $page * $limit;
        $keyword = $this->request->getGet("keyword");
        $user = $this->UM->get_all_user_by_filter($item, $keyword);
        if (count($user) > 0) {
            $response["status"] = 1;
            $response["msg"] = "Data ditemukan";
            $response["total_data"] = $this->UM->count_user_by_filter($keyword);
            $response["data_user"] = array();

            foreach ($user as $row) {
                if ($row->user_role == '3' && $row->user_fk != "") {
                    $pasar = $this->PM->select("pasar_nama, pasar_status")->where(["pasar_id" => $row->user_fk])->get()->getResult();
                    // if ($pasar[0]->pasar_status == '0') {
                    //     $response["status"] = "0";
                    //     $response["msg"] = "Pasar anda sudah tidak aktif!";
                    //     echo json_encode($response);
                    //     exit;
                    // }
                    $foreign_name = $pasar[0]->pasar_nama;
                    $foreign = encrypt_url($row->user_fk);
                } else {
                    $foreign_name = "";
                    $foreign = '';
                }
                $data["user_id"] = encrypt_url($row->user_id);
                $data["user_nama"] = $row->user_name;
                $data["user_username"] = $row->user_username;
                $data["user_email"] = $row->user_email;
                $data["user_foto"] = base_url($row->user_image);
                $data["user_created"] = $row->user_last_login;
                $data["user_last_login"] = $row->user_last_login;
                $data["user_role"] = encrypt_url($row->user_role);
                $data["user_role_nama"] = $row->user_level_name;
                $data["user_role_foreign"] = $foreign;
                $data["user_role_foreign_name"] = $foreign_name;
                if ($row->user_role != 1) {
                    array_push($response["data_user"], $data);
                }
            }
        } else {
            $response["status"] = "0";
            $response["msg"] = "Data tidak ditemukan";
            $response["data_user"] = array();
        }
        echo json_encode($response);
        exit;
    }

    public function get_user_role()
    {
        $user_level = $this->ULM->get_all_user_level();
        if (count($user_level) > 0) {
            $response["status"] = 1;
            $response["msg"] = "Data ditemukan";
            $response["data_user"] = array();

            foreach ($user_level as $row) {
                $data["user_role"] = encrypt_url($row->user_level_id);
                $data["user_role_nama"] = $row->user_level_name;
                array_push($response["data_user"], $data);
            }
        } else {
            $response["status"] = "0";
            $response["msg"] = "Data tidak ditemukan";
            $response["data_user"] = array();
        }
        echo json_encode($response);
        exit;
    }

    public function add_user()
    {
        $username = $this->request->getPost("username");
        $email = $this->request->getPost("email");
        $nama = $this->request->getPost("nama");
        $role = $this->request->getPost("role");
        $pasar = $this->request->getPost("pasar");
        $cek_username = $this->UM->get_user_by_username($username);
        $cek_email = $this->UM->get_user_by_email($email);

        if (count($cek_username) > 0 && count($cek_email) > 0) {
            $response["status"] = "4";
            $response["msg"] = "Username dan email sudah digunakan";
        } elseif (count($cek_username) > 0) {
            $response["status"] = "2";
            $response["msg"] = "Username sudah digunakan";
        } elseif (count($cek_email) > 0) {
            $response["status"] = "3";
            $response["msg"] = "Email sudah digunakan";
        } else {
            $data['user_id'] = create_guid();
            $data['user_username'] = $username;
            $data['user_email'] = $email;
            $data['user_name'] = $nama;
            $data['user_status'] = '1';
            $data['user_role'] = decrypt_url($role);
            if ($data['user_role'] == '3') {
                $data['user_fk'] = decrypt_url($pasar);
            } else {
                $data['user_fk'] = null;
            }
            $data['user_create_by'] = $this->request->getPost("create_by");
            $data['user_create_time'] = date('Y-m-d H:i:s');
            $password = generate_password();
            // $password = "123456";
            $data['user_password'] = password_hash(MD5($password), PASSWORD_DEFAULT);
            $data['user_image'] = 'files/img/user-default.png';
            if ($this->UM->add_user($data)) {
                $this->__addLog('User Management', json_encode($data), 'Insert', $data['user_create_by']);
                $title_msg = "Pantau Harga Disdagtri Inhil";
                $body_msg = "<h5>Akun login untuk : " . $data['user_username'] . "</h5><h5>Email : " . $data['user_email'] . "</h5>" . "<h5>Password : " . $password . "</h5>";
                message_mail($email, $title_msg, $body_msg);
                $response["status"] = "1";
                $response["msg"] = "Berhasil menambahkan data user";
            } else {
                $response["status"] = "0";
                $response["msg"] = "Gagal menambahkan data user";
            }
        }

        echo json_encode($response);
        exit;
    }

    public function get_user_by_id()
    {
        $id = decrypt_url($this->request->getGet('id'));
        $user = $this->UM->get_user_by_id($id);
        if (count($user) > 0) {
            $response["status"] = 1;
            $response["msg"] = "Data ditemukan";
            $response["total_data"] = count($user);
            $response["data_user"] = array();

            foreach ($user as $row) {
                if ($row->user_role == '3' && $row->user_fk != "") {
                    $pasar = $this->PM->select("pasar_nama")->where(["pasar_id" => $row->user_fk])->get()->getResult();
                    $foreign_name = $pasar[0]->pasar_nama;
                    $foreign = encrypt_url($row->user_fk);
                } else {
                    $foreign_name = "";
                    $foreign = '';
                }
                if ($row->user_last_login == null) {
                    $last_login = "Belum melakukan login";
                } else {
                    $last_login = tgl_indo(date('Y-m-d', strtotime($row->user_last_login)));
                }
                $data["user_id"] = encrypt_url($row->user_id);
                $data["user_nama"] = $row->user_name;
                $data["user_username"] = $row->user_username;
                $data["user_email"] = $row->user_email;
                $data["user_foto"] = base_url($row->user_image);
                $data["user_created"] = tgl_indo(date('Y-m-d', strtotime($row->user_create_time)));
                $data["user_last_login"] = $last_login;
                $data["user_role"] = encrypt_url($row->user_role);
                $data["user_role_nama"] = $row->user_level_name;
                $data["user_role_nama"] = $row->user_level_name;
                $data["user_role_foreign"] = $foreign;
                $data["user_role_foreign_name"] = $foreign_name;
                array_push($response["data_user"], $data);
            }
        } else {
            $response["status"] = "0";
            $response["msg"] = "Data tidak ditemukan";
            $response["data_user"] = array();
        }
        echo json_encode($response);
        exit;
    }

    public function edit_user()
    {
        $id = decrypt_url($this->request->getPost("id"));
        $username = $this->request->getPost("username");
        $email = $this->request->getPost("email");
        $nama = $this->request->getPost("nama");
        $role = $this->request->getPost("role");
        if (decrypt_url($role) == '3') {
            $fk = decrypt_url($this->request->getPost("pasar"));
        } else {
            $fk = null;
        }
        $cek_username = $this->UM->get_user_by_username($username);
        $cek_email = $this->UM->get_user_by_email($email);

        $data['user_id'] = $id;
        $data['user_username'] = $username;
        $data['user_email'] = $email;
        $data['user_name'] = $nama;
        $data['user_fk'] = $fk;
        $data['user_status'] = '1';
        $data['user_role'] = decrypt_url($role);
        $data['user_update_by'] = $this->request->getPost("create_by");
        $data['user_update_time'] = date('Y-m-d H:i:s');

        if (count($cek_email) > 0 && $cek_email[0]->user_username != $username && $cek_email[0]->user_status == '1') {
            $response["status"] = "3";
            $response["msg"] = "Email sudah digunakan";
        } else {
            if ($this->UM->edit_user($data)) {
                $this->__addLog('User Management', json_encode($data), 'Update', $data['user_update_by']);
                $response["status"] = "1";
                $response["msg"] = "Berhasil perbarui data user";
            } else {
                $response["status"] = "0";
                $response["msg"] = "Gagal perbarui data user";
            }
        }

        echo json_encode($response);
        exit;
    }
    public function delete_user()
    {
        $data['user_id'] = decrypt_url($this->request->getPost("id"));
        $data['user_update_by'] = $this->request->getPost("username");
        $data['user_update_time'] = date('Y-m-d H:i:s');
        $data['user_status'] = '0';
        if ($this->UM->edit_user($data)) {
            $this->__addLog('User Management', json_encode($data), 'Delete', $data['user_update_by']);
            $response["status"] = "1";
            $response["msg"] = "Berhasil menghapus data user";
        } else {
            $response["status"] = "0";
            $response["msg"] = "Gagal menghapus data user";
        }

        echo json_encode($response);
        exit;
    }

    public function reset_password()
    {
        $data['user_id'] = decrypt_url($this->request->getPost("id"));
        $data['user_update_by'] = $this->request->getPost("username");
        $data['user_update_time'] = date('Y-m-d H:i:s');
        $password = generate_password();
        // $password = "123456";
        $data['user_password'] = password_hash(MD5($password), PASSWORD_DEFAULT);
        if ($this->UM->edit_user($data)) {
            $this->__addLog('User Management', json_encode($data), 'Update', $data['user_update_by']);
            $user = $this->UM->select('user_username, user_email')->where('user_id', $data['user_id'])->get()->getResult();
            $title_msg = "Pantau Harga Disdagtri Inhil";
            $body_msg = "<h5>Akun login untuk : " . $user[0]->user_username . "</h5><h5>Email : " . $user[0]->user_email . "</h5>" . "<h5>Password : " . $password . "</h5>";
            message_mail($user[0]->user_email, $title_msg, $body_msg);
            $response["status"] = "1";
            $response["msg"] = "Berhasil reset password";
        } else {
            $response["status"] = "0";
            $response["msg"] = "Gagal reset password";
        }

        echo json_encode($response);
        exit;
    }

    public function get_transaksi()
    {
        $page = $this->request->getGet("page");
        $limit = $this->request->getGet("limit");
        $pasar = $this->request->getGet("pasar");

        $pasar = $this->request->getGet("pasar");
        if ($pasar != 'all') {
            $pasar = decrypt_url($pasar);
        } else {
            $pasar = 'all';
        }

        $awal = $this->request->getGet("tanggal_awal");
        $akhir = $this->request->getGet("tanggal_akhir");
        if ($awal != "") {
            $awal = date('d-m-Y', strtotime($awal));
            $awal = date('Y-m-d', strtotime($awal));
        }
        if ($akhir != "") {
            $akhir = date('d-m-Y', strtotime($akhir));
            $akhir = date('Y-m-d', strtotime($akhir));
        }

        if ($akhir < $awal) {
            $response["status"] = "0";
            $response["msg"] = "Data tidak ditemukan";
            $response["data_transaksi"] = array();
            echo json_encode($response);
            exit;
        } else {
            $item = $page * $limit;
            $keyword = $this->request->getGet("keyword");
            $transaksi = $this->TM->get_all_transaksi_by_filter($item, $keyword, $awal, $akhir, $pasar);
            if (count($transaksi) > 0) {
                $response["status"] = 1;
                $response["msg"] = "Data ditemukan";
                $response["total_data"] = $this->TM->count_transaksi_by_filter($keyword, $awal, $akhir, $pasar);
                $response["data_transaksi"] = array();

                foreach ($transaksi as $row) {
                    $data["transaksi_tanggal"] = tgl_indo($row->transaksi_tanggal);
                    $data["transaksi_id"] = encrypt_url($row->transaksi_id);
                    $data["transaksi_distributor_nama"] = $row->pedagang_nama;
                    $data["transaksi_komoditas"] = encrypt_url($row->transaksi_komoditas);
                    $data["transaksi_nama_komoditas"] = $row->komoditas_nama;
                    $data["transaksi_foto_komoditas"] = base_url($row->komoditas_foto);
                    $data["transaksi_harga"] = $row->transaksi_harga;
                    $data["transaksi_nama_pasar"] = $row->pasar_nama;
                    array_push($response["data_transaksi"], $data);
                }
            } else {
                $response["status"] = "0";
                $response["msg"] = "Data tidak ditemukan";
                $response["data_transaksi"] = array();
            }
            echo json_encode($response);
            exit;
        }
    }

    public function get_transaksi_by_id()
    {
        $id = decrypt_url($this->request->getGet('id'));
        $transaksi = $this->TM->get_transaksi_by_id($id);
        if (count($transaksi) > 0) {
            $response["status"] = 1;
            $response["msg"] = "Data ditemukan";
            $response["total_data"] = count($transaksi);
            $response["data_transaksi"] = array();

            foreach ($transaksi as $row) {
                $data["transaksi_tanggal"] = tgl_indo($row->transaksi_tanggal);
                $data["transaksi_id"] = encrypt_url($row->transaksi_id);
                $data["transaksi_komoditas"] = $row->transaksi_komoditas;
                $data["transaksi_nama_komoditas"] = $row->komoditas_nama;
                $data["transaksi_foto_komoditas"] = base_url($row->komoditas_foto);
                $data["transaksi_pasar"] = $row->transaksi_pasar;
                $data["transaksi_nama_pasar"] = $row->pasar_nama;
                $data["transaksi_catatan"] = $row->transaksi_catatan;
                $data["transaksi_harga"] = $row->transaksi_harga;
                $data["transaksi_distributor_nama"] = $row->pedagang_nama;
                $data["transaksi_het"] = $row->transaksi_het;
                $data["transaksi_satuan"] = $row->komoditas_satuan;
                array_push($response["data_transaksi"], $data);
            }
        } else {
            $response["status"] = "0";
            $response["msg"] = "Data tidak ditemukan";
            $response["data_transaksi"] = array();
        }
        echo json_encode($response);
        exit;
    }

    public function add_transaksi_pangan()
    {
        $data['transaksi_id'] = null;
        $tanggal = date('d-m-Y', strtotime($this->request->getPost('tanggal')));
        $data['transaksi_tanggal'] = date('Y-m-d', strtotime($tanggal));
        $data['transaksi_pasar'] = decrypt_url($this->request->getPost('pasar'));
        $data['transaksi_pedagang'] = decrypt_url($this->request->getPost('pedagang'));
        $data['transaksi_komoditas'] = decrypt_url($this->request->getPost('komoditas'));
        $data['transaksi_harga'] = $this->request->getPost('harga');
        $data['transaksi_het'] = $this->request->getPost('het');
        $data['transaksi_catatan'] = $this->request->getPost('catatan');
        $data['transaksi_status'] = '1';
        $data['transaksi_create_by'] = $this->request->getPost('create_by');
        $data['transaksi_create_time'] = date('Y-m-d H:i:s');

        $cek = $this->TM->select('transaksi_id')->where('transaksi_tanggal', $data['transaksi_tanggal'])->where('transaksi_pasar', $data['transaksi_pasar'])->where('transaksi_komoditas', $data['transaksi_komoditas'])->where('transaksi_pedagang', $data['transaksi_pedagang'])->where('transaksi_status', '1')->countAllResults();
        if ($cek > 0) {
            $response["status"] = "2";
            $response["msg"] = "Gagal menambahkan data, komoditas sudah diinput hari ini!";
            echo json_encode($response);
            exit;
        } else {
            if ($this->TM->add_transaksi($data)) {
                $this->__addLog('Transaksi', json_encode($data), 'Insert', $data['transaksi_create_by']);
                $response["status"] = "1";
                $response["msg"] = "Berhasil menambahkan data";
            } else {
                $response["status"] = "0";
                $response["msg"] = "Gagal menambahkan data";
            }
        }

        echo json_encode($response);
        exit;
    }

    public function edit_transaksi_pangan()
    {
        $data['transaksi_id'] = decrypt_url($this->request->getPost('transaksi'));
        $data['transaksi_harga'] = $this->request->getPost('harga');
        $data['transaksi_catatan'] = $this->request->getPost('catatan');
        $data['transaksi_update_by'] = $this->request->getPost('create_by');
        $data['transaksi_update_time'] = date('Y-m-d H:i:s');

        if ($this->TM->edit_transaksi($data)) {
            $this->__addLog('Transaksi', json_encode($data), 'Update', $data['transaksi_update_by']);
            $response["status"] = "1";
            $response["msg"] = "Berhasil memperbarui data";
        } else {
            $response["status"] = "0";
            $response["msg"] = "Gagal memperbarui data";
        }

        echo json_encode($response);
        exit;
    }

    public function delete_transaksi()
    {
        $data['transaksi_id'] = decrypt_url($this->request->getPost('id'));
        $data['transaksi_status'] = '0';
        $data['transaksi_update_by'] = $this->request->getPost('create_by');
        $data['transaksi_update_time'] = date('Y-m-d H:i:s');

        if ($this->TM->edit_transaksi($data)) {
            $this->__addLog('Transaksi', json_encode($data), 'Delete', $data['transaksi_update_by']);
            $response["status"] = "1";
            $response["msg"] = "Berhasil menghapus data";
        } else {
            $response["status"] = "0";
            $response["msg"] = "Gagal menghapus data";
        }

        echo json_encode($response);
        exit;
    }

    public function get_harga_komoditas_harian()
    {
        $pasar = decrypt_url($this->request->getGet('pasar'));
        $date = $this->request->getGet('tanggal');
        $page = $this->request->getGet("page");
        $limit = $this->request->getGet("limit");
        $item = $page * $limit;
        $komoditas = $this->KM->get_all_komoditas_by_filter($item, "", "null");
        if (count($komoditas) > 0) {
            $response["status"] = 1;
            $response["msg"] = "Data ditemukan";
            $response["total_data"] =  $this->KM->count_komoditas_by_filter("", "null");
            $response["data_terisi"] = $this->TM->count_transaksi_by_pasar_date($pasar, $date);
            $response["data_kosong"] = $response["total_data"] - $response["data_terisi"];
            $response["data_komoditas"] = array();
            for ($i = 0; $i < count($komoditas); $i++) {
                $harga_query = $this->TM->get_harga_by_komoditas_pasar_date($komoditas[$i]->komoditas_id, $pasar, $date);
                if (count($harga_query) > 0) {
                    $harga = $harga_query[0]->transaksi_harga;
                    $transaksi = encrypt_url($harga_query[0]->transaksi_id);
                    $catatan = $harga_query[0]->transaksi_catatan;
                } else {
                    $harga = "0";
                    $transaksi = "0";
                    $catatan = "";
                }
                $data["komoditas_id"] = encrypt_url($komoditas[$i]->komoditas_id);
                $data["komoditas_nama"] = $komoditas[$i]->komoditas_nama;
                $data["komoditas_satuan"] = $komoditas[$i]->komoditas_satuan;
                $data["komoditas_foto"] = base_url($komoditas[$i]->komoditas_foto);
                $data["komoditas_harga"] = $harga;
                $data["komoditas_transaksi"] = $transaksi;
                $data["komoditas_transaksi_catatan"] = $catatan;
                array_push($response["data_komoditas"], $data);
            }
        } else {
            $response["status"] = "0";
            $response["msg"] = "Data tidak ditemukan";
            $response["data_komoditas"] = array();
        }
        echo json_encode($response);
        exit;
    }

    public function edit_harga_komoditas()
    {
        $pasar = decrypt_url($this->request->getPost('pasar'));
        $date = $this->request->getPost('tanggal');
        $komoditas = decrypt_url($this->request->getPost('komoditas'));
        $transaksi = $this->request->getPost('transaksi');
        $harga = $this->request->getPost('harga');
        $catatan = $this->request->getPost('catatan');
        $create_by = $this->request->getPost('create_by');
        if ($transaksi == "0") {
            $data['transaksi_id'] = null;
            $data['transaksi_tanggal'] = $date;
            $data['transaksi_pasar'] = $pasar;
            $data['transaksi_komoditas'] = $komoditas;
            $data['transaksi_harga'] = $harga;
            $data['transaksi_catatan'] = $catatan;
            $data['transaksi_status'] = '1';
            $data['transaksi_create_by'] = $create_by;
            $data['transaksi_create_time'] = date('Y-m-d H:i:s');

            if ($this->TM->add_transaksi($data)) {
                $this->__addLog('Transaksi', json_encode($data), 'Insert', $data['transaksi_create_by']);
                $response["status"] = "1";
                $response["msg"] = "Berhasil perbarui harga";
            } else {
                $response["status"] = "0";
                $response["msg"] = "Gagal perbarui harga";
            }
        } else {
            $data['transaksi_id'] = decrypt_url($transaksi);
            $data['transaksi_harga'] = $harga;
            $data['transaksi_catatan'] = $catatan;
            $data['transaksi_update_by'] = $create_by;
            $data['transaksi_update_time'] = date('Y-m-d H:i:s');
            if ($this->TM->edit_transaksi($data)) {
                $this->__addLog('Transaksi', json_encode($data), 'Update', $data['transaksi_update_by']);
                $response["status"] = "1";
                $response["msg"] = "Berhasil perbarui harga";
            } else {
                $response["status"] = "0";
                $response["msg"] = "Gagal perbarui harga";
            }
        }
        echo json_encode($response);
        exit;
    }

    public function laporan()
    {
        $data['pasar'] = $this->PM->select('pasar_id, pasar_nama')->where('pasar_status', '1')->get()->getResult();
        return view('webview/laporan', $data);
    }

    public function unduh_laporan()
    {
        $jenis = $this->request->getGet('jenis');
        $pasar = decrypt_url($this->request->getGet('pasar'));
        $tanggal1 = $this->request->getGet('tanggalawal');
        $tanggal2 = $this->request->getGet('tanggalakhir');
        if (strtotime($tanggal2) < strtotime($tanggal1)) {
            $_SESSION['jenis'] = $jenis;
            $_SESSION['error'] = "tanggalakhir";
            $_SESSION['msg_error'] = "Tanggal Akhir Tidak Valid";
            echo "<script>history.back();</script>";
            echo "
                <script>javascript:history.go(-1)</script>
            ";
        } else {
            $grup = $this->GKM->select('grup_komoditas_id,grup_komoditas_nama ')->where('grup_komoditas_status', '1')->get()->getResult();
            foreach ($grup as $row) {
                $row->komoditas = $this->KM->select('komoditas_id, komoditas_nama, komoditas_satuan')->where('komoditas_status', '1')->get()->getResult();
                foreach ($row->komoditas as $r) {
                    $harga1 = $this->TM->select('transaksi_harga')
                        ->where('transaksi_pasar', $pasar)
                        ->where('transaksi_komoditas', $r->komoditas_id)
                        ->where('transaksi_tanggal', $tanggal1)
                        ->where('transaksi_status', '1')->get()->getResult();
                    if (count($harga1) > 0) {
                        $r->harga1 = $harga1[0]->transaksi_harga;
                    } else {
                        $r->harga1 = "-";
                    }

                    $harga2 = $this->TM->select('transaksi_harga')
                        ->where('transaksi_pasar', $pasar)
                        ->where('transaksi_komoditas', $r->komoditas_id)
                        ->where('transaksi_tanggal', $tanggal2)
                        ->where('transaksi_status', '1')->get()->getResult();
                    if (count($harga2) > 0) {
                        $r->harga2 = $harga2[0]->transaksi_harga;
                    } else {
                        $r->harga2 = "-";
                    }

                    $hargamax = $this->TM->select('transaksi_harga')
                        ->where('transaksi_pasar', $pasar)
                        ->where('transaksi_komoditas', $r->komoditas_id)
                        ->where('DATE(transaksi_tanggal) >=', $tanggal1)
                        ->where('DATE(transaksi_tanggal) <=', $tanggal2)
                        ->where('transaksi_status', '1')
                        ->orderBy('transaksi_harga', 'DESC')
                        ->limit(1)->get()->getResult();
                    if (count($hargamax) > 0) {
                        $r->hargamax = $hargamax[0]->transaksi_harga;
                    } else {
                        $r->hargamax = "-";
                    }
                }
            }
            $detail_pasar = $this->PM->select('pasar_nama')->where('pasar_id', $pasar)->get()->getResult();

            $data['tanggal1'] = $tanggal1;
            $data['tanggal2'] = $tanggal2;
            $data['grup'] = $grup;
            $data['pasar'] = $detail_pasar;

            ob_clean();
            $dompdf = new \Dompdf\Dompdf();

            $options = $dompdf->getOptions();
            $options->setIsHtml5ParserEnabled(true);
            $options->set('isRemoteEnabled', true);
            $dompdf->setOptions($options);


            $dompdf->loadHtml(view('webview/format_laporan', $data));
            $filename = "Laporan harga komoditas.pdf";
            $dompdf->setPaper('F4', 'potrait');
            $dompdf->render();
            $dompdf->stream($filename);
        }
    }

    public function format_laporan()
    {
        $pasar = '14';
        $tanggal1 = '2022-11-19';
        $tanggal2 = '2022-11-20';
        $grup = $this->GKM->select('grup_komoditas_id,grup_komoditas_nama ')->where('grup_komoditas_status', '1')->get()->getResult();
        foreach ($grup as $row) {
            $row->komoditas = $this->KM->select('komoditas_id, komoditas_nama, komoditas_satuan')->where('komoditas_status', '1')->get()->getResult();
            foreach ($row->komoditas as $r) {
                $harga1 = $this->TM->select('transaksi_harga')
                    ->where('transaksi_pasar', $pasar)
                    ->where('transaksi_komoditas', $r->komoditas_id)
                    ->where('transaksi_tanggal', $tanggal1)
                    ->where('transaksi_status', '1')->get()->getResult();
                if (count($harga1) > 0) {
                    $r->harga1 = $harga1[0]->transaksi_harga;
                } else {
                    $r->harga1 = "-";
                }

                $harga2 = $this->TM->select('transaksi_harga')
                    ->where('transaksi_pasar', $pasar)
                    ->where('transaksi_komoditas', $r->komoditas_id)
                    ->where('transaksi_tanggal', $tanggal2)
                    ->where('transaksi_status', '1')->get()->getResult();
                if (count($harga2) > 0) {
                    $r->harga2 = $harga2[0]->transaksi_harga;
                } else {
                    $r->harga2 = "-";
                }

                $hargamax = $this->TM->select('transaksi_harga')
                    ->where('transaksi_pasar', $pasar)
                    ->where('transaksi_komoditas', $r->komoditas_id)
                    ->where('DATE(transaksi_tanggal) >=', $tanggal1)
                    ->where('DATE(transaksi_tanggal) <=', $tanggal2)
                    ->where('transaksi_status', '1')
                    ->orderBy('transaksi_harga', 'DESC')
                    ->limit(1)->get()->getResult();
                if (count($hargamax) > 0) {
                    $r->hargamax = $hargamax[0]->transaksi_harga;
                } else {
                    $r->hargamax = "-";
                }
            }
        }
        // echo json_encode($grup);
        // exit;
        $detail_pasar = $this->PM->select('pasar_nama')->where('pasar_id', $pasar)->get()->getResult();

        $data['tanggal1'] = $tanggal1;
        $data['tanggal2'] = $tanggal2;
        $data['grup'] = $grup;
        $data['pasar'] = $detail_pasar;
        return view('webview/format_laporan', $data);
    }

    public function get_pedagang_pangan()
    {
        $page = $this->request->getGet("page");
        $limit = $this->request->getGet("limit");
        $item = $page * $limit;
        $keyword = $this->request->getGet("keyword");
        $pasar = decrypt_url($this->request->getGet("pasar"));
        $pedagang = $this->PDM->get_pedagang_pangan_by_filter($item, $pasar, $keyword);
        if (count($pedagang) > 0) {
            $response["status"] = 1;
            $response["msg"] = "Data ditemukan";
            $response["total_data"] = $this->PDM->count_pedagang_pangan_by_filter($pasar, $keyword);

            $jualan = $this->JM
                ->select('jualan_id')
                ->join('tb_komoditas', 'tb_jualan.jualan_komoditas = tb_komoditas.komoditas_id')
                ->join('tb_grup_komoditas', 'tb_komoditas.komoditas_grup = tb_grup_komoditas.grup_komoditas_id')
                ->join('tb_pedagang', 'tb_jualan.jualan_pedagang = tb_pedagang.pedagang_id')
                ->where('pedagang_pasar', $pasar)
                ->where('jualan_status', '1')
                ->where('grup_komoditas_status', '1')
                ->where('komoditas_status', '1')
                ->where('pedagang_status', '1')
                ->countAllResults();
            $tanggal = date('Y-m-d');
            $transaksi = $this->TM
                ->select('transaksi_id')
                ->join('tb_komoditas', 'tb_transaksi.transaksi_komoditas = tb_komoditas.komoditas_id')
                ->join('tb_grup_komoditas', 'tb_komoditas.komoditas_grup = tb_grup_komoditas.grup_komoditas_id')
                ->join('tb_pedagang', 'tb_transaksi.transaksi_pedagang = tb_pedagang.pedagang_id')
                ->join('tb_jualan', 'tb_pedagang.pedagang_id = tb_jualan.jualan_pedagang')
                ->join('tb_pasar', 'tb_transaksi.transaksi_pasar = tb_pasar.pasar_id')
                ->where('transaksi_status', '1')
                ->where('komoditas_status', '1')
                ->where('grup_komoditas_status', '1')
                ->where('jualan_status', '1')
                ->where('pedagang_status', '1')
                ->where('pasar_status', '1')
                ->where('transaksi_pasar', $pasar)
                ->where('transaksi_tanggal', $tanggal)
                ->groupBy('transaksi_id')
                ->countAllResults();
            $kosong = $jualan - $transaksi;

            $response["total_relasi"] = $jualan;
            $response["total_transaksi"] = $transaksi;
            $response["total_kosong"] = $kosong;
            $response["data_pedagang"] = array();

            foreach ($pedagang as $row) {
                $data["pedagang_id"] = encrypt_url($row->pedagang_id);
                $data["pedagang_pasar"] = encrypt_url($row->pedagang_pasar);
                $data["pedagang_nama"] = $row->pedagang_nama;
                $data["pedagang_foto"] = base_url($row->pedagang_foto);
                $data["total_jualan"] = $this->JM->count_jualan_by_pedagang($row->pedagang_id);
                array_push($response["data_pedagang"], $data);
            }
        } else {
            $response["status"] = "0";
            $response["msg"] = "Data tidak ditemukan";
            $response["data_pedagang"] = array();
        }
        echo json_encode($response);
        exit;
    }

    public function add_pedagang()
    {
        $data['pedagang_id'] = null;
        $data['pedagang_nama'] = anti_injection($this->request->getPost('nama'));
        $data['pedagang_pasar'] = decrypt_url($this->request->getPost('pasar'));
        $data['pedagang_create_by'] = anti_injection($this->request->getPost('username'));
        $data['pedagang_create_time'] = date('Y-m-d H:i:s');
        $data['pedagang_status'] = '1';
        $data['pedagang_foto'] = 'files/img/user-default.png';


        if ($this->PDM->add_pedagang($data)) {
            $this->__addLog('Pedagang Pangan', json_encode($data), 'Insert', $data['pedagang_create_by']);
            $response["status"] = 1;
            $response["msg"] = "Berhasil menambahkan data";
        } else {
            $response["status"] = 0;
            $response["msg"] = "Gagal menambahkan data";
        }

        echo json_encode($response);
        exit;
    }

    public function get_jualan()
    {
        $pedagang = decrypt_url($this->request->getGet("pedagang"));
        $jualan = $this->JM
            ->select('jualan_id, komoditas_nama, grup_komoditas_nama, komoditas_id, komoditas_het, komoditas_satuan')
            ->join('tb_komoditas', 'tb_jualan.jualan_komoditas = tb_komoditas.komoditas_id')
            ->join('tb_grup_komoditas', 'tb_komoditas.komoditas_grup = tb_grup_komoditas.grup_komoditas_id')
            ->where('jualan_pedagang', $pedagang)
            ->where('jualan_status', '1')
            ->where('komoditas_status', '1')
            ->where('grup_komoditas_status', '1')
            ->orderBy('jualan_create_time', 'DESC')
            ->get()->getResult();
        if (count($jualan) > 0) {
            $response["status"] = 1;
            $response["msg"] = "Data ditemukan";
            $response["total_data"] = count($jualan);
            $response["data_jualan"] = array();
            foreach ($jualan as $row) {
                $data["jualan_id"] = encrypt_url($row->jualan_id);
                $data["komoditas_nama"] = $row->komoditas_nama;
                $data["komoditas_id"] = encrypt_url($row->komoditas_id);
                $data["komoditas_satuan"] = $row->komoditas_satuan;
                $data["komoditas_het"] = $row->komoditas_het;
                $data["grup_komoditas_nama"] = $row->grup_komoditas_nama;
                array_push($response["data_jualan"], $data);
            }
        } else {
            $response["status"] = "0";
            $response["msg"] = "Data tidak ditemukan";
            $response["data_jualan"] = array();
        }
        echo json_encode($response);
        exit;
    }

    public function add_jualan()
    {
        $data['jualan_id'] = null;
        $data['jualan_pedagang'] = decrypt_url($this->request->getPost('pedagang'));
        $data['jualan_komoditas'] = decrypt_url($this->request->getPost('komoditas'));
        $data['jualan_create_by'] = anti_injection($this->request->getPost('username'));
        $data['jualan_create_time'] = date('Y-m-d H:i:s');
        $data['jualan_status'] = '1';

        $cek = $this->JM->select('jualan_id')->where('jualan_pedagang', $data['jualan_pedagang'])->where('jualan_komoditas', $data['jualan_komoditas'])->where('jualan_status', '1')->countAllResults();
        if ($cek == 0) {
            if ($this->JM->add_jualan($data)) {
                $this->__addLog('Detail Pedagang Pangan', json_encode($data), 'Update', $data['jualan_create_by']);
                $response["status"] = 1;
                $response["msg"] = "Berhasil menambahkan data";
            } else {
                $response["status"] = 0;
                $response["msg"] = "Gagal menambahkan data";
            }

            echo json_encode($response);
            exit;
        } else {
            $response["status"] = 0;
            $response["msg"] = "Data sudah ada !";
            echo json_encode($response);
            exit;
        }
    }

    public function delete_jualan()
    {
        $data['jualan_id'] = decrypt_url($this->request->getPost('id'));
        $data['jualan_update_by'] = anti_injection($this->request->getPost('username'));
        $data['jualan_update_time'] = date('Y-m-d H:i:s');
        $data['jualan_status'] = '0';

        if ($this->JM->edit_jualan($data)) {
            $this->__addLog('Detail Pedagang Pangan', json_encode($data), 'Update', $data['jualan_update_by']);
            $response["status"] = 1;
            $response["msg"] = "Berhasil menghapus data";
        } else {
            $response["status"] = 0;
            $response["msg"] = "Gagal menghapus data";
        }

        echo json_encode($response);
        exit;
    }

    public function delete_pedagang()
    {
        $data['pedagang_id'] = decrypt_url($this->request->getPost('id'));
        $data['pedagang_update_by'] = anti_injection($this->request->getPost('username'));
        $data['pedagang_update_time'] = date('Y-m-d H:i:s');
        $data['pedagang_status'] = '0';

        if ($this->PDM->edit_pedagang($data)) {
            $this->__addLog('Pedagang Pangan', json_encode($data), 'Update', $data['pedagang_update_by']);
            $response["status"] = 1;
            $response["msg"] = "Berhasil menghapus data";
        } else {
            $response["status"] = 0;
            $response["msg"] = "Gagal menghapus data";
        }

        echo json_encode($response);
        exit;
    }

    public function edit_pedagang()
    {
        $data['pedagang_id'] = decrypt_url($this->request->getPost('id'));
        $data['pedagang_nama'] = anti_injection($this->request->getPost('nama'));
        $data['pedagang_pasar'] = decrypt_url($this->request->getPost('pasar'));
        $data['pedagang_update_by'] = anti_injection($this->request->getPost('username'));
        $data['pedagang_update_time'] = date('Y-m-d H:i:s');

        if ($this->PDM->edit_pedagang($data)) {
            $this->__addLog('Pedagang Pangan', json_encode($data), 'Update', $data['pedagang_update_by']);
            $response["status"] = 1;
            $response["msg"] = "Berhasil perbarui data";
        } else {
            $response["status"] = 0;
            $response["msg"] = "Gagal perbarui data";
        }

        echo json_encode($response);
        exit;
    }

    public function get_jualan_pedagang_harian()
    {
        $date = $this->request->getGet('tanggal');
        $pedagang = decrypt_url($this->request->getGet('pedagang'));
        $page = $this->request->getGet("page");
        $limit = $this->request->getGet("limit");
        $item = $page * $limit;

        $jualan = $this->JM->get_jualan_by_pedagang($item, $pedagang);

        if (count($jualan) > 0) {
            $response["status"] = 1;
            $response["msg"] = "Data ditemukan";
            $response["total_data"] = $this->JM->count_jualan_by_pedagang($pedagang);
            $data_jualan = array();


            $isi = 0;
            foreach ($jualan as $row) {
                $data["komoditas_id"] = encrypt_url($row->komoditas_id);
                $data["komoditas_nama"] = $row->komoditas_nama;
                $data["komoditas_satuan"] = $row->komoditas_satuan;
                $data["komoditas_het"] = $row->komoditas_het;
                $data["komoditas_foto"] = base_url($row->komoditas_foto);
                $harga = $this->TM->get_transaksi_by_pedagang_komoditas_date($pedagang, $row->komoditas_id, $date);
                if (count($harga) > 0) {
                    $isi = $isi + 1;
                    $data['komoditas_transaksi'] = encrypt_url($harga[0]->transaksi_id);
                    $data['komoditas_harga'] = $harga[0]->transaksi_harga;
                    $data["komoditas_transaksi_catatan"] = $harga[0]->transaksi_catatan;
                } else {
                    $data['komoditas_transaksi'] = "0";
                    $data['komoditas_harga'] = "0";
                    $data["komoditas_transaksi_catatan"] = "";
                }

                array_push($data_jualan, $data);
            }
            $response['data_terisi'] = $isi;
            $response['data_kosong'] = count($jualan) - $isi;
            $response['data_komoditas'] = $data_jualan;
        } else {
            $response["status"] = "0";
            $response["msg"] = "Data tidak ditemukan";
            $response["data_komoditas"] = array();
        }

        echo json_encode($response);
        exit;
    }

    public function edit_harga_pangan()
    {
        $pasar = decrypt_url($this->request->getPost('pasar'));
        $date = $this->request->getPost('tanggal');
        $pedagang = decrypt_url($this->request->getPost('pedagang'));
        $het = $this->request->getPost('het');
        $komoditas = decrypt_url($this->request->getPost('komoditas'));
        $transaksi = $this->request->getPost('transaksi');
        $harga = $this->request->getPost('harga');
        $catatan = $this->request->getPost('catatan');
        $create_by = $this->request->getPost('create_by');
        if ($transaksi == "0") {
            $data['transaksi_id'] = null;
            $data['transaksi_tanggal'] = $date;
            $data['transaksi_pasar'] = $pasar;
            $data['transaksi_komoditas'] = $komoditas;
            $data['transaksi_het'] = $het;
            $data['transaksi_pedagang'] = $pedagang;
            $data['transaksi_harga'] = $harga;
            $data['transaksi_catatan'] = $catatan;
            $data['transaksi_status'] = '1';
            $data['transaksi_create_by'] = $create_by;
            $data['transaksi_create_time'] = date('Y-m-d H:i:s');

            if ($this->TM->add_transaksi($data)) {
                $this->__addLog('Transaksi', json_encode($data), 'Insert', $data['transaksi_create_by']);
                $response["status"] = "1";
                $response["msg"] = "Berhasil perbarui harga";
            } else {
                $response["status"] = "0";
                $response["msg"] = "Gagal perbarui harga";
            }
        } else {
            $data['transaksi_id'] = decrypt_url($transaksi);
            $data['transaksi_harga'] = $harga;
            $data['transaksi_het'] = $het;
            $data['transaksi_catatan'] = $catatan;
            $data['transaksi_update_by'] = $create_by;
            $data['transaksi_update_time'] = date('Y-m-d H:i:s');
            if ($this->TM->edit_transaksi($data)) {
                $this->__addLog('Transaksi', json_encode($data), 'Update', $data['transaksi_update_by']);
                $response["status"] = "1";
                $response["msg"] = "Berhasil perbarui harga";
            } else {
                $response["status"] = "0";
                $response["msg"] = "Gagal perbarui harga";
            }
        }
        echo json_encode($response);
        exit;
    }

    public function add_barang_penting()
    {
        $data['barang_id'] = null;
        $data['barang_grup'] = decrypt_url($this->request->getPost('grup'));
        $data['barang_nama'] = anti_injection($this->request->getPost('nama'));
        $data['barang_satuan'] = anti_injection($this->request->getPost('satuan'));
        $data['barang_het'] = anti_injection($this->request->getPost('het'));
        $data['barang_status'] = "1";
        $data['barang_create_by'] = $this->request->getPost('username');
        $data['barang_create_time'] = date('Y-m-d H:i:s');
        $data['barang_het_update_time'] = date('Y-m-d H:i:s');

        $patch = realpath(APPPATH . '..files/komoditas/');
        $short_patch = "files/komoditas/";
        if (isset($_FILES['image'])) {
            $validation = $this->validate([
                'rules' => 'uploaded[image]|mime_in[image,image/jpg,image/jpeg,image/png]|max_size[image,5120]'
            ]);
            if ($validation == FALSE) {
                $response["status"] = 0;
                $response["msg"] = "Foto tidak valid!";
                echo json_encode($response);
                exit;
            } else {
                $upload = $this->request->getFile('image');
                $image_name = $data['barang_nama'] . '-' . rand(1, 99) . date('YmdHis') . "." . $upload->getClientExtension();
                if ($upload->move($patch, $image_name)) {
                    $data['barang_foto'] =  $short_patch . $image_name;
                } else {
                    $response["status"] = 0;
                    $response["msg"] = "Gagal mengupload gambar";
                    echo json_encode($response);
                    exit;
                }
            }
        } else {
            $response["status"] = 0;
            $response["msg"] = "Mohon pilih gambar";
            echo json_encode($response);
            exit;
        }

        if ($this->BPM->add_barang($data)) {
            $this->__addLog('Barang Penting', json_encode($data), 'Insert', $data['barang_create_by']);
            $response["status"] = 1;
            $response["msg"] = "Berhasil menambahkan data";
        } else {
            $response["status"] = 0;
            $response["msg"] = "Gagal menambahkan data";
        }

        echo json_encode($response);
        exit;
    }

    public function edit_barang_penting()
    {
        $data['barang_id'] = decrypt_url($this->request->getPost('id'));
        $data['barang_grup'] = decrypt_url($this->request->getPost('grup'));
        $data['barang_nama'] = anti_injection($this->request->getPost('nama'));
        $data['barang_satuan'] = anti_injection($this->request->getPost('satuan'));
        $data['barang_het'] = anti_injection($this->request->getPost('het'));
        $data['barang_update_by'] = $this->request->getPost('username');
        $data['barang_update_time'] = date('Y-m-d H:i:s');
        $het = $this->BPM->select('barang_het')->where('barang_id', $data['barang_id'])->get()->getResult();
        if ($het[0]->barang_het != $data['barang_het']) {
            $data['barang_het_update_time'] = date('Y-m-d H:i:s');
        }
        $patch = realpath(APPPATH . '..files/komoditas/');
        $short_patch = "files/komoditas/";
        if (isset($_FILES['image'])) {
            $validation = $this->validate([
                'rules' => 'uploaded[image]|mime_in[image,image/jpg,image/jpeg,image/png]|max_size[image,5120]'
            ]);
            if ($validation == FALSE) {
                $response["status"] = 0;
                $response["msg"] = "Foto tidak valid!";
                echo json_encode($response);
                exit;
            } else {
                $upload = $this->request->getFile('image');
                $image_name = $data['barang_nama'] . '-' . rand(1, 99) . date('YmdHis') . "." . $upload->getClientExtension();
                if ($upload->move($patch, $image_name)) {
                    $data['barang_foto'] =  $short_patch . $image_name;
                } else {
                    $response["status"] = 0;
                    $response["msg"] = "Gagal mengupload gambar";
                    echo json_encode($response);
                    exit;
                }
            }
        }

        if ($this->BPM->edit_barang($data)) {
            $this->__addLog('Barang Penting', json_encode($data), 'Update', $data['barang_update_by']);
            $response["status"] = 1;
            $response["msg"] = "Berhasil perbarui data";
        } else {
            $response["status"] = 0;
            $response["msg"] = "Gagal perbarui data";
        }

        echo json_encode($response);
        exit;
    }


    public function delete_barang_penting()
    {
        $data['barang_id'] = decrypt_url($this->request->getPost('id'));
        $data['barang_status'] = "0";
        $data['barang_update_by'] = $this->request->getPost('username');
        $data['barang_update_time'] = date('Y-m-d H:i:s');

        if ($this->BPM->edit_barang($data)) {
            $this->__addLog('Barang Penting', json_encode($data), 'Delete', $data['barang_update_by']);
            $response["status"] = 1;
            $response["msg"] = "Berhasil menghapus data";
        } else {
            $response["status"] = 0;
            $response["msg"] = "Gagal menghapus data";
        }

        echo json_encode($response);
        exit;
    }

    public function get_barang_penting()
    {
        $page = $this->request->getGet("page");
        $limit = $this->request->getGet("limit");
        $item = $page * $limit;
        $keyword = $this->request->getGet("keyword");
        if ($this->request->getGet("grup") != "null") {
            $grup = decrypt_url($this->request->getGet("grup"));
        } else {
            $grup = "null";
        }
        $barang = $this->BPM->get_all_barang_by_filter($item, $keyword, $grup);
        if (count($barang) > 0) {
            $response["status"] = 1;
            $response["msg"] = "Data ditemukan";
            $response["total_data"] = $this->BPM->count_barang_by_filter($keyword, $grup);
            $response["data_komoditas"] = array();

            foreach ($barang as $row) {
                $data["komoditas_id"] = encrypt_url($row->barang_id);
                $data["komoditas_nama"] = $row->barang_nama;
                $data["komoditas_grup"] = encrypt_url($row->barang_grup);
                $data["komoditas_satuan"] = $row->barang_satuan;
                $data["komoditas_het"] = $row->barang_het;
                $data["komoditas_het_update_time"] = tgl_indo(date('Y-m-d', strtotime($row->barang_het_update_time)));
                $data["komoditas_foto"] = base_url($row->barang_foto);
                $data["komoditas_nama_grup"] = $row->grup_komoditas_nama;
                array_push($response["data_komoditas"], $data);
            }
        } else {
            $response["status"] = "0";
            $response["msg"] = "Data tidak ditemukan";
            $response["data_komoditas"] = array();
        }
        echo json_encode($response);
        exit;
    }

    public function get_distributor_barang_penting()
    {
        $page = $this->request->getGet("page");
        $limit = $this->request->getGet("limit");
        $item = $page * $limit;
        $keyword = $this->request->getGet("keyword");
        $distributor = $this->DBPM->get_distributor_by_filter($item, $keyword);
        if (count($distributor) > 0) {
            $response["status"] = 1;
            $response["msg"] = "Data ditemukan";
            $response["total_data"] = $this->DBPM->count_distributor_by_filter($keyword);
            $response["data_distributor"] = array();

            foreach ($distributor as $row) {
                $data["distributor_id"] = encrypt_url($row->distributor_id);
                $data["distributor_nama"] = $row->distributor_nama;
                $data["total_jualan"] = $this->RBPM->count_barang_by_distributor($row->distributor_id);
                array_push($response["data_distributor"], $data);
            }
        } else {
            $response["status"] = "0";
            $response["msg"] = "Data tidak ditemukan";
            $response["data_distributor"] = array();
        }
        echo json_encode($response);
        exit;
    }


    public function add_distributor_barang_penting()
    {
        $data['distributor_id'] = null;
        $data['distributor_nama'] = anti_injection($this->request->getPost('nama'));
        $data['distributor_status'] = "1";
        $data['distributor_create_by'] = $this->request->getPost('username');
        $data['distributor_create_time'] = date('Y-m-d H:i:s');

        if ($this->DBPM->add_distributor($data)) {
            $this->__addLog('Distributor Barang Penting', json_encode($data), 'Insert', $data['distributor_create_by']);
            $response["status"] = 1;
            $response["msg"] = "Berhasil menambahkan data";
        } else {
            $response["status"] = 0;
            $response["msg"] = "Gagal menambahkan data";
        }

        echo json_encode($response);
        exit;
    }

    public function edit_distributor_barang_penting()
    {
        $data['distributor_id'] = decrypt_url($this->request->getPost('id'));
        $data['distributor_nama'] = anti_injection($this->request->getPost('nama'));
        $data['distributor_update_by'] = $this->request->getPost('username');
        $data['distributor_update_time'] = date('Y-m-d H:i:s');

        if ($this->DBPM->edit_distributor($data)) {
            $this->__addLog('Distributor Barang Penting', json_encode($data), 'Update', $data['distributor_update_by']);
            $response["status"] = 1;
            $response["msg"] = "Berhasil perbarui data";
        } else {
            $response["status"] = 0;
            $response["msg"] = "Gagal perbarui data";
        }

        echo json_encode($response);
        exit;
    }

    public function delete_distributor_barang_penting()
    {
        $data['distributor_id'] = decrypt_url($this->request->getPost('id'));
        $data['distributor_status'] = "0";
        $data['distributor_update_by'] = $this->request->getPost('username');
        $data['distributor_update_time'] = date('Y-m-d H:i:s');

        if ($this->DBPM->edit_distributor($data)) {
            $this->__addLog('Distributor Barang Penting', json_encode($data), 'Delete', $data['distributor_update_by']);
            $response["status"] = 1;
            $response["msg"] = "Berhasil menghapus data";
        } else {
            $response["status"] = 0;
            $response["msg"] = "Gagal menghapus data";
        }

        echo json_encode($response);
        exit;
    }

    public function get_relasi_distributor_barang_penting()
    {
        $distributor = decrypt_url($this->request->getGet('distributor'));
        $relasi = $this->RBPM
            ->select('relasi_id, barang_nama, barang_id, barang_het, barang_satuan, grup_komoditas_nama')
            ->join('tb_barang_penting', 'tb_relasi_barang_penting.relasi_barang = tb_barang_penting.barang_id')
            ->join('tb_grup_komoditas', 'tb_barang_penting.barang_grup = tb_grup_komoditas.grup_komoditas_id')
            ->where('relasi_distributor', $distributor)
            ->where('relasi_status', '1')
            ->where('barang_status', '1')
            ->where('grup_komoditas_status', '1')
            ->orderBy('relasi_create_time', 'DESC')
            ->get()->getResult();
        if (count($relasi) > 0) {
            $response["status"] = 1;
            $response["msg"] = "Data ditemukan";
            $response["total_data"] = count($relasi);
            $response["data_relasi"] = array();
            foreach ($relasi as $row) {
                $data["relasi_id"] = encrypt_url($row->relasi_id);
                $data["komoditas_id"] = encrypt_url($row->barang_id);
                $data["komoditas_nama"] = $row->barang_nama;
                $data["komoditas_satuan"] = $row->barang_satuan;
                $data["komoditas_het"] = $row->barang_het;
                $data["grup_komoditas_nama"] = $row->grup_komoditas_nama;
                array_push($response["data_relasi"], $data);
            }
        } else {
            $response["status"] = "0";
            $response["msg"] = "Data tidak ditemukan";
            $response["data_relasi"] = array();
        }
        echo json_encode($response);
        exit;
    }

    public function add_relasi_distributor_barang_penting()
    {
        $data['relasi_id'] = null;
        $data['relasi_distributor'] = decrypt_url($this->request->getPost('distributor'));
        $data['relasi_barang'] = decrypt_url($this->request->getPost('barang'));
        $data['relasi_status'] = '1';
        $data['relasi_create_by'] = $this->request->getPost('username');
        $data['relasi_create_time'] = date('Y-m-d H:i:s');

        $cek = $this->RBPM->select('relasi_id')->where('relasi_distributor', $data['relasi_distributor'])->where('relasi_barang', $data['relasi_barang'])->where('relasi_status', '1')->countAllResults();
        if ($cek == 0) {
            if ($this->RBPM->add_relasi($data)) {
                $this->__addLog('Detail Distributor Barang Penting', json_encode($data), 'Update', $data['relasi_create_time']);
                $response["status"] = 1;
                $response["msg"] = "Berhasil menambahkan data";
            } else {
                $response["status"] = 0;
                $response["msg"] = "Gagal menambahkan data";
            }

            echo json_encode($response);
            exit;
        } else {
            $response["status"] = 0;
            $response["msg"] = "Data sudah ada !";
            echo json_encode($response);
            exit;
        }
    }

    public function delete_relasi_distributor_barang_penting()
    {
        $data['relasi_id'] = decrypt_url($this->request->getPost('id'));
        $data['relasi_status'] = '0';
        $data['relasi_update_by'] = $this->request->getPost('username');
        $data['relasi_update_time'] = date('Y-m-d H:i:s');


        if ($this->RBPM->edit_relasi($data)) {
            $this->__addLog('Detail Distributor Barang Penting', json_encode($data), 'Delete', $data['relasi_update_time']);
            $response["status"] = 1;
            $response["msg"] = "Berhasil menghapus data";
        } else {
            $response["status"] = 0;
            $response["msg"] = "Gagal menghapus data";
        }

        echo json_encode($response);
        exit;
    }

    public function get_harga_barang_penting_distributor_harian()
    {
        $date = $this->request->getGet('tanggal');
        $distributor = decrypt_url($this->request->getGet('distributor'));
        $page = $this->request->getGet("page");
        $limit = $this->request->getGet("limit");
        $item = $page * $limit;

        $barang = $this->RBPM->get_barang_by_distributor($item, $distributor);
        if (count($barang) > 0) {
            $response["status"] = 1;
            $response["msg"] = "Data ditemukan";
            $response["total_data"] = $this->RBPM->count_barang_by_distributor($distributor);
            $data_jualan = array();
            $isi = 0;
            foreach ($barang as $row) {
                $data["komoditas_id"] = encrypt_url($row->barang_id);
                $data["komoditas_nama"] = $row->barang_nama;
                $data["komoditas_satuan"] = $row->barang_satuan;
                $data["komoditas_het"] = $row->barang_het;
                $data["komoditas_foto"] = base_url($row->barang_foto);
                $harga = $this->TBPM->get_transaksi_by_distributor_barang_date($distributor, $row->barang_id, $date);
                if (count($harga) > 0) {
                    $isi = $isi + 1;
                    $data['komoditas_transaksi'] = encrypt_url($harga[0]->transaksi_id);
                    $data['komoditas_harga'] = $harga[0]->transaksi_harga;
                    $data["komoditas_transaksi_catatan"] = $harga[0]->transaksi_catatan;
                } else {
                    $data['komoditas_transaksi'] = "0";
                    $data['komoditas_harga'] = "0";
                    $data["komoditas_transaksi_catatan"] = "";
                }

                array_push($data_jualan, $data);
            }
            $response['data_terisi'] = $isi;
            $response['data_kosong'] = count($barang) - $isi;
            $response['data_komoditas'] = $data_jualan;
        } else {
            $response["status"] = "0";
            $response["msg"] = "Data tidak ditemukan";
            $response["data_jualan"] = array();
        }

        echo json_encode($response);
        exit;
    }

    public function edit_harga_barang_penting()
    {
        $date = $this->request->getPost('tanggal');
        $distributor = decrypt_url($this->request->getPost('distributor'));
        $het = $this->request->getPost('het');
        $barang = decrypt_url($this->request->getPost('barang'));
        $transaksi = $this->request->getPost('transaksi');
        $harga = $this->request->getPost('harga');
        $catatan = $this->request->getPost('catatan');
        $create_by = $this->request->getPost('create_by');
        if ($transaksi == "0") {
            $data['transaksi_id'] = null;
            $data['transaksi_tanggal'] = $date;
            $data['transaksi_barang'] = $barang;
            $data['transaksi_het'] = $het;
            $data['transaksi_distributor'] = $distributor;
            $data['transaksi_harga'] = $harga;
            $data['transaksi_catatan'] = $catatan;
            $data['transaksi_status'] = '1';
            $data['transaksi_create_by'] = $create_by;
            $data['transaksi_create_time'] = date('Y-m-d H:i:s');

            if ($this->TBPM->add_transaksi($data)) {
                $this->__addLog('Harga Barang Penting', json_encode($data), 'Insert', $data['transaksi_create_by']);
                $response["status"] = "1";
                $response["msg"] = "Berhasil perbarui harga";
            } else {
                $response["status"] = "0";
                $response["msg"] = "Gagal perbarui harga";
            }
        } else {
            $data['transaksi_id'] = decrypt_url($transaksi);
            $data['transaksi_harga'] = $harga;
            $data['transaksi_het'] = $het;
            $data['transaksi_catatan'] = $catatan;
            $data['transaksi_update_by'] = $create_by;
            $data['transaksi_update_time'] = date('Y-m-d H:i:s');
            if ($this->TBPM->edit_transaksi($data)) {
                $this->__addLog('Harga Barang Penting', json_encode($data), 'Update', $data['transaksi_update_by']);
                $response["status"] = "1";
                $response["msg"] = "Berhasil perbarui harga";
            } else {
                $response["status"] = "0";
                $response["msg"] = "Gagal perbarui harga";
            }
        }
        echo json_encode($response);
        exit;
    }

    public function get_transaksi_barang_penting()
    {
        $page = $this->request->getGet("page");
        $limit = $this->request->getGet("limit");
        $awal = $this->request->getGet("tanggal_awal");
        $akhir = $this->request->getGet("tanggal_akhir");
        if ($awal != "") {
            $awal = date('d-m-Y', strtotime($awal));
            $awal = date('Y-m-d', strtotime($awal));
        }
        if ($akhir != "") {
            $akhir = date('d-m-Y', strtotime($akhir));
            $akhir = date('Y-m-d', strtotime($akhir));
        }

        if ($akhir < $awal) {
            $response["status"] = "0";
            $response["msg"] = "Data tidak ditemukan";
            $response["data_transaksi"] = array();
            echo json_encode($response);
            exit;
        } else {
            $item = $page * $limit;
            $keyword = $this->request->getGet("keyword");
            $transaksi = $this->TBPM->get_all_transaksi_by_filter($item, $awal, $akhir, $keyword);
            if (count($transaksi) > 0) {
                $response["status"] = 1;
                $response["msg"] = "Data ditemukan";
                $response["total_data"] = $this->TBPM->count_transaksi_by_filter($awal, $akhir, $keyword);
                $response["data_transaksi"] = array();

                foreach ($transaksi as $row) {
                    $data["transaksi_tanggal"] = tgl_indo($row->transaksi_tanggal);
                    $data["transaksi_id"] = encrypt_url($row->transaksi_id);
                    $data["transaksi_distributor_nama"] = $row->distributor_nama;
                    $data["transaksi_komoditas"] = encrypt_url($row->transaksi_barang);
                    $data["transaksi_nama_komoditas"] = $row->barang_nama;
                    $data["transaksi_foto_komoditas"] = base_url($row->barang_foto);
                    $data["transaksi_harga"] = $row->transaksi_harga;
                    array_push($response["data_transaksi"], $data);
                }
            } else {
                $response["status"] = "0";
                $response["msg"] = "Data tidak ditemukan";
                $response["data_transaksi"] = array();
            }
            echo json_encode($response);
            exit;
        }
    }

    public function get_transaksi_penting_by_id()
    {
        $id = decrypt_url($this->request->getGet('id'));
        $transaksi = $this->TBPM->get_transaksi_by_id($id);
        if (count($transaksi) > 0) {
            $response["status"] = 1;
            $response["msg"] = "Data ditemukan";
            $response["total_data"] = count($transaksi);
            $response["data_transaksi"] = array();

            foreach ($transaksi as $row) {
                $data["transaksi_tanggal"] = tgl_indo($row->transaksi_tanggal);
                $data["transaksi_id"] = encrypt_url($row->transaksi_id);
                $data["transaksi_komoditas"] = $row->transaksi_barang;
                $data["transaksi_nama_komoditas"] = $row->barang_nama;
                $data["transaksi_foto_komoditas"] = base_url($row->barang_foto);
                $data["transaksi_distributor_nama"] = $row->distributor_nama;
                $data["transaksi_catatan"] = $row->transaksi_catatan;
                $data["transaksi_het"] = $row->transaksi_het;
                $data["transaksi_harga"] = $row->transaksi_harga;
                $data["transaksi_satuan"] = $row->barang_satuan;
                array_push($response["data_transaksi"], $data);
            }
        } else {
            $response["status"] = "0";
            $response["msg"] = "Data tidak ditemukan";
            $response["data_transaksi"] = array();
        }
        echo json_encode($response);
        exit;
    }


    public function edit_transaksi_barang_penting()
    {
        $data['transaksi_id'] = decrypt_url($this->request->getPost('transaksi'));
        $data['transaksi_harga'] = $this->request->getPost('harga');
        $data['transaksi_catatan'] =  $this->request->getPost('catatan');
        $data['transaksi_update_by'] = $this->request->getPost('create_by');
        $data['transaksi_update_time'] = date('Y-m-d H:i:s');
        if ($this->TBPM->edit_transaksi($data)) {
            $this->__addLog('Transaksi Barang Penting', json_encode($data), 'Update', $data['transaksi_update_by']);
            $response["status"] = "1";
            $response["msg"] = "Berhasil perbarui harga";
        } else {
            $response["status"] = "0";
            $response["msg"] = "Gagal perbarui harga";
        }
        echo json_encode($response);
        exit;
    }

    public function delete_transaksi_barang_penting()
    {
        $data['transaksi_id'] = decrypt_url($this->request->getPost('id'));
        $data['transaksi_status'] = '0';
        $data['transaksi_update_by'] = $this->request->getPost('create_by');
        $data['transaksi_update_time'] = date('Y-m-d H:i:s');
        if ($this->TBPM->edit_transaksi($data)) {
            $this->__addLog('Transaksi Barang Penting', json_encode($data), 'Delete', $data['transaksi_update_by']);
            $response["status"] = "1";
            $response["msg"] = "Berhasil menghapus data";
        } else {
            $response["status"] = "0";
            $response["msg"] = "Gagal menghapus data";
        }
        echo json_encode($response);
        exit;
    }

    public function add_transaksi_barang_penting()
    {
        $data['transaksi_id'] = null;
        $tanggal = date('d-m-Y', strtotime($this->request->getPost('tanggal')));
        $data['transaksi_tanggal'] = date('Y-m-d', strtotime($tanggal));
        $data['transaksi_distributor'] = decrypt_url($this->request->getPost('distributor'));
        $data['transaksi_barang'] = decrypt_url($this->request->getPost('barang'));
        $data['transaksi_het'] = $this->request->getPost('het');
        $data['transaksi_harga'] = $this->request->getPost('harga');
        $data['transaksi_catatan'] =  $this->request->getPost('catatan');
        $data['transaksi_status'] =  '1';
        $data['transaksi_create_by'] = $this->request->getPost('create_by');
        $data['transaksi_create_time'] = date('Y-m-d H:i:s');

        $cek = $this->TBPM->select('transaksi_id')->where('transaksi_distributor', $data['transaksi_distributor'])->where('transaksi_barang', $data['transaksi_barang'])->where('transaksi_tanggal', $data['transaksi_tanggal'])->where('transaksi_status', '1')->countAllResults();
        if ($cek > 0) {
            $response["status"] = "0";
            $response["msg"] = "Transaksi Sudah Ada !!";
            echo json_encode($response);
            exit;
        } else {
            if ($this->TBPM->add_transaksi($data)) {
                $this->__addLog('Transaksi Barang Penting', json_encode($data), 'Insert', $data['transaksi_create_by']);
                $response["status"] = "1";
                $response["msg"] = "Berhasil menambahkan data";
            } else {
                $response["status"] = "0";
                $response["msg"] = "Gagal menambahkan data";
            }
            echo json_encode($response);
            exit;
        }
    }


    public function add_barang_lainnya()
    {
        $data['barang_id'] = null;
        $data['barang_grup'] = decrypt_url($this->request->getPost('grup'));
        $data['barang_nama'] = anti_injection($this->request->getPost('nama'));
        $data['barang_satuan'] = anti_injection($this->request->getPost('satuan'));
        $data['barang_het'] = anti_injection($this->request->getPost('het'));
        $data['barang_status'] = "1";
        $data['barang_create_by'] = $this->request->getPost('username');
        $data['barang_create_time'] = date('Y-m-d H:i:s');
        $data['barang_het_update_time'] = date('Y-m-d H:i:s');

        $patch = realpath(APPPATH . '..files/komoditas/');
        $short_patch = "files/komoditas/";
        if (isset($_FILES['image'])) {
            $validation = $this->validate([
                'rules' => 'uploaded[image]|mime_in[image,image/jpg,image/jpeg,image/png]|max_size[image,5120]'
            ]);
            if ($validation == FALSE) {
                $response["status"] = 0;
                $response["msg"] = "Foto tidak valid!";
                echo json_encode($response);
                exit;
            } else {
                $upload = $this->request->getFile('image');
                $image_name = $data['barang_nama'] . '-' . rand(1, 99) . date('YmdHis') . "." . $upload->getClientExtension();
                if ($upload->move($patch, $image_name)) {
                    $data['barang_foto'] =  $short_patch . $image_name;
                } else {
                    $response["status"] = 0;
                    $response["msg"] = "Gagal mengupload gambar";
                    echo json_encode($response);
                    exit;
                }
            }
        } else {
            $response["status"] = 0;
            $response["msg"] = "Mohon pilih gambar";
            echo json_encode($response);
            exit;
        }

        if ($this->BLM->add_barang($data)) {
            $this->__addLog('Barang Lainnya', json_encode($data), 'Insert', $data['barang_create_by']);
            $response["status"] = 1;
            $response["msg"] = "Berhasil menambahkan data";
        } else {
            $response["status"] = 0;
            $response["msg"] = "Gagal menambahkan data";
        }

        echo json_encode($response);
        exit;
    }

    public function edit_barang_lainnya()
    {
        $data['barang_id'] = decrypt_url($this->request->getPost('id'));
        $data['barang_grup'] = decrypt_url($this->request->getPost('grup'));
        $data['barang_nama'] = anti_injection($this->request->getPost('nama'));
        $data['barang_satuan'] = anti_injection($this->request->getPost('satuan'));
        $data['barang_het'] = anti_injection($this->request->getPost('het'));
        $data['barang_update_by'] = $this->request->getPost('username');
        $data['barang_update_time'] = date('Y-m-d H:i:s');
        $het = $this->BLM->select('barang_het')->where('barang_id', $data['barang_id'])->get()->getResult();
        if ($het[0]->barang_het != $data['barang_het']) {
            $data['barang_het_update_time'] = date('Y-m-d H:i:s');
        }
        $patch = realpath(APPPATH . '..files/komoditas/');
        $short_patch = "files/komoditas/";
        if (isset($_FILES['image'])) {
            $validation = $this->validate([
                'rules' => 'uploaded[image]|mime_in[image,image/jpg,image/jpeg,image/png]|max_size[image,5120]'
            ]);
            if ($validation == FALSE) {
                $response["status"] = 0;
                $response["msg"] = "Foto tidak valid!";
                echo json_encode($response);
                exit;
            } else {
                $upload = $this->request->getFile('image');
                $image_name = $data['barang_nama'] . '-' . rand(1, 99) . date('YmdHis') . "." . $upload->getClientExtension();
                if ($upload->move($patch, $image_name)) {
                    $data['barang_foto'] =  $short_patch . $image_name;
                } else {
                    $response["status"] = 0;
                    $response["msg"] = "Gagal mengupload gambar";
                    echo json_encode($response);
                    exit;
                }
            }
        }

        if ($this->BLM->edit_barang($data)) {
            $this->__addLog('Barang Lainnya', json_encode($data), 'Update', $data['barang_update_by']);
            $response["status"] = 1;
            $response["msg"] = "Berhasil perbarui data";
        } else {
            $response["status"] = 0;
            $response["msg"] = "Gagal perbarui data";
        }

        echo json_encode($response);
        exit;
    }


    public function delete_barang_lainnya()
    {
        $data['barang_id'] = decrypt_url($this->request->getPost('id'));
        $data['barang_status'] = "0";
        $data['barang_update_by'] = $this->request->getPost('username');
        $data['barang_update_time'] = date('Y-m-d H:i:s');

        if ($this->BLM->edit_barang($data)) {
            $this->__addLog('Barang Lainnya', json_encode($data), 'Delete', $data['barang_update_by']);
            $response["status"] = 1;
            $response["msg"] = "Berhasil menghapus data";
        } else {
            $response["status"] = 0;
            $response["msg"] = "Gagal menghapus data";
        }

        echo json_encode($response);
        exit;
    }

    public function get_barang_lainnya()
    {
        $page = $this->request->getGet("page");
        $limit = $this->request->getGet("limit");
        $item = $page * $limit;
        $keyword = $this->request->getGet("keyword");
        if ($this->request->getGet("grup") != "null") {
            $grup = decrypt_url($this->request->getGet("grup"));
        } else {
            $grup = "null";
        }
        $barang = $this->BLM->get_all_barang_by_filter($item, $keyword, $grup);
        if (count($barang) > 0) {
            $response["status"] = 1;
            $response["msg"] = "Data ditemukan";
            $response["total_data"] = $this->BLM->count_barang_by_filter($keyword, $grup);
            $response["data_komoditas"] = array();

            foreach ($barang as $row) {
                $data["komoditas_id"] = encrypt_url($row->barang_id);
                $data["komoditas_nama"] = $row->barang_nama;
                $data["komoditas_grup"] = encrypt_url($row->barang_grup);
                $data["komoditas_satuan"] = $row->barang_satuan;
                $data["komoditas_het"] = $row->barang_het;
                $data["komoditas_het_update_time"] = tgl_indo(date('Y-m-d', strtotime($row->barang_het_update_time)));
                $data["komoditas_foto"] = base_url($row->barang_foto);
                $data["komoditas_nama_grup"] = $row->grup_komoditas_nama;
                array_push($response["data_komoditas"], $data);
            }
        } else {
            $response["status"] = "0";
            $response["msg"] = "Data tidak ditemukan";
            $response["data_komoditas"] = array();
        }
        echo json_encode($response);
        exit;
    }

    public function get_distributor_barang_lainnya()
    {
        $page = $this->request->getGet("page");
        $limit = $this->request->getGet("limit");
        $item = $page * $limit;
        $keyword = $this->request->getGet("keyword");
        $distributor = $this->DBLM->get_distributor_by_filter($item, $keyword);
        if (count($distributor) > 0) {
            $response["status"] = 1;
            $response["msg"] = "Data ditemukan";
            $response["total_data"] = $this->DBLM->count_distributor_by_filter($keyword);
            $response["data_distributor"] = array();

            foreach ($distributor as $row) {
                $data["distributor_id"] = encrypt_url($row->distributor_id);
                $data["distributor_nama"] = $row->distributor_nama;
                $data["total_jualan"] = $this->RBLM->count_barang_by_distributor($row->distributor_id);
                array_push($response["data_distributor"], $data);
            }
        } else {
            $response["status"] = "0";
            $response["msg"] = "Data tidak ditemukan";
            $response["data_distributor"] = array();
        }
        echo json_encode($response);
        exit;
    }


    public function add_distributor_barang_lainnya()
    {
        $data['distributor_id'] = null;
        $data['distributor_nama'] = anti_injection($this->request->getPost('nama'));
        $data['distributor_status'] = "1";
        $data['distributor_create_by'] = $this->request->getPost('username');
        $data['distributor_create_time'] = date('Y-m-d H:i:s');

        if ($this->DBLM->add_distributor($data)) {
            $this->__addLog('Distributor Barang Lainnya', json_encode($data), 'Insert', $data['distributor_create_by']);
            $response["status"] = 1;
            $response["msg"] = "Berhasil menambahkan data";
        } else {
            $response["status"] = 0;
            $response["msg"] = "Gagal menambahkan data";
        }

        echo json_encode($response);
        exit;
    }

    public function edit_distributor_barang_lainnya()
    {
        $data['distributor_id'] = decrypt_url($this->request->getPost('id'));
        $data['distributor_nama'] = anti_injection($this->request->getPost('nama'));
        $data['distributor_update_by'] = $this->request->getPost('username');
        $data['distributor_update_time'] = date('Y-m-d H:i:s');

        if ($this->DBLM->edit_distributor($data)) {
            $this->__addLog('Distributor Barang Lainnya', json_encode($data), 'Update', $data['distributor_update_by']);
            $response["status"] = 1;
            $response["msg"] = "Berhasil perbarui data";
        } else {
            $response["status"] = 0;
            $response["msg"] = "Gagal perbarui data";
        }

        echo json_encode($response);
        exit;
    }

    public function delete_distributor_barang_lainnya()
    {
        $data['distributor_id'] = decrypt_url($this->request->getPost('id'));
        $data['distributor_status'] = "0";
        $data['distributor_update_by'] = $this->request->getPost('username');
        $data['distributor_update_time'] = date('Y-m-d H:i:s');

        if ($this->DBLM->edit_distributor($data)) {
            $this->__addLog('Distributor Barang Lainnya', json_encode($data), 'Delete', $data['distributor_update_by']);
            $response["status"] = 1;
            $response["msg"] = "Berhasil menghapus data";
        } else {
            $response["status"] = 0;
            $response["msg"] = "Gagal menghapus data";
        }

        echo json_encode($response);
        exit;
    }

    public function get_relasi_distributor_barang_lainnya()
    {
        $distributor = decrypt_url($this->request->getGet('distributor'));
        $relasi = $this->RBLM
            ->select('relasi_id, barang_nama, barang_id, barang_het, barang_satuan, grup_komoditas_nama')
            ->join('tb_barang_lainnya', 'tb_relasi_barang_lainnya.relasi_barang = tb_barang_lainnya.barang_id')
            ->join('tb_grup_komoditas', 'tb_barang_lainnya.barang_grup = tb_grup_komoditas.grup_komoditas_id')
            ->where('relasi_distributor', $distributor)
            ->where('relasi_status', '1')
            ->where('barang_status', '1')
            ->where('grup_komoditas_status', '1')
            ->orderBy('relasi_create_time', 'DESC')
            ->get()->getResult();
        if (count($relasi) > 0) {
            $response["status"] = 1;
            $response["msg"] = "Data ditemukan";
            $response["total_data"] = count($relasi);
            $response["data_relasi"] = array();
            foreach ($relasi as $row) {
                $data["relasi_id"] = encrypt_url($row->relasi_id);
                $data["komoditas_id"] = encrypt_url($row->barang_id);
                $data["komoditas_nama"] = $row->barang_nama;
                $data["komoditas_satuan"] = $row->barang_satuan;
                $data["komoditas_het"] = $row->barang_het;
                $data["grup_komoditas_nama"] = $row->grup_komoditas_nama;
                array_push($response["data_relasi"], $data);
            }
        } else {
            $response["status"] = "0";
            $response["msg"] = "Data tidak ditemukan";
            $response["data_relasi"] = array();
        }
        echo json_encode($response);
        exit;
    }

    public function add_relasi_distributor_barang_lainnya()
    {
        $data['relasi_id'] = null;
        $data['relasi_distributor'] = decrypt_url($this->request->getPost('distributor'));
        $data['relasi_barang'] = decrypt_url($this->request->getPost('barang'));
        $data['relasi_status'] = '1';
        $data['relasi_create_by'] = $this->request->getPost('username');
        $data['relasi_create_time'] = date('Y-m-d H:i:s');

        $cek = $this->RBLM->select('relasi_id')->where('relasi_distributor', $data['relasi_distributor'])->where('relasi_barang', $data['relasi_barang'])->where('relasi_status', '1')->countAllResults();
        if ($cek == 0) {
            if ($this->RBLM->add_relasi($data)) {
                $this->__addLog('Detail Distributor Barang Lainnya', json_encode($data), 'Update', $data['relasi_create_time']);
                $response["status"] = 1;
                $response["msg"] = "Berhasil menambahkan data";
            } else {
                $response["status"] = 0;
                $response["msg"] = "Gagal menambahkan data";
            }

            echo json_encode($response);
            exit;
        } else {
            $response["status"] = 0;
            $response["msg"] = "Data sudah ada !";
            echo json_encode($response);
            exit;
        }
    }

    public function delete_relasi_distributor_barang_lainnya()
    {
        $data['relasi_id'] = decrypt_url($this->request->getPost('id'));
        $data['relasi_status'] = '0';
        $data['relasi_update_by'] = $this->request->getPost('username');
        $data['relasi_update_time'] = date('Y-m-d H:i:s');


        if ($this->RBLM->edit_relasi($data)) {
            $this->__addLog('Detail Distributor Barang Lainnya', json_encode($data), 'Delete', $data['relasi_update_time']);
            $response["status"] = 1;
            $response["msg"] = "Berhasil menghapus data";
        } else {
            $response["status"] = 0;
            $response["msg"] = "Gagal menghapus data";
        }

        echo json_encode($response);
        exit;
    }

    public function get_harga_barang_lainnya_distributor_harian()
    {
        $date = $this->request->getGet('tanggal');
        $distributor = decrypt_url($this->request->getGet('distributor'));
        $page = $this->request->getGet("page");
        $limit = $this->request->getGet("limit");
        $item = $page * $limit;

        $barang = $this->RBLM->get_barang_by_distributor($item, $distributor);
        if (count($barang) > 0) {
            $response["status"] = 1;
            $response["msg"] = "Data ditemukan";
            $response["total_data"] = $this->RBLM->count_barang_by_distributor($distributor);
            $data_jualan = array();
            $isi = 0;
            foreach ($barang as $row) {
                $data["komoditas_id"] = encrypt_url($row->barang_id);
                $data["komoditas_nama"] = $row->barang_nama;
                $data["komoditas_satuan"] = $row->barang_satuan;
                $data["komoditas_het"] = $row->barang_het;
                $data["komoditas_foto"] = base_url($row->barang_foto);
                $harga = $this->TBLM->get_transaksi_by_distributor_barang_date($distributor, $row->barang_id, $date);
                if (count($harga) > 0) {
                    $isi = $isi + 1;
                    $data['komoditas_transaksi'] = encrypt_url($harga[0]->transaksi_id);
                    $data['komoditas_harga'] = $harga[0]->transaksi_harga;
                    $data["komoditas_transaksi_catatan"] = $harga[0]->transaksi_catatan;
                } else {
                    $data['komoditas_transaksi'] = "0";
                    $data['komoditas_harga'] = "0";
                    $data["komoditas_transaksi_catatan"] = "";
                }

                array_push($data_jualan, $data);
            }
            $response['data_terisi'] = $isi;
            $response['data_kosong'] = count($barang) - $isi;
            $response['data_komoditas'] = $data_jualan;
        } else {
            $response["status"] = "0";
            $response["msg"] = "Data tidak ditemukan";
            $response["data_jualan"] = array();
        }

        echo json_encode($response);
        exit;
    }

    public function edit_harga_barang_lainnya()
    {
        $date = $this->request->getPost('tanggal');
        $distributor = decrypt_url($this->request->getPost('distributor'));
        $het = $this->request->getPost('het');
        $barang = decrypt_url($this->request->getPost('barang'));
        $transaksi = $this->request->getPost('transaksi');
        $harga = $this->request->getPost('harga');
        $catatan = $this->request->getPost('catatan');
        $create_by = $this->request->getPost('create_by');
        if ($transaksi == "0") {
            $data['transaksi_id'] = null;
            $data['transaksi_tanggal'] = $date;
            $data['transaksi_barang'] = $barang;
            $data['transaksi_het'] = $het;
            $data['transaksi_distributor'] = $distributor;
            $data['transaksi_harga'] = $harga;
            $data['transaksi_catatan'] = $catatan;
            $data['transaksi_status'] = '1';
            $data['transaksi_create_by'] = $create_by;
            $data['transaksi_create_time'] = date('Y-m-d H:i:s');

            if ($this->TBLM->add_transaksi($data)) {
                $this->__addLog('Harga Barang Lainnya', json_encode($data), 'Insert', $data['transaksi_create_by']);
                $response["status"] = "1";
                $response["msg"] = "Berhasil perbarui harga";
            } else {
                $response["status"] = "0";
                $response["msg"] = "Gagal perbarui harga";
            }
        } else {
            $data['transaksi_id'] = decrypt_url($transaksi);
            $data['transaksi_harga'] = $harga;
            $data['transaksi_het'] = $het;
            $data['transaksi_catatan'] = $catatan;
            $data['transaksi_update_by'] = $create_by;
            $data['transaksi_update_time'] = date('Y-m-d H:i:s');
            if ($this->TBLM->edit_transaksi($data)) {
                $this->__addLog('Harga Barang Lainnya', json_encode($data), 'Update', $data['transaksi_update_by']);
                $response["status"] = "1";
                $response["msg"] = "Berhasil perbarui harga";
            } else {
                $response["status"] = "0";
                $response["msg"] = "Gagal perbarui harga";
            }
        }
        echo json_encode($response);
        exit;
    }

    public function get_transaksi_barang_lainnya()
    {
        $page = $this->request->getGet("page");
        $limit = $this->request->getGet("limit");
        $awal = $this->request->getGet("tanggal_awal");
        $akhir = $this->request->getGet("tanggal_akhir");
        if ($awal != "") {
            $awal = date('d-m-Y', strtotime($awal));
            $awal = date('Y-m-d', strtotime($awal));
        }
        if ($akhir != "") {
            $akhir = date('d-m-Y', strtotime($akhir));
            $akhir = date('Y-m-d', strtotime($akhir));
        }

        if ($akhir < $awal) {
            $response["status"] = "0";
            $response["msg"] = "Data tidak ditemukan";
            $response["data_transaksi"] = array();
            echo json_encode($response);
            exit;
        } else {
            $item = $page * $limit;
            $keyword = $this->request->getGet("keyword");
            $transaksi = $this->TBLM->get_all_transaksi_by_filter($item, $awal, $akhir, $keyword);
            if (count($transaksi) > 0) {
                $response["status"] = 1;
                $response["msg"] = "Data ditemukan";
                $response["total_data"] = $this->TBLM->count_transaksi_by_filter($awal, $akhir, $keyword);
                $response["data_transaksi"] = array();

                foreach ($transaksi as $row) {
                    $data["transaksi_tanggal"] = tgl_indo($row->transaksi_tanggal);
                    $data["transaksi_id"] = encrypt_url($row->transaksi_id);
                    $data["transaksi_distributor_nama"] = $row->distributor_nama;
                    $data["transaksi_komoditas"] = encrypt_url($row->transaksi_barang);
                    $data["transaksi_nama_komoditas"] = $row->barang_nama;
                    $data["transaksi_foto_komoditas"] = base_url($row->barang_foto);
                    $data["transaksi_harga"] = $row->transaksi_harga;
                    array_push($response["data_transaksi"], $data);
                }
            } else {
                $response["status"] = "0";
                $response["msg"] = "Data tidak ditemukan";
                $response["data_transaksi"] = array();
            }
            echo json_encode($response);
            exit;
        }
    }

    public function get_transaksi_lainnya_by_id()
    {
        $id = decrypt_url($this->request->getGet('id'));
        $transaksi = $this->TBLM->get_transaksi_by_id($id);
        if (count($transaksi) > 0) {
            $response["status"] = 1;
            $response["msg"] = "Data ditemukan";
            $response["total_data"] = count($transaksi);
            $response["data_transaksi"] = array();

            foreach ($transaksi as $row) {
                $data["transaksi_tanggal"] = tgl_indo($row->transaksi_tanggal);
                $data["transaksi_id"] = encrypt_url($row->transaksi_id);
                $data["transaksi_komoditas"] = $row->transaksi_barang;
                $data["transaksi_nama_komoditas"] = $row->barang_nama;
                $data["transaksi_foto_komoditas"] = base_url($row->barang_foto);
                $data["transaksi_distributor_nama"] = $row->distributor_nama;
                $data["transaksi_catatan"] = $row->transaksi_catatan;
                $data["transaksi_het"] = $row->transaksi_het;
                $data["transaksi_harga"] = $row->transaksi_harga;
                $data["transaksi_satuan"] = $row->barang_satuan;
                array_push($response["data_transaksi"], $data);
            }
        } else {
            $response["status"] = "0";
            $response["msg"] = "Data tidak ditemukan";
            $response["data_transaksi"] = array();
        }
        echo json_encode($response);
        exit;
    }


    public function edit_transaksi_barang_lainnya()
    {
        $data['transaksi_id'] = decrypt_url($this->request->getPost('transaksi'));
        $data['transaksi_harga'] = $this->request->getPost('harga');
        $data['transaksi_catatan'] =  $this->request->getPost('catatan');
        $data['transaksi_update_by'] = $this->request->getPost('create_by');
        $data['transaksi_update_time'] = date('Y-m-d H:i:s');
        if ($this->TBLM->edit_transaksi($data)) {
            $this->__addLog('Transaksi Barang Lainnya', json_encode($data), 'Update', $data['transaksi_update_by']);
            $response["status"] = "1";
            $response["msg"] = "Berhasil perbarui harga";
        } else {
            $response["status"] = "0";
            $response["msg"] = "Gagal perbarui harga";
        }
        echo json_encode($response);
        exit;
    }

    public function delete_transaksi_barang_lainnya()
    {
        $data['transaksi_id'] = decrypt_url($this->request->getPost('id'));
        $data['transaksi_status'] = '0';
        $data['transaksi_update_by'] = $this->request->getPost('create_by');
        $data['transaksi_update_time'] = date('Y-m-d H:i:s');
        if ($this->TBLM->edit_transaksi($data)) {
            $this->__addLog('Transaksi Barang Lainnya', json_encode($data), 'Delete', $data['transaksi_update_by']);
            $response["status"] = "1";
            $response["msg"] = "Berhasil menghapus data";
        } else {
            $response["status"] = "0";
            $response["msg"] = "Gagal menghapus data";
        }
        echo json_encode($response);
        exit;
    }

    public function add_transaksi_barang_lainnya()
    {
        $data['transaksi_id'] = null;
        $tanggal = date('d-m-Y', strtotime($this->request->getPost('tanggal')));
        $data['transaksi_tanggal'] = date('Y-m-d', strtotime($tanggal));
        $data['transaksi_distributor'] = decrypt_url($this->request->getPost('distributor'));
        $data['transaksi_barang'] = decrypt_url($this->request->getPost('barang'));
        $data['transaksi_het'] = $this->request->getPost('het');
        $data['transaksi_harga'] = $this->request->getPost('harga');
        $data['transaksi_catatan'] =  $this->request->getPost('catatan');
        $data['transaksi_status'] =  '1';
        $data['transaksi_create_by'] = $this->request->getPost('create_by');
        $data['transaksi_create_time'] = date('Y-m-d H:i:s');

        $cek = $this->TBLM->select('transaksi_id')->where('transaksi_distributor', $data['transaksi_distributor'])->where('transaksi_barang', $data['transaksi_barang'])->where('transaksi_tanggal', $data['transaksi_tanggal'])->where('transaksi_status', '1')->countAllResults();
        if ($cek > 0) {
            $response["status"] = "0";
            $response["msg"] = "Transaksi Sudah Ada !!";
            echo json_encode($response);
            exit;
        } else {
            if ($this->TBLM->add_transaksi($data)) {
                $this->__addLog('Transaksi Barang Lainnya', json_encode($data), 'Insert', $data['transaksi_create_by']);
                $response["status"] = "1";
                $response["msg"] = "Berhasil menambahkan data";
            } else {
                $response["status"] = "0";
                $response["msg"] = "Gagal menambahkan data";
            }
            echo json_encode($response);
            exit;
        }
    }

    public function get_komoditas_stok()
    {
        $page = $this->request->getGet("page");
        $limit = $this->request->getGet("limit");
        $item = $page * $limit;
        $keyword = $this->request->getGet("keyword");
        if ($this->request->getGet("grup") != "null") {
            $grup = decrypt_url($this->request->getGet("grup"));
        } else {
            $grup = "null";
        }
        $komoditas = $this->KSM->get_all_komoditas_by_filter($item, $keyword, $grup);
        if (count($komoditas) > 0) {
            $response["status"] = 1;
            $response["msg"] = "Data ditemukan";
            $response["total_data"] = $this->KSM->count_komoditas_by_filter($keyword, $grup);
            $response["data_komoditas"] = array();

            foreach ($komoditas as $row) {
                $data["komoditas_id"] = encrypt_url($row->komoditas_id);
                $data["komoditas_nama"] = $row->komoditas_nama;
                $data["komoditas_grup"] = encrypt_url($row->komoditas_grup);
                $data["komoditas_satuan"] = $row->komoditas_satuan;
                $data["komoditas_foto"] = base_url($row->komoditas_foto);
                $data["komoditas_nama_grup"] = $row->grup_komoditas_nama;
                array_push($response["data_komoditas"], $data);
            }
        } else {
            $response["status"] = "0";
            $response["msg"] = "Data tidak ditemukan";
            $response["data_komoditas"] = array();
        }
        echo json_encode($response);
        exit;
    }

    public function add_komoditas_stok()
    {
        $data['komoditas_id'] = null;
        $data['komoditas_grup'] = decrypt_url($this->request->getPost('grup'));
        $data['komoditas_nama'] = anti_injection($this->request->getPost('nama'));
        $data['komoditas_satuan'] = anti_injection($this->request->getPost('satuan'));
        $data['komoditas_status'] = "1";
        $data['komoditas_create_by'] = $this->request->getPost('username');
        $data['komoditas_create_time'] = date('Y-m-d H:i:s');

        $patch = realpath(APPPATH . '..files/komoditas/');
        $short_patch = "files/komoditas/";
        if (isset($_FILES['image'])) {
            $validation = $this->validate([
                'rules' => 'uploaded[image]|mime_in[image,image/jpg,image/jpeg,image/png]|max_size[image,5120]'
            ]);
            if ($validation == FALSE) {
                $response["status"] = 0;
                $response["msg"] = "Foto tidak valid!";
                echo json_encode($response);
                exit;
            } else {
                $upload = $this->request->getFile('image');
                $image_name = $data['komoditas_nama'] . '-' . rand(1, 99) . date('YmdHis') . "." . $upload->getClientExtension();
                if ($upload->move($patch, $image_name)) {
                    $data['komoditas_foto'] =  $short_patch . $image_name;
                } else {
                    $response["status"] = 0;
                    $response["msg"] = "Gagal mengupload gambar";
                    echo json_encode($response);
                    exit;
                }
            }
        } else {
            $response["status"] = 0;
            $response["msg"] = "Mohon pilih gambar";
            echo json_encode($response);
            exit;
        }

        if ($this->KSM->add_komoditas($data)) {
            $this->__addLog('Komoditas Stok', json_encode($data), 'Insert', $data['komoditas_create_by']);
            $response["status"] = 1;
            $response["msg"] = "Berhasil menambahkan data";
        } else {
            $response["status"] = 0;
            $response["msg"] = "Gagal menambahkan data";
        }

        echo json_encode($response);
        exit;
    }

    public function edit_komoditas_stok()
    {
        $data['komoditas_id'] = decrypt_url($this->request->getPost('id'));
        $data['komoditas_grup'] = decrypt_url($this->request->getPost('grup'));
        $data['komoditas_nama'] = anti_injection($this->request->getPost('nama'));
        $data['komoditas_satuan'] = anti_injection($this->request->getPost('satuan'));
        $data['komoditas_status'] = "1";
        $data['komoditas_update_by'] = $this->request->getPost('username');
        $data['komoditas_update_time'] = date('Y-m-d H:i:s');

        $patch = realpath(APPPATH . '..files/komoditas/');
        $short_patch = "files/komoditas/";
        if (isset($_FILES['image'])) {
            $validation = $this->validate([
                'rules' => 'uploaded[image]|mime_in[image,image/jpg,image/jpeg,image/png]|max_size[image,5120]'
            ]);
            if ($validation == FALSE) {
                $response["status"] = 0;
                $response["msg"] = "Foto tidak valid!";
                echo json_encode($response);
                exit;
            } else {
                $upload = $this->request->getFile('image');
                $image_name = 'img-' . date('YmdHis') . $upload->getName();
                if ($upload->move($patch, $image_name)) {
                    $data['komoditas_foto'] =  $short_patch . $image_name;
                } else {
                    $response["status"] = 0;
                    $response["msg"] = "Gagal mengupload gambar";
                    echo json_encode($response);
                    exit;
                }
            }
        }

        if ($this->KSM->edit_komoditas($data)) {
            $this->__addLog('Komoditas Stok', json_encode($data), 'Update', $data['komoditas_update_by']);
            $response["status"] = 1;
            $response["msg"] = "Berhasil perbarui data";
        } else {
            $response["status"] = 0;
            $response["msg"] = "Gagal perbarui data";
        }

        echo json_encode($response);
        exit;
    }

    public function delete_komoditas_stok()
    {
        $data['komoditas_id'] = decrypt_url($this->request->getPost('id'));
        $data['komoditas_status'] = "0";
        $data['komoditas_update_by'] = $this->request->getPost('username');
        $data['komoditas_update_time'] = date('Y-m-d H:i:s');

        if ($this->KSM->edit_komoditas($data)) {
            $this->__addLog('Komoditas Stok', json_encode($data), 'Delete', $data['komoditas_update_by']);
            $response["status"] = 1;
            $response["msg"] = "Berhasil menghapus data";
        } else {
            $response["status"] = 0;
            $response["msg"] = "Gagal menghapus data";
        }

        echo json_encode($response);
        exit;
    }

    public function get_distributor_stok()
    {
        $page = $this->request->getGet("page");
        $limit = $this->request->getGet("limit");
        $item = $page * $limit;
        $keyword = $this->request->getGet("keyword");
        $distributor = $this->DSM->get_distributor_by_filter($item, $keyword);
        if (count($distributor) > 0) {
            $response["status"] = 1;
            $response["msg"] = "Data ditemukan";
            $response["total_data"] = $this->DSM->count_distributor_by_filter($keyword);
            $response["data_distributor"] = array();

            foreach ($distributor as $row) {
                $data["distributor_id"] = encrypt_url($row->distributor_id);
                $data["distributor_nama"] = $row->distributor_nama;
                $data["distributor_toko"] = $row->distributor_toko;
                $data["distributor_kontak"] = $row->distributor_kontak;
                $data["distributor_alamat"] = $row->distributor_alamat;
                $data["total_jualan"] = $this->RSM->count_barang_by_distributor($row->distributor_id);
                array_push($response["data_distributor"], $data);
            }
        } else {
            $response["status"] = "0";
            $response["msg"] = "Data tidak ditemukan";
            $response["data_distributor"] = array();
        }
        echo json_encode($response);
        exit;
    }


    public function add_distributor_stok()
    {
        $data['distributor_id'] = null;
        $data['distributor_nama'] = anti_injection($this->request->getPost('nama'));
        $data['distributor_toko'] = anti_injection($this->request->getPost('toko'));
        $data['distributor_alamat'] = anti_injection($this->request->getPost('alamat'));
        $data['distributor_kontak'] = anti_injection($this->request->getPost('kontak'));
        $data['distributor_status'] = "1";
        $data['distributor_create_by'] = $this->request->getPost('username');
        $data['distributor_create_time'] = date('Y-m-d H:i:s');

        if ($this->DSM->add_distributor($data)) {
            $this->__addLog('Distributor Stok', json_encode($data), 'Insert', $data['distributor_create_by']);
            $response["status"] = 1;
            $response["msg"] = "Berhasil menambahkan data";
        } else {
            $response["status"] = 0;
            $response["msg"] = "Gagal menambahkan data";
        }

        echo json_encode($response);
        exit;
    }

    public function edit_distributor_stok()
    {
        $data['distributor_id'] = decrypt_url($this->request->getPost('id'));
        $data['distributor_nama'] = anti_injection($this->request->getPost('nama'));
        $data['distributor_toko'] = anti_injection($this->request->getPost('toko'));
        $data['distributor_alamat'] = anti_injection($this->request->getPost('alamat'));
        $data['distributor_kontak'] = anti_injection($this->request->getPost('kontak'));
        $data['distributor_update_by'] = $this->request->getPost('username');
        $data['distributor_update_time'] = date('Y-m-d H:i:s');

        if ($this->DSM->edit_distributor($data)) {
            $this->__addLog('Distributor Stok', json_encode($data), 'Update', $data['distributor_update_by']);
            $response["status"] = 1;
            $response["msg"] = "Berhasil perbarui data";
        } else {
            $response["status"] = 0;
            $response["msg"] = "Gagal perbarui data";
        }

        echo json_encode($response);
        exit;
    }

    public function delete_distributor_stok()
    {
        $data['distributor_id'] = decrypt_url($this->request->getPost('id'));
        $data['distributor_status'] = "0";
        $data['distributor_update_by'] = $this->request->getPost('username');
        $data['distributor_update_time'] = date('Y-m-d H:i:s');

        if ($this->DSM->edit_distributor($data)) {
            $this->__addLog('Distributor Stok', json_encode($data), 'Delete', $data['distributor_update_by']);
            $response["status"] = 1;
            $response["msg"] = "Berhasil menghapus data";
        } else {
            $response["status"] = 0;
            $response["msg"] = "Gagal menghapus data";
        }

        echo json_encode($response);
        exit;
    }

    public function get_relasi_distributor_stok()
    {
        $distributor = decrypt_url($this->request->getGet('distributor'));
        $relasi = $this->RSM
            ->select('relasi_id, komoditas_nama, komoditas_id, komoditas_satuan, grup_komoditas_nama')
            ->join('tb_komoditas_stok', 'tb_relasi_stok.relasi_barang = tb_komoditas_stok.komoditas_id')
            ->join('tb_grup_komoditas', 'tb_komoditas_stok.komoditas_grup = tb_grup_komoditas.grup_komoditas_id')
            ->where('relasi_distributor', $distributor)
            ->where('relasi_status', '1')
            ->where('komoditas_status', '1')
            ->where('grup_komoditas_status', '1')
            ->orderBy('relasi_create_time', 'DESC')
            ->get()->getResult();
        if (count($relasi) > 0) {
            $response["status"] = 1;
            $response["msg"] = "Data ditemukan";
            $response["total_data"] = count($relasi);
            $response["data_relasi"] = array();
            foreach ($relasi as $row) {
                $data["relasi_id"] = encrypt_url($row->relasi_id);
                $data["komoditas_id"] = encrypt_url($row->komoditas_id);
                $data["komoditas_nama"] = $row->komoditas_nama;
                $data["komoditas_satuan"] = $row->komoditas_satuan;
                $data["grup_komoditas_nama"] = $row->grup_komoditas_nama;
                array_push($response["data_relasi"], $data);
            }
        } else {
            $response["status"] = "0";
            $response["msg"] = "Data tidak ditemukan";
            $response["data_relasi"] = array();
        }
        echo json_encode($response);
        exit;
    }

    public function add_relasi_distributor_stok()
    {
        $data['relasi_id'] = null;
        $data['relasi_distributor'] = decrypt_url($this->request->getPost('distributor'));
        $data['relasi_barang'] = decrypt_url($this->request->getPost('barang'));
        $data['relasi_status'] = '1';
        $data['relasi_create_by'] = $this->request->getPost('username');
        $data['relasi_create_time'] = date('Y-m-d H:i:s');

        $cek = $this->RSM->select('relasi_id')->where('relasi_distributor', $data['relasi_distributor'])->where('relasi_barang', $data['relasi_barang'])->where('relasi_status', '1')->countAllResults();
        if ($cek == 0) {
            if ($this->RSM->add_relasi($data)) {
                $this->__addLog('Detail Distributor Stok', json_encode($data), 'Update', $data['relasi_create_time']);
                $response["status"] = 1;
                $response["msg"] = "Berhasil menambahkan data";
            } else {
                $response["status"] = 0;
                $response["msg"] = "Gagal menambahkan data";
            }

            echo json_encode($response);
            exit;
        } else {
            $response["status"] = 0;
            $response["msg"] = "Data sudah ada !";
            echo json_encode($response);
            exit;
        }
    }

    public function delete_relasi_distributor_stok()
    {
        $data['relasi_id'] = decrypt_url($this->request->getPost('id'));
        $data['relasi_status'] = '0';
        $data['relasi_update_by'] = $this->request->getPost('username');
        $data['relasi_update_time'] = date('Y-m-d H:i:s');


        if ($this->RSM->edit_relasi($data)) {
            $this->__addLog('Detail Distributor Stok', json_encode($data), 'Delete', $data['relasi_update_time']);
            $response["status"] = 1;
            $response["msg"] = "Berhasil menghapus data";
        } else {
            $response["status"] = 0;
            $response["msg"] = "Gagal menghapus data";
        }

        echo json_encode($response);
        exit;
    }

    public function get_stok_distributor_harian()
    {
        $date = $this->request->getGet('tanggal');
        $distributor = decrypt_url($this->request->getGet('distributor'));
        $page = $this->request->getGet("page");
        $limit = $this->request->getGet("limit");
        $item = $page * $limit;

        $barang = $this->RSM->get_barang_by_distributor($item, $distributor);
        if (count($barang) > 0) {
            $response["status"] = 1;
            $response["msg"] = "Data ditemukan";
            $response["total_data"] = $this->RSM->count_barang_by_distributor($distributor);
            $data_jualan = array();
            $isi = 0;
            foreach ($barang as $row) {
                $data["komoditas_id"] = encrypt_url($row->komoditas_id);
                $data["komoditas_nama"] = $row->komoditas_nama;
                $data["komoditas_satuan"] = $row->komoditas_satuan;
                $data["komoditas_foto"] = base_url($row->komoditas_foto);
                $harga = $this->TSM->get_transaksi_by_distributor_barang_date($distributor, $row->komoditas_id, $date);
                if (count($harga) > 0) {
                    $isi = $isi + 1;
                    $data['komoditas_transaksi'] = encrypt_url($harga[0]->transaksi_id);
                    $data['komoditas_transaksi_ketahanan'] = $harga[0]->transaksi_ketahanan;
                    $data['komoditas_transaksi_pemasok'] = $harga[0]->transaksi_pemasok;
                    $data['komoditas_transaksi_stok'] = $harga[0]->transaksi_stok;
                    $data["komoditas_transaksi_catatan"] = $harga[0]->transaksi_catatan;
                } else {
                    $data['komoditas_transaksi'] = "0";
                    $data['komoditas_transaksi_stok'] = "0";
                    $data['komoditas_transaksi_ketahanan'] = "";
                    $data['komoditas_transaksi_pemasok'] = "";
                    $data["komoditas_transaksi_catatan"] = "";
                }

                array_push($data_jualan, $data);
            }
            $response['data_terisi'] = $isi;
            $response['data_kosong'] = count($barang) - $isi;
            $response['data_komoditas'] = $data_jualan;
        } else {
            $response["status"] = "0";
            $response["msg"] = "Data tidak ditemukan";
            $response["data_jualan"] = array();
        }

        echo json_encode($response);
        exit;
    }

    public function edit_stok()
    {
        $date = $this->request->getPost('tanggal');
        $distributor = decrypt_url($this->request->getPost('distributor'));
        $barang = decrypt_url($this->request->getPost('barang'));
        $transaksi = $this->request->getPost('transaksi');
        $stok = $this->request->getPost('stok');
        $pemasok = $this->request->getPost('pemasok');
        $ketahanan = $this->request->getPost('ketahanan');
        $catatan = $this->request->getPost('catatan');
        $create_by = $this->request->getPost('create_by');
        if ($transaksi == "0") {
            $data['transaksi_id'] = null;
            $data['transaksi_tanggal'] = $date;
            $data['transaksi_barang'] = $barang;
            $data['transaksi_distributor'] = $distributor;
            $data['transaksi_stok'] = $stok;
            $data['transaksi_ketahanan'] = $ketahanan;
            $data['transaksi_pemasok'] = $pemasok;
            $data['transaksi_catatan'] = $catatan;
            $data['transaksi_status'] = '1';
            $data['transaksi_create_by'] = $create_by;
            $data['transaksi_create_time'] = date('Y-m-d H:i:s');
            if ($this->TSM->add_transaksi($data)) {
                $this->__addLog('Harga Barang Penting', json_encode($data), 'Insert', $data['transaksi_create_by']);
                $response["status"] = "1";
                $response["msg"] = "Berhasil perbarui harga";
            } else {
                $response["status"] = "0";
                $response["msg"] = "Gagal perbarui harga";
            }
        } else {
            $data['transaksi_id'] = decrypt_url($transaksi);
            $data['transaksi_stok'] = $stok;
            $data['transaksi_ketahanan'] = $ketahanan;
            $data['transaksi_pemasok'] = $pemasok;
            $data['transaksi_catatan'] = $catatan;
            $data['transaksi_update_by'] = $create_by;
            $data['transaksi_update_time'] = date('Y-m-d H:i:s');
            if ($this->TSM->edit_transaksi($data)) {
                $this->__addLog('Harga Barang Penting', json_encode($data), 'Update', $data['transaksi_update_by']);
                $response["status"] = "1";
                $response["msg"] = "Berhasil perbarui harga";
            } else {
                $response["status"] = "0";
                $response["msg"] = "Gagal perbarui harga";
            }
        }
        echo json_encode($response);
        exit;
    }

    public function get_transaksi_stok()
    {
        $page = $this->request->getGet("page");
        $limit = $this->request->getGet("limit");
        $awal = $this->request->getGet("tanggal_awal");
        $akhir = $this->request->getGet("tanggal_akhir");
        if ($awal != "") {
            $awal = date('d-m-Y', strtotime($awal));
            $awal = date('Y-m-d', strtotime($awal));
        }
        if ($akhir != "") {
            $akhir = date('d-m-Y', strtotime($akhir));
            $akhir = date('Y-m-d', strtotime($akhir));
        }

        if ($akhir < $awal) {
            $response["status"] = "0";
            $response["msg"] = "Data tidak ditemukan";
            $response["data_transaksi"] = array();
            echo json_encode($response);
            exit;
        } else {
            $item = $page * $limit;
            $keyword = $this->request->getGet("keyword");
            $transaksi = $this->TSM->get_all_transaksi_by_filter($item, $awal, $akhir, $keyword);
            if (count($transaksi) > 0) {
                $response["status"] = 1;
                $response["msg"] = "Data ditemukan";
                $response["total_data"] = $this->TSM->count_transaksi_by_filter($awal, $akhir, $keyword);
                $response["data_transaksi"] = array();

                foreach ($transaksi as $row) {
                    $data["transaksi_tanggal"] = tgl_indo($row->transaksi_tanggal);
                    $data["transaksi_id"] = encrypt_url($row->transaksi_id);
                    $data["transaksi_distributor_nama"] = $row->distributor_nama;
                    $data["transaksi_komoditas"] = encrypt_url($row->transaksi_barang);
                    $data["transaksi_nama_komoditas"] = $row->komoditas_nama;
                    $data["transaksi_foto_komoditas"] = base_url($row->komoditas_foto);
                    $data["transaksi_stok"] = $row->transaksi_stok;
                    $data["transaksi_satuan"] = $row->komoditas_satuan;
                    array_push($response["data_transaksi"], $data);
                }
            } else {
                $response["status"] = "0";
                $response["msg"] = "Data tidak ditemukan";
                $response["data_transaksi"] = array();
            }
            echo json_encode($response);
            exit;
        }
    }

    public function get_transaksi_stok_by_id()
    {
        $id = decrypt_url($this->request->getGet('id'));
        $transaksi = $this->TSM->get_transaksi_by_id($id);
        if (count($transaksi) > 0) {
            $response["status"] = 1;
            $response["msg"] = "Data ditemukan";
            $response["total_data"] = count($transaksi);
            $response["data_transaksi"] = array();

            foreach ($transaksi as $row) {
                $data["transaksi_tanggal"] = tgl_indo($row->transaksi_tanggal);
                $data["transaksi_id"] = encrypt_url($row->transaksi_id);
                $data["transaksi_komoditas"] = $row->transaksi_barang;
                $data["transaksi_nama_komoditas"] = $row->komoditas_nama;
                $data["transaksi_foto_komoditas"] = base_url($row->komoditas_foto);
                $data["transaksi_distributor_nama"] = $row->distributor_nama;
                $data["transaksi_catatan"] = $row->transaksi_catatan;
                $data["transaksi_stok"] = $row->transaksi_stok;
                $data["transaksi_ketahanan"] = $row->transaksi_ketahanan;
                $data["transaksi_pemasok"] = $row->transaksi_pemasok;
                $data["transaksi_satuan"] = $row->komoditas_satuan;
                array_push($response["data_transaksi"], $data);
            }
        } else {
            $response["status"] = "0";
            $response["msg"] = "Data tidak ditemukan";
            $response["data_transaksi"] = array();
        }
        echo json_encode($response);
        exit;
    }


    public function edit_transaksi_stok()
    {
        $data['transaksi_id'] = decrypt_url($this->request->getPost('transaksi'));
        $data['transaksi_stok'] = $this->request->getPost('stok');
        $data['transaksi_pemasok'] = $this->request->getPost('pemasok');
        $data['transaksi_ketahanan'] = $this->request->getPost('ketahanan');
        $data['transaksi_catatan'] =  $this->request->getPost('catatan');
        $data['transaksi_update_by'] = $this->request->getPost('create_by');
        $data['transaksi_update_time'] = date('Y-m-d H:i:s');
        if ($this->TSM->edit_transaksi($data)) {
            $this->__addLog('Transaksi Stok', json_encode($data), 'Update', $data['transaksi_update_by']);
            $response["status"] = "1";
            $response["msg"] = "Berhasil perbarui harga";
        } else {
            $response["status"] = "0";
            $response["msg"] = "Gagal perbarui harga";
        }
        echo json_encode($response);
        exit;
    }

    public function delete_transaksi_stok()
    {
        $data['transaksi_id'] = decrypt_url($this->request->getPost('id'));
        $data['transaksi_status'] = '0';
        $data['transaksi_update_by'] = $this->request->getPost('create_by');
        $data['transaksi_update_time'] = date('Y-m-d H:i:s');
        if ($this->TSM->edit_transaksi($data)) {
            $this->__addLog('Transaksi Stok', json_encode($data), 'Delete', $data['transaksi_update_by']);
            $response["status"] = "1";
            $response["msg"] = "Berhasil menghapus data";
        } else {
            $response["status"] = "0";
            $response["msg"] = "Gagal menghapus data";
        }
        echo json_encode($response);
        exit;
    }

    public function add_transaksi_stok()
    {
        $data['transaksi_id'] = null;
        $tanggal = date('d-m-Y', strtotime($this->request->getPost('tanggal')));
        $data['transaksi_tanggal'] = date('Y-m-d', strtotime($tanggal));
        $data['transaksi_distributor'] = decrypt_url($this->request->getPost('distributor'));
        $data['transaksi_barang'] = decrypt_url($this->request->getPost('barang'));
        $data['transaksi_stok'] = $this->request->getPost('stok');
        $data['transaksi_pemasok'] = $this->request->getPost('pemasok');
        $data['transaksi_ketahanan'] = $this->request->getPost('ketahanan');
        $data['transaksi_catatan'] =  $this->request->getPost('catatan');
        $data['transaksi_status'] =  '1';
        $data['transaksi_create_by'] = $this->request->getPost('create_by');
        $data['transaksi_create_time'] = date('Y-m-d H:i:s');

        $cek = $this->TSM->select('transaksi_id')->where('transaksi_distributor', $data['transaksi_distributor'])->where('transaksi_barang', $data['transaksi_barang'])->where('transaksi_tanggal', $data['transaksi_tanggal'])->where('transaksi_status', '1')->countAllResults();
        if ($cek > 0) {
            $response["status"] = "0";
            $response["msg"] = "Transaksi Sudah Ada !!";
            echo json_encode($response);
            exit;
        } else {
            if ($this->TSM->add_transaksi($data)) {
                $this->__addLog('Transaksi Stok', json_encode($data), 'Insert', $data['transaksi_create_by']);
                $response["status"] = "1";
                $response["msg"] = "Berhasil menambahkan data";
            } else {
                $response["status"] = "0";
                $response["msg"] = "Gagal menambahkan data";
            }
            echo json_encode($response);
            exit;
        }
    }

    public function perbarui_profil()
    {
        $email = $this->request->getPost('email');
        $id = decrypt_url($this->request->getPost('id'));
        $username = $this->request->getPost('username');

        $cek = $this->UM->select('user_id')->where('user_email', $email)->where('user_id !=', $id)->countAllResults();
        if ($cek > 0) {
            $response["status"] = 0;
            $response["msg"] = "Email sudah digunakan akun lain!";
            echo json_encode($response);
            exit;
        } else {
            $data['user_id'] = decrypt_url($this->request->getPost('id'));
            $data['user_name'] = $this->request->getPost('nama');
            $data['user_email'] = $this->request->getPost('email');
            $data['user_update_by'] = $username;
            $data['user_update_time'] = date('Y-m-d H:i:s');
            $patch = realpath(APPPATH . '..files/user/');
            $short_patch = "files/user/";
            if (isset($_FILES['image'])) {
                $validation = $this->validate([
                    'rules' => 'uploaded[image]|mime_in[image,image/jpg,image/jpeg,image/png]|max_size[image,8000]'
                ]);
                if ($validation == FALSE) {
                    $response["status"] = 0;
                    $response["msg"] = "Foto tidak valid!";
                    echo json_encode($response);
                    exit;
                } else {
                    $upload = $this->request->getFile('image');
                    $image_name = $username . '-' . rand(1, 99) . date('YmdHis') . "." . $upload->getClientExtension();
                    if ($upload->move($patch, $image_name)) {
                        $data['user_image'] =  $short_patch . $image_name;
                    } else {
                        $response["status"] = 0;
                        $response["msg"] = "Gagal mengupload gambar";
                        echo json_encode($response);
                        exit;
                    }
                }
            }

            if ($this->UM->edit_user($data)) {
                $this->__addLog('Profil', json_encode($data), 'Update', $username);
                $response["status"] = 1;
                $response["msg"] = "Berhasil perbarui profil";
            } else {
                $response["status"] = 0;
                $response["msg"] = "Gagal perbarui profil";
            }
            echo json_encode($response);
            exit;
        }
    }

    public function perbarui_password()
    {
        $id = decrypt_url($this->request->getPost('id'));
        $username = $this->request->getPost('username');
        $pass = $this->request->getPost('pass');
        $new_pass = $this->request->getPost('new_pass');

        $cek = $this->UM->select('user_password')->where('user_id', $id)->get()->getResult();
        if (count($cek) == 0) {
            $response["status"] = 0;
            $response["msg"] = "Akun tidak ditemukan";
            echo json_encode($response);
            exit;
        } else {
            if (!password_verify(md5($pass), $cek[0]->user_password)) {
                $response["status"] = 0;
                $response["msg"] = "Password yang anda masukkan salah!";
                echo json_encode($response);
                exit;
            } else {
                $data['user_id'] = $id;
                $data['user_password'] = password_hash(md5($new_pass), PASSWORD_DEFAULT);
                $data['user_update_by'] = $username;
                $data['user_update_time'] = date('Y-m-d H:i:s');
            }

            if ($this->UM->edit_user($data)) {
                $this->__addLog('Profil', json_encode($data), 'Update', $username);
                $response["status"] = 1;
                $response["msg"] = "Berhasil perbarui password";
            } else {
                $response["status"] = 0;
                $response["msg"] = "Gagal perbarui password";
            }
            echo json_encode($response);
            exit;
        }
    }

    public function get_statistik()
    {
        $pasar = $this->request->getGet('pasar');
        $tanggal = $this->request->getGet('tanggal');
        $tanggal = date('d-m-Y', strtotime($tanggal));
        $tanggal = date('Y-m-d', strtotime($tanggal));

        if ($pasar != "seluruh") {
            $pasar = decrypt_url($pasar);
        }

        $komoditas = $this->KM
            ->select('komoditas_id, komoditas_nama, komoditas_satuan, komoditas_foto')
            ->join('tb_grup_komoditas', 'tb_komoditas.komoditas_grup = tb_grup_komoditas.grup_komoditas_id')
            ->where('tb_grup_komoditas.grup_komoditas_status', '1')
            ->where('komoditas_status', '1')
            ->orderBy('komoditas_create_time', 'DESC')
            ->get()->getResult();

        $sudah_input = 0;
        $naik = 0;
        $turun = 0;
        $stabil = 0;

        foreach ($komoditas as $row) {
            $harga = $this->TM
                ->select('ROUND(AVG(transaksi_harga)) as rata_harga, transaksi_het')
                ->where('transaksi_status', '1')
                ->where('transaksi_tanggal', $tanggal);
            if ($pasar != "seluruh") {
                $harga = $harga->where('transaksi_pasar', $pasar);
            }
            $harga = $harga
                ->where('transaksi_komoditas', $row->komoditas_id)
                ->get()->getResult();

            if (count($harga) > 0 && $harga[0]->rata_harga != null && $harga[0]->rata_harga != 0) {
                $sudah_input = $sudah_input + 1;
                $row->rata_harga = $harga[0]->rata_harga;
                $row->komoditas_het = $harga[0]->transaksi_het;
                $date_prev_input = $this->TM
                    ->select('transaksi_tanggal')
                    ->where('transaksi_status', '1')
                    ->where('DATE(transaksi_tanggal) <', $tanggal);
                if ($pasar != "seluruh") {
                    $date_prev_input = $date_prev_input->where('transaksi_pasar', $pasar);
                }
                $date_prev_input = $date_prev_input
                    ->where('transaksi_komoditas', $row->komoditas_id)
                    ->orderBy('transaksi_tanggal', 'DESC')
                    ->limit(1)
                    ->get()->getResult();

                if (count($date_prev_input) > 0) {
                    $harga_prev_input = $this->TM
                        ->select('ROUND(AVG(transaksi_harga)) as rata_harga')
                        ->where('transaksi_status', '1')
                        ->where('transaksi_tanggal', $date_prev_input[0]->transaksi_tanggal);
                    if ($pasar != "seluruh") {
                        $harga_prev_input = $harga_prev_input->where('transaksi_pasar', $pasar);
                    }
                    $harga_prev_input = $harga_prev_input
                        ->where('transaksi_komoditas', $row->komoditas_id)
                        ->get()->getResult();
                    $harga_sebelumnya = $harga_prev_input[0]->rata_harga;

                    if ($row->rata_harga > $harga_sebelumnya) {
                        $row->status = "Naik";
                        $row->perbandingan = $row->rata_harga - $harga_sebelumnya;
                        $naik = $naik + 1;
                    } elseif ($row->rata_harga < $harga_sebelumnya) {
                        $row->status = "Turun";
                        $row->perbandingan = $harga_sebelumnya - $row->rata_harga;
                        $turun = $turun + 1;
                    } elseif ($row->rata_harga == $harga_sebelumnya) {
                        $row->status = "Stabil";
                        $row->perbandingan = 0;
                        $stabil = $stabil + 1;
                    }
                } else {
                    $harga_sebelumnya = $row->rata_harga;
                    $row->status = "Stabil";
                    $row->perbandingan = 0;
                    $stabil = $stabil + 1;
                    $row->prioritas = 0;
                }
            } else {
                $row->rata_harga = 0;
                $harga_sebelumnya = 0;
                $row->status = "Belum Diinput";
                $row->perbandingan = 0;
                $row->komoditas_het = 0;
            }

            if ($row->rata_harga > $row->komoditas_het) {
                if ($row->status == "Naik") {
                    $row->prioritas = 1;
                } elseif ($row->status == "Turun") {
                    $row->prioritas = 2;
                } elseif ($row->status == "Stabil") {
                    $row->prioritas = 3;
                }
            } else {
                if ($row->status == "Naik") {
                    $row->prioritas = 4;
                } elseif ($row->status == "Turun") {
                    $row->prioritas = 5;
                } elseif ($row->status == "Stabil") {
                    $row->prioritas = 6;
                } else {
                    $row->prioritas = 7;
                }
            }

            $row->komoditas_id = encrypt_url($row->komoditas_id);
        }


        usort($komoditas, 'sortByPrioritas');

        $response['total_komoditas'] = $this->KM->count_komoditas_by_filter("", "null");
        $response['sudah_input'] = $sudah_input;
        $response['belum_input'] = $response['total_komoditas'] - $sudah_input;
        $response['stabil'] = $stabil;
        $response['naik'] = $naik;
        $response['turun'] = $turun;
        $response['data'] = $komoditas;
        echo json_encode($response);
        exit;
    }

    public function detail_statistik()
    {
        $id = decrypt_url($this->request->getGet('id'));
        $tanggal = $this->request->getGet('tanggal');
        $tanggal = date('d-m-Y', strtotime($tanggal));
        $tanggal = date('Y-m-d', strtotime($tanggal));

        $komoditas = $this->KM
            ->select('komoditas_id, komoditas_nama, komoditas_foto')
            ->where('komoditas_id', $id)
            ->get()->getResult();

        $het = $this->TM
            ->select('transaksi_het')
            ->where('transaksi_komoditas', $id)
            ->get()->getResult();
        if (count($het) > 0) {
            $komoditas[0]->komoditas_het = $het[0]->transaksi_het;
        } else {
            $komoditas[0]->komoditas_het = 0;
        }

        $harga = $this->TM->select('ROUND(AVG(tb_transaksi.transaksi_harga)) as rata_harga')
            ->join('tb_pasar', 'tb_transaksi.transaksi_pasar = tb_pasar.pasar_id')
            ->where('transaksi_komoditas', $id)
            ->where('transaksi_status', '1')
            ->where('transaksi_tanggal', $tanggal)
            ->get()->getResult();
        if (count($harga) > 0 && $harga[0]->rata_harga != null) {
            $harga[0]->rata_harga = $harga[0]->rata_harga;
        } else {
            $harga[0]->rata_harga = 0;
        }

        $max = $this->TM->select('transaksi_harga')
            ->where('transaksi_komoditas', $id)
            ->where('transaksi_tanggal', $tanggal)
            ->where('transaksi_status', '1')
            ->orderBy('transaksi_harga', 'DESC')
            ->limit(1)
            ->get()->getResult();
        if (count($max) > 0 && $max[0]->transaksi_harga != null) {
            $max = $max[0]->transaksi_harga;
        } else {
            $max = 0;
        }

        $min = $this->TM->select('transaksi_harga')
            ->where('transaksi_komoditas', $id)
            ->where('transaksi_tanggal', $tanggal)
            ->where('transaksi_status', '1')
            ->orderBy('transaksi_harga', 'ASC')
            ->limit(1)
            ->get()->getResult();
        if (count($min) > 0 && $min[0]->transaksi_harga != null) {
            $min = $min[0]->transaksi_harga;
        } else {
            $min = 0;
        }

        $transaksi = $this->TM->select('ROUND(AVG(tb_transaksi.transaksi_harga)) as rata_harga, tb_transaksi.transaksi_tanggal, tb_pasar.pasar_nama, _area.name')
            ->join('tb_pasar', 'tb_transaksi.transaksi_pasar = tb_pasar.pasar_id')
            ->join('_area', 'tb_pasar.pasar_kecamatan = _area.code')
            ->where('transaksi_komoditas', $id)
            ->where('transaksi_status', '1')
            ->where('transaksi_tanggal', $tanggal)
            ->orderBy('transaksi_create_time', 'DESC')
            ->groupBy('transaksi_pasar')
            ->get()->getResult();


        $perubahan = $this->TM->select('ROUND(AVG(tb_transaksi.transaksi_harga)) as rata_harga, tb_transaksi.transaksi_tanggal, ROUND(AVG(tb_transaksi.transaksi_het)) as het')
            ->join('tb_pasar', 'tb_transaksi.transaksi_pasar = tb_pasar.pasar_id')
            ->join('_area', 'tb_pasar.pasar_kecamatan = _area.code')
            ->where('transaksi_komoditas', $id)
            ->where('transaksi_status', '1')
            ->where('transaksi_tanggal <=', $tanggal)
            ->orderBy('transaksi_create_time', 'DESC')
            ->groupBy('transaksi_tanggal')
            ->limit('4')
            ->get()->getResult();

        foreach ($perubahan as $row) {
            $row->transaksi_tanggal = date('d-m-Y', strtotime($row->transaksi_tanggal));
        }

        $response['komoditas_id'] = encrypt_url($komoditas[0]->komoditas_id);
        $response['komoditas_nama'] = $komoditas[0]->komoditas_nama;
        $response['komoditas_foto'] = $komoditas[0]->komoditas_foto;
        $response['komoditas_het'] = $komoditas[0]->komoditas_het;
        $response['rata_harga'] = $harga[0]->rata_harga;
        $response['max'] = $max;
        $response['min'] = $min;
        $response['transaksi'] = $transaksi;
        $response['perubahan'] = array_reverse($perubahan);

        echo json_encode($response);
        exit;
    }
}
