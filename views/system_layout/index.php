<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>System</title>
    <link rel="stylesheet" href="<?=$config['base']['url'].'web/'?>css/system.css">
    <!-- cnd js/ -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- jquery -->
    <link rel="stylesheet" href="<?=$config['base']['url'].'web/'?>js/Jquery/owlCarusel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=$config['base']['url'].'web/'?>js/Jquery/owlCarusel/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?=$config['base']['url'].'web/'?>js/Jquery/jquery-ui.min.css">
    <link rel="stylesheet" href="<?=$config['base']['url'].'web/'?>js/Jquery/jquery-ui.theme.min.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--font awesome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="shortcut icon" href="<?=$config['base']['url'].'web/'?>img/logo-icon-new.svg" type="image/x-icon">
    <!--    google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body>

    <section class="container-fluid system">
        <div class="row">
            <!--leftWindow-->
            <div class="col-2 leftWindow">
                <div class="top_tilte">
                    <p>
                        <span><i class="fa-brands fa-centos"></i></span>
                        <span>Tizim<b>.</b></span>
                    </p>
                </div>
                <div class="nav">
                    <ul class="nav_content">
                        <li class="active">
                            <a href="<?= url_system?>" class="firstA">
                                <span><i class="fa-solid fa-house-chimney"></i></span>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?=url_system?>?view=hodimlar" class="firstA">
                                <span><i class="fa-solid fa-users"></i></span>
                                <span>Hodimlar</span>
                            </a>
                        </li>
                        <li>
                            <div id="accordion">
                                <h3>
                                    <span class="accordionIcon"><i class="fa-solid fa-bars-staggered"></i></span>
                                    <span>O’quv yili </span>
                                    <span class="iconDown active"><i class="fa-solid fa-chevron-down"></i></span>
                                </h3>
                                <div>
                                    <a href="<?=url_system?>?view=o'quv-yili">O’quv yili yaratish</a>
                                    <a href="<?=url_system?>?view=yildan-yilga-kochirish">Yildan yilga ko’chirish</a>
                                </div>
                                <h3>
                                    <span class="accordionIcon"><i class="fa-solid fa-book"></i></span>
                                    <span>Fanlar</span>
                                    <span class="iconDown"><i class="fa-solid fa-chevron-down"></i></span>
                                </h3>
                                <div>
                                    <a href="<?=url_system?>?view=fan-yaratish">Fanlarni yaratish</a>
                                    <a href="<?=url_system?>?view=fan-briktrish">Fanlarni biriktirish</a>
                                </div>
                                <h3>
                                    <span class="accordionIcon"><i class=" fa-solid fa-child-reaching"></i></span>
                                    <span>O’quvchilar</span>
                                    <span class="iconDown"><i class="fa-solid fa-chevron-down"></i></span>
                                </h3>
                                <div>
                                    <a href="<?=url_system?>?view=o'quvchilar">O'quvchilar</a>
                                    <a href="<?=url_system?>?view=sinifga-birlashtrish">Sinfga biriktirish</a>
                                </div>
                                <h3>
                                    <span class="accordionIcon"><i class="fa-solid fa-chart-line"></i></span>
                                    <span>Statistika</span>
                                    <span class="iconDown"><i class="fa-solid fa-chevron-down"></i></span>
                                </h3>
                                <div>
                                    <a href="?view=barcha-sinflar">Barcha Sinflar</a>
                                    <a href="<?=url_system?>?view=Barcha-o'quvchilar">Barcha o’quvchilar</a>
                                    <a href="<?=url_system?>?view=Barcha-hodimlar">Barcha hodimlar</a>
                                </div>
                                <h3>
                                    <span class="accordionIcon"><i class="fa-solid fa-gear"></i></span>
                                    <span>Tizim</span>
                                    <span class="iconDown"><i class="fa-solid fa-chevron-down"></i></span>
                                </h3>
                                <div>
                                    <a href="<?=url_system?>?view=profil">profil</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--rightWindow-->
            <div class="col-10 rightWindow">
                <header>
                    <div class="headerLeft">
                        <div class="item">
                            <i class="fa-solid fa-bars-staggered"></i>
                        </div>
                        <div class="item">
                            <i class="fa-regular fa-message"></i>
                        </div>
                        <div class="item">
                            <i class="fa-solid fa-gear"></i>
                        </div>
                        <div class="item">
                            <a href="<?= url?>" style="color: #212529;"><i class="fa-solid fa-person-walking-dashed-line-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class=" headerRight">
                        <p class="userName">Boburjon</p>
                        <div class="img_user">
                            <img src="<?=$config['base']['url'].'web/'?>img/Dinner.jpg">
                        </div>
                    </div>
                </header>
                <body_sys>
                    <?php
                        include $config['base']['path'].'views/system_page/'.$view.'.php';
                    ?>
                </body_sys>
            </div>
        </div>
    </section>


    <script src="<?=$config['base']['url'].'web/'?>js/system/system.js"></script>
    <!-- <script src="../js/systemJQ.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="<?=$config['base']['url'].'web/'?>js/Jquery/jquery-3.6.4.min.js"></script>
    <script src="<?=$config['base']['url'].'web/'?>js/Jquery/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>