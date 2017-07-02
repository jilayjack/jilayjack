
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
     $_email=$_POST["txtemail"];
     $_name=$_POST["txtname"];
    $_pass=$_POST["txtpass"];
 $_mobile=$_POST["txtmobile"]; 
  $_add="abad";
             $_gen="male";
             $_type="admin";
// $_img1=basename($_FILES["txtimg"]["name"]);
 //move_uploaded_file($_FILES["txtimg"]["tmp_name"],"img1/".$_img1);
  $_img1="img/avatar-6.jpg";
 if(isset($_POST["btnadd"]))
    {
       require 'database.php';
      $obj=new addadmin;
       //echo "insert into user_tbl  values('". $_email ."','". $_name ."','". $_pass ."','". $_pass ."','". $_add ."','". $_mobile ."','". $_gen ."','". $_img1 ."','". $_type ."')";
$result=$obj->Insertadmin($_email,$_name,$_pass,$_mobile,$_img1);
if($result==true)
            {
              
            header('location:login.php');
            }
            else
            {
                  echo "admin insert not successfull";
                   
            }


}
}
?>