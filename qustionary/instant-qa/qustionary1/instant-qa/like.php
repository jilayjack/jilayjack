<?php
session_start();
 $_like=$_GET["like"];
 $_SESSION["id"];
$conn=new mysqli("localhost","root","","questionery");
     $result=$conn->query("select * from answer_tbl where answer_id=".$_like);
     $row=$result->fetch_assoc();
      $like=$row["answer_like"] + 1;
      $result="update answer_tbl set answer_like='". $like ."' where answer_id=". $_like ."";

if($conn->query($result)===true)
{
 header('location:viewans.php?id='.$_SESSION["id"].'');
}
else
{
echo "record inserted not suseesfully";
echo $result;

}

?>