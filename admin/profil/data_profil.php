<div class="card card-dark">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Profil Instansi
		</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<table id="" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>Nama Instansi</th>
						<th>Alamat</th>
						<th>Kecamatan</th>
						<th>Kabupaten</th>
						<th>Kelola</th>
					</tr>
				</thead>
				<tbody>

					<?php
					$no = 1;
					$sql = $koneksi->query("select * from tb_profil");
					while ($data = $sql->fetch_assoc()) {
					?>

						<tr>
							<td>
								<?php echo $data['nama_kantor']; ?>
							</td>
							<td>
								<?php echo $data['alamat']; ?>
							</td>
							<td>
								<?php echo $data['kecamatan']; ?>
							</td>
							<td>
								<?php echo $data['kabupaten']; ?>
							</td>
							<td>
								<a href="?page=edit-profil&kode=<?php echo $data['id_profil']; ?>" title="Ubah" class="btn btn-success btn-sm">
									<i class="fa fa-wrench"></i>
								</a>
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