<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Dashboard by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Font Awesome CDN-->
    <!-- you can replace it by local Font Awesome-->
    <script src="https://use.fontawesome.com/99347ac47f.js"></script>
    <!-- Font Icons CSS-->
    <link rel="stylesheet" href="https://file.myfontastic.com/da58YPMQ7U5HY8Rb6UxkNf/icons.css">
<?php
include 'nav2.php';
include 'side.php';


?>

</head>
<body>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>">
<table class="table">

<tr><td>Cat_Name<td><input type="text" name="txtname"></tr>


</tr>

<tr><td align="center"><input type="submit" name="btnadd" class="btn btn-success" value="insert"></tr>

</table>

</form>
<?php 

if($_SERVER["REQUEST_METHOD"]=="POST"){
//$conn=new mysqli("localhost","root","","testdb");

//$_cid=$_POST["txtid"];
$_cid=null;
$_cname=$_POST["txtname"];
require 'classdemo.php';
$obj=new database;
$result=$obj->insertcat($_cid,$_cname);
//$sql="insert into cat_table values('".null."','".$_cname."')";
//echo $sql;
if($result===true){
    
    
    
    echo "succesful";
}
else
{
    echo "fail";
}
}
?>
</body>
</html>
