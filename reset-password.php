<!--reset-->
<?php
if(isset($_POST["reset-password-submit"])){

    //update password
    $selector=$_POST["selector"];
    $validator=$_POST["validator"];
    $password=$_POST["pwd"];
    $passwordRepeat=$_POST["pwd-repeat"];
    if(empty($password) || empty($passwordRepeat)){
     header("Location:create-new-password.php?newpwd=empty");
     exit();
    }
    else if($password != $passwordRepeat){
        header("Location:create-new-password.php?newpwd=pwdnotsame");
        exit();
    }
    //checking expairy
    $currentDate = date("U");//standard date time
    require "connection.php";

    $sql = "SELECT * FROM pwdreset WHERE pwdResetSelector=? AND pwdResetExpires >= ?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
       echo' <div class="alert-danger col-lg-6 col-lg-push-3">';
     echo  "THERE WAS AN ERROR!";
     exit();
    }else{
        #execute statement inside database
        #replacement of question mark
        mysqli_stmt_bind_param($stmt, "ss",  $selector,  $currentDate);//s- string datatype
        mysqli_stmt_execute($stmt);
        $result=mysqli_stmt_get_result($stmt);
        //fetch from data base
        if(!$row=mysqli_fetch_array($result)){
          //  echo "you need to re-submit your reset request.";
          printf("Error:%s\n",mysqli_error($conn));
            exit();
        }

        else{
            //convert back to binary
            $tokenBin=hex2bin($validator);
            $tokenCheck= password_verify($tokenBin,$row["pwdResetToken"]);
            if( $tokenCheck===false){
               // echo "you need to re-submit your reset request.";
               printf("Error:%s\n",mysqli_error($conn));
                exit();
            }else if( $tokenCheck===true){
                 //grab the email of the user
                 $tokenEmail=$row['pwdResetEmail'];
                 
                 $sql ="SELECT * FROM student_registration WHERE EMAIL=?;";
                 $stmt = mysqli_stmt_init($conn);
                 if(!mysqli_stmt_prepare($stmt,$sql)){
                    echo' <div class="alert-danger col-lg-6 col-lg-push-3">';
                  echo  "THERE WAS AN ERROR!";
                  exit();
                 }else{

                    mysqli_stmt_bind_param($stmt,"s",$tokenEmail);
                    mysqli_stmt_execute($stmt);
                    $result=mysqli_stmt_get_result($stmt);
                    //fetch from data base
                    if(!$row=mysqli_fetch_array($result)){
                        echo "THERE WAS AN ERROR!";
                        exit();
                    }
            
                    else{
                        $sql="UPDATE student_registration SET 'PASSWORD'=? WHERE EMAIL=?";
                        $stmt = mysqli_stmt_init($conn);
                        if(!mysqli_stmt_prepare($stmt,$sql)){
                           echo' <div class="alert-danger col-lg-6 col-lg-push-3">';
                         echo  "THERE WAS AN ERROR!";
                         exit();
                        }else{
                            $newPwdHash=md5($password);
       
                           mysqli_stmt_bind_param($stmt,"ss", $newPwdHash, $tokenEmail);
                           mysqli_stmt_execute($stmt);
                            $sql = "DELETE FROM pwdreset WHERE pwdResetEmail=?";
                            $stmt = mysqli_stmt_init($conn);
                            if(!mysqli_stmt_prepare($stmt,$sql)){
                               echo' <div class="alert-danger col-lg-6 col-lg-push-3">';
                             echo  "THERE WAS AN ERROR!";
                             exit();
                            }else{
           
                               mysqli_stmt_bind_param($stmt,"s",$tokenEmail);
                               mysqli_stmt_execute($stmt);
                           
                            $result=mysqli_stmt_get_result($stmt);
                            header("Location:login.php?newpwd=passwordupdated");
                            exit();

                            }



                           //delete token
                        }

                    }

                 }
            }
        }
    }

}
else{
    header("Location:settings.php");
}

?>