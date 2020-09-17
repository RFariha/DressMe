<?php
session_start();
$_SESSION['email']=$_POST['uname'];
$_SESSION['password']=$_POST['psw'];
$conn=mysqli_connect("localhost","root","","project") or die(mysqli_error());
$flag=false;
$email=$_POST['uname'];
$password=$_POST['psw'];
$sql="select * from user_info";
$result=mysqli_query($conn,$sql);			
while($row=mysqli_fetch_assoc($result))
{
 if(($email==$row['Email'])&&($password==$row['Password']))
 {
 	$flag=true;
 }
}	
if($flag==true){
header("Location:index.php");
}
else
echo "Wrong email or password";			
?>
