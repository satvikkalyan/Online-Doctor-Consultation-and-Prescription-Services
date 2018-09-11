<?php
session_start();
$username=$_SESSION["name"];
$password=$_SESSION["pss"];
$gender=$_SESSION["gender"];
$email=$_SESSION["email"];
$location=$_SESSION["location"];
$mob=$_SESSION['mobilenumber'];
$conn=new mysqli("localhost:3306","root","qweasd","satvik");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
$sql = "insert into users values('".$username."','".$password."','".$gender."','".$email."','".$location."','".$mob."');";
if($conn->query($sql))
{
    echo "account created successfully";
    include 'login.html';
}

}
?>
