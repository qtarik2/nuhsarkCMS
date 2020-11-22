<?php
// Session
include("includes/session.inc.php");

// FPDF Library
require('../assets/fpdf182/fpdf.php');

// DB Connect
include("includes/connect.inc.php");
 
// Get Payslips data
$ICNo=$_SESSION['username'];
$PayslipID=$_REQUEST["ID"];

$count = 1;
$sql = "Select * FROM madrasati_payslip WHERE ID = '$PayslipID' AND ICNo = '$ICNo'";
$result = mysqli_query($con, $sql);

// Associative array
while($Payslip = mysqli_fetch_assoc($result)) {
	// A4 width: 219mm
	// Default margin: 10mm each side
	// Writable horizontal: 219-(10*2) = 189mm

	$pdf = new FPDF('P', 'mm', 'A4');

	$pdf -> AddFont('Calibri', '', 'calibri.php');
	$pdf -> AddFont('Calibri', 'B', 'calibrib.php');
	$pdf -> AddPage();

	// Header
	// Logo
	$pdf->Image('../assets/img/logo_madrasati.png',10,10, -400);

	// Set font to Calibri, bold, 14pt
	$pdf -> SetFont('Calibri', 'B', 9);

	// Cell(width, height, text, border, endline, [alignment])
	$pdf -> Cell (60);
	$pdf -> Cell (69, 5, 'Madrasati Montessori Primary School', 0, 1);
	$pdf -> Cell (60);
	$pdf -> Cell (69, 5, '2A, Jalan Jasper, 7/15, Seksyen7,', 0, 1);
	$pdf -> Cell (60);
	$pdf -> Cell (69, 5, '40000, Shah Alam, Selangor.', 0, 1);
	$pdf -> Cell (60);
	$pdf -> Cell (69, 5, 'Tel : 019-336 2789', 0, 1);
	$pdf -> Cell (60);
	$pdf -> Cell (10, 5, 'Email : madrasatihq@gmail.com', 0, 1);
	$pdf -> Cell (60);
	$pdf -> Cell (69, 5, 'www.madrasati.edu.my', 0, 1);
	
	
	$pdf -> Ln(7);
	// Body
	// Payslip info
	$pdf -> SetFont('Calibri', 'B', 12);
	$pdf -> Cell (60);
	$pdf -> Cell (60, 7, ' PAYSLIP', 0, 1);

	$pdf -> SetFont('Calibri', '', 9);
	$pdf -> Cell (60);
	$pdf -> Cell (25, 7, ' Month : ', 0, 0);
	$pdf -> Cell (105, 7, $Payslip['Month'], 0, 1);
	$pdf -> Cell (60);
	$pdf -> Cell (25, 7, ' Name : ', 0, 0);
	$pdf -> Cell (34, 7, $Payslip['Name'], 0, 1);
	$pdf -> Cell (60);
	$pdf -> Cell (25, 7, ' Position : ', 0, 0);
	$pdf -> Cell (105, 7, $Payslip['Position'], 0, 1);
	$pdf -> Cell (60);
	$pdf -> Cell (25, 7, ' IC No. : ', 0, 0);
	$pdf -> Cell (34, 7, $Payslip['ICNo'], 0, 1);
	$pdf -> Cell (60);
	$pdf -> Cell (25, 7, ' EPF No. : ', 0, 0);
	$pdf -> Cell (105, 7, $Payslip['EPFNo'], 0, 1);
	$pdf -> Ln(5); // New line

	// Payslip Table 
	// Header
	$pdf -> SetFont('Calibri', '', 10);
	$pdf -> Cell (189, 8, 'EARNINGS', 0, 1);
	$pdf -> Cell (20, 8, 'No', 1, 0);
	$pdf -> Cell (69, 8, 'DESCRIPTIONS', 1, 0);
	$pdf -> Cell (50, 8, 'GROSS', 1, 0);
	$pdf -> Cell (50, 8, 'NETT', 1, 1);

	// Payslip Table 
	// Body

	$pdf -> Cell (20, 8, '1', 1, 0);
	$pdf -> Cell (69, 8, 'SALARY', 1, 0);
	$pdf -> Cell (50, 8, 'MYR '.$Payslip['GrossBasic'], 1, 0);
	$pdf -> Cell (50, 8, 'MYR '.$Payslip['NettBasic'], 1, 1);

	$pdf -> Cell (20, 8, '2', 1, 0);
	$pdf -> Cell (69, 8, 'ALLOWANCE', 1, 0);
	$pdf -> Cell (50, 8, 'MYR '.$Payslip['GrossAllowance'], 1, 0);
	$pdf -> Cell (50, 8, 'MYR '.$Payslip['NettAllowance'], 1, 1);

	$pdf -> Cell (20, 8, '3', 1, 0);
	$pdf -> Cell (69, 8, 'EPF (13%)', 1, 0);
	$pdf -> Cell (50, 8, 'MYR '.$Payslip['EPFEmployer'], 1, 0);
	$pdf -> Cell (50, 8, '', 1, 1);

	$pdf -> Cell (20, 8, '4', 1, 0);
	$pdf -> Cell (69, 8, 'SOCSO', 1, 0);
	$pdf -> Cell (50, 8, 'MYR '.$Payslip['SOCSOEmployer'], 1, 0);
	$pdf -> Cell (50, 8, '', 1, 1);

	$pdf -> Cell (20, 8, '5', 1, 0);
	$pdf -> Cell (69, 8, 'SOCSO SIP', 1, 0);
	$pdf -> Cell (50, 8, 'MYR '.$Payslip['SOCSOSIPEmployer'], 1, 0);
	$pdf -> Cell (50, 8, '', 1, 1);

	$pdf -> Cell (20, 8, '6', 1, 0);
	$pdf -> Cell (69, 8, 'CLAIMS', 1, 0);
	$pdf -> Cell (50, 8, 'MYR '.$Payslip['Claims'], 1, 0);
	$pdf -> Cell (50, 8, 'MYR '.$Payslip['Claims'], 1, 1);

	$pdf -> Cell (20, 8, '', 1, 0);
	$pdf -> Cell (69, 8, 'TOTAL EARNINGS', 1, 0);
	$pdf -> Cell (50, 8, 'MYR '.$Payslip['GrossEarnings'], 1, 0);
	$pdf -> Cell (50, 8, 'MYR '.$Payslip['NettEarnings'], 1, 1);


	$pdf -> Ln(5); // New line

	// Payslip Table 2
	// Header
	$pdf -> Cell (189, 8, 'DEDUCTIONS', 0, 1);


	// Payslip Table 2
	// Body
	$pdf -> Cell (20, 8, '1', 1, 0);
	$pdf -> Cell (69, 8, 'EPF (8%)', 1, 0);
	$pdf -> Cell (50, 8, '', 1);
	$pdf -> Cell (50, 8, 'MYR '.$Payslip['EPFEmployee'], 1, 1);

	$pdf -> Cell (20, 8, '2', 1, 0);
	$pdf -> Cell (69, 8, 'SOCSO', 1, 0);
	$pdf -> Cell (50, 8, '', 1);
	$pdf -> Cell (50, 8, 'MYR '.$Payslip['SOCSOEmployee'], 1, 1);

	$pdf -> Cell (20, 8, '3', 1, 0);
	$pdf -> Cell (69, 8, 'SOCSO SIP', 1, 0);
	$pdf -> Cell (50, 8, '', 1);
	$pdf -> Cell (50, 8, 'MYR '.$Payslip['SOCSOSIPEmployee'], 1, 1);

	$pdf -> Cell (20, 8, '4', 1, 0);
	$pdf -> Cell (69, 8, 'ABSENT', 1, 0);
	$pdf -> Cell (50, 8, $Payslip['Notes'], 1, 0);
	$pdf -> Cell (50, 8, 'MYR '.$Payslip['Others'], 1, 1);

	$pdf -> Cell (20, 8, '', 1, 0);
	$pdf -> Cell (69, 8, 'TOTAL DEDUCTIONS', 1, 0);
	$pdf -> Cell (50, 8, '', 1, 0);
	$pdf -> Cell (50, 8, 'MYR '.$Payslip['TotalDeductions'], 1, 1);

	$pdf -> Cell (189, 8, 'NOTES ' . $Payslip['Notes1'], 1, 1);

	$pdf -> Ln(6);

	// Footer
	$pdf -> Cell (30, 8, '', 0, 0);
	$pdf -> Cell (59, 8, '', 0, 0);
	$pdf -> Cell (50, 8, 'NETT SALARY ', 0, 0);
	$pdf -> Cell (50, 8, 'MYR '.$Payslip['NettSalary'], 0, 1);

	$pdf -> Ln(3);
	$pdf -> Cell (30, 8, 'Approved By: ', 0, 0);
	$pdf -> Cell (59, 8, $Payslip['ApprovedBy'], 0, 0);
	$pdf -> Cell (50, 8, 'Cheque No.:  ', 0, 0);
	$pdf -> Cell (50, 8, $Payslip['ChequeNo'], 0, 1);

	$pdf -> Cell (30, 8, 'Received By: ', 0, 0);
	$pdf -> Cell (59, 8, $Payslip['ReceivedBy'], 0, 0);
	$pdf -> Cell (50, 8, 'Date:  ', 0, 0);
	$pdf -> Cell (50, 8, $Payslip['Date'], 0, 1);	


	$pdf -> output('I', 'Payslip.pdf');

$count++;
}
?>