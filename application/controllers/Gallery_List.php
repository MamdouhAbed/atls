<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery_List extends CI_Controller {


    public function __construct() {
        parent:: __construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->helper("thumb_helper");
        $this->load->model('NewsModel');
        $this->load->model('BreakNewsModel');
        $this->load->model('GalleryImgModel');
        $this->load->model('CategoryModel');
        $this->load->model('CurrencyModel');
        $this->load->library('pagination');


    }

    public function index()
    {

        $count = $this->db->count_all_results('media_dept');
        $total_rows = 18;
        $config= Array();
        if ( $count > $total_rows ) {
            $config['base_url'] = base_url() . 'gallery_list/page';
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
            $config['cur_tag_open'] = '<li class="active"><a href="#">';
            $config['cur_tag_close'] = '</a></li>';
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
            $config['total_rows'] = $count / 18;

//        $config['use_page_numbers'] = true;
//        $config['page_query_string'] = TRUE;
//        $config['num_links'] = 10;
            $config['uri_segment'] = 3;
            // $choice = $config['total_rows']/$config['per_page'];
            // $config['num_links'] = round($choice);
        }

        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3)*18 : 0;
        $data['Gallery'] = $this->GalleryImgModel->get_img_gallery(18,$data['page']);

//        get  category
        $category= $this->CategoryModel->get_category(20,0);
        $data ['Categorysearch'] = $category;

        //        get Last_subject
        $last_subject= $this->NewsModel->get_news_last_subject();
        $data ['Last_subject']=$last_subject;

    //        get currency
        $currency= $this->CurrencyModel->get_currency();
        $data ['Currency']=$currency;

        //        get news ticker
        $news_ticker = $this->NewsModel->get_news_ticker();
        $data ['News_ticker']=$news_ticker;

        //        get news ticker
        $news_ticker = $this->NewsModel->get_news_ticker();
        $data ['News_ticker']=$news_ticker;


//        get break news
        $break_news= $this->BreakNewsModel->get_breaknews();
        $data ['BreakNews']=$break_news;


        $data['title'] = "أطلس للدراسات - معارض الصور";
        $data['Description'] = " ";
        $data['image'] =" ";


        $this->load->view('partials/header',$data);
        $this->load->view('pages/gallery_list', $data);
        $this->load->view('partials/footer', $data);

    }


    public function getImages()
    {
        $arrs=$this->GalleryImgModel->get_img_gallery2();

        foreach ($arrs as $arr){
            echo $arr->c.'<br>';
        }
    }

}
