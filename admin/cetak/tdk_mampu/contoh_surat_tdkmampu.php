<?php
include '../../../inc/koneksi.php';
date_default_timezone_set("Asia/Bangkok");
if (isset($_GET['no_surat'])) {
	$no_surat    = $_GET['no_surat'];
} else {
	die("Error. No ID Selected!");
}
include "../../../inc/koneksi.php";
$query    = mysqli_query($koneksi, "SELECT * FROM tb_tdkmampu WHERE no_surat='$no_surat'");
$data    = mysqli_fetch_array($query); ?>

<!DOCTYPE html>
<html>

<head>
	<title>SURAT KETERANGAN TIDAK MAMPU</title>
	<link rel="icon" href="../../../dist/img/logo-tnh-laut.png">
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
	</style>
</head>

<body>
	<center>
		<table width="550">
			<tr>
				<td><img src="../../../dist/img/logo-tnh-laut.png" width="80" height="90"></td>
				<td>
					<center>
						<font size="4">PEMERINTAH KAB.TANAH LAUT</font><br>
						<font size="4">KECAMATAN BATI-BATI</font><br>
						<font size="5"><b>DESA NUSA INDAH</b></font><br>
						<font size="3"><i>Jl.A.Yani Km.34 Kec.Bati-Bati Kab.Tanah Laut Kode Pos 70852</i></font>
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
						<font size="3"><?php echo date('d-m-Y', strtotime($data["tgl_pengajuan"]));   ?></font>

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

			<center>
				<strong style="font-size: 20px;"><b><u>SURAT KETERANGAN TIDAK MAMPU</u></b></strong>
			</center>
			<center>
				<font size="3">Nomor : <?php echo $data['no_surat']; ?></font>
			</center>

			<table width="550">
				<tr>
					<td align="justify">
						<font size="3">Yang bertanda tangan di bawah ini Kepala Desa Nusa Indah Kecamatan Bati-Bati Kabupaten Tanah Laut, menerangkan bahwa :</font>
					</td>
				</tr>
			</table>

		</table>
		<table width="350">
			<tr class="text3">
				<td>
					<font size="3">NIK</font>
				</td>
				<td width="550">
					<font size="3">: <?php echo $data['nik']; ?></font>
				</td>
			</tr>
			<tr>
				<td>
					<font size="3">Nama</font>
				</td>
				<td width="550">
					<font size="3">: <?php echo $data['nama']; ?>
					</font>
				</td>
			</tr>
			<tr>
				<td>
					<font size="3">Alamat</font>
				</td>
				<td width="550">
					<font size="3">: <?php echo $data['alamat']; ?></font>
				</td>
			</tr>
			<tr>
				<td>
					<font size="3">Pekerjaan</font>
				</td>
				<td width="550">
					<font size="3">: <?php echo $data['pekerjaan']; ?></font>
				</td>
			</tr>
			<tr>
				<td>
					<font size="3">Keperluan</font>
				</td>
				<td width="550">
					<font size="3">: <?php echo $data['keperluan']; ?></font>
				</td>
			</tr>
		</table>
		<table width="550">
			<tr>
				<td align="justify">
					<font size="3">Orang tersebut di atas adalah benar penduduk Desa Nusa Indah dan keadaannya orang benar-benar Tidak Mampu, karena orang tersebut tidak berpenghasilan yang tetap.</font>
				</td>
			</tr>
		</table>
		<table width="550">
			<tr>
				<td align="justify">
					<font size="3">Demikian Surat Keterangan Tidak Mampu ini dibuat dan diberikan Kepada yang bersangkutan untuk dapat dipergunakan sebagaimana mestinya.</font>
				</td>
			</tr>
		</table>
		<br>

		<?php
		include "../../../inc/koneksi.php";
		$query    = mysqli_query($koneksi, "SELECT * FROM tb_pejabat");
		$data    = mysqli_fetch_array($query); ?>
		<table width="550">
			<tr>
				<td width="350"><br><br><br><br></td>
				<td class="text"> <strong style="font-size: 15px;">Kepala Desa Nusa Indah,<br><br><br><br><?php echo $data['nama']; ?></td>
			</tr>
		</table>
	</center>

	<script>
		window.print();
	</script>

</body>

</html>