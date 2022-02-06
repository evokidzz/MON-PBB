<?php
$id = @$_GET['id'];
$sql_per_id = mysqli_query($koneksi, "SELECT * FROM tb_mutasi WHERE id_mutasi = '$id'") or die($db->error);
$data = mysqli_fetch_array($sql_per_id); { ?>


  <div class="card card-dark">
    <div class="card-header">
      <h3 class="card-title">
        <i class="fa fa-table"></i> Data Berkas Daftar Mutasi
      </h3>
    </div>

    <!-- /.card-header -->

    <div class="card-body">
      <div class="table-responsive">
        <div>
          <a href="?page=add-mutasi" class="btn btn-primary">
            <i class="fa fa-edit"></i> Tambah Data</a>
        </div>

        <br>
        <table id="example1" method="get" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>NO</th>
              <th>NO.PELAYANAN</th>
              <th>TGL.PELAYANAN</th>
              <th>NOP</th>
              <th>NIK/NPWP</th>
              <th>NAMA</th>
              <th>ALAMAT</th>
              <th>LETAK OP</th>
              <th>KET.</th>

              <th class="text-center">AKSI</th>
            </tr>
          </thead>
          <tbody>

            <?php
            $no = 1;
            $sql = $koneksi->query("SELECT * FROM tb_mutasi  ORDER BY no_pel DESC");
            while ($data = mysqli_fetch_array($sql)) {


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
                  <a href="?page=edit-mutasi&kode=<?php echo $data['id_mutasi']; ?>" title="Ubah" class="btn btn-info btn-sm">
                    <i class="fa fa-edit"></i>
                  </a>
                  <a href="?page=del-mutasi&kode=<?php echo $data['id_mutasi']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')" title="Hapus" class="btn btn-danger btn-sm">
                    <i class="fa fa-trash"></i></a>
                  <a href="admin\cetak\mutasi\cetak_con_mutasi.php?id_berkas=<?= $data['id_mutasi'] ?>" target="_blank" title="Cetak" class="btn btn-success btn-sm">
                    <i class="fa fa-print"></i>
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