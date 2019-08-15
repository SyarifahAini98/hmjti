<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Intensely : Blog Archive</title>
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/icon" href="assets/images/favicon.ico" />
  <!-- Font Awesome -->
  <link href="assets/css/font-awesome.css" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <!-- Slick slider -->
  <link rel="stylesheet" type="text/css" href="assets/css/slick.css" />
  <!-- Fancybox slider -->
  <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" />
  <!-- Animate css -->
  <link rel="stylesheet" type="text/css" href="assets/css/animate.css" />
  <!-- Bootstrap progressbar  -->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-progressbar-3.3.4.css" />
  <!-- Theme color -->
  <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">

  <!-- Main Style -->
  <link href="style.css" rel="stylesheet">

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

  <!-- BEGAIN PRELOADER -->
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
  <!-- END PRELOADER -->

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


    <!-- Start login modal window -->
    <div aria-hidden="false" role="dialog" tabindex="-1" id="login-form" class="modal leread-modal fade in">
      <div class="modal-dialog">
        <!-- Start login section -->
        <div id="login-content" class="modal-content">
          <div class="modal-header">
            <button aria-label="Close" data-dismiss="modal" class="close" type="button"><span
                aria-hidden="true">×</span></button>
            <h4 class="modal-title"><i class="fa fa-unlock-alt"></i>Login</h4>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <input type="text" placeholder="User name" class="form-control">
              </div>
              <div class="form-group">
                <input type="password" placeholder="Password" class="form-control">
              </div>
              <div class="loginbox">
                <label><input type="checkbox"><span>Remember me</span></label>
                <button class="btn signin-btn" type="button">SIGN IN</button>
              </div>
            </form>
          </div>
          <div class="modal-footer footer-box">
            <a href="#">Forgot password ?</a>
            <span>No account ? <a id="signup-btn" href="#">Sign Up.</a></span>
          </div>
        </div>
        <!-- Start signup section -->
        <div id="signup-content" class="modal-content">
          <div class="modal-header">
            <button aria-label="Close" data-dismiss="modal" class="close" type="button"><span
                aria-hidden="true">×</span></button>
            <h4 class="modal-title"><i class="fa fa-lock"></i>Sign Up</h4>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <input placeholder="Name" class="form-control">
              </div>
              <div class="form-group">
                <input placeholder="Username" class="form-control">
              </div>
              <div class="form-group">
                <input placeholder="Email" class="form-control">
              </div>
              <div class="form-group">
                <input type="password" placeholder="Password" class="form-control">
              </div>
              <div class="signupbox">
                <span>Already got account? <a id="login-btn" href="#">Sign In.</a></span>
              </div>
              <div class="loginbox">
                <label><input type="checkbox"><span>Remember me</span><i class="fa"></i></label>
                <button class="btn signin-btn" type="button">SIGN UP</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End login modal window -->

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
            <a class="navbar-brand" href="index.php"><img src="assets/images/polije.png" alt="logo" width="60px" height="60px"></a>
            <a class="navbar-brand" href="index.php"><img src="assets/images/HMJ TI LOGO.png" alt="logo" width="50px" height="60px"></a>
            <!-- TEXT BASED LOGO -->
            <a class="navbar-brand" href="index.php">HIMPUNAN MAHASISWA<br><H4>JURUSAN TEKNOLOGI INFORMASI</H4></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
              <li><a href="index.php">Home</a></li>
              <li><a href="kegiatan.php">News</a></li>
              <li class="active"><a href="event.php">Event</a></li>
              <li><a href="struktur_pengurus.html">Struktur Pengurus</a></li>
              <li><a href="kritik_saran.html">Tentang Kami</a></li>
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
                <h2>EVENT</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End single page header -->

    <!-- Start blog archive -->
    <section id="blog-archive">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="blog-archive-area">
              <div class="row">
                <div class="col-md-8">
                  <div class="blog-archive-left">
                    <!-- Start blog news single -->
                    <article class="blog-news-single">
                      <div class="blog-news-evt">
                        <a href="blog-single-with-right-sidebar.php"><img src="assets/images/Firebase.jpeg"
                            alt="image"></a>
                      </div>
                      <div class="blog-news-title">
                        <h2><a href="blog-single-with-right-sidebar.php">All about writing story</a></h2>
                        <p>By <a class="blog-author" href="#">John Powell</a> <span class="blog-date">|18 October
                            2015</span></p>
                      </div>
                      <div class="blog-news-details">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                          been
                          the industry's standard dummy text ever since the</p>
                        <a class="blog-more-btn" href="blog-single-with-right-sidebar.php">Read More <i
                            class="fa fa-long-arrow-right"></i></a>
                      </div>
                    </article>
                    <!-- Start blog news single -->
                    <article class="blog-news-single">
                      <div class="blog-news-evt">
                        <a href="blog-single-with-right-sidebar.php"><img src="assets/images/blog-img-2.jpg"
                            alt="image"></a>
                      </div>
                      <div class="blog-news-title">
                        <h2><a href="blog-single-with-right-sidebar.php">All about writing story</a></h2>
                        <p>By <a class="blog-author" href="#">John Powell</a> <span class="blog-date">|18 October
                            2015</span></p>
                      </div>
                      <div class="blog-news-details">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                          been
                          the industry's standard dummy text ever since the</p>
                        <a class="blog-more-btn" href="blog-single-with-right-sidebar.php">Read More <i
                            class="fa fa-long-arrow-right"></i></a>
                      </div>
                    </article>
                    <!-- Start blog news single -->
                    <article class="blog-news-single">
                      <div class="blog-news-evt">
                        <a href="blog-single-with-right-sidebar.php"><img src="assets/images/blog-img-3.jpg"
                            alt="image"></a>
                      </div>
                      <div class="blog-news-title">
                        <h2><a href="blog-single-with-right-sidebar.php">All about writing story</a></h2>
                        <p>By <a class="blog-author" href="#">John Powell</a> <span class="blog-date">|18 October
                            2015</span></p>
                      </div>
                      <div class="blog-news-details">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                          been
                          the industry's standard dummy text ever since the</p>
                        <a class="blog-more-btn" href="blog-single-with-right-sidebar.php">Read More <i
                            class="fa fa-long-arrow-right"></i></a>
                      </div>
                    </article>
                    <!-- Start blog pagination -->
                    <div class="blog-pagination">
                      <ul class="pagination-nav">
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">6</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <aside class="blog-side-bar">
                    <!-- Start sidebar widget -->
                    <div class="sidebar-widget">
                      <!-- Start blog search -->
                      <form>
                        <div class="search-group">
                          <button type="button" class="blog-search-btn"><span class="fa fa-search"></span></button>
                          <input type="search" placeholder="Search">
                        </div>
                      </form>
                      <!-- End blog search -->
                    </div>
                    <!-- Start sidebar widget -->
                    <div class="sidebar-widget">
                      <h4 class="widget-title">Categories</h4>
                      <ul class="widget-catg">
                        <li><a href="#">Event</a></li>
                        <li><a href="#">News</a></li>
                      </ul>
                    </div>
                    <!-- Start sidebar widget -->
                    <!--<div class="sidebar-widget">
                      <h4 class="widget-title">Text Widget</h4>
                      <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                        alteration in some form, by injected humour, or randomised words which don't look even slightly
                        believable.</p>
                    </div>-->
                    <!-- Start sidebar widget -->
                   <!-- <div class="sidebar-widget">
                      <h4 class="widget-title">Tags</h4>
                      <div class="tag-cloud">
                        <a href="#">Responsive</a>
                        <a href="#">Design</a>
                        <a href="#">Modern</a>
                        <a href="#">Business</a>
                        <a href="#">Software</a>
                        <a href="#">Photoshop</a>
                        <a href="#">Fashion</a>
                        <a href="#">News</a>
                        <a href="#">Health</a>
                        <a href="#">Education</a>
                      </div>
                    </div>-->
                    <!-- Start sidebar widget -->
                    <div class="sidebar-widget">
                      <h4 class="widget-title">Populer</h4>
                      <ul class="widget-archive">
                        <li><img src="assets/images/berita.png" width="80px" height="80px"></img> 
                            <a href="#"><span>Mahasiswa JTI raih juara 2 Mawapres</span></a></li><br>
                        <li><img src="assets/images/berita.png" width="80px" height="80px"></img> 
                            <a href="#"><span>Mahasiswa JTI raih juara 2 Mawapres</span></a></li>
                      </ul>
                    </div>
                    <!-- Start sidebar widget -->
                    <div class="sidebar-widget">
                      <h4 class="widget-title">Important Links</h4>
                      <ul>
                        <li><a href="https://www.polije.ac.id/">Politeknik Negeri Jember</a></li>
                        <li><a href="http://jti.polije.ac.id/">Jurusan Teknologi Informasi Polije</a></li>
                      </ul>
                    </div>
                  </aside>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End blog archive -->

    <!-- Start subscribe us -->
    <!--<section id="subscribe">
      <div class="subscribe-overlay">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="subscribe-area">
                <h2>Subscribe Newsletter</h2>
                <form action="" class="subscrib-form">
                  <input type="text" placeholder="Enter Your E-mail..">
                  <button class="subscribe-btn" type="submit">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>-->
    <!-- End subscribe us -->

    <!-- Start footer -->
    <footer id="footer">
            <div class="container">
              <div class="row">
                <div class="col-md-6 col-sm-6">
                  <div class="footer-left">
                    HIMPUNAN MAHASISWA 
                    <br>JURUSAN TEKNOLOGI INFORMASI
                    <br>POLITEKNIK NEGERI JEMBER</br>
                    <br><p>
                      Jl. Mastrip PO.BOX 164 Jember
                      Jember Jawa Timur 68101 Indonesia
                      <br><i class="fa fa-mobile">+62 0999 4043</i>
                    </p>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="footer-right">
                    <a href="index.html"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </footer>
    <!-- End footer -->

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- Slick Slider -->
    <script type="text/javascript" src="assets/js/slick.js"></script>
    <!-- mixit slider -->
    <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
    <!-- Add fancyBox -->
    <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
    <!-- counter -->
    <script src="assets/js/waypoints.js"></script>
    <script src="assets/js/jquery.counterup.js"></script>
    <!-- Wow animation -->
    <script type="text/javascript" src="assets/js/wow.js"></script>
    <!-- progress bar   -->
    <script type="text/javascript" src="assets/js/bootstrap-progressbar.js"></script>


    <!-- Custom js -->
    <script type="text/javascript" src="assets/js/custom.js"></script>

</body>

</html>