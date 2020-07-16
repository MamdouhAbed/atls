<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AboutUsModel extends CI_Model  {

    public function updateDetails($data)
    {
//
        $this->db->update('about_us',$data);
    }

    public function get_Details()
    {
        $this->db->select('*');
        $this->db->from('about_us');
        $query = $this->db->get();
        return $query->result();
    }

}