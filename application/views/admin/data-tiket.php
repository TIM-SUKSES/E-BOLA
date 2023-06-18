<section class="content">

<?php echo $title; ?>

<div class="box">
            <div class="box-header">
                <a href="<?php echo site_url('admin/DataTiket/tambahTiket'); ?>" class="btn bg-red"><i class="fa fa-plus-circle"> Tambah Penjualan Tiket </i></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama Tiket</th>
                  <th>Gambar Tiket</th>
                  <th>Harga</th>
                  <th>jumlah</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    <?php $id_tiket = 1; foreach($tabel as $table) : ?> 
                        <tr>
                            <td><?php echo $id_tiket++ ?></td>
                            <td><?php echo $table->nama_tiket ?></td>
                            <td><?php echo $table->foto ?></td>
                            <td><?php echo $table->harga ?></td>
                            <td><?php echo $table->jumlah ?></td>
                            <td>
                                <a href="<?php echo site_url('admin/DataTiket/editTiket/'. $table->id_tiket); ?>" 
                                class="btn btn-sm btn-info"><i class="fa fa-pencil-square-o"></i>Ubah</a>
                                <a href="<?php echo site_url('admin/DataTiket/hapus/'. $table->id_tiket); ?>" 
                                class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapusnya ?')"><i class="fa fa-trash-o"></i>Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                </table>
            </div>
</div>
</script>