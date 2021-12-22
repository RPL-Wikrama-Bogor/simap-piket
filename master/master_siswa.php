
<div class="content-wrapper">
	<section class="content-header">
		<h1>
	       Master
        <small>Master Siswa</small>
      	</h1>
	    <ol class="breadcrumb">
	        <li><a href="?menu=dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li class="active">Master</li>
	    	<li class="active">Master Siswa</li>
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
        <label  class="col-sm-2 control-label">NIS</label>
        <div class="col-sm-4">
        	<input type="text" name="nis" class="form-control" required maxlength="8" minlength="8" placeholder="Masukan NIS siswa...">
        </div>
      </div>
      <div class="form-group">
        <label  class="col-sm-2 control-label">Nama</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="nama" placeholder="Nama" required>
        </div>
      </div>      
      <div class="form-group">
        <label for="inputName" class="col-sm-2 control-label">Rombel</label>

        <div class="col-sm-10">
          <select name="rombel"  class="form-control">
        		<option value="" selected disabled>Pilih Rombel</option>
        			<?php 
        			$sql = mysql_query("SELECT * FROM `tbl_rombel`");
        			while ($q = mysql_fetch_array($sql)) {
        			?>
        			<option value="<?php echo $q['kode_rombel'] ?>"><?php echo $q['rombel']; ?></option>
        			<?php
        			}
        		 	?>
        		
        	</select>
        </div>
      </div>
      <div class="form-group">
        <label for="inputExperience" class="col-sm-2 control-label">Rayon</label>

        <div class="col-sm-10">
          <select name="rayon"  class="form-control">
        		<option value="" selected disabled>Pilih Rayon</option>
        			<?php 
        			$sql = mysql_query("SELECT * FROM `tbl_rayon`");
        			while ($q = mysql_fetch_array($sql)) {
        			?>
        			<option value="<?php echo $q['kode_rayon'] ?>"><?php echo $q['rayon']; ?></option>
        			<?php
        			}
        		 	?>
        		
        	</select>
        </div>
      </div>
      <div class="form-group">
        <label for="inputSkills" class="col-sm-2 control-label">Jenis Kelamin</label>

        <div class="col-sm-10">
        	<select name="jk"  class="form-control">
        		<option value="" selected disabled>Pilih Jenis Kelamin</option>
        		<option value="L">Laki-laki</option>
        		<option value="P">Perempuan</option>
        	</select>
        </div>
      </div>

      <div class="form-group">
        <label for="inputExperience" class="col-sm-2 control-label">Tanggal Lahir</label>

        <div class="col-sm-10">
          <input type="date" class="form-control" name="tanggal_lahir">
        </div>
      </div>
      <div class="form-group">
        <label for="inputExperience" class="col-sm-2 control-label">Alamat</label>

        <div class="col-sm-10">
          <textarea name="alamat" class="form-control"></textarea>
        </div>
      </div>
      <div class="form-group">
        <label for="inputExperience" class="col-sm-2 control-label">Agama</label>

        <div class="col-sm-10">
        	<select name="agama" class="form-control">
        		<option selected disabled>Pilih Agama</option>
        		<option value="Islam">Islam</option>
        		<option value="Protestan">Protestan</option>
        		<option value="Katolik">Katolik</option>
        		<option value="Buddha">Buddha</option>
        		<option value="Hindu">Hindu</option>
        		<option value="Konghucu">Konghucu</option>
        	</select>
        </div>
      </div>
      <div class="form-group">
        <label for="inputExperience" class="col-sm-2 control-label">Tahun Masuk</label>

        <div class="col-sm-10">
          <input type="number" class="form-control" name="tahun_masuk">
        </div>
      </div>

 

      
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" name="simpan" class="btn btn-lg btn-primary col-md-4" value="Simpan">
                <?php 
                	// if (isset($_POST['simpan'])) {
                	// 	$tanggallhr = date("Y/m/d",$_POST['tanggal_lahir']);
                	// 	$sql = mysql_query("INSERT INTO `tbl_siswa`(`nis`, `nama`, `jk`, `tgl_lahir`, `alamat`, `agama`, `kode_rombel`, `kode_rayon`, `tahun_masuk`, `password`, `tgl_update`, `user_update`,`skor_p`,`skor_r`,`tanggal_kejadian`,`saksi`) VALUES ('$_POST[nis]','$_POST[nama]','$_POST[jk]','$tanggallhr','$_POST[alamat]','$_POST[agama]','$_POST[kode_rombel]','$_POST[kode_rayon]','$_POST[tahun_masuk]','','','','','','','')");
                	// 	if ($sql == TRUE) {
                	// 		echo "<script>alert('Siswa baru berhasil di tambah!');document.location.href='hal_utama.php?menu=master_siswa'</script>";
                	// 	}else {
                	// 		echo "<script>alert('Gagal');document.location.href='hal_utama.php?menu=master_siswa'</script>";
                	// 	}
                		
                	// }
                	$table = "tbl_siswa";
                	$redirect ="hal_utama.php?menu=master_siswa";
                	$tanggallhr = date("Y/m/d",@$_POST['tanggal_lahir']);
                	$field = array(
					    'nis'=>@$_POST['nis'],    
					    'nama'=>@$_POST['nama'], 
					    'jk'=>@$_POST['jk'],       
					    'tgl_lahir'=>@$tanggallhr,
					    'alamat'=>@$_POST['alamat'],
					    'agama'=>@$_POST['agama'],
					    'kode_rombel'=>@$_POST['rombel'],
					    'kode_rayon'=>@$_POST['rayon'],
					    'tahun_masuk'=>@$_POST['tahun_masuk'],
					    'password'=>"",
					    'tgl_update'=>"",
					    'user_update'=>"",
					    'skor_p'=>"",
					    'skor_r'=>"",
					    'tanggal_kejadian'=>"",
					    'saksi'=>"",        
  					);
                	if (isset($_POST['simpan'])) {
    					$aksi->simpan($table,$field,$redirect);
    					$aksi->alert("Data Berhasil Disimpan",$redirect);
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
		<div class="panel-heading">Daftar Siswa</div>
		<div class="panel-body">
			<div class="table-responsive">
				<table id="example" class="table table-bordered table-hover">
	                 <thead>
		                	<tr>
		                		<th>Nis</th>
		                		<th>Nama</th>
		                		<th>JK</th>
		                		<th>Rombel</th>
		                		<th>Rayon</th>
		                		<th>Aksi</th>
		                	</tr>
		                </thead>
		                <tbody>
		                	<?php 
		        			$sql = mysql_query("SELECT * FROM `tbl_siswa`");
		        			while ($q = mysql_fetch_array($sql)) {
		        				$rombel = mysql_query("SELECT * FROM tbl_rombel WHERE kode_rombel = '$q[kode_rombel]'");
		        				$rombelary = mysql_fetch_array($rombel);
		        				$rayon = mysql_query("SELECT * FROM tbl_rayon WHERE kode_rayon = '$q[kode_rayon]'");
		        				$rayonary = mysql_fetch_array($rayon);
		        			?>
		        			<tr>
		        			<td><?php echo $q['nis']; ?></td>
		        			<td><?php echo $q['nama']; ?></td>
		        			<td><?php echo $q['jk']; ?></td>
		        			<td><?php echo $rombelary['rombel'] ?></td>
		        			<td><?php echo $rayonary['rayon']; ?></td>
		        			<td><a href="hal_utama.php?menu=edit_siswa&nis=<?php echo $q['nis'] ?>" class="btn btn-primary col-md-6">Edit</a> <a href="master/delete_siswa.php?nis=<?php echo $q['nis'] ?>"  class="btn btn-danger col-md-6">Hapus</a></td>
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