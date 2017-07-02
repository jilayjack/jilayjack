<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<body>
    <?php session_start();
	
if($_SESSION["email"]==null)
{require 'menu1.php';}
else
{
require 'menulogout.php';
}
	
?>
<!-- products -->
	<!-- grow -->
	<div class="grow">
		<div class="container">
			<h2>Products</h2>
		</div>
	</div>
	<!-- grow -->
	<div class="pro-du">
		<div class="container">
			<div style="height:820px;overflow-y:scroll;" class=" product1 col-md-9 ">
				<div class=" bottom-product">
		
	<?php			
    	require 'classproduct.php';
$obj=new classproduct();
$_result=$obj->getallproduct();


while($row=$_result->fetch_assoc()){
			echo '		<div class="col-md-6  bottom-cd simpleCart_shelfItem">';
			echo '			<div class="product-at ">';
			echo '			<a href="single1.php?id='.$row["product_id"].'"><img  class="img-responsive" src="../'.$row["image1"].'" alt="">';
			echo '			<div class="pro-grid">';
			echo '						<span class="buy-in">Buy Now</span>';
			echo '			</div>';
			echo '		</a>	';
			echo '		</div>';
			echo '		<p class="tun"><span>'.$row["pname"].'</span><br>CLARISSA</p>';
			echo '		<div class="ca-rt">';
			echo '			<a href="#" class="item_add"><p class="number item_price"><i> </i>$'.$row["price"].'</p></a>';
			echo '		</div>';
			echo '		<div class="clearfix"></div>					';
			echo '	</div> ';
			
}
                    ?>					
						<div class="clearfix"> </div>
				</div>
				
				</div>
			<div class="col-md-3 prod-rgt">
				<div class=" pro-tp">
					<div class="pl-lft">
						<a href="#"><img class="img-responsive" src="../images/l2.jpg" alt=""></a>
					</div>
					<div class="pl-rgt">
						<h6><a href="#">TRIBECA LIVING</a></h6>
						<p><a href="#">450$</a></p>
					</div>
						<div class="clearfix"></div>
				</div>
				<div class=" pro-tp">
					<div class="pl-lft">
						<a href="#"><img class="img-responsive" src="../images/l3.jpg" alt=""></a>
					</div>
					<div class="pl-rgt">
						<h6><a href="#">TRIBECA LIVING</a></h6>
						<p><a href="#">450$</a></p>
					</div>
						<div class="clearfix"></div>
				</div>
				<div class=" pro-tp">
					<div class="pl-lft">
						<a href="#"><img class="img-responsive" src="../images/l1.jpg" alt=""></a>
					</div>
					<div class="pl-rgt">
						<h6><a href="#">TRIBECA LIVING</a></h6>
						<p><a href="#">450$</a></p>
					</div>
						<div class="clearfix"></div>
				</div>
					
				<div class="pr-btm">
				<h4>What Our Client Say</h4>
					<img class="img-responsive" src="../images/pi.jpg" alt="">
					<h6>John</h6>
					<p>Lorem Ipsum is simply dummy text of the printing industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
				</div>
			</div>
				<div class="clearfix"></div>
		</div>
	</div>
<!-- products -->
<?php require 'footer.php'; ?>
</body>
</html>
			