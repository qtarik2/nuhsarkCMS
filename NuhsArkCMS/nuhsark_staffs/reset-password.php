<!DOCTYPE html>
<html lang="en">
<head>
  <title>Nuh's Ark Islamic Montessori School</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!--<link rel="stylesheet" href="../assets/css/nuhsArkStaffs/reset.css">-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/nuhsArkStaffs/styles.css">
  <link rel="stylesheet" href="../assets/css/nuhsArkStaffs/navbar.css">
  <link rel="stylesheet" href="../assets/css/nuhsArkStaffs/footer.css">
  <style>
	.error {color: #FF0000; margin-top: 20px;}
  </style>
</head>
<body>
    <nav class="navbar navbar-light navbar-expand-md bg-white" style="margin: 1px;">
        <div class="container-fluid"><a class="navbar-brand" id="nuhsArkLogo" href="index.php"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button></div>
    </nav>

<main>
	<h1> Reset your password </h1>
	<p> An e-mail will be sent to you with instruction on how to reset your password. </p>
	<form action="includes/reset-request.inc.php" method="post">
		<input type="text" name="email" placeholder="Enter your e-mail address...">
		<button type="submit" name="submit">Received new password by e-mail</button>
	</form>
	<?php
		if(isset($_GET["reset"])) {
			if($_GET["reset"] == "success") {
				echo "<p class='reset'> Check your e-mail! </p>";
			}
		}
	?>
</main>

    <footer class="footer">
        <div class="row">
            <div class="col-md-3 align-self-center">
                <p>Nuh's Ark Islamic Montessori School</p>
            </div>
            <div class="col align-self-center">
                <p>2A, Jalan Jasper 7/15, Seksyen 7, Shah Alam, Selangor Darul Ehsan, Malaysia.</p>
            </div>
            <div class="col align-self-center">
                <p class="text-right">&nbsp;&nbsp;<i class="fas fa-link"></i>&nbsp;<a href="https://www.nuhsark.edu.my" style="color: rgb(255,255,255);">nuhsark.edu.my</a></p>
            </div>
        </div>
    </footer>
</body>
</html>
