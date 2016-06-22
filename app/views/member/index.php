<body class="hold-transition skin-green sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
			<a href="<?= base_url('member') ?>" class="logo">
				<span class="logo-mini"><b>B</b>OL</span>
				<span class="logo-lg"><b>Bengk</b>OL</span>
			</a>

			<nav class="navbar navbar-static-top" role="navigation">
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>

				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<li class="dropdown notifications-menu<?php if($this->session->flashdata('loggedIn')): echo ' open';endif; ?>">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="<?php if($this->session->flashdata('loggedIn')): echo 'true';else:echo 'false';endif; ?>">
								<i class="fa fa-bell-o"></i>
								<span class="label label-warning"><?php if($this->session->flashdata('loggedIn')): echo '1';else:echo '0';endif; ?></span>
							</a>

							<ul class="dropdown-menu">
								<?php if($this->session->flashdata('loggedIn')): ?>
								<li>
									<ul class="menu">
										<li id="myAlert">
											<a href="" class="closebutton"><i class="fa fa-check text-green" style="text-align:center;"></i><?= $this->session->flashdata('loggedIn') ?></a>
										</li>
									</ul>
								</li>
								<?php endif; ?>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
		</header>

		<aside class="main-sidebar">
			<section class="sidebar">
				<form action="#" method="get" class="sidebar-form">
					<div class="input-group">
						<input type="text" name="q" class="form-control" placeholder="Search...">
						<span class="input-group-btn">
							<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
						</span>
					</div>
				</form>
				<div class="user-panel">
					<div class="pull-left image">
						<img src="<?= base_url('assets/images/default.svg') ?>" alt="" class="img-circle" alt="User Image">
					</div>

					<div class="pull-left info">
						<p><a href="#">Member</a></p>
						<a href="<?= base_url('member/logout') ?>"><i style="font-weight:bold;color:#ff9999;">Logout</i></a>
					</div>
				</div>

				<ul class="sidebar-menu">
					<li class="header">Main Navigation</li>
					<li class="active"><a href="<?= base_url('member') ?>"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
					<li><a href="#"><i class="fa fa-car"></i><span>Bengkel</span></a></li>
				</ul>
			</section>
		</aside>

		<div class="content-wrapper">
			<section class="content-header">
				<h1>Dashboard</h1>
			</section>

			<section class="content">
				<div class="row">
					<div class="col-md-2">
						<div class="box box-success">
							<div class="box-header with-border">
								<h3 class="box-title">Data Member</h3>
							</div>
							<div class="box-body">
								<i class="fa fa-home"></i> 
								<strong>Nama</strong>
								<p>Qisthi Ramadhani</p>
								<i class="fa fa-envelope"></i> 
								<strong>Email</strong>
								<p>qisthi@ramadhani.me</p>
								<i class="fa fa-newspaper-o"></i> 
								<strong>Keterangan</strong>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
								<i class="fa fa-paper-plane"></i> 
								<strong>Terdaftar</strong>
								<p>Kamis, 12 Mei 2016 pukul 14:20:24</p>
							</div>
						</div>
					</div>
					<div class="col-md-10">
						<div class="box box-success">
							<div class="box-header">
								<h3 class="box-title">Daftar Bengkel</h3>
							</div>
							<div class="box-body no-padding">
								<table class="table table-condensed">
									<tr>
										<th>Nama</th>
										<th style="width:30%">Alamat</th>
										<th>Telepon</th>
										<th style="width:30%">Keterangan</th>
									</tr>
									<tr>
										<td>Bengkel Rama</td>
										<td>Desa Setren RT 25/09, Kec. Bendo, Kab. Magetan</td>
										<td>+6285785773484</td>
										<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
										<td><a href="#" class="btn btn-info" role="button">Edit</a></td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>

		<footer class="main-footer">
			<div class="pull-right hidden-xs"><strong>Version</strong> CodeIgniter</div>
			<strong>Copyright &copy; 2016 by <a href="https://www.ramadhani.me">Qisthi Ramadhani</a></strong>. All right reserved
		</footer>
	</div>
</body>