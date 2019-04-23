<?php
require_once "functions.php";

if(isset($_GET['EMAIL']) && isset($_GET['token'])){
  
    $conn = new mysqli('localhost','root','','registration');
    $email=$conn->real_escape_string($_GET['EMAIL']);
    $token =$conn->real_escape_string($_GET['token']);

    $sql =$conn->query("SELECT ID FROM student_registration WHERE EMAIL='$email' AND token='$token' AND token<>'' AND tokenExpire >NOW()");

    if($sql->num_rows >0){
  
   $newPassword= generateNewString();
   $newPasswordEncrypted =md5($newPassword);
   $conn->query("UPDATE student_registration SET token='' , PASSWORD='$newPasswordEncrypted' WHERE EMAIL='$email'");

   echo "Your new Password Is $newPassword <br><a href='login.php'> Click Here To Login</a>";

    }else

    redirectToLoginPage();

} else{
    redirectToLoginPage();
}

?>