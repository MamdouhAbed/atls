<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Multimedia extends CI_Controller
{
    public function __construct() {
        parent:: __construct();
        $this->load->library('session');
        $this->load->helper('helper1');
        $this->load->helper("thumb_helper");



    }

    public function image_table()
    {
        if ($this->session->userdata('user_id')) {
            $this->load->model('multimediaModel');
        $data['title'] = "إدارة الصور";
        $data['images']=$this->multimediaModel->getAlbums();
        $this->load->helper('url');
        $this->load->view('admin/partial/header', $data);
        $this->load->view('admin/partial/aside-menu');
        $this->load->view('admin/pages/dtableImages');
        $this->load->view('admin/partial/footer');
    }else{
redirect('admin/login');
}

    }

    public function add_image()
    {
        if ($this->session->userdata('user_id')) {
        $data['title'] = "إضافة صور";
        $this->load->helper(array('form','url'));
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('mediaModel');
        $this->load->view('admin/partial/header', $data);
        $this->load->view('admin/partial/aside-menu');
        $this->load->view('admin/pages/addImages');
        $this->load->view('admin/partial/footer');
    }else{
redirect('admin/login');
}

    }

    public function saveImages(){
        if ($this->session->userdata('user_id')) {
        $this->load->helper(array('form', 'url'));
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('multimediaModel');
            $this->load->model('mediaModel');
            $path=path_img('imgsAlbumhome');
           date_default_timezone_set('Asia/Gaza');
           $date=date('Y-m-d H:i:s') ;
            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|png|jpeg|';
//            $config['max_size'] = '50000';
            $config['overwrite'] = TRUE;
            $this->load->library('upload', $config);
            if (isset($_FILES['imghome']) && !empty($_FILES['imghome']['name'])){

                        if (!$this->upload->do_upload('imghome')) {
                        } else {

                            $uploadedFileData = $this->upload->data();
                            $randomName = md5(time()) . $uploadedFileData['file_ext'];
                            //rename uploaded image to our new image name
                            rename($uploadedFileData['full_path'], $uploadedFileData['file_path'] . $randomName);

                            $uploadedFileData["file_name"] = $path.$randomName;
//                            $uploadedFileData["file_name"] = $_FILES['imghome']['name'];
                            $img= $path.$randomName;
                            $this->load->library('image_lib');
                            $water_img = $this->input->post('water_img');
                            if ($water_img == 1) {
                                $config['source_image'] = $img;
                                $config['image_library'] = 'gd2';
                                $config['wm_type'] = 'overlay';
                                $config['wm_overlay_path'] = './uploads/logo.png';
                                //the overlay image
                                $config['wm_opacity'] = 50;
                                $config['wm_vrt_alignment'] = 'middle';
                                $config['wm_hor_alignment'] = 'center';
                                $this->image_lib->initialize($config);
                                if (!$this->image_lib->watermark()) {
                                    echo $this->image_lib->display_errors();
                                } else {
                                    echo 'Successfully updated image with watermark';
                                }
                            }else{

                            }

                            $new = array('title' => $this->input->post('imgname'),
                                'img' => $path.$randomName,
                                'description' => $this->input->post('comments'),
                                'activat_id' => 1,
                                'created_at' => $date,
                                'main_media_id' => 2);
                            $insert_id = $this->mediaModel->addSubMediaDept($new);

                            if ($this->input->post('fileSubmit') && !empty($_FILES['userFiles']['name'])) {
                                $filesCount = count($_FILES['userFiles']['name']);

                                for ($i = 0; $i < $filesCount; $i++) {
                                    $_FILES['userFile']['name'] = $_FILES['userFiles']['name'][$i];
                                    $_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
                                    $_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];
                                    $_FILES['userFile']['error'] = $_FILES['userFiles']['error'][$i];
                                    $_FILES['userFile']['size'] = $_FILES['userFiles']['size'][$i];
                                    // $insert_id=$this->newsModel->addImages($new);
                                    
                                    $uploadPath = path_img('imgsAlbum');
                                    //'./admin-assets/uploads/imgsAlbum/';
                                    $config2['upload_path'] = $uploadPath;
                                    $config2['allowed_types'] = 'gif|jpg|png';
                                    $this->load->library('upload', $config2);
                                    $this->upload->initialize($config2);
                                    if ($this->upload->do_upload('userFile')) {

                                        $uploadedFileData = $this->upload->data();
                                        $randomName = md5(time()) .$i. $uploadedFileData['file_ext'];
                                        //rename uploaded image to our new image name
                                        rename($uploadedFileData['full_path'], $uploadedFileData['file_path'] . $randomName);

                                        $uploadedFileData["file_name"] = $randomName;
                                        $uploadData[$i]['title'] = $this->input->post('comments');
                                        $uploadData[$i]['link'] = $uploadPath. $randomName;
                                        $uploadData[$i]['media_dept_id'] = $insert_id;
                                        $img= $uploadPath. $randomName;
                                        $this->load->library('image_lib');
                                        $water_img = $this->input->post('water_img');
                                        if ($water_img == 1) {
                                            $config['source_image'] = $img;
                                            $config['image_library'] = 'gd2';
                                            $config['wm_type'] = 'overlay';
                                            $config['wm_overlay_path'] = '/uploads/logo.png';
                                            //the overlay image
                                            $config['wm_opacity'] = 50;
                                            $config['wm_vrt_alignment'] = 'middle';
                                            $config['wm_hor_alignment'] = 'center';
                                            $this->image_lib->initialize($config);
                                            if (!$this->image_lib->watermark()) {
                                                echo $this->image_lib->display_errors();
                                            } else {
                                                echo 'Successfully updated image with watermark';
                                            }
                                        }else{

                                        }

                                    }
                                }
                                if (!empty($uploadData)) {
                                    //Insert files data into the database
                                    $this->multimediaModel->insert($uploadData);

                                }
                            }

                            redirect('admin/addImages');
                        }}
    }else{
redirect('admin/login');
}
    }

    public function delImages(){
        if ($this->session->userdata('user_id')) {
            $this->load->helper(array('form', 'url'));
            $this->load->database();
            $this->load->model('multimediaModel');
            $id=$this->input->post('id');
            $this->multimediaModel->deleteImage($id);


        }else{

        }
    }

    public function updateImages()
    {
        if ($this->session->userdata('user_id')) {
            $id=$this->uri->segment(3);

            $data['title'] = "تعديل صور";
            $this->load->helper(array('form','url'));
            $this->load->database();
            $this->load->library('form_validation');
            $this->load->model('multimediaModel');
            $this->load->model('mediaModel');
            $submedia = $this->mediaModel->get_catSubMedia($id);
            $data ['SubMedia'] = $submedia[0];
            $images = $this->multimediaModel->get_images();
            $data ['images'] = $images;

            $this->load->view('admin/partial/header', $data);
            $this->load->view('admin/partial/aside-menu');
            $this->load->view('admin/pages/updateImages');
            $this->load->view('admin/partial/footer');
        }else{
            redirect('admin/login');
        }

    }

    public function saveUpdateImages(){
        if ($this->session->userdata('user_id')) {
            $this->load->helper(array('form', 'url'));
            $this->load->database();
            $this->load->library('form_validation');
            $this->load->model('multimediaModel');
            $this->load->model('mediaModel');
            $path=path_img('imgsAlbumhome');
           date_default_timezone_set('Asia/Gaza');
           $date=date('Y-m-d H:i:s') ;
            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|png|jpeg';
//            $config['max_size'] = '2000';
            $config['overwrite'] = TRUE;
            $this->load->library('upload', $config);
            $id=$this->uri->segment(3);
            if (isset($_FILES['imghome']) && !empty($_FILES['imghome']['name'])){

                if (!$this->upload->do_upload('imghome')) {
                } else {

                    $uploadedFileData = $this->upload->data();
                    $randomName = md5(time()) . $uploadedFileData['file_ext'];
                    //rename uploaded image to our new image name
                    rename($uploadedFileData['full_path'], $uploadedFileData['file_path'] . $randomName);

                    $uploadedFileData["file_name"] = $path.$randomName;
//                            $uploadedFileData["file_name"] = $_FILES['imghome']['name'];
//                    $uploadedFileData["file_name"] = $_FILES['imghome']['name'];

                    $new = array(
                        'title' => $this->input->post('imgname'),
                        'img' =>  $path.$randomName,
                        'description' => $this->input->post('comments'),
                        'activat_id' => 1,
                        'updated_at' => $date,
                        'main_media_id' => 2);
                    $this->mediaModel->updtSubMediaDept($id,$new);

                }




            }else{
                $new = array(
                    'title' => $this->input->post('imgname'),
                    'description' => $this->input->post('comments'),
                    'activat_id' => 1,
                    'updated_at' => $date,
                    'main_media_id' => 2);
                $this->mediaModel->updtSubMediaDept($id,$new);
            }
            if ($this->input->post('fileSubmit') && !empty($_FILES['userFiles']['name'])) {
                $filesCount = count($_FILES['userFiles']['name']);

                for ($i = 0; $i < $filesCount; $i++) {
                    $_FILES['userFile']['name'] = $_FILES['userFiles']['name'][$i];
                    $_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
                    $_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];
                    $_FILES['userFile']['error'] = $_FILES['userFiles']['error'][$i];
                    $_FILES['userFile']['size'] = $_FILES['userFiles']['size'][$i];
                    // $insert_id=$this->newsModel->addImages($new);
                    $uploadPath = path_img('imgsAlbum');
                    $config2['upload_path'] = $uploadPath;
                    $config2['allowed_types'] = 'gif|jpg|png';
                    $this->load->library('upload', $config2);
                    $this->upload->initialize($config2);
                    if ($this->upload->do_upload('userFile')) {


                        $uploadedFileData = $this->upload->data();
                        $randomName = md5(time()) .$i. $uploadedFileData['file_ext'];
                        //rename uploaded image to our new image name
                        rename($uploadedFileData['full_path'], $uploadedFileData['file_path'] . $randomName);

                        $uploadedFileData["file_name"] = $randomName;
                        $uploadData[$i]['title'] = $this->input->post('comments');
                        $uploadData[$i]['link'] = $uploadPath. $randomName;
                        $uploadData[$i]['media_dept_id'] = $id;

                    }
                }
                if (!empty($uploadData)) {
                    //Insert files data into the database
                    $this->multimediaModel->insert($uploadData);

                }
            }

            redirect('admin/dtableImages');
        }else{
            redirect('admin/login');
        }
    }

    public function deleteImagesAlbum() {
        if ($this->session->userdata('user_id')) {
            $this->load->helper(array('form','url'));
            $this->load->database();
            $this->load->library('form_validation');
            $this->load->model('multimediaModel');
            $id = $this->input->post('deptID');

            $this->multimediaModel->delAlbum($id);
        }else{
            redirect('admin/login');
        }

    }

    public function video_table()
    {
        if ($this->session->userdata('user_id')) {
        $data['title'] = "إدارة الفيديو";
            $this->load->helper(array('form','url'));
            $this->load->database();
            $this->load->library('form_validation');
            $this->load->model('multimediaModel');
            $videos = $this->multimediaModel->get_video();
            $data ['Video'] = $videos;
        $this->load->view('admin/partial/header', $data);
        $this->load->view('admin/partial/aside-menu');
        $this->load->view('admin/pages/dtableVideos');
        $this->load->view('admin/partial/footer');
    }else{
redirect('admin/login');
}

    }

    public function add_video()
    {
        if ($this->session->userdata('user_id')) {
        $data['title'] = "إضافة فيديو";
        $this->load->helper('url');
        $this->load->view('admin/partial/header', $data);
        $this->load->view('admin/partial/aside-menu');
        $this->load->view('admin/pages/addVideo');
        $this->load->view('admin/partial/footer');
    }else{
redirect('admin/login');
}

    }

    public function saveVideoOld()
    {
        if ($this->session->userdata('user_id')) {
        $this->load->helper(array('form', 'url'));
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('multimediaModel');
        date_default_timezone_set('Asia/Gaza');
           $date=date('Y-m-d H:i:s') ;
            $path=('uploads/videos/');
            $config['upload_path'] = $path;
            $config['allowed_types'] = 'mp4';
            $config['max_size'] = '50000000';
            $config['overwrite'] = TRUE;
            //$configVideo['remove_spaces'] = TRUE;
            $this->load->library('upload', $config);

//            var_dump($_FILES['video_img2']);
           if (isset($_FILES['video_name']) && !empty($_FILES['video_name']['name'])) {

                if (!$this->upload->do_upload('video_name')) {

                } else {
                    $uploadedFileData = $this->upload->data();
                    $randomName = $uploadedFileData['file_ext'];
                    $uploadedFileData["file_name"] = $randomName;

                    $videos = array(
                        'title' =>$this->input->post('videoname'),
                        'link_youtube' => $path,
                        'video_img' => $this->input->post('url'),
                        'created_at' => $date,
                        'main_media_id' => 1);
                    $this->multimediaModel->addVideo($videos);


                }
            }

           redirect('admin/addVideo');
    }else{
redirect('admin/login');
}
    }
    public function saveVideo()
    {
        if ($this->session->userdata('user_id')) {
            $this->load->helper(array('form', 'url'));
            $this->load->database();
            $this->load->library('form_validation');
            $this->load->model('multimediaModel');
            date_default_timezone_set('Asia/Gaza');
            $date = date('Y-m-d H:i:s');
            $path = path_img('videos');
            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['overwrite'] = TRUE;
            $this->load->library('upload', $config);
            $randomName = md5(time()).'.PNG';

            $img_path = $this->input->post('url-imghome');
            @ $get_img = file_get_contents($img_path);
            file_put_contents($path.$randomName, $get_img);


            $videos = array(
                'title' => $this->input->post('videoname'),
                'link_youtube' => $this->input->post('url'),
                'imghome' => $path.$randomName,
                'created_at' => $date,
                'main_media_id' => 1);
            $this->multimediaModel->addVideo($videos);

            redirect('admin/addVideo');
    }else{
redirect('admin/login');
}
    }

    public function updateVideo()
    {
        if ($this->session->userdata('user_id')) {
            $data['title'] = "تعديل بيانات الفيديو ";
            $this->load->helper(array('form','url'));
            $this->load->database();
            $this->load->library('form_validation');
            $this->load->model('multimediaModel');
            $id=$this->uri->segment(3);
            $videos = $this->multimediaModel->get_video_id($id)[0];
            $data ['videos'] = $videos;
            $this->load->view('admin/partial/header',$data);
            $this->load->view('admin/partial/aside-menu');
            $this->load->view('admin/pages/updateVideo');
            $this->load->view('admin/partial/footer');
        }else{
            redirect('admin/login');
        }
    }

    public function saveUpdateVideo(){
        if ($this->session->userdata('user_id')) {
            $this->load->helper(array('form','url'));
            $this->load->database();
            $this->load->library('form_validation');
            $this->load->model('multimediaModel');
            $id=$this->uri->segment(3);
           date_default_timezone_set('Asia/Gaza');
           $date=date('Y-m-d H:i:s') ;
            $path = path_img('videos');
            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['overwrite'] = TRUE;
            $this->load->library('upload', $config);
            $randomName = md5(time()).'.PNG';


            $img_path = $this->input->post('url-imghome');

            if($img_path==null) {
                $videos = array('title' => $this->input->post('videoname'),
                    'link_youtube' => $this->input->post('url'),
                    'updated_at' => $date,
                    'main_media_id' => 1);

                $this->multimediaModel->updateVideo($id, $videos);
            }
            else{
                @ $get_img = file_get_contents($img_path);
                file_put_contents($path.$randomName, $get_img);
                $videos = array('title' => $this->input->post('videoname'),
                    'link_youtube' => $this->input->post('url'),
                    'imghome' => $path . $randomName,
                    'updated_at' => $date,
                    'main_media_id' => 1);

                $this->multimediaModel->updateVideo($id, $videos);
            }
            redirect('admin/dtableVideos');
        }else{
            redirect('admin/login');
        }
    }

    public function deleteVideo() {
        if ($this->session->userdata('user_id')) {
            $this->load->helper(array('form','url'));
            $this->load->database();
            $this->load->library('form_validation');
            $this->load->model('multimediaModel');
            $id = $this->input->post('videoID');

            $this->multimediaModel->delVideo($id);
        }else{
            redirect('admin/login');
        }

    }

    public function pdf_table()
    {
        if ($this->session->userdata('user_id')) {
            $this->load->model('multimediaModel');
        $data['title'] = "إدارة الأعداد";
            $data['Pdf']=$this->multimediaModel->getPdf();
        $this->load->helper('url');
        $this->load->view('admin/partial/header', $data);
        $this->load->view('admin/partial/aside-menu');
        $this->load->view('admin/pages/dtablePdf');
        $this->load->view('admin/partial/footer');
    }else{
redirect('admin/login');
}

    }

    public function add_pdf()
    {
        if ($this->session->userdata('user_id')) {
        $this->load->helper(array('form', 'url'));
        $data['title'] = "اضافة عدد";
        $this->load->view('admin/partial/header', $data);
        $this->load->view('admin/partial/aside-menu');
        $this->load->view('admin/pages/addPdf');
        $this->load->view('admin/partial/footer');
    }else{
redirect('admin/login');
}

    }

    public function savePdf2()
    {
        if ($this->session->userdata('user_id')) {
        $this->load->helper(array('form', 'url'));
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('multimediaModel');

        $config['upload_path'] = './admin-assets/uploads/newspaper/';
        $config['allowed_types'] = 'jpg|png|jpeg|pdf';
//        $config['max_size'] = '50000';
        $config['overwrite'] = TRUE;

        $this->load->library('upload', $config);
        if (isset($_FILES['banar']) && !empty($_FILES['banar']['name'])){
            if (isset($_FILES['pdf']) && !empty($_FILES['pdf']['name'])) {
                if (isset($_FILES['homeimg']) && !empty($_FILES['homeimg']['name'])) {
                if (!$this->upload->do_upload('banar') || !$this->upload->do_upload('pdf') || !$this->upload->do_upload('homeimg')) {
                } else {
                    $uploadedFileData = $this->upload->data();



                    $uploadedFileData["file_name"] = $_FILES['banar']['name'];
                    $uploadedFileData["file_name"] = $_FILES['pdf']['name'];
                    $uploadedFileData["file_name"] = $_FILES['homeimg']['name'];

                    $pdf = array('news_num' => $this->input->post('pdfNo'),
                        'pdf' => 'admin-assets/uploads/newspaper/'.$_FILES['pdf']['name'],
                        'home_img' =>'admin-assets/uploads/newspaper/'. $_FILES['homeimg']['name'],
                        'banner' =>'admin-assets/uploads/newspaper/'. $_FILES['banar']['name'],
                        'date' => 1 );

                    $insert_id=$this->multimediaModel->addPdf($pdf);

        if($this->input->post('fileSubmit') && !empty($_FILES['userFiles']['name'])){
            $filesCount = count($_FILES['userFiles']['name']);
            for($i = 0; $i < $filesCount; $i++){
                $_FILES['userFile']['name'] = $_FILES['userFiles']['name'][$i];
                $_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
                $_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];
                $_FILES['userFile']['error'] = $_FILES['userFiles']['error'][$i];
                $_FILES['userFile']['size'] = $_FILES['userFiles']['size'][$i];

                $uploadPath = './admin-assets/uploads/newspaper/';
                $config2['upload_path'] = $uploadPath;
                $config2['allowed_types'] = 'gif|jpg|png';

                $this->load->library('upload', $config2);
                $this->upload->initialize($config2);
                if($this->upload->do_upload('userFile')){
                    $fileData = $this->upload->data();
                    $uploadData[$i]['name'] = 'admin-assets/uploads/newspaper/'.$fileData['file_name'];
                    $uploadData[$i]['page_no'] = $i;
                    $uploadData[$i]['news_paper_id'] =$insert_id ;

                }
            }
            if(!empty($uploadData)){

               $this->multimediaModel->insertpdf($uploadData);

            }
        }


                    redirect('admin/addPdf');

                }

            }}
        }
    }else{
redirect('admin/login');
}
    }


    public function savePdf()
    {
        if ($this->session->userdata('user_id')) {
            $this->load->helper(array('form', 'url'));
            $this->load->database();
            $this->load->library('form_validation');
            $this->load->model('multimediaModel');

            $config['upload_path'] = './admin-assets/uploads/newspaper/';
            $config['allowed_types'] = 'jpg|png|jpeg|pdf';
  //        $config['max_size'] = '50000';
            $config['overwrite'] = TRUE;

            $this->load->library('upload', $config);

                if (isset($_FILES['pdf']) && !empty($_FILES['pdf']['name'])) {


                            if (!$this->upload->do_upload('pdf')) {

                            }else{

                                $uploadedFileData2 = $this->upload->data();
                                $randomName1 = md5(time()).'pdf' . $uploadedFileData2['file_ext'];
                                rename($uploadedFileData2['full_path'], $uploadedFileData2['file_path'] . $randomName1);
                                $uploadedFileData2["file_name"] = $randomName1;


                            $pdf = array('news_num' => $this->input->post('pdfNo'),
                                'pdf' => 'admin-assets/uploads/newspaper/' . $randomName1
                                );

                            $insert_id = $this->multimediaModel->addPdf($pdf);

                            if ($this->input->post('fileSubmit') && !empty($_FILES['userFiles']['name'])) {
                                $filesCount = count($_FILES['userFiles']['name']);
                                for ($i = 0; $i < $filesCount; $i++) {
                                    $_FILES['userFile']['name'] = $_FILES['userFiles']['name'][$i];
                                    $_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
                                    $_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];
                                    $_FILES['userFile']['error'] = $_FILES['userFiles']['error'][$i];
                                    $_FILES['userFile']['size'] = $_FILES['userFiles']['size'][$i];

                                    $uploadPath = './admin-assets/uploads/newspaper/';
                                    $config2['upload_path'] = $uploadPath;
                                    $config2['allowed_types'] = 'gif|jpg|png';

                                    $this->load->library('upload', $config2);
                                    $this->upload->initialize($config2);
                                    if ($this->upload->do_upload('userFile')) {
                                        $fileData = $this->upload->data();
                                        $uploadData[$i]['name'] = 'admin-assets/uploads/newspaper/' . $fileData['file_name'];
                                        $uploadData[$i]['page_no'] = $i;
                                        $uploadData[$i]['news_paper_id'] = $insert_id;

                                    }
                                }
                                if (!empty($uploadData)) {

                                    $this->multimediaModel->insertpdf($uploadData);

                                }
                            }


                            redirect('admin/addPdf');

                    }


                    }


        }else{
            redirect('admin/login');
        }
    }



    public function updatePdf()
    {
        if ($this->session->userdata('user_id')) {
            $data['title'] = "تعديل بيانات العدد ";
            $this->load->helper(array('form','url'));
            $this->load->database();
            $this->load->library('form_validation');
            $this->load->model('multimediaModel');
            $id=$this->uri->segment(3);
            $pdf = $this->multimediaModel->get_pdf_id($id)[0];
            $data ['Pdf'] = $pdf;
            $this->load->view('admin/partial/header',$data);
            $this->load->view('admin/partial/aside-menu');
            $this->load->view('admin/pages/updatePdf');
            $this->load->view('admin/partial/footer');
        }else{
            redirect('admin/login');
        }
    }

    public function saveUpdatePdf()
    {
        if ($this->session->userdata('user_id')) {
            $this->load->helper(array('form', 'url'));
            $this->load->database();
            $this->load->library('form_validation');
            $this->load->model('multimediaModel');

            $config['upload_path'] = './admin-assets/uploads/newspaper/';
            $config['allowed_types'] = 'jpg|png|jpeg|pdf';
//            $config['max_size'] = '2000';
            $config['overwrite'] = TRUE;

            $this->load->library('upload', $config);
            $id=$this->uri->segment(3);
            $pdf = array('news_num' => $this->input->post('pdfNo'));

            $this->multimediaModel->updatePdf($id, $pdf);

            if (isset($_FILES['pdf']) && !empty($_FILES['pdf']['name'])) {
                if (!$this->upload->do_upload('pdf')){

                }
                else {
                    $uploadedFileData2 = $this->upload->data();
                    $randomName1 = md5(time()).'pdf' . $uploadedFileData2['file_ext'];
                    rename($uploadedFileData2['full_path'], $uploadedFileData2['file_path'] . $randomName1);
                    $uploadedFileData2["file_name"] = $randomName1;

                    $pdf = array('news_num' => $this->input->post('pdfNo'),

                    'pdf' => 'admin-assets/uploads/newspaper/'.$randomName1);


                    $this->multimediaModel->updatePdf($id,$pdf);




                }


            }



            if($this->input->post('fileSubmit') && !empty($_FILES['userFiles']['name'])){
                $filesCount = count($_FILES['userFiles']['name']);
                for($i = 0; $i < $filesCount; $i++){
                    $_FILES['userFile']['name'] = $_FILES['userFiles']['name'][$i];
                    $_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
                    $_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];
                    $_FILES['userFile']['error'] = $_FILES['userFiles']['error'][$i];
                    $_FILES['userFile']['size'] = $_FILES['userFiles']['size'][$i];

                    $uploadPath = './admin-assets/uploads/newspaper/';
                    $config2['upload_path'] = $uploadPath;
                    $config2['allowed_types'] = 'gif|jpg|png';

                    $this->load->library('upload', $config2);
                    $this->upload->initialize($config2);
                    if($this->upload->do_upload('userFile')){
                        $fileData = $this->upload->data();
                        $randomName = md5(time()).''.($i+3). $fileData['file_ext'];
                        //rename uploaded image to our new image name
                        rename($fileData['full_path'], $fileData['file_path'] . $randomName);
                        $fileData["file_name"] = $randomName;

                        $uploadData[$i]['name'] =$randomName;
                        $uploadData[$i]['page_no'] = $i;
                        $uploadData[$i]['news_paper_id'] =$id ;

                    }
                }
                if(!empty($uploadData)){

                    $this->multimediaModel->insertpdf($uploadData);

                }
            }
            redirect('admin/dtablePdf');
        }else{
            redirect('admin/login');
        }
    }

    public function deletePdf() {
        if ($this->session->userdata('user_id')) {
            $this->load->helper(array('form','url'));
            $this->load->database();
            $this->load->library('form_validation');
            $this->load->model('multimediaModel');
            $id = $this->input->post('deptID');

            $this->multimediaModel->delPDF($id);
        }else{
            redirect('admin/login');
        }

    }

