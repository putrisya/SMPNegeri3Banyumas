
<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<?php $this->load->view('header'); ?>
	</head>
	<body>
          
          

<!-- start content sejarah  -->
		
<!-- ======= About Us Section ======= -->
  <section id="blog" class="blog">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-lg-8" style="padding-right: 50px;">
        <div>
        <h2 style="text-align:center">Fasilitas SMP N 3 Banyumas</h2>
        <hr>
        </div>
        <?php if ($hasil_fasilitas == "NULL")
          
          echo "<h2>Data tidak tersedia</>";
          
          else{
          foreach($hasil_fasilitas as $row) 
                {
              ?>
          <div class="content d-flex flex-column justify-content-center" style="text-align:center">
            <h4 data-aos="fade-up" style="text-align:center"><?php echo $row->judul_fasilitas ?></h4>
              <img src="<?php echo base_url() ?><?php echo $row->gambar_fasilitas ?>" style="center center no-repeat;width:60%;align-self: center" data-aos="fade-up">
                <p data-aos="fade-up" style="text-align:justify;padding-top:0px" >
               
                    <?php echo $row->isi_fasilitas ?> 
                </p>
          </div>
          <?php 
                }
            } ?>
        </div>
        
              <!-- sidebar -->
        <div class="col-lg-4"style="padding-right:10px">
          <div class="sidebar" data-aos="fade-left">
            <h3 class="sidebar-title" style="border-bottom:5x;color:black;">Pengumuman</h3>
            <div class="sidebar-item categories">
            <?php if ($hasil_pengumuman == "NULL")
          
            echo "<h6>Data tidak tersedia</>";
            
            else{
            foreach($hasil_pengumuman as $row ) 
                {
              ?>
              <ul >
                <li><a href="<?php echo base_url() ?>user/detail_pengumuman/<?php echo $row->id_pengumuman ?>"><?php echo $row->judul_pengumuman ?><p style="margin-bottom:2px"><span><?php  $tgl = $row->tgl_pengumuman; echo date("d-F-Y", strtotime($tgl))   ?></span></p></a></li>
              </ul>
              <?php 
                }
                } ?>
            </div><!-- End sidebar categories-->
          
            <h3 class="sidebar-title">Berita Terbaru</h3>
            <div class="sidebar-item recent-posts">
            <?php if ($hasil_berita == "NULL")
          
            echo "<h6>Data tidak tersedia</>";
            
            else{
            foreach($hasil_berita as $row ) 
                {
              ?>
              <div class="post-item clearfix">
                <img src="<?php echo base_url() ?><?php echo $row->gambar_berita ?>" alt="">
                <h4><a href="<?php echo base_url() ?>user/detail_berita/<?php echo $row->id_berita ?>"><?php echo $row->judul_berita ?></a></h4>
                <time datetime="2020-01-01"><?php  $tgl = $row->tgl_berita; echo date("d-F-Y", strtotime($tgl))   ?></time>
              </div>
              <?php
                }
                } ?>
              </div><!-- End sidebar recent posts-->

            <h3 class="sidebar-title" style="border-bottom:3x;color=#00c89e">Artikel </h3>
            <div class="sidebar-item categories">
            <?php if ($hasil_agenda == "NULL")
          
            echo "<h6>Data tidak tersedia</>";
            
            else{
            foreach($hasil_agenda as $row ) 
                {
              ?>
              <ul >
                <li><a href="<?php echo base_url() ?>user/detail_agenda/<?php echo $row->id_agenda ?>"><?php echo $row->judul_agenda ?><p style="margin-bottom:2px"><span><?php  $tgl = $row->tgl_agenda; echo date("d-F-Y", strtotime($tgl))  ?></span></p></a></li>
              </ul>
              <?php 
                }
                } ?>
            </div><!-- End sidebar categories-->
           

              <h3 class="sidebar-title">Tags</h3>
              <div class="sidebar-item tags">
                <ul>
                  <li><a href="<?php echo base_url() ?>user/sejarah">sejarah</a></li>
                  <li><a href="<?php echo base_url() ?>user/struktur">Struktur Organisasi</a></li>
                  <li><a href="<?php echo base_url() ?>user/fasilitas">Sarana dan Prasarana</a></li>
                  <li><a href="<?php echo base_url() ?>user/berita">Berita Sekolah</a></li>
                  <li><a href="<?php echo base_url() ?>user/agenda">Artikel</a></li>
                  <li><a href="<?php echo base_url() ?>user/pengumuman">Pengumuman</a></li>
                  <li><a href="<?php echo base_url() ?>user/guru">Guru</a></li>
                  <li><a href="<?php echo base_url() ?>user/staff">Staff Tata Usaha</a></li>
                  <li><a href="<?php echo base_url() ?>user/prestasi">Prestasi</a></li>
                  <li><a href="<?php echo base_url() ?>user/galeri">Galeri</a></li>
                </ul>
          
              </div><!-- End sidebar tags-->
            </div>
          </div>
        </div>
      </div><!-- End sidebar -->
    </div>
  </section>

			<!-- start footer Area -->		
			<?php $this->load->view('footer'); ?>
		</body>
