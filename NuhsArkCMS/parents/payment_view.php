<?php
// Pdf library
require('../fpdf182/fpdf.php');

// DB Connect
include("connect.php");

// Get payment data
$ReceiptNo=$_REQUEST["ReceiptNo"];

$count=1;

$sql = "SELECT * FROM payment WHERE ReceiptNo='$ReceiptNo'";
$result = mysqli_query($con,$sql);

// Associative array
$PaymentReceipt = mysqli_fetch_assoc($result);
	
// A4 width: 219mm
// Default margin: 10mm each side
// Writable horizontal: 219-(10*2) = 189mm

$pdf = new FPDF('P', 'mm', 'A4');

$pdf -> AddFont('Calibri', '', 'calibri.php');
$pdf -> AddFont('Calibri', 'B', 'calibrib.php');
$pdf -> AddPage();

// Header
// Logo
$pdf->Image('../images/nuhsarkislamicmontessorischool.jpg',10,10, -200);

// Set font to Calibri, bold, 14pt
$pdf -> SetFont('Calibri', '', 9);

// Cell(width, height, text, border, endline, [alignment])
$pdf -> Cell (30);
$pdf -> Cell (69, 5, 'Nuh\'s Ark Islamic Montessori School', 0, 1);
$pdf -> Cell (30);
$pdf -> Cell (69, 5, '2A, Jalan Jasper, 7/15, Seksyen 7', 0, 1);
$pdf -> Cell (30);
$pdf -> Cell (69, 5, '40000, Shah Alam, Selangor.', 0, 1);
$pdf -> Cell (30);
$pdf -> Cell (69, 5, 'Tel: +603 5524 2489 Hp: +60 19 337 2789  ', 0, 1);
$pdf -> Cell (30);
$pdf -> Cell (69, 5, 'Email: nuhsark86@gmail.com', 0, 1);
$pdf -> Cell (30);
$pdf -> Cell (69, 5, 'URL: www.nuhsark.edu.my', 0, 1);

$pdf -> Ln(10); // New line
// Body
// Payment receipt info
$pdf -> SetFont('Calibri', '', 12);
$pdf -> Cell (20, 7, 'Payment Receipt', 0, 1);

$pdf -> Ln(8);
$pdf -> SetFont('Calibri', '', 9);
$pdf -> Cell (25, 7, ' Date : ', 0, 0);
$pdf -> Cell (105, 7, $PaymentReceipt['Date'], 0, 0);
$pdf -> Cell (25, 7, 'Receipt No. : ', 0, 0);
$pdf -> Cell (34, 7, $PaymentReceipt['ReceiptNo'], 0, 1);

$pdf -> Cell (25, 7, ' Program : ', 0, 0);
$pdf -> Cell (105, 7, $PaymentReceipt['Programme'], 0, 0);
$pdf -> Cell (25, 7, 'Invoice No : ', 0, 0);
$pdf -> Cell (34, 7, $PaymentReceipt['InvoiceNo'], 0, 1);


$pdf -> Cell (25, 7, ' Name : ', 0, 0);
$pdf -> Cell (105, 7, $PaymentReceipt['Name'], 0, 0);
$pdf -> Cell (25, 7, 'Student ID : ', 0, 0);
$pdf -> Cell (34, 7, $PaymentReceipt['StudentID'], 0, 1);

$pdf -> Ln(6);
$pdf -> Cell (47.25, 7, 'Amount', 1, 0);
$pdf -> Cell (47.25, 7, 'Payment Method', 1, 0);
$pdf -> Cell (47.25, 7, 'Cheque No.', 1, 0);
$pdf -> Cell (47.25, 7, 'Payment Date', 1, 1);

$pdf -> Cell (47.25, 7, 'MYR '.$PaymentReceipt['Amount'], 1, 0);
$pdf -> Cell (47.25, 7, $PaymentReceipt['Method'], 1, 0);
$pdf -> Cell (47.25, 7, $PaymentReceipt['ChequeNo'], 1, 0);
$pdf -> Cell (47.25, 7, $PaymentReceipt['PaymentDate'], 1, 1);

$pdf -> Ln(4);
$pdf -> Cell (47.25, 7, 'Pay For', 0, 1);

$pdf -> Cell (47.25, 7, 'Registration', 1, 0);
$pdf -> Cell (47.25, 7, $PaymentReceipt['Registration'], 1, 1);
$pdf -> Cell (47.25, 7, 'Security', 1, 0);
$pdf -> Cell (47.25, 7, $PaymentReceipt['Security'], 1, 1);
$pdf -> Cell (47.25, 7, 'Program', 1, 0);
$pdf -> Cell (47.25, 7, $PaymentReceipt['Program'], 1, 1);
$pdf -> Cell (47.25, 7, 'Equipment', 1, 0);
$pdf -> Cell (47.25, 7, $PaymentReceipt['Equipment'], 1, 1);
$pdf -> Cell (47.25, 7, 'Uniform', 1, 0);
$pdf -> Cell (47.25, 7, $PaymentReceipt['Uniform'], 1, 1);
$pdf -> Cell (47.25, 7, 'Takaful', 1, 0);
$pdf -> Cell (47.25, 7, $PaymentReceipt['Takaful'], 1, 1);
$pdf -> Cell (47.25, 7, '6 Years Old / Others*', 1, 0);
$pdf -> Cell (47.25, 7, $PaymentReceipt['Extra1'], 1, 1);
$pdf -> Cell (47.25, 7, 'Term', 1, 0);
$pdf -> Cell (47.25, 7, $PaymentReceipt['Term'], 1, 1);
$pdf -> Cell (47.25, 7, 'Others**', 1, 0);
$pdf -> Cell (47.25, 7, $PaymentReceipt['Extra2'], 1, 1);
$pdf -> Cell (47.25, 7, 'Transport / Miscellaneous', 1, 0);
$pdf -> Cell (47.25, 7, $PaymentReceipt['MiscFees'], 1, 1);
$pdf -> Cell (47.25, 7, '', 0, 1);
$pdf -> Cell (47.25, 7, 'Notes', 1, 0);
$pdf -> Cell (141.75, 7, '', 1, 1);

$pdf -> Ln(7);
// Pdf Name
$pdf -> output('I', 'Payment_Receipt.pdf');
?>