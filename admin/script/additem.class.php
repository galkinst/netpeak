<?php
class additem {
    public $data = array(
        "title" => NULL,
        "description" => NULL,
        "price" => NULL,
        "image" => NULL,
        "descr_small" => NULL,
        "category" => NULL,
        "sale" => NULL
    );
    public $errors=array();
    public function __construct($title,$description,$price,$image,$descr_small,$category,$sale){
        $this->data['title']=$title;
        $this->data['description']=$description;
        $this->data['price']=$price;
        $this->data['image']=$image;
        $this->data['descr_small']=$descr_small;
        $this->data['category']=$category;
        $this->data['sale']=$sale;
    }
   static function saveImage($files){
        $extension = 'jpg';
        $filename = uniqid() . '.' . $extension;
        $image=move_uploaded_file($files["file"]["tmp_name"], "../img/" . $filename);
        return $filename;
    }
    protected function validation(){
        if (strlen($this->data['title'])<5){
            $errors[]="name too short";
        }
        if (strlen($this->data['description'])<55){
            $errors[]="description too short";
        }
        if (!is_numeric($this->data['price'])){
            $errors[]="Price must be numeric";
        }
        if (!is_numeric($this->data['category'])){
            $errors[]="You must choose the category";
        }
        if (strlen($this->data['descr_small'])<15){
            $errors[]="short description too short";
        }

    }
    public function saveToDB(){
        if(count($this->errors)==0){
            $query = mysql_query("INSERT INTO item(title,image,description,price,category_id,descr_small) VALUES ('".$this->data['title']."', '".$this->data['image']."','".$this->data['description']."', '".$this->data['price']."', '".$this->data['category']."', '".$this->data['descr_small']."')");
            header("Location:".$_SERVER['REQUEST_URI']);
            die();
        }
    }
    static function get_items($start, $num){
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
    public function update_item(){

    }

}