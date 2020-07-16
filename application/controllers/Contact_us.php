<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_us extends CI_Controller {

    public function __construct() {
        parent:: __construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->helper("thumb_helper");
        $this->load->model('NewsModel');
        $this->load->model('BreakNewsModel');
        $this->load->model('CategoryModel');
        $this->load->model('CurrencyModel');

    }

    public function index()
    {
//        get  category
        $category= $this->CategoryModel->get_category(20,0);
        $data ['Categorysearch'] = $category;

        //        get news ticker
        $news_ticker = $this->NewsModel->get_news_ticker();
        $data ['News_ticker']=$news_ticker;


//        get break news
        $break_news= $this->BreakNewsModel->get_breaknews();
        $data ['BreakNews']=$break_news;

        //        get currency
        $currency= $this->CurrencyModel->get_currency();
        $data ['Currency']=$currency;


//        get categories
        $categories= $this->CategoryModel->get_category(8,0);
        $data ['Categories']=$categories;

        $data['title'] = "اتصل بنا";
        $data['Description'] =" ";
        $data['image'] =" ";


        $this->load->view('partials/header',$data);
        $this->load->view('pages/contact_us',$data);
        $this->load->view('partials/footer',$data);

    }
}
