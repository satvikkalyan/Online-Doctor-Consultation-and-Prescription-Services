<?php
session_start();
$conn=new mysqli("localhost:3306","root","qweasd","satvik");
if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error);
    }
    $sql="select * from previous where username='".$_SESSION['username']."';";
    $result = $conn->query($sql); 
    
    if ($result->num_rows > 0) {
        $sno=1;
        echo "<table border='0' > ";
        echo "<tr><td ></td><td width='680' height='50'></td><td width='350'></td><td><a  href'logout.php' style=
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
echo "</td></tr>";
        echo "<tr><td></td><td width='520' height='200'></td><td width='150' style='vertical-align='top'>".$_SESSION['username']."'s Previous Medical records are</td></tr>";
        echo "<tr><td ></td><td><table border='' align='center'> ";
        echo "<tr><th width='100' height='30' style='font: bold 18px Arial'>Sno</th>";
            echo "<th width='150' style='font: bold 18px Arial'>Disease Name</th>";
            echo "<th width='100' style='font: bold 18px Arial'>Date</th></tr>";
        while($row=$result->fetch_assoc())
    {
         echo "<tr><td width='100' height='30' style='font: bold 18px New Times Roman;tect-align='center' > ".$sno."</td>";
         echo "<td width='100' style='font: bold 18px New Times Roman'>".$row['dname']."</td> ";
         echo "<td width='100' style='font: bold 18px New Times Roman'>".$row['rdate']."</td> ";
          $sno++;  
        }
        echo"</table></td><td></td><td ></td></tr>";    
        
   
    echo "<tr><td><form action='userprof.php'><input type='submit' value='back'> </form></td></tr> ";/*echo "<table border='0' style='text-align:Left'> ";
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
    echo "<tr><td height='50' style='font:bold 18px Arial'><font color='white'> Name</font> </td><td style='font:bold 18px Arial'><font color='white'>".$row['username']."</font></td><td></td><td></td></tr>";
    echo "<tr><td height='50' style='font:bold 18px Arial'><font color='white'>Gender</font></td><td style='font:bold 18px Arial'><font color='white'>".$row['gender']."</font></td><td></td><td></td></tr>";
    echo "<tr><td height='50' style='font:bold 18px Arial'><font color='white'>Email</font></td><td style='font:bold 18px Arial'><font color='white'>".$row['email']."</font></td><td></td><td></td></tr>";
    echo "<tr><td height='50' style='font:bold 18px Arial'><font color='white'>Location</font></td><td style='font:bold 18px Arial'><font color='white'>".$row['location']."</font></td><td></td><td></td></tr>";
    echo "<tr><td height='50' style='font:bold 18px Arial'><font color='white'>Mobile Number</font></td style='font:bold 18px Arial'><td></td><td></td><td></td></tr>";
    */
    } ?>
<html> 
    <head><style>
        body  {
    background-image: url("welcome.jpg");
    background-color: white;
    background-repeat: no-repeat;
    
    background-position: center;
    background-size:1400px 700px;
}
input[type=submit] {
    width: 7em;  height: 3em;
    font: bold 15px Arial;
}
        </style></head>
  
</html>