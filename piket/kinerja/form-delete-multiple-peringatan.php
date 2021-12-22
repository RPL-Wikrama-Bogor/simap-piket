<?php
    include "../../config/koneksi.php";

    if (empty($_POST['pilih'])) {
        ?>
            <script language="JavaScript">
                alert('Oops! Data tidak terpilih...');
                document.location='../../hal_utama.php?menu=kinerja_form&peringatan';
            </script>
        <?php
    }
    else {
        $id            =$_POST['pilih'];
        $jml_pilih    =count($id);

        for($x=0;$x<$jml_pilih;$x++){
            $hapus=mysql_query("DELETE FROM tbl_kinerja_siswa WHERE id_kinerja='$id[$x]'");
        }
        if ($hapus) {
            ?>
                <script language="JavaScript">
                alert('Datas berhasil dihapus...');
                document.location='../../hal_utama.php?menu=kinerja_form&peringatan';
                </script>
            <?php
        }
        else{
            echo "Oops! Error 404...";
        }
    }
?>
