<?php
include '../config.php';
?>
<!doctype html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Xabarlar</title>
   <!-- cnd js/ -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <link rel="stylesheet" href="<?= $config['base']['url'] . 'web/' ?>css/system.css">
   <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
   <!-- jquery -->
   <link rel="stylesheet" href="<?= $config['base']['url'] . 'web/' ?>js/Jquery/owlCarusel/owl.carousel.min.css">
   <link rel="stylesheet" href="<?= $config['base']['url'] . 'web/' ?>js/Jquery/owlCarusel/owl.theme.default.min.css">
   <link rel="stylesheet" href="<?= $config['base']['url'] . 'web/' ?>js/Jquery/jquery-ui.min.css">
   <link rel="stylesheet" href="<?= $config['base']['url'] . 'web/' ?>js/Jquery/jquery-ui.theme.min.css">
   <!-- bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <!--font awesome cdn-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   <link rel="shortcut icon" href="<?= $config['base']['url'] . 'web/' ?>img/logo-icon-new.svg" type="image/x-icon">
   <!--    google font-->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body>

   <section class="system_chat">
      <div class="header_chat">
         <p class="tet">Xabarlar</p>
         <div class="l-b-w">
            <a href="<?= url_system ?>">
               <button>
                  <i class="fa-solid fa-person-walking-dashed-line-arrow-right"></i>
               </button>
            </a>
            <div class="profil">
               <p>Boburjon</p>
               <div class="img">
                  <img src="<?= $config['base']['url'] . 'web/' ?>img/Dinner.jpg" alt="">
               </div>
            </div>
         </div>
      </div>
      <div class="body_chat">
         <div class="left_chata">
            <ul>
               <li class="active">
                  <div>
                     <p>Mohirbek JIgarim</p>
                  </div>
                  <div>
                     <p>info247@gmail.com</span>
                     <p>20.20.2023</span>
                  </div>
               </li>
               <li>
                  <div>
                     <p>Mohirbek JIgarim</p>
                  </div>
                  <div>
                     <p>info247@gmail.com</span>
                     <p>20.20.2023</span>
                  </div>
               </li>
               <li>
                  <div>
                     <p>Mohirbek JIgarim</p>
                  </div>
                  <div>
                     <p>info247@gmail.com</span>
                     <p>20.20.2023</span>
                  </div>
               </li>

            </ul>
         </div>
         <div class="right_chat">
            <div class="madal_show_chat active">
               <img src="<?= $config['base']['url'] . 'web/' ?>img/chat.png" alt="">
            </div>
            <div class="window_onlin">
               <ul>
                  <header-top class="flex-c-sb">
                     <p>
                        <span>Mohirbek JIgarim</span>
                        <span>info247@gmail.com</span>
                     </p>
                     <div class="flex-c-sb" style="column-gap: 10px;">
                        <i class="fa-solid fa-trash"></i>
                        <i class="mess_exit fa-solid fa-xmark"></i>
                     </div>
                  </header-top>
                  <li>
                     <p>
                        Assalomu alekum
                     </p>
                  </li>
                  <li>
                     <p>Va alekum assalom</p>
                  </li>
                  <li>
                     <p>
                        Toshkenda soat nechi boldi
                     </p>
                  </li>
                  <li>
                     <p>Kechirasiz bilmayman</p>
                  </li>
                  <li>
                     <p>
                        Axa rahmat
                     </p>
                  </li>


               </ul>
            </div>
            <div class="messenge">
               <div class="m-c">
                  <input type="text" id="messageInput" readonly="true" placeholder="Message">
                  <div class="img">
                     <img src="<?= $config['base']['url'] . 'web/' ?>img/teleg.png" alt="">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <script src="<?= $config['base']['url'] . 'web/' ?>js/system/xabarlar.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <script src="<?= $config['base']['url'] . 'web/' ?>js/Jquery/jquery-3.6.4.min.js"></script>
   <script src="<?= $config['base']['url'] . 'web/' ?>js/Jquery/jquery-ui.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>