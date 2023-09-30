<?php

namespace App\Controllers;

use App\Models\Artikel_model;
use App\Models\Barang_lainnya_model;
use App\Models\Barang_penting_model;
use App\Models\Distributor_barang_lainnya_model;
use App\Models\Distributor_barang_penting_model;
use App\Models\Distributor_stok_model;
use App\Models\Grup_komoditas_model;
use App\Models\Image_artikel_model;
use App\Models\Kategori_artikel_model;
use App\Models\Komoditas_model;
use App\Models\Log_model;
use App\Models\Page_management_model;
use App\Models\Pasar_model;
use App\Models\Relasi_barang_lainnya_model;
use App\Models\Relasi_barang_penting_model;
use App\Models\Relasi_stok_model;
use App\Models\Transaksi_barang_lainnya_model;
use App\Models\Transaksi_barang_penting_model;
use App\Models\Transaksi_model;
use App\Models\Transaksi_stok_model;
use App\Models\User_model;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use Dompdf\Dompdf;
use Dompdf\Options;
use Dompdf\FontMetrics;

class Crud extends BaseController
{
    function __construct()
    {
        $this->session = \Config\Services::session();
        $this->request = \Config\Services::request();
        $this->db = \Config\Database::connect();

        $this->PMM = new Page_management_model();
        $this->LM = new Log_model();
        $this->UM = new User_model();
        $this->KAM = new Kategori_artikel_model();
        $this->ARM = new Artikel_model();
        $this->IAM = new Image_artikel_model();
        $this->GKM = new Grup_komoditas_model();
        $this->KM = new Komoditas_model();
        $this->TM = new Transaksi_model();
        $this->PM = new Pasar_model();
        $this->BPM = new Barang_penting_model();
        $this->DBPM = new Distributor_barang_penting_model();
        $this->RBPM = new Relasi_barang_penting_model();
        $this->TBPM = new Transaksi_barang_penting_model();
        $this->BLM = new Barang_lainnya_model();
        $this->DBLM = new Distributor_barang_lainnya_model();
        $this->RBLM = new Relasi_barang_lainnya_model();
        $this->TBLM = new Transaksi_barang_lainnya_model();
        $this->DSM = new Distributor_stok_model();
        $this->RSM = new Relasi_stok_model();
        $this->TSM = new Transaksi_stok_model();

        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        echo "apanih";
    }

    private function __addLog($modul, $aksi, $tipe)
    {
        $data = array(
            "log_id" => null,
            "log_user" => $_SESSION['user_username'],
            "log_time" => date("Y-m-d H:i:s"),
            "log_activity" => $aksi,
            "log_modul" => $modul,
            "log_type" => $tipe,
            "log_ip" => $_SERVER['REMOTE_ADDR'],
            "log_browser" => $this->request->getUserAgent()->getBrowser() . " - " . $this->request->getUserAgent()->getVersion(),
            "log_so" => $this->request->getUserAgent()->getPlatform(),
        );

        $this->LM->add_new_log($data);
    }

    public function add_kategori_artikel()
    {
        $data['kategori_id'] = null;
        $data['kategori_nama'] = anti_injection($this->request->getPost('kategori'));
        $data['kategori_status'] = '1';
        $data['kategori_create_time'] = date('Y-m-d H:i:s');
        $data['kategori_create_by'] = $_SESSION['user_username'];


        if ($this->KAM->add_kategori($data)) {
            $this->__addLog('Kategori Artikel', json_encode($data), 'Insert');
            $result['status'] = '1';
        } else {
            $result['status'] = '2';
        }

        echo json_encode($result);
        exit;
    }

    public function get_detail_kategori_artikel()
    {
        $id = decrypt_url($this->request->getGet('id'));
        $result['kategori'] = $this->KAM->get_detail_kategori($id);
        $result['status'] = '1';
        echo json_encode($result);
        exit;
    }

