<div class="main-panel">
     <div class="content-wrapper">
          <div class="row">
               <div class="col-12 admin_BS" style="margin-top: 20px;">
                    <p>Profil</p>
               </div>
               <div class="col-12">
                    <div class="bg">
                         <?php foreach (GetAll('admin', 2, 'asc') as $key => $admin) : ?>
                              <form action="" method="post" enctype="multipart/form-data">
                                   <div class="imgUser profil prm-img">
                                        <label for="file10">
                                             <div class="deleteRasim" style="border: 1px solid #767676;">
                                                  <i style="color: lime;" class="fa-solid fa-circle-plus"></i>
                                             </div>
                                             <img src="<?php
                                                       if ($admin['img'] === '') {
                                                            echo $config['base']['url'] . 'web/img/const/defalut.jpg';
                                                       } else {
                                                            echo $config['base']['url'] . 'web/img/Admin/' . $admin['img'];
                                                       }
                                                       ?>" alt="" id="imgUrl">
                                        </label>
                                        <input type="file" name="file" class=" lableImg10 input-UserName" id="file10" visibility="none" style="display: none;">
                                   </div>
                                   <label for="">Ism</label>
                                   <input name="ism" type="text" value="<?= $admin['ism'] ?>" style="color: #fff; margin-bottom: 20px;" class="input" placeholder="Ism">
                                   <label for="">Fam</label>
                                   <input name="fam" type="text" value="<?= $admin['fam'] ?>" style="color: #fff; margin-bottom: 20px;" class="input" placeholder="fam">
                                   <label for="">Login</label>
                                   <input name="login" type="text" value="<?= $admin['login'] ?>" style="color: #fff; margin-bottom: 20px;" class="input" placeholder="login">
                                   <label for="">Parol</label>
                                   <input name="password" type="text" value="<?= $admin['password'] ?>" style="color: #fff; margin-bottom: 20px;" class="input" placeholder="password">
                                   <button type="submit" name="yangilash" class="btn btn-outline-warning btn-fw img-saqlash">Saqlash</button>
                              </form>
                         <?php endforeach; ?>
                    </div>
               </div>
          </div>
          <!-- partial -->
     </div>
     <!-- main-panel ends -->
</div>
<?php
if (isset($_POST['yangilash'])) {
   if (
      (isset($_POST['login']) && !empty($_POST['login'])) &&
      (isset($_POST['password']) && !empty($_POST['password']))
   ) {

      if ($_FILES['file']['name'] != '') {
         $array_file_name = explode('.', $_FILES['file']['name']);
         $type = count($array_file_name) - 1;
         $Filename = $_POST['ism'] . '.' . $array_file_name[$type];
         $bool = move_uploaded_file($_FILES['file']['tmp_name'], '../web/img/Admin/' . $Filename);
      } else {
         $Filename = ' ';
      }
      $aloqaInputGet = test_input1([
         $_POST['ism'],
         $_POST['fam'],
         $_POST['father_name'],
         $_POST['date'],
         $_POST['manzil'],
         $_POST['pasport'],
         $_POST['jins'],
         $_POST['tel'],
         $_POST['login'],
         $_POST['password'],
         $Filename,
      ]);
      $db = connection();

      $sql = $db->query("UPDATE admin SET 
         ism = '{$aloqaInputGet[0]}',
         fam = '{$aloqaInputGet[1]}',
         father_name = '{$aloqaInputGet[2]}',
         date = '{$aloqaInputGet[3]}',
         manzil = '{$aloqaInputGet[4]}',
         pasport = '{$aloqaInputGet[5]}',
         sex = '{$aloqaInputGet[6]}',
         tel = '{$aloqaInputGet[7]}',
         login = '{$aloqaInputGet[8]}',
         password = '{$aloqaInputGet[9]}',
         img = '{$aloqaInputGet[10]}'
         WHERE id= 2");
      if ($sql) {
         $_SESSION['error'] = "Admin ma'lumotlari o'zgartitildi 😁";
         reflesh(url_admin, 'profil');
      } else {
         $_SESSION['error'] = "Xatolik mavjud ⛔";
         reflesh(url_admin, 'profil');
         echo 'false';
      }
   }
}
?>