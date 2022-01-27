<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">
      <i class="fa fa-edit"></i> Tambah Data Penduduk
    </h3>
  </div>
  <form action="" method="post" enctype="multipart/form-data">
    <div class="card-body">

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
        <label class="col-sm-2 col-form-label" for="tmpt_lahir">TEMPAT LAHIR</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="tmpt_lahir" name="tmpt_lahir" placeholder="TEMPAT LAHIR" required>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="tgl_lahir">TANGGAL LAHIR</label>
        <div class="col-sm-6">
          <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="TANGGAL LAHIR" required>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">JENIS KELAMIN</label>
        <div class="col-sm-4">
          <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
            <option disabled selected>- Pilih -</option>
            <option value="L">L</option>
            <option value="P">P</option>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="alamat">ALAMAT</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="alamat" name="alamat" placeholder="ALAMAT" required>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="agama">AGAMA</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="agama" name="agama" placeholder="AGAMA" required>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">STATUS</label>
        <div class="col-sm-4">
          <select id="status" name="status" class="form-control">
            <option disabled selected>- Pilih -</option>
            <option value="Belum Menikah">Belum Menikah</option>
            <option value="Menikah">Menikah</option>
            <option value="Duda/Janda">Duda/Janda</option>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="pekerjaan">PEKERJAAN</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="pekerjaan" required>
        </div>
      </div>

    </div>
    <div class="card-footer">
      <input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
      <a href="?page=data-domisili" title="Kembali" class="btn btn-secondary">Batal</a>
    </div>
  </form>
</div>

<?php

if (isset($_POST['Simpan'])) {

  $sql_simpan = "INSERT INTO tb_penduduk (nik,nama,tmpt_lahir,tgl_lahir,jenis_kelamin,alamat,agama,status,pekerjaan) VALUES (
    '" . $_POST['nik'] . "',
    '" . $_POST['nama'] . "',
    '" . $_POST['tmpt_lahir'] . "',
    '" . $_POST['tgl_lahir'] . "',    
    '" . $_POST['jenis_kelamin'] . "',
    '" . $_POST['alamat'] . "',
    '" . $_POST['agama'] . "',
    '" . $_POST['status'] . "',
    '" . $_POST['pekerjaan'] . "')";

  $query_simpan = mysqli_query($koneksi, $sql_simpan);
  mysqli_close($koneksi);

  if ($query_simpan) {
    echo "<script>
		  Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
		  }).then((result) => {if (result.value){
			  window.location = 'index.php?page=data-penduduk';
			  }
		  })</script>";
  } else {
    echo "<script>
		  Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
		  }).then((result) => {if (result.value){
			  window.location = 'index.php?page=add-penduduk';
			  }
		  })</script>";
  }
}
