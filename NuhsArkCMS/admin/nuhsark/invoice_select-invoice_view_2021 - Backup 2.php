<?php
require('../../fpdf182/fpdf.php');

// Auth 


// DB Connect

 
// Get invoices data

// A4 width: 219mm
// Default margin: 10mm each side
// Writable horizontal: 219-(10*2) = 189mm

$pdf = new FPDF('P', 'mm', 'A4');

$pdf -> AddFont('Calibri', '', 'calibri.php');
$pdf -> AddFont('Calibri', 'B', 'calibrib.php');
$pdf -> AddPage();

// Header
// Logo
$pdf->Image('../../images/nuhsarkislamicmontessorischool.jpg',10,10, -200);

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
$pdf -> Cell (20, 7, 'New Student', 0, 1);

$pdf -> SetFont('Calibri', '', 9);
$pdf -> Cell (20, 7, ' Name : ', 0, 0);
$pdf -> Cell (110, 7, '', 0, 0);
$pdf -> Cell (59, 7, 'Invoice No. : ', 0, 1);

$pdf -> Cell (130, 7, ' Student ID : ', 0, 0);
$pdf -> Cell (59, 7, 'Date :', 0, 1);

$pdf -> Cell (130, 7, ' Program : ', 0, 0);
$pdf -> Cell (59, 7, 'Term Info : ', 0, 1);

$pdf -> Ln(7); // New line

// Invoice Table 
// Header
$pdf -> SetFont('Calibri', '', 10);
$pdf -> Cell (189, 10, 'Entrance Fees', 0, 1);
$pdf -> Cell (20, 10, 'No', 1, 0);
$pdf -> Cell (89, 10, 'Descriptions', 1, 0);
$pdf -> Cell (40, 10, 'Price/Unit', 1, 0);
$pdf -> Cell (40, 10, 'Total Price', 1, 1);

// Invoice Table 
// Body

$pdf -> Cell (20, 10, '1', 1, 0);
$pdf -> Cell (89, 10, 'Registration', 1, 0);
$pdf -> Cell (40, 10, '', 1, 0);
$pdf -> Cell (40, 10, '', 1, 1);

$pdf -> Cell (20, 10, '2', 1, 0);
$pdf -> Cell (89, 10, 'Security', 1, 0);
$pdf -> Cell (40, 10, '', 1, 0);
$pdf -> Cell (40, 10, '', 1, 1);

$pdf -> Cell (20, 10, '3', 1, 0);
$pdf -> Cell (89, 10, 'Equipment', 1, 0);
$pdf -> Cell (40, 10, '', 1, 0);
$pdf -> Cell (40, 10, '', 1, 1);

$pdf -> Cell (20, 10, '4', 1, 0);
$pdf -> Cell (89, 10, 'Program', 1, 0);
$pdf -> Cell (40, 10, '', 1, 0);
$pdf -> Cell (40, 10, '', 1, 1);

$pdf -> Cell (20, 10, '5', 1, 0);
$pdf -> Cell (89, 10, 'Uniform', 1, 0);
$pdf -> Cell (40, 10, '', 1, 0);
$pdf -> Cell (40, 10, '', 1, 1);

$pdf -> Cell (20, 10, '6', 1, 0);
$pdf -> Cell (89, 10, 'Takaful', 1, 0);
$pdf -> Cell (40, 10, '', 1, 0);
$pdf -> Cell (40, 10, '', 1, 1);

$pdf -> Cell (20, 10, '7', 1, 0);
$pdf -> Cell (89, 10, '6 Years Old / Others', 1, 0);
$pdf -> Cell (40, 10, '', 1, 0);
$pdf -> Cell (40, 10, '', 1, 1);

$pdf -> Cell (20, 10, '', 1, 0);
$pdf -> Cell (89, 10, '', 1, 0);
$pdf -> Cell (40, 10, 'Amount', 1);
$pdf -> Cell (40, 10, '', 1, 1);


