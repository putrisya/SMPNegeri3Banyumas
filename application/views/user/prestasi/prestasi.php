<!DOCTYPE html>
	<html lang="zxx" class="no-js">
		
	<head>
		<?php $this->load->view('header'); ?>
	</head>
	<body>	
		<?php
        date_default_timezone_set("ASIA/JAKARTA");
    ?>
    
			<!-- Start popular-course Area -->
<section id="blog" class="blog" style="background-color:#eeeeee">
    <div class="container" style="max-width: 1300px;">
      	<div class="row no-gutters">
			<div class="col-md-8" style="background-color:white;border-radius:0.30rem" data-aos="fade-left">
				<div class="title text-center" style="padding-top:2rem;">
					<h1 class="mb-10">Data Prestasi</h1>
					<p>SMP N 3 Banyumas</p>
				</div>
				
				<table id="bootstrap-data-table" class="table table-striped table-bordered" style="text-align:center">
					<thead>
						<tr>
						<th>No</th>
						<th>foto</th>
						<th>Nama</th>
						<th>Juara</th>
						<th>Perlombaan</th>
						<th>Tingkat</th>
						<th>Tahun</th>
						</tr>
					</thead>
					<tbody>
					<?php $no = 0; foreach($data_prestasi as $row) 
					{ 
						$no++;
					?>
						<tr>
						<td><?php echo $no; ?></td>
						<td><img src="<?php echo base_url(); ?><?php echo $row['gambar_pres']; ?>" width="100"></td>
						<td><?php echo $row['nama_pres']; ?></td>
						<td><?php echo $row['juara_pres']; ?></td>
						<td><?php echo $row['lomba_pres']; ?></td>
						<td><?php echo $row['tingkat_pres']; ?></td>
						<td><?php echo $row['tahun_pres']; ?></td>
						</tr>
					<?php 
					} ?>
					</tbody>
				</table>
			</div>
			<?php $this->load->view('js'); ?>	
			
			
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
                <time datetime="2020-01-01"><?php   $tgl = $row->tgl_berita; echo date("d-F-Y", strtotime($tgl))  ?></time>
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
	</html>s