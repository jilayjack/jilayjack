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
<form action="multidelcat.php" method="post">
<table class="table">
<thead>
<th>Multiple code</th>

<th>Categary Name</th>
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
        echo '<td>' ?> <input type="checkbox" name="chk[]" value="<?php echo $row["pk_cat_id"]; ?>"><?php '</td>';
//       echo '<td>' . $row["pk_cat_id"]. '</td>';
       echo '<td>'. $row["cat_name"].'</td>';
       
       
       echo '<td><a href="catdel.php?id='.$row["pk_cat_id"].'" >Delete<span class="glyphicon glyphicon-trash "></span> </a><a href="catupdate.php?id='.$row["pk_cat_id"].'">Update <span class="glyphicon glyphicon-pencil "></span></a> </td>';
      echo '</tr>';  
    }
}
  
?>
</table>
<center><input type="submit" class="btn btn-success" name="btnadd" value="delete" ></center>
</form>
<form>
<center><a href="catinsert.php" class="btn btn-success">Insert</center></a>

</form>
</body>
</html>