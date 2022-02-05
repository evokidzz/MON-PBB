<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data Daftar Baru
		</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="no_pel">NO.PELAYANAN</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="no_pel" name="no_pel" placeholder="NO.PELAYANAN" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">TGL.PELAYANAN</label>
				<div class="col-md-6">
					<input type="date" class="form-control" id="tgl_pel" name="tgl_pel">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="nop">NOP</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nop" name="nop" placeholder="NOP" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="nik">NIK/NPWP</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nik" name="nik" placeholder="NIK/NPWP" required>
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
				<label class="col-sm-2 col-form-label" for="letak_op">LETAK OP</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="letak_op" name="letak_op" placeholder="LETAK OP" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="kelurahan">KELURAHAN</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="kelurahan" name="kelurahan" placeholder="KELURAHAN" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="kecamatan">KECAMATAN</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="KECAMATAN" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="keterangan">KETERANGAN</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="CONTOH : PERORANGAN/KOLEKTIF" required>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-baru" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php

if (isset($_POST['Simpan'])) {

	$sql_simpan = "INSERT INTO tb_baru (no_pel,tgl_pel,nop,nik,nama,alamat,letak_op,kelurahan,kecamatan,keterangan) VALUES (		
		'" . $_POST['no_pel'] . "',
        '" . $_POST['tgl_pel'] . "',
        '" . $_POST['nop'] . "',
        '" . $_POST['nik'] . "',
        '" . $_POST['nama'] . "',
        '" . $_POST['alamat'] . "',
		'" . $_POST['letak_op'] . "',		
		'" . $_POST['kelurahan'] . "',		
		'" . $_POST['kecamatan'] . "',		
        '" . $_POST['keterangan'] . "')";

	$query_simpan = mysqli_query($koneksi, $sql_simpan);
	mysqli_close($koneksi);

	if ($query_simpan) {
		echo "<script>
		  Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
		  }).then((result) => {if (result.value){
			  window.location = 'index.php?page=data-baru';
			  }
		  })</script>";
	} else {
		echo "<script>
		  Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
		  }).then((result) => {if (result.value){
			  window.location = 'index.php?page=add-baru';
			  }
		  })</script>";
	}
}

	// $ceknosurat = mysqli_num_rows(mysqli_query($koneksi, "SELECT tb_domisili FROM no_surat WHERE no_surat='$_POST[no_surat]'"));
	// if ($ceknosurat > 0) {
	// 	echo "<script>
 //      Swal.fire({title: 'No.Surat Sudah Ada',text: '',icon: 'error',confirmButtonText: 'OK'
 //      }).then((result) => {if (result.value){
 //          window.location = 'index.php?page=add-domisili';
 //          }
 //      })</script>";
 //    } else {

 //    	mysqli_query($koneksi, "INSERT INTO tb_domisili (no_surat,tgl_pengajuan,nik,nama,alamat,jenis_kelamin,agama,pekerjaan,status) VALUES('', 'no_surat', 
 //    		'tgl_pengajuan', 'nik', 'nama', 'alamat', 'jenis_kelamin' 'agama', 'pekerjaan', 'status', 'keperluan', 'masa_berlaku' )");

 //    	echo "<script>
 //      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
 //      }).then((result) => {if (result.value){
 //          window.location = 'index.php?page=data-domisili';</script>";
 //        }

 //      }





	

	

     //selesai proses simpan data