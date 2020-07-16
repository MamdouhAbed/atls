<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct() {
        parent:: __construct();
        $this->load->library('session');
        $this->load->helper('helper1');


    }


    public function user_table()
    {
        if ($this->session->userdata('user_id')) {
        $data['title'] = "إدارة المستخدمين";
        $this->load->helper(array('form','url'));
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('userModel');
        $users = $this->userModel->get_user();
        $data ['User'] = $users;
        $this->load->view('admin/partial/header',$data);
        $this->load->view('admin/partial/aside-menu');
        $this->load->view('admin/pages/dtableUsers');
        $this->load->view('admin/partial/footer');
        }else{
            redirect('admin/login');
        }
    }

    public function add_user()
    {
        if ($this->session->userdata('user_id')) {
        $data['title'] = "إضافة مستخدم جديد";
        $this->load->helper(array('form','url'));
        $this->load->view('admin/partial/header',$data);
        $this->load->view('admin/partial/aside-menu');
        $this->load->view('admin/pages/addUser');
        $this->load->view('admin/partial/footer');
    }else{
redirect('admin/login');
}
    }

    public function saveUser(){
        if ($this->session->userdata('user_id')) {

        $this->load->helper(array('form','url'));
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('userModel');
         $path=path_img('users');
            date_default_timezone_set('Asia/Gaza');
            $date=date('Y-m-d H:i:s') ;
            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|png|jpeg';
//            $config['max_size'] = '2000';
            $config['overwrite'] = TRUE;

            $this->load->library('upload', $config);
            if (isset($_FILES['userfile']) && !empty($_FILES['userfile']['name'])) {

                if (!$this->upload->do_upload('userfile')) {
                } else {

                    $uploadedFileData = $this->upload->data();
                    $randomName = md5(time()) . $uploadedFileData['file_ext'];
                    rename($uploadedFileData['full_path'], $uploadedFileData['file_path'] . $randomName);
                    $uploadedFileData["file_name"] = $path.$randomName;

                    $role=2;
                    if($this->input->post('admin')==1){
                        $role=1;
                    }else if($this->input->post('normal')==1){
                        $role=2;
                    }
                    $users = array('name' => $this->input->post('username'),
                        'email' => $this->input->post('email'),
                        'img_user' => $path.$randomName,
                        'password' => md5($this->input->post('password')),
                        'activat_id' => 1,
                        'role_id' => $role,
                        'role_category' => 1,
                        'created_at' => $date);

                    $this->userModel->addUser($users);
                }
            }
       redirect('admin/addUser');
}else{
    redirect('admin/login');
}
    }

    public function updateUser()
    {
        if ($this->session->userdata('user_id')) {
        $data['title'] = "تعديل بيانات المستخدم ";
        $this->load->helper(array('form','url'));
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('userModel');
        $id=$this->uri->segment(3);
        $users = $this->userModel->get_user_id($id)[0];
        $data ['users'] = $users;
        $this->load->view('admin/partial/header',$data);
        $this->load->view('admin/partial/aside-menu');
        $this->load->view('admin/pages/updateUser');
        $this->load->view('admin/partial/footer');
    }else{
    redirect('admin/login');
}
    }

    public function saveUpdateUser(){
        if ($this->session->userdata('user_id')) {
            $this->load->helper(array('form', 'url'));
            $this->load->database();
            $this->load->library('form_validation');
            $this->load->model('userModel');
            date_default_timezone_set('Asia/Gaza');
            $date=date('Y-m-d H:i:s') ;
            $id = $this->uri->segment(3);
            $role=0;
            if($this->input->post('admin')==1){
                $role=1;
            }else if($this->input->post('normal')==1){
                $role=2;
            }

            if($role==0){
                $users = array('name' => $this->input->post('username'),
                    'email' => $this->input->post('email'),

                    'activat_id' => 1,
                    'role_category' => 1,
                    'updated_at' => $date);

            }else{
                $users = array('name' => $this->input->post('username'),
                    'email' => $this->input->post('email'),

                    'activat_id' => 1,
                    'role_id' => $role,
                    'role_category' => 1,
                    'updated_at' => $date);


            }


            $this->userModel->updateUser($id, $users);
            $path=path_img('users');
            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = '2000';
            $config['overwrite'] = TRUE;

            $this->load->library('upload', $config);
            if (isset($_FILES['userfile']) && !empty($_FILES['userfile']['name'])) {

                if (!$this->upload->do_upload('userfile')) {
                } else {

                    $uploadedFileData = $this->upload->data();
                    $randomName = md5(time()) . $uploadedFileData['file_ext'];
                    rename($uploadedFileData['full_path'], $uploadedFileData['file_path'] . $randomName);
                    $uploadedFileData["file_name"] = $randomName;
                    $users = array(
                        'img_user' => $path . $randomName);
                    $this->userModel->updateUser($id, $users);
                }
            }
            $password = $this->input->post('password');
            if ($password != null) {

            $users = array(
                'password' => md5($password)
            );
            $this->userModel->updateUser($id, $users);
        }
                    redirect('admin/dtableUsers');
}else{
    redirect('admin/login');
}
    }

    public function deleteUser() {
        if ($this->session->userdata('user_id')) {
        $this->load->helper(array('form','url'));
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('userModel');
        $id = $this->input->post('userID');
            $users = array(
                'is_deleted' => 1);
        $this->userModel->updateUser($id,$users);
}else{
    redirect('admin/login');
}

    }

}