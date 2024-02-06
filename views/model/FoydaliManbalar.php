<?php
global $view, $config;
include $config['base']['path'] . 'views/model/header-banner.php';
?>
<?php if (isset($_GET['id']) && $_GET['id'] == 1) : ?>
    <?php headerBanner($lang['xalqaro_tanlovlar']); ?>
    <main>
        <section class="container-fluid">
            <div class="container xolqaro-tanlovlar">
                <div class="row">
                    <?php foreach (GetAllRow('admin_maktab_foydalimanbalar', "status", 'Tanlovlar') as $key => $val) : ?>
                        <div class="col">
                            <div class="card_img_togarak" style="background-image: url(<?= $config['base']['url'] . 'web/img/qollanmalar/img/' . $val['img'] ?>"></div>
                            <div class="card_title">
                                <p><?= textFilter($val['title_' . $_SESSION['lang']], 120) ?></p>
                            </div>
                            <div class="card_control">
                                <button>
                                    <a href="<?= $config['base']['url'] ?>newss/<?= $val['id'] ?>">batavsil</a>
                                </button>
                                <span><?= $val['date'] ?></span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </main>
    <script src="<?= $config['base']['url'] . 'web/' ?>js/pagination.js"></script>

<?php elseif (isset($_GET['id']) && $_GET['id'] == 2) : ?>
    <?php headerBanner($lang['togaraklar']); ?>
    <main>
        <section class="container-fluid">
            <div class="container xolqaro-tanlovlar">
                <div class="row">
                    <?php foreach (GetAllRow('admin_maktab_foydalimanbalar', "status", "Togaraklar") as $key => $val) : ?>
                        <div class="col">
                            <div class="card_img_togarak" style="background-image: url(<?= $config['base']['url'] . 'web/img/qollanmalar/img/' . $val['img'] ?>"></div>
                            <div class="card_title">
                                <p><?= $val['title_' . $_SESSION['lang']] ?></p>
                            </div>
                            <div class="card_control">
                                <button>
                                    <a href="<?= $config['base']['url'] ?>newss/<?= $val['id'] ?>">batavsil</a>
                                </button>
                                <span><?= $val['date'] ?></span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </main>
<?php elseif (isset($_GET['id']) && $_GET['id'] == 3) : ?>
    <?php headerBanner($lang['oquv_qollanmalar']); ?>
    <main>
        <section class="container-fluid">
            <div class="container xolqaro-tanlovlar">
                <div class="row">
                    <?php foreach (GetAllRow('admin_maktab_foydalimanbalar', "status", "Qo\'llanmalar") as $key => $val) : ?>
                        <div class="col">
                            <div class="card_img_togarak" style="background-image: url(<?= $config['base']['url'] . 'web/img/qollanmalar/img/' . $val['img'] ?>"></div>
                            <div class="card_title card_fan">
                                <p><?= $val['title_' . $_SESSION['lang']] ?></p>
                            </div>
                            <div class="card_control">
                                <button>
                                    <a href="<?= $config['base']['url'] . 'web/img/qollanmalar/file/' . $val['qollanma'] ?>" download>Yuklan olish</a>
                                </button>
                                <span><?= $val['date'] ?></span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </main>
<?php endif; ?>