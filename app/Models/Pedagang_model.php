<?php

namespace App\Models;

use CodeIgniter\Model;

class Pedagang_model extends Model
{
    protected $table = 'tb_pedagang';
    protected $primaryKey = 'pedagang_id';

    function get_pedagang_pangan_by_filter($item, $pasar, $keyword)
    {
        $query = $this->db
            ->table('tb_pedagang')
            ->select('*')
            ->where('pedagang_status', '1');
        if ($pasar != "null") {
            $query = $query->where('pedagang_pasar', $pasar);
        }
        if ($keyword != "") {
            $query = $query->like('pedagang_nama', $keyword, 'both');
        }

        if ($item != 0) {
            $query = $query->limit($item);
        }
        return $query->orderBy('pedagang_create_time', 'DESC')->get()->getResult();
    }

    function count_pedagang_pangan_by_filter($pasar, $keyword)
    {
        $query = $this->db
            ->table('tb_pedagang')
            ->select('*')
            ->where('pedagang_status', '1');

        if ($pasar != "") {
            $query = $query
                ->where('pedagang_pasar', $pasar);
        }
        if ($keyword != "") {
            $query = $query
                ->like('pedagang_nama', $keyword, 'both');
        }
        return $query->countAllResults();
    }

    function add_pedagang($data)
    {
        $this->db
            ->table('tb_pedagang')
            ->insert($data);
        return $this->db->affectedRows();
    }

    function edit_pedagang($data)
    {
        $this->db
            ->table('tb_pedagang')
            ->where('pedagang_id', $data['pedagang_id'])
            ->update($data);
        return $this->db->affectedRows();
    }
}
