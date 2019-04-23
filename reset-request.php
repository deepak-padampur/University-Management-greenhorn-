<?php

if(isset($_POST['reset-request-submit'])){

     $selector = bin2hex(random_bytes(8));//creation of token for authentication of correct user
     $token = random_bytes(32);//user authentication


     $url = "localhost/CSE/ADMIN/create-new-password.php?selector=" . $selector . "&validator=" . bin2hex($token);
     //create its expairy date
  //todays date in seconds
     $expires = date("U") + 3600;//one hour ahead from today and the date must not be passed
     //setup token inside databse



     require 'connection.php';


     $userEmail = $_POST["email"];

  //to avoid more than one request from same user
     $sql = "DELETE FROM pwdreset WHERE pwdResetEmail=?";
     //initialize new statement
     $stmt = mysqli_stmt_init($conn);
     if(!mysqli_stmt_prepare($stmt,$sql)){
        echo' <div class="alert-danger col-lg-6 col-lg-push-3">';
      echo  "THERE WAS AN ERROR!";
      exit();
     }else{
         #execute statement inside database
         #replacement of question mark
         mysqli_stmt_bind_param($stmt, "s",  $userEmail);//s- string datatype
         mysqli_stmt_execute($stmt);
     }

     $sql = "INSERT INTO pwdreset (pwdResetEmail,pwdResetSelector,pwdResetToken,pwdResetExpires) VALUES (?, ?, ?, ?);";
     $stmt = mysqli_stmt_init($conn);
     if(!mysqli_stmt_prepare($stmt,$sql)){
        echo' <div class="alert-danger col-lg-6 col-lg-push-3">';
      echo  "THERE WAS AN ERROR!";
      exit();
     }else{

        $hashedToken = md5($token);
         #replacement of question mark
         mysqli_stmt_bind_param($stmt, "ssss",  $userEmail, $selector,$hashedToken, 
         $expires);
         mysqli_stmt_execute($stmt);
     }

     mysqli_stmt_close($stmt);
     mysqli_close($conn);//close all connection from database



     //sending the email
     $to = $userEmail;

     $subject = "Reset your password for student login DEPARTMENT OF COMPUTER SCIENCE AND ENGINEERING";

     $message = '<p>We receive a password reset request.The link to reset your password is below.If you did not make
     this request you can ignore it.</p>';
     
//message continuation
     $message .='<p>Here is your password reset link:</br>';
     $message .= '<a href="' . $url . '">' . $url .'</a></p>';


     $headers = "From:CSE<deepaknit028@gmail.com>\r\n ";
     $headers .="Reply-To: deepaknit028@gmail.com\r\n";
     $headers .="Content-type: text/html\r\n";

     mail( $to, $subject , $message,
     $headers);
     header("Location: settings.php?reset=success");


}else{
    header("Location:login.php");
}