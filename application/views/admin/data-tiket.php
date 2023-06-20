<section class="content">

<?php echo $title; ?>

<div class="box">
            <div class="box-header">
                <a href="<?php echo site_url('admin/DataTiket/tambahTiket'); ?>" class="btn bg-red"><i class="fa fa-plus-circle"> Tambah Penjualan Tiket </i></a>
            </div>
            <!-- /.box-header -->
            <?= $this->session->flashdata('message2'); ?>
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
                            <td>
                            <img data-toggle="modal" data-target="#myModal<?= $table->id_tiket;?>" src="<?= base_url('assets/img/') . $table->foto; ?>" class="img-thumbnail" width='80' height='80'>
                            </td>
                            <td><?php echo $table->harga ?></td>
                            <td><?php echo $table->jumlah ?></td>
                            <td>
                                <a href="<?php echo site_url('admin/DataTiket/ubahTiket/'. $table->id_tiket); ?>" 
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

<?php foreach ($tabel as $table) { ?>

<div class="modal fade" id="myModal<?= $table->id_tiket;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h4 class="modal-title text-danger" id="myModalLabel"><b> <?= $table->foto ;?> </b></h4>
	      </div>
	      <div class="modal-body">
	      	<center>	
	        	<img src="<?= base_url('assets/img/') . $table->foto; ?>" alt="" class="img-thumbnail">
	        </center>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>	
	      </div>
	    </div>
	  </div>
</div>

<?php } ?>
</script>