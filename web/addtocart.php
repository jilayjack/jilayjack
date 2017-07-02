

<?php
//session_start();
$id=$_GET["id"];
$email=$_GET["email"];
//echo $email;
$_SESSION["email"]=$email;
//1$email=$_SESSION["email"];
//echo $email;
if($email==null)
{
//header('location:login.php');
}
else
{
    require 'classproduct.php';
$obj=new classproduct();
$_result=$obj->insertcart($id,$email);
if($_result===true)
{
    header('location:checkout.php?email='.$email.'&id='.$id.'');
}
else
{
    header('location:500.php');
}
}
?>