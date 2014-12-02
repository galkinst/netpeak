<?php
$homework = array(
    "проектирование"=>array("практика","разработка архитетуры","дипломная часть"),
    "психология"=>array("психология личности","метод Брауни","гипноз"),
    "физ-ра"=>array("широчайшие мышцы","жим и тяга","гиперглютен и метаболизм"),
    "php"=>array("ООП","GIT","анонимные функции"),
    "мат.анализ"=>array("дифуры","интегралы","теорема Буле"),
    "субд"=>array("Join","множество селеткктов","архитектура СУБД"),
    "тер.вер"=>array("не 21 обычно губит","а к 11 туз","50:50"),
    "экономика"=>array("конкурентная среда","миллион как средство","миллиард как цель"),
    "обж"=>array("Життя, Вася, как вещь","А мое слово, которое","Жить как живешь"));
/*Массивы с днями неделями, содержат ключи, для вывода инфы из общего массива уроков и занятия $lesson*/
$lesson = array("проектирование","психология","физ-ра","php","мат.анализ","субд","тер.вер","экономика","обж");

function homework_array($daynumber){
        $array = array();
        global $lesson;
        global $homework;
        $rand = array_rand($homework[$lesson[$daynumber]]);
        $array[0] = $lesson[$daynumber];
        $array[1] = $homework[$lesson[$daynumber]][$rand];
        return $array;
}

function week($i){
    $c = date ( "l" , mktime ( 0 , 0 , 0 , date ( "m" ), 10 +$i));
    $dm = date ( "d.m" , mktime ( 0 , 0 , 0 , date ( "m" ), 10 +$i));
    $day = array();
    switch($c){
        case "Monday":
            $day[0] = "Понедельник";
            $day[1] = $dm;
            break;
        case "Tuesday":
            $day[0] = "Вторник";
            $day[1] = $dm;
            break;
        case "Wednesday":
            $day[0] = "Среда";
            $day[1] = $dm;
            break;
        case "Thursday":
            $day[0] = "Четверг";
            $day[1] = $dm;
            break;
        case "Friday":
            $day[0] = "Пятница";
            $day[1] = $dm;
            break;
        case "Saturday":
            $day[0] = "Суббота";
            $day[1] = $dm;
            break;
        default:
            break;
    }
    return $day;
}
function month(){
    $mon = date ( "M" , mktime ( 0 , 0 , 0 , date ( "m" )));
    switch($mon){
        case "Nov":
            $d = "Ноябрь";
            break;

        default:
            $d = "Месяц";
            break;
    }
    return $d;
}



