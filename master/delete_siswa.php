<?php 
	mysql_query("DELETE FROM tbl_siswa WHERE nis = '$_GET[nis]'");
	echo "<script>alert('Berhasil dihapus!');document.location.href='../hal_utama.php?menu=master_siswa'</script>";
 ?>