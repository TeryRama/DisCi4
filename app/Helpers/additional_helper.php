<?php
// // if (!defined("BASEPATH")) exit("No direct script access allowed");
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

function encrypt_url($string)
{
    $output = false;
    /*
    * read security.ini file & get encryption_key | iv | encryption_mechanism value for generating encryption code
    */

    $secret_key     = '1111111111111111';
    $secret_iv      = '2456378494765431';
    $encrypt_method = 'aes-256-cbc';

    // hash
    $key    = hash("sha256", $secret_key);

    // iv � encrypt method AES-256-CBC expects 16 bytes � else you will get a warning
    $iv     = substr(hash("sha256", $secret_iv), 0, 16);

    //do the encryption given text/string/number
    $result = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
    $output = base64_encode($result);
    return $output;
}



function decrypt_url($string)
{

    $output = false;
    /*
    * read security.ini file & get encryption_key | iv | encryption_mechanism value for generating encryption code
    */

    $secret_key     = '1111111111111111';
    $secret_iv      = '2456378494765431';
    $encrypt_method = 'aes-256-cbc';

    // hash
    $key    = hash("sha256", $secret_key);

    // iv � encrypt method AES-256-CBC expects 16 bytes � else you will get a warning
    $iv = substr(hash("sha256", $secret_iv), 0, 16);

    //do the decryption given text/string/number

    $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    return $output;
}

function create_guid()
{
    if (function_exists('com_create_guid') === true) {
        return trim(com_create_guid(), '{}');
    }
    return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
}

function rupiah($angka)
{
    $hasil_rupiah = "Rp " . number_format($angka, '0', ',', ',');
    return $hasil_rupiah;
}

function number($angka)
{
    $hasil_number = number_format($angka, '0', ',', ',');
    return $hasil_number;
}

function tgl_indo($tanggal)
{
    $bulan = array(
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);
    return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
}

function bulan_indo($angka)
{
    if ($angka == '1' or $angka == '01') {
        $bulan = "Januari";
    }
    if ($angka == '2' or $angka == '02') {
        $bulan = "Februari";
    }
    if ($angka == '3' or $angka == '03') {
        $bulan = "Maret";
    }
    if ($angka == '4' or $angka == '04') {
        $bulan = "April";
    }
    if ($angka == '5' or $angka == '05') {
        $bulan = "Mei";
    }
    if ($angka == '6' or $angka == '06') {
        $bulan = "Juni";
    }
    if ($angka == '7' or $angka == '07') {
        $bulan = "Juli";
    }
    if ($angka == '8' or $angka == '08') {
        $bulan = "Agustus";
    }
    if ($angka == '9' or $angka == '09') {
        $bulan = "September";
    }
    if ($angka == '10') {
        $bulan = "Oktober";
    }
    if ($angka == '11') {
        $bulan = "November";
    }
    if ($angka == '12') {
        $bulan = "Desember";
    }
    return $bulan;
}

function bulan_convert($angka)
{
    if ($angka == '1') {
        $bulan = "01";
    } elseif ($angka == '2') {
        $bulan = "02";
    } elseif ($angka == '3') {
        $bulan = "03";
    } elseif ($angka == '4') {
        $bulan = "04";
    } elseif ($angka == '5') {
        $bulan = "05";
    } elseif ($angka == '6') {
        $bulan = "06";
    } elseif ($angka == '7') {
        $bulan = "07";
    } elseif ($angka == '8') {
        $bulan = "08";
    } elseif ($angka == '9') {
        $bulan = "09";
    } else {
        $bulan = $angka;
    }

    return $bulan;
}

function tanggal_convert($angka)
{
    if ($angka < '10') {
        $tanggal = "0" . $angka;
    } else {
        $tanggal = $angka;
    }

    return $tanggal;
}

