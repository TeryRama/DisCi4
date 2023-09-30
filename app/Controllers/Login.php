<?php

namespace App\Controllers;

use App\Models\Log_model;
use App\Models\Page_management_model;
use App\Models\User_model;

class Login extends BaseController
{

    function __construct()
    {
        $this->session = \Config\Services::session();
        $this->request = \Config\Services::request();
        $this->UM = new User_model();
        $this->LM = new Log_model();
        $this->PMP = new Page_management_model();
        date_default_timezone_set('Asia/Jakarta');
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

    public function index()
    {
        $data['page_style'] = $this->PMP->get_all_data();
        return view('page_login', $data);
    }


    public function login_validation()
    {
        $username = $this->request->getPost('username');
        $password = MD5($this->request->getPost('password'));

        $user = $this->UM->get_user_by_username_email($username);
        $time = date('Y-m-d H:i:s');

        if (count($user)) {
            if (password_verify($password, $user[0]->user_password)) {
                if ($user[0]->user_status == '1') {
                    if ($user[0]->user_role == '1' || $user[0]->user_role == '2' || $user[0]->user_role == '4') {
                        $_SESSION['user_id'] = $user[0]->user_id;
                        $_SESSION['user_username'] = $user[0]->user_username;
                        $_SESSION['user_role'] = $user[0]->user_role;
                        $_SESSION['user_image'] = $user[0]->user_image;
                        $_SESSION['user_level_name'] = $user[0]->user_level_name;
                        $_SESSION['user_name'] = $user[0]->user_name;
                        $_SESSION['user_email'] = $user[0]->user_email;

                        $update = [
                            "user_last_login" => $time,
                            "user_id" => $user[0]->user_id
                        ];
                        $this->UM->edit_user($update);
                        $this->__addLog('Login', 'System Login', 'Insert');
                        if ($user[0]->user_role == '1' || $user[0]->user_role == '2') {
                            $result['status'] = '001';
                        } elseif ($user[0]->user_role == '4') {
                            $result['status'] = '002';
                        }
                    } else {
                        $result['status'] = '4';
                    }

                    echo json_encode($result);
                    exit;
                } else {
                    // User Blocked
                    $result['status'] = '2';
                    echo json_encode($result);
                    exit;
                }
            } else {
                // Password incorrect
                $result['status'] = '3';
                echo json_encode($result);
                exit;
            }
        } else {
            // User not found
            $result['status'] = '0';
            echo json_encode($result);
            exit;
        }
    }

    function logout()
    {
        $this->__addLog('Logout', 'System Login', 'Insert');
        $this->session->stop();
        $this->session->destroy();
        echo '<script>window.location.href = "' . base_url('/login') . '";</script>';
    }

    public function permited()
    {
        $_SESSION['msg_error'] = "You are not permitted to access the page";
        echo '<script>window.location.href = "' . base_url('/') . '";</script>';
    }

    public function forgot_password()
    {
        $data['page_style'] = $this->PMP->get_all_data();
        return view('forgot_password', $data);
    }

    public function request_forgot_password()
    {
        $username = $this->request->getPost('username');
        $user = $this->UM->get_user_by_username_email($username);
        if (count($user) == 0) {
            $result['status'] = '0';
            echo json_encode($result);
            exit;
        } else {
            $time = encrypt_url(date('Y-m-d H:i:s'));
            $link = base_url() . "/reset-password/?req=" . encrypt_url($user[0]->user_id) . "&tm=" . $time;
            $title_msg = "Request Lupa Password";
            $body_msg = "Halo, <b>" . $user[0]->user_name . "</b><br>Klik tombol dibawah ini untuk memperbarui password anda.<br><br><a target='_blank' href='" . $link . "' style='background: #0275d8; text-decoration: none; color: #ffffff; padding: 20px; border-radius: 8px; font-size: 18px'><b>Reset Password</b></a><br><br>";
            $email_to = $user[0]->user_email;
            message_mail($email_to, $title_msg, $body_msg);

            $data = array(
                "log_id" => null,
                "log_user" => $user[0]->user_username,
                "log_time" => date("Y-m-d H:i:s"),
                "log_activity" => 'Request Lupa Password',
                "log_modul" => 'Login',
                "log_type" => 'Insert',
                "log_ip" => $_SERVER['REMOTE_ADDR'],
                "log_browser" => $this->request->getUserAgent()->getBrowser() . " - " . $this->request->getUserAgent()->getVersion(),
                "log_so" => $this->request->getUserAgent()->getPlatform(),
            );
            $this->LM->add_new_log($data);
            $result['status'] = '1';

            echo json_encode($result);
            exit;
        }
    }

    function reset_password()
    {
        $time = decrypt_url($_GET['tm']);
        $to_time = strtotime(date('Y-m-d H:i:s'));
        $from_time = strtotime($time);
        $minute = round(abs($to_time - $from_time) / 60, 2);
        $data['page_style'] = $this->PMP->get_all_data();
        if ($minute > 30) {
            echo "
            <script>
                alert('Link sudah expired, coba lagi !!!');
                window.location.href = '" . base_url('/login') . "';
            </script>";
        } else {
            return view('reset_password', $data);
        }
    }

    function reset_password_action()
    {
        $user = anti_injection(decrypt_url($this->request->getPost('id')));
        $password = anti_injection($this->request->getPost('password'));
        $pass = password_hash(MD5($password), PASSWORD_DEFAULT);

        $data_user = $this->UM->get_user_by_id($user);
        $update['user_id'] = $user;
        $update['user_password'] = $pass;
        if ($this->UM->edit_user($update)) {
            // $data['type'] = 'Reset password';
            // $data['user'] = $data_user[0]->user_username;
            // $data['password'] = $pass;
            // $this->__addLog2('Forgot Password', print_r($data, true), 'Update', $data['user']);
            $result['status'] = '1';
        } else {
            $result['status'] = '0';
        }
        echo json_encode($result);
        exit;
    }

    private function __addLog2($modul, $aksi, $tipe, $user)
    {
        $data = array(
            "log_id" => null,
            "log_user" => $user,
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
}
