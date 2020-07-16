<?php

class UserModel extends CI_Model {

    public function get_user()
{
    $query = $this->db->get('users');

    return $query->result();
}

}