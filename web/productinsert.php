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

<form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>">
<table class="table">

<tr><td>Product_id<td><input type="text" name="txtid"></tr>
<tr><td>Product_Name<td><input type="text" name="txtname"></tr>
<tr><td>Product_price<td><input type="text" name="txtprice"></tr>
<tr><td>Manufacturer<td><input type="text" name="txtmanu" ></tr>

<tr><td>Product_color<td><input type="text" name="txtcolor"></tr>
<tr><td>Image1<td><input type="file" name="txtimg"></tr>
<tr><td>Image2<td><input type="file" name="txtimg1"></tr>
<tr><td>Image3<td><input type="file" name="txtimg2"></tr>


<tr><td>warranty<td>    <input type="text" name="txtwarranty" ></tr>
<tr><td>Stock_on_hand<td><input type="number" name="txtstock"></tr>
<tr><td>Product_Details<td><input type="text" name="txtdetails"></tr>
<tr><td>cat_id<td><input type="number" name="txtcatid"></tr>

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
$_img2=$_POST["txtimg1"];
$_img3=$_POST["txtimg2"];
$_details=$_POST["txtdetails"];
//$_cid=$_POST["txtcatid"];
//$_action=$_POST["txtaction"];
//$_drop=$_POST["fk_cat_id"];
echo $_pid;
require 'classdemo1.php';
$obj=new database();
$result=$obj->insertproducts($_pid,$_pname,$_pprice,$_manu,$_pcolor,$_img,$_img2,$_img3,$_warranty,$_stock,$_details);


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
