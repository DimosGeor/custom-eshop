<?php # Script 11.1 - login_page.inc.php

// This page prints any errors associated with logging in
// and it creates the entire login page, including the form.

// Include the header:
$page_title = 'Login';
// Print any error messages, if they exist:
if (!empty($errors)) {
	echo '<h1>Error!</h1>
	<p class="error">The following error(s) occurred:<br />';
	foreach ($errors as $msg) {
		echo " - $msg<br />\n";
	}
	echo '</p><p>Please try again.</p>';
}



?>
<style>
  form{
	  background-color:white;
	  width:30%;
	  text-align:center;
	  border:1px solid black;
	  position:relative;
	  left:500px;
  }
  h1{
	  text-align:center;
  }
  p{
	  text-align:center;
  }
  body{
  background-color:#B8860B;}
  </style>
  <body>
<h1>Login</h1>
<form action="login.php" method="post">
	<p>Email Address: <input type="text" name="email" size="20" maxlength="80" /> </p>
	<p>Password: <input type="password" name="pass" size="20" maxlength="20" /></p>
	<p><input type="submit" name="submit" value="Login" /></p>
	<input type="hidden" name="submitted" value="TRUE" />
<p><a href="signup.php"> Εαν δεν εχεις λογαριασμος κανε κλικ για να κανεις εγγραφη!! </a></p>
</form>

</body>


