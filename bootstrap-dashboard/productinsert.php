<html>
<head>
<script src="../../bootstrapdemo/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../../bootstrapdemo/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="../../bootstrapdemo/css/bootstrap-theme.min.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="../../bootstrapdemo/js/bootstrap.min.js" ></script>


</head>
<body>

<?php 

include 'nav2.php';
include 'side.php';
?>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>">
<table class="table">

<tr><td>product_id<td><input type="text" name="txtid"></tr>
<tr><td>product_Name<td><input type="text" name="txtname"></tr>
<tr><td>product_color<td><input type="text" name="txtcolor"></tr>

<tr><td>product_price<td><input type="text" name="txtprice"></tr>

<tr><td>manufacturer<td><input type="text" name="txtmanu" ></tr>
<tr><td>warranty<td>    <input type="text" name="txtwarranty" ></tr>
<tr><td>stock_on_hand<td><input type="number" name="txtstock"></tr>
<tr><td>Image<td><input type="file" name="txtimg"></tr>
<?php 
/*
$conn=new mysqli("localhost","root","","testdb");
$sql="select * from product_table";
$result=$conn->query($sql);

if($result->num_rows>0)
{
    while($row=$result->fetch_assoc()){
        echo '<option value="'.$row["cat_id"].'">'.$row["cat_name"].'</option>';
    
    }
}
*/
?>


</tr>

<tr><td><input type="submit" class="btn btn-success" name="btnadd" value="insert"></tr>

</table>

</form>
<?php 

if($_SERVER["REQUEST_METHOD"]=="POST"){
//$conn=new mysqli("localhost","root","","testdb");

$_pid=$_POST["txtid"];
$_pname=$_POST["txtname"];
$_pcolor=$_POST["txtcolor"];
$_pprice=$_POST["txtprice"];
$_manu=$_POST["txtmanu"];
$_warranty=$_POST["txtwarranty"];
$_stock=$_POST["txtstock"];
$_img=$_POST["txtimg"];
//$_action=$_POST["txtaction"];
//$_drop=$_POST["fk_cat_id"];
echo $_pid;
require 'classdemo.php';
$obj=new database();
$result=$obj->insertproducts($_pid,$_pname,$_pcolor,$_pprice,$_manu,$_warranty,$_stock,$_img);


//$sql="insert into product_table values('".null."','". $_pname ."','". $_pcolor ."','". $_pprice ."','". $_manu ."','". $_warranty ."','".$_stock  ."','". $_img ."')";
//echo $sql;
if($result===true){//$conn->query($sql)===true){
    
    //echo $result;
    
    echo "succesful";
}
else
{
    
//    echo $result;
    echo "fail";
}
}
?>
</body>
</html>
