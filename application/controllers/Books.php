<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Books extends CI_Controller {
    public function __construct() {
        parent:: __construct();
        $this->load->helper(array('form', 'url'));
        $this->load->helper("thumb_helper");
        $this->load->database();
        $this->load->library('session');
        $this->load->model('AuthorModel');
        $this->load->helper('helper1');
        $this->load->model('BooksModel');
        $this->load->model('CategoryModel');
        $this->load->library('pagination');

    }
    public function index()
    {


        $count = $this->db->count_all_results('books');
        $total_rows = 8;
        $config= Array();
        if ( $count > $total_rows ) {
            $config['base_url'] = base_url() . 'books/page';
//          $config['first_url'] = '1';
            $config['per_page'] = 1;
            $config['full_tag_open'] = '<ul class="pagination pagination_primary">';
            $config['full_tag_close'] = '</ul>';
            $config['first_link'] = true;
            $config['last_link'] = true;
            $config['first_link'] = 'الأولى';
            $config['last_link'] = 'الأخيرة';
            $config['first_tag_open'] = '<li>';
            $config['first_tag_close'] = '</li>';
            $config['prev_link'] = 'السابق';
            $config['prev_tag_open'] = '<li class="prev">';
            $config['prev_tag_close'] = '</li>';
            $config['next_link'] = 'التالي';
            $config['next_tag_open'] = '<li>';
            $config['next_tag_close'] = '</li>';
            $config['last_tag_open'] = '<li>';
            $config['last_tag_close'] = '</li>';
            $config['cur_tag_open'] = '<li class="active"><a href="#">';
            $config['cur_tag_close'] = '</a></li>';
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
            $config['total_rows'] = $count / 8;
            $config['uri_segment'] = 3;

        }

        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3)*8 : 0;

        $booksarchive= $this->BooksModel->get_books(8,$data['page']);
        $data ['BooksArchive']=$booksarchive;
//        get  category
        $category= $this->CategoryModel->get_category(20,0);
        $data ['Categorysearch'] = $category;



        $data['title'] = "الكتب";
        $data['Description'] ="أطلس للدراسات";
        $data['image'] =" ";

        $this->load->view('partials/header',$data);
        $this->load->view('pages/books', $data);
        $this->load->view('partials/footer', $data);

    }

    public function books_table()
    {
        if ($this->session->userdata('user_id')) {
            $data['title'] = "قائمة الكتب";
            $books = $this->BooksModel->get_books_panel();
            $data ['Books'] = $books;
            $this->load->helper(array('form','url'));
            $this->load->database();
            $this->load->library('form_validation');
            $this->load->view('admin/partial/header',$data);
            $this->load->view('admin/partial/aside-menu');
            $this->load->view('admin/pages/dtableBooks');
            $this->load->view('admin/partial/footer');
        }else{
            redirect('admin/login');
        }

    }



    public function add_books()
    {
        if ($this->session->userdata('user_id')) {
            $data['title'] = "إضافة كتاب";
            $this->load->helper(array('form', 'url'));
            $this->load->database();
            $this->load->library('form_validation');

            $authors = $this->AuthorModel->get_authors();
            $data ['Authors'] = $authors;
            $this->load->view('admin/partial/header', $data);
            $this->load->view('admin/partial/aside-menu');
            $this->load->view('admin/pages/addBooks');
            $this->load->view('admin/partial/footer');
        }else{
            redirect('admin/login');
        }
    }



    public function saveBooks(){
        if ($this->session->userdata('user_id')) {
            $this->load->helper(array('form', 'url'));
            $this->load->database();
            $this->load->library('form_validation');
            $path=path_img('imgBooks');
            date_default_timezone_set('Asia/Gaza');
            $date=date('Y-m-d H:i:s') ;
            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|png|jpeg|';
//            $config['max_size'] = '50000';
            $config['overwrite'] = TRUE;
            $this->load->library('upload', $config);
            if (isset($_FILES['book_img']) && !empty($_FILES['book_img']['name'])){

                if (!$this->upload->do_upload('book_img')) {
                } else {

                    $uploadedFileData = $this->upload->data();
                    $randomName = md5(time()) . $uploadedFileData['file_ext'];
                    //rename uploaded image to our new image name
                    rename($uploadedFileData['full_path'], $uploadedFileData['file_path'] . $randomName);

                    $uploadedFileData["file_name"] = $path.$randomName;
//                            $uploadedFileData["file_name"] = $_FILES['imghome']['name'];
                    $books = array('title' => $this->input->post('book_name'),
                        'date_book' => $this->input->post('date'),
                        'page_number' => $this->input->post('page_number'),
                        'desc_book' => $this->input->post('txt'),
                        'img_book' => $path.$randomName,
//                        'author_id' => $this->input->post('author'),
                        'center' => $this->input->post('center_name'),
                        'activat_id' => 1,
                        'created_at' => $date);
                    $insert_id = $this->BooksModel->addBooks($books);
                    $arr=$this->input->post('author');
                    if($arr!=null) {
                        foreach ($arr as $ar) {
                            $is_exist = $this->AuthorModel->is_authorExist($ar);
                            if (count($is_exist) > 0)
                                $author = Array('book_id' => $insert_id,
                                    'author_id' => $ar);
                            else {
                                $data = Array('name' => $ar);
                                $author_id = $this->AuthorModel->addAuthor($data);
                                $author = Array('book_id' => $insert_id,
                                    'author_id' => $author_id);
                            }
                            $this->BooksModel->addAuthors($author);
                        }
                    }

                    redirect('admin/addBooks');
                }}
        }else{
            redirect('admin/login');
        }





    }


    public function updateBooks()
    {
        if ($this->session->userdata('user_id')) {
            $data['title'] = "تعديل كتاب";
            $this->load->helper(array('form','url'));
            $this->load->database();
            $this->load->library('form_validation');
            $id=$this->uri->segment(3);
            $authors = $this->AuthorModel->get_authors();
            $data ['Authors'] = $authors;
            $books = $this->BooksModel->get_books_id($id)[0];
            $data ['books'] = $books;
            $author_book= $this->BooksModel->get_books_authors($id);
            $data ['AUTHORS']=$authors;
            $data ['AUTHOR_BOOK']=$author_book;
            $this->load->view('admin/partial/header',$data);
            $this->load->view('admin/partial/aside-menu');
            $this->load->view('admin/pages/updateBooks');
            $this->load->view('admin/partial/footer');
        }else{
            redirect('admin/login');
        }

    }

    public function saveUpdateBooks(){

        if ($this->session->userdata('user_id')) {
            $this->load->helper(array('form', 'url'));
            $this->load->database();
            $this->load->library('form_validation');
            $path=path_img('imgBooks');
            date_default_timezone_set('Asia/Gaza');
            $date=date('Y-m-d H:i:s') ;
            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpg|png|jpeg|';
//            $config['max_size'] = '50000';
            $config['overwrite'] = TRUE;
            $this->load->library('upload', $config);
            $id = $this->uri->segment(3);
            $books = array('title' => $this->input->post('book_name'),
                'date_book' => $this->input->post('date'),
                'page_number' => $this->input->post('page_number'),
                'desc_book' => $this->input->post('txt'),
//                'author_id' => $this->input->post('author'),
                'center' => $this->input->post('center_name'),
                'activat_id' => 1,
                'updated_at' => $date);
            if (isset($_FILES['book_img']) && !empty($_FILES['book_img']['name'])) {

                if (!$this->upload->do_upload('book_img')) {
                } else {

                    $uploadedFileData = $this->upload->data();
                    $randomName = md5(time()) . $uploadedFileData['file_ext'];
                    rename($uploadedFileData['full_path'], $uploadedFileData['file_path'] . $randomName);
                    $uploadedFileData["file_name"] = $randomName;
                    $books['img_book'] = $path . $randomName;
                }
            }
                    $this->BooksModel->updateBooks($id,$books);
                     $this->BooksModel->delAuthors($id);

            $arr=$this->input->post('author');
            if($arr!=null) {
                foreach ($arr as $ar) {
                    $is_exist = $this->AuthorModel->is_authorExist($ar);
                    if (count($is_exist) > 0)
                        $author = Array('book_id' => $id,
                            'author_id' => $ar);
                    else {
                        $data = Array('name' => $ar);
                        $author_id = $this->AuthorModel->addAuthor($data);
                        $author = Array('book_id' => $id,
                            'author_id' => $author_id);
                    }
                    $this->BooksModel->addAuthors($author);
                }
            }
                    redirect('admin/dtableBooks');

        }
        else{
            redirect('admin/login');
        }
    }

    public function deleteBooks() {
        if ($this->session->userdata('user_id')) {
            $this->load->helper(array('form','url'));
            $this->load->database();
            $this->load->library('form_validation');
            $id = $this->input->post('deptID');

            $this->BooksModel->delBooks($id);
        }else{
            redirect('admin/login');
        }

    }



}
