<?php
$id = @$_GET['id'];
$sql_per_id = mysqli_query($koneksi, "SELECT * FROM tb_kehilangan WHERE no_surat = '$id'") or die($db->error);
$data = mysqli_fetch_array($sql_per_id); { ?>


  <div class="card card-info">
    <div class="card-header">
      <h3 class="card-title">
        <i class="fa fa-table"></i> Data Surat Keterangan Kehilangan
      </h3>
    </div>

    <!-- /.card-header -->

    <div class="card-body">
      <div class="table-responsive">
        <div>
          <a href="?page=data-kehilangan" class="btn btn-primary">
            <i class="fas fa-long-arrow-alt-left"></i> Menu Surat Keterangan Kehilangan</a>
          <a href="admin\cetak\kehilangan\cetak_lap_kehilangan.php" target="_blank" title="Cetak" class="btn btn-success"><i class="fa fa-print"></i> Cetak Laporan</a>
        </div>

        <br>
        <table id="example1" method="get" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>NO</th>
              <th>NO.SURAT</th>
              <th>TANGGAL PENGAJUAN</th>
              <th>NIK</th>
              <th>NAMA</th>
              <th>ALAMAT</th>
              <th>PEKERJAAN</th>
              <th>TANGGAL KEHILANGAN</th>
              <th>TEMPAT KEHILANGAN</th>
              <th>KETERANGAN</th>

            </tr>
          </thead>
          <tbody>

            <?php
            $no = 1;
            $sql = $koneksi->query("SELECT * FROM tb_kehilangan  ORDER BY no_surat DESC");
            while ($data = mysqli_fetch_array($sql)) {


            ?>

              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['no_surat']; ?></td>
                <td><?php echo $data['tgl_pengajuan']; ?></td>
                <td><?php echo $data['nik']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
                <td><?php echo $data['pekerjaan']; ?></td>
                <td><?php echo $data['tgl_kehilangan']; ?></td>
                <td><?php echo $data['tmpt_kehilangan']; ?></td>
                <td><?php echo $data['ket']; ?></td>

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