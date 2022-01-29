<?php

$sql_cek = "SELECT * FROM tb_profil";
$query_cek = mysqli_query($koneksi, $sql_cek);
$data_cek = mysqli_fetch_array($query_cek, MYSQLI_BOTH); {


?>
    <script type="text/javascript" src="plugins/chartjs/Chart.js"></script>
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">
                <i class="fa fa-table"></i> Chart Pelayanan
            </h3>
        </div>


        <!-- /.card-header -->

        <div class="card-body">
            <div style="width: 800px;margin: 0px auto;">
                <canvas id="myChart"></canvas>
            </div><br /><br />
            <br>
            <div>
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

                            </tr>

                    <?php
                        }
                    }
                    ?>
                    </tbody>

                </table>
                <script>
                    var ctx = document.getElementById("myChart").getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: ["Ket.Penghasilan", "Ket.Usaha", "Ket.Domisili", "Ket.Tidak Mampu", "Ket.Kerja"],
                            datasets: [{
                                label: '',
                                data: [
                                    <?php
                                    $jumlah_penghasilan = $koneksi->query("SELECT * FROM tb_penghasilan WHERE no_surat='no_surat'") or die($db->error);
                                    echo mysqli_num_rows($jumlah_penghasilan);
                                    ?>,
                                    <?php
                                    $jumlah_usaha = $koneksi->query("SELECT * FROM tb_usaha WHERE no_surat='no_surat'") or die($db->error);
                                    echo mysqli_num_rows($jumlah_usaha);
                                    ?>,
                                    <?php
                                    $jumlah_domisili = $koneksi->query("SELECT * FROM tb_domisili WHERE no_surat='no_surat'") or die($db->error);
                                    echo mysqli_num_rows($jumlah_domisili);
                                    ?>,
                                    <?php
                                    $jumlah_tdkmampu = $koneksi->query("SELECT * FROM tb_tdkmampu WHERE no_surat='no_surat'") or die($db->error);
                                    echo mysqli_num_rows($jumlah_tdkmampu);
                                    ?>
                                    <?php
                                    $jumlah_kerja = $koneksi->query("SELECT * FROM tb_kerja WHERE no_surat='no_surat'") or die($db->error);
                                    echo mysqli_num_rows($jumlah_kerja);
                                    ?>
                                ],
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(255,99,132,1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)'
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                            }
                        }
                    });
                </script>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>