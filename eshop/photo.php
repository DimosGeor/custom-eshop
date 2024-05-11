<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "eshop");?>
<!doctype html>
<html>
<head>
    <title>Φωτογραφικες Μηχανες</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	body{
		
background-image: url('photo.jpg');
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
          width: 50%;
		   border-radius: 8px;
	}
	
	p img{
		
	    width: 10%;
        height: 100px;
		text-align: right;
         background-size: contain;
		 position: relative;
        left: 600px;
	}
	h1{
		
		text-align:center;
		color:#CC6700;
		
	}
	p{
		color:#0000FF;
	}
	 p:hover{
    font-size:20px;
    transition: all 500ms;
    font-size-adjust: 20px;

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
topnav .logout-container{
	position:relative;
	left:300px;
	top:-40px;
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
  <div class="kalathi">
 <a class="active" href="cart.php" name="submit">Καλαθι</a>
	 </div>
	 <div class="eggrafh">
	 <a href="signup.php">Sign up</a>
	 </div>
	  <div class="logout-container">
  <b>  <a href="logout.php" name="submitted">Logout</a></b>
     
  </div>
	

</form>




  
</div>

<h1>Φωτογραφιες</h1>
<?php
				$query = "SELECT * FROM products ORDER BY products.id ASC";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result)>0)
				{

					$row = mysqli_fetch_array($result)
?>
<form method="post"  action="add_cart.php?action=add&id=<?php echo $row["id"]=9; ?>">
<div class="polaroid">
  <img src="canon.jpg" alt="canon" style="width:20%">
  <div class="container">
 
  <h4 class="text-info "><?php echo  $row["name"]="Φωτογραφικη Μηχανη Canon Ixus 190 "; ?></h4>
	<h4 class="price">$ <?php echo $row["price"]="159"; ?></h4>
  <input type="text" name="quantity" value="1" class="form-control" />
  
  <input type="hidden" name="hidden_name"  value="<?php echo $row["name"]="Φωτογραφικη Μηχανη Canon Ixus 190"; ?>" />
  <input type="hidden" name="hidden_price" value="<?php echo $row["price"]="159"; ?>" />
 <input type="submit" name="add_cart" style="margin-top:5px;" class="btn-success" value="Add Cart" />
 </div></div>

</form>
  </div>
</div>
<br>
<form method="post"  action="add_cart.php?action=add&id=<?php echo $row["id"]=10; ?>">
<div class="polaroid">
  <img src="rollei.jpg" alt="rol" style="width:30%">
  <div class="container">
  <h4 class="text-info "><?php echo  $row["name"]="ROLLEI SPORTSLINE 100 BLUE "; ?></h4>
	<h4 class="price">$ <?php echo $row["price"]="105"; ?></h4>
  <input type="text" name="quantity" value="1" class="form-control" />
  
  <input type="hidden" name="hidden_name"  value="<?php echo $row["name"]="ROLLEI SPORTSLINE 100 BLUE "; ?>" />
  <input type="hidden" name="hidden_price" value="<?php echo $row["price"]="105"; ?>" />
 <input type="submit" name="add_cart" style="margin-top:5px;" class="btn-success" value="Add Cart" />
 </div></div>

</form>
 
   
  </div>
</div>
<br>
<form method="post"  action="add_cart.php?action=add&id=<?php echo $row["id"]=11; ?>">
<div class="polaroid">
  <img src="ricoh.jpg" alt="nod" style="width:5%">
  <div class="container">

  
  <h4 class="text-info "><?php echo  $row["name"]="RICOH THETA M15 BLUE "; ?></h4>
	<h4 class="price">$ <?php echo $row["price"]="200"; ?></h4>
  <input type="text" name="quantity" value="1" class="form-control" />
  
  <input type="hidden" name="hidden_name"  value="<?php echo $row["name"]="RICOH THETA M15 BLUE "; ?>" />
  <input type="hidden" name="hidden_price" value="<?php echo $row["price"]="200"; ?>" />
 <input type="submit" name="add_cart" style="margin-top:5px;" class="btn-success" value="Add Cart" />
 </div></div>

</form>
  </div>
</div>
<br>
<form method="post"  action="add_cart.php?action=add&id=<?php echo $row["id"]=12; ?>">
<div class="polaroid">
  <img src="kodak.jpg" alt="kod" style="width:20%">
  <div class="container">

 
  <h4 class="text-info "><?php echo  $row["name"]="KODAK POWER FLASH SINGLE USE CAMERA 27+12 EXPOSURES "; ?></h4>
	<h4 class="price">$ <?php echo $row["price"]="20"; ?></h4>
  <input type="text" name="quantity" value="1" class="form-control" />
  
  <input type="hidden" name="hidden_name"  value="<?php echo $row["name"]="KODAK POWER FLASH SINGLE USE CAMERA 27+12 EXPOSURES"; ?>" />
  <input type="hidden" name="hidden_price" value="<?php echo $row["price"]="20"; ?>" />
 <input type="submit" name="add_cart" style="margin-top:5px;" class="btn-success" value="Add Cart" />
 </div></div>

</form>

  </div>
</div>
<br>

				<?php } ?>
<p><a href="eshopmain.php">
 <img border="0" alt="main" src="home.png"  >
</p>
</body>
</html>