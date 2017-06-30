<?php 

$email=$_POST["txtemail"];
$name=$_POST["txtname"];
$add=$_POST["txtaddress"];
$mno=$_POST["txtmobile"];
$gender=$_POST["txtgender"];
$image=$_POST["txtimage"];

$conn=new mysqli("localhost","root","","miniproject");

$sql="update user_tbl set uname='". $name ."',user_mobile_no='". $mno ."',user_address='". $add ."',user_gender='".$gender."',user_profile_pic='". $image ."' where pk_email_id='".$email ."'";
if($conn->query($sql)===true)
{

    //echo "sucess";
header('location:userside.php');

}
else
{
    echo $sql;
}












?>