$pdf -> Ln(7); // New line

// Invoice Table 2
// Header
$pdf -> Cell (189, 10, 'Itemised Fee Structure', 0, 1);
$pdf -> Cell (149, 10, 'Descriptions', 1, 0);
$pdf -> Cell (40, 10, 'Amount', 1, 1);

// Invoice Table 2
// Body
$pdf -> Cell (149, 10, '[8] Initial Term Fee', 1, 0);
$pdf -> Cell (40, 10, '- MYR', 1, 1);

$pdf -> SetFont('Calibri', 'U', 9);
$pdf -> Cell (149, 10, 'Annual Fees = Term fee * 4', 1, 0);
$pdf -> Cell (40, 10, '- MYR', 1, 1);

$pdf -> Cell (149, 10, 'Deductions', 1, 0);
$pdf -> Cell (40, 10, '', 1, 1);

$pdf -> SetFont('Calibri', '', 9);
$pdf -> Cell (149, 10, '[9] Rebates / Bantuan Anis / Term 1 Adjustment', 1, 0);
$pdf -> Cell (40, 10, '- MYR', 1, 1);

$pdf -> Cell (149, 10, '[10] Rebates / Bantuan Anis / Term 2 Adjustment', 1, 0);
$pdf -> Cell (40, 10, '- MYR', 1, 1);

$pdf -> Cell (149, 10, '[11] Rebates / Bantuan Anis / Term 3 Adjustment', 1, 0);
$pdf -> Cell (40, 10, '- MYR', 1, 1);

$pdf -> Cell (149, 10, '[12] Rebates / Bantuan Anis / Term 4 Adjustment', 1, 0);
$pdf -> Cell (40, 10, '- MYR', 1, 1);

$pdf -> Cell (149, 10, '[13] Waived', 1, 0);
$pdf -> Cell (40, 10, '- MYR', 1, 1);

$pdf -> SetFont('Calibri', 'U', 9);
$pdf -> Cell (149, 10, 'Total Deductions (From Item 9 till 12)', 1, 0);
$pdf -> Cell (40, 10, '- MYR', 1, 1);

$pdf -> SetFont('Calibri', '', 9);
$pdf -> Cell (149, 10, 'Revised Annual Fees = Annual Fees - Deductions', 1, 0);
$pdf -> Cell (40, 10, '- MYR', 1, 1);

$pdf -> Cell (149, 10, 'Total Annual Fees Paid', 1, 0);
$pdf -> Cell (40, 10, '- MYR', 1, 1);

$pdf -> SetFont('Calibri', 'B', 9);
$pdf -> Cell (149, 10, 'Total Balance to Pay Until December 2021', 1, 0);
$pdf -> Cell (40, 10, '- MYR', 1, 1);

$pdf -> SetFont('Calibri', '', 9);
$pdf -> Cell (40, 10, 'Remarks', 1, 0);
$pdf -> Cell (149, 10, '', 1, 1);


$pdf -> Ln(6);

// Footer
$pdf -> SetFont('Calibri', '', 9);
$pdf -> Cell (60, 8, 'Payment Terms:', 0, 0);
$pdf -> Cell (80, 8, 'Cash Deposit / Funds Transfer / Cheque', 0, 1);

$pdf -> Ln(8);
$pdf -> Cell (189, 8, 'Monthly payments refer to term fees on the next page', 0, 1);
$pdf -> Cell (40, 8, 'Payment Due:', 0, 0);
$pdf -> Cell (60, 8, 'Registration Fee (Item 1)', 0, 0);
$pdf -> Cell (40, 8, 'MYR ', 0, 0);
$pdf -> Cell (49, 8, 'Date ', 0, 1, 'R');

