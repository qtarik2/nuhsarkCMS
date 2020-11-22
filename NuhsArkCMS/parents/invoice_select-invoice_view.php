<?php
require('../fpdf182/fpdf.php');

// Auth 
//include("auth.php");
session_start();

// DB Connect
include("connect.php");
 
// Get invoices data
$InvoiceNo=$_REQUEST["InvoiceNo"];
$Username=$_SESSION['username'];

$count = 1;
$sql = "Select * FROM invoice WHERE InvoiceNo = '$InvoiceNo' AND StudentID='$Username'";
$result = mysqli_query($con, $sql);

// Associative array
while($Invoice = mysqli_fetch_assoc($result)) {
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

	$pdf -> Ln(10);
	// Body
	// Invoice info
	$pdf -> SetFont('Calibri', '', 12);
	$pdf -> Cell (20, 7, 'Invoice', 0, 1);
	$pdf -> Cell (20, 7, '', 0, 1);

	$pdf -> SetFont('Calibri', '', 9);
	$pdf -> Cell (25, 7, ' Name : ', 0, 0);
	$pdf -> Cell (105, 7, $Invoice['Name'], 0, 0);
	$pdf -> Cell (25, 7, 'Invoice No. : ', 0, 0);
	$pdf -> Cell (34, 7, $Invoice['InvoiceNo'], 0, 1);

	$pdf -> Cell (25, 7, ' Student ID : ', 0, 0);
	$pdf -> Cell (105, 7, $Invoice['StudentID'], 0, 0);
	$pdf -> Cell (25, 7, 'Date : ', 0, 0);
	$pdf -> Cell (34, 7, $Invoice['Date'], 0, 1);


	$pdf -> Cell (25, 7, ' Program : ', 0, 0);
	$pdf -> Cell (105, 7, $Invoice['Programme'], 0, 0);
	$pdf -> Cell (25, 7, 'Term Info : ', 0, 0);
	$pdf -> Cell (34, 7, $Invoice['TermInfo'], 0, 1);

	$pdf -> Ln(7); // New line

	// Invoice Table 
	// Header
	$pdf -> SetFont('Calibri', '', 10);
	$pdf -> Cell (20, 10, 'No', 1, 0);
	$pdf -> Cell (89, 10, 'Descriptions', 1, 0);
	$pdf -> Cell (40, 10, 'Price/Unit', 1, 0);
	$pdf -> Cell (40, 10, 'Total Price', 1, 1);

	// Invoice Table 
	// Body

	$pdf -> Cell (20, 10, '1', 1, 0);
	$pdf -> Cell (89, 10, 'Registration', 1, 0);
	$pdf -> Cell (40, 10, '250.00', 1, 0);
	$pdf -> Cell (40, 10, $Invoice['Registration'], 1, 1);

	$pdf -> Cell (20, 10, '2', 1, 0);
	$pdf -> Cell (89, 10, 'Security', 1, 0);
	$pdf -> Cell (40, 10, '500.00', 1, 0);
	$pdf -> Cell (40, 10, $Invoice['Security'], 1, 1);

	$pdf -> Cell (20, 10, '3', 1, 0);
	$pdf -> Cell (89, 10, 'Equipment', 1, 0);
	$pdf -> Cell (40, 10, '500.00', 1, 0);
	$pdf -> Cell (40, 10, $Invoice['Equipment'], 1, 1);

	$pdf -> Cell (20, 10, '4', 1, 0);
	$pdf -> Cell (89, 10, 'Program', 1, 0);
	$pdf -> Cell (40, 10, '500.00', 1, 0);
	$pdf -> Cell (40, 10, $Invoice['Program'], 1, 1);

	$pdf -> Cell (20, 10, '5', 1, 0);
	$pdf -> Cell (89, 10, 'Uniform', 1, 0);
	$pdf -> Cell (40, 10, '250.00', 1, 0);
	$pdf -> Cell (40, 10, $Invoice['Uniform'], 1, 1);

	$pdf -> Cell (20, 10, '6', 1, 0);
	$pdf -> Cell (89, 10, 'Takaful', 1, 0);
	$pdf -> Cell (40, 10, '20.00', 1, 0);
	$pdf -> Cell (40, 10, $Invoice['Takaful'], 1, 1);

	$pdf -> Cell (20, 10, '7', 1, 0);
	$pdf -> Cell (89, 10, 'Term', 1, 0);
	$pdf -> Cell (40, 10, '1300.00', 1, 0);
	$pdf -> Cell (40, 10, $Invoice['Term'], 1, 1);

	$pdf -> Cell (20, 10, '', 1, 0);
	$pdf -> Cell (89, 10, '', 1, 0);
	$pdf -> Cell (40, 10, 'Amount', 1);
	$pdf -> Cell (40, 10, $Invoice['Amount'], 1, 1);

	$pdf -> Ln(7); // New line

	// Footer
	$pdf -> SetFont('Calibri', '', 9);
	$pdf -> Cell (40, 8, 'Payment Terms:', 0, 0);
	$pdf -> Cell (70, 8, 'Cash Deposit / Funds Transfer / Cheque', 0, 0);
	$pdf -> Cell (49, 8, 'Total Payable: MYR ' .$Invoice['Amount'], 0, 1);
	
	$pdf -> Cell (40, 8, 'Payment Due:', 0, 0);
	$pdf -> Cell (70, 8, 'Registration Fee (Item 1)', 0, 0);
	$pdf -> Cell (49, 8, 'Immediate ', 0, 1);

	$pdf -> Cell (40, 8, '', 0, 0);
	$pdf -> Cell (70, 8, 'Entrance Fees (Item 2 - 6)', 0, 0);
	$pdf -> Cell (49, 8, $Invoice['Due2'], 0, 1);

	$pdf -> Cell (40, 8, '', 0, 0);
	$pdf -> Cell (70, 8, 'Term Fee (Item 7)', 0, 0);
	$pdf -> Cell (49, 8, $Invoice['Due3'], 0, 1);

	$pdf -> Ln(3);
	$pdf -> SetFont ('Calibri', '', 8);
	
	$pdf -> Multicell (189, 5, 'Term fee is due on the first week of every term. No invoice will be issued thereafter. If no payment found, a reminder will be sent to respective parents.');
	$pdf -> Ln(2);
	$pdf -> Multicell (189, 5, 'Any discrepancies regarding this invoice should be lodge within SEVEN (7) days');
	$pdf -> Ln(2);
	$pdf -> Multicell (189, 5, 'Payment by cheque should be crossed and made payable to:');
	$pdf -> Cell(40, 5, ' Bank', 0, 0);
	$pdf -> Cell(50, 5, 'MAYBANK', 0, 1);
	$pdf -> Cell(40, 5, ' Account Holder', 0, 0);
	$pdf -> Cell(50, 5, 'NUHS ARK CHILDCARE CENTRE', 0, 1);
	$pdf -> Cell(40, 5, ' Account Number', 0, 0);
	$pdf -> Cell(50, 5, '562106 639 546', 0, 1);
	$pdf -> Ln(2);
	$pdf -> Multicell (189, 5, 'Please send us the proof of payment to nuhsark86@gmail.com or +60193372789');
	$pdf -> Ln(2);
	$pdf -> Multicell (189, 5, 'Do include your childs name and payment description for our reference');

	$pdf -> output('I', 'Student_Invoice.pdf');

$count++;
}
?>