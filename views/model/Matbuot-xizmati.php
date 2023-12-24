<?php
global $view,$config;
include $config['base']['path'].'views/model/header-banner.php';
?>
<?php if(isset($_GET['id']) && $_GET['id'] == 1 ): ?>
    <?php headerBanner('Yangiliklar'); ?>
    <main>
        <section class="container-fluid newSection">
            <div class="card-content container">
                <div class="card">
                    <div class="card-img" style="background-image: url(<?= $config['base']['url'].'web/'?>img/PIIM1.jpg);"></div>
                    <div class="card-info">
                        <a href="" class="cardTextJs">Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt? Lorem ipsum dolor sit
                            amet consectetur adipisicing elit. In, sunt? </a>
                    </div>
                    <div class="card-date">
                        <p>12.12.2023</p>
                        <p>
                            <span><i class="fa-solid fa-eye"></i></span>
                            <span>000</span>
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img" style="background-image: url(<?= $config['base']['url'].'web/'?>img/PIIM1.jpg);"></div>
                    <div class="card-info">
                        <a href="" class="cardTextJs"> ipsum dolor sit amet consectetur adipisicing elit. In, sunt?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt? Lorem ipsum dolor sit
                            amet consectetur adipisicing elit. In, sunt? </a>
                    </div>
                    <div class="card-date">
                        <p>12.12.2023</p>
                        <p>
                            <span><i class="fa-solid fa-eye"></i></span>
                            <span>000</span>
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img" style="background-image: url(<?= $config['base']['url'].'web/'?>img/PIIM1.jpg);"></div>
                    <div class="card-info">
                        <a href="" class="cardTextJs">Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt? Lorem ipsum dolor sit
                            amet consectetur adipisicing elit. In, sunt? </a>
                    </div>
                    <div class="card-date">
                        <p>12.12.2023</p>
                        <p>
                            <span><i class="fa-solid fa-eye"></i></span>
                            <span>000</span>
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img" style="background-image: url(<?= $config['base']['url'].'web/'?>img/PIIM1.jpg);"></div>
                    <div class="card-info">
                        <a href="" class="cardTextJs"> ipsum dolor sit amet consectetur adipisicing elit. In, sunt?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt? Lorem ipsum dolor sit
                            amet consectetur adipisicing elit. In, sunt? </a>
                    </div>
                    <div class="card-date">
                        <p>12.12.2023</p>
                        <p>
                            <span><i class="fa-solid fa-eye"></i></span>
                            <span>000</span>
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img" style="background-image: url(<?= $config['base']['url'].'web/'?>img/PIIM1.jpg);"></div>
                    <div class="card-info">
                        <a href="" class="cardTextJs">Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt? Lorem ipsum dolor sit
                            amet consectetur adipisicing elit. In, sunt? </a>
                    </div>
                    <div class="card-date">
                        <p>12.12.2023</p>
                        <p>
                            <span><i class="fa-solid fa-eye"></i></span>
                            <span>000</span>
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img" style="background-image: url(<?= $config['base']['url'].'web/'?>img/PIIM1.jpg);"></div>
                    <div class="card-info">
                        <a href="" class="cardTextJs"> ipsum dolor sit amet consectetur adipisicing elit. In, sunt?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt? Lorem ipsum dolor sit
                            amet consectetur adipisicing elit. In, sunt? </a>
                    </div>
                    <div class="card-date">
                        <p>12.12.2023</p>
                        <p>
                            <span><i class="fa-solid fa-eye"></i></span>
                            <span>000</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="pagination container">
                <ul>
                    <li class="page-item previous-page "><a href="#"><</a></li>
                    <li class="page-item current-page"><a href="#">1</a></li>
                    <li class="page-item current-page"><a href="#">2</a></li>
                    <li class="page-item current-page"><a href="#">3</a></li>
                    <li class="page-item current-page"><a href="#">4</a></li>
                    <li class="page-item dots"><a href="#">....</a></li>
                    <li class="page-item current-page"><a href="#" >10</a></li>
                    <li class="page-item next-page"><a href="#">></a></li>
                </ul>
            </div>
        </section>
    </main>
    <script src="<?=$config['base']['url'].'web/'?>js/pagination.js"></script>
