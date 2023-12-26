<div class="top_title">
   <p>Tizim</p>
   <span>Tizim / Profile</span>
</div>
<div class="body_1">
   <div class="section section2 active ">
      <div class="text_Add_h flex-c-sb">
         <p>Profile</p>
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
                  <img src="<?= $config['base']['url'].'web/'?>img/userimg.jpg" alt="" id="imgUrl">
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
         <div>
            <label for="">Login</label>
            <input type="text" class="input-UserName" placeholder="Login">
         </div>
         <div>
            <label for="">Password</label>
            <input type="password" class="input-UserName" placeholder="Password">
            <i class="fa-solid userEye fa-eye-slash"></i>
            <!-- <i class="fa-solid fa-eye"></i> -->
         </div>
         <div>
            <label for="">Yangi parol</label>
            <input type="password" readonly class="input-UserName yamgi_parol" placeholder="Yangi parol...">
         </div>
         <div>
            <label for="">Parolni tasdiqlash</label>
            <input type="password" readonly class="input-UserName yamgi_parol" placeholder="Parolni tasdiqlash...">
         </div>
      </div>
      <div class="row3 flex-c-sb">
         <button class="btn_main saveUserName">Saqlash</button>
         <div class="row3_input_checkbox">
            <label for="btn_true">Yangi parol yaratish uchun bosing</label>
            <input type="checkbox" id="btn_true">
         </div>
      </div>
   </div>

</div>
<script src="<?= $config['base']['url'].'web/'?>js/system/profil.js"></script>
