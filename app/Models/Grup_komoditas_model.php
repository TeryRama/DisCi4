<?php

namespace App\Models;

use CodeIgniter\Model;

class Grup_komoditas_model extends Model
{
    protected $table = 'tb_grup_komoditas';
    protected $primaryKey = 'grup_komoditas_id';

    public function count_grup_komoditas_by_filter($tipe, $filter)
    {
        $query = $this->db
            ->table('tb_grup_komoditas')
            ->select('*')
            ->where('grup_komoditas_status', '1');

        if ($tipe != "") {
            $tipe = $query
                ->where('grup_komoditas_tipe', $tipe);
        }
        if ($filter != "") {
            $query = $query
                ->like('grup_komoditas_nama', $filter, 'both');
        }
        return $query->countAllResults();
    }

    public function add_grup_komoditas($data)
    {
        $this->db
            ->table('tb_grup_komoditas')
            ->insert($data);
        return $this->db->affectedRows();
    }

    public function edit_grup_komoditas($data)
    {
        $this->db
            ->table('tb_grup_komoditas')
            ->where('grup_komoditas_id', $data['grup_komoditas_id'])
            ->update($data);
        return $this->db->affectedRows();
    }

    public function get_all_grup_komoditas()
    {
        return $this->db
            ->table('tb_grup_komoditas')
            ->select('grup_komoditas_id, grup_komoditas_nama')
            ->where('grup_komoditas_status', '1')
            ->orderBy('grup_komoditas_nama', 'ASC')
            ->get()->getResult();
    }
}
