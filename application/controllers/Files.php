<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Files extends CI_Controller {
    public function __construct() {
        parent:: __construct();
        $this->load->library('session');
        $this->load->helper(array('form','url'));
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('FilesModel');
    }


    public function files_table()
    {
        if ($this->session->userdata('user_id')) {
            $data['title'] = "إدارة الملفات";
            $data['UploadFiles']=$this->FilesModel->getFiles();
            $this->load->view('admin/partial/header', $data);
            $this->load->view('admin/partial/aside-menu');
            $this->load->view('admin/pages/dtableFiles');
            $this->load->view('admin/partial/footer');
        }else{
            redirect('admin/login');
        }

    }

    public function add_file()
    {
        if ($this->session->userdata('user_id')) {
            $data['title'] = "رفع ملف";
            $this->load->view('admin/partial/header', $data);
            $this->load->view('admin/partial/aside-menu');
            $this->load->view('admin/pages/addFile');
            $this->load->view('admin/partial/footer');
        }else{
            redirect('admin/login');
        }

    }
    public function saveFile()
    {
        if ($this->session->userdata('user_id')) {

            $path='./admin-assets/uploads/files/';
            date_default_timezone_set('Asia/Gaza');
            $date=date('Y-m-d H:i:s') ;
            $config['upload_path'] = $path;
            $config['allowed_types'] = '*';
//                    $config['max_size'] = '50000';
            $config['overwrite'] = TRUE;

            $this->load->library('upload', $config);

            if (isset($_FILES['file1']) && !empty($_FILES['file1']['name'])) {


                if (!$this->upload->do_upload('file1')) {

                }else{

                    $uploadedFileData2 = $this->upload->data();
                    $randomName1 = md5(time()).'file1' . $uploadedFileData2['file_ext'];
                    rename($uploadedFileData2['full_path'], $uploadedFileData2['file_path'] . $randomName1);
                    $uploadedFileData2["file_name"] = $randomName1;


                    $file2 = array('file_name' => $this->input->post('filename'),
                        'file_link' => 'admin-assets/uploads/files/'.$randomName1,
                        'created_at' => $date
                    );

                    $this->FilesModel->addFile($file2);
                    redirect('admin/dtableFiles');

                }


            }


        }else{
            redirect('admin/login');
        }
    }


    public function deleteFile() {
        if ($this->session->userdata('user_id')) {
            $id = $this->input->post('deptID');
            $this->FilesModel->delFile($id);
        }else{
            redirect('admin/login');
        }

    }

    public function updateFile()
    {
        if ($this->session->userdata('user_id')) {
            $id = $this->input->post('deptID');
            $textbox = $this->input->post('textbox');
            $this->FilesModel->updtFile($id,$textbox);
        }else{
            redirect('admin/login');
        }

    }
}
