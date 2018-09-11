<?php
session_start();
require'PHPMailer-5.2.25/PHPMailerAutoload.php'; 
require 'PHPMailer-5.2.25/class.smtp.php';
//$x=rand(100000,999999);
//$_SESSION["otp"]=md5($x);
$mail=new PHPMailer();
$mail->isSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
	//$mail->Host ='ssl://smtp.gmail.com';
        $mail->Host = 'tls://smtp.gmail.com:587';
	$mail->Port = '587';
	$mail->isHTML(true);
	//$mail->Username = 'sasukecse106@gmail.com';
	//$mail->Password = '@sasukecse';
        $mail->Username = 'csemail105.105@gmail.com';
	$mail->Password = 'csemail105';
	$mail->SetFrom('okkart.com');
	$mail->Subject = 'Medication  ';
        $dis=$_SESSION['medicine'];
        $medd=" ";
        $count=1;
        if(!empty($dis))           
{
             foreach($dis as $x)
    {
             $medd=$medd." ".$count." ".$x;
             $count++;
    }
             }
   

	$mail->Body = "medication is".$dis;
        $mail->AddAddress('satvikkalyan99@gmail.com');
 	if(!$mail->Send()) {
   	 echo "Mailer Error: " . $mail->ErrorInfo;
	}
	else
	{
            
            header('Location:userprof2.php');
	}
        
?>  