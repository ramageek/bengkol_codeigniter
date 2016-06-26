        <div class="row">
          <div class="col-md-6">
            <div class="box box-success">
              <div class="box-header">
                <h3 class="box-title">Daftar Bengkel #1</h3>
              </div>
              <div class="box-body no-padding">
                <table class="table table-condensed table-bordered">
                  <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Provinsi</th>
                    <th>Kota / Kab.</th>
                    <th>Kec.</th>
                  </tr>
                  <?php if(!empty($dataBengkel)) :$i=1;foreach($dataBengkel as $dat) :?>
                    <tr>
                      <td><?= $i ?></td>
                      <td><a href="#"><?= $dat['nama'] ?></a></td>
                      <td><?php if(!empty($dat['provinsi'])):echo $dat['provinsi'];else:echo 'Belum diketahui';endif; ?></td>
                      <td><?php if(!empty($dat['kota_kabupaten'])):echo $dat['kota_kabupaten'];else:echo 'Belum diketahui';endif; ?></td>
                      <td><?php if(!empty($dat['kecamatan'])):echo $dat['kecamatan'];else:echo 'Belum diketahui';endif; ?></td>
                    </tr>
                  <?php $i++;endforeach; else: ?>
                    <tr>
                      <td colspan="8" align="center"><i>Belum ada data tersedia</i></td>
                    </tr>
                  <?php endif; ?>
                </table>
              </div>
            </div>
          </div><!-- /.col-md-6 -->
          <div class="col-md-6">
            <div class="box box-success">
              <div class="box-header">
                <h3 class="box-title">Daftar Bengkel #2</h3>
                <h3 class="box-title pull-right" style="height:18px;"><a href="<?= base_url('member/bengkel/tambah') ?>" class="btn btn-danger btn-flat btn-xs" style="border-top:0px;border-bottom:0px;padding:0px 5px;">Tambah Bengkel</a></h3>
              </div>
              <div class="box-body no-padding">
                <table class="table table-condensed table-bordered">
                  <tr>
                    <th width="50%">Ket</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>#</th>
                  </tr>
                  <?php if(!empty($dataBengkel)) :$i=1;foreach($dataBengkel as $dat) :?>
                    <tr>
                      <td><?= $dat['keterangan'] ?></td>
                      <td><?php if(!empty($dat['latitude'])):echo $dat['latitude'];else:echo 'Belum diketahui';endif; ?></td>
                      <td><?php if(!empty($dat['longitude'])):echo $dat['longitude'];else:echo 'Belum diketahui';endif; ?></td>
                      <td><?= $i ?></td>
                    </tr>
                  <?php $i++;endforeach; else: ?>
                    <tr>
                      <td colspan="8" align="center"><i>Belum ada data tersedia</i></td>
                    </tr>
                  <?php endif; ?>
                </table>
              </div>
            </div>
          </div>
        </div><!-- /.row -->
