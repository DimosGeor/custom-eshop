<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "eshop");?>
<!doctype html>
<html>
<head>
    <title>Τεχνολογια</title>
	
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


.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
  position:relative;
 
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
  position:relative;
  
}

.topnav .search-container button:hover {
  background: #ccc;
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
	 <a class="active" method="post" href="cart.php" name="submite">Καλαθι</a>
	 </div>
	 <div class="eggrafh">
	 <a href="signup.php">Sign up</a>
	 </div>
	
 <div class="logout-container">
  <b>  <a href="logout.php" name="submitted">Logout</a></b>
  
     
  </div>	
 

  
</div>



<h1>Technology</h1>
<?php
				$query = "SELECT * FROM products ORDER BY products.id ASC";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result)>0)
				{

					$row = mysqli_fetch_array($result)
?>
<form method="post"  action="add_cart.php?action=add&id=<?php echo $row["id"]=1; ?>">
  <div class="polaroid">
<img src="razer.jpg" alt="razer" style="width:90%">
  <div class="container">
 
  	<h4 class="text-info"><?php echo $row["name"]; ?></h4>
	<h4 class="price">$ <?php echo $row["price"]; ?></h4>
  <input type="text" name="quantity" value="1" class="form-control" />
  
  <input type="hidden" name="hidden_name"  value="<?php echo $row["name"]; ?>" />
  <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
 <input type="submit" name="add_cart" style="margin-top:5px;" class="btn-success" value="Add Cart" />
 </div></div>

</form>

			
</div>
<br>
<form method="post"  action="add_cart.php?action=add&id=<?php echo $row["id"]=2; ?>">
<div class="polaroid">
  <img src="lg.jpg" alt="lg" style="width:35%">
  <div class="container">
  <h4 class="text-info"><?php echo $row["name"]="LG 44''"; ?></h4>
	<h4 class="price">$ <?php echo $row["price"]="149"; ?></h4>
  <input type="text" name="quantity" value="1" class="form-control" />
  <input type="hidden" name="hidden_name"  value="<?php echo $row["name"]="LG 44''"; ?>" />
  <input type="hidden" name="hidden_price" value="<?php echo $row["price"]="149"; ?>" />
 <input type="submit" name="add_cart" style="margin-top:5px;" class="btn-success" value="Add Cart" />
 
  </div>
</div>
</form>

<br>
<form method="post"  action="add_cart.php?action=add&id=<?php echo $row["id"]=3; ?>">
<div class="polaroid">
  <img src="desktop.jpeg" alt="desk" style="width:50%">
  <div class="container">
  <h4 class="text-info"><?php echo $row["name"]="Desktop Lenovo Y900 RE-34ISZ Razer Edition,i7-6700"; ?></h4>
	<h4 class="price">$ <?php echo $row["price"]="520.00"; ?></h4>
  <input type="text" name="quantity" value="1" class="form-control" />
  <input type="hidden" name="hidden_name"  value="<?php echo $row["name"]="Desktop Lenovo Y900 RE-34ISZ Razer Edition,i7-6700"; ?>" />
  <input type="hidden" name="hidden_price" value="<?php echo $row["price"]="520.00"; ?>" />
 <input type="submit" name="add_cart" style="margin-top:5px;" class="btn-success" value="Add Cart" />
 </div></div>
	</form>
<br>
<form method="post"  action="add_cart.php?action=add&id=<?php echo $row["id"]=4; ?>">
<div class="polaroid">
  <img src="desk2.jpeg" alt="d2" style="width:50%">
   <div class="container">
  <h4 class="text-info"><?php echo $row["name"]="MSI Aegis 3 8SD-231AT gaming PC Intel i7-9700F, 16"; ?></h4>
	<h4 class="price">$ <?php echo $row["price"]="650.00"; ?></h4>
  <input type="text" name="quantity" value="1" class="form-control" />
  <input type="hidden" name="hidden_name"  value="<?php echo $row["name"]="MSI Aegis 3 8SD-231AT gaming PC Intel i7-9700F, 16"; ?>" />
  <input type="hidden" name="hidden_price" value="<?php echo $row["price"]="6.00"; ?>" />
 <input type="submit" name="add_cart" style="margin-top:5px;" class="btn-success" value="Add Cart" />
 </div>
	</form>
 
  </div>

<br>
</form>
<?php	} ?>
<p><a href="eshopmain.php">
 <img border="0" alt="main" src="home.png"  >
</p>
</body>
</html>


	

