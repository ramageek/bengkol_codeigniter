<body class="hold-transition register-page">
	<div class="register-box">
		<div class="register-logo">
			<a href="<?= base_url() ?>">Register Bengk<strong>OL</strong></a>
		</div>

		<div class="register-box-body">
			<p class="login-box-msg">Register a new membership</p>
			<form action="#" method="POST">
				<div class="form-group has-feedback">
					<input type="text" class="form-control" placeholder="Full Name">
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>

				<div class="form-group has-feedback">
					<input type="email" class="form-control" placeholder="Email" required>
					<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				</div>

				<div class="form-group has-feedback">
					<input type="password" class="form-control" placeholder="Password" required>
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>

				<div class="form-group has-feedback">
					<textarea class="form-control" rows="3" placeholder="Tambahkan beberapa keterangan"></textarea>
				</div>

				<div class="row">
					<div class="col-xs-6">
						<button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
					</div>
					<div class="col-xs-6">
						<a href="<?= base_url('/member/login') ?>" class="btn btn-danger btn-block btn-flat">Kembali Login</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>