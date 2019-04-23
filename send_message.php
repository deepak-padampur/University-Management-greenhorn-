<!--the sequence must be mantained-->
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
<?php
include"includes/admin_navbar.php";?>

<?php
include "includes/header.php";
?>


<div class="col l6 m6 s12">
                <div class="card-panel">
                <ul class="collection with-header">
                            <li class="collection-header blue">
                                <h5 class="white-text">SEND MESSAGE</h5>
                            </li>
                            <!--message content goes here-->
                            <section class="section-message" >
   <div class="row">
     <div class="register">
       <div class="register_form">
         <form action=" "  method="post" class="form" id="form1" enctype="multipart/form-data">  <!--this is necessary of insertion of data i.e image type data-->
           <div class="form_group">
           <table class="table table-bordered">
           <tr>
           <td>
            <!--<input type="text" class="form_input" placeholder="BOOKNAME" id="bname" name="bookname" required>
             <label for="bname" class="form_label"  >BOOKNAME</label>-->
             <!--select data from database-->
             <select name="student" id="" class="form-control" >
             <?php
             $recv=mysqli_query($conn,"select * from student_registration");
             while($row=mysqli_fetch_array($recv))
             {
                ?><option value=" <?php echo $row['USERNAME']?>">

                <?php echo $row['USERNAME']."(".$row['ROLLNUMBER'].")";?>
                </option><?php
             }
             
             ?>
          
             </select>
             </td>
             </tr>
             <tr>
             <td>
               <input type="text" class="form-control" placeholder="ENTER TITLE" id="title1" name="title" required>
             <label for="title1" class="form_label"  >ENTER TITLE</label>
             </td>
             </tr>
             <tr>
             <td>
             TYPE MESSAGE HERE....
          <textarea name="msg" id="" cols="30" rows="10" class="form-control" >
          </textarea>
             </td>
             </tr>
             <tr>
             <td>
             <div class="form_group">
             <button class="btn btn--green " name="submit2">send message</button>
           </div>
             </td>
             </tr>
             </table>
           </div>
         
          
    
         </form> </div>

     </div>
   </div>
</section>
</div>
<?php

if (isset($_POST['submit2'])){
  mysqli_query($conn,"insert into messages values('','DHONI','$_POST[student]','$_POST[title]','$_POST[msg]','no')");
 ?>
   echo "<script>alert('message sent successfully');</script> ";


 <?php
  
}
?>


<br><br><br><br><br><br><br><br><br>
    <?php
include"includes/footer.php";
?>
