<section class="content">

<?php echo $title; ?>

<div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama Buyer</th>
                  <th>Tiket Yang Dibeli</th>
                  <th>Link Tiket</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    <?php $id_pembayaran = 1; foreach($tabel as $table) : ?> 
                        <tr>
                            <td><?php echo $id_pembayaran++ ?></td>
                            <td><?php echo $table->nama_user ?></td>
                            <td><?php echo $table->nama_tiket ?></td>
                            <td><?php echo $table->tiket ?></td>
                            <td><?php echo $table->log ?></td>
                            <td>
                                <a href="<?php echo site_url('admin/Pembayaran/editTiket/'. $table->id_pembayaran); ?>" 
                                class="btn btn-sm btn-info"><i class="fa fa-pencil-square-o"></i>Ubah</a>
                                <a href="<?php echo site_url('admin/DataPembayaran/hapus/'. $table->id_pembayaran); ?>" 
                                class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapusnya ?')"><i class="fa fa-trash-o"></i>Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                </table>
            </div>
</div>
</script>