$pdf -> Cell (40, 8, '', 0, 0);
$pdf -> Cell (60, 8, 'Entrance Fees (Item 2 - 6)', 0, 0);
$pdf -> Cell (40, 8, 'MYR ', 0, 0);
$pdf -> Cell (49, 8, 'Date ', 0, 1, 'R');

$pdf -> Cell (40, 8, '', 0, 0);
$pdf -> Cell (60, 8, 'Term 1 Fees', 0, 0);
$pdf -> Cell (40, 8, 'MYR ', 0, 0);
$pdf -> Cell (49, 8, 'Date ', 0, 1, 'R');

$pdf -> Ln(3);
$pdf -> SetFont ('Calibri', '', 8);
$pdf -> Multicell (189, 5, 'It\'s optional for parents to choose payment monthly or termly basis whichever comfortable.');
$pdf -> Ln(3);
$pdf -> Multicell (189, 5, 'Due -');
$pdf -> Multicell (189, 5, 'Term fee: 1st week of every term');
$pdf -> Ln(2);
$pdf -> Multicell (189, 5, 'Or');
$pdf -> Ln(2);
$pdf -> Multicell (189, 5, 'Monthly fee: 1st day of every month');
$pdf -> Ln(2);

$pdf -> Multicell (189, 5, 'Term Fee (Paid by Monthly Basis) is due on the first week of every term. No invoice will be issued thereafter. If no payment found, a reminder will be sent to respective parents.');
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

// Payment History
$pdf -> Cell (189, 5, 'Payment History', 0, 1);
$pdf -> Cell (189, 5, 'Student ID', 0, 1);

$pdf -> Ln(2);
// Payment History
// Table Header
$pdf -> SetFont ('Calibri', 'B', 9);
$pdf -> Cell (10, 5, 'No', 0, 0);
$pdf -> Cell (25, 5, 'Recipe No', 0, 0);
$pdf -> Cell (30, 5, 'Payment Date', 0, 0);
$pdf -> Cell (30, 5, 'Receipe Date', 0, 0);
$pdf -> Cell (20, 5, 'Amount', 0, 0);
$pdf -> Cell (30, 5, 'Entrance Fees', 0, 0);
$pdf -> Cell (24, 5, 'Term Fees', 0, 0);
$pdf -> Cell (20, 5, 'Misc Fees', 0, 1);
$pdf -> Ln(3);

// Payment History
// Table Body
$pdf -> SetFont ('Calibri', '', 9);
$pdf -> Cell (160, 7, 'Total Entrance Fees Paid', 0, 0);
$pdf -> Cell (29, 7, 'MYR', 0, 1);
$pdf -> Cell (160, 7, 'Total Annual Fees Paid', 0, 0);
$pdf -> Cell (29, 7, 'MYR', 0, 1);
$pdf -> Cell (160, 7, 'Total Misc Fees Paid', 0, 0);
$pdf -> Cell (29, 7, 'MYR', 0, 1);

$pdf -> Ln(3);
$pdf -> Cell (189, 7, 'Term Fees', 0, 1);

$pdf -> Cell (35);
$pdf -> Cell (10, 7, 'Jan', 0, 0);
$pdf -> Cell (10, 7, 'Feb', 0, 0);
$pdf -> Cell (10, 7, 'Mar', 0, 0);
$pdf -> Cell (10, 7, 'APR', 0, 0);
$pdf -> Cell (10, 7, 'May', 0, 0);
$pdf -> Cell (10, 7, 'Jun', 0, 0);
$pdf -> Cell (10, 7, 'Jul', 0, 0);
$pdf -> Cell (10, 7, 'Aug', 0, 0);
$pdf -> Cell (10, 7, 'Sep', 0, 0);
$pdf -> Cell (10, 7, 'Oct', 0, 0);
$pdf -> Cell (10, 7, 'Nov', 0, 0);
$pdf -> Cell (10, 7, 'Dec', 0, 1);

