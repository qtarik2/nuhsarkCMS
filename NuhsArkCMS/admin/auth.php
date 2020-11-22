<?php

session_start();
if(!isset($_SESSION["username"]))
	{
		header("Location: login.php");
		// ini_set('session.gc_maxlifetime', 43200);    // 3 hours 10800
		// session_set_cookie_params(43200);
		// $_SESSION['logged_in'] = true; //set you've logged in
		// $_SESSION['last_activity'] = time(); //your last activity was now, having logged in.
		// $_SESSION['expire_time'] = 43200; //expire time in seconds: 12 hours (you must change this)
		
		$_SESSION['start'] = time(); // Taking now logged in time.
        // Ending a session in 30 minutes from the starting time.
        $_SESSION['expire'] = $_SESSION['start'] + (12 * 60 * 60);

		exit(); 		   
	}
?>

