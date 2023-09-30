<?php

namespace App\Models;

use CodeIgniter\Model;

class Transaksi_model extends Model
{
    protected $table = 'tb_transaksi';
    protected $primaryKey = 'transaksi_id';

    public function get_all_transaksi_by_filter($limit, $keyword, $awal, $akhir, $pasar)
    {
        $query = $this->db
            ->table('tb_transaksi')
            ->select('transaksi_id, transaksi_tanggal,transaksi_komoditas, transaksi_pedagang, transaksi_harga, transaksi_het, transaksi_catatan, komoditas_nama, pedagang_nama, komoditas_foto, pasar_nama')
            ->join('tb_pasar', 'tb_transaksi.transaksi_pasar = tb_pasar.pasar_id')
            ->join('tb_pedagang', 'tb_transaksi.transaksi_pedagang = tb_pedagang.pedagang_id')
            ->join('tb_komoditas', 'tb_transaksi.transaksi_komoditas = tb_komoditas.komoditas_id')
            ->join('tb_grup_komoditas', 'tb_komoditas.komoditas_grup = tb_grup_komoditas.grup_komoditas_id')
            ->where('transaksi_status', '1')
            ->where('komoditas_status', '1')
            ->where('grup_komoditas_status', '1');
        // ->where('pasar_status', '1');
        if ($keyword != "") {
            $query = $query->groupStart();
            $query = $query->like('komoditas_nama', $keyword, 'both');
            $query = $query->orLike('pedagang_nama', $keyword, 'both');
            $query = $query->orLike('pasar_nama', $keyword, 'both');
            $query = $query->groupEnd();
        }
        if ($awal != "") {
            $query = $query->where('DATE(transaksi_tanggal) >=', $awal);
        }
        if ($akhir != "") {
            $query = $query->where('DATE(transaksi_tanggal) <=', $akhir);
        }
        if ($pasar != "all") {
            $query = $query->where('tb_pasar.pasar_id', $pasar);
        }
        if ($limit != 0) {
            $query = $query->limit($limit);
        }
        return $query->orderBy('transaksi_tanggal', 'DESC')->get()->getResult();
    }

    public function count_transaksi_by_filter($keyword, $awal, $akhir,  $pasar)
    {
        $query = $this->db
            ->table('tb_transaksi')
            ->select('*')
            ->join('tb_pasar', 'tb_transaksi.transaksi_pasar = tb_pasar.pasar_id')
            ->join('tb_pedagang', 'tb_transaksi.transaksi_pedagang = tb_pedagang.pedagang_id')
            ->join('tb_komoditas', 'tb_transaksi.transaksi_komoditas = tb_komoditas.komoditas_id')
            ->join('tb_grup_komoditas', 'tb_komoditas.komoditas_grup = tb_grup_komoditas.grup_komoditas_id')
            ->where('transaksi_status', '1')
            ->where('komoditas_status', '1')
            ->where('grup_komoditas_status', '1');
        // ->where('tb_pasar.pasar_status', '1');
        if ($pasar != "all") {
            $query = $query
                ->where('tb_pasar.pasar_id', $pasar);
        }
        if ($keyword != "") {
            $query = $query->groupStart();
            $query = $query->like('komoditas_nama', $keyword, 'both');
            $query = $query->orLike('pedagang_nama', $keyword, 'both');
            $query = $query->orLike('pasar_nama', $keyword, 'both');
            $query = $query->groupEnd();
        }
        if ($awal != "") {
            $query = $query->where('DATE(transaksi_tanggal) >=', $awal);
        }
        if ($akhir != "") {
            $query = $query->where('DATE(transaksi_tanggal) <=', $akhir);
        }
        if ($pasar != "all") {
            $query = $query->where('tb_pasar.pasar_id', $pasar);
        }
        return $query->countAllResults();
    }

    public function add_transaksi($data)
    {
        $this->db
            ->table('tb_transaksi')
            ->insert($data);
        return $this->db->affectedRows();
    }

    public function get_transaksi_by_id($id)
    {
        return $this->db
            ->table('tb_transaksi')
            ->select('*')
            ->join('tb_pasar', 'tb_transaksi.transaksi_pasar = tb_pasar.pasar_id')
            ->join('tb_pedagang', 'tb_transaksi.transaksi_pedagang = tb_pedagang.pedagang_id')
            ->join('tb_komoditas', 'tb_transaksi.transaksi_komoditas = tb_komoditas.komoditas_id')
            ->join('tb_grup_komoditas', 'tb_komoditas.komoditas_grup = tb_grup_komoditas.grup_komoditas_id')
            ->where('transaksi_id', $id)
            ->get()
            ->getResult();
    }

