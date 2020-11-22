<?php
require('../fpdf182/fpdf.php');

// A4 width: 219mm
// Default margin: 10mm each side
// Writable horizontal: 219-(10*2) = 189mm

$pdf = new FPDF('P', 'mm', 'A4');

$pdf -> AddPage();


// Header
// Logo
$pdf->Image('../images/nuhsarkislamicmontessorischool.jpg',10,10, -200);

// Set font to arial, bold, 14pt
$pdf -> SetFont('Arial', 'B', 10);

// Cell(width, height, text, border, endline, [alignment])
$pdf -> Cell (120);
$pdf -> Cell (69, 5, 'Nuhs Ark Islamic Montessori School', 0, 1);
$pdf -> Cell (120);
$pdf -> Cell (69, 5, '2A, Jalan Jasper, 7/15, Seksyen 7', 0, 1);
$pdf -> Cell (120);
$pdf -> Cell (69, 5, '40000, Shah Alam, Selangor.', 0, 1);
$pdf -> Cell (120);
$pdf -> Cell (69, 5, 'Tel: +603 5524 2489 Hp: +60 19 337 2789  ', 0, 1);
$pdf -> Cell (120);
$pdf -> Cell (69, 5, 'Email: nuhsark86@gmail.com', 0, 1);
$pdf -> Cell (120);
$pdf -> Cell (69, 5, 'URL: www.nuhsark.edu.my', 0, 1);

$pdf -> Ln(10);
// Body
// Invoice info
$pdf -> SetFont('Arial', 'B', 14);
$pdf -> Cell (20, 10, 'Invoice', 0, 1);

// Row
$pdf -> Cell (94.5, 28, '', 1, 0);
$pdf -> Cell (94.5, 28, '', 1, 0);

$pdf -> SetFont('Arial', 'B', 11);
$pdf -> Cell (94.5, 1, '', 0, 1);
$pdf -> Cell (94.5, 5, 'To:', 0, 0);
$pdf -> SetFont('Arial', 'B', 11);
$pdf -> Cell (37, 5, 'Student ID', 0, 0);
$pdf -> Cell (3, 5, ':', 0, 0);

$pdf -> SetFont('Arial', '', 11);
$pdf -> Cell (54.5, 5, 'value', 0, 1);

$pdf -> SetFont('Arial', '', 11);
$pdf -> Cell (94.5, 5, 'Name', 0, 0);
$pdf -> SetFont('Arial', 'B', 11);
$pdf -> Cell (37, 5, 'Date', 0, 0);
$pdf -> Cell (3, 5, ':', 0, 0);
$pdf -> SetFont('Arial', '', 11);
$pdf -> Cell (54.5, 5, 'value', 0, 1);

$pdf -> Cell (94.5, 5, 'Address1', 0, 0);
$pdf -> SetFont('Arial', 'B', 11);
$pdf -> Cell (37, 5, 'Invoice No', 0, 0);
$pdf -> Cell (3, 5, ':', 0, 0);
$pdf -> SetFont('Arial', '', 11);
$pdf -> Cell (54.5, 5, 'value', 0, 1);

$pdf -> Cell (94.5, 5, 'Address2', 0, 0);
$pdf -> SetFont('Arial', 'B', 11);
$pdf -> Cell (37, 5, 'Term Info', 0, 0);
$pdf -> Cell (3, 5, ':', 0, 0);
$pdf -> SetFont('Arial', '', 11);
$pdf -> Cell (54.5, 5, 'value', 0, 1);

$pdf -> Cell (94.5, 5, 'Zip code', 0, 0);
$pdf -> SetFont('Arial', 'B', 11);
$pdf -> Cell (37, 5, 'Program', 0, 0);
$pdf -> Cell (3, 5, ':', 0, 0);
$pdf -> SetFont('Arial', '', 11);
$pdf -> Cell (54.5, 5, 'value', 0, 1);

$pdf -> Ln(6); // New line

// Invoice Table 
// Header
$pdf -> SetFont('Arial', 'B', 9);
$pdf -> Cell (15, 15, 'No', 1, 0, 'C');
$pdf -> Cell (89, 15, 'Description', 1, 0, 'C');
$pdf -> Cell (20, 15, 'Term', 1, 0, 'C');
$pdf -> Cell (30, 15, 'Amount (RM)', 1, 0, 'C');
$pdf -> Cell (35, 15, 'Total Amount (RM)', 1, 1, 'C');

// Invoice Table 
// Body
$pdf -> SetFont('Arial', '', 9);
$pdf -> Cell (15, 10, '1', 1, 0, 'C');
$pdf -> Cell (89, 10, '', 1, 0, 'C');
$pdf -> Cell (20, 10, '', 1, 0, 'C');
$pdf -> Cell (30, 10, '', 1, 0, 'C');
$pdf -> Cell (35, 10, '', 1, 1, 'C');

