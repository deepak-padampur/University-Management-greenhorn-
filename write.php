  
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
}?>



 <?php


 include "includes/header.php" ;
 include "includes/navbar.php" ;
 ?>


<div class="main">
<?php
if(isset($_SESSION['message'])){
    echo  $_SESSION['message'];
    unset($_SESSION['message']);//to refresh once

}?>
<form action="writecheck.php" method="POST" enctype="multipart/form-data">
<div class="card-panel">

<textarea name="title" id="" class="materialize-textarea" placeholder="Title of Query"></textarea>
<h5>Query Content</h5>
<textarea name="ckeditor" id="ckeditor" class="materialize-textarea ckeditor"></textarea>
</div>
<div class="center">
<input type="submit" value="Send Query" name="Send" class="btn white-text">
</div>

</form>

<?php
    if(isset($_POST['Send'])){
        $data=$_POST['ckeditor'];
        $data=mysqli_real_escape_string($conn,$data);//not to trust any users input
        $data=htmlentities($data);//to overcome javascript injection
        $title=$_POST['title'];
        $title=mysqli_real_escape_string($conn,$title);//not to trust any users input
        $title=htmlentities($title);//to overcome javascript injection
        $sql="insert into posts(title,content) value('$title','$data')";
        $reg=mysqli_query($conn,$sql);
        if($reg){
            $_SESSION['message']="POST IS PUBLISHED.";
            echo"<script>alert('success');</script>";
            
        }
        else{
            $_SESSION['message']="<div class='chip red black-text'>SORRY YOUR QUERY CAN NOT BE REGISTERED AT THIS MOMENT</div>";
        }
    }
    ?>

</div>




    <script  type="text/javascript" src="ckeditor/ckeditor.js"></script>
    
      
    

    <?php
    include "includes/footer.php";
    ?>
   