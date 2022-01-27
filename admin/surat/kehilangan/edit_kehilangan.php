<?php

if (isset($_GET['kode'])) {
	$sql_cek = "SELECT * FROM tb_kehilangan WHERE no_surat='" . $_GET['kode'] . "'";
	$query_cek = mysqli_query($koneksi, $sql_cek);
	$data_cek = mysqli_fetch_array($query_cek, MYSQLI_BOTH);
}
?>

<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Ubah Data Surat Keterangan Kehilangan
		</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NO.SURAT</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="no_surat" name="no_surat" value="<?php echo $data_cek['no_surat']; ?>" readonly />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">TGL.PENGAJUAN</label>
				<div class="col-sm-8">
					<input type="date" class="form-control" id="tgl_pengajuan" name="tgl_pengajuan" value="<?php echo $data_cek['tgl_pengajuan']; ?>" />
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NIK</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="nik" name="nik" value="<?php echo $data_cek['nik']; ?>" />
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NAMA</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data_cek['nama']; ?>" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">ALAMAT</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $data_cek['alamat']; ?>" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="pekerjaan">PEKERJAAN</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?php echo $data_cek['pekerjaan']; ?>">
				</div>
			</div>


			<div class="form-group row">
				<label class="col-sm-2 col-form-label">TANGGAL KEHILANGAN</label>
				<div class="col-sm-8">
					<input type="date" class="form-control" id="tgl_kehilangan" name="tgl_kehilangan" value="<?php echo $data_cek['tgl_kehilangan']; ?>" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="tmpt_kehilangan">TEMPAT KEHILANGAN</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="tmpt_kehilangan" name="tmpt_kehilangan" value="<?php echo $data_cek['tmpt_kehilangan']; ?>">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="ket">KETERANGAN</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="ket" name="ket" value="<?php echo $data_cek['ket']; ?>">
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Ubah" value="Ubah" class="btn btn-info">
			<a href="?page=data-kehilangan" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>



<?php

if (isset($_POST['Ubah'])) {
	$sql_ubah = "UPDATE tb_kehilangan SET 
    tgl_pengajuan='" . $_POST['tgl_pengajuan'] . "', 
    nik='" . $_POST['nik'] . "',
    nama='" . $_POST['nama'] . "', 
    alamat='" . $_POST['alamat'] . "',
	pekerjaan='" . $_POST['pekerjaan'] . "',   
    tgl_kehilangan='" . $_POST['tgl_kehilangan'] . "',
	tmpt_kehilangan='" . $_POST['tmpt_kehilangan'] . "',
    ket='" . $_POST['ket'] . "'
    WHERE no_surat='" . $_POST['no_surat'] . "'";
	$query_ubah = mysqli_query($koneksi, $sql_ubah);
	mysqli_close($koneksi);

	if ($query_ubah) {
		echo "<script>
      Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-kehilangan';
        }
      })</script>";
	} else {
		echo "<script>
      Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-kehilangan';
        }
      })</script>";
	}
}
