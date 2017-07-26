<?php
session_start();
?>


<?php 

//  if(isset($message)) { echo $message; } 
 //if($_SERVER["REQUEST_METHOD"]=="POST"){
$conn=new mysqli("localhost","root","","questionery");

$_name=$_POST["txtuname"];
$_email=$_POST["txtemail"];
$_pass=$_POST["txtpass"];
//$_cpass=$_POST["txtcpass"];

$_mno=$_POST["txtno"];
//$_add=$_POST["txtadd"];
$_gen=$_POST["gender"];

   $_SESSION["Username"]=$_email;

$_img1=$_POST["txtimg"];
$string=md5(rand());
$_token=substr($string,0,10);
$_flag="no";

$captcha=$_SESSION["captcha_code"];
$cap=$_POST["captcha_code"];
//echo $cap;
//echo $captcha;
/*if(count($_POST)>0) {
if($cap==$captcha){
echo "yes";
//$sql="insert into user_tbl values('". $_email ."','".$_pass."','". $_name  ."','". $_mno ."','". $_gen ."','". $_img ."','".$_token."','".$_flag."')";

}
else{
$message = "Enter Correct Captcha Code";
}
}*/
$sql="insert into user_tbl values('". $_email ."','".$_pass."','". $_name  ."','". $_mno ."','". $_gen ."','". $_img1 ."','".$_token."','".$_flag."')";

//&email=".$email."
//$message="<a href=newpass.php?token=".$_token.">Click</a>";

      //echo '<a href="login.php?email='.$row["email_id"].'">';
if($result=$conn->query($sql)===true){

header('location:userhome.php');

//echo "succes";
}
else
{
echo $sql;
    echo "fail";
}

?>