function generate_password($length = 8)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function get_client_ip()
{
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if (getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if (getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if (getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if (getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if (getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'IP tidak dikenali';
    return $ipaddress;
}

//menampilkan ip address menggunakan function $_SERVER
function get_client_ip_2()
{
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if (isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if (isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if (isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'IP tidak dikenali';
    return $ipaddress;
}

//menampilkan jenis web browser pengunjung
function get_client_browser()
{
    $browser = '';
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'Netscape'))
        $browser = 'Netscape';
    else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox'))
        $browser = 'Firefox';
    else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome'))
        $browser = 'Chrome';
    else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Opera'))
        $browser = 'Opera';
    else if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE'))
        $browser = 'Internet Explorer';
    else
        $browser = 'Other';
    return $browser;
}

function get_client_OS()
{
    // global $user_agent;
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $os_platform    =   "Unknown OS Platform";
    $os_array       =   array(
        '/macintosh|mac os x/i' =>  'Mac OS X',
        '/mac_powerpc/i'        =>  'Mac OS 9',
        '/linux/i'              =>  'Linux',
        '/ubuntu/i'             =>  'Ubuntu',
        '/iphone/i'             =>  'iPhone',
        '/ipod/i'               =>  'iPod',
        '/ipad/i'               =>  'iPad',
        '/android/i'            =>  'Android',
        '/blackberry/i'         =>  'BlackBerry',
        '/webos/i'              =>  'Mobile',
        '/windows nt 10/i'      =>  'Windows 10',
        '/windows nt 6.3/i'     =>  'Windows 8.1',
        '/windows nt 6.2/i'     =>  'Windows 8',
        '/windows nt 6.1/i'     =>  'Windows 7',
        '/windows nt 6.0/i'     =>  'Windows Vista',
        '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
        '/windows nt 5.1/i'     =>  'Windows XP',
        '/windows xp/i'         =>  'Windows XP',
        '/windows nt 5.0/i'     =>  'Windows 2000',
        '/windows me/i'         =>  'Windows ME',
        '/win98/i'              =>  'Windows 98',
        '/win95/i'              =>  'Windows 95',
        '/win16/i'              =>  'Windows 3.11',

    );
    foreach ($os_array as $regex => $value) {
        if (preg_match($regex, $user_agent)) {
            $os_platform = $value;
        }
    }
    return $os_platform;
}

function anti_injection($data)
{
    $filter = stripslashes(strip_tags(htmlspecialchars($data, ENT_QUOTES)));
    return $filter;
}

function special_inject($data)
{
    $string = htmlentities($data, ENT_NOQUOTES, 'UTF-8');
    return $string;
}

function convertText($teks)
{
    $string = strtolower($teks);
    $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
    $string = preg_replace("/[\s-]+/", " ", $string);
    $string = preg_replace("/[\s_]/", "-", $string);
    return $string;
}

function get_token($panjang)
{
    $token = array(
        range(1, 9),
        range('a', 'z'),
        range('A', 'Z')
    );

    $karakter = array();
    foreach ($token as $key => $val) {
        foreach ($val as $k => $v) {
            $karakter[] = $v;
        }
    }

    $token = null;
    for ($i = 1; $i <= $panjang; $i++) {
        // mengambil array secara acak
        $token .= $karakter[rand($i, count($karakter) - 1)];
    }
    return $token;
}


function getuniqueChar()
{
    $uniqueChar = array("x", "V", "a", "F", "t", "p", "7", "-", "d", "R");
    return $uniqueChar;
}
function encrypt_small($text)
{
    $text = $text * 227832;
    $rand = getuniqueChar();
    $out = "";
    $text .= ""; //$text.$dd[1];
    for ($i = 0; $i < strlen($text); $i++) {
        # code...
        $idx = $text[$i];
        $out .= $rand[$idx];
    }
    return $out;
}

function decrypt_small($text)
{
    $rand = getuniqueChar();
    $out = "";
    for ($i = 0; $i < strlen($text); $i++) {
        # code...
        $idx = $text[$i];
        $tmp = "-1";
        for ($j = 0; $j < count($rand); $j++) {
            # code...
            if ($idx == $rand[$j]) {
                $tmp = $j;
            }
        }
        $out .= $tmp;
        if ($tmp == "-1") {
            $out = "0";
            // JsAlertRedirect("", "Data tidak ditemukan");
            break;
        }
    }
    if ($out <> "0") {
        $end = strlen($out) - 2;
        $out = $out / 227832;
        $tmp1 = intval($out);
        if ($out <> $tmp1) {
            $out = 0;
        }
    }
    return $out;
}


function zero_filter($value)
{
    return $value != 0;
}

function get_nama_kadis()
{
    return "DHOAN DWI ANGGARA, S.STP, MH";
}

function get_nip_kadis()
{
    return "19820701 200012 1 001.";
}

function sortByPrioritas($a, $b)
{
    return $a->prioritas > $b->prioritas;
}

function get_logo_inhil_encode()
{
}
