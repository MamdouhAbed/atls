<?php

class NewsModel extends CI_Model {

//new_function
//

 public function get_all_news($off,$txt)
    {
        $this->db->select(' DISTINCT(img) img,id,title');
        if($txt!=null && $txt != '')
        $this->db->like('title',$txt);
        $this->db->order_by("id","desc");
        $this->db->from('news');
        $this->db->limit(18,$off);
        $query = $this->db->get();
        return $query->result();
    }
    public function get_all_news2($off,$txt,$arr)
    {
        $this->db->select(' DISTINCT(img) img,id,title');
        if($txt!=null && $txt != '')
           // $this->db->like('title',$txt);
            $this->db->where('more_news',1);
        $this->db->where_not_in('news.id',$arr);
        $this->db->order_by("id","desc");
        $this->db->from('news');

        $this->db->limit(8,$off);

        $query = $this->db->get();
        return $query->result();
    }

 public function get_all_news_rss()
    {
        $this->db->select('news.id,news.title,news.img,news.post_brief,news.created_at,category.cat_name');
        $this->db->order_by("id","desc");
        $this->db->from('news');
        $this->db->join('category', 'category.id = news.category_id' , 'left');
        $this->db->limit(35);
        $query = $this->db->get();
        return $query->result();
    }
  
    public function get_news_last_subject()
    {
        $this->db->select('id,img,title');
        $this->db->order_by("id","desc");
        $this->db->from('news');
        $this->db->limit('2');
        $query = $this->db->get();
        return $query->result();
    }


    public function get_news_where_cat_pen()
    {
        $id=$this->uri->segment(2);
        $this->db->select('author.id,author.img person_img, author.name person_name');
        $this->db->from('news');
        $this->db->join('author', 'author.id = news.author_id' , 'left');
        $this->db->where('author.id', $id);
        $query = $this->db->get();
        return $query->row();
    }


    //get post details where id
    public function get_post_details()
    {
        $id=$this->uri->segment(2);
        $this->db->select('news.* ,author.name auto_name, author.img auto_img, follow_sites.title site_name, follow_sites.link site_link');
        $this->db->join('author', 'author.id = news.author_id'  , 'left');
        $this->db->join('follow_sites', 'follow_sites.id = news.news_source_id'  , 'left');
        $query = $this->db->get_where('news', array('news.id' => $id));
        $news=$query->row();

        if($news != null){
            $data=array('news.view_count'=>$news->view_count+1);
            $this->db->where('news.id', $id);
            $this->db->update('news',$data);
        }
        return $news;
    }

    //get news img where id
    public function get_post_img()
    {
        $id=$this->uri->segment(2);
        $this->db->select('name , post_id');
        $this->db->from('post_img');
        $this->db->where('post_id', $id);
        $query = $this->db->get();
        return $query->result();
    }

    //get news video where id
    public function get_post_video()
    {
        $id=$this->uri->segment(2);
        $this->db->select('* , SUBSTRING(link, -11) as video');
        $this->db->from('post_video');
        $this->db->where('post_id', $id);
        $query = $this->db->get();
        return $query->result();
    }



////////////////////////////////////////////////////////////////////////////////



    public function more_news_limit12($arr)
    {

        $this->db->select('news.*, category.id cat_id , category.cat_name , category.color');
        $this->db->limit('7');
        $this->db->order_by("news.id","desc");
        $this->db->from('news');
        $this->db->join('category', 'category.id = news.category_id');
        $this->db->where_not_in('news.id',$arr);
        $this->db->where_not_in('category.id',19);
        $this->db->where('more_news',1);
        $query = $this->db->get();
        return $query->result();
    }

