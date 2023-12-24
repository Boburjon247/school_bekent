<?php
    global $config;
    include $config['base']['path'].'views/model/header-banner.php'
?>
<?php if(isset($_GET['id']) && $_GET['id'] == 1 ): ?>
    <!-- header-banner -->
    <?php headerBanner('Biz haqimizda');?>
    <!-- main -->
    <main>
        <section class="container-fluid about">
            <div class="container aboutContainer">
                <h2>Farg'ona shaxar Prezident maktabi</h2>
                <span>
               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero dolores asperiores, beatae voluptate nemo mollitia qui quo ipsam hic ut, nisi sapiente pariatur eaque dolorem voluptatum veritatis assumenda eius maiores.
               Vero, aliquid corrupti reiciendis illum saepe, molestiae, nobis pariatur esse dignissimos nam veniam natus nostrum obcaecati consequuntur fugiat! Quod voluptate non repellat at fugit quisquam minima fuga cumque ut
            </span>
                <span>
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nam distinctio maxime labore odit provident dolorum quam laboriosam tenetur consequatur quia quis nulla neque, veritatis officiis a possimus voluptatibus autem.
               Nihil at quaerat fugiat error odit distinctio quisquam doloremque ipsum corrupti molestiae harum nostrum ipsa illo modi, necessitatibus qui temporibus, pariatur accusamus? Illo sed possimus repudiandae deserunt quae commodi enim.
               Possimus suscipit consequuntur tenetur dicta magni sequi deleniti harum temporibus facilis accusamus nisi pariatur vel reprehenderit, corrupti assumenda expedita id a debitis, placeat obcaecati. Explicabo, odit? Velit architecto accusantium quidem!
               Rem voluptates maiores numquam corporis nemo perspiciatis optio dicta, animi minus earum modi laudantium dolorum temporibus molestias cumque doloribus ut consequatur. Non quidem necessitatibus quos dignissimos numquam aliquam ut fugiat!
               Reprehenderit tenetur corporis nulla numquam officiis ad quisquam assumenda eum consectetur sequi, nemo pariatur magni provident cumque excepturi minima nesciunt veritatis, sapiente deserunt perspiciatis expedita temporibus iste laborum? Necessitatibus, quisquam?
            </span>
                <span>
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae deserunt totam id maiores quos aperiam quas ad culpa corrupti possimus odit ipsum fuga ipsa saepe rerum consequatur reiciendis, architecto laboriosam.
               Expedita fugiat voluptatum quo quas exercitationem praesentium tempore ab accusantium ipsum temporibus illo autem hic, tempora, quibusdam sequi. Excepturi accusantium sunt ut quo saepe obcaecati possimus id autem, quam nostrum.
               Pariatur doloremque iure obcaecati quaerat modi debitis nesciunt expedita aperiam, et enim tempore qui! Ullam, illo. Saepe ducimus qui deleniti dolores voluptatibus? Ad rerum aliquam, sint quidem sapiente nam nobis?
               Commodi blanditiis quos at molestias architecto rerum quia error soluta qui aspernatur nesciunt autem adipisci aut, nihil veritatis dolor unde tempora. Ipsa placeat delectus vero sed et fugit error iusto.
               Facere veritatis amet quod possimus corrupti, rem recusandae! Esse similique minima aut, aperiam reiciendis, iusto quidem architecto assumenda, fugit itaque eaque vitae? Temporibus dicta possimus laudantium aliquam praesentium, culpa ipsam.
               Nisi soluta quis iure, praesentium qui neque possimus aliquid illo, fuga suscipit explicabo minima voluptatem rem ducimus asperiores unde facere officiis, totam sunt quas quam adipisci! Quod itaque explicabo asperiores!
            </span>
            </div>
        </section>
    </main>
