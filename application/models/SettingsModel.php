<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SettingsModel extends CI_Model  {




    public function get_settings()
    {
        $this->db->select('value');
        $this->db->from('settings');
        $this->db->where('st_name', 'home_news_style');
        $query = $this->db->get();
        return $query->result();
    }

    public function update_settings($data) {
        $this->db->update('settings',$data);
        $this->db->where('st_name', 'home_news_style');

    }





    }

