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
      //echo '<a href="login.php?email='.$row["email_id"].'">';
      $sql="insert into user_tbl values('". $_email ."','". $_name  ."','".$_pass."','".$_cpass."','". $_add ."','". $_mno ."','". $_gen ."','". $_img ."','".$_flag."','".$_token."')";
if($result=$conn->query($sql)===true){
    
  error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
require_once "phpmailer/class.phpmailer.php";
$message="<a href=newpass.php?token=".$_token."&email=".$email.">Click</a>";
// creating the phpmailer object
$mail = new PHPMailer(true);

// telling the class to use SMTP
$mail->IsSMTP();

// enables SMTP debug information (for testing) set 0 turn off debugging mode, 1 to show debug result
$mail->SMTPDebug = 0;

// enable SMTP authentication
$mail->SMTPAuth = true;

// sets the prefix to the server
$mail->SMTPSecure = 'ssl';  

// sets GMAIL as the SMTP server
$mail->Host = 'smtp.gmail.com';

// set the SMTP port for the GMAIL server
$mail->Port = 465;

// your gmail address
$mail->Username = 'maildemo254@gmail.com';

// your password must be enclosed in single quotes
$mail->Password = 'maildemo1234';

// add a subject line
$mail->Subject = ' veri ';

// Sender email address and name
$mail->SetFrom('maildemo254@gmail.com', 'demo');

$email1=$_email;
// reciever address, person you want to send
$mail->AddAddress($email1);

// if your send to multiple person add this line again
//$mail->AddAddress('tosend@domain.com');

// if you want to send a carbon copy
//$mail->AddCC('tosend@domain.com');


// if you want to send a blind carbon copy
//$mail->AddBCC('tosend@domain.com');

// add message body
$mail->MsgHTML($message);


// add attachment if any
//$mail->AddAttachment('time.png');

try {
    // send mail
	
	//don't forget to enable openssl true from php_extensions
    $mail->Send();
    $msg = "Mail send successfully";
} catch (phpmailerException $e) {
    $msg = $e->getMessage();
} catch (Exception $e) {
    $msg = $e->getMessage();
}
echo $msg;


//    header("location:userlogin.php");
  
    //header('location:userside.php');
    //echo "succesful";
}
else
{
echo $sql;
    echo "fail";
}

?>
