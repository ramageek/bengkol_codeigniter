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
                    <th width="20%">Nama</th>
                    <th width="60%">Alamat</th>
                    <th width="20%">Ket</th>
                  </tr>
                  <?php $i=0; if(!empty($dataBengkel)):foreach($dataBengkel as $dat):if($i++ == 3) break;?> 
                    <tr>
                      <td><a href="#"><?= $dat['nama'] ?></a></td>
                      <td>
                        <?php
                        if(!empty($dat['jalan'])){echo $dat['jalan'];}if(!empty($dat['nomor'])){echo ' '.$dat['nomor'];}if(!empty($dat['desa_kelurahan'])){echo ', '.$dat['desa_kelurahan'];}if(!empty($dat['kota_kabupaten'])){echo ', '.$dat['kecamatan'];}echo ', '.$dat['kota_kabupaten'];echo ', '.$dat['provinsi'];
                        ?> 
                      </td>
                      <td><?php if(!empty($dat['keterangan'])):echo $dat['keterangan'];else:echo 'Tidak ada keterangan';endif; ?></td>
                    </tr>
                  <?php endforeach; ?>  
                    <tr>
                      <th colspan="4"><a href="<?= base_url('member/bengkel') ?>" class="btn btn-block btn-primary btn-flat btn-xs">Tampilkan Semua</a></th>
                    </tr>
                  <?php else: ?>
                    <tr>
                      <td colspan="8" align="center"><i>Belum ada data tersedia</i></td>
                    </tr>
                  <?php endif; ?> 
                </table>
              </div>
            </div>
          </div>
        </div>
