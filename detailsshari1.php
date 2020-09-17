<?php
$conn=mysqli_connect("localhost","root","","project");
$sql="select * from shirt where ID=13";
$result=mysqli_query($conn,$sql);
$res=mysqli_fetch_array($result);
//$value=$res["Price"];

    echo "Name:".$res["Name"];
    echo "<br>";
    echo "Color:".$res["Color"];
    echo "<br>";
    echo "Price:".$res["Price"];
    echo "<br>";
    echo "Status:".$res["Status"];
    echo "<br>";

?>
<!DOCTYPE html>
<html>
<head>
    <title>Shirt1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<script src="script.js"></script>
    <div class="shirt">
        <img src="shari1.jpg">

		
		
				
		
    </div>
</body>
</html>