<?php
    global $config;
    include  'config.php';
    include 'libs/libs.php';
    $view = $_GET['view'] ?? 'index';
    
    if(isset($_GET['id']) && $_GET['id'] == 'system'){
        header('location:system/index.php');
    }
    elseif(isset($_GET['id']) && $_GET['id'] == 'teacher'){
        header('location:teacher/index.php');
    }
    else{
        include  $config['base']['path'] . 'views/layouts/index.php';
    }