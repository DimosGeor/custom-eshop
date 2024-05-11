<?php # Script 11.8 - login.php #3

if (isset($_POST['submitted'])) {

	require_once ('login_functions.inc.php');
	require_once ('sql_connect.php');
	list ($check, $data) = check_login($dbc, $_POST['email'], $_POST['pass']);
	
	if ($check) { // OK!
			
		// Set the session data:.
		session_start();
		
		$_SESSION['name'] = $data['name'];
		$_SESSION['email'] = $_POST['email'];
		$_SESSION['pass'] = $_POST['pass'];
		
		// Redirect:
		$url = absolute_url ('loggedin.php');
		header("Location: $url");
		exit();
			
	} else { // Unsuccessful!
		$errors = $data;
	}
		
	mysqli_close($dbc);

} // End of the main submit conditional.

include ('login_page.inc.php');
?>
