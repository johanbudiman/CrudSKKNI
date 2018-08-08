<div class="body-padding-for-top-fixed-nav-bar">
	<div class="row" id="body-row">
	    <!-- Sidebar -->
	    <div id="sidebar-container" class="sidebar-expanded d-none d-md-block col-2 ">
	        <!-- d-* hiddens the Sidebar in smaller devices. Its itens can be kept on the Navbar 'Menu' -->
	        <!-- Bootstrap List Group -->
	        <ul class="list-group sticky-top sticky-offset nav navbar-nav"  role="tablist">

	        	<!-- logo admin -->
	        	<li class="list-group-item logo-separator-admin d-flex justify-content-center">
	                <img src="<?php echo site_url('assets/img/person.png') ?>" class="img-fluid">
	            </li>
	            
	                <h5 class="sidebar-separator text-center list-group text-white font-weight-bold">
						<?php echo $nama_admin ?>
					</h5>
	            

	            <li class="nav-item bg-dark">
		            <a href="<?php echo site_url('Homepage/TampilDataPeserta') ?>" class="bg-dark list-group-item list-group-item-action nav-link">
		                <div class="d-flex w-100 justify-content-start align-items-center">
		                    <span class="fa fa-calendar fa-fw mr-3"></span>
		                    <span>
		                    	Input Data Peserta Sertifikasi
		                    </span>
		                </div>
		            </a>
		        </li>

	            <!-- <li class="nav-item">
	            		            <a href="<?php echo site_url('Homepage/TampilDataSertifikasi') ?>" class="bg-dark list-group-item list-group-item-action nav-link">
	            		                <div class="d-flex w-100 justify-content-start align-items-center">
	            		                    <span class="fa fa-envelope-o fa-fw mr-3"></span>
	            		                    <span>
	            		                    	Input Data Sertifikasi
	            		                    </span>
	            		                </div>
	            		            </a>
	            		        </li> -->

	            <li class="nav-item">
		            <a href="<?php echo site_url('Homepage/TampilLaporanSertifikasi') ?>" class="bg-dark list-group-item list-group-item-action nav-link">
		                <div class="d-flex w-100 justify-content-start align-items-center">
		                    <span class="fa fa-envelope-o fa-fw mr-3"></span>
		                    <span>
		                    	Laporan Sertifikasi
		                    </span>
		                </div>
		            </a>
		        </li>

		        <li class="nav-item">
		            <a href="<?php echo site_url('Homepage/BackupData') ?>" class="bg-dark list-group-item list-group-item-action nav-link">
		                <div class="d-flex w-100 justify-content-start align-items-center">
		                    <span class="fa fa-envelope-o fa-fw mr-3"></span>
		                    <span>
		                    	Backup Data
		                    </span>
		                </div>
		            </a>
		        </li>

	            <li class="list-group-item logo-separator d-flex justify-content-center">
	                <a class="nav-link font-weight-bold" href="<?php echo site_url('Homepage/Logout') ?>">
						<img src="<?php echo site_url('assets/img/logout.png') ?>" width="24" height="24" class="d-inline-block">
						<span>
							logout
						</span>
					</a>
	            </li>

	        </ul>
	        <!-- List Group END-->
	    </div>
	    <!-- sidebar-container END -->

	   