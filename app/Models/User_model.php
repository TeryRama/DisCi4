<?php

namespace App\Models;

use CodeIgniter\Model;

class User_model extends Model
{
    protected $table = 'tb_user';
    protected $primaryKey = 'user_id';


    public function get_user_by_username_email($username)
    {
        return $this->db
            ->table('tb_user')
            ->select('*')
            ->join('tb_user_level', 'tb_user.user_role = tb_user_level.user_level_id')
            ->where('user_username', $username)
            ->orWhere('user_email', $username)
            ->get()
            ->getResult();
    }

    public function get_user_by_username($username)
    {
        return $this->db
            ->table('tb_user')
            ->select('*')
            ->join('tb_user_level', 'tb_user.user_role = tb_user_level.user_level_id')
            ->where('user_username', $username)
            ->get()
            ->getResult();
    }

    public function get_user_by_email($email)
    {
        return $this->db
            ->table('tb_user')
            ->select('*')
            ->join('tb_user_level', 'tb_user.user_role = tb_user_level.user_level_id')
            ->where('user_email', $email)
            ->get()
            ->getResult();
    }

    public function get_all_user_by_filter($limit, $keyword)
    {
        $query = $this->db
            ->table('tb_user')
            ->select('*')
            ->join('tb_user_level', 'tb_user.user_role = tb_user_level.user_level_id')
            ->where('user_status', '1');
        if ($keyword != "") {
            $query = $query->like('user_name', $keyword, 'both');
        }
        if ($limit != 0) {
            $query = $query->limit($limit);
        }
        return $query->orderBy('user_create_time', 'DESC')->get()->getResult();
    }

    public function count_user_by_filter($filter)
    {
        $query = $this->db
            ->table('tb_user')
            ->select('*')
            ->where('user_status', '1');
        if ($filter != "") {
            $query = $query
                ->like('user_name', $filter, 'both');
        }
        return $query->countAllResults();
    }

    public function add_user($data)
    {
        $this->db
            ->table('tb_user')
            ->insert($data);
        return $this->db->affectedRows();
    }

    public function get_user_by_id($id)
    {
        return $this->db
            ->table('tb_user')
            ->select('*')
            ->join('tb_user_level', 'tb_user.user_role = tb_user_level.user_level_id')
            ->where('user_id', $id)
            ->get()
            ->getResult();
    }

    public function edit_user($data)
    {
        $this->db
            ->table('tb_user')
            ->where('user_id', $data['user_id'])
            ->update($data);
        return $this->db->affectedRows();
    }

    public function get_user($select)
    {
        if ($select == "all") {
            $select = "user_id, user_username, user_email, user_name, user_role, user_level_name, user_fk, user_image,  user_create_time";
        }
        return $this->db
            ->table('tb_user')
            ->select($select)
            ->join('tb_user_level', 'tb_user.user_role = tb_user_level.user_level_id')
            ->where('user_status', '1')
            ->orderBy('user_create_time', 'DESC')
            ->get()
            ->getResult();
    }

    public function reset_password_user($id, $data)
    {
        $this
            ->db
            ->table('tb_user')
            ->where('user_id', $id)
            ->update($data);
        return $this->db->affectedRows();
    }
}
