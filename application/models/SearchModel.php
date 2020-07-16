<?php



Class SearchModel Extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function search($keyword,$limit,$id,$cat_id)
    {
        $this->db->select('news.*, category.id cat_id , category.cat_name ,category.color');
        $this->db->like('title',$keyword);
        $this->db->limit($limit,$id);
        $this->db->order_by("news.id","desc");
        $this->db->from('news');
        $this->db->where('category_id', $cat_id);
        $this->db->join('category', 'category.id = news.category_id');
        $query = $this->db->get();
        return $query->result();
    }
    function searchall($keyword,$limit,$id)
    {
        $this->db->select('news.*, category.id cat_id , category.cat_name ,category.color');
        $this->db->like('title',$keyword);
        $this->db->limit($limit,$id);
        $this->db->order_by("news.id","desc");
        $this->db->from('news');
        $this->db->join('category', 'category.id = news.category_id');
        $query = $this->db->get();
        return $query->result();
    }

    function count_news($keyword)
    {
        $this->db->select('id');
        $this->db->like('title',$keyword);
        $this->db->from('news');
        $query = $this->db->get();
        return $query->num_rows();
    }

}