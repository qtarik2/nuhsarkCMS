<?php
/*

*/

// include("auth.php"); //include auth.php file on all secure pages ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style type="text/css">
body {
    font-family: "Lato", sans-serif;
}



.main-head{
    height: 150px;
    background: #FFF;
   
}

.sidenav {
    height: 100%;
    background-color: #000;
    overflow-x: hidden;
    padding-top: 20px;
}


.main {
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
}

@media screen and (max-width: 450px) {
    .login-form{
        margin-top: 10%;
    }

    .register-form{
        margin-top: 10%;
    }
}

@media screen and (min-width: 768px){
    .main{
        margin-left: 40%; 
    }

    .sidenav{
        width: 40%;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
    }

    .login-form{
        margin-top: 80%;
    }

    .register-form{
        margin-top: 20%;
    }
}


.login-main-text{
    margin-top: 20%;
    padding: 60px;
    color: #fff;
}

.login-main-text h2{
    font-weight: 300;
}

.btn-black{
    background-color: #000 !important;
    color: #fff;
}
</style>
<title>Nuh's Ark Islamic Montessori School</title>

<!------ Include the above in your HEAD tag ---------->

<div class="sidenav">
         <div class="login-main-text">
            <h2>Nuh's Ark Islamic Montessori School<br>Madrasati Montessori Primary School<br>Login Page</h2>
            <p>Authorised Personnel Only</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
<?php
	require('db.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
		
		$username = test_input($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$password = test_input($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
		$hashedPassword = password_hash($password, PASSWORD_DEFAULT);	
		$checkPassword = password_verify($password, $hashedPassword);
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM administrator WHERE Username='$username' and Password='".$hashedPassword."'";
        
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1 && checkPassword === true){
			$_SESSION['username'] = $username;
			
            $_SESSION['start'] = time(); // Taking now logged in time.
            // Ending a session in 30 minutes from the starting time.
            $_SESSION['expire'] = $_SESSION['start'] + (12 * 60 * 60);
            			
			header("Location: index.php"); // Redirect user to index.php
        }else(checkPassword === false){
			echo "<div class='form'>
			<div class='alert alert-danger'>
			<strong>ERROR!</strong> INVALID CREDENTIALS. EITHER USERNAME OR PASSWORD IS WRONG!
			</div>
			</div>
			<br/>Click here to <a href='login.php'>Login</a></div>";
		}
    }else{
?>

               <form action="" method="post" name="login">
                  <div class="form-group">
                     <label>Username</label>
                     <input type="text" class="form-control" placeholder="Username" name="username">
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" class="form-control" placeholder="Password" name="password">
                  </div>
                  <button type="submit" class="btn btn-black">Login</button>
               </form>
<?php } ?>
            </div>
         </div>
      </div>