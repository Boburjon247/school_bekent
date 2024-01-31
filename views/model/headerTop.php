<?php global  $view, $config; ?>
<?php
if (isset($_POST['lang'])) {
    $_SESSION['lang'] = $_POST['lang'];
} 
include 'langs/' . $_SESSION['lang'] . '.php';
?>

<?php if ($view == 'index') : ?>
    <header class="headerTop   container-fluid" id="section1_1a">
        <div class="container">
            <div class="hamburgerBtn">
                <i class="fa-solid fa-bars"></i>
            </div>
            <ul>
                <li>
                    <div class="navbar_item">
                        <a href="<?= $config['base']['url'] ?>index">
                            <span>
                                <?= $lang['bosh_sahifa'] ?>
                            </span>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="navbar_item">
                        <span><?= $lang['biz_haqimizda'] ?></span>
                        <span><i class="fa-solid fa-chevron-down"></i></span>
                        <div class="itemMenu">
                            <div class="itemMenuContent">
                                <a href="<?= $config['base']['url'] ?>BizHaqimizda/1"><?= $lang['maktab_haqida'] ?></a>
                                <a href="<?= $config['base']['url'] ?>BizHaqimizda/2"><?= $lang['prezident_maktablari'] ?></a>
                                <a href="<?= $config['base']['url'] ?>BizHaqimizda/3"><?= $lang['rahbariyat'] ?></a>
                                <a href="<?= $config['base']['url'] ?>BizHaqimizda/4"><?= $lang['xodimlar'] ?></a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="navbar_item">
                        <span><?= $lang['matbuot_xizmati'] ?></span>
                        <span><i class="fa-solid fa-chevron-down"></i></span>
                        <div class="itemMenu">
                            <div class="itemMenuContent">
                                <a id="newBtnClick" href="<?= $config['base']['url'] ?>MatbuotXizmati/1"><?= $lang['yangiliklar'] ?></a>
                                <a id="newBtnClick" href="<?= $config['base']['url'] ?>MatbuotXizmati/2"><?= $lang['tadbirlar'] ?></a>
                                <a id="newBtnClick" href="<?= $config['base']['url'] ?>MatbuotXizmati/3"><?= $lang['elonlar'] ?></a>
                                <a id="newBtnClick" href="<?= $config['base']['url'] ?>MatbuotXizmati/4"><?= $lang['fotolavhalar'] ?></a>
                                <a id="newBtnClick" href="<?= $config['base']['url'] ?>MatbuotXizmati/5"><?= $lang['videolavhalar'] ?></a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="navbar_item">
                        <span><?= $lang['foydali_manbalar'] ?></span>
                        <span><i class="fa-solid fa-chevron-down"></i></span>
                        <div class="itemMenu">
                            <div class="itemMenuContent">
                                <a href="<?= $config['base']['url'] ?>FoydaliManbalar/1"><?= $lang['xalqaro_tanlovlar'] ?></a>
                                <a href="<?= $config['base']['url'] ?>FoydaliManbalar/2"><?= $lang['togaraklar'] ?></a>
                                <a href="<?= $config['base']['url'] ?>FoydaliManbalar/3"><?= $lang['oquv_qollanmalar'] ?></a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="navbar_item">
                        <a href="<?= $config['base']['url'] ?>aloqa">
                            <span><?= $lang['aloqa'] ?></span>
                        </a>
                    </div>
                </li>
            </ul>
            <div class="tizimAdd">
                <div class="languages">
                    <form action="" method="post">
                        <span class="langAbout">O'zbekcha</span>
                        <span><i class="fa-solid fa-chevron-down"></i></span>
                        <div class="itemMenu">
                            <div class="itemMenuContent">
                                <button name="lang" value="uz" class="langItem" type="submit">O'zbekcha</button>
                                <button name="lang" value="en" class="langItem" type="submit">English</button>
                                <button name="lang" value="ru" class="langItem" type="submit">Русски</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="user">
                    <i class="fa-regular fa-user"></i>
                </div>
            </div>
        </div>
    </header>
