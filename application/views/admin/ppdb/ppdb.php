<!doctype html>
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | SMP Negeri 3 Banyumas</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="wid_artikelth=device-wid_artikelth, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="<?php echo base_url() ?>images/logo 2.png">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets_admin/css/normalize.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_admin/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_admin/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_admin/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_admin/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="<?php echo base_url() ?>assets_admin/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_admin/scss/style.css">
    <link href="<?php echo base_url() ?>assets_admin/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets_admin/css/lib/datatable/dataTables.bootstrap.min.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="<?php echo base_url() ?>https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
     
        <?php
            $this->load->view('menu');
        ?>
   

        <div class="content mt-12">
            <div class="animated fadeIn">
                <div class="row">
                <div class="col-md-12">
                    <a href="<?php echo base_url()?>admin/tambah_ppdb"><button class="btn btn-info">Tambah</button></a><br><br>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data PPDB</strong>
                        </div>
                        <?php echo $this->session->flashdata('sukses'); ?>
                        <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php $no = 0; foreach($data_ppdb as $row) 
                            { 
                                $no++;
                            ?>
                              <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $row['judul_ppdb']; ?></td>
                                <td>
                                     <a class="btn btn-info btn-sm" href="<?php echo base_url(); ?>admin/detail_ppdb/<?php echo $row['id_ppdb']; ?>" data-toggle="tooltip" data-placement="top" title="DETAIL">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a class="btn btn-success btn-sm" href="<?php echo base_url(); ?>admin/edit_ppdb/<?php echo $row['id_ppdb']; ?>" data-toggle="tooltip" data-placement="top" title="EDIT">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="#modalDelete" class="btn btn-danger btn-sm" data-toggle="modal" onclick="$('#modalDelete #formDelete').attr('action','<?php echo base_url(); ?>admin/hapus_ppdb/<?php echo $row['id_ppdb'] ?>')"  data-placement="top" title="HAPUS">
                                            <i class="fa fa-times"></i>
                                        </a>
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
