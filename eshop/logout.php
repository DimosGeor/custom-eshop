<?php # Script 11.11 - logout.php #2
// This page lets the user logout.

session_start(); // Access the existing session.

// If no session variable exists, redirect the user:
if (!isset($_SESSION['email'])) {

	require_once ('login_functions.inc.php');
	$url = absolute_url();
	header("Location: $url");
	exit();

} else { // Cancel the session.

	$_SESSION = array(); // Clear the variables.
	session_destroy(); // Destroy the session itself.
}

// Set the page title and include the HTML header:
$page_title = 'Logged Out!';

// Print a customized message:
echo "<h3>Logged Out!</h1>
<p>You are now logged out!</p>";
include ('eshopmain.php');

?>
<style>
h3,p{
  background-color:#A9A9A9;
  text-align:center;
  padding:5px;
  margin-bottom:0px;
 margin-top:0px;
}
</style>