//    infographic

    public function add_infographic()
    {
        if ($this->session->userdata('user_id')) {
            $data['title'] = "إضافة انفوجرافيك";
            $this->load->helper(array('form','url'));
            $this->load->database();
            $this->load->library('form_validation');
            $this->load->model('mediaModel');
            $this->load->view('admin/partial/header', $data);
            $this->load->view('admin/partial/aside-menu');
            $this->load->view('admin/pages/addInfographic');
            $this->load->view('admin/partial/footer');
        }else{
            redirect('admin/login');
        }

    }

    public function saveInfographic()
    {
        if ($this->session->userdata('user_id')) {
            $this->load->helper(array('form', 'url'));
            $this->load->database();
            $this->load->library('form_validation');
            $this->load->model('multimediaModel');
            $path=path_img('infographic');
            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|png|jpeg';
//            $config['max_size'] = '2000';
            $config['overwrite'] = TRUE;
           date_default_timezone_set('Asia/Gaza');
           $date=date('Y-m-d H:i:s') ;
            $this->load->library('upload', $config);
            if (isset($_FILES['info']) && !empty($_FILES['info']['name'])) {

                if (!$this->upload->do_upload('info')) {
                } else {

                    $uploadedFileData = $this->upload->data();
                    $randomName = md5(time()) . $uploadedFileData['file_ext'];
                    rename($uploadedFileData['full_path'], $uploadedFileData['file_path'] . $randomName);
                    $uploadedFileData["file_name"] = $randomName;


                    $info = array(
                        'name' => $this->input->post('infoname'),
                        'created_at' => $date,
                        'link' =>$path. $randomName);

                    $this->multimediaModel->addinfographic($info);
                }
            }
            redirect('admin/addInfographic');
        }else{
            redirect('admin/login');
        }
    }

    public function infographic_table()
    {
        if ($this->session->userdata('user_id')) {
            $this->load->model('multimediaModel');
            $data['title'] = "إدارة الانفوجرافيك";
            $data['Info']=$this->multimediaModel->getInfo();
            $this->load->helper('url');
            $this->load->view('admin/partial/header', $data);
            $this->load->view('admin/partial/aside-menu');
            $this->load->view('admin/pages/dtableInfographic');
            $this->load->view('admin/partial/footer');
        }else{
            redirect('admin/login');
        }

    }

    public function updateInfographic()
    {
        if ($this->session->userdata('user_id')) {
            $data['title'] = "تعديل بيانات الانفوجرافيك ";
            $this->load->helper(array('form','url'));
            $this->load->database();
            $this->load->library('form_validation');
            $this->load->model('multimediaModel');
            $id=$this->uri->segment(3);
            $info = $this->multimediaModel->get_info_id($id)[0];
            $data ['Info'] = $info;
            $this->load->view('admin/partial/header',$data);
            $this->load->view('admin/partial/aside-menu');
            $this->load->view('admin/pages/updateInfographic');
            $this->load->view('admin/partial/footer');
        }else{
            redirect('admin/login');
        }
    }

    public function saveUpdateInfographic()
    {
        if ($this->session->userdata('user_id')) {
            $this->load->helper(array('form', 'url'));
            $this->load->database();
            $this->load->library('form_validation');
            $this->load->model('multimediaModel');
            $path=path_img('infographic');
            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|png|jpeg';
//            $config['max_size'] = '2000';
            $config['overwrite'] = TRUE;

            $this->load->library('upload', $config);
            $id=$this->uri->segment(3);
            $cari = array('name' => $this->input->post('infoname')
            );
            if (isset($_FILES['info']) && !empty($_FILES['info']['name'])) {

                if (!$this->upload->do_upload('info')) {
                } else {

                    $uploadedFileData = $this->upload->data();
                    $randomName = md5(time()) . $uploadedFileData['file_ext'];
                    rename($uploadedFileData['full_path'], $uploadedFileData['file_path'] . $randomName);
                    $uploadedFileData["file_name"] = $randomName;
                    $cari['link'] = $path.$randomName;

                }
            }
            $this->multimediaModel->updateinfo($id,$cari);
            redirect('admin/dtableInfographic');
        }else{
            redirect('admin/login');
        }
    }

    public function deleteInfographic() {
        if ($this->session->userdata('user_id')) {
            $this->load->helper(array('form','url'));
            $this->load->database();
            $this->load->library('form_validation');
            $this->load->model('multimediaModel');
            $id = $this->input->post('deptID');

            $this->multimediaModel->delinfographic($id);
        }else{
            redirect('admin/login');
        }

    }


