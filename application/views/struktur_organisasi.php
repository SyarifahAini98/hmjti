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
            <a class="navbar-brand" href="index.php"><img src="<?php echo base_url('assets/images/polije.png');?>" alt="logo" width="60px" height="60px"></a>
            <a class="navbar-brand" href="index.php"><img src="<?php echo base_url('assets/images/HMJ TI LOGO.png');?>" alt="logo" width="50px" height="60px"></a>
            <!-- TEXT BASED LOGO -->
            <a class="navbar-brand" href="index.php">HIMPUNAN MAHASISWA<br><H4>JURUSAN TEKNOLOGI INFORMASI</H4></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
              <li><a href="index.php">Beranda</a></li>
              <li><a href="<?= base_url('hmjti/berita');?>">Berita</a></li>
              <li><a href="<?= base_url('hmjti/event');?>">Event</a></li>
              <li class="active"><a href="<?= base_url('hmjti/struktur_organisasi');?>">Struktur Organisasi</a></li>
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
  <!-- Start single page header -->
  <section id="single-page-header">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single-page-header-left">
              <h2>STRUKTUR ORGANISASI</h2>
              <p></p>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single-page-header-right">
              <ol class="breadcrumb">
                <li class="active">2019</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End single page header -->
  
  <!-- Start Service -->
  <section id="service">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <center><img src="<?= base_url('assets/');?>images/struktur.jpg" alt="image" style="height: 500px;width: 750px;"></center><br>
        </div>
        <div class="col-md-12">
          <div class="title-area">
            <h2 class="title">Visi</h2>
            <span class="line"></span>
            <p style="text-align: left;">Mewujudkan HMJ TI sebagai organisasi yang berorientasikan kepada pelayanan, pengabdian, dan pemanfaatan sumber daya manusia yang religius, aktif, kreatif dan komunikatif</p><br>
          </div>
        </div>
        <div class="col-md-12">
          <div class="title-area">
            <h2 class="title">Misi</h2>
            <span class="line"></span>
            <p style="text-align: left;">Untuk mencapai visi tersebut Jurusan Teknologi Informasi menetapkan misi Jurusan Teknologi Informasi Sebagai berikut.<br>
            <ol style="text-align: left;"><li>Meningkatkan keaktifan mahasiswa TI baik dalam bidang akademik maupun non akademik</li>
            <li>Mengembangkan HMJ TI yang aktif dan inofatif guna menyalurkan aspirasi dan bakat mahasiswa TI</li>
            <li>Membangun semangat persatuan, kebersamaan dan toleransi antar mahasiswa TI</li>
            <li>Menjadikan HMJ TI sebagai organisasi yang berakhlak mulia , berbudi pekerti dan rasa tanggung jawab yang tinggi</li>
          </p><br>
          </div>
        </div>
        <div class="col-md-12">
          <div class="title-area">
            <h2 class="title">Motto HMJTI 2019</h2>
            <span class="line"></span>
            <p>Bertekad Dari Hati, Bersama Membangun TI</p><br>
          </div>
        </div>
        <div class="col-md-12">
          <div class="title-area">
            <h2 class="title">Struktur Organisasi HMJ TI 2019</h2>
            <span class="line"></span>
            <p><img src="<?= base_url('assets/');?>images/images_foto/Muhammad Andys Saputra.png" alt="image"><br>
              Muhammad Andys Saputra<br>
              Ketua HMJTI</p>
            <p><img src="<?= base_url('assets/');?>images/images_foto/Lintang Baskoro Cahyo.JPG" alt="image"><br>
              Lintang Baskoro Cahyo<br>
              Wakil Ketua HMJ TI</p>
          </div>
        </div>
        <div class="col-md-12"><hr></div>
        <div class="col-md-12">
          <div class="service-content">
            <div class="row">
              <!-- Start single service -->
              <div class="col-md-4 col-sm-6">
                <div class="single-service wow zoomIn">
                  <p style="text-align: center;"><img src="<?= base_url('assets/');?>images/images_foto/Nur Widiyanti.png" alt="image"><br>
              Nur Widiyanti<br>Sekretaris 1</p>
                </div>
              </div>
              <!-- End single service -->
              <!-- Start single service -->
              <div class="col-md-4 col-sm-6">
                <div class="single-service wow zoomIn">
                  <p style="text-align: center;"><img src="<?= base_url('assets/');?>images/images_foto/Rizky Nurwinda.png" alt="image"><br>
              Rizky Nurwinda<br>Sekretaris 2</p>
                </div>
              </div>
              <!-- End single service -->
              <!-- Start single service -->
              <div class="col-md-4 col-sm-6">
                <div class="single-service wow zoomIn">
                  <p style="text-align: center;"><img src="<?= base_url('assets/');?>images/images_foto/Ellen Melinda Putri A.S..png" alt="image"><br>
              Ellen Melinda Putri A.S.<br>Bendahara</p>
                </div>
              </div>
              <!-- End single service -->
            </div>
          </div>
        </div>
        <div class="col-md-12"><hr></div>
        <div class="col-md-12">
          <div class="service-content">
            <div class="row">
              <!-- Start single service -->
              <div class="col-md-12">
                <div class="single-service wow zoomIn">
                  <p style="text-align: center;"><img src="<?= base_url('assets/');?>images/images_foto/Lafic Imarega Dwiputra.JPG" alt="image"><br>
              Lafic Imarega Dwiputra (CO)<br>DEP. Administasi</p>
                </div>
              </div>
              <!-- End single service -->
              <!-- Start single service -->
              <div class="col-md-6">
                <div class="single-service wow zoomIn">
                  <p style="text-align: center;"><img src="<?= base_url('assets/');?>images/images_foto/Diana Maulidiyyah.png" alt="image"><br>
              Diana Maulidiyyah (CO)<br>Biro Kesekretariatan</p>
                </div>
              </div>
              <!-- End single service -->
              <!-- Start single service -->
              <div class="col-md-6">
                <div class="single-service wow zoomIn">
                  <p style="text-align: center;"><img src="<?= base_url('assets/');?>images/images_foto/An Nisa Safitri.png" alt="image"><br>
              An Nisa Safitri<br>Biro Kesekretariatan</p>
                </div>
              </div>
              <!-- End single service -->
              <!-- Start single service -->
              <div class="col-md-12">
                <div class="single-service wow zoomIn">
                  <p style="text-align: center;"><img src="<?= base_url('assets/');?>images/images_foto/Deni Hidayatullah.png" alt="image"><br>
              Deni Hidayatullah (CO)<br>Biro Sarpras</p>
                </div>
              </div>
              <!-- End single service -->
            </div>
          </div>
        </div>
        <div class="col-md-12"><hr></div>
        <div class="col-md-12">
          <div class="service-content">
            <div class="row">
              <!-- Start single service -->
              <div class="col-md-12">
                <div class="single-service wow zoomIn">
                  <p style="text-align: center;"><img src="<?= base_url('assets/');?>images/images_foto/Putri Yayang Yulianti.png" alt="image"><br>
              Putri Yayang Yulianti (CO)<br>DEP. Keilmuan</p>
                </div>
              </div>
              <!-- End single service -->
              <!-- Start single service -->
              <div class="col-md-12">
                <div class="single-service wow zoomIn">
                  <p style="text-align: center;"><img src="<?= base_url('assets/');?>images/images_foto/Agung Wahyu Gunawan.png" alt="image"><br>
              Agung Wahyu Gunawan (CO)<br>Biro SI</p>
                </div>
              </div>
              <!-- End single service -->
              <!-- Start single service -->
              <div class="col-md-6">
                <div class="single-service wow zoomIn">
                  <p style="text-align: center;"><img src="<?= base_url('assets/');?>images/images_foto/Moh. Fani Fadilah.png" alt="image"><br>
              Moh. Fani Fadilah (CO)<br>Biro Multimedia</p>
                </div>
              </div>
              <!-- End single service -->
              <!-- Start single service -->
              <div class="col-md-6">
                <div class="single-service wow zoomIn">
                  <p style="text-align: center;"><img src="<?= base_url('assets/');?>images/images_foto/Achmad Ghalib Ramadhan A..JPG" alt="image"><br>
              Achmad Ghalib Ramadhan A.<br>Biro Multimedia</p>
                </div>
              </div>
              <!-- End single service -->
              <!-- Start single service -->
              <div class="col-md-12">
                <div class="single-service wow zoomIn">
                  <p style="text-align: center;"><img src="<?= base_url('assets/');?>images/images_foto/M. Hanafi Abror.png" alt="image"><br>
              M. Hanafi Abror (CO)<br>Biro IT Support</p>
                </div>
              </div>
              <!-- End single service -->
              <!-- Start single service -->
              <div class="col-md-12">
                <div class="single-service wow zoomIn">
                  <p style="text-align: center;"><img src="<?= base_url('assets/');?>images/images_foto/Muhammad Kholil.png" alt="image"><br>
              Muhammad Kholil (CO)<br>Biro Hardware</p>
                </div>
              </div>
              <!-- End single service -->
              <!-- Start single service -->
              <div class="col-md-12">
                <div class="single-service wow zoomIn">
                  <p style="text-align: center;"><img src="<?= base_url('assets/');?>images/images_foto/Irvan Junaidi.png" alt="image"><br>
              Irvan Junaidi (CO)<br>Biro Game Development</p>
                </div>
              </div>
              <!-- End single service -->
            </div>
          </div>
        </div>
        <div class="col-md-12"><hr></div>
        <div class="col-md-12">
          <div class="service-content">
            <div class="row">
              <!-- Start single service -->
              <div class="col-md-12">
                <div class="single-service wow zoomIn">
                  <p style="text-align: center;"><img src="<?= base_url('assets/');?>images/images_foto/Novita Ayu Agustin.png" alt="image"><br>
              Novita Ayu Agustin (CO)<br>DEP. Kewirausahaan</p>
                </div>
              </div>
              <!-- End single service -->
              <!-- Start single service -->
              <div class="col-md-4 col-sm-6">
                <div class="single-service wow zoomIn">
                  <p style="text-align: center;"><img src="<?= base_url('assets/');?>images/images_foto/Okta Rohmatun N..png" alt="image"><br>
              Okta Rohmatun N. (CO)<br>Biro Pengembangan KWU</p>
                </div>
              </div>
              <!-- End single service -->
              <!-- Start single service -->
              <div class="col-md-4 col-sm-6">
                <div class="single-service wow zoomIn">
                  <p style="text-align: center;"><img src="<?= base_url('assets/');?>images/images_foto/Mega Silvia.png" alt="image"><br>
              Mega Silvia (CO)<br>Biro Usaha Mandiri</p>
                </div>
              </div>
              <!-- End single service -->
              <!-- Start single service -->
              <div class="col-md-4 col-sm-6">
                <div class="single-service wow zoomIn">
                  <p style="text-align: center;"><img src="<?= base_url('assets/');?>images/images_foto/Imron Sholehuddin.png" alt="image"><br>
              Imron Sholehuddin<br>Biro Pengembangan KWU</p>
                </div>
              </div>
              <!-- End single service -->
            </div>
          </div>
        </div>
        <div class="col-md-12"><hr></div>
        <div class="col-md-12">
          <div class="service-content">
            <div class="row">
              <!-- Start single service -->
              <div class="col-md-12">
                <div class="single-service wow zoomIn">
                  <p style="text-align: center;"><img src="<?= base_url('assets/');?>images/images_foto/David Bristi Antara.png" alt="image"><br>
              David Bristi Antara (CO)<br>DEP. Perhubungan</p>
                </div>
              </div>
              <!-- End single service -->
              <!-- Start single service -->
              <div class="col-md-4 col-sm-6">
                <div class="single-service wow zoomIn">
                  <p style="text-align: center;"><img src="<?= base_url('assets/');?>images/images_foto/Ratna Dwi K. S..png" alt="image"><br>
              Ratna Dwi K. S.<br>Biro Internal TIF</p>
                </div>
              </div>
              <!-- End single service -->
              <!-- Start single service -->
              <div class="col-md-4 col-sm-6">
                <div class="single-service wow zoomIn">
                  <p style="text-align: center;"><img src="<?= base_url('assets/');?>images/images_foto/Aidatul Fakhirah.png" alt="image"><br>
              Aidatul Fakhirah<br>Biro Internal MIF</p>
                </div>
              </div>
              <!-- End single service -->
              <!-- Start single service -->
              <div class="col-md-4 col-sm-6">
                <div class="single-service wow zoomIn">
                  <p style="text-align: center;"><img src="<?= base_url('assets/');?>images/images_foto/Evita Rizky Maharani S..png" alt="image"><br>
              Evita Rizky Maharani S.<br>Biro Internal TKK</p>
                </div>
              </div>
              <!-- End single service -->
              <!-- Start single service -->
              <div class="col-md-12">
                <div class="single-service wow zoomIn">
                  <p style="text-align: center;"><img src="<?= base_url('assets/');?>images/images_foto/Rizki Widya Pratama.png" alt="image"><br>
              Rizki Widya Pratama<br>Biro Internal TIF Bondowoso</p>
                </div>
              </div>
              <!-- End single service -->
              <!-- Start single service -->
              <div class="col-md-6">
                <div class="single-service wow zoomIn">
                  <p style="text-align: center;"><img src="<?= base_url('assets/');?>images/images_foto/Akbar Maulana T. K..png" alt="image"><br>
              Akbar Maulana T. K. (CO)<br>Biro Kominfo</p>
                </div>
              </div>
              <!-- End single service -->
              <!-- Start single service -->
              <div class="col-md-6">
                <div class="single-service wow zoomIn">
                  <p style="text-align: center;"><img src="<?= base_url('assets/');?>images/images_foto/Mochamad Satria Maulana.png" alt="image"><br>
              Mochamad Satria Maulana<br>Biro Kominfo</p>
                </div>
              </div>
              <!-- End single service -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Service -->