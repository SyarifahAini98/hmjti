  <!-- Start single page header -->
  <section id="single-page-header">
        <div class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single-page-header-left">
                  <h2>
                    Berita HMJTI</h2>
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
                  <?php
                  $no=1;
                  foreach ($data as $row):
                  ?>
                  <!-- Start blog news single -->
                  <article class="blog-news-single">
                    <div class="blog-news-img">
                      <img src="<?= base_url('assets/');?>images/images_berita/<?= $row->gambar;?>" alt="image">
                    </div>
                    <div class="blog-news-title">
                      <h2><?= $row->judul;?></h2>
                      <p>By <a class="blog-author" href="#"><?= $row->id_user;?></a> <span class="blog-date">|<?= $row->tgl_penulisan;?></span></p>
                    </div>
                    <div class="blog-news-details blog-single-details">
                      <p><?= $row->isi;?></p>
                      <div class="blog-single-bottom">
                        <div class="row">
                          <div class="col-md-8">
                            <div class="blog-single-tag">
                              <span class="fa fa-tags"></span>
                              <a href="#"><?= $row->id_kategori;?></a>
                            </div>
                          </div>
                          <!-- <div class="col-md-4">
                            <div class="blog-single-social">
                              <a href="#"><i class="fa fa-facebook"></i></a>
                              <a href="#"><i class="fa fa-twitter"></i></a>
                              <a href="#"><i class="fa fa-linkedin"></i></a>
                              <a href="#"><i class="fa fa-google-plus"></i></a>
                              <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                          </div> -->
                        </div>
                      </div>
                    </div>
                  </article>
                  <?php $no++;
                  endforeach;?>
                  <!-- Start blog navigation -->
                  <!-- <div class="blog-navigation-area">
                    <div class="blog-navigation-prev">
                      <a href="#">
                        <h5>All about writing story</h5>
                        <span>Previous Post</span>
                      </a>
                    </div>
                    <div class="blog-navigation-next">
                      <a href="#">
                        <h5>All about friends story</h5>
                        <span>Next Post</span>
                      </a>
                    </div>
                  </div> -->
                  <!-- Start Comment box -->
                  <!-- <div class="comments-box-area">
                    <h2>Leave a Comment</h2>
                    <p>Your email address will not be published.</p>
                    <form action="" class="comments-form">
                      <div class="form-group">                        
                        <input type="text" class="form-control" placeholder="Your Name">
                      </div>
                      <div class="form-group">                        
                        <input type="email" class="form-control" placeholder="Email">
                      </div>
                      <div class="form-group">                        
                        <textarea placeholder="Comment" rows="3" class="form-control"></textarea>
                      </div>
                      <button class="comment-btn">Submit Comment</button>
                    </form>
                  </div> -->
                </div>
              </div>
              <div class="col-md-4">
                <aside class="blog-side-bar">
                  <!-- Start sidebar widget -->
                  <div class="sidebar-widget">
                        <h4 class="widget-title">Kategori</h4>
                        <ul class="widget-catg">
                          <li><a href="#">Berita</a></li>
                          <li><a href="#">Event</a></li>
                        </ul>
                      </div>
                  <!-- Start sidebar widget -->
                  <!-- <div class="sidebar-widget">
                    <h4 class="widget-title">Text Widget</h4>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                  </div> -->
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
                  </div> -->
                  <!-- Start sidebar widget -->
                  <div class="sidebar-widget">
                        <h4 class="widget-title">Populer</h4>
                        <ul class="widget-archive">
                        <?php
                        $no=1;
                        foreach ($data1 as $row):
                        ?>
                          <li><table border="0"><tr><td><img src="<?= base_url('assets/');?>images/images_berita/<?= $row->gambar;?>" width="80px" height="80px"></img></td><td><a href="<?= base_url('hmjti/detail_berita/'.$row->id_berita);?>"><span><?= $row->judul;?></span></a></td></tr>
                          <tr><td colspan="2">&nbsp;</td></tr></table></li> 
                        <?php $no++;
                        endforeach;?>
                        </ul>
                      </div>
                  <!-- Start sidebar widget -->
                  <div class="sidebar-widget">
                        <h4 class="widget-title">Link</h4>
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
  <!-- <section id="subscribe">
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
  </section> -->
  <!-- End subscribe us -->