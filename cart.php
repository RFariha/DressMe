<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Online Clothing</title>
	<link rel="stylesheet" href="style1.css">
</head>
<body>
	<div class="cart">
		<div class="container1" style="background-color:red">
			<label for="quantity"><h1><b>Enter your required quantity:</b></h1></label>
		</div>
    </div>
    <div class="bttn">
		<form action="Thanks.php" method="post">
		<input type="number" placeholder="Enter Quantity" name="quantity" required>
		<input type="number" placeholder="Code for the dress" name="code" required>
		<button class="btn btn37"><h1><b>BUY NOW</b></h1></button><br><br></form>
		<button class="btn btn38" onclick="index()"><h1><b>RETURN TO PREVIOUS PAGE</b></h1></button>
		<script>
				function index()
				{
					window.location="index.php";
				}
			</script>
		</div>
</body>
</html>