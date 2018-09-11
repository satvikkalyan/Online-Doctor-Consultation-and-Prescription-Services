<?php
session_start();
$conn=new mysqli("localhost:3306","root","qweasd","satvik");
if($conn->connect_error)
{
   die("connection error".$conn->connect_error); 
}
else
{
if(!empty($_POST["symp"]))
{
    
    for($i=0;$i<8;$i++)
    {
    $array[$i]=0;
    }
    foreach($_POST["symp"] as $q)
    {
        $array[$q]=1;
    }
    
}
$sql="select dname from disease where s1='".$array[0]."' and s2='".$array[1]."' and s3='".$array[2]."' and s4='".$array[3]."' and s5='".$array[4]."' and s6='".$array[5]."' and s7='".$array[6]."' and s8='".$array[7]."';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {    
   while($row = $result->fetch_assoc()) {
       echo "<table border='0'><tr ><td height='70' width='300'></td><td width='450'></td><td width='350'></td></tr><tr><td height='200'><td></td><td style='vertical-align:top;text-align:left'>".$row["dname"]." is the most probable Disease for "."<br>"."the Symptoms That you have entered"."<br>"."<br>"."We can even provide the details of Medication"."<br>"." for the above Disease</td></tr><tr height='200'><td style='vertical-align:bottom'><a href='checksymp.php' class='button'>back</a></td><td style='vertical-align:bottom;text-align:left'><a class='button2' href='userprof.php'>Home</a></td><td style='vertical-align:bottom'><a href='medication.php' class='button2'>Mediaction</a></td></tr></table>";
        $_SESSION["disname"]=$row["dname"];
    }
}//echo "<tr><td><a href='background3.html' class='button'>back</a></td><td></td><td><input type='submit' value='next'></td></tr>";
$sql2="insert into previous values('".$_SESSION['username']."','".$_SESSION['disname']."',curdate());";
$conn->query($sql2);
}
$conn->close();
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
