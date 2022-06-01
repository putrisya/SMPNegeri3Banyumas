<?php $this->load->view('/templates/header_admin'); ?>
<body>
   
        <?php
            $this->load->view('menu');
        ?>
    

        <div class="content mt-12">
            <div class="animated fadeIn">
                <div class="row">
                <div class="col-md-8">
                    <a href="<?php echo base_url()?>admin/PPDB"><button class="btn btn-info">Kembali</button></a><br><br>
                </div>
                
                <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>Edit</strong>PPDB
                      </div>
                      <div class="card-body card-block">
                        <form action="<?php echo base_url()?>admin/update_ppdb" method="post" enctype="multipart/form-data" class="form-horizontal">
                              <input type="hidden" name="id_ppdb" value="<?php echo $id_ppdb ?>">
                              <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Judul</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" value="<?php echo $judul_ppdb ?>" id="text-input" name="judul" placeholder="judul_ppdb" class="form-control">
                                </div>
                              </div>

                              <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Isi PPDB</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <textarea class="form-control" name="isi" rows="15"><?php echo $isi_ppdb ?></textarea>
                                </div>
                              </div>

                               <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Masukkan Gambar</label>
                                </div>
                                <div class="col-12 col-md-9">
                                <?php if(($gambar_ppdb != "ppdb/")&&(isset($gambar_ppdb))){ ?>
                                <img src="<?php echo base_url()?><?php echo $gambar_ppdb ?>" width="300" text-align="center">
                                <?php } ?>
                                    <input type="file" id="text-input" name="gambar_ppdb" class="form-control">
                                    <small style="color:red">*Biarkan kosong jika tidak perlu diganti *maksimal 2 mb</small>
                                </div>
                              </div>

                               <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Masukkan File</label>
                                </div>
                                <div class="col-12 col-md-9">
                                <?php if(($file_ppdb != "ppdb/")&&(isset($file_ppdb))){?>
                                    <embed src="<?php echo base_url()?><?php echo $file_ppdb?>" type="application/pdf" data="ppdb.php"   width="500" height="300">
                                    <?php } ?>
                                    <input type="file" id="text-input" name="file_ppdb" class="form-control">
                                    <small style="color:red">*Biarkan kosong jika tidak perlu diganti *maksimal 2 mb</small>
                                </div>
                              </div>

                              <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Penulis</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="penulis" value="<?php echo $penulis_ppdb ?>" placeholder="penulis_ppdb" class="form-control">
                                </div>
                              </div>

                              
                          </div>
                          <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm">
                              <i class="fa fa-dot-circle-o"></i> Edit
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
                alert( 'Isi PPDB Tidak Boleh Kosong!' );
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
    