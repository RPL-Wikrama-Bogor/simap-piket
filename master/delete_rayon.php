<?php 
	mysql_query("DELETE FROM tbl_rayon WHERE kode_rayon = '$_GET[kode_rayon]'");
	echo "<script>alert('Berhasil dihapus!');document.location.href='../hal_utama.php?menu=master_rayon'</script>";
 ?>