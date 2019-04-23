


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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--import Google icon font-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!--import materialize min.css-->
    <link type="text/css" rel="stylesheet" href="materialize.min.css" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="main.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script  src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js" ></script>

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN</title>
    <!--not the wrap the page content-->
    <style>
        header,.main,footer{
            padding-left:250px;
        }
        @media only screen and ( max-width:992px){
            header,.main,footer{
                padding-left:0;
            }
        }
        
    </style>
</head>


<body>
    <!--navigation bar-->
    <nav class="navbar-fixed blue">
        <div class="nav wrapper">
            <div class="container">
<a href="" class="brand-logo center"><i class="material-icons white-text" style="font-size:48px">people</i>Admin</a>
<a href="" class="button-collapse show-on-large"  data-activates="sidenav"><i class="material-icons">menu</i></a>
<ul class="right hide-on-small-and-down collection" style="margin:0px;border:0px solid transparent">
    <li class="collection-item avatar " style="background: transparent;min-height:60px;">
        <i class="material-icons white blue-text circle">notifications_active</i>

</ul>
            </div>
        </div>
    </nav>
    
    <ul class="side-nav" id="sidenav"><!--to fix side bar add fixed class-->
     <li>
         <div class="user-view">
             <div class="background">
            
                 <img src="deepak.jpg" alt="" class="circle responsive-img"><!--class is important-->
             </div>
             
               
             
             <!--show the name of user and emailid-->
             <span class="white-text name">
             </span>
             <span class="white-text email">deepaknit028@gmail.com</span>
         </div>
     </li>
     <li>
         <i class="material-icons blue-text">home</i>Home</a>
     </li>
     <div class="divider"></div>
     <li>
            <i class="material-icons blue-text">school</i>Academics</a>
        </li>
        <div class="divider"></div>
        <li>
             <a href="addbook.php">   <i class="material-icons blue-text">local_library</i>Library</a>
            </li>
            <div class="divider"></div>
            <li>
                    <a href=""><i class="material-icons blue-text">rate_review</i>Query</a>
                </li>
                <div class="divider"></div>
                <li>
                        <a href=""><i class="material-icons blue-text">trending_up</i>Analytics</a>
                    </li>
                    <div class="divider"></div>
                    <li>
                            <a href="adminlogin.php"><i class="material-icons blue-text">exit_to_app</i>Logout</a>
                        </li>
                        <div class="divider"></div>

    </ul>
  
    <!--sidenav finished--><div class="main">


    <div class="row">
            <div class="col l6 m6 s12">
            <div class="card-panel center">
                    <ul class="collection with-header">
                            <li class="collection-header blue">
                                <h5 class="white-text">Recent Posts</h5>
                            </li>
                            <li class="collection-item">
                            show the messages here.
                                
                             <a href="">   <span><i class="material-icons tiny blue-text text-darken-4">edit</i>Edit</span>
                                <span><i class="material-icons tiny red-text text-darken-4">close</i>Delete</span>
                                <span><i class="material-icons tiny green-text text-darken-4">share</i>Share</span></a>
                            </li>
                            <li class="collection-item">
                                show the messages here.
                                
                             <a href="">   <span><i class="material-icons tiny blue-text text-darken-4">edit</i>Edit</span>
                                <span><i class="material-icons tiny red-text text-darken-4">close</i>Delete</span>
                                <span><i class="material-icons tiny green-text text-darken-4">share</i>Share</span></a>
                            </li>
                            <li class="collection-item">
                            show the messages here.
                                
                             <a href="">   <span><i class="material-icons tiny blue-text text-darken-4">edit</i>Edit</span>
                                <span><i class="material-icons tiny red-text text-darken-4">close</i>Delete</span>
                                <span><i class="material-icons tiny green-text text-darken-4">share</i>Share</span></a>
                            </li>
                            <li class="collection-item">
                                show the messages here.
                                
                             <a href="">   <span><i class="material-icons tiny blue-text text-darken-4">edit</i>Edit</span>
                                <span><i class="material-icons tiny red-text text-darken-4">close</i>Delete</span>
                                <span><i class="material-icons tiny green-text text-darken-4">share</i>Share</span></a>
                            </li>
                           
                        </ul>
    </div>
              
            </div>
            <div class="col l6 m6 s12">
            <div class="card-panel center">
                    <ul class="collection with-header">
                            <li class="collection-header blue">
                                <h5 class="white-text">Recent Queries</h5>
                            </li>
                            <li class="collection-item">
    </h6> show the queries here.</h6>
                                
                              <a href="">  <span><i class="material-icons tiny blue-text text-darken-4">done</i>Approve</span>
                                <span><i class="material-icons tiny red-text text-darken-4">close</i>Remove</span></a>
                             
                            </li>
                            <li class="collection-item">
    </h6>  show the queries here.</h6>
                                
                              <a href="">  <span><i class="material-icons tiny blue-text text-darken-4">done</i>Approve</span>
                                <span><i class="material-icons tiny red-text text-darken-4">close</i>Remove</span></a>
                             
                            </li>
                            <li class="collection-item">
    </h6> show the queries here.</h6>
                                
                              <a href="">  <span><i class="material-icons tiny blue-text text-darken-4">done</i>Approve</span>
                                <span><i class="material-icons tiny red-text text-darken-4">close</i>Remove</span></a>
                             
                            </li>
                            <li class="collection-item">
    </h6>  show the queries here.</h6>
                                
                              <a href="">  <span><i class="material-icons tiny blue-text text-darken-4">done</i>Approve</span>
                                <span><i class="material-icons tiny red-text text-darken-4">close</i>Remove</span></a>
                             
                            </li>
                            
                         
                           
                        </ul>
    </div>
            </div>
        </div>
         <!--for showing data of registered students-->
         
            <div class="col l6 m6 s12">
                <div class="card-panel">
                <ul class="collection with-header">
                            <li class="collection-header blue">
                                <h5 class="white-text">REGISTERED STUDENTS</h5>
                            </li>
    <?php
         $regs=mysqli_query($conn,"select * from student_registration");
         echo "<table class='table table-bordered'>";
         echo"<tr>";
         echo "<th>";echo"FIRSTNAME";echo"</th>";
         echo "<th>";echo"LASTNAME";echo"</th>";
         echo "<th>";echo"USERNAME";echo"</th>";
       
         echo "<th>";echo"EMAIL";echo"</th>";
         echo "<th>";echo"CONTACT";echo"</th>";
         echo "<th>";echo"SEMESTER";echo"</th>";
         echo "<th>";echo"CATEGORY";echo"</th>"; 
         echo "<th>";echo"STATUS";echo"</th>";
         echo "<th>";echo"APPROVE";echo"</th>";
         echo "<th>";echo" NOT APPROVE";echo"</th>";
         echo"<tr>";
         while($row=mysqli_fetch_array($regs))
         {  
            echo "<tr>";
            echo "<td>";echo $row['FIRSTNAME'];echo"</td>";
            echo "<td>";echo $row['LASTNAME'];echo"</td>";
            echo "<td>";echo $row['USERNAME'];echo"</td>";
          
            echo "<td>";echo $row['EMAIL'];echo"</td>";
            echo "<td>";echo $row['CONTACT'];echo"</td>";
            echo "<td>";echo $row['SEMESTER'];echo"</td>";
            echo "<td>";echo $row['CATEGORY'];echo"</td>"; 
            echo "<td>";echo $row['STATUS'];echo"</td>"; 
            echo "<td>";?><a href="approve.php?id=<?php echo $row['ID'];?>">Approve</a><?php echo"</td>"; //for link complete php and start php
            echo "<td>";?><a href="notapprove.php?id=<?php echo $row['ID'];?>">Not Approve</a><?php echo"</td>"; 

            echo "<tr>";

         }
         echo "</table>";

    ?>
    </div>
    </div>
    </div>
    </div>
   
    <!--for sending messages icons-->
    <div class="fixed-action-btn">
        <a href="send_message.php" class="btn-floating btn-large red white-text pulse tooltipped" data-tooltip="Send Messages" data-position="left"><i class="material-icons" title="send messages">edit</i></a>
    </div>

    <?php
