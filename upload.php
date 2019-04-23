<?php
include "connection.php";
?>

<?php
include "includes/header.php";

?>  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UPLOAD PROFILE IMAGE</title>

   
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
    

<body>
    <div class="container" style="margin-top:100px">
    <div class="row justify-content-center">
    <div class="col-md-6 col-md-offset-3" align="center">
  
  <img src="images/logo.png"><br><br>
  <form action="upload.php" method="POST" enctype="multipart/form-data">
  <div class="form_group">
             <input type="file" class="form_input" placeholder="PROFILE IMAGE" id="img"  name="profileimage" required>
             <label for="img" class="form_label">PROFILE_IMAGE</label>
           </div>
           <div class="form_group">
             <button class="btn btn--green" name="upload">UPLOAD</button>
           </div>
  

</form>
    
    </div>
    </div>
    
    </div>
</body>
</html>



<?php
$sql = "SELECT * FROM student_registration WHERE USERNAME ='$_SESSION[username]'";
$res= mysqli_query($conn,$sql);
if(mysqli_num_rows($res>0)){
    while($row = mysqli_fetch_array($result)){
        $studentid =$row['ID'];
        $sql = "INSERT INTO profileimg('studentid', 'status') values( '$studentid',1)";
        mysqli_query($conn,$sql);
        header("Location:student.php");
    }
}
else{
    echo "YOU HAVE AN ERROR!";
}



?>
