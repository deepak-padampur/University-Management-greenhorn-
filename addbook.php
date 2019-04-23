<?php

include"connection.php";
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
    <link rel="icon" href="images/logo.png" type="image/gif" sizes="16x16">
    <title>LIBRARY MANAGEMENT SYSTEM</title>
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
            <a href="" class="brand-logo center"><i class="material-icons white-text" style="font-size:48px">local_library</i>LIBRARY MANAGEMENT</a>
<a href="" class="button-collapse show-on-large"  data-activates="sidenav"><i class="material-icons">menu</i></a>

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
             <span class="white-text name">DEEPAK</span>
             <span class="white-text email">deepaknito28@gmail.com</span>
         </div>
     </li>
     <li>
         <i class="material-icons blue-text">home</i>Home</a>
     </li>
     <div class="divider"></div>
     <li>
            <i class="material-icons blue-text">school</i>Add Books</a>
        </li>
        <div class="divider"></div>
        <li>
             <a href="#form3">   <i class="material-icons blue-text">local_library</i>issue book</a>
            </li>
            <div class="divider"></div>
            <li>
                    <a href=""><i class="material-icons blue-text">rate_review</i>Query</a>
                </li>
                <div class="divider"></div>
                <li>
                        <a href="#form2"><i class="material-icons blue-text">trending_up</i>BOOK STOCK</a>
                    </li>
                    <div class="divider"></div>
                  

    </ul>
    <!--sidenav finished-->
  
    <div class="row">
            <div class="col l12 m12 s12">
             
                    <ul class="collection with-header">
                            <li class="collection-header blue">
                                <h5 class="white-text">Add Books</h5>
                            </li>
                            <!--form goes here-->
                            <section class="section-book" >
   <div class="row">
     <div class="register">
       <div class="register_form">
         <form action=" "  method="post" class="form" id="form1" enctype="multipart/form-data">  <!--this is necessary of insertion of data i.e image type data-->
           <div class="form_group">
             <input type="text" class="form_input" placeholder="BOOKNAME" id="bname" name="bookname" required>
             <label for="bname" class="form_label"  >BOOKNAME</label>
           </div>
           <div class="form_group">
             <input type="file" class="form_input" placeholder="BOOK_IMAGE" id="img"  name="bookimage" required>
             <label for="img" class="form_label">BOOK_IMAGE</label>
           </div>
           <div class="form_group">
             <input type="text" class="form_input" placeholder="AUTHOR NAME" id="aname" name="authorname"required>
             <label for="aname" class="form_label">AUTHOR NAME</label>
           </div>
           <div class="form_group">
             <input type="text" class="form_input" placeholder="PUBLICATION NAME" id="pname" name="publicationname" required>
             <label for="pname" class="form_label">PUBLICATION NAME</label>
           </div>
           <div class="form_group">
             <input type="date" class="form_input" placeholder="BOOK PURCHASE DATE" id="bpd" name="bpd"required>
             <label for="bpd" class="form_label">BOOK PURCHASE DATE</label>
           </div>
           <div class="form_group">
             <input type="text" class="form_input" placeholder="BOOOK PRICE" id="bp" name="bookprice" required>
             <label for="bp" class="form_label">BOOK PRICE</label>
           </div>
           <div class="form_group">
             <input type="text" class="form_input" placeholder="BOOK QUANTITY" id="bq" name="bookquantity" required>
             <label for="bq" class="form_label">BOOK QUANTITY</label>
           </div>
           <div class="form_group">
             <input type="text" class="form_input" placeholder="AVAILABLE_QUANTITY" id="aq" name="availablequantity" required>
             <label for="aq" class="form_label">AVAILABLE_QUANTITY</label>
           </div>
          


           <div class="form_group">
             <button class="btn btn--green" name="insert">Insert Book Details</button>
           </div>
    
         </form> </div>

     </div>
   </div>
</section>
                            </ul>
                            </div>
                            </div>

<!--issue book-->

