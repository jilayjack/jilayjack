<?php
session_start();
?>


<!DOCTYPE html>
<html>

<body>
 <?php


    $email=$_GET["email"];
//    $id=$_GET["id"];

//$_SESSION["Uname"]=$email;
// session_start();
if($email==null)
{
//header('location:login.php');


}
else
{
  require 'classproduct.php';
$obj=new classproduct();
//$email=$_SESSION["email"];
$result=$obj->getbill($email);
$row=$result->fetch_assoc();
if($result->num_rows==0)
{
  //header('location:billempty.php');
}
require 'menulogout.php';
}

$obj=new classproduct();
//$email=$_SESSION["email"];
$result=$obj->getbill($email);



while($row=$result->fetch_assoc())
{
 echo '   <!-- Main content -->';
    echo '<section class="invoice  container">';
      echo '<!-- title row -->';
     echo ' <div class="row">';
    echo '    <div class="col-xs-12">';
        echo '  <h2 class="page-header">';
       echo '     <i class="fa fa-globe"></i>'. $email.' ';
       echo '     <small class="pull-right">Date:'. $row["bill_date"].' </small>';
echo '          </h2>';
      echo '  </div>';
     echo '   <!-- /.col -->';
      echo '</div>';
    echo '  <!-- info row -->';
 echo '     <div class="row invoice-info">';
echo '        <div class="col-sm-4 invoice-col">';
      echo '    From';
          echo '<address>';
     echo '       <strong>mattress, Inc.</strong><br>';
      echo '      795 Folsom Ave, Suite 600<br>';
echo '            San Francisco, CA 94107<br>';
      echo '      Phone: (804) 123-5432<br>';
echo '            Email: info@almasaeedstudio.com';
      echo '    </address>';
      echo '  </div>';
 echo '       <!-- /.col -->';
       echo ' <div class="col-sm-4 invoice-col">';
 echo '         To';
       echo '   <address>';
            echo '<strong>'. $email.'</strong> <br>';
echo            $row["bill_shipping_address"];
      echo '    </address>';
echo '        </div>';
    echo '    <!-- /.col -->';
        echo '<div class="col-sm-4 invoice-col">';
echo '          <b>Invoice:- '.$row["pk_bill_no"].'</b><br>';
      echo '    <br>';
  echo '        <b>Order ID:</b> 4F3S8J<br>';
        echo '  <b>Payment Due:</b> ';
        $day=date("y-m-d");
          $date=new datetime($day);
          $date->modify('+10 day');
          echo $date->format('d-m-y');
        echo '<br>';
    echo '      <b>Account:</b> 968-34567';
   echo '     </div>';
   echo '     <!-- /.col -->';
 echo '     </div>';
echo '      <!-- /.row -->';
echo '      <!-- Table row -->';
echo '      <div class="row">';
echo '        <div class="col-xs-12 table-responsive">';
echo '          <table class="table table-striped">';
echo '            <thead>';
echo '            <tr>';
echo '              <th>Qty</th>';
echo '              <th>Product</th>';
      echo '        <th>Serial #</th>';
            echo '  <th>Description</th>';
echo '              <th>Subtotal</th>';
      echo '      </tr>';
            echo '</thead>';
echo '            <tbody>';
      
            
            $arr=explode(",",$row["fk_product_id"]);
         
          $length=count($arr);
            $total=0;
            for($i=0;$i<$length-1;$i++)
            {
              $res=$obj->getproduct($arr[$i]);
				$row1=$res->fetch_assoc();
            echo '<tr>';
             echo ' <td>1</td>';
              echo '<td>'.$row1["product_name"].'</td>';
              echo '<td>'.$row1["pk_product_id"].'</td>';
              //echo '<td>'.$row1["detail"].'</td>';
              echo '<td>'.$row1["product_prize"].'</td>';
              $total=$total+$row1["product_prize"];
              
            echo '</tr>';
            }
            
            
 echo '           </tbody>';
       echo '   </table>';
   echo '     </div>';
        
  echo '    </div>';
      

     echo ' <div class="row">';
      
     echo '   <div class="col-xs-6">';
     echo '     <p class="lead">Payment Methods:</p>';
          /*
          if($row["bill_payment_type"]=="visa")
          {
         echo ' <img src="../images/visa.png" alt="Visa">';
          }
          elseif($row["payment_type"]=="mastercard")
          {
          echo '<img src="../images/mastercard.png" alt="Mastercard">';
          }
          elseif($row["payment_type"]=="american express")
          {
          echo '<img src="../images/american-express.png" alt="American Express">';
          }
          else
          {
          echo '<img src="../images/paypal2.png" alt="Paypal">';
          }*/
          
   echo '       <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">';
     echo '       Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg';
    echo '        dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.';
    echo '      </p>';
echo '        </div>';
        
 echo '       <div class="col-xs-6">';
 echo '         <p class="lead">Amount Due ';
          $day=date("y-m-d");
          $date=new datetime($day);
          $date->modify('+10 day');
          echo $date->format('d-m-y');
 echo '</p>';

echo '          <div class="table-responsive">';
echo '            <table class="table">';
echo '              <tr>';
echo '                <th style="width:50%">Subtotal:</th>';
echo '                <td>'. $total.' </td>';
echo '              </tr>';
              
echo '              <tr>';
echo '                <th>Shipping:</th>';
echo '                <td>100</td>';
echo '              </tr>';
echo '              <tr>';
echo '                <th>Total:</th>';
echo '                <td>';
                echo $row["bill_amount"]; 
echo '             </td> </tr>';
 echo '           </table>';
echo '          </div>';
echo '        </div>';
        
echo '      </div>';
      

      
 echo '     <div class="row no-print">';
       echo ' <div class="col-xs-12">';
          
     //echo '     <button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment';
   echo '       </button>';
 echo '      </div>';
 echo '     </div>';
 echo '   </section>';
    
 echo '   <div class="clearfix"></div>';
echo '    <div><br></div>';
echo '  </div>';
}
  ?>
  <?php
  //require 'footer.php';
  ?>
</body>
</html>