    public function edit_transaksi($data)
    {
        $this->db
            ->table('tb_transaksi')
            ->where('transaksi_id', $data['transaksi_id'])
            ->update($data);
        return $this->db->affectedRows();
    }

    public function get_avg_by_komoditas_date($komoditas, $date)
    {
        return $this->db
            ->table('tb_transaksi')
            ->select('ROUND(AVG(transaksi_harga)) as rata_harga, transaksi_tanggal')
            ->where('transaksi_komoditas', $komoditas)
            ->where('DATE(transaksi_tanggal)', $date)
            ->where('transaksi_status', '1')
            ->where('transaksi_harga >', '0')
            ->limit(2)
            ->get()
            ->getResult();
    }

    public function get_avg_by_kecamatan($kecamatan, $komoditas, $date)
    {
        return $this->db
            ->table('tb_transaksi')
            ->select('tb_komoditas.komoditas_satuan,ROUND(AVG(transaksi_harga)) as rata_harga')
            ->join('tb_pasar', 'tb_transaksi.transaksi_pasar = tb_pasar.pasar_id')
            ->join('tb_komoditas', 'tb_transaksi.transaksi_komoditas = tb_komoditas.komoditas_id')
            ->where('tb_pasar.pasar_kecamatan', $kecamatan)
            ->where('tb_transaksi.transaksi_komoditas', $komoditas)
            ->where('tb_transaksi.transaksi_tanggal', $date)
            ->where('tb_transaksi.transaksi_status', '1')
            ->get()
            ->getResult();
    }

    public function get_last_avg_by_kecamatan_komoditas($kecamatan, $komoditas)
    {
        return $this->db
            ->table('tb_transaksi')
            ->select('tb_transaksi.transaksi_tanggal,tb_komoditas.komoditas_satuan,ROUND(AVG(transaksi_harga)) as rata_harga')
            ->join('tb_pasar', 'tb_transaksi.transaksi_pasar = tb_pasar.pasar_id')
            ->join('tb_komoditas', 'tb_transaksi.transaksi_komoditas = tb_komoditas.komoditas_id')
            ->where('tb_pasar.pasar_kecamatan', $kecamatan)
            ->where('tb_transaksi.transaksi_komoditas', $komoditas)
            ->where('tb_transaksi.transaksi_status', '1')
            // ->where('tb_pasar.pasar_status', '1')
            ->where('tb_komoditas.komoditas_status', '1')
            ->groupBy('tb_transaksi.transaksi_tanggal')
            ->orderBy('tb_transaksi.transaksi_tanggal', 'DESC')
            ->limit(2)
            ->get()
            ->getResult();
    }

    //cekkkkkkkkkkkkkkkkk

    public function get_transaksi_by_pasar_komoditas($pasar, $komoditas, $tanggal)
    {
        return $this->db
            ->table('tb_transaksi')
            ->select('*')
            ->where('transaksi_status', '1')
            ->where('transaksi_pasar', $pasar)
            ->where('transaksi_komoditas', $komoditas)
            ->where('transaksi_tanggal', $tanggal)
            ->get()
            ->getResult();
    }

    public function get_transaksi_by_komoditas_date($komoditas, $tanggal)
    {
        return $this->db
            ->table('tb_transaksi')
            ->select('tb_transaksi.transaksi_harga, tb_transaksi.transaksi_pasar, tb_pasar.pasar_nama')
            ->join('tb_pasar', 'tb_transaksi.transaksi_pasar = tb_pasar.pasar_id')
            // ->groupBy('transaksi_pasar')
            ->where('transaksi_status', '1')
            ->where('transaksi_komoditas', $komoditas)
            ->where('transaksi_tanggal', $tanggal)
            ->get()
            ->getResult();
    }

    public function get_last_transaksi_by_komoditas($komoditas)
    {
        return  $this->db
            ->table('tb_transaksi')
            ->select('transaksi_tanggal')
            ->where('transaksi_komoditas', $komoditas)
            ->where('transaksi_status', '1')
            ->groupBy('transaksi_tanggal')
            ->orderBy('transaksi_tanggal', 'DESC')
            ->limit(2)
            ->get()
            ->getResult();
    }

    public function get_last_transaksi_by_pasar($pasar)
    {
        return  $this->db
            ->table('tb_transaksi')
            ->select('transaksi_tanggal')
            ->where('transaksi_pasar', $pasar)
            ->where('transaksi_status', '1')
            ->orderBy('transaksi_tanggal', 'DESC')
            ->limit(2)
            ->get()
            ->getResult();
    }

