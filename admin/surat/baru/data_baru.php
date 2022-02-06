<?php
$id = @$_GET['id'];
$sql_per_id = mysqli_query($koneksi, "SELECT * FROM tb_baru WHERE id_baru = '$id'") or die($db->error);
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
          <a href="?page=add-baru" class="btn btn-primary">
            <i class="fa fa-edit"></i> Tambah Data</a>
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

              <th class="text-center">AKSI</th>
            </tr>
          </thead>
          <tbody>

            <?php
            $no = 1;
            $sql = $koneksi->query("SELECT * FROM tb_baru ORDER BY id_baru DESC");
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
                <td class="text-center">
                  </a>
                  <a href="?page=edit-baru&kode=<?php echo $data['id_baru']; ?>" title="Edit" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                  <a href="?page=del-baru&kode=<?php echo $data['id_baru']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')" title="Hapus" class="btn btn-danger btn-sm">
                    <i class="fa fa-trash"></i> </a>
                  <a href="admin\cetak\baru\cetak_con_baru.php?id_berkas=<?= $data['id_baru'] ?>" target="_blank" title="Cetak" class="btn btn-success btn-sm">
                    <i class="fa fa-print"></i>
                  </a>
                  </a>
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