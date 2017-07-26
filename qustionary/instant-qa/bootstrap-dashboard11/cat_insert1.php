
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
   $_name=$_POST["txtname"];
   $_catid=$_POST["fk_cat_id"];
   echo $_catid;
if(isset($_POST["btnadd"]))
    {
       require 'cat_database.php';
      $obj=new catadmin;
       
$result=$obj->InsertCat($_catid,$_name);
if($result==true)
            {
               echo "Category insert successfully";
            header('location:category.php');
            }
            else
            {
                   echo "Category insert not successfully";
                   
            }


}
}
?>