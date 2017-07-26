<?php 
$conn=new mysqli("localhost","root","","miniproject");
$idd=$_GET["id"];
$sql="delete from cat_tbl where pk_cat_id=".$idd;
if($conn->query($sql)===true)
{
    header('location:catdisplay.php');
}



 ?>