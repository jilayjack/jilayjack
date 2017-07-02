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
    
    public function login($email,$password)
    {
        $conn=database::connect(); //here connect is static function so we are calling function using class name
        $sql="select * from admin_table where email_id='".$email."'and password='".$password."'";
        $res=$conn->query($sql);
        return $res;
        database::disconnect();
    }


    
}
?>