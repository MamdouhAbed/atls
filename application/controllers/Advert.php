<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Advert extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->library('session');
        $this->load->helper('helper1');
        $this->load->helper(array('form', 'url'));
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('mediaModel');
        $this->load->model('AdvertModel');
        $this->load->helper("thumb_helper");

    }

//    advert
    public function add_advert()
    {
        if ($this->session->userdata('user_id')) {
            $data['title'] = "إضافة إعلان";
            $place_adv = $this->AdvertModel->get_place_adv();
            $data ['PlaceAdv'] = $place_adv;
            $this->load->view('admin/partial/header', $data);
            $this->load->view('admin/partial/aside-menu');
            $this->load->view('admin/pages/addAdvert', $data);
            $this->load->view('admin/partial/footer');
        } else {
            redirect('admin/login');
        }

    }

    public function saveAdvert()
    {
        if ($this->session->userdata('user_id')) {
            $path = path_img('banner');
            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|png|jpeg';
//            $config['max_size'] = '2000';
            $config['overwrite'] = TRUE;
            date_default_timezone_set('Asia/Gaza');
            $date = date('Y-m-d H:i:s');
            $this->load->library('upload', $config);
            if (isset($_FILES['banner_img']) && !empty($_FILES['banner_img']['name'])) {

                if (!$this->upload->do_upload('banner_img')) {
                } else {

                    $uploadedFileData = $this->upload->data();
                    $randomName = md5(time()) . $uploadedFileData['file_ext'];
                    rename($uploadedFileData['full_path'], $uploadedFileData['file_path'] . $randomName);
                    $uploadedFileData["file_name"] = $randomName;


                    $activat = $this->input->post('active_bnr');
                    $banner_place= $this->input->post('place_banner');
                    if ($activat == null)
                        $activat = 0;
//                    if ($banner_place == -1)
//                        $banner_place = null;
                    $banner = array(
                        'name' => $this->input->post('banner_name'),
                        'link' => $this->input->post('banner_link'),
                        'place_id' => $banner_place,
                        'created_at' => $date,
                        'activat_id' => $activat,
                        'img' => $path . $randomName);

                    $this->AdvertModel->add_banner($banner);
                }
            }
            redirect('admin/addAds');
        } else {
            redirect('admin/login');
        }
    }

    public function advert_table()
    {
        if ($this->session->userdata('user_id')) {
            $data['title'] = "إدارة الإعلانات";
            $data['Banner'] = $this->AdvertModel->getBanner();
            $this->load->helper('url');
            $this->load->view('admin/partial/header', $data);
            $this->load->view('admin/partial/aside-menu');
            $this->load->view('admin/pages/dtableBanner');
            $this->load->view('admin/partial/footer');
        } else {
            redirect('admin/login');
        }

    }

    public function updateAdvert()
    {
        if ($this->session->userdata('user_id')) {
            $data['title'] = "تعديل بيانات الإعلان ";
            $id = $this->uri->segment(3);
            $banner = $this->AdvertModel->get_banner_id($id)[0];
            $data ['Banner'] = $banner;
            $place_adv = $this->AdvertModel->get_place_adv();
            $data ['PlaceAdv'] = $place_adv;
            $this->load->view('admin/partial/header', $data);
            $this->load->view('admin/partial/aside-menu');
            $this->load->view('admin/pages/updateBanner');
            $this->load->view('admin/partial/footer');
        } else {
            redirect('admin/login');
        }
    }

    public function saveUpdateAdvert()
    {
        if ($this->session->userdata('user_id')) {
            $path = path_img('banner');
            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|png|jpeg';
//            $config['max_size'] = '2000';
            $config['overwrite'] = TRUE;
            $activat = $this->input->post('active_bnr');
            $banner_place= $this->input->post('place_banner');
            if ($activat == null)
                $activat = 0;
            $this->load->library('upload', $config);
            $id = $this->uri->segment(3);
            $banner = array(
                'name' => $this->input->post('banner_name'),
                'link' => $this->input->post('banner_link'),
                'place_id' => $banner_place,
                'activat_id' => $activat,
               );
            if (isset($_FILES['banner_img']) && !empty($_FILES['banner_img']['name'])) {

                if (!$this->upload->do_upload('banner_img')) {
                } else {

                    $uploadedFileData = $this->upload->data();
                    $randomName = md5(time()) . $uploadedFileData['file_ext'];
                    rename($uploadedFileData['full_path'], $uploadedFileData['file_path'] . $randomName);
                    $uploadedFileData["file_name"] = $randomName;
                    $banner['img'] = $path . $randomName;
                }
            }
            $this->AdvertModel->updateBanner($id, $banner);
            redirect('admin/dtableBanner');
        } else {
            redirect('admin/login');
        }
    }

    public function deleteAdvert()
    {
        if ($this->session->userdata('user_id')) {
            $id = $this->input->post('deptID');

            $this->AdvertModel->delBanner($id);
        } else {
            redirect('admin/login');
        }

    }

}