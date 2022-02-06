<?php
$id = @$_GET['id'];
$sql_per_id = mysqli_query($koneksi, "SELECT * FROM tb_mutasi WHERE id_mutasi = '$id'") or die($db->error);
$data = mysqli_fetch_array($sql_per_id); { ?>


  <div class="card card-dark">
    <div class="card-header">
      <h3 class="card-title">
        <i class="fa fa-table"></i> Data Berkas Daftar Baru
      </h3>
    </div>

    <!-- /.card-header -->

    <div class="card-body">
      <div class="table-responsive">
        <div>
          <a href="?page=data-mutasi" class="btn btn-primary">
            <i class="fas fa-long-arrow-alt-left"></i> Menu Data Berkas Mutasi</a>
          <a href="admin\cetak\mutasi\cetak_lap_mutasi.php" target="_blank" title="Cetak" class="btn btn-success"><i class="fa fa-print"></i> Cetak Laporan</a>
        </div>

      </div>
      <br>
      <table id="example1" method="get" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>NO.PELAYANAN</th>
            <th>TGL.PELAYANAN</th>
            <th>NOP</th>
            <th>NIK</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>LETAK OP</th>
            <th>KETERANGAN</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $no = 1;
          $sql = $koneksi->query("SELECT * FROM tb_mutasi ORDER BY id_mutasi DESC");
          while ($data = $sql->fetch_assoc()) {
          ?>

            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $data['no_pel']; ?></td>
              <td><?php echo $data['tgl_pel']; ?></td>
              <td><?php echo $data['nop']; ?></td>
              <td><?php echo $data['nik']; ?></td>
              <td><?php echo $data['nama']; ?></td>
              <td><?php echo $data['alamat']; ?></td>
              <td><?php echo $data['letak_op']; ?></td>
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