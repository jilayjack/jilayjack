<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{   
    
    $email=$_GET["email"];
    //$id=$_GET["id"];
echo $email;
//echo $id;
    //$email=$_SESSION["email"];
    $date=date('d-m-y');
  $product=$_POST["product"];
  $total=$_POST["total"];
    $payment=$_POST["radio"];
    
    if($_POST["textarea"]==null)
    {
    $address=$_POST["address"];
    }
    else
    {
        $address=$_POST["textarea"];
    }
require 'classproduct.php';
$obj=new classproduct();
$id="";
$res=$obj->insertbill($id,$email,$product,$total,$date,$address,$payment);
if($res===true)
{      

    header('location:invoice.php?email="'.$email.'"');
}
else
{
//    header("location:500.php");
}
}
?>