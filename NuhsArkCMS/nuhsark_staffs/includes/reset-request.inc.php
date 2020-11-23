<?php
	/**
	 * This example shows settings to use when sending via Google's Gmail servers.
	 * This uses traditional id & password authentication - look at the gmail_xoauth.phps
	 * example to see how to use XOAUTH2.
	 * The IMAP section shows how to save this message to the 'Sent Mail' folder using IMAP commands.
	 */

	//Import PHPMailer classes into the global namespace
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

	require_once "PHPMailer/src/PHPMailer.php";
	require_once "PHPMailer/src/SMTP.php";
	require_once "PHPMailer/src/Exception.php"; 

if (isset($_POST["submit"])) {	
	$selector = bin2hex(random_bytes(8));
	$token = random_bytes(32);
	
	$url = "www.example.com/folder/create-new-password.php?selector=" . $selector . "&validator=" . bin2hex($token);
	
	$expires = date("U") + 1800;
	
	require_once 'connect.inc.php';
	
	$userEmail = $_POST["email"];
	
	$sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?";
	$stmt = mysqli_stmt_init($con);
	if(!mysqli_stmt_prepare($stmt, $sql)) {
		echo "There was an error!";
		exit();
	}
	else {
		mysqli_stmt_bind_param($stmt, "s", $userEmail);
		mysqli_stmt_execute($stmt);
	}
	
	$sql = "INSERT INTO pwdReset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES (?, ?, ?, ?);";
	$stmt = mysqli_stmt_init($con);
	if(!mysqli_stmt_prepare($stmt, $sql)) {
		echo "There was an error!";
		exit();
	}
	else {
		$hashedToken = password_hash($token, PASSWORD_DEFAULT);
		mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $expires);
		mysqli_stmt_execute($stmt);
	}
	
	mysqli_stmt_close($stmt);
	mysqli_close();
	
	// $to = $userEmail;
	
	// $subject = 'Reset your password for Nuhsark';
	
	// $message = '<p>We received a password reset request. The link to reset your password is below, if you do not make this request, you can ignore this email</p>';
	// $message .= '<p>Here is your password reset link: </br>';
	// $message .= '<a href="' . $url . '">' . $url . '</a></p>';
	
	// $headers = "From: nuhsark <qtarik2@gmail.com>\r\n";
	// $headers .= "Reply-To: qtarik2@gmail.com\r\n";
	// $headers .= "Content-type: text/html\r\n";
	
	// mail($to, $subject, $message, $header);
	// include "email_template.php";
	




	//Create a new PHPMailer instance
	$mail = new PHPMailer();

	//Tell PHPMailer to use SMTP
	$mail->isSMTP();

	//Enable SMTP debugging
	// SMTP::DEBUG_OFF = off (for production use)
	// SMTP::DEBUG_CLIENT = client messages
	// SMTP::DEBUG_SERVER = client and server messages
	$mail->SMTPDebug = 3;

	//Set the hostname of the mail server
	$mail->Host = 'smtp.gmail.com';
	// use
	// $mail->Host = gethostbyname('smtp.gmail.com');
	// if your network does not support SMTP over IPv6

	//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
	$mail->Port = 465;

	//Set the encryption mechanism to use - STARTTLS or SMTPS
	$mail->SMTPSecure = 'ssl';

	//Whether to use SMTP authentication
	$mail->SMTPAuth = true;

	//Username to use for SMTP authentication - use full email address for gmail
	$mail->Username = "youremail@gmail.com";

	//Password to use for SMTP authentication
	$mail->Password = "yourpass";

	//Set who the message is to be sent from
	$mail->setFrom('nuhsark@gmail.com'); 

	// Set an alternative reply-to address
	$mail->addReplyTo('no-reply@nuhsark.com');

	//Set who the message is to be sent to
	$mail->addAddress($userEmail);

	$mail->isHTML(true);

	// $to = $userEmail;
		
		// $subject = 'Reset your password for Nuhsark';
		
		// $message = '<p>We received a password reset request. The link to reset your password is below, if you do not make this request, you can ignore this email</p>';
		// $message .= '<p>Here is your password reset link: </br>';
		// $message .= '<a href="' . $url . '">' . $url . '</a></p>';
		
		// $headers = "From: nuhsark <qtarik2@gmail.com>\r\n";
		// $headers .= "Reply-To: qtarik2@gmail.com\r\n";
		// $headers .= "Content-type: text/html\r\n";
		
		// mail($to, $subject, $message, $header);
	$mail->Subject = "Reset your password for Nuhsark";
	$mail->Body = '<p>We received a password reset request. The link to reset your password is below, if you do not make this request, you can ignore this email</p>';
	$mail->Body = '<p>Here is your password reset link: </br>';
	$mail->Body = '<a href="' . $url . '">' . $url . '</a></p>';

	//send the message, check for errors
	if (!$mail->send()) {
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		echo 'Message sent!';
		//Section 2: IMAP
		//Uncomment these to save your message in the 'Sent Mail' folder.
		#if (save_mail($mail)) {
		#    echo "Message saved!";
		#}
	}

	// Section 2: IMAP
	//IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
	//Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
	//You can use imap_getmailboxes($imapStream, '/imap/ssl', '*' ) to get a list of available folders or labels, this can
	//be useful if you are trying to get this working on a non-Gmail IMAP server.
	function save_mail($mail)
	{
		//You can change 'Sent Mail' to any other folder or tag
		$path = '{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail';

		//Tell your server to open an IMAP connection using the same username and password as you used for SMTP
		$imapStream = imap_open($path, $mail->Username, $mail->Password);

		$result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
		imap_close($imapStream);

		return $result;
	}	
	
	header("Location: ../reset-password.php?reset=success");	
}
else {
	header("Location: ../index.php");
}