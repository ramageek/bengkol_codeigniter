<body class="hold-transition register-page">
	<?php
		if ($this->session->userdata('loggedin')) {
			$this->session->set_flashdata('loggedIn','Anda sudah login, silakan logout dulu.');
			redirect(base_url('member'));
		};
		if($this->session->flashdata('already')) :
	?>
		<div class="alert alert-dismissable alert-info" style="text-align:center;margin-bottom:0px;"><?= $this->session->flashdata('already') ?></div>
	<?php
		endif;
		echo validation_errors('<div class="alert alert-danger" style="text-align:center;">','</div>');
	?>
	<div class="register-box" style="margin-top:5%;margin-bottom:5%">
		<div class="register-logo">
			Register Bengk<strong>OL</strong>
		</div>

		<div class="register-box-body">
			<?= form_open() ?>
				<div class="form-group has-feedback">
					<?php $data = array('name'=>'nama','value'=>set_value('nama'),'class'=>'form-control','placeholder'=>'Nama Lengkap'); echo form_input($data); ?>
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>

				<div class="form-group has-feedback">
					<?php $data = array('type'=>'email','class'=>'form-control','placeholder'=>'Email','name'=>'email','required'=>''); echo form_input($data); ?>
					<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				</div>

				<div class="form-group has-feedback">
					<?php $data = array('class'=>'form-control','placeholder'=>'Password','name'=>'password1','required'=>''); echo form_password($data); ?>
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>

				<div class="form-group has-feedback">
					<?php $data = array('class'=>'form-control','placeholder'=>'Konfirmasi password','name'=>'password2','required'=>''); echo form_password($data); ?>
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>

				<div class="form-group has-feedback">
					<?php $data = array('class'=>'form-control','rows'=>'3','placeholder'=>'Tambahkan beberapa keterangan','name'=>'keterangan'); echo form_textarea($data); ?>
				</div>

				<div class="row">
					<div class="col-xs-6">
						<?php $data = array('class'=>'btn btn-primary btn-block btn-flat','value'=>'Register'); echo form_submit($data); ?>
					</div>
					<div class="col-xs-6">
						<a href="<?= base_url('/member/login') ?>" class="btn btn-danger btn-block btn-flat">Kembali Login</a>
					</div>
				</div>
			<?= form_close() ?>	
		</div>
	</div>
</body>