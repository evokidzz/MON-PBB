<?php

include '../../../inc/koneksi.php';
require('../fpdf/fpdf.php');

class PDF extends FPDF
{


    function Header()
    {
        // Logo
        $this->Image('../../../dist/img/logo-tnh-laut.png', 80, 14, 23);
        // Arial bold 15
        $this->SetFont('Arial', '', 15);
        // Move to the right
        $this->Cell(25);

        // Title
        // $this->text(137, 20, 'LAPORAN REKAP');
        // $this->text(120, 26, 'SURAT KETERANGAN DOMISILI');
        $this->text(116, 20, 'PEMERINTAH KAB.TANAH LAUT');
        $this->text(125, 26, 'KECAMATAN BATI-BATI');

        $this->SetFont('Arial', 'B', 20);
        $this->text(123, 33, 'DESA NUSA INDAH');


        // Alamat
        $this->SetFont('Arial', '', 12);
        $this->text(103, 39, 'Jl.A.Yani Km.34 Kec.Bati-Bati Kab.Tanah Laut Kode Pos 70852');

        // Line break
        $this->Ln(20);
        $this->SetLineWidth(1);

        //garis
        $this->Line(8, 45, 288, 45);
        $this->SetLineWidth(0);
        $this->Line(8, 46, 288, 46);
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
$pdf = new PDF('L', 'mm', array(210, 297));
$pdf->AddPage();



$yi = 53;
$ya = 55;

$pdf->SetFont('Arial', 'B', 15);
$pdf->Text(80, 52, 'LAPORAN REKAP SURAT KETERANGAN KEMATIAN');



$pdf->SetFont('Arial', 'B', 9);
$pdf->setFillColor(222, 222, 222);
$pdf->setXY(15, 53);
$pdf->CELL(10, 6, 'NO', 1, 0, 'C', 1);
$pdf->CELL(30, 6, 'NO.SURAT', 1, 0, 'C', 1);
$pdf->CELL(30, 6, 'TGL.PENGAJUAN', 1, 0, 'C', 1);
$pdf->CELL(35, 6, 'NIK', 1, 0, 'C', 1);
$pdf->CELL(25, 6, 'NAMA', 1, 0, 'C', 1);
$pdf->CELL(40, 6, 'ALAMAT', 1, 0, 'C', 1);
$pdf->CELL(35, 6, 'MENINGGAL PADA', 1, 0, 'C', 1);
$pdf->CELL(55, 6, 'JAM', 1, 0, 'C', 1);

$query = "select * from tb_kematian";
$sql = mysqli_query($koneksi, $query);
$no = 1;
$row = 6;
$ya = $yi + $row;
while ($data = mysqli_fetch_array($sql)) {
    $pdf->setXY(15, $ya);
    $pdf->setFont('Times', '', 9);
    $pdf->setFillColor(255, 255, 255);
    $pdf->CELL(10, 6, $no, 1, 0, 'C', 1);
    $pdf->CELL(30, 6, $data['no_surat'], 1, 0, 'C', 1);
    $pdf->CELL(30, 6, $data['tgl_pengajuan'], 1, 0, 'C', 1);
    $pdf->CELL(35, 6, $data['nik'], 1, 0, 'C', 1);
    $pdf->CELL(25, 6, $data['nama'], 1, 0, 'C', 1);
    $pdf->CELL(40, 6, $data['alamat'], 1, 0, 'C', 1);
    $pdf->CELL(35, 6, $data['tgl_meninggal'], 1, 0, 'C', 1);
    $pdf->CELL(55, 6, $data['jam'], 1, 0, 'C', 1);
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

$pdf->MultiCell(295, 10, 'Desa Nusa Indah, ' . date('d') . ' ' . $bln_list[date('m')] . ' ' . date('Y'), 0, 'C');
$query = "select * from tb_pengguna where level = 'Administrator' ";
$sql = mysqli_query($koneksi, $query);
while ($data = mysqli_fetch_array($sql)) {
    $pdf->setFont('Times', '', 12);
    $pdf->MultiCell(513, 0, 'Pembuat data,', 0, 'C');
    $pdf->MultiCell(513, 35, $data['nama_pengguna'], 0, 'C');
}
$pdf->AliasNbPages();
ob_clean();
$pdf->Output('D', 'Ket.Kematian.PDF');