<?php elseif(isset($_GET['id']) && $_GET['id'] == 2) :?>
    <?php headerBanner('Tadbirlar'); ?>
    <main>
        <section class="container-fluid newSection">
            <div class="card-content container">
                <div class="card">
                    <div class="card-img" style="background-image: url(<?= $config['base']['url'].'web/'?>img/PIIM1.jpg);"></div>
                    <div class="card-info">
                        <a href="" class="cardTextJs">Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt? Lorem ipsum dolor sit
                            amet consectetur adipisicing elit. In, sunt? </a>
                    </div>
                    <div class="card-date">
                        <p>12.12.2023</p>
                        <p>
                            <span><i class="fa-solid fa-eye"></i></span>
                            <span>000</span>
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img" style="background-image: url(<?= $config['base']['url'].'web/'?>img/PIIM1.jpg);"></div>
                    <div class="card-info">
                        <a href="" class="cardTextJs"> ipsum dolor sit amet consectetur adipisicing elit. In, sunt?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt? Lorem ipsum dolor sit
                            amet consectetur adipisicing elit. In, sunt? </a>
                    </div>
                    <div class="card-date">
                        <p>12.12.2023</p>
                        <p>
                            <span><i class="fa-solid fa-eye"></i></span>
                            <span>000</span>
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img" style="background-image: url(<?= $config['base']['url'].'web/'?>img/PIIM1.jpg);"></div>
                    <div class="card-info">
                        <a href="" class="cardTextJs">Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt? Lorem ipsum dolor sit
                            amet consectetur adipisicing elit. In, sunt? </a>
                    </div>
                    <div class="card-date">
                        <p>12.12.2023</p>
                        <p>
                            <span><i class="fa-solid fa-eye"></i></span>
                            <span>000</span>
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img" style="background-image: url(<?= $config['base']['url'].'web/'?>img/PIIM1.jpg);"></div>
                    <div class="card-info">
                        <a href="" class="cardTextJs"> ipsum dolor sit amet consectetur adipisicing elit. In, sunt?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt? Lorem ipsum dolor sit
                            amet consectetur adipisicing elit. In, sunt? </a>
                    </div>
                    <div class="card-date">
                        <p>12.12.2023</p>
                        <p>
                            <span><i class="fa-solid fa-eye"></i></span>
                            <span>000</span>
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img" style="background-image: url(<?= $config['base']['url'].'web/'?>img/PIIM1.jpg);"></div>
                    <div class="card-info">
                        <a href="" class="cardTextJs">Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt? Lorem ipsum dolor sit
                            amet consectetur adipisicing elit. In, sunt? </a>
                    </div>
                    <div class="card-date">
                        <p>12.12.2023</p>
                        <p>
                            <span><i class="fa-solid fa-eye"></i></span>
                            <span>000</span>
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img" style="background-image: url(<?= $config['base']['url'].'web/'?>img/PIIM1.jpg);"></div>
                    <div class="card-info">
                        <a href="" class="cardTextJs"> ipsum dolor sit amet consectetur adipisicing elit. In, sunt?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt? Lorem ipsum dolor sit
                            amet consectetur adipisicing elit. In, sunt? </a>
                    </div>
                    <div class="card-date">
                        <p>12.12.2023</p>
                        <p>
                            <span><i class="fa-solid fa-eye"></i></span>
                            <span>000</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="pagination container">
                <ul>
                    <li class="page-item previous-page "><a href="#"><</a></li>
                    <li class="page-item current-page"><a href="#">1</a></li>
                    <li class="page-item current-page"><a href="#">2</a></li>
                    <li class="page-item current-page"><a href="#">3</a></li>
                    <li class="page-item current-page"><a href="#">4</a></li>
                    <li class="page-item dots"><a href="#">....</a></li>
                    <li class="page-item current-page"><a href="#" >10</a></li>
                    <li class="page-item next-page"><a href="#">></a></li>
                </ul>
            </div>
        </section>
    </main>
    <script src="<?=$config['base']['url'].'web/'?>js/pagination.js"></script>
