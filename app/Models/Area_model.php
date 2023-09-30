<?php

namespace App\Models;

use CodeIgniter\Model;

class Area_model extends Model
{
    protected $table = '_area';
    protected $primaryKey = 'code';

    public function get_all_kecamatan()
    {
        return $this->db
            ->table('_area')
            ->select('*')
            ->where('LENGTH(code) >=', '6', 'FALSE')
            ->where('LENGTH(code) <=', '8', 'FALSE')
            ->get()
            ->getResult();
    }

    public function get_kelurahan_by_kecamatan($kecamatan)
    {
        return $this->db
            ->table('_area')
            ->select('*')
            ->where('LENGTH(code) >=', '9', 'FALSE')
            ->like('code', $kecamatan, 'AFTER')
            ->get()
            ->getResult();
    }

    public function get_area_by_code($code)
    {
        return $this->db
            ->table('_area')
            ->select('name')
            ->where('code', $code)
            ->get()
            ->getResultArray();
    }

    public function get_kecamatan_pasar()
    {
        return $this->db
            ->table('_area')
            ->select('_area.name, tb_pasar.pasar_id')
            ->join('tb_pasar', '_area.code = tb_pasar.pasar_kecamatan')
            ->where('LENGTH(code) >=', '6', 'FALSE')
            ->where('LENGTH(code) <=', '8', 'FALSE')
            ->get()
            ->getResult();
    }
}