<div class="row" id="form3">
            <div class="col l12 m12 s12">
             
                    <ul class="collection with-header">
                            <li class="collection-header blue">
                                <h5 class="white-text">ISSUE BOOKS</h5>
                            </li>

                            <!--FORM GOES HERE-->
                            <section class="section-book" >
   <div class="row">
     <div class="register">
       <div class="register_form">
         <form action=" "  method="post" class="form" name="issue" enctype="multipart/form-data">  <!--this is necessary of insertion of data i.e image type data-->
          <table>
          <tr>
          <td>

          <select class="form-control selectpicker" name="rn">
          <?php
                 $res=mysqli_query($conn,"SELECT ROLLNUMBER FROM student_registration");
                 while($row=mysqli_fetch_array($res)){
                   echo "<option>";
                   echo $row["ROLLNUMBER"];
                   echo "</option>";

                 }
                 ?>
          </select>
          </td>

           <td>
           <div class="form_group">
             <button class="btn btn--green" name="search2" value="search">SEARCH</button>
           </div>
           </td>
           </tr>
           </table>
           <?php
           if(isset($_POST['search2'])){

            //check for selected value
            $res5=mysqli_query($conn,"SELECT * FROM student_registration WHERE ROLLNUMBER='$_POST[rn]'");
            while($row=mysqli_fetch_array($res5)){
                $FIRSTNAME=$row['FIRSTNAME'];
                $LASTNAME=$row['LASTNAME'];
                $USERNAME=$row['USERNAME'];
                $EMAIL=$row['EMAIL'];
                $CONTACT=$row['CONTACT'];
                $SEMESTER=$row['SEMESTER'];
                $ROLLNUMBER=$row['ROLLNUMBER'];
               $_SESSION['ROLLNUMBER']= $ROLLNUMBER;//setting the session of user is very very important otherwise value will not be inserted into database.
               $_SESSION['USERNAME']=$USERNAME;


            }
             ?>
                  <div class="form_group">
             <input type="text" class="form_input" placeholder="ROLLNUMBER" id="rname" name="rollnumber" value="<?php echo $ROLLNUMBER;?>" disabled >
             <label for="rname" class="form_label"  > ROLLNUMBER</label>
           </div>
           <div class="form_group">
             <input type="text" class="form_input" placeholder="STUDENT NAME" id="nm"  name="name" value="<?php echo $FIRSTNAME.' ' .$LASTNAME;?>" required>
             <label for="nm" class="form_label">STUDENT NAME</label>
           </div>
           <div class="form_group">
             <input type="text" class="form_input" placeholder="SEMESTER" id="sem" name="semester" value="<?php echo $SEMESTER;?>"required>
             <label for="sem" class="form_label">SEMESTER</label>
           </div>
           <div class="form_group">
             <input type="text" class="form_input" placeholder="CONTACT NUMBER" id="con" name="contact" value="<?php echo $CONTACT;?>" required>
             <label for="con" class="form_label">CONTACT NUMBER</label>
           </div>
           <div class="form_group">
             <input type="text" class="form_input" placeholder="EMAIL" id="email" name="emailid" value="<?php echo $EMAIL;?>" required>
             <label for="email" class="form_label">EMAIL ID</label>
           </div>
           <select class="form-control selectpicker" name="bookname">
          <?php
                 $res=mysqli_query($conn,"SELECT BOOK_NAME FROM add_books");
                 while($row=mysqli_fetch_array($res)){
                   echo "<option>";
                   echo $row["BOOK_NAME"];
                   echo "</option>";

                 }
                 ?>
          </select>
         
           <div class="form_group">
             <input type="date" class="form_input" placeholder="ISSUE DATE" id="id" name="id" required>
             <label for="id" class="form_label">ISSUE DATE</label>
           </div>
         
           <div class="form_group">
             <input type="text" class="form_input" placeholder="STUDENT USERNAME" id="sum" name="username1" value="<?php echo $USERNAME;?>" disabled>
             <label for="sum" class="form_label">STUDENT'S USERNAME</label>
           </div>
           <div class="form_group">
             <button class="btn btn--green" name="issue">Issue Book</button>
           </div>
         


             <?php
           }
           ?>
    
         </form>
         <?php
         if(isset($_POST['issue'])){
          
           mysqli_query($conn,"INSERT INTO issue_books
          VALUES('',' $_SESSION[ROLLNUMBER]','$_POST[name]','$_POST[semester]','$_POST[contact]','$_POST[emailid]',
           '$_POST[bookname]','$_POST[id]','',' $_SESSION[USERNAME]')");
           //update book stock
           mysqli_query($conn,"UPDATE add_books SET AVAILABLE_QUANTITY=AVAILABLE_QUANTITY-1 WHERE BOOK_NAME='$_POST[bookname]'");
           
           ?>

                 <?php echo"<script>alert('book issued to $_SESSION[USERNAME] successfully');</script>;"?>
              <?php
        
         }
         
         ?>
         
          </div>

     </div>
   </div>
</section>
                            </ul>
                            </div>
                            </div>
                    
<!--book issue finished-->
<!--RETURN BOOK-->
                       
<div class="row" id="form3">
            <div class="col l12 m12 s12">
             
                    <ul class="collection with-header">
                            <li class="collection-header blue">
                                <h5 class="white-text">RETURN BOOKS</h5>
                            </li>
                            <section class="section-book" >
   <div class="row">
     <div class="register">
       <div class="register_form">
         <form action=" "  method="post" class="form" name="return" enctype="multipart/form-data">  <!--this is necessary of insertion of data i.e image type data-->
          <table class="table table-bordered"> 
          <tr>
          <td>

          <select class="form-control selectpicker" name="rn1">
          <?php
                 $res=mysqli_query($conn,"SELECT ROLLNUMBER FROM issue_books WHERE RETURN_DATE='0000-00-00'");
                 while($row=mysqli_fetch_array($res)){
                   echo "<option>";
                   echo $row["ROLLNUMBER"];
                   echo "</option>";

                 }
                 ?>
          </select>
          </td>

           <td>
           <div class="form_group">
             <button class="btn btn--green" name="search5" value="search">SEARCH</button>
           </div>
           </td>
           </tr>
           </table>
         

                 <?php
                 
                 if(isset($_POST['search5'])){

                  $res=mysqli_query($conn,"SELECT * from issue_books WHERE ROLLNUMBER='$_POST[rn1]'")or die(mysqli_error());
                  echo"<table class='table table-bordered'>";
                  echo"<tr>";
                  echo "<th>";echo"ROLLNUMBER";echo"</th>";
                  echo "<th>";echo"NAME";echo"</th>";
                  echo "<th>";echo"SEMESTER";echo"</th>";
                  echo "<th>";echo"CONTACT";echo"</th>";
                  echo "<th>";echo"EMAIL";echo"</th>";
                  echo "<th>";echo"BOOK NAME";echo"</th>";
                  echo "<th>";echo"ISSUE DATE";echo"</th>"; 
                  echo "<th>";echo"RETURN BOOK";echo"</th>"; 
           
                  echo"</tr>";
                  while($row = mysqli_fetch_array($res))
                  {
                    echo "<tr>";
                    echo "<td>"; echo $row["ROLLNUMBER"]; echo"</td>";
                    echo "<td>"; echo $row["NAME"]; echo"</td>";
                    echo "<td>"; echo $row["SEMESTER"]; echo"</td>";
                     echo "<td>"; echo $row["CONTACT"]; echo"</td>";
                    echo "<td>"; echo $row["EMAIL"]; echo"</td>";
                    echo "<td>"; echo $row["BOOK_NAME"]; echo"</td>";
                    echo "<td>"; echo  $row["ISSUE DATE"]; echo "</td>";
                    echo "<td>";?><a href="return.php">RETURN BOOK</a> <?php echo "</td>";
                     echo "</tr>";
        
                  }
                  echo"</table>";

                 }
                 
                 ?>
                 

           </div>

</div>
</div>
</section>
                            </ul>
              
                            </div>
                            </div>


<!--RETURN BOOK FINISHED-->




    <div class="fixed-action-btn">
        <a href="admin.php" class="btn-floating btn-large red white-text pulse tooltipped" data-tooltip="back" data-position="left"><i class="material-icons">arrow_back</i></a>
    </div>
    <?php
    if(isset($_POST['insert'])){
        $tm=md5(time());
        $fnm=$_FILES['bookimage']['name'];
        $dst="./books_image/".$tm.$fnm;//this is for file searching
        $dst1="books_image/".$tm.$fnm;//this for storing the images into database
        move_uploaded_file($_FILES['bookimage']['tmp_name'],$dst);
        $bn=$_POST['bookname']; 
         $an=$_POST['authorname'];
        $pn= $_POST['publicationname'];
       $date=$_POST['bpd'];
       $price=$_POST["bookprice"];
       $qty=$_POST['bookquantity'];
      $aqty= $_POST['availablequantity'];
        mysqli_query($conn,"insert into add_books values('', '$bn','$dst1','$an','$pn','$date'
       , '$price','$qty','$aqty')");
       
    }
    ?>
     <form action=" "  method="post" class="form" id="form2" enctype="multipart/form-data"> 
      <ul class="collection">
                <li class="collection-item">
                    <h5>Search</h5>
                    <div class="input-field">
                        <input type="text" id="search" name="search" placeholder="search for books.....">
                        <div class="center">
                        <input type="submit" class="btn" value="Search Books" name="search3">
                        </div>
                    </div>
                </li>
            </ul>
            </form>
    <!--for showing the book stock in the library-->
      <!--for showing data of registered students-->
    

      <div class="col l6 m6 s12">
                <div class="card-panel">
                <ul class="collection with-header">
                            <li class="collection-header blue">
                                <h5 class="white-text">HALL OF BOOKS</h5>
                            </li>
                            
    <?php  
        if(isset($_POST['search3'])){
          $regs=mysqli_query($conn,"select * from add_books WHERE BOOK_NAME like('$_POST[search]%')");
          echo "<table class='table table-bordered'>";
          echo"<tr>";
          echo "<th>";echo"BOOK NAME";echo"</th>";
          echo "<th>";echo"BOOK_IMAGE";echo"</th>";
          echo "<th>";echo"AUTHOR NAME";echo"</th>";
        
          echo "<th>";echo"PUBLICATION NAME";echo"</th>";
          echo "<th>";echo"PUCHASE DATE";echo"</th>";
          echo "<th>";echo"PRICE";echo"</th>";
          echo "<th>";echo"BOOKS QUANTITY";echo"</th>"; 
          echo "<th>";echo"AVAILABLE_QUANTITY";echo"</th>";
   
          echo"</tr>";
          while($row=mysqli_fetch_array($regs))
          {  
             echo "<tr>";
             echo "<td>";echo $row['BOOK_NAME'];echo"</td>";
             echo "<td>"; ?><img src="<?php echo $row['BOOK_IMAGE'];?>" alt="photo not available" height="50" width="50"/> <?php echo"</td>";
             echo "<td>";echo $row['AUTHOR NAME'];echo"</td>";
           
             echo "<td>";echo $row['PUBLICATION NAME'];echo"</td>";
             echo "<td>";echo $row['PURCHASE DATE'];echo"</td>";
             echo "<td>";echo $row['PRICE'];echo"</td>";
             echo "<td>";echo $row['BOOKS QUANTITY'];echo"</td>"; 
             echo "<td>";echo $row['AVAILABLE_QUANTITY'];echo"</td>"; 
         
 
             echo "</tr>";
 
          }
          echo "</table>";
        }
    else{
         $regs=mysqli_query($conn,"select * from add_books");
         echo "<table class='table table-bordered'>";
         echo"<tr>";
         echo "<th>";echo"BOOK NAME";echo"</th>";
         echo "<th>";echo"BOOK_IMAGE";echo"</th>";
         echo "<th>";echo"AUTHOR NAME";echo"</th>";
       
         echo "<th>";echo"PUBLICATION NAME";echo"</th>";
         echo "<th>";echo"PUCHASE DATE";echo"</th>";
         echo "<th>";echo"PRICE";echo"</th>";
         echo "<th>";echo"BOOKS QUANTITY";echo"</th>"; 
         echo "<th>";echo"AVAILABLE_QUANTITY";echo"</th>";
  
         echo"</tr>";
         while($row=mysqli_fetch_array($regs))
         {  
            echo "<tr>";
            echo "<td>";echo $row['BOOK_NAME'];echo"</td>";
            echo "<td>"; ?><img src="<?php echo $row['BOOK_IMAGE'];?>" alt="photo not available" height="50" width="50"/> <?php echo"</td>";
            echo "<td>";echo $row['AUTHOR NAME'];echo"</td>";
          
            echo "<td>";echo $row['PUBLICATION NAME'];echo"</td>";
            echo "<td>";echo $row['PURCHASE DATE'];echo"</td>";
            echo "<td>";echo $row['PRICE'];echo"</td>";
            echo "<td>";echo $row['BOOKS QUANTITY'];echo"</td>"; 
            echo "<td>";echo $row['AVAILABLE_QUANTITY'];echo"</td>"; 
        

            echo "</tr>";

         }
         echo "</table>";
        }
    ?>
    </div>
    </div>
    </div>
    </div>
   
    
    <!--book stock finished-->
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
    </script>
    </body>
    </html>