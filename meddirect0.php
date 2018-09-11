<?php
$connection = mysqli_connect("localhost:3306","root","qweasd","satvik");
$sql = "select dname from medication";
$result = mysqli_query($connection, $sql); 
?>
<html>
    <head>
        <script>
            function blur()
            {
            document.getElementById("p1").innerHTML=document.getElementById("pcategory");
        }
            </script>
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
  font: bold 15px Arial;
  text-decoration: none;
  background-color: #EEEEEE;
  color: #333333;
  padding: 10px 14px 10px 14px;
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
        <form action="medicate.php" method="POST">
        <table border="0">
            <tr>
                <td width="200"></td>
                <td width="240" height="200"></td>
                <td width="290"></td>
                <td width="300" style="text-align:center">Select a Disease from the Drop box</td>
            </tr>
            <tr><td></td>
                <td style="font: bold 20px Arial;text-align:center"></td>
                <td>
                    <label for="pcategory">Disease Name</label>
    <input type="text" list="categoryname" autocomplete="off" id="pcategory" name="pcategory">
    <datalist id="categoryname">
    <?php while($row = mysqli_fetch_array($result)) { ?>
            <option value="<?php echo $row['dname']; ?>">
                <?php echo $row['dname']; ?></option>
        <?php } ?>
    </datalist> <?php mysqli_close($connection); ?>
                </td>
            </tr>
            <tr><td height="200"><p id="p1"></p><a href='userprof.php' class='button'>back</a></td><td colspan=2 style="text-align:center"><input type="submit" value="next"></td></tr></table>
         
        </form>
    </body>
</html>

