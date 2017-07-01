<?php
class database
{
    private static $conn=null;

    public static function connect()
    {
        self::$conn=mysqli_connect("localhost","root","","testdb");
        return self::$conn;
    }

    public static function disconnect()
    {
        mysqli_close(self::$conn);
        self::$conn=null;
    }
    public function getproducts()
    {
        $conn=database::connect(); //here connect is static function so we are calling function using class name
        $sql="select * from product_table";
        $res=$conn->query($sql);
        return $res;
        database::disconnect();
    }
    public function getcat($id)
    {
        $conn=database::connect(); //here connect is static function so we are calling function using class name
        $sql="select * from cat_table where cat_id=".$id;
        $res=$conn->query($sql);
        return $res;
        database::disconnect();
    }
    public function login($email,$password)
    {
        $conn=database::connect(); //here connect is static function so we are calling function using class name
        $sql="select * from admin_table where email_id='".$email."'and password='".$password."'";
        $res=$conn->query($sql);
        return $res;
        database::disconnect();
    }


    public function insertproducts($_pid,$_pname,$_pcolor,$_pprice,$_manu,$_warranty,$_stock,$_img)
    {
         $conn=database::connect(); //here connect is static function so we are calling function using class name
        $sql="insert into product_table values('".null."','". $_pname ."','". $_pcolor ."','". $_pprice ."','". $_manu ."','". $_warranty ."','".$_stock  ."','". $_img ."')";
        $res=$conn->query($sql);
        return $res;
        database::disconnect();
    }

    public function insertcat($_cid,$_cname)
    {
         $conn=database::connect(); //here connect is static function so we are calling function using class name
        $sql="insert into cat_table values('".null."','". $_cname ."')";
        $res=$conn->query($sql);
        return $res;
        database::disconnect();
    }
    public function updateproducts($_pid,$_pname,$_pcolor,$_pprice,$_manu,$_warranty,$_stock,$_img)
    {
        $conn=database::connect();
        $sql="update product_table set product_name='". $_pname ."',product_color='". $_pcolor ."',product_price='". $_pprice ."',manufacturer='". $_manu ."',warranty='". $_warranty ."',stock_on_hand='".$_stock."',product_img='". $_img ."' where product_id='".$_pid."'";
$res=$conn->query($sql);
        return $res;
        database::disconnect();
    }
    public function updatecat($_cid,$_cname)
    {
        $conn=database::connect();
        $sql="update cat_table set cat_name='". $_cname ."'  where cat_id='".$_cid."'";
$res=$conn->query($sql);
        return $res;
        database::disconnect();
    }
    public function deleteproduct($id)
    {
        $conn=database::connect();
        $sql="delete from product_tbl  where p_id='". $id ."' ";
        $res=$conn->query($sql);
        return $res;
        database::disconnect();
    }
}
?>