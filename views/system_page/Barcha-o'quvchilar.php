<div class="top_title">
   <p>Statistika</p>
   <span>Statistika/O'quvchilar</span>
</div>
<div class="body_1">
   <div class="section active section1">
      <div class="text_title">
         <p>Barcha o'quvchilar </p>
         <input type="search" id="search" placeholder="search...">
      </div>
      <div class="hodim_item">
         <ul>
            <li>
               <div class="img-text">
                  <div class="img">
                     <img src="<?= $config['base']['url'].'web/'?>img/Dinner.jpg" alt="">
                  </div>
                  <p class="userName1">
                     Boburjon
                  </p>
               </div>
               
            </li>
            <li>
               <div class="img-text">
                  <div class="img">
                     <img src="<?= $config['base']['url'].'web/'?>img/Dinner.jpg" alt="">
                  </div>
                  <p class="userName1">
                     Saidmirzo
                  </p>
               </div>
            
            </li>
            <li>
               <div class="img-text">
                  <div class="img">
                     <img src="<?= $config['base']['url'].'web/'?>img/Dinner.jpg" alt="">
                  </div>
                  <p class="userName1">
                     Abdulaziz
                  </p>
               </div>
               
            </li>
         </ul>
      </div>
   </div>
   <div class="section section2 ">
      <div class="text_Add_h flex-c-sb">
         <p>Tahrirlash/Qo’shish</p>
         <button class="btn_main exitHodim">Exit</button>
      </div>
      <div class="row1">
         <div>
            <label for="">Ismi</label>
            <input type="text" class="input-UserName" placeholder="Ismi">
         </div>
         <div>
            <label for="">Familiyasi</label>
            <input type="text" class="input-UserName" placeholder="Familiyasi">
         </div>
         <div>
            <div class="imgUser">
               <label for="file">
                  <img src="../img/userimg.jpg" alt="" id="imgUrl">
               </label>
               <input type="file" class=" lableImg input-UserName" id="file" visibility="none" style="display: none;">
            </div>
         </div>

      </div>
      <div class="row2">
         <div>
            <label for="">Otasini Ismi</label>
            <input type="text" class="input-UserName" placeholder="Otasini Ismi">
         </div>
         <div>
            <label for="">Passport Seriasi</label>
            <input type="text" class="input-UserName" placeholder="Passport Seriasi">
         </div>
         <div>
            <label for="">Tug’ulgan sanasi</label>
            <input type="date" class="input-UserName" placeholder="Tug’ulgan sanasi">
         </div>
         <div>
            <label for="">Jinsi</label>
            <select name="" id="" class="input-UserName">
               <option value="">Jinsi</option>
               <option value="">ayol</option>
               <option value="">erkak</option>
            </select>
         </div>
         <div>
            <label for="">Manzili</label>
            <input type="text" class="input-UserName" placeholder="Manzili">
         </div>
         <div>
            <label for="">Tel raqam</label>
            <input type="text" class="input-UserName" placeholder="Tel raqam">
         </div>
      </div>
      <div class="row3">
         <button class="btn_main saveUserName">Save</button>
      </div>
   </div>
</div>
<script src="<?= $config['base']['url'].'web/'?>js/system/hodimlar.js"></script>
