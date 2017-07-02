<html>
<head>


</head>
<body>
<?php 

include 'nav2.php';
include 'side.php';
?>
<?php 
$_cid="";
$_pname="";
$_pcolor="";
$_pprice="";
$_manu="";
$_warranty="";
$_stock="";
$_img="";
$_action="";


//$conn=new mysqli("localhost","root","","testdb");
//$result=$conn->query("select * from cat_table");
require 'classdemo.php';
$obj=new database;
$id=$_GET["id"];
$result=$obj->getcat($id);

//$q="select * from cat_table where cat_id=".$id;
//$result=$conn->query($q);
$row=$result->fetch_assoc();
        

$_cid= $row["cat_id"];
  
$_cname= $row["cat_name"];
  

       





?>
<form method="post" action="catupdate1.php">
<table class="table">

<tr><td>Cat_Name<td><input type="text" name="txtname" value="<?php echo $_cname?>"></tr>
<tr><td align="center"><input type="submit" class="btn btn-success" value="update"></tr>
</table>


</form>

</body>
</html>