$pdf -> Cell (15, 10, '2', 1, 0, 'C');
$pdf -> Cell (89, 10, '', 1, 0, 'C');
$pdf -> Cell (20, 10, '', 1, 0, 'C');
$pdf -> Cell (30, 10, '', 1, 0, 'C');
$pdf -> Cell (35, 10, '', 1, 1, 'C');

$pdf -> Cell (15, 10, '3', 1, 0, 'C');
$pdf -> Cell (89, 10, '', 1, 0, 'C');
$pdf -> Cell (20, 10, '', 1, 0, 'C');
$pdf -> Cell (30, 10, '', 1, 0, 'C');
$pdf -> Cell (35, 10, '', 1, 1, 'C');

$pdf -> Cell (15, 10, '4', 1, 0, 'C');
$pdf -> Cell (89, 10, '', 1, 0, 'C');
$pdf -> Cell (20, 10, '', 1, 0, 'C');
$pdf -> Cell (30, 10, '', 1, 0, 'C');
$pdf -> Cell (35, 10, '', 1, 1, 'C');

$pdf -> Cell (15, 10, '5', 1, 0, 'C');
$pdf -> Cell (89, 10, '', 1, 0, 'C');
$pdf -> Cell (20, 10, '', 1, 0, 'C');
$pdf -> Cell (30, 10, '', 1, 0, 'C');
$pdf -> Cell (35, 10, '', 1, 1, 'C');

$pdf -> Cell (15, 10, '6', 1, 0, 'C');
$pdf -> Cell (89, 10, '', 1, 0, 'C');
$pdf -> Cell (20, 10, '', 1, 0, 'C');
$pdf -> Cell (30, 10, '', 1, 0, 'C');
$pdf -> Cell (35, 10, '', 1, 1, 'C');

$pdf -> Cell (15, 10, '7', 1, 0, 'C');
$pdf -> Cell (89, 10, '', 1, 0, 'C');
$pdf -> Cell (20, 10, '', 1, 0, 'C');
$pdf -> Cell (30, 10, '', 1, 0, 'C');
$pdf -> Cell (35, 10, '', 1, 1, 'C');

$pdf -> SetFont('Arial', 'B', 9);
$pdf -> Cell (15, 7, '', 1, 0, 'C');
$pdf -> Cell (89, 7, 'Total Amount Payable', 1, 0, 'C');
$pdf -> Cell (20, 7, '', 1, 0, 'C');
$pdf -> Cell (30, 7, '', 1, 0, 'C');
$pdf -> Cell (35, 7, '', 1, 1, 'C');

$pdf -> Ln(8);

// Footer
$pdf -> SetFont('Arial', '', 9);
$pdf -> Cell (40, 8, 'Payment Terms:', 0, 0);
$pdf -> Cell (80, 8, 'Cash Deposit/ Funds Transfer/ Cheque', 0, 0);
$pdf -> Cell (69, 8, 'Total Payable: ', 0, 1);

$pdf -> Cell (40, 8, 'Payment Due:', 0, 0);
$pdf -> Cell (80, 8, 'Registration Fee (Item 1)', 0, 0);
$pdf -> Cell (69, 8, '', 0, 1);

$pdf -> Cell (40, 8, '', 0, 0);
$pdf -> Cell (80, 8, 'Entrance Fees (Item 2-6)', 0, 0);
$pdf -> Cell (69, 8, '', 0, 1);

$pdf -> Cell (40, 8, '', 0, 0);
$pdf -> Cell (80, 8, 'Term Fee (Item 7)', 0, 0);
$pdf -> Cell (69, 8, '', 0, 1);

$pdf -> Ln(7);
$pdf -> SetFont ('Arial', '', 8);
$pdf -> Multicell (189, 5, 'Term fee is due on the first week of every term. No invoice will be issued thereafter. If no payment found, a reminder will be sent to respective parents.');
$pdf -> Ln(2);
$pdf -> Multicell (189, 5, 'Any discrepancies regarding this invoice should be lodge within SEVEN (7) days');
$pdf -> Ln(2);
$pdf -> Multicell (189, 5, 'Payment by cheque should be crossed and made payable to:');
$pdf -> Multicell (189, 5, '"NUHS ARK CHILDCARE CENTRE"; MAYBANK ACC: 562106 639 546');
$pdf -> Ln(2);
$pdf -> Multicell (189, 5, 'Please send us the proof of payment to nuhsark86@gmail.com or +60193372789');
$pdf -> Ln(2);
$pdf -> Multicell (189, 5, 'Do include your childs name and payment description for our reference');


$pdf -> output('I', 'Student_Invoice.pdf');
?>