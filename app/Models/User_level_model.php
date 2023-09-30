<?php

namespace App\Models;

use CodeIgniter\Model;

class User_level_model extends Model
{
    protected $table = 'tb_user_level';
    protected $primaryKey = 'user_level_id';

    public function get_all_user_level()
    {
        return $this->db
            ->table('tb_user_level')
            ->select('*')
            ->where('user_level_status', '1')
            ->where('user_level_id !=', '1')
            ->orderBy('user_level_name', 'ASC')
            ->get()
            ->getResult();
    }
}
