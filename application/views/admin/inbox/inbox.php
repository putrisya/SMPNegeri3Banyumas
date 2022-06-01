<?php $this->load->view('/templates/header_admin'); ?>
<body>
    
        <?php
            $this->load->view('menu');
        ?>
          <?php
        date_default_timezone_set("ASIA/JAKARTA");
    ?>
    

    <div class="content mt-12">

    <!-- Form Filter By Tanggal
    <br>
    <br>
    <br>
    <form action="<?php echo base_url(); ?>Inbox/filter" method="POST" TARGET='_blank'>
        
        <input type="hidden" name="nilaifilter" value="1">

        Tanggal awal <br>
        <input type="date" name="tglawal" required=""><br>
        Tanggal Akhir <br>
        <input type="date" name="tglakhir" required=""><br>
        <br>
        <input type="submit" value="print">
    </form>

    <br>
    <br> <br>
    Form Filter By bulan
    <br>
    <br>
    <br>
    <form action="<?php echo base_url(); ?>Inbox/filter" method="POST" TARGET='_blank'>
        
        <input type="hidden" name="nilaifilter" value="2">

        Pilih Tahun <br>
        <select name='tahun1' required="">
            <?php foreach ($tahun as $row); ?>

            <option value="<?php echo $row['tahun'] ?>"><?php echo $row['tahun'] ?></option>
            
            <?php ?>
        </select>

        Bulan awal <br>
        <select name="bulanawal" required="">
            <option value='1'>Januari</option>
            <option value='2'>Februari</option>
            <option value='3'>Maret</option>
            <option value='4'>April</option>
            <option value='5'>Mei</option>
            <option value='6'>Juni</option>
            <option value='7'>Juli</option>
            <option value='8'>Agustus</option>
            <option value='9'>September</option>
            <option value='10'>Oktober</option>
            <option value='11'>November</option>
            <option value='12'>Desember</option>
        </select> <br>

        Bulan akhir <br>
        <select name="bulanakhir" required="">
            <option value='1'>Januari</option>
            <option value='2'>Februari</option>
            <option value='3'>Maret</option>
            <option value='4'>April</option>
            <option value='5'>Mei</option>
            <option value='6'>Juni</option>
            <option value='7'>Juli</option>
            <option value='8'>Agustus</option>
            <option value='9'>September</option>
            <option value='10'>Oktober</option>
            <option value='11'>November</option>
            <option value='12'>Desember</option>
        </select> <br>

        <br>
        <input type="submit" value="print">
    </form>

    <br>
    <br> <br>
    Form Filter By Tahun
    <br>
    <br>
    <br>
    <form action="<?php echo base_url(); ?>Inbox/filter" method="POST" TARGET='_blank'>
        
        <input type="hidden" name="nilaifilter" value="3">

        Pilih Tahun <br>
        <select name='tahun2' required="">
            <?php foreach ($tahun as $row) ?>

            <option value="<?php echo $row->tahun ?>"><?php echo $row->tahun ?> </option>
            
            ?>
        </select>

        <br>
        <input type="submit" value="print">
    </form> -->

        <div class="animated fadeIn">
            <div class="row">
                <!-- <div class="col-md-12">
                    <a href="<?php echo base_url()?>admin/tambah_guru"><button class="btn btn-info">Tambah</button></a><br><br>
                </div> -->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Inbox</strong>
                        </div>
                        
                        <?php echo $this->session->flashdata('sukses'); ?>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pengirim</th>            
                                    <th>Email Pengirim</th>
                                    <th>Tanggal Kirim</th>
                                    
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $no = 0; foreach($data_inbox as $row) 
                                { 
                                    $no++;
                                ?>
                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $row['Nama_pengirim']; ?></td>
                                    <td><?php echo $row['Email_pengirim']; ?></td>
                                    <td><?php $tgl = $row['tgl_inbox'];  echo date("d-F-Y", strtotime($tgl)) ?></td>
                                    
                                    <td>
                                    <a class="btn btn-info btn-sm" href="<?php echo base_url(); ?>admin/detail_inbox/<?php echo $row['id_inbox']; ?>" data-toggle="tooltip" data-placement="top" title="DETAIL">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                        <a href="#modalDelete" class="btn btn-danger btn-sm" data-toggle="modal" onclick="$('#modalDelete #formDelete').attr('action','<?php echo base_url(); ?>admin/hapus_inbox/<?php echo $row['id_inbox'] ?>')"  data-placement="top" title="HAPUS">
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
</section>
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
