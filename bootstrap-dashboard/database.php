<?php
class productadmin
{
     private static $conn = null;
        public static function connect()
        {
            self::$conn=mysqli_connect("localhost","root","","miniproject");
            return self::$conn;
         }
         public static function disconnect()
        {
            self::$conn=mysqli_disconnect();
             self::$conn=null;
         }
    
        public function displayproduct()
         {
             $conn= productadmin::connect();
            $res=$conn->query("select * from product_tbl");
            return $res;
             productadmin::disconnect();
         }
}