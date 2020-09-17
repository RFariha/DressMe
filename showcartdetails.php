<?php
session_start();
$username=$_SESSION['email'];
$conn = mysqli_connect('localhost','root','','project');
$sql="select code,quantity from cart where email='$username'";
$result=mysqli_query($conn,$sql);


//$conn = mysqli_connect('localhost','root','','project');
//$sql1="select code,quantity from shirt where email='$username'";
//$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result))
{
    echo 'Dress code:';
    echo $row['code'];
    $var4=$row['code'];
    echo "          ";


    $conn1 = mysqli_connect('localhost','root','','project');
    $sql1="select * from shirt where code='$var4'";
    $result1=mysqli_query($conn1,$sql1);
    while($row1=mysqli_fetch_assoc($result1))
    {
        echo $row1['Name'];
        echo $row1['Color'];
        echo $row1['Price'];
    }
    echo "    ";
    //echo "</br>";
    echo 'Quantity:';
    //$row['quantity'];
    echo $row['quantity'];
    // echo "</br>";
    echo "<button>delete</button>";
    echo "</br>";
}
?>

