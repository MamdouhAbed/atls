<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Infographic extends CI_Controller {


    public function __construct() {
        parent:: __construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->helper("thumb_helper");
        $this->load->model('NewsModel');
        $this->load->model('BreakNewsModel');
        $this->load->model('CurrencyModel');
        $this->load->model('InfographicModel');
        $this->load->library('pagination');

    }

    public function index()
    {

        $count = $this->db->count_all_results('infographic');
        $total_rows = 18;
        $config= Array();
        if ( $count > $total_rows ) {
            $config['base_url'] = base_url() . 'infographic/page';
            $config['per_page'] = 1;
            $config['full_tag_open'] = '<ul class="pagination pagination_primary">';
            $config['full_tag_close'] = '</ul>';
            $config['first_link'] = true;
            $config['last_link'] = true;
            $config['first_link'] = 'الأولى';
            $config['last_link'] = 'الأخيرة';
            $config['first_tag_open'] = '<li>';
            $config['first_tag_close'] = '</li>';
            $config['prev_link'] = 'السابق';
            $config['prev_tag_open'] = '<li class="prev">';
            $config['prev_tag_close'] = '</li>';
            $config['next_link'] = 'التالي';
            $config['next_tag_open'] = '<li>';
            $config['next_tag_close'] = '</li>';
            $config['last_tag_open'] = '<li>';
            $config['last_tag_close'] = '</li>';
            $config['cur_tag_open'] = '<li class="active"><a href="#">';
            $config['cur_tag_close'] = '</a></li>';
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
            $config['total_rows'] = $count / 18;
            $config['uri_segment'] = 3;

        }

        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3)*18 : 0;
        $data['Infographic'] = $this->InfographicModel->get_infographic(18,$data['page']);


//        get  category
        $category= $this->CategoryModel->get_category(20,0);
        $data ['Categorysearch'] = $category;

    //        get currency
        $currency= $this->CurrencyModel->get_currency();
        $data ['Currency']=$currency;

//        get last news
        $last_news = $this->NewsModel->get_last_news();
        $data ['Last_News']=$last_news;

        //        get news ticker
        $news_ticker = $this->NewsModel->get_news_ticker();
        $data ['News_ticker']=$news_ticker;


//        get break news
        $break_news= $this->BreakNewsModel->get_breaknews();
        $data ['BreakNews']=$break_news;


        $data['title'] = "أطلس للدراسات  || إنفوجرافيك ";
        $data['Description'] = "أطلس للدراسات  ";
        $data['image'] =" " ;



        $this->load->view('partials/header',$data);
        $this->load->view('pages/infographic' , $data);
        $this->load->view('partials/footer' , $data);


    }



}
