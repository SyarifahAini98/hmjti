<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>HMJTI</title>
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/icon" href="<?php echo base_url('assets/images/favicon.ico');?>" />
  <!-- Font Awesome -->
  <link href="<?php echo base_url('assets/css/font-awesome.css');?>" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel="stylesheet">
  <!-- Slick slider -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/slick.css');?>" />
  <!-- Fancybox slider -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/jquery.fancybox.css');?>" type="text/css" media="screen" />
  <!-- Animate css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/animate.css');?>" />
  <!-- Progress bar  -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-progressbar-3.3.4.css');?>" />
  <!-- Theme color -->
  <link id="switcher" href="<?php echo base_url('assets/css/theme-color/default-theme.css');?>" rel="stylesheet">

  <!-- Main Style -->
  <link href="<?php echo base_url('assets/style.css');?>" rel="stylesheet">

  <!-- Fonts -->

  <!-- Open Sans for body font -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <!-- Lato for Title -->
  <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>


  <!-- SCROLL TOP BUTTON -->
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header -->
  <header id="header">
    <!-- header top search -->
    <div class="header-top">
      <div class="container">
        <form action="">
          <div id="search">
            <input type="text" placeholder="Ketikkan kata kunci disini dan tekan Enter..." name="s" id="m_search"
              style="display: inline-block;">
            <button type="submit">
              <i class="fa fa-search"></i>
            </button>
          </div>
        </form>
      </div>
    </div>

    <!-- BEGIN MENU -->
    <section id="menu-area">
      <nav class="navbar navbar-default" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
              aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- LOGO -->
            <!-- IMG BASED LOGO  -->
            <a class="navbar-brand" href="<?= base_url('hmjti');?>"><img src="<?php echo base_url('assets/images/polije.png');?>" alt="logo" width="60px" height="60px"></a>
            <a class="navbar-brand" href="<?= base_url('hmjti');?>"><img src="<?php echo base_url('assets/images/HMJ TI LOGO.png');?>" alt="logo" width="50px" height="60px"></a>
            <!-- TEXT BASED LOGO -->
            <a class="navbar-brand" href="<?= base_url('hmjti');?>">HIMPUNAN MAHASISWA<br><H4>JURUSAN TEKNOLOGI INFORMASI</H4></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
              <li class="active"><a href="<?= base_url('hmjti');?>">Beranda</a></li>
              <li><a href="<?= base_url('hmjti/berita');?>">Berita</a></li>
              <li><a href="<?= base_url('hmjti/event');?>">Event</a></li>
              <li><a href="<?= base_url('hmjti/struktur_organisasi');?>">Struktur Organisasi</a></li>
              <li><a href="<?= base_url('hmjti/tentang_kami');?>">Tentang Kami</a></li>
            </ul>
          </div>
          <!--/.nav-collapse -->
          <a href="#" id="search-icon">
            <i class="fa fa-search">
            </i>
          </a>
        </div>
      </nav>
    </section>
    <!-- END MENU -->
    <!-- Start slider -->
    <section id="slider">
      <div class="main-slider">
        <div class="single-slide">
          <img src="<?php echo base_url('assets/images/background.png');?>" alt="img">
          <div class="slide-content">
            <div class="container">
              <div class="row">
                <div class="col-md-6 col-sm-6">
                  <div class="slide-article">
                    <h1 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">Ketua HMJ TI</h1>
                    <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.75s">Muhammad Andys Saputra</p>
                    <a class="read-more-btn wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s" href="#">Baca Selengkapnya</a>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="slider-img wow fadeInUp">
                    <img src="<?php echo base_url('assets/images/person2.png');?>" alt="business man">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="single-slide">
          <img src="<?php echo base_url('assets/images/background.png');?>" alt="img">
          <div class="slide-content">
            <div class="container">
              <div class="row">
                <div class="col-md-6 col-sm-6">
                  <div class="slide-article">
                    <h1 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">Wakil Ketua HMJ TI</h1>
                    <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.75s">Lintang Baskoro Cahyo</p>
                    <a class="read-more-btn wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s" href="#">Baca Selengkapnya</a>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="slider-img wow fadeInUp">
                    <img src="<?php echo base_url('assets/images/person1.png');?>" alt="business man">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End slider -->

    <!-- Start Feature -->
    <section id="feature">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-area">
              <h2 class="title">HMJ TI</h2>
              <br>Himpunan Mahasiswa Jurusan Teknologi Informasi merupakan suatu organisasi yang bergerak di bidang
                jurusan Teknologi Informasi</br>
              <span class="line"></span>
              <h3>BERTEKAD DARI HATI BERSAMA MEMBANGUN TI... TI PC!!!</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Feature -->

    <!-- Start about  -->


    <!-- Start counter -->
    <section id="counter">
      <div class="counter-overlay">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="counter-area">
                <div class="row">
                  <!-- Start single counter -->
                  <div class="single-counter">
                      <h2 class="counter-no">VISI</h2>
                      <P>MEWUJUDKAN HMJTI SEBAGAI ORGANISASI YANG BERORIENTASIKAN
                          KEPADA PELAYANAN, PENGABDIAN, DAN PEMANFAATAN SUMBER DAYA MANUSIA
                          YANG RELIGIUS, AKTIF, KREATIF DAN KOMUNIKATIF</P>
                  </div>
                  <div class="single-counter">
                  <h2 class="counter-no">MISI</h2>
                  </div>
                  <div class="col-md-3 col-sm-6">
                    <div class="single-counter">
                      <div class="counter-icon">
                        <img src="<?php echo base_url('assets/images/1.png');?>" height="50px" width="40px"></i>
                      </div>
                      <!--<div class="counter-no counter">
                        1275
                      </div>-->
                      <div class="counter-label">
                          Meningkatkan keaktifan mahasiswa TI 
                          baik dalam bidang akademik 
                          maupun non akademik
                      </div>
                    </div>
                  </div>
                  <!-- End single counter -->
                  <!-- Start single counter -->
                  <div class="col-md-3 col-sm-6">
                    <div class="single-counter">
                      <div class="counter-icon">
                          <img src="<?php echo base_url('assets/images/2.png');?>" height="50px" width="40px"></i>
                      </div>
                      <!--<div class="counter-no counter">
                        5275
                      </div>-->
                      <div class="counter-label">
                          Mengembangkan HMJTI yang aktif dan 
                          inovatif guna menyalurkan aspirasi dan 
                          bakat mahasiswa TI
                      </div>
                    </div>
                  </div>
                  <!-- End single counter -->
                  <!-- Start single counter -->
                  <div class="col-md-3 col-sm-6">
                    <div class="single-counter">
                      <div class="counter-icon">
                          <img src="<?php echo base_url('assets/images/3.png');?>" height="50px" width="40px"></i>
                      </div>
                      <!--<div class="counter-no counter">
                        350
                      </div>-->
                      <div class="counter-label">
                          Membangun semangat persatuan, 
                          kebersamaan dan toleransi 
                          antar mahasiswa 
                      </div>
                    </div>
                  </div>
                  <!-- End single counter -->
                  <!-- Start single counter -->
                  <div class="col-md-3 col-sm-6">
                    <div class="single-counter">
                      <div class="counter-icon">
                          <img src="<?php echo base_url('assets/images/4.png');?>" height="50px" width="40px"></i>
                      </div>
                      <!--<div class="counter-no counter">
                        875
                      </div>-->
                      <div class="counter-label">
                          Menjadikan HMJTI sebagai organisasi yang 
                          berakhlak mulia, berbudi pekerti dan 
                          rasa tanggung jawab yang tinggi
                      </div>
                    </div>
                  </div>
                  <!-- End single counter -->
                </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End counter -->


    <!-- Start Service -->
    <!--section id="service">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-area">
              <h2 class="title">Agenda Terdekat</h2>
              <span class="line"></span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="service-content">
              <div class="row">-->
                <!-- Start single service -->
                <!--<div class="col-md-4 col-sm-6">
                  <div class="single-service wow zoomIn">
                    <i class="fa fa-desktop service-icon"></i>
                    <h4 class="service-title">Web HMJTI</h4>
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                      data-target="#exampleModalScrollable">Detail</button>
                  </div>
                </div>-->
                <!-- End single service -->
                <!-- Start single service -->
               <!-- <div class="col-md-4 col-sm-6">
                  <div class="single-service wow zoomIn">
                    <i class="fa fa-paw service-icon"></i>
                    <h4 class="service-title">EPIM</h4>
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                      data-target="#exampleModalScrollable">Detail</button>
                  </div>
                </div>-->
                <!-- End single service -->
                <!-- Start single service -->
                <!--<div class="col-md-4 col-sm-6">
                  <div class="single-service wow zoomIn">
                    <i class="fa fa-magic service-icon"></i>
                    <h4 class="service-title">Baksos</h4>
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                      data-target="#exampleModalScrollable">Detail</button>
                  </div>
                </div>-->
                <!-- End single service -->
                <!-- Start single service -->
                <!--<div class="col-md-4 col-sm-6">
                  <div class="single-service wow zoomIn">
                    <i class="fa fa-shopping-cart service-icon"></i>
                    <h4 class="service-title">E-commerce</h4>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                      alteration in some form.</p>
                  </div>
                </div>-->
                <!-- End single service -->
                <!-- Start single service -->
                <!--<div class="col-md-4 col-sm-6">
                  <div class="single-service wow zoomIn">
                    <i class="fa fa-mobile service-icon"></i>
                    <h4 class="service-title">App Development</h4>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                      alteration in some form.</p>
                  </div>
                </div>-->
                <!-- End single service -->
                <!-- Start single service -->
                <!--<div class="col-md-4 col-sm-4">
                  <div class="single-service wow zoomIn">
                    <i class="fa fa-rocket service-icon"></i>
                    <h4 class="service-title">S.E.O</h4>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                      alteration in some form.</p>
                  </div>
                </div>-->
                <!-- End single service -->
            <!--  </div>
            </div>
          </div>
        </div>
      </div>
    </section>-->
    <!-- End Service -->





    <!-- Start latest news -->
    <section id="latest-news">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-area">
              <h2 class="title">Berita Terbaru</h2>
              <span class="line"></span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="latest-news-content">
              <div class="row">
                <?php
                $no=1;
                foreach ($data1 as $row):
                ?>
                <!-- start single latest news -->
                <div class="col-md-4">
                  <article class="blog-news-single">
                    <div class="blog-news-img">
                      <a href="blog-single-with-right-sidebar.html"><img src="<?= base_url('assets/');?>images/images_berita/<?= $row->gambar;?>"
                          alt="image"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="blog-single-with-right-sidebar.html"><?= $row->judul;?></a></h2>
                      <p>Oleh <a class="blog-date" href="#"><?= $row->tgl_penulisan;?></a> <span class="blog-author">|<?= $row->id_user;?></span></p>
                    </div>
                    <div class="blog-news-details">
                      <p><?php echo substr($row->isi,0,200).' ...'; ?></p>
                      <a class="blog-more-btn" href="<?= base_url('hmjti/detail_berita/'.$row->id_berita);?>">Baca Selengkapnya <i
                          class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </article>
                </div>
                <?php $no++;
                endforeach;?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End latest news -->

    <!-- Start subscribe us -->
    <!-- <section id="subscribe">
    <div class="subscribe-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="subscribe-area">
              <h2 class="wow fadeInUp">Subscribe Newsletter</h2>
              <form action="" class="subscrib-form wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                <input type="text" placeholder="Enter Your E-mail..">
                <button class="subscribe-btn" type="submit">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
    <!-- End subscribe us -->