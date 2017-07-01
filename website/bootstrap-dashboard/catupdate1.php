<?php

$_cid=$_POST["txtid"];
  
$_cname=$_POST["txtname"];
  

echo $_cid;
//$conn=new mysqli("localhost","root","","testdb");
require 'classdemo.php';
$obj=new database;
$result=$obj->insertcat($_cid,$_cname);

//$sql="update cat_table set cat_name='". $_cname ."' where cat_id='".$_cid."'";
if($result===true){
  header('location:catdisplay.php');
    //echo $sql;
echo "suceesfull";
}
else
{
    echo $sql;
    echo "fail";
}

       



?>