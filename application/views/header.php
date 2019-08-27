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
            <input type="text" placeholder="Type your search keyword here and hit Enter..." name="s" id="m_search"
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
            <a class="navbar-brand" href="index.php"><img src="<?php echo base_url('assets/images/polije.png');?>" alt="logo" width="60px" height="60px"></a>
            <a class="navbar-brand" href="index.php"><img src="<?php echo base_url('assets/images/HMJ TI LOGO.png');?>" alt="logo" width="50px" height="60px"></a>
            <!-- TEXT BASED LOGO -->
            <a class="navbar-brand" href="index.php">HIMPUNAN MAHASISWA<br><H4>JURUSAN TEKNOLOGI INFORMASI</H4></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
              <li class="active"><a href="index.php">Beranda</a></li>
              <li><a href="<?= base_url('hmjti/berita');?>">Berita</a></li>
              <li><a href="<?= base_url('event');?>">Event</a></li>
              <li><a href="<?= base_url('struktur_organisasi');?>">Struktur Organisasi</a></li>
              <li><a href="<?= base_url('tentang_kami');?>">Tentang Kami</a></li>
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