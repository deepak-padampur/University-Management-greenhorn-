
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
  <link rel="icon" href="images/logo.png" type="image/gif" sizes="16x16">
  <title>LOGIN FORM</title>
  <style>
  
  body,html{
    margin:0;
    padding:0;
    width:100%;
    height:100%;
   /* background: grey;*/
    overflow: hidden;
  }
  .white{
    width:100%;
    height:20%;
    background:-webkit-radial-gradient(center,circle,white 0%,rgb(29, 29, 121)  50%);;
  }
  .image{
    width:100%;
    /*background:-webkit-radial-gradient(center,circle,white 0%,rgb(29, 29, 121)  50%);*/
    background-size: cover;
    position:relative;
    display:flex;
    padding:50px;
    box-sizing: border-box;
    justify-content: center;
    height:100%;
  }
  #container{
    width:100%;
    position:absolute;
    bottom:-6px;
    overflow:hidden;
  }
  #container svg{
    width:200%;
    position:relative;
    animation:move-left 5s linear infinite;
  }
  @keyframes move-left{
    0%{
      left:0%;
    }
    100%{
      left:-100%;
    }
  }
  </style>
<link rel="stylesheet" href="login.css">
<script src="jquery-3.1.1.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('.signin').click(function(){
      $('.fold').toggleClass('active')
    })
  });

</script>

</head>
<body>
   <!--logo design-->
   <div class="logo">

    </div>
  
    <!--logo design finished here-->
  <!--wavy back groundimage-->
  

  <!---wavy back ground finished-->
 
  <div class="container">
    <div class="signin">
       Sign in
    </div>
    <div class="fold">
      <form action="connection.php" method="post" enctype="multipart/form-data"><!--for sending attachment file we need enctype-->
        <input id="i1" type="text" name="username" placeholder="Username">
        <input  id="i2" type="password" name="password" placeholder="Password">
        <input   id="i3" type="submit" name="loginuser" placeholder="Login" value="login">
        <?php
               if (isset($_GET["newPwd"])){
                   if($_GET["newPwd"]=="passwordupdated"){
                       echo'<p class="registrationsuccess">Your PAssword Has been reset!</p>';
                   }
               }


               ?>

        <a  id="a1" href="setting.php">Forgot Password &rarr;</a>
        <a  id="a2" href="registration.php">Go to registration page &rarr;</a>
        </form>
        <?php
        if(isset($_GET["newpwd"])){
          if($_GET["newpwd"]=="passwordupdated"){
            echo'<p class="registrationsuccess">Your password has been reset</p>';
          }
        }
        
        
        ?>
    </div>
    </div>
    <script lanhuage="javascript" type="text/javascript">
    $(window).load(function(){
      $('./loader.html').hide();
    });
    </script>

</body>
</html>


