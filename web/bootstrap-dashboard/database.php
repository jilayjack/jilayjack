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
            $res=$conn->query("select c.*,p.* from product_tbl p,cat_tbl c where c.pk_cat_id=p.fk_cat_id");
            return $res;
             productadmin::disconnect();
         }
          public function displayproductimg($_id)
         {
             $conn= productadmin::connect();
            $res=$conn->query("select c.*,p.* from product_tbl p,cat_tbl c where c.pk_cat_id=p.fk_cat_id and pk_product_id='". $_id ."'");
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
            public function DeleteProduct($_id)
         {
             $conn=productadmin::connect();
             $result=$conn->query("select * from product_tbl where pk_product_id=".$_id);
             $row=$result->fetch_assoc();
            unlink($row["product_image1"]);
              unlink($row["product_image2"]);
                unlink($row["product_image3"]);
              $res=$conn->query("delete from product_tbl where pk_product_id=".$_id);
            return $res;
            productadmin::disconnect();
         }  
          public function UpdateProduct($_pid)
         {
             $conn=productadmin::connect();
            $res=$conn->query("select * from product_tbl where pk_product_id=".$_pid);
            return $res;
            pk_product_id::disconnect();
         } 
         
            public function UpdateProduct1($_pid,$_name,$_price,$_menuf,$_color,$_pimg1,$_pimg2,$_pimg3,$_warr,$_soh,$_desc,$_cat)
         {
             $conn=productadmin::connect();
            $res=$conn->query("update product_tbl set product_name='". $_name ."',product_prize='". $_price ."',product_mfg='". $_menuf ."',product_color='". $_color ."',product_image1='". $_pimg1 ."',product_image2='". $_pimg2 ."',product_image3='". $_pimg3 ."',product_warrenty='". $_warr ."',product_SOH='". $_soh ."',product_detail='". $_desc ."',fk_cat_id='". $_cat ."' where pk_product_id=". $_pid ."");
               return $res;
            productadmin::disconnect();
         } 
           public function mutidelete($all)
         {
             $conn=productadmin::connect();
             $result=$conn->query("select * from product_tbl where pk_product_id in ($all)");
             while($row =$result->fetch_assoc())
             {
                   unlink($row["product_image1"]);
              unlink($row["product_image2"]);
                unlink($row["product_image3"]);
             }
                $sql="delete from product_tbl where pk_product_id in ($all)";
              $res=$conn->query($sql);
            return $res;
            productadmin::disconnect();
         }  
        
}
class useradmin
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
    
        public function displayuser()
         {
             $conn= useradmin::connect();
            $res=$conn->query("select * from user_tbl");
            return $res;
             useradmin::disconnect();
         }
             public function Deleteuser($_id)
         {
             $conn=useradmin::connect();
             $result=$conn->query("select * from user_tbl where pk_email_id='". $_id ."'");
             $row=$result->fetch_assoc();
            unlink($row["user_profile_pic"]);
             $res=$conn->query("delete from user_tbl where pk_email_id='". $_id ."'");
            return $res;
            useradmin::disconnect();
         } 
}
class billadmin
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
    
        public function displaybill()
         {
             $conn= billadmin::connect();
            //       echo "select u.*,p.*,b.* from product_tbl p,user_tbl u,bill_tbl b where b.fk_email_id=u.pk_email_id and b.fk_product_id=p.pk_product_id";
            $res=$conn->query("select p.*,b.* from product_tbl p,bill_tbl b where  b.fk_product_id=p.pk_product_id");
            return $res;
             billadmin::disconnect();
         }
           public function mutideletebill($all)
         {
             $conn=billadmin::connect();
                  $sql="delete from bill_tbl where pk_bill_no in ($all)";
              $res=$conn->query($sql);
            return $res;
            billadmin::disconnect();
         }  
}
class addadmin
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
         public function Insertadmin($_email,$_name,$_pass,$_mobile,$_img1)
         {
             $_add="abad";
             $_gen="male";
             $_type="admin";
             $conn= addadmin::connect();
            $res=$conn->query("insert into user_tbl  values('". $_email ."','". $_name ."','". $_pass ."','". $_pass ."','". $_add ."','". $_mobile ."','". $_gen ."','". $_img1 ."','". $_type ."')");
            return $res;
             addadmin::disconnect();
         }
    
}
?>