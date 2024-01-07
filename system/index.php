<?php
    global $config;

    include '../config.php';
    include '../libs/libs.php';

    $view = $_GET['view'] ?? 'index';

   include $config['base']['path'].'views/system_layout/index.php'; 