<?php

class GalleryImgModel extends CI_Model {


    public function get_img_gallery($limit,$id)
    {
        $this->db->select('*');
        $this->db->from('(select * from media_dept Left Join
        (select count(*) c,media_dept_id from images group by media_dept_id) quer
        ON quer.media_dept_id=media_dept.id) a');
        $this->db->limit($limit,$id);
        $this->db->order_by("id","desc");
        $query = $this->db->get();
        return $query->result();
    }
//
//    public function get_img_gallery2()
//    {
//        $this->db->select('* from(select * from media_dept Left Join
//        (select count(*) c,media_dept_id from images group by media_dept_id) quer
//        ON quer.media_dept_id=media_dept.id) a');
//        $query = $this->db->get();
//        return $query->result();
//    }

    public function get_img_by_category_id()
    {
        $id=$this->uri->segment(2);
        $this->db->select('*');
        $this->db->from('images');
        $this->db->where('media_dept_id', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_gallery_name()
    {
        $id=$this->uri->segment(2);
        $this->db->select('title , img , description , view_count');
        $this->db->from('media_dept');
        $this->db->where('id', $id);
        $query = $this->db->get();
        $img_view = $query->row();
        if ($img_view != null) {
            $data = array('view_count' => $img_view->view_count + 1);
            $this->db->where('id', $id);
            $this->db->update('media_dept', $data);
        }
        return $img_view;
    }



}