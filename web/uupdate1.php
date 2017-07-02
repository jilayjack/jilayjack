 <?php
/*   
$email=$_POST["txtemail"];
$name=$_POST["txtname"];

//$password=$_POST["txtpass"];
$mobile=$_POST["txtmobile"];
$image=$_POST["txtimage"];
$address=$_POST["txtaddress"];
$gender=$_POST["txtgender"]    

  //require 'loginclass.php';
//$obj=new database();
//$result=$obj->update1($email,$name,$address,$mobile,$gender,$image);
$conn=new mysqli("localhost","root","","miniproject");

    

    $sql="update user_tbl set uname='". $name ."',user_address='". $address ."',user_mobile_no='". $mobile ."',user_gender='".$gender."',user_profile_pic='". $image ."' where pk_email_id='". $email ."'";
echo $sql;
if($conn->query($sql)===true){
//  if($result===true){
  
   header('location:userprofile.php');
}
else
{
    echo "not success";
     echo $sql;
}

*/

$email=$_POST["txtemail"];
$name=$_POST["txtname"];

//$password=$_POST["txtpass"];
$mobile=$_POST["txtmobile"];
$image=$_POST["txtimage"];
$address=$_POST["txtaddress"];
$gender=$_POST["txtgender"]    

echo $email;
/*$conn=new mysqli("localhost","root","","miniproject");


    $sql="update user_tbl set uname='". $name ."',user_address='". $address ."',user_mobile_no='". $mobile ."',user_gender='".$gender."',user_profile_pic='". $image ."' where pk_email_id='". $email ."'";
if($conn->query($sql)===true){
//    header('location:student.php');
    echo $sql;
echo "suceesfull";
}
else
{
    echo "fail";
}
*/
?>
