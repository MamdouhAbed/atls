<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Follow_Sites extends CI_Controller {


    public function __construct() {
        parent:: __construct();
        $this->load->helper(array('form', 'url'));
        $this->load->helper("thumb_helper");
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('NewsModel');
        $this->load->model('BreakNewsModel');
        $this->load->model('CategoryModel');
        $this->load->model('CurrencyModel');
        $this->load->model('FollowSitesModel');
        $this->load->helper('helper1');


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

//        get categories
        $categories= $this->CategoryModel->get_category(8,0);
        $data ['Categories']=$categories;

        //        get currency
        $currency= $this->CurrencyModel->get_currency();
        $data ['Currency']=$currency;

//        get categories
        $tags= $this->NewsModel->get_tags();
        $data ['TAGS']=$tags;

        $followsites= $this->FollowSitesModel->get_followsites();
        $data ['FollowSites']=$followsites;



        $newssites= $this->FollowSitesModel->get_followsitespage(1);
        $data ['NewsSites']=$newssites;
        $papersites= $this->FollowSitesModel->get_followsitespage(2);
        $data ['PaperSites']=$papersites;
        $radiosites= $this->FollowSitesModel->get_followsitespage(3);
        $data ['RadioSites']=$radiosites;
        $tvsites= $this->FollowSitesModel->get_followsitespage(4);
        $data ['TvSites']=$tvsites;
        $officialsites= $this->FollowSitesModel->get_followsitespage(6);
        $data ['OfficialSites']=$officialsites;
        $researchsites= $this->FollowSitesModel->get_followsitespage(7);
        $data ['ResearchSites']=$researchsites;

        $data['title'] = "مواقع نتابعها";
        $data['Description'] ="أطلس للدراسات";
        $data['image'] =" ";


        $this->load->view('partials/header',$data);
        $this->load->view('pages/follow_sites', $data);
        $this->load->view('partials/footer', $data);

    }

    public function followsites_table()
    {
        if ($this->session->userdata('user_id')) {
            $data['title'] = "قائمة المواقع";
            $followsites = $this->FollowSitesModel->get_followsites();
            $data ['FollowSites'] = $followsites;
            $this->load->helper(array('form','url'));
            $this->load->database();
            $this->load->library('form_validation');
            $this->load->view('admin/partial/header',$data);
            $this->load->view('admin/partial/aside-menu');
            $this->load->view('admin/pages/dtableFollowSites');
            $this->load->view('admin/partial/footer');
        }else{
            redirect('admin/login');
        }

    }



    public function add_followsites()
    {
        if ($this->session->userdata('user_id')) {
            $data['title'] = "إضافة موقع";
            $this->load->helper(array('form', 'url'));
            $this->load->database();
            $this->load->model('DeptSitesModel');
            $this->load->library('form_validation');

            $sitedept = $this->DeptSitesModel->get_siteDept();
            $data ['SiteDept'] = $sitedept;
            $this->load->view('admin/partial/header', $data);
            $this->load->view('admin/partial/aside-menu');
            $this->load->view('admin/pages/addFollowSites');
            $this->load->view('admin/partial/footer');
        }else{
            redirect('admin/login');
        }
    }



    public function saveFollowSites()
    {
        if ($this->session->userdata('user_id')) {
            $this->load->helper(array('form', 'url'));
            $this->load->database();
            $this->load->library('form_validation');
            $path=path_img('imgFollowSites');
            date_default_timezone_set('Asia/Gaza');
            $date = date('Y-m-d H:i:s');
            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|png|jpeg|';
//            $config['max_size'] = '50000';
            $config['overwrite'] = TRUE;
            $this->load->library('upload', $config);
            $this->load->library('session');
                $siteshome = $this->input->post('siteshome');
                if ($siteshome == null)
                    $siteshome = 2;
                if (isset($_FILES['site_img']) && !empty($_FILES['site_img']['name'])) {

                    if (!$this->upload->do_upload('site_img')) {
                    } else {

                        $uploadedFileData = $this->upload->data();
                        $randomName = md5(time()) . $uploadedFileData['file_ext'];
                        //rename uploaded image to our new image name
                        rename($uploadedFileData['full_path'], $uploadedFileData['file_path'] . $randomName);

                        $uploadedFileData["file_name"] = $path . $randomName;
//                            $uploadedFileData["file_name"] = $_FILES['imghome']['name'];
                        $followsites = array('title' => $this->input->post('site_name'),
                            'link' => $this->input->post('site_link'),
                            'img' => $path . $randomName,
                            'category_id' => $this->input->post('category'),
                            'show_home_id' => $siteshome,
                            'created_at' => $date);
                        $this->FollowSitesModel->addFollowSites($followsites);

                        redirect('admin/addFollowSites');
                    }
                }
            } else {
                redirect('admin/login');
            }


        }


        public
        function updateFollowSites()
        {
            if ($this->session->userdata('user_id')) {
                $data['title'] = "تعديل موقع";
                $this->load->helper(array('form', 'url'));
                $this->load->database();
                $this->load->model('DeptSitesModel');
                $this->load->library('form_validation');
                $id = $this->uri->segment(3);
                $sitedept = $this->DeptSitesModel->get_siteDept();
                $data ['SiteDept'] = $sitedept;
                $followsites = $this->FollowSitesModel->get_followsites_id($id)[0];
                $data ['followsites'] = $followsites;
                $this->load->view('admin/partial/header', $data);
                $this->load->view('admin/partial/aside-menu');
                $this->load->view('admin/pages/updateFollowSites');
                $this->load->view('admin/partial/footer');
            } else {
                redirect('admin/login');
            }

        }

        public
        function saveUpdateFollowSites()
        {

            if ($this->session->userdata('user_id')) {
                $this->load->helper(array('form', 'url'));
                $this->load->database();
                $this->load->library('form_validation');
                $path = path_img('imgFollowSites');
                date_default_timezone_set('Asia/Gaza');
                $date = date('Y-m-d H:i:s');
                $config['upload_path'] = $path;
                $config['allowed_types'] = 'jpg|png|jpeg|';
//            $config['max_size'] = '50000';
                $config['overwrite'] = TRUE;
                $this->load->library('upload', $config);
                $siteshome = $this->input->post('siteshome');
                if ($siteshome == null)
                    $siteshome = 2;
                $id = $this->uri->segment(3);
                $followsites = array('title' => $this->input->post('site_name'),
                    'link' => $this->input->post('site_link'),
                    'category_id' => $this->input->post('category'),
                    'show_home_id' => $siteshome,
                    'updated_at' => $date);
                if (isset($_FILES['site_img']) && !empty($_FILES['site_img']['name'])) {

                    if (!$this->upload->do_upload('site_img')) {
                    } else {

                        $uploadedFileData = $this->upload->data();
                        $randomName = md5(time()) . $uploadedFileData['file_ext'];
                        rename($uploadedFileData['full_path'], $uploadedFileData['file_path'] . $randomName);
                        $uploadedFileData["file_name"] = $randomName;
                        $followsites['img'] = $path . $randomName;
                    }
                }
                $this->FollowSitesModel->updateFollowSites($id, $followsites);

                redirect('admin/dtableFollowSites');

            } else {
                redirect('admin/login');
            }
        }

        public
        function deleteFollowSites()
        {
            if ($this->session->userdata('user_id')) {
                $this->load->helper(array('form', 'url'));
                $this->load->database();
                $this->load->library('form_validation');
                $id = $this->input->post('deptID');

                $this->FollowSitesModel->delFollowSites($id);
            } else {
                redirect('admin/login');
            }

        }

}
