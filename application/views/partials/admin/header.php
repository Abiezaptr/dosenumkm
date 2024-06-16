<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/favicon.ico">

    <title><?php echo $title; ?></title>
    
	<!-- Vendors Style-->
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/main-mini-sidebar') ?>/css/vendors_css.css">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/main-mini-sidebar') ?>/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/main-mini-sidebar') ?>/css/skin_color.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  </head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed sidebar-collapse">
	
<div class="wrapper">
	<div id="loader"></div>
	
  <header class="main-header">
	<div class="d-flex align-items-center logo-box justify-content-start">
		<a href="#" class="waves-effect waves-light nav-link d-none d-md-inline-block mx-10 push-btn bg-transparent" data-toggle="push-menu" role="button">
			<span class="icon-Align-left"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
		</a>	
		<!-- Logo -->
		<a class="logo">
		  <!-- logo-->
		  <div class="logo-lg">
			  <span class="light-logo"><img src="<?= base_url('assets/admin') ?>/images/logo-dark-text.png" alt="logo"></span>
			  <span class="dark-logo"><img src="<?= base_url('assets/admin') ?>/images/logo-light-text.png" alt="logo"></span>
		  </div>
		</a>	
	</div>  
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
	  <div class="app-menu">
		<ul class="header-megamenu nav">
			<li class="btn-group nav-item d-md-none">
				<a href="#" class="waves-effect waves-light nav-link push-btn" data-toggle="push-menu" role="button">
					<span class="icon-Align-left"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
			    </a>
			</li>
			<li class="btn-group nav-item d-none d-xl-inline-block">
				<a href="contact_app_chat.html" class="waves-effect waves-light nav-link svg-bt-icon" title="Chat">
					<i class="icon-Chat"><span class="path1"></span><span class="path2"></span></i>
			    </a>
			</li>
			<li class="btn-group nav-item d-none d-xl-inline-block">
				<a href="mailbox.html" class="waves-effect waves-light nav-link svg-bt-icon" title="Mailbox">
					<i class="icon-Mailbox"><span class="path1"></span><span class="path2"></span></i>
			    </a>
			</li>
			<li class="btn-group nav-item d-none d-xl-inline-block">
				<a href="extra_taskboard.html" class="waves-effect waves-light nav-link svg-bt-icon" title="Taskboard">
					<i class="icon-Clipboard-check"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
			    </a>
			</li>
		</ul> 
	  </div>
		
      <div class="navbar-custom-menu r-side">
        <ul class="nav navbar-nav">	
			<li class="btn-group nav-item d-lg-inline-flex d-none">
				<a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link full-screen" title="Full Screen">
					<i class="icon-Expand-arrows"><span class="path1"></span><span class="path2"></span></i>
			    </a>
			</li>	  
			<li class="btn-group d-lg-inline-flex d-none">
				<div class="app-menu">
					<div class="search-bx mx-5">
						<form>
							<div class="input-group">
							  <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
							  <div class="input-group-append">
								<button class="btn" type="submit" id="button-addon3"><i class="ti-search"></i></button>
							  </div>
							</div>
						</form>
					</div>
				</div>
			</li>
		  <!-- Notifications -->
		  <li class="dropdown notifications-menu">
			<a href="#" class="waves-effect waves-light dropdown-toggle" data-toggle="dropdown" title="Notifications">
			  <i class="icon-Notifications"><span class="path1"></span><span class="path2"></span></i>
			</a>
			<ul class="dropdown-menu animated bounceIn">

			  <li class="header">
				<div class="p-20">
					<div class="flexbox">
						<div>
							<h4 class="mb-0 mt-0">Notifications</h4>
						</div>
						<div>
							<a href="#" class="text-danger">Clear All</a>
						</div>
					</div>
				</div>
			  </li>

			  <li>
				<!-- inner menu: contains the actual data -->
				<ul class="menu sm-scrol">
				  <li>
					<a href="#">
					  <i class="fa fa-users text-info"></i> Curabitur id eros quis nunc suscipit blandit.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-warning text-warning"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-users text-danger"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-shopping-cart text-success"></i> In gravida mauris et nisi
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-danger"></i> Praesent eu lacus in libero dictum fermentum.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-primary"></i> Nunc fringilla lorem 
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-success"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
					</a>
				  </li>
				</ul>
			  </li>
			  <li class="footer">
				  <a href="#">View all</a>
			  </li>
			</ul>
		  </li>	
		  
	      <!-- User Account-->
		  <li id="logout-link">
			<a href="#" class="waves-effect waves-light dropdown-toggle" title="User">
				<i class="icon-User"><span class="path1"></span><span class="path2"></span></i>
			</a>
		  </li>
 
          <!-- Control Sidebar Toggle Button -->
          <li>
              <a href="#" data-toggle="control-sidebar" title="Setting" class="waves-effect waves-light">
			  	<i class="icon-Settings"><span class="path1"></span><span class="path2"></span></i>
			  </a>
          </li>
			
        </ul>
      </div>
    </nav>
  </header>
  
  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">	
	  	<div class="multinav">
		  <div class="multinav-scroll" style="height: 100%;">	
			  <!-- sidebar menu-->
			  <ul class="sidebar-menu" data-widget="tree">	
				<!-- main page dashboard -->
				<li class="header">MAIN PAGE</li>
				<li>
				  <a href="<?= site_url('admin/dashboard') ?>">
					<i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i>
					<span>Dashboard</span>
				  </a>
				</li>
				
				<!-- Master data -->
				<li class="header">MASTER DATA </li>
				<li class="treeview">
				  <a href="#">
					<i class="icon-File"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
					<span>Forms</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>					
				  <ul class="treeview-menu">
					<li>
						<a href="<?= site_url('services/servicesControllers') ?>">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Manage Services
						</a>
					</li>	
					<li>
						<a href="<?= site_url('admin/serv/jasaTypeControllers') ?>">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Manage Jasa Type
						</a>
					</li>	
					<li>
						<a href="<?= site_url('admin/agency/agencyControllers') ?>">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Manage Specialist Type
						</a>
					</li>					
				  </ul>
				</li>

				<!-- Report -->
				<li class="header">REKAPITULASI </li>
				<li class="treeview">
				  <a href="#">
					<i class="icon-Chat-check"><span class="path1"></span><span class="path2"></span></i>
					<span>Laporan</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="<?= site_url('admin/consulty/rekapConsulty') ?>"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Reporting Consulting</a></li>
					<li><a href="<?= site_url('admin/agency/rekapAgency') ?>"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Reporting Agency</a></li>
				  </ul>
				</li>
				
				<!-- profile company -->
				<li class="header">USER MANAGEMENT & COMPANY PROFILE </li>
				<li class="treeview">
				  <a href="#">
					<i class="ti-settings"><span class="path1"></span><span class="path2"></span></i>
					<span>Web Management</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="<?= site_url('admin/consulty/rekapConsulty') ?>"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Content Website</a></li>
				 	<li><a href="<?= site_url('admin/consulty/rekapConsulty') ?>"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Role Management</a></li>
				</ul>
				</li>
			  </ul>
		  </div>
		</div>
    </section>
  </aside>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
		$('#logout-link').on('click', function(e) {
			e.preventDefault();

			Swal.fire({
				title: 'Konfirmasi Logout',
				text: "Apakah Anda yakin ingin logout?",
				icon: 'info',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Ya, logout',
				cancelButtonText: 'Batal'
			}).then((result) => {
				if (result.isConfirmed) {
					window.location.href = '<?= base_url('login/logout') ?>';
				}
			});
		});
	});

</script>