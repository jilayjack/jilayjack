<?php
session_start();
?>
<html>
<head>
<title>Elite Shoppy an Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<!--/tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elite Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//tags -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<!-- //for bootstrap working -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
</head>

    <body>
<?php 

include 'n.php';
//include 'side.php';

?>


              
               
                <!--<div class="item ">
                <div class="carousel-caption">

<br>
<br><br>-->
<?php 

//include 'usernav.php';
?>
<form action="userprofile.php" method="post">

                <?php
   $conn=new mysqli("localhost","root","","miniproject");
    
    if($conn->connect_error)
    {
        echo "connection error";
    }
   $email=$_SESSION["Username"];
 //echo $email;
?>
 
 <?php
    echo '<center>';
    $sql="select * from user_tbl where pk_email_id='".$email."'";
    $result=$conn->query($sql);

while($row=$result->fetch_assoc()){
echo '<br>';
echo '<br>';
 echo "<img src='".$row["user_profile_pic"]."'>"; 
echo "<br>";
echo "<br>";

echo "<h3><b>Email-Id:-</b>".$row["pk_email_id"];
echo "<br>";
echo "<br>";
echo "<b>Name:-</b>".$row["uname"];
echo "<br>";
echo "<br>";
echo "<b>Mobile No:-</b>".$row["user_mobile_no"];
echo "<br>";
echo "<br>";
echo "<b>Address:-</b>".$row["user_address"];
echo "<br>";
echo "<br>";
echo "<b>Gender:-</b>".$row["user_gender"];
echo "<br>";

echo "</h3> ";



}
?>

                   


</form>


</body>
</html>