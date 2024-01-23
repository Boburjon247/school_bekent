<?php
global $config;
include $config['base']['path'] . 'views/model/header-banner.php'
?>
<?php if (isset($_GET['id']) && $_GET['id'] == 1) : ?>
    <!-- header-banner -->
    <?php headerBanner('Biz haqimizda'); ?>
    <!-- main -->
    <main>
        <section class="container-fluid about">
            <div class="container aboutContainer">
                <h2>Farg'ona shaxar Prezident maktabi</h2>
                <?php foreach (GetAll('admin_m_haqida', 'false', 'asc') as $key => $text) : ?>
                    <span><?= $text['text_' . $_SESSION['lang']] ?></span>
                <?php endforeach; ?>
            </div>
        </section>
    </main>
<?php elseif (isset($_GET['id']) && $_GET['id'] == 2) : ?>
    <!-- header-banner -->
    <?php headerBanner('Prezident maktablari'); ?>
    <!-- main -->
    <main>
        <section class="container-fluid schools">
            <div class="container containerSchools">
                <?php foreach (GetAll('admin_maktablar_linklar', 'false', 'asc') as $key => $text) : ?>
                    <div class="schoolsCard">
                        <div class="icon">
                            <img src="<?= $config['base']['url'] . 'web/img/maktanlar-logo/'.$text['img']?>" alt="">
                        </div>
                        <div class="title">
                            <p><?= $text['text_'.$_SESSION['lang']]?></p>
                            <a target="_blank" href="<?= $text['link']?>">Batafsil</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>
<?php elseif (isset($_GET['id']) && $_GET['id'] == 3) : ?>
    <!-- header-banner -->
    <?php headerBanner('Rahbariyat'); ?>
    <!-- main -->
    <main>
        <section class="container-fluid leadership">
            <div class="container leadershipContainer">
                <div class="row">
                    <!-- item -->
                    <div class="leaderCard">
                        <div class="img" style="background-image: url(<?= $config['base']['url'] . 'web/' ?>img/user.jpg);"></div>
                        <div class="text">
                            <h3 class="userName1">Abdunazarov Boburjon</h3>
                            <p class="lavozimText">Direktor</p>
                            <hr>
                            <p>
                                <span><i class="fa-solid fa-envelope"></i></span>
                                <span>Elektron pochta:</span>
                                <span class="ps-2">info01@gmail.com</span>
                            </p>
                            <p>
                                <span><i class="fa-solid fa-phone"></i></span>
                                <span>Telefon:</span>
                                <span class="ps-2">+99890 000 00 00</span>
                            </p>
                            <p>
                                <span><i class="fa-solid fa-clock"></i></span>
                                <span>Qabul kunlari:</span>
                                <span class="ps-2">Chorshanba 16:00 dan 18:00 gacha</span>
                            </p>
                            <p>
                                <span><i class="fa-solid fa-location-dot"></i></span>
                                <span>Manzil:</span>
                                <span class="ps-2">Toshkent sh, Yashnabod tumani Mahtumquli ko‘chasi</span>
                            </p>
                            <p class="userName1 hidetitle">Title1</p>
                            <button class="btnTarjimai" id="dialogModalBtn">
                                Tarjimai hol
                            </button>
                        </div>
                    </div>

                    <div class="leaderCard">
                        <div class="img" style="background-image: url(<?= $config['base']['url'] . 'web/' ?>img/user.jpg);"></div>
                        <div class="text">
                            <h3 class="userName1">Ikromov</h3>
                            <p class="lavozimText">Direktor</p>
                            <hr>
                            <p>
                                <span><i class="fa-solid fa-envelope"></i></span>
                                <span>Elektron pochta:</span>
                                <span class="ps-2">info01@gmail.com</span>
                            </p>
                            <p>
                                <span><i class="fa-solid fa-phone"></i></span>
                                <span>Telefon:</span>
                                <span class="ps-2">+99890 000 00 00</span>
                            </p>
                            <p>
                                <span><i class="fa-solid fa-clock"></i></span>
                                <span>Qabul kunlari:</span>
                                <span class="ps-2">Chorshanba 16:00 dan 18:00 gacha</span>
                            </p>
                            <p>
                                <span><i class="fa-solid fa-location-dot"></i></span>
                                <span>Manzil:</span>
                                <span class="ps-2">Toshkent sh, Yashnabod tumani Mahtumquli ko‘chasi</span>
                            </p>
                            <p class="userName1 hidetitle">Tile1</p>
                            <button class="btnTarjimai" id="dialogModalBtn">
                                Tarjimai hol
                            </button>
                        </div>
                    </div>
                </div>
                <!-- madalka -->
                <div id="dialogModal" class="modalDialog">
                    <div class="modalDialog-container"></div>
                </div>
            </div>
        </section>
    </main>
    <!--script-->
    <script src="<?= $config['base']['url'] . 'web/' ?>js/leadership.js"></script>
