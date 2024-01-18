<?php
global $config;
?>
<div class="top_title">
   <p>O'quvchilar</p>
   <span>O'quvchilar/Qo'shish</span>
</div>
<div class="body_1">
   <div class="section active section1">
      <div class="text_title">
         <p>Barcha o'quvchilar </p>
         <input type="search" id="search" placeholder="search...">
         <button class="btn_main addOquvchi">Qo'shish</button>
      </div>
      <div class="hodim_item">
         <ul>
            <?php foreach (GetAll('students', 'false', 'asc') as $key => $oquvchi) : ?>
               <li>
                  <form action="" method="post">
                     <input type="hidden" name="oquvchiIMG" value="<?= $oquvchi['picture'] ?>">
                     <input type="hidden" class="idHodimCl" name="id1" value="<?= $oquvchi['id'] ?>">
                     <div class="img-text">
                        <div class="img">
                           <img class="hodimIMG" src="<?php
                                                      if ($oquvchi['picture'] === '') {
                                                         echo $config['base']['url'] . 'web/img/const/defalut.jpg';
                                                      } else {
                                                         echo $config['base']['url'] . 'web/img/oquvchilar/' . $oquvchi['picture'];
                                                      }
                                                      ?>" alt="">
                        </div>
                        <p class="userName1">
                           <span style="font-weight: 600; color: #000;"  class="hodimUserName"><?= $oquvchi['name'] . ' ' . $oquvchi['last_name'] ?></span>
                        </p>
                     </div>
                     <div class="controlBox">
                        <button type="submit" class="editOquvchi" name="updateBTN"><i class="fa-solid fa-pencil" style="color: #00e1ff;"></i></button>
                        <button type="submit" class="deleteoquvchi btnmadalShow" name="delete"><i class="fa-solid fa-trash" style="color: #ff0000;"></i></button>
                     </div>
                  </form>
               </li>
            <?php endforeach; ?>
         </ul>
      </div>
   </div>
   <div class="section section2 ">
      <div class="text_Add_h flex-c-sb">
         <p>Qo’shish</p>
         <button class="btn_main exitoquvchi">Chiqish</button>
      </div>
      <form action="" method="POST" id="insertOquvchi" enctype="multipart/form-data">
         <div class="row1">
            <div>
               <label for="">Ismi</label>
               <input type="text" name="ismi" class="input-UserName" placeholder="Ismi" required>
            </div>
            <div>
               <label for="">Familiyasi</label>
               <input type="text" name="fam" class="input-UserName" placeholder="Familiyasi" required>
            </div>
            <div>
               <div class="imgUser">
                  <label for="file">
                     <img src="<?= $config['base']['url'] . 'web/' ?>img/const/defalut.jpg" alt="" id="imgUrl">
                  </label>
                  <input type="file" name="file" class=" lableImg input-UserName" id="file" visibility="none" style="display: none;">
                  <p class="errorFile" id="kattaFile">Fayl hajmi katta 🚫</p>
                  <p class="errorFile" id="notFile">Notog'ri fayl 😢</p>
               </div>
            </div>
         </div>
         <div class="row2">
            <div>
               <label for="">Otasini Ismi</label>
               <input type="text" name="otasinisimi" class="input-UserName" placeholder="Otasini Ismi" required>
            </div>
            <div>
               <label for="">Passport Seriasi</label>
               <input type="text" name="pasport" class="input-UserName" placeholder="Passport Seriasi" required>
            </div>
            <div>
               <label for="">Tug’ulgan sanasi</label>
               <input type="date" name="date" class="input-UserName" placeholder="Tug’ulgan sanasi" required>
            </div>
            <div>
               <label for="">Jinsi</label>
               <select name="jins" class="input-UserName" required>
                  <option value="">Jinsi</option>
                  <option value="ayol">ayol</option>
                  <option value="erkak">erkak</option>
               </select>
            </div>
            <div>
               <label for="">Manzili</label>
               <input type="text" name="manzil" class="input-UserName" placeholder="Manzili" required>
            </div>
            <div>
               <label for="">Tel raqam</label>
               <input type="number" name="tel" class="input-UserName" placeholder="Tel raqam" required>
            </div>
         </div>
         <div class="row3">
            <button type="submit" name="saveoquvchilar" class="btn_main saveoquvchilar active">Saqlash</button>
         </div>
      </form>
   </div>

   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <form action="" method="post">
            <input type="hidden" name="id1" class="idHodim">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Tekshiruv</h5>
               </div>
               <div class="modal-body">
                  <p class="madal_text"></p>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" id="closeMadal" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary deleteHodim" name="delete">Save changes</button>
               </div>
            </div>
         </form>
      </div>
   </div>

   <!--Yangilash uchun  -->
   <div class="section section3 ">
      <?php if (isset($_POST['updateBTN']) && isset($_POST['id1']) && !empty($_POST['id1'])) : ?>
         <?php foreach (GetAll('students', $_POST['id1'], '') as $key => $value) : ?>
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
                           <img src="<?php
                                       if ($oquvchi['picture'] === '') {
                                          echo $config['base']['url'] . 'web/img/const/defalut.jpg';
                                       } else {
                                          echo $config['base']['url'] . 'web/img/oquvchilar/' . $oquvchi['picture'];
                                       }
                                       ?>" alt="" id="imgUrl">
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
                        <option value="<?= $value['sex'] ?>" hidden> <?= $value['sex'] ?></option>
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
               </div>
               <div class="row3 hodimqoshishBtn">
                  <button class="btn_main updateBtn" name="yangilashoq">Yangilash</button>
               </div>
            </form>
         <?php endforeach; ?>
      <?php endif; ?>
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
<script src="<?= $config['base']['url'] . 'web/' ?>js/system/oquvchilar.js"></script>
<script>
   // search qidirish oynasi
   const search = document.querySelector('#search');
   const list = document.querySelector('.hodim_item ul').querySelectorAll('li .userName1')
   const list_pre = document.querySelector('.hodim_item ul').querySelectorAll('li')

   function filter_list(itemInput, itemList, itemListPre) {
      itemList.forEach((element, index) => {
         itemListPre.forEach((e, i) => {
            if (index == i) {
               let re = new RegExp(itemInput.value, 'i');
               if (re.test(element.textContent)) {
                  element.innerHTML = element.textContent.replace(re, '<b>$&</b>');
                  e.style.display = 'flex';
               } else {
                  e.style.display = 'none';
               }
            }
         })
      })
   }
   search.addEventListener('input', () => {
      filter_list(search, list, list_pre)
   })
