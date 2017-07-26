<?php

class database{

private static $conn=null;

public static function connect(){
    self::$conn=mysqli_connect("localhost","root","","questionery");
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
    $sql="select * from subject_tbl";
    $result=$conn->query($sql);
    return $result;

}
}


?>