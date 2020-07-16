<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quotations extends CI_Controller {
    public function __construct() {
        parent:: __construct();
        $this->load->library('session');
        $this->load->model('AuthorModel');
        $this->load->helper('helper1');
        $this->load->model('QuotationsModel');
    }


    public function quotations_table()
    {
        if ($this->session->userdata('user_id')) {
            $data['title'] = "قائمة الاقتباسات";
            $quotations = $this->QuotationsModel->get_quotations_panel();
            $data ['Quotations'] = $quotations;
            $this->load->helper(array('form','url'));
            $this->load->database();
            $this->load->library('form_validation');
            $this->load->view('admin/partial/header',$data);
            $this->load->view('admin/partial/aside-menu');
            $this->load->view('admin/pages/dtableQuotations');
            $this->load->view('admin/partial/footer');
        }else{
            redirect('admin/login');
        }

    }



    public function add_quotations()
    {
        if ($this->session->userdata('user_id')) {
            $data['title'] = "إضافة اقتباس";
            $this->load->helper(array('form', 'url'));
            $this->load->database();
            $this->load->library('form_validation');

            $authors = $this->AuthorModel->get_authors();
            $data ['Authors'] = $authors;
            $this->load->view('admin/partial/header', $data);
            $this->load->view('admin/partial/aside-menu');
            $this->load->view('admin/pages/addQuotations');
            $this->load->view('admin/partial/footer');
        }else{
            redirect('admin/login');
        }
    }



    public function saveQuotations(){
        if ($this->session->userdata('user_id')) {
            $this->load->helper(array('form', 'url'));
            $this->load->database();
            $this->load->library('form_validation');
            date_default_timezone_set('Asia/Gaza');
            $date=date('Y-m-d H:i:s') ;
            $config['overwrite'] = TRUE;
            $this->load->library('upload', $config);
                    $quotations = array('txt' => $this->input->post('txt'),
                        'author_id' => $this->input->post('author'),
                        'activat_id' => 1,
                        'created_at' => $date);
                    $this->QuotationsModel->addQuotations($quotations);

                    redirect('admin/addQuotations');
        }else{
            redirect('admin/login');
        }

    }


    public function updateQuotations()
    {
        if ($this->session->userdata('user_id')) {
            $data['title'] = "تعديل اقتباس";
            $this->load->helper(array('form','url'));
            $this->load->database();
            $this->load->library('form_validation');
            $id=$this->uri->segment(3);
            $authors = $this->AuthorModel->get_authors();
            $data ['Authors'] = $authors;
            $quotations = $this->QuotationsModel->get_quotations_id($id)[0];
            $data ['quotations'] = $quotations;
            $this->load->view('admin/partial/header',$data);
            $this->load->view('admin/partial/aside-menu');
            $this->load->view('admin/pages/updateQuotations');
            $this->load->view('admin/partial/footer');
        }else{
            redirect('admin/login');
        }

    }

    public function saveUpdateQuotations(){

        if ($this->session->userdata('user_id')) {
            $this->load->helper(array('form', 'url'));
            $this->load->database();
            $this->load->library('form_validation');
            date_default_timezone_set('Asia/Gaza');
            $date=date('Y-m-d H:i:s') ;
            $config['overwrite'] = TRUE;
            $this->load->library('upload', $config);
            $id = $this->uri->segment(3);
            $quotations = array('txt' => $this->input->post('txt'),
                'author_id' => $this->input->post('author'),
                'activat_id' => 1,
                'created_at' => $date);
            $this->QuotationsModel->updateQuotations($id,$quotations);

            redirect('admin/dtableQuotations');

        }
        else{
            redirect('admin/login');
        }
    }

    public function deleteQuotations() {
        if ($this->session->userdata('user_id')) {
            $this->load->helper(array('form','url'));
            $this->load->database();
            $this->load->library('form_validation');
            $id = $this->input->post('deptID');

            $this->QuotationsModel->delQuotations($id);
        }else{
            redirect('admin/login');
        }

    }



}
