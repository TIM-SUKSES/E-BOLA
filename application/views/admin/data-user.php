<section class="content">

<?php echo $title; ?>

<div class="box">
            <!-- /.box-header -->
            <div class="box-body">
            <?= $this->session->flashdata('message'); ?>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    <?php $id_user = 1; foreach($tabel as $table) : ?> 
                        <tr>
                            <td><?php echo $id_user++ ?></td>
                            <td><?php echo $table->nama_user ?></td>
                            <td><?php echo $table->email ?></td>
                            <td><?php echo $table->password ?></td>
                            <td>
                                <a href="<?php echo site_url('admin/DataUser/editUser/'. $table->id_user); ?>" 
                                class="btn btn-sm btn-info"><i class="fa fa-pencil-square-o"></i>Ubah</a>
                                <a href="<?php echo site_url('admin/DataUser/hapus/'. $table->id_user); ?>" 
                                class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapusnya ?')"><i class="fa fa-trash-o"></i>Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                </table>
            </div>
</div>
</script>