
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
             <!--check for token-->
             <?php
             $selector=$_GET["selector"];
             $validator=$_GET["validator"];


             //check that these token actually exists inside the $url
             if(empty($selector) || empty($validator)){
                 echo "Could not validate your request!";
             }else{
                 //correctness of token to he hexadecimal
                 if(ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false){
                     ?>
                    <form action="reset-password.php" method="post">
                    <input type="hidden" name="selector" value="<?php echo $selector ;?>">
                    <input type="hidden" name="validator" value="<?php echo $validator ;?>">
                    <input type="password" name="pwd" placeholder="Enter a new password..">
                    
                    <input type="password" name="pwd-repeat" placeholder="Repeat the new password..">
                    <div class="center">
                       <button type="submit" name="reset-password-submit"  class="btn">Reset Password</button>
                   </div>
                    
                    </form>



                    <?php
                      
                 }
             }

             
             ?>
             
           </div>
           
           

        </div>
    </div>    <!--this is side bar area-->
  
<br><br><br><br><br><br>
<br><br>

<br><br>
<br><br>



        <?php
include"includes/footer.php";
?>






