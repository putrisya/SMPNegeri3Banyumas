<?php $this->load->view('/templates/header_admin'); ?>
<body>
     
        <?php
            $this->load->view('menu');
        ?>
   

    <div class="content mt-12">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Admin</strong>
                        </div>
                        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('sukses')?>"></div>
                        <?php if ($this->session->flashdata('sukses')); ?>
                        <div class="card-body">
                            <table id="bootstrap-data" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Username</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $no = 0; foreach($data_admin as $row) 
                                { 
                                    $no++;
                                ?>
                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $row['username']; ?></td>
                                    <td>
                                        <a class="btn btn-primary" href="<?php echo base_url(); ?>admin/editprofile/<?php echo $row['id']; ?>"data-toggle="tooltip" data-placement="top">Ganti Username</a>
                                      
                                        <a class="btn btn-warning" href="<?php echo base_url(); ?>admin/editpassword/<?php echo $row['id']; ?>" data-toggle="tooltip" data-placement="top" >Ganti Password</a>
                                            
                                       
                                    </td>
                                </tr>
                                <?php 
                                } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div> <!-- .content -->
    </div><!-- /#right-panel -->
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
