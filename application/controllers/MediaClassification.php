<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MediaClassification extends CI_Controller
{
    public function __construct() {
        parent:: __construct();
        $this->load->library('session');

    }

    public function add_mediaDept()
    {
        if ($this->session->userdata('user_id')) {
        $data['title'] = "إضافة قسم وسائط";
        $this->load->helper(array('form','url'));
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('mediaModel');
        $media = $this->mediaModel->get_catMedia();
        $data ['Media'] = $media;
        $this->load->view('admin/partial/header',$data);
        $this->load->view('admin/partial/aside-menu');
        $this->load->view('admin/pages/addMediaDept');
        $this->load->view('admin/partial/footer');
    }else{
redirect('admin/login');
}

    }
    public function add_submediaDept()
    {
        if ($this->session->userdata('user_id')) {
        $data['title'] = "إضافة قسم وسائط فرعي";
        $this->load->helper(array('form','url'));
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('mediaModel');
        $submedia = $this->mediaModel->get_catSubMedia();
        $data ['SubMedia'] = $submedia;
        $media = $this->mediaModel->get_catMedia();
        $data ['Media'] = $media;
        $this->load->view('admin/partial/header',$data);
        $this->load->view('admin/partial/aside-menu');
        $this->load->view('admin/pages/addSubMediaDept');
        $this->load->view('admin/partial/footer');
    }else{
    redirect('admin/login');
}

    }

    public function saveMediaDept(){
    if ($this->session->userdata('user_id')) {
        $this->load->helper(array('form','url'));
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('mediaModel');

        $mainmedia=array('name'=>$this->input->post('medianame'));
        $this->mediaModel->addMediaDept($mainmedia);
        redirect('admin/addMediaDept');
}else{
    redirect('admin/login');
}
    }
    public function saveSubMediaDept(){
    if ($this->session->userdata('user_id')) {
        $this->load->helper(array('form','url'));
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('mediaModel');

        $submedia=array('name'=>$this->input->post('submedianame'),
            'activat_id'=>1,
            'main_media_id'=>$this->input->post('category'));
        $this->mediaModel->addSubMediaDept($submedia);
        redirect('admin/addSubMediaDept');
}else{
    redirect('admin/login');
}
    }

    public function deleteMediaDept() {
    if ($this->session->userdata('user_id')) {
        $this->load->helper(array('form','url'));
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('mediaModel');
        $id = $this->input->post('deptID');

        $this->mediaModel->delMediaDept($id);
}else{
    redirect('admin/login');
}

    }
    public function deleteSubMediaDept() {
    if ($this->session->userdata('user_id')) {
        $this->load->helper(array('form','url'));
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('mediaModel');
        $id = $this->input->post('deptID');

        $this->mediaModel->delSubMediaDept($id);
}else{
    redirect('admin/login');
}

    }

    public function updateMediaDept()
    {
        if ($this->session->userdata('user_id')) {
//        var_dump($this->input->post());
        $this->load->helper(array('form','url'));
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('mediaModel');
       $id = $this->input->post('deptID');
        $textbox = $this->input->post('textbox');
        //$data1['data'] = $data;

         $this->mediaModel->updtMediaDept($id,$textbox);
}else{
    redirect('admin/login');
}
    }
    public function updateSubMediaDept()
    {
        if ($this->session->userdata('user_id')) {
        $this->load->helper(array('form','url'));
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('mediaModel');
        $id = $this->input->post('deptID');
        $textbox = $this->input->post('textbox');
        $this->mediaModel->updtSubMediaDept($id,$textbox);
    }else{
    redirect('admin/login');
}
    }


}