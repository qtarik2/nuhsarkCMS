<?php
require('../../fpdf182/fpdf.php');

// Auth 
//include("auth.php");

// DB Connect
include("connect.php");
 
// Get invoices data
$InvoiceNo=$_REQUEST["InvoiceNo"];

$count = 1;
$sql = "Select * FROM invoice WHERE InvoiceNo = '$InvoiceNo'";
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
	$pdf -> Cell (189, 10, 'Entrance Fees', 0, 1);
	$pdf -> Cell (20, 10, 'No', 1, 0);
	$pdf -> Cell (89, 10, 'Descriptions', 1, 0);
	$pdf -> Cell (40, 10, 'Price/Unit', 1, 0);
	$pdf -> Cell (40, 10, 'Total Price', 1, 1);

	// Invoice Table 
	// Body

	$pdf -> Cell (20, 10, '1', 1, 0);
	$pdf -> Cell (89, 10, 'Registration', 1, 0);
	$pdf -> Cell (40, 10, '250.00', 1, 0);
	$pdf -> Cell (40, 10, 'MYR '.$Invoice['Registration'], 1, 1);

	$pdf -> Cell (20, 10, '2', 1, 0);
	$pdf -> Cell (89, 10, 'Security', 1, 0);
	$pdf -> Cell (40, 10, '500.00', 1, 0);
	$pdf -> Cell (40, 10, 'MYR '.$Invoice['Security'], 1, 1);

	$pdf -> Cell (20, 10, '3', 1, 0);
	$pdf -> Cell (89, 10, 'Equipment', 1, 0);
	$pdf -> Cell (40, 10, '500.00', 1, 0);
	$pdf -> Cell (40, 10, 'MYR '.$Invoice['Equipment'], 1, 1);

	$pdf -> Cell (20, 10, '4', 1, 0);
	$pdf -> Cell (89, 10, 'Program', 1, 0);
	$pdf -> Cell (40, 10, '500.00', 1, 0);
	$pdf -> Cell (40, 10, 'MYR '.$Invoice['Program'], 1, 1);

	$pdf -> Cell (20, 10, '5', 1, 0);
	$pdf -> Cell (89, 10, 'Uniform', 1, 0);
	$pdf -> Cell (40, 10, '250.00', 1, 0);
	$pdf -> Cell (40, 10, 'MYR '.$Invoice['Uniform'], 1, 1);

	$pdf -> Cell (20, 10, '6', 1, 0);
	$pdf -> Cell (89, 10, 'Takaful', 1, 0);
	$pdf -> Cell (40, 10, '20.00', 1, 0);
	$pdf -> Cell (40, 10, 'MYR '.$Invoice['Takaful'], 1, 1);

	$pdf -> Cell (20, 10, '7', 1, 0);
	$pdf -> Cell (89, 10, '6 Years Old / Others', 1, 0);
	$pdf -> Cell (40, 10, '200.00', 1, 0);
	$pdf -> Cell (40, 10, 'MYR '.$Invoice['Extra1'], 1, 1);

	$pdf -> Cell (20, 10, '', 1, 0);
	$pdf -> Cell (89, 10, '', 1, 0);
	$pdf -> Cell (40, 10, 'Amount', 1);
	$pdf -> Cell (40, 10, 'MYR '.$Invoice['Amount'], 1, 1);


	$pdf -> Ln(7); // New line

	// Invoice Table 2
	// Header
	$pdf -> Cell (189, 10, 'Itemised Fee Structure', 0, 1);
	$pdf -> Cell (149, 10, 'Descriptions', 1, 0);
	$pdf -> Cell (40, 10, 'Amount', 1, 1);

	// Invoice Table 2
	// Body
	$pdf -> Cell (149, 10, '[8] Initial Term Fee', 1, 0);
	$pdf -> Cell (40, 10, 'MYR '.$Invoice['Term'], 1, 1);

	$pdf -> SetFont('Calibri', 'U', 9);
	$pdf -> Cell (149, 10, 'Annual Fees = Term fee * 4', 1, 0);
	$pdf -> Cell (40, 10, 'MYR '.$Invoice['AnnualTermFees'], 1, 1);

	$pdf -> Cell (149, 10, 'Deductions', 1, 0);
	$pdf -> Cell (40, 10, '', 1, 1);

	$pdf -> SetFont('Calibri', '', 9);
	$pdf -> Cell (149, 10, '[9] Rebates / Bantuan Anis / Term 1 Adjustment', 1, 0);
	$pdf -> Cell (40, 10, '- MYR '.$Invoice['Term1Rebates'], 1, 1);

	$pdf -> Cell (149, 10, '[10] Rebates / Bantuan Anis / Term 2 Adjustment', 1, 0);
	$pdf -> Cell (40, 10, '- MYR '.$Invoice['Term2Rebates'], 1, 1);

	$pdf -> Cell (149, 10, '[11] Rebates / Bantuan Anis / Term 3 Adjustment', 1, 0);
	$pdf -> Cell (40, 10, '- MYR '.$Invoice['Term3Rebates'], 1, 1);

	$pdf -> Cell (149, 10, '[12] Rebates / Bantuan Anis / Term 4 Adjustment', 1, 0);
	$pdf -> Cell (40, 10, '- MYR '.$Invoice['Term4Rebates'], 1, 1);

	$pdf -> Cell (149, 10, '[13] Waived', 1, 0);
	$pdf -> Cell (40, 10, '- MYR '.$Invoice['Rebates1'], 1, 1);

	$pdf -> SetFont('Calibri', 'U', 9);
	$pdf -> Cell (149, 10, 'Total Deductions (From Item 9 till 12)', 1, 0);
	$pdf -> Cell (40, 10, '- MYR '.$Invoice['Rebates3'], 1, 1);

	$pdf -> SetFont('Calibri', '', 9);
	$pdf -> Cell (149, 10, 'Revised Annual Fees = Annual Fees - Deductions', 1, 0);
	$pdf -> Cell (40, 10, '- MYR '.$Invoice['AnnualTermFeesRevised'], 1, 1);

	$pdf -> Cell (149, 10, 'Total Annual Fees Paid', 1, 0);
	$pdf -> Cell (40, 10, '- MYR '.$Invoice['Paid'], 1, 1);

	$pdf -> SetFont('Calibri', 'B', 9);
	$pdf -> Cell (149, 10, 'Total Balance to Pay Until December 2021', 1, 0);
	$pdf -> Cell (40, 10, '- MYR '.$Invoice['Balance'], 1, 1);

	$pdf -> SetFont('Calibri', '', 9);
	$pdf -> Cell (40, 10, 'Remarks', 1, 0);
	$pdf -> Cell (149, 10, $Invoice['Remarks'], 1, 1);


	$pdf -> Ln(6);

	// Footer
	$pdf -> SetFont('Calibri', '', 9);
	$pdf -> Cell (60, 8, 'Payment Terms:', 0, 0);
	$pdf -> Cell (80, 8, 'Cash Deposit / Funds Transfer / Cheque', 0, 1);

	$pdf -> Ln(8);
	$pdf -> Cell (189, 8, 'Monthly payments refer to term fees on the next page', 0, 1);
	$pdf -> Cell (40, 8, 'Payment Due:', 0, 0);
	$pdf -> Cell (60, 8, 'Registration Fee (Item 1)', 0, 0);
	$pdf -> Cell (40, 8, 'MYR '.$Invoice['Registration'], 0, 0);
	$pdf -> Cell (49, 8, 'Immediate ', 0, 1, 'R');

	$pdf -> Cell (40, 8, '', 0, 0);
	$pdf -> Cell (60, 8, 'Entrance Fees (Item 2 - 6)', 0, 0);
	$pdf -> Cell (40, 8, 'MYR '.number_format($Invoice['Security'] + $Invoice['Equipment'] + $Invoice['Program'] + $Invoice['Uniform'] + $Invoice['Takaful'] + $Invoice['Extra1'], 2, '.', ''), 0, 0);
	$pdf -> Cell (49, 8, $Invoice['Due2'], 0, 1, 'R');

	$pdf -> Cell (40, 8, '', 0, 0);
	$pdf -> Cell (60, 8, 'Term 1 Fees', 0, 0);
	$pdf -> Cell (40, 8, 'MYR '.$Invoice['Term'], 0, 0);
	$pdf -> Cell (49, 8, $Invoice['Due3'], 0, 1, 'R');

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
	$pdf -> Cell (189, 5, $Invoice['StudentID'], 0, 1);

	$pdf -> Ln(2);

	// Fetch Payment History
	$StudentTemp = $Invoice['StudentID'];
	$Query_Sum1 = "SELECT SUM(AnnualFees) FROM payment WHERE StudentID='$StudentTemp'";
	$Query_Sum2 = "SELECT SUM(TermFees) FROM payment WHERE StudentID='$StudentTemp'";
	$Query_Sum3 = "SELECT SUM(MiscFees) FROM payment WHERE StudentID='$StudentTemp'";	 	

	if ($result_1 = mysqli_query($con, $Query_Sum1)) {
		/* fetch associative array */
		while ($row = mysqli_fetch_array($result_1)) {
			$Paid_AnnualFees = $row['SUM(AnnualFees)'];
		}
	}

	if ($result_2 = mysqli_query($con, $Query_Sum2)) {
		/* fetch associative array */
		while ($row = mysqli_fetch_array($result_2)) {
			$Paid_TermFees = $row['SUM(TermFees)'];
		}
	}

	if ($result_3 = mysqli_query($con, $Query_Sum3)) {
		/* fetch associative array */
		while ($row = mysqli_fetch_array($result_3)) {
			$Paid_MiscFees = $row['SUM(MiscFees)'];
		}
	}


	// Payment History
	// Table Header
	$pdf -> SetFont ('Calibri', 'B', 9);
	$pdf -> Cell (10, 5, 'No', 1, 0);
	$pdf -> Cell (17, 5, 'Receipt No', 1, 0);
	$pdf -> Cell (25, 5, 'Payment Date', 1, 0);
	$pdf -> Cell (20, 5, 'Receipt Date', 1, 0);
	$pdf -> Cell (30, 5, 'Amount', 1, 0);
	$pdf -> Cell (30, 5, 'Entrance Fees', 1, 0);
	$pdf -> Cell (30, 5, 'Term Fees', 1, 0);
	$pdf -> Cell (27, 5, 'Misc Fees', 1, 1);

	$pdf -> SetFont ('Calibri', '', 9);
	$Query_count=1;

	$Query_Payment="SELECT * FROM payment WHERE StudentID='$StudentTemp'";
	$Result_Payment = mysqli_query($con,$Query_Payment);

	while($Payment = mysqli_fetch_assoc($Result_Payment)) { 
		$pdf -> Cell (10, 5, $Query_count, 1, 0);
		$pdf -> Cell (17, 5, $Payment['ReceiptNo'], 1, 0);
		$pdf -> Cell (25, 5, $Payment['PaymentDate'], 1, 0);
		$pdf -> Cell (20, 5, $Payment['Date'], 1, 0);
		$pdf -> Cell (30, 5, 'MYR '.$Payment['Amount'], 1, 0);
		$pdf -> Cell (30, 5, 'MYR '.$Payment['AnnualFees'], 1, 0);
		$pdf -> Cell (30, 5, 'MYR '.$Payment['TermFees'], 1, 0);
		$pdf -> Cell (27, 5, 'MYR '.$Payment['MiscFees'], 1, 1);
		
		$Query_count++;
	}

	$pdf -> Ln(3);
	// Payment History
	// Table Body
	$pdf -> SetFont ('Calibri', '', 9);
	$pdf -> Cell (160, 7, 'Total Entrance Fees Paid', 0, 0);
	$pdf -> Cell (29, 7, 'MYR '.$Paid_AnnualFees, 0, 1);
	$pdf -> Cell (160, 7, 'Total Annual Fees Paid', 0, 0);
	$pdf -> Cell (29, 7, 'MYR '.$Paid_TermFees, 0, 1);
	$pdf -> Cell (160, 7, 'Total Misc Fees Paid', 0, 0);
	$pdf -> Cell (29, 7, 'MYR '.$Paid_MiscFees, 0, 1);

	$pdf -> Ln(3);
	$pdf -> Cell (189, 7, 'Term Fees', 0, 1);

	$pdf -> Cell (33);
	$pdf -> Cell (13, 7, 'Jan', 0, 0);
	$pdf -> Cell (13, 7, 'Feb', 0, 0);
	$pdf -> Cell (13, 7, 'Mar', 0, 0);
	$pdf -> Cell (13, 7, 'APR', 0, 0);
	$pdf -> Cell (13, 7, 'May', 0, 0);
	$pdf -> Cell (13, 7, 'Jun', 0, 0);
	$pdf -> Cell (13, 7, 'Jul', 0, 0);
	$pdf -> Cell (13, 7, 'Aug', 0, 0);
	$pdf -> Cell (13, 7, 'Sep', 0, 0);
	$pdf -> Cell (13, 7, 'Oct', 0, 0);
	$pdf -> Cell (13, 7, 'Nov', 0, 0);
	$pdf -> Cell (13, 7, 'Dec', 0, 1);

	$count_account_1=1;

	$sel_query_account_1="SELECT * FROM invoice WHERE StudentID='$StudentTemp' AND InvoiceNo='$InvoiceNo'";

	$result_account_1 = mysqli_query($con,$sel_query_account_1);

	while($row = mysqli_fetch_assoc($result_account_1)) {
		$pdf -> Cell (33, 7, 'Entitlement Fee', 0, 0);
		$pdf -> Cell (13, 7, $row["Fee01"], 0, 0);
		$pdf -> Cell (13, 7, $row["Fee02"], 0, 0);
		$pdf -> Cell (13, 7, $row["Fee03"], 0, 0);
		$pdf -> Cell (13, 7, $row["Fee04"], 0, 0);
		$pdf -> Cell (13, 7, $row["Fee05"], 0, 0);
		$pdf -> Cell (13, 7, $row["Fee06"], 0, 0);
		$pdf -> Cell (13, 7, $row["Fee07"], 0, 0);
		$pdf -> Cell (13, 7, $row["Fee08"], 0, 0);
		$pdf -> Cell (13, 7, $row["Fee09"], 0, 0);
		$pdf -> Cell (13, 7, $row["Fee10"], 0, 0);
		$pdf -> Cell (13, 7, $row["Fee11"], 0, 0);
		$pdf -> Cell (13, 7, $row["Fee12"], 0, 1);

		$pdf -> Cell (33, 7, 'Paid', 0, 0);
		$pdf -> Cell (13, 7, $row["Paid01"], 0, 0);
		$pdf -> Cell (13, 7, $row["Paid02"], 0, 0);
		$pdf -> Cell (13, 7, $row["Paid03"], 0, 0);
		$pdf -> Cell (13, 7, $row["Paid04"], 0, 0);
		$pdf -> Cell (13, 7, $row["Paid05"], 0, 0);
		$pdf -> Cell (13, 7, $row["Paid06"], 0, 0);
		$pdf -> Cell (13, 7, $row["Paid07"], 0, 0);
		$pdf -> Cell (13, 7, $row["Paid08"], 0, 0);
		$pdf -> Cell (13, 7, $row["Paid09"], 0, 0);
		$pdf -> Cell (13, 7, $row["Paid10"], 0, 0);
		$pdf -> Cell (13, 7, $row["Paid11"], 0, 0);
		$pdf -> Cell (13, 7, $row["Paid12"], 0, 1);

		$pdf -> SetFont ('Calibri', 'B', 9);
		$pdf -> Cell (33, 7, 'Balance', 1, 0);
		$pdf -> Cell (13, 7, $row["Bal01"], 1, 0);
		$pdf -> Cell (13, 7, $row["Bal01"], 1, 0);
		$pdf -> Cell (13, 7, $row["Bal01"], 1, 0);
		$pdf -> Cell (13, 7, $row["Bal01"], 1, 0);
		$pdf -> Cell (13, 7, $row["Bal01"], 1, 0);
		$pdf -> Cell (13, 7, $row["Bal01"], 1, 0);
		$pdf -> Cell (13, 7, $row["Bal01"], 1, 0);
		$pdf -> Cell (13, 7, $row["Bal01"], 1, 0);
		$pdf -> Cell (13, 7, $row["Bal01"], 1, 0);
		$pdf -> Cell (13, 7, $row["Bal01"], 1, 0);
		$pdf -> Cell (13, 7, $row["Bal01"], 1, 0);
		$pdf -> Cell (13, 7, $row["Bal01"], 1, 1);

		$pdf -> SetFont ('Calibri', '', 9);
		$pdf -> Cell (45, 10, 'Total Entitlement Fee', 0, 0);
		$pdf -> Cell (10, 7, 'MYR '.$row["AnnualTermFeesRevised"], 0, 1);
		$pdf -> Cell (45, 7, 'Total Paid', 0, 0);
		$pdf -> Cell (10, 7, 'MYR '.$row["Paid"], 0, 1);

		$pdf -> SetFont ('Calibri', 'U', 9);
		$pdf -> Cell (45, 7, 'Total Balance to Pay', 1, 0);
		$pdf -> Cell (144, 7, 'MYR '.$row["Balance"], 1, 1);
	} 
	$count_account_1++;

	$pdf -> Ln(6);
	$pdf -> SetFont ('Calibri', '', 9);
	$count_account=1;
	$sel_query_account="SELECT * FROM accountsummary WHERE StudentID='$StudentTemp'";
	$result_account = mysqli_query($con,$sel_query_account);

	while($row = mysqli_fetch_assoc($result_account)) {	
		$pdf -> Cell (189, 7, 'Entrance Fees', 0, 1);
		$pdf -> Cell (15);
		$pdf -> Cell (20, 7, 'Reg', 0, 0);
		$pdf -> Cell (20, 7, 'Sec', 0, 0);
		$pdf -> Cell (20, 7, 'Pro', 0, 0);
		$pdf -> Cell (20, 7, 'Equ', 0, 0);
		$pdf -> Cell (20, 7, 'Uni', 0, 0);
		$pdf -> Cell (20, 7, 'Tak', 0, 0);
		$pdf -> Cell (20, 7, '6Yr', 0, 1);

		$pdf -> Cell (15, 7, 'Paid', 0, 0);
		$pdf -> Cell (20, 7, $row['Registration'], 0, 0);
		$pdf -> Cell (20, 7, $row['Security'], 0, 0);
		$pdf -> Cell (20, 7, $row['Program'], 0, 0);
		$pdf -> Cell (20, 7, $row['Equipment'], 0, 0);
		$pdf -> Cell (20, 7, $row['Uniform'], 0, 0);
		$pdf -> Cell (20, 7, $row['Takaful'], 0, 0);
		$pdf -> Cell (20, 7, $row['Extra1'], 0, 1); 
	} 
	$count_account++;

	// Legend Info
	$pdf -> Ln(4);
	$pdf -> SetFont ('Calibri', '', 9);
	$pdf -> Cell (189, 5, 'Legend: ', 0, 1);
	$pdf -> Cell (189, 5, 'Reg - Registration Fee: ', 0, 1);
	$pdf -> Cell (189, 5, 'Sec - Security Fee: ', 0, 1);
	$pdf -> Cell (189, 5, 'Pro - Programme Fee ', 0, 1);
	$pdf -> Cell (189, 5, 'Equ - Equipment Fee ', 0, 1);
	$pdf -> Cell (189, 5, 'Uni - Uniform Fee ', 0, 1);
	$pdf -> Cell (189, 5, 'Tak - Takaful Fee ', 0, 1);
	$pdf -> Cell (189, 5, '6Yr - 6 Years Old Fee ', 0, 1);


	$pdf -> output('I', 'Student_Invoice.pdf');

$count++;
}
?>