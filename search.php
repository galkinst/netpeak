<?php
include('header.php');
require('admin/script/config.php');

if(!isset($_GET['search']))
{
    header('Location:index.php');
}
$query = mysql_query("SELECT * FROM item WHERE title LIKE '%" . mysql_real_escape_string($_GET['search']) . "%' LIMIT 1");
$items = mysql_fetch_assoc($query);
?>

<div class="appendixt"></div>
    <div class="title">      <div class="navi_category navi_category_text">    Chose Idea for: &nbsp;&nbsp;</div>
        <div class="navi_category"><a href="partners.html" class="navi_category_text">business &nbsp;</a></div>
        <div class="navi_category"><a href="feedback.html" class="navi_category_text">home &nbsp;</a></div>
        <div class="navi_category"><a href="cataloge.html" class="navi_category_text">sport &nbsp;</a></div>
    </div>
    <div class="appendixt"></div>
        <?php if($items)
    {
       /* foreach($data as $items)
        {*/?>
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
       // }
    }
        else {
            echo '<div class="body"><h1>'."We can't find ".$_GET['search'].'</h1></div>';
        }?>
		</div>

<?include('footer.php');?>
