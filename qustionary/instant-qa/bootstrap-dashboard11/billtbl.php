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
<form action="#" method="post">
<table class="table">
<thead>

<th><center>Subject Name</th>


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
       echo '<td><center>'. $row["subject_name"].'</td>';
       
       
       echo '</tr>';  
    }
}
  
?>
</table>
</form>
<form>

</form>
</body>
</html>