<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script><!--put js file before bootstrap-->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!--font icon-->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="master.css">
  <title>Document</title>
</head>
<body>
  <!--NAVIGATION-->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
    <div class="container-fluid">
      <a class="navbar-user" href="#">  <i class="fa fa-user" style="font-size:40px"></i> <?php
      if(isset($_POST["login"])){
        echo " Welcome $_POST[username] ";
      }
      ?></a>
      <i class="fa fa-bell" style=font-size:36px"></i>
      <div class="navigation">
  <input type="checkbox" class="navigation_checkbox" id="navi_toogle">
  <label for="navi_toogle" class="navigation_button"><!--for empty-->
  <span class="navigation_icon"><i class="fa fa-bars"></span>
  </label>
  <div class="navigation_background">&nbsp;</div>
  <nav class="navigation_nav">
    <ul class="navigation_list">
    <li class="navigation_item"><a href="#" class="navigation_link">ACADEMICS</a></li><br>
      <li class="navigation_item"><a href="#" class="navigation_link">LIBRARY</a></li><br>
        <li class="navigation_item"><a href="#" class="navigation_link">EXAM</a></li><br>
          <li class="navigation_item"><a href="#" class="navigation_link">LOGOUT</a></li><br>
            <li class="navigation_item"><a href="#" class="navigation_link">ADMIN</a></li></ul>
  </nav>
</div>
    </div>
</div>
</nav><br>
<div class="title_right">
  <div class="col-md5 col-sm-5 col-xs-12 form-group top search" style="float:right">
  <div class="box" >
    <form>
    <input  id="s1" type="text" name="" placeholder="Search for..">
    <input  id="s2" type="submit" name="" placeholder="Search">
  </form>
</div>


</body>
</html>
