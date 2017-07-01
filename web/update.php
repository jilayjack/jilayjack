
<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
   
<?php 

include 'n.php';
?>
</head>



<?php
$email="";
$name="";
$mobile="";
$password="";
$cpassword="";
$address="";
$image="";
$gender="";
$_email=$_SESSION["Username"];
//echo $email;
    require 'loginclass.php';
    $obj=new database();
$result=$obj->update($_email);

// $conn=new mysqli("localhost","root","","testdb");

  //  $result=$conn->query("select * from mail_table where email_id='".$email."'");
  

$row=$result->fetch_assoc();


$email=$row["pk_email_id"];
$name=$row["uname"];
$mobile=$row["user_mobile_no"];
$address=$row["user_address"];
$gender=$row["user_gender"];
$img=$row["user_profile_pic"];


?>

<body>
<?php 

//include 'side.php';

?>

	<div class="row">



<center>
<form method="post" action="u1.php">
<center>
<div class="input-group input-group-lg">

<br><br>
<h4>Email:-</h4><input type="text" class="form-control" name="txtemail" placeholder="Email-id" value=<?php echo $email; ?>><br><br><br>
<h4>Name:-</h4><input type="text" class="form-control" name="txtname" placeholder="name" value=<?php echo $name; ?>><br><br><br>
<h4>Mobile_no:-</h4><input type="text" class="form-control" name="txtmobile" placeholder="mobile no" value=<?php echo $mobile; ?>><br>

<br>
<h4>
    Address:-</h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" class="form-control" name="txtaddress" placeholder="Address" value=<?php echo $address; ?>><br>

<br>
Gender<br><br><td><input type="radio" name="txtgender" value="male" <?php if($gender=="male"){echo "checked";} ?>>Male
<input type="radio" name="txtgender"  value="female" <?php if($gender=="female"){echo "checked";} ?>>Female</tr>
<br>
<br>
<input type="file" name="txtimage" value=<?php echo $img; ?>>
<br><br>
    <input type="submit" name="submit"  class="btn btn-primary" value="Update">
</form>     
    </body>
    </html>