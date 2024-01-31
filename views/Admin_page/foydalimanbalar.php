<?php
$today = date("Y-m-d");
?>
<div class="main-panel">
     <div class="content-wrapper">
          <div class="row">
               <div class="col-12 admin_BS" style="margin-top: 20px;">
                    <p>Foydali Manbalar</p>
               </div>
               <div class="col-12">
                    <div class="bg">
                         <div id="tabsxl" class="tab haqida_tab">
                              <ul class="tab_items">
                                   <li><a href="#tabs-1">Xalqoro Tanlovlar</a></li>
                                   <li><a href="#tabs-2">To'garaklar</a></li>
                                   <li><a href="#tabs-3">O'quv qo'llanmalar</a></li>
                              </ul>
                              <div id="tabs-1" class="tab_item">
                                   <form action="" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="status" value="Tanlovlar">
                                        <div class="inputFile">
                                             <label for="file8">
                                                  <div class="deleteRasim" style="border: 1px solid #767676;">
                                                       <i style="color: lime;" class="fa-solid fa-circle-plus"></i>
                                                  </div>
                                                  <img src="" alt="" id="imgUrl8">
                                             </label>
                                             <input type="file" name="file" class=" lableImg8 input-UserName" id="file8" visibility="none" style="display: none;">
                                        </div>
                                        <div class="inputA">
                                             <label for="" style="margin-top: 15px;">Sarlavha</label>
                                             <input name="title_uz" type="text" placeholder="Sarlavha" class="input">
                                        </div>
                                        <div class="inputA">
                                             <label for="">Izoh</label>
                                             <textarea name="text_uz" placeholder="Izoh"></textarea>
                                        </div>
                                        <div class="inputA">
                                             <label for="" style="margin-top: 15px;">Title</label>
                                             <input name="title_en" type="text" placeholder="Title" class="input">
                                        </div>
                                        <div class="inputA">
                                             <label for="">About</label>
                                             <textarea name="text_en" placeholder="About"></textarea>
                                        </div>
                                        <div class="inputA">
                                             <label for="" style="margin-top: 15px;">заголовок</label>
                                             <input name="title_ru" type="text" placeholder="заголовок" class="input">
                                        </div>
                                        <div class="inputA">
                                             <label for="">o</label>
                                             <textarea name="text_ru" placeholder="o"></textarea>
                                        </div>
                                        <button type="submit" name="qollanmaAdd" class="btn btn-outline-warning btn-fw img-saqlash">Saqlash</button>
                                        <div class="col-12">
                                             <ul class="itemsUl-li row">
                                                  <?php foreach (GetAllRow('admin_maktab_foydalimanbalar', "status", 'Tanlovlar') as $key => $val) : ?>
                                                       <li class="col-3">
                                                            <input type="hidden" name="id" value="<?= $val['id'] ?>">
                                                            <input type="hidden" name="img" value="<?= $val['img'] ?>">
                                                            <div class="item-content">
                                                                 <div class="img">
                                                                      <img src="<?= $config['base']['url'] . 'web/img/qollanmalar/img/' . $val['img'] ?>" alt="">
                                                                 </div>
                                                                 <div class="text">
                                                                      <p><?= $val['title_uz'] ?></p>
                                                                 </div>
                                                                 <button type="submit" name="deleteItem" class="deleteRasim"><i class="fa-solid fa-trash fa-shake" style="color: #ff0000;"></i></button>
                                                            </div>
                                                       </li>
                                                  <?php endforeach; ?>
                                             </ul>
                                        </div>
                                   </form>

                              </div>
                              <div id="tabs-2" class="tab_item">
                                   <form action="" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="status" value="To'garaklar">
                                        <div class="inputFile">
                                             <label for="file20">
                                                  <div class="deleteRasim" style="border: 1px solid #767676;">
                                                       <i style="color: lime;" class="fa-solid fa-circle-plus"></i>
                                                  </div>
                                                  <img src="" alt="" id="imgUrl20">
                                             </label>
                                             <input type="file" name="file" class=" lableImg20 input-UserName" id="file20" visibility="none" style="display: none;">
                                        </div>
                                        <div class="inputA">
                                             <label for="" style="margin-top: 15px;">Sarlavha</label>
                                             <input name="title_uz" type="text" placeholder="Sarlavha" class="input">
                                        </div>
                                        <div class="inputA">
                                             <label for="">Izoh</label>
                                             <textarea name="text_uz" placeholder="Izoh"></textarea>
                                        </div>
                                        <div class="inputA">
                                             <label for="" style="margin-top: 15px;">Title</label>
                                             <input name="title_en" type="text" placeholder="Title" class="input">
                                        </div>
                                        <div class="inputA">
                                             <label for="">About</label>
                                             <textarea name="text_en" placeholder="About"></textarea>
                                        </div>
                                        <div class="inputA">
                                             <label for="" style="margin-top: 15px;">заголовок</label>
                                             <input name="title_ru" type="text" placeholder="заголовок" class="input">
                                        </div>
                                        <div class="inputA">
                                             <label for="">o</label>
                                             <textarea name="text_ru" placeholder="o"></textarea>
                                        </div>
                                        <button type="submit" name="qollanmaAdd" class="btn btn-outline-warning btn-fw img-saqlash">Saqlash</button>
                                        <div class="col-12">
                                             <ul class="itemsUl-li row">
                                                  <?php foreach (GetAllRow('admin_maktab_foydalimanbalar', "status", "To\'garaklar") as $key => $val) : ?>
                                                       <li class="col-3">
                                                            <input type="hidden" name="id" value="<?= $val['id'] ?>">
                                                            <input type="hidden" name="img" value="<?= $val['img'] ?>">
                                                            <div class="item-content">
                                                                 <div class="img">
                                                                      <img src="<?= $config['base']['url'] . 'web/img/qollanmalar/img/' . $val['img'] ?>" alt="">
                                                                 </div>
                                                                 <div class="text">
                                                                      <p><?= $val['title_uz'] ?></p>
                                                                 </div>
                                                                 <button type="submit" name="deleteItem" class="deleteRasim"><i class="fa-solid fa-trash fa-shake" style="color: #ff0000;"></i></button>
                                                            </div>
                                                       </li>
                                                  <?php endforeach; ?>
                                             </ul>
                                        </div>
                                   </form>

                              </div>
                              <div id="tabs-3" class="tab_item">
                                   <form action="" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="status" value="Qo'llanmalar">
                                        <div style="display: flex; gap: 20px;">
                                             <div class="inputFile">
                                                  <label for="file9">
                                                       <div class="deleteRasim" style="border: 1px solid #767676;">
                                                            <i style="color: lime;" class="fa-solid fa-circle-plus"></i>
                                                       </div>
                                                       <img src="" alt="" id="imgUrl9">
                                                  </label>
                                                  <input type="file" name="file" class=" lableImg9 input-UserName" id="file9" visibility="none" style="display: none;">
                                                  <p style="color: #fff;">Rasim</p>
                                             </div>
                                             <div class="inputFile">
                                                  <label for="file7">
                                                       <div class="deleteRasim" style="border: 1px solid #767676;">
                                                            <i style="color: lime;" class="fa-solid fa-circle-plus"></i>
                                                       </div>
                                                       <img src="" alt="" id="imgUrl7">
                                                  </label>
                                                  <input type="file" name="file2" class=" lableImg7 input-UserName" id="file7" visibility="none" style="display: none;">
                                                  <p style="color: #fff;">Fayl</p>
                                             </div>
                                        </div>
                                        <div class="inputA">
                                             <label for="" style="margin-top: 45px; ">Sarlavha</label>
                                             <input name="title_uz" type="text" placeholder="Sarlavha" class="input">
                                        </div>

                                        <div class="inputA">
                                             <label for="" style="margin-top: 15px;">Title</label>
                                             <input name="title_en" type="text" placeholder="Title" class="input">
                                        </div>

                                        <div class="inputA">
                                             <label for="" style="margin-top: 15px;">заголовок</label>
                                             <input name="title_ru" type="text" placeholder="заголовок" class="input">
                                        </div>
                                        <button type="submit" name="qollanmaAdd" class="btn btn-outline-warning btn-fw img-saqlash">Saqlash</button>
                                        <div class="col-12">
                                             <ul class="itemsUl-li row">
                                                  <?php foreach (GetAllRow('admin_maktab_foydalimanbalar', "status", "Qo\'llanmalar") as $key => $val) : ?>
                                                       <li class="col-3">
                                                            <input type="hidden" name="id" value="<?= $val['id'] ?>">
                                                            <input type="hidden" name="img" value="<?= $val['img'] ?>">
                                                            <div class="item-content">
                                                                 <div class="img">
                                                                      <img src="<?= $config['base']['url'] . 'web/img/qollanmalar/img/' . $val['img'] ?>" alt="">
                                                                 </div>
                                                                 <div class="text">
                                                                      <p><?= $val['title_uz'] ?></p>
                                                                 </div>
                                                                 <button type="submit" name="deleteItem" class="deleteRasim"><i class="fa-solid fa-trash fa-shake" style="color: #ff0000;"></i></button>
                                                            </div>
                                                       </li>
                                                  <?php endforeach; ?>
                                             </ul>
                                        </div>
                                   </form>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <!-- partial -->
     </div>
     <!-- main-panel ends -->
