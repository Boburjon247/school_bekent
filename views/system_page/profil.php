<?php
global $config;
?>
<div class="top_title">
   <p>Tizim</p>
   <span>Tizim / Profile</span>
</div>
<div class="body_1">
   <div class="section section2 active ">
      <div class="text_Add_h flex-c-sb">
         <p>Profile</p>
      </div>
      <?php foreach (GetAll('admin', 1, 'asc') as $key => $admin) : ?>

         <form action="" method="post" enctype="multipart/form-data">
            <div class="row1">
               <div>
                  <label for="">Ism</label>
                  <input name="ism" type="text" value="<?= $admin['ism'] ?>" class="input-UserName" placeholder="Ismi">
               </div>
               <div>
                  <label for="">Familiyasi</label>
                  <input name="fam" type="text" value="<?= $admin['fam'] ?>" class="input-UserName" placeholder="Familiyasi">
               </div>
               <div>
                  <div class="imgUser">
                     <label for="file">
                        <img src="<?php
                                    if ($admin['img'] === '') {
                                       echo $config['base']['url'] . 'web/img/const/defalut.jpg';
                                    } else {
                                       echo $config['base']['url'] . 'web/img/Admin/' . $admin['img'];
                                    }
                                    ?>" alt="" id="imgUrl">
                     </label>
                     <input name="file" type="file" class=" lableImg input-UserName" id="file" visibility="none" style="display: none;">
                     <p class="errorFile" id="kattaFile1">Fayl hajmi katta 🚫</p>
                     <p class="errorFile" id="notFile1">Notog'ri fayl 😢</p>
                  </div>
               </div>

            </div>
            <div class="row2">
               <div>
                  <label for="">Otasini Ismi</label>
                  <input name="father_name" type="text" value="<?= $admin['father_name'] ?>" class="input-UserName" placeholder="Otasini Ismi">
               </div>
               <div>
                  <label for="">Passport Seriasi</label>
                  <input name="pasport" type="text" value="<?= $admin['pasport'] ?>" class="input-UserName" placeholder="Passport Seriasi">
               </div>
               <div>
                  <label for="">Tug’ulgan sanasi</label>
                  <input name="date" type="date" value="<?= $admin['date'] ?>" class="input-UserName" placeholder="Tug’ulgan sanasi">
               </div>
               <div>
                  <label for="">Jinsi</label>
                  <select name="jins" id="" value="<?= $admin['sex'] ?>" class="input-UserName">
                     <option value="<?= $admin['sex'] ?>" hidden> <?= $admin['sex'] ?></option>
                     <option value="ayol">ayol</option>
                     <option value="erkak">erkak</option>
                  </select>
               </div>
               <div>
                  <label for="">Manzili</label>
                  <input name="manzil" type="text" value="<?= $admin['manzil'] ?>" class="input-UserName" placeholder="Manzili">
               </div>
               <div>
                  <label for="">Tel raqam</label>
                  <input name="tel" type="text" value="<?= $admin['tel'] ?>" class="input-UserName" placeholder="Tel raqam">
               </div>
               <div>
                  <label for="">Login</label>
                  <input name="login" type="text" value="<?= $admin['login'] ?>" class="input-UserName" placeholder="Login" required>
               </div>
               <div>
                  <label for="">Password</label>
                  <input name="password" type="password" value="<?= $admin['password'] ?>" class="input-UserName input-UserNameEys" placeholder="Password" required>
                  <i class="fa-solid userEye fa-eye-slash"></i>
                  <!-- <i class="fa-solid fa-eye"></i> -->
               </div>
            </div>
            <div class="row3 flex-c-sb">
               <button name="yangilash" type="submit" class="btn_main saveUserName malumotSaqlashprofil">Saqlash</button>
            </div>
         </form>
      <?php endforeach; ?>

   </div>
</div>
<!-- madalka -->
<div class="NToastJS">
   <!-- successToast -->
   <div class="NToastJS_content active errorTrue successToast">
      <i class="fa fa-xmark exit errorTrue"></i>
      <div class="icon">
         <i class="fa fa-check"></i>
      </div>
      <div class="text">
         <p id='successMsg'><?= $_SESSION['error'] ?></p>
      </div>
      <div class="time">
         <p></p>
      </div>
   </div>
</div>
<script src="<?= $config['base']['url'] . 'web/' ?>js/system/profil.js"></script>

<!--yangilash -->
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

      echo $Filename;
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
         WHERE id= 1");
      if ($sql) {
         $_SESSION['error'] = "Admin ma'lumotlari o'zgartitildi 😁";
         reflesh(url_system, 'profil');
      } else {
         $_SESSION['error'] = "Xatolik mavjud ⛔";
         reflesh(url_system, 'profil');
         echo 'false';
      }
   }
}
?>