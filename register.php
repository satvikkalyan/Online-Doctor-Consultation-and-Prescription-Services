<?php
session_start();
$_SESSION['email']=$_POST["email"];
$_SESSION['name']=$_POST["name"];
$_SESSION['pss']=$_POST["pss"];
$_SESSION['gender']=$_POST["gender"];
$_SESSION['location']=$_POST["location"];
$_SESSION['mobilenumber']=$_POST['phno'];
$conn=new mysqli("localhost:3306","root","qweasd","satvik");
if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error);
    }
    $sql="select * from users where username='".$_SESSION['name']."';";
    $result = $conn->query($sql); 
    if ($result->num_rows > 0) { 
        include 'register2.html';
}
else
{
   include 'emailverf.php';
}
/*if($conn->query($sql))
{
    include 'emailverf.php';
}
else{
    echo "account not created";
    include 'register.html';
}*/
?>
