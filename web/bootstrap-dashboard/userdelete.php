<?php
$_id=$_GET["id"];
require 'database.php';
      $obj=new useradmin;
      
     $result=$obj->Deleteuser($_id);
if($result==true)
{
    header('location:usertbl.php');
}

?>