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
                        <a href="?view=index">
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
                                <a href="?view=Biz-haqimizda&id=1">Maktab haqida</a>
                                <a href="?view=Biz-haqimizda&id=2">Prezident maktablari</a>
                                <a href="?view=Biz-haqimizda&id=3">Rahbariyat</a>
                                <a href="?view=Biz-haqimizda&id=4">Xodimlar</a>
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
                                <a id="newBtnClick" href="?view=Matbuot-xizmati&id=1">Yangiliklar</a>
                                <a id="newBtnClick" href="?view=Matbuot-xizmati&id=2">Tadbirlar</a>
                                <a id="newBtnClick" href="?view=Matbuot-xizmati&id=3">E'lonlar</a>
                                <a id="newBtnClick" href="?view=Matbuot-xizmati&id=4">Fotolavhalar</a>
                                <a id="newBtnClick" href="?view=Matbuot-xizmati&id=5">Videolavhalar</a>
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
                                <a href="?view=Foydali-manbalar&id=1">Xalqaro tanlovlar</a>
                                <a href="?view=Foydali-manbalar&id=2">To'garaklar</a>
                                <a href="?view=Foydali-manbalar&id=3">O'quv qo'llanmalar</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="navbar_item">
                        <a href="?view=aloqa">
                            <span>Aloqa</span>
                        </a>
                    </div>
                </li>
            </ul>
            <div class="tizimAdd">
                <div class="languages">
                    <span>O'zbekcha</span>
                    <span><i class="fa-solid fa-chevron-down"></i></span>
                    <div class="itemMenu">
                        <div class="itemMenuContent">
                            <a href="">O'zbekcha</a>
                            <a href="">Русски</a>
                            <a href="">English</a>
                        </div>
                    </div>
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
                        <a href="?view=index">
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
                                <a href="?view=Biz-haqimizda&id=1">Maktab haqida</a>
                                <a href="?view=Biz-haqimizda&id=2">Prezident maktablari</a>
                                <a href="?view=Biz-haqimizda&id=3">Rahbariyat</a>
                                <a href="?view=Biz-haqimizda&id=4">Xodimlar</a>
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
                                <a id="newBtnClick" href="?view=Matbuot-xizmati&id=1">Yangiliklar</a>
                                <a id="newBtnClick" href="?view=Matbuot-xizmati&id=2">Tadbirlar</a>
                                <a id="newBtnClick" href="?view=Matbuot-xizmati&id=3">E'lonlar</a>
                                <a id="newBtnClick" href="?view=Matbuot-xizmati&id=4">Fotolavhalar</a>
                                <a id="newBtnClick" href="?view=Matbuot-xizmati&id=5">Videolavhalar</a>
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
                                <a href="?view=Foydali-manbalar&id=1">Xalqaro tanlovlar</a>
                                <a href="?view=Foydali-manbalar&id=2">To'garaklar</a>
                                <a href="?view=Foydali-manbalar&id=3">O'quv qo'llanmalar</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="navbar_item">
                        <a href="?view=aloqa">
                            <span>Aloqa</span>
                        </a>
                    </div>
                </li>
            </ul>
            <div class="tizimAdd">
                <div class="languages">
                    <span>O'zbekcha</span>
                    <span><i class="fa-solid fa-chevron-down"></i></span>
                    <div class="itemMenu">
                        <div class="itemMenuContent">
                            <a href="">O'zbekcha</a>
                            <a href="">Русски</a>
                            <a href="">English</a>
                        </div>
                    </div>
                </div>
                <div class="user">
                    <i class="fa-regular fa-user"></i>
                </div>
            </div>
        </div>
    </header>
<?php endif; ?>