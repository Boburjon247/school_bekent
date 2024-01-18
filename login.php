<?php
session_start();
global $config;
include  'config.php';
include 'libs/libs.php';
if (isset($_POST['loginBtn'])) {
     if (
          (isset($_POST['login']) && !empty($_POST['login'])) &&
          (isset($_POST['password']) && !empty($_POST['password'])) &&
          (isset($_POST['checkbox']) && !empty($_POST['checkbox']))
     ) {
          $login = $_POST['login'];
          $password = $_POST['password'];
          $checkbox = $_POST['checkbox'];

          if (getHasId('admin', ['login', 'password'], [$login, $password], "AND id=1")) {
               $_SESSION['login'] = 'system';
               reflesh(url_system,'');
          } else if (getHasId('admin', ['login', 'password'], [$login, $password], "AND id=2")) {
               $_SESSION['login'] = 'admin';
               reflesh(url_admin,'');
          } else if (getHasId('teachers', ['login', 'password'], [$login, $password])) {
               $_SESSION['login'] = 'teachers';
               reflesh(url_teacher,'');

          } else {
               $_SESSION['login'] = 'error';
               echo $_SESSION['login'];
          }
     }
}
