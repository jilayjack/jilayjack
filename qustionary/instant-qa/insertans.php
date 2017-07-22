<?php
session_start();
if ($_SESSION["email"]=="")
{ 
    header('location:errorshow.php');
}
else
{
  if($_SERVER["REQUEST_METHOD"]=="POST")
    {
    $_uid=$_SESSION["email"];
    $_qid=$_GET["id"];  
    $_ans=$_POST["txtans"];
    $_img=$_POST["txtansimage"];
    $_date=$_POST["txtdate"];
        if(isset($_POST["btnsubmit"]))
        {
        require 'database.php';
      $obj=new question;
       $result=$obj->insertans($_ans,$_img,$_qid,$_uid,$_date);
            if($result===true)
                {
               header('location:postans.php?id='.$_qid.'');
                }
                else
                {
                echo "record inserted not suseesfully";
                echo $result;
                }
        }
    }
}
?>