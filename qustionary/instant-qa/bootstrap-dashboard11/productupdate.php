<?php session_start();
 ?>
<html>
<head>
<script src="js/jquery-3.2.1.min.js"></script>
<!-- latest complied and minified css-->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!--optional theme-->
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<!-- latest complied and minified javascript-->
<script src="js/bootstrap.min.js"></script>
</head>
<?php include 'nav2.php';
include 'side.php';?>
<body >
<h1><center>Upadte product</h1></center><br><br>
<?php
       $_pid=$_GET["id"];
     require 'database.php';
      $obj=new productadmin;
       $result=$obj->UpdateProduct($_pid);
     $row=$result->fetch_assoc();
       $_pid=$row["pk_product_id"];
 $_name=$row["product_name"];
 $_price=$row["product_prize"];
 $_menuf=$row["product_mfg"];
 $_color=$row["product_color"];
  $_pimg1=$row["product_image1"];
    $_pimg2=$row["product_image2"];
      $_pimg3=$row["product_image3"];
 $_warr=$row["product_warrenty"];
 $_soh=$row["product_SOH"];
 $_desc=$row["product_detail"];
$_cat=$row["fk_cat_id"];

?>
<form method="post" action="productupdate1.php "  enctype="multipart/form-data" >

<table class="table">

<tr><td>product Name<td><input type="text" name="txtname" value="<?php echo $_name; ?>"></tr>
<tr><td>product price<td><input type="text" name="txtprice"  value="<?php echo $_price; ?>"></tr>
<tr><td>manufacturer<td><input type="text" name="txtmanu"  value="<?php echo $_menuf; ?>"></tr>
<tr><td>product color<td><input type="text" name="txtcolor"  value="<?php echo $_color; ?>"></tr>
<tr><td>Image1<td><img src="<?php echo $_pimg1;?>"height="100" width="100"><input type="file"  name="txtimg1" ></tr>
<tr><td>Image2<td><img src="<?php echo $_pimg2;?>"height="100" width="100"><input type="file" name="txtimg2" ></tr>
<tr><td>Image3<td><img src="<?php echo $_pimg3;?>"height="100" width="100"><input type="file"  name="txtimg3" ></tr>
<tr><td>warranty<td>    <input type="text" name="txtwarranty" value="<?php echo $_warr; ?>"></tr>
<tr><td>stock_on_hand<td><input type="number" name="txtstock" value="<?php echo $_soh; ?>"></tr>
<tr><td>description<td><input type="text" name="txtdesc"  value="<?php echo $_desc; ?>"></tr>
<tr><td>category<td>
<select name="fk_catid">
<?php

       $result=$obj-> getcategory();
if($result->num_rows > 0)
{
    while($rows=$result -> fetch_assoc())
    {   
        echo '<option value='. $rows["pk_cat_id"].'>'. $rows["cat_name"] .'</option>';
       // if($_cat=="fk_catid"){echo "selected";}
    }
}
?>
</select></tr>
</tr>
<tr><td colspan="2"><center><input type="submit" class="btn btn-success" name="btnadd" value="update" ></center></tr>
<?php
$_SESSION["img1"]=$_pimg1;
$_SESSION["img2"]=$_pimg2;
$_SESSION["img3"]=$_pimg3;
$_SESSION["id"]=$_pid;
?>
</table>
</form>
</body>
</html>
