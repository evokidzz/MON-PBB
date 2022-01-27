<?php

if (isset($_GET['kode'])) {
	$sql_cek = "SELECT * FROM tb_usaha WHERE nik='" . $_GET['kode'] . "'";
	$query_cek = mysqli_query($koneksi, $sql_cek);
	$data_cek = mysqli_fetch_array($query_cek, MYSQLI_BOTH);
}
?>

<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Ubah Data Surat Keterangan Usaha
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
				<label class="col-sm-2 col-form-label">PEKERJAAN</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?php echo $data_cek['pekerjaan']; ?>" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">JENIS USAHA</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="jns_usaha" name="jns_usaha" value="<?php echo $data_cek['jns_usaha']; ?>" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">ALAMAT USAHA</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="almt_usaha" name="almt_usaha" value="<?php echo $data_cek['almt_usaha']; ?>" />
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Ubah" value="Ubah" class="btn btn-info">
			<a href="?page=data-usaha" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>



<?php

if (isset($_POST['Ubah'])) {
	$sql_ubah = "UPDATE tb_usaha SET 
    tgl_pengajuan='" . $_POST['tgl_pengajuan'] . "', 
    nik='" . $_POST['nik'] . "',
    nama='" . $_POST['nama'] . "', 
    pekerjaan='" . $_POST['pekerjaan'] . "',   
    jns_usaha='" . $_POST['jns_usaha'] . "',
    almt_usaha='" . $_POST['almt_usaha'] . "'
    WHERE no_surat='" . $_POST['no_surat'] . "'";
	$query_ubah = mysqli_query($koneksi, $sql_ubah);
	mysqli_close($koneksi);

	if ($query_ubah) {
		echo "<script>
      Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-usaha';
        }
      })</script>";
	} else {
		echo "<script>
      Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-usaha';
        }
      })</script>";
	}
}
