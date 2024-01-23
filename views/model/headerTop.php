<?php global  $view, $config; ?>
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
                                Bosh sahifa
                            </span>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="navbar_item">
                        <span>Biz haqimizda</span>
                        <span><i class="fa-solid fa-chevron-down"></i></span>
                        <div class="itemMenu">
                            <div class="itemMenuContent">
                                <a href="<?= $config['base']['url'] ?>BizHaqimizda/1">Maktab haqida</a>
                                <a href="<?= $config['base']['url'] ?>BizHaqimizda/2">Prezident maktablari</a>
                                <a href="<?= $config['base']['url'] ?>BizHaqimizda/3">Rahbariyat</a>
                                <a href="<?= $config['base']['url'] ?>BizHaqimizda/4">Xodimlar</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="navbar_item">
                        <span>Matbuot xizmati</span>
                        <span><i class="fa-solid fa-chevron-down"></i></span>
                        <div class="itemMenu">
                            <div class="itemMenuContent">
                                <a id="newBtnClick" href="<?= $config['base']['url'] ?>MatbuotXizmati/1">Yangiliklar</a>
                                <a id="newBtnClick" href="<?= $config['base']['url'] ?>MatbuotXizmati/2">Tadbirlar</a>
                                <a id="newBtnClick" href="<?= $config['base']['url'] ?>MatbuotXizmati/3">E'lonlar</a>
                                <a id="newBtnClick" href="<?= $config['base']['url'] ?>MatbuotXizmati/4">Fotolavhalar</a>
                                <a id="newBtnClick" href="<?= $config['base']['url'] ?>MatbuotXizmati/5">Videolavhalar</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="navbar_item">
                        <span>Foydali manbalar</span>
                        <span><i class="fa-solid fa-chevron-down"></i></span>
                        <div class="itemMenu">
                            <div class="itemMenuContent">
                                <a href="<?= $config['base']['url'] ?>FoydaliManbalar/1">Xalqaro tanlovlar</a>
                                <a href="<?= $config['base']['url'] ?>FoydaliManbalar/2">To'garaklar</a>
                                <a href="<?= $config['base']['url'] ?>FoydaliManbalar/3">O'quv qo'llanmalar</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="navbar_item">
                        <a href="<?= $config['base']['url'] ?>aloqa">
                            <span>Aloqa</span>
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
                                <button type="submit" name="lang" value="uz" class="langItem" href="">O'zbekcha</button>
                                <button type="submit" name="lang" value="ru" class="langItem" href="">Русски</button>
                                <button type="submit" name="lang" value="en" class="langItem" href="">English</button>
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
                                Bosh sahifa
                            </span>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="navbar_item">
                        <span>Biz haqimizda</span>
                        <span><i class="fa-solid fa-chevron-down"></i></span>
                        <div class="itemMenu">
                            <div class="itemMenuContent">
                                <a href="<?= $config['base']['url'] ?>BizHaqimizda/1">Maktab haqida</a>
                                <a href="<?= $config['base']['url'] ?>BizHaqimizda/2">Prezident maktablari</a>
                                <a href="<?= $config['base']['url'] ?>BizHaqimizda/3">Rahbariyat</a>
                                <a href="<?= $config['base']['url'] ?>BizHaqimizda/4">Xodimlar</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="navbar_item">
                        <span>Matbuot xizmati</span>
                        <span><i class="fa-solid fa-chevron-down"></i></span>
                        <div class="itemMenu">
                            <div class="itemMenuContent">
                                <a id="newBtnClick" href="<?= $config['base']['url'] ?>MatbuotXizmati/1">Yangiliklar</a>
                                <a id="newBtnClick" href="<?= $config['base']['url'] ?>MatbuotXizmati/2">Tadbirlar</a>
                                <a id="newBtnClick" href="<?= $config['base']['url'] ?>MatbuotXizmati/3">E'lonlar</a>
                                <a id="newBtnClick" href="<?= $config['base']['url'] ?>MatbuotXizmati/4">Fotolavhalar</a>
                                <a id="newBtnClick" href="<?= $config['base']['url'] ?>MatbuotXizmati/5">Videolavhalar</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="navbar_item">
                        <span>Foydali manbalar</span>
                        <span><i class="fa-solid fa-chevron-down"></i></span>
                        <div class="itemMenu">
                            <div class="itemMenuContent">
                                <a href="<?= $config['base']['url'] ?>FoydaliManbalar/1">Xalqaro tanlovlar</a>
                                <a href="<?= $config['base']['url'] ?>FoydaliManbalar/2">To'garaklar</a>
                                <a href="<?= $config['base']['url'] ?>FoydaliManbalar/3">O'quv qo'llanmalar</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="navbar_item">
                        <a href="<?= $config['base']['url'] ?>aloqa">
                            <span>Aloqa</span>
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
                                <button type="submit" name="lang" value="uz" class="langItem" href="">O'zbekcha</button>
                                <button type="submit" name="lang" value="ru" class="langItem" href="">Русски</button>
                                <button type="submit" name="lang" value="en" class="langItem" href="">English</button>
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
<?php
    $_SESSION['lang'] = 'uz';
    if(isset($_POST['lang'])){
        $_SESSION['lang'] = $_POST['lang'];
    }
?>