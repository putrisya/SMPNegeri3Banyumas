<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<?php $this->load->view('header'); ?>
	</head>
	<body>			
			<!-- Start popular-course Area -->
<section id="blog" class="blog">
    <div class="container" style="    max-width: 1300px;">
      	<div class="row no-gutters">
			<div class="col-lg-8" style="padding-right: 50px;" data-aos="fade-left">
				<div class="title text-center">
					<h1 class="mb-10">Data Prestasi</h1>
					<p>SMP N 3 Banyumas</p>
				</div>
				<table id_guru="bootstrap-data-table" class="table table-striped table-bordered">
					<thead>
						<tr>
						<th>No</th>
						<th>foto</th>
						<th>Nama</th>
						<th>Juara</th>
						<th>Perlombaan</th>
                        <th>Tingkat Perlombaan</th>
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
						<td><img src="https://id.visafoto.com/img/docs2/zz_30x40.jpg" width="120"></td>
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
			
		<!-- sidebar -->
			<div class="col-lg-4"style="padding-right:10px;padding-left:10px">
				<div class="sidebar" data-aos="fade-left">
					<h3 class="sidebar-title">Search</h3>
					<div class="sidebar-item search-form">
					<form action="">
						<input type="text">
						<button type="submit"><i class="icofont-search"></i></button>
					</form>
					</div><!-- End sidebar search formn-->
					<h3 class="sidebar-title">Pengumuman</h3>
					<div class="sidebar-item categories">
					<ul >
						<li><a href="#">Pengumuman pengambilan rapot siswa angkatan 2020/2021<p style="margin-bottom:2px"><span>11 januari 2020</span></p></a></li>
						<li><a href="#">Pengumuman pengambilan rapot siswa angkatan 2020/2021<p style="margin-bottom:2px"><span>11 januari 2020</span></p></a></li>
						<li><a href="#">Pengumuman pengambilan rapot siswa angkatan 2020/2021<p style="margin-bottom:2px"><span>11 januari 2020</span></p></a></li>
						<li><a href="#">Pengumuman pengambilan rapot siswa angkatan 2020/2021<p><span>11 januari 2020</span></p></a></li>
					</ul>
					</div><!-- End sidebar categories-->

					<h3 class="sidebar-title">Berita Terbaru</h3>
					<div class="sidebar-item recent-posts">
					<div class="post-item clearfix">
						<img src="https://www.panggon.com/wp-content/uploads/2014/09/SMP-Negeri-3-Banyumas.jpg" alt="">
						<h4><a href="blog-single.html">Nihil blanditiis at in nihil autem</a></h4>
						<time datetime="2020-01-01">Jan 1, 2020</time>
					</div>

					<div class="post-item clearfix">
						<img src="https://www.panggon.com/wp-content/uploads/2014/09/SMP-Negeri-3-Banyumas.jpg" alt="">
						<h4><a href="blog-single.html">Quidem autem et impedit</a></h4>
						<time datetime="2020-01-01">Jan 1, 2020</time>
					</div>

					<div class="post-item clearfix">
						<img src="https://www.panggon.com/wp-content/uploads/2014/09/SMP-Negeri-3-Banyumas.jpg" alt="">
						<h4><a href="blog-single.html">Id quia et et ut maxime similique occaecati ut</a></h4>
						<time datetime="2020-01-01">Jan 1, 2020</time>
					</div>

					<div class="post-item clearfix">
						<img src="https://www.panggon.com/wp-content/uploads/2014/09/SMP-Negeri-3-Banyumas.jpg" alt="">
						<h4><a href="blog-single.html">Laborum corporis quo dara net para</a></h4>
						<time datetime="2020-01-01">Jan 1, 2020</time>
					</div>

					<div class="post-item clearfix">
						<img src="https://www.panggon.com/wp-content/uploads/2014/09/SMP-Negeri-3-Banyumas.jpg" alt="">
						<h4><a href="blog-single.html">Et dolores corrupti quae illo quod dolor</a></h4>
						<time datetime="2020-01-01">Jan 1, 2020</time>
					</div>

					</div><!-- End sidebar recent posts-->

					<h3 class="sidebar-title" style="border-bottom:3x;color=#00c89e">Agenda Sekolah</h3>
					<div class="sidebar-item categories">
					<ul >
						<li><a href="#">Pengumuman pengambilan rapot siswa angkatan 2020/2021<p style="margin-bottom:2px"><span>11 januari 2020</span></p></a></li>
						<li><a href="#">Pengumuman pengambilan rapot siswa angkatan 2020/2021<p style="margin-bottom:2px"><span>11 januari 2020</span></p></a></li>
						<li><a href="#">Pengumuman pengambilan rapot siswa angkatan 2020/2021<p style="margin-bottom:2px"><span>11 januari 2020</span></p></a></li>
						<li><a href="#">Pengumuman pengambilan rapot siswa angkatan 2020/2021<p><span>11 januari 2020</span></p></a></li>
					</ul>
					</div><!-- End sidebar categories-->

					<h3 class="sidebar-title">Tags</h3>
					<div class="sidebar-item tags">
						<ul>
						<li><a href="#">App</a></li>
						<li><a href="#">IT</a></li>
						<li><a href="#">Business</a></li>
						<li><a href="#">Business</a></li>
						<li><a href="#">Mac</a></li>
						<li><a href="#">Design</a></li>
						<li><a href="#">Office</a></li>
						<li><a href="#">Creative</a></li>
						<li><a href="#">Studio</a></li>
						<li><a href="#">Smart</a></li>
						<li><a href="#">Tips</a></li>
						<li><a href="#">Marketing</a></li>
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