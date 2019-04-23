




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
include "includes/header.php";
include "includes/navbar.php";

if(isset($_GET['submit'])){
$q=$_GET['search'];
$q=mysqli_real_escape_string($conn,$q);
$q=htmlentities($q);

}
else{
    header("Location:student.php");
}

?>