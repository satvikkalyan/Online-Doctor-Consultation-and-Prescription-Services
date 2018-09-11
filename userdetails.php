<?php 
session_start();
$conn=new mysqli("localhost:3306","root","qweasd","satvik");
if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error);
    }
    $sql="select * from users where username='".$_SESSION['username']."';";
    $result = $conn->query($sql); 
    if ($result->num_rows > 0) { $row=$result->fetch_assoc();
    echo "<table border='0' style='text-align:Left'> ";
    echo "<tr><td width='200' height='70'></td><td width='250'></td><td width='300'></td><td width='300'></td><td width='50'></td><td width='200'><a  href'logout.php' style=
        'font: bold 18px Arial;
  text-decoration: none;
  background-color: #4CAF50;
  color: #333333;
  text-align:right;
  padding: 8px 13px 8px 13px;
  border-top: 1px solid #CCCCCC;
  border-right: 1px solid #333333;
  border-bottom: 1px solid #333333;
  border-left: 1px solid #CCCCCC;</td></tr>'>Logout</a>";
    echo "<tr><td height='100'></td><td></td><td></td><td style='font: italic  20px Arial'>There You Go!</td></tr>";
    echo "<tr><td height='50' style='font:bold 18px Arial'><font color='white'>Name</font> </td><td style='font:bold 18px Arial'><font color='white'>".$row['username']."</font></td><td></td><td></td></tr>";
    echo "<tr><td height='50' style='font:bold 18px Arial'><font color='white'>Gender</font></td><td style='font:bold 18px Arial'><font color='white'>".$row['gender']."</font></td><td></td><td></td></tr>";
    echo "<tr><td height='50' style='font:bold 18px Arial'><font color='white'>Email</font></td><td style='font:bold 18px Arial'><font color='white'>".$row['email']."</font></td><td></td><td></td></tr>";
    echo "<tr><td height='50' style='font:bold 18px Arial'><font color='white'>Location</font></td><td style='font:bold 18px Arial'><font color='white'>".$row['location']."</font></td><td></td><td></td></tr>";
    echo "<tr><td height='50' style='font:bold 18px Arial'><font color='white'>Mobile Number</font></td ><td style='font:bold 18px Arial'><font color='white'>".$row['mno']."</font></td><td></td><td></td></tr>";
    
    
    ////echo "name is :".$row['username']; 
    //echo "gender is:".$row['gender']; 
    //echo "email is:".$row['email'];
    //echo "location is:".$row['location
    echo "</table>";
    } ?>
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
input[type=submit] {
    width: 7em;  height: 3em;
    font: bold 15px Arial;
}
</style>
    </head>
    <body>
    <form action="userprof.php">
        <table ><tr><td height='70' style="text-align:center"><input type="submit" value="back" ></td><td></td><td></td><td></td></tr></table>
         
    </form> 
    </body>
</html>