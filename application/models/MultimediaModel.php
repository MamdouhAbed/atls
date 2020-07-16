<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MultimediaModel extends CI_Model  {

    public function addVideo($data)
    {

        $this->db->insert('videos',$data);
    }

    public function get_video()
    {
        $this->db->select('*');
        $this->db->from('videos');
        $this->db->order_by("id" , "desc");
        $query = $this->db->get();
        return $query->result();
    }

    public function get_video_id($id)
    {
        $this->db->select('*');
        $this->db->where('id', $id);
        $this->db->from('videos');
        $query = $this->db->get();
        return $query->result();
    }

    public function updateVideo($id,$data)
    {

        $this->db->where('id', $id);
        $this->db->update('videos',$data);
    }

    public function delVideo($id){


        $this -> db -> where('id', $id);
        $this -> db -> delete('videos');
    }

    public function get_images()
    {
        $id=$this->uri->segment(3);
        $this->db->select('*');
       $this->db->from('images');
        $this->db->where('media_dept_id', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function deleteImage($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('images');
    }

    public function delAlbum($id){


        $this -> db -> where('id', $id);
        $this -> db -> delete('media_dept');
    }
    public function delPDF($id){


        $this -> db -> where('id', $id);
        $this -> db -> delete('news_paper');
    }
    public function addImages($data)
    {

        $this->db->insert('images',$data);
    }

    public function updateImages($id,$data)
    {

        $this->db->where('id', $id);
        $this->db->update('images',$data);
    }

    public function insert($data = array()){
        $insert = $this->db->insert_batch('images',$data);
        return $insert?true:false;
    }

    public function addPdf($data)
    {

        $this->db->insert('news_paper',$data);
        return $this->db->insert_id();

    }

    public function getPdf(){
        $this->db->select('*');
        $this->db->order_by("news_num" , "desc");
        $this->db->from('news_paper');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_pdf_id($id)
    {
        $this->db->select('*');
        $this->db->where('id', $id);
        $this->db->from('news_paper');
        $query = $this->db->get();
        return $query->result();
    }

    public function insertpdf($data = array()){
        $this->db->where('news_paper_id', $data[0]['news_paper_id']);
        $this->db->delete('imgs_newspaper');
        $insert = $this->db->insert_batch('imgs_newspaper',$data);
        return $insert?true:false;
    }

    public function updatePdf($id,$data)
    {

        $this->db->where('id', $id);
        $this->db->update('news_paper',$data);
    }

    public function updateImgPdf($id,$data)
    {

        $this->db->where('id', $id);
        $this->db->update('imgs_newspaper',$data);
    }

    public function getAlbums(){
        $this->db->select('*');
        $this->db->order_by("id" , "desc");
        $this->db->from('media_dept');
        $query = $this->db->get();
        return $query->result();
    }

    public function addinfographic($data)
    {

        $this->db->insert('infographic',$data);
    }

    public function getInfo(){
        $this->db->select('*');
        $this->db->from('infographic');
        $this->db->order_by("id" , "desc");
        $query = $this->db->get();
        return $query->result();
    }

    public function get_info_id($id)
    {
        $this->db->select('*');
        $this->db->where('id', $id);
        $this->db->from('infographic');
        $query = $this->db->get();
        return $query->result();
    }

    public function updateInfo($id,$data)
    {

        $this->db->where('id', $id);
        $this->db->update('infographic',$data);
    }
    public function delinfographic($id){


        $this -> db -> where('id', $id);
        $this -> db -> delete('infographic');
    }

//caricature

    public function addcaricature($data)
    {

        $this->db->insert('caricature',$data);
    }

    public function getCari(){
        $this->db->select('*');
        $this->db->from('caricature');
        $this->db->order_by("id" , "desc");
        $query = $this->db->get();
        return $query->result();
    }

    public function get_cari_id($id)
    {
        $this->db->select('*');
        $this->db->where('id', $id);
        $this->db->from('caricature');
        $query = $this->db->get();
        return $query->result();
    }

    public function updatecari($id,$data)
    {

        $this->db->where('id', $id);
        $this->db->update('caricature',$data);
    }
    public function delcaricature($id){


        $this -> db -> where('id', $id);
        $this -> db -> delete('caricature');
    }
}