TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER `hapus_siswa` AFTER DELETE ON `tbl_siswa`\n FOR EACH ROW UPDATE tbl_rombel SET jumlah_siswa = jumlah_siswa - 1 WHERE kode_rombel = OLD.kode_rombel' 'CREATE DEFINER=`root`@`localhost` TRIGGER `tambah_siswa` AFTER INSERT ON `tbl_siswa`\n FOR EACH ROW UPDATE tbl_rombel SET jumlah_siswa = jumlah_siswa+1 WHERE kode_rombel = NEW.kode_rombel'
sql_modes=524288 524288
definers='root@localhost' 'root@localhost'
client_cs_names='utf8' 'utf8'
connection_cl_names='utf8_general_ci' 'utf8_general_ci'
db_cl_names='latin1_swedish_ci' 'latin1_swedish_ci'
