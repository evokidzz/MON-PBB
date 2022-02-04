<?php

include '../../../inc/koneksi.php';
require('../fpdf/fpdf.php');

class PDF extends FPDF
{


    function Header()
    {
        // Logo
        $this->Image('../../../dist/img/logo_banjar.png', 73, 10, 23);
        // Arial bold 15
        $this->SetFont('Arial', '', 15);
        // Move to the right
        $this->Cell(25);

        // Title
        // $this->text(137, 20, 'LAPORAN REKAP');
        // $this->text(120, 26, 'SURAT KETERANGAN DOMISILI');
        $this->text(117, 15, 'PEMERINTAH KAB.BANJAR');

        $this->SetFont('Arial', 'B', 20);
        $this->text(98, 22, 'BADAN PENDAPATAN DAERAH');


        // Alamat
        $this->SetFont('Arial', '', 12);
        $this->text(110, 28, 'Jalan Pangeran Hidayatullah No.1 Martapura ');
        $this->text(115, 33, 'Kalimantan Selatan Kode Pos 70611');

        $this->SetFont('Arial', 'B', 12);
        $this->text(103, 37, 'Telepon (0511) 4721358, Faksimile (0511) 4721027');

        // Line break
        $this->Ln(20);
        $this->SetLineWidth(1);

        //garis
        $this->Line(8, 43, 288, 43);
        $this->SetLineWidth(0);
        $this->Line(8, 44, 288, 44);
    }

    // Halaman
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Times', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}




// Instanciation of inherited class
$pdf = new PDF('L', 'mm', array(210, 300));
$pdf->AddPage();



$yi = 53;
$ya = 55;;

$pdf->SetFont('Arial', 'B', 15);
$pdf->Text(115, 52, 'LAPORAN DATA PENDUDUK');



$pdf->SetFont('Arial', 'B', 8);
$pdf->setFillColor(222, 222, 222);
$pdf->setXY(8, 53);
$pdf->CELL(10, 6, 'NO', 1, 0, 'C', 1);
$pdf->CELL(30, 6, 'NIK/NPWP', 1, 0, 'C', 1);
$pdf->CELL(35, 6, 'NAMA', 1, 0, 'C', 1);
$pdf->CELL(50, 6, 'ALAMAT', 1, 0, 'C', 1);
$pdf->CELL(35, 6, 'DESA', 1, 0, 'C', 1);
$pdf->CELL(30, 6, 'KECAMATAN', 1, 0, 'C', 1);
$pdf->CELL(30, 6, 'KABUPATEN', 1, 0, 'C', 1);
$pdf->CELL(30, 6, 'PROVINSI', 1, 0, 'C', 1);
$pdf->CELL(28, 6, 'PEKERJAAN', 1, 0, 'C', 1);



$query = "select * from tb_penduduk";
$sql = mysqli_query($koneksi, $query);
$no = 1;
$row = 6;
$ya = $yi + $row;
while ($data = mysqli_fetch_array($sql)) {
    $pdf->setXY(8, $ya);
    $pdf->setFont('Times', '', 9);
    $pdf->setFillColor(255, 255, 255);
    $pdf->CELL(10, 6, $no, 1, 0, 'C', 1);
    $pdf->CELL(30, 6, $data['nik'], 1, 0, 'C', 1);
    $pdf->CELL(27, 6, $data['nama'], 1, 0, 'C', 1);
    $pdf->CELL(23, 6, $data['alamat'], 1, 0, 'C', 1);
    $pdf->CELL(25, 6, $data['desa'], 1, 0, 'C', 1);
    $pdf->CELL(25, 6, $data['kec'], 1, 0, 'C', 1);
    $pdf->CELL(30, 6, $data['kab'], 1, 0, 'C', 1);
    $pdf->CELL(20, 6, $data['prov'], 1, 0, 'C', 1);
    $pdf->CELL(28, 6, $data['pekerjaan'], 1, 0, 'C', 1);
    $ya = $ya + $row;
    $no++;
}

// $query = "select * from tb_pengguna where level = 'Administrator' ";
// $sql = mysqli_query($koneksi, $query);
// while ($data = mysqli_fetch_array($sql)) {
//     $pdf->setFont('Times', 'B', 9);
//     $pdf->Text(250, 80, $data['nama_pengguna']);
// }





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
$pdf->SetFont('Times', '', 12);
$pdf->SetX(118);

$pdf->MultiCell(250, 12, 'Martapura, ' . date('d') . ' ' . $bln_list[date('m')] . ' ' . date('Y'), 0, 'C');
$query = "select * from tb_pengguna where level = 'Administrator' ";
$sql = mysqli_query($koneksi, $query);
while ($data = mysqli_fetch_array($sql)) {
    $pdf->setFont('Times', '', 12);
    $pdf->MultiCell(465, 0, 'Pembuat data,', 0, 'C');
    $pdf->MultiCell(465, 30, $data['nama_pengguna'], 0, 'C');
}
$pdf->AliasNbPages();
ob_clean();
$pdf->Output('I', 'Data WP.PDF');
