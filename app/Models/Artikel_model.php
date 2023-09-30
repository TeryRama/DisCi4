<?php

namespace App\Models;

use CodeIgniter\Model;

class Artikel_model extends Model
{
    protected $table = 'tb_artikel';
    protected $primaryKey = 'artikel_id';

    public function get_all_artikel()
    {
        return $this->db
            ->table('tb_artikel')
            ->select('*')
            ->where('artikel_status', '1')
            ->orderBy('artikel_create_time', 'DESC')
            ->get()
            ->getResult();
    }

    public function get_berita_update()
    {
        return $this->db
            ->table('tb_artikel')
            ->select('*')
            ->where('artikel_akses', 'Published')
            ->where('artikel_status', '1')
            ->orderBy('artikel_create_time', 'DESC')
            ->limit(5)
            ->get()
            ->getResult();
    }

    public function get_berita_populer()
    {
        return $this->db
            ->table('tb_artikel')
            ->select('*')
            ->where('artikel_akses', 'Published')
            ->where('artikel_status', '1')
            ->orderBy('artikel_baca', 'DESC')
            ->orderBy('artikel_create_time', 'DESC')
            ->limit(5)
            ->get()
            ->getResult();
    }

    public function get_artikel_by_url($url)
    {
        return $this->db
            ->table('tb_artikel')
            ->select('*')
            ->where('artikel_status', '1')
            ->where('artikel_url', $url)
            ->get()
            ->getResult();
    }

    public function get_artikel_by_id($id)
    {
        return $this->db
            ->table('tb_artikel')
            ->select('*')
            ->where('artikel_status', '1')
            ->where('artikel_id', $id)
            ->get()
            ->getResult();
    }

    public function add_artikel($data)
    {
        $this->db
            ->table('tb_artikel')
            ->insert($data);
        return $this->db->affectedRows();
    }

    public function edit_artikel($data)
    {
        $this->db
            ->table('tb_artikel')
            ->where('artikel_id', $data['artikel_id'])
            ->update($data);
        return $this->db->affectedRows();
    }
}