    public function edit_kategori_artikel()
    {
        $data['kategori_id'] = decrypt_url($this->request->getPost('id'));
        $data['kategori_nama'] = anti_injection($this->request->getPost('kategori'));
        $data['kategori_update_time'] = date('Y-m-d H:i:s');
        $data['kategori_update_by'] = $_SESSION['user_username'];


        if ($this->KAM->edit_kategori($data)) {
            $this->__addLog('Kategori Artikel', json_encode($data), 'Update');
            $result['status'] = '1';
        } else {
            $result['status'] = '2';
        }

        echo json_encode($result);
        exit;
    }

    public function delete_kategori_artikel()
    {
        $data['kategori_id'] = decrypt_url($this->request->getPost('id'));
        $data['kategori_status'] = '0';
        $data['kategori_update_time'] = date('Y-m-d H:i:s');
        $data['kategori_update_by'] = $_SESSION['user_username'];


        if ($this->KAM->edit_kategori($data)) {
            $this->__addLog('Kategori Artikel', json_encode($data), 'Delete');
            $result['status'] = '1';
        } else {
            $result['status'] = '2';
        }

        echo json_encode($result);
        exit;
    }

    public function check_url_artikel()
    {
        $url = $this->request->uri->getSegment(3);
        $cek = $this->ARM->get_artikel_by_url($url);
        if (count($cek) > 0) {
            $result['status'] = '0';
        } else {
            $result['status'] = '1';
        }
        echo json_encode($result);
        exit;
    }

    public function add_image_artikel()
    {
        $data['img_id'] = null;
        $data['img_artikel'] = decrypt_url($this->request->getPost('artikel_id'));
        $data['img_action_in'] = $this->request->getPost('action');
        $token = $this->request->getPost('token');
        if ($token == "") {
            $data['img_token_edit'] = null;
        } else {
            $data['img_token_edit'] = $token;
        }

        $data['img_status'] = '0';
        $rand = $this->request->getPost('rand');

        $patch = realpath(APPPATH . '..files/artikel/');
        $short_patch = "files/artikel/";
        if (isset($_FILES['photo'])) {
            $validation = $this->validate([
                'rules' => 'uploaded[photo]|mime_in[photo,image/jpg,image/jpeg,image/png]|max_size[photo,2048]'
            ]);
            if ($validation == FALSE) {
                $result['status'] = '2';
                echo json_encode($result);
                exit;
            } else {
                $upload = $this->request->getFile('photo');
                $gambar_name = $rand . '-' . $upload->getName();
                if ($upload->move($patch, $gambar_name)) {
                    $data['img_nama'] =  $short_patch . $gambar_name;
                } else {
                    $result['status'] = '3';
                    echo json_encode($result);
                    exit;
                }
            }
        }

        if ($this->IAM->add_image($data)) {
            $result['status'] = '1';
        } else {
            $result['status'] = '2';
        }
        echo json_encode($result);
        exit;
    }

    public function delete_image_artikel()
    {
        $rand = $this->request->getPost('rand');
        $name = $this->request->getPost('name');
        $data['img_nama'] = "files/artikel/" . $rand . "-" . $name;
        $data['img_artikel'] = decrypt_url($this->request->getPost('id'));

        $patch = realpath(APPPATH . '..files/artikel/');
        if ($this->IAM->delete_image($data)) {
            $file = $patch . "/" . $rand . "-" . $name;
            unlink($file);
            $result['status'] = '1';
        } else {
            $result['status'] = '2';
        }

        echo json_encode($result);
        exit;
    }



