<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function log()
    {
        $this->load->library('session');


        if ($this->session->userdata('user_id')){
            redirect('admin');

    }else{
            $data['title'] = "تسجيل الدخول";
            $this->load->helper('url');
            $this->load->view('admin/login');
        }


    }

    public function logout()
    {
        $this->load->library('session');

        $this->session->unset_userdata('user_id');


        redirect('admin/login');



    }

    public function testlogin()
    {
        $this->load->helper(array('form','url'));
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('userModel');

       $username=$this->input->post('username');
        $password=md5($this->input->post('password'));
        $value=$this->userModel->get_user_username($username);
        if(count($value)==0){
            redirect('admin/login');
        }else{
            $value=$value[0];
            if($value->password==$password && $value->is_deleted==0){
                $this->load->library('session');
                $this->session->set_userdata(array(
                    'user_id'       => $value->id,
                    'username'      => $value->name,
                    'email'       => $value->email,
                    'role'          => $value->role_id,
                    'img_user' => $value->img_user

                ));
                redirect('admin');
            }else{
                redirect('admin/login');
            }
        }



    }

}