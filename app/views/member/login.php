<body class="hold-transition login-page">
	<div class="login-box">
		<div class="login-logo">
			<a href="<?= base_url() ?>">Login Bengk<strong>OL</strong></a>
		</div>

		<div class="login-box-body">
			<p class="login-box-msg">Start your session!</p>

			<form action="#" method="POST">
				<div class="form-group has-feedback">
					<input type="text" class="form-control" placeholder="Email">
					<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				</div>

				<div class="form-group has-feedback">
					<input type="password" class="form-control" placeholder="Password">
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>

				<div class="form-group">
					<input type="text" name="submit" value="Submit" class="btn btn-primary btn-block btn-flat">
				</div>
			</form>

			<div style="text-align:center">
				<a href="<?= base_url('member/register') ?>">Register new membership</a>
			</div>
		</div>
	</div>
</body>