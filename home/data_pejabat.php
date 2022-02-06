<div class="card card-dark">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Daftar Pejabat BAPENDA
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
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No.</th>
						<th class="text-center">Nama</th>
						<th class="text-center">Jabatan</th>
						<th class="text-center">Kelola</th>
					</tr>
				</thead>
				<tbody>

					<?php
					$no = 1;
					$sql = $koneksi->query("select * from tb_pejabat order by id_pejabat asc");
					while ($data = $sql->fetch_assoc()) {
					?>

						<tr>
							<td><?php echo $no++; ?></td>
							<td>
								<?php echo $data['nama']; ?>
							</td>
							<td>
								<?php echo $data['jabatan']; ?>
							</td>

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