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
              <li><a href="<?= base_url('hmjti');?>">Beranda</a></li>
              <li><a href="<?= base_url('hmjti/berita');?>">Berita</a></li>
              <li><a href="<?= base_url('hmjti/event');?>">Event</a></li>
              <li><a href="<?= base_url('hmjti/struktur_organisasi');?>">Struktur Organisasi</a></li>
              <li class="active"><a href="<?= base_url('hmjti/tentang_kami');?>">Tentang Kami</a></li>
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
    <!-- Start single page header -->
    <section id="single-page-header">
      <div class="overlay">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="single-page-header-left">
                <h2>Tentang Kami</h2>
                <p></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End single page header -->
    <!-- Start contact section  -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-area">
              <h2 class="title">Punya Kritik/Saran/Pertanyaan?</h2>
              <span class="line"></span>
              <p></p>
            </div>
          </div>
          <div class="col-md-12">
            <div class="cotact-area">
              <div class="row">
                <div class="col-md-4">
                  <div class="contact-area-left">
                    <h4>Info Kontak</h4>
                    <p>Jika ada pesan, kesan, kritik dan saran atau ada artikel yang kurang layak dipublikasikan. Silahkan hubungi kami melalui kontak form atau telp, fax, dan email kami berikut.</p>
                    <address class="single-address">
                      <p>Jl. Mastrip PO.BOX 164 Jember<br>
                        Jember Jawa Timur 68101 Indonesia</p>
                      <p>info.hmjti.polije@gmail.com</p>
                      <p>+62 81230364141</p>
                    </address>
                    <div class="footer-right contact-social">
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="https://www.instagram.com/hmjti_polije/"><i class="fa fa-instagram"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="contact-area-right">
                    <form action="" class="comments-form contact-form">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nama">
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Judul">
                      </div>
                      <div class="form-group">
                        <textarea placeholder="Komentar" rows="3" class="form-control"></textarea>
                      </div>
                      <button class="comment-btn">Kirim Komentar</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End contact section  -->