<?php
global $config;
?>
<div class="top_title">
   <p>Fanlar</p>
   <span>Fanlar / Fan-yaratish</span>
</div>
<div class="body_1">
   <div class="top_control_add">
      <span>Fanlar ro'yxati</span>
      <input type="search" id="search_f" class="search_file" placeholder="search...">
      <button class="btn_main" id="opener">Qo'shish</button>
   </div>
   <div class="body_year_show"></div>
   <div class="dialog_c_m">
      <div class="dialog_center">
         <form action="" method="get" id="insertFormAddSubjeckt">
            <span class="dialog_center_exit exit_btn"><i class="fa-solid fa-xmark "></i></span>
            <p>Fan qo’shish</p>
            <input type="text" name="nameAddSubject" id="nameAddSubject" class="input_y editInput" placeholder="Fan nomi...">
            <span class="error_text"></span>
            <button type="submit" class="btn_main add_yil" id="insertBtnAddSubject">Saqlash</button>
            <button class="btn_main add_yil" id="editBtnAddSubject">Yangilash</button>
         </form>
      </div>
   </div>
</div>
<!-- madalka -->
<div class="NToastJSAJAX">
      <!-- successToast -->
      <div class="NToastJS_contentAJAX active errorTrue successToast">
         <i class="fa fa-xmark exit errorTrue"></i>
         <div class="icon">
            <i class="fa fa-check"></i>
         </div>
         <div class="text">
            <p id='successMsg'></p>
         </div>
         <div class="time">
            <p></p>
         </div>
      </div>
   </div>
<script src="<?= $config['base']['url'] . 'web/' ?>js/system/fan-yaratish.js"></script>