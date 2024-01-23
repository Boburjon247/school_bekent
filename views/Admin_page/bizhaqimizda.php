<div class="main-panel">
     <div class="content-wrapper">
          <div class="row">
               <div class="col-12 admin_BS" style="margin-top: 20px;">
                    <p>Prezident Maktablari, Maktab haqida</p>
               </div>
               <div class="col-6">
                    <div class="bg">
                         <p>Maktab haqida</p>
                         <div id="tabsx" class="tab haqida_tab mkt-haqida">
                              <ul class="tab_items">
                                   <li><a href="#tabs-1">uzb</a></li>
                                   <li><a href="#tabs-2">eng</a></li>
                                   <li><a href="#tabs-3">rus</a></li>
                              </ul>
                              <form action="" method="post">
                                   <?php foreach (GetAll('admin_m_haqida', 'false', 'asc') as $key => $text) : ?>
                                        <div id="tabs-1" class="tab_item">
                                             <div action="" method="post" class="textUchunForma ">
                                                  <textarea class="textUchun " name="text_uz" placeholder="Haqida"><?= $text['text_uz'] ?></textarea>
                                             </div>
                                        </div>
                                        <div id="tabs-2" class="tab_item">
                                             <div action="" method="post" class="textUchunForma ">
                                                  <textarea class="textUchun" name="text_en" placeholder="About"><?= $text['text_en'] ?></textarea>
                                             </div>
                                        </div>
                                        <div id="tabs-3" class="tab_item">
                                             <div action="" method="post" class="textUchunForma ">
                                                  <textarea class="textUchun" name="text_ru" placeholder="O"><?= $text['text_ru'] ?></textarea>
                                             </div>
                                        </div>
                                        <button type="submit" name="haqida" class="btn btn-outline-warning btn-fw mkt-toliq-mal">Saqlash</button>
                                   <?php endforeach; ?>

                              </form>
                         </div>
                    </div>
               </div>
               <?php
               if (isset($_POST['haqida'])) {
                    if (
                         (isset($_POST['text_uz']) && !empty($_POST['text_uz'])) &&
                         (isset($_POST['text_ru']) && !empty($_POST['text_ru'])) &&
                         (isset($_POST['text_en']) && !empty($_POST['text_en']))
                    ) {
                         $aloqaInputGet = test_input([
                              $_POST['text_uz'],
                              $_POST['text_en'],
                              $_POST['text_ru']
                         ]);
                         $db = connection();
                         $sql = $db->query("UPDATE admin_m_haqida SET 
                                   text_uz = '{$aloqaInputGet[0]}',
                                   text_en = '{$aloqaInputGet[1]}',
                                   text_ru = '{$aloqaInputGet[2]}'
                                   ");
                         if ($sql) {
                              reflesh(url_admin, 'bizhaqimizda');
                         }
                    }
               }
               ?>
               <div class="col-6">
                    <div class="bg">
                         <p>Prezident Maktablari</p>
                         <ul class="row prm-haqida">
                              <?php foreach (GetAll('admin_maktablar_linklar', 'false', 'asc') as $key => $text) : ?>
                                   <li class="col-4">
                                        <form action="" method="post">
                                             <input type="hidden" name="id" value="<?= $text['id'] ?>">
                                             <input type="hidden" name="img" value="<?= $text['img'] ?>">
                                             <div class="content-prm">
                                                  <div class="img" style="background-image: url('<?= $config['base']['url'] . 'web/img/maktanlar-logo/' . $text['img'] ?>');">
                                                  </div>
                                                  <div class="text">
                                                       <p><?= $text['text_uz'] ?></p>
                                                       <span><?= $text['link'] ?></span>
                                                  </div>
                                                  <button name="deleteRasim" type="submit" class="deleteRasim"><i class="fa-solid fa-trash fa-shake" style="color: #ff0000;"></i></button>
                                             </div>
                                        </form>
                                   </li>
                              <?php endforeach; ?>
                         </ul>
                         <form class="row p-2" method="post" enctype="multipart/form-data">
                              <div class="col-4">
                                   <div class="imgUser prm-img">
                                        <label for="file4">
                                             <div class="deleteRasim" style="border: 1px solid #767676;">
                                                  <i style="color: lime;" class="fa-solid fa-circle-plus"></i>
                                             </div>
                                             <img src="" alt="" id="imgUrl4">
                                        </label>
                                        <input type="file" name="file" class=" lableImg4 input-UserName" id="file4" visibility="none" style="display: none;">
                                   </div>
                              </div>
                              <div class="col-8">
                                   <div id="tabsxl" class="tab haqida_tab">
                                        <ul class="tab_items">
                                             <li><a href="#tabs-1">uzb</a></li>
                                             <li><a href="#tabs-2">eng</a></li>
                                             <li><a href="#tabs-3">rus</a></li>
                                        </ul>
                                        <div id="tabs-1" class="tab_item">
                                             <div class="textUchunForma">
                                                  <input name="text_uz" class="input" type="text" placeholder="Nomi">
                                                  <input name="link" class="input" type="text" placeholder="Linki">
                                             </div>
                                        </div>
                                        <div id="tabs-2" class="tab_item">
                                             <div class="textUchunForma">
                                                  <input name="text_en" class="input" type="text" placeholder="Nomi">

                                             </div>
                                        </div>
                                        <div id="tabs-3" class="tab_item">
                                             <div class="textUchunForma">
                                                  <input name="text_ru" class="input" type="text" placeholder="Nomi">
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <button name="prizdentML" type="submit" class="btn btn-outline-warning btn-fw img-saqlash">Saqlash</button>
                         </form>
                    </div>
               </div>
          </div>
          <?php
          //  qoshish
          if (isset($_POST['prizdentML'])) {
               if (
                    (isset($_POST['text_uz']) && !empty($_POST['text_uz'])) &&
                    (isset($_POST['text_en']) && !empty($_POST['text_en'])) &&
                    (isset($_POST['text_ru']) && !empty($_POST['text_ru'])) &&
                    (isset($_POST['link']) && !empty($_POST['link']))
               ) {
                    if ($_FILES['file']['size'] < 4608000) {
                         $png = 'image/png';
                         $jpeg = 'image/jpeg';
                         if ($_FILES['file']['type'] == $png || $_FILES['file']['type'] == $jpeg) {
                              $array_file_name = explode('.', $_FILES['file']['name']);
                              $type = count($array_file_name) - 1;
                              $name = $_POST['text_uz'] . time() . '.' . $array_file_name[$type];
                              $bool = move_uploaded_file($_FILES['file']['tmp_name'], '../web/img/maktanlar-logo/' . $name);
                              if ($bool) {
                                   $aloqaInputGet = test_input([
                                        $_POST['text_uz'],
                                        $_POST['text_en'],
                                        $_POST['text_ru'],
                                        $_POST['link'],
                                        $name
                                   ]);
                                   if (getInsert(
                                        'admin_maktablar_linklar',
                                        ['text_uz', 'text_en', 'text_ru', 'link', 'img'],
                                        $aloqaInputGet
                                   )) {
                                        reflesh(url_admin, 'bizhaqimizda');
                                   }
                              } else {
                                   echo 'saqlanmadi';
                              }
                         } else {
                              echo 'notogri fayl';
                         }
                    } else {
                         echo 'hazmi katta';
                    }
               }
          }
          // ochirish
          if (isset($_POST['deleteRasim'])) {
               if (getItemsDelet('admin_maktablar_linklar', 'id', [$_POST['id']])) {
                    unlink('../web/img/maktanlar-logo/' . $_POST['img']);
                    reflesh(url_admin, 'bizhaqimizda');
               }
          }
          ?>

          ?>
          <div class="row">
               <div class="col-12 admin_BS" style="margin-top: 20px;">
                    <p>Rahbariyat</p>
               </div>
               <div class="col-12">
                    <div class="row">
                         <div class="col-8">
                              <div class="bg">
                                   <p>Qoshish</p>
                                   <form action="">
                                        <li class="row">
                                             <div class="col-4">
                                                  <div class="imgUser rahbar-img">
                                                       <label for="file5">
                                                            <div class="deleteRasim" style="border: 1px solid #767676;">
                                                                 <i style="color: lime;" class="fa-solid fa-circle-plus"></i>
                                                            </div>
                                                            <img src="" alt="" id="imgUrl5">
                                                       </label>
                                                       <input type="file" name="file" class=" lableImg5 input-UserName" id="file5" visibility="none" style="display: none;">
                                                  </div>
                                             </div>
                                             <div class="col-8">
                                                  <label style="margin-top: 10px;" for="">Ism</label>
                                                  <input style="color: #fff; margin-bottom: 20px;" type="text" name="ism" id="" placeholder="ism" class="input">
                                                  <label for="">Fam</label>
                                                  <input style="color: #fff;" type="text" name="fam" id="" placeholder="fam" class="input">
                                             </div>
                                        </li>
                                        <li class="ulLI">
                                             <label for="">Lavozim</label>
                                             <input class="input" type="text" placeholder="Lavozim">
                                        </li>
                                        <li class="ulLI">
                                             <label for="">Email</label>
                                             <input class="input" type="text" placeholder="Email">
                                        </li>
                                        <li class="ulLI">
                                             <label for="">Telefon raqami</label>
                                             <input class="input" type="text" placeholder="Telefon raqami">
                                        </li>
                                        <li class="ulLI">
                                             <label for="">Qabul kunlari</label>
                                             <input class="input" type="text" placeholder="Qabul kunlari">
                                        </li>
                                        <li class="ulLI">
                                             <label for="">Manzil</label>
                                             <input class="input" type="text" placeholder="Manzil">
                                        </li>
                                        <li class="ulLI">
                                             <label for="" style="display: block;">
                                                  Tarjimaviy xoli
                                             </label>
                                             <textarea placeholder="Tarjimaviy xoli" style="
                                                                 width: 100%; 
                                                                 background-color: #282C35;
                                                                 color: #fff;
                                                                 padding: 12px;
                                                                 height: 180px;
                                                                 "></textarea>
                                        </li>
                                        <li class="ulLI">
                                             <button type="button" class="btn btn-outline-warning btn-fw img-saqlash">Saqlash</button>
                                        </li>

                                   </form>
                              </div>
                         </div>
                         <div class="col-4">
                              <div class="bg hodimlarISM">
                                   <p>O'chirish</p>
                                   <ul class="hodimlarRoyhatiDelete">
                                        <li>
                                             <div class="text">
                                                  <div class="img">
                                                       <img src="assets/img/banner_6.jpg" alt="">
                                                  </div>
                                                  <p>
                                                       Bobur
                                                       <span>Lavomiz</span>
                                                  </p>
                                             </div>
                                             <div class="btn">
                                                  <button class=""><i class="fa-solid fa-trash fa-shake" style="color: #ff0000;"></i></button>
                                             </div>
                                        </li>
                                        <li>
                                             <div class="text">
                                                  <div class="img">
                                                       <img src="assets/img/banner_6.jpg" alt="">
                                                  </div>
                                                  <p>
                                                       Bobur
                                                       <span>Lavomiz</span>
                                                  </p>
                                             </div>
                                             <div class="btn">
                                                  <button class=""><i class="fa-solid fa-trash fa-shake" style="color: #ff0000;"></i></button>
                                             </div>
                                        </li>
                                        <li>
                                             <div class="text">
                                                  <div class="img">
                                                       <img src="assets/img/banner_6.jpg" alt="">
                                                  </div>
                                                  <p>
                                                       Bobur
                                                       <span>Lavomiz</span>
                                                  </p>
                                             </div>
                                             <div class="btn">
                                                  <button class=""><i class="fa-solid fa-trash fa-shake" style="color: #ff0000;"></i></button>
                                             </div>
                                        </li>
                                        <li>
                                             <div class="text">
                                                  <div class="img">
                                                       <img src="assets/img/banner_6.jpg" alt="">
                                                  </div>
                                                  <p>
                                                       Bobur
                                                       <span>Lavomiz</span>
                                                  </p>
                                             </div>
                                             <div class="btn">
                                                  <button class=""><i class="fa-solid fa-trash fa-shake" style="color: #ff0000;"></i></button>
                                             </div>
                                        </li>
                                        <li>
                                             <div class="text">
                                                  <div class="img">
                                                       <img src="assets/img/banner_6.jpg" alt="">
                                                  </div>
                                                  <p>
                                                       Bobur
                                                       <span>Lavomiz</span>
                                                  </p>
                                             </div>
                                             <div class="btn">
                                                  <button class=""><i class="fa-solid fa-trash fa-shake" style="color: #ff0000;"></i></button>
                                             </div>
                                        </li>
                                        <li>
                                             <div class="text">
                                                  <div class="img">
                                                       <img src="assets/img/banner_6.jpg" alt="">
                                                  </div>
                                                  <p>
                                                       Bobur
                                                       <span>Lavomiz</span>
                                                  </p>
                                             </div>
                                             <div class="btn">
                                                  <button class=""><i class="fa-solid fa-trash fa-shake" style="color: #ff0000;"></i></button>
                                             </div>
                                        </li>
                                        <li>
                                             <div class="text">
                                                  <div class="img">
                                                       <img src="assets/img/banner_6.jpg" alt="">
                                                  </div>
                                                  <p>
                                                       Bobur
                                                       <span>Lavomiz</span>
                                                  </p>
                                             </div>
                                             <div class="btn">
                                                  <button class=""><i class="fa-solid fa-trash fa-shake" style="color: #ff0000;"></i></button>
                                             </div>
                                        </li>
                                        <li>
                                             <div class="text">
                                                  <div class="img">
                                                       <img src="assets/img/banner_6.jpg" alt="">
                                                  </div>
                                                  <p>
                                                       Bobur
                                                       <span>Lavomiz</span>
                                                  </p>
                                             </div>
                                             <div class="btn">
                                                  <button class=""><i class="fa-solid fa-trash fa-shake" style="color: #ff0000;"></i></button>
                                             </div>
                                        </li>
                                        <li>
                                             <div class="text">
                                                  <div class="img">
                                                       <img src="assets/img/banner_6.jpg" alt="">
                                                  </div>
                                                  <p>
                                                       Bobur
                                                       <span>Lavomiz</span>
                                                  </p>
                                             </div>
                                             <div class="btn">
                                                  <button class=""><i class="fa-solid fa-trash fa-shake" style="color: #ff0000;"></i></button>
                                             </div>
                                        </li>
                                        <li>
                                             <div class="text">
                                                  <div class="img">
                                                       <img src="assets/img/banner_6.jpg" alt="">
                                                  </div>
                                                  <p>
                                                       Bobur
                                                       <span>Lavomiz</span>
                                                  </p>
                                             </div>
                                             <div class="btn">
                                                  <button class=""><i class="fa-solid fa-trash fa-shake" style="color: #ff0000;"></i></button>
                                             </div>
                                        </li>
                                        <li>
                                             <div class="text">
                                                  <div class="img">
                                                       <img src="assets/img/banner_6.jpg" alt="">
                                                  </div>
                                                  <p>
                                                       Bobur
                                                       <span>Lavomiz</span>
                                                  </p>
                                             </div>
                                             <div class="btn">
                                                  <button class=""><i class="fa-solid fa-trash fa-shake" style="color: #ff0000;"></i></button>
                                             </div>
                                        </li>
                                        <li>
                                             <div class="text">
                                                  <div class="img">
                                                       <img src="assets/img/banner_6.jpg" alt="">
                                                  </div>
                                                  <p>
                                                       Bobur
                                                       <span>Lavomiz</span>
                                                  </p>
                                             </div>
                                             <div class="btn">
                                                  <button class=""><i class="fa-solid fa-trash fa-shake" style="color: #ff0000;"></i></button>
                                             </div>
                                        </li>
                                        <li>
                                             <div class="text">
                                                  <div class="img">
                                                       <img src="assets/img/banner_6.jpg" alt="">
                                                  </div>
                                                  <p>
                                                       Bobur
                                                       <span>Lavomiz</span>
                                                  </p>
                                             </div>
                                             <div class="btn">
                                                  <button class=""><i class="fa-solid fa-trash fa-shake" style="color: #ff0000;"></i></button>
                                             </div>
                                        </li>
                                   </ul>
                              </div>
                         </div>
                    </div>
               </div>
          </div>


          <div class="row">
               <div class="col-12 admin_BS" style="margin-top: 20px;">
                    <p>Xodimlar</p>
               </div>
               <div class="col-12">
                    <div class="row">
                         <div class="col-8">
                              <div class="bg">
                                   <p>Qoshish</p>
                                   <form action="">
                                        <li class="row">
                                             <div class="col-4">
                                                  <div class="imgUser rahbar-img">
                                                       <label for="file6">
                                                            <div class="deleteRasim" style="border: 1px solid #767676;">
                                                                 <i style="color: lime;" class="fa-solid fa-circle-plus"></i>
                                                            </div>
                                                            <img src="" alt="" id="imgUrl6">
                                                       </label>
                                                       <input type="file" name="file" class=" lableImg5 input-UserName" id="file6" visibility="none" style="display: none;">
                                                  </div>
                                             </div>
                                             <div class="col-8">
                                                  <label style="margin-top: 10px;" for="">Ism</label>
                                                  <input style="color: #fff; margin-bottom: 20px;" type="text" name="ism" id="" placeholder="ism" class="input">
                                                  <label for="">Fam</label>
                                                  <input style="color: #fff;" type="text" name="fam" id="" placeholder="fam" class="input">
                                             </div>
                                        </li>
                                        <li class="ulLI">
                                             <label for="">Muhaxasislik boyicha ma'lumot</label>
                                             <input class="input" type="text" placeholder="Muhaxasislik boyicha ma'lumot">
                                        </li>
                                        <li class="ulLI">
                                             <label for="">Email</label>
                                             <input class="input" type="text" placeholder="Email">
                                        </li>
                                        <li class="ulLI">
                                             <label for="">Telefon raqami</label>
                                             <input class="input" type="text" placeholder="Telefon raqami">
                                        </li>
                                        <li class="ulLI">
                                             <label for="">Telegram</label>
                                             <input class="input" type="text" placeholder="Qabul kunlari">
                                        </li>
                                        <li class="ulLI">
                                             <label for="">Instagram</label>
                                             <input class="input" type="text" placeholder="Instagram">
                                        </li>
                                        <li class="ulLI">
                                             <label for="">Facebook</label>
                                             <input class="input" type="text" placeholder="Facebook">
                                        </li>
                                        <li class="ulLI">
                                             <button type="button" class="btn btn-outline-warning btn-fw img-saqlash">Saqlash</button>
                                        </li>

                                   </form>
                              </div>
                         </div>
                         <div class="col-4">
                              <div class="bg hodimlarISM">
                                   <p>O'chirish</p>
                                   <ul class="hodimlarRoyhatiDelete">
                                        <li>
                                             <div class="text">
                                                  <div class="img">
                                                       <img src="assets/img/banner_6.jpg" alt="">
                                                  </div>
                                                  <p>
                                                       Bobur
                                                       <span>Lavomiz</span>
                                                  </p>
                                             </div>
                                             <div class="btn">
                                                  <button class=""><i class="fa-solid fa-trash fa-shake" style="color: #ff0000;"></i></button>
                                             </div>
                                        </li>
                                        <li>
                                             <div class="text">
                                                  <div class="img">
                                                       <img src="assets/img/banner_6.jpg" alt="">
                                                  </div>
                                                  <p>
                                                       Bobur
                                                       <span>Lavomiz</span>
                                                  </p>
                                             </div>
                                             <div class="btn">
                                                  <button class=""><i class="fa-solid fa-trash fa-shake" style="color: #ff0000;"></i></button>
                                             </div>
                                        </li>
                                        <li>
                                             <div class="text">
                                                  <div class="img">
                                                       <img src="assets/img/banner_6.jpg" alt="">
                                                  </div>
                                                  <p>
                                                       Bobur
                                                       <span>Lavomiz</span>
                                                  </p>
                                             </div>
                                             <div class="btn">
                                                  <button class=""><i class="fa-solid fa-trash fa-shake" style="color: #ff0000;"></i></button>
                                             </div>
                                        </li>
                                        <li>
                                             <div class="text">
                                                  <div class="img">
                                                       <img src="assets/img/banner_6.jpg" alt="">
                                                  </div>
                                                  <p>
                                                       Bobur
                                                       <span>Lavomiz</span>
                                                  </p>
                                             </div>
                                             <div class="btn">
                                                  <button class=""><i class="fa-solid fa-trash fa-shake" style="color: #ff0000;"></i></button>
                                             </div>
                                        </li>
                                        <li>
                                             <div class="text">
                                                  <div class="img">
                                                       <img src="assets/img/banner_6.jpg" alt="">
                                                  </div>
                                                  <p>
                                                       Bobur
                                                       <span>Lavomiz</span>
                                                  </p>
                                             </div>
                                             <div class="btn">
                                                  <button class=""><i class="fa-solid fa-trash fa-shake" style="color: #ff0000;"></i></button>
                                             </div>
                                        </li>
                                        <li>
                                             <div class="text">
                                                  <div class="img">
                                                       <img src="assets/img/banner_6.jpg" alt="">
                                                  </div>
                                                  <p>
                                                       Bobur
                                                       <span>Lavomiz</span>
                                                  </p>
                                             </div>
                                             <div class="btn">
                                                  <button class=""><i class="fa-solid fa-trash fa-shake" style="color: #ff0000;"></i></button>
                                             </div>
                                        </li>
                                        <li>
                                             <div class="text">
                                                  <div class="img">
                                                       <img src="assets/img/banner_6.jpg" alt="">
                                                  </div>
                                                  <p>
                                                       Bobur
                                                       <span>Lavomiz</span>
                                                  </p>
                                             </div>
                                             <div class="btn">
                                                  <button class=""><i class="fa-solid fa-trash fa-shake" style="color: #ff0000;"></i></button>
                                             </div>
                                        </li>
                                        <li>
                                             <div class="text">
                                                  <div class="img">
                                                       <img src="assets/img/banner_6.jpg" alt="">
                                                  </div>
                                                  <p>
                                                       Bobur
                                                       <span>Lavomiz</span>
                                                  </p>
                                             </div>
                                             <div class="btn">
                                                  <button class=""><i class="fa-solid fa-trash fa-shake" style="color: #ff0000;"></i></button>
                                             </div>
                                        </li>
                                        <li>
                                             <div class="text">
                                                  <div class="img">
                                                       <img src="assets/img/banner_6.jpg" alt="">
                                                  </div>
                                                  <p>
                                                       Bobur
                                                       <span>Lavomiz</span>
                                                  </p>
                                             </div>
                                             <div class="btn">
                                                  <button class=""><i class="fa-solid fa-trash fa-shake" style="color: #ff0000;"></i></button>
                                             </div>
                                        </li>
                                        <li>
                                             <div class="text">
                                                  <div class="img">
                                                       <img src="assets/img/banner_6.jpg" alt="">
                                                  </div>
                                                  <p>
                                                       Bobur
                                                       <span>Lavomiz</span>
                                                  </p>
                                             </div>
                                             <div class="btn">
                                                  <button class=""><i class="fa-solid fa-trash fa-shake" style="color: #ff0000;"></i></button>
                                             </div>
                                        </li>
                                        <li>
                                             <div class="text">
                                                  <div class="img">
                                                       <img src="assets/img/banner_6.jpg" alt="">
                                                  </div>
                                                  <p>
                                                       Bobur
                                                       <span>Lavomiz</span>
                                                  </p>
                                             </div>
                                             <div class="btn">
                                                  <button class=""><i class="fa-solid fa-trash fa-shake" style="color: #ff0000;"></i></button>
                                             </div>
                                        </li>
                                        <li>
                                             <div class="text">
                                                  <div class="img">
                                                       <img src="assets/img/banner_6.jpg" alt="">
                                                  </div>
                                                  <p>
                                                       Bobur
                                                       <span>Lavomiz</span>
                                                  </p>
                                             </div>
                                             <div class="btn">
                                                  <button class=""><i class="fa-solid fa-trash fa-shake" style="color: #ff0000;"></i></button>
                                             </div>
                                        </li>
                                        <li>
                                             <div class="text">
                                                  <div class="img">
                                                       <img src="assets/img/banner_6.jpg" alt="">
                                                  </div>
                                                  <p>
                                                       Bobur
                                                       <span>Lavomiz</span>
                                                  </p>
                                             </div>
                                             <div class="btn">
                                                  <button class=""><i class="fa-solid fa-trash fa-shake" style="color: #ff0000;"></i></button>
                                             </div>
                                        </li>
                                   </ul>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     <!-- partial -->
</div>