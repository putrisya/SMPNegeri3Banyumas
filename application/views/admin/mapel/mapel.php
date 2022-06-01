<?php $this->load->view('/templates/header_admin'); ?>
<body>
    
        <?php
            $this->load->view('menu');
        ?>
    

        <div class="content mt-12">
            <div class="animated fadeIn">
                <div class="row">
                <div class="col-md-12">
                    <a href="<?php echo base_url()?>admin/tambah_mapel"><button class="btn btn-info">Tambah</button></a><br><br>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Mata Pelajaran</strong>
                        </div>
                        <div class="flash-data" data-flashdata="<? echo $this->session->flashdata('sukses')?>"></div>
                        <?php echo $this->session->flashdata('sukses'); ?>
                        <div class="card-body">
                          <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php $no = 0; foreach($data_mapel as $row) 
                            { 
                                $no++;
                                $id = $row['id_mapel'];
                            ?>
                              <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $row['nama']; ?></td>
                                <td>
                                    <a class="btn btn-info btn-sm" href="<?php echo base_url(); ?>admin/edit_mapel/<?php echo $row['id_mapel']; ?>" data-toggle="tooltip" data-placement="top" title="EDIT">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <?php 
                                    $CI =& get_instance();
                                    $result = $CI->admin_model->ambil_mapel_dipakai($id);
                                    if($result == 0) {?>
                                    <a href="#modalDelete" class="btn btn-danger btn-sm" data-toggle="modal" onclick="$('#modalDelete #formDelete').attr('action','<?php echo base_url(); ?>admin/hapus_mapel/<?php echo $row['id_mapel'] ?>')"  data-placement="top" title="HAPUS">
                                        <i class="fa fa-times"></i>
                                    </a>
                                    <?php } ?>
                                </td>
                              </tr>
                            <?php 
                            } ?>
                            </tbody>
                          </table>
                        </div>
                    </div>
                </div>
                </div>
            </div><!-- .animated -->
        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <?php $this->load->view('js'); ?>
    <section>
   <div class="modal fade" id="modalDelete" style="">
        <div class="modal-dialog" >
            <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title">Yakin akan Menghapus data ini?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-footer">
                <form id="formDelete" action="" method="post">
                    <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-danger" type="submit">Hapus</button>
                </form>
            </div>
        </div>
    </div>
<section>

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
