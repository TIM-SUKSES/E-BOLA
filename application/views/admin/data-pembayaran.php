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
                  <th>Harga</th>
                  <th>Metode Pembayaran</th>
                  <th>Tanggal Bayar</th>
                  <th>Bukti Pembayaran</th>
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
                            <td>Rp. <?php echo $table->harga ?></td>
                            <td><?php echo $table->metode_pembayaran ?></td>
                            <td><?php echo $table->tanggal_input ?></td>
                            <td>
                            <img data-toggle="modal" data-target="#myModal<?= $table->id_pembayaran;?>" src="<?= base_url('assets/img/') . $table->file; ?>" class="img-thumbnail" width='80' height='80'>
                            </td>
                            <td><?php echo $table->tiket ?></td>
                            <td>
                            <div 
                            <?php if ($table->log == "Pembayaran Diterima") {
                              echo "class='btn btn-sm btn-success'";
                            } else if ($table->log == "Pembayaran Ditolak") {
                              echo "class='btn btn-sm btn-danger'";
                            } else {
                              echo "class='btn btn-sm btn-warning'";
                            }
                             ?>> <?= $table->log; ?> </div>
                            </td>
                            <td align="center">
                            <?php if ($table->log == "Pembayaran Diterima") {
                              ?> <a href="<?php echo site_url('admin/DataPembayaran/editPembayaran/'. $table->id_pembayaran); ?>" 
                              class="btn btn-sm btn-info"><i class="fa fa-pencil-square-o"></i>Kirim Tiket</a>
                              <?php 
                            } else if ($table->log == "Pembayaran Ditolak") { 
                            ?>
                            <a href="#" 
                              class="btn btn-sm btn-success"><i class="fa fa-check"></i>Selesai</a>
                            <?php
                            } else {
                              ?>
                              <a href="<?= base_url('admin/DataPembayaran/terima/') . $table->id_pembayaran; ?>"  
                                class="btn btn-sm btn-info" onclick="return confirm('Apakah anda yakin menerima pembayaran ?')"><i class="fa fa-check"></i> Terima</a>
                              <a href="<?= base_url('admin/DataPembayaran/tolak/') . $table->id_pembayaran; ?>"  
                                class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin menolak pembayaran ?')"><i class="fa fa-close"></i> Tolak</a>
                              <?php
                            }
                            ?>
                                
                            </td>
                        </tr>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                </table>
            </div>
</div>
<?php foreach ($tabel as $table) { ?>

<div class="modal fade" id="myModal<?= $table->id_pembayaran;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h4 class="modal-title text-danger" id="myModalLabel"><b> <?= $table->file ;?> </b></h4>
	      </div>
	      <div class="modal-body">
	      	<center>	
	        	<img src="<?= base_url('assets/img/') . $table->file; ?>" alt="" class="img-thumbnail">
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