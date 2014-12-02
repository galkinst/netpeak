<?php
require('script/config.php');
include('script/script.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    delete_comment($id);
}
if(isset($_GET['item']))
{
    $id = $_GET['item'];
    delete_item($id);
}
if(isset($_GET['category']))
{
    $id = $_GET['category'];
    delete_category($id);
}
header('Location:'.$_SERVER['HTTP_REFERER']);