<?php
require('script/config.php');
include('script/script.php');
include('header.html');
$category = category_go();

echo '<div class="contentBody">';
if($category)
{


    foreach($category as $categories)
    {
        echo '<div class="comments">';
        echo '<div class="comments_text">';
        echo $categories['id'].'@'.$categories["name"]." : ";
        echo '</div>';
        echo '<div class="delete">';
        echo '<a href="delete.php?id='.$categories['id'].'" title="DESTROY"> <img src="img/close.png"/> </a>';
        echo '</div>';
        echo '</div>';
    }
    echo '<div class="pages">';
    echo '<a href="#" title="prev"> <img src="img/left.png"/> </a>';

    echo '<a href="#" title="next"> <img src="img/right.png"/> </a>';

    echo '</div>';

}
echo '</div>';

include('footer.html');