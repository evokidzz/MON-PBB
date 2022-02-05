<?php

if (isset($_GET['kode'])) {
	$sql_cek = "SELECT * FROM tb_baru WHERE id_baru='" . $_GET['kode'] . "'";
	$query_cek = mysqli_query($koneksi, $sql_cek);
	$data_cek = mysqli_fetch_array($query_cek, MYSQLI_BOTH);
}
?>

<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Ubah Data Berkas Daftar Baru
		</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<input type='hidden' class="form-control" name="id_baru" value="<?php echo $data_cek['id_baru']; ?>" readonly />

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">No.Pelayanan</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="no_pel" name="no_pel" value="<?php echo $data_cek['no_pel']; ?>" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">TGL.PENGAJUAN</label>
				<div class="col-sm-8">
					<input type="date" class="form-control" id="tgl_pel" name="tgl_pel" value="<?php echo $data_cek['tgl_pel']; ?>" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NOP</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="nop" name="nop" value="<?php echo $data_cek['nop']; ?>" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NIK/NPWP</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="nik" name="nik" value="<?php echo $data_cek['nik']; ?>" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama</label>
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
				<label class="col-sm-2 col-form-label">LETAK OP</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="letak_op" name="letak_op" value="<?php echo $data_cek['letak_op']; ?>" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">KELURAHAN</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="kelurahan" name="kelurahan" value="<?php echo $data_cek['kelurahan']; ?>" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">KECAMATAN</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="kecamatan" name="kecamatan" value="<?php echo $data_cek['kecamatan']; ?>" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">KETERANGAN</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="keterangan" name="keterangan" value="<?php echo $data_cek['keterangan']; ?>" />
				</div>
			</div>


		</div>
		<div class="card-footer">
			<input type="submit" name="Ubah" value="Ubah" class="btn btn-success">
			<a href="?page=data-baru" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>



<?php

if (isset($_POST['Ubah'])) {
	$sql_ubah = "UPDATE tb_baru SET 
    no_pel='" . $_POST['no_pel'] . "', 
    tgl_pel='" . $_POST['tgl_pel'] . "'
    nop='" . $_POST['nop'] . "'
    nik='" . $_POST['nik'] . "'
    nama='" . $_POST['nama'] . "'
    alamat='" . $_POST['alamat'] . "'
    letak_op='" . $_POST['letak_op'] . "'
    kelurahan='" . $_POST['kelurahan'] . "'
    kecamatan='" . $_POST['kecamatan'] . "'
    keterangan='" . $_POST['keterangan'] . "'
    WHERE id_baru='" . $_POST['id_baru'] . "'";
	$query_ubah = mysqli_query($koneksi, $sql_ubah);
	mysqli_close($koneksi);

	if ($query_ubah) {
		echo "<script>
      Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-baru';
        }
      })</script>";
	} else {
		echo "<script>
      Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-baru';
        }
      })</script>";
	}
}
