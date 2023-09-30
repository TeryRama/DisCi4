<?php

namespace App\Models;

use CodeIgniter\Model;

class Image_artikel_model extends Model
{
    protected $table = 'tb_img_artikel';
    protected $primaryKey = 'img_id'; 
    

    public function get_image_by_artikel($id){
        return $this->db
            ->table('tb_img_artikel')
            ->select('*')
            ->where('img_artikel',$id)
            ->where('img_status','1')
            ->get()
            ->getResult();
    }

    public function add_image($data){
        $this->db
                ->table('tb_img_artikel')
                ->insert($data);
        return $this->db->affectedRows();
    }

    public function delete_image($data){
        $this->db
                ->table('tb_img_artikel')
                ->where('img_artikel',$data['img_artikel'])
                ->where('img_nama',$data['img_nama'])
                ->delete();
        return $this->db->affectedRows();
    }

    public function delete_image_by_id($id){
        $update = ["img_status"=>"0"];
        $this->db
                ->table('tb_img_artikel')
                ->where('img_id',$id)
                ->update($update);
        return $this->db->affectedRows();
    }
    public function update_status($data){
        $update = ['img_status'=>'1'];
        $this->db
                ->table('tb_img_artikel')
                ->where('img_artikel',$data['img_artikel'])
                ->where('img_action_in',$data['img_action'])
                ->where('img_token_edit',$data['img_token_edit'])
                ->where('img_status','0')
                ->update($update);
        return $this->db->affectedRows();
    }
    public function update_status_add($data){
        $update = ['img_status'=>'1'];
        $this->db
                ->table('tb_img_artikel')
                ->where('img_artikel',$data['img_artikel'])
                ->where('img_action_in',$data['img_action'])
                ->where('img_status','0')
                ->update($update);
        return $this->db->affectedRows();
    }

    

}