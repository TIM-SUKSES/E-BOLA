<section class="content">

  <?php echo $title; ?>

  <div class="box">
    <div class="box-header">
      <h3 class="box-title"><?php echo $title ?></h3>
    </div>
    <!-- header -->
    <div class="box-body">
      <form action="<?php echo site_url('admin/DataUser/updateUser'); ?>" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id_user" value="<?php echo $row->id_user ?>">
        <table id="table" width="30%">
          <tr>
            <td>
              <div class="form-group">
                <label for="nama_user">NAMA USER <span class="text-danger">*</span></label>
                <input type="text" name="nama_user" id="user" class="form-control" placeholder="Masukkan Nama" required value="<?php echo $row->nama_user ?>">
              </div>
            </td>
          </tr> 
          <tr> 
            <td>
              <div class="form-group">
                <label for="email">EMAIL <span class="text-danger">*</span></label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan Email" required value="<?php echo $row->email ?>">
              </div>
            </td>
          </tr>
          <tr> 
            <td>
              <div class="form-group">
                <label for="password">PASSWORD <span class="text-danger">*</span></label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password" required >
              </div>
            </td>
          </tr>
          <input type="hidden" name="role" value="user  ">
        </table>

        <a href="<?php echo site_url('admin/DataUser/index') ?>" class="btn bg-green"><i class="fa fa-arrow-circle-left"> Kembali </i></a>
        <button type="submit" class="btn bg-navy" style="margin-left: 4px;"><i class="fa fa-pencil-square-o"></i> Ubah</button>
      </form>
    </div>
  </div>
</section>