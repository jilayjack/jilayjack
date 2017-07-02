<?php
$all=implode(",",$_POST["chk"]);
require 'database.php';
      $obj=new productadmin;
       $result=$obj->mutideletecat($all);
       header('location:catdisplay.php');
?>