<?php
session_start();
header ('Content-type:image/jpeg');
$text= $_SESSION['code']=mt_rand(1000,9999);
$font_size=25;
$image_width=100;
$image_height=40;
    //GD LIBRARY image related
  //  https://www.php.net
    $image=imagecreate($image_width,$image_height);
    imagecolorallocate($image,215,215,215);//background
    $font_color=imagecolorallocate($image,0,0,0);
    imagettftext($image,$font_size,0,15,20,$font_color,'arial.ttf',$text);//angle,position
    imagejpeg($image);//image create


 ?>
