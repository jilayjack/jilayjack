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
    public function getproducts()
    {
        $conn=database::connect(); //here connect is static function so we are calling function using class name
        $sql="select * from product_tbl";
        $res=$conn->query($sql);
        return $res;
        database::disconnect();
    }

    public function insertproducts($id,$name,$color,$price,$manu,$warr,$soh,$img,$cid)
    {
         $conn=database::connect(); //here connect is static function so we are calling function using class name
        $sql="insert into product_table values('". $id ."','". $name ."','". $color."','".$price."','". $manu ."','". $warr ."','". $soh ."','". $img ."','". $cid ."')";
        $res=$conn->query($sql);
        return $res;
        database::disconnect();
    }

    public function updateproducts($id,$name,$color,$price,$manu,$warr,$soh,$img,$cid)
    {
        $conn=database::connect();
        $sql="update product_table set p_name='". $name ."',p_color='". $color ."',p_price='". $price ."',manufacture='". $manu ."',warranty='". $warr ."',soh='". $soh ."',p_img='". $img ."',fk_cat_id='". $cid ."' where p_id='". $id ."'";
        $res=$conn->query($sql);
        return $res;
        database::disconnect();
    }
    public function deleteproduct($id)
    {
        $conn=database::connect();
        $sql="delete from product_table  where p_id='". $id ."' ";
        $res=$conn->query($sql);
        return $res;
        database::disconnect();
    }
}
?>