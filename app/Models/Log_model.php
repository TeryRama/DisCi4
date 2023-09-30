<?php

namespace App\Models;

use CodeIgniter\Model;

class Log_model extends Model
{
    // protected $table = 'tb_log';
    // protected $primaryKey = 'user_id'; 

    public function add_new_log($data)
    {
        return $this
            ->db
            ->table('tb_log')
            ->insert($data);
    }

    public function add_log($modul, $activity, $type)
    {
        $insert = [
            'log_id' => null,
            'log_user' => $_SESSION['user_username'],
            'log_time' => date('Y-m-d H:i:s'),
            'log_activity' => $activity,
            'log_modul' => $modul,
            'log_type' => $type,
            'log_ip' => get_client_ip(),
            'log_so' => get_client_OS(),
            'log_browser' => get_client_browser()
        ];

        return $this
            ->db
            ->table('tb_log')
            ->insert($insert);
    }

    public function get_100_log($user)
    {
        return $this->db
            ->table('tb_log')
            ->where('log_user', $user)
            ->orderBy('log_time', 'desc')
            ->limit(100)
            ->get()
            ->getResult();
    }

    public function get_100_log_all()
    {
        return $this->db
            ->table('tb_log')
            ->orderBy('log_time', 'desc')
            ->limit(100)
            ->get()
            ->getResult();
    }
}
