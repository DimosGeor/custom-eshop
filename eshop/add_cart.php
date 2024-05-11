<html>
<style>
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
display:inline;}


</style>
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
	 <a href="cart.php" name="submit">Καλαθι</a>
	 </div>
	 <div class="eggrafh">
	 <a href="signup.php">Sign up</a>
	
	
 <div class="logout-container">
  <b> <a href="logout.php" name="submitted">Logout </a></b>
     
  </div>	
 

  </div>
</div>
</html>





<?php 

global $total ;



   $connect = mysqli_connect("localhost", "root", "", "eshop");
	

    session_start();
	
	if (isset($_SESSION['email']))
		{	
	
		//$products_array_id = array_column($_SESSION["shopping_cart"], "product_id"); //to onoma ths grammhs pou theloume na paroume dedomena
		//if(!in_array($_GET["id"] ,$products_array_id))
		if ( isset( $_POST['add_cart']))
		{
			
			
			
			/*$count = count($_SESSION["shopping_cart"]);*/
			$products_array = array(
				'product_id'=>$_GET['id'],
				'p_name'=>$_POST['hidden_name'],
				'p_price'=>$_POST['hidden_price'],
				'p_quantity'=>$_POST['quantity']
			);
			$_SESSION['shopping_cart'] =$products_array; //apthikeush sto session
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	
	//} 
	//else
	/*{
		
		  $products_array = array(
			    'p_id'			=>	$_GET['products.id'],
				'p_name'	    =>	$_POST['hidden_name'],
				'p_price'		=>	$_POST['hidden_price'],
				'p_quantity'	=>	$_POST['quantity']
		);
		$_SESSION["shopping_cart"][0] = $products_array; //gia thn prwth thesh tou session
	}*/
	
	echo"<br>";

	$oc=0;
     if(!empty($_SESSION['shopping_cart']))
		{
						
						 $total = 0;
						$tq=0;
					    $total = $total +(($products_array["p_quantity"] )* ($products_array["p_price"]));
					    $tq=$tq+$products_array["p_quantity"];
						echo"<table>";
						echo"<tr><th width='40%'>";
						ECHO"TO KALATHI MOY";
						echo"<tr><th width='40%'>";
						echo"NAME:";
					   echo $products_array["p_name"]; 
					  echo"</tr></th>";
						echo"<tr><th width='10%'>";
						 echo"PRICE:";
						echo $products_array["p_price"]; 
						 echo"</tr></th>";
					  echo"<tr><th width='10%'>";
						 echo"QUANTITY:";
						 echo $tq;
						 
						 echo"</tr></th>"; 
						echo"<tr><th width='15%'>";
						echo"TOTAL:"  ;
						echo number_format($total, 2);
						$p_id=$products_array["product_id"];
						$p=$products_array["p_price"];
						$qu=$products_array["p_quantity"];
						
						$oc+=1;
				
	           $q="INSERT INTO order_contents  VALUES ('$oc','$oc','$p_id','$qu','$p')";
			   $r = mysqli_query($connect, $q);
			   $q="INSERT INTO orders VALUES ('$oc','users.phone','$total')";
			    $r = mysqli_query($connect, $q);
				echo "<br>Επιτυχης προσθηκη στο καλαθι";
           	}
			
		}
		else {echo"<script> alert('You need to log in first')</script>";
		echo '<p>If you are a Registered User please <strong><a href="login.php">Login</strong>.</p>';}
		
		
		
?>
				
				
		            	

