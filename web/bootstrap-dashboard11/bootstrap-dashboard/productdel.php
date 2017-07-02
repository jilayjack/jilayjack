<?php
$_id=$_GET["id"];
require 'database.php';
      $obj=new productadmin;
       $result=$obj->DeleteProduct($_id);
if($result==true)
{
    header('location:product.php');
}

?>