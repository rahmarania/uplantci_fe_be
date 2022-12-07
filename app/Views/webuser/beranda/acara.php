<!doctype html>
<html class="no-js" lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Hijaukan Indonesia dengan UPlant</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Place favicon.ico in the root directory -->
   <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>/uplant-main/assets/img/logo.png" width="150%" height="150%">
   <!-- CSS here -->
   <link rel="stylesheet" href="<?= base_url() ?>/uplant-main/assets/css/preloader.css">
   <link rel="stylesheet" href="<?= base_url() ?>/uplant-main/assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="<?= base_url() ?>/uplant-main/assets/css/meanmenu.css">
   <link rel="stylesheet" href="<?= base_url() ?>/uplant-main/assets/css/animate.min.css">
   <link rel="stylesheet" href="<?= base_url() ?>/uplant-main/assets/css/owl.carousel.min.css">
   <link rel="stylesheet" href="<?= base_url() ?>/uplant-main/assets/css/swiper-bundle.css">
   <link rel="stylesheet" href="<?= base_url() ?>/uplant-main/assets/css/backToTop.css">
   <link rel="stylesheet" href="<?= base_url() ?>/uplant-main/assets/css/magnific-popup.css">
   <link rel="stylesheet" href="<?= base_url() ?>/uplant-main/assets/css/nice-select.css">
   <link rel="stylesheet" href="<?= base_url() ?>/uplant-main/assets/flaticon/flaticon.css">
   <link rel="stylesheet" href="<?= base_url() ?>/uplant-main/assets/css/fontAwesome5Pro.css">
   <link rel="stylesheet" href="<?= base_url() ?>/uplant-main/assets/css/default.css">
   <link rel="stylesheet" href="<?= base_url() ?>/uplant-main/assets/css/style.css">
</head>

