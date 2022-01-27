<?php
$id = @$_GET['id'];
$sql_per_id = mysqli_query($koneksi, "SELECT * FROM tb_usaha WHERE no_surat = '$id'") or die($db->error);
$data = mysqli_fetch_array($sql_per_id); { ?>


  <div class="card card-info">
    <div class="card-header">
      <h3 class="card-title">
        <i class="fa fa-table"></i> Data Surat Keterangan Usaha
      </h3>
    </div>

    <!-- /.card-header -->

    <div class="card-body">
      <div class="table-responsive">
        <div>
          <a href="?page=add-usaha" class="btn btn-primary">
            <i class="fa fa-edit"></i> Tambah Data</a>
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
              <th>PEKERJAAN</th>
              <th>JENIS USAHA</th>
              <th>ALAMAT USAHA</th>

              <th class="text-center">AKSI</th>
            </tr>
          </thead>
          <tbody>

            <?php
            $no = 1;
            $sql = $koneksi->query("SELECT * FROM tb_usaha  ORDER BY no_surat DESC");
            while ($data = mysqli_fetch_array($sql)) {


            ?>

              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['no_surat']; ?></td>
                <td><?php echo $data['tgl_pengajuan']; ?></td>
                <td><?php echo $data['nik']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['pekerjaan']; ?></td>
                <td><?php echo $data['jns_usaha']; ?></td>
                <td><?php echo $data['almt_usaha']; ?></td>
                <td class="text-center">
                  </a>
                  <a href="?page=edit-usaha&kode=<?php echo $data['nik']; ?>" title="Ubah" class="btn btn-info btn-sm">
                    <i class="fa fa-edit"></i>
                  </a>
                  <a href="?page=del-usaha&kode=<?php echo $data['no_surat']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')" title="Hapus" class="btn btn-danger btn-sm">
                    <i class="fa fa-trash"></i>
                  </a>
                  <a href="admin\cetak\usaha\contoh_surat_usaha.php?no_surat=<?= $data['no_surat'] ?>" target="_blank" title="Cetak" class="btn btn-success btn-sm">
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