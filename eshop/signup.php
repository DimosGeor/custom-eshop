<html>
<head>
	<meta charset="UTF-8" />
	<title>Εγγραφη</title>
	<style>
	body{
		background-color:#5F9EA0;
	}
	
	fieldset{ 
	background-color:#7FFF00;
	text-align:center;
	padding:100px;
	margin:100px;
	height:200px;
	position: relative;
    left: 400px;
 }
	 h2{
		
		margin:10px;
		
	 }
	 p{
  text-align:right;
  position:absolute;
  top: 80px;
  right: 0;
  width: 200px;
  height: 100px;
  margin:400px;
  padding:50px;
  
  }
	p img{
		position: relative;
        left: 300px;
	}
	</style>
</head>

<body>
<form action="signup.php" method="post" enctype="multipart/form-data">
	
	<fieldset style="width:200px">
	<h2>Αιτηση εγγραφης</h2>
	  <table>
		<tr><td>Ονομα</td><td>&nbsp;</td><td><input type="text" name="name" value="<?php if (isset($_POST['name'])) echo $_POST['name']; ?>"></td></tr>
		<tr><td>Επωνυμο</td><td>&nbsp;</td><td><input type="text" name="lastname" value="<?php if (isset($_POST['lastname'])) echo $_POST['lastname']; ?>"></td></tr>
		<tr><td>Ε-mail</td><td>&nbsp;</td><td><input type="text" name="email" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>"></td></tr>
	    <tr><td>Τηλεφωνο</td><td>&nbsp;</td><td><input type="text" name="phone" value="<?php if (isset($_POST['phone'])) echo $_POST['phone']; ?>"></td></tr>
		<tr><td>Κωδικος</td><td>&nbsp;</td><td><input type="password" name="pass"></td></tr>
		<tr><td>Eπιβεβαιωση κωδικου</td><td>&nbsp;</td><td><input type="password" name="pass2"></td></tr>
		</tr>
		
	</fieldset>
	<tr><td>&nbsp</td><td>&nbsp;</td><td><input type="submit" name="submitted" value="Υποβολή" name="submit"></td></tr>
	
	
</form>

 <p><a href="eshopmain.php">
 <img border="0" alt="main" src="home.png" width="100" height="100" >
</p>

</body>
</html>
<?php 



if (isset($_POST['submitted'])) {

	require_once ('sql_connect.php'); // Connect to the db.
		
	$errors = array(); // Initialize an error array.
	
	// Check for a first name:
	if (empty($_POST['name'])) {
		$errors[] = 'You forgot to enter your name.';
	} else {
		$fn = mysqli_real_escape_string($dbc, trim($_POST['name']));
	}
	
	// Check for a last name:
	if (empty($_POST['lastname'])) {
		$errors[] = 'You forgot to enter your lastname.';
	} else {
		$ln = mysqli_real_escape_string($dbc, trim($_POST['lastname']));
	}
	
	// Check for an email address:
	if (empty($_POST['email'])) {
		$errors[] = 'You forgot to enter your email address.';
	} else {
		$con=mysqli_connect("localhost","root","","eshop");
	    $x = $_POST['email'];
	    $query = "SELECT email FROM users WHERE email='$x'";
	    $y=mysqli_query($con,$query) or die("Email already used");
	
	if(mysqli_num_rows($y)>0)                                                       
	{
		$errors[] = 'The inserted email is ALREADY IN USE. Try another one.';
	}
		$e = mysqli_real_escape_string($dbc, trim($_POST['email']));
	}
	if (empty($_POST['phone'])) {
		$errors[] = 'You forgot to enter your phone.';
	} else {
		$ph = mysqli_real_escape_string($dbc, trim($_POST['phone']));
	}
	// Check for a password and match against the confirmed password:
	if (!empty($_POST['pass'])) {
		if ($_POST['pass'] != $_POST['pass2']) {
			$errors[] = 'Your password did not match the confirmed password.';
		} else {
			$p = mysqli_real_escape_string($dbc, trim($_POST['pass']));
		}
	} else {
		$errors[] = 'You forgot to enter your password.';
	}
	
	if (empty($errors)) { // If everything's OK.
	
		// Register the user in the database...
		
		// Make the query:
		$q = "INSERT INTO users (name, lastname, email, phone,pass) VALUES ('$fn', '$ln', '$e','$ph', SHA1('$p') )";		
		$r = @mysqli_query ($dbc, $q); // Run the query.
		if ($r) { // If it ran OK.
		
			// Print a message:
			echo 
	      '<script>alert("You are now registered.")</script>';
		
		
		} else { // If it did not run OK.
			
			// Public message:
			echo '
			<h3 class="error">You could not be registered due to a system error.</h3>'; 
			
			// Debugging message:
			echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $q . '</p>';
						
		} // End of if ($r) IF.
		
		mysqli_close($dbc); // Close the database connection.

		// Include the footer and quit the script:
	
		exit();
		
	} else { // Report the errors.
	
		
		foreach ($errors as $msg) { // Print each error.
			echo "<script>alert( '- $msg')</script>";
		}
		
		
	} // End of if (empty($errors)) IF.
	
	mysqli_close($dbc); // Close the database connection.

} // End of the main Submit conditional.
?>