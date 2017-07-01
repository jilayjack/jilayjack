<html>
<head>

 
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
<th>Product Name</th>
<th>Product_price</th>

<th>Producat_image</th>
<th>Action</th>

</thead>
<?php 
require 'database.php';
      $obj=new productadmin;
       $result=$obj->displayproduct();
if($result->num_rows>0){
    while($row =$result->fetch_assoc())
    {
       echo '<tr>';
       echo '<td>' ?> <input type="checkbox" name="chk[]" value="<?php echo $row["pk_product_id"]; ?>"><?php '</td>';
       echo '<td>'. $row["product_name"].'</td>';
         echo '<td>'. $row["product_prize"]. '</td>';
       //echo '<td> <img src="'.$row["product_image1"].'"> </td>';
      
     echo  '<td>'?> <img src="<?php echo $row["product_image1"];?>" height="100" width="100"><?php echo '</td>';
      
       echo '<td><a href="viewmore.php?id='.$row["pk_product_id"].'"> view more<span class="glyphicon glyphicon-pencil "></span></a>|
       <a href="productdel.php?id='.$row["pk_product_id"].'">delete<span class="glyphicon glyphicon-trash "></span> </a>|
       <a href="productupdate.php?id='.$row["pk_product_id"].'"> Update<span class="glyphicon glyphicon-pencil "></span></a> </td>';
   
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