<?php elseif(isset($_GET['id']) && $_GET['id'] == 3) :?>
    <?php headerBanner("E'lonlar"); ?>
    <main>
        <section class="container-fluid newSection">
            <div class="card-content container">
                <div class="card">
                    <div class="card-img" style="background-image: url(<?= $config['base']['url'].'web/'?>img/PIIM1.jpg);"></div>
                    <div class="card-info">
                        <a href="" class="cardTextJs">Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt? Lorem ipsum dolor sit
                            amet consectetur adipisicing elit. In, sunt? </a>
                    </div>
                    <div class="card-date">
                        <p>12.12.2023</p>
                        <p>
                            <span><i class="fa-solid fa-eye"></i></span>
                            <span>000</span>
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img" style="background-image: url(<?= $config['base']['url'].'web/'?>img/PIIM1.jpg);"></div>
                    <div class="card-info">
                        <a href="" class="cardTextJs"> ipsum dolor sit amet consectetur adipisicing elit. In, sunt?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt? Lorem ipsum dolor sit
                            amet consectetur adipisicing elit. In, sunt? </a>
                    </div>
                    <div class="card-date">
                        <p>12.12.2023</p>
                        <p>
                            <span><i class="fa-solid fa-eye"></i></span>
                            <span>000</span>
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img" style="background-image: url(<?= $config['base']['url'].'web/'?>img/PIIM1.jpg);"></div>
                    <div class="card-info">
                        <a href="" class="cardTextJs">Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt? Lorem ipsum dolor sit
                            amet consectetur adipisicing elit. In, sunt? </a>
                    </div>
                    <div class="card-date">
                        <p>12.12.2023</p>
                        <p>
                            <span><i class="fa-solid fa-eye"></i></span>
                            <span>000</span>
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img" style="background-image: url(<?= $config['base']['url'].'web/'?>img/PIIM1.jpg);"></div>
                    <div class="card-info">
                        <a href="" class="cardTextJs"> ipsum dolor sit amet consectetur adipisicing elit. In, sunt?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt? Lorem ipsum dolor sit
                            amet consectetur adipisicing elit. In, sunt? </a>
                    </div>
                    <div class="card-date">
                        <p>12.12.2023</p>
                        <p>
                            <span><i class="fa-solid fa-eye"></i></span>
                            <span>000</span>
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img" style="background-image: url(<?= $config['base']['url'].'web/'?>img/PIIM1.jpg);"></div>
                    <div class="card-info">
                        <a href="" class="cardTextJs">Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt? Lorem ipsum dolor sit
                            amet consectetur adipisicing elit. In, sunt? </a>
                    </div>
                    <div class="card-date">
                        <p>12.12.2023</p>
                        <p>
                            <span><i class="fa-solid fa-eye"></i></span>
                            <span>000</span>
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img" style="background-image: url(<?= $config['base']['url'].'web/'?>img/PIIM1.jpg);"></div>
                    <div class="card-info">
                        <a href="" class="cardTextJs"> ipsum dolor sit amet consectetur adipisicing elit. In, sunt?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt? Lorem ipsum dolor sit
                            amet consectetur adipisicing elit. In, sunt? </a>
                    </div>
                    <div class="card-date">
                        <p>12.12.2023</p>
                        <p>
                            <span><i class="fa-solid fa-eye"></i></span>
                            <span>000</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="pagination container">
                <ul>
                    <li class="page-item previous-page "><a href="#"><</a></li>
                    <li class="page-item current-page"><a href="#">1</a></li>
                    <li class="page-item current-page"><a href="#">2</a></li>
                    <li class="page-item current-page"><a href="#">3</a></li>
                    <li class="page-item current-page"><a href="#">4</a></li>
                    <li class="page-item dots"><a href="#">....</a></li>
                    <li class="page-item current-page"><a href="#" >10</a></li>
                    <li class="page-item next-page"><a href="#">></a></li>
                </ul>
            </div>
        </section>
    </main>
    <script src="<?=$config['base']['url'].'web/'?>js/pagination.js"></script>
