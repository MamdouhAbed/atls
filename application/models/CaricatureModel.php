<?php

class CaricatureModel extends CI_Model {

    public function get_caricature($limit,$start)
    {

        $this->db->select('*');
        $this->db->order_by("id","desc");
        $this->db->limit($limit,$start);
        $this->db->from('caricature');
        $query=$this->db->get();
        return $query->result();
    }

}