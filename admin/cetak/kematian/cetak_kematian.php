<?php
$id = @$_GET['id'];
$sql_per_id = mysqli_query($koneksi, "SELECT * FROM tb_kematian WHERE no_surat = '$id'") or die($db->error);
$data = mysqli_fetch_array($sql_per_id); { ?>


  <div class="card card-info">
    <div class="card-header">
      <h3 class="card-title">
        <i class="fa fa-table"></i> Data Surat Keterangan Kematian
      </h3>
    </div>

    <!-- /.card-header -->

    <div class="card-body">
      <div class="table-responsive">
        <div>
          <a href="?page=data-kematian" class="btn btn-primary">
            <i class="fas fa-long-arrow-alt-left"></i> Menu Surat Keterangan Kematian</a>
          <a href="admin\cetak\kematian\cetak_lap_kematian.php" target="_blank" title="Cetak" class="btn btn-success"><i class="fa fa-print"></i> Cetak Laporan</a>
        </div>

        <br>
        <table id="example1" method="get" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>NO.SURAT</th>
              <th>TANGGAL PENGAJUAN</th>
              <th>NIK</th>
              <th>NAMA</th>
              <th>ALAMAT</th>
              <th>MENINGGAL PADA</th>
              <th>JAM</th>

            </tr>
          </thead>
          <tbody>

            <?php
            $no = 1;
            $sql = $koneksi->query("SELECT * FROM tb_kematian  ORDER BY no_surat DESC");
            while ($data = mysqli_fetch_array($sql)) {


            ?>

              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['no_surat']; ?></td>
                <td><?php echo $data['tgl_pengajuan']; ?></td>
                <td><?php echo $data['nik']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
                <td><?php echo $data['tgl_meninggal']; ?></td>
                <td><?php echo $data['jam']; ?></td>

      </div>

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