<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent:: __construct();

        $this->load->helper('url');
        $this->load->helper("thumb_helper");
        $this->load->database();
        $this->load->model('NewsModel');
        $this->load->model('InfographicModel');
        $this->load->model('BreakNewsModel');
        $this->load->model('CategoryModel');
        $this->load->model('GalleryImgModel');
        $this->load->model('VideoModel');
        $this->load->model('CaricatureModel');
       $this->load->model('CurrencyModel');
       $this->load->model('SettingsModel');
        $this->load->model('AdvertModel');
        $this->load->model('BooksModel');
        $this->load->model('QuotationsModel');
        $this->load->model('FollowSitesModel');

    }


    public function index()
    {

        //        get website settings
        $website_settings= $this->SettingsModel->get_settings();
        $data ['Website_settings']=$website_settings[0];

        if($website_settings[0]->value!=2) {
            $arr=$this->NewsModel->get_slider_news_id(5);

            $arrvalue=Array(0);
            foreach($arr as $obj){
                array_push($arrvalue,$obj->id);
            }
        }else{
            $arr=$this->NewsModel->get_slider_news_id(2);

            $arrvalue=Array(0);
            foreach($arr as $obj){
                array_push($arrvalue,$obj->id);
            }
        }

//        new_function

        $seminars= $this->NewsModel->get_news_where_cat_seminars();
        $data ['Seminars'] = $seminars;

        $post_img = $this->NewsModel->get_post_img_seminars();
        $data ['Post_img']=$post_img;
        $post_video = $this->NewsModel->get_post_video_seminars();
        $data ['Post_video']=$post_video;
        //        get banner 1
        $banner1= $this->AdvertModel->get_Banner_place1();
        $data ['Banner_place1']=$banner1;

        //        get banner 2
        $banner2= $this->AdvertModel->get_Banner_place2();
        $data ['Banner_place2']=$banner2;
        //        get banner 2
        $banner3= $this->AdvertModel->get_Banner_place3();
        $data ['Banner_place3']=$banner3;

        //        get special
        $special= $this->NewsModel->get_news_where_cat_special();
        $data ['Special']=$special;

        //        get currency
        $currency= $this->CurrencyModel->get_currency();
        $data ['Currency']=$currency;

        //        get pen
        $pen= $this->NewsModel->get_news_where_cat_pen();
        $data ['Pen']=$pen;

        //        get  infographic
        $infographic= $this->InfographicModel->get_infographic(6,0);
        $data ['Infographic'] = $infographic;

        //        get  caricature
        $caricature= $this->CaricatureModel->get_caricature(5,0);
        $data ['Caricature'] = $caricature;

        //        get  category
        $category= $this->CategoryModel->get_category(20,0);
        $data ['Categorysearch'] = $category;

        //        get Local
        $reports= $this->NewsModel->get_news_where_cat(1,$arrvalue);
        $data ['Reports']=$reports;
        //        get world
        $analytics= $this->NewsModel->get_news_where_cat(2,$arrvalue);
        $data ['Analytics']=$analytics;
        //        get sport
        $studies= $this->NewsModel->get_news_where_cat_studies($arrvalue);
        $data ['Studies']=$studies;

        //        get sport
        $articles= $this->NewsModel->get_news_where_cat(5,$arrvalue);
        $data ['Articles']=$articles;

        //        get sport most read
        $sport_read= $this->NewsModel->get_news_where_cat_most_read(3);
        $data ['Sport_read']=$sport_read;


        //        get health
        $opinians= $this->NewsModel->get_news_where_cat(6,$arrvalue);
        $data ['Opinians']=$opinians;

        //        get Health most read
        $health_read= $this->NewsModel->get_news_where_cat_most_read(4);
        $data ['Health_read']=$health_read;

        //        get  news category islamic
        $israeli_excerpt= $this->NewsModel->get_news_where_cat(7,$arrvalue);
        $data ['Israeli_Excerpt'] = $israeli_excerpt;

        //        get Islamic most read
        $islamic_read= $this->NewsModel->get_news_where_cat_most_read(5);
        $data ['Islamic_read']=$islamic_read;

        //        get  news category economy
        $quotations= $this->QuotationsModel->get_quotations();
        $data ['Quotations'] = $quotations;

        //        get Economy most read
        $economy_read= $this->NewsModel->get_news_where_cat_most_read(6);
        $data ['Economy_read']=$economy_read;


        //        get  news category prisoners
        $photo_news= $this->NewsModel->get_news_where_cat(9,$arrvalue);
        $data ['Photo_news'] = $photo_news;

        //        get Prisoners most read
        $prisoners_read= $this->NewsModel->get_news_where_cat_most_read(7);
        $data ['Prisoners_read']=$prisoners_read;

        //        get  news category Housewife
        $articles2= $this->NewsModel->get_news_where_cat(10,$arrvalue);
        $data ['Articles2'] = $articles2;

        //        get Prisoners most read
        $housewife_read= $this->NewsModel->get_news_where_cat_most_read(8);
        $data ['Housewife_read']=$housewife_read;

        //        get  news category Reports
        $news_atlas= $this->NewsModel->get_news_where_cat(11,$arrvalue);
        $data ['News_atlas'] = $news_atlas;

        //        get Art most read
        $technology_read= $this->NewsModel->get_news_where_cat_most_read(12);
        $data ['Technology_read']=$technology_read;

        //        get  news category art
        $hebrew= $this->NewsModel->get_news_where_cat(12,$arrvalue);
        $data ['Hebrew'] = $hebrew;

        //        get Art most read
        $art_read= $this->NewsModel->get_news_where_cat_most_read(10);
        $data ['Art_read']=$art_read;

        //        get  news category pens
        $israeli_political_system= $this->NewsModel->get_news_where_cat(13,$arrvalue);
        $data ['Israeli_Political_System'] = $israeli_political_system;

        //        get Art most read
        $Crime_read= $this->NewsModel->get_news_where_cat_most_read(15);
        $data ['Crime_read']=$Crime_read;


     //        get  news category interviews
        $studies_participants= $this->NewsModel->get_news_where_cat(20,$arrvalue);
        $data ['Studies_Participants'] = $studies_participants;

        //        get Art most read
        $Jokes_read= $this->NewsModel->get_news_where_cat_most_read(16);
        $data ['Jokes_read']=$Jokes_read;
        
        //        get  news category Newspaper
        $estimate_position_participants= $this->NewsModel->get_news_where_cat(22,$arrvalue);
        $data ['Estimate_Position_Participants'] = $estimate_position_participants;

        //        get Newspaper most read
        $Newspaper_read= $this->NewsModel->get_news_where_cat_most_read(17);
        $data ['Newspaper_read']=$Newspaper_read;


        //        get  news category Rased
        $articles_participants= $this->NewsModel->get_news_where_cat(23,$arrvalue);
        $data ['Articles_Participants'] = $articles_participants;

        $translated_books= $this->NewsModel->get_news_where_cat(24,$arrvalue);
        $data ['Translated_Books'] = $translated_books;


        //        get Rased most read
        $Rased_read= $this->NewsModel->get_news_where_cat_most_read(21);
        $data ['Rased_read']=$Rased_read;


        //        get  news category interviews
        $palcenter= $this->NewsModel->get_news_where_cat_center();
        $data ['Palcenter'] = $palcenter;


        //        get img gallery
        $gallery= $this->GalleryImgModel->get_img_gallery(5,0);
        $data ['Gallery']=$gallery;


//        get video
        $video= $this->VideoModel->get_video(5,0);
        $data ['Video']=$video;


        //        get video pal center
        $video_pal_center= $this->VideoModel->get_video_pal_center(1,0);
        $data ['Video_Pal_Center']=$video_pal_center;

        $books= $this->BooksModel->get_books(12,0);
        $data ['Books']=$books;

//        $authors = $this->BooksModel->get_book_authors();
//        $data ['Authors']=$authors;
//        psnews

        $arrvalue=Array(0);
        //        get TAGS
        $get_tags = $this->NewsModel->get_tags();
        $data ['GET_TAGS'] = $get_tags;




//        get slider news
        if($website_settings[0]->value!=2) {
            $slider_subject = $this->NewsModel->get_slider_news(5);
            $data ['Slider_subject'] = $slider_subject;

            $pin_home = $this->NewsModel->get_pin_home();
            $data ['Pin_home'] = $pin_home;



            //        get slider news
            $slider_subject_2 = $this->NewsModel->get_slider_news_2();
            $data ['Slider_subject_2'] = $slider_subject_2;


//            //        get slider news
//            $slider_subject = $this->NewsModel->get_slider_news_after5();
//            $data ['Slider_subject_after5'] = $slider_subject;



            $arr = $this->NewsModel->get_slider_news_id(5);


            foreach ($arr as $obj) {
                array_push($arrvalue, $obj->id);
            }
        }else{
            $slider_subject = $this->NewsModel->get_slider_news(5);
            $data ['Slider_subject'] = $slider_subject;


            $arr = $this->NewsModel->get_slider_news_id(2);


            foreach ($arr as $obj) {
                array_push($arrvalue, $obj->id);
            }
        }

        //       get more news
        $more_news = $this->NewsModel->more_news_limit12($arrvalue);
        $data ['More_News'] = $more_news;


//        get news ticker
        $news_ticker = $this->NewsModel->get_news_ticker();
        $data ['News_ticker']=$news_ticker;

        //        get_last_news_break
//       $get_last_news_break = $this->NewsModel->get_last_news_break();
//        $data ['last_news_break']=$get_last_news_break;

        //        get_last_news_ticker
        $get_last_news_ticker = $this->NewsModel->get_last_news_ticker();
        $data ['last_news_ticker']=$get_last_news_ticker;

//        get break news
        $break_news= $this->BreakNewsModel->get_breaknews();
        $data ['BreakNews']=$break_news;



        $followsiteshome= $this->FollowSitesModel->get_home_followsites();
        $data ['FollowSitesHome']=$followsiteshome;


        $data['title'] = "مركز أطلس للدراسات  || الصفحة الرئيسية";
        $data['Description'] = "مركز أطلس للدراسات ";
        $data['image'] =base_url()."assets/images/logo/logo.png" ;


        $this->load->view('partials/header',$data);
        $this->load->view('index' , $data);
        $this->load->view('partials/footer' , $data);

    }

    public function load_more_news()
    {
        $arr=$this->NewsModel->get_slider_news_id(5);

        $arrvalue=Array(0);
        foreach($arr as $obj){
            array_push($arrvalue,$obj->id);
        }
        $offset= $this->input->get('offset');
        $txt= $this->input->get('txt');
        $all_news= $this->NewsModel->get_all_news2($offset,$txt,$arrvalue);

        echo json_encode($all_news);
    }

    public function createThumb()
    {
        $img= $this->input->get('img');

        $img= base_url(thumb($img,285,210));

        echo json_encode($img);
    }

}









///////////////////////////////////////////////////////////////////////////////////


