<html>
<head>
<script src="../../bootstrapdemo/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../../bootstrapdemo/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="../../bootstrapdemo/css/bootstrap-theme.min.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="../../bootstrapdemo/js/bootstrap.min.js" ></script>


</head>
<?php 

include 'nav2.php';
include 'side.php';
?>
<body>
<h1><center>Insert Category</h1><br><br><center>

<form method="post" action="cat_insert1.php" enctype="multipart/form-data">
<table class="table">

<tr><td>Cat Name<td><input type="text" name="txtname" required=""></tr>
<!--<tr><td>product price<td><input type="text" name="txtprice" required=""></tr>
<tr><td>manufacturer<td><input type="text" name="txtmanu" required=""></tr>
<tr><td>product color<td><input type="text" name="txtcolor" required=""></tr>
<tr><td>Image1<td><input type="file" name="txtimg1"></tr>
<tr><td>Image2<td><input type="file" name="txtimg2"></tr>
<tr><td>Image3<td><input type="file" name="txtimg3"></tr>
<tr><td>warranty<td>    <input type="text" name="txtwarranty" required=""></tr>
<tr><td>stock_on_hand<td><input type="number" name="txtstock" required=""></tr>
<tr><td>description<td><input type="text" name="txtdesc" ></tr>
<tr><td>category<td>
<select name="fk_catid">-->
<?php
require 'cat_database.php';
      $obj=new catadmin;
       $result=$obj-> getcategory();
/*if($result->num_rows > 0)
{
    while($rows=$result -> fetch_assoc())
    {   
       // echo '<option value='. $rows["pk_cat_id"] .'>'. $rows["cat_name"] .'</option>';
    }
}*/
?>


<tr><td colspan="2"><center><input type="submit" class="btn btn-success" name="btnadd" value="insert" ></center></tr>

</table>
</form>
</body>
</html>
