<?php
session_start();
?>
<html>
    <head>
   <script src="js/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css" >


<link rel="stylesheet" href="css/bootstrap-theme.min.css" >


<script src="js/bootstrap.min.js" ></script>


 
 
    </head>
    <body  >

<?php 

include 'nav.php';
include 'side.php';

?>

    <?php
    $conn=new mysqli("localhost","root","","testdb");
    
    if($conn->connect_error)
    {
        echo "connection error";
    }
    $email=$_SESSION["Username"];
    $result=$conn->query("select * from mail_table where email_id='".$email."'");


?>

              
               
                <div class="item ">
                <div class="carousel-caption">

<br>
<br><br>
        <center>            <?php
while($row=$result->fetch_assoc())
{
   
echo "<img src='".$row["image"]."'>"; 
echo "<br>";
echo "<br>";

echo "<h3><b>Email-Id:-</b>".$row["email_id"];
echo "<br>";
echo "<br>";
echo "<b>Name:-</b>".$row["Name"];
echo "<br>";
echo "<br>";
echo "<b>Mobile No:-</b>".$row["mobile"];
echo "<br>";
echo "<br>";
echo "<b>Address:-</b>".$row["address"];
echo "<br>";
echo "</h3> ";


}?>

                    </div>
              </div>
</div>



</table>
</form>
</body>
</html>
