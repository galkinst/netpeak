<?php include ("code.php"); ?>
<html>
<head>
    <title>GalkinSvyatoslav</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href='http://fonts.googleapis.com/css?family=Bad+Script&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="header">
<div id="empty">&nbsp;</div>
<div class="month"><?php echo month(); ?></div>
<div class="month">Ноябрь</div>
</div>
<div class="content">
    <div id="monday">
        <p> 1s</p>
        <div class="day daydeg">
            <?php $day = week(0); echo '<p>'. '&nbsp;'. $day[0] .'&nbsp;'. $day[1] .'</p>' ?>
        </div>
        <div class="lesson">
            <?php
            $round = array();
            for($i=0;$i<4;$i++){
                $round[$i] = rand(0,count($lesson)-1);
                $res = homework_array($round[$i]);
                echo '<p>'.$res[0].'</p>';
            }
            ?>
        </div>
        <div class="homework">

            <?php
            $start_time = "08:00";
            $lessons_time = strtotime("01:00")-strtotime("00:00:00");
            $time_between_lessons = strtotime("00:15")-strtotime("00:00:00");
            for($i=0;$i<4;$i++){
                $res = homework_array($round[$i]);
                echo '<p>'. $res[1]. '&nbsp;'. $start_time . "-". date("H:i",strtotime($start_time)+$lessons_time).'</p>' ;
                $start_time = date("H:i",strtotime($start_time)+$lessons_time+$time_between_lessons);
            }
            ?>
        </div>
    </div>
    <div id="thursday">2
        <div class="day daydeg">
            <?php $day = week(3); echo '<p>'. '&nbsp;'. $day[0] .'&nbsp;'. $day[1] .'</p>' ?>
        </div>
        <div class="lesson">
            <?php
            $round = array();
            for($i=0;$i<4;$i++){
                $round[$i] = rand(0,count($lesson)-1);
                $res = homework_array($round[$i]);
                echo '<p>'.$res[0].'</p>';
            }
            ?>
        </div>
        <div class="homework">
            <?php
            $start_time = "08:00";
            $lessons_time = strtotime("01:00")-strtotime("00:00:00");
            $time_between_lessons = strtotime("00:15")-strtotime("00:00:00");
            for($i=0;$i<4;$i++){
                $res = homework_array($round[$i]);
                echo '<p>'. $res[1]. '&nbsp;'. $start_time . "-". date("H:i",strtotime($start_time)+$lessons_time).'</p>' ;
                $start_time = date("H:i",strtotime($start_time)+$lessons_time+$time_between_lessons);
            }
            ?>
        </div>
    </div>
    <div id="tuesday">3
        <div class="day daydeg">
            <?php $day = week(1); echo '<p>'. '&nbsp;'. $day[0] .'&nbsp;'. $day[1] .'</p>' ?>
        </div>
        <div class="lesson">
            <?php
            $round = array();
            for($i=0;$i<4;$i++){
                $round[$i] = rand(0,count($lesson)-1);
                $res = homework_array($round[$i]);
                echo '<p>'.$res[0].'</p>';
            }
            ?>
        </div>
        <div class="homework">
            <?php
            $start_time = "08:00";
            $lessons_time = strtotime("01:00")-strtotime("00:00:00");
            $time_between_lessons = strtotime("00:15")-strtotime("00:00:00");
            for($i=0;$i<4;$i++){
                $res = homework_array($round[$i]);
                echo '<p>'. $res[1]. '&nbsp;'. $start_time . "-". date("H:i",strtotime($start_time)+$lessons_time).'</p>' ;
                $start_time = date("H:i",strtotime($start_time)+$lessons_time+$time_between_lessons);
            }
            ?>
        </div>
    </div>
    <div id="friday">4
        <div class="day daydeg">
            <?php $day = week(4); echo '<p>'. '&nbsp;'. $day[0] .'&nbsp;'. $day[1] .'</p>' ?>
        </div>
        <div class="lesson">
            <?php
            $round = array();
            for($i=0;$i<4;$i++){
                $round[$i] = rand(0,count($lesson)-1);
                $res = homework_array($round[$i]);
                echo '<p>'.$res[0].'</p>';
            }
            ?>
        </div>
        <div class="homework">
            <?php
            $start_time = "08:00";
            $lessons_time = strtotime("01:00")-strtotime("00:00:00");
            $time_between_lessons = strtotime("00:15")-strtotime("00:00:00");
            for($i=0;$i<4;$i++){
                $res = homework_array($round[$i]);
                echo '<p>'. $res[1]. '&nbsp;'. $start_time . "-". date("H:i",strtotime($start_time)+$lessons_time).'</p>' ;
                $start_time = date("H:i",strtotime($start_time)+$lessons_time+$time_between_lessons);
            }
            ?>
        </div>
    </div>
    <div id="saturday">5
        <div class="daydeg day_saturday">
            <?php $day = week(5); echo '<p>'. '&nbsp;'. $day[0] .'&nbsp;'. $day[1] .'</p>' ?>
        </div>
       <div id="sata"><h1>ВЫХОДНОЙ</h1></div>
    </div>
    <div id="wednesday">6
        <div class="day daydeg">
            <?php $day = week(2); echo '<p>'. '&nbsp;'. $day[0] .'&nbsp;'. $day[1] .'</p>' ?>
        </div>
        <div class="lesson">
            <?php
            $round = array();
            for($i=0;$i<4;$i++){
                $round[$i] = rand(0,count($lesson)-1);
                $res = homework_array($round[$i]);
                echo '<p>'.$res[0].'</p>';
            }
            ?>
        </div>
        <div class="homework">
            <?php
            $start_time = "08:00";
            $lessons_time = strtotime("01:00")-strtotime("00:00:00");
            $time_between_lessons = strtotime("00:15")-strtotime("00:00:00");
            for($i=0;$i<4;$i++){
                $res = homework_array($round[$i]);
                echo '<p>'. $res[1]. '&nbsp;'. $start_time . "-". date("H:i",strtotime($start_time)+$lessons_time).'</p>' ;
                $start_time = date("H:i",strtotime($start_time)+$lessons_time+$time_between_lessons);
            }
            ?>
        </div>
    </div>
</div>
<?php ?>
</body>
</html>

