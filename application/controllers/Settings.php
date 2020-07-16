<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {
    public function __construct() {
        parent:: __construct();
        $this->load->library('session');
        $this->load->model('SettingsModel');
    }


    public function Update_settings()
    {
        if ($this->session->userdata('user_id')) {
        $data['title'] = "تعديل اعدادات الموقع";
 //        get website settings
        $website_settings= $this->SettingsModel->get_settings();
        $data ['Website_settings']=$website_settings[0];
        $this->load->helper('url');
        $this->load->view('admin/partial/header',$data);
        $this->load->view('admin/partial/aside-menu');
        $this->load->view('admin/pages/updateSettings');
        $this->load->view('admin/partial/footer');
    }else{
    redirect('admin/login');
}
    }



    public function save_Settings(){
        if ($this->session->userdata('user_id')) {
        $this->load->helper(array('form','url'));
        $this->load->database();
        $this->load->library('form_validation');
        $u_rec_id = $this->session->userdata('user_id');

        $settings=array(
            'value'=>$this->input->post('home_news'),
            'updated_by'=>$u_rec_id,
            );

        $this->SettingsModel->update_settings($settings);
        redirect('admin/settings');
}else{
    redirect('admin/login');
}
    }


}
