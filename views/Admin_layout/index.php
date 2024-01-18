<?php
global $config;
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <title>Admin</title>
     <!-- plugins:css -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
     <link rel="stylesheet" href="<?= $config['base']['url'] . 'web/' ?>assets/css/main.css">
     <!-- plugins:css -->
     <link rel="stylesheet" href="<?= $config['base']['url'] . 'web/' ?>assets/vendors/mdi/css/materialdesignicons.min.css">
     <link rel="stylesheet" href="<?= $config['base']['url'] . 'web/' ?>assets/vendors/css/vendor.bundle.base.css">
     <!-- endinject -->
     <!-- Plugin css for this page -->
     <link rel="stylesheet" href="<?= $config['base']['url'] . 'web/' ?>assets/vendors/jvectormap/jquery-jvectormap.css">
     <link rel="stylesheet" href="<?= $config['base']['url'] . 'web/' ?>assets/vendors/flag-icon-css/css/flag-icon.min.css">
     <link rel="stylesheet" href="<?= $config['base']['url'] . 'web/' ?>assets/vendors/owl-carousel-2/owl.carousel.min.css">
     <link rel="stylesheet" href="<?= $config['base']['url'] . 'web/' ?>assets/vendors/owl-carousel-2/owl.theme.default.min.css">
     <link rel="stylesheet" href="<?= $config['base']['url'] . 'web/' ?>assets/css/style.css">
     <!-- End layout styles -->
     <!-- jquery -->
     <link rel="stylesheet" href="<?= $config['base']['url'] . 'web/' ?>assets/jquery/Jquery/jquery-ui.min.css">
     <link rel="stylesheet" href="<?= $config['base']['url'] . 'web/' ?>assets/jquery/Jquery/jquery-ui.theme.min.css">
</head>

