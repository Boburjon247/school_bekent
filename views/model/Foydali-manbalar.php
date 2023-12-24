<?php
    global $view,$config;
    include $config['base']['path'].'views/model/header-banner.php';
?>
<?php if(isset($_GET['id']) && $_GET['id'] == 1) :?>
    <?php headerBanner('Xolqaro Tanlovlar'); ?>
    <main>
        <section class="container-fluid">
            <div class="container xolqaro-tanlovlar">
                <div class="row">
                    <div class="col">
                        <div class="card_img_togarak" style="background-image: url(<?= $config['base']['url'].'web/'?>img/PIIM4.jpg);"></div>
                        <div class="card_title">
                            <p>title</p>
                            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut voluptas numquam adipisci?</span>
                        </div>
                        <div class="card_control">
                            <button>batavsil</button>
                            <span>10.10.2023</span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card_img_togarak" style="background-image: url(<?= $config['base']['url'].'web/'?>img/PIIM4.jpg);"></div>
                        <div class="card_title">
                            <p>title</p>
                            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut voluptas numquam adipisci?</span>
                        </div>
                        <div class="card_control">
                            <button>batavsil</button>
                            <span>10.10.2023</span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card_img_togarak" style="background-image: url(<?= $config['base']['url'].'web/'?>img/PIIM4.jpg);"></div>
                        <div class="card_title">
                            <p>title</p>
                            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut voluptas numquam adipisci?</span>
                        </div>
                        <div class="card_control">
                            <button>batavsil</button>
                            <span>10.10.2023</span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card_img_togarak" style="background-image: url(<?= $config['base']['url'].'web/'?>img/PIIM4.jpg);"></div>
                        <div class="card_title">
                            <p>title</p>
                            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut voluptas numquam adipisci?</span>
                        </div>
                        <div class="card_control">
                            <button>batavsil</button>
                            <span>10.10.2023</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="<?= $config['base']['url'].'web/'?>js/pagination.js"></script>

<?php elseif(isset($_GET['id']) && $_GET['id'] == 2) :?>
    <h1>togaraklar</h1>
<?php elseif(isset($_GET['id']) && $_GET['id'] == 3) :?>
    <?php headerBanner("O'quv qo'llanmalar"); ?>
    <main>
        <section class="container-fluid">
            <div class="container xolqaro-tanlovlar">
                <div class="row literature">
                    <button>Hammasi</button>
                    <button>Darsliklar</button>
                    <button>Adabiyotlar</button>
                    <button></button>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card_img_togarak" style="background-image: url(<?= $config['base']['url'].'web/'?>img/PIIM4.jpg);"></div>
                        <div class="card_title">
                            <p>title</p>
                        </div>
                        <div class="card_control">
                            <button>Yuklash olish</button>
                            <span>10.10.2023</span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card_img_togarak" style="background-image: url(<?= $config['base']['url'].'web/'?>img/PIIM4.jpg);"></div>
                        <div class="card_title">
                            <p>title</p>
                        </div>
                        <div class="card_control">
                            <button>Yuklash olish</button>
                            <span>10.10.2023</span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card_img_togarak" style="background-image: url(<?= $config['base']['url'].'web/'?>img/PIIM4.jpg);"></div>
                        <div class="card_title">
                            <p>title</p>
                        </div>
                        <div class="card_control">
                            <button>Yuklash olish</button>
                            <span>10.10.2023</span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card_img_togarak" style="background-image: url(<?= $config['base']['url'].'web/'?>img/PIIM4.jpg);"></div>
                        <div class="card_title">
                            <p>title</p>
                        </div>
                        <div class="card_control">
                            <button>Yuklash olish</button>
                            <span>10.10.2023</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php endif;?>

