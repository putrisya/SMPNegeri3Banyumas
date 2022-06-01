<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<?php $this->load->view('header'); ?>
    <?php $this->load->view('/templates/header_admin'); ?>
	</head>

	<body>	
 <!-- ======= Contact Section ======= -->
 <div class="map-section">
      <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d988.8438466371881!2d109.29215478089517!3d-7.53397304979638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6544a37243dab3%3A0xc5af48f2d73cc8af!2sSMPN%203%20Banyumas!5e0!3m2!1sen!2sid!4v1613639685319!5m2!1sen!2sid" frameborder="0" allowfullscreen></iframe>
    </div>

    <section id="contact" class="contact">
      <div class="container">

        <div class="row justify-content-center" data-aos="fade-up">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="icofont-google-map"></i>
                  <h4>Alamat:</h4>
                  <p>Jl Raya Kejawar Km 1, KEJAWAR, Kec. Banyumas, Kab. Banyumas<br>Banumas, 53192</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="icofont-envelope"></i>
                  <h4>Email:</h4>
                  <p>smpn3banyumas@gmail.com<br>contact@example.com</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="icofont-phone"></i>
                  <h4>No Telepon:</h4>
                  <p>+1 5589 55488 51<br>+1 5589 22475 14</p>
                </div>
              </div>
            </div>

          </div>

        </div>

        <div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-10">
          <?php echo $this->session->flashdata('sukses'); ?>
            <form action= "<?php echo base_url()?>user/simpan_inbox" method="post" role="form" enctype="multipart/form-data">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" id="text-input" name="name" class="form-control" id="name" placeholder="Tuliskan nama lengkap Anda" data-rule="minlen:4" data-msg="Mohon untuk menuliskan minimal 4 karakter"required/>
                  <!-- <div class="validate"></div> -->
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Tuliskan alamat email Anda" data-rule="email" data-msg="Dimohon masukkan alamat email yang benar" required />
                  <!-- <div class="validate"></div> -->
                </div>
              </div> 
              <div class="form-group">
                <textarea class="form-control" name="pesan" rows="5" data-rule="required" data-msg="Mohon tuliskan pesan Anda" placeholder="Tuliskan pesan Anda" required></textarea>
                <!-- <div class="validate"></div> -->
              </div>
                              
             
                          <!-- <div class="mb-3">
                <div class="loading">Loading</div> -->
                <!-- <div class="error-message"></div> -->
                <!-- <div class="flash-data" data-flashdata=" "></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
             -->
                          <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm">
                            Kirim
                            </button> 
                            <!-- <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">  <i class="fa fa"></i> Kirim </button> -->
                          </div>
                        </form>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  
  <?php $this->load->view('js'); ?>


     <!-- Modal -->
<!-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Pesan Admistrator</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Terima Kasih Telah Mengirimkan Pesan Kepada Kami, Kami akan memabalas pesan melalui email yang telah Anda masukkan 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button> -->
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>     
         
  </main><!-- End #main -->
	
			<?php $this->load->view('footer'); ?>
		</body>
	</html>