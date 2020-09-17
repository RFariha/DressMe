
<?php
session_start();
$var1=$_SESSION['email'];
$var2=$_POST['quantity'];
//$var3=$_SESSION['code'];
$var3=$_POST['code'];
//$var3=$_SESSION['code'];
$conn = mysqli_connect('localhost','root','','project');
$sql="insert into cart values('$var1','$var3','$var2')";
mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Online Clothing</title>
	<link rel="stylesheet" href="style3.css">
</head>
<body>
	<div class="thanks">
		<img src="Thanks.jpg">
	</div>
</body>
</html>