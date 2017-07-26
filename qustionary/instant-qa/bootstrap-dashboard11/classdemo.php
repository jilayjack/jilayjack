<?php
class database
{
    private static $conn=null;

    public static function connect()
    {
        self::$conn=mysqli_connect("localhost","root","","miniproject");
        return self::$conn;
    }

    public static function disconnect()
    {
        mysqli_close(self::$conn);
        self::$conn=null;
    }
    
    public function getcat($id)
    {
        $conn=database::connect(); //here connect is static function so we are calling function using class name
        $sql="select * from cat_tbl where pk_cat_id=".$id;
        $res=$conn->query($sql);
        return $res;
        database::disconnect();
    }
    

    
    
    public function updatecats($_cid,$_cname)
    {
        $conn=database::connect();
        $sql="update cat_tbl set cat_name='". $_cname ."'  where pk_cat_id='".$_cid."'";
$res=$conn->query($sql);
        
        return $res;
        database::disconnect();
    }
    
}
?>