<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QuotationsModel extends CI_Model  {


    public function addQuotations($data)
    {

        $this->db->insert('quotations',$data);
    }

    public function get_quotations()
    {
        $this->db->select('quotations.*, author.name, author.img');
        $this->db->from('quotations');
        $this->db->join('author', 'author.id = quotations.author_id');
        $this->db->limit('5');
        $this->db->order_by("id" , "desc");
        $query = $this->db->get();
        return $query->result();
    }
    public function get_quotations_panel()
    {
        $this->db->select('quotations.*, author.name, author.img');
        $this->db->from('quotations');
        $this->db->join('author', 'author.id = quotations.author_id');
        $this->db->order_by("id" , "desc");
        $query = $this->db->get();
        return $query->result();
    }

    public function get_quotations_id($id)
    {
        $this->db->select('*');
        $this->db->where('id', $id);
        $this->db->from('quotations');
        $query = $this->db->get();
        return $query->result();
    }


    public function updateQuotations($id,$data)
    {
//
        $this->db->where('id', $id);
        $this->db->update('quotations',$data);
    }

    public function delQuotations($id){


        $this -> db -> where('id', $id);
        $this -> db -> delete('quotations');
    }

}