<body>
     <div class="container-scroller">
          <!-- partial:partials/_sidebar.html -->
          <nav class="sidebar sidebar-offcanvas" id="sidebar">
               <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
                    <a class="sidebar-brand brand-logo" href="index.html" style="
              text-decoration: none;
              color: #fff;
              letter-spacing: 5px;
            ">ADMIN</a>

                    <a style="
              text-decoration: none;
              color: #fff;
              letter-spacing: 5px;
              " class="sidebar-brand brand-logo-mini" href="index.html">A</a>
               </div>
               <ul class="nav">
                    <li class="nav-item profile">
                         <div class="profile-desc">
                              <div class="profile-pic">
                                   <?php foreach (GetAll('admin', '2', 'asc') as $key => $admin) : ?>
                                        <div class="count-indicator">
                                             <img class="img-xs rounded-circle " src="<?php
                                                                                          if ($admin['img'] === '') {
                                                                                               echo $config['base']['url'] . 'web/img/const/defalut.jpg';
                                                                                          } else {
                                                                                               echo $config['base']['url'] . 'web/img/Admin/' . $admin['img'];
                                                                                          }
                                                                                          ?>">
                                             <span class="count bg-success"></span>
                                        </div>
                                        <div class="profile-name">
                                             <h5 class="mb-0 font-weight-normal"><?= $admin['ism'] ?></h5>
                                             <span>Assalomu alekum</span>
                                        </div>
                                   <?php endforeach; ?>

                              </div>
                              <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                                   <a href="#" class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                             <div class="preview-icon bg-dark rounded-circle">
                                                  <i class="mdi mdi-settings text-primary"></i>
                                             </div>
                                        </div>
                                        <div class="preview-item-content">
                                             <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                                        </div>
                                   </a>
                                   <div class="dropdown-divider"></div>
                                   <a href="#" class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                             <div class="preview-icon bg-dark rounded-circle">
                                                  <i class="mdi mdi-onepassword  text-info"></i>
                                             </div>
                                        </div>
                                        <div class="preview-item-content">
                                             <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                                        </div>
                                   </a>
                                   <div class="dropdown-divider"></div>
                                   <a href="#" class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                             <div class="preview-icon bg-dark rounded-circle">
                                                  <i class="mdi mdi-calendar-today text-success"></i>
                                             </div>
                                        </div>
                                        <div class="preview-item-content">
                                             <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                                        </div>
                                   </a>
                              </div>
                         </div>
                    </li>
                    <li class="nav-item nav-category">
                         <span class="nav-link">Navigation</span>
                    </li>
                    <li class="nav-item menu-items">
                         <a class="nav-link" href="<?= url_admin ?>index">
                              <span class="menu-icon">
                                   <i class="mdi mdi-speedometer"></i>
                              </span>
                              <span class="menu-title">Boshqaruv paneli</span>
                         </a>
                    </li>
                    <li class="nav-item menu-items">
                         <a class="nav-link" href="<?= url_admin ?>boshsahifa">
                              <span class="menu-icon">
                                   <i class="mdi mdi-playlist-play"></i>
                              </span>
                              <span class="menu-title">Bosh sahifa</span>
                         </a>
                    </li>
                    <li class="nav-item menu-items">
                         <a class="nav-link" href="<?= url_admin ?>bizhaqimizda">
                              <span class="menu-icon">
                                   <i class="mdi mdi-table-large"></i>
                              </span>
                              <span class="menu-title">Biz haqimizda</span>
                         </a>
                    </li>
                    <li class="nav-item menu-items">
                         <a class="nav-link" href="<?= url_admin ?>matbuot">
                              <span class="menu-icon">
                                   <i class="mdi mdi-chart-bar"></i>
                              </span>
                              <span class="menu-title">Matbuot xizmati</span>
                         </a>
                    </li>
                    <li class="nav-item menu-items">
                         <a class="nav-link" href="<?= url_admin ?>foydalimanbalar">
                              <span class="menu-icon">
                                   <i class="mdi mdi-contacts"></i>
                              </span>
                              <span class="menu-title">Foydali manbalar</span>
                         </a>
                    </li>
                    <li class="nav-item menu-items">
                         <a class="nav-link" href="<?= url_admin ?>profil">
                              <span class="menu-icon">
                                   <i class="mdi mdi-contacts"></i>
                              </span>
                              <span class="menu-title">Profil</span>
                         </a>
                    </li>
               </ul>
          </nav>
          <!-- partial -->
          <div class="container-fluid page-body-wrapper">
               <!-- partial:partials/_navbar.html -->
               <nav class="navbar p-0 fixed-top d-flex flex-row">
                    <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                         <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
                    </div>
                    <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                         <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                              <span class="mdi mdi-menu"></span>
                         </button>
                         <ul class="navbar-nav w-100">
                              <li class="nav-item w-100">
                                   <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                                        <input type="text" class="form-control" placeholder="Search products">
                                   </form>
                              </li>
                         </ul>
                         <ul class="navbar-nav navbar-nav-right">
                              <li class="nav-item nav-settings d-none d-lg-block">
                                   <a class="nav-link" href="#">
                                        <i class="mdi mdi-view-grid"></i>
                                   </a>
                              </li>
                              <li class="nav-item dropdown">
                                   <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                                        <?php foreach (GetAll('admin', '2', 'asc') as $key => $admin) : ?>
                                             <div class="navbar-profile">
                                                  <img class="img-xs rounded-circle " src="<?php
                                                                                               if ($admin['img'] === '') {
                                                                                                    echo $config['base']['url'] . 'web/img/const/defalut.jpg';
                                                                                               } else {
                                                                                                    echo $config['base']['url'] . 'web/img/Admin/' . $admin['img'];
                                                                                               }
                                                                                               ?>">
                                                  <p class="mb-0 d-none d-sm-block navbar-profile-name"><?= $admin['ism'] ?></p>
                                                  <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                                             </div>
                                        <?php endforeach ?>
                                   </a>
                                   <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                                        <h6 class="p-3 mb-0">Profile</h6>
                                        <div class="dropdown-divider"></div>
                                        <a href="<?= url_admin ?>profil" class="dropdown-item preview-item">
                                             <div class="preview-thumbnail">
                                                  <div class="preview-icon bg-dark rounded-circle">
                                                       <i class="mdi mdi-settings text-success"></i>
                                                  </div>
                                             </div>
                                             <div class="preview-item-content">
                                                  <p class="preview-subject mb-1">Settings</p>
                                             </div>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="<?=url?>" class="dropdown-item preview-item">
                                             <div class="preview-thumbnail">
                                                  <div class="preview-icon bg-dark rounded-circle">
                                                       <i class="mdi mdi-logout text-danger"></i>
                                                  </div>
                                             </div>
                                             <div class="preview-item-content">
                                                  <p class="preview-subject mb-1">log out</p>
                                             </div>
                                        </a>
                                        <p class="p-3 mb-0 text-center">Advanced settings</p>
                                   </div>
                              </li>
                         </ul>
                         <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                              <span class="mdi mdi-format-line-spacing"></span>
                         </button>
                    </div>
               </nav>
               <!-- partial -->
               <?php include  $config['base']['path'] . 'views/Admin_page/' . $view . '.php'; ?>
               <!-- main-panel ends -->
          </div>
          <!-- page-body-wrapper ends -->
     </div>
     <!-- endinject -->
     <!-- Plugin js for this page -->
     <script src="<?= $config['base']['url'] . 'web/' ?>assets/vendors/js/vendor.bundle.base.js"></script>
     <!-- endinject -->
     <!-- Plugin js for this page -->
     <script src="<?= $config['base']['url'] . 'web/' ?>assets/vendors/chart.js/Chart.min.js"></script>
     <script src="<?= $config['base']['url'] . 'web/' ?>assets/vendors/progressbar.js/progressbar.min.js"></script>
     <script src="<?= $config['base']['url'] . 'web/' ?>assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
     <script src="<?= $config['base']['url'] . 'web/' ?>assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
     <script src="<?= $config['base']['url'] . 'web/' ?>assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>

     <!-- End plugin js for this page -->
     <!-- inject:js -->
     <script src="<?= $config['base']['url'] . 'web/' ?>assets/js/off-canvas.js"></script>
     <script src="<?= $config['base']['url'] . 'web/' ?>assets/js/hoverable-collapse.js"></script>
     <script src="<?= $config['base']['url'] . 'web/' ?>assets/js/misc.js"></script>
     <script src="<?= $config['base']['url'] . 'web/' ?>assets/js/settings.js"></script>
     <script src="<?= $config['base']['url'] . 'web/' ?>assets/js/todolist.js"></script>
     <!-- endinject -->
     <!-- Custom js for this page -->
     <script src="<?= $config['base']['url'] . 'web/' ?>assets/js/dashboard.js"></script>
     <script src="<?= $config['base']['url'] . 'web/' ?>assets/js/chart.js"></script>
     <!-- jquery -->
     <script src="<?= $config['base']['url'] . 'web/' ?>assets/jquery/Jquery/jquery-3.6.4.min.js"></script>
     <script src="<?= $config['base']['url'] . 'web/' ?>assets/jquery/Jquery/jquery-ui.min.js"></script>
     <script src="<?= $config['base']['url'] . 'web/' ?>assets/jquery/Jquery.js"></script>

     <!-- End custom js for this page -->
</body>

</html>