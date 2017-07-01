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
         public function getcategory()
         {
             $conn= productadmin::connect();
            $res=$conn->query("select * from cat_tbl");
            return $res;
             productadmin::disconnect();
         }
         public function InsertProduct($_name,$_price,$_menuf,$_color,$_img1,$_img2,$_img3,$_warr,$_soh,$_desc,$_catid)
         {
             $conn= productadmin::connect();
            $res=$conn->query("insert into product_tbl  values('". null ."','". $_name ."','". $_price ."','". $_menuf ."','". $_color ."','". $_img1 ."','". $_img2 ."','". $_img3 ."','". $_warr ."','". $_soh ."','". $_desc ."','". $_catid ."')");
            return $res;
             productadmin::disconnect();
         }
}