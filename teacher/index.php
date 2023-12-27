<?php
    global $config;

    include '../config.php';

    $view = $_GET['view'] ?? 'index';

   include $config['base']['path'].'views/teacher_layout/index.php'; 