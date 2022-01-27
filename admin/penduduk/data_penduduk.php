<?php
$id = @$_GET['id'];
$sql_per_id = mysqli_query($koneksi, "SELECT * FROM tb_penduduk WHERE nik = '$id'") or die($db->error);
$data = mysqli_fetch_array($sql_per_id); { ?>


  <div class="card card-info">
    <div class="card-header">
      <h3 class="card-title">
        <i class="fa fa-table"></i> Data Surat Penuduk
      </h3>
    </div>

    <!-- /.card-header -->

    <div class="card-body">
      <div class="table-responsive">
        <div>
          <a href="?page=add-penduduk" class="btn btn-primary">
            <i class="fa fa-edit"></i> Tambah Data</a>
          <a href="admin\cetak\penduduk\cetak_lap_penduduk.php" target="_blank" title="Cetak" class="btn btn-success"><i class="fa fa-print"></i> Cetak Laporan</a>
        </div>
        <br>
        <table id="example1" method="get" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>NIK</th>
              <th>NAMA</th>
              <th>TEMPAT LAHIR</th>
              <th>TANGGAL LAHIR</th>
              <th>JENIS KELAMIN</th>
              <th>ALAMAT</th>
              <th>AGAMA</th>
              <th>STATUS</th>
              <th>PEKERJAAN</th>

              <th class="text-center">AKSI</th>
            </tr>
          </thead>
          <tbody>

            <?php
            $no = 1;
            $sql = $koneksi->query("SELECT * FROM tb_penduduk ORDER BY nik DESC");
            while ($data = $sql->fetch_assoc()) {
            ?>

              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['nik']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['tmpt_lahir']; ?></td>
                <td><?php echo $data['tgl_lahir']; ?></td>
                <td><?php echo $data['jenis_kelamin']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
                <td><?php echo $data['agama']; ?></td>
                <td><?php echo $data['status']; ?></td>
                <td><?php echo $data['pekerjaan']; ?></td>
                <td>
                  </a>
                  <a href="?page=edit-penduduk&kode=<?php echo $data['nik']; ?>" title="Edit" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                  <a href="?page=del-penduduk&kode=<?php echo $data['nik']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')" title="Hapus" class="btn btn-danger btn-sm">
                    <i class="fa fa-trash"></i>
                </td>
              </tr>

          <?php
            }
          }
          ?>
          </tbody>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
  <!-- /.card-body -->