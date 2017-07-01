<?php
session_start();
 $_oldimg1=$_SESSION["img1"];
  $_oldimg2=$_SESSION["img2"];
 $_oldimg3=$_SESSION["img3"];
 
 $_name=$_POST["txtname"];
 $_price=$_POST["txtprice"];
 $_menuf=$_POST["txtmanu"];
 $_color=$_POST["txtcolor"];
  $_pimg1=basename($_FILES["txtimg1"]["name"]);
    $_pimg2=basename($_FILES["txtimg2"]["name"]);
      $_pimg3=basename($_FILES["txtimg1"]["name"]);
 $_warr=$_POST["txtwarranty"];
 $_soh=$_POST["txtstock"];
 $_desc=$_POST["txtdesc"];
$_cat=$_POST["fk_catid"];


if($_pimg1=="")
{
$_pimg1=$_oldimg1;
}
else
{
   // $_oldimg1="../".$_oldimg1;
unlink($_oldimg1);
move_uploaded_file($_FILES["txtimg1"]["tmp_name"],"img1/".$_pimg1);
$_pimg1="img1/".$_pimg1;
}
if($_pimg2=="")
{
$_pimg2=$_oldimg2;
}
else
{
    //$_oldimg2="../".$_oldimg2;
unlink($_oldimg2);
move_uploaded_file($_FILES["txtimg2"]["tmp_name"],"img1/".$_pimg2);
$_pimg2="img1/".$_pimg2;
}
if($_pimg3=="")
{
$_pimg3=$_oldimg3;
}
else
{
   // $_oldimg3="../".$_oldimg3;
unlink($_oldimg3);
move_uploaded_file($_FILES["txtimg3"]["tmp_name"],"img1/".$_pimg3);
$_pimg3="img1/".$_pimg3;
}
echo $_name ."<br>";
 echo $_price ."<br>";
 echo $_menuf ."<br>";
 echo $_color ."<br>";
  echo $_pimg1 ."<br>";
    echo $_pimg2 ."<br>";
    echo  $_pimg3 ."<br>";
 echo $_warr ."<br>";
 echo $_soh ."<br>";
 echo $_desc ."<br>";
echo $_cat ."<br>";

require 'database.php';
  $obj=new productadmin;
   echo $_pid=$_SESSION["id"];
  $result=$obj->UpdateProduct1($_pid,$_name,$_price,$_menuf,$_color,$_pimg1,$_pimg2,$_pimg3,$_warr,$_soh,$_desc,$_cat);

if($result===true)

{
header('location:product.php');
}
else
{
   echo $result;
echo "record inserted not suseesfully";

}
?>