<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FollowSitesModel extends CI_Model  {


    public function addFollowSites($data)
    {

        $this->db->insert('follow_sites',$data);
    }

    public function get_followsites()
    {
        $this->db->select('follow_sites.*, category_sites.category_name');
        $this->db->from('follow_sites');
        $this->db->join('category_sites', 'category_sites.id = follow_sites.category_id' , 'left');
        $this->db->order_by("id" , "desc");
        $query = $this->db->get();
        return $query->result();
    }

    public function get_home_followsites()
    {
        $this->db->select('follow_sites.*');
        $this->db->from('follow_sites');
        $this->db->limit(10);
        $this->db->where('show_home_id', 1);
        $this->db->order_by("id" , "desc");
        $query = $this->db->get();
        return $query->result();
    }

    public function get_followsitespage($id)
    {
        $this->db->select('follow_sites.*, category_sites.category_name');
        $this->db->from('follow_sites');
        $this->db->join('category_sites', 'category_sites.id = follow_sites.category_id' , 'left');
        $this->db->where('category_id',$id);
        $this->db->order_by("id" , "desc");
        $query = $this->db->get();
        return $query->result();
    }

    public function get_followsites_id($id)
    {
        $this->db->select('*');
        $this->db->where('id', $id);
        $this->db->from('follow_sites');
        $query = $this->db->get();
        return $query->result();
    }


    public function updateFollowSites($id,$data)
    {
//
        $this->db->where('id', $id);
        $this->db->update('follow_sites',$data);
    }

    public function delFollowSites($id){


        $this -> db -> where('id', $id);
        $this -> db -> delete('follow_sites');
    }

}