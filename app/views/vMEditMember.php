				<div class="row">
					<div class="col-md-4">
						<div class="box box-success">
							<div class="box-body box-profile">
								<img src="<?= base_url('assets/images')?>/<?= $this->session->userdata['avatar'] ?>" class="profile-user-img img-responsive img-circle" alt="User Image">
								<h3 class="profile-username text-center"><?= $this->session->userdata['nama'] ?></h3>

								<ul class="list-group list-group-unbordered" style="margin-bottom:10px">
									<li class="list-group-item">
										<strong>Email</strong> <a class="pull-right" href="mailto:<?= $this->session->userdata['email'] ?>"><?= $this->session->userdata['email'] ?></a>
									</li>
									<li class="list-group-item">
										<strong>Bengkel Mobil</strong> <a class="pull-right" href="<?= base_url('member/bengkel') ?>"><?= $bMobil ?></a>
									</li>
									<li class="list-group-item">
										<strong>Bengkel Motor</strong> <a class="pull-right" href="<?= base_url('member/bengkel') ?>"><?= $bMotor ?></a>
									</li>
								</ul>

								<strong><i class="fa fa-newspaper-o"></i> Keterangan</strong>
								<p class="text-muted"><?php if($this->session->userdata['keterangan'] != NULL):echo $this->session->userdata['keterangan'];else:echo '-';endif; ?></p>
								<strong><i class="fa fa-paper-plane"></i> Terdaftar sejak</strong>
								<p class="text-muted"><?= $this->session->userdata['terdaftar'] ?></p>
							</div>
						</div>
					</div>

					<div class="col-md-8">
						<div class="box box-success">
							<?php $data = array('class'=>'form-horizontal'); echo form_open_multipart('',$data); ?>
								<div class="box-header with-border">
									<h3 class="box-title">Update Data Member</h3>
									<h3 class="box-title pull-right" style="height:18px;">
										<?php $data=array('class'=>'btn btn-danger btn-flat btn-xs','style'=>'border-top:0px;border-bottom:0px;padding:0px 5px;','value'=>'Submit');echo form_submit($data); ?>
									</h3>
								</div>

								<div class="box-body">
									<div class="form-group">
										<label for="nama" class="col-sm-3 control-label">Nama</label>
										<div class="col-sm-9">
											<?php $data=array('class'=>'form-control','id'=>'nama','placeholder'=>'Nama Lengkap','name'=>'nama');echo form_input($data); ?>
										</div>
									</div>
									<div class="form-group">
										<label for="email" class="col-sm-3 control-label">Email</label>
										<div class="col-sm-9">
											<?php $data=array('type'=>'email','class'=>'form-control','id'=>'email','placeholder'=>'Email','name'=>'email','required'=>'');echo form_input($data); ?>
										</div>
									</div>
									<div class="form-group">
										<label for="password1" class="col-sm-3 control-label">Password</label>
										<div class="col-sm-9">
											<?php $data=array('class'=>'form-control','id'=>'password1','placeholder'=>'Masukkan password','name'=>'password1','required'=>'');echo form_password($data); ?>
										</div>
									</div>
									<div class="form-group">
										<label for="password2" class="col-sm-3 control-label">Konfirmasi Password</label>
										<div class="col-sm-9">
											<?php $data=array('class'=>'form-control','id'=>'password2','placeholder'=>'Konfirmasi password','name'=>'password2');echo form_password($data); ?>
										</div>
									</div>
									<div class="form-group">
										<label for="keterangan" class="col-sm-3 control-label">Keterangan</label>
										<div class="col-sm-9">
											<?php $data=array('class'=>'form-control','id'=>'keterangan','placeholder'=>'Berikan beberapa keterangan tambahan','name'=>'keterangan','rows'=>'3');echo form_textarea($data); ?>
										</div>
									</div>
									<div class="form-group" style="margin-bottom:0px">
										<label for="avatar" class="col-sm-3 control-label">Avatar</label>
										<div class="col-sm-9">
											<?php $data=array('class'=>'upload','name'=>'avatar','style'=>'padding:6px 12px;padding-left:0px;');echo form_upload($data); ?>
										</div>
									</div>
									<!-- <div class="form-group" style="margin-bottom:0px">
										<div class="col-sm-5">
											<img src="<?= base_url('assets/images') ?>/default.svg" class="img-responsive profile-user-img pull-right" style="height:127px">
										</div>
										<div class="col-sm-2 text-center">
											<div style="margin-top:56px;"><span class="fa fa-arrow-right"></span></div>
										</div>
										<div class="col-sm-5">
											<img src="<?= base_url('assets/images') ?>/default.svg" class="img-responsive profile-user-img pull-left" style="height:127px">
										</div>
									</div> -->
								</div>
							</form>
						</div>
					</div>
				</div>
