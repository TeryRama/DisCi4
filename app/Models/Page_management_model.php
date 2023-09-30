<?php

namespace App\Models;

use CodeIgniter\Model;

class Page_management_model extends Model
{
    // protected $table = 'tb_management_page';
    // protected $primaryKey = 'id_management'; 
    // protected $allowedFields = [
    //     'login_footer', 
    //     'login_footer_link',
    //     'login_bg_banner',
    //     'login_logo_banner',
    //     'login_text1_banner',
    //     'login_text2_banner',
    //     'login_text_color_banner',
    //     'login_image_banner',
    //     'main_desktop_logo',
    //     'main_mobile_logo',
    //     'main_right_footer',
    //     'main_right_footer_link',
    //     'main_left_footer',
    //     'main_left_footer_link',
    //     'login_last_update_time',
    //     'login_last_update_by',
    //     'main_last_update_time',
    //     'main_last_update_by',
    // ];

    function __construct()
    {
        $this->db = db_connect();
    }

    public function get_all_data()
    {
        return $this->db
            ->table('tb_management_page')
            ->select('*')
            ->get()
            ->getResult();
    }

    public function get_detail_management_page($id)
    {
        return $this
            ->db
            ->table('tb_management_page')
            ->select('*')
            ->where('id_management', $id)
            ->get()
            ->getResult();
    }

    public function edit_management_page($data)
    {
        $this
            ->db
            ->table('tb_management_page')
            ->where('id_management ', '1')
            ->update($data);
        return $this->db->affectedRows();
    }
}
