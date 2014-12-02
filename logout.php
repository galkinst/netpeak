<?php
    session_start();
    unset($_SESSION['login']);
    unset($_SESSION['id']);
    session_destroy();
    header('Location:'.$_SERVER['HTTP_REFERER']);
