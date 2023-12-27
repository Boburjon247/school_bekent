<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>O'qtuvchi</title>
   <!-- Link Swiper's CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
   <!-- jquery -->
   <link rel="stylesheet" href="<?= $config['base']['url'].'web/'?>js/Jquery/owlCarusel/owl.carousel.min.css">
   <link rel="stylesheet" href="<?= $config['base']['url'].'web/'?>js/Jquery/owlCarusel/owl.theme.default.min.css">
   <link rel="stylesheet" href="<?= $config['base']['url'].'web/'?>js/Jquery/jquery-ui.min.css">
   <link rel="stylesheet" href="<?= $config['base']['url'].'web/'?>js/Jquery/jquery-ui.theme.min.css">
   <!-- bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <!--font awesome cdn-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   <!-- google font -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;500&display=swap" rel="stylesheet">
   <!--css-->
   <link rel="stylesheet" href="<?= $config['base']['url'].'web/'?>css/style.css">
   <link rel="stylesheet" href="<?= $config['base']['url'].'web/'?>css/mediya.css">
   <link rel="shortcut icon" href="<?= $config['base']['url'].'web/'?>img/logo-icon-new.svg" type="image/x-icon">

</head>

<body>

   <!-- header-banner -->
   <section class="header-banner container-fluid">
      <div class="container">
         <div class="top_title_header ">
            <span>o'qtuvchi</span>
            <button>
               <i class="fa-solid fa-person-walking-dashed-line-arrow-right"></i>
            </button>
         </div>
         <div class="navbar_control">
            <a href="">Asosiy</a>
            <span></span>
            <a href="">o'qtuvchi</a>
         </div>
      </div>
   </section>

   <main>
      <section class="container-fluid">
         <div class="container">
            <div class="control_title">
               <div class="subjectName">
                  <span>algebra</span>
               </div>
               <div class="inputName">
                  <select name="oquv_yili" class="selectCheck_A" id="teachCheck0">
                     <option value="" hidden>O'quv yilini tanlang</option>
                     <option value="1">2021 / 2022</option>
                     <option value="2">2022 / 2023</option>
                  </select>
                  <select name="sinf" class="selectCheck_A" id="teachCheck1" disabled>
                     <option value="" hidden>Sinf</option>
                     <option value="1">5-A</option>
                     <option value="2">5-B</option>
                  </select>
                  <select name="fan" class="selectCheck_A" id="teachCheck2" disabled>
                     <option value="" hidden>Fan</option>
                     <option value="1">Algebra</option>
                     <option value="2">Geomertya</option>
                     <option value="3">Fizika</option>
                     <option value="4">Kimyo</option>
                     <option value="5">Bialogiya</option>
                     <option value="6">Tarix</option>
                     <option value="7">Rus tili</option>
                     <option value="8">Huquq</option>
                     <option value="9">Chizmachilik</option>
                  </select>
                  <select name="o_davri" class="selectCheck_b" id="teachCheck3" disabled>
                     <option value="" hidden>O'quv davri</option>
                     <option value="1">1-chorak</option>
                     <option value="2">2-chorak</option>
                     <option value="3">3-chorak</option>
                     <option value="4">4-chorak</option>
                     <option value="5">Imtihon</option>
                     <option value="6">Yillik</option>
                     <option value="7">Umumiy</option>
                  </select>
                  <button class="malumot_btn">
                     ochish
                  </button>
               </div>
            </div>
            <div class="natija_title">
               <table>
                  <tr class="sahifa_bosh">
                     <th>№</th>
                     <th style="width: 280px;">F.I</th>
                     <th class="a" id="chorak_1">1-chorak</th>
                     <th class="a" id="chorak_2">2-chorak</th>
                     <th class="a" id="chorak_3">3-chorak</th>
                     <th class="a" id="chorak_4">4-chorak</th>
                     <th class="a" id="Imtihon">Imtihon</th>
                     <th class="a" id="yillik">Yil</th>
                     <th id="oxirgi_natija">Natija</th>
                  </tr>
                  <tr>
                     <th><span class="o_number">15</span></th>
                     <th>
                        <span class="o_name">Abdunazarov bobur</span>
                     </th>
                     <th class="a" id="chorak_1"><input type="text" maxlength="1"></th>
                     <th class="a" id="chorak_2"><input type="text" maxlength="1"></th>
                     <th class="a" id="chorak_3"><input type="text" maxlength="1"></th>
                     <th class="a" id="chorak_4"><input type="text" maxlength="1"></th>
                     <th class="a" id="Imtihon"><input type="text" maxlength="1"></th>
                     <th class="a" id="yillik"><input type="text" maxlength="1"></th>
                     <th id="oxirgi_natija"><input type="text" maxlength="1"></th>
                  </tr>
                  <tr>
                     <th><span class="o_number">15</span></th>
                     <th>
                        <span class="o_name">Muhammadjonuv Muhammaddiyor</span>
                     </th>
                     <th id="chorak_1"><input type="text" maxlength="1"></th>
                     <th id="chorak_2"><input type="text" maxlength="1"></th>
                     <th id="chorak_3"><input type="text" maxlength="1"></th>
                     <th id="chorak_4"><input type="text" maxlength="1"></th>
                     <th id="Imtihon"><input type="text" maxlength="1"></th>
                     <th id="yillik"><input type="text" maxlength="1"></th>
                     <th id="oxirgi_natija"><input type="text" maxlength="1"></th>
                  </tr>
               </table>
               <div class="one_window one_window_tich_i active1">
                  <div class="one_content"></div>
              </div>
            </div>
            <div class="buton_jurnal">
               <button class="exl_export">
                  <span><i class="fa-regular fa-file-excel"></i></span>
                  <span style="padding-left: 5px;">export</span>
               </button>
               <button class="jurnal_saqlash">saqlash</button>
            </div>
         </div>
      </section>
   </main>
   <!-- section7 footer-->
   <div class="section7 container-fluid">
      <div class="header">
         <div class="container section7_content">
            <ul class="section7_text_wrap">
               <li>
                  <div class="text_a">
                     <p>Ijtimoiy tarmoqlar</p>
                  </div>
                  <ul>
                     <li>
                        <a href="">
                           <span><i class="fa-brands fa-telegram"></i></span>
                           <span>telegram</span>
                        </a>
                     </li>
                     <li>
                        <a href="">
                           <span><i class="fa-brands fa-facebook-f"></i></span>
                           <span>facebook</span>
                        </a>
                     </li>
                     <li>
                        <a href="">
                           <span><i class="fa-brands fa-youtube"></i></span>
                           <span>youtube</span>
                        </a>
                     </li>
                     <li>
                        <a href="">
                           <span><i class="fa-brands fa-instagram"></i></span>
                           <span>instagram</span>
                        </a>
                     </li>
                     <li>
                        <a href="">
                           <span><i class="fa-brands fa-twitter"></i></span>
                           <span>twitter</span>
                        </a>
                     </li>

                  </ul>
               </li>
               <li>
                  <div class="text_a">
                     <p>Bizning manzil
                     </p>
                  </div>
                  <ul>
                     <li>
                        <a
                           href="https://yandex.uz/maps/10336/phergana/house/Y0gYcQ5gQE0BQFpqfX92dntkZA==/?azimuth=5.092816215780344&from=mapframe&ll=71.790420%2C40.377354&tilt=0.8726646259971648&z=18.77">
                           <span><i class="fa-sharp fa-solid fa-location-dot"></i></span>
                           <span>Farg'ona sh.,Qashqar k., 1</span>
                        </a>
                     </li>
                     <li>
                        <a href="">
                           <span><i class="fa-solid fa-phone"></i></span>
                           <span>+99890 000 00 00</span>
                        </a>
                     </li>
                     <li>
                        <a href="">
                           <span><i class="fa-solid fa-phone"></i></span>
                           <span>+99890 000 00 00</span>
                        </a>
                     </li>
                     <li>
                        <a href="">
                           <span><i class="fa-solid fa-envelope"></i></span>
                           <span>info@gmail.com</span>
                        </a>
                     </li>
                     <li>
                        <a href="">
                           <span><i class="fa-solid fa-envelope"></i></span>
                           <span>info@gmail.com</span>
                        </a>
                     </li>

                  </ul>
               </li>
               <li class="karta_map">
                  <iframe
                     src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4298.366140973782!2d71.78458560570324!3d40.37773429703404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38bb8580a7cc85f7%3A0x23350da476023dc4!2sPresidential%20School%20in%20Fergana!5e0!3m2!1sen!2s!4v1697522294991!5m2!1sen!2s"
                     width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                     referrerpolicy="no-referrer-when-downgrade"></iframe>
               </li>
               <li class="li4">
                  <div class="img_a">
                     <div class="img"></div>
                  </div>
                  <div class="img_b">
                     <p>
                        Barcha huquqlar himoyalangan. Saytdagi barcha huquqlar O'zbekiston Respublikasi qonunlariga, shu
                        jumladan mualliflik huquqi va turdosh huquqlarga muvofiq himoya qilinadi. Sayt materiallaridan
                        foydalanganda, Farg'ona Shahr Prezident Maktab web Saytiga havola ko'rsatilishi shart. <br>
                        Diqqat! Agar siz matnda xatoliklarni aniqlasangiz, ularni belgilab, ma`muriyatni xabardor qilish
                        uchun <a href="#" id="a12">admin xabar</a> tugmalarini bosing
                     </p>
                  </div>
                  <div class="img_c"></div>
               </li>
            </ul>
         </div>
         <!--Content before waves-->
         <div class="inner-header flex">
            <!--Just the logo.. Don't mind this-->
            <path fill="#FFFFFF" stroke="#000000" stroke-width="10" stroke-miterlimit="10" d="M57,283" />
            <g>
               <path fill="#fff"
                  d="M250.4,0.8C112.7,0.8,1,112.4,1,250.2c0,137.7,111.7,249.4,249.4,249.4c137.7,0,249.4-111.7,249.4-249.4
                                C499.8,112.4,388.1,0.8,250.4,0.8z M383.8,326.3c-62,0-101.4-14.1-117.6-46.3c-17.1-34.1-2.3-75.4,13.2-104.1
                                c-22.4,3-38.4,9.2-47.8,18.3c-11.2,10.9-13.6,26.7-16.3,45c-3.1,20.8-6.6,44.4-25.3,62.4c-19.8,19.1-51.6,26.9-100.2,24.6l1.8-39.7		c35.9,1.6,59.7-2.9,70.8-13.6c8.9-8.6,11.1-22.9,13.5-39.6c6.3-42,14.8-99.4,141.4-99.4h41L333,166c-12.6,16-45.4,68.2-31.2,96.2	c9.2,18.3,41.5,25.6,91.2,24.2l1.1,39.8C390.5,326.2,387.1,326.3,383.8,326.3z" />
            </g>
         </div>

         <!--Waves Container-->
         <div>
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
               viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
               <defs>
                  <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
               </defs>
               <g class="parallax">
                  <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                  <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                  <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                  <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
               </g>
            </svg>
         </div>
      </div>
   </div>

   <script src="<?= $config['base']['url'].'web/'?>js/Jquery/jquery-3.6.4.min.js"></script>
   <script src="<?= $config['base']['url'].'web/'?>js/Jquery/owlCarusel/owl.carousel.min.js"></script>
   <script src="<?= $config['base']['url'].'web/'?>js/Jquery/jquery-ui.min.js"></script>
   <!-- Swiper JS -->
   <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"></script>
   <script src="<?= $config['base']['url'].'web/'?>js/jQuery.js"></script>
   <script src="<?= $config['base']['url'].'web/'?>js/script.js"></script>
   <script src="<?= $config['base']['url'].'web/'?>js/teacher.js"></script>
</body>

</html>