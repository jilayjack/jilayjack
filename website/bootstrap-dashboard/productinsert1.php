
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
   $_name=$_POST["txtname"];
   $_price=$_POST["txtprice"]; 
 $_menuf=$_POST["txtmanu"];
 $_color=$_POST["txtcolor"];
 $_img1=basename($_FILES["txtimg1"]["name"]);
 move_uploaded_file($_FILES["txtimg1"]["tmp_name"],"img1/".$_img1);
   $_img1="img1/".$_img1;
 $_img2=basename($_FILES["txtimg2"]["name"]);
 move_uploaded_file($_FILES["txtimg2"]["tmp_name"],"img1/".$_img2);
   $_img2="img1/".$_img2;
 $_img3=basename($_FILES["txtimg3"]["name"]);
 move_uploaded_file($_FILES["txtimg3"]["tmp_name"],"img1/".$_img3);
  $_img3="img1/".$_img3;
 $_warr=$_POST["txtwarranty"];
  $_soh=$_POST["txtstock"];
   $_desc=$_POST["txtdesc"];
 $_catid=$_POST["fk_catid"];
if(isset($_POST["btnadd"]))
    {
       require 'database.php';
      $obj=new productadmin;
       
$result=$obj->InsertProduct($_name,$_price,$_menuf,$_color,$_img1,$_img2,$_img3,$_warr,$_soh,$_desc,$_catid);
if($result==true)
            {
               echo "product insert successfull";
            header('location:product.php');
            }
            else
            {
                   echo "product insert not successfull";
                   
            }


}
}
?>