<html>
<head>


</head>
<body>

<?php 

include 'nav2.php';
include 'side.php'
?>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>">
<table class="table">

<tr><td>Cat_Name<td><input type="text" name="txtname"></tr>


</tr>

<tr><td align="center"><input type="submit" name="btnadd" class="btn btn-success" value="insert"></tr>

</table>

</form>
<?php 

if($_SERVER["REQUEST_METHOD"]=="POST"){
$conn=new mysqli("localhost","root","","miniproject");

$_cat_id="";
$_cname=$_POST["txtname"];

$sql="insert into cat_tbl values('".null."','".$_cname."')";
//echo $sql;
if($conn->query($sql)===true){
    
    
//    header('location:catdisplay');
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
