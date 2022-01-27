<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data Surat Domisili
		</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="no_surat">NO.SURAT</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="no_surat" name="no_surat" placeholder="NOMOR SURAT" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">TGL. PENGAJUAN</label>
				<div class="col-md-6">
					<input type="date" class="form-control" id="tgl_pengajuan" name="tgl_pengajuan">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="nik">NIK</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="nama">NAMA</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nama" name="nama" placeholder="NAMA" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="alamat">ALAMAT</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="alamat" name="alamat" placeholder="ALAMAT" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="pekerjaan">PEKERJAAN</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="PEKERJAAN" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="keperluan">KEPERLUAN</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="keperluan" name="keperluan" placeholder="KEPERLUAN" required>
				</div>
			</div>


		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-tdkmampu" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php

if (isset($_POST['Simpan'])) {

	$sql_simpan = "INSERT INTO tb_tdkmampu (no_surat,tgl_pengajuan,nik,nama,alamat,pekerjaan,keperluan) VALUES (
		
		'" . $_POST['no_surat'] . "',
        '" . $_POST['tgl_pengajuan'] . "',
        '" . $_POST['nik'] . "',
        '" . $_POST['nama'] . "',
        '" . $_POST['alamat'] . "',
		'" . $_POST['pekerjaan'] . "',		
        '" . $_POST['keperluan'] . "')";

	$query_simpan = mysqli_query($koneksi, $sql_simpan);
	mysqli_close($koneksi);

	if ($query_simpan) {
		echo "<script>
		  Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
		  }).then((result) => {if (result.value){
			  window.location = 'index.php?page=data-tdkmampu';
			  }
		  })</script>";
	} else {
		echo "<script>
		  Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
		  }).then((result) => {if (result.value){
			  window.location = 'index.php?page=add-tdkmampu';
			  }
		  })</script>";
	}
}
