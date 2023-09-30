<?php

namespace App\Models;

use CodeIgniter\Model;

class Transaksi_barang_lainnya_model extends Model
{
    protected $table = 'tb_transaksi_lainnya';
    protected $primaryKey = 'transaksi_id';

    public function get_transaksi_by_distributor_barang_date($distributor, $barang, $date)
    {
        return $this->db
            ->table('tb_transaksi_lainnya')
            ->select('transaksi_harga, transaksi_id, transaksi_catatan')
            ->where('transaksi_distributor', $distributor)
            ->where('transaksi_barang', $barang)
            ->where('transaksi_tanggal', $date)
            ->where('transaksi_status', '1')
            ->get()
            ->getResult();
    }

    public function add_transaksi($data)
    {
        $this->db
            ->table('tb_transaksi_lainnya')
            ->insert($data);
        return $this->db->affectedRows();
    }

    public function edit_transaksi($data)
    {
        $this->db
            ->table('tb_transaksi_lainnya')
            ->where('transaksi_id', $data['transaksi_id'])
            ->update($data);
        return $this->db->affectedRows();
    }

    public function get_all_transaksi_by_filter($limit, $awal, $akhir, $keyword)
    {
        $query = $this->db
            ->table('tb_transaksi_lainnya')
            ->select('transaksi_id, transaksi_tanggal,transaksi_barang, transaksi_distributor, transaksi_harga, transaksi_het, transaksi_catatan, barang_nama, distributor_nama, barang_foto')
            ->join('tb_barang_lainnya', 'tb_transaksi_lainnya.transaksi_barang = tb_barang_lainnya.barang_id')
            ->join('tb_distributor_barang_lainnya', 'tb_transaksi_lainnya.transaksi_distributor = tb_distributor_barang_lainnya.distributor_id')
            ->join('tb_grup_komoditas', 'tb_barang_lainnya.barang_grup = tb_grup_komoditas.grup_komoditas_id')
            ->where('transaksi_status', '1')
            ->where('barang_status', '1')
            ->where('grup_komoditas_status', '1');
        if ($awal != "") {
            $query = $query->where('DATE(transaksi_tanggal) >=', $awal);
        }
        if ($akhir != "") {
            $query = $query->where('DATE(transaksi_tanggal) <=', $akhir);
        }
        if ($keyword != "") {
            $query = $query->like('barang_nama', $keyword, 'both');
            $query = $query->orLike('distributor_nama', $keyword, 'both');
        }
        if ($limit != 0) {
            $query = $query->limit($limit);
        }
        return $query->orderBy('transaksi_tanggal', 'DESC')->get()->getResult();
    }

    public function count_transaksi_by_filter($awal, $akhir, $filter)
    {
        $query = $this->db
            ->table('tb_transaksi_lainnya')
            ->select('transaksi_id')
            ->join('tb_barang_lainnya', 'tb_transaksi_lainnya.transaksi_barang = tb_barang_lainnya.barang_id')
            ->join('tb_distributor_barang_lainnya', 'tb_transaksi_lainnya.transaksi_distributor = tb_distributor_barang_lainnya.distributor_id')
            ->join('tb_grup_komoditas', 'tb_barang_lainnya.barang_grup = tb_grup_komoditas.grup_komoditas_id')
            ->where('transaksi_status', '1')
            ->where('barang_status', '1')
            ->where('grup_komoditas_status', '1');
        if ($awal != "") {
            $query = $query->where('DATE(transaksi_tanggal) >=', $awal);
        }
        if ($akhir != "") {
            $query = $query->where('DATE(transaksi_tanggal) <=', $akhir);
        }
        if ($filter != "") {
            $query = $query->like('barang_nama', $filter, 'both');
            $query = $query->orLike('distributor_nama', $filter, 'both');
        }
        return $query->countAllResults();
    }


    public function get_transaksi_by_id($id)
    {
        return $this->db
            ->table('tb_transaksi_lainnya')
            ->select('*')
            ->join('tb_barang_lainnya', 'tb_transaksi_lainnya.transaksi_barang = tb_barang_lainnya.barang_id')
            ->join('tb_distributor_barang_lainnya', 'tb_transaksi_lainnya.transaksi_distributor = tb_distributor_barang_lainnya.distributor_id')
            ->where('transaksi_id', $id)
            ->get()
            ->getResult();
    }
}
