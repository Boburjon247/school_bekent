<?php
    global $config;

    include '../config.php';

    $view = $_GET['view'] ?? 'index';

   include $config['base']['path'].'views/system_layout/index.php'; 