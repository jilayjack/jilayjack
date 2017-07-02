<!doctype html>
<html>
	</body>


	<?php session_start();
	$email=$_GET["email"];
//echo $email;
if($email==null)
{
//header('location:login.php');
//require 'menu1.php';

}
else
{
require 'menulogout.php';
}
require 'classproduct.php';
$obj=new classproduct();
//$email=$_SESSION["email"];
$result=$obj->getcheckout($email);	
$res=$obj->userview($email);
$row=$res->fetch_assoc();
//echo $email;
?>

		
	
	<!-- grow -->
	<div class="grow">
		<div class="container">
			<h2>BILL</h2>
		</div>
	</div>
	<!-- grow -->
<div class="container">
	<div class="check">	 
			 <h1>BILL DETAILS</h1>
<!-- Main content -->
    <section class="invoice  container">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i><?php echo $email; ?>
            <small class="pull-right">Date:<?php echo date("d-m-y"); ?> </small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          From
          <address>
            <strong>mattress, Inc.</strong><br>
            795 Folsom Ave, Suite 600<br>
            San Francisco, CA 94107<br>
            Phone: (804) 123-5432<br>
            Email: info@almasaeedstudio.com
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          To
          <address>
            <strong><?php echo $email; ?></strong><br>
            <form  action="insertbill1.php?email=<?php echo $email;?>" method="post">
            <textarea rows="3" name="textarea" cols="30" placeholder="<?php echo $row["user_address"]; ?>" value="<?php echo $row["user_address"]; ?>"></textarea>     
          <?php $address=$row["user_address"] ?>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <b>Invoice </b><br>
          <br>
          <b>Order ID:</b> 4F3S8J<br>
          <b>Payment Due:</b> <?php
          $day=date("y-m-d");
          $date=new datetime($day);
          $date->modify('+10 day');
          echo $date->format('d-m-y');

          
          ?><br>
          <b>Account:</b> 968-34567
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>Qty</th>
              <th>Product</th>
              <th>Serial #</th>
              <th>Description</th>
              <th>Subtotal</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $res=$obj->getcheckout($email);
            $total=0;
            $product="";
            while($_row=$res->fetch_assoc())
            {
              
              $cid=$_row["fk_product_id"];
              $res1=$obj->getproduct($cid);
				$row=$res1->fetch_assoc();
            echo '<tr>';
             echo ' <td>1</td>';
              echo '<td>'.$row["product_name"].'</td>';
              echo '<td>'.$row["pk_product_id"].'</td>';
              $product=$product.$row["pk_product_id"].",";
              //echo '<td>'.$row["detail"].'</td>';
              echo '<td>'.$row["product_prize"].'</td>';
              $total=$total+$row["product_prize"];
            echo '</tr>';
            }
            ?>
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-6">
          <p class="lead">Payment Methods:</p>
          <input type="radio" checked value="visa" name="radio">PayTM
          <input type="radio" value="mastercard" name="radio">RUPAY
          <input type="radio" value="american express" name="radio">CREDIT CARD
          
          <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg
            dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
          </p>
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
          <p class="lead">Amount Due 
           <?php
          $day=date("y-m-d");
          $date=new datetime($day);
          $date->modify('+10 day');
          echo $date->format('d-m-y');
          ?>
          </p>
          <div class="table-responsive">
            <table class="table">
              <tr>
                <th style="width:50%">Subtotal:</th>
                <td><?php $total; ?></td>
              </tr>
              
              <tr>
                <th>Shipping:</th>
                <td>100</td>
              </tr>
              <tr>
                <th>Total:</th>
                <td><?php $total=$total+100;
                echo $total; ?></td>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
        <input type="text" name="address" value="<?php echo $address;?>" hidden>
          <input type="text" name="product" value="<?php echo $product;?>" hidden>
          <input type="text" name="total" value="<?php echo $total;?>" hidden>
          <button type="submit"  name="btnsub" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment
          </button>
          </form>
          <?php 
          if(isset($_POST["btnsub"]))
          {
              echo "Payment Successfully";
          }
          
          ?>
       </div>
      </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
    <div><br></div>
  </div>
  </div>
  </div>
  <?php
  //require 'footer.php';
  
  ?>
  
</body>
</html>