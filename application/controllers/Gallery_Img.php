<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery_Img extends CI_Controller {


    public function __construct() {
        parent:: __construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->helper("thumb_helper");
        $this->load->model('GalleryImgModel');
        $this->load->model('CurrencyModel');
        $this->load->model('NewsModel');



    }

    public function index()
    {
//    new function
//        get  category
        $category= $this->CategoryModel->get_category(20,0);
        $data ['Categorysearch'] = $category;

    //        get currency
        $currency= $this->CurrencyModel->get_currency();
        $data ['Currency']=$currency;

        //        get img
        $img_gallery= $this->GalleryImgModel->get_img_by_category_id();
        $data ['Img_Gallery']=$img_gallery;

//        get gallery name
        $gallery_name= $this->GalleryImgModel->get_gallery_name();
        $data ['Gallery_Name']=$gallery_name;

        //        get Last_subject
        $last_subject= $this->NewsModel->get_news_last_subject();
        $data ['Last_subject']=$last_subject;

        //        get news ticker
        $news_ticker = $this->NewsModel->get_news_ticker();
        $data ['News_ticker']=$news_ticker;


           if(count($img_gallery)>0){
        $data['title'] = "أطلس للدراسات - " .$gallery_name->title;
        $data['Description'] = $gallery_name->description;
        $data['image'] = base_url().$gallery_name->img;
    }else{
            $data['title'] = "الصفحة غير موجودة";
            $data['Description'] = "";
            $data['image'] =" ";
        }



        $this->load->view('partials/header',$data);
        if(count($img_gallery)>0){
        $this->load->view('pages/gallery_img', $data);
        }else{
            $this->load->view('pages/err404');
        }
        $this->load->view('partials/footer');

    }
}