<?php else : ?>
    <header class="headerTop dark  container-fluid" id="section1_1a">
        <div class="container">
            <div class="hamburgerBtn">
                <i class="fa-solid fa-bars"></i>
            </div>
            <ul>
                <li>
                    <div class="navbar_item">
                        <a href="<?= $config['base']['url'] ?>index">
                            <span>
                                <?= $lang['bosh_sahifa'] ?>
                            </span>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="navbar_item">
                        <span><?= $lang['biz_haqimizda'] ?></span>
                        <span><i class="fa-solid fa-chevron-down"></i></span>
                        <div class="itemMenu">
                            <div class="itemMenuContent">
                                <a href="<?= $config['base']['url'] ?>BizHaqimizda/1"><?= $lang['maktab_haqida'] ?></a>
                                <a href="<?= $config['base']['url'] ?>BizHaqimizda/2"><?= $lang['prezident_maktablari'] ?></a>
                                <a href="<?= $config['base']['url'] ?>BizHaqimizda/3"><?= $lang['rahbariyat'] ?></a>
                                <a href="<?= $config['base']['url'] ?>BizHaqimizda/4"><?= $lang['xodimlar'] ?></a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="navbar_item">
                        <span><?= $lang['matbuot_xizmati'] ?></span>
                        <span><i class="fa-solid fa-chevron-down"></i></span>
                        <div class="itemMenu">
                            <div class="itemMenuContent">
                                <a id="newBtnClick" href="<?= $config['base']['url'] ?>MatbuotXizmati/1"><?= $lang['yangiliklar'] ?></a>
                                <a id="newBtnClick" href="<?= $config['base']['url'] ?>MatbuotXizmati/2"><?= $lang['tadbirlar'] ?></a>
                                <a id="newBtnClick" href="<?= $config['base']['url'] ?>MatbuotXizmati/3"><?= $lang['elonlar'] ?></a>
                                <a id="newBtnClick" href="<?= $config['base']['url'] ?>MatbuotXizmati/4"><?= $lang['fotolavhalar'] ?></a>
                                <a id="newBtnClick" href="<?= $config['base']['url'] ?>MatbuotXizmati/5"><?= $lang['videolavhalar'] ?></a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="navbar_item">
                        <span><?= $lang['foydali_manbalar'] ?></span>
                        <span><i class="fa-solid fa-chevron-down"></i></span>
                        <div class="itemMenu">
                            <div class="itemMenuContent">
                                <a href="<?= $config['base']['url'] ?>FoydaliManbalar/1"><?= $lang['xalqaro_tanlovlar'] ?></a>
                                <a href="<?= $config['base']['url'] ?>FoydaliManbalar/2"><?= $lang['togaraklar'] ?></a>
                                <a href="<?= $config['base']['url'] ?>FoydaliManbalar/3"><?= $lang['oquv_qollanmalar'] ?></a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="navbar_item">
                        <a href="<?= $config['base']['url'] ?>aloqa">
                            <span><?= $lang['aloqa'] ?></span>
                        </a>
                    </div>
                </li>
            </ul>
            <div class="tizimAdd">
                <div class="languages">
                    <form action="" method="post">
                        <span class="langAbout">O'zbekcha</span>
                        <span><i class="fa-solid fa-chevron-down"></i></span>
                        <div class="itemMenu">
                            <div class="itemMenuContent">
                                <button name="lang" value="uz" class="langItem" type="submit">O'zbekcha</button>
                                <button name="lang" value="en" class="langItem" type="submit">English</button>
                                <button name="lang" value="ru" class="langItem" type="submit">Русски</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="user">
                    <i class="fa-regular fa-user"></i>
                </div>
            </div>
        </div>
    </header>
<?php endif; ?>