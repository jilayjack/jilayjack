<html>
<head>
<script src="../bootstrapdemo/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../bootstrapdemo/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="../bootstrapdemo/css/bootstrap-theme.min.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="../bootstrapdemo/js/bootstrap.min.js" ></script>


</head>
<body>

<?php 

//include 'navbar.php';

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
<tr><td>Image<td><input type="file" name="txtimg1"></tr>
<tr><td>Image<td><input type="file" name="txtimg2"></tr>
<tr><td>Image<td><input type="file" name="txtimg3"></tr>
<tr><td>Details<td><input type="text" name="txtdetails"></tr>
<tr><td>CatId<td><input type="number" name="txtcatid"></tr>

<?php 
/*
<tr><td>Action<td><input type="text" name="txtaction"></tr>
<tr><td>Categary
<td>
<select name="fk_cat_id">

$conn=new mysqli("localhost","root","","testdb");
$sql="select * from cat_table";
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

<tr><td><input type="submit" name="btnadd" value="insert"></tr>

</table>

</form>
<?php 

if($_SERVER["REQUEST_METHOD"]=="POST"){
$conn=new mysqli("localhost","root","","miniproject");

$_pid=$_POST["txtid"];
$_pname=$_POST["txtname"];

$_pprice=$_POST["txtprice"];

$_manu=$_POST["txtmanu"];
$_pcolor=$_POST["txtcolor"];
$_img1=$_POST["txtimg1"];
$_img2=$_POST["txtimg2"];
$_img3=$_POST["txtimg3"];

$_warranty=$_POST["txtwarranty"];
$_stock=$_POST["txtstock"];
$_details=$_POST["txtdetails"];

//$_action=$_POST["txtaction"];
$_drop=$_POST["txtcatid"];



$sql="insert into product_tbl values('".null."','". $_pname ."','". $_pprice ."','". $_manu ."','". $_pcolor ."','". $_img1 ."','". $_img2 ."','". $_img3 ."','". $_warranty ."','".$_stock  ."','".$_details."','". $_drop ."')";//,'". $_action ."','".$_drop."')";
//echo $sql;
if($result=$conn->query($sql)===true){
    
    
    
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
