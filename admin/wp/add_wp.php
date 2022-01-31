<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">
      <i class="fa fa-edit"></i> Tambah Data Wajib Pajak
    </h3>
  </div>
  <form action="" method="post" enctype="multipart/form-data">
    <div class="card-body">

      <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="nik">NIK/NPWP</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK/NPWP" style="text-transform: uppercase;" required>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="nama">NAMA</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="nama" name="nama" placeholder="NAMA" style="text-transform: uppercase;" required>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="alamat">ALAMAT</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="alamat" name="alamat" placeholder="ALAMAT" style="text-transform: uppercase;" required>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="desa">DESA/KELURAHAN</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="desa" name="desa" placeholder="DESA" style="text-transform: uppercase;" required>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="kec">KECAMATAN</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="kec" name="kec" placeholder="KECAMATAN" style="text-transform: uppercase;" required>
        </div>
      </div>     

      <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="kab">KABUPATEN</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="kab" name="kab" placeholder="KABUPATEN" style="text-transform: uppercase;" required>
        </div>
      </div> 

      <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="prov">PROVINSI</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="prov" name="prov" placeholder="PROVINSI" style="text-transform: uppercase;" required>
        </div>
      </div>      

      <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="pekerjaan">PEKERJAAN</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="PEKERJAAN" style="text-transform: uppercase;" required>
        </div>
      </div>

    </div>
    <div class="card-footer">
      <input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
      <a href="?page=data-wp" title="Kembali" class="btn btn-secondary">Batal</a>
    </div>
  </form>
</div>

<?php

if (isset($_POST['Simpan'])) {

  $sql_simpan = "INSERT INTO tb_wp (nik,nama,alamat,desa,kec,kab,prov,pekerjaan) VALUES (
    '" . $_POST['nik'] . "',
    '" . $_POST['nama'] . "',
    '" . $_POST['alamat'] . "',
    '" . $_POST['desa'] . "',
    '" . $_POST['kec'] . "',
    '" . $_POST['kab'] . "',
    '" . $_POST['prov'] . "',
    '" . $_POST['pekerjaan'] . "')";

  $query_simpan = mysqli_query($koneksi, $sql_simpan);
  mysqli_close($koneksi);

  if ($query_simpan) {
    echo "<script>
		  Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
		  }).then((result) => {if (result.value){
			  window.location = 'index.php?page=data-wp';
			  }
		  })</script>";
  } else {
    echo "<script>
		  Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
		  }).then((result) => {if (result.value){
			  window.location = 'index.php?page=add-wp';
			  }
		  })</script>";
  }
}
