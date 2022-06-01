
	<?php $this->load->view('/templates/header_admin'); ?>

<body>
   
        <?php
            $this->load->view('menu');
        ?>
    <?php
        date_default_timezone_set("ASIA/JAKARTA");
    ?>

        <div class="content mt-12">
            <div class="animated fadeIn">
                <div class="row">
                <div class="col-md-8">
                    <a href="<?php echo base_url()?>admin/agenda"><button class="btn btn-info">Kembali</button></a><br><br>
                </div>
                
                <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>Detail</strong> Artikel
                      </div>
                      <div class="card-body card-block">
                         <h4 style="text-align:center"><?php echo $judul_agenda ?></h4><br>
                         <img style="display: block;margin-left: auto;margin-right: auto;" src="<?php echo base_url()?><?php echo $gambar_agenda ?>" width="700" height="300" text-align="center">
                         <p style="text-align:justify"><?php echo $isi_agenda ?></p>
                         <p><small><i>Penulis: <b><?php echo $penulis_agenda ?></b></small></i><br>
                         <small><i>Diposkan pada: <b><?php $tgl = $tgl_agenda; echo date("d-F-Y", strtotime($tgl)) ?></b></small></i></p>
                    </div>
                </div>
                </div>
            </div>
        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <?php $this->load->view('js'); ?>

    <section>
   <div class="modal fade" id="modalLogout" style="">
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
<section>
    
</body>
</html>
