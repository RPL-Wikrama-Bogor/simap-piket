
<div class="content-wrapper">
  <section class="content-header">
    <h1>
         Master
        <small>Master Rayon</small>
        </h1>
      <ol class="breadcrumb">
          <li><a href="?menu=dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Master</li>
        <li class="active">Master Rayon</li>
      </ol>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="nav-tabs-custom">

                <section class="tab-content">
                  <div class="active tab-pane">
                    <div class="row">
  <div class="col-md-12" style="margin-top: 4%;">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <form method="post" class="form-horizontal">
      <div class="form-group">
        <label  class="col-sm-2 control-label">Kode Rayon</label>
        <div class="col-sm-4">
          <input type="text" name="kode_rayon" class="form-control" required placeholder="masukkan kode rayon">
        </div>
      </div>
      <div class="form-group">
        <label  class="col-sm-2 control-label">Rayon</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="rayon" placeholder="masukkan rayon" required>
        </div>
      </div>      

 

      
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" name="simpan" class="btn btn-lg btn-primary col-md-4" value="Simpan">
                <?php 
                  $table = "tbl_rayon";
                  $redirect ="hal_utama.php?menu=master_rayon";
                  $field = array(
                  'kode_rqyon'=>@$_POST['kode_rayon'],
                  'rayon'=>@$_POST['rayon'],
                  'tanggal_update'=>"",  
                  'user_update'=>"", 
                  // }      
                  );
                  if (isset($_POST['simpan'])) {
                    mysql_query("INSERT INTO `tbl_rayon`(`kode_rayon`, `rayon`, `tgl_update`, `user_update`) VALUES ('$_POST[kode_rayon]','$_POST[rayon]','','')");
                    echo "<script>alert('Rayon baru berhasil di tambah!');document.location.href='hal_utama.php?menu=master_rayon'</script>";
                  }
                 ?>
           
        </div>
      </div>
      <br> <br> <br>
    </form>
  </div>
</div>
                      </div>
                  </div>
                </section>
            </div>
      </div>
    </div>
  </section>
</div>
<div class="content-wrapper">
  <div class="col-md-12">
</div>
<div class="col-md-12">
  <div class="panel panel-default">
    <div class="panel-heading">Daftar Rayon</div>
    <div class="panel-body">
      <div class="table-responsive">
        <table id="example" class="table table-bordered table-hover">
                   <thead>
                      <tr>
                        <th>Kode Rayon</th>
                        <th>Rayon</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                  $sql = mysql_query("SELECT * FROM `tbl_rayon`");
                  while ($q = mysql_fetch_array($sql)) {
                  ?>
                  <tr>
                  <td><?php echo $q['kode_rayon']; ?></td>
                  <td><?php echo $q['rayon']; ?></td>
                  <td><a href="#" class="btn btn-primary col-md-2" style="margin-right: 1%;">Edit</a> <a href="master/delete_rayon.php?kode_rayon=<?php echo $q['kode_rayon'] ?>" class="btn btn-danger col-md-2">Hapus</a></td>
                  </tr>
                  <?php
                  }
                  ?>
                    </tbody>
                </table>
                      
</div>
</div>
</div>
</div>
</div>