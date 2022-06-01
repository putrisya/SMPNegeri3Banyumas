<aside id="left-panel" class="left-panel">

<body>  

    <nav class="navbar navbar-expand-sm navbar-default">
            <div class="navbar-header" >
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <!-- <div class=""> -->
                <a class="navbar-brand" href="<?php echo base_url() ?>admin"><img src="<?php echo base_url() ?>images/logo 2.png" alt="Logo" width="50">  
                <!-- </div> -->
                <!-- <div class="card-header">
                       <strong class="card-title mb-3">Administrator -<?= $username?></strong>
                   </div> -->
                   <!-- <div class="card-body">
                   </div> -->
  </a>              
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="<?php echo base_url() ?>admin"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                <ul>
                <hr color="white" style="margin-bottom:10px;margin-top:0px">
                <ul class="nav navbar-nav">
                    <!-- <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Profil</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="<?php echo base_url() ?>admin/struktur">Struktur Organisasi</a></li>
                        </ul>
                    </li> -->
                    <li>
                        <a href="<?php echo base_url() ?>admin/inbox"> <i class="menu-icon fa fa-inbox"></i>Inbox </a>
                    </li>
                   
                    <!-- <li>
                        <a href="<?php echo base_url() ?>admin/ekstrakulikuler"> <i class="menu-icon fa fa-bar-chart"></i>Ekstrakulikuler </a>
                    </li> -->
                     <li>
                        <a href="<?php echo base_url() ?>admin/mapel"> <i class="menu-icon fa fa-book"></i>Mata Pelajaran </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>admin/guru"> <i class="menu-icon fa fa-users"></i>Data Guru </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>admin/staff"> <i class="menu-icon fa fa-users"></i>Data Staf </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>admin/prestasi"> <i class="menu-icon fa fa-users"></i>Data Prestasi </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>admin/fasilitas"> <i class="menu-icon fa fa-folder"></i>Data Fasilitas </a>
                    </li>

                    <!-- <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Data Siswa</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="<?php echo base_url() ?>admin/siswa_i">Kelas I</a></li>
                            <li><i class="fa fa-table"></i><a href="<?php echo base_url() ?>admin/siswa_ii">Kelas II</a></li>
                            <li><i class="fa fa-table"></i><a href="<?php echo base_url() ?>admin/siswa_iii">Kelas III</a></li>
                        </ul>
                    </li> -->
                    <li>
                        <a href="<?php echo base_url() ?>admin/berita"> <i class="menu-icon fa fa-tasks"></i>Berita </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>admin/agenda"> <i class="menu-icon fa fa-tasks"></i>Artikel </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>admin/pengumuman"> <i class="menu-icon fa fa-tasks"></i>Pengumuman </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>admin/ppdb"> <i class="menu-icon fa fa-tasks"></i>PPDB </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>admin/galeri"> <i class="menu-icon fa fa-id-card-o"></i>Galeri </a>
                    </li>
                   
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user-secret"></i>Pengaturan Akun</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-user-secret"></i><a href="<?php echo base_url() ?>admin/admin_profile">Edit Profil</a></li>
                            <li><i class="fa fa-window-close"></i><a href="#modalLogout" data-toggle="modal" onclick="$('#modalLogout #formLogout').attr('action','<?php echo base_url() ?>login/logout')">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
        </aside>

        <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="header-menu">
                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                </div>
                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#modalLogout" data-toggle="modal" onclick="$('#modalLogout #formLogout').attr('action','<?php echo base_url('login/logout'); ?>')">Logout
                        </a>
                    </div>

                </div>
            </div>
        </header><!-- /header -->

