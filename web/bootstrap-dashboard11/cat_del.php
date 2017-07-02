<?php
$_catid=$_GET["id"];
require 'catdatabase.php';
      $obj=new catadmin;
       $result=$obj->DeleteCat($_id);
if($result==true)
{
    header('location:category.php');
}

?>