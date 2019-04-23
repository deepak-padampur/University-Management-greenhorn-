


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <link rel="icon" href="images/logo.png" type="image/gif" sizes="16x16">
  <title> ADMIN LOGIN</title>
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
  <div class="image">
    <div id="container">
    <svg 
      
       x=0px
       y=0px
       viewBox="0 0 3841 108.5"
       style="overflow: scroll;enable-background: new 0 0 3841 108.5;"
       xml:space="preserve"

    >
    <defs></defs>
    <path style="fill:#ffffff;stroke-miterlimit:10;"d="M3360.5,97.739C-242,0-480-48.375-480-48.375 
    S2647.5,0.5,2400.5,0.5s-480,48.375-480,48.375s-238,48.864-480,48.864s-480-48.375-480-48.375S727.5,0.5,480.5,0.5
    S0.5,48.875,0.5,48.875V108h1920h1920V48.875C3840.5,48.875,3602.5,97.739,3360.5,97.739z"/>
      
    </svg>

    </div>
  </div>
  <div class="white">



  </div>

  <!---wavy back ground finished-->
 
  <div class="container">
    <div class="signin">
      Admin  Sign in
    </div>
    <div class="fold">
      <form action="connection.php" method="post" enctype="multipart/form-data"><!--for sending attachment file we need enctype-->
        <input id="i1" type="text" name="username" placeholder="Username">
        <input  id="i2" type="password" name="password" placeholder="Password">
        <input   id="i3" type="Submit" name="loginadmin" placeholder="login" value="login">
        <a  id="a1" href="setting.php">Forgot Password &rarr;</a>
    
        </form>
    </div>
    </div>
    <script lanhuage="javascript" type="text/javascript">
    $(window).load(function(){
      $('./loader.html').hide();
    });
    </script>

</body>
</html>


