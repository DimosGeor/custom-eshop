
	<!doctype html>
<html>
<head>
    <title>Τεχνολογια</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	body{
		
background-color:#FF7F50;
	}
		
	 idiv.polaroid {
  width: 0%;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
  }

  div.container {
  text-align: center;
  padding: 5px 10px;
  }
	img{
		   border: 1px solid #ddd;
          border-radius: 4px;
          padding: 5px;
		  opacity: 0.9;
		  display: block;
          margin-left: auto;
          margin-right: auto;
         
		
	}
	
	p img{
		
	   width: 10%;
        height: 100px;
		text-align: right;
         background-size: contain;
		 position: absolute;
	}
	h1{
		background-image: url('techn.jpeg');
		background-attachment: fixed;
		text-align:center;
	}
	body{
	margin:0px;
	padding:0px;
	background-color:#A9A9A9;
}
#header {
	
	border:0px solid black;
	height:100px;
	margin:10px;
	width:10px;
	font: 12px Cambria, serif;
	overflow:hidden;

	
}

h1 {
	background-color:#FFE4C4;
	color:#888;
	font-size:300%;
	letter-spacing:-3px;
	padding:5px;
	margin-bottom:0px;
	text-align:center;
	margin-top:0px;
}


.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
  padding:15px;
  width:100%;

}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .login-container {
  float: right;
}
.topnav .login-container button:hover {
  background-color: green;
}

.topnav .login-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background-color: #555;
  color: white;
  font-size: 17px;
  border: none;
  cursor: pointer;
}


.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}


.search-container{
float: center;}

.search-container input[type=text] {
  padding: 10px;
  margin-top: 7px;
  font-size: 15px;
  border: 10px;
  width:15%;
  margin:10px;
  text-align:center;
  
}
.topnav .search-container button {
  float: center;
  padding:10px;
  background: #ddd;
  font-size: 15px;
  border: none;
  cursor: pointer;
}
.kalathi{
	display:inline;
	padding:0px;
}

.eggrafh
{text-align:right;
display:inline;
}

	</style>
</head>
<body>
<div class="header">

		<h1> E-shop </h1>

</div>
<div class="topnav">
  <a class="active" href="eshopmain.php">Home</a>
  <a href="contact.php">Contact</a>

  <a href="view_users.php">Users </a>
 
  <a href="technology.php">Tεχνολογια </a>
   <a href="hxos.php">Ηχος </a>
 <a href="photo.php">Φωτογραφικες Μηχανες </a>
   

  <div class="login-container">
    <form action="login.php">
     
      <button type="submit" name="submitted">Login</button>
    </form>
  </div>
  <div class="kalathi" >
	 <a class="active"  href="cart.php" name="submit">Καλαθι</a>
	 </div>
	 <div class="eggrafh">
	 <a href="signup.php">Sign up</a>
	 </div>
	
</form>
 <div class="logout-container">
  <b>  <a href="logout.php" name="submitted">Logout</a></b>
     
  </div>	
 

  <br>
</div>
</html>

<?php


    $connect = @mysqli_connect("localhost", "root", "", "eshop") OR die('Could not connect to server');
	; 
	 $raw_results = mysqli_query($connect,"SELECT total FROM orders ");
 if(mysqli_num_rows($raw_results)>0 ) {
            $results = mysqli_fetch_array($raw_results) ;
					 
echo"<h4>H παραγγελια σας με κοστος:";
echo $results['total']  ;
echo " $ θα αποσταλει ταχυδρομικα ";
 }


	?>
