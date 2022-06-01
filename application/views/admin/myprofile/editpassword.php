<?php $this->load->view('/templates/header_admin'); ?>
<body>
    
        <?php
            $this->load->view('menu');
        ?>
    

        <div class="content mt-12">
            <div class="animated fadeIn">
            <?=$this->session->flashdata('message')?>
                <div class="row">
                <div class="col-md-8">
                    <a href="<?php echo base_url()?>admin/admin_profile"><button class="btn btn-info">Kembali</button></a><br><br>
                </div>
                                
                <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>Ganti</strong> Password
                      </div>
                      <div class="card-body card-block">
                     
                        <form action="<?php echo base_url()?>admin/update_password" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <!-- <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Username</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="username" value="<?=$username?>" name="username" class="form-control" read-only>
                                </div>
                            </div> -->
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Password Lama</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="password" id="current_password"  name="current_password" placeholder="Masukkan password lama" class="form-control" required>
                                    <?= form_error('current_password', '<small class="text-danger pl-3">','</small>')?>
                                </div>
                              
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Password Baru</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="password" id="new_password"  name="new_password" placeholder="Masukkan password baru" class="form-control" required>
                                    <?= form_error('new_password', '<small class="text-danger pl-3">','</small>')?>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Konfirmasi Password</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="password" id="konf_password"  name="konf_password" placeholder="Tuliskan kembali password baru" class="form-control" required>
                                    <?= form_error('konf_password', '<small class="text-danger pl-3">','</small>')?>
                                </div>
                            </div> 
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Simpan
                                </button>
                            </div>
                        </form>
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


