<?php session_start();
require_once('admin/script/script.php');

if(isset($_POST['submit'])) {
    # Вытаскиваем из БД запись, у которой логин равняеться введенному
		
    $data = mysql_fetch_assoc($query);
    //var_dump($_SESSION);
        if($data['passw'] === $_POST['password']) {
            $_SESSION['login'] = $data['login'];
            $_SESSION['id'] = $data['id'];
            //header("Location:".$_SERVER['REQUEST_URI']);

            /*setcookie("login", $data['login'], time()+3600);
            setcookie("id",$data['id'],time()+3600);*/
        }
     /*   else{
            echo "wrong login";
        }*/

}
?>
<!DOCTYPE HTML SYSTEM>
<html>
<head>
    <title>GalkinSvyatoslav</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="http://fonts.googleapis.com/css?family=Cuprum:400,700&amp;subset=latin,cyrillic" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>


</head>
<body>
<div class="header">
    <div class="logo">
        <p>Things need to buy</p>
    </div>

    <div class="login">
        <?php session_start();
        if(isset($_SESSION['login']))
        { ?>
            <div class="b-head__search">
            <p><?php echo $_SESSION['login']." ".'<a href="logout.php">'."logout".'</a>'; ?></p>
                <a href="#"> In cart items</a>
            </div>
        <?php
        }
        else
        {
        ?>
        <form method="post">

                    <input type="text" name="login" class="b-input b-input_search" placeholder="login">
                    <input type="password" name="password" class="b-input b-input_search" placeholder="password">

                    <button type="submit" class="submit" name="submit">login</button>


        </form>
        <?php } ?>
    </div>




</div>
<div class="nav">
    <div class="navigation">
        <?php if($_SERVER['PHP_SELF']=='/'.'index.php'){?> <div class="navi"><a href="index.php" class="navtext active">HOME &nbsp;</a></div> <?php }else {?>
            <div class="navi"><a href="index.php" class="navtext">HOME &nbsp;</a></div>
        <?php } ?>
        <?php if($_SERVER['PHP_SELF']=='/'.'about.php'){?> <div class="navi"><a href="about.php" class="navtext active">ABOUT &nbsp;</a></div> <?php }else {?>
            <div class="navi"><a href="about.php" class="navtext">ABOUT &nbsp;</a></div>
        <?php } ?>
        <?php if($_SERVER['PHP_SELF']=='/'.'partners.php'){?> <div class="navi"><a href="partners.php" class="navtext active">PARTNERS &nbsp;</a></div> <?php }else {?>
            <div class="navi"><a href="partners.php" class="navtext">PARTNERS &nbsp;</a></div>
        <?php } ?>
        <?php if($_SERVER['PHP_SELF']=='/'.'cataloge.php'){?> <div class="navi"><a href="cataloge.php" class="navtext active">CATALOGE &nbsp;</a></div> <?php }else {?>
            <div class="navi"><a href="cataloge.php" class="navtext">CATALOGE &nbsp;</a></div>
        <?php } ?>
        <?php if($_SERVER['PHP_SELF']=='/'.'feedback.php'){?> <div class="navi"><a href="feedback.php" class="navtext active">FEEDBACK &nbsp;</a></div> <?php }else {?>
        <div class="navi"><a href="feedback.php" class="navtext">FEEDBACK &nbsp;</a></div>
        <?php } ?>
        <?php if(is_admin()){?> <div class="navi"><a href="admin/" class="navtext"> ADMIN &nbsp;</a></div> <?php } ?>

    </div>
    <div class="b-head__searc">
        <form method="get" action="search.php" >
            <div class="b-search">
                <div class="b-search__input">
                    <input type="text" name="search" class="b-input b-input_search" placeholder="Search"/>
                </div>
                <div class="b-search__input">
                    <input type="submit"  class="b-button" value="GO"/>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="content">
    <div class="slider">
        <h1>Your's ADS </h1>
    </div>
    <div class="specialoffers"><a href="#"> <h2>SPECIAL OFFERS*</h2><p class="pcl">only who's can reed this text</p></a></div>
    <div class="sale"><a href="#" ><p class="pcl"> SALE UP TO 70%*</p><h3>only for people who can read this text and height over 190cm</h3></a></div>
    <div class="newarrivals"><h3>New Arrivals</h3></div>
    <div class="small">
        <a href="#"><div class="category" id="ca"><p>Sport</p></div></a>
        <a href="#"><div class="category" id="cc"><p>Business</p></div></a>
        <a href="#"><div class="category" id="cb"><p>Home</p></div></a>
    </div>
    <div class="appendixt"></div>