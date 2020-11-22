<?php
session_start();

if(!isset($_SESSION["username"])){
	header("Location: login.php");
	exit();
}
else{	
	if(isset($_SESSION['start']) && (time() - $_SESSION['start']) > 1800)	{
		 // last request was more than 30 minutes ago
		header("Location: includes/logout.inc.php");
	}
	else{
		session_regenerate_id(true);
		$_SESSION['start'] = time();	
	}
}