</script>
<?php
// qoshish
if (isset($_POST['saveoquvchilar'])) {
   if (
      (isset($_POST['ismi']) && !empty($_POST['ismi'])) &&
      (isset($_POST['fam']) && !empty($_POST['fam'])) &&
      (isset($_POST['otasinisimi']) && !empty($_POST['otasinisimi'])) &&
      (isset($_POST['pasport']) && !empty($_POST['pasport'])) &&
      (isset($_POST['date']) && !empty($_POST['date'])) &&
      (isset($_POST['jins']) && !empty($_POST['jins'])) &&
      (isset($_POST['manzil']) && !empty($_POST['manzil'])) &&
      (isset($_POST['tel']) && !empty($_POST['tel']))
   ) {
      $file = '';
      if (!empty($_FILES['file']['name'])) {
         $name = $_POST['ismi'] . time() . $_FILES['file']['name'];
         move_uploaded_file($_FILES['file']['tmp_name'], '../web/img/oquvchilar/' . $name);
         $file = $name;
      } else {
         $file = ' ';
      }
      $aloqaInputGet = test_input([
         $_POST['ismi'],
         $_POST['fam'],
         $_POST['otasinisimi'],
         $file,
         $_POST['jins'],
         $_POST['pasport'],
         $_POST['date'],
         $_POST['manzil'],
         $_POST['tel'],
      ]);

      if (
         getInsert(
            'students',
            [
               'name',
               'last_name',
               'father_name',
               'picture',
               'sex',
               'pas_sery',
               'date',
               'home_town',
               'tel'
            ],
            $aloqaInputGet
         )
      ) {
         $_SESSION['error'] = "Yangi o'quvchi qo'shildi 😁";
         reflesh(url_system, 'oquvchilar');
      } else {
         $_SESSION['error'] = "Ma'lumotlarda xatolik ⛔";
         reflesh(url_system, 'oquvchilar');
      }
   }
}
// o'chirish
if (isset($_POST['delete'])) {
   if (getItemsDelet('students', 'id', [$_POST['id1']])) {
      $_SESSION['error'] = "O'quvchi o'childi 😁";
      unlink('../web/img/oquvchilar/' . $_POST['oquvchiIMG']);
      reflesh(url_system, 'oquvchilar');
   }
}

// yangilash
if (isset($_POST['yangilashoq'])) {
   if (
      (isset($_POST['file_id']) && !empty($_POST['file_id'])) &&
      (isset($_POST["ism"]) && !empty($_POST["ism"])) &&
      (isset($_POST["fam"]) && !empty($_POST["fam"])) &&
      (isset($_POST["otasiniIsmi"]) && !empty($_POST["otasiniIsmi"])) &&
      (isset($_POST["sana"]) && !empty($_POST["sana"])) &&
      (isset($_POST["jins"]) && !empty($_POST["jins"])) &&
      (isset($_POST["manzil"]) && !empty($_POST["manzil"])) &&
      (isset($_POST["pasport"]) && !empty($_POST["pasport"])) &&
      (isset($_POST["tel"]) && !empty($_POST["tel"]))
   ) {
      $db = connection();
      $filname = $db->query("SELECT * FROM teachers WHERE id='{$_POST["file_id"]}'");
      $r = $filname->fetch_array();
      $file1 = $r['picture'];

      $aloqaInputGet = test_input1([
         $_POST['ism'],
         $_POST['fam'],
         $_POST['otasiniIsmi'],
         $file1,
         $_POST['jins'],
         $_POST['pasport'],
         $_POST['sana'],
         $_POST['manzil'],
         $_POST['tel'],
         $_POST['file_id'],
      ]);

      $sql = $db->query("UPDATE students SET 
      name = '{$aloqaInputGet[0]}',
      last_name = '{$aloqaInputGet[1]}',
      father_name = '{$aloqaInputGet[2]}',
      picture = '{$aloqaInputGet[3]}',
      sex = '{$aloqaInputGet[4]}',
      pas_sery = '{$aloqaInputGet[5]}',
      date = '{$aloqaInputGet[6]}',
      home_town = '{$aloqaInputGet[7]}',
      tel = '{$aloqaInputGet[8]}'
      WHERE id= $aloqaInputGet[9]");
      if ($sql) {
         $_SESSION['error'] = "O'quvchi ma'lumotlari o'zgartitildi 😁";
         reflesh(url_system, 'oquvchilar');
      } else {
         $_SESSION['error'] = "Xatolik mavjud ⛔";
         reflesh(url_system, 'oquvchilar');
         echo 'false';
      }
   }
}



?>