$pdf -> Cell (35, 7, 'Entitlement Fee', 0, 0);
$pdf -> Cell (10, 7, '', 0, 0);
$pdf -> Cell (10, 7, '', 0, 0);
$pdf -> Cell (10, 7, '', 0, 0);
$pdf -> Cell (10, 7, '', 0, 0);
$pdf -> Cell (10, 7, '', 0, 0);
$pdf -> Cell (10, 7, '', 0, 0);
$pdf -> Cell (10, 7, '', 0, 0);
$pdf -> Cell (10, 7, '', 0, 0);
$pdf -> Cell (10, 7, '', 0, 0);
$pdf -> Cell (10, 7, '', 0, 0);
$pdf -> Cell (10, 7, '', 0, 0);
$pdf -> Cell (10, 7, '', 0, 1);

$pdf -> Cell (35, 7, 'Paid', 0, 0);
$pdf -> Cell (10, 7, '', 0, 0);
$pdf -> Cell (10, 7, '', 0, 0);
$pdf -> Cell (10, 7, '', 0, 0);
$pdf -> Cell (10, 7, '', 0, 0);
$pdf -> Cell (10, 7, '', 0, 0);
$pdf -> Cell (10, 7, '', 0, 0);
$pdf -> Cell (10, 7, '', 0, 0);
$pdf -> Cell (10, 7, '', 0, 0);
$pdf -> Cell (10, 7, '', 0, 0);
$pdf -> Cell (10, 7, '', 0, 0);
$pdf -> Cell (10, 7, '', 0, 0);
$pdf -> Cell (10, 7, '', 0, 1);

$pdf -> SetFont ('Calibri', 'B', 9);
$pdf -> Cell (35, 7, 'Balance', 1, 0);
$pdf -> Cell (10, 7, '', 1, 0);
$pdf -> Cell (10, 7, '', 1, 0);
$pdf -> Cell (10, 7, '', 1, 0);
$pdf -> Cell (10, 7, '', 1, 0);
$pdf -> Cell (10, 7, '', 1, 0);
$pdf -> Cell (10, 7, '', 1, 0);
$pdf -> Cell (10, 7, '', 1, 0);
$pdf -> Cell (10, 7, '', 1, 0);
$pdf -> Cell (10, 7, '', 1, 0);
$pdf -> Cell (10, 7, '', 1, 0);
$pdf -> Cell (10, 7, '', 1, 0);
$pdf -> Cell (10, 7, '', 1, 1);

$pdf -> SetFont ('Calibri', '', 9);
$pdf -> Cell (45, 10, 'Total Entitlement Fee', 0, 0);
$pdf -> Cell (10, 10, 'MYR ', 0, 1);
$pdf -> Cell (45, 10, 'Total Paid', 0, 0);
$pdf -> Cell (10, 10, 'MYR ', 0, 1);

$pdf -> SetFont ('Calibri', 'U', 9);
$pdf -> Cell (45, 10, 'Total Balance to Pay', 1, 0);
$pdf -> Cell (144, 10, 'MYR ', 1, 1);

// Legend Info
$pdf -> Ln(6);
$pdf -> SetFont ('Calibri', '', 9);
$pdf -> Cell (189, 5, 'Legend: ', 0, 1);
$pdf -> Cell (189, 5, 'Reg - Registration Fee: ', 0, 1);
$pdf -> Cell (189, 5, 'Sec - Security Fee: ', 0, 1);
$pdf -> Cell (189, 5, 'Pro - Programme Fee ', 0, 1);
$pdf -> Cell (189, 5, 'Equ - Equipement Fee ', 0, 1);
$pdf -> Cell (189, 5, 'Uni - Uniform Fee ', 0, 1);
$pdf -> Cell (189, 5, 'Tak - Takaful Fee ', 0, 1);
$pdf -> Cell (189, 5, '6Yr - 6 Years Old Fee ', 0, 1);


$pdf -> output('I', 'Student_Invoice.pdf');
?>