<?php elseif(isset($_GET['id']) && $_GET['id'] == 4) :?>
    <?php headerBanner("Fotolavhalar"); ?>
    <main>
        <section class="container-fluid newSection">
            <div class="card-content container">
                <div class="card">
                    <div class="card-img" style="background-image: url(<?= $config['base']['url'].'web/'?>img/PIIM1.jpg);"></div>
                    <div class="card-info">
                        <a href="" class="cardTextJs">Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt? Lorem ipsum dolor sit
                            amet consectetur adipisicing elit. In, sunt? </a>
                    </div>
                    <div class="card-date">
                        <p>12.12.2023</p>
                        <p>
                            <span><i class="fa-solid fa-eye"></i></span>
                            <span>000</span>
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img" style="background-image: url(<?= $config['base']['url'].'web/'?>img/PIIM1.jpg);"></div>
                    <div class="card-info">
                        <a href="" class="cardTextJs"> ipsum dolor sit amet consectetur adipisicing elit. In, sunt?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt? Lorem ipsum dolor sit
                            amet consectetur adipisicing elit. In, sunt? </a>
                    </div>
                    <div class="card-date">
                        <p>12.12.2023</p>
                        <p>
                            <span><i class="fa-solid fa-eye"></i></span>
                            <span>000</span>
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img" style="background-image: url(<?= $config['base']['url'].'web/'?>img/PIIM1.jpg);"></div>
                    <div class="card-info">
                        <a href="" class="cardTextJs">Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt? Lorem ipsum dolor sit
                            amet consectetur adipisicing elit. In, sunt? </a>
                    </div>
                    <div class="card-date">
                        <p>12.12.2023</p>
                        <p>
                            <span><i class="fa-solid fa-eye"></i></span>
                            <span>000</span>
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img" style="background-image: url(<?= $config['base']['url'].'web/'?>img/PIIM1.jpg);"></div>
                    <div class="card-info">
                        <a href="" class="cardTextJs"> ipsum dolor sit amet consectetur adipisicing elit. In, sunt?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt? Lorem ipsum dolor sit
                            amet consectetur adipisicing elit. In, sunt? </a>
                    </div>
                    <div class="card-date">
                        <p>12.12.2023</p>
                        <p>
                            <span><i class="fa-solid fa-eye"></i></span>
                            <span>000</span>
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img" style="background-image: url(<?= $config['base']['url'].'web/'?>img/PIIM1.jpg);"></div>
                    <div class="card-info">
                        <a href="" class="cardTextJs">Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt? Lorem ipsum dolor sit
                            amet consectetur adipisicing elit. In, sunt? </a>
                    </div>
                    <div class="card-date">
                        <p>12.12.2023</p>
                        <p>
                            <span><i class="fa-solid fa-eye"></i></span>
                            <span>000</span>
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img" style="background-image: url(<?= $config['base']['url'].'web/'?>img/PIIM1.jpg);"></div>
                    <div class="card-info">
                        <a href="" class="cardTextJs"> ipsum dolor sit amet consectetur adipisicing elit. In, sunt?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt? Lorem ipsum dolor sit
                            amet consectetur adipisicing elit. In, sunt? </a>
                    </div>
                    <div class="card-date">
                        <p>12.12.2023</p>
                        <p>
                            <span><i class="fa-solid fa-eye"></i></span>
                            <span>000</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="pagination container">
                <ul>
                    <li class="page-item previous-page "><a href="#"><</a></li>
                    <li class="page-item current-page"><a href="#">1</a></li>
                    <li class="page-item current-page"><a href="#">2</a></li>
                    <li class="page-item current-page"><a href="#">3</a></li>
                    <li class="page-item current-page"><a href="#">4</a></li>
                    <li class="page-item dots"><a href="#">....</a></li>
                    <li class="page-item current-page"><a href="#" >10</a></li>
                    <li class="page-item next-page"><a href="#">></a></li>
                </ul>
            </div>
        </section>
    </main>
    <script src="<?=$config['base']['url'].'web/'?>js/pagination.js"></script>
