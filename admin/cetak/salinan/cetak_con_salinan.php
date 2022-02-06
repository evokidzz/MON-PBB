<?php
include '../../../inc/koneksi.php';
date_default_timezone_set("Asia/Bangkok");
if (isset($_GET['id_berkas'])) {
    $id_berkas    = $_GET['id_berkas'];
} else {
    die("Error. No ID Selected!");
}
include "../../../inc/koneksi.php";
$query    = mysqli_query($koneksi, "SELECT * FROM tb_salinan WHERE id_salinan='$id_berkas'");
$data    = mysqli_fetch_array($query); ?>

<!DOCTYPE html>
<html>

<head>
    <title>TANDA TERIMA SALINAN</title>
    <link rel="icon" href="../../../dist/img/logo_banjar.png">
    <style type="text/css">
        table {
            border-style: double;
            border-width: 3px;
            border-color: white;
        }

        table tr .text2 {
            text-align: right;
            font-size: 13px;
        }

        table tr .text3 {
            text-align: right;
            font-size: 20px;
        }

        table tr .text {
            text-align: center;
            font-size: 13px;
        }

        table tr td {
            font-size: 13px;
        }

        @media print {
            @page {
                margin-top: 0;
                margin-bottom: 0;
            }

            body {
                padding-top: 50px;
                padding-bottom: 50px;
            }
        }
    </style>
</head>

<body>
    <center>
        <table width="550">
            <tr>
                <td><img src="../../../dist/img/logo_banjar.png" width="80" height="90"></td>
                <td>
                    <center>
                        <font size="4">PEMERINTAH KAB.BANJAR</font><br>
                        <font size="5"><b>BADAN PENDAPATAN DAERAH</b></font><br>
                        <font size="3"><i>Jalan Pangeran Hidayatullah No.1 Martapura</i></font>
                        <font size="3"><i>Kalimantan Selatan Kode Pos 70611</i></font>
                        <font size="3"><i>Telepon (0511) 4721358, Faksimile (0511) 4721027</i></font>
                    </center>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
            <table width="550">
                <tr>
                    <td class="text2">
                        <font size="3"><?php echo date('d-m-Y', strtotime($data["tgl_pel"]));   ?></font>

                        <!-- <script type='text/javascript'>
							var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
							var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
							var date = new Date();
							var day = date.getDate();
							var month = date.getMonth();
							var thisDay = date.getDay(),
								thisDay = myDays[thisDay];
							var yy = date.getYear();
							var year = (yy < 1000) ? yy + 1900 : yy;
							document.write(); -->

                        </script>

                    </td>

                </tr>
            </table>
        </table>
        <table>
            <strong style="font-size: 20px;"><b><u>TANDA TERIMA SALINAN</u></b></strong>


        </table>
        <table width="550">
            <tr class="text3">
                <td width="150">
                    <font size="3"> <strong>NO.PELAYANAN</strong> </font>
                </td>
                <td>
                    <font size="3">: <b><?php echo $data['no_pel']; ?></font>
                </td>
            </tr>
            <tr class="text3">
                <td width="150">
                    <font size="3">JENIS PELAYANAN</font>
                </td>
                <td>
                    <font size="3">: SALINAN</font>
                </td>
            </tr>
            <tr class="text3">
                <td width="100">
                    <font size="3">NOP</font>
                </td>
                <td>
                    <font size="3">: <?php echo $data['nop']; ?></font>
                </td>
            </tr>
        </table>
        </table>
        <table width="550">
            <td align="center">
                <font size="3"><b>DATA WAJIB/OBJEK PAJAK DAN KETERANGAN</b>.</font>
            </td>
        </table>
        <table width="550">
            <tr class="text3">
                <td width="150">
                    <font size="3">NAMA WP</font>
                </td>
                <td>
                    <font size="3">: <?php echo $data['nama']; ?></font>
                </td>
            </tr>
            <tr class="text3">
                <td width="100">
                    <font size="3">ALAMAT WP</font>
                </td>
                <td>
                    <font size="3">: <?php echo $data['alamat']; ?></font>
                </td>
            </tr>
            <tr class="text3">
                <td width="100">
                    <font size="3">LETAK OBJEK</font>
                </td>
                <td>
                    <font size="3">: <?php echo $data['letak_op']; ?></font>
                </td>
            </tr>
            <tr class="text3">
                <td width="100">
                    <font size="3">KELURAHAN</font>
                </td>
                <td>
                    <font size="3">: <?php echo $data['kel']; ?></font>
                </td>
            </tr>
            <tr class="text3">
                <td width="100">
                    <font size="3">KECAMATAN</font>
                </td>
                <td>
                    <font size="3">: <?php echo $data['kec']; ?></font>
                </td>
            </tr>
            <tr class="text3">
                <td width="100">
                    <font size="3">KETERANGAN</font>
                </td>
                <td>
                    <font size="3">: <?php echo $data['ket']; ?></font>
                </td>
            </tr>
        </table>
        <br>

        <?php
        include "../../../inc/koneksi.php";
        $query    = mysqli_query($koneksi, "SELECT * FROM tb_pengguna");
        $data    = mysqli_fetch_array($query); ?>
        <table width="550">
            <tr>
                <td width="350"><br><br><br><br></td>
                <td class="text"> <strong style="font-size: 15px;">Petugas Penerima Berkas,<br><br><br><br><?php echo $data['nama_pengguna']; ?></td>
            </tr>
        </table>
    </center>


    <script>
        window.print();
    </script>

</body>

</html>