</div>
<?php
if (isset($_POST['qollanmaAdd'])) {
     if (
          (isset($_POST['title_uz']) && !empty($_POST['title_uz'])) &&
          (isset($_POST['title_en']) && !empty($_POST['title_en'])) &&
          (isset($_POST['title_ru']) && !empty($_POST['title_ru']))
     ) {

          if ($_FILES['file']['name'] != '') {
               $name = time() . $_FILES['file']['name'];
               $book = time() . $_FILES['file2']['name'];

               $bool = move_uploaded_file($_FILES['file']['tmp_name'], '../web/img/qollanmalar/img/' . $name);
               move_uploaded_file($_FILES['file2']['tmp_name'], '../web/img/qollanmalar/file/' . $book);

               if ($bool) {
                    $aloqaInputGet = test_input([
                         $_POST['title_uz'],
                         $_POST['title_en'],
                         $_POST['title_ru'],
                         $_POST['text_uz'],
                         $_POST['text_en'],
                         $_POST['text_ru'],
                         $name,
                         $_POST['status'],
                         $today,
                         $book
                    ]);
                    if (getInsert(
                         'admin_maktab_foydalimanbalar',
                         ['title_uz', 'title_en', 'title_ru', 'text_uz', 'text_en', 'text_ru', 'img', 'status', 'date', 'qollanma'],
                         $aloqaInputGet
                    )) {
                         reflesh(url_admin, 'foydalimanbalar');
                    }
               }
          } else {
               echo 'fayl yuklanmagan';
          }
     }
}
?>
<?php
if (isset($_POST['deleteItem'])) {
     if (getItemsDelet('admin_maktab_foydalimanbalar', 'id', [$_POST['id']])) {
          unlink('../web/img/qollanmalar/img/' . $_POST['img']);
          reflesh(url_admin, 'foydalimanbalar');
     }
}
?>