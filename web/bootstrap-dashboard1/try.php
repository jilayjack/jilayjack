<!DOCTYPE html>
<html lang="en">
  <head>

<script src="../bootstrapdemo/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../css1/bootstrap.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="../css1/style.css" >
    <link rel="stylesheet" href="../css1/font-awesome/css/font-awesome.css" >
    <link rel="shortcut icon" href="../css1/ico/favicon.ico">
  
<!-- Latest compiled and minified JavaScript -->
<script src="../bootstrapdemo/js/bootstrap.min.js" ></script>
 

  </head>
<body>
<?php 
//include 'nav.php';
//include 'side.php';
?>
<?php

?>
<!-- 
	Upper Header Section 
-->
	<!--
	Featured Products
	-->
		<div class="well well-small">
		  <h3><a class="btn btn-mini pull-right" href="products.html" title="View more">VIew More<span class="icon-plus"></span></a> Featured Products  </h3>
		  <hr class="soften"/>
		  <div class="row-fluid">
		  <ul class="thumbnails">
			<li class="span4">
			  <div class="thumbnail">
				
				
				
				<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				
				<?php
require 'classdemoo.php';
$obj=new database();
$result=$obj-> getproducts();

while($row=$result->fetch_assoc())
{

echo '<li class="span3">';
echo '<div class="product-box">';
echo '<p><a href="usrdisplay1.php?id='.$row["pk_product_id"].'">'.'<img src="'.$row["product_image1"].'"  alt="" height="50px" width="50px" /></a></p>';
echo '<a class="title" href="usrdisplay1.php?id='.$row["pk_product_id"].' ">'.$row["product_name"].'</a></p>';
//echo '<a class="category" href="usrdisplay1.php?id='.$row["p_id"].'" >'.$row["cat_name"].'</a></p>';
echo '<p class="price">'.$row["product_prize"].'</p>';
echo '<a href="#" class="btn btn-succes">.add to cart.</a>';
														
}echo '</div>';
?>
</body>
</html>