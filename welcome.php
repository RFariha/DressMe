<?php
$error1=$error2=$error3=$error4=$error5=$error6="";
$name=$email=$id=$password=$salary=$joindate="";

$conn = mysqli_connect('localhost','root','','project');
if($conn){
   // echo "connected";
 if($_SERVER["REQUEST_METHOD"]=="POST")
 {
//     //$sql="insert into Employee values($_POST["ID"],$_POST["Name"],$_POST["Email"],$_POST["Joindate"],$_POST["Salary"],$_POST["Password"])";
//     //mysqli_query($conn,$sql);
    


    if(empty($_POST["email"]))
    {
        $error2="Email is required";
    }
    elseif(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL))
    {
        $error2="Invalid email format";
    }
    else{
        $email=$_POST['email'];
       // echo "connected";
    }




    
    if(empty($_POST["psw"]))
    {
        $error6="password is required";
    }
    else{
        $password=$_POST['psw'];
    }

    if(empty($_POST["psw-repeat"]) || ($_POST["psw"]!=$_POST["psw-repeat"]))
    {
        $error6="password is required or does not match with the previous one";
    }
    else{
        $password=$_POST['psw'];
    }





//      //$name=validate($_POST['name']);
//     // $email=validate($_POST['email']);
//      //$website=validate($_POST['website']);
//      //$comment=validate($_POST['comment']);
//      //$gender=validate($_POST['gender']);
//      //echo "Name:".$name."<br/>";
//      //echo "Email:".$email."<br/>";
//      //echo "Website:".$website."<br/>";
//      //echo "Comment:".$comment."<br/>";
//     //  $email=$_POST['email'];
//     //  $password=$_POST['psw'];
//     //  echo "connected";
    

  }
  //echo "connected";
  //$email=$_POST['email'];
  //$password=$_POST['psw'];
  $sql="insert into user_info values('$email','$password')";
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



<html>
<body>
<p style="color:red"><b>You have successfully signed up</b></p>
Welcome to our website.......<br>
<p style="color:Green">Happy Online Shopping</p>

</body>
</html>