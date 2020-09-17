<!DOCTYPE html>
<html>
<head>
	<title>Online Clothing</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	
	<header>

		<div class="main">
			<div class="logo">
			<a href="index.php">	<img src="logo.jpg"> </a>
			</div>
			<ul>
				<li><a href="index.php"><b>HOME</b></a></li>
				<li><a href="#"><b>CATEGORY</b></a>
					<ul>
						<li><a href="#shirts">shirts</a></li>
						<li><a href="#pants">pants</a></li>
						<li><a href="#tshirts">t-shirt</a></li>
						<li><a href="#salwars">salwar</a></li>
						<li><a href="#sarees">saree</a></li>
						<li><a href="#kurtas">kurta</a></li>
					</ul>
				</li>
				<li><a href="contact.html"><b>CONTACTS</b></a></li>
				<li><a href="about.html"><b>ABOUT</b></a></li>
			</ul>
		
	</div><br><br>
	
	<div class="title">
		<h1>STYLE STARTS HERE</h1>
	</div>
	</header><br>

	<p>
		<div class="login">
	 	<form method="post" action="login.php">
	 		<div class="container" style="background-color:#f1f1f1">
  			<b>Already have an account?</b><br><br>
    		<label for="uname">Username:</label>
    		<input type="text" placeholder="Enter Username" name="uname" required><br>
    		<label for="psw">Password:</label>
    		<input type="password" placeholder="Enter Password" name="psw" required><br>
    		<button type="submit" class="loginbtn">Login</button>
    		<span class="psw">Forgot <a href="#">password?</a></span>
    		
  			</div>
		  </form>
		  <form action="signup.php">
		  <button class="loginbtn"><h2>Sign up</h2></button>
				</form>
				<form action="showcartdetails.php">
		  <button class="loginbtn"><h2>Show items added to the cart</h2></button>
				</form>
  	</div>
  </p>
  	<p><b>SHIRTS</b></p>
	<hr/>

	<div id="shirts" class="shirt"><img src="shirt1.jpg">
		<div class="btn">
			<form action="detailsshirt1.php">
			<button class="btn btn4" ><h1><b>DETAILS</b></h1></button>
			</form>
		</div>
		<div class="butn">
		
			<form action="cart.php">
			<button class="btn btn1"><h1><b>ADD TO CART</b></h1></button>
			</form>
			<!-- <script>
				function detailsshirt1()
				{
					window.location="detailsshirt1.php";
				}
				// function cart()
				// {
				// 	window.location="cart.php";
				// }
			
				
			</script> -->
		</div><br>
		
	</div>
	<div class="shirt"><img src="shirt2.jpg">
	<div class="btn">
	<form action="detailsshirt2.php">
			<button class="btn btn4" ><h1><b>DETAILS</b></h1></button>
			</form>
		</div>
		<div class="butn">
		
			<form action="cart.php">
			<button class="btn btn1"><h1><b>ADD TO CART</b></h1></button>
			</form>
		</div><br>
		
	</div>
	<div class="shirt"><img src="shirt3.jpg">
	<div class="btn">
	<form action="detailsshirt3.php">
			<button class="btn btn4" ><h1><b>DETAILS</b></h1></button>
			</form>
		</div>
		<div class="butn">
		
			<form action="cart.php">
			<button class="btn btn1"><h1><b>ADD TO CART</b></h1></button>
			</form>
		</div><br>
		
	</div>
	<p><b>  </b></p>
	<p><b>PANTS</b></p>
	<hr/>

	<div class="pant"><img src="pant1.jpg">
		<div class="btn">
		<form action="detailspant1.php">
			<button class="btn btn4" ><h1><b>DETAILS</b></h1></button>
			</form>
		</div>
		<div class="butn">
		
			<form action="cart.php">
			<button class="btn btn1"><h1><b>ADD TO CART</b></h1></button>
			</form>
			
		</div><br>
		
	</div>
	<div class="pant"><img src="pant2.jpg">
	<div class="btn">
	<form action="detailspant2.php">
			<button class="btn btn4" ><h1><b>DETAILS</b></h1></button>
			</form>
		</div>
		<div class="butn">
		
			<form action="cart.php">
			<button class="btn btn1"><h1><b>ADD TO CART</b></h1></button>
			</form>
			
		</div><br>
		
	</div>
	<div class="pant"><img src="pant3.jpg">
	<div class="btn">
	<form action="detailspant3.php">
			<button class="btn btn4" ><h1><b>DETAILS</b></h1></button>
			</form>
		</div>
		<div class="butn">
		
			<form action="cart.php">
			<button class="btn btn1"><h1><b>ADD TO CART</b></h1></button>
			</form>
			
		</div><br>
		
	</div>
	<p><b>  </b></p>
	<p><b>T-SHIRTS</b></p>
	<hr/>

	<div class="tshirt"><img src="tshirt1.jpg">
		<div class="btn">
		<form action="detailstshirt1.php">
			<button class="btn btn4" ><h1><b>DETAILS</b></h1></button>
			</form>
		</div>
		<div class="butn">
		
			<form action="cart.php">
			<button class="btn btn1"><h1><b>ADD TO CART</b></h1></button>
			</form>
			
		</div><br>
		
	</div>
	<div class="tshirt"><img src="tshirt2.png">
	<div class="btn">
	<form action="detailstshirt2.php">
			<button class="btn btn4" ><h1><b>DETAILS</b></h1></button>
			</form>
		</div>
		<div class="butn">
		
			<form action="cart.php">
			<button class="btn btn1"><h1><b>ADD TO CART</b></h1></button>
			</form>
			
		</div><br>
		
	</div>
	<div class="tshirt"><img src="tshirt3.jpg">
	<div class="btn">
	<form action="detailstshirt3.php">
			<button class="btn btn4" ><h1><b>DETAILS</b></h1></button>
			</form>
		</div>
		<div class="butn">
		
			<form action="cart.php">
			<button class="btn btn1"><h1><b>ADD TO CART</b></h1></button>
			</form>
			
		</div><br>
		
	</div>
	<p><b>  </b></p>
	<p><b>SALWAR</b></p>
		<hr/>

	<div class="salwar"><img src="salwar1.jpg">
		<div class="btn">
		<form action="detailssalwar1.php">
			<button class="btn btn4" ><h1><b>DETAILS</b></h1></button>
			</form>
		</div>
		<div class="butn">
		
			<form action="cart.php">
			<button class="btn btn1"><h1><b>ADD TO CART</b></h1></button>
			</form>
			
		</div><br>
		
	</div>
	<div class="salwar"><img src="salwar2.jpg">
	<div class="btn">
	<form action="detailssalwar2.php">
			<button class="btn btn4" ><h1><b>DETAILS</b></h1></button>
			</form>
		</div>
		<div class="butn">
		
			<form action="cart.php">
			<button class="btn btn1"><h1><b>ADD TO CART</b></h1></button>
			</form>
			
		</div><br>
		
	</div>
	<div class="salwar"><img src="salwar3.jpg">
	<div class="btn">
	<form action="detailssalwar3.php">
			<button class="btn btn4" ><h1><b>DETAILS</b></h1></button>
			</form>
		</div>
		<div class="butn">
		
			<form action="cart.php">
			<button class="btn btn1"><h1><b>ADD TO CART</b></h1></button>
			</form>
			
		</div><br>
		
	</div>
	<p><b>  </b></p>
	<p><b>SAREE</b></p>
	<hr/>

	<div class="shari"><img src="shari1.jpg">
		<div class="btn">
		<form action="detailsshari1.php">
			<button class="btn btn4" ><h1><b>DETAILS</b></h1></button>
			</form>
		</div>
		<div class="butn">
		
			<form action="cart.php">
			<button class="btn btn1"><h1><b>ADD TO CART</b></h1></button>
			</form>
			
		</div><br>
		
	</div>
	<div class="shari"><img src="shari2.jpg">
	<div class="btn">
	<form action="detailsshari2.php">
			<button class="btn btn4" ><h1><b>DETAILS</b></h1></button>
			</form>
		</div>
		<div class="butn">
		
			<form action="cart.php">
			<button class="btn btn1"><h1><b>ADD TO CART</b></h1></button>
			</form>
			
		</div><br>
		
	</div>
	<div class="shari"><img src="shari3.jpeg">
	<div class="btn">
	<form action="detailsshari3.php">
			<button class="btn btn4" ><h1><b>DETAILS</b></h1></button>
			</form>
		</div>
		<div class="butn">
		
			<form action="cart.php">
			<button class="btn btn1"><h1><b>ADD TO CART</b></h1></button>
			</form>
			
		</div><br>
		
	</div>
	<p><b>  </b></p>
	<p><b>KURTA</b></p>
	<hr/>

	<div class="kurta"><img src="tops1.jpg">
		<div class="btn">
		<form action="detailstops1.php">
			<button class="btn btn4" ><h1><b>DETAILS</b></h1></button>
			</form>
		</div>
		<div class="butn">
		
			<form action="cart.php">
			<button class="btn btn1"><h1><b>ADD TO CART</b></h1></button>
			</form>
			
		</div><br>
		
	</div>
	<div class="kurta"><img src="tops2.jpg">
	<div class="btn">
	<form action="detailstops2.php">
			<button class="btn btn4" ><h1><b>DETAILS</b></h1></button>
			</form>
		</div>
		<div class="butn">
		
			<form action="cart.php">
			<button class="btn btn1"><h1><b>ADD TO CART</b></h1></button>
			</form>
			
		</div><br>
		
	</div>
	<div class="kurta"><img src="tops3.jpg">
	<div class="btn">
	<form action="detailstops3.php">
			<button class="btn btn4" ><h1><b>DETAILS</b></h1></button>
			</form>
		</div>
		<div class="butn">
		
			<form action="cart.php">
			<button class="btn btn1"><h1><b>ADD TO CART</b></h1></button>
			</form>
			
		</div><br><br><br>
		
	</div>
	<div class="end">
		<b><h1>//Thanks for visiting our website//</h1></b>
	</div>
	<script src="script.js">
      </script>
	
</body>
</html>


