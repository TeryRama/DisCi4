<?php

namespace App\Models;

use CodeIgniter\Model;

class Relasi_stok_model extends Model
{
    protected $table = 'tb_relasi_stok';
    protected $primaryKey = 'relasi_id';

    function count_barang_by_distributor($id)
    {
        $query =  $this->db
            ->table('tb_relasi_stok')
            ->select('relasi_id')
            ->join('tb_komoditas_stok', 'tb_relasi_stok.relasi_barang = tb_komoditas_stok.komoditas_id')
            ->join('tb_grup_komoditas', 'tb_komoditas_stok.komoditas_grup = tb_grup_komoditas.grup_komoditas_id')
            ->where('relasi_distributor', $id)
            ->where('grup_komoditas_status', '1')
            ->where('komoditas_status', '1')
            ->where('relasi_status', '1');
        return $query->countAllResults();
    }

    function add_relasi($data)
    {
        $this->db
            ->table('tb_relasi_stok')
            ->insert($data);
        return $this->db->affectedRows();
    }

    function edit_relasi($data)
    {
        $this->db
            ->table('tb_relasi_stok')
            ->where('relasi_id', $data['relasi_id'])
            ->update($data);
        return $this->db->affectedRows();
    }

    function get_barang_by_distributor($limit, $distributor)
    {
        $query = $this->db
            ->table('tb_relasi_stok')
            ->select('komoditas_id, komoditas_nama, komoditas_foto, komoditas_satuan')
            ->join('tb_distributor_stok', 'tb_relasi_stok.relasi_distributor = tb_distributor_stok.distributor_id')
            ->join('tb_komoditas_stok', 'tb_relasi_stok.relasi_barang = tb_komoditas_stok.komoditas_id')
            ->join('tb_grup_komoditas', 'tb_komoditas_stok.komoditas_grup = tb_grup_komoditas.grup_komoditas_id')
            ->where('relasi_distributor', $distributor)
            ->where('relasi_status', '1')
            ->where('distributor_status', '1')
            ->where('grup_komoditas_status', '1')
            ->where('komoditas_status', '1');
        if ($limit != 0) {
            $query = $query->limit($limit);
        }
        return $query->orderBy('relasi_create_time', 'DESC')->get()->getResult();
    }
}
