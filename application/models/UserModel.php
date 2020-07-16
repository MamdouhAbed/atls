<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model  {
    public function get_user_username($id)
    {
        $this->db->select('users.*');
        $this->db->where('name', $id);
        $this->db->from('users');


        $query = $this->db->get();
        return $query->result();
    }

    public function addUser($data)
    {

        $this->db->insert('users',$data);
    }

    public function get_user()
    {
         $this->db->select('users.*,roles.name role_name');
        $this->db->where('is_deleted', 0);
        $this->db->from('users');
        $this->db->join('roles', 'roles.id = users.role_id' , 'left');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_user_id($id)
    {
        $this->db->select('*');
        $this->db->where('id', $id);
        $this->db->from('users');
        $query = $this->db->get();
        return $query->result();
    }


    public function updateUser($id,$data)
    {
//
        $this->db->where('id', $id);
        $this->db->update('users',$data);
    }

    public function delUser($id){


        $this -> db -> where('id', $id);
        $this -> db -> delete('users');
    }

}