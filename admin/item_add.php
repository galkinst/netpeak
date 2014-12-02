<?php
include('script/script.php');
require_once('script/additem.class.php');
if(isset($_POST['submit1'])) {
    $item = new additem($_POST['title'],$_POST['description'],$_POST['price'],additem::saveImage($_FILES),$_POST['descr_small'],$_POST['select_box'],0);
    $item->saveToDB();
    //$query = mysql_query("INSERT INTO item(title,description,price,category_id,descr_small) VALUES ('".$_POST['title']."', '".$_POST['description']."', '".$_POST['price']."', '".$_POST['select_box']."', '".$_POST['descr_small']."')");
    //$query = mysql_query("INSERT INTO item(title,description,price,category_id,descr_small) VALUES ('D','1','2','2','3')");
   /* $extension = 'jpg';
    $filename = uniqid() . '.' . $extension;
    $image=move_uploaded_file($_FILES["file"]["tmp_name"], "../img/" . $filename);
    $query = mysql_query("INSERT INTO item(title,image,description,price,category_id,descr_small) VALUES ('".$_POST['title']."', '".$filename."','".$_POST['description']."', '".$_POST['price']."', '".$_POST['select_box']."', '".$_POST['descr_small']."')");
    $image;*/


}
    $category = category_go();
include('header.html');
?>
<div class="contentBody">
    <div class="class="item_add">
        <form method="post" enctype="multipart/form-data">
            <div class="half">
                <input type="text" name="title" placeholder="title">
                <input type="text" name="price" placeholder="price $" size="5"/>
                <select name="select_box">
                    <?
                    foreach($category as $categories)
                    {
                        echo ' <option value='.$categories['id'].'>'.$categories['name'].'</option>';
                    }

                    ?>
                </select>
                <input type="file" name="file" >
                <input class="submit" name="submit1" type="submit" value="add item">
        </div>
            <div class="half">
                <textarea id="descr_small" name="descr_small" placeholder="small description"></textarea>
                <textarea name="description" placeholder="full description"></textarea>
            </div>
</form>
</div>
    </div>
<?include('footer.html');
?>