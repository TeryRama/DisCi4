<?php

namespace App\Models;

use CodeIgniter\Model;

class Kategori_artikel_model extends Model
{
    protected $table = 'tb_kategori_artikel';
    protected $primaryKey = 'kategori_id'; 

    public function get_all_kategori(){
        return $this->db
                -> table('tb_kategori_artikel')
                -> select('*')
                -> where('kategori_status','1')
                -> orderBy('kategori_create_time','desc')
                -> get()
                -> getResult();
    }

    public function add_kategori($data){
        $this->db
                ->table('tb_kategori_artikel')
                ->insert($data);
        return $this->db->affectedRows();
    }

    public function get_detail_kategori($id)
    {
        return $this->db
            ->table('tb_kategori_artikel')
            ->select('*')
            ->where('kategori_id', $id)
            ->get()
            ->getResult();
    }


    public function edit_kategori($data)
    {
        $this->db
            ->table('tb_kategori_artikel')
            ->where('kategori_id', $data['kategori_id'])
            ->update($data);
        return $this->db->affectedRows();
    }

}