//Caricature

    public function add_caricature()
    {
        if ($this->session->userdata('user_id')) {
            $data['title'] = "إضافة كاريكاتير";
            $this->load->helper(array('form','url'));
            $this->load->database();
            $this->load->library('form_validation');
            $this->load->model('mediaModel');
            $this->load->view('admin/partial/header', $data);
            $this->load->view('admin/partial/aside-menu');
            $this->load->view('admin/pages/addCaricature');
            $this->load->view('admin/partial/footer');
        }else{
            redirect('admin/login');
        }

    }

    public function saveCaricature()
    {
        if ($this->session->userdata('user_id')) {
            $this->load->helper(array('form', 'url'));
            $this->load->database();
            $this->load->library('form_validation');
            $this->load->model('multimediaModel');
            $path=path_img('caricature');
            date_default_timezone_set('Asia/Gaza');
            $date=date('Y-m-d H:i:s') ;
            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|png|jpeg';
//            $config['max_size'] = '2000';
            $config['overwrite'] = TRUE;

            $this->load->library('upload', $config);
            if (isset($_FILES['cari']) && !empty($_FILES['cari']['name'])) {

                if (!$this->upload->do_upload('cari')) {
                } else {

                    $uploadedFileData = $this->upload->data();
                    $randomName = md5(time()) . $uploadedFileData['file_ext'];
                    rename($uploadedFileData['full_path'], $uploadedFileData['file_path'] . $randomName);
                    $uploadedFileData["file_name"] = $randomName;


                    $cari = array(
                        'created_at' => $date,
                        'name' => $this->input->post('cariname'),
                        'link' =>$path. $randomName);

                    $this->multimediaModel->addcaricature($cari);
                }
            }
            redirect('admin/addCaricature');
        }else{
            redirect('admin/login');
        }
    }

    public function caricature_table()
    {
        if ($this->session->userdata('user_id')) {
            $this->load->model('multimediaModel');
            $data['title'] = "إدارة الكاريكاتير";
            $data['Cari']=$this->multimediaModel->getCari();
            $this->load->helper('url');
            $this->load->view('admin/partial/header', $data);
            $this->load->view('admin/partial/aside-menu');
            $this->load->view('admin/pages/dtableCaricature');
            $this->load->view('admin/partial/footer');
        }else{
            redirect('admin/login');
        }

    }

    public function updateCaricature()
    {
        if ($this->session->userdata('user_id')) {
            $data['title'] = "تعديل بيانات كاريكاتير ";
            $this->load->helper(array('form','url'));
            $this->load->database();
            $this->load->library('form_validation');
            $this->load->model('multimediaModel');
            $id=$this->uri->segment(3);
            $cari = $this->multimediaModel->get_cari_id($id)[0];
            $data ['Cari'] = $cari;
            $this->load->view('admin/partial/header',$data);
            $this->load->view('admin/partial/aside-menu');
            $this->load->view('admin/pages/updateCaricature');
            $this->load->view('admin/partial/footer');
        }else{
            redirect('admin/login');
        }
    }

    public function saveUpdateCaricature()
    {
        if ($this->session->userdata('user_id')) {
            $this->load->helper(array('form', 'url'));
            $this->load->database();
            $this->load->library('form_validation');
            $this->load->model('multimediaModel');
            $path=path_img('caricature');
            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|png|jpeg';
//            $config['max_size'] = '2000';
            $config['overwrite'] = TRUE;

            $this->load->library('upload', $config);
            $id=$this->uri->segment(3);
            $cari = array('name' => $this->input->post('cariname')
               );
            if (isset($_FILES['cari']) && !empty($_FILES['cari']['name'])) {

                if (!$this->upload->do_upload('cari')) {
                } else {

                    $uploadedFileData = $this->upload->data();
                    $randomName = md5(time()) . $uploadedFileData['file_ext'];
                    rename($uploadedFileData['full_path'], $uploadedFileData['file_path'] . $randomName);
                    $uploadedFileData["file_name"] = $randomName;
                    $cari['link'] = $path.$randomName;

                }
            }
            $this->multimediaModel->updatecari($id,$cari);
            redirect('admin/dtableCaricature');
        }else{
            redirect('admin/login');
        }
    }

    public function deleteCaricature() {
        if ($this->session->userdata('user_id')) {
            $this->load->helper(array('form','url'));
            $this->load->database();
            $this->load->library('form_validation');
            $this->load->model('multimediaModel');
            $id = $this->input->post('deptID');

            $this->multimediaModel->delcaricature($id);
        }else{
            redirect('admin/login');
        }

    }
}