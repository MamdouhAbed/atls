<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_us extends CI_Controller {


    public function __construct() {
        parent:: __construct();
        $this->load->helper(array('form', 'url'));
        $this->load->helper("thumb_helper");
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('NewsModel');
        $this->load->model('BreakNewsModel');
        $this->load->model('CategoryModel');
        $this->load->model('CategoryModel');
        $this->load->model('DeptNewsModel');
        $this->load->model('CurrencyModel');
        $this->load->model('AboutUsModel');

    }

    public function index()
    {
//        get  category
        $category= $this->DeptNewsModel->get_subDept();
        $data ['Categorysearch'] = $category;

//        get news ticker
        $news_ticker = $this->NewsModel->get_news_ticker();
        $data ['News_ticker']=$news_ticker;

//        get break news
        $break_news= $this->BreakNewsModel->get_breaknews();
        $data ['BreakNews']=$break_news;

//        get categories
        $categories= $this->CategoryModel->get_category(8,0);
        $data ['Categories']=$categories;

        //        get currency
        $currency= $this->CurrencyModel->get_currency();
        $data ['Currency']=$currency;

//        get categories
        $tags= $this->NewsModel->get_tags();
        $data ['TAGS']=$tags;

        $aboutus= $this->AboutUsModel->get_Details();
        $data ['AboutUS']=$aboutus;

        $data['title'] = "من نحن";
        $data['Description'] ="أطلس للدراسات";
        $data['image'] =" ";


        $this->load->view('partials/header',$data);
        $this->load->view('pages/about_us', $data);
        $this->load->view('partials/footer', $data);

    }

    public function aboutUs()
    {
        if ($this->session->userdata('user_id')) {
            $data['title'] = "من نحن";
            $about = $this->AboutUsModel->get_Details();
            $data ['About'] = $about;
            $this->load->view('admin/partial/header',$data);
            $this->load->view('admin/partial/aside-menu');
            $this->load->view('admin/pages/aboutUs');
            $this->load->view('admin/partial/footer');
        }else{
            redirect('admin/login');
        }
    }
    public function updateDetails(){
        if ($this->session->userdata('user_id')) {
            $this->load->helper(array('form','url'));
            $this->load->database();
            $this->load->library('form_validation');
            date_default_timezone_set('Asia/Gaza');
            $about=array(
                'about_txt'=>$this->input->post('txt'));
            $this->AboutUsModel->updateDetails($about);
            redirect('admin/aboutUs');
        }else{
            redirect('admin/login');
        }
    }

}
