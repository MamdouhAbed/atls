<?php

class InfographicModel extends CI_Model {

    public function get_infographic($limit,$start)
    {

        $this->db->select('*');
        $this->db->order_by("id","desc");
        $this->db->limit($limit,$start);
        $this->db->from('infographic');
        $query=$this->db->get();
        return $query->result();
    }

}