    public function add_artikel()
    {
        $data['artikel_id'] = decrypt_url($this->request->getPost('id'));
        $data['artikel_judul'] = anti_injection($this->request->getPost('judul'));
        $data['artikel_konten'] = Special_inject($this->request->getPost('konten'));
        $data['artikel_url'] = Special_inject($this->request->getPost('url'));
        $data['artikel_akses'] = $this->request->getPost('akses');
        $data['artikel_kategori'] = decrypt_url($this->request->getPost('kategori'));
        $data['artikel_img_kode'] = $this->request->getPost('rand');
        $data['artikel_status'] = '1';
        $data['artikel_create_by'] = $_SESSION['user_username'];
        $data['artikel_create_time'] = date('Y-m-d H:i:s');

        $patch = realpath(APPPATH . '..files/artikel/');
        $patch2 = realpath(APPPATH . '..files/');
        $short_patch = "files/artikel/";
        if (isset($_FILES['foto'])) {
            $validation = $this->validate([
                'rules' => 'uploaded[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]|max_size[foto,10000]'
            ]);
            if ($validation == FALSE) {
                $result['status'] = '2';
                echo json_encode($result);
                exit;
            } else {
                $upload = $this->request->getFile('foto');
                $gambar_name = $data['artikel_judul'] . '-' . date('YmdHis') . "." . $upload->getClientExtension();
                $size = $upload->getSize();
                if ($size > 5242880) {
                    $compres = 50;
                } elseif ($size > 1048576 && $size < 5242880) {
                    $compres = 60;
                } elseif ($size > 305000 && $size < 1048576) {
                    $compres = 70;
                } else {
                    $compres = 100;
                }
                $image = \Config\Services::image()
                    ->withFile($upload);
                if ($image->save($patch2 . '/artikel/'  . $gambar_name, $compres)) {
                    $data['artikel_gambar'] =  $short_patch . $gambar_name;
                } else {
                    $result['status'] = '3';
                    echo json_encode($result);
                    exit;
                }
            }
        } else {
            $result['status'] = '2';
        }

        if ($this->ARM->add_artikel($data)) {
            $this->__addLog('Artikel', json_encode($data), 'Insert');
            $where = [
                "img_artikel" => $data['artikel_id'],
                "img_action" => "add"
            ];
            $this->IAM->update_status_add($where);
            $result['status'] = '1';
        } else {
            $result['status'] = '2';
        }

        echo json_encode($result);
        exit;
    }

    public function get_image_artikel()
    {
        $id = decrypt_url($this->request->getGet('id'));
        $result['status'] = '1';
        $result['image'] = $this->IAM->get_image_by_artikel($id);
        $img = count($result['image']);
        if ($img > 0) {
            for ($i = 0; $i < $img; $i++) {
                $result['image'][$i]->image_item = "<div class='col-md-3 col-lg-3 col-xl-3 mb-2' style='position: relative;'> <img src='" . base_url($result['image'][$i]->img_nama) . "' width='100%'  alt=''><a href='javascript:;' class='btn btn-icon btn-light-warning btn-sm' style='position: absolute; right: 14px; top:2px' onclick=deleteImage('" . encrypt_url($result['image'][$i]->img_id) . "','" . encrypt_url($id) . "')><i class='flaticon2-trash'></i></a></div>";
            }
        }

        echo json_encode($result);
        exit();
    }

    public function delete_image_artikel_by_id()
    {
        $id = decrypt_url($this->request->getGet('id'));
        if ($this->IAM->delete_image_by_id($id)) {
            $result['status'] = '1';
        } else {
            $result['status'] = '2';
        }

        echo json_encode($result);
        exit;
    }

    public function getTesData()
    {
        $a = 1;
        $b = 2;
        $data = $this->SM->select('opd_id')->where('opd_status', '1')->where('opd_id', '1')->get()->getResult();
        $testing = array();
        foreach ($data as $row) {
            $row->data = $row->opd_nama;
            $row->data_dummy = encrypt_url($row->opd_id);
            array_push($testing, $row->data);
        }
    }

