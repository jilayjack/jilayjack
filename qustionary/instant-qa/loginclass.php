<?php
class database
{
    private static $conn=null;

    public static function connect()
    {
        self::$conn=mysqli_connect("localhost","root","","questionery");
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
        $sql="select * from user_tbl where email_id='".$email."'and password='".$password."'";
        $res=$conn->query($sql);
        return $res;
        database::disconnect();
    }
    public function loginer()
    {
        $conn=database::connect(); //here connect is static function so we are calling function using class name
        $sql="select * from user_tbl";
        $res=$conn->query($sql);
        return $res;
        database::disconnect();
    }
public function adminlogin($email,$password)
    {
        $conn=database::connect(); //here connect is static function so we are calling function using class name
        $sql="select * from admin_table where email_id='".$email."'and password='".$password."'";
        $res=$conn->query($sql);
        return $res;
        database::disconnect();
    }

public function update($email)
    {
        $conn=database::connect(); //here connect is static function so we are calling function using class name
        $sql="select * from user_tbl where pk_email_id='".$email."'";
        $res=$conn->query($sql);
        return $res;
        database::disconnect();
    }


public function update1($name,$address,$mobile,$gender,$image,$email)
    {
        $conn=database::connect(); //here connect is static function so we are calling function using class name
        $sql="update user_tbl set uname='". $name ."',user_address='". $address ."',user_mobile_no='". $mobile ."',user_gender='".$gender."',user_profile_pic='". $image ."' where pk_email_id='". $email ."'";
        $res=$conn->query($sql);
        return $res;
        database::disconnect();
    }

    }

?>