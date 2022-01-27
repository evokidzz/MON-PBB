<?php

if (isset($_GET['kode'])) {
    $sql_cek = "SELECT * FROM tb_penduduk WHERE nik='" . $_GET['kode'] . "'";
    $query_cek = mysqli_query($koneksi, $sql_cek);
    $data_cek = mysqli_fetch_array($query_cek, MYSQLI_BOTH);
}


?>

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-edit"></i> Ubah Data Penduduk
        </h3>
    </div>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="card-body">

            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="no_surat">NIK</label>
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
                <label class="col-sm-2 col-form-label" for="tmpt_lahir">TEMPAT LAHIR</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="tmpt_lahir" name="tmpt_lahir" value="<?php echo $data_cek['tmpt_lahir']; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">TANGGAL LAHIR</label>
                <div class="col-md-6">
                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?php echo $data_cek['tgl_lahir']; ?>">
                </div>
            </div>


            <div class="form-group row">
                <label class="col-sm-2 col-form-label">JENIS KELAMIN</label>
                <div class="col-sm-4">
                    <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                        <option disabled selected>- Pilih -</option>
                        <option value="L" <?php
                                            if ($data_cek["jenis_kelamin"] == 'L') {
                                                echo "selected";
                                            }
                                            ?>>L</option>
                        <option value="P" <?php
                                            if ($data_cek["jenis_kelamin"] == 'P') {
                                                echo "selected";
                                            }
                                            ?>>P</option>

                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="alamat">ALAMAT</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $data_cek['alamat']; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="agama">AGAMA</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="agama" name="agama" value="<?php echo $data_cek['agama']; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">STATUS</label>
                <div class="col-sm-4">
                    <select id="status" name="status" class="form-control">
                        <option disabled selected>- Pilih -</option>
                        <option value="Belum Menikah" <?php
                                                        if ($data_cek["status"] == 'Belum Menikah') {
                                                            echo "selected";
                                                        }
                                                        ?>>Belum Menikah</option>
                        <option value="Menikah" <?php
                                                if ($data_cek["status"] == 'Menikah') {
                                                    echo "selected";
                                                }
                                                ?>>Menikah</option>
                        <option value="Duda/Janda" <?php
                                                    if ($data_cek["status"] == 'Duda/Janda') {
                                                        echo "selected";
                                                    }
                                                    ?>>Duda/Janda</option>
                    </select>
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
            <a href="?page=data-penduduk" title="Kembali" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>

<?php




if (isset($_POST['Ubah'])) {
    $sql_ubah = "UPDATE tb_penduduk SET 
    nama='" . $_POST['nama'] . "', 
    tmpt_lahir='" . $_POST['tmpt_lahir'] . "',
    tgl_lahir='" . $_POST['tgl_lahir'] . "', 
    alamat='" . $_POST['alamat'] . "',   
    jenis_kelamin='" . $_POST['jenis_kelamin'] . "',
    alamat='" . $_POST['alamat'] . "',
    agama='" . $_POST['agama'] . "',
    status='" . $_POST['status'] . "',
    pekerjaan='" . $_POST['pekerjaan'] . "'
    WHERE nik='" . $_POST['nik'] . "'";
    $query_ubah = mysqli_query($koneksi, $sql_ubah);
    mysqli_close($koneksi);


    if ($query_ubah) {
        echo "<script>
      Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-penduduk';
        }
      })</script>";
    } else {
        echo "<script>
      Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-penduduk';
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