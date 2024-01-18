<?php
global $config;
session_start();

include '../config.php';
include '../libs/libs.php';

$view = $_GET['view'] ?? 'index';


if ($_SESSION['login'] == 'teachers') {
    include $config['base']['path'] . 'views/teacher_layout/index.php';
} else {
    reflesh(url, '');
    $_SESSION['login'] = ' ';
}
