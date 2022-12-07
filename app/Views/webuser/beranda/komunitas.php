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
                              <li><a href="<?= site_url('beranda/index') ?>">Home</a></li>
                              <li><a href="<?= site_url('beranda/aboutLog') ?>">Tentang Kami</a></li>
                              <li><a href="<?= site_url('beranda/komunitas') ?>">Komunitas</a></li>
                              <li><a href="<?= site_url('beranda/acaraLog') ?>">Acara</a></li>
                              <li><a href="<?= site_url('artikelLog') ?>">Artikel</a>
                              </li>
                              <li><a href="<?= site_url('beranda/kontak') ?>">Kontak</a></li>
                              <a href="<?= site_url('auth/logoutUser') ?>"><button class="btn">Logout</button></a>
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
            <div class="banner-area pt-200 pb-180" data-background="<?= base_url() ?>/uplant-main/assets/img/bg/komunitas.png">
            <div class="container">
                  <div class="row">
                     <div class="col-xl-12">
                        <div class="page__title-content text-center">
                            <h3 class="breadcrumb-title breadcrumb-title-sd mt-30"></h3>
                        </div>
                     </div>
                  </div>
            </div> 
         </div>
         <!-- page__title -end -->

         <!-- team-area-start -->
         <h3 class="tp-section-title" style="text-align:center; margin-top:60px; margin-bottom:-90px;"> Ahli Tanaman </h3>
         <div class="team-area pt-120 pb-90">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-4 col-md-6">
                     <div class="single_team mb-30">
                        <div class="team_thumb">
                           <a href="#"><img src="<?= base_url() ?>/uplant-main/assets/img/team/p4.png" alt=""></a>
                        </div>
                        <div class="member-info member-info-2 mt-20">
                           <span class="member-designation member-designation-tp">Mahasiswa Fakultas Pertanian</span>
                           <h5 class="member_name member_name-tp"><a href="team-details.html">Rahma Fairuz</a></h5>
                           <div class="member_social member_social-tp mt-20">
                              <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                              <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                              <a href="#" class="behance"><i class="fab fa-linkedin"></i></a>
                              <a href="#" class="youtube"><i class="fab fa-youtube"></i></a>
                          </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6">
                     <div class="single_team mb-30">
                        <div class="team_thumb">
                           <a href="#"><img src="<?= base_url() ?>/uplant-main/assets/img/team/p1.png" alt=""></a>
                        </div>
                        <div class="member-info member-info-2 mt-20">
                           <span class="member-designation member-designation-tp">Plant Specialist</span>
                           <h5 class="member_name member_name-tp"><a href="team-details.html">Annisa Amanda </a></h5>
                           <div class="member_social member_social-tp mt-20">
                              <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                              <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                              <a href="#" class="behance"><i class="fab fa-linkedin"></i></a>
                              <a href="#" class="youtube"><i class="fab fa-youtube"></i></a>
                          </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6">
                     <div class="single_team mb-30">
                        <div class="team_thumb">
                           <a href="#"><img src="<?= base_url() ?>/uplant-main/assets/img/team/p3.png" alt=""></a>
                        </div>
                        <div class="member-info member-info-2 mt-20">
                           <span class="member-designation member-designation-tp">Plant Review</span>
                           <h5 class="member_name member_name-tp"><a href="team-details.html">Maulida Riski</a></h5>
                           <div class="member_social member_social-tp mt-20">
                              <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                              <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                              <a href="#" class="behance"><i class="fab fa-linkedin"></i></a>
                              <a href="#" class="youtube"><i class="fab fa-youtube"></i></a>
                          </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6">
                     <div class="single_team mb-30">
                        <div class="team_thumb">
                           <a href="#"><img src="<?= base_url() ?>/uplant-main/assets/img/team/p2.png" alt=""></a>
                        </div>
                        <div class="member-info member-info-2 mt-20">
                           <span class="member-designation member-designation-tp">Plant Protector</span>
                           <h5 class="member_name member_name-tp"><a href="team-details.html">Laila Fitri</a></h5>
                           <div class="member_social member_social-tp mt-20">
                           <a href="#"><i class="fab fa-facebook-f"></i></a>
                           <a href="#"><i class="fab fa-twitter"></i></a>
                           <a href="#"><i class="fab fa-youtube"></i></a>
                           <a href="#"><i class="fab fa-linkedin"></i></a>
                          </div>
                        </div>
                     </div>
                  </div>
                  
               </div>
            </div>
         </div>
         <!-- team-area-end -->

         <!-- tp-testimonila-tabs-start -->
         <div class="tp-testimonila-tabs  pt-110 pb-60 h3-gray-bg">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="tp-section-wrap">
                        <span class="tpsub-title"></span>
                        <h3 class="tp-section-title">Tips yang mungkin bermanfaat</h3>
                     </div>
                  </div>
               </div>
               <div class="testimonial__slider-2">
                  <div class="row justify-content-center">
                     <div class="col-xxl-12">
                        <div class="testimoinial__slider-text swiper-container">
                           <div class="swiper-wrapper">
                              <div class="testimonial__content testimonial__content-2 swiper-slide d-md-flex align-items-center">
                                 <img src="<?= base_url() ?>/uplant-main/assets/img/team/p1.png" alt="">
                                 <p>Kita dapat menggunakan pupuk alami, seperti pupuk kandang, pupuk kompos, pupuk organik, atau pupuk daur ulang agar tanamanmu dapat tumbuh subur </p>
                              </div>
                              <div class="testimonial__content testimonial__content-2 swiper-slide d-md-flex align-items-center">
                                 <img src="<?= base_url() ?>/uplant-main/assets/img/team/p2.png" alt="">
                                 <p>Gunakan pot atau wadah yang cukup besar. Tanaman membutuhkan ruang yang cukup untuk tumbuh, jangan membiarkan akar tanaman terlalu sesak. Apabila Anda menanam pohon langsung di lahan, jangan lupa memberi ruang yang mencukupi untuk setiap tanaman. </p>
                              </div>
                              <div class="testimonial__content testimonial__content-2 swiper-slide d-md-flex align-items-center">
                                 <img src="<?= base_url() ?>/uplant-main/assets/img/team/p3.png" alt="">
                                 <p>Menaruh tanaman di dalam ruangan akan mengurangi risiko kulit kering, pilek, sakit tenggorokan, dan batuk kering. Penelitian lain menyebut bahwa kelembaban absolut yang lebih tinggi bisa menurunkan penyebaran virus flu serta membantu mendukung imunitas tubuh. </p>
                              </div>
                              <div class="testimonial__content testimonial__content-2 swiper-slide d-md-flex align-items-center">
                                 <img src="<?= base_url() ?>/uplant-main/assets/img/team/p4.png" alt="">
                                 <p>Memangkas tanaman hias dapat menjaga kesehatannya. Perhatikan kesehatan daun-daun tanaman hias setiap harinya. Jika ada daun yang layu atau tampak menguning, segera petik atau potong karena bisa saja menulari daun-daun lain di sekitarnya. </p>
                              </div>
                           </div>
                        </div>
                        <div class="testimonial__nav-2">
                           <div class="row justify-content-center">
                              <div class="col-xxl-10">
                                 <div class="testimonial__slider-nav testimonial__slider-nav-2 swiper-container">
                                    <div class="swiper-wrapper">
                                       <div class="testimonial__avater testimonial__avater-2 swiper-slide d-flex align-items-center">
                                          <div class="testimonial__avater-content">
                                             <h4>Annisa Amanda Nelvi</h4>
                                             <span>Plantae Specialist</span>
                                          </div>
                                       </div>
                                       <div class="testimonial__avater testimonial__avater-2 swiper-slide d-flex align-items-center">
                                          <div class="testimonial__avater-content">
                                             <h4>Laila Fitri</h4>
                                             <span>Plant Protector</span>
                                          </div>
                                       </div>
                                       <div class="testimonial__avater testimonial__avater-2 swiper-slide d-flex align-items-center">
                                          <div class="testimonial__avater-content">
                                             <h4>Maulida Riski</h4>
                                             <span>Plant Review</span>
                                          </div>
                                       </div>
                                       <div class="testimonial__avater testimonial__avater-2 swiper-slide d-flex align-items-center">
                                          <div class="testimonial__avater-content">
                                             <h4>Rahma Rania Fairuz</h4>
                                             <span>Plant Review</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- tp-testimonila-tabs-end -->         

      </main>
      <h3 class="tp-section-title" style="text-align:center; margin-top:60px; margin-bottom:-70px;"> Komunitas Anda </h3> <br/>
      <div class="container-fluid h-100">
			<div class="row justify-content-center h-100">
				<div class="col-md-4 col-xl-3 chat"><div class="card mb-sm-3 mb-md-0 contacts_card">
					<div class="card-header">
						<div class="input-group">
							<input type="text" placeholder="Search..." name="" class="form-control search">
							<div class="input-group-prepend">
								<span class="input-group-text search_btn"><i class="fas fa-search"></i></span>
							</div>
						</div>
					</div>
					<div class="card-body contacts_body">
						<ui class="contacts">
						<li class="active">
							<div class="d-flex bd-highlight">
								<div class="img_cont">
									<img src="<?= base_url() ?>/uplant-main/assets/img/team/p2.png" class="rounded-circle user_img">
                           <span class="online_icon"></span>
                        </div>
								<div class="user_info">
									<span>Laila Fitri</span>
									<p></p>
								</div>
							</div>
						</li>
						<li>
							<div class="d-flex bd-highlight">
								<div class="img_cont">
									<img src="<?= base_url() ?>/uplant-main/assets/img/logo2.png" class="rounded-circle user_img">
								</div>
								<div class="user_info">
									<span>Protect Values</span>
									<p>12 Members</p>
								</div>
							</div>
						</li>
						<li>
							<div class="d-flex bd-highlight">
								<div class="img_cont">
									<img src="<?= base_url() ?>/uplant-main/assets/img/logo.png" class="rounded-circle user_img">
								</div>
								<div class="user_info">
									<span>Mari Menanam</span>
									<p>30 Members</p>
								</div>
							</div>
						</li>
						<li>
							<div class="d-flex bd-highlight">
								<div class="img_cont">
									<img src="<?= base_url() ?>/uplant-main/assets/img/logo2.png" class="rounded-circle user_img">
								</div>
								<div class="user_info">
									<span>Sehat dan Pulih</span>
									<p>20 Members</p>
								</div>
							</div>
						</li>
						<li>
							<div class="d-flex bd-highlight">
								<div class="img_cont">
									<img src="<?= base_url() ?>/uplant-main/assets/img/logo.png" class="rounded-circle user_img">
								</div>
								<div class="user_info">
									<span>Way to Shine</span>
									<p>40 Members</p>
								</div>
							</div>
						</li>
						</ui>
					</div>
					<div class="card-footer"></div>
				</div></div>
				<div class="col-md-8 col-xl-6 chat">
					<div class="card">
						<div class="card-header msg_head">
							<div class="d-flex bd-highlight">
								<div class="img_cont">
									<img src="<?= base_url() ?>/uplant-main/assets/img/team/p2.png" class="rounded-circle user_img">
								</div>
								<div class="user_info">
									<span>Laila Fitri</span>
									<p>Online</p>
								</div>
								<div class="video_cam">
									<span><i class="fas fa-video"></i></span>
									<span><i class="fas fa-phone"></i></span>
								</div>
							</div>
							<span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span>
							<div class="action_menu">
								<ul>
									<li><i class="fas fa-user-circle"></i> View profile</li>
									<li><i class="fas fa-users"></i> Add to close friends</li>
									<li><i class="fas fa-plus"></i> Add to group</li>
									<li><i class="fas fa-ban"></i> Block</li>
								</ul>
							</div>
						</div>
						<div class="card-body msg_card_body">
                     <div class="d-flex justify-content-end mb-4">
								<div class="msg_cotainer_send">
									Selamat pagi, sy ingin bertanya ttg tanaman bunga mawar.
								</div>
							</div>

                     <div class="d-flex justify-content-start mb-4">
								<div class="img_cont_msg">
									<img src="<?= base_url() ?>/uplant-main/assets/img/team/p2.png" class="rounded-circle user_img_msg">
								</div>
								<div class="msg_cotainer">
                           Halo! Terkait apa yaa?
								</div>
							</div>

							<div class="d-flex justify-content-end mb-4">
								<div class="msg_cotainer_send">
									Sy menanam bunga mawar dlm pot sekitar 1mgg yg lalu. Pagi ini sy cek ternyata ad banyak sekali siput d dlm pot.
                           Gmn y biar siputnya hilang?
								</div>
							</div>

							<div class="d-flex justify-content-start mb-4">
								<div class="img_cont_msg">
									<img src="<?= base_url() ?>/uplant-main/assets/img/team/p2.png" class="rounded-circle user_img_msg">
								</div>
								<div class="msg_cotainer">
									Baik, saya izin menjelaskan ya Bapak/Ibu. Siput termasuk ke dalam hewan mollusca. Bisa dibasmi dengan menggunakan moluskisida. Obat tersebut dapat Bapak/Ibu temui di toko tanaman.
								</div>
							</div>

							<div class="d-flex justify-content-end mb-4">
								<div class="msg_cotainer_send">
									Siap, mksh y mba
								</div>
							</div>

							<div class="d-flex justify-content-start mb-4">
								<div class="img_cont_msg">
									<img src="<?= base_url() ?>/uplant-main/assets/img/team/p2.png" class="rounded-circle user_img_msg">
								</div>
								<div class="msg_cotainer">
									Sama-sama
								</div>
							</div>
						</div>
						<div class="card-footer">
							<div class="input-group">
								<div class="input-group-append">
									<span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
								</div>
								<textarea name="" class="form-control type_msg" placeholder="Ketik pesan.."></textarea>
								<div class="input-group-append">
									<span class="input-group-text send_btn"><i class="fas fa-location-arrow"></i></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


