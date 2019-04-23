<?php
include "connection.php";
?>


<?php
include "includes/header.php";
?>

<?php
include "includes/navbar.php";
?>
   <div class="row">
        <!--this is main content area-->
        <div class="col l9 m9 s12">
        
           <div class="card-panel">
               <h5 class="center"><i class="material-icons blue-text">settings</i>Reset your password</h5>
               <p>An e-mail will be sent to you with instruction on how to reset your password.</p>
              
               <form action="reset-request.php" method="post">
               <input type="text" name="email" placeholder="Enter your e-mail address...">
                 <!--  <input type="password" name="password" placeholder="Change password">
                   <input type="password" name="con_password" placeholder="Confirm Password">-->
                   <div class="center">
                       <button type="submit" name="reset-request-submit"  class="btn">Receive new password by e-mail</button>
                   </div>
               </form>
               <?php
               if (isset($_GET["reset"])){
                   if($_GET["reset"]=="success"){
                       echo'<p class="registrationsuccess">Check your e-mail</p>';
                   }
               }


               ?>
           </div>
           
           

        </div>
         <!--this is side bar area-->
        <div class="col l3 m3 s12"  style="float:right">
            <?php
            include"includes/sidebar.php";
            ?>

    </div>



        <?php
include"includes/footer.php";
?>