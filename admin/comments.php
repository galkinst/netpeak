
<?php
require('script/config.php');
include('script/script.php');
include('header.html');
$comments = comments_go();
echo '<div class="contentBody">';
if($comments)
{


    foreach($comments as $key)
    {
        echo '<div class="comments">';
            echo '<div class="comments_il">';
                echo $key['id'].'@'.$key["login"]." : ";
            echo '</div>';
            echo '<div class="comments_text">';
                echo $key["text"];
            echo '</div>';
            echo '<div class="delete">';
                echo '<a href="delete.php?id='.$key['id'].'" title="DESTROY"> <img src="img/close.png"/> </a>';
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
?>