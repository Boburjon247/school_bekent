<?php
    global $config;
    session_start();

    include '../config.php';
    include '../libs/libs.php';

    $view = $_GET['view'] ?? 'index';


    if($_SESSION['login'] == 'system'){
        include $config['base']['path'].'views/system_layout/index.php';
    }
    else{
        reflesh(url,'');
        $_SESSION['login'] = ' ';
        
    }


