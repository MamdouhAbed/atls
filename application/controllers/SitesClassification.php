<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SitesClassification extends CI_Controller {
    public function __construct() {
        parent:: __construct();
        $this->load->library('session');

    }


    public function add_siteDept()
    {
        if ($this->session->userdata('user_id')) {
            $data['title'] = "إضافة قسم مواقع نتابعها";
            $this->load->helper(array('form','url'));
            $this->load->database();
            $this->load->library('form_validation');
            $this->load->model('DeptSitesModel');
            $sitedept = $this->DeptSitesModel->get_siteDept();
            $data ['SiteDept'] = $sitedept;
            $this->load->view('admin/partial/header',$data);
            $this->load->view('admin/partial/aside-menu');
            $this->load->view('admin/pages/addSiteDept');
            $this->load->view('admin/partial/footer');
        }else{
            redirect('admin/login');
        }
    }
    public function saveSiteDept(){
        if ($this->session->userdata('user_id')) {
            $this->load->helper(array('form','url'));
            $this->load->database();
            $this->load->library('form_validation');
            $this->load->model('DeptSitesModel');

            $sitedept=array('category_name'=>$this->input->post('sitedept'));
            $this->DeptSitesModel->addSiteDept($sitedept);
            redirect('admin/addSiteDept');
        }else{
            redirect('admin/login');
        }
    }

    public function deleteSiteDept() {
        if ($this->session->userdata('user_id')) {
            $this->load->helper(array('form','url'));
            $this->load->database();
            $this->load->library('form_validation');
            $this->load->model('DeptSitesModel');
            $id = $this->input->post('deptID');

            $this->DeptSitesModel->delSiteDept($id);
        }else{
            redirect('admin/login');
        }

    }

    public function updateSiteDept()
    {
        if ($this->session->userdata('user_id')) {
            $this->load->helper(array('form','url'));
            $this->load->database();
            $this->load->library('form_validation');
            $this->load->model('DeptSitesModel');
            $id = $this->input->post('deptID');
            $textbox = $this->input->post('textbox');
            //$data1['data'] = $data;

            $this->DeptSitesModel->updtSiteDept($id,$textbox);
        }else{
            redirect('admin/login');
        }

    }
}
