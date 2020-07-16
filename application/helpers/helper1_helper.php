<?php
function get_Authors_books($book)
{
    $CI =& get_instance();
    $db=$CI->db;
    $db->select('author_books.* , author.id author_id, author.name name_author, author.img img_author  ');
    $db->from('author_books');
    $db->where('author_books.book_id', $book);
    $db->join('author', 'author_books.author_id = author.id');
    $query = $db->get();
    return $query->result();
}
 function get_news_where_book($book)
{
    $CI =& get_instance();
    $db=$CI->db;
    $db->select('news.id, news.title, news.book_id');
    $db->where('news.book_id', $book);
    $db->from('news');
    $db->join('books', 'books.id = news.book_id');
    $query = $db->get();
    return $query->result();


}
//get max count news where category
 function get_news_where_count2($category_id,$count,$id,$db)
{

    $db->select('*');
    $db->order_by("view_count","desc");
    $db->where("category_id", $category_id);
    $db->where('id <>' ,$id);
    $db->limit("3");
    $db->where('created_at BETWEEN DATE_SUB(CURDATE(), INTERVAL '.$count.' DAY) AND NOW()');
//        $this->db->where('CAST( created_at AS DATE ) > DATEADD( DAY, -7, CAST( GETDATE() AS DATE )');
    $db->from('news');
    $query=$db->get();
    $result=$query->result();
    if(count($result)>2 || $count ==90) {

        return $result;
    }else
        return get_news_where_count2($category_id,$count+10,$id,$db);
}


 function get_news_where_cat_most_read1($cat_id,$count,$db)
{

    $db->select('id,img,title,view_count');
    $db->order_by("view_count","desc");
    $db->limit('2');
    $db->where('category_id',$cat_id);
    $db->where('created_at BETWEEN DATE_SUB(CURDATE(), INTERVAL '.$count.' DAY) AND NOW()');
    $db->from('news');
    $query=$db->get();
    $result=$query->result();
    if(count($result)>1 || $count ==90) {

        return $result;
    }else
        return get_news_where_cat_most_read1($cat_id,$count+10,$db);
}

function path_img($sub_folder) {
$path = "./admin-assets/uploads/".$sub_folder."/";

$year_folder = $path . date("Y");
$month_folder = $year_folder . '/' . date("m");
$day_folder= $month_folder.'/'. date("d");
!file_exists($year_folder) && mkdir($year_folder , 0777);
!file_exists($month_folder) && mkdir($month_folder, 0777);
!file_exists($day_folder) && mkdir($day_folder, 0777);

$path = $day_folder . '/' ;

    return $path;
};