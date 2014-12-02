<?php
require('script/config.php');
include('script/script.php');
include('header.html');
?>
    <div class="contentBody">
        <div class="class="item_add">
        <form method="post">
            <br>
            <p>Add new category</p>
            <input type="text" name="category"/>
            <input class="submit" name="submit" type="submit" value="add category">
        </form>
    </div>
    </div>
<?include('footer.html');
?>