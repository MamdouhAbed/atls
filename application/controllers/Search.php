<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {


    public function __construct() {
        parent:: __construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->helper("thumb_helper");
        $this->load->model('NewsModel');
        $this->load->model('BreakNewsModel');
        $this->load->model('CategoryModel');
        $this->load->model('DeptNewsModel');
        $this->load->model('CurrencyModel');
        $this->load->model('SearchModel');
        $this->load->library('pagination');


    }

    public function index()
    {

        $keyword =$this->input->get('keyword');
        $catsearch =$this->input->get('categoryOptions');
        $data['Keyword']    = $keyword;
        $count = $this->SearchModel->count_news($keyword);
        $total_rows = 20;
        $config= Array();
        if ( $count > $total_rows ) {
            $config['base_url'] = base_url() . 'search/page';
//            $config['first_url'] = '1';
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
            $config['cur_tag_open'] = '<li class="active"><a >';
            $config['cur_tag_close'] = '</a></li>';
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
            $config['total_rows'] = $count / 20;
            $config['uri_segment'] = 3;
            $config['use_page_numbers'] = TRUE;
            $config['reuse_query_string'] = TRUE;
            //$config['suffix'] = "?keyword=$keyword";

        }



        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $page_no=$this->uri->segment(3);
        $page_no=$page_no-1;
        $data['page'] = ($this->uri->segment(3)) ? $page_no*20 : 0;
        if ( !$catsearch ) {
            $data['Results'] = $this->SearchModel->searchall($keyword, 20, $data['page']);
        }else{
        $data['Results'] = $this->SearchModel->search($keyword,20,$data['page'],$catsearch);
        }

//        get  category
        $category= $this->DeptNewsModel->get_subDept();
        $data ['Categorysearch'] = $category;


        //        get Last_subject
        $last_subject= $this->NewsModel->get_news_last_subject();
        $data ['Last_subject']=$last_subject;

        //        get news ticker
        $news_ticker = $this->NewsModel->get_news_ticker();
        $data ['News_ticker']=$news_ticker;

 //        get currency
        $currency= $this->CurrencyModel->get_currency();
        $data ['Currency']=$currency;

//        get break news
        $break_news= $this->BreakNewsModel->get_breaknews();
        $data ['BreakNews']=$break_news;


        $data['title'] = "أطلس للدراسات - نتائج البحث";
        $data['Description'] = "";
        $data['image'] ="";

        $this->load->view('partials/header',$data);
        $this->load->view('pages/search_result', $data);
        $this->load->view('partials/footer', $data);

    }
}