<!--       <div class="wrapper">
         <section class="users">
            <header>
               <div class="content">
                  <img src="<?= base_url() ?>/uplant-main/assets/img/team/p2.png" alt="" style="margin-top: 20px;">
                  <div class="details">
                     <span><?= session('username') ?></span>
                     <p>Aktif</p>
                  </div>
               </div>
            </header>
        <span class="text" style="font-size: 15px; padding: 20px;">Select an user to start chat</span>

      <div class="search">
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
         <a href="">
            <div class="content">
               <img src="<?= base_url() ?>/uplant-main/assets/img/team/p2.png" alt="" style="height: 50px; width: 50px; margin-top: 20px;">
               <div class="details">
                     <span><?= session('username') ?></span>
                     <p>Aktif</p>
               </div>
            </div>
         </a>
      </div>
         </section>
      </div> -->


       <!-- footer -->
      <footer >
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
                                <li><a href="<?= site_url('beranda/aboutLog') ?>">Tentang Kami</a></li>
                                <li><a href="<?= site_url('beranda/komunitas') ?>">Komunitas</a></li>
                                <li><a href="<?= site_url('artikelLog') ?>">Artikel</a></li>
                                <li><a href="<?= site_url('beranda/kontakLog') ?>">Kontak</a></li>
                                <li><a href="<?= site_url('beranda/index') ?>">Home</a></li>
                                <li><a href="<?= site_url('auth/logoutUser') ?>">Logout</a></li>
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