    public function edit_artikel()
    {
        $data['artikel_id'] = decrypt_url($this->request->getPost('id'));
        $data['artikel_judul'] = anti_injection($this->request->getPost('judul'));
        $data['artikel_konten'] = Special_inject($this->request->getPost('konten'));
        $data['artikel_url'] = Special_inject($this->request->getPost('url'));
        $data['artikel_akses'] = $this->request->getPost('akses');
        $data['artikel_kategori'] = decrypt_url($this->request->getPost('kategori'));
        $data['artikel_img_kode'] = $this->request->getPost('rand');
        if (isset($_POST['status'])) {
            $data['artikel_status'] = $this->request->getPost('status');
        }
        $data['artikel_update_by'] = $_SESSION['user_username'];
        $data['artikel_update_time'] = date('Y-m-d H:i:s');

        $patch = realpath(APPPATH . '..files/artikel/');
        $patch2 = realpath(APPPATH . '..files/');
        $short_patch = "files/artikel/";
        if (isset($_FILES['foto'])) {
            $validation = $this->validate([
                'rules' => 'uploaded[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]|max_size[foto,10000]'
            ]);
            if ($validation == FALSE) {
                $result['status'] = '2';
                echo json_encode($result);
                exit;
            } else {
                $upload = $this->request->getFile('foto');
                $gambar_name = $data['artikel_judul'] . '-' . date('YmdHis') . "." . $upload->getClientExtension();
                $size = $upload->getSize();
                if ($size > 5242880) {
                    $compres = 50;
                } elseif ($size > 1048576 && $size < 5242880) {
                    $compres = 60;
                } elseif ($size > 305000 && $size < 1048576) {
                    $compres = 70;
                } else {
                    $compres = 100;
                }
                $image = \Config\Services::image()
                    ->withFile($upload);
                if ($image->save($patch2 . '/artikel/'  . $gambar_name, $compres)) {
                    $data['artikel_gambar'] =  $short_patch . $gambar_name;
                } else {
                    $result['status'] = '3';
                    echo json_encode($result);
                    exit;
                }
            }
        }

        $token = $this->request->getPost('token');
        if ($this->ARM->edit_artikel($data)) {
            $this->__addLog('Artikel', json_encode($data), 'Update');
            $where = [
                "img_artikel" => $data['artikel_id'],
                "img_action" => "edit",
                "img_token_edit" => $token
            ];
            $this->IAM->update_status($where);
            $result['status'] = '1';
        } else {
            $result['status'] = '2';
        }

        echo json_encode($result);
        exit;
    }

    public function delete_artikel()
    {
        $data['artikel_id'] = decrypt_url($this->request->getPost('id'));
        $data['artikel_status'] = '0';
        $data['artikel_update_by'] = $_SESSION['user_username'];
        $data['artikel_update_time'] = date('Y-m-d H:i:s');

        if ($this->ARM->edit_artikel($data)) {
            $this->__addLog('Kegiatan CSR', json_encode($data), 'Delete');
            $result['status'] = '1';
        } else {
            $result['status'] = '2';
        }

        echo json_encode($result);
        exit;
    }

    public function edit_login_page()
    {
        $id = decrypt_url($this->request->getPost('id'));
        $data['login_footer'] = anti_injection($this->request->getPost('footer'));
        $data['login_footer_link'] = anti_injection($this->request->getPost('footer_link'));
        $data['login_bg_banner'] = anti_injection($this->request->getPost('background_banner'));
        $data['login_text_color_banner'] = anti_injection($this->request->getPost('color_banner'));
        $data['login_text1_banner'] = anti_injection($this->request->getPost('title_banner'));
        $data['login_text2_banner'] = anti_injection($this->request->getPost('subtitle_banner'));
        $data['login_last_update_time'] = date('Y-m-d H:i:s');
        $data['login_last_update_by'] = $_SESSION['user_username'];

        $patch = realpath(APPPATH . '..files/management-page/');
        $short_patch = "files/management-page/";

        if (isset($_FILES['logo_banner'])) {
            $validation = $this->validate([
                'rules' => 'uploaded[logo_banner]|mime_in[logo_banner,image/jpg,image/jpeg,image/png]|max_size[logo_banner,5120]'
            ]);
            if ($validation == FALSE) {
                $result['status'] = '2';
                echo json_encode($result);
                exit;
            } else {
                $upload = $this->request->getFile('logo_banner');
                $logo_banner_name = 'img-' . date('YmdHis') . $upload->getName();
                if ($upload->move($patch, $logo_banner_name)) {
                    $data['login_logo_banner'] =  $short_patch . $logo_banner_name;
                } else {
                    $result['status'] = '3';
                    echo json_encode($result);
                    exit;
                }
            }
        }

        if (isset($_FILES['image_banner'])) {
            $validation = $this->validate([
                'rules' => 'uploaded[image_banner]|mime_in[image_banner,image/jpg,image/jpeg,image/png]|max_size[image_banner,5120]'
            ]);
            if ($validation == FALSE) {
                $result['status'] = '2';
                echo json_encode($result);
                exit;
            } else {
                $upload = $this->request->getFile('image_banner');
                $image_banner_name = 'img-' . date('YmdHis') . $upload->getName();
                if ($upload->move($patch, $image_banner_name)) {
                    $data['login_image_banner'] =  $short_patch . $image_banner_name;
                } else {
                    $result['status'] = '3';
                    echo json_encode($result);
                    exit;
                }
            }
        }

        if ($this->PMM->edit_management_page($data)) {
            $this->__addLog('Page Management', json_encode($data), 'Update');
            $result['status'] = '1';
        } else {
            $result['status'] = '2';
        }

        echo json_encode($result);
        exit;
    }

