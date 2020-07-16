<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Currency extends CI_Controller {
    public function __construct() {
        parent:: __construct();
        $this->load->library('session');
    }


    public function add_currency()
    {
        if ($this->session->userdata('user_id')) {
        $data['title'] = "إضافة أسعار العملات";
        $this->load->helper('url');
        $this->load->view('admin/partial/header',$data);
        $this->load->view('admin/partial/aside-menu');
        $this->load->view('admin/pages/addCurrency');
        $this->load->view('admin/partial/footer');
    }else{
    redirect('admin/login');
}
    }

    public function saveCurrency(){
        if ($this->session->userdata('user_id')) {
        $this->load->helper(array('form','url'));
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('CurrencyModel');
        $u_rec_id = $this->session->userdata('user_id');

        $currency=array(
            'dollar'=>$this->input->post('dollar'),
            'dinar'=>$this->input->post('dinar'),
            'euro'=>$this->input->post('euro'),
            'pound'=>$this->input->post('pound'),
            'user_id'=>$u_rec_id,
            );

        $this->CurrencyModel->addcurrency($currency);
        redirect('admin/addCurrency');
}else{
    redirect('admin/login');
}
    }


}
