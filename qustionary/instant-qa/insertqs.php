<?php
session_start();
?>


<?php 

//  if(isset($message)) { echo $message; } 
 //if($_SERVER["REQUEST_METHOD"]=="POST"){
$conn=new mysqli("localhost","root","","questionery");

$_title=$_POST["txttitle"];
$_qs=$_POST["txtqs"];
$_img="";
//$_cpass=$_POST["txtcpass"];

$_date=date('d/m/y');
//$_add=$_POST["txtadd"];
$_sub=$_POST["fk_subject_id"];

   $_email=$_SESSION["Username"];
//$_email=$_GET["email"];
//echo $_email;
$sql="insert into question_tbl values('".null."','".$_title."','". $_qs  ."','". $_img ."','". $_email ."','".$_sub."','".$_date."')";

//&email=".$email."
//$message="<a href=newpass.php?token=".$_token.">Click</a>";

      //echo '<a href="login.php?email='.$row["email_id"].'">';
if($result=$conn->query($sql)===true){

//echo $sql;
header('location:userhome.php');

//echo "succes";
}
else
{
echo $sql;
    echo "fail";
}

?>
