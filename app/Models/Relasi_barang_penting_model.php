<?php

namespace App\Models;

use CodeIgniter\Model;

class Relasi_barang_penting_model extends Model
{
    protected $table = 'tb_relasi_barang_penting';
    protected $primaryKey = 'relasi_id';

    function count_barang_by_distributor($id)
    {
        $query =  $this->db
            ->table('tb_relasi_barang_penting')
            ->select('relasi_id')
            ->join('tb_barang_penting', 'tb_relasi_barang_penting.relasi_barang = tb_barang_penting.barang_id')
            ->join('tb_grup_komoditas', 'tb_barang_penting.barang_grup = tb_grup_komoditas.grup_komoditas_id')
            ->where('relasi_distributor', $id)
            ->where('grup_komoditas_status', '1')
            ->where('barang_status', '1')
            ->where('relasi_status', '1');
        return $query->countAllResults();
    }

    function add_relasi($data)
    {
        $this->db
            ->table('tb_relasi_barang_penting')
            ->insert($data);
        return $this->db->affectedRows();
    }

    function edit_relasi($data)
    {
        $this->db
            ->table('tb_relasi_barang_penting')
            ->where('relasi_id', $data['relasi_id'])
            ->update($data);
        return $this->db->affectedRows();
    }

    function get_barang_by_distributor($limit, $distributor)
    {
        $query = $this->db
            ->table('tb_relasi_barang_penting')
            ->select('barang_id, barang_nama, barang_het, barang_foto, barang_satuan')
            ->join('tb_distributor_barang_penting', 'tb_relasi_barang_penting.relasi_distributor = tb_distributor_barang_penting.distributor_id')
            ->join('tb_barang_penting', 'tb_relasi_barang_penting.relasi_barang = tb_barang_penting.barang_id')
            ->join('tb_grup_komoditas', 'tb_barang_penting.barang_grup = tb_grup_komoditas.grup_komoditas_id')
            ->where('relasi_distributor', $distributor)
            ->where('relasi_status', '1')
            ->where('distributor_status', '1')
            ->where('grup_komoditas_status', '1')
            ->where('barang_status', '1');
        if ($limit != 0) {
            $query = $query->limit($limit);
        }
        return $query->orderBy('relasi_create_time', 'DESC')->get()->getResult();
    }
}
