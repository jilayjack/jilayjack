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
    <th>delete</th>
<th>email id</th>
<th>name </th>
<th>address </th>
<th>mobile no </th>
<th>gender </th>
<th> image</th>
<th>Action</th>

</thead>
<?php 
require 'database.php';
      $obj=new useradmin;
       $result=$obj->displayuser();
if($result->num_rows>0){
    while($row =$result->fetch_assoc())
    {
       echo '<tr>';
       echo '<td>' ?> <input type="checkbox" name="chk[]" value="<?php echo $row["pk_email_id"]; ?>"><?php '</td>';
       echo '<td>'. $row["pk_email_id"].'</td>';
       echo '<td>'. $row["uname"].'</td>';
         echo '<td>'. $row["user_address"]. '</td>';
         echo '<td>'. $row["user_mobile_no"].'</td>';
         echo '<td>'. $row["user_gender"].'</td>';
             //echo '<td> <img src="'.$row["product_image1"].'"> </td>';
      
     echo  '<td>'?> <img src="<?php echo $row["user_profile_pic"];?>" height="100" width="100"><?php echo '</td>';
     echo '<td><a href="userdelete.php?id='.$row["pk_email_id"].'">delete<span class="glyphicon glyphicon-trash "></span> </a></td>';
      echo '</tr>';  
    }
}

?>
</table>
<center><input type="submit" class="btn btn-success" name="btnadd" value="delete" ></center>
</form>
<center>
<a href="productinsert.php" class="btn btn-success">Insert</a>

</body>
</html>