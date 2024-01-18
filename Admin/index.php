<?php
global $config;
session_start();

include '../config.php';
include '../libs/libs.php';

$view = $_GET['view'] ?? 'index';


if($_SESSION['login'] == 'admin'){
    include $config['base']['path'] . 'views/Admin_layout/index.php';
}
else{
    reflesh(url,'');
    $_SESSION['login'] = ' ';

}