    public function edit_main_page()
    {
        $id = decrypt_url($this->request->getPost('id'));
        $data['main_right_footer'] = anti_injection($this->request->getPost('right_footer'));
        $data['main_left_footer'] = anti_injection($this->request->getPost('left_footer'));
        $data['main_right_footer_link'] = anti_injection($this->request->getPost('right_footer_link'));
        $data['main_left_footer_link'] = anti_injection($this->request->getPost('left_footer_link'));
        $data['main_last_update_time'] = date('Y-m-d H:i:s');
        $data['main_last_update_by'] = $_SESSION['user_username'];

        $patch = realpath(APPPATH . '..files/management-page/');
        $short_patch = "files/management-page/";

        if (isset($_FILES['desktop_icon'])) {
            $validation = $this->validate([
                'rules' => 'uploaded[desktop_icon]|mime_in[desktop_icon,image/jpg,image/jpeg,image/png]|max_size[desktop_icon,5120]'
            ]);
            if ($validation == FALSE) {
                $result['status'] = '2';
                echo json_encode($result);
                exit;
            } else {
                $upload = $this->request->getFile('desktop_icon');
                $desktop_icon_name = 'img-' . date('YmdHis') . $upload->getName();
                if ($upload->move($patch, $desktop_icon_name)) {
                    $data['main_desktop_logo'] =  $short_patch . $desktop_icon_name;
                } else {
                    $result['status'] = '3';
                    echo json_encode($result);
                    exit;
                }
            }
        }

        if (isset($_FILES['mobile_icon'])) {
            $validation = $this->validate([
                'rules' => 'uploaded[mobile_icon]|mime_in[mobile_icon,image/jpg,image/jpeg,image/png]|max_size[mobile_icon,5120]'
            ]);
            if ($validation == FALSE) {
                $result['status'] = '2';
                echo json_encode($result);
                exit;
            } else {
                $upload = $this->request->getFile('mobile_icon');
                $mobile_icon_name = 'img-' . date('YmdHis') . $upload->getName();
                if ($upload->move($patch, $mobile_icon_name)) {
                    $data['main_mobile_logo'] =  $short_patch . $mobile_icon_name;
                } else {
                    $result['status'] = '3';
                    echo json_encode($result);
                    exit;
                }
            }
        }

        if ($this->PMM->edit_management_page($data)) {
            $this->__addLog('Page Management', json_encode($data), 'Update');
            $result['status'] = '1';
        } else {
            $result['status'] = '2';
        }

        echo json_encode($result);
        exit;
    }

