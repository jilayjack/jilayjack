<?php
$all=implode(",",$_POST["chk"]);
require 'database.php';
      $obj=new billadmin;
      $result=$obj->mutideletebill($all);
      if($result==true)
      {  header('location:billtbl.php');}
      else
      {
          echo $result;
          echo "not";
      }
    
?>