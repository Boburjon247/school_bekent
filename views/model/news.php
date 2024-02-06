<?php
global $view, $config;
?>
<?php foreach (GetAllRow('admin_maktab_yangiliklar', 'id', $_GET['id']) as $key => $val) : ?>
     <?php
     $type = '';
     switch ($val['status']) {
          case 'Yangiliklar':
               $type = '1';
               break;
          case 'Tadbirlar':
               $type = '2';
               break;
          case "E'lonlar":
               $type = '3';
               break;
          case 'Fotolavhalar':
               $type = '4';
               break;
          case 'VideoLavlahalar':
               $type = '5';
               break;
     }

     ?>
     <section class="header-banner container-fluid">

          <div class="container">
               <div class="top_title_header">
                    <span>
                         <?php
                         if ($type == '1') {
                              echo $lang['yangiliklar'];
                         } else if ($type == '2') {
                              echo $lang['tadbirlar'];
                         } else if ($type == '3') {
                              echo $lang['elonlar'];
                         } else if ($type == '4') {
                              echo $lang['fotolavhalar'];
                         } else if ($type == '5') {
                              echo $lang['videolavhalar'];
                         }

                         ?>
                    </span>
               </div>
               <div class="navbar_control">
                    <a href="<?= url ?>"><?= $lang['asosiy'] ?></a>
                    <span></span>
                    <a href="<?= $config['base']['url'] ?>MatbuotXizmati/<?= $type ?>">
                         <?php
                         if ($type == '1') {
                              echo $lang['yangiliklar'];
                         } else if ($type == '2') {
                              echo $lang['tadbirlar'];
                         } else if ($type == '3') {
                              echo $lang['elonlar'];
                         } else if ($type == '4') {
                              echo $lang['fotolavhalar'];
                         } else if ($type == '5') {
                              echo $lang['videolavhalar'];
                         }

                         ?>
                    </a>
                    <span></span>
                    <a href="<?= $config['base']['url'] ?>news/<?= $val['id'] ?>"><?= $val['title_' . $_SESSION['lang']] ?></a>
               </div>
          </div>
     </section>
<?php endforeach; ?>


<main>
     <section class="container-fluid newSection">
          <div class="container">
               <div class="row">
                    <div class="col-xl-8" style="display: block;">
                         <?php foreach (GetAllRow('admin_maktab_yangiliklar', 'id', $_GET['id']) as $key => $val) : ?>
                              <?php
                              $imgarray = [];
                              $imgarray = explode(' ', $val['img']);
                              ?>
                              <div class="new-contener">
                                   <p class="news-title">
                                        <?= $val['title_' . $_SESSION['lang']] ?>
                                   </p>
                                   <div class="news-date">
                                        <p>
                                             <i class="fa-solid fa-calendar-days"></i>
                                             <span><?= $val['date'] ?></span>
                                        </p>
                                        <p>
                                             <i class="fa-solid fa-eye"></i>
                                             <span>000</span>
                                        </p>
                                   </div>
                                   <div class="news-img">
                                        <?php if ($val['link'] == null) : ?>
                                             <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                                  <div class="carousel-indicators">
                                                       <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                       <?php
                                                       for ($i = 1; $i < count($imgarray); $i++) {
                                                            echo '<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="' . $i . '" aria-label="Slide' . ($i + 1) . '"></button>';
                                                       }

                                                       ?>
                                                  </div>
                                                  <div class="carousel-inner">
                                                       <?php
                                                       for ($i = 0; $i < count($imgarray); $i++) {
                                                            $s = '';
                                                            if ($i == 0) {
                                                                 $s = 'active';
                                                            }
                                                            echo  '<div class="carousel-item ' . $s . '">';
                                                            echo '<img src=' . $config['base']['url'] . 'web/img/news/' . $imgarray[$i] . ' class="d-block w-100" alt="...">';
                                                            echo '</div>';
                                                       }
                                                       ?>
                                                  </div>
                                                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                                       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                       <span class="visually-hidden">Previous</span>
                                                  </button>
                                                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                                       <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                       <span class="visually-hidden">Next</span>
                                                  </button>
                                             </div>
                                        <?php else : ?>
                                             <iframe src="<?= $val['link'] ?>">
                                             </iframe>
                                        <?php endif; ?>
                                   </div>
                                   <div class="news-text">
                                        <p><?= $val['text_' . $_SESSION['lang']] ?></p>
                                   </div>
                              </div>
                         <?php endforeach; ?>

                    </div>
                    <div class="col-xl-4" style="display: block;">
                         <div class="new-contener">
                              <p class="news-title">
                                   <?= $lang['songi_yan'] ?>
                              </p>
                              <ul class="naw_news">
                                   <?php foreach (GetAllRowLimit('admin_maktab_yangiliklar', 'status', 'Yangiliklar', '15') as $key => $val) : ?>
                                        <?php
                                        $imgarray = [];
                                        $imgarray = explode(' ', $val['img']);
                                        $newImg = $imgarray[0];
                                        ?>
                                        <li>
                                             <a href="<?= $config['base']['url'] ?>news/<?= $val['id'] ?>">
                                                  <div class="img">
                                                       <img src="<?= $config['base']['url'] . 'web/img/news/' . $newImg ?>" alt="">
                                                  </div>
                                                  <div class="text">
                                                       <span><?= textFilter($val['title_' . $_SESSION['lang']], '25') ?></span>
                                                       <span>
                                                            <i class="fa-solid fa-calendar-days"></i>
                                                            <?= $val['date'] ?>
                                                       </span>
                                                  </div>
                                             </a>
                                        </li>
                                   <?php endforeach; ?>
                              </ul>

                         </div>
                    </div>
               </div>
          </div>
     </section>
</main>
<script src="<?= $config['base']['url'] . 'web/' ?>js/news.js"></script>