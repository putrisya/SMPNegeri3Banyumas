
		<?php $this->load->view('/templates/header_admin'); ?>
       
       <?php
           $this->load->view('menu');
       ?>
        

       <div class="content mt-12">
           <div class="col-lg-12 col-md-12">
               <div class="card">
                   <div class="card-header">
                       <strong class="card-title mb-3">Administrator -<?= $username?></strong>
                   </div>
                   <div class="card-body">
                       <div class="mx-auto d-block">
                           <img class="rounded-circle mx-auto d-block" src="<?php echo base_url()?>images/logo 2.png" alt="Card image cap" width="150" height="150">
                           <h5 class="text-sm-center mt-2 mb-1">Selamat Datang</h5>
                           <div class="location text-sm-center"> Administartor SMP Negeri 3 Banyumas</div>
                       </div>
                       <hr>
                   </div>
               </div>
               <!DOCTYPE HTML>

               <!-- uji coba -->

               <!-- Reservasi Hari Ini -->
               <!-- <div class="col-xl-6 col-md-6 h-100">
                            <div class="card border-left-primary shadow">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class=" font-weight-bold text-primary text-uppercase mb-1">
                                                RESERVASI HARI INI
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="h3 mb-0 font-weight-bold text-gray-800"><?= 'tgl_inbox' ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- End Reservasi Hari Ini -->

                    <!-- cobaa -->
                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card shadow">
                                <div class="card-header py-3">
                                    <h5 class="m-0 font-weight-bold text-primary text-center">Inbox Tahun <?= date('Y'); ?></h5>
                                </div>
                                <canvas id="myChart" width="200" height="70"></canvas>
                                <script>
                                    var month = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                                    var ctx = document.getElementById('myChart').getContext('2d');
                                    var myChart = new Chart(ctx, {
                                        type: 'bar',
                                        data: {
                                            labels: month,
                                            datasets: [{
                                                label: 'jumlah inbox',
                                                data:[
                                                    <?php
                                                    $CI =& get_instance();
                                                    for ($i = 1; $i <= 12; $i++) {
                                                        $result = $CI->admin_model->myChart($i);
                                                        echo $result;
                                                        if($i != 12){
                                                            echo ',';
                                                        }
                                                    }    
                                                    ?>
                                                ],
                                                backgroundColor: [
                                                    'rgba(255, 99, 132, 0.2)',
                                                    'rgba(54, 162, 235, 0.2)',
                                                    'rgba(255, 206, 86, 0.2)',
                                                    'rgba(75, 192, 192, 0.2)',
                                                    'rgba(153, 102, 255, 0.2)',
                                                    'rgba(255, 159, 64, 0.2)'
                                                ],
                                                borderColor: [
                                                    'rgba(255, 99, 132, 1)',
                                                    'rgba(54, 162, 235, 1)',
                                                    'rgba(255, 206, 86, 1)',
                                                    'rgba(75, 192, 192, 1)',
                                                    'rgba(153, 102, 255, 1)',
                                                    'rgba(255, 159, 64, 1)'
                                                ],
                                                borderWidth: 1
                                            }]
                                        },
                                        options: {
                                            scales: {
                                                y: {
                                                    beginAtZero: true
                                                }
                                            }
                                        }
                                    });
                                    </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                  
                    <!-- ujicoba selesai -->

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