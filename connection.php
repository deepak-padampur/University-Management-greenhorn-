<?php
/*if(isset($_POST["submit"])){
  $conn=mysqli_connect('localhost','root','');
  mysqli_select_db($conn,'registration');
  mysqli_query($conn,"insert into  student_registration( `id`,`FIRSTNAME`, `LASTNAME`, `USERNAME`, `PASSWORD`, `EMAIL`, `CONTACT`, `SEMESTER`, `ROLLNUMBER`, `CATEGORY`)
   VALUES (``,`$_POST[firstname]`,`$_POST[lastname]`,`$_POST[username]`,`$_POST[password]`,
     `$_POST[emailid]`,`$_POST[contactnum]`,`$_POST[semester]`,`$_POST[rollnum]`,`$_POST[category]`)");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!--font icon-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"><!--bootstrap icon-->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="style.css">

  <title>Document</title>
</head>
<body><div class="alert alert-success col-lg-6 col-lg-push-3">
  Registered successfully <?php /*if(isset($_POST["submit"]))
  {echo $_POST['firstname'];}?>
  ,you will get email when your account is approved.
</div><br><br>
<!--sending mail-->
<?php /* if(isset($_POST["submit"])){
  $msg= "you have registerd successfully.Now you can enjoy online services";
  mail("$_POST[emailid]","Notification",$msg);
}*/
?><?php
session_start();

?>

<?php
$servername="localhost";
$username="root";
$password="";
$dbname="registration";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
  echo "";
}
else {
  die("Connection failed because".mysqli_connect_error());
}
?>


<!--session start-->

<?php

if(isset($_POST['submit'])){

#inorder to give security to user input we use 'mysqli_real_escape_string()' function... space afer $conn 
$fn= mysqli_real_escape_string($conn, $_POST['firstname']);
$ln= mysqli_real_escape_string($conn, $_POST['lastname']);
$un= mysqli_real_escape_string($conn, $_POST['username']);
$pw= mysqli_real_escape_string($conn, ($_POST['password']));//password encryption we can use  'md5()'
$ei= mysqli_real_escape_string($conn, $_POST['emailid']);
$cn= mysqli_real_escape_string($conn, $_POST['contactnum']);
$sem= mysqli_real_escape_string($conn, $_POST['semester']);
$rn= mysqli_real_escape_string($conn, $_POST['rollnum']);
$cat= mysqli_real_escape_string($conn, $_POST['category']);
#$query="INSERT INTO student_registration VALUES('','$fn','$ln','$un','$pw','$ei',
  #'$cn','$sem','$rn','$cat','no')";
 #$data=mysqli_query($conn,$query);
//Error handler
//check for empty field
if(empty($fn) || empty($ln) || empty($un) || empty($pw) || empty($ei) || empty($cn) || empty($sem) || empty($rn) || empty($cat)) {
  header("Location: registration.php?registration=empty");//error message
  exit();

}else{
      #check if input characters are valid
      if(!preg_match("/^[a-zA-Z]*$/", $fn) || !preg_match("/^[a-zA-Z]*$/", $ln) ){
        header("Location: registration.php?registration=invalid");//error message
        exit();
        echo "<script>alert('INVALID FIRSTNAME OR LASTNAME');</script> ";
      }
      else{
        //check if email is valid
        if(!filter_var($ei, FILTER_VALIDATE_EMAIL)){
          header("Location: registration.php?registration=invalidemail");//error message

          exit();
          echo "<script>alert('FILL A VALID EMAIL ADDRESS');</script> ";
        }
        else{
          //check whether the username is already taken or not
          $sql= "SELECT * FROM  student_registration WHERE USERNAME='$un'";
          $result= mysqli_query($conn,$sql);
          $resultCheck= mysqli_num_rows($result);
          if($resultCheck>0){
            echo "<script>alert('THIS USERNAME IS ALREADY TAKEN');</script> ";
            header("Location: registration.php?registration=USERNAME ALREADY EXISTS ");//error message
            exit();
          
          }else{
              //password encryption
              //hashing the password
              $hashedPwd = md5($pw);
              //INSERT THE USER INTO THE DATABASE
              $data = "INSERT INTO student_registration VALUES('','$fn','$ln','$un','$hashedPwd','$ei','$cn','$sem','$rn','$cat','no','','','','','')";
             $result= mysqli_query($conn,$data);
             
            
             //finish mail
            if($result){
              echo "<script>alert('you have registered successfully..');</script> ";}
    
              header("Location: registration.php?registration=success");//success registration message
              exit();

          }
        }
      }
}



}
//else{
  #if submit button is not pressed then back to registration page
 // header("Location: registration.php");
  //exit();
//}?>