    public function download_laporan_pangan()
    {
        $pasar = $_GET['pasar'];
        $awal = $_GET['awal'];
        $akhir = $_GET['akhir'];
        $act = $_GET['act'];

        if (isset($pasar) && isset($awal) && isset($akhir)) {
            $pasar = decrypt_url($pasar);
            $data['pasar'] = $this->PM->select('pasar_nama')->where('pasar_id', $pasar)->get()->getResult();
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
                        ->where('transaksi_tanggal', $awal)
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
                            ->where('transaksi_tanggal', $akhir)
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

            if ($act == 'pdf') {

                ob_clean();
                $options = new Options();
                $options->setIsHtml5ParserEnabled(true);
                $options->set('setIsHtml5ParserEnabled', true);
                $options->set('isRemoteEnabled', true);

                $dompdf = new \Dompdf\Dompdf($options);
                $dompdf->loadHtml(view('root/laporan_komoditas', $data));
                $filename = "Laporan harian harga komoditas pangan.pdf";
                $dompdf->setPaper('legal', 'potrait');
                $dompdf->render();
                $dompdf->stream($filename);
                exit();
            } else {
                return view('root/laporan_komoditas_excel', $data);
            }
            // echo json_encode($data);
        } else {
            echo "<script>alert('data tidak ditemukan')</script>";
        }
    }

    public function download_laporan_pangan_tanggal()
    {
        $pasar = $_GET['pasar'];
        $awal = $_GET['awal'];
        $akhir = $_GET['akhir'];
        $act = $_GET['act'];

        if (isset($_GET['pasar']) && isset($_GET['awal']) && isset($_GET['akhir'])) {

            $pasar = decrypt_url($_GET['pasar']);
            $awal = date_create($_GET['awal']);
            $akhir = date_create($_GET['akhir']);
            $selisih = $akhir->diff($awal)->days + 1;

            $data['pasar'] = $this->PM->select('pasar_nama')->where('pasar_id', $pasar)->get()->getResult();
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
            $data['tanggal_awal'] = $_GET['awal'];
            $data['tanggal_akhir'] = $_GET['akhir'];
            $data['komoditas'] = $komoditas;
            if ($act == 'pdf') {

                ob_clean();
                $dompdf = new \Dompdf\Dompdf();

                $options = $dompdf->getOptions();
                $options->setIsHtml5ParserEnabled(true);
                $options->set('isRemoteEnabled', true);
                $dompdf->setOptions($options);

                $dompdf->loadHtml(view('root/laporan_komoditas_tanggal', $data));
                $filename = "Laporan pantauan harga komoditas pangan.pdf";
                $dompdf->setPaper('legal', 'landscape');
                $dompdf->render();
                $dompdf->stream($filename);
                exit();
            } else {
            }
        } else {
            echo "<script>alert('data tidak ditemukan')</script>";
        }
    }

