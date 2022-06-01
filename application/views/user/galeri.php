<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<?php $this->load->view('header'); ?>
	</head>
	<body>
          	
			<!-- Start popular-course Area -->

		 <!-- ======= Breadcrumbs ======= -->
		 <section id="breadcrumbs" class="breadcrumbs"  style="  background:black;">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Galeri</h2>
          <ol>
            <li><a href="<?php echo base_url() ?>user">Beranda</a></li>
            <li>Geleri</li>
          </ol>
        </div>
      </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->

    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              
            </ul>
          </div>
        </div>

		<!-- Kegiatan Sekolah -->
        <div class="row portfolio-container" data-aos="fade-up">
        <?php if ($hasil_galeri == "NULL")
        
        echo "<h2 style='padding-left:2rem;'>Data tidak tersedia</h2>";
        
        else{
			foreach($hasil_galeri as $row) 
                {
            ?>
			<div class="col-lg-4 col-md-6 portfolio-item filter-app">
				<img src="<?php echo base_url() ?><?php echo $row->berkas ?>" class="img-fluid" style="box-shadow:3px 3px 5px" alt="">
				<div class="portfolio-info">
					<h4><?php echo $row->deskripsi ?></h4>
					<a href="<?php echo base_url() ?><?php echo $row->berkas ?>" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
				</div>
			</div>
			<?php 
                }
				} ?>
		</div>

		
        </div>

      </div>
    </section><!-- End Portfolio Section -->


			<!-- End popular-course Area -->

			<?php $this->load->view('footer'); ?>
		</body>
	</html>