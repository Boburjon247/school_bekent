<div class="top_title">
   <p>O’quv yili yaratish</p>
   <span>O’quv yili / O’qiv yili yartaish</span>
</div>
<div class="body_1">
   <div class="top_control_add">
      <span>O’quv yillari</span>
      <button class="btn_main" id="opener">Qo'shish</button>
   </div>
   <div class="body_year_show"></div>
   <div class="dialog_c_m">
      <div class="dialog_center">
         <form action="" method="post">
            <span class="dialog_center_exit exit_btn"><i class="fa-solid fa-xmark "></i></span>
            <p>Yangi o’quv yili yaratish</p>
            <input type="text" name="yearName" class="input_y editInput1" id="yearNmae" placeholder="O’quv yili...">
            <span class="error_text"></span>
            <button name="yearNameBtn" type="submit" class="btn_main add_yil" id="yearAdd">Saqlash</button>
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
<script src="<?= $config['base']['url'] . 'web/' ?>js/system/yilyaratish.js"></script>