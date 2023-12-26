<?php
    global $config;
    include  'config.php';
    $view = $_GET['view'] ?? 'index';

    
    if(isset($_GET['id']) && $_GET['id'] == 'system'){
        header('location:system/index.php');
    }
    else{
        include  $config['base']['path'] . 'views/layouts/index.php';
    }
