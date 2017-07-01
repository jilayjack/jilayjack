<html>
<head>

</head>
<body>


<?php 

include 'nav2.php';
include 'side.php'
?>
<?php 
/*$conn=new mysqli("localhost","root","","testdb");
$sql="select p.*,c.* from product_table p,cat_table c where fk_cat_id=cat_id";
$result=$conn->query($sql);
echo $sql;

*/

?>

<table class="table">
<thead>
<th>Categary_id</th>
<th>CAtegary_Name</th>
<th>Action</th>


</thead>
<?php 
//$conn=new mysqli("localhost","root","","testdb");
//$result=$conn->query("select * from product_table");
//$sql="select * from cat_table";
//$result=$conn->query($sql);
//echo $sql;

require 'catdatabase.php';
$obj=new database();
$result=$obj->getallcat();

if($result->num_rows>0){
    while($row =$result->fetch_assoc())
    {
       echo '<tr>';
       echo '<td>' . $row["cat_id"]. '</td>';
       echo '<td>'. $row["cat_name"].'</td>';
       
       
       echo '<td><a href="catdel.php?id='.$row["cat_id"].'" >Delete<span class="glyphicon glyphicon-trash "></span> </a><a href="catupdate.php?id='.$row["cat_id"].'">Update <span class="glyphicon glyphicon-pencil "></span></a> </td>';
      echo '</tr>';  
    }
}
  
?>
</table><form>
<center><a href="catinsert.php" class="btn btn-danger">Insert</center></a>

</form>
</body>
</html>