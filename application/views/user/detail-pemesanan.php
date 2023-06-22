<!-- Button Phone Number Start -->
<button type="button" class="btn btn-lg rounded-circle shadow" id="btn-to-top">
  <a href="https://wa.me/+6281294684656" target="_blank"><i class="fa fa-phone"></i></a>
</button>
<!-- Button Phone Number End -->


<section id="ubahpassword" class="section-absen" style="padding-bottom: 46px;">
  <div class="attendance-container">
    <h1>DETAIL PEMESANAN ANDA</h1>
    <hr>
    <div class="card-form">
        <?= $this->session->flashdata('message2'); ?>
        <div class="table-responsive">
            <table id="example2" class="table table-striped table-dark table-bordered">
                <thead>
                <tr>
                  <th>Nama Pemesan</th>
                  <th>Nama Tiket</th>
                  <th>Metode Pembayaran</th>
                  <th>Status</th>
                  <th>Claim Tiket</th>
                </tr>
                </thead>
                <tbody class="text-center">
                    <?php foreach($tabel as $table) : ?>
                        <tr>
                            <td><?php echo $table->nama_user; ?></td>
                            <td><?php echo $table->nama_tiket; ?></td>
                            <td><?php echo $table->metode_pembayaran; ?></td>
                            <td> <div 
                            <?php if ($table->log == "Pembayaran Diterima") {
                              echo "class='btn btn-sm btn-success'";
                            } else if ($table->log == "Pembayaran Ditolak") {
                              echo "class='btn btn-sm btn-danger'";
                            } else {
                              echo "class='btn btn-sm btn-warning'";
                            }
                            ?>> <?= $table->log; ?> </div> </td>

                            <td align="center">
                            <?php if ($table->log == "Pembayaran Diterima") {
                                ?>
                              <a href="<?= $table->tiket ?>" class="btn btn-sm btn-success" target="_blank"><i class="fa fa-eye"></i> Ambil Tiket</a>
                            <?php 
                            } else {
                              ?>
                              <a href="<?= $table->tiket ?>" class="btn btn-sm btn-success disabled" target="_blank"><i class="fa fa-eye"></i> Ambil Tiket</a>                              <?php
                            }
                            ?>
                                
                            </td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
  </div>
</section>
