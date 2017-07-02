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
<form action="multidelbill.php" method="post">

<table class="table">
<thead>
<th>delete</th>
<th>user email</th>
<!--<th>user name</th>-->
<th>Product</th>

<th>bill amount</th>
<th>date</th>
<th>address</th>
<th>payment type</th>

</thead>
<?php 
require 'database.php';
      $obj=new billadmin;
       $result=$obj->displaybill();

if($result->num_rows>0){
    while($row =$result->fetch_assoc())
    {
       echo '<tr>';
       echo '<td>' ?> <input type="checkbox" name="chk[]" value="<?php echo $row["pk_bill_no"]; ?>"><?php '</td>';
       echo '<td>'. $row["fk_email_id"].'</td>';
      // echo '<td>'. $row["uname"].'</td>';
                echo '<td>'. $row["product_name"]. '</td>';
         echo '<td>'. $row["bill_amount"].'</td>';
         echo '<td>'. $row["bill_date"].'</td>';
         echo '<td>'. $row["bill_shipping_address"].'</td>';
         echo '<td>'. $row["bill_payment_type"].'</td>';
       //echo '<td> <img src="'.$row["product_image1"].'"> </td>';  
      echo '</tr>';  
    }
}

?>
</table>
<center><input type="submit" class="btn btn-success" name="btnadd" value="delete" ></center>
</form>
<center>
</body>
</html>