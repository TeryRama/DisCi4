<?php

namespace App\Models;

use CodeIgniter\Model;

class Barang_lainnya_model extends Model
{
    protected $table = 'tb_barang_lainnya';
    protected $primaryKey = 'barang_id';

    public function count_barang_by_filter($filter, $grup)
    {
        $query = $this->db
            ->table('tb_barang_lainnya')
            ->select('*')
            ->join('tb_grup_komoditas', 'tb_barang_lainnya.barang_grup = tb_grup_komoditas.grup_komoditas_id')
            ->where('barang_status', '1')
            ->where('grup_komoditas_status', '1');
        if ($grup != "null") {
            $query = $query->where('barang_grup', $grup);
        }
        if ($filter != "") {
            $query = $query
                ->like('barang_nama', $filter, 'both');
        }
        return $query->countAllResults();
    }

    public function add_barang($data)
    {
        $this->db
            ->table('tb_barang_lainnya')
            ->insert($data);
        return $this->db->affectedRows();
    }

    public function edit_barang($data)
    {
        $this->db
            ->table('tb_barang_lainnya')
            ->where('barang_id', $data['barang_id'])
            ->update($data);
        return $this->db->affectedRows();
    }

    public function get_all_barang_by_filter($limit, $keyword, $grup)
    {
        $query = $this->db
            ->table('tb_barang_lainnya')
            ->select('barang_id, barang_nama, barang_grup, barang_het, barang_foto, barang_satuan, barang_het_update_time, grup_komoditas_nama')
            ->join('tb_grup_komoditas', 'tb_barang_lainnya.barang_grup = tb_grup_komoditas.grup_komoditas_id')
            ->where('barang_status', '1')
            ->where('grup_komoditas_status', '1');
        if ($grup != "null") {
            $query = $query->where('barang_grup', $grup);
        }
        if ($keyword != "") {
            $query = $query->like('barang_nama', $keyword, 'both');
        }

        if ($limit != 0) {
            $query = $query->limit($limit);
        }
        return $query->orderBy('barang_create_time', 'DESC')->get()->getResult();
    }

    public function get_all_barang()
    {
        return $this->db
            ->table('tb_barang_lainnya')
            ->select('barang_id, barang_nama, barang_grup, barang_het, barang_foto, barang_satuan, grup_komoditas_nama')
            ->join('tb_grup_komoditas', 'tb_barang_lainnya.barang_grup = tb_grup_komoditas.grup_komoditas_id')
            ->where('barang_status', '1')
            ->where('grup_komoditas_status', '1')
            ->get()->getResult();
    }

    public function get_barang_by_id($id)
    {
        return $this->db
            ->table('tb_barang_lainnya')
            ->select('barang_id, barang_nama, barang_grup, barang_het, barang_foto, barang_satuan, grup_komoditas_nama')
            ->where('barang_id', $id)
            ->get()
            ->getResult();
    }

    public function get_barang_by_grup($grup)
    {
        return $this->db
            ->table('tb_barang_lainnya')
            ->select('barang_id, barang_nama, barang_grup, barang_het, barang_foto, barang_satuan, grup_komoditas_nama')
            ->where('barang_grup', $grup)
            ->where('barang_status', '1')
            ->where('grup_komoditas_status', '1')
            ->orderBy('barang_nama', 'ASC')
            ->get()
            ->getResult();
    }
}