<!--code for login system user-->
<?php
if(isset($_POST['loginuser'])){
  $count=0;
  $user= mysqli_real_escape_string($conn, $_POST['username']);
$pw= md5($_POST['password']);


 $res=mysqli_query($conn,"SELECT * FROM student_registration WHERE USERNAME='$user' && PASSWORD='$pw' && STATUS='yes'");

   
 }?>
 <!--else{
   //check if the username exists inside database
   //$sql = "SELECT * FROM student_registration WHERE USERNAME='$un' && PASSWORD='$pw' && STATUS='yes'";
  // $result = mysqli_query($conn,$sql);
   //$resultCheck=mysqli_num_rows($result);
  //if($resultCheck<1){
   // header("Location: login.php?login=error");
   // exit();
  //}
  /*else {
    if($row = mysqli_fetch_assoc($result)){
       //De-hashing the password
       $hashedPwdCheck = password_verify($pw, $row['PASSWORD']);
       if($hashedPwdCheck == false){
        echo'  <div class="alert-danger col-lg-6 col-lg-push-3">';
      echo "<script>alert('invalid USERNAME OR PASSWORD');</script> ";
    echo" <a  href='login.php'>Tryagin &rarr;</a>";
  
        header("Location: login.php?login=error");
        exit();

       }else if($hashedPwdCheck == true){
         //log in the user here
         $_SESSION['student_id']=$row['ID'];
         $_SESSION['student_firstname']=$row['FIRSTNAME'];
         $_SESSION['student_lastname']=$row['LASTNAME'];
         $_SESSION['student_username']=$row['USERNAME'];
         $_SESSION['student_password']=$row['PASSWORD'];
         $_SESSION['student_emailid']=$row['EMAILID'];
         $_SESSION['student_contactnum']=$row['CONTACTNUMBER'];
         $_SESSION['student_sem']=$row['SEMESTER'];
         $_SESSION['student_rollnum']=$row['ROLLNUMBER'];
         $_SESSION['student_cat']=$row['CATEGORY'];
         header("Location:student.php?login=success");
         exit();
       }
    }
  }
  }
 
 }//else{
  //header("Location: login.php?login=error");
  //exit();
 
 //}?>-->





 <!--for admin login-->
 <?php
if(isset($_POST['loginadmin'])){

  
$un=$_POST['username'];
$pw=$_POST['password'];
$count=0;
$query="SELECT * FROM admin WHERE USERNAME='$un' && PASSWORD='$pw'";
 $result=mysqli_query($conn,$query);}?>
<!--this is fir captcha-->

<!-- if(isset($_POST['submit'])){
  $secret='6LfGi44UAAAAACMUgwg2nGNylb7SlxgpxyO5kx_2';
  $response=$_POST['g-recaptcha-response'];
  $remoteip=$_SERVER['REMOTE_ADDR'];
  $url=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip");
  /**put question mark for verification **/-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!--font icon-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"><!--bootstrap icon-->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="style.css">

  <title>Document</title>
</head>
<body>

 
   <?php if(isset($_POST["submit"]))
  {  $secret='6LfGi44UAAAAACMUgwg2nGNylb7SlxgpxyO5kx_2';
    $response=$_POST['g-recaptcha-response'];
    $remoteip=$_SERVER['REMOTE_ADDR'];
    $url=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip");
    $result=json_decode($url,TRUE);
  
    if($result['success']==1){
     echo' <div class="alert alert-success col-lg-6 col-lg-push-3">';
    echo $_POST['firstname'] ;
  echo  ",you have  Registered successfully ,you will get email when your account is approved.";
    }
    else{
      echo"<script>alert('captcha not veryfied');window.location.href='registration.php'</script>";
    }}?>
 
</div><br><br><br>
<!--this is for user login-->
<?php if(isset($_POST["loginuser"])){
     $count=mysqli_num_rows($res);
     if($count==0){
    echo'  <div class="alert-danger col-lg-6 col-lg-push-3">';
        echo "<script>alert('invalid USERNAME OR PASSWORD');</script> ";
       echo" <a  href='login.php'>Tryagin &rarr;</a>";
  
   }
   else{
  $_SESSION["username"]=$_POST["username"];
  
    
    
  echo "<script>alert('logged in Successfully');</script>";

  header("Location:student.php");//to redirect to another page
 
   }}
  
  ?>
 
  <!--this is for admin login-->
   <?php if(isset($_POST["loginadmin"])){
     $count=mysqli_num_rows($result);
     if($count==0){
    echo'  <div class="alert-danger col-lg-6 col-lg-push-3">';
        echo "<script>alert('invalid USERNAME OR PASSWORD');</script> ";
       echo" <a  href='adminlogin.php'>Tryagin &rarr;</a>";
  
   }
   else{
  $_SESSION["admin"]=$_POST["username"];
    
  echo "<script>alert('logged in Successfully');</script>";

  header("Location:admin.php");//to redirect to another page
 
   }}
  
  ?>


</div>



</body>
</html>
