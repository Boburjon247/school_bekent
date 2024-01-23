<div class="top_title">
   <p>O’quv yili yaratish</p>
   <span>O’quv yili / Yildan yilga ko'chirish</span>
</div>
<div class="body_1">
   <div class="control_copy_y">
      <form class="">
         <select class="form-control js-example-tags js-example-tags1">
            <option value="0" selected="selected" disabled> O’quv yilidan </option>
            <option value="1">white</option>
            <option value="2">purple</option>
         </select>
         <select class="form-control js-example-tags js-example-tags2">
            <option value="0" selected="selected" disabled> O’quv yiliga</option>
            <option value="1">white</option>
            <option value="2">purple</option>
         </select>
      </form>
      <div class="top_control_add">
         <button class="btn_main yildan_yilga_kochirish">Ko’chirish</button>
      </div>
   </div>
   <div class="show_mirror">
      <div class="header_title">
         <p>Barcha sinflar </p>
         <p>
            <label for="checkbox1">Barchasini belgilash</span>
               <input type="checkbox" id="checkbox1">
         </p>
      </div>
      <ul class="show_windows_class">
         <li>5 green</li>
         <li>5 green</li>
         <li>5 green</li>
         <li>5 green</li>
      </ul>
   </div>
</div>
<div class="NToastJS ">
   <!-- successToast -->
   <div class="NToastJS_content errorTrue successToast">
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
   <!-- errorToast -->
   <div class="NToastJS_content errorFalse errorToast">
      <i class="fa fa-xmark exit errorFalse"></i>
      <div class="icon">
         <i class="fa-solid fa-triangle-exclamation"></i>
      </div>
      <div class="text">
         <p id='errorMsg'></p>
      </div>
      <div class="time">
         <p></p>
      </div>
   </div>
</div>
<script src="<?= $config['base']['url'] . 'web/' ?>js/system/yildan-yilga-kochirish.js"></script>