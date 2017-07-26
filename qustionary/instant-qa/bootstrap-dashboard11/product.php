<html>
<head>
<script src="../js/jquery-3.2.1.min.js"></script>
<!-- latest complied and minified css-->
<link rel="stylesheet" href="../css/bootstrap.min.css">
<!--optional theme-->
<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
<!-- latest complied and minified javascript-->
<script src="../js/bootstrap.min.js"></script>
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Dashboard by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Font Awesome CDN-->
    <!-- you can replace it by local Font Awesome-->
    <script src="https://use.fontawesome.com/99347ac47f.js"></script>
    <!-- Font Icons CSS-->
    <link rel="stylesheet" href="https://file.myfontastic.com/da58YPMQ7U5HY8Rb6UxkNf/icons.css">
<?php
include 'nav2.php';
include 'side.php';


?>
</head>
<body>
<form action="mutidel.php" method="post">

<table class="table">
<thead>
<th>Question_Title</th>
<th>Question_Description</th>

<th>Subject_name</th>
<th>Action</th>

</thead>
<?php 
require 'database.php';
      $obj=new productadmin;
       $result=$obj->displayproduct();
   while( $row =$result->fetch_assoc())
   {
    
   
       echo '<tr>';
       echo '<td>'. $row["question_title"].'</td>';
         echo '<td>'. $row["question_desc"]. '</td>';
       //echo '<td> <img src="'.$row["product_image1"].'"> </td>';
        echo '<td>'. $row["subject_name"]. '</td>';
       
    
      
       echo '<td><a href="slide/viewmore1.php?id='.$row["question_id"].'"> view more<span class="glyphicon glyphicon-pencil "></span></a>
       </span></a> </td>';
   //<a href="productdel.php?id='.$row["question_id"].'">delete<span class="glyphicon glyphicon-trash "></span> </a>|
    //   <a href="productupdate.php?id='.$row["pk_product_id"].'"> Update<span class="glyphicon glyphicon-pencil ">
      echo '</tr>';  
   }
    


?>
</table>
</form>
<center>

</body>
</html>