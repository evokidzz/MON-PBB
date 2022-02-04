<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Nama Pejabat BAPENDA
		</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add-pejabat" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah Data</a>
				<a href="admin\cetak\pejabat\cetak_lap_pejabat.php" target="_blank" title="Cetak" class="btn btn-success"><i class="fa fa-print">
					</i> Cetak Data</a>
			</div>
			<br>
			<table id="" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>Nama</th>
						<th>Jabatan</th>
						<!-- <th>NIP</th> -->
						<th class="text-center">Kelola</th>
					</tr>
				</thead>
				<tbody>

					<?php
					$no = 1;
					$sql = $koneksi->query("select * from tb_pejabat");
					while ($data = $sql->fetch_assoc()) {
					?>

						<tr>
							<td>
								<?php echo $data['nama']; ?>
							</td>
							<td>
								<?php echo $data['jabatan']; ?>
							</td>
							<!-- <td>
								<?php echo $data['nip']; ?>
							</td> -->
							<td class="text-center">
								<a href="?page=edit-pejabat&kode=<?php echo $data['id_pejabat']; ?>" title="Ubah" class="btn btn-success btn-sm">
									<i class="fa fa-wrench"></i>
								</a>
								<a href="?page=del-pejabat&kode=<?php echo $data['nik']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')" title="Hapus" class="btn btn-danger btn-sm">
									<i class="fa fa-trash"></i>
							</td>
						</tr>

					<?php
					}
					?>
				</tbody>
				</tfoot>
			</table>
		</div>
	</div>
	<!-- /.card-body -->