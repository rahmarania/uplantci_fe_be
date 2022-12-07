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
                    <!-- <img class="loading-logo mr-10" src="<?= base_url() ?>/uplant-main/assets/img/favicon.png" alt=""> -->
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
        <!-- <div class="page__title align-items-center theme-bg-primary-h1 pt-140 pb-140"> -->
        <div class="banner-area pt-200 pb-180" data-background="<?= base_url() ?>/uplant-main/assets/img/bg/kontak.png">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page__title-content text-center">
                            <div class="page_title__bread-crumb">
                                <nav aria-label="breadcrumb">
                                    <!-- <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                                    <ul>
                                       <li>
                                          <a href="index.html"><span>Home</span></a>
                                       </li>
                                       <li class="trail-item trail-end">
                                          <span>Contact</span>
                                       </li>
                                    </ul>
                                 </nav>  -->
                                </nav>
                            </div>
                            <!-- <h3 class="breadcrumb-title breadcrumb-title-sd mt-30">Contact Us</h3> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- page__title -end -->

        <!-- tp-contact-area-start -->
        <div class="tp-contact-area pt-115">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="tp-section-wrap">
                            <span><i class="flaticon-grass"></i></span>
                            <h3 class="tp-section-title">Jika Anda Memiliki Pertanyaan, Jangan Ragu Kontak dengan kami </h3>
                        </div>
                    </div>
                </div>
                <div class="row mt-40">
                    <div class="col-lg-4">
                        <div class="row custom-mar-20">
                            <div class="col-lg-12 col-md-4 col-sm-6">
                                <div class="tp-contact-info mb-40">
                                    <div class="tp-contact-info-icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="tp-contact-info-text">
                                        <h4 class="tp-contact-info-title mb-15">Alamat</h4>
                                        <p><a href="#">Jl. Kumbang No.14, RT.02/RW.06, Babakan, Kecamatan Bogor Tengah <br>Kota Bogor, Jawa Barat 16128</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-4 col-sm-6">
                                <div class="tp-contact-info mb-40">
                                    <div class="tp-contact-info-icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="tp-contact-info-text">
                                        <h4 class="tp-contact-info-title mb-15">Phone</h4>
                                        <p><a href="tel:333888200">0251-8376845</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-4 col-sm-6">
                                <div class="tp-contact-info mb-40">
                                    <div class="tp-contact-info-icon">
                                        <i class="fas fa-envelope-open"></i>
                                    </div>
                                    <div class="tp-contact-info-text">
                                        <h4 class="tp-contact-info-title mb-15">Email</h4>
                                        <p><a href="mailto:sv@apps.ipb.ac.id">sv@apps.ipb.ac.id</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="tp-contact-form">
                            <div class="row custom-mar-20">
                                <div class="col-md-6 custom-pad-20">
                                    <div class="tp-contact-form-field mb-20">
                                        <input type="text" placeholder="Full name">
                                    </div>
                                </div>
                                <div class="col-md-6 custom-pad-20">
                                    <div class="tp-contact-form-field mb-20">
                                        <input type="email" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="col-md-6 custom-pad-20">
                                    <div class="tp-contact-form-field mb-20">
                                        <input type="text" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-md-6 custom-pad-20">
                                    <div class="tp-contact-form-field select-field-arrow mb-20">
                                        <select>
                                            <option value="">Choose Subject</option>
                                            <option value="">Organic Food</option>
                                            <option value="">Cow Meat</option>
                                            <option value="">Cow Milk</option>
                                            <option value="">Cow Feed</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12 custom-pad-20">
                                    <div class="tp-contact-form-field mb-20">
                                        <textarea placeholder="Your Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 custom-pad-20">
                                    <div class="tp-contact-form-field">
                                        <button type="submit" class="read-btn sumit-btn"><i class="flaticon-enter"></i> Kirim</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- tp-contact-area-end -->

        <!-- tp-map-area-start -->
        <div class="tp-map-area pt-115 pb-110">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tp-contact-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.4597854429935!2d106.80367541358342!3d-6.5896308952344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c432ae61047f%3A0x44d2d88c81140e91!2sKAMPUS%20IPB%20DIPLOMA%20cilibende!5e0!3m2!1sid!2sid!4v1664381318737!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- tp-map-area-end -->

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
                                <li><a href="about.html">Tentang Kami</a></li>
                                <li><a href="team.html">Komunitas</a></li>
                                <li><a href="news-sidebar.html">Artikel</a></li>
                                <li><a href="contact.html">Kontak</a></li>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="Login.html">Login/Signup</a></li>
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