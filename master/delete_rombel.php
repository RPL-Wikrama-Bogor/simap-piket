<?php 
	mysql_query("DELETE FROM tbl_rombel WHERE kode_rombel = '$_GET[kode_rombel]'");
	echo "<script>alert('Berhasil dihapus!');document.location.href='../hal_utama.php?menu=master_rombel'</script>";
 ?>