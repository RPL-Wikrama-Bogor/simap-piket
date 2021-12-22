<div class="col-md-12">
	<div class="panel panel-default">
		<div class="panel-heading">Daftar Siswa Yang Sering Mendapatkan Penghargaan</div>
		<div class="panel-body">
			<div class="table-responsive">
				<table id="example" class="table table-bordered table-hover">
	                 <thead>
		                	<tr>
		                		<th width="4%">No.</th>
		                		<th>Nis</th>
		                		<th>Nama</th>
		                		<th>JK</th>
		                		<th>Rombel</th>
		                		<th>Rayon</th>
		                		<th><center>Jumlah Skor</center></th>
		                	</tr>
		                </thead>
		                <tbody>
		                	<?php
		                		$no =0;
		                		$table = "tbl_kinerja_siswa";
		                		$where = "WHERE kelompok_kinerja = 'REWARD'";
		                		$sum = "nis,nama,rombel,kode_rayon,kelompok_kinerja,SUM(skor_r) as besar_skor";
		                		$data = $aksi->tampil_sum($sum,$table,$where,"GROUP BY nis ORDER BY besar_skor DESC LIMIT 0,100");
		                		if (!empty($data)) {
		                		foreach ($data as $r) {
		                			$no++;
		                			$siswa = $aksi->caridata("tbl_siswa WHERE nis = '$r[nis]'");
		                			$rayon = $aksi->caridata("tbl_rayon WHERE kode_rayon = '$r[kode_rayon]'");
		                		 ?>
		                		 	<tr>
				             			<td><?php echo $no; ?>.</td>
				             			<td><?php echo $r['nis']; ?></td>
				             			<td><?php echo $r['nama']; ?></td>
				             			<td>
				             				<?php
				             					if ($siswa['jk']=="L") {
				             						echo "Laki-laki";
				             					}else{
				             						echo "Perempuan";
				             					}
				             				 ?>
				             			</td>
				             			<td><?php echo $r['rombel']; ?></td>
				             			<td><?php echo $rayon['rayon']; ?></td>
				             			<td align="center">
				             				<a href="#" data-toggle="modal" data-target="#<?php echo $r['nis'].$r['kelompok_kinerja']; ?>" >
								           		<?php echo $r['besar_skor']; ?>
				             				</a>
													<form class="" action="piket/kinerja/form-delete-multiple.php" method="post" name="postform" enctype="multipart/form-data">
			             				<div class="modal fade" id="<?php echo $r['nis'].$r['kelompok_kinerja']; ?>">
		             					<div class="modal-dialog modal-lg modal-primary">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
															<h4 class="modal-title">Daftar Riwayat Reward : <?php echo $r['nama']; ?></h4>
														</div>

															<table class="table table-bordered table-striped table-hover">
																<thead>
																	<tr>
									                    <th><center>No.</center></th>
									                    <th>Tanggal</th>
									                    <th>Nama Kinerja</th>
									                    <th>Saksi</th>
									                    <th><center>Skor</center></th>
									                    <th><center>Edit</center></th>
									                    <th><center>Hapus</center></th>
									                </tr>
																</thead>
																<tbody>
																	<?php
																		$no_detail = 0;
																		$where_detail = "WHERE nis = '$r[nis]' AND kelompok_kinerja = 'REWARD'";
																		$details = $aksi->tampil($table,$where_detail,"ORDER BY tgl_kejadian ASC");
																		foreach ($details as $detail) {
																			$no_detail++;
																			$detail_kinerja = $aksi->caridata("tbl_poin_kinerja WHERE kode_kinerja = '$detail[kode_kinerja]'");
																		?>
																			<tr>
																				<td><center><?php echo $no_detail; ?>.</center></td>
																				<td><?php $aksi->format_tanggal($detail['tgl_kejadian']); ?></td>
																				<td><?php echo $detail['kode_kinerja']." | ".$detail_kinerja['nama_kinerja']; ?></td>
																				<td><?php echo $detail['saksi']; ?></td>
																				<td><center><?php echo $detail['skor_r']; ?></center></td>
																				<td>
																					<center>
											             					<a href="?menu=kinerja_form&input&edit&id=<?php echo $detail['id_kinerja']; ?>" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-edit"></span></a>
											             				</center>
																				</td>
																				<td>
											            				<center>
											            					<!-- <a href="?menu=kinerja_form&daftar&hapus&id=<?php echo $detail['id_kinerja']; ?>" onclick="return confirm('Apakah Anda yakin akan menghapus Kinerja ini ?')"  class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></a> -->
																						<input type="checkbox" name="pilih[]" value="<?php echo $detail['id_kinerja']; ?>">
											            				</center>
											            			</td>
																			</tr>

																	<?php } ?>
																</tbody>
															</table>

														<div class="modal-footer">
															<button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
															<button type="submit" class="btn btn-danger" name="hapus" onclick="return confirm('Apakah Anda yakin akan menghapus Kinerja ini ?');">Hapus</button>
														</div>
													</div>
												</div>
		             				</div>
												</form>
				             			</td>
				             		</tr>

	                		<?php  } } ?>
		                </tbody>
	            </table>
			</div>
		</div>
	</div>
	</div>
