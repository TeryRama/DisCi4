<?php

namespace App\Models;

use CodeIgniter\Model;

class Jualan_model extends Model
{
    protected $table = 'tb_jualan';
    protected $primaryKey = 'jualan_id';

    function count_jualan_by_pedagang($id)
    {
        $query =  $this->db
            ->table('tb_jualan')
            ->select('jualan_id')
            ->join('tb_komoditas', 'tb_jualan.jualan_komoditas = tb_komoditas.komoditas_id')
            ->join('tb_grup_komoditas', 'tb_komoditas.komoditas_grup = tb_grup_komoditas.grup_komoditas_id')
            ->where('jualan_pedagang', $id)
            ->where('grup_komoditas_status', '1')
            ->where('komoditas_status', '1')
            ->where('jualan_status', '1');
        return $query->countAllResults();
    }

    function add_jualan($data)
    {
        $this->db
            ->table('tb_jualan')
            ->insert($data);
        return $this->db->affectedRows();
    }

    function edit_jualan($data)
    {
        $this->db
            ->table('tb_jualan')
            ->where('jualan_id', $data['jualan_id'])
            ->update($data);
        return $this->db->affectedRows();
    }

    function get_jualan_by_pedagang($limit, $pedagang)
    {
        $query = $this->db
            ->table('tb_jualan')
            ->select('komoditas_id,komoditas_nama, komoditas_het, komoditas_foto, komoditas_satuan')
            ->join('tb_pedagang', 'tb_jualan.jualan_pedagang = tb_pedagang.pedagang_id')
            ->join('tb_komoditas', 'tb_jualan.jualan_komoditas = tb_komoditas.komoditas_id')
            ->join('tb_grup_komoditas', 'tb_komoditas.komoditas_grup = tb_grup_komoditas.grup_komoditas_id')
            ->where('jualan_pedagang', $pedagang)
            ->where('jualan_status', '1')
            ->where('pedagang_status', '1')
            ->where('grup_komoditas_status', '1')
            ->where('komoditas_status', '1');
        if ($limit != 0) {
            $query = $query->limit($limit);
        }
        return $query->orderBy('jualan_create_time', 'DESC')->get()->getResult();
    }
}
