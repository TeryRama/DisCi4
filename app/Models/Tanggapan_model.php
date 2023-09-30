<?php

namespace App\Models;

use CodeIgniter\Model;

class Tanggapan_model extends Model
{
    protected $table = 'tb_tanggapan';
    protected $primaryKey = 'tanggapan_id';

    public function add_tanggapan($data)
    {
        $this->db
            ->table('tb_tanggapan')
            ->insert($data);
        return $this->db->affectedRows();
    }
}
