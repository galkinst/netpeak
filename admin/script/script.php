<?php
require('config.php');

function is_admin(){
    if($_SESSION['login']=="admin")
    {return true;}
    else
    {return false;}
}
function default_image($img){
    if($img== NULL){
        $img="default.png";
        return $img;
    }
    else return $img;
}
function items_go($start, $num){
    $query = mysql_query("SELECT * FROM  `item` LIMIT $start, $num");
    $data = array();
    while($raw=mysql_fetch_assoc($query)){
        if($raw['image']== NULL){
            $raw['image']="default.png";
        }
        $data[]=$raw;
    }
    return $data;
}
function delete_comment($id){
    if(isset($id) && is_numeric($id))
    {
    $query = mysql_query("delete from comments where id=$id") or die(mysql_error());
    }
}
function delete_item($id){
    if(isset($id) && is_numeric($id))
    {
        $query = mysql_query("delete from item where id=$id") or die(mysql_error());
    }
}
function delete_category(){
    if(isset($id) && is_numeric($id))
    {
        $query = mysql_query("delete from category where id=$id") or die(mysql_error());
    }
}
function category_go(){
    $query = mysql_query("SELECT * FROM  `category`");
    $data = array();
    while($raw=mysql_fetch_assoc($query)){
        $data[]=$raw;
    }
    return $data;
}
function get_category($id){
    if(is_numeric($id)){
        $query = mysql_query("SELECT * FROM category WHERE id= " . mysql_real_escape_string($id) );
        $data = mysql_fetch_assoc($query);
        return $data['name'];
    }
}
/* Дописать с приходом знаний
 * class pagination {
    public $num_per_page =5;
    public $page;
    public $table;
    public function __construct($num_per_page, $page, $table) {
        $this->num_per_page = $num_per_page;
        $this->page = $page;
        $this->table = $table;
    }
    public function page_go(){
        $data = array();
        $result00 = mysql_query("SELECT COUNT(*) FROM $this->table");
        $temp = mysql_fetch_array($result00);
        $posts = $temp[0];
        $total = (($posts - 1) / $this->num_per_page) + 1;
        $total =  intval($total);
        $page = intval($this->page);
        if(empty($page) or $page < 0) $page = 1;
        if($page > $total) $page = $total;
        $start = $page * $this->num_per_page - $this->num_per_page;
        $data['page'] = $page;
        $data['total'] = $total;
    }

}*/