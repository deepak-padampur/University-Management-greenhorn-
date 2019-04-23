
<?php
session_start();

?>
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
$sql=0;
$data=mysqli_query($conn,"select * from messages where susername='DHONI' && read1='no'");
$sql=mysqli_num_rows($data);

?>
<nav class="navbar-fixed teal">
        <div class="nav wrapper">
            <div class="container">
<a href="" class="brand-logo center"><i class="material-icons white-text" style="font-size:48px">people</i>STUDENT PORTAL</a>
<a href="" class="button-collapse show-on-large"  data-activates="sidenav"><i class="material-icons">menu</i></a>
<ul class="right hide-on-small-and-down collection" style="margin:0px;border:0px solid transparent">
<div class="container"> 
    <li class="collection-item avatar " style="background: transparent;min-height:70px;">
    <a href="" class="dropdown-toggle info-number" data-toggle="dropdown" area-expanded="false">
  
   
    <div class="action-btn">
        <a href="" class="badge badge-small  white-text pulse tooltipped" data-tooltip="<?php echo $sql;?> new messages" data-position="left">  <i class="material-icons white teal-text circle">notifications_active  </i><span class="badge  white blue-text"><?php echo $sql;?></span></a>
    </div>
    </a>
    </li>
    </div>
    

</ul>
            </div>
        </div>
    </nav>
    
    <ul class="side-nav" id="sidenav"><!--to fix side bar add fixed class-->
     <li>
         <div class="user-view">
             <div class="background">
             <?php
$sql = "SELECT * FROM student_registration";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){

    while($row = mysqli_fetch_array($result)){
        $id =$row['ID'];
        $sqlImg ="SELECT * FROM profileimg WHERE studentid='$id'";
        $resultImg = mysqli_query($conn, $sqlImg);
        while($rowImg= mysqli_fetch_array($resultImg)){
             echo "<div>";
             if(  $resultImg['status']==0){
                 echo "photo available";
                echo "<img src='".$id.".png' class='circle responsive-img'>";
            
             }else{
                 
                echo'<img src="user.png" alt="" class="circle responsive-img">';
             }
             echo $row['username'];
             echo "</div>";
        }

    }
}else {
    echo "There are no users yet!";
}?>
            
             </div>
             
               
             
             <!--show the name of user and emailid-->
             <span class="black-text name"><?php
             
             if(!isset( $_SESSION["username"])){
                 echo "You are not logged in!";
             }
             else{
                 echo  $_SESSION["username"];
             }
             
             
            ?></span><br>
             <span class="black-text email"><?php
            
             if(!isset( $_SESSION["username"])){
                 echo "You are not logged in!";
             }
             else{
                $sql="SELECT EMAIL FROM student_registration WHERE USERNAME='$_SESSION[username]'";
                $data=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_array($data)){
                 echo  $row['EMAIL'];}
             }?></span>
         </div>
     </li>
     <li>
         <i class="material-icons teal-text">home</i>Home</a>
     </li>
     <div class="divider"></div>
     <li>
            <i class="material-icons teal-text">school</i>Academics</a>
        </li>
        <div class="divider"></div>
        <li>
             <a href="">   <i class="material-icons teal-text">local_library</i>Library</a>
            </li>
            <div class="divider"></div>
            <li>
                <i class="material-icons teal-text">rate_review </i>upload
              
            
            
            
                   
                </li>
                <div class="divider"></div>
                <li>
                        <a href="pricing.php"><i class="material-icons teal-text">trending_up</i>Payment</a>
                    </li>
                    <div class="divider"></div>
                    <li>
                         <a href="logout.php">   <i class="material-icons teal-text" name="logout">exit_to_app</i>Logout</a>
                        

                        </li>
                        <div class="divider"></div>

    </ul>
        