<html>
<head>


</head>
<body>

<?php 

include 'nav2.php';
include 'side.php';

?>
<?php 
$_pid="";
$_pname="";
$_pcolor="";
$_pprice="";
$_manu="";
$_warranty="";
$_stock="";
$_img="";
$_action="";


//$conn=new mysqli("localhost","root","","testdb");
//$result=$conn->query("select * from product_table");
require 'classdemo.php';
$obj=new database();

$id=$_GET["id"];
//$q="select * from product_table where product_id=".$id;
//$result=$conn->query($q);
$result=$obj->getproducts();

$row=$result->fetch_assoc();
        

$_pid= $row["product_id"];
  
$_pname= $row["product_name"];
  
$_pcolor=   $row["product_color"];

$_pprice=  $row["product_price"];
 
$_manu=    $row["manufacturer"];
 
$_warranty=$row["warranty"];
     
$_stock=  $row["stock_on_hand"];
     
$_img= $row["product_img"];
     
//$_action= $row["action"];
     

       





?>
<form enctype="multipart/form-Data" method="post" action="productupdate1.php?img=<?php echo $_img; ?>">
<table class="table">

<tr><td>product_id<td><input type="text" name="txtid" value="<?php echo $_pid?>"></tr>
<tr><td>product_Name<td><input type="text" name="txtname" value="<?php echo $_pname?>"></tr>
<tr><td>product_color<td><input type="text" name="txtcolor" value="<?php echo $_pcolor?>"></tr>

<tr><td>product_price<td><input type="text" name="txtprice" value="<?php echo $_pprice?>"></tr>

<tr><td>manufacturer<td><input type="text" name="txtmanu" value="<?php echo $_manu?>" ></tr>
<tr><td>warranty<td>    <input type="text" name="txtwarranty" value="<?php echo $_warranty?>" ></tr>
<tr><td>stock_on_hand<td><input type="number" name="txtstock" value="<?php echo $_stock?>"></tr>
<tr><td>Image<td><input type="file" name="txtimg" value="<?php echo $_img?>"></tr>
<tr><td><input type="submit" class="btn btn-success" value="update"></tr>
</table>


</form>

</body>
</html>
