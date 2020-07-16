<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NewsClassification extends CI_Controller {
    public function __construct() {
        parent:: __construct();
        $this->load->library('session');

    }


    public function add_subDept()
    {
        if ($this->session->userdata('user_id')) {
        $data['title'] = "إضافة قسم أخبار فرعي";
        $this->load->helper(array('form','url'));
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('deptNewsModel');
        $subdept = $this->deptNewsModel->get_subDept();
        $data ['SubDept'] = $subdept;
//        $maindept = $this->DeptNewsModel->get_mainDept();
//        $data ['MainDept'] = $maindept;
        $this->load->view('admin/partial/header',$data);
        $this->load->view('admin/partial/aside-menu');
        $this->load->view('admin/pages/addSubDept');
        $this->load->view('admin/partial/footer');
    }else{
    redirect('admin/login');
}
    }
    public function saveSubDept(){
    if ($this->session->userdata('user_id')) {
        $this->load->helper(array('form','url'));
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('deptNewsModel');

        $subnews=array('cat_name'=>$this->input->post('subnews'),
//            'main_category_id'=>$this->input->post('category'),
//            'color'=>$this->input->post('colordept'),
            'activat_id'=>1);
        $this->deptNewsModel->addSubDept($subnews);
        redirect('admin/addSubDept');
}else{
    redirect('admin/login');
}
    }

    public function deleteSubDept() {
    if ($this->session->userdata('user_id')) {
        $this->load->helper(array('form','url'));
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('deptNewsModel');
        $id = $this->input->post('deptID');

        $this->deptNewsModel->delSubDept($id);
}else{
    redirect('admin/login');
}

    }

    public function updateSubDept()
    {
        if ($this->session->userdata('user_id')) {
        $this->load->helper(array('form','url'));
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('deptNewsModel');
        $id = $this->input->post('deptID');
        $textbox = $this->input->post('textbox');
        //$data1['data'] = $data;

        $this->deptNewsModel->updtSubDept($id,$textbox);
}else{
    redirect('admin/login');
}

    }
}
