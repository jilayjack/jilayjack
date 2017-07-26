<?php
session_start();


if ($_SESSION["Username"]=="")
{ 
    header('location:errorshow.php');
}
else
{
  if($_SERVER["REQUEST_METHOD"]=="POST")
    {
   $conn=new mysqli("localhost","root","","questionery");

//   $_i="";
    $_uid=$_SESSION["Username"];
    $_qid=$_GET["id"];  
    $_ans=$_POST["txtans"];
    $_img=$_POST["txtansimage"];
    $_date=date('d/m/y');
       
   $sql="insert into answer_tbl values('".null."','".$_ans."','".$_img."','".$_qid."','".$_uid."','".$_date."','0')";
   if($conn->query($sql)===true){
    
    
     header('location:postans.php?id='.$_qid.'');
              
    //echo "succesful";
}
else
{
    echo "fail";
    echo $sql;
}
    
       /* if(isset($_POST["btnsubmit"]))
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
        }*/
    }
}
?>