<html>
<head>
    <title>GalkinSvyatoslav</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href='http://fonts.googleapis.com/css?family=Bad+Script&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
</head>
<body>
<?php
$a = array(1111,2,3,0,5,6,7,8);

function analog_min($array){
    if($array){

    sort($array);
    return $array[0];
    }
}
$min = analog_min($a);
echo '<br>'."Минимум".'<br>';
echo $min;

function analog_max($array){
    if($array){
        rsort($array);
        return $array[0];
    }
}
$max = analog_max($a);
echo '<br>'."Максимум".'<br>';
echo $max;

function array_count ($a)
{
    $i=0;
    foreach($a as $key)
    {
       $i++;
    }
    return $i;
}
echo '<br>'."ДО".'<br>';
var_dump($a);
echo '<br>' . "array_count" . '<br>';
$res = array_count($a);
echo $res;

function analog_pop($a){
        global $a;
        if($a){
        $d = array_count($a);
        unset($a[count($a)-1]);
        return $d;
        }
    else{return NULL;}
}
echo '<br>' . "analog_pop" . '<br>';
$res = analog_pop($a);
var_dump($res);


function analog_shift($a){
    global $a;
   if($a){
        $d = $a[0];
        for($i=0;$i<=array_count($a)-1;$i++)
        {
            $a[$i] = $a[$i+1];
        }
        unset($a[count($a)-1]);
        return $d;

   }
    else{
        return NULL;
    }
}
$res = analog_shift($a);
echo '<br>' . "Результат работы analog_shift" . '<br>';
var_dump($res);



function analog_push($array){
    $r = func_get_args();
    if($r){
        $count = count($array)-1;
        for($i=1;$i<=count($r)-1;$i++){
            $array[$count+$i] = $r[$i];
        }
    }
    echo '<br>' . "Результат работы analog_push" . '<br>';
    var_dump($array);
    return $array;
}
analog_push($a,"Lalalalla","asfafasfafsasf");

function analog_unshift($array){
    $r = func_get_args();
    if($r){
        $count = count($array)-1;
        $counti = count($r)-2;
        $arr = $array;
        $co = $count+$counti;
        for($i=0;$i<=$counti;$i++){
            $array[$i] = $r[$i+1];
        }
        for($i=0;$i<=$count;$i++){
            $array[$counti+$i] = $arr[$i];
        }
    }

    echo '<br>' . "Результат работы analog_unshift" . '<br>';
    var_dump($array);
    return $array;
}
analog_unshift($a,"asfsafasf","asdafsafsaf","asfafasfafsaf"); ?>
</body>
</html>



