

 <?php

$email=$_POST["txtemail"];
$name=$_POST["txtname"];

//$password=$_POST["txtpass"];
$mobile=$_POST["txtmobile"];
$image=$_POST["txtimage"];
$address=$_POST["txtaddress"];
$gender=$_POST["txtgender"]    
   $conn=new mysqli("localhost","root","","miniproject");
    

    $sql="update user_tbl set uname='". $name ."',user_address='". $address ."',user_mobile_no='". $mobile ."',user_gender='".$gender."',user_profile_pic='". $image ."' where pk_email_id='". $email ."'";

if($conn->query($sql)===true){
   header('location:userprofile.php');
}
else
{
    echo "not success";
     echo $sql;
}


?>
