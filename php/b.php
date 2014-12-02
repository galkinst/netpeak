<?php
    $a = "Text";
    function fool()
    {
        global $a;
        echo $a;
    }
fool();
