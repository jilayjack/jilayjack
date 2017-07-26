<?php
session_start();
?>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    
//$conn=new mysqli("localhost","root","","testdb");
  $email=$_POST["txtemail"];
    $password=$_POST["txtpass"];
    
  require 'loginclass.php';
$obj=new database();
$result=$obj->login($email,$password);
?>
<?php
//$conn=$obj->connect();  
    /*if($conn->connect_error)
    {
        echo "connection error";
    }
    $email=$_POST["txtemail"];
    $password=$_POST["txtpass"];
    $mm="jilayshah123@gmail.com";
    $pp="123";
$sql="select * from admin_table where email_id='".$email."'and password='".$password."'";
$result=$conn->query($sql);
*/
//echo $email;
$email="";
if($result->num_rows==1){
  
    $email=$_POST["txtemail"];
   $_SESSION["Username"]=$email;
echo "successfull";

//echo $email;
header('location:userhome.php');
  //echo '<a href="myindex1.php1"></a>'; 
}
  
else
{

  header('location:errorshow.php');
   
}

}

?>
