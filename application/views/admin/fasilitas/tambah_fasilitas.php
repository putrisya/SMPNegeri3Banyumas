<?php $this->load->view('/templates/header_admin'); ?>
<body>
   
        <?php
            $this->load->view('menu');
        ?>
    

        <div class="content mt-12">
            <div class="animated fadeIn">
                <div class="row">
                <div class="col-md-8">
                    <a href="<?php echo base_url()?>admin/fasilitas/fasilitas"><button class="btn btn-info">Kembali</button></a><br><br>
                </div>
               
                
                <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">
                      <?=$this->session->flashdata('message')?> 
                        <strong>Tambah</strong> Fasilitas
                       
                      </div>
                      <div class="card-body card-block">
                        <form action="<?php echo base_url()?>admin/simpan_fasilitas" method="post" enctype="multipart/form-data" class="form-horizontal">
                              <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Judul</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="judul" placeholder="judul" class="form-control" required>
                                </div>
                              </div>

                              <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Isi fasilitas </label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <textarea class="form-control" name="isi" rows="15" required></textarea>
                                    <?= form_error('current_password', '<small class="text-danger pl-3">','</small>')?>
                                    <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
                                </div>
                              </div>

                               <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Gambar</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="file" id="text-input" name="gambar" class="form-control" required>
                                    <small style="color:red">* ukuran gambar maksimal 2 mb</small>
                                </div>
                              </div>
                              
                          </div>
                          <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm">
                              <i class="fa fa-dot-circle-o"></i> Tambah
                            </button>
                            <button type="reset" class="btn btn-danger btn-sm">
                              <i class="fa fa-ban"></i> Reset
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

    <script>
        var editor=CKEDITOR.replace('isi');
        CKEDITOR.config.extraPlugins='colorbutton';
        CKFinder.setupCKEditor(editor);
        $("form").submit( function(e) {
            var messageLength = CKEDITOR.instances['isi'].getData().replace(/<[^>]*>/gi, '').length;
            if( !messageLength ) {
                alert( 'Isi Fasilitas Tidak Boleh Kosong!' );
                e.preventDefault();
            }
        });
    </script>

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
