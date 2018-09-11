
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
input[type=submit] {
    width: 7em;  height: 3em;
    font: bold 15px Arial;
    background-color:#4CAF50
}
        </style>
    </head>
    <body>
        <form action="knowdisease.php" method="POST">
                 <?php
                 session_start();
$symps=$_POST["parts"];
if(!empty($symps))
{
    echo "<table border='0'>";
    echo "<tr><td height='75' width='750'></td><td width='200'></td></tr>";
    echo "<tr><td height='75'></td><td>Please Select The Symptoms</td></tr>";
    echo "<tr><td><table border='0' >";//inner table
    foreach($symps as $x)
    {
        
       
    if($x=='head')
    {
        echo"<tr><td width='50'><input type='checkbox' name='symp[]' value='0'></td><td style='background-color:white' ]>Cough And Sneezing</td></tr>";
    //echo "<input type='checkbox' name='symp[]' value='0'>running nose"."<br>";
    echo "<tr><td><input type='checkbox' name='symp[]' value='1'></td><td style='background-color:white'>Head Ache and Blurred visson</td><tr>";
    //echo "<input type='checkbox' name='symp[]' value='3'>eye pain"."<br>";
    //echo "<input type='checkbox' name='symp[]' value='4'>ear pain"."<br>";
    //echo "<input type='checkbox' name='symp[]' value='5'>head ache"."<br>";
    }
    else if($x=='arms')
        
    {
    //echo "<input type='checkbox' name='symp[]' value='6'>bone"."<br>";
    echo "<tr><td><input type='checkbox' name='symp[]' value='2'></td><td style='background-color:white'>Numbness(arms)</td></tr>";
    echo "<tr><td><input type='checkbox' name='symp[]' value='3'></td><td style='background-color:white'>Slow Healing Of Wounds</td></tr>";
    }    
    else if($x=='legs')
    {
    echo "<tr><td><input type='checkbox' name='symp[]' value='4'></td><td style='background-color:white'>Numbness(legs)</td></tr>";
    echo "<tr><td><input type='checkbox' name='symp[]' value='5'></td><td style='background-color:white'>Worsening Leg pain when Bending the foot</td></tr>";
    
    }
    else if($x=='chest')
    {
    echo "<tr><td><input type='checkbox' name='symp[]' value='6'></td><td style='background-color:white'>Lower Back Pain</td></tr>";
    echo "<tr><td><input type='checkbox' name='symp[]' value='7'></td><td style='background-color:white'>Bloating and Heart Burn</td></tr>";
 
    echo "<tr><td><input type='checkbox' name='symp[]' value='7'></td><td style='background-color:white'>Burning Sensation in the stomach</td></tr>";
    
    }
    
    
    }

}
echo "</table></td></tr>";
echo "<tr><td><a href='background3.html' class='button'>back</a></td><td><input type='submit' value='next'></td></tr>";     


          ?>  

        </form>

    </body>
</html>
