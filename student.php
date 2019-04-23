

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

include"includes/header.php";

?>


<?php
include"includes/navbar.php";
?>
 
        <!--this is main content area-->
           <!--sidenav finished--><div class="main">

    <div class="row">
      <!--this is main content area-->
      <?php
      if(isset( $_SESSION['student_id'])){
        echo "<script>alert('You are logged in');</script>";
      }
      ?>
     
     <div class="col l3 m3 s12 center">
            <div class="card-panel center">
                    <h5>PLACEMENTS <a href=""><span><i class="material-icons tiny">open_in_new</i></span></a></h5>
                    
                        <div class="container" style="position:relative"><!--to make the chart responsive-->
                            <canvas id="mychart1" width="400" height="200"  aria-label="Hello Deepak" role="img"><!--accessible chart-->
                          
                            </canvas>
                            </div>
            </div>
           

        </div>
          <div class="col l3 m3 s12 center">
                <div class="card-panel center">
                        <h5>PERFORMANCE<a href=""><span><i class="material-icons tiny">open_in_new</i></span></a></h5>
                        <div class="container" style="position:relative"><!--to make the chart responsive-->
                            <canvas id="mychart2" width="400" height="200"  aria-label="Hello Deepak" role="img"><!--accessible chart-->
                          
                            </canvas>
                            </div>
                      
                 </div>
               
    
             </div>
            <div class="col l3 m3 s12 center">
                    <div class="card-panel center">
                            <h5>COMPARISION<a href=""><span><i class="material-icons tiny">open_in_new</i></span></a></h5>
                            <div class="container" style="position:relative"><!--to make the chart responsive-->
                                <canvas id="mychart3" width="400" height="200"  aria-label="Hello Deepak" role="img"><!--accessible chart-->
                              
                                </canvas>
                                </div>
                    </div>
  
   
       
                
    </div>
    <div class="col l3 m3 s12" >
            <?php
            include"includes/sidebar.php";
            ?>

    </div>
   
     <!--time line-->
     <div class="col l3 m3 s12">
                <div class="card-panel">
                <ul class="collection with-header">
                            <li class="collection-header blue">
                                <h5 class="white-text">TIMELINE</h5>
                            </li>
                 </ul>
                 <div class="main-timeline">
                 <div class="timeline">
                       <span class="icon fa fa-globe">
                       <a href="time.pdf" class="timeline-content">
                       <h3 class="title">TIME TABLE</h3>
                       <p class="description">
                       click here to download your current semester timetable
                       </p>
                       
                       
                       </a>
                       </span>
                 
                 </div>
                 <div class="timeline">
                       <span class="icon fa fa-rocket">
                       <a href="" class="timeline-content" id="con">
                       <h3 class="title">MID SEMESTER PROGRAMME</h3>
                       <p class="description">
                      
                       </p>
                       click here to download your end semester programme
                       
                       </a>
                       </span>
                 
                 </div>
                 <div class="timeline">
                       <span class="icon fa fa-edit">
                       <a href="" class="timeline-content" id="con2">
                       <h3 class="title">END SEMESTER PROGRAMME</h3>
                       <p class="description">
                     click here to download your end semester programme
                       </p>
                       
                       
                       </a>
                       </span>
                 
                 </div>
                 <div class="timeline">
                       <span class="icon fa fa-cog">
                       <a href="" class="timeline-content">
                       <h3 class="title">FEE STRUCTURE</h3>
                       <p class="description">
                       click here to download the fee structure of current year
                       </p>
                       
                       
                       </a>
                       </span>
                 
                 </div>
                 
                 
                 </div>
                  </div>
      </div>
   
    <!--time line finished-->
   
 

  
    </div>
  
   
    
    <div class="col l12 m12 s6">
                <div class="card-panel">
                <ul class="collection with-header">
                            <li class="collection-header blue">
                                <h5 class="white-text">HALL OF BOOKS</h5>
                            </li>
    <?php  
    
         $regs=mysqli_query($conn,"select * from add_books");
         echo "<table class='table table-bordered'>";
         echo"<tr>";
         echo "<th>";echo"BOOK NAME";echo"</th>";
         echo "<th>";echo"BOOKS IMAGE";echo"</th>";
         echo "<th>";echo"AUTHOR NAME";echo"</th>";
       
         echo "<th>";echo"PUBLICATION NAME";echo"</th>";
       
         echo "<th>";echo"PRICE";echo"</th>";
         echo "<th>";echo"BOOKS QUANTITY";echo"</th>"; 
         echo "<th>";echo"AVAILABLE QUANTITY";echo"</th>";
  
         echo"</tr>";
         while($row=mysqli_fetch_array($regs))
         {  
            echo "<tr>";
            echo "<td>";echo $row['BOOK_NAME'];echo"</td>";
            echo "<td>"; ?><img src="<?php echo 'DBMS.jpg';?>" alt="photo not available" height="100" width="100"/> <?php echo"</td>";
            echo "<td>";echo $row['AUTHOR NAME'];echo"</td>";
          
            echo "<td>";echo $row['PUBLICATION NAME'];echo"</td>";
            
            echo "<td>";echo $row['PRICE'];echo"</td>";
            echo "<td>";echo $row['BOOKS QUANTITY'];echo"</td>"; 
            echo "<td>";echo $row['AVAILABLE_QUANTITY'];echo"</td>"; 
        

            echo "</tr>";

         }
         echo "</table>";
        
    ?>
    </div>
    </div>
    </div>
    </div>
   
    
    <!--book stock finished-->
   
         <!--this is side bar area-->
     
    <div class="fixed-action-btn">
        <a href="write.php" class="btn-floating btn-large red white-text pulse tooltipped" data-tooltip="Send your query" data-position="left"><i class="material-icons">edit</i></a>
    </div>
    


        <?php
include"includes/footer.php";
?>
  <script>
            var x = document.getElementById('mychart1').getContext('2d');
            var chart = new Chart(x,{
              type:'line',
              data:{
                labels:['SEM1','SEM2','SEM3'],
                datasets:[{
                  label:"MY FIRST CHART",
          
                  data:[94,48,80],
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
                labels:['SEM1','SEM2','SEM3'],
                datasets:[{
                  label:"MY FIRST CHART",
          
                  data:[94,48,80],
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
              type:'line',
              data:{
                labels:['SEM1','SEM2','SEM3'],
                datasets:[{
                  label:"MY FIRST CHART",
          
                  data:[94,48,80],
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













    