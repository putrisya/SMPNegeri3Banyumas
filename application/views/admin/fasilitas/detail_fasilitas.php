<?php $this->load->view('/templates/header_admin'); ?>
</head>
<body>
   
        <?php
            $this->load->view('menu');
        ?>
    

        <div class="content mt-12">
            <div class="animated fadeIn">
                <div class="row">
                <div class="col-md-8">
                    <a href="<?php echo base_url()?>admin/fasilitas"><button class="btn btn-info">Kembali</button></a><br><br>
                </div>
                
                <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>Detail</strong> Fasilitas
                      </div>
                      <div class="card-body card-block">
                         <h4 style="text-align:center"><?php echo $judul_fasilitas ?></h4><br>
                         <img style=" display: block;margin-left: auto;margin-right: auto;" src="<?php echo base_url()?><?php echo $gambar_fasilitas ?>" width="300">
                         <p style="text-align:justify"><?php echo $isi_fasilitas ?></p>
                        
                    </div>
                </div>
                </div>
            </div><!-- .animated -->
        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <?php $this->load->view('js'); ?>

    <section>
   <div class="modal fade" id="modalLogout">
        <div class="modal-dialog" >
            <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title">Yakin untuk keluar dari akun ini?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-footer">
                <form id="formLogout" action="" method="post">
                    <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-danger" type="submit">keluar</button>
                </form>
            </div>
        </div>
    </div>
</section>
    
</body>
</html>
