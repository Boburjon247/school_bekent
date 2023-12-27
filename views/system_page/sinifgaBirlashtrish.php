<div class="top_title">
   <p>O’quvchilar</p>
   <span>O’quvchilar / Sinfga briktrish</span>
</div>
<div class="body_1">
   <div class="sinfqoshish">
      <div class="top_control_add top_control_add_sinfalar">
         <select class="form-control js-example-tags">
            <option value="0" selected="selected" disabled> O’quv yilini tanlang</option>
            <option value="1">white</option>
            <option value="2">purple</option>
         </select>
         <input type="search" placeholder="search" id="search" class="search_file">
         <button class="btn_main" id="opener">Qo'shish</button>
      </div>
      <div class="body_year_show">
         <div class="year_items">
            <p class="sinf_name">5 green</p>
            <div class="button-delete-edit">
               <button><i class="fa-solid fa-pen" style="color: #0561ff;"></i></button>
               <button><i class="fa-solid fa-trash" style="color: #ff0000;"></i></button>
            </div>
         </div>
         <div class="year_items">
            <p class="sinf_name">6 green</p>
            <div class="button-delete-edit">
               <button><i class="fa-solid fa-pen" style="color: #0561ff;"></i></button>
               <button><i class="fa-solid fa-trash" style="color: #ff0000;"></i></button>
            </div>
         </div>

      </div>
      <div class="dialog_c_m">
         <div class="dialog_center">
            <span class="dialog_center_exit exit_btn"><i class="fa-solid fa-xmark "></i></span>
            <p>Yangi sinif yaratish</p>
            <input type="text" class="input_y" placeholder="Sinif nomi...">
            <span class="error_text"></span>
            <button class="btn_main add_yil">Add</button>
         </div>
      </div>
   </div>
   <div class="oquvchibriktrish active">
      <div class="s-control_w">
         <p>Barcha o’quvchilar</p>
         <input type="search" id="search1" placeholder="search" class="search_file">
         <button class="btn_main">
            Saqlash
         </button>
      </div>
      <ul>
         <li class="green">
            <div class="img">
               <img src="<?= $config['base']['url'].'web/'?>img/Dinner.jpg" alt="">
            </div>
            <p>Abdunazarov Boburjon</p>
         </li>
         <li class="orang">
            <div class="img">
               <img src="<?= $config['base']['url'].'web/'?>img/Dinner.jpg" alt="">
            </div>
            <p>Ikromov Saidmirzo</p>
         </li>
         <li>
            <div class="img">
               <img src="<?= $config['base']['url'].'web/'?>img/Dinner.jpg" alt="">
            </div>
            <p>Bahromov o'tkir</p>
         </li>
         <li>
            <div class="img">
               <img src="<?= $config['base']['url'].'web/'?>img/Dinner.jpg" alt="">
            </div>
            <p>Muhammadjonov Abrro</p>
         </li>
         <li>
            <div class="img">
               <img src="<?= $config['base']['url'].'web/'?>img/Dinner.jpg" alt="">
            </div>
            <p>Palonchiyev Pistonchi</p>
         </li>
      </ul>
   </div>
</div>
<div class="delete_madal">
   <delete_madal class="delete_madal_content">
      <p class="header_title">
         <span>tekshiruv</span>
         <span><i class="close_delete_madal fas fa-xmark"></i></span>
      </p>
      <div class="text_title">
         <p>
            delete
         </p>
      </div>
      <dev class="delet-button">
         <button class="deletButtExit close_delete_madal">exit</button>
         <button class="deletButtOk">ok</button>
      </dev>
   </delete_madal>
</div>
<script src="<?= $config['base']['url'].'web/'?>js/system/sinfBriktrish.js"></script>
