<?php
session_start();
$username=$_POST["username"];
$password=$_POST["password"];
$_SESSION["username"]=$username;
$conn=new mysqli("localhost:3306","root","qweasd","satvik");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "select password from users where username='".$username."';";
$result=$conn->query($sql);
if ($result->num_rows){
    $retpass=$result->fetch_assoc()[password];
    if($password==$retpass)
    {
    header("Location:userprof.php");
    }
} else {
    
    include 'login2.html';
}
?>

