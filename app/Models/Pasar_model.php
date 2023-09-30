<?php

namespace App\Models;

use CodeIgniter\Model;

class Pasar_model extends Model
{
    protected $table = 'tb_pasar';
    protected $primaryKey = 'pasar_id';

    public function count_pasar_by_filter($filter)
    {
        $query = $this->db
            ->table('tb_pasar')
            ->select('*')
            ->where('pasar_status', '1');

        if ($filter != "") {
            $query = $query
                ->like('pasar_nama', $filter, 'both');
        }
        return $query->countAllResults();
    }

    public function add_pasar($data)
    {
        $this->db
            ->table('tb_pasar')
            ->insert($data);
        return $this->db->affectedRows();
    }

    public function edit_pasar($data)
    {
        $this->db
            ->table('tb_pasar')
            ->where('pasar_id', $data['pasar_id'])
            ->update($data);
        return $this->db->affectedRows();
    }

    public function get_pasar_by_filter($limit, $keyword)
    {
        $query = $this->db
            ->table('tb_pasar')
            ->select('*')
            ->where('pasar_status', '1');
        if ($keyword != "") {
            $query = $query->like('pasar_nama', $keyword, 'both');
        }
        if ($limit != 0) {
            $query = $query->limit($limit);
        }
        return $query->orderBy('pasar_create_time', 'DESC')->get()->getResult();
    }

    public function get_all_pasar()
    {
        return $this->db
            ->table('tb_pasar')
            ->select('pasar_id, pasar_nama, pasar_alamat, pasar_kecamatan, pasar_kelurahan')
            ->join('_area', 'tb_pasar.pasar_kecamatan = _area.code')
            ->where('pasar_status', '1')
            ->orderBy('_area.name', 'ASC')
            ->get()
            ->getResult();
    }

    public function get_pasar_by_id($id)
    {
        return $this->db
            ->table('tb_pasar')
            ->select('pasar_id, pasar_nama, pasar_alamat, pasar_kecamatan, pasar_kelurahan')
            ->where('pasar_id', $id)
            ->where('pasar_status', '1')
            ->get()
            ->getResult();
    }

    public function get_pasar($select)
    {
        if ($select == "all") {
            $select = "pasar_id, pasar_nama, pasar_alamat, kecamatan_nama, kelurahan_nama, pasar_foto";
        }

        return $this->db
            ->table('tb_pasar')
            ->select($select)
            ->orderBy('pasar_create_time', 'DESC')
            ->get()->getResult();
    }
}
