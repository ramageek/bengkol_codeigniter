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
							<?php if($this->session->flashdata('loggedIn')): ?>
							<ul class="dropdown-menu">
								<li>
									<ul class="menu">
										<li id="myAlert">
											<a href="" class="closebutton"><i class="fa fa-check text-green" style="text-align:center;"></i><?= $this->session->flashdata('loggedIn') ?></a>
										</li>
									</ul>
								</li>
							</ul>
							<?php endif; ?>	
						</li>
					</ul>
				</div>
			</nav>
		</header>

		<aside class="main-sidebar">
			<section class="sidebar">
				<?php if($titletag == 'bengkel member') : ?>	
				<form action="#" method="get" class="sidebar-form">
					<div class="input-group">
						<input type="text" name="q" class="form-control" placeholder="Search...">
						<span class="input-group-btn">
							<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
						</span>
					</div>
				</form>
				<?php endif; ?>	
				<div class="user-panel">
					<div class="pull-left image">
						<img src="<?= base_url('assets/images') ?>/<?= $this->session->userdata['avatar'] ?>" class="img-circle" alt="User Image">
					</div>

					<div class="pull-left info">
						<p><a href="<?= base_url('member/edit-member') ?>"><?= $this->session->userdata['nama'] ?></a></p>
						<a href="<?= base_url('member/logout') ?>"><i style="font-weight:bold;color:#ff9999;">Logout</i></a>
					</div>
				</div>

				<ul class="sidebar-menu">
					<li class="header">Main Navigation</li>
					<li <?php if($titletag == 'dasboard member'):echo 'class="active"';endif; ?>><a href="<?= base_url('member') ?>"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
					<li <?php if($titletag == 'bengkel member'):echo 'class="active"';endif; ?>><a href="<?= base_url('member/bengkel')?>"><i class="fa fa-car"></i><span>Bengkel</span></a></li>
				</ul>

			</section>
		</aside>

		<div class="content-wrapper">
			<section class="content-header">
				<h1><?= ucwords($titletag) ?></h1>
			</section>

			<section class="content">
<?php $this->load->view($mainContent) ?>
			</section>
		</div>

		<footer class="main-footer">
			<div class="pull-right hidden-xs"><strong>Version</strong> CodeIgniter</div>
			<strong>Copyright &copy; 2016 by <a href="https://www.ramadhani.me">Qisthi Ramadhani</a></strong>. All right reserved
		</footer>
	</div>
</body>