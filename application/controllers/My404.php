<?php
class My404 extends CI_Controller
{

    public function __construct() {
        parent:: __construct();
        $this->load->helper('url');
        $this->load->helper("thumb_helper");
        $this->load->database();
        $this->load->model('NewsModel');
        $this->load->model('CurrencyModel');
        $this->load->model('BreakNewsModel');
        $this->load->model('CategoryModel');

    }

    public function index()
    {
//        get  category
        $category= $this->CategoryModel->get_category(20,0);
        $data ['Categorysearch'] = $category;

    //        get currency
        $currency= $this->CurrencyModel->get_currency();
        $data ['Currency']=$currency;

        $news_ticker = $this->NewsModel->get_news_ticker();
        $data ['News_ticker']=$news_ticker;

        //        get Last_subject
        $last_subject= $this->NewsModel->get_news_last_subject();
        $data ['Last_subject']=$last_subject;

//        get break news
        $break_news= $this->BreakNewsModel->get_breaknews();
        $data ['BreakNews']=$break_news;



        $data['title'] = "الصفحة غير موجودة";
        $data['Description'] ="أطلس للدراسات";
        $data['image'] =" ";

        $this->load->view('partials/header',$data);
        $this->load->view('pages/err404', $data);
        $this->load->view('partials/footer', $data);

    }
}