                <div class="col-md-4">
                  <aside class="blog-side-bar">
                    <!-- Start sidebar widget -->
                    <div class="sidebar-widget">
                      <!-- Start blog search -->
                      <form>
                        <div class="search-group">
                          <button type="button" class="blog-search-btn"><span class="fa fa-search"></span></button>
                          <input type="search" placeholder="Cari">
                        </div>
                      </form>
                      <!-- End blog search -->
                    </div>
                    <!-- Start sidebar widget -->
                    <div class="sidebar-widget">
                      <h4 class="widget-title">Kategori</h4>
                        <ul class="widget-catg">
                          <li><a href="<?= base_url('hmjti/berita');?>">Berita</a></li>
                          <li><a href="<?= base_url('hmjti/event');?>">Event</a></li>
                        </ul>
                    </div>
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