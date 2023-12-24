<?php
    global $config;
    include  'config.php';
    $view = $_GET['view'] ?? 'index';
    include  $config['base']['path'].'views/layouts/index.php';