include"includes/footer.php";

?>
   
    <!--import jquery before materialize .js-->
    <script  type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="materialize.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.button-collapse').sideNav();
        });
        function loadSomething('loader.html'){
            showLoading();
            $.ajax('loader.html').complete(function(data){
                hideLoading();
                console.log(data);
            });
        }

        }
    </script>
    <script>
            var x = document.getElementById('mychart1').getContext('2d');
            var chart = new Chart(x,{
              type:'line',
              data:{
                labels:['2011','2014','2016','2017'],
                datasets:[{
                  label:"MY FIRST CHART",
          
                  data:[89,94,48,80],
                  backgroundColor:['#00ffee'],
          
                  borderColor:'green',
                    borderWidth: 1
                }]
          
              },
              options: {
                     scales: {
                         yAxes: [{
                             ticks: {
                                 beginAtZero:true
                             }
                         }]
                     },
                     tooltips:{
                       mode:'nearest'
          
                     },
                     animation:{
                                duration:5000,
                                easing:'easeInOutElastic',
                                animateRotate:'100degrees'
                     }
                 }
            });
            var x = document.getElementById('mychart2').getContext('2d');
            var chart = new Chart(x,{
              type:'bar',
              data:{
                labels:['2011','2014','2016','2017'],
                datasets:[{
                  label:"MY FIRST CHART",
          
                  data:[89,94,48,80],
                  backgroundColor:['#00ffee'],
          
                  borderColor:'green',
                    borderWidth: 1
                }]
          
              },
              options: {
                     scales: {
                         yAxes: [{
                             ticks: {
                                 beginAtZero:true
                             }
                         }]
                     },
                     tooltips:{
                       mode:'nearest'
          
                     },
                     animation:{
                                duration:5000,
                                easing:'easeInOutElastic',
                                animateRotate:'100degrees'
                     }
                 }
            });
            var x = document.getElementById('mychart3').getContext('2d');
            var chart = new Chart(x,{
              type:'pie',
              data:{
                labels:['2011','2014','2016','2017'],
                datasets:[{
                  label:"MY FIRST CHART",
          
                  data:[89,94,48,80],
                  backgroundColor:['#00ffee'],
          
                  borderColor:'green',
                    borderWidth: 1
                }]
          
              },
              options: {
                     scales: {
                         yAxes: [{
                             ticks: {
                                 beginAtZero:true
                             }
                         }]
                     },
                     tooltips:{
                       mode:'nearest'
          
                     },
                     animation:{
                                duration:5000,
                                easing:'easeInOutElastic',
                                animateRotate:'100degrees'
                     }
                 }
            });
            </script>
          
</body>
</html>