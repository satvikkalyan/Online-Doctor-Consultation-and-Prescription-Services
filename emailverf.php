<?php
session_start();
require'PHPMailer-5.2.25/PHPMailerAutoload.php'; 
require 'PHPMailer-5.2.25/class.smtp.php';
$x=rand(100000,999999);
$_SESSION["otp"]=md5($x);
$mail=new PHPMailer();
$mail->isSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Host ='smtp.gmail.com';
$mail->Port = '587';
$mail->isHTML(true);
$mail->Username = 'csemail105.105@gmail.com';
$mail->Password = 'csemail105';
$mail->SetFrom('okkart.com');
$mail->Subject = 'activate account/verify email address';
$mail->Body = "click on link to activate account http://localhost:8080/JavaBridgeTemplate621/satvik/activation.php?uname=".$_SESSION['email']."&otp=".$_SESSION['otp'];
$mail->AddAddress($_SESSION['email']);
if(!$mail->Send()) {
     echo "Mailer Error: " . $mail->ErrorInfo;
}
?>
<html>
    <head>
        <style>
        body  {
    background-image: url("verf.jpg");
    background-color: white;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
    background-size:1400px 600px;
}
.button2 {
  font: bold 18px Arial;
  text-decoration: none;
  background-color: #EEEEEE;
  color: #333333;
  
  padding: 12px 20px 12px 20px;
  border-top: 1px solid #CCCCCC;
  border-right: 1px solid #333333;
  border-bottom: 1px solid #333333;
  border-left: 1px solid #CCCCCC;
}
</style>
    </head>
    <body>
        <table border="0">
            <tr>
                <td width="325" height="80">
                </td>
                <td width="310">
                    
                </td>
                <td width="500">
                    
                </td>
            </tr>
            <tr>
                <td height="10">
                </td>
                <td><p style="font: bold italic 18px Times New Romam;text-align: center;vertical-align:text-bottom">click on the link sent to your email </p><br><p style="font: bold italic 18px Times New Roman;text-align: center">address to activate your account</p></td>
            </tr>
            <tr>
                <td height="10">
                </td>
                <td></td>
            </tr>
            <tr>
                <td width="320" height="200">
                </td>
                <td width="310">
                    
                </td>
                <td width="500">
                    
                </td>
            </tr>
            <tr>
                <td width="320" height="90">
                </td>
                <td width="310">
                    
                </td>
                <td width="500">
                    <a href='login.html' class="button2">skip to login</a>
                </td>
            </tr>
        </table>
    </body>
</html>
