<?php
global $config;
include $config['base']['path'] . 'views/model/header-banner.php'
?>
<?php if (isset($_GET['id']) && $_GET['id'] == 1) : ?>
    <!-- header-banner -->
    <?php headerBanner($lang['biz_haqimizda']); ?>
    <!-- main -->
    <main>
        <section class="container-fluid about">
            <div class="container aboutContainer">
                <h2><?= $lang['F_Sh_P_Maktab'] ?></h2>
                <?php foreach (GetAll('admin_m_haqida', 'false', 'asc') as $key => $text) : ?>
                    <span><?= $text['text_' . $_SESSION['lang']] ?></span>
                <?php endforeach; ?>
            </div>
        </section>
    </main>
<?php elseif (isset($_GET['id']) && $_GET['id'] == 2) : ?>
    <!-- header-banner -->
    <?php headerBanner($lang['prezident_maktablari']); ?>
    <!-- main -->
    <main>
        <section class="container-fluid schools">
            <div class="container containerSchools">
                <?php foreach (GetAll('admin_maktablar_linklar', 'false', 'asc') as $key => $text) : ?>
                    <div class="schoolsCard">
                        <div class="icon">
                            <img src="<?= $config['base']['url'] . 'web/img/maktanlar-logo/' . $text['img'] ?>" alt="">
                        </div>
                        <div class="title">
                            <p><?= $text['text_' . $_SESSION['lang']] ?></p>
                            <a target="_blank" href="<?= $text['link'] ?>"><?= $lang['btn2'] ?></a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>
<?php elseif (isset($_GET['id']) && $_GET['id'] == 3) : ?>
    <!-- header-banner -->
    <?php headerBanner($lang['rahbariyat']); ?>
    <!-- main -->
    <main>
        <section class="container-fluid leadership">
            <div class="container leadershipContainer">
                <div class="row leadershipContainer_row">
                    <!-- item -->
                    <?php foreach (GetAll('admin_maktabhaqida_hodimlar', 'false', 'asc') as $key => $text) : ?>
                        <div class="leaderCard">
                            <div class="img" id="leaderCardimg" style="background-image: url('<?= $config['base']['url'] . 'web/img/rahbarlarimg/' . $text['img'] ?>');"></div>
                            <div class="text">
                                <h3 class="userName1"><?= $text['ism'] . ' ' . $text['fam'] ?></h3>
                                <p class="lavozimText"><?= $text['lavozim'] ?></p>
                                <hr>
                                <p class="p_text">
                                    <span><i class="fa-solid fa-envelope"></i><?= $lang['e_p'] ?></span>
                                    <span class="ps-2"><?= $text['email'] ?></span>
                                </p>
                                <p class="p_text">
                                    <span><i class="fa-solid fa-phone"></i><?= $lang['tel'] ?></span>
                                    <span class="ps-2"><?= $text['tel'] ?></span>
                                </p>
                                <p class="p_text">
                                    <span><i class="fa-solid fa-clock"></i><?= $lang['q_k'] ?></span>
                                    <span class="ps-2"><?= $text['qabul_kunlar'] ?></span>
                                </p>
                                <p class="p_text">
                                    <span><i class="fa-solid fa-location-dot"></i><?= $lang['m_l'] ?></span>
                                    <span class="ps-2"><?= $text['manzil'] ?></span>
                                </p>
                                <p class="userName1 hidetitle"><?= $text['text_' . $_SESSION['lang']] ?></p>
                                <button class="btnTarjimai" id="dialogModalBtn">
                                    <?= $lang['btn3'] ?>
                                </button>
                            </div>
                        </div>
                    <?php endforeach; ?>
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
    <?php headerBanner($lang['xodimlar']); ?>
    <!-- main -->
    <main>
        <section class="container-fluid newSection">
            <div class=" xolqaro-tanlovlar container">
                <div class="row card-content">
                    <?php foreach (GetAll('admin_maktabhaqida_hodmlr', 'false', 'asc') as $key => $text) : ?>
                        <div class="col card">
                            <img class="card_img_togarak" style="background-image: url(<?= $config['base']['url'] . 'web/img/hodimlar/' . $text['img'] ?>)"></img>
                            <div class="card_title">
                                <p style="text-align: center;"><?= $text['ism'] . ' ' . $text['fam'] ?></p>
                                <span style="text-align: center; display: block;"><?= $text['fani'] ?></span>
                            </div>
                            <div class="card_control">
                                <div class="card_linklar">
                                    <a target="_blank" href="mailto:<?= $text['email'] ?>"><i class="fa-solid fa-envelope"></i></a>
                                    <a target="_blank" href="https://t.me/<?= $text['telegram'] ?>"><i class="fa-brands fa-telegram"></i></a>
                                    <a target="_blank" href="tel:<?= $text['tel'] ?>"><i class="fa-solid fa-phone"></i></a>
                                    <a target="_blank" href="http://instagram.com/_u/<?= $text['insta'] ?>"><i class="fa-brands fa-square-instagram"></i></a>
                                    <a target="_blank" href="https://www.facebook.com/<?= $text['facebook'] ?>"><i class="fa-brands fa-facebook"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="pagination container">
                <li class="page-item previous-page "><a href="#">
                        < </a>
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