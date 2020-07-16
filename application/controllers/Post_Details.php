<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_Details extends CI_Controller {

    public function __construct() {
        parent:: __construct();
        $this->load->helper('url');
        $id=$this->uri->segment(2);
        $this->load->helper("thumb_helper");
        $this->load->model('NewsModel');
        $this->load->model('CurrencyModel');
        $this->load->model('BreakNewsModel');
        $this->load->model('CategoryModel');
        $this->load->model('AdvertModel');
    }

    public function index()
    {
//        get  category
        $category= $this->CategoryModel->get_category(20,0);
        $data ['Categorysearch'] = $category;

//        get news where id
        $post = $this->NewsModel->get_post_details();
        $data ['Post']=$post;

        //        get pen
        $pen= $this->NewsModel->get_news_where_cat_pen();
        $data ['Pen']=$pen;

 //        get news img
        $post_img = $this->NewsModel->get_post_img();
        $data ['Post_img']=$post_img;

//        get news video
        $post_video = $this->NewsModel->get_post_video();
        $data ['Post_video']=$post_video;

  //        get currency
        $currency= $this->CurrencyModel->get_currency();
        $data ['Currency']=$currency;

        //        get banner 3
        $banner3= $this->AdvertModel->get_Banner_place3();
        $data ['Banner_place3']=$banner3;



////////////////////////////////////////////////////////////////////////////


 //        get news tags
        $tags = $this->NewsModel->get_news_tags();
        $data ['Tags']=$tags;

        $authors = $this->NewsModel->get_news_authors();
        $data ['Authors']=$authors;

//        get last news
        $last_news = $this->NewsModel->get_last_news();
        $data ['Last_News']=$last_news;

        //        get news ticker
        $news_ticker = $this->NewsModel->get_news_ticker();
        $data ['News_ticker']=$news_ticker;



//        get category
        $this->load->model('CategoryModel');
        if($post != null) {
            $data ['Category'] = $this->CategoryModel->get_categoryById($post->category_id);

//        get view_count news
            $most_read = $this->NewsModel->get_news_where_count($post->category_id);
            $data ['MostRead'] = $most_read;

        $read_more = $this->NewsModel->get_news_read_more($post->category_id);
            $data ['ReadMore'] = $read_more;
 }

        //        get Last_subject
        $last_subject= $this->NewsModel->get_news_last_subject();
        $data ['Last_subject']=$last_subject;




//        get break news
        $break_news= $this->BreakNewsModel->get_breaknews();
        $data ['BreakNews']=$break_news;


        if($post != null) {
            $data['title'] = $post->title;
            $data['Description'] = $post->post_brief;
            $data['image'] = base_url() . $post->img;

        }else{
            $data['title'] = " الصفحة غير موجودة ";
            $data['Description'] = '';
            $data['image'] =" ";
        }


        $this->load->view('partials/header' , $data);
        if($post!=null)
        $this->load->view('pages/post_details', $data);
        else
            $this->load->view('pages/err404');

        $this->load->view('partials/footer' , $data);

    }

}
