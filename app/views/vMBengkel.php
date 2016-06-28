        <div class="row">
          <div class="col-md-7">
            <div class="box box-success">
              <div class="box-header">
                <h3 class="box-title">Daftar Bengkel</h3>
                <h3 class="box-title pull-right"><a href="<?= base_url('member/bengkel/tambah') ?>" class="btn btn-block btn-xs btn-info btn-flat" style="padding:0px 5px;border:none;">Tambah Bengkel</a></h3>
              </div>
              <div class="box-body no-padding">
                <table class="table table-condensed table-bordered">
                  <tr>
                    <th>Nama</th>
                    <th width="35%">Provinsi</th>
                    <th>Kota / Kab.</th>
                    <th>Kec.</th>
                    <th></th>
                  </tr>
                  <?php if(!empty($dataBengkel)):foreach($dataBengkel as $dat):?>
                    <tr>
                      <td><a href="#"><?= $dat['nama'] ?></a></td>
                      <td><?php if(!empty($dat['provinsi'])):echo $dat['provinsi'];else:echo 'Belum diketahui';endif; ?></td>
                      <td><?php if(!empty($dat['kota_kabupaten'])):echo $dat['kota_kabupaten'];else:echo 'Belum diketahui';endif; ?></td>
                      <td><?php if(!empty($dat['kecamatan'])):echo $dat['kecamatan'];else:echo 'Belum diketahui';endif; ?></td>
                      <td><a href="<?= base_url('member/bengkel/hapus/'.$dat['id_bengkel']) ?>" class="btn btn-danger btn-flat btn-block btn-xs">Hapus</a></td>
                    </tr>
                  <?php endforeach; else: ?>
                    <tr>
                      <td colspan="8" align="center"><i>Belum ada data tersedia</i></td>
                    </tr>
                  <?php endif; ?>
                </table>
              </div>
            </div>
          </div><!-- /.col-md-7 -->
          <div class="col-md-5">
          </div><!-- /.col-md-5 -->
        </div><!-- /.row -->
