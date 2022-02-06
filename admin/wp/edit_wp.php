<?php

if (isset($_GET['kode'])) {
    $sql_cek = "SELECT * FROM tb_wp WHERE nik='" . $_GET['kode'] . "'";
    $query_cek = mysqli_query($koneksi, $sql_cek);
    $data_cek = mysqli_fetch_array($query_cek, MYSQLI_BOTH);
}


?>

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-edit"></i> Ubah Data Wajib Pajak
        </h3>
    </div>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="card-body">

            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="">NIK</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="nik" name="nik" value="<?php echo $data_cek['nik']; ?>" readonly>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="nama">NAMA</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data_cek['nama']; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="alamat">ALAMAT</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $data_cek['alamat']; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="desa">DESA</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="desa" name="desa" value="<?php echo $data_cek['desa']; ?>">
                </div>
            </div>


            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="kec">KECAMATAN</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="kec" name="kec" value="<?php echo $data_cek['kec']; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="kab">KABUPATEN</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="kab" name="kab" value="<?php echo $data_cek['kab']; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="prov">PROVINSI</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="prov" name="prov" value="<?php echo $data_cek['prov']; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="pekerjaan">PEKERJAAN</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?php echo $data_cek['pekerjaan']; ?>">
                </div>
            </div>

        </div>
        <div class="card-footer">
            <input type="submit" name="Ubah" value="Ubah" class="btn btn-info">
            <a href="?page=data-wp" title="Kembali" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>

<?php




if (isset($_POST['Ubah'])) {
    $sql_ubah = "UPDATE tb_wp SET 
    nama='" . $_POST['nama'] . "', 
    alamat='" . $_POST['alamat'] . "',
    desa='" . $_POST['desa'] . "', 
    kec='" . $_POST['kec'] . "',   
    kab='" . $_POST['kab'] . "',
    prov='" . $_POST['prov'] . "',    
    pekerjaan='" . $_POST['pekerjaan'] . "'
    WHERE nik='" . $_POST['nik'] . "'";
    $query_ubah = mysqli_query($koneksi, $sql_ubah);
    mysqli_close($koneksi);


    if ($query_ubah) {
        echo "<script>
      Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-wp';
        }
      })</script>";
    } else {
        echo "<script>
      Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-wp';
        }
      })</script>";
    }
}

  // $ceknosurat = mysqli_num_rows(mysqli_query($koneksi, "SELECT tb_domisili FROM no_surat WHERE no_surat='$_POST[no_surat]'"));
  // if ($ceknosurat > 0) {
  //  echo "<script>
 //      Swal.fire({title: 'No.Surat Sudah Ada',text: '',icon: 'error',confirmButtonText: 'OK'
 //      }).then((result) => {if (result.value){
 //          window.location = 'index.php?page=add-domisili';
 //          }
 //      })</script>";
 //    } else {

 //     mysqli_query($koneksi, "INSERT INTO tb_domisili (no_surat,tgl_pengajuan,nik,nama,alamat,jenis_kelamin,agama,pekerjaan,status) VALUES('', 'no_surat', 
 //       'tgl_pengajuan', 'nik', 'nama', 'alamat', 'jenis_kelamin' 'agama', 'pekerjaan', 'status', 'keperluan', 'masa_berlaku' )");

 //     echo "<script>
 //      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
 //      }).then((result) => {if (result.value){
 //          window.location = 'index.php?page=data-domisili';</script>";
 //        }

 //      }





  

  

     //selesai proses simpan data