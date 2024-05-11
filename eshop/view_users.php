<?php 
	 

	session_start();

	$page_title = 'View the Current Users';

	{

	require_once ('sql_connect.php'); // Connect to the db.

		
	
	$q = "SELECT CONCAT(name,' ', lastname) AS name FROM users ";		
	$r = @mysqli_query ($dbc, $q); // Run the query.

	// Count the number of returned rows:
	$num = mysqli_num_rows($r);

	if ($num > 0) { // If it ran OK, display the records.

		if (isset($_SESSION['email']))
		{	
			// Page header:
			echo '<body style="background-color:#228B22">';
			echo '<h3>Registered Users</h1>';
			// Print how many users there are:
			echo "<p>There are currently <b>$num</b> registered users.</p>\n";
			// Table header.
			echo '<table  cellspacing="1" cellpadding="1" >
			<tr><td align="left"><b>Name</b></td></tr>';
	
			// Fetch and print all the records:
			while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
				echo '<tr><td align="left">' . $row['name'];
			}

			echo '</table>'; // Close the table.
		}
		else
		{
			echo "<class='error'>";
			// Page header:
			echo '<h3>Unauthorized Access</h1>';
			echo '<body style="background-color:#228B22">';
			// Print how many users there are:
			echo "<p>There are currently $num registered users.</p>\n";
			echo '<p>Only Registered Users are authorized to see this page.</p>';
			echo '<p>If you are a Registered User please <strong><a href="login.php">Login</strong>.</p>';
			echo '</class>';
		}
		mysqli_free_result ($r); // Free up the resources.	

	} else { // If no records were returned.

			echo '<p class="error">There are currently no registered users.</p>';
	}
	
	mysqli_close($dbc); 
	}
	
	echo"<p><a href='eshopmain.php'>
 <img border='0' alt='main' src='home.png' width='100' height='100' >
</p>";

?>
<style>
table,tr,td{

position:relative;
left:325px;
top:25px;
border:0px solid black;
width:20%;
}
h3,p {
	text-align:center
}
img{
	
	position:relative;
	top:20px;
	left:10px;
	top:150px;
}

</style>