    public function get_last_transaksi_by_komoditas_pasar($komoditas, $pasar)
    {
        return  $this->db
            ->table('tb_transaksi')
            ->select('transaksi_tanggal')
            ->where('transaksi_komoditas', $komoditas)
            ->where('transaksi_pasar', $pasar)
            ->where('transaksi_status', '1')
            ->orderBy('transaksi_tanggal', 'DESC')
            ->limit(2)
            ->get()
            ->getResult();
    }



    public function get_last_transaksi_by_komoditas_pasar_date($komoditas, $pasar, $date)
    {
        return  $this->db
            ->table('tb_transaksi')
            ->select('transaksi_id,transaksi_tanggal')
            ->where('transaksi_komoditas', $komoditas)
            ->where('transaksi_pasar', $pasar)
            ->where('transaksi_tanggal <', $date)
            ->where('transaksi_status', '1')
            ->orderBy('transaksi_tanggal', 'DESC')
            ->limit(2)
            ->get()
            ->getResult();
    }

    public function get_transaksi_by_pasar_date($pasar, $tanggal)
    {
        return  $this->db
            ->table('tb_transaksi')
            ->select('tb_transaksi.transaksi_tanggal,tb_transaksi.transaksi_komoditas, tb_transaksi.transaksi_harga, tb_komoditas.komoditas_nama, tb_komoditas.komoditas_satuan, tb_komoditas.komoditas_foto')
            ->join('tb_komoditas', 'tb_transaksi.transaksi_komoditas = tb_komoditas.komoditas_id')
            ->where('transaksi_tanggal', $tanggal)
            ->where('transaksi_pasar', $pasar)
            ->where('transaksi_status', '1')
            ->get()
            ->getResult();
    }



    public function get_harga_by_komoditas_pasar_date($komoditas, $pasar, $date)
    {
        return $this->db
            ->table('tb_transaksi')
            ->select('tb_transaksi.transaksi_harga, tb_transaksi.transaksi_id, tb_transaksi.transaksi_catatan')
            ->where('transaksi_pasar', $pasar)
            ->where('transaksi_komoditas', $komoditas)
            ->where('transaksi_tanggal', $date)
            ->where('transaksi_status', '1')
            ->get()
            ->getResult();
    }

    public function get_max_harga_by_komoditas_date($komoditas, $date)
    {
        return $this->db
            ->table('tb_transaksi')
            ->select('tb_pasar.pasar_nama,tb_transaksi.transaksi_harga')
            ->join('tb_pasar', 'tb_transaksi.transaksi_pasar = tb_pasar.pasar_id')
            ->where('tb_transaksi.transaksi_komoditas', $komoditas)
            ->where('tb_transaksi.transaksi_komoditas', $komoditas)
            ->where('tb_transaksi.transaksi_tanggal', $date)
            ->where('tb_transaksi.transaksi_status', '1')
            ->orderBy('tb_transaksi.transaksi_harga', 'DESC')
            ->limit(1)
            ->get()
            ->getResult();
    }

    public function get_min_harga_by_komoditas_date($komoditas, $date)
    {
        return $this->db
            ->table('tb_transaksi')
            ->select('tb_pasar.pasar_nama,tb_transaksi.transaksi_harga')
            ->join('tb_pasar', 'tb_transaksi.transaksi_pasar = tb_pasar.pasar_id')
            ->where('tb_transaksi.transaksi_komoditas', $komoditas)
            ->where('tb_transaksi.transaksi_komoditas', $komoditas)
            ->where('tb_transaksi.transaksi_tanggal', $date)
            ->where('tb_transaksi.transaksi_status', '1')
            ->orderBy('tb_transaksi.transaksi_harga', 'ASC')
            ->limit(1)
            ->get()
            ->getResult();
    }




    public function count_transaksi_by_komoditas($komoditas)
    {
        $query =  $this->db
            ->table('tb_transaksi')
            ->select('tb_transaksi.transaksi_id')
            ->where('transaksi_komoditas', $komoditas)
            ->where('tb_transaksi.transaksi_status', '1');
        return $query->countAllResults();
    }

