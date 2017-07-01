<?php

class database{

private static $conn=null;

public static function connect(){
    self::$conn=mysqli_connect("localhost","root","","testdb");
 return  self::$conn;

}
public static function disconnect()
{
    mysqli_close(self::$conn);

   self::$conn=null;
   
}
public function getallcat()
{
    $conn=database::connect();
    $sql="select * from cat_table";
    $result=$conn->query($sql);
    return $result;

}
}


?>