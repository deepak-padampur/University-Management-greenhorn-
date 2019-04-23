<?php
include("connection.php");
$query="INSERT INTO student_registration VALUES('3','Deepak','Suna','deepak@123','118209','deepaknit028@gmail.com',
'9777958630','4','2017ugcs028','SC')";
$data=mysqli_query($conn,$query);
if($data){
  echo "data inseted into database";

}
 ?>
