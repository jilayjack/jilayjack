<?php 
$conn=new mysqli("localhost","root","","testdb");
$idd=$_GET["id"];
$sql="select *  from product_table where product_id=".$idd;
$_result=$conn->query($sql);
$_row=$_result->fetch_assoc();
if($_result->num_rows>0){
    unlink($row["product_img"]);
}

$sql="delete from product_table where product_id=".$idd;


if($conn->query($sql)===true)
{
    header('location:product.php');
}



 ?>