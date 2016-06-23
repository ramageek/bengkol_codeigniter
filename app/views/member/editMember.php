				<div class="row">
					<div class="col-md-4">
						<div class="box box-success">
							<div class="box-body box-profile">
								<img src="<?= base_url('assets/images')?>/default.svg" class="profile-user-img img-responsive img-circle" alt="User Image">
								<h3 class="profile-username text-center">Qisthi Ramadhani</h3>
								<p class="text-muted text-center">Founder BengkOL</p>

								<ul class="list-group list-group-unbordered" style="margin-bottom:10px">
									<li class="list-group-item">
										<strong>Email</strong> <a class="pull-right" href="mailto:qisthi@ramadhani.me">qisthi@ramadhani.me</a>
									</li>
									<li class="list-group-item">
										<strong>Bengkel Mobil</strong> <a class="pull-right" href="<?= base_url('member/bengkel') ?>">3</a>
									</li>
									<li class="list-group-item">
										<strong>Bengkel Motor</strong> <a class="pull-right" href="<?= base_url('member/bengkel') ?>">3</a>
									</li>
								</ul>

								<strong><i class="fa fa-newspaper-o"></i> Keterangan</strong>
								<p class="text-muted">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, pariatur?
								</p>
								<strong><i class="fa fa-paper-plane"></i> Terdaftar sejak</strong>
								<p class="text-muted">
									Kamis, 12 Mei 2016 pukul 14:20:24
								</p>
							</div>
						</div>
					</div>

					<div class="col-md-8">
						<div class="box box-success">
							<form class="form-horizontal" method="POST">
								<div class="box-header with-border">
									<h3 class="box-title">Update Data Member</h3>
									<h3 class="box-title pull-right" style="height:18px;"><button type="submit" class="btn btn-danger btn-flat btn-xs" style="border-top:0px;border-bottom:0px;padding:0px 5px;">Submit</button></h3>
								</div>

								<div class="box-body">
									<div class="form-group">
										<label for="nama" class="col-sm-2 control-label">Nama</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" placeholder="Nama Lengkap">
										</div>
									</div>
									<div class="form-group">
										<label for="email" class="col-sm-2 control-label">Email</label>
										<div class="col-sm-10"><input type="email" class="form-control" placeholder="Email"></div>
									</div>
									<div class="form-group">
										<label for="password" class="col-sm-2 control-label">Password</label>
										<div class="col-sm-10"><input type="password" class="form-control" placeholder="Password"></div>
									</div>
									<div class="form-group">
										<label for="keterangan" class="col-sm-2 control-label">Keterangan</label>
										<div class="col-sm-10"><textarea name="keterangan" rows="3" class="form-control" placeholder="Tambahkan keterangan tambahan"></textarea></div>
									</div>
									<div class="form-group" style="margin-bottom:0px">
										<label for="avatar" class="col-sm-2 control-label">Avatar</label>
										<div class="col-sm-10"><input type="file" style="padding:6px 12px;padding-left:0px;"></div>
									</div>
									<div class="form-group" style="margin-bottom:0px">
										<div class="col-sm-5">
											<img src="<?= base_url('assets/images') ?>/default.svg" class="img-responsive profile-user-img pull-right" style="height:127px">
										</div>
										<div class="col-sm-2 text-center">
											<div style="margin-top:56px;"><span class="fa fa-arrow-right"></span></div>
										</div>
										<div class="col-sm-5">
											<img src="<?= base_url('assets/images') ?>/default.svg" class="img-responsive profile-user-img pull-left" style="height:127px">
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
