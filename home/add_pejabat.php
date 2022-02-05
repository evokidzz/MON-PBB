<div class="card card-dark">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data Pejabat
		</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="nama">Nama</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="jabatan">Jabatan</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan" />
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-success">
			<a href="?page=data-pejabat" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>



<?php

if (isset($_POST['Simpan'])) {
	$nik = $_POST['nama'];
	$nama = $_POST['jabatan'];

	$query_simpan = mysqli_query($koneksi, "insert into tb_pejabat values('','$nik','$nama')");




	if ($query_simpan) {
		echo "<script>
			Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
			}).then((result) => {if (result.value){
				window.location = 'index.php?page=data-pejabat';
				}
			})</script>";
	} else {
		echo "<script>
			Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
			}).then((result) => {if (result.value){
				window.location = 'index.php?page=add-pejabat';
				}
			})</script>";
	}
}
