<?php
include '../config.php';
include '../libs/libs.php';
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
      <p class="madal_messeg "></p>
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
            <ul cl>
               <?php foreach (GetAll('chat', 'false', 'desc') as $key => $val) : ?>
                  <li class="user_chat" id="<?= $val['id'] ?>">
                     <a class="<?= $val['status'] ?>" href="<?= url_system . 'xabarlar.php?id=' . $val['id'] ?> ">
                        <div>
                           <p id='chatUserName'><?= textFilter($val['fish'], 21) ?></p>
                        </div>
                        <div>
                           <p><?= textFilter($val['email'], 22) ?></span>
                           <p><?= $val['date'] ?></span>
                        </div>
                     </a>
                  </li>
               <?php endforeach; ?>
            </ul>
         </div>
         <?php if (isset($_GET['id'])) : ?>
            <?php foreach (GetAll('chat', $_GET['id'], 'desc') as $key => $val) : ?>
               
               <div class="right_chat">
                  <div class="madal_show_chat active">
                     <img src="<?= $config['base']['url'] . 'web/' ?>img/chat.png" alt="">
                  </div>
                  <form action="" method="POST">
                     <div class="window_onlin">
                        <ul>
                           <header-top class="flex-c-sb">
                              <p>
                                 <span><?= $val['fish'] ?></span>
                                 <span><?= $val['email'] ?></span>
                              </p>
                              <p>
                                 <span><?= $val['manzil'] ?></span>
                                 <span><?= $val['tel'] ?></span>
                              </p>
                              <div class="flex-c-sb" style="column-gap: 10px;">
                                 <button style="border: none; background-color: transparent;" id="deletItemsChat" name="delete"><i class="fa-solid fa-trash"></i></button>
                                 <i class="mess_exit fa-solid fa-xmark"></i>
                              </div>
                              <p style="display: none;" id="idpage"><?= $_GET['id'] ?></p>
                           </header-top>
                           <li class="left">
                              <p>
                                 <span style="
                                    display: block; 
                                    font-size: 18px;
                                    font-weight: 600;
                                    text-transform: capitalize;
                                    background-color: #0e2f91;
                                    padding: 5px;
                                    width: 100%;
                                    border-radius: 5px;">
                                    <?= $val['sarlavha'] ?>
                                 </span>
                                 <?= $val['title'] ?>
                              </p>
                           </li>
                           <?php foreach (GetAll('xabar', 'false', 'asc') as $k => $v) : ?>
                              <?php if ($_GET['id'] == $v['raqam']) : ?>
                                 <li class="right">
                                    <p>
                                       <?= $v['text'] ?>
                                    </p>
                                 </li>
                              <?php endif; ?>
                           <?php endforeach; ?>
                        </ul>
                     </div>
                  </form>
                  <form action="" method="POST" id="chat_forma">
                     <div class="messenge">
                        <div class="m-c">
                           <input type="text" name="message" id="messageInput" placeholder="Message">
                           <button name="ok" class="img" id="messageInput_ari">
                              <img src="<?= $config['base']['url'] . 'web/' ?>img/teleg.png" alt="">
                           </button>
                        </div>
                     </div>
                  </form>
               </div>
            <?php endforeach; ?>
         <?php endif; ?>
      </div>
   </section>
   <script src="<?= $config['base']['url'] . 'web/' ?>js/system/xabarlar.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <script src="<?= $config['base']['url'] . 'web/' ?>js/Jquery/jquery-3.6.4.min.js"></script>
   <script src="<?= $config['base']['url'] . 'web/' ?>js/Jquery/jquery-ui.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>

<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//required files
require '../email/src/Exception.php';
require '../email/src/PHPMailer.php';
require '../email/src/SMTP.php';

if (isset($_POST['ok']) && isset($_POST['message']) && !empty($_POST['message'])) {
   if (isset($_GET['id'])) {
      $messeg = $_POST['message'];
      foreach (GetAll('chat', $_GET['id'], 'desc') as $key => $val) {
         $mail = new PHPMailer(true);
         //Server settings
         $mail->isSMTP();                              //Send using SMTP
         $mail->Host       = 'smtp.gmail.com';       //Set the SMTP server to send through
         $mail->SMTPAuth   = true;             //Enable SMTP authentication
         $mail->Username   = 'abdunazarov247@gmail.com';   //SMTP write your email
         $mail->Password   = 'lngvfkpqwpyzvehc';      //SMTP password
         $mail->SMTPSecure = 'ssl';            //Enable implicit SSL encryption
         $mail->Port       = 465;

         //Recipients
         $mail->setFrom($val["email"], "Farg'ona shahar Prizdet Maktabi"); // Sender Email and name
         $mail->addAddress($val["email"]);     //Add a recipient email  
         $mail->addReplyTo($val["email"], "Farg'ona shahar Prizdet Maktabi"); // reply to sender email

         //Content
         $mail->isHTML(true);               //Set email format to HTML
         $mail->Subject = $val['sarlavha'];   // email subject headings
         $mail->Body    = $_POST["message"]; //email message
         // Success sent message alert
         $mail->send();
      }
      //xabar nomli jadvalga malumot yozish 
      getInsert('xabar', ['raqam', 'text'], [$_GET['id'], $_POST['message']]);

   }
}
// chertilgan malumotni ochirish
if(isset($_POST['delete'])){
   if(getItemsDelet('chat', 'id', [$_GET['id']]) && getItemsDelet('xabar', 'raqam', [$_GET['id']])){
      ?>
         <script>
            window.location = '<?= url_system.'xabarlar.php'?>';
         </script>
      
      <?php
   }
}
// users items dan kelgan malumot chertilganda activ no activ bolish
if(isset($_GET['id'])){
   $id = $_GET['id'];
   $db =connection();
   $db -> query("UPDATE chat SET status = 'noactive' WHERE id = '$id'");
}

?>