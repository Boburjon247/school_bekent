<?php
include '../config.php';
include '../libs/libs.php';
sleep(2);
// aloqa chat xabarnoma
if (
     (isset($_GET['fishAJX']) && !empty($_GET['fishAJX'])) &&
     (isset($_GET['emailAJX']) && !empty($_GET['emailAJX'])) &&
     (isset($_GET['telAJX']) && !empty($_GET['telAJX'])) &&
     (isset($_GET['manzilAJX']) && !empty($_GET['manzilAJX'])) &&
     (isset($_GET['sarlavhaAJX']) && !empty($_GET['sarlavhaAJX'])) &&
     (isset($_GET['titleAJX']) && !empty($_GET['titleAJX']))
) {
     // input test addslashes html tag .. 
     $aloqaInputGet = test_input([
          $_GET['fishAJX'],
          $_GET['emailAJX'],
          $_GET['telAJX'],
          $_GET['manzilAJX'],
          $_GET['sarlavhaAJX'],
          $_GET['titleAJX'],
     ]);

     //example : : :abdunazarov247@gmail.com
     $email_rg = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
     //example : : : 976665979, +998976665979;
     $tel_rg = "/^\\+?[1-9][0-9]{7,14}$/";

     if (preg_match($email_rg, $aloqaInputGet[1])) $email_error = true;
     else $email_error = false;
     if (preg_match($tel_rg, $aloqaInputGet[2])) $tel_error = true;
     else $tel_error = false;

     if ($email_error == true && $tel_error == true) {
          if (
               getInsert(
                    'chat',
                    ['fish', 'email', 'tel', 'manzil', 'sarlavha', 'title'],
                    $aloqaInputGet
               )
          ) {
               echo json_encode([
                    'status' => 200,
                    'message' => 'Arizaingiz qabul qilindi javob elektron pochtagizga yuboriladi',
               ]);
          } else {
               echo json_encode([
                    'status' => 500,
                    'message' => "Ma'lumot yuklashda xatolik ",
               ]);
          }
     } else {
          echo json_encode([
               'status' => 400,
               'message' => "Ma'lumotlarda (tel && email) xatolik mavjud",
          ]);
     }
}