<?php elseif(isset($_GET['id']) && $_GET['id'] == 2 ): ?>
    <!-- header-banner -->
    <?php headerBanner('Prezident maktablari');?>
    <!-- main -->
    <main>
        <section class="container-fluid schools">
            <div class="container containerSchools"></div>
        </section>
    </main>
    <script>
        let cardArray = [
            {
                icon: 'logo1.png',
                title: 'Navoiy shahridagi Prezident maktabi',
                link: 'https://portal.piima.uz/schools/presidental-schools/29'
            },
            {
                icon: 'logo1.png',
                title: 'Buhoro shahridagi Prezident maktabi',
                link: 'https://portal.piima.uz/schools/presidental-schools/28'
            },
            {
                icon: 'logo1.png',
                title: 'Termiz shahridagi Prezident maktabi',
                link: 'https://portal.piima.uz/schools/presidental-schools/27'
            },
            {
                icon: 'logo1.png',
                title: 'Qarshi shahridagi Prezident maktabi',
                link: 'https://portal.piima.uz/schools/presidental-schools/26'
            },
            {
                icon: 'logo1.png',
                title: 'Samarqand shahridagi Prezident maktabi',
                link: 'https://portal.piima.uz/schools/presidental-schools/25'
            },
            {
                icon: 'logo1.png',
                title: 'Jizzah shahridagi Prezident maktabi',
                link: 'https://portal.piima.uz/schools/presidental-schools/24'
            },
            {
                icon: 'logo1.png',
                title: 'Guliston shahridagi Prezident maktabi',
                link: 'https://portal.piima.uz/schools/presidental-schools/23'
            },
            {
                icon: 'logo1.png',
                title: 'Nurafshon shahridagi Prezident maktabi',
                link: 'https://portal.piima.uz/schools/presidental-schools/22'
            },
            {
                icon: 'logo1.png',
                title: 'Xiva shahridagi Prezident maktabi',
                link: 'https://portal.piima.uz/schools/presidental-schools/4'
            },
            {
                icon: 'logo1.png',
                title: 'Nukus shahridagi Prezident maktabi',
                link: 'https://portal.piima.uz/schools/presidental-schools/3'
            },
            {
                icon: 'logo1.png',
                title: 'Andijon shahridagi Prezident maktabi',
                link: 'https://portal.piima.uz/schools/presidental-schools/20'
            },
            {
                icon: 'logo1.png',
                title: 'Namangan shahridagi Prezident maktabi',
                link: 'https://portal.piima.uz/schools/presidental-schools/2'
            },
            {
                icon: 'logo1.png',
                title: "Farg'ona shahridagi Prezident maktabi",
                link: 'https://portal.piima.uz/schools/presidental-schools/21'
            },
            {
                icon: 'logo1.png',
                title: 'Toshkent shahridagi Prezident maktabi',
                link: 'https://portal.piima.uz/schools/presidental-schools/1'
            },
        ];

        const containerSchools = document.querySelector('.containerSchools')
        for (let index = 0; index < cardArray.length; index++) {
            containerSchools.insertAdjacentHTML(
                'afterbegin',
                `<div class="schoolsCard">
                  <div class="icon">
                     <img src="<?=$config['base']['url'].'web/'?>img/${cardArray[index].icon}" alt="">
                  </div>
                  <div class="title">
                     <p>${cardArray[index].title}</p>
                     <a target="_blank" href="${cardArray[index].link}">Batafsil</a>
                  </div>
               </div>`
            )
        }


    </script>
<?php elseif(isset($_GET['id']) && $_GET['id'] == 3 ): ?>
    <!-- header-banner -->
    <?php headerBanner('Rahbariyat');?>
    <!-- main -->
    <main>
        <section class="container-fluid leadership">
            <div class="container leadershipContainer">
                <div class="row">
                    <!-- item -->
                    <div class="leaderCard">
                        <div class="img" style="background-image: url(<?=$config['base']['url'].'web/'?>img/user.jpg);"></div>
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
                        <div class="img" style="background-image: url(<?=$config['base']['url'].'web/'?>img/user.jpg);"></div>
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
    <script src="<?= $config['base']['url'].'web/'?>js/leadership.js"></script>
<?php elseif(isset($_GET['id']) && $_GET['id'] == 4 ): ?>
    <!-- header-banner -->
    <?php headerBanner('Xodimlar');?>
    <!-- main -->
    <main>
        <section class="container-fluid newSection">
            <div class="card-content container">
                <div class="card">
                    <div class="card-img card_img_employees" style="background-image: url(<?=$config['base']['url'].'web/'?>img/Dinner.jpg);">
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
                    <div class="card-img card_img_employees" style="background-image: url(<?=$config['base']['url'].'web/'?>img/imgNot.jpg);">
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
                    <div class="card-img card_img_employees" style="background-image: url(<?=$config['base']['url'].'web/'?>img/imgNot.jpg);">
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
                    <div class="card-img card_img_employees" style="background-image: url(<?=$config['base']['url'].'web/'?>img/imgNot.jpg);">
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
                    <div class="card-img card_img_employees" style="background-image: url(<?=$config['base']['url'].'web/'?>img/imgNot.jpg);">
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
                <li class="page-item previous-page "><a href="#"><</a>
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
    <script src="<?= $config['base']['url'].'web/'?>js/pagination.js"></script>
<?php endif;?>