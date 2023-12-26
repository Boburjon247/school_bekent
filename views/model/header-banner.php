<?php global $view, $config; ?>

<?php function headerBanner($name1)
{ ?>
    <section class="header-banner container-fluid">
        <div class="container">
            <div class="top_title_header">
                <span><?= $name1 ?></span>
            </div>
            <div class="navbar_control">
                <a href="index.php">Asosiy</a>
                <span></span>
                <a href="#"><?= $name1 ?></a>
            </div>
        </div>
    </section>


<?php } ?>