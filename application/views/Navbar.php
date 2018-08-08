<nav class="navbar navbar-expand-md navbar-dark bg-info fixed-top">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
        <span class="menu-collapsed font-weight-bold">
        	Sertifikasi SKKNI
        </span>
    </a>
    <div class="collapse navbar-collapse font-weight-bold text-navbar-dark-color" id="navbarNavDropdown">
        <ul class="nav nav-pills navbar-nav mr-auto mt-2 mt-lg-0" role="tablist" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <li class="nav-item d-sm-block d-md-none">
                <!-- <a class="nav-link" href="#"> -->
                <a href="<?php echo site_url('Homepage/TampilDataPeserta') ?>" class="nav-link bg-info" id="pills-1-tab" data-toggle="pill" role="tab" aria-controls="pills-1">
                	Input Data Peserta Sertifikasi
                </a>
            </li>
            <!-- <li class="nav-item d-sm-block d-md-none">
                <a href="<?php echo site_url('Homepage/TampilDataSertifikasi') ?>" class="nav-link bg-info" id="pills-2-tab" data-toggle="pill" role="tab" aria-controls="pills-2">
                    Input Data Sertifikasi
                </a>
            </li> -->
            <li class="nav-item d-sm-block d-md-none">
                <a href="<?php echo site_url('Homepage/TampilLaporanSertifikasi') ?>" class="nav-link bg-info" id="pills-3-tab" data-toggle="pill" role="tab" aria-controls="pills-3">
                	Laporan Sertifikasi
                </a>
            </li>
            <li class="nav-item d-sm-block d-md-none">
                <a href="<?php echo site_url('Homepage/BackupData') ?>" class="nav-link bg-info" id="pills-3-tab" data-toggle="pill" role="tab" aria-controls="pills-3">
                    Backup Data
                </a>
            </li>
        </ul>

        <ul class="navbar-nav">
        	<li class="nav-item">
        		<a class="nav-link ">
        			Selamat Datang Kembali, 
					<?php echo $nama_admin ?>
				</a>
        	</li>
        	
        	<li class="nav-item">
        		<a class="nav-link" href="<?php echo site_url('Homepage/Logout') ?>">
					Logout
                    <img src="<?php echo site_url('assets/img/logout.png') ?>" width="24" height="24" class="d-inline-block">
				</a>
        	</li>
        </ul>
    </div>
</nav>