    public function more_news($limit, $id)
    {
        $this->db->select('news.*, category.id cat_id , category.cat_name , category.color');
//        $this->db->limit(6, 5);
        $this->db->order_by("news.id","desc");
        $this->db->from('news');
        $this->db->limit($limit,$id);
        $this->db->join('category', 'category.id = news.category_id');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_news_where_category($limit,$id)
    {
        $category_id=$this->uri->segment(2);
        $this->db->select('news.*, category.cat_name');
        $this->db->limit($limit,$id);
        $this->db->order_by("news.id","desc");
        $this->db->where("category_id", $category_id);
        $this->db->from('news');
        $this->db->join('category', 'category.id = news.category_id');
        $query = $this->db->get();
        return $query->result();
    }

    public function count_news_where_category()
    {
        $category_id=$this->uri->segment(2);
        $this->db->select('count(*) count');
        $this->db->from('news');
        $this->db->where("category_id", $category_id);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_news_authors()
    {
        $id=$this->uri->segment(2);
        $this->db->select('author_news.* , author.id author_id, author.name name_author, author.img img_author  ');
        $this->db->from('author_news');
        $this->db->where('news_id', $id);
        $this->db->join('author', 'author_news.author_id = author.id');
        $query = $this->db->get();
        return $query->result();
    }
  
    //get news tags
    public function get_news_tags()
    {
        $id=$this->uri->segment(2);
        $this->db->select('tag_news.* , tags.id tag_id, tags.name name2  ');
        $this->db->from('tag_news');
        $this->db->where('news_id', $id);
        $this->db->join('tags', 'tag_news.tag_id = tags.id');
        $query = $this->db->get();
        return $query->result();
    }


    //get news tags
    public function get_tags()
    {
        $this->db->select('*');
        $this->db->order_by("id","desc");
        $this->db->limit('12');
        $this->db->from('tags');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_tags_add_news()
    {
        $this->db->select('*');
        $this->db->order_by("id","desc");
        $this->db->from('tags');
         $this->db->limit('60');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_tag_name()
    {
        $id=$this->uri->segment(2);
        $this->db->select('name');
        $this->db->from('tags');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result();
    }

    //get news by tags
    public function get_news_by_tags($limit,$start)
    {
        $id=$this->uri->segment(2);
        $this->db->select('tag_news.* , news.*, category.id cat_id , category.cat_name ');
        $this->db->from('tag_news');
        $this->db->order_by("news.id","desc");
        $this->db->limit($limit,$start);
        $this->db->where('tag_id', $id);
        $this->db->join('news', 'tag_news.news_id = news.id');
        $this->db->join('category', 'category.id = news.category_id');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_count_news_by_tags()
    {
        $id=$this->uri->segment(2);
        $this->db->select('count(*) count ');
        $this->db->from('tag_news');
        $this->db->where('tag_id', $id);
        $query = $this->db->get();
        return $query->result();
    }

    //get max count news
    public function get_news_max_count()
    {
        $this->db->select('news.*, category.id cat_id , category.cat_name');
        $this->db->order_by("view_count","desc");
        $this->db->from('news');
        $this->db->limit('4');
        $this->db->join('category', 'category.id = news.category_id');
        $query=$this->db->get();
        return $query->result();
    }



        //get max count news where category
    public function get_news_where_count($category_id)
    {   $this->load->helper('helper1');
        $id=$this->uri->segment(2);
       return get_news_where_count2($category_id,10,$id,$this->db);
    }


    public function get_news_read_more($category_id)
    {   $this->load->helper('helper1');
        $id=$this->uri->segment(2);
        $arr=get_news_where_count2($category_id,10,$id,$this->db);
        $arr2=$this->get_last_news();

        $this->db->select('*');
        $this->db->order_by("id","desc");
        $this->db->limit("6");
        $this->db->where("category_id", $category_id);
        $this->db->where('id <>' ,$id);
//        if(count($arr)>0)
//        $this->db->where('id <>',$arr[0]->id);
//        if(count($arr)>1)
//        $this->db->where('id <>',$arr[1]->id);
//        if(count($arr)>2)
//        $this->db->where('id <>',$arr[2]->id);
//        if(count($arr)>3)
//        $this->db->where('id <>',$arr[3]->id);
//        if(count($arr2)>0)
//        $this->db->where('id <>',$arr2[0]->id);
//        if(count($arr2)>1)
//        $this->db->where('id <>',$arr2[1]->id);
//        if(count($arr2)>2)
//        $this->db->where('id <>',$arr2[2]->id);
//        if(count($arr2)>3)
//        $this->db->where('id <>',$arr2[3]->id);
        $this->db->from('news');
        $query=$this->db->get();
        return $query->result();
    }


    //get news ticker
    public function get_news_ticker()
    {
        $this->db->select('id , title');
        $this->db->order_by("id","desc");
        $this->db->from('news');
        $this->db->limit("10");
        $this->db->where('news_ticker_id', 1);
        $query=$this->db->get();
        return $query->result();
    }

    //get last news
    public function get_last_news()
    {
        $this->db->select('news.*, category.cat_name , category.color');
        $id=$this->uri->segment(2);
        $this->db->order_by("news.id","desc");
        $this->db->where('news.id <>' , $id);
        $this->db->where('category.id <>' , 19);
        $this->db->from('news');
        $this->db->join('category', 'category.id = news.category_id');
        $query=$this->db->get();
        return $query->result();
    }

    //get last news and break
//    public function get_last_news_break()
//    {
//        $query= $this->db->query("select a.* from ((select id,title text,created_at,1 type from
//news) union (select id,text,created_at,2 type from breaknews))
//a order by a.created_at desc");
//        //$this->db->get();
//        return $query->result();
//    }

    public function get_last_news_ticker()
    {
        $query= $this->db->query("select a.* from ((select id,title text,created_at,1 type from 
news WHERE news_ticker_id='1') union (select id,title_ticker text,created_at,2 type from news_ticker)) 
a order by a.created_at desc");
        //$this->db->get();
        return $query->result();
    }
    //get news slider
    public function get_slider_news($val)
    {
        $this->db->select('news.*, category.cat_name , category.id cat_id , category.color' );
        $this->db->order_by("id","desc");
        $this->db->from('news');
        $this->db->limit($val);
        $this->db->where('show_home_id', 1);
        $this->db->join('category', 'category.id = news.category_id' , 'left');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_pin_home()
    {
        $this->db->select('news.*, category.cat_name , category.id cat_id , category.color ');
        $this->db->order_by("id","desc");
        $this->db->from('news');
//        $this->db->where('show_home_id', 1);
        $this->db->where('pin_home', 1);
        $this->db->join('category', 'category.id = news.category_id' , 'left');
        $query = $this->db->get();
        return $query->row();
    }

    public function get_slider_news_2()
    {
        $get_pin_home=$this->get_pin_home();

        $this->db->select('news.*, category.cat_name , category.id cat_id , category.color ');
        $this->db->order_by("id","desc");
        $this->db->from('news');
        $this->db->where('show_home_id', 1);
        $this->db->where('news.id !=', $get_pin_home->id);
        $this->db->limit(4);
        $this->db->join('category', 'category.id = news.category_id' , 'left');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_slider_news_id($val)
    {
        $this->db->select('id');
        $this->db->order_by("id","desc");
        $this->db->from('news');
        $this->db->limit($val);
        $this->db->where('show_home_id', 1);
        $query = $this->db->get();
        return $query->result();
    }
//select id from news where show_home_id = 1 order by id desc limit 5

//get news where category
    public function get_news_where_cat_special()
    {
        $this->db->select('news.*, category.id cat_id , category.cat_name');
        $this->db->order_by("id","desc");
        $this->db->from('news');
        $this->db->limit('9');
        $this->db->where('category_id', 2);
        $this->db->join('category', 'category.id = news.category_id' , 'left');
        $query = $this->db->get();
        return $query->result();
    }


public function get_news_where_cat_most_read($cat_id)
    {
        $this->load->helper('helper1');
        return get_news_where_cat_most_read1($cat_id,10,$this->db);
    }

    //get news where category
    public function get_news_where_cat($cat_id,$arr)
    {
//        $this->load->helper('helper1');
//        $arr= get_news_where_cat_most_read1($cat_id,10,$this->db);
        $this->db->select('id,img,title');
        $this->db->order_by("id","desc");
        $this->db->from('news');
        $this->db->limit('4');
        $this->db->where('category_id',$cat_id);
        $this->db->where_not_in('news.id',$arr);
//        if(count($arr)>0)
//        $this->db->where('id <>',$arr[0]->id);
//        if(count($arr)>1)
//        $this->db->where('id <>',$arr[1]->id);
        $query = $this->db->get();
        return $query->result();
    }
    public function get_news_where_cat_studies($arr)
    {

        $this->db->select('id,img,title');
        $this->db->order_by("id","desc");
        $this->db->from('news');
        $this->db->limit('6');
        $this->db->where('category_id',3);
        $this->db->where_not_in('news.id',$arr);
        $query = $this->db->get();
        return $query->result();
    }
    public function get_news_where_cat_seminars()
    {
        $this->db->select('*');
        $this->db->order_by("created_at","desc");
        $this->db->from('news');
        $this->db->where('category_id',26);
        $query = $this->db->get();
        return $query->row();
    }
    //get news img where category seminars
    public function get_post_img_seminars()
    {
        $get_img_sem_home=$this->get_news_where_cat_seminars();
        $this->db->select('name , post_id');
        $this->db->from('post_img');
        $this->db->order_by("id","desc");
        $this->db->where('post_id',  $get_img_sem_home->id);
        $query = $this->db->get();
        return $query->result();
    }

    //get news video where category seminars
    public function get_post_video_seminars()
    {
        $get_video_sem_home=$this->get_news_where_cat_seminars();
        $this->db->select('* , SUBSTRING(link, -11) as video');
        $this->db->from('post_video');
        $this->db->order_by("id","desc");
        $this->db->where('post_id', $get_video_sem_home->id);
        $query = $this->db->get();
        return $query->row();
    }

    //get news where category pal-center
    public function get_news_where_cat_center()
    {
        $this->db->select('id,img,title,post_brief');
        $this->db->order_by("id","desc");
        $this->db->from('news');
        $this->db->limit('5');
        $this->db->where('category_id', 19);
        $query = $this->db->get();
        return $query->result();
    }

}