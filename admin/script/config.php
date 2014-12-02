<?php
define('dbuser',"root");
define('dbpassw',"");
define('dbhost',"localhost");
define('dbname',"ideas");
//Подклюение к хосту курсов
/*define('dbuser',"st6");
define('dbpassw',"gcPrRyuc");
define('dbhost',"localhost");
define('dbname',"st6");*/
$link = mysql_connect(dbhost,dbuser,dbpassw) or die("Error " . mysqli_error($link));
mysql_select_db(dbname) or die("Не могу подключиться к базе.");
/*
$link = mysql_connect("localhost", dbuser, "")
or die("Could not connect: " . mysql_error());
print ("Connected successfully");
mysql_close($link);*/