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
          <h2>Pengumuman</h2>
          <ol>
            <li><a href="<?php echo base_url() ?>user">Beranda</a></li>
            <li>Pengumuman</li>
          </ol>
        </div>
      </div>
    </section>
    <!-- End Breadcrumbs -->
	
	<!-- Start popular-course Area -->
<section id="blog" class="blog">
	<div class="container">
		<div class="row">
		<div class="col-lg-8" style="back-shadow:5px 5px 8px;padding-left:40px;">
      <div class="section-title" data-aos="fade-up">
        
        <section id="blog" class="blog" style="padding: 0px 0 0px 0;">
        <?php if ($hasil_pengumuman1 == "NULL")
        
        echo "<h2 style='text:bold'>Data tidak tersedia</h2>";
        
        else{
        foreach($hasil_pengumuman1 as $row ) 
                {
              ?>
        <div class="entry" style="padding: 2px;margin-bottom:30px">
          <div class="panel panel-default"style="box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.25);position: relative;margin-bottom: 0;border: 0;border-radius: 0">
            <div class="panel-image" style="position: relative;border-bottom: 2px solid transparent;text-align:center">
              <div class="dat_lable" style="position: absolute;font-size: 10px;color: #fff;padding: 0;background-color: #159142;bottom: -45px;right: 0;width: 120px;height: 45px;text-align: center">
                <h4 style="margin: 20 0 12px;font-size: 12px;font-weight: bold; display:flex;justify-content: center; padding-top: 15px;
          padding-bottom: 15px; "> <?php  $tgl = $row->tgl_pengumuman; echo date("d-F-Y", strtotime($tgl)) ?> </h4>
              </div>
            </div>
            <div class="panel-body" style="padding: 10px;">
              <div class="entry-meta" style="margin-bottom:0px">
                <div class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html"><?php echo $row->penulis_pengumuman ?></a></li>
                </div>
                <br>
              </div>
              <h3 class="sec_titl" style="font-family: Muli, sans-serif; font-size:17px; margin-right:10px;text-transform: uppercase;
                color: black;margin-bottom: 10px;"><?php echo $row->judul_pengumuman ?></h3>
              <div class="entry-content">
                <div class="read-more"style="    text-align-last: center;">
                  <a href="<?php echo base_url() ?>user/detail_pengumuman/<?php echo $row->id_pengumuman ?>">Selengkapnya</a>
                </div>
              </div>
            </div>				
          </div>
        </div>
          <?php 
                }
                } ?>
		</section>
		</div>
    <?= $this->pagination->create_links(); ?>
    
	</div><!-- End blog entries list -->

			<!-- sidebar -->
			<div class="col-lg-4"style="padding-right:10px">
          <div class="sidebar" data-aos="fade-left">
            <h3 class="sidebar-title" style="border-bottom:5x;color:black;">Pengumuman Sekolah</h3>
            <div class="sidebar-item categories">
            <?php if ($hasil_pengumuman == "NULL")
        
            echo "<h6>Data tidak tersedia</h6>";
            
            else{
            foreach($hasil_pengumuman as $row ) 
                {
              ?>
              <ul >
                <li><a href="<?php echo base_url() ?>user/detail_pengumuman/<?php echo $row->id_pengumuman ?>"><?php echo $row->judul_pengumuman ?><p style="margin-bottom:2px"><span><?php  $tgl = $row->tgl_pengumuman; echo date("d-F-Y", strtotime($tgl))  ?></span></p></a></li>
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
                <time datetime="2020-01-01"><?php  $tgl = $row->tgl_berita; echo date("d-F-Y", strtotime($tgl)) ?></time>
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
                <li><a href="<?php echo base_url() ?>user/detail_agenda/<?php echo $row->id_agenda ?>"><?php echo $row->judul_agenda ?><p style="margin-bottom:2px"><span><?php  $tgl = $row->tgl_agenda; echo date("d-F-Y", strtotime($tgl))?></span></p></a></li>
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
	</html>