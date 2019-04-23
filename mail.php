
<?php
$msg="";
use PHPMailer\PHPMailer\PHPMailer;
include_once "PHPMailer/PHPMailer.php";
include_once "PHPMailer/Exception.php";
include_once "PHPMailer/SMTP.php";
 
 $mail = new PHPMailer();
 $mail->Host ="smtp.gmail.com";

 $mail->SMTPAuth = true;
 $mail->USERNAME ="deepaknit028@gmail.com";
 $mail->Password ="CHHANDACHARAN";
 $mail->SMTPSecure ="TLS";
 $mail->Port = 587;
 $mail->addAddress('deepaksuna4290@gmail.com');
 $mail->setFrom('deepaknit028@gmail.com');
 $mail->Subject ='you have registered successfully';
 $mail->isHTML(true);
 $mail->Body ='registration';
 if($mail->send()){
    echo "sent";
 }
 else echo $mail->ErrorInfo;


 
?>