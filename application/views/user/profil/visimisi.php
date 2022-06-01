
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
          <div class="content d-flex flex-column justify-content-center">
            <h3 style="font-size=60px"data-aos="fade-up">Visi Misi SMP Negeri 3 Banyumas</h3>
              <img src="https://lh3.googleusercontent.com/proxy/c8weZuMRDfgeTzyw7oeZdxoePiMNYdDnvV92lsvHIE5vfFSaiwj-Rsb2Y0fuO5EI761FHNtpPGbuIo9SG8D0q8xxixw7PJSSfUuvxAREa7f9-KaQ" style="center center no-repeat;width:100%" data-aos="fade-left">
                <p data-aos="fade-up" style="text-align:justify;padding-top:40px">
					<h2 class="mb-3" style="text-align:center" data-aos="fade-up">Visi SMP Negeri 3 Banyumas</h2>
					<p class="text-center" data-aos="fade-up">Bertaqwa, berprestasi, dan berketrampilan..</p>
					<br>
					<h2 class="mb-3" style="text-align:center" data-aos="fade-up">Misi SMP Negeri 3 Banyumas</h2>
					<ol class="text-left pl-4" style="text-align:left;padding-left:1.5rem" data-aos="fade-up">
						<li>Melaksanakan pembelajaran secara aktif, kreatif efektif dan menyenangkan dengan pendekatan ICT</li> 
						<li>Mewujudkan layanan bimbingan siswa secara intensif, agar semua siswa dapat mengembangkan prestasi secara maksimal</li> 
						<li>menyediakan segala fasilitas pendidikan yang diperlukan oleh semua warga sekolah guna terselenggaranya prestasi sekolah secara maksimal dan berwawasan ke depan yang mampu menjawab tantangan global</li>
						<li>ewujudkan semua warga sekolah senantiasa mengedepankan iman dan taqwa serta santun dalam bertindak didalam segala aspek kehidupan warga sekolah</li>
						
					</ol>
                </p>
          </div>
        </div>
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
                <li><a href="<?php echo base_url() ?>user/detail_pengumuman/<?php echo $row->id_pengumuman ?>"><?php echo $row->judul_pengumuman ?><p style="margin-bottom:2px"><span><?php   $tgl = $row->tgl_pengumuman; echo date("d-F-Y", strtotime($tgl))  ?></span></p></a></li>
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
                <time datetime="2020-01-01"><?php   $tgl = $row->tgl_berita; echo date("d-F-Y", strtotime($tgl)) ?></time>
              </div>
              <?php
                }
                } ?>
              </div><!-- End sidebar recent posts-->

            <h3 class="sidebar-title" style="border-bottom:3x;color=#00c89e">Artikel </h3>
            <div class="sidebar-item categories">
            <?php if ($hasil_agenda == "NULL")
        
            echo "<h6>Data tidak tersedia</h6>";
            
            else{
            foreach($hasil_agenda as $row ) 
                {
              ?>
              <ul >
                <li><a href="<?php echo base_url() ?>user/detail_agenda/<?php echo $row->id_agenda ?>"><?php echo $row->judul_agenda ?><p style="margin-bottom:2px"><span><?php   $tgl = $row->tgl_agenda; echo date("d-F-Y", strtotime($tgl)) ?></span></p></a></li>
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
                  <li><a href="<?php echo base_url() ?>user/agenda">Artikel </a></li>
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
  
  </section>
      </main>

			<!-- start footer Area -->		
			<?php $this->load->view('footer'); ?>
		</body>
