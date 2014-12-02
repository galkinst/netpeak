<?php
$a = array(1,2,3,4,5);
$b = array("home1");
$i = 1;

function ar($a)
{
    switch ($a){
        case '1':
        case '2':
        echo "Значение меньше 3";
        break;
        case '3':
        default:
            echo"Зачение овер 3";
            break;

}
}
ar(10);
