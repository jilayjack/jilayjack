<?php
$all=implode(",",$_POST["chk"]);
require 'database.php';
      $obj=new productadmin;
       $result=$obj->mutidelete($all);
       header('location:product.php');
?>