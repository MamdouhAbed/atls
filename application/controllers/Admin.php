<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct() {
        parent:: __construct();
        $this->load->library('session');

    }

    public function index()
    {

        if ($this->session->userdata('user_id')) {
        $data['title'] = "الصفحة الرئيسية";
        $this->load->helper(array('form','url'));
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('news_Model');
        $news = $this->news_Model->get_news_limit_5();
        $data ['News'] = $news;
        $this->load->view('admin/partial/header',$data);
        $this->load->view('admin/partial/aside-menu');
        $this->load->view('admin/pages/index');
        $this->load->view('admin/partial/footer');
    }else{
redirect('admin/login');
}

    }

}
