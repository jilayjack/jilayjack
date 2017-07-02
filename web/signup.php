<?php
session_start();
?>


<?php 

//if($_SERVER["REQUEST_METHOD"]=="POST"){
$conn=new mysqli("localhost","root","","miniproject");

$_name=$_POST["txtname"];
$_email=$_POST["txtemail"];
$_pass=$_POST["txtpass"];
$_cpass=$_POST["txtcpass"];

$_mno=$_POST["txtno"];
$_add=$_POST["txtadd"];
$_gen=$_POST["txtgender"];

   $_SESSION["Username"]=$_email;

$_img1=$_POST["txtimg"];
$string=md5(rand());
$_token=substr($string,0,10);
$_flag="no";

if($_img1==""){
    if($_gen=="male"){
        $_img="avatar5.jpg";

    }
    else
    {
        $_img="log_pic.jpg";
    }
}
else
{
    $_img=$_POST["txtimg"];
}
//&email=".$email."
//$message="<a href=newpass.php?token=".$_token.">Click</a>";

      //echo '<a href="login.php?email='.$row["email_id"].'">';
      $sql="insert into user_tbl values('". $_email ."','". $_name  ."','".$_pass."','".$_cpass."','". $_add ."','". $_mno ."','". $_gen ."','". $_img ."','".$_flag."','".$_token."')";
if($result=$conn->query($sql)===true){

header('location:emaildemo1.php?email='.$_email.'');

//echo "succes";
}
else
{
echo $sql;
    echo "fail";
}

?>
