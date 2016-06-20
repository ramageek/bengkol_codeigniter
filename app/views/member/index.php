<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Comaptible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<title>Halaman Member</title>

	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/Font-Awesome.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/AdminLTE.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/skins/_all-skins.min.css') ?>">
</head>
<body class="hold-transition skin-green sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
			<a href="<?= base_url() ?>" class="logo">
				<span class="logo-mini"><b>B</b>OL</span>
				<span class="logo-lg"><b>Bengk</b>OL</span>
			</a>

			<nav class="navbar navbar-static-top" role="navigation">
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>

				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<li class="dropdown notifications-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-bell-o"></i>
							</a>
						</li>
					</ul>
				</div>
			</nav>
		</header>

		<aside class="main-sidebar">
			<section class="sidebar">
				<div class="user-panel">
					<div class="pull-left image">
						<img src="<?= base_url('assets/images/default.svg') ?>" alt="" class="img-circle" alt="User Image">
					</div>

					<div class="pull-left info">
						<p>Membership</p>
						<a href="#"><i style="font-weight:bold;color:#ff9999;">Logout</i></a>
					</div>
				</div>
			</section>
		</aside>

		<div class="content-wrapper">
			<section class="content-header">
				<h1>Dashboard</h1>
				<ol class="breadcrumb">
					<li class="active"><i class="fa fa-dashboard"></i> Dasboard</li>
				</ol>
			</section>

			<section class="content">
				<p>Ini konten</p>
			</section>
		</div>

		<footer class="main-footer">
			<div class="pull-right hidden-xs"><strong>Version</strong> CodeIgniter</div>
			<strong>Copyright &copy; 2016 by <a href="https://www.ramadhani.me">Qisthi Ramadhani</a></strong>. All right reserved
		</footer>
	</div>

	<script src="<?= base_url('assets/js/jquery-2.2.4.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/AdminLTE.min.js') ?>"></script>
</body>
</html>