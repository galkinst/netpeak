<?php
include('header.php');
require_once('admin/script/additem.class.php');

$num = 3;
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

/*$result = mysql_query("SELECT comments.id, login, text FROM comments LEFT JOIN users ON id_author = users.id LIMIT $start, $num");
$row = mysql_fetch_array($result);*/
$item = additem::get_items($start,$num);
?>
    <div class="appendixt"></div>
    <div class="title">      <div class="navi_category navi_category_text">    Chose Idea for: &nbsp;&nbsp;</div>
        <div class="navi_category"><a href="partners.html" class="navi_category_text">business &nbsp;</a></div>
        <div class="navi_category"><a href="feedback.html" class="navi_category_text">home &nbsp;</a></div>
        <div class="navi_category"><a href="cataloge.html" class="navi_category_text">sport &nbsp;</a></div>
    </div>
    <div class="appendixt"></div>
        <?php if($item)
            {
                foreach($item as $items)
                {?>
                    <div class="catalog_item">

                        <div class="catalog_img"><img src="img/<?php echo $items['image']; ?>"/></div>
                        <div class="catalog_title"> <a href="page.php?id=<?php echo $items['id'];?>"> <?php echo $items['title']; ?></a> </div>
                        <div class="catalog_description"><?php echo $items['description']; ?></div>
                        <div class="catalog_pb">
                            <div class="price"> <?php echo $items['price']."$"; ?></div>
                            <div class="button">BUY</div>
                        </div>

                    </div>
                <?php
                }
            }
if ($page != 1) $pervpage = '<a href=cataloge.php?page=1><img src="img/first.png"/></a> | <a href=cataloge.php?page='. ($page - 1) .'><img src="img/left.png"/></a> | ';

if ($page != $total) $nextpage = ' | <a href=cataloge.php?page='. ($page + 1) .'><img src="img/right.png"/></a> | <a href=cataloge.php?page=' .$total. '><img src="img/end.png"/></a>';

if ($total > 1)
{
    Error_Reporting(E_ALL & ~E_NOTICE);
    echo '<div class="pages">';
    echo $pervpage.$page.$nextpage;
    echo "</div>";
}
    ?>



		</div>
<?php
include('footer.php');
?>