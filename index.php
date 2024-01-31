<?php
    session_start();
    global $config;
    include  'config.php';
    include 'libs/libs.php';
    $view = $_GET['view'] ?? 'index';
    $_SESSION['login'] = ' ';
    include  $config['base']['path'] . 'views/layouts/index.php';