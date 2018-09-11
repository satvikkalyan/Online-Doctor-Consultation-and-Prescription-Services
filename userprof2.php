
<html>
    <head>
        <title>user profile</title>
        <script>
           function details()
           {
               document.getElementById("p1").innerHTML="Your Personal Details Are In Here";
           }
           function medrep()
           {
               document.getElementById("p1").innerHTML="We Store Your Previous Medical Reports In Here";
           }
           function newrec()
           {
               document.getElementById("p1").innerHTML="Know The Disease Just From Symptoms";
           }
           function medicate()
           {
               document.getElementById("p1").innerHTML="We Provide Best Medication For Your Disease";
           }
           function clearptag()
           {
               document.getElementById("p1").innerHTML="";
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
.button1 {
  font: italics 30px New Times Roman;
  text-decoration: none;
  background-color: #EEEEEE;
  color: #333333;
  
  padding: 8px 13px 8px 13px;
  border-top: 1px solid #CCCCCC;
  border-right: 1px solid #333333;
  border-bottom: 1px solid #333333;
  border-left: 1px solid #CCCCCC;
}
.button2 {
  font: bold 18px Arial;
  text-decoration: none;
  background-color: #4CAF50;
  color: #333333;
  
  padding: 8px 13px 8px 13px;
  border-top: 1px solid #CCCCCC;
  border-right: 1px solid #333333;
  border-bottom: 1px solid #333333;
  border-left: 1px solid #CCCCCC;
}
    </style>
    
    </head>
    <body>
        
         <form action="logout.php"> 
        <table border="0">
            <tr><td height="50"></td>
                <td width=""></td>
            <td></td>
            <td width="340">    
            </td>
            <td width="240" style="text-align:right">
                <input type="submit" class="button2" value="logout" >  
            </td></tr>
            
            <tr height="100">
                <td>
                    
                </td><td>
                    
                </td>
                <td></td>
                <td> <?php session_start();echo "Email Sent Succesfully!"."<br>"."You Can Still Continue Using Our services";?><br>
                    <p id="p1"></p>

            
        </td>
            </tr>
            <tr>
                <td height="100">
                    
                </td>
            </tr>
            <tr>
                <td width="100">
                </td>
                <td width="200" height="50">
                    <a href="userdetails.php" class="button1" onmouseover="details()" onmouseout="clearptag()">My Details</a> 
                </td>
                <td  width="430">
                    
                </td>
                <td  width="200">
               
                </td>
            </tr>
            <tr>
                <td>
                    
                </td>
                <td height="50">
                    <a href="prev.php" class="button1" onmouseover="medrep()" onmouseout="clearptag()">Medical Reports</a>
                </td>
                
            </tr>
            <tr>
                <td>
                    
                </td>
                <td height="50">
                    <a href="background3.html" class="button1" onmouseover="newrec()" onmouseout="clearptag()">New Record</a>
                </td>
            </tr>
            <tr>
                <td></td>
                <td height="50">
                    <a href="meddirect0.php" class="button1" onmouseover="medicate()" onmouseout="clearptag()">Medication</a>
                </td>
            </tr>
            <tr>
                <td>
                    
                </td>
                <td height="100" >
                   
                </td>
            </tr>
        </table>
                     </form>

    </body>
</html>