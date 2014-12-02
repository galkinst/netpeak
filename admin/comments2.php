
<?php
include('script/script.php');
require_once('script/comments.class.php');
include('header.html');
$num = 5;
$page = $_GET['page'];
$result00 = mysql_query("SELECT COUNT(*) FROM comments");
$temp = mysql_fetch_array($result00);
$posts = $temp[0];
$total = (($posts - 1) / $num) + 1;
$total =  intval($total);
$page = intval($page);
if(empty($page) or $page < 0) $page = 1;
if($page > $total) $page = $total;
$start = $page * $num - $num;

$comment = comments::get_list();
echo '<div class="contentBody">';
foreach($comment as $comments){
    echo '<div class="comments">';
    echo '<div class="comments_il">';
    echo $comments['id'].'@'.$comments["login"]." : ";
    echo '</div>';
    echo '<div class="comments_text">';
    echo $comments["text"];
    echo '</div>';
    echo '<div class="delete">';
    echo '<a href="delete.php?id='.$comments['id'].'" title="DESTROY"> <img src="img/close.png"/> </a>';
    echo '</div>';
    echo '</div>';

}


if ($page != 1) $pervpage = '<a href=comments2.php?page=1><img src="img/first.png"/></a> | <a href=comments2.php?page='. ($page - 1) .'><img src="img/left.png"/></a> | ';

if ($page != $total) $nextpage = ' | <a href=comments2.php?page='. ($page + 1) .'><img src="img/right.png"/></a> | <a href=comments2.php?page=' .$total. '><img src="img/end.png"/></a>';

if ($total > 1)
{
    Error_Reporting(E_ALL & ~E_NOTICE);
    echo '<div class="pages">';
    echo $pervpage.$page.$nextpage;
    echo "</div>";
}



echo '</div>';


include('footer.html');
?>