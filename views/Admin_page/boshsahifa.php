<div class="main-panel">
     <div class="content-wrapper">
          <!-- bosh sahifa -->
          <div class="row">
               <div class="col-12 admin_BS">
                    <p>Bosh sahifa</p>
               </div>
               <div class="col-5 ">
                    <div class="bg bs-text">
                         <p>Bosh sahifadagi text</p>
                         <div id="tabs" class="tab">
                              <ul class="tab_items">
                                   <li><a href="#tabs-1">uzb</a></li>
                                   <li><a href="#tabs-2">eng</a></li>
                                   <li><a href="#tabs-3">rus</a></li>
                              </ul>
                              <form action="" method="post">
                                   <?php foreach (GetAll('admin_boshsahifa_salyder_text', 'false', 'asc') as $key => $text) : ?>
                                        <div id="tabs-1" class="tab_item">
                                             <div class="textUchunForma">
                                                  <textarea class="textUchun" name="title_uz" placeholder="sahifa1"><?= $text['title_uz'] ?></textarea>
                                                  <textarea class="textUchun" name="sahifa_uz" placeholder="saxifa2"><?= $text['text_uz'] ?></textarea>
                                             </div>
                                        </div>
                                        <div id="tabs-2" class="tab_item">
                                             <div class="textUchunForma">
                                                  <textarea class="textUchun" name="title_en" placeholder="page"><?= $text['title_ru'] ?></textarea>
                                                  <textarea class="textUchun" name="sahifa_en" placeholder="page"><?= $text['text_ru'] ?></textarea>
                                             </div>
                                        </div>
                                        <div id="tabs-3" class="tab_item">
                                             <div class="textUchunForma">
                                                  <textarea class="textUchun" name="title_ru" placeholder="страница"><?= $text['title_en'] ?></textarea>
                                                  <textarea class="textUchun" name="sahifa_ru" placeholder="страница"><?= $text['text_en'] ?></textarea>
                                             </div>
                                        </div>
                                        <button type="submit" name="textBodyYangilash" class="btn btn-outline-warning btn-fw">Saqlash</button>
                                   <?php endforeach; ?>
                              </form>
                         </div>
                    </div>
               </div>
               <div class="col-7">
                    <div class="bg bs-img">
                         <p>Bosh sahifa rasimlar</p>
                         <div class="borderdiv rasimqoshish">
                              <form action="" method="post" enctype="multipart/form-data">
                                   <ul class="row rasim-qoshish">
                                        <?php foreach (GetAll('admin_boshsahifa_salyder_img', 'false', 'asc') as $key => $img) : ?>
                                             <li class="col-3">
                                                  <input type="hidden" value="<?= $img['id'] ?>" name="id" id="">
                                                  <input type="hidden" value="<?= $img['img'] ?>" name="img" id="">
                                                  <div class="con1">
                                                       <div class="imgSCR" style="background-image: url('<?= $config['base']['url'] . 'web/img/body/' . $img['img'] ?>');">
                                                       </div>
                                                       <button name="deleteImg" class="deleteRasim"><i class="fa-solid fa-trash fa-shake" style="color: #ff0000;"></i></button>
                                                  </div>
                                             </li>
                                        <?php endforeach; ?>
                                        <li class="col-3">
                                             <div class="con1 imgUser addRadim">
                                                  <label for="file">
                                                       <div class="deleteRasim" style="border: 1px solid #767676;">
                                                            <i style="color: lime;" class="fa-solid fa-circle-plus"></i>
                                                       </div>
                                                       <img src="" alt="" id="imgUrl">
                                                  </label>
                                                  <input type="file" name="file" class=" lableImg input-UserName" id="file" visibility="none" style="display: none;">
                                             </div>
                                        </li>
                                   </ul>
                                   <div style="display: flex; align-items: center; justify-content: space-between;">
                                        <button type="submit" name="bodyrasim" class="btn btn-outline-warning btn-fw rasimsaqlash">Saqlash</button>
                                   </div>
                              </form>
                         </div>
                    </div>
               </div>
          </div>


          <?php
          // bosh sahifa rasimlarni ozgartirish uchun;
          // qoshish
          if (isset($_POST['bodyrasim'])) {
               if ($_FILES['file']['name'] !== '') {
                    if ($_FILES['file']['size'] < 4608000) {
                         $array_file_name = explode('.', $_FILES['file']['name']);
                         $type = count($array_file_name) - 1;
                         $name = 'body' . time() . '.' . $array_file_name[$type];
                         move_uploaded_file($_FILES['file']['tmp_name'], '../web/img/body/' . $name);
                         getInsert('admin_boshsahifa_salyder_img', ['img'], [$name]);
                         reflesh(url_admin, 'boshsahifa');
                    } else {
                         echo 'fayl katta';
                    }
               }
          }
          // ochirish
          if (isset($_POST['deleteImg'])) {
               if (getItemsDelet('admin_boshsahifa_salyder_img', 'id', [$_POST['id']])) {
                    unlink('../web/img/body/' . $_POST['img']);
                    reflesh(url_admin, 'boshsahifa');
               }
          }

          // asosiy oynadagi text
          if (isset($_POST['textBodyYangilash'])) {
               if (
                    (isset($_POST['sahifa_uz']) && !empty($_POST['sahifa_uz'])) &&
                    (isset($_POST['title_uz']) && !empty($_POST['title_uz'])) &&
                    (isset($_POST['sahifa_ru']) && !empty($_POST['sahifa_ru'])) &&
                    (isset($_POST['title_ru']) && !empty($_POST['title_ru'])) &&
                    (isset($_POST['title_en']) && !empty($_POST['title_en'])) &&
                    (isset($_POST['sahifa_en']) && !empty($_POST['sahifa_en']))
               ) {
                    $aloqaInputGet = test_input([
                         $_POST['title_uz'],
                         $_POST['sahifa_uz'],
                         $_POST['title_ru'],
                         $_POST['sahifa_ru'],
                         $_POST['title_en'],
                         $_POST['sahifa_en'],
                    ]);
                    $db = connection();
                    $sql = $db->query("UPDATE admin_boshsahifa_salyder_text SET 
                         title_uz = '{$aloqaInputGet[0]}',
                         text_uz = '{$aloqaInputGet[1]}',
                         title_ru	 = '{$aloqaInputGet[2]}',
                         text_ru = '{$aloqaInputGet[3]}',
                         title_en = '{$aloqaInputGet[4]}',
                         text_en = '{$aloqaInputGet[5]}'
                         ");
                    if ($sql) {
                         reflesh(url_admin, 'boshsahifa');
                    }
               }
          }

          ?>

          <!-- haqida, faxrili oquvchilar,video -->
          <div class="row">
               <div class="col-12 admin_BS" style="margin-top: 20px;">
                    <p>Farg'ona shahr prezident maktab qisqacha ma'lumot, Vidyo va Faxrli o'quvchilar</p>
               </div>
               <div class="col-8">
                    <div class="bg">
                         <p>Maktabimiz faxrlari</p>
                         <div class="row">
                              <div class="col-12">
                                   <ul class="f-oquvchi-haqida">
                                        <?php foreach (GetAll('admin_boshsahifa_maktab_faxrli_o', 'false', 'asc') as $key => $text) : ?>
                                             <form action="" method="post">
                                                  <input type="hidden" name="id" value="<?= $text['id'] ?>">
                                                  <input type="hidden" name="img" value="<?= $text['img'] ?>">
                                                  <li>
                                                       <div class="img">
                                                            <img src="<?= $config['base']['url'] . 'web/img/faxrlioquvchilar/' . $text['img'] ?>" alt="">
                                                       </div>
                                                       <div class="text">
                                                            <p><?= $text['fish'] ?></p>
                                                            <span><?= $text['sinif'] ?></span>
                                                       </div>
                                                       <button type="submit" name="deleteFax_o" class="deleteRasim"><i class="fa-solid fa-trash fa-shake" style="color: #ff0000;"></i></button>
                                                  </li>
                                             </form>
                                        <?php endforeach; ?>
                                   </ul>
                              </div>
                              <div class="col-12">
                                   <form class="row" action="" method="post" enctype="multipart/form-data">
                                        <div class="col-4 f-oquvchi-qoshish p-0">
                                             <div class="imgUser">
                                                  <label for="file1">
                                                       <div class="deleteRasim" style="border: 1px solid #767676;">
                                                            <i style="color: lime;" class="fa-solid fa-circle-plus"></i>
                                                       </div>
                                                       <img src="" alt="" id="imgUrl1">
                                                  </label>
                                                  <input type="file" name="file" class=" lableImg1 input-UserName" id="file1" visibility="none" style="display: none;">
                                             </div>
                                        </div>
                                        <div class="col-8">
                                             <div class="add-o">
                                                  <label for="">Fish</label>
                                                  <input name="fish" type="text" placeholder="Fish">
                                                  <label for="">Sinif</label>
                                                  <input name="sinif" type="text" placeholder="Sinifi">
                                                  <button type="submit" name="faxirliadd" class="btn btn-outline-warning btn-fw">Saqlash</button>
                                             </div>
                                        </div>
                                   </form>
                              </div>
                              <!--qoshish  -->
                              <?php
                              if (isset($_POST['faxirliadd'])) {
                                   if (
                                        (isset($_POST['fish']) && !empty($_POST['fish'])) &&
                                        (isset($_POST['sinif']) && !empty($_POST['sinif']))
                                   ) {
                                        if ($_FILES['file']['size'] < 4608000) {
                                             $png = 'image/png';
                                             $jpeg = 'image/jpeg';
                                             if ($_FILES['file']['type'] == $png || $_FILES['file']['type'] == $jpeg) {
                                                  $array_file_name = explode('.', $_FILES['file']['name']);
                                                  $type = count($array_file_name) - 1;
                                                  $name = 'oquvchi' . time() . '.' . $array_file_name[$type];
                                                  $bool = move_uploaded_file($_FILES['file']['tmp_name'], '../web/img/faxrlioquvchilar/' . $name);
                                                  if ($bool) {
                                                       $aloqaInputGet = test_input([
                                                            $_POST['fish'],
                                                            $_POST['sinif'],
                                                            $name
                                                       ]);
                                                       if (getInsert(
                                                            'admin_boshsahifa_maktab_faxrli_o',
                                                            ['fish', 'sinif', 'img'],
                                                            $aloqaInputGet
                                                       )) {
                                                            reflesh(url_admin, 'boshsahifa');
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
                              ?>
                              <!-- ochiriash -->
                              <?php
                              if (isset($_POST['deleteFax_o'])) {
                                   if (getItemsDelet('admin_boshsahifa_maktab_faxrli_o', 'id', [$_POST['id']])) {
                                        unlink('../web/img/faxrlioquvchilar/' . $_POST['img']);
                                        reflesh(url_admin, 'boshsahifa');
                                   }
                              }
                              ?>
                         </div>
                    </div>
               </div>
               <div class="col-4">
                    <div class="bg mb-3">
                         <p>Qisqacha ma'lumot</p>
                         <div id="tabsx" class="tab haqida_tab">
                              <form action="" method="post">
                                   <ul class="tab_items">
                                        <li><a href="#tabs-1">uzb</a></li>
                                        <li><a href="#tabs-2">eng</a></li>
                                        <li><a href="#tabs-3">rus</a></li>
                                   </ul>
                                   <?php foreach (GetAll('admin_boshsahifa_maktab_haqida', 'false', 'asc') as $key => $text_m_h) : ?>
                                        <div id="tabs-1" class="tab_item">
                                             <div class="textUchunForma">
                                                  <textarea name="text_m_h_uz" class="textUchun " name="sahifa" placeholder="Haqida"><?= $text_m_h['text_uz'] ?></textarea>
                                             </div>
                                        </div>
                                        <div id="tabs-2" class="tab_item">
                                             <div class="textUchunForma">
                                                  <textarea name="text_m_h_en" class="textUchun" name="sahifa" placeholder="About"><?= $text_m_h['text_en'] ?></textarea>
                                             </div>
                                        </div>
                                        <div id="tabs-3" class="tab_item">
                                             <div class="textUchunForma">
                                                  <textarea name="text_m_h_ru" class="textUchun" name="sahifa" placeholder="O"><?= $text_m_h['text_ru'] ?></textarea>
                                             </div>
                                        </div>
                                   <?php endforeach; ?>

                                   <button type="sunmit" name="maktabhaqida" class="btn btn-outline-warning btn-fw">Saqlash</button>

                              </form>
                         </div>
                    </div>
                    <?php
                    if (isset($_POST['maktabhaqida'])) {
                         if (
                              (isset($_POST['text_m_h_uz']) && !empty($_POST['text_m_h_uz'])) &&
                              (isset($_POST['text_m_h_en']) && !empty($_POST['text_m_h_en'])) &&
                              (isset($_POST['text_m_h_ru']) && !empty($_POST['text_m_h_ru']))
                         ) {
                              $aloqaInputGet = test_input([
                                   $_POST['text_m_h_uz'],
                                   $_POST['text_m_h_ru'],
                                   $_POST['text_m_h_en'],
                              ]);
                              $db = connection();
                              $sql = $db->query("UPDATE admin_boshsahifa_maktab_haqida SET 
                                        text_uz = '{$aloqaInputGet[0]}',
                                        text_ru = '{$aloqaInputGet[1]}',
                                        text_en = '{$aloqaInputGet[2]}'
                                        ");
                              if ($sql) {
                                   reflesh(url_admin, 'boshsahifa');
                              }
                         }
                    }
                    ?>
                    <div class="bg" style="position: relative;">
                         <p>Vidyo</p>
                         <div class="videUser">
                              <form action="" method="post" enctype="multipart/form-data">
                                   <label for="file2">
                                        <div class="button-video">
                                             <div class="deleteRasim1 addVideoBody" style="border: 1px solid #767676;">
                                                  <i style="color: lime;" class="fa-solid fa-circle-plus"></i>
                                             </div>
                                             <button type="submit" name="video_qoshish" class="deleteRasim1">
                                                  <i class="fa-solid fa-check fa-flip" style="color: orange;"></i>
                                             </button>
                                             <button type="submit" name="video_ochirish" class="deleteRasim1">
                                                  <i class="fa-solid fa-trash fa-shake" style="color: #ff0000;"></i>
                                             </button>
                                        </div>
                                        <?php foreach (GetAll('admin_boshsahifa_maktab_video', 'false', 'asc') as $key => $video) : ?>
                                             <input type="hidden" name="id" value="<?= $video['id'] ?>">
                                             <input type="hidden" class="videoNameHidden" name="video" value="<?= $video['video'] ?>">
                                             <video controls src="<?= $config['base']['url'] . 'web/video/' . $video['video'] ?>" id="imgvideo"></video>
                                        <?php endforeach; ?>
                                   </label>
                                   <input type="file" name="file" class=" lableImg2 input-UserName" id="file2" visibility="none" style="display: none;">
                              </form>
                         </div>
                    </div>

                    <!-- //video qoshish -->
                    <?php
                    if (isset($_POST['video_qoshish'])) {
                         $type = 'video/mp4';
                         if ($_FILES['file']['type'] == $type) {
                              $name = time() . $_FILES['file']['name'];
                              $bool = move_uploaded_file($_FILES['file']['tmp_name'], '../web/video/' . $name);
                              if ($bool) {
                                   getInsert('admin_boshsahifa_maktab_video', ['video'], [$name]);
                                   reflesh(url_admin, 'boshsahifa');
                              } else {

                                   echo 'yuklanmadi';
                              }
                         } else {
                              echo 'fayl notogri';
                         }
                    }
                    ?>
                    <!-- video ochirish -->
                    <?php
                    if (isset($_POST['video_ochirish'])) {
                         if (getItemsDelet('admin_boshsahifa_maktab_video', 'id', [$_POST['id']])) {
                              unlink('../web/video/' . $_POST['video']);
                              reflesh(url_admin, 'boshsahifa');
                         }
                    }
                    ?>
               </div>
          </div>


          <!-- footer -->
          <div class="row">
               <div class="col-12 admin_BS" style="margin-top: 20px;">
                    <p>Foydali saytlar, Footer</p>
               </div>
               <div class="col-6">
                    <div class="bg">
                         <p>Foydali saytlar</p>
                         <ul class="f-oquvchi-haqida foydaliLinklar">
                              <?php foreach (GetAll('admin_boshsahifa_foydali_linklar', 'false', 'asc') as $key => $text) : ?>
                                   <form action="" method="post">
                                        <li>
                                             <input type="hidden" name="id" value="<?= $text['id'] ?>">
                                             <input type="hidden" name="img" value="<?= $text['img'] ?>">
                                             <div class="img">
                                                  <img src="<?= $config['base']['url'] . 'web/img/linklar/' . $text['img'] ?>" alt="">
                                             </div>
                                             <div class="text">
                                                  <p><?= $text['nomi_uz'] ?></p>
                                             </div>
                                             <button type="submit" name="deleteLink" class="deleteRasim"><i class="fa-solid fa-trash fa-shake" style="color: #ff0000;"></i></button>
                                        </li>
                                   </form>
                              <?php endforeach; ?>
                         </ul>
                         <form class="row" action="" method="post" enctype="multipart/form-data">
                              <div class="col-4">
                                   <div class="imgUser linkIMGadd">
                                        <label for="file3">
                                             <div class="deleteRasim" style="border: 1px solid #767676;">
                                                  <i style="color: lime;" class="fa-solid fa-circle-plus"></i>
                                             </div>
                                             <img src="" alt="" id="imgUrl3">
                                        </label>
                                        <input type="file" name="file" class=" lableImg3 input-UserName" id="file3" visibility="none" style="display: none;">
                                   </div>
                              </div>
                              <div class="col-8">
                                   <div id="tabsxs" class="tab haqida_tab">
                                        <ul class="tab_items">
                                             <li><a href="#tabs-1">uzb</a></li>
                                             <li><a href="#tabs-2">eng</a></li>
                                             <li><a href="#tabs-3">rus</a></li>
                                        </ul>
                                        <div id="tabs-1" class="tab_item">
                                             <div action="" method="post" class="textUchunForma">
                                                  <input name="nomi_uz" type="text" class="input" placeholder="nomi">
                                                  <input name="link" type="text" class="input" placeholder="link">
                                             </div>
                                        </div>
                                        <div id="tabs-2" class="tab_item">
                                             <div action="" method="post" class="textUchunForma">
                                                  <input name="nomi_en" type="text" class="input" placeholder="nomi">
                                             </div>
                                        </div>
                                        <div id="tabs-3" class="tab_item">
                                             <div action="" method="post" class="textUchunForma">
                                                  <input name="nomi_ru" type="text" class="input" placeholder="nomi">
                                             </div>
                                        </div>
                                        <button name="foydaliLink" type="submit" class="btn btn-outline-warning btn-fw">Saqlash</button>
                                   </div>
                              </div>
                         </form>
                    </div>
                    <!-- qoshish -->
                    <?php
                    if (isset($_POST['foydaliLink'])) {
                         if (
                              (isset($_POST['nomi_uz']) && !empty($_POST['nomi_uz'])) &&
                              (isset($_POST['link']) && !empty($_POST['link'])) &&
                              (isset($_POST['nomi_en']) && !empty($_POST['nomi_en'])) &&
                              (isset($_POST['nomi_ru']) && !empty($_POST['nomi_ru']))
                         ) {
                              if ($_FILES['file']['size'] < 4608000) {
                                   $png = 'image/png';
                                   $jpeg = 'image/jpeg';
                                   if ($_FILES['file']['type'] == $png || $_FILES['file']['type'] == $jpeg) {
                                        $array_file_name = explode('.', $_FILES['file']['name']);
                                        $type = count($array_file_name) - 1;
                                        $name = 'link' . time() . '.' . $array_file_name[$type];
                                        $bool = move_uploaded_file($_FILES['file']['tmp_name'], '../web/img/linklar/' . $name);
                                        if ($bool) {
                                             $aloqaInputGet = test_input([
                                                  $_POST['nomi_uz'],
                                                  $_POST['nomi_en'],
                                                  $_POST['nomi_ru'],
                                                  $_POST['link'],
                                                  $name
                                             ]);
                                             if (getInsert(
                                                  'admin_boshsahifa_foydali_linklar',
                                                  ['nomi_uz', 'nomi_en', 'nomi_ru', 'link', 'img'],
                                                  $aloqaInputGet
                                             )) {
                                                  reflesh(url_admin, 'boshsahifa');
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
                    ?>
                    <!-- ochirish -->
                    <?php
                    if (isset($_POST['deleteLink'])) {
                         if (getItemsDelet('admin_boshsahifa_foydali_linklar', 'id', [$_POST['id']])) {
                              unlink('../web/img/linklar/' . $_POST['img']);
                              reflesh(url_admin, 'boshsahifa');
                         }
                    }
                    ?>

               </div>
               <div class="col-6">
                    <div class="bg footerInput">
                         <p>Footer</p>
                         <form action="" method="post">
                              <ul>
                                   <?php foreach (GetAll('admin_boshsahifa_footer', 'false', 'asc') as $key => $text) : ?>
                                        <li>
                                             <label for="">Telegram</label>
                                             <input name="telegram" value="<?= $text['telegram']?>" type="text" placeholder="Telegram">
                                        </li>
                                        <li>
                                             <label for="">Facebook</label>
                                             <input name="facebook" value="<?= $text['facebook']?>" type="text" placeholder="Facebook">
                                        </li>
                                        <li>
                                             <label for="">Youtube</label>
                                             <input name="youtube" value="<?= $text['youtube']?>" type="text" placeholder="Youtube">
                                        </li>
                                        <li>
                                             <label for="">Instagram</label>
                                             <input name="instagram" value="<?= $text['instagram']?>" type="text" placeholder="Instagram">
                                        </li>
                                        <li>
                                             <label for="">Twitter</label>
                                             <input name="twitter" value="<?= $text['twitter']?>" type="text" placeholder="Twitter">
                                        </li>
                                        <li>
                                             <label for="">Lakatsiya</label>
                                             <input name="lakatsiya" value="<?= $text['lakatsiya']?>" type="text" placeholder="Lakatsiya">
                                        </li>
                                        <li>
                                             <label for="">Telefon1</label>
                                             <input name="telefon1" value="<?= $text['telefon1']?>" type="tel" placeholder="Telefon1">
                                        </li>
                                        <li>
                                             <label for="">Telefon2</label>
                                             <input name="telefon2" value="<?= $text['telefon2']?>" type="tel" placeholder="Telefon2">
                                        </li>
                                        <li>
                                             <label for="">Email1</label>
                                             <input name="email1" value="<?= $text['email1']?>" type="email" placeholder="Email1">
                                        </li>
                                        <li>
                                             <label for="">Email2</label>
                                             <input name="email2" value="<?= $text['email2']?>" type="email" placeholder="Email2">
                                        </li>
                                   <?php endforeach; ?>
                              </ul>
                              <button name="footer" type="submit" class="btn btn-outline-warning btn-fw">Saqlash</button>
                         </form>
                    </div>
               </div>
               <?php
               if (isset($_POST['footer'])) {
                    if (
                         (isset($_POST['telegram']) && !empty($_POST['telegram'])) &&
                         (isset($_POST['facebook']) && !empty($_POST['facebook'])) &&
                         (isset($_POST['youtube']) && !empty($_POST['youtube'])) &&
                         (isset($_POST['instagram']) && !empty($_POST['instagram'])) &&
                         (isset($_POST['twitter']) && !empty($_POST['twitter'])) &&
                         (isset($_POST['lakatsiya']) && !empty($_POST['lakatsiya'])) &&
                         (isset($_POST['telefon1']) && !empty($_POST['telefon1'])) &&
                         (isset($_POST['telefon2']) && !empty($_POST['telefon2'])) &&
                         (isset($_POST['email1']) && !empty($_POST['email1'])) &&
                         (isset($_POST['email2']) && !empty($_POST['email2']))
                    ) {
                         $aloqaInputGet = test_input([
                              $_POST['telegram'],
                              $_POST['facebook'],
                              $_POST['youtube'],
                              $_POST['instagram'],
                              $_POST['twitter'],
                              $_POST['lakatsiya'],
                              $_POST['telefon1'],
                              $_POST['telefon2'],
                              $_POST['email1'],
                              $_POST['email2'],
                         ]);
                         $db = connection();
                         $sql = $db->query("UPDATE admin_boshsahifa_footer SET 
                              telegram = '{$aloqaInputGet[0]}',
                              facebook = '{$aloqaInputGet[1]}',
                              youtube = '{$aloqaInputGet[2]}',
                              instagram = '{$aloqaInputGet[3]}',
                              twitter = '{$aloqaInputGet[4]}',
                              lakatsiya = '{$aloqaInputGet[5]}',
                              telefon1 = '{$aloqaInputGet[6]}',
                              telefon2 = '{$aloqaInputGet[7]}',
                              email1 = '{$aloqaInputGet[8]}',
                              email2 = '{$aloqaInputGet[9]}'
                              ");
                         if ($sql) {
                              reflesh(url_admin, 'boshsahifa');
                         }
                    }
               }
               ?>
          </div>
     </div>
     <!-- partial -->
</div>