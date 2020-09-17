<?php
$error1=$error2=$error3=$error4=$error5=$error6="";
$name=$email=$id=$password=$salary=$joindate="";

//$name=$_POST["ID"];
//$email=$_POST["ID"];
//$joindate=$_POST["ID"];
//$salary=$_POST["ID"];
//$password=$_POST["ID"];
$conn = mysqli_connect('localhost','root','','IUT');
if($conn){
    echo "connected";
if($_SERVER["REQUEST_METHOD"]=="POST")
 {
    //$sql="insert into Employee values($_POST["ID"],$_POST["Name"],$_POST["Email"],$_POST["Joindate"],$_POST["Salary"],$_POST["Password"])";
    //mysqli_query($conn,$sql);
    if(empty($_POST["Name"]))
    {
        $error1="Name is required";
    }
    elseif((strlen($_POST["Name"]))<5)
    {
        $error1="At least 5 characters are needed";
    }
    else{
        $name=$_POST['Name'];
        
        
    }



    if(empty($_POST["Email"]))
    {
        $error2="Email is required";
    }
    elseif(!filter_var($_POST["Email"],FILTER_VALIDATE_EMAIL))
    {
        $error2="Invalid email format";
    }
    else{
        $email=$_POST['Email'];
    }




    if(empty($_POST["Joindate"]))
    {
        $error3="joindate is required";
    }
    else{
        $joindate=$_POST['Joindate'];
    }

    if(empty($_POST["Salary"]))
    {
        $error4="salary is required";
    }
    else{
        $salary=$_POST['Salary'];
    }

    if(empty($_POST["ID"]))
    {
        $error5="id is required";
    }
    else{
        $id=$_POST['ID'];
    }

    if(empty($_POST["Password"]))
    {
        $error6="password is required";
    }
    else{
        $password=$_POST['Password'];
    }


     //$name=validate($_POST['name']);
    // $email=validate($_POST['email']);
     //$website=validate($_POST['website']);
     //$comment=validate($_POST['comment']);
     //$gender=validate($_POST['gender']);
     //echo "Name:".$name."<br/>";
     //echo "Email:".$email."<br/>";
     //echo "Website:".$website."<br/>";
     //echo "Comment:".$comment."<br/>";
    

 }
  $sql="insert into employee values('$id','$name','$email','$joindate','$salary','$password')";
  mysqli_query($conn,$sql);
 
}
 function validate($data)
 {
     $data=trim($data);
     $data=stripcslashes($data);
     $data=htmlspecialchars($data);
     return $data;

 }
 //echo "Gender:".$gender."<br/>";


?>
<!Doctype html> 
<html>
<head>
<title>php</title>
</head>

<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
<table>
<tr>
<td>Name</td>
<td><input type="text" name="Name" > <span style="color:red"><?php echo $error1;?></span></td>
</tr>

<tr>
<td>ID</td>
<td><input type="text" name="ID"><span style="color:red"><?php echo $error5;?></span></td>
</tr>

<tr>
<td>Email</td>
<td><input type="text" name="Email"><span style="color:red"><?php echo $error2;?></span></td>
</tr>

<tr>
<td>Join_date</td>
<td><input type="text" name="Joindate"><span style="color:red"><?php echo $error3;?></span></td>
</tr>

<tr>
<td>Salary</td>
<td><input type="text" name="Salary"><span style="color:red"><?php echo $error4;?></span>
</td>
</tr>

<tr>
<td>Password</td>
<td><input type="text" name="Password"><span style="color:red"><?php echo $error6;?></span>
</td>
</tr>


<tr>
<td></td>
<td><input type="submit" value="Submit"></td>
</tr>


</table>
</form>

<?php
?>



</body>
</html>