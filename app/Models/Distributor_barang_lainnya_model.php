<?php

namespace App\Models;

use CodeIgniter\Model;

class Distributor_barang_lainnya_model extends Model
{
    protected $table = 'tb_distributor_barang_lainnya';
    protected $primaryKey = 'distributor_id';

    function get_distributor_by_filter($item, $keyword)
    {
        $query = $this->db
            ->table('tb_distributor_barang_lainnya')
            ->select('distributor_id, distributor_nama')
            ->where('distributor_status', '1');
        if ($keyword != "") {
            $query = $query->like('distributor_nama', $keyword, 'both');
        }

        if ($item != 0) {
            $query = $query->limit($item);
        }
        return $query->orderBy('distributor_create_time', 'DESC')->get()->getResult();
    }

    function count_distributor_by_filter($keyword)
    {
        $query = $this->db
            ->table('tb_distributor_barang_lainnya')
            ->select('distributor_id')
            ->where('distributor_status', '1');

        if ($keyword != "") {
            $query = $query
                ->like('distributor_nama', $keyword, 'both');
        }
        return $query->countAllResults();
    }

    function add_distributor($data)
    {
        $this->db
            ->table('tb_distributor_barang_lainnya')
            ->insert($data);
        return $this->db->affectedRows();
    }

    function edit_distributor($data)
    {
        $this->db
            ->table('tb_distributor_barang_lainnya')
            ->where('distributor_id', $data['distributor_id'])
            ->update($data);
        return $this->db->affectedRows();
    }
}
