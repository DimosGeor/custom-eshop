<?php # Script 11.9 - loggedin.php #2

// The user is redirected here from login.php.

session_start(); // Start the session.

// If no session value is present, redirect the user:
if (!isset($_SESSION['email'])) {
	require_once ('login_functions.inc.php');
	$url = absolute_url();
	header("Location: $url");
	exit();	
}

$page_title = 'Logged In!';


// Print a customized message:
echo "<h4>Logged In!</h4>
<p>You are now logged in, {$_SESSION['email']}!</p>
<p><a href=\"logout.php\">Logout</a></p>";



include ('eshopmain.php');
?>
<style>
h4,p{
	text-align:center;
	
	 background-color:#A9A9A9;
  text-align:center;
  padding:5px;
  margin-bottom:0px;	
	margin-top:0px;
}



</style>
