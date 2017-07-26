<?php
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")
{

 $_email=$_POST["txtemail"];
 $_pass=$_POST["txtpassword"];
 
    if(isset($_POST["btnsubmit"]))
    {
      require 'database.php';
      $obj=new question;
       $result=$obj->login($_email,$_pass);
       if($result->num_rows == 1)
     {
             ?> <span><div class="alert alert-success" role="alert">login sucessfully</div></span>
<?php
              $_SESSION["email"]=$_email;
            header('location:home.php');
     }
     else
     {
  header('location:errorshow.php');
     }
    }
}
    ?>

</body>
</html>