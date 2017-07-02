<?php

$_cid=$_GET["id"];
  
$_cname=$_POST["txtname"];
  

//echo $_cid;
//echo $_cname;
//$conn=new mysqli("localhost","root","","testdb");
require 'classdemo.php';
$obj=new database;
$result=$obj->updatecats($_cid,$_cname);
//$sql="update cat_table set cat_name='". $_cname ."' where cat_id='".$_cid."'";
if($result===true){
  header('location:catdisplay.php');
    //echo $sql;
echo "suceesfull";
}
else
{
  //  echo $sql;
echo $result;

    echo "fail";
}

       



?>