<?php
require('script/config.php');
include('script/script.php');
require_once('script/additem.class.php');
include('header.html');
$num = 5;
$page = $_GET['page'];
$result00 = mysql_query("SELECT COUNT(*) FROM item ");
$temp = mysql_fetch_array($result00);
$posts = $temp[0];
$total = (($posts - 1) / $num) + 1;
$total =  intval($total);
$page = intval($page);
if(empty($page) or $page < 0) $page = 1;
if($page > $total) $page = $total;
$start = $page * $num - $num;



$item = additem::get_items($start,$num);

if($item)
{

    echo '<div class="contentBody">';
    foreach($item as $items)
    {?>
        <div class="catalog_item">
            <div class="catalog_img"><img src="/img/<?php echo $items['image']; ?>"class="round"/></div>
            <div class="catalog_title"><?php echo get_category($items['category_id']).":".$items['title'].":".$items['price']."$"; ?></div>

            <div class="catalog_description"><?php echo '<p>'.$items['descr_small'].'</p>'; ?></div>
            <div class="delete">
                <a href="delete.php?item=<? echo $items['id'];?> " title="DESTROY"> <img src="img/close.png"/> </a>
            </div>
            <div class="delete">
                <a href="update.php?item=<? echo $items['id'];?> " title="UPDATE"> <img src="img/update.png"/> </a>
            </div>
        </div>
    <?php
    }
    if ($page != 1) $pervpage = '<a href=item.php?page=1><img src="img/first.png"/></a> | <a href=item.php?page='. ($page - 1) .'><img src="img/left.png"/></a> | ';

    if ($page != $total) $nextpage = ' | <a href=item.php?page='. ($page + 1) .'><img src="img/right.png"/></a> | <a href=item.php.php?page=' .$total. '><img src="img/end.png"/></a>';

    if ($total > 1)
    {
        Error_Reporting(E_ALL & ~E_NOTICE);
        echo '<div class="pages">';
        echo $pervpage.$page.$nextpage;
        echo "</div>";
    }

    echo '</div>';

}

include('footer.html');