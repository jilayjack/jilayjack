<?php 
$conn=new mysqli("localhost","root","","testdb");
$idd=$_GET["id"];
$sql="delete from cat_table where cat_id=".$idd;
if($conn->query($sql)===true)
{
    header('location:catdisplay.php');
}



 ?>