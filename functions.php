<?php

function generateNewString( $len=10)
{
    $token = "tgkomndvcnxgcjfeyADGTDFH123456780";
    $token = str_shuffle($token);
    $token =substr($token,0,$len);
    return $token;
}

function redirectToLoginPage(){
    header('Location:login.php');
    exit();
}


?>