
<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<?php $this->load->view('header'); ?>
	</head>
	<body>
          <?php
        date_default_timezone_set("ASIA/JAKARTA");
    ?>
          

<!-- start content sejarah  -->
		
<!-- ======= About Us Section ======= -->
  <section id="blog" class="blog">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-lg-8" style="padding-right: 50px;">
          <div class="content d-flex flex-column justify-content-center">
            <h3 data-aos="fade-up">Sejarah SMP Negeri 3 Banyumas</h3>
              <img src="https://www.panggon.com/wp-content/uploads/2014/09/SMP-Negeri-3-Banyumas.jpg" style="center center no-repeat;width:100%" data-aos="fade-left">
                <p data-aos="fade-up" style="text-align:justify;padding-top:40px">
                  Taman Siswa (Taman berarti tempat bermain atau tempat belajar, dan Siswa berarti murid) adalah nama sekolah yang didirikan oleh Ki Hadjar Dewantara pada tanggal 3 Juli tahun 1922 di Yogyakarta .Pada waktu pertama kali didirikan, sekolah Taman Siswa ini diberi nama "National Onderwijs Institut Taman Siswa", yang merupakan realisasi gagasan dia bersama-sama dengan teman di paguyuban Sloso Kliwon. Sekolah Taman Siswa ini sekarang berpusat di balai Ibu Pawiyatan (Majelis Luhur) di Jalan Taman Siswa, Yogyakarta, dan mempunyai 129 sekolah cabang di berbagai kota di seluruh Indonesia.

                  Prinsip dasar dalam sekolah/pendidikan Taman Siswa yang menjadi pedoman bagi seorang guru dikenal sebagai Patrap Triloka. Konsep ini dikembangkan oleh Suwardi setelah ia mempelajari sistem pendidikan progresif yang diperkenalkan oleh Maria Montessori (Italia) dan Rabindranath Tagore (India/Benggala). Patrap Triloka memiliki unsur-unsur (dalam bahasa Jawa)
                  <br>
                  ing ngarsa sung tulada (ꦲꦶꦁꦔꦂꦱ​ꦱꦸꦁ​ꦠꦸꦭ​ꦝ​, "(yang) di depan memberi teladan"),
                  
                  ing madya mangun karsa (ꦲꦶꦁꦩ​ꦢꦾ​ꦩꦔꦸꦤ꧀ꦏꦂꦱ​, "(yang) di tengah membangun kemauan/inisiatif"),
                
                  tut wuri handayani (ꦠꦸꦠ꧀ꦮꦸꦫꦶꦲ​ꦤ꧀ꦢ​ꦪ​ꦤꦶ, "dari belakang mendukung").
                  
                  Patrap Triloka dipakai sebagai panduan dan pedoman dalam dunia pendidikan di Indonesia.
                </p>
          </div>
        </div>
      		  <!-- sidebar -->
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

            <h3 class="sidebar-title" style="border-bottom:3x;color=#00c89e">Agenda Sekolah</h3>
            <div class="sidebar-item categories">
            <?php if ($hasil_agenda == "NULL")
        
            echo "<h6>Data tidak tersedia</h6>";
            
            else{
            foreach($hasil_agenda as $row ) 
                {
              ?>
              <ul >
                <li><a href="<?php echo base_url() ?>user/detail_agenda/<?php echo $row->id_agenda ?>"><?php echo $row->judul_agenda ?><p style="margin-bottom:2px"><span><?php  $tgl = $row->tgl_agenda; echo date("d-F-Y", strtotime($tgl)) ?></span></p></a></li>
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
                  <li><a href="<?php echo base_url() ?>user/agenda">Agenda Sekolah</a></li>
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
      </div><!-- End sidebar -->s
    </div>
  </section>

			<!-- start footer Area -->		
			<?php $this->load->view('footer'); ?>
		</body>
	</html>