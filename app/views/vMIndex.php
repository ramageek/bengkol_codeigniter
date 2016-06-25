        <div class="row">
          <div class="col-md-3">
            <div class="box box-success">
              <div class="box-header with-border">
                <h3 class="box-title">Data Member</h3>
              </div>
              <div class="box-body">
                <i class="fa fa-user"></i> 
                <strong>Nama</strong>
                <p><?= $this->session->userdata['nama'] ?></p>
                <i class="fa fa-envelope"></i> 
                <strong>Email</strong>
                <p><?= $this->session->userdata['email'] ?></p>
                <i class="fa fa-newspaper-o"></i> 
                <strong>Keterangan</strong>
                <p><?php if($this->session->userdata['keterangan'] != NULL):echo $this->session->userdata['keterangan'];else:echo '-';endif; ?></p>
                <i class="fa fa-paper-plane"></i> 
                <strong>Terdaftar</strong>
                <p><?= $this->session->userdata['terdaftar'] ?></p>
              </div>
            </div>
          </div>
          <div class="col-md-9">
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
                  </tr>
                  <tr>
                    <th colspan="4"><a href="<?= base_url('member/bengkel') ?>" class="btn btn-block btn-primary btn-flat btn-xs">Tampilkan Semua</a></th>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
