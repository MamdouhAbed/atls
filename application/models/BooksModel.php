<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BooksModel extends CI_Model  {


    public function addBooks($data)
    {

        $this->db->insert('books',$data);
        return $this->db->insert_id();

    }
    public function get_books_authors($id)
    {

        $this->db->select('*');
        $this->db->from('author_books');
        $this->db->where('book_id', $id);
        $query = $this->db->get();
        return $query->result();
    }
    public function delAuthors($id){


        $this -> db -> where('book_id', $id);
        $this -> db -> delete('author_books');
    }
    public function get_book_authors()
    {
        $id=$this->uri->segment(2);
        $this->db->select('author_books.* , author.id author_id, author.name name_author, author.img img_author  ');
        $this->db->from('author_books');
        $this->db->where('author_books.book_id', $id);
        $this->db->join('author', 'author_books.author_id = author.id');
        $query = $this->db->get();
        return $query->result();
    }
    public function get_books($limit,$id)
    {
        $this->db->select('books.*');
        $this->db->from('books');
//        $this->db->join('author', 'author.id = books.author_id');
        $this->db->limit($limit,$id);
        $this->db->order_by("id" , "desc");
        $query = $this->db->get();
        return $query->result();
    }
    public function get_books_panel()
    {
        $this->db->select('books.*');
        $this->db->from('books');
//        $this->db->join('author', 'author.id = books.author_id');
        $this->db->order_by("id" , "desc");
        $query = $this->db->get();
        return $query->result();
    }
    public function get_books_id($id)
    {
        $this->db->select('*');
        $this->db->where('id', $id);
        $this->db->from('books');
        $query = $this->db->get();
        return $query->result();
    }
    public function addAuthors($data)
    {

        $this->db->insert('author_books',$data);
        return $this->db->insert_id();
    }

    public function updateBooks($id,$data)
    {
//
        $this->db->where('id', $id);
        $this->db->update('books',$data);
    }

    public function delBooks($id){


        $this -> db -> where('id', $id);
        $this -> db -> delete('books');
    }


}