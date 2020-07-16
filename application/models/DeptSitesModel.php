<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DeptSitesModel extends CI_Model  {

    public function addSiteDept($data)
    {

        $this->db->insert('category_sites',$data);
    }
    public function get_siteDept()
    {
        $this->db->select('*');
        $this->db->from('category_sites');
        $query = $this->db->get();
        return $query->result();
    }
    public function delSiteDept($id){


        $this -> db -> where('id', $id);
        $this -> db -> delete('category_sites');
    }

    public function updtSiteDept($id = NULL,$data) {

        $this->db->set('category_name', $data);
        $this->db->where('id', $id);
        $this->db->update( 'category_sites');

    }

}