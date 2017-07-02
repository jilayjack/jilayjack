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
<?php 
include 'nav2.php';
include 'side.php';?>
<body >
<h1><center>Upadte Category</h1></center><br><br>
<?php
       $_catid=$_GET["id"];
     require 'cat_database.php';
      $obj=new catadmin;
       $result=$obj->UpdateCat($_pid);
     $row=$result->fetch_assoc();
     
 $_name=$row["cat_name"];
 $_cat=$row["fk_cat_id"];

?>
<form method="post" action="productupdate1.php "  enctype="multipart/form-data" >

<table class="table">

<tr><td>product Name<td><input type="text" name="txtname" value="<?php echo $_name; ?>"></tr>

<?php
$result=$obj-> getcategory();
if($result->num_rows > 0)
{
    while($rows=$result -> fetch_assoc())
    {   
      //  echo '<option value='. $rows["pk_cat_id"].'>'. $rows["cat_name"] .'</option>';
       // if($_cat=="fk_catid"){echo "selected";}
    }
}
?>

<tr><td colspan="2"><center><input type="submit" class="btn btn-success" name="btnadd" value="update" ></center></tr>
<?php

$_SESSION["id"]=$_catid;
?>
</table>
</form>
</body>
</html>