    public function count_transaksi_by_komoditas_kecamatan($komoditas, $kecamatan)
    {
        $query =  $this->db
            ->table('tb_transaksi')
            ->select('tb_transaksi.transaksi_id')
            ->join('tb_pasar', 'tb_transaksi.transaksi_pasar = tb_pasar.pasar_id')
            ->where('tb_pasar.pasar_kecamatan', $kecamatan)
            ->where('tb_transaksi.transaksi_komoditas', $komoditas)
            ->where('tb_transaksi.transaksi_status', '1')
            ->groupBy('tb_pasar.pasar_kecamatan');
        return $query->countAllResults();
    }

    public function count_transaksi_by_komoditas_pasar($komoditas, $pasar)
    {
        $query =  $this->db
            ->table('tb_transaksi')
            ->select('tb_transaksi.transaksi_id')
            ->join('tb_pasar', 'tb_transaksi.transaksi_pasar = tb_pasar.pasar_id')
            ->where('tb_transaksi.transaksi_pasar', $pasar)
            ->where('tb_transaksi.transaksi_komoditas', $komoditas)
            ->where('tb_transaksi.transaksi_status', '1')
            ->groupBy('tb_transaksi.transaksi_tanggal');
        return $query->countAllResults();
    }

    public function count_transaksi_by_pasar_date($pasar, $date)
    {
        $query =  $this->db
            ->table('tb_transaksi')
            ->select('tb_transaksi.transaksi_id')
            ->where('tb_transaksi.transaksi_pasar', $pasar)
            ->where('tb_transaksi.transaksi_tanggal', $date)
            ->where('tb_transaksi.transaksi_harga !=', '0')
            ->where('tb_transaksi.transaksi_status', '1');
        return $query->countAllResults();
    }

    public function count_transaksi_by_date($tanggal)
    {
        $query =  $this->db
            ->table('tb_transaksi')
            ->select('*')
            ->join('tb_pasar', 'tb_transaksi.transaksi_pasar = tb_pasar.pasar_id')
            ->where('tb_transaksi.transaksi_tanggal', $tanggal)
            ->where('tb_transaksi.transaksi_status', '1');
        return $query->countAllResults();
    }

    public function get_transaksi_grafik_inhil($bulan, $tahun, $komoditas)
    {
        return $this->db
            ->table('tb_transaksi')
            ->select('transaksi_tanggal, ROUND(AVG(transaksi_harga)) as rata_harga')
            ->where('transaksi_komoditas', $komoditas)
            ->where('MONTH(transaksi_tanggal)', $bulan)
            ->where('YEAR(transaksi_tanggal)', $tahun)
            ->where('transaksi_status', '1')
            ->groupBy('transaksi_tanggal')
            ->orderBy('transaksi_tanggal', 'ASC')
            ->get()
            ->getResult();
    }

    public function get_transaksi_grafik_kecamatan($kecamatan, $bulan, $tahun, $komoditas)
    {
        return $this->db
            ->table('tb_transaksi')
            ->select('transaksi_tanggal, ROUND(AVG(transaksi_harga)) as rata_harga')
            ->join('tb_pasar', 'tb_transaksi.transaksi_pasar = tb_pasar.pasar_id')
            ->where('tb_pasar.pasar_kecamatan', $kecamatan)
            ->where('transaksi_komoditas', $komoditas)
            ->where('MONTH(transaksi_tanggal)', $bulan)
            ->where('YEAR(transaksi_tanggal)', $tahun)
            ->where('transaksi_status', '1')
            ->groupBy('transaksi_tanggal')
            ->orderBy('transaksi_tanggal', 'ASC')
            ->get()
            ->getResult();
    }

    public function get_transaksi_grafik_pasar($pasar, $bulan, $tahun, $komoditas)
    {
        return $this->db
            ->table('tb_transaksi')
            ->select('transaksi_tanggal, ROUND(AVG(transaksi_harga)) as rata_harga')
            ->where('transaksi_pasar', $pasar)
            ->where('transaksi_komoditas', $komoditas)
            ->where('MONTH(transaksi_tanggal)', $bulan)
            ->where('YEAR(transaksi_tanggal)', $tahun)
            ->where('transaksi_status', '1')
            ->groupBy('transaksi_tanggal')
            ->orderBy('transaksi_tanggal', 'ASC')
            ->get()
            ->getResult();
    }

    public function get_transaksi_by_pedagang_komoditas_date($pedagang, $komoditas, $date)
    {
        return $this->db
            ->table('tb_transaksi')
            ->select('transaksi_harga, transaksi_id, transaksi_catatan')
            ->where('transaksi_pedagang', $pedagang)
            ->where('transaksi_komoditas', $komoditas)
            ->where('transaksi_tanggal', $date)
            ->where('transaksi_status', '1')
            ->get()
            ->getResult();
    }
}
