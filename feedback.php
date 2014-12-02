<?php
require_once('admin/script/script.php');
function __autoload($className){
    require_once('admin/script/'.$className.'.class.php');
}
    if(isset($_POST['submit1']))
    {
        session_start();
    $message = new comments($_SESSION['id'],$_POST['message']);
    $message->saveToDb();
}
include('header.php');
?>


		<div class="title"> <p class="navtext"> FEEDBACK</p></div>
			<div class="body">
                <?php
                if(isset($_SESSION['login']))
                {
                    if($_SESSION['success']){
                        echo '<h1>'. "Thank you for your's feedback" .'</h1>';
                        unset($_SESSION['success']);
                    }


    ?>
				<form method="post" action="feedback.php">

					<label>Name: <?php echo $_SESSION['login']; ?></label>



					<label>Message</label>
					<textarea name="message" placeholder="Type Here"></textarea>

					<input class="submit" name="submit1" type="submit" value="Send feedback">
				
				</form>
                <?php }
                else {?>
                <h1>Please, sign up to add feedback</h1>
                <?php }
//output comments if they are:
                ?>
			</div>
        <?php
        $comments =  comments::get_list();
		if($comments)
{


    foreach($comments as $key)
    {
        echo '<div class="comments">';
        echo '@'.$key["login"]." : ";
        echo $key["text"];
        echo '</div>';
    }

}


?>
		</div>
<?php
    include('footer.php');
?>