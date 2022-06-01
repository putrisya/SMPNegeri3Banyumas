
<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<?php $this->load->view('header'); ?>
	</head>
	<body>	
	
	 <?php
        date_default_timezone_set("ASIA/JAKARTA");
    ?>
		 
  <!-- ======= Hero Section ======= -->

  <!-- content -->
  
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(https://cdn-2.tstatic.net/tribunnews/foto/bank/images/ilustrasi-siswa-siswi-smp.jpg);">
          <div class="carousel-container">
            <div class=" animate__animated animate__fadeInUp">
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(https://www.blorakab.go.id/resource/doc/post/190828200000TARI-.JPG);">
          <div class="carousel-container">
            <div class="animate__animated animate__fadeInUp">
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(https://www.blorakab.go.id/resource/doc/post/190828200000TARI-.JPG);">
          <div class="carousel-container">
            <div class="animate__animated animate__fadeInUp">
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-left-arrow" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-right-arrow" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Cta Section ======= -->



    <!-- content -->
<div class="container">
  <div class="row">
    <div class="col-lg-5 col-md-6" style="back-shadow:5px 5px 8px;padding-left:40px;">
      <section id="testimonials" class="testimonials">
        
        <div class="section-title" data-aos="fade-up">
          <h3 style="border-bottom:3px solid #00c89e;font-style:sans-serif;padding-bottom:10px;color:black"> Video Profil Sekolah </h3>
            <br>
              <a href="pages/post1.html" class="card rounded shadow-sm text-dark">
              <iframe width="420" height="315"
                  src="https://www.youtube.com/embed/LPEmdJs2whk">
              </iframe>
                <div class="card-body">
                  <p class="card-text mt-2">
                   SMP Negeri 3 Banyumas adalah salah satu sekolah menengah pertama di kabupaten Banyumas
                  </p>
                </div>
              </a>
        </div>
      </section>
    </div>
   
    <div class="col-lg-7" style="back-shadow:5px 5px 8px;padding-left:40px;">
      <div class="section-title" data-aos="fade-up">
        <h3 style="border-bottom:3px solid #00c89e;font-style:sans-serif;padding-bottom:10px;color:black;margin-top: 60px;"> Pengumuman </h3>
          <br>
        <section id="blog" class="blog" style="padding: 0px 0 0px 0;">
             <?php if ($hasil_pengumuman == "NULL")
        
            echo "<h6>Data tidak tersedia</h6>";
            
            else{
         foreach($hasil_pengumuman as $row ) 
                {
              ?>
        <div class="entry" style="padding: 2px;">
          <div class="panel panel-default"style="box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.25);position: relative;margin-bottom: 0;border: 0;border-radius: 0">
            <div class="panel-image" style="position: relative;border-bottom: 2px solid transparent;text-align:center">
              <div class="dat_lable" style="    position: absolute;font-size: 10px;color: #fff;padding: 0;background-color: #159142;bottom: -55px;right: 0;width: 100px;height: 60px;text-align: center">
                <h4 style="margin: 20 0 12px;font-size: 12px;font-weight: bold; display:flex;justify-content: center; padding-top:25px "> <?php $tgl = $row->tgl_pengumuman; echo date("d-F-Y", strtotime($tgl)) ?> </h4>
              </div>
            </div>
            <div class="panel-body" style="padding: 10px;">
              <div class="entry-meta">
                <div class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html"><?php echo $row->penulis_pengumuman ?></a></li>
                </div>
                <br>
              </div>
              <h3 class="sec_titl" style="font-family: Muli, sans-serif; font-size:20px; margin-right:10px;text-transform: uppercase;
                color: black;margin-bottom: 20px;"><?php echo $row->judul_pengumuman ?></h3>
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
  </div>
</div>

<!-- berita -->

 <!-- ======= Blog Section ======= -->
 <section id="blog" class="blog" style="padding-top:0px">
    <div class="container">
      <div class="row justify-content-center mb-10 pb-8" data-aos="fade-up">
            <h3 style="color:black;border-bottom:3px solid #00c89e;padding-bottom:10px">Berita Terbaru</h3>
        </div>
        <br>
        <div class="row" data-aos="fade-up">
            <?php if ($hasil_berita == "NULL")
        
            echo "<h2 align='center'>Data tidak tersedia</h2></center>";
            
            else{
        foreach($hasil_berita as $row ) 
                {
                  
              ?>
               
          <div class="col-lg-4 entries">
            <article class="entry" data-aos="fade-up">
              <div class="entry-img">
                <img src="<?php echo base_url() ?><?php echo $row->gambar_berita ?>" alt="" class="img-fluid">
              </div>
              <h2 class="entry-title" style="text-align:justify">
                <a href="#"><?php echo $row->judul_berita ?></a>
              </h2>
              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html"><?php echo $row->penulis_berita ?></a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01"><?php $tgl = $row->tgl_berita; echo date("d-F-Y", strtotime($tgl))  ?></time></a></li>
                 
                </ul>
              </div>
              <div class="entry-content">
                <p>
                <?php echo substr ($row->isi_berita,0,150)?> ............................
                </p>
                <div class="read-more">
                  <a href="<?php echo base_url() ?>user/detail_berita/<?php echo $row->id_berita ?>">Selengkapnya</a>
                <?php $this->db->limit(3); ?>
                </div>
              </div>
            </article><!-- End blog entry -->
          </div>
          
          <?php 
                }
                } ?>
          </div>
    </section><!-- End About Us Section -->

    <!-- ======= Blog Section ======= -->
 <section id="blog" class="blog" style="padding-top:0px">
    <div class="container">
      <div class="row justify-content-center mb-10 pb-8" data-aos="fade-up">
            <h3 style="color:black;border-bottom:3px solid #00c89e;padding-bottom:10px">Artikel Terbaru</h3>
        </div>
        <br>
        <div class="row" data-aos="fade-up">
            <?php if ($hasil_agenda == "NULL")
        
            echo "<h2 align='center'>Data tidak tersedia</h2></center>";
            
            else{
        foreach($hasil_agenda as $row ) 
                {
                  
              ?>
               
          <div class="col-lg-4 entries">
            <article class="entry" data-aos="fade-up">
              <div class="entry-img">
                <img src="<?php echo base_url() ?><?php echo $row->gambar_agenda ?>" alt="" class="img-fluid">
              </div>
              <h2 class="entry-title" style="text-align:justify">
                <a href="#"><?php echo $row->judul_agenda ?></a>
              </h2>
              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html"><?php echo $row->penulis_agenda ?></a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01"><?php $tgl = $row->tgl_agenda; echo date("d-F-Y", strtotime($tgl))  ?></time></a></li>
                 
                </ul>
              </div>
              <div class="entry-content">
                <p>
                <?php echo substr ($row->isi_agenda,0,150)?> ............................
                </p>
                <div class="read-more">
                  <a href="<?php echo base_url() ?>user/detail_berita/<?php echo $row->id_agenda ?>">Selengkapnya</a>
                <?php $this->db->limit(3); ?>
                </div>
              </div>
            </article><!-- End blog entry -->
          </div>
          
          <?php 
                }
                } ?>
          </div>
    </section><!-- End About Us Section -->

   

 <!-- Contact Section Begin -->
 <!-- <section class="contact-section" style=" position: relative;
    background: #f7f7f7;
    height: 450px;">
        <div class="container" style="    max-width: 1170px;">
            <div class="row">
                <div class="col-lg-6">
                <h1>Kontak Kami</h1>
                    <div class="contact-info" style="padding-top: 10px;">
                        <div class="ci-item" style=" overflow: hidden;margin-bottom: 40px;">
                             <div class="ci-icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="ci-text" >
                                <h5>Alamat</h5>
                                <p>Jl Raya Kejawar Km 1, KEJAWAR, Kec. Banyumas, Kab. Banyumas</p>
                            </div>
                        </div>
                        <div class="ci-item">
                            <div class="ci-icon">
                                <i class="fa fa-mobile"></i>
                            </div>
                            <div class="ci-text">
                                <h5>Nomor</h5>
                               <ul>
                                    <p>125-711-811</p>
                                   </ul>
                                
                            </div>
                        </div>
                        <div class="ci-item">
                            <div class="ci-icon">
                                <i class="fa fa-headphones"></i>
                            </div>
                            <div class="ci-text">
                                <h5>Email</h5>
                                <p>spentimas23@yahoo.co.id</p>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <div class="cs-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d988.8438466371881!2d109.29215478089517!3d-7.53397304979638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6544a37243dab3%3A0xc5af48f2d73cc8af!2sSMPN%203%20Banyumas!5e0!3m2!1sen!2sid!4v1613639685319!5m2!1sen!2sid" 
                height="450" style="border:0;" allowfullscreen=""></iframe>
        </div>
        
    </section> -->
    <!-- Contact Section End -->

  </main><!-- End #main -->

  <!-- start footer Area -->		
  <?php $this->load->view('footer'); ?>
</body>
</html>