    public function download_laporan_penting()
    {
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
            $periode = bulan_indo($_GET['bulan']) . " " . $_GET['tahun'];
            $data['periode'] = $periode;
            if ($_GET['act'] == 'pdf') {

                ob_clean();
                $dompdf = new \Dompdf\Dompdf();

                $options = $dompdf->getOptions();
                $options->setIsHtml5ParserEnabled(true);
                $options->set('isRemoteEnabled', true);
                $dompdf->setOptions($options);
                $dompdf->loadHtml(view('root/laporan_penting', $data));
                $filename = "Laporan pantauan harga komoditas penting periode " . $periode . ".pdf";
                $dompdf->setPaper('legal', 'landscape');
                $dompdf->render();
                $dompdf->stream($filename);
                exit();
            } else {
            }
        } else {
            echo "<script>alert('data tidak ditemukan')</script>";
        }
    }

    public function download_laporan_lainnya()
    {
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
            $periode = bulan_indo($_GET['bulan']) . " " . $_GET['tahun'];
            $data['periode'] = $periode;
            if ($_GET['act'] == 'pdf') {

                ob_clean();
                $dompdf = new \Dompdf\Dompdf();

                $options = $dompdf->getOptions();
                $options->setIsHtml5ParserEnabled(true);
                $options->set('isRemoteEnabled', true);
                $dompdf->setOptions($options);
                $dompdf->loadHtml(view('root/laporan_lainnya', $data));
                $filename = "Laporan pantauan harga komoditas penting lainnya periode" . $periode . ".pdf";
                $dompdf->setPaper('legal', 'landscape');
                $dompdf->render();
                $dompdf->stream($filename);
                exit();
            } else {
            }
        } else {
            echo "<script>alert('data tidak ditemukan')</script>";
        }
    }

    public function download_laporan_stok()
    {
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
            $periode = bulan_indo($_GET['bulan']) . " " . $_GET['tahun'];
            $data['periode'] = $periode;
            if ($_GET['act'] == 'pdf') {

                ob_clean();
                $dompdf = new \Dompdf\Dompdf();

                $options = $dompdf->getOptions();
                $options->setIsHtml5ParserEnabled(true);
                $options->set('isRemoteEnabled', true);
                $dompdf->setOptions($options);
                $dompdf->loadHtml(view('root/laporan_stok', $data));
                $filename = "Laporan pantauan stok komoditas periode" . $periode . ".pdf";
                $dompdf->setPaper('legal', 'landscape');
                $dompdf->render();
                $dompdf->stream($filename);
                exit();
            } else {
            }
        } else {
            echo "<script>alert('data tidak ditemukan')</script>";
        }
    }

    public function get_user_detail()
    {
        $id = decrypt_url($this->request->getGet('id'));
        $result = $this->UM->get_user_by_id($id);

        $result['role'] = encrypt_url($result[0]->user_role);
        if ($result[0]->user_role == '3') {
            $result[0]->user_fk = encrypt_url($result[0]->user_fk);
        }

        $result[0]->user_role = encrypt_url($result[0]->user_role);
        $result['status'] = '1';
        echo json_encode($result);
        exit();
    }

    public function reset_password_user()
    {
        $id = decrypt_url($this->request->getPost('id'));
        $get_user = $this->UM->get_user_by_id($id);
        $email = $get_user[0]->user_email;
        $username = $get_user[0]->user_username;
        $pass = ($this->request->getPost('pass'));
        if ($pass == "generate_sistem0") {
            $password = generate_password();
        } else {
            $password = $pass;
        }
        $data['user_password'] = password_hash(MD5($password), PASSWORD_DEFAULT);
        $data['user_update_by'] = $_SESSION['user_username'];
        $data['user_update_time'] = date('Y-m-d H:i:s');

        $data1['type'] = 'Reset Password';
        $data1['user_username'] = $username;
        $data1['user_email'] = $email;
        $data1['user_password'] = $password;

        $title_msg = "Password baru untuk Sibapokting Inhil";
        $body_msg = "<h5>Akun login untuk : " . $username . "</h5><h5>Email : " . $email . "</h5>" . "<h5>Password : " . $password . "</h5>";
        $email_to = $email;

        if ($this->UM->reset_password_user($id, $data)) {
            if (message_mail($email_to, $title_msg, $body_msg) != '1') {
                // $this->_send_mail_anka($email_to, $title_msg, $body_msg);
            }
            $this->__addLog('User Management', json_encode($data1), 'Update');
            $result['status'] = '1';
        } else {
            $result['status'] = '2';
        }


        // $result['status'] = '1';
        echo json_encode($result);
        exit;
    }

    public function check_user()
    {
        $param1 = $this->request->uri->getSegment(3);
        $param2 = $this->request->uri->getSegment(4);
        if ($param1 == 'user_name') {
            $data = $this->UM->get_user_by_username($param2);
        } else {
            $data = $this->UM->get_user_by_email($param2);
        }

        if (count($data) > 0) {
            $result['status'] = '1';
        } else {
            $result['status'] = '0';
        }
        echo json_encode($result);
        exit;
    }

    public function add_pengguna()
    {
        $data['user_id'] = create_guid();
        $data['user_username'] = anti_injection($this->request->getPost('username'));
        $data['user_email'] = anti_injection($this->request->getPost('email'));
        $data['user_name'] = anti_injection($this->request->getPost('nama'));
        $data['user_status'] = '1';
        $data['user_image'] = 'files/user/default.png';
        $pass = anti_injection($this->request->getPost('pass'));
        if ($pass == "generate_sistem0") {
            $password = generate_password();
        } else {
            $password = $pass;
        }
        $data['user_password'] = password_hash(MD5($password), PASSWORD_DEFAULT);
        $data['user_role'] = decrypt_url($this->request->getPost('role'));
        $data['user_create_by'] = $_SESSION['user_username'];
        $data['user_create_time'] = date('Y-m-d H:i:s');
        $fk = $this->request->getPost('fk');
        if ($fk == '') {
            $data['user_fk'] = null;
        } else {
            $data['user_fk'] = decrypt_url($fk);
        }

        $cek_username = $this->UM->get_user_by_username($data['user_username']);
        $cek_mail = $this->UM->get_user_by_email($data['user_email']);
        if (count($cek_username) and count($cek_mail)) {
            $result['status'] = '0';
            $result['msg'] = 'username dan email sudah digunakan !!';
        } elseif (count($cek_username)) {
            $result['status'] = '0';
            $result['msg'] = 'username sudah digunakan !!';
        } elseif (count($cek_mail)) {
            $result['status'] = '0';
            $result['msg'] = 'email sudah digunakan !!';
        } else {
            $title_msg = "Akun Login untuk Sibapokting Inhil";
            $body_msg = "<h5>Akun login untuk : " . $data['user_username'] . "</h5><h5>Email : " . $data['user_email'] . "</h5>" . "<h5>Password : " . $password . "</h5>";
            $email_to = $data['user_email'];

            if ($this->UM->add_user($data)) {
                if (message_mail($email_to, $title_msg, $body_msg) != '1') {
                    // $this->_send_mail_anka($email_to, $title_msg, $body_msg);
                }
                $this->__addLog('Kelola Pengguna', json_encode($data), 'Insert');
                $result['status'] = '1';
                $result['msg'] = 'Berhasil menambahkan data';
            } else {
                $result['status'] = '0';
                $result['msg'] = 'Gagal menambahkan data';
            }
        }
        echo json_encode($result);
        exit;
    }

    public function edit_pengguna()
    {
        $data['user_id'] = decrypt_url($this->request->getPost('id'));
        $data['user_email'] = anti_injection($this->request->getPost('email'));
        $data['user_name'] = anti_injection($this->request->getPost('nama'));
        $data['user_role'] = decrypt_url($this->request->getPost('role'));
        $data['user_update_by'] = $_SESSION['user_username'];
        $data['user_update_time'] = date('Y-m-d H:i:s');
        $fk = $this->request->getPost('fk');
        if ($fk == '') {
            $data['user_fk'] = null;
        } else {
            $data['user_fk'] = decrypt_url($fk);
        }


        $cek_mail = $this->UM->select('user_id')->where('user_email', $data['user_email'])->where('user_id !=', $data['user_id'])->countAllResults();
        if ($cek_mail) {
            $result['status'] = '0';
            $result['msg'] = 'email sudah digunakan akun lain!!';
        } else {
            if ($this->UM->edit_user($data)) {
                $this->__addLog('Kelola Pengguna', json_encode($data), 'Update');
                $result['status'] = '1';
                $result['msg'] = 'Berhasil perbarui data';
            } else {
                $result['status'] = '0';
                $result['msg'] = 'Gagal perbarui data';
            }
        }
        echo json_encode($result);
        exit;
    }

    public function delete_user()
    {
        $data['user_id'] = (decrypt_url($this->request->getPost('id')));
        $data['user_status'] = '0';

        if ($this->UM->edit_user($data)) {
            $this->__addLog('Kelola Pengguna', json_encode($data), 'Delete');
            $result['status'] = '1';
        } else {
            $result['status'] = '2';
        }
        echo json_encode($result);
        exit;
    }
}
