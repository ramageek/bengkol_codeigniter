        <div class="row">
          <div class="col-md-9">
            <div class="box box-success" style="margin-bottom:10px;">
              <?php $data=array('role'=>'form');echo form_open_multipart('',$data); ?>
                <div class="box-header with-border">
                  <h3 class="box-title">Tambah Bengkel</h3>
                  <h3 class="box-title pull-right" style="height:18px">
                    <?php $data=array('class'=>'btn btn-danger btn-flat btn-xs','style'=>'border-top:0px;border-bottom:0px;padding:0px 5px;','value'=>'Submit');echo form_submit($data); ?>
                  </h3>
                </div>

                <div class="box-body">
                  <div class="col-md-9">
                    <div class="form-group alamat mine">
                      <div class="col-md-5" style="padding-left:0px;">
                        <div class="form-group alamat mine">
                          <label for="kategori" class="alamat mine">Kategori Bengkel</label>
                          <select name="kategori" id="kategori" class="form-control">
                            <option value="1">Bengkel Mobil</option>
                            <option value="2">Bengkel Motor</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-7" style="padding-right:0px;">
                        <label for="nama" class="alamat mine">Nama</label>
                        <?php $data=array('class'=>'form-control','id'=>'nama','name'=>'nama','placeholder'=>'Nama Bengkel','required'=>'');echo form_input($data); ?>
                      </div>
                    </div>

                    <div class="form-group alamat mine">
                      <label for="telepon" class="alamat mine">Telepon</label>
                      <?php $data=array('class'=>'form-control','id'=>'telepon','name'=>'telepon','placeholder'=>'+6285712345678');echo form_input($data); ?>
                    </div>
                    
                    <div class="form-group alamat mine">
                      <label for="keterangan" class="alamat mine">Keterangan</label>
                      <?php $data=array('class'=>'form-control','rows'=>'3','id'=>'keterangan','name'=>'keterangan','placeholder'=>'Berikan keterangan tambahan');echo form_textarea($data); ?>
                    </div>

                    <div class="form-group alamat mine">
                      <div class="col-md-6">
                        <label for="lokasi" class="alamat mine">Lokasi</label><br/>
                        <a class="btn btn-danger btn-flat btn-xs btn-block">Set Lokasi</a>
                      </div>
                      <div class="col-md-6">
                        <label for="avatar" class="alamat mine">Avatar Bengkel</label>
                        <?php $data=array('class'=>'upload','id'=>'avatar','name'=>'avatar');echo form_upload($data); ?>
                      </div>
                    </div>
                    
                    <div class="form-group alamat mine">
                      <div class="col-md-9" id="span">
                        <span class="btn-block btn-flat btn-xs bg-navy text-center">Peta Lokasi</span>
                      </div>
                      <div class="col-md-3" id="span">
                        <span class="btn-block bg-navy btn-xs text-center">Avatar Bengkel</span>
                      </div>
                    </div>

                    <div class="form-group alamat mine">
                      <div class="col-md-9">
                        <p class="text-center">MAPPING</p>
                      </div>
                      <div class="col-md-3">
                        <img src="<?= base_url('assets/images') ?>/<?= $this->session->userdata('avatar') ?>" class="img-responsive profile-user-img" id="preview">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="box-header with-border text-center alamat mine">
                      <strong>Alamat</strong>
                    </div>
                    
                    <div class="form-group alamat mine">
                      <label class="alamat mine" for="provinsi">Provinsi</label>
                      <?php $data=array('class'=>'form-control','id'=>'provinsi','name'=>'provinsi','value'=>'Daerah Istimewa Yogyakarta','required'=>'','readonly'=>'');echo form_input($data); ?>
                    </div>
                    
                    <div class="form-group alamat mine">
                      <label class="alamat mine" for="kotakab">Kota/Kabupaten</label>
                      <?php $data=array('class'=>'form-control','id'=>'kotakab','name'=>'kotakab','placeholder'=>'Kota/Kabupaten','required'=>'');echo form_input($data); ?>
                    </div>
                    
                    <div class="form-group alamat mine">
                      <label class="alamat mine" for="kecamatan">Kecamatan</label>
                      <?php $data=array('class'=>'form-control','id'=>'kecamatan','name'=>'kecamatan','placeholder'=>'Kecamatan');echo form_input($data); ?>
                    </div>
                    
                    <div class="form-group alamat mine">
                      <label class="alamat mine" for="desakel">Desa/Kelurahan</label>
                      <?php $data=array('class'=>'form-control','id'=>'desakel','name'=>'desakel','placeholder'=>'Desa/Kelurahan');echo form_input($data); ?>
                    </div>
                    
                    <div class="form-group alamat mine col-md-8">
                      <label class="alamat mine" for="jalan">Jalan</label>
                      <?php $data=array('class'=>'form-control','id'=>'jalan','name'=>'jalan','placeholder'=>'Jalan','required'=>'');echo form_input($data); ?>
                    </div>
                    
                    <div class="form-group alamat mine col-md-4">
                      <label class="alamat mine" for="nomor">Nomor</label>
                      <?php $data=array('class'=>'form-control','id'=>'nomor','name'=>'nomor','placeholder'=>'354');echo form_input($data); ?>
                    </div>
                    
                    <div class="form-group alamat mine">
                      <label class="alamat mine" for="latitude">Latitude</label>
                      <?php $data=array('class'=>'form-control','id'=>'latitude','name'=>'latitude','placeholder'=>'Belum tersedia','readonly'=>'','value'=>'12345');echo form_input($data); ?>
                    </div>
                    
                    <div class="form-group alamat mine">
                      <label class="alamat mine" for="longitude">Longitude</label>
                      <?php $data=array('class'=>'form-control','id'=>'longitude','name'=>'longitude','placeholder'=>'Belum tersedia','readonly'=>'');echo form_input($data); ?>
                    </div>
                  </div>
                </div>
              <?= form_close() ?>
            </div>
          </div>

          <div class="col-md-3">
            <div class="box box-success">
              <div class="box-header">
                <h3 class="box-title">Daftar Bengkel</h3>
              </div>

              <div class="box-body no-padding">
                <table class="table table-condensed">
                  <tr>
                    <th>#</th>
                    <th></th>
                    <th style="width:75%">Nama</th>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td><div class="user-block"><img src="<?= base_url('assets/images') ?>/default.svg" class="img-circle img-bordered-sm"></div></td>
                    <td>Bengkel Rama</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
