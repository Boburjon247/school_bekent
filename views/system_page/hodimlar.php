   <?php
   global $config;
   $today = date("Y-m-d");
   ?>

   <!-- madalka -->
   <div class="top_title">
      <p>Hodimlar</p>
      <span>Hodimlar/Qo'shish</span>
   </div>
   <div class="body_1">
      <div class="section active section1">
         <div class="text_title">
            <p>Barcha hodimlar </p>
            <input type="search" id="search" placeholder="search...">
            <button class="btn_main addHodim">Qo'shish</button>
         </div>
         <div class="hodim_item">
            <ul>
               <?php foreach (GetAll('teachers', 'false', 'asc') as $key => $hodim) : ?>
                  <li>
                     <form action="" method="post">
                        <input type="hidden" name="id1" value="<?= $hodim['id'] ?>">
                        <input type="hidden" name="hodimIMG" value="<?= $hodim['picture'] ?>">
                        <div class="img-text">
                           <div class="img">
                              <img class="hodimIMG" src="<?= $config['base']['url'] . 'web/img/hodimlar/' . $hodim['picture'] ?>" alt="">
                           </div>
                           <p class="userName1">
                              <span style="font-weight: 600; color: #000;"><?= $hodim['name'] . ' ' . $hodim['last_name'] ?></span>
                           </p>
                        </div>
                        <div class="controlBox">
                           <span style="font-size: 13px; color: #999;padding-right: 20px;"><?= $hodim['work_time'] ?></span>
                           <button type="submit" class="editHodim" name="updateBTN"><i class="fa-solid fa-pencil" style="color: #00e1ff;"></i></button>
                           <button type="submit" class="deleteHodim" name="delete"><i class="fa-solid fa-trash" style="color: #ff0000;"></i></button>
                        </div>
                     </form>
                  </li>
               <?php endforeach; ?>
            </ul>
         </div>
      </div>

      <!-- //qoshish uchun -->
      <div class="section section2 ">
         <form action="" method="post" id="formaHodim" enctype="multipart/form-data">
            <div class="text_Add_h flex-c-sb">
               <p>Qo’shish</p>
               <button class="btn_main exitHodim">Chiqish</button>
            </div>
            <div class="row1">
               <div>
                  <label for="">Ismi</label>
                  <input value="" name="ism" id="t_ism" type="text" class="input-UserName" placeholder="Ismi" required>
               </div>
               <div>
                  <label for="">Familiyasi</label>
                  <input name="fam" id="t_fam" type="text" class="input-UserName" placeholder="Familiyasi" required>
               </div>
               <div>
                  <div class="imgUser">
                     <label for="file">
                        <img src="<?= $config['base']['url'] . 'web/' ?>img/userimg.jpg" alt="" id="imgUrl">
                     </label>
                     <input type="file" name="file" class=" lableImg input-UserName" id="file" visibility="none" style="display: none;">
                  </div>
               </div>

            </div>
            <div class="row2">
               <div>
                  <label for="">Otasini Ismi</label>
                  <input name="otasiniIsmi" id="t_otasiniIsmi" type="text" class="input-UserName" placeholder="Otasini Ismi" required>
               </div>
               <div>
                  <label for="">Passport Seriasi</label>
                  <input name="pasport" id="t_pasport" type="text" class="input-UserName" placeholder="Passport Seriasi" required>
               </div>
               <div>
                  <label for="">Tug’ulgan sanasi</label>
                  <input name="sana" id="t_sana" type="date" class="input-UserName" placeholder="Tug’ulgan sanasi" required>
               </div>
               <div>
                  <label for="">Jinsi</label>
                  <select name="jins" id="t_jins" class="input-UserName" required>
                     <option value=""> </option>
                     <option value="ayol">ayol</option>
                     <option value="erkak">erkak</option>
                  </select>
               </div>
               <div>
                  <label for="">Manzili</label>
                  <input name="manzil" id="t_manzil" type="text" class="input-UserName" placeholder="Manzili" required>
               </div>
               <div>
                  <label for="">Tel raqam</label>
                  <input name="tel" id="t_tel" type="number" class="input-UserName " placeholder="Tel raqam" required>
               </div>
               <div>
                  <label for="">Login</label>
                  <input name="login" id="t_login" type="text" class="input-UserName" placeholder="Login" required>
               </div>
               <div class="pasH">
                  <label for="">Password</label>
                  <input name="password" id="t_password" type="password" class="input-UserName input-UserNameH" placeholder="Password" required>
                  <i class="fa-solid userEyeH fa-eye-slash"></i>
                  <!-- <i class="fa-solid fa-eye"></i> -->
               </div>
            </div>
            <div class="row3 hodimqoshishBtn">
               <button class="btn_main saveUserName" id="saveUserName" name="saqlash">Saqlash</button>
            </div>
         </form>
      </div>
      <!--Yangilash uchun  -->
      <div class="section section3 ">
         <?php if (isset($_POST['updateBTN']) && isset($_POST['id1']) && !empty($_POST['id1'])) : ?>
            <?php foreach (GetAll('teachers', $_POST['id1'], '') as $key => $value) : ?>
               <form action="" method="post" id="formaHodim" enctype="multipart/form-data">
                  <div class="text_Add_h flex-c-sb">
                     <p>Taxrirlash</p>
                     <button class="btn_main exitHodim">Chiqish</button>
                  </div>
                  <div class="row1">
                     <div>
                        <label for="">Ismi</label>
                        <input type="hidden" name="file_id" value="<?= $value['id'] ?>">
                        <input value="<?= $value['name'] ?>" name="ism" id="t_ism" type="text" class="input-UserName" placeholder="Ismi" required>
                     </div>
                     <div>
                        <label for="">Familiyasi</label>
                        <input value="<?= $value['last_name'] ?>" name="fam" id="t_fam" type="text" class="input-UserName" placeholder="Familiyasi" required>
                     </div>
                     <div>
                        <div class="imgUser">
                           <label for="file1">
                              <img src="<?= $config['base']['url'] . 'web/img/hodimlar/' . $value['picture'] ?>" alt="" id="imgUrl">
                           </label>
                        </div>
                     </div>

                  </div>
                  <div class="row2">
                     <div>
                        <label for="">Otasini Ismi</label>
                        <input value="<?= $value['father_name'] ?>" name="otasiniIsmi" id="t_otasiniIsmi" type="text" class="input-UserName" placeholder="Otasini Ismi" required>
                     </div>
                     <div>
                        <label for="">Passport Seriasi</label>
                        <input value="<?= $value['pas_sery'] ?>" name="pasport" id="t_pasport" type="text" class="input-UserName" placeholder="Passport Seriasi" required>
                     </div>
                     <div>
                        <label for="">Tug’ulgan sanasi</label>
                        <input value="<?= $value['date'] ?>" name="sana" id="t_sana" type="date" class="input-UserName" placeholder="Tug’ulgan sanasi" required>
                     </div>
                     <div>
                        <label for="">Jinsi</label>
                        <select name="jins" id="t_jins" class="input-UserName" required>
                           <option value=""> </option>
                           <option value="ayol">ayol</option>
                           <option value="erkak">erkak</option>
                        </select>
                     </div>
                     <div>
                        <label for="">Manzili</label>
                        <input value="<?= $value['home_town'] ?>" name="manzil" id="t_manzil" type="text" class="input-UserName" placeholder="Manzili" required>
                     </div>
                     <div>
                        <label for="">Tel raqam</label>
                        <input value="<?= $value['tel'] ?>" name="tel" id="t_tel" type="number" class="input-UserName " placeholder="Tel raqam" required>
                     </div>
                     <div>
                        <label for="">Login</label>
                        <input value="<?= $value['login'] ?>" name="login" id="t_login" type="text" class="input-UserName" placeholder="Login" required>
                     </div>
                     <div class="pasH">
                        <label for="">Password</label>
                        <input value="<?= $value['password'] ?>" name="password" id="t_password" type="password" class="input-UserName input-UserNameH" placeholder="Password" required>
                        <i class="fa-solid userEyeH fa-eye-slash"></i>
                        <!-- <i class="fa-solid fa-eye"></i> -->
                     </div>
                  </div>
                  <div class="row3 hodimqoshishBtn">
                     <button class="btn_main updateBtn" name="yangilash">Yangilash</button>
                  </div>
               </form>
            <?php endforeach; ?>
         <?php endif; ?>
      </div>
   </div>
   <!-- madalka -->
   <div class="NToastJS ">
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

   <script src="<?= $config['base']['url'] . 'web/' ?>js/system/hodimlar.js"></script>

   <?php
   //har bir hodimlarni logini oqib olinadi;
   $arrayLoginHodim = [];
   foreach (GetAll('teachers', 'false', 'asc') as $key => $val)
      array_push($arrayLoginHodim, $val['login']);
   //qoshish hodim insert
   if (isset($_POST['saqlash'])) {
      if (
         (isset($_POST["ism"]) && !empty($_POST["ism"])) &&
         (isset($_POST["fam"]) && !empty($_POST["fam"])) &&
         (isset($_POST["otasiniIsmi"]) && !empty($_POST["otasiniIsmi"])) &&
         (isset($_POST["sana"]) && !empty($_POST["sana"])) &&
         (isset($_POST["jins"]) && !empty($_POST["jins"])) &&
         (isset($_POST["manzil"]) && !empty($_POST["manzil"])) &&
         (isset($_POST["pasport"]) && !empty($_POST["pasport"])) &&
         (isset($_POST["tel"]) && !empty($_POST["tel"])) &&
         (isset($_POST["login"]) && !empty($_POST["login"])) &&
         (isset($_POST["password"]) && !empty($_POST["password"]))
      ) {
         //loginni tekshirish;
         function LoginTekshir($array)
         {
            for ($i = 0; $i < count($array); $i++) {
               if ($array[$i] == $_POST['login']) {
                  return false;
                  break;
               }
            }
            return true;
         }
         //file tekshirish
         function FileTekshir()
         {
            if ($_FILES['file']['name'] != "") {
               if ($_FILES['file']['size'] < 4608000) {
                  $png = 'image/png';
                  $jpeg = 'image/jpeg';
                  if ($_FILES['file']['type'] == $png || $_FILES['file']['type'] == $jpeg) {
                     $array_file_name = explode('.', $_FILES['file']['name']);
                     $type = count($array_file_name) - 1;
                     $name = $_POST['ism'] . time() . '.' . $array_file_name[$type];
                     $bool = move_uploaded_file($_FILES['file']['tmp_name'], '../web/img/hodimlar/' . $name);
                     if ($bool) {
                        $_SESSION['file'] = $name;
                        return true;
                     } else {
                        $_SESSION['error'] = "Ma'lumotlar saqlanmadi qaytadan urinib ko'ring ⛔";
                        return false;
                     }
                  } else {
                     $_SESSION['error'] = "Yuklanyotgan faylda xatoli bor qaytadan urinib ko'ring ⛔";
                     return false;
                  }
               } else {
                  $_SESSION['error'] = "🗃️ Fayl hajmi 4MB dan katta bo'lmasligi kerak ⛔";
                  return false;
               }
            } else {
               $name2 = $_POST['ism'] . time() . "defalut.jpg";
               if (copy('../web/img/const/defalut.jpg', '../web/img/hodimlar/' . $name2)) {
                  $_SESSION['file'] = $name2;
                  return true;
               }
            }
         }

         if (FileTekshir()) {
            if (LoginTekshir($arrayLoginHodim)) {
               $aloqaInputGet = test_input([
                  $_POST['ism'],
                  $_POST['fam'],
                  $_POST['otasiniIsmi'],
                  $_POST['login'],
                  $_POST['password'],
                  $_SESSION['file'],
                  $_POST['jins'],
                  $_POST['pasport'],
                  $_POST['sana'],
                  $_POST['manzil'],
                  $today,
                  $_POST['tel'],
               ]);
               if (
                  getInsert(
                     'teachers',
                     ['name', 'last_name', 'father_name', 'login', 'password', 'picture', 'sex', 'pas_sery', 'date', 'home_town', 'work_time', 'tel'],
                     $aloqaInputGet
                  )
               ) {
                  $_SESSION['error'] = "Yangi xodim qo'shildi 😁";
                  reflesh(url_system, 'hodimlar');
               } else {
                  $_SESSION['error'] = "Ma'lumot saqlanmdi ⛔";
                  reflesh(url_system, 'hodimlar');
               }
            } else {
               $_SESSION['error'] = "Bu login band qaytadan urinib ko'ring ⛔";
               reflesh(url_system, 'hodimlar');
            }
         } else {
            reflesh(url_system, 'hodimlar');
         }
      }
   };

   //delete
   if (isset($_POST['delete'])) {
      if (getItemsDelet('teachers', 'id', [$_POST['id1']])) {
         $_SESSION['error'] = "Xodim o'childi 😁";
         unlink('../web/img/hodimlar/' . $_POST['hodimIMG']);
         reflesh(url_system, 'hodimlar');
      }
   }
   // yangilash
   if (isset($_POST['yangilash'])) {
      $db = connection();
      $filname = $db->query("SELECT * FROM teachers WHERE id='{$_POST["file_id"]}'");
      $r = $filname->fetch_array();
      $file1 = $r['picture'];
      $date2 = $r['work_time'];

         echo '<pre>';
      echo $_POST['file_id'];
      print_r($_POST);
      echo '</pre>';
   }
