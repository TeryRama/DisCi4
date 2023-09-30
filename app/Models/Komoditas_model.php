<?php

namespace App\Models;

use CodeIgniter\Model;

class Komoditas_model extends Model
{
    protected $table = 'tb_komoditas';
    protected $primaryKey = 'komoditas_id';

    public function count_komoditas_by_filter($filter, $grup)
    {
        $query = $this->db
            ->table('tb_komoditas')
            ->select('*')
            ->join('tb_grup_komoditas', 'tb_komoditas.komoditas_grup = tb_grup_komoditas.grup_komoditas_id')
            ->where('grup_komoditas_status', '1')
            ->where('komoditas_status', '1');
        if ($grup != "null") {
            $query = $query->where('komoditas_grup', $grup);
        }
        if ($filter != "") {
            $query = $query
                ->like('komoditas_nama', $filter, 'both');
        }
        return $query->countAllResults();
    }

    public function add_komoditas($data)
    {
        $this->db
            ->table('tb_komoditas')
            ->insert($data);
        return $this->db->affectedRows();
    }

    public function edit_komoditas($data)
    {
        $this->db
            ->table('tb_komoditas')
            ->where('komoditas_id', $data['komoditas_id'])
            ->update($data);
        return $this->db->affectedRows();
    }

    public function get_all_komoditas_by_filter($limit, $keyword, $grup)
    {
        $query = $this->db
            ->table('tb_komoditas')
            ->select('*')
            ->join('tb_grup_komoditas', 'tb_komoditas.komoditas_grup = tb_grup_komoditas.grup_komoditas_id')
            ->where('komoditas_status', '1')
            ->where('grup_komoditas_status', '1');
        if ($grup != "null") {
            $query = $query->where('komoditas_grup', $grup);
        }
        if ($keyword != "") {
            $query = $query->like('komoditas_nama', $keyword, 'both');
        }

        if ($limit != 0) {
            $query = $query->limit($limit);
        }
        return $query->orderBy('komoditas_create_time', 'DESC')->get()->getResult();
    }

    public function get_all_komoditas()
    {
        return $this->db
            ->table('tb_komoditas')
            ->select('komoditas_id, komoditas_nama, komoditas_grup, komoditas_foto, komoditas_satuan')
            ->join('tb_grup_komoditas', 'tb_komoditas.komoditas_grup = tb_grup_komoditas.grup_komoditas_id')
            ->where('komoditas_status', '1')
            ->where('grup_komoditas_status', '1')
            ->get()->getResult();
    }

    public function get_komoditas_by_id($id)
    {
        return $this->db
            ->table('tb_komoditas')
            ->select('komoditas_id, komoditas_nama, komoditas_grup, komoditas_foto, komoditas_satuan, komoditas_het')
            ->where('komoditas_id', $id)
            ->get()
            ->getResult();
    }

    public function get_komoditas_by_grup($grup)
    {
        return $this->db
            ->table('tb_komoditas')
            ->select('komoditas_id, komoditas_nama, komoditas_grup, komoditas_foto, komoditas_satuan')
            ->join('tb_grup_komoditas', 'tb_komoditas.komoditas_grup = tb_grup_komoditas.grup_komoditas_id')
            ->where('komoditas_grup', $grup)
            ->where('komoditas_status', '1')
            ->where('grup_komoditas_status', '1')
            ->orderBy('komoditas_nama', 'ASC')
            ->get()
            ->getResult();
    }
}
