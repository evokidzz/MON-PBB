<?php
# koneksi database
include '../../../../inc/koneksi.php';

# include fdpf
include "fpdf.php";


$tgl = date('d-M-Y');
$pdf = new FPDF('L','mm', array(210,297) );
$pdf->Open();
$pdf->addPage();
$pdf->setAutoPageBreak(FALSE);


# header
$image1 = "img/products/image1.jpg";
$pdf->setFont('Arial','B',12);
$pdf->text(135,20,'LAPORAN REKAP');
$pdf->text(120,26,'SURAT KETERANGAN DOMISILI');
$pdf->text(135,32,'DESA NUSA INDAH');

$yi = 25;
$ya = 38;

$pdf->setFont('Arial','',7);
$pdf->setFillColor(222,222,222);
$pdf->setXY(5,$ya);
$pdf->CELL(10,6,'NO',1,0,'C',1);
$pdf->CELL(25,6,'NO.SURAT',1,0,'C',1);
$pdf->CELL(27,6,'TGL.PENGAJUAN',1,0,'C',1);
$pdf->CELL(20,6,'NIK',1,0,'C',1);
$pdf->CELL(25,6,'NAMA',1,0,'C',1);
$pdf->CELL(25,6,'ALAMAT',1,0,'C',1);
$pdf->CELL(30,6,'JENIS KELAMIN',1,0,'C',1);
$pdf->CELL(20,6,'AGAMA',1,0,'C',1);
$pdf->CELL(28,6,'PEKERJAAN',1,0,'C',1);
$pdf->CELL(25,6,'STATUS',1,0,'C',1);
$pdf->CELL(28,6,'KEPERLUAN',1,0,'C',1);
$pdf->CELL(28,6,'MASA BERLAKU',1,0,'C',1);


# menampilkan data dari database
	// 	if (isset($_POST['data'])){
	// $sql = mysqli_query($koneksi, "SELECT * FROM tb_domisili WHERE no_surat='".$_POST['id']."'") or die ($db->error);
	// 	if(mysqli_num_rows($sql) > 0) {
 //          while ($data = mysqli_fetch_array($sql)) {
	// 	$pdf->Ln(4);
	// 	$pdf->SetFont('Times','',7);
	// 	$pdf->Cell(7,4,$no++.".",1,0,'C');
	// 	$pdf->Cell(20,4,$data['no_surat'],1,0,'L');
	// 	$pdf->Cell(20,4,$data['tgl_pengajuan'],1,0,'L');
	// 	$pdf->Cell(28,4,$data['nik'],1,0,'L');
	// 	$pdf->Cell(28,4,$data['nama'],1,0,'L');
	// 	$pdf->Cell(28,4,$data['alamat'],1,0,'L');
	// 	$pdf->Cell(28,4,$data['jenis_kelamin'],1,0,'L');
	// 	$pdf->Cell(28,4,$data['agama'],1,0,'L');
	// 	$pdf->Cell(28,4,$data['pekerjaan'],1,0,'L');
	// 	$pdf->Cell(28,4,$data['status'],1,0,'L');
	// 	$pdf->Cell(28,4,$data['keperluan'],1,0,'L');
	// 	$pdf->Cell(28,4,$data['masa_berlaku'],1,0,'L');
	// 	$ya = $ya+$row;
	// 	$no++;
	// 		}
	// 	}
	// }else {
	// 	die("Maaf Kosong");
	// }
/*$query = "select * from tb_domisili WHERE no_surat=''";
$sql = mysqli_query($koneksi,$query);
$no = 1;
$row = 6;
$ya = $yi + $row;
while($data = mysqli_fetch_array($sql)){
	$pdf->setXY(17,$ya);
	$pdf->setFont('arial','',9);
	$pdf->setFillColor(255,255,255);
	$pdf->cell(10,6,$no,1,0,'C',1);
	$pdf->cell(30,6,$data['id_surat'],1,0,'L',1);
	$pdf->cell(25,6,$data['nama'],1,0,'L',1);
	$pdf->CELL(25,6,$data['nik'],1,0,'L',1);
	$pdf->CELL(30,6,$data['alamat'],1,0,'R',1);
	$pdf->CELL(25,6,$data['telepon'],1,0,'L',1);
	$pdf->CELL(28,6,$data['saldo'],1,0,'L',1);
	$ya = $ya+$row;
	$no++;
}*/

# untuk menuliskan nama bulan dengan format Indonesia
$bln_list = array(
	'01' => 'Januari',
	'02' => 'Februari',
	'03' => 'Maret',
	'04' => 'April',
	'05' => 'Mei',
	'06' => 'Juni',
	'07' => 'Juli',
	'08' => 'Agustus',
	'09' => 'September',
	'10' => 'Oktober',
	'11' => 'November',
	'12' => 'Desember'
	);

# footer
$pdf->Ln();
$pdf->SetFont('Arial','',9); 
$pdf->SetX(118); 
$pdf->MultiCell(270,10,'Desa Nusa Indah, '.date('d').' '.$bln_list[date('m')].' '.date('Y'),0,'C');
$pdf->Ln();
$pdf->output();
?>