
<div class="content-wrapper">
  <section class="content-header">
    <h1>
         Master
        <small>Master Rombel</small>
        </h1>
      <ol class="breadcrumb">
          <li><a href="?menu=dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Master</li>
        <li class="active">Master Rombel</li>
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
        <label  class="col-sm-2 control-label">Kode Rombel</label>
        <div class="col-sm-4">
          <input type="text" name="kode_rombel" class="form-control" required placeholder="masukkan kode rombel">
        </div>
      </div>
      <div class="form-group">
        <label  class="col-sm-2 control-label">Tahun Pelajaran</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="tahun_pelajaran" placeholder="masukkan tahun pelajaran" required>
        </div>
      </div>  
      <div class="form-group">
        <label  class="col-sm-2 control-label">Rombel</label>
        <div class="col-sm-4">
          <input type="text" name="rombel" class="form-control" required placeholder="masukkan nama rombel">
        </div>
      </div>    
      <div class="form-group">
        <label for="inputName" class="col-sm-2 control-label">Tingkat</label>

        <div class="col-sm-10">
          <select name="tingkat"  class="form-control">
            <option value="" selected disabled>Pilih Tingkat</option>
              <option value="X">X</option>
              <option value="XI">XI</option>
              <option value="XII">XII</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="inputName" class="col-sm-2 control-label">Jurusan</label>

        <div class="col-sm-10">
          <select name="jurusan"  class="form-control">
            <option value="" selected disabled>Pilih Jurusan</option>
              <option value="RPL">RPL</option>
              <option value="OTKP">OTKP</option>
              <option value="BDP">BDP</option>
              <option value="MMD">MMD</option>
              <option value="TKJ">TKJ</option>
              <option value="HTL">HTL</option>
              <option value="TBG">TBG</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label  class="col-sm-2 control-label">Jumlah Siswa</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" name="jumlah_siswa" placeholder="masukkan jumlah siswa" required>
        </div>
      </div> 

 

      
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" name="simpan" class="btn btn-lg btn-primary col-md-4" value="Simpan">
                <?php 
                  $table = "tbl_rombel";
                  $redirect ="hal_utama.php?menu=master_rombel";
                  $field = array(
                  'kode_rombel'=>@$_POST['kode_rombel'],
                  'tahun_pelajaran'=>@$_POST['tahun_pelajaran'],
                  'rombel'=>@$_POST['rombel'],
                  'tingkat'=>@$_POST['tingkat'],
                  'jurusan'=>@$_POST['jurusan'],
                  'jumlah_siswa'=>@$_POST['jumlah_siswa'],
                  'tanggal_update'=>"",  
                  'user_update'=>"", 
                  // }      
            );
                  if (isset($_POST['simpan'])) {
                    mysql_query("INSERT INTO `tbl_rombel`(`kode_rombel`, `tahun_pelajaran`, `rombel`,`tingkat`,`jurusan`,`jumlah_siswa`,`tanggal_update`, `user_update`) VALUES ('$_POST[kode_rombel]','$_POST[tahun_pelajaran]','$_POST[rombel]','$_POST[tingkat]','$_POST[jurusan]','$_POST[jumlah_siswa]','','')");
                    echo "<script>alert('Rombel baru berhasil di tambah!');document.location.href='hal_utama.php?menu=master_rombel'</script>";
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
    <div class="panel-heading">Daftar Rombel</div>
    <div class="panel-body">
      <div class="table-responsive">
        <table id="example" class="table table-bordered table-hover">
                   <thead>
                      <tr>
                        <th>Kode Rombel</th>
                        <th>Rombel</th>
                        <th>Jumlah siswa</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                  $sql = mysql_query("SELECT * FROM `tbl_rombel`");
                  while ($q = mysql_fetch_array($sql)) {
                  ?>
                  <tr>
                  <td><?php echo $q['kode_rombel']; ?></td>
                  <td><?php echo $q['rombel']; ?></td>
                  <td><?php echo $q['jumlah_siswa']; ?></td>
                  <td><a href="#" class="btn btn-primary col-md-3" style="margin-right: 1%;">Edit</a> <a href="master/delete_rombel.php?kode_rombel=<?php echo $q['kode_rombel'] ?>"  class="btn btn-danger col-md-3">Hapus</a></td>
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