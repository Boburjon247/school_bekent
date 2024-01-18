<?php
global $view, $config;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bosh sahifa</title>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <!-- jquery -->
    <link rel="stylesheet" href="<?= $config['base']['url'] . 'web/' ?>js/Jquery/owlCarusel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= $config['base']['url'] . 'web/' ?>js/Jquery/owlCarusel/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= $config['base']['url'] . 'web/' ?>js/Jquery/jquery-ui.min.css">
    <link rel="stylesheet" href="<?= $config['base']['url'] . 'web/' ?>js/Jquery/jquery-ui.theme.min.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--font awesome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;500&display=swap" rel="stylesheet">
    <!--css-->
    <link rel="stylesheet" href="<?= $config['base']['url'] . 'web/' ?>css/style.css">
    <link rel="stylesheet" href="<?= $config['base']['url'] . 'web/' ?>css/mediya.css">
    <link rel="shortcut icon" href="<?= $config['base']['url'] . 'web/' ?>img/logo-icon-new.svg" type="image/x-icon">

</head>

<body>
    <!--up link-->
    <a class="uplink" href="">
        <i class="fa-solid fa-chevron-up"></i>
    </a>
    <!-- regist -->
    <div class="registration_wrap grid-bg ba-grid anim" id="uplinkLogin">
        <div class="inner">
            <div class="registration_title">
                <div class="regist_close">
                    <i class="fa-solid fa-xmark exit_regis"></i>
                </div>
                <div class="logo_regist">
                    <span><img src="<?= $config['base']['url'] . 'web/' ?>img/6182235a66337.svg" alt=""></span>
                    <span>FARG'ONA SHAHRIDAGI PREZIDENT MAKTAB</span>
                </div>
                <form action="<?=url?>/login.php" method="post" class="login_1 Tab_C">
                    <div class="form-group">
                        <input type="text" name="login" id="loginInput" class="username" required="required">
                        <span for="username" class="text_uesr"">Username</span>
                    <i class=" fa-regular fa-user user_regist"></i>
                    </div>
                    <div class="form-group">
                        <input type="password" id="passwordInput" name="password" class="form-control password_login_reg" id="password" required="required">
                        <span for="password">Password</span>
                        <i class="fa-solid fa-lock pas_regist"></i>
                        <p class="eyes">
                            <i class="eyes_regest fa-regular fa-eye-slash"></i>
                        </p>
                    </div>
                    <div class="form-group form-group3">
                        <label for="checkbox">
                            <input type="checkbox" name="checkbox" id="checkbox" required class="checkbox_regist">
                            <p>Remember me</p>
                        </label>
                    </div>
                    <p class="loginxatolik"></p>
                    <div class="regis_btn" style="position: relative;">
                        <!-- <div class="loading aloqaLOAD registerLading">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; background: #2B385D; display: block;" width="50px" height="50px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                                <g  transform="translate(80,50)">
                                    <g transform="rotate(0)">
                                        <circle cx="0" cy="0" r="6" fill="#1c4595" fill-opacity="1">
                                            <animateTransform attributeName="transform" type="scale" begin="-0.875s" values="1.5 1.5;1 1" keyTimes="0;1" dur="1s" repeatCount="indefinite"></animateTransform>
                                            <animate attributeName="fill-opacity" keyTimes="0;1" dur="1s" repeatCount="indefinite" values="1;0" begin="-0.875s"></animate>
                                        </circle>
                                    </g>
                                </g>
                                <g transform="translate(71.21320343559643,71.21320343559643)">
                                    <g transform="rotate(45)">
                                        <circle cx="0" cy="0" r="6" fill="#1c4595" fill-opacity="0.875">
                                            <animateTransform attributeName="transform" type="scale" begin="-0.75s" values="1.5 1.5;1 1" keyTimes="0;1" dur="1s" repeatCount="indefinite"></animateTransform>
                                            <animate attributeName="fill-opacity" keyTimes="0;1" dur="1s" repeatCount="indefinite" values="1;0" begin="-0.75s"></animate>
                                        </circle>
                                    </g>
                                </g>
                                <g transform="translate(50,80)">
                                    <g transform="rotate(90)">
                                        <circle cx="0" cy="0" r="6" fill="#1c4595" fill-opacity="0.75">
                                            <animateTransform attributeName="transform" type="scale" begin="-0.625s" values="1.5 1.5;1 1" keyTimes="0;1" dur="1s" repeatCount="indefinite"></animateTransform>
                                            <animate attributeName="fill-opacity" keyTimes="0;1" dur="1s" repeatCount="indefinite" values="1;0" begin="-0.625s"></animate>
                                        </circle>
                                    </g>
                                </g>
                                <g transform="translate(28.786796564403577,71.21320343559643)">
                                    <g transform="rotate(135)">
                                        <circle cx="0" cy="0" r="6" fill="#1c4595" fill-opacity="0.625">
                                            <animateTransform attributeName="transform" type="scale" begin="-0.5s" values="1.5 1.5;1 1" keyTimes="0;1" dur="1s" repeatCount="indefinite"></animateTransform>
                                            <animate attributeName="fill-opacity" keyTimes="0;1" dur="1s" repeatCount="indefinite" values="1;0" begin="-0.5s"></animate>
                                        </circle>
                                    </g>
                                </g>
                                <g transform="translate(20,50.00000000000001)">
                                    <g transform="rotate(180)">
                                        <circle cx="0" cy="0" r="6" fill="#1c4595" fill-opacity="0.5">
                                            <animateTransform attributeName="transform" type="scale" begin="-0.375s" values="1.5 1.5;1 1" keyTimes="0;1" dur="1s" repeatCount="indefinite"></animateTransform>
                                            <animate attributeName="fill-opacity" keyTimes="0;1" dur="1s" repeatCount="indefinite" values="1;0" begin="-0.375s"></animate>
                                        </circle>
                                    </g>
                                </g>
                                <g transform="translate(28.78679656440357,28.786796564403577)">
                                    <g transform="rotate(225)">
                                        <circle cx="0" cy="0" r="6" fill="#1c4595" fill-opacity="0.375">
                                            <animateTransform attributeName="transform" type="scale" begin="-0.25s" values="1.5 1.5;1 1" keyTimes="0;1" dur="1s" repeatCount="indefinite"></animateTransform>
                                            <animate attributeName="fill-opacity" keyTimes="0;1" dur="1s" repeatCount="indefinite" values="1;0" begin="-0.25s"></animate>
                                        </circle>
                                    </g>
                                </g>
                                <g transform="translate(49.99999999999999,20)">
                                    <g transform="rotate(270)">
                                        <circle cx="0" cy="0" r="6" fill="#1c4595" fill-opacity="0.25">
                                            <animateTransform attributeName="transform" type="scale" begin="-0.125s" values="1.5 1.5;1 1" keyTimes="0;1" dur="1s" repeatCount="indefinite"></animateTransform>
                                            <animate attributeName="fill-opacity" keyTimes="0;1" dur="1s" repeatCount="indefinite" values="1;0" begin="-0.125s"></animate>
                                        </circle>
                                    </g>
                                </g>
                                <g transform="translate(71.21320343559643,28.78679656440357)">
                                    <g transform="rotate(315)">
                                        <circle cx="0" cy="0" r="6" fill="#1c4595" fill-opacity="0.125">
                                            <animateTransform attributeName="transform" type="scale" begin="0s" values="1.5 1.5;1 1" keyTimes="0;1" dur="1s" repeatCount="indefinite"></animateTransform>
                                            <animate attributeName="fill-opacity" keyTimes="0;1" dur="1s" repeatCount="indefinite" values="1;0" begin="0s"></animate>
                                        </circle>
                                    </g>
                                </g>
                            </svg>
                        </div> -->
                        <button type="submit" name="loginBtn" class="btn registration-btn">
                            <span>Login up</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- hamburger_hide-->
    <div class="hamburger_hide">
        <div class="close hamburger_exit">
            <i class="fa-solid fa-xmark"></i>
        </div>
        <div class="hamburger_title">
            <div>
                <p class="hamburger_title_text">Shahr Prezident Maktab</p>
            </div>
            <a href="<?= $config['base']['url']?>index" class="menu_item menu_item1">Bosh sahifa</a>
            <div id="accordion_hamburger">
                <h3>Biz haqimizda</h3>
                <div class="acardion_item">
                    <a href="<?= $config['base']['url']?>BizHaqimizda/1">Maktab haqida</a>
                    <a href="<?= $config['base']['url']?>BizHaqimizda/2">Prezident maktablari</a>
                    <a href="<?= $config['base']['url']?>BizHaqimizda/3">Rahbariyat</a>
                    <a href="<?= $config['base']['url']?>BizHaqimizda/4">Xodimlar</a>
                </div>
                <h3>Matbuot xizmati</h3>
                <div class="acardion_item">
                    <a href="<?= $config['base']['url']?>MatbuotXizmati/1">Yangiliklar</a>
                    <a href="<?= $config['base']['url']?>MatbuotXizmati/2">Tadbirlar</a>
                    <a href="<?= $config['base']['url']?>MatbuotXizmati/3">E'lonlar</a>
                    <a href="<?= $config['base']['url']?>MatbuotXizmati/4">Fotolavhalar</a>
                    <a href="<?= $config['base']['url']?>MatbuotXizmati/5">Videolavhalar</a>
                </div>
                <h3>Foydali manbalar</h3>
                <div class="acardion_item">
                    <a href="<?= $config['base']['url']?>FoydaliManbalar/1">Xalqaro tanlovlar</a>
                    <a href="<?= $config['base']['url']?>FoydaliManbalar/2">To'garaklar</a>
                    <a href="<?= $config['base']['url']?>FoydaliManbalar/3">O'quv qo'llanmalar</a>
                </div>
            </div>
            <a href="<?= $config['base']['url']?>aloqa" class="menu_item">Aloqa</a>
        </div>
    </div>
    <!--    headerTop-->
    <?php include $config['base']['path'] . 'views/model/headerTop.php' ?>
    <!--main   -->
    <?php include  $config['base']['path'] . 'views/model/' . $view . '.php'; ?>

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
                                <a href="https://t.me/Boburjon03" target="_blank">
                                    <span><i class="fa-brands fa-telegram"></i></span>
                                    <span>telegram</span>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="https://www.facebook.com/abdunazarov">
                                    <span><i class="fa-brands fa-facebook-f"></i></span>
                                    <span>facebook</span>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="http://www.youtube.com/embed/zX54DIpacNE">
                                    <span><i class="fa-brands fa-youtube"></i></span>
                                    <span>youtube</span>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="http://instagram.com/_u/abdunazarov_bobur030">
                                    <span><i class="fa-brands fa-instagram"></i></span>
                                    <span>instagram</span>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="https://twitter.com/intent/tweet">
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
                                <a target="_blank" href="https://yandex.uz/maps/10336/phergana/house/Y0gYcQ5gQE0BQFpqfX92dntkZA==/?azimuth=5.092816215780344&from=mapframe&ll=71.790420%2C40.377354&tilt=0.8726646259971648&z=18.77">
                                    <span><i class="fa-sharp fa-solid fa-location-dot"></i></span>
                                    <span>Farg'ona sh.,Qashqar k., 1</span>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="tel:+998976665979">
                                    <span><i class="fa-solid fa-phone"></i></span>
                                    <span>+99890 000 00 00</span>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="tel:+998976665979">
                                    <span><i class="fa-solid fa-phone"></i></span>
                                    <span>+99890 000 00 00</span>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="mailto:abdunazarov247@gmail.com">
                                    <span><i class="fa-solid fa-envelope"></i></span>
                                    <span>info@gmail.com</span>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="mailto:abdunazarov247@gmail.com    ">
                                    <span><i class="fa-solid fa-envelope"></i></span>
                                    <span>info@gmail.com</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="karta_map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4298.366140973782!2d71.78458560570324!3d40.37773429703404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38bb8580a7cc85f7%3A0x23350da476023dc4!2sPresidential%20School%20in%20Fergana!5e0!3m2!1sen!2s!4v1697522294991!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </li>
                    <li class="li4">
                        <div class="img_a">
                            <div class="img" style="background-image: url('<?= $config['base']['url'] . 'web/' ?>img/6182235a66337.svg');"></div>
                        </div>
                        <div class="img_b">
                            <p>
                                Barcha huquqlar himoyalangan. Saytdagi barcha huquqlar O'zbekiston Respublikasi qonunlariga, shu jumladan mualliflik huquqi va turdosh huquqlarga muvofiq himoya qilinadi. Sayt materiallaridan foydalanganda, Farg'ona Shahr Prezident Maktab web Saytiga havola ko'rsatilishi shart. <br>
                                Diqqat! Agar siz matnda xatoliklarni aniqlasangiz, ularni belgilab, ma`muriyatni xabardor qilish uchun <a href="#" id="a12">admin xabar</a> tugmalarini bosing
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
                    <path fill="#fff" d="M250.4,0.8C112.7,0.8,1,112.4,1,250.2c0,137.7,111.7,249.4,249.4,249.4c137.7,0,249.4-111.7,249.4-249.4
                                C499.8,112.4,388.1,0.8,250.4,0.8z M383.8,326.3c-62,0-101.4-14.1-117.6-46.3c-17.1-34.1-2.3-75.4,13.2-104.1
                                c-22.4,3-38.4,9.2-47.8,18.3c-11.2,10.9-13.6,26.7-16.3,45c-3.1,20.8-6.6,44.4-25.3,62.4c-19.8,19.1-51.6,26.9-100.2,24.6l1.8-39.7		c35.9,1.6,59.7-2.9,70.8-13.6c8.9-8.6,11.1-22.9,13.5-39.6c6.3-42,14.8-99.4,141.4-99.4h41L333,166c-12.6,16-45.4,68.2-31.2,96.2	c9.2,18.3,41.5,25.6,91.2,24.2l1.1,39.8C390.5,326.2,387.1,326.3,383.8,326.3z" />
                </g>
            </div>

            <!--Waves Container-->
            <div>
                <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
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
    <script src="<?= $config['base']['url'] . 'web/' ?>js/Jquery/jquery-3.6.4.min.js"></script>
    <script src="<?= $config['base']['url'] . 'web/' ?>js/Jquery/owlCarusel/owl.carousel.min.js"></script>

    <script src="<?= $config['base']['url'] . 'web/' ?>js/Jquery/jquery-ui.min.js"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="module" src="<?= $config['base']['url'] . 'web/' ?>js/jQuery.js"></script>
    <!-- <script type="module" src="<?= $config['base']['url'] . 'web/' ?>js/ajax.js"></script> -->
</body>

</html>