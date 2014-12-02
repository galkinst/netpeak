<?php
require_once('script.php');
class comments
{
    // public $price;
    // public $count;
    public $data = array(
        "id_author" => NULL,
        "text" => NULL
    );
    public $errors=array();
    public function __construct($id,$text){
        $this->data['id_author']=$id;
        $this->data['text']=mysql_real_escape_string($text);
    }
    protected function validation($text){
        if (strlen($text)<5){
            $errors[]="Message too short";
            return false;
        }
        if(is_numeric($text)){
            $errors[]="Message cannot be only numeric";
            return false;
        }
        return true;
    }
    function saveToDb(){
        if($this->validation($this->data['text']))
        {
            if(count($this->errors)==0){
                session_start();
                $query = mysql_query("INSERT INTO comments(id_author,text) VALUES ('".$this->data['id_author']."', '".$this->data['text']."')");
                $_SESSION['success']= true;
                header("Location: feedback.php");
                die();
            }
            else{
                foreach($this->errors as $err){
                    echo $err;
                }

            }
        }
    }
    static function get_list()
    {
        $query = mysql_query("SELECT comments.id, login, text FROM comments LEFT JOIN users ON id_author = users.id");
        $rows = array();
        while($raw=mysql_fetch_assoc($query)){
            $rows[]=$raw;
        }
        return $rows;

    }
}