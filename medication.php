<?php
session_start();
$conn=new mysqli("localhost:3306","root","qweasd","satvik");
if($conn->connect_error)
{
   die("connection error".$conn->connect_error); 
}
else
{
    $medicine=array();
    $sql="select * from medication where dname='".$_SESSION['disname']."';";
$result2 = $conn->query($sql);
if ($result2->num_rows > 0) {
    echo "<table border='2'><tr ><td height='70' width='300'></td><td width='450'></td><td width='350'></td></tr><tr><td height='200'><td></td><td style='vertical-align:top;text-align:left'>";
   while($row2 = $result2->fetch_assoc()) {
        echo "".$row2["medicine"].",";
        array_push($medicine, $row2["medicine"]); 
    }
    $_SESSION["medicine"]=$medicine;
}
echo"are The Suggested Medication"."<br>"." for the disease ".$_SESSION['disname']."<br>"."Want Us to Send an email about Medication?</td></tr><tr height='200'><td style='vertical-align:bottom'></td><td style='vertical-align:bottom;text-align:left'><a class='button2' href='userprof.php'>Home</a></td><td style='vertical-align:bottom'><a href='email.php' class='button2'>Send mail</a></td></tr></table>";

}
?>

<html>
    <head>
        <style>
            body  {
    background-image: url("welcome.jpg");
    background-color: white;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
    background-size:1400px 600px;
}
.button {
  font: bold 11px Arial;
  text-decoration: none;
  background-color: #EEEEEE;
  color: #333333;
  padding: 8px 10px 8px 10px;
  border-top: 1px solid #CCCCCC;
  border-right: 1px solid #333333;
  border-bottom: 1px solid #333333;
  border-left: 1px solid #CCCCCC;
}
.button2 {
  font: bold 14px Arial;
  text-decoration: none;
  background-color: #4CAF50;
  color: #333333;
  padding: 15px 23px 15px 23px;
  border-top: 1px solid #CCCCCC;
  border-right: 1px solid #333333;
  border-bottom: 1px solid #333333;
  border-left: 1px solid #CCCCCC;
}
input[type=submit] {
    width: 7em;  height: 3em;
    font: bold 15px Arial;
    background-color:#4CAF50
}
        </style>
    </head>
    <body>
       
    </body>
    </html>

