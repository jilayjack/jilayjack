<?php
session_start();
 
 $_name=$_POST["txtname"];
$_cat=$_POST["fk_cat_id"];

echo $_name ."<br>";
echo $_cat ."<br>";

require 'cat_database.php';
  $obj=new catadmin;
   echo $_catid=$_SESSION["id"];
  $result=$obj->UpdateCat1($_catid,$_name);

if($result===true)

{
header('location:category.php');
}
else
{
   echo $result;
echo "Record inserted not suseesfully";

}
?>