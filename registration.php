
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
  
  <link rel="icon" href="images/logo.png" type="image/gif" sizes="16x16">
  <title>REGISTRATION</title>
</head>
<body >
<div class="logo">

</div>

    <!--<input type="checkbox" class="navigation_checkbox" id="navi_toogle">
    <label id="login"  for="navi_toogle" class="navigation_button"><i style="color:black">user login</i></label>
    <span class="navigation_icon">&nbsp;</span>
    <div class="navigation_background">&nbsp;</div>
    <nav class="navigation_nav">
                 <!--<form action="main.php" method="post" class="form" id="log">
              <div class="form_group" style="text-align:center">
                <input type="text" class="form_input" placeholder="Username" id="uname" name="username" required>
                <label for="uname" class="form_label">Username</label>
              </div>
              <div class="form_group" style="text-align:center">
                <input type="password" class="form_input" placeholder="Password" id="pass" name="password"required>
                <label for="pass" class="form_label">Password</label>
              </div>
               <div class="form_group"  style="text-align:center">
                   <button class="btn btn--green" name="login" >login</button>
                 </div>

                 <a href="#" class="btn-text" style="float:right">forgot Password or Username &rarr;</a><br>

                  <a href="#" class="btn-text" style="float:right">Go to registration page &rarr;</a>
               </form>-->
  
  
  <div class="text-box">
  <h2 id="f2"  style="display:block;text-align:center;color:#000000">NIT JAMSHEDPUR</h2>
   <h2 id="f4" style="display:block;text-align:center;color:#000000"> DEPARTMENT OF COMPUTER SCIENCE AND ENGINEERING</h2>

 </div>
 <section class="section-register" >
   <div class="row">
     <div class="register">
       <div class="register_form">
         <form action="connection.php"  method="post" class="form" id="form1">
           <div class="u-center-text u-margin-bottom-big">
           <h2 class="heading-secondary" style="text-align:center">
             START REGISTRATATION
           </h2>
           <div class="form_group">
             <input type="text" class="form_input" placeholder="Firstname" id="fname" name="firstname" required>
             <label for="fname" class="form_label"  >Firstname</label>
           </div>
           <div class="form_group">
             <input type="text" class="form_input" placeholder="Lastname" id="lname"  name="lastname" required>
             <label for="lname" class="form_label">Lastname</label>
           </div>
           <div class="form_group">
             <input type="text" class="form_input" placeholder="Username" id="uname" name="username"required>
             <label for="uname" class="form_label">Username</label>
           </div>
           <div class="form_group">
             <input type="password" class="form_input" placeholder="Password" id="pass" name="password" required>
             <label for="pass" class="form_label">Password</label>
           </div>
           <div class="form_group">
             <input type="email" class="form_input" placeholder="Email" id="email" name="emailid"required>
             <label for="email" class="form_label">Email</label>
           </div>
           <div class="form_group">
             <input type="text" class="form_input" placeholder="Contact" id="contact" name="contactnum" required>
             <label for="contact" class="form_label">Contact</label>
           </div>
           <div class="form_group">
             <input type="text" class="form_input" placeholder="Semester" id="sem" name="semester" required>
             <label for="sem" class="form_label">Semester</label>
           </div>
           <div class="form_group">
             <input type="text" class="form_input" placeholder="Rollnumber" id="rnum" name="rollnum" required>
             <label for="rnum" class="form_label">Rollnumber</label>
           </div>
           <div class="form_group"><!--value is mandatory to insert exact data into database-->
             <div class="form_radio_group" required>
               <input type="radio" class="form_radio-input" id="general"  name="category" value="GENERAL" checked><!--name is necessary to differentiate-->
               <label for="general" class="form_radio-label">
<!--to style the radio button and hide input original-->
                <span class="form_radio-button"></span>
                 GENERAL</label>
             </div>
             <div class="form_radio_group">
               <input type="radio" class="form_radio-input" id="obc" name="category"  value="OBC" checked>
               <label for="obc" class="form_radio-label">
                      <span class="form_radio-button"></span>
                 OBC</label>
             </div>
             <div class="form_radio_group">
               <input type="radio" class="form_radio-input" id="sc" name="category"  value="SC" checked>
               <label for="sc" class="form_radio-label">
                     <span class="form_radio-button"></span>
                 SC</label>
             </div>
             <div class="form_radio_group">
               <input type="radio" class="form_radio-input" id="st" name="category"  value="ST" checked>
               <label for="st" class="form_radio-label">
                      <span class="form_radio-button"></span>
                 ST</label>
             </div>
           </div>
           <div class="g-recaptcha" data-sitekey="6LfGi44UAAAAAL8Esy07KSTY5bkFbSHMYLDsEI46"></div>


           <div class="form_group">
             <button class="btn btn--green" name="submit">REGISTER</button>
           </div>
           <a href="login.php" class="btn-text">if already registered then go to login page &rarr;</a>
         </form> </div>

     </div>
   </div>
</section>
<!--for video back ground-->
<script src="https://code.jquery.com/jquery-3.3.1.js">
</script>
<!--<script src="jquery.vide.js"></script>-->


</body>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</html>
