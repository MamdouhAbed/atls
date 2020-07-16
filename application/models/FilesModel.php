<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FilesModel extends CI_Model  {



    public function addFile($data)
    {

        $this->db->insert('file_upload',$data);

    }

    public function getFiles(){
        $this->db->select('*');
        $this->db->order_by("id" , "desc");
        $this->db->from('file_upload');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_file_id($id)
    {
        $this->db->select('*');
        $this->db->where('id', $id);
        $this->db->from('file_upload');
        $query = $this->db->get();
        return $query->result();
    }

    public function updtFile($id = NULL,$data) {

        $this->db->set('file_name', $data);
        $this->db->where('id', $id);
        $this->db->update( 'file_upload');

    }
    public function delFile($id){


        $this -> db -> where('id', $id);
        $this -> db -> delete('file_upload');
    }


}