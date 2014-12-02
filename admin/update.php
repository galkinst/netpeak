<?php
require('script/config.php');
include('script/script.php');
include('header.html');
$query = mysql_query("SELECT * FROM item WHERE id= " . mysql_real_escape_string($_GET['item']) . " LIMIT 1");
$data = mysql_fetch_assoc($query);
$category = category_go();

?>
    <div class="contentBody">
        <div class="class="item_add">
        <form method="post">
            <div class="half">
                <input type="text" name="title" value=".<?echo $data['title'];?>">
                <input type="text" name="price" value="<?echo $data['price'];?>" size="5"/>
                <select name="select_box">
                    <?
                    foreach($category as $categories)
                    {
                        if($data['category_id']==$categories['id']){
                            echo ' <option selected>'.$categories['name'].'</option>';
                        }
                        else{
                            echo ' <option>'.$categories['name'].'</option>';
                        }
                    }

                    ?>
                </select>
                <input type="file" name="file"> <? if (!$_POST['file']){echo '<label>'.$data['image'].'</label>';}?>
                <input class="submit" name="submit1" type="submit" value="add item">
            </div>
            <div class="half">
                <textarea id="descr_small" name="descr_small" value="small description"><?echo $data['descr_small'];?></textarea>
                <textarea name="description" ><?echo $data['description'];?></textarea>
            </div>
        </form>
    </div>
    </div>
<?include('footer.html');
?>