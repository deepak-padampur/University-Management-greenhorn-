<?php
include "connection.php";
include "includes/header.php";
?>
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
            $_SESSION['message']="POST IS PUBLISHED";
            echo"<script>alert('success');</script>";
            header("LOCATION:write.php");
        }
        else{
            $_SESSION['message']="<div class='chip red black-text'>SORRY YOUR QUERY CAN NOT BE REGISTERED AT THIS MOMENT</div>";
            header("LOCATION:write.php");
        }
    }
    ?>