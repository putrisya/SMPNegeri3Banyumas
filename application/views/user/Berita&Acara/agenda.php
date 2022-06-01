<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<?php $this->load->view('header'); ?>
	</head>
	<body>	
	<?php
        date_default_timezone_set("ASIA/JAKARTA");
    ?>

   <!-- ======= Breadcrumbs ======= -->
   <section id="breadcrumbs" class="breadcrumbs"  style="  background:black;">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Artikel</h2>
          <ol>
            <li><a href="<?php echo base_url() ?>user">Beranda</a></li>
            <li>Artikel</li>
          </ol>
        </div>
      </div>
    </section>
    <!-- End Breadcrumbs -->
<section id="blog" class="blog">
<div class="container">
  <div class="row">
    <div class="col-lg-8">
      <!-- ======= Blog Section ======= -->
          <div class="row">
          <?php if ($hasil_agenda1 == "NULL")
          
            echo "<h2 style='padding-left:2rem;'>Data tidak tersedia</h2>";
            
            else{
            foreach($hasil_agenda1 as $row ) 
              {
            ?>
              <div class="col-lg-6">
                <div class="entry" data-aos="fade-up">
                <div class="entry-img">
                  <img src="<?php echo base_url() ?><?php echo $row->gambar_agenda ?>" alt="" class="img-fluid">
                </div>

                <h2 class="entry-title">
                      <a href="blog-single.html"><?php echo $row->judul_agenda ?></a>
                    </h2>
                
                  <div class="entry-meta">
                    <ul>
                    <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="#"><?php echo $row->penulis_agenda ?></a></li>
                    <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="#"><?php $tgl = $row->tgl_agenda; echo date("d-F-Y", strtotime($tgl)) ?></time></a></li>
                    </ul>
                  </div>
                
                  <div class="entry-content">
                      <p style="font-size:14px">
                        <?php echo substr ($row->isi_agenda,0,150)?> ............................
                      </p>
                      <div class="read-more">
                        <a href="<?php echo base_url() ?>user/detail_agenda/<?php echo $row->id_agenda ?>">Selengkapnya</a>
                      </div>
                    </div>
                </div>
              </div>
              <?php 
              }
                } ?>
          </div>
          <?= $this->pagination->create_links(); ?>
    </div>
  

    <div class="col-lg-4"style="padding-right:10px">
          <div class="sidebar" data-aos="fade-left">
            <h3 class="sidebar-title" style="border-bottom:5x;color:black;">Pengumuman</h3>
            <div class="sidebar-item categories">
              <?php if ($hasil_pengumuman == "NULL")
                
                echo "<h6>Data tidak tersedia</h6>";
                
                else{
                foreach($hasil_pengumuman as $row ) 
                {
              ?>
                <ul >
                <li><a href="<?php echo base_url() ?>user/detail_pengumuman/<?php echo $row->id_pengumuman ?>"><?php echo $row->judul_pengumuman ?><p style="margin-bottom:2px"><span><?php $tgl = $row->tgl_pengumuman; echo date("d-F-Y", strtotime($tgl)) ?></span></p></a></li>
                </ul>
                <?php 
                }
                } ?>
              </div><!-- End sidebar categories-->

            <h3 class="sidebar-title">Berita Terbaru</h3>
            <div class="sidebar-item recent-posts">
            <?php if ($hasil_berita == "NULL")
        
              echo "<h6>Data tidak tersedia</h6>";
              
              else{
            foreach($hasil_berita as $row ) 
                {
              ?>
              <div class="post-item clearfix">
                <img src="<?php echo base_url() ?><?php echo $row->gambar_berita ?>" alt="">
                <h4><a href="<?php echo base_url() ?>user/detail_berita/<?php echo $row->id_berita ?>"><?php echo $row->judul_berita ?></a></h4>
                <time datetime="2020-01-01"><?php $tgl = $row->tgl_berita; echo date("d-F-Y", strtotime($tgl)) ?></time>
              </div>
              <?php
                }
                } ?>
              </div><!-- End sidebar recent posts-->

              <h3 class="sidebar-title" style="border-bottom:3x;color=#00c89e">Artikel</h3>
            <div class="sidebar-item categories">
            <?php if ($hasil_agenda == "NULL")
        
              echo "<h6>Data tidak tersedia</h6>";
              
              else{
            foreach($hasil_agenda as $row ) 
                {
              ?>
              <ul >
                <li><a href="<?php echo base_url() ?>user/detail_agenda/<?php echo $row->id_agenda ?>"><?php echo $row->judul_agenda ?><p style="margin-bottom:2px"><span><?php $tgl = $row->tgl_agenda; echo date("d-F-Y", strtotime($tgl)) ?></span></p></a></li>
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
              </div>
        </section><!-- End Blog Section -->
              </div>
      </div>
  </div>



          
         
  </main><!-- End #main -->
	
			<?php $this->load->view('footer'); ?>
		</body>
	</html>