<?php elseif (isset($_GET['id']) && $_GET['id'] == 4) : ?>
    <!-- header-banner -->
    <?php headerBanner('Xodimlar'); ?>
    <!-- main -->
    <main>
        <section class="container-fluid newSection">
            <div class="card-content container">
                <div class="card">
                    <div class="card-img card_img_employees" style="background-image: url(<?= $config['base']['url'] . 'web/' ?>img/Dinner.jpg);">
                        <div class="card-hide">
                            <div class="card-hide-content">
                                <div class="tel pb-2">
                                    <label for="">telefon raqami</label>
                                    <span>97 000 00 00</span>
                                </div>
                                <div class="email">
                                    <label for="">E-mail</label>
                                    <span>info01@gmail.com</span>
                                </div>
                                <div class="devasi_link">
                                    <div class="tg">
                                        <a href="">
                                            <i class="fa-brands fa-telegram"></i>
                                        </a>
                                    </div>
                                    <div class="inst">
                                        <a href="">
                                            <i class="fa-brands fa-square-instagram"></i>
                                        </a>
                                    </div>
                                    <div class="fecbk">
                                        <a href="">
                                            <i class="fa-brands fa-facebook"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-title">
                        <h3>Alisher Ne'matov</h3>
                        <span>Xodimlar bilan ishlash bo‘yicha bosh mutaxassisi</span>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img card_img_employees" style="background-image: url(<?= $config['base']['url'] . 'web/' ?>img/imgNot.jpg);">
                        <div class="card-hide">
                            <div class="card-hide-content">
                                <div class="tel pb-2">
                                    <label for="">telefon raqami</label>
                                    <span>97 000 00 00</span>
                                </div>
                                <div class="email">
                                    <label for="">E-mail</label>
                                    <span>info01@gmail.com</span>
                                </div>
                                <div class="devasi_link">
                                    <div class="tg">
                                        <a href="">
                                            <i class="fa-brands fa-telegram"></i>
                                        </a>
                                    </div>
                                    <div class="inst">
                                        <a href="">
                                            <i class="fa-brands fa-square-instagram"></i>
                                        </a>
                                    </div>
                                    <div class="fecbk">
                                        <a href="">
                                            <i class="fa-brands fa-facebook"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-title">
                        <h3>Alisher Ne'matov Bahromivich</h3>
                        <span>Xodimlar bilan ishlash bo‘yicha bosh mutaxassisi</span>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img card_img_employees" style="background-image: url(<?= $config['base']['url'] . 'web/' ?>img/imgNot.jpg);">
                        <div class="card-hide">
                            <div class="card-hide-content">
                                <div class="tel pb-2">
                                    <label for="">telefon raqami</label>
                                    <span>97 000 00 00</span>
                                </div>
                                <div class="email">
                                    <label for="">E-mail</label>
                                    <span>info01@gmail.com</span>
                                </div>
                                <div class="devasi_link">
                                    <div class="tg">
                                        <a href="">
                                            <i class="fa-brands fa-telegram"></i>
                                        </a>
                                    </div>
                                    <div class="inst">
                                        <a href="">
                                            <i class="fa-brands fa-square-instagram"></i>
                                        </a>
                                    </div>
                                    <div class="fecbk">
                                        <a href="">
                                            <i class="fa-brands fa-facebook"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-title">
                        <h3>Alisher Ne'matov</h3>
                        <span>Xodimlar bilan ishlash bo‘yicha bosh mutaxassisi</span>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img card_img_employees" style="background-image: url(<?= $config['base']['url'] . 'web/' ?>img/imgNot.jpg);">
                        <div class="card-hide">
                            <div class="card-hide-content">
                                <div class="tel pb-2">
                                    <label for="">telefon raqami</label>
                                    <span>97 000 00 00</span>
                                </div>
                                <div class="email">
                                    <label for="">E-mail</label>
                                    <span>info01@gmail.com</span>
                                </div>
                                <div class="devasi_link">
                                    <div class="tg">
                                        <a href="">
                                            <i class="fa-brands fa-telegram"></i>
                                        </a>
                                    </div>
                                    <div class="inst">
                                        <a href="">
                                            <i class="fa-brands fa-square-instagram"></i>
                                        </a>
                                    </div>
                                    <div class="fecbk">
                                        <a href="">
                                            <i class="fa-brands fa-facebook"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-title">
                        <h3>Alisher Ne'matov</h3>
                        <span>Xodimlar bilan ishlash bo‘yicha bosh mutaxassisi</span>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img card_img_employees" style="background-image: url(<?= $config['base']['url'] . 'web/' ?>img/imgNot.jpg);">
                        <div class="card-hide">
                            <div class="card-hide-content">
                                <div class="tel pb-2">
                                    <label for="">telefon raqami</label>
                                    <span>97 000 00 00</span>
                                </div>
                                <div class="email">
                                    <label for="">E-mail</label>
                                    <span>info01@gmail.com</span>
                                </div>
                                <div class="devasi_link">
                                    <div class="tg">
                                        <a href="">
                                            <i class="fa-brands fa-telegram"></i>
                                        </a>
                                    </div>
                                    <div class="inst">
                                        <a href="">
                                            <i class="fa-brands fa-square-instagram"></i>
                                        </a>
                                    </div>
                                    <div class="fecbk">
                                        <a href="">
                                            <i class="fa-brands fa-facebook"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-title">
                        <h3>Alisher Ne'matov</h3>
                        <span>Xodimlar bilan ishlash bo‘yicha bosh mutaxassisi</span>
                    </div>
                </div>


            </div>
            <div class="pagination container">
                <li class="page-item previous-page "><a href="#">
                        << /a>
                </li>
                <li class="page-item current-page"><a href="#">1</a></li>
                <li class="page-item current-page"><a href="#">2</a></li>
                <li class="page-item current-page"><a href="#">3</a></li>
                <li class="page-item current-page"><a href="#">4</a></li>
                <li class="page-item dots"><a href="#">....</a></li>
                <li class="page-item current-page"><a href="#">10</a></li>
                <li class="page-item next-page"><a href="#">></a></li>
            </div>
            </div>
        </section>
    </main>
    <script src="<?= $config['base']['url'] . 'web/' ?>js/pagination.js"></script>
<?php endif; ?>