<?php elseif(isset($_GET['id']) && $_GET['id'] == 5) :?>
    <?php headerBanner("Videolavhalar"); ?>
    <main>
        <section class="container-fluid newSection">
            <div class="card-content container">
                <div class="card">
                    <div class="card-img" style="background-image: url(<?= $config['base']['url'].'web/'?>img/PIIM1.jpg);"></div>
                    <div class="card-info">
                        <a href="" class="cardTextJs">Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt? Lorem ipsum dolor sit
                            amet consectetur adipisicing elit. In, sunt? </a>
                    </div>
                    <div class="card-date">
                        <p>12.12.2023</p>
                        <p>
                            <span><i class="fa-solid fa-eye"></i></span>
                            <span>000</span>
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img" style="background-image: url(<?= $config['base']['url'].'web/'?>img/PIIM1.jpg);"></div>
                    <div class="card-info">
                        <a href="" class="cardTextJs"> ipsum dolor sit amet consectetur adipisicing elit. In, sunt?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt? Lorem ipsum dolor sit
                            amet consectetur adipisicing elit. In, sunt? </a>
                    </div>
                    <div class="card-date">
                        <p>12.12.2023</p>
                        <p>
                            <span><i class="fa-solid fa-eye"></i></span>
                            <span>000</span>
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img" style="background-image: url(<?= $config['base']['url'].'web/'?>img/PIIM1.jpg);"></div>
                    <div class="card-info">
                        <a href="" class="cardTextJs">Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt? Lorem ipsum dolor sit
                            amet consectetur adipisicing elit. In, sunt? </a>
                    </div>
                    <div class="card-date">
                        <p>12.12.2023</p>
                        <p>
                            <span><i class="fa-solid fa-eye"></i></span>
                            <span>000</span>
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img" style="background-image: url(<?= $config['base']['url'].'web/'?>img/PIIM1.jpg);"></div>
                    <div class="card-info">
                        <a href="" class="cardTextJs"> ipsum dolor sit amet consectetur adipisicing elit. In, sunt?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt? Lorem ipsum dolor sit
                            amet consectetur adipisicing elit. In, sunt? </a>
                    </div>
                    <div class="card-date">
                        <p>12.12.2023</p>
                        <p>
                            <span><i class="fa-solid fa-eye"></i></span>
                            <span>000</span>
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img" style="background-image: url(<?= $config['base']['url'].'web/'?>img/PIIM1.jpg);"></div>
                    <div class="card-info">
                        <a href="" class="cardTextJs">Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt? Lorem ipsum dolor sit
                            amet consectetur adipisicing elit. In, sunt? </a>
                    </div>
                    <div class="card-date">
                        <p>12.12.2023</p>
                        <p>
                            <span><i class="fa-solid fa-eye"></i></span>
                            <span>000</span>
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img" style="background-image: url(<?= $config['base']['url'].'web/'?>img/PIIM1.jpg);"></div>
                    <div class="card-info">
                        <a href="" class="cardTextJs"> ipsum dolor sit amet consectetur adipisicing elit. In, sunt?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt? Lorem ipsum dolor sit
                            amet consectetur adipisicing elit. In, sunt? </a>
                    </div>
                    <div class="card-date">
                        <p>12.12.2023</p>
                        <p>
                            <span><i class="fa-solid fa-eye"></i></span>
                            <span>000</span>
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img" style="background-image: url(<?= $config['base']['url'].'web/'?>img/PIIM1.jpg);"></div>
                    <div class="card-info">
                        <a href="" class="cardTextJs"> ipsum dolor sit amet consectetur adipisicing elit. In, sunt?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt? Lorem ipsum dolor sit
                            amet consectetur adipisicing elit. In, sunt? </a>
                    </div>
                    <div class="card-date">
                        <p>12.12.2023</p>
                        <p>
                            <span><i class="fa-solid fa-eye"></i></span>
                            <span>000</span>
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img" style="background-image: url(<?= $config['base']['url'].'web/'?>img/PIIM1.jpg);"></div>
                    <div class="card-info">
                        <a href="" class="cardTextJs"> ipsum dolor sit amet consectetur adipisicing elit. In, sunt?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. In, sunt? Lorem ipsum dolor sit
                            amet consectetur adipisicing elit. In, sunt? </a>
                    </div>
                    <div class="card-date">
                        <p>12.12.2023</p>
                        <p>
                            <span><i class="fa-solid fa-eye"></i></span>
                            <span>000</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="pagination container">
                <ul>
                    <li class="page-item previous-page "><a href="#"><</a></li>
                    <li class="page-item current-page"><a href="#">1</a></li>
                    <li class="page-item current-page"><a href="#">2</a></li>
                    <li class="page-item current-page"><a href="#">3</a></li>
                    <li class="page-item current-page"><a href="#">4</a></li>
                    <li class="page-item dots"><a href="#">....</a></li>
                    <li class="page-item current-page"><a href="#" >10</a></li>
                    <li class="page-item next-page"><a href="#">></a></li>
                </ul>
            </div>
        </section>
    </main>
    <script src="<?=$config['base']['url'].'web/'?>js/pagination.js"></script>

<?php endif;?>