<body>
   <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->

   <!-- Add your site or application content here -->

   <!-- pre loader area start -->
   <div id="loading">
      <div id="loading-center">
         <div id="loading-center-absolute">
            <div class="loading-icon text-center d-sm-flex align-items-center justify-content-center">
               <!-- <img class="loading-logo mr-10" src="<?= base_url() ?>/uplant-main/assets/img/logo2.png" alt=""> -->
               <img src="<?= base_url() ?>/uplant-main/assets/img/logo2.png" alt="">
            </div>
         </div>
      </div>
   </div>
   <!-- pre loader area end -->

   <!-- back to top start -->
   <div class="progress-wrap">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
   </div>
   <!-- back to top end -->

   <!-- header-start -->
   <header>
      <div class="header__area header-area-white">
         <div class="header-white-area theme-bg-secondary-h1" id="header-sticky">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-xl-2 col-lg-3 col-md-8 col-8">
                     <div class="logo">
                        <a href="index.html"><img src="<?= base_url() ?>/uplant-main/assets/img/logo2.png" width="150%" height="150%" alt=""></a>
                     </div>
                  </div>
                  <div class="col-xl-10 col-lg-9 col-md-4 col-4 d-flex align-items-center justify-content-end">
                     <div class="main-menu-h1 main-menu main-menu-white text-center">
                        <nav id="mobile-menu">
                           <ul>
                              <li><a href="<?= site_url('beranda/home') ?>">Home</a></li>
                              <li><a href="<?= site_url('beranda/about') ?>">Tentang Kami</a></li>
                              <li><a href="<?= site_url('auth/index') ?>">Komunitas</a></li>
                              <li><a href="<?= site_url('beranda/acara') ?>">Acara</a></li>
                              <li><a href="<?= site_url('artikeluser') ?>">Artikel</a>
                              </li>
                           </ul>
                        </nav>
                     </div>
                     <div class="side-menu-icon d-lg-none text-end">
                        <a href="javascript:void(0)" class="info-toggle-btn f-right sidebar-toggle-btn"><i class="fal fa-bars"></i></a>
                     </div>
                     <div class="header-cta">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>

   <!-- sidebar area start -->
   <div class="sidebar__area">
      <div class="sidebar__wrapper">
         <div class="sidebar__close">
            <button class="sidebar__close-btn" id="sidebar__close-btn">
               <i class="fal fa-times"></i>
            </button>
         </div>
         <div class="sidebar__content">
            <div class="sidebar__logo mb-40">
               <a href="index.html">
                  <img src="<?= base_url() ?>/uplant-main/assets/img/logo2.png" alt="logo">
               </a>
            </div>
            <div class="mobile-menu fix"></div>
            <div class="sidebar__text d-none d-lg-block">
               <p>Tambah pengetahuanmu di bidang tanaman. Dengan UPlant, Anda memiliki langkah awal untuk menghijaukan Bumi Pertiwi Indonesia.</p>
            </div>
            <div class="sidebar__img d-none d-lg-block mb-20">
               <div class="row gx-2">
                  <div class="col-4">
                     <div class="sidebar__single-img w-img mb-10">
                        <a class="image-popups" href="#">
                           <img src="<?= base_url() ?>/uplant-main/assets/img/blog/blog4.png" alt="">
                        </a>
                     </div>
                  </div>
                  <div class="col-4">
                     <div class="sidebar__single-img w-img mb-10">
                        <a class="image-popups" href="#">
                           <img src="<?= base_url() ?>/uplant-main/assets/img/blog/news-thum-2.png" alt="">
                        </a>
                     </div>
                  </div>
                  <div class="col-4">
                     <div class="sidebar__single-img w-img mb-10">
                        <a class="image-popups" href="">
                           <img src="<?= base_url() ?>/uplant-main/assets/img/blog/news-thum-3.png" alt="">
                        </a>
                     </div>
                  </div>
                  <div class="col-4">
                     <div class="sidebar__single-img w-img mb-10">
                        <a class="image-popups" href="">
                           <img alt="">
                        </a>
                     </div>
                  </div>
                  <div class="col-4">
                     <div class="sidebar__single-img w-img mb-10">
                        <a class="image-popups" href="">
                           <img alt="">
                        </a>
                     </div>
                  </div>
                  <div class="col-4">
                     <div class="sidebar__single-img w-img mb-10">
                        <a class="image-popups" href="">
                           <img alt="">
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="sidebar__map d-none d-lg-block mb-15">
            </div>
            <div class="sidebar__contact mt-30 mb-20">
               <h4>Contact Info</h4>

               <ul>
                  <li class="d-flex align-items-center">
                     <div class="sidebar__contact-icon mr-15">
                        <i class="fal fa-map-marker-alt"></i>
                     </div>
                     <div class="sidebar__contact-text">
                        <a target="_blank" href="https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873">Jl. Kumbang No.14, RT.02/RW.06, Babakan, Kecamatan Bogor Tengah
                           Kota Bogor, Jawa Barat 16128</a>
                     </div>
                  </li>
                  <li class="d-flex align-items-center">
                     <div class="sidebar__contact-icon mr-15">
                        <i class="far fa-phone"></i>
                     </div>
                     <div class="sidebar__contact-text">
                        <a href="tel:+012-345-6789">0251-8376845</a>
                     </div>
                  </li>
                  <li class="d-flex align-items-center">
                     <div class="sidebar__contact-icon mr-15">
                        <i class="fal fa-envelope"></i>
                     </div>
                     <div class="sidebar__contact-text">
                        <a href="mailto:support@gmail.com">sv@apps.ipb.ac.id</a>
                     </div>
                  </li>
               </ul>
            </div>
            <div class="sidebar__social">
               <ul>
                  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fab fa-youtube"></i></a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <!-- sidebar area end -->
   <div class="body-overlay"></div>
   <!-- sidebar area end -->

   <main>
      <!-- page__title -start -->
      <div class="banner-area pt-200 pb-180" data-background="<?= base_url() ?>/uplant-main/assets/img/bg/acara.png">
         <!-- <div class="page__title align-items-center theme-bg-primary-h1 pt-140 pb-140">-->
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <div class="page__title-content text-center">
                     <div class="page_title__bread-crumb">
                        <nav aria-label="breadcrumb">
                           <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                              <!-- <ul>
                                       <li>
                                          <a href="index.html"><span >Home</span></a>
                                       </li>
                                       <li class="trail-item trail-end">
                                          <span>Acara</span>
                                       </li>
                                    </ul> -->
                           </nav>
                        </nav>
                     </div>
                     <h3 class="breadcrumb-title breadcrumb-title-sd mt-30"> </h3>
                  </div>
               </div>
            </div>
         </div>
         <!--</div>-->
      </div>
      <!-- page__title -end -->

      <!-- gallery-area-start -->
      <div class="gallery-area pt-120 pb-90">
         <div class="container">
            <div class="row">
               <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                  <div class="gallery-item mb-30">
                     <img src="<?= base_url() ?>/uplant-main/assets/img/gallery/1.jpeg" alt="" class="img-fluid">
                     <div class="galleryimg-overlay">
                        <a href="<?= base_url() ?>/uplant-main/assets/img/gallery/1.jpeg" class="image-popups"><i class="fal fa-camera"></i></a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                  <div class="gallery-item mb-30">
                     <img src="<?= base_url() ?>/uplant-main/assets/img/gallery/2.jpeg" alt="" class="img-fluid">
                     <div class="galleryimg-overlay">
                        <a href="<?= base_url() ?>/uplant-main/assets/img/gallery/2.jpeg" class="image-popups"><i class="fal fa-camera"></i></a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                  <div class="gallery-item mb-30">
                     <img src="<?= base_url() ?>/uplant-main/assets/img/gallery/3.jpeg" alt="" class="img-fluid">
                     <div class="galleryimg-overlay">
                        <a href="<?= base_url() ?>/uplant-main/assets/img/gallery/3.jpeg" class="image-popups"><i class="fal fa-camera"></i></a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                  <div class="gallery-item mb-30">
                     <img src="<?= base_url() ?>/uplant-main/assets/img/gallery/4.jpeg" alt="" class="img-fluid">
                     <div class="galleryimg-overlay">
                        <a href="<?= base_url() ?>/uplant-main/assets/img/gallery/4.jpeg" class="image-popups"><i class="fal fa-camera"></i></a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                  <div class="gallery-item mb-30">
                     <img src="<?= base_url() ?>/uplant-main/assets/img/gallery/5.png" alt="" class="img-fluid">
                     <div class="galleryimg-overlay">
                        <a href="<?= base_url() ?>/uplant-main/assets/img/gallery/gallery-5.jpg" class="image-popups"><i class="fal fa-camera"></i></a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                  <div class="gallery-item mb-30">
                     <img src="<?= base_url() ?>/uplant-main/assets/img/gallery/6.png" alt="" class="img-fluid">
                     <div class="galleryimg-overlay">
                        <a href="<?= base_url() ?>/uplant-main/assets/img/gallery/gallery-6.jpg" class="image-popups"><i class="fal fa-camera"></i></a>
                     </div>
                  </div>
               </div>

            </div>
         </div>
      </div>
      <!-- gallery-area-end -->
   </main>

   <!-- footer -->
   <footer>
      <div class="footer-top footer-top-2 pt-80 pb-40">
         <div class="container">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-xl-6 col-lg-3 col-md-4 col-12">
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-4 col-lg-4 col-md-4">
                  <div class="footer-widget footer-col-1 mb-40">
                     <h5 class="footer-title mb-35">Tentang Kami</h5>
                     <p>Tambah pengetahuanmu di bidang tanaman. Dengan UPlant, Anda memiliki langkah awal untuk menghijaukan Bumi Pertiwi Indonesia.</p>
                     <div class="footer-social-icon mt-35">
                        <h4 class="social-icon-title">Sosial Media</h4>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-behance"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                  <div class="footer-widget footer-col-5 mb-40">
                     <h5 class="footer-title-h1 footer-title mb-30 footer-sm-title">Halaman</h5>
                     <ul class="footer-menu-1 footer-menu footer-menu-2 footer-menu-c">
                        <li><a href="<?= site_url('beranda/about') ?>">Tentang Kami</a></li>
                        <li><a href="<?= site_url('auth/index') ?>">Komunitas</a></li>
                        <li><a href="<?= site_url('artikeluser') ?>">Artikel</a></li>
                        <li><a href="<?= site_url('beranda/acara') ?>">Kontak</a></li>
                        <li><a href="<?= site_url('beranda/acara') ?>">Acara</a></li>
                        <li><a href="<?= site_url('beranda/home') ?>">Home</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <!-- footer -->

   <!-- JS here -->
   <script src="<?= base_url() ?>/uplant-main/assets/js/vendor/jquery-3.6.0.min.js"></script>
   <script src="<?= base_url() ?>/uplant-main/assets/js/vendor/waypoints.min.js"></script>
   <script src="<?= base_url() ?>/uplant-main/assets/js/bootstrap.bundle.min.js"></script>
   <script src="<?= base_url() ?>/uplant-main/assets/js/meanmenu.js"></script>
   <script src="<?= base_url() ?>/uplant-main/assets/js/swiper-bundle.min.js"></script>
   <script src="<?= base_url() ?>/uplant-main/assets/js/owl.carousel.min.js"></script>
   <script src="<?= base_url() ?>/uplant-main/assets/js/magnific-popup.min.js"></script>
   <script src="<?= base_url() ?>/uplant-main/assets/js/parallax.min.js"></script>
   <script src="<?= base_url() ?>/uplant-main/assets/js/backToTop.js"></script>
   <script src="<?= base_url() ?>/uplant-main/assets/js/nice-select.min.js"></script>
   <script src="<?= base_url() ?>/uplant-main/assets/js/counterup.min.js"></script>
   <script src="<?= base_url() ?>/uplant-main/assets/js/ajax-form.js"></script>
   <script src="<?= base_url() ?>/uplant-main/assets/js/wow.min.js"></script>
   <script src="<?= base_url() ?>/uplant-main/assets/js/isotope.pkgd.min.js"></script>
   <script src="<?= base_url() ?>/uplant-main/assets/js/imagesloaded.pkgd.min.js"></script>
   <script src="<?= base_url() ?>/uplant-main/assets/js/jquery.appear.js"></script>
   <script src="<?= base_url() ?>/uplant-main/assets/js/jquery.knob.js"></script>
   <script src="<?= base_url() ?>/uplant-main/assets/js/main.js"></script>
</body>

</html>