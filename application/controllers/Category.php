<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

    public function __construct() {
        parent:: __construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->helper("thumb_helper");
        $this->load->model('NewsModel');
        $this->load->model('BreakNewsModel');
        $this->load->model('CategoryModel');
        $this->load->model('CurrencyModel');
        $this->load->library('pagination');



    }

    public function index()
    {
//        get  category
        $category= $this->CategoryModel->get_category(20,0);
        $data ['Categorysearch'] = $category;

        //        get news ticker
        $news_ticker = $this->NewsModel->get_news_ticker();
        $data ['News_ticker'] = $news_ticker;

        //        get currency
        $currency= $this->CurrencyModel->get_currency();
        $data ['Currency']=$currency;

//        get break news
        $break_news = $this->BreakNewsModel->get_breaknews();
        $data ['BreakNews'] = $break_news;

        //        get view_count news
        $most_read = $this->NewsModel->get_news_where_count($this->uri->segment(2));
        $data ['MostRead'] = $most_read;



        $category=$this->CategoryModel->get_categoryById($this->uri->segment(2));
        $data ['category']=$category;
        if($category!=null) {

            $count = $this->NewsModel->count_news_where_category()[0]->count;
            $total_rows = 12;
            $config = Array();
            if ($count > $total_rows) {
                $config['base_url'] = base_url() . 'category/' . $this->uri->segment(2) . '/page';
//            $config['first_url'] = '1';
                $config['per_page'] = 1;
                $config['full_tag_open'] = '<ul class="pagination modal-5">';
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
                $config['total_rows'] = $count / 12;
                $config['uri_segment'] = 4;

            }

            $this->pagination->initialize($config);
            $data['pagination'] = $this->pagination->create_links();
            $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) * 12 : 0;
            $data['Category'] = $this->NewsModel->get_news_where_category(12, $data['page']);


            //        get last news
            $last_news = $this->NewsModel->get_last_news();
            $data ['Last_News'] = $last_news;

            //        get Last_subject
            $last_subject= $this->NewsModel->get_news_last_subject();
            $data ['Last_subject']=$last_subject;



            $data['title'] = "أطلس للدراسات - " . $category->cat_name;
            $data['Description'] = " ";
            $data['image'] = " ";
        }else{
            $data['title'] = "الصفحة غير موجودة" ;
            $data['Description'] = " ";
            $data['image'] = " ";
        }


        $this->load->view('partials/header' , $data);
        if($category!=null)
        $this->load->view('pages/category' , $data);
        else
            $this->load->view('pages/err404' );
        $this->load->view('partials/footer' , $data);


    }
}
