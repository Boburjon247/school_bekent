<?php
global $view, $config;
include $config['base']['path'] . 'views/model/header-banner.php';
?>
<?php if (isset($_GET['id']) && $_GET['id'] == 1) : ?>
    <?php headerBanner($lang['yangiliklar']); ?>
    <main>
        <section class="container-fluid newSection">
            <div class="card-content container">
                <?php foreach (GetAllRow('admin_maktab_yangiliklar', "status", 'Yangiliklar') as $key => $val) : ?>
                    <?php
                    $imgarray = [];
                    $imgarray = explode(' ', $val['img']);
                    $newImg = $imgarray[0];
                    ?>
                    <div class="card">
                        <div class="card-img" style="background-image: url(<?= $config['base']['url'] . 'web/img/news/' . $newImg ?>);"></div>
                        <div class="card-info">
                            <a href="<?= $config['base']['url'] ?>news/<?= $val['id'] ?>" class="cardTextJs">
                                <?=
                                textFilter($val['title_' . $_SESSION['lang']], 80)
                                ?>
                            </a>
                        </div>
                        <div class="card-date">
                            <p>
                                <i class="fa-solid fa-calendar-days"></i>
                                <?= $val['date'] ?>
                            </p>
                            <p>
                                <span><i class="fa-solid fa-eye"></i></span>
                                <span>000</span>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="pagination container">
                <ul>
                    <li class="page-item previous-page"><a href="#"><</a></li>
                    <li class="page-item current-page"><a href="#">1</a></li>
                    <li class="page-item current-page"><a href="#">2</a></li>
                    <li class="page-item current-page"><a href="#">3</a></li>
                    <li class="page-item current-page"><a href="#">4</a></li>
                    <li class="page-item dots"><a href="#">....</a></li>
                    <li class="page-item current-page"><a href="#">10</a></li>
                    <li class="page-item next-page"><a href="#">></a></li>
                </ul>
            </div>
        </section>
    </main>
    <script src="<?= $config['base']['url'] . 'web/' ?>js/pagination.js"></script>
<?php elseif (isset($_GET['id']) && $_GET['id'] == 2) : ?>
    <?php headerBanner($lang['tadbirlar']); ?>
    <main>
        <section class="container-fluid newSection">
            <div class="card-content container">
                <?php foreach (GetAllRow('admin_maktab_yangiliklar', "status", 'Tadbirlar') as $key => $val) : ?>
                    <?php
                    $imgarray = [];
                    $imgarray = explode(' ', $val['img']);
                    $newImg = $imgarray[0];
                    ?>
                    <div class="card">
                        <div class="card-img" style="background-image: url(<?= $config['base']['url'] . 'web/img/news/' . $newImg ?>);"></div>
                        <div class="card-info">
                            <a href="<?= $config['base']['url'] ?>news/<?= $val['id'] ?>" class="cardTextJs">
                                <?=
                                textFilter($val['title_' . $_SESSION['lang']], 80)
                                ?>
                            </a>
                        </div>
                        <div class="card-date">
                            <p>
                                <i class="fa-solid fa-calendar-days"></i>
                                <?= $val['date'] ?>
                            </p>
                            <p>
                                <span><i class="fa-solid fa-eye"></i></span>
                                <span>000</span>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="pagination container">
                <ul>
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
                </ul>
            </div>
        </section>
    </main>
    <script src="<?= $config['base']['url'] . 'web/' ?>js/pagination.js"></script>
<?php elseif (isset($_GET['id']) && $_GET['id'] == 3) : ?>
    <?php headerBanner($lang['elonlar']); ?>
    <main>
        <section class="container-fluid newSection">
            <div class="card-content container">
                <?php foreach (GetAllRow('admin_maktab_yangiliklar', "status", "E\'lonlar") as $key => $val) : ?>
                    <?php
                    $imgarray = [];
                    $imgarray = explode(' ', $val['img']);
                    $newImg = $imgarray[0];
                    ?>
                    <div class="card">
                        <div class="card-img" style="background-image: url(<?= $config['base']['url'] . 'web/img/news/' . $newImg ?>);"></div>
                        <div class="card-info">
                            <a href="<?= $config['base']['url'] ?>news/<?= $val['id'] ?>" class="cardTextJs">
                                <?=
                                textFilter($val['title_' . $_SESSION['lang']], 80)
                                ?>
                            </a>
                        </div>
                        <div class="card-date">
                            <p>
                                <i class="fa-solid fa-calendar-days"></i>
                                <?= $val['date'] ?>
                            </p>
                            <p>
                                <span><i class="fa-solid fa-eye"></i></span>
                                <span>000</span>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="pagination container">
                <ul>
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
                </ul>
            </div>
        </section>
    </main>
    <script src="<?= $config['base']['url'] . 'web/' ?>js/pagination.js"></script>
<?php elseif (isset($_GET['id']) && $_GET['id'] == 4) : ?>
    <?php headerBanner($lang['fotolavhalar']); ?>
    <main>
        <section class="container-fluid newSection">
            <div class="card-content container">
                <?php foreach (GetAllRow('admin_maktab_yangiliklar', "status", 'FotoLavhalar') as $key => $val) : ?>
                    <?php
                    $imgarray = [];
                    $imgarray = explode(' ', $val['img']);
                    $newImg = $imgarray[0];
                    ?>
                    <div class="card">
                        <div class="card-img" style="background-image: url(<?= $config['base']['url'] . 'web/img/news/' . $newImg ?>);"></div>
                        <div class="card-info">
                            <a href="<?= $config['base']['url'] ?>news/<?= $val['id'] ?>" class="cardTextJs">
                                <?=
                                textFilter($val['title_' . $_SESSION['lang']], 80)
                                ?>
                            </a>
                        </div>
                        <div class="card-date">
                            <p>
                                <i class="fa-solid fa-calendar-days"></i>
                                <?= $val['date'] ?>
                            </p>
                            <p>
                                <span><i class="fa-solid fa-eye"></i></span>
                                <span>000</span>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="pagination container">
                <ul>
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
                </ul>
            </div>
        </section>
    </main>
    <script src="<?= $config['base']['url'] . 'web/' ?>js/pagination.js"></script>
<?php elseif (isset($_GET['id']) && $_GET['id'] == 5) : ?>
    <?php headerBanner($lang['videolavhalar']); ?>
    <main>
        <section class="container-fluid newSection">
            <div class="card-content container">
                <?php foreach (GetAllRow('admin_maktab_yangiliklar', "status", 'VideoLavlahalar') as $key => $val) : ?>
                    <?php
                    $imgarray = [];
                    $imgarray = explode(' ', $val['img']);
                    $newImg = $imgarray[0];
                    ?>
                    <div class="card">
                        <div class="card-img" style="background-image: url(<?= $config['base']['url'] . 'web/img/news/' . $newImg ?>);"></div>
                        <div class="card-info">
                            <a href="<?= $config['base']['url'] ?>news/<?= $val['id'] ?>" class="cardTextJs">
                                <?=
                                textFilter($val['title_' . $_SESSION['lang']], 80)
                                ?>
                            </a>
                        </div>
                        <div class="card-date">
                            <p>
                                <i class="fa-solid fa-calendar-days"></i>
                                <?= $val['date'] ?>
                            </p>
                            <p>
                                <span><i class="fa-solid fa-eye"></i></span>
                                <span>000</span>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="pagination container">
                <ul>
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
                </ul>
            </div>
        </section>
    </main>
    <script src="<?= $config['base']['url'] . 'web/' ?>js/pagination.js"></script>

<?php endif; ?>