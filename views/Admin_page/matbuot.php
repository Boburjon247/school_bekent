<?php
$today = date("Y-m-d");
?>
<div class="main-panel">
     <div class="content-wrapper">
          <div class="row">
               <div class="col-12 admin_BS">
                    <p>Matbuot</p>
               </div>
               <div class="col-12 bg">
                    <div id="tabsxm" class="tab haqida_tab mkt-haqida">
                         <ul class="tab_items">
                              <li><a href="#tabsx-1">Yangiliklar</a></li>
                              <li><a href="#tabsx-2">Tadbirlar</a></li>
                              <li><a href="#tabsx-3">E'lonlar</a></li>
                              <li><a href="#tabsx-4">FotoLavhalar</a></li>
                              <li><a href="#tabsx-5">VideoLavlahalar</a></li>
                         </ul>
                         <div id="tabsx-1" class="tab_item">
                              <form action="" method="post" enctype="multipart/form-data">
                                   <input type="hidden" name="status" value="yangilik">
                                   <p style="color: #fff; font-size: 18px;">Yangiliklar</p>
                                   <div id="tabsxml" class="tab haqida_tab mkt-haqida">
                                        <ul class="tab_items">
                                             <li><a href="#tabsxl-1">uzb</a></li>
                                             <li><a href="#tabsxl-2">eng</a></li>
                                             <li><a href="#tabsxl-3">rus</a></li>
                                        </ul>
                                        <div class="row">
                                             <div class="col-8">
                                                  <ul class="row yangiliklarItems">
                                                       <?php foreach (GetAllRow('admin_maktab_yangiliklar', "status", 'yangilik') as $key => $val) : ?>
                                                            <?php
                                                            $imgarray = [];
                                                            $imgarray = explode(' ', $val['img']);
                                                            $newImg = $imgarray[0];
                                                            ?>
                                                            <li class="col-3">
                                                                 <input type="hidden" name="id" value="<?= $val['id'] ?>">
                                                                 <input type="hidden" name="img" value="<?= $val['img'] ?>">
                                                                 <div class="items">
                                                                      <div class="img">
                                                                           <img src="<?= $config['base']['url'] . 'web/img/news/' . $newImg ?>" alt="">
                                                                      </div>
                                                                      <div class="text">
                                                                           <p><?= $val['title_uz'] ?></p>
                                                                      </div>
                                                                      <button type="submit" name="deleteNews" class="deleteRasim"><i class="fa-solid fa-trash fa-shake" style="color: #ff0000;"></i></button>
                                                                 </div>
                                                            </li>
                                                       <?php endforeach; ?>
                                                  </ul>
                                             </div>
                                             <div class="col-4">
                                                  <div id="tabsxl-1" class="tab_item">
                                                       <ul class="angi_list">
                                                            <li>
                                                                 <input type="file" class="input" name="files[]" multiple>
                                                            </li>
                                                            <li>
                                                                 <label for="">Sarlavha</label>
                                                                 <input type="text" class="input" name="title_uz" id="" placeholder="Sarlavha">
                                                            </li>
                                                            <li>
                                                                 <label for="">Haqida</label>
                                                                 <textarea name="text_uz" id="" placeholder="haqida"></textarea>
                                                            </li>
                                                       </ul>
                                                  </div>
                                                  <div id="tabsxl-2" class="tab_item">
                                                       <ul class="angi_list">
                                                            <li>
                                                                 <label for="">title</label>
                                                                 <input type="text" class="input" name="title_en" id="" placeholder="title">
                                                            </li>
                                                            <li>
                                                                 <label for="">About</label>
                                                                 <textarea name="text_en" id="" placeholder="About"></textarea>
                                                            </li>
                                                       </ul>
                                                  </div>
                                                  <div id="tabsxl-3" class="tab_item">
                                                       <ul class="angi_list">
                                                            <li>
                                                                 <label for="">заголовок</label>
                                                                 <input type="text" class="input" name="title_ru" id="" placeholder="заголовок">
                                                            </li>
                                                            <li>
                                                                 <label for="">o</label>
                                                                 <textarea name="text_ru" id="" placeholder="o"></textarea>
                                                            </li>
                                                       </ul>
                                                  </div>
                                             </div>
                                        </div>

                                   </div>
                                   <button type="submit" value="ok" name="yangilikqoishish" class="btn btn-outline-warning btn-fw img-saqlash">Saqlash</button>
                              </form>
                         </div>
                         <div id="tabsx-2" class="tab_item">
                              <form action="" method="post" enctype="multipart/form-data">
                                   <input type="hidden" name="status" value="tadbir">
                                   <p style="color: #fff; font-size: 18px;">Tadbirlar</p>
                                   <div id="tabsxs" class="tab haqida_tab mkt-haqida">
                                        <ul class="tab_items">
                                             <li><a href="#tabsxl-1">uzb</a></li>
                                             <li><a href="#tabsxl-2">eng</a></li>
                                             <li><a href="#tabsxl-3">rus</a></li>
                                        </ul>
                                        <div class="row">
                                             <div class="col-8">
                                                  <ul class="row yangiliklarItems">
                                                       <?php foreach (GetAllRow('admin_maktab_yangiliklar', "status", 'tadbir') as $key => $val) : ?>
                                                            <?php
                                                            $imgarray = [];
                                                            $imgarray = explode(' ', $val['img']);
                                                            $newImg = $imgarray[0];
                                                            ?>
                                                            <li class="col-3">
                                                                 <input type="hidden" name="id" value="<?= $val['id'] ?>">
                                                                 <input type="hidden" name="img" value="<?= $val['img'] ?>">
                                                                 <div class="items">
                                                                      <div class="img">
                                                                           <img src="<?= $config['base']['url'] . 'web/img/news/' . $newImg ?>" alt="">
                                                                      </div>
                                                                      <div class="text">
                                                                           <p><?= $val['title_uz'] ?></p>
                                                                      </div>
                                                                      <button name="deleteNews" class="deleteRasim"><i class="fa-solid fa-trash fa-shake" style="color: #ff0000;"></i></button>
                                                                 </div>
                                                            </li>
                                                       <?php endforeach; ?>
                                                  </ul>
                                             </div>
                                             <div class="col-4">
                                                  <div id="tabsxl-1" class="tab_item">
                                                       <ul class="angi_list">
                                                            <li>
                                                                 <input type="file" class="input" name="files[]" multiple>
                                                            </li>
                                                            <li>
                                                                 <label for="">Sarlavha</label>
                                                                 <input type="text" class="input" name="title_uz" id="" placeholder="Sarlavha">
                                                            </li>
                                                            <li>
                                                                 <label for="">Haqida</label>
                                                                 <textarea name="text_uz" id="" placeholder="haqida"></textarea>
                                                            </li>
                                                       </ul>
                                                  </div>
                                                  <div id="tabsxl-2" class="tab_item">
                                                       <ul class="angi_list">
                                                            <li>
                                                                 <label for="">Sarlavha</label>
                                                                 <input type="text" class="input" name="title_en" id="" placeholder="Sarlavha">
                                                            </li>
                                                            <li>
                                                                 <label for="">Haqida</label>
                                                                 <textarea name="text_en" id="" placeholder="haqida"></textarea>
                                                            </li>
                                                       </ul>
                                                  </div>
                                                  <div id="tabsxl-3" class="tab_item">
                                                       <ul class="angi_list">
                                                            <li>
                                                                 <label for="">Sarlavha</label>
                                                                 <input type="text" class="input" name="title_ru" id="" placeholder="Sarlavha">
                                                            </li>
                                                            <li>
                                                                 <label for="">Haqida</label>
                                                                 <textarea name="text_ru" id="" placeholder="haqida"></textarea>
                                                            </li>
                                                       </ul>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <button type="submit" name="yangilikqoishish" class="btn btn-outline-warning btn-fw img-saqlash">Saqlash</button>
                              </form>
                         </div>
                         <div id="tabsx-3" class="tab_item">
                              <form action="" method="post" enctype="multipart/form-data">
                                   <input type="hidden" name="status" value="elon">
                                   <p style="color: #fff; font-size: 18px;">E'lonlar</p>
                                   <div id="tabsq" class="tab haqida_tab mkt-haqida">
                                        <ul class="tab_items">
                                             <li><a href="#tabsq-1">uzb</a></li>
                                             <li><a href="#tabsq-2">eng</a></li>
                                             <li><a href="#tabsq-3">rus</a></li>
                                        </ul>
                                        <div class="row">
                                             <div class="col-8">
                                                  <ul class="row yangiliklarItems">
                                                       <?php foreach (GetAllRow('admin_maktab_yangiliklar', "status", 'elon') as $key => $val) : ?>
                                                            <?php
                                                            $imgarray = [];
                                                            $imgarray = explode(' ', $val['img']);
                                                            $newImg = $imgarray[0];
                                                            ?>
                                                            <li class="col-3">
                                                                 <input type="hidden" name="id" value="<?= $val['id'] ?>">
                                                                 <input type="hidden" name="img" value="<?= $val['img'] ?>">
                                                                 <div class="items">
                                                                      <div class="img">
                                                                           <img src="<?= $config['base']['url'] . 'web/img/news/' . $newImg ?>" alt="">
                                                                      </div>
                                                                      <div class="text">
                                                                           <p><?= $val['title_uz'] ?></p>
                                                                      </div>
                                                                      <button name="deleteNews" class="deleteRasim"><i class="fa-solid fa-trash fa-shake" style="color: #ff0000;"></i></button>
                                                                 </div>
                                                            </li>
                                                       <?php endforeach; ?>
                                                  </ul>
                                             </div>
                                             <div class="col-4">
                                                  <div id="tabsq-1" class="tab_item">
                                                       <ul class="angi_list">
                                                            <li>
                                                                 <input type="file" class="input" name="files[]" multiple>
                                                            </li>
                                                            <li>
                                                                 <label for="">Sarlavha</label>
                                                                 <input type="text" class="input" name="title_uz" id="" placeholder="Sarlavha">
                                                            </li>
                                                            <li>
                                                                 <label for="">Haqida</label>
                                                                 <textarea name="text_uz" id="" placeholder="haqida"></textarea>
                                                            </li>
                                                       </ul>
                                                  </div>
                                                  <div id="tabsq-2" class="tab_item">
                                                       <ul class="angi_list">
                                                            <li>
                                                                 <label for="">Sarlavha</label>
                                                                 <input type="text" class="input" name="title_en" id="" placeholder="Sarlavha">
                                                            </li>
                                                            <li>
                                                                 <label for="">Haqida</label>
                                                                 <textarea name="text_en" id="" placeholder="haqida"></textarea>
                                                            </li>
                                                       </ul>
                                                  </div>
                                                  <div id="tabsq-3" class="tab_item">
                                                       <ul class="angi_list">
                                                            <li>
                                                                 <label for="">Sarlavha</label>
                                                                 <input type="text" class="input" name="title_ru" id="" placeholder="Sarlavha">
                                                            </li>
                                                            <li>
                                                                 <label for="">Haqida</label>
                                                                 <textarea name="text_ru" id="" placeholder="haqida"></textarea>
                                                            </li>
                                                       </ul>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <button type="submit" name="yangilikqoishish" class="btn btn-outline-warning btn-fw img-saqlash">Saqlash</button>
                              </form>
                         </div>
                         <div id="tabsx-4" class="tab_item">
                              <form action="" method="post" enctype="multipart/form-data">
                                   <input type="hidden" name="status" value="FotoLavhalar">
                                   <p style="color: #fff; font-size: 18px;">FotoLavhalar</p>
                                   <div id="tabsxm1" class="tab haqida_tab mkt-haqida">
                                        <ul class="tab_items">
                                             <li><a href="#tabsq-1">uzb</a></li>
                                             <li><a href="#tabsq-2">eng</a></li>
                                             <li><a href="#tabsq-3">rus</a></li>
                                        </ul>
                                        <div class="row">
                                             <div class="col-8">
                                                  <ul class="row yangiliklarItems">
                                                       <?php foreach (GetAllRow('admin_maktab_yangiliklar', "status", 'FotoLavhalar') as $key => $val) : ?>
                                                            <?php
                                                            $imgarray = [];
                                                            $imgarray = explode(' ', $val['img']);
                                                            $newImg = $imgarray[0];
                                                            ?>
                                                            <li class="col-3">
                                                                 <input type="hidden" name="id" value="<?= $val['id'] ?>">
                                                                 <input type="hidden" name="img" value="<?= $val['img'] ?>">
                                                                 <div class="items">
                                                                      <div class="img">
                                                                           <img src="<?= $config['base']['url'] . 'web/img/news/' . $newImg ?>" alt="">
                                                                      </div>
                                                                      <div class="text">
                                                                           <p><?= $val['title_uz'] ?></p>
                                                                      </div>
                                                                      <button name="deleteNews" class="deleteRasim"><i class="fa-solid fa-trash fa-shake" style="color: #ff0000;"></i></button>
                                                                 </div>
                                                            </li>
                                                       <?php endforeach; ?>
                                                  </ul>
                                             </div>
                                             <div class="col-4">
                                                  <div id="tabsq-1" class="tab_item">
                                                       <ul class="angi_list">
                                                            <li>
                                                                 <input type="file" class="input" name="files[]" multiple>
                                                            </li>
                                                            <li>
                                                                 <label for="">Sarlavha</label>
                                                                 <input type="text" class="input" name="title_uz" id="" placeholder="Sarlavha">
                                                            </li>
                                                            <li>
                                                                 <label for="">Haqida</label>
                                                                 <textarea name="text_uz" id="" placeholder="haqida"></textarea>
                                                            </li>
                                                       </ul>
                                                  </div>
                                                  <div id="tabsq-2" class="tab_item">
                                                       <ul class="angi_list">
                                                            <li>
                                                                 <label for="">Sarlavha</label>
                                                                 <input type="text" class="input" name="title_en" id="" placeholder="Sarlavha">
                                                            </li>
                                                            <li>
                                                                 <label for="">Haqida</label>
                                                                 <textarea name="text_en" id="" placeholder="haqida"></textarea>
                                                            </li>
                                                       </ul>
                                                  </div>
                                                  <div id="tabsq-3" class="tab_item">
                                                       <ul class="angi_list">
                                                            <li>
                                                                 <label for="">Sarlavha</label>
                                                                 <input type="text" class="input" name="title_ru" id="" placeholder="Sarlavha">
                                                            </li>
                                                            <li>
                                                                 <label for="">Haqida</label>
                                                                 <textarea name="text_ru" id="" placeholder="haqida"></textarea>
                                                            </li>
                                                       </ul>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <button type="submit" name="yangilikqoishish" class="btn btn-outline-warning btn-fw img-saqlash">Saqlash</button>
                              </form>
                         </div>
                         <div id="tabsx-5" class="tab_item">
                              <form action="" method="post" enctype="multipart/form-data">
                                   <input type="hidden" name="status" value="VideoLavlahalar">
                                   <p style="color: #fff; font-size: 18px;">VideoLavlahalar</p>
                                   <div id="tabsxm2" class="tab haqida_tab mkt-haqida">
                                        <ul class="tab_items">
                                             <li><a href="#tabsq-1">uzb</a></li>
                                             <li><a href="#tabsq-2">eng</a></li>
                                             <li><a href="#tabsq-3">rus</a></li>
                                        </ul>
                                        <div class="row">
                                             <div class="col-8">
                                                  <ul class="row yangiliklarItems">
                                                       <?php foreach (GetAllRow('admin_maktab_yangiliklar', "status", 'VideoLavlahalar') as $key => $val) : ?>
                                                            <?php
                                                            $imgarray = [];
                                                            $imgarray = explode(' ', $val['img']);
                                                            $newImg = $imgarray[0];
                                                            ?>
                                                            <li class="col-3">
                                                                 <input type="hidden" name="id" value="<?= $val['id'] ?>">
                                                                 <input type="hidden" name="img" value="<?= $val['img'] ?>">
                                                                 <div class="items">
                                                                      <div class="img">
                                                                           <img src="<?= $config['base']['url'] . 'web/img/news/' . $newImg ?>" alt="">
                                                                      </div>
                                                                      <div class="text">
                                                                           <p><?= $val['title_uz'] ?></p>
                                                                      </div>
                                                                      <button name="deleteNews" class="deleteRasim"><i class="fa-solid fa-trash fa-shake" style="color: #ff0000;"></i></button>
                                                                 </div>
                                                            </li>
                                                       <?php endforeach; ?>
                                                  </ul>
                                             </div>
                                             <div class="col-4">
                                                  <div id="tabsq-1" class="tab_item">
                                                       <ul class="angi_list">
                                                            <li>
                                                                 <input type="file" class="input" name="files[]" multiple>
                                                            </li>
                                                            <li>
                                                                 <input type="text" class="input" name="link" placeholder="vodyo link">
                                                            </li>
                                                            <li>
                                                                 <label for="">Sarlavha</label>
                                                                 <input type="text" class="input" name="title_uz" id="" placeholder="Sarlavha">
                                                            </li>
                                                            <li>
                                                                 <label for="">Haqida</label>
                                                                 <textarea name="text_uz" id="" placeholder="haqida"></textarea>
                                                            </li>
                                                       </ul>
                                                  </div>
                                                  <div id="tabsq-2" class="tab_item">
                                                       <ul class="angi_list">
                                                            <li>
                                                                 <label for="">Sarlavha</label>
                                                                 <input type="text" class="input" name="title_en" id="" placeholder="Sarlavha">
                                                            </li>
                                                            <li>
                                                                 <label for="">Haqida</label>
                                                                 <textarea name="text_en" id="" placeholder="haqida"></textarea>
                                                            </li>
                                                       </ul>
                                                  </div>
                                                  <div id="tabsq-3" class="tab_item">
                                                       <ul class="angi_list">
                                                            <li>
                                                                 <label for="">Sarlavha</label>
                                                                 <input type="text" class="input" name="title_ru" id="" placeholder="Sarlavha">
                                                            </li>
                                                            <li>
                                                                 <label for="">Haqida</label>
                                                                 <textarea name="text_ru" id="" placeholder="haqida"></textarea>
                                                            </li>
                                                       </ul>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <button type="submit" name="yangilikqoishish" class="btn btn-outline-warning btn-fw img-saqlash">Saqlash</button>
                              </form>
                         </div>
                    </div>
               </div>
          </div>
          <!-- partial -->
     </div>
     <!-- main-panel ends -->
</div>
<?php
if (isset($_POST['yangilikqoishish'])) {
     if (
          (isset($_POST['title_uz']) && !empty($_POST['title_uz'])) &&
          (isset($_POST['title_en']) && !empty($_POST['title_en'])) &&
          (isset($_POST['title_ru']) && !empty($_POST['title_ru']))
     ) {
          if ($_FILES['files']['name'] != '') {
               $imgArray = [];
               for ($i = 0; $i < count($_FILES['files']['name']); $i++) {
                    $bool = move_uploaded_file($_FILES['files']['tmp_name'][$i], '../web/img/news/' . $_FILES['files']['name'][$i]);
                    if ($bool) {
                         array_push($imgArray, $_FILES['files']['name'][$i]);
                    } else {
                         echo 'saqlanmadi';
                    }
               }
               // echo print_r($imgArray);
               $imgString = implode(' ', $imgArray);

               $aloqaInputGet = test_input([
                    $_POST['title_uz'],
                    $_POST['text_uz'],
                    $_POST['title_en'],
                    $_POST['text_en'],
                    $_POST['title_ru'],
                    $_POST['text_ru'],
                    $imgString,
                    $today,
                    $_POST['status'],
                    $_POST['link']
               ]);
               if (getInsert(
                    'admin_maktab_yangiliklar',
                    ['title_uz', 'text_uz', 'title_en', 'text_en', 'title_ru', 'text_ru', 'img', 'date', 'status','link'],
                    $aloqaInputGet
               )) {
                    reflesh(url_admin, 'matbuot');
               }
          } else {
               echo 'fayl yuklanmagan';
          }
     }
}
?>
<?php
if (isset($_POST['deleteNews'])) {
     if (getItemsDelet('admin_maktab_yangiliklar', 'id', [$_POST['id']])) {
          $imgarray1 = [];
          $imgarray1 = explode(' ', $_POST['img']);
          for ($i = 0; $i < count($imgarray1); $i++) {
               unlink('../web/img/news/' . $imgarray1[$i]);
          }
          reflesh(url_admin, 'matbuot');
     }
}
?>