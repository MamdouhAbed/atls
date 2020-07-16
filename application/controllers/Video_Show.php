<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video_Show extends CI_Controller {

    public function __construct() {
        parent:: __construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('NewsModel');
        $this->load->model('BreakNewsModel');
        $this->load->model('VideoModel');
        $this->load->model('CurrencyModel');
        $this->load->model('CategoryModel');
        $this->load->helper("thumb_helper");

    }

    public function index()
    {
//        get  category
        $category= $this->CategoryModel->get_category(20,0);
        $data ['Categorysearch'] = $category;

//        get last news
        $last_news = $this->NewsModel->get_last_news();
        $data ['Last_News']=$last_news;


//        get break news
        $break_news= $this->BreakNewsModel->get_breaknews();
        $data ['BreakNews']=$break_news;


//        get news ticker
        $news_ticker = $this->NewsModel->get_news_ticker();
        $data ['News_ticker']=$news_ticker;

  //        get currency
        $currency= $this->CurrencyModel->get_currency();
        $data ['Currency']=$currency;


//        get video
        $video= $this->VideoModel->get_video_details();
        $data ['Video']=$video;

        if ($video != null) {
//        get more video
            $more_video = $this->VideoModel->get_more_video();
            $data ['More_Video'] = $more_video;
        }

        //        get Last_subject
        $last_subject= $this->NewsModel->get_news_last_subject();
        $data ['Last_subject']=$last_subject;


//       get video count
        $count_video= $this->VideoModel->get_video_where_count();
        $data ['Count_Video']=$count_video;


        if ($video != null) {
            $data['title'] = $video->title;
            $data['Description'] = $video->title;
            $data['image'] = "https://img.youtube.com/vi/" . $video->video . "/hqdefault.jpg";
        }else{
            $data['title'] = "الصفحة غير موجودة";
            $data['Description'] = "";
            $data['image'] = "";
        }


        $this->load->view('partials/header' , $data);
        if ($video != null) {
            $this->load->view('pages/video_show', $data);
        }else{
            $this->load->view('pages/err404');
        }
        $this->load->view('partials/footer' , $data);


    }
}
