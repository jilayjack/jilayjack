<?php
$_oldimg=$_GET["img"];
$_pid=$_POST["txtid"];
  
$_pname=$_POST["txtname"];
  
$_pcolor=$_POST["txtcolor"];

$_pprice=$_POST["txtprice"];
 
$_manu=$_POST["txtmanu"];
 
$_warranty=$_POST["txtwarranty"];
     
$_stock=$_POST["txtstock"];
     
$_img=basename($_FILES["txtimg"]["name"]);
     
//$_action=$_POST["txtaction"];
if($_img=="")
{
    $_img=$_oldimg;
}
else
{
    unlink($_oldimg);
    move_uploaded_file($_FILES["txtimg"]["name"],"img/".$_img);
     
}
require 'classdemo.php';
$obj=new database();
$result=$obj->updateproducts($_pid,$_pname,$_pcolor,$_pprice,$_manu,$_warranty,$_stock,$_img);


//$conn=new mysqli("localhost","root","","testdb");

//$sql="update product_table set product_name='". $_pname ."',product_color='". $_pcolor ."',product_price='". $_pprice ."',manufacturer='". $_manu ."',warranty='". $_warranty ."',stock_on_hand='".$_stock."',product_img='". $_img ."',action='".$_action ."' where product_id='".$_pid."'";

if($result===true){
  //echo "sucdces";
  
  header('location:product.php');
    //echo $sql;
//echo "suceesfull";
}
else
{
    echo $sql;
    echo "fail";
}

       



?>