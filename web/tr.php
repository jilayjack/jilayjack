<html>
<head>


<title>Elite Shoppy an Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<!--/tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elite Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//tags -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<!-- //for bootstrap working -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
</head>


<body>

										
    
    
    
    
    <?php
require 'classdemo.php';
$obj=new database();
$result=$obj-> getproducts();

while($row=$result->fetch_assoc())

{

echo '<div class="resp-tabs-container">';
		echo '<div class="tab1">';
			echo '<div class="col-md-3 product-men">';
				echo '<div class="men-pro-item simpleCart_shelfItem">';
										
    
echo '<div class="men-thumb-item"> ';
//echo '<div class="product-box">';
echo '<p><a href="usrdisplay1.php?id='.$row["pk_product_id"].'">';//.'<img src=""  alt="" height="50px" width="50px" /></a></p>';
echo '<img src="'.$row["product_image1"].'" alt="" class="pro-image-front">';
echo '<img src="'.$row["product_image2"].'" alt="" class="pro-image-front">';
echo '<div class="men-cart-pro">';
echo '<div class="inner-men-cart-pro">';
echo '<a href="single.html" class="link-product-add-cart">.Quick View.</a>';
echo '</div>';
echo '</div>';
echo '<div class="item-info-product ">';
	echo '<h4><a href="#">'.$row["product_name"].'</a></h4>';
		echo '<div class="info-product-price">';
			echo '<span class="item_price">'.$row["product_prize"].'</span>';
					echo '</div>';
									
										
//echo '<a class="title" href="usrdisplay1.php?id='.$row["pk_product_id"].' ">'.$row["product_name"].'</a></p>';
//echo '<a class="category" href="usrdisplay1.php?id='.$row["p_id"].'" >'.$row["cat_name"].'</a></p>';0
//echo '<p class="price">'.$row["product_prize"].'</p>';
//echo '<a href="#" class="btn btn-success">.add to cart.</a>';
			echo '<form action="#" method="post">';
			echo '<fieldset>';
            echo '<input type="submit" class="btn btn-success" name="btnsub" value="ADD to Cart">';
            echo '<br>';
            echo '<br>';
echo '<input type="submit" class="btn btn-success" name="btnsub" value="BUY">';																										
echo '</div>';

					echo '</div>';
					echo '</div>';
					echo '</div>';

}


?>
</div></div>
</div>
    
    
    
    
    <!--								<div class="men-thumb-item">
										<img src="images/1-1.jpg" alt="" class="pro-image-front">
										<img src="images/1-1(1).jpg" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.html" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">Formal Blue Shirt</a></h4>
										<div class="info-product-price">
											<span class="item_price">$45.99</span>
											<del>$69.71</del>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Formal Blue Shirt" />
																	<input type="hidden" name="amount" value="30.99" />
																	<input type="hidden" name="discount_amount" value="1.00" />
																	<input type="hidden" name="currency_code" value="USD" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Add to cart" class="button" />
																</fieldset>
															</form>
														</div>
																			
									</div>
								</div>
						</div>
	-->
    <!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<script src="js/modernizr.custom.js"></script>
	<!-- Custom-JavaScript-File-Links --> 
	<!-- cart-js -->
	<script src="js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>

	<!-- //cart-js --> 
<!-- script for responsive tabs -->						
<script src="js/easy-responsive-tabs.js"></script>
<script>
	$(document).ready(function () {
	$('#horizontalTab').easyResponsiveTabs({
	type: 'default', //Types: default, vertical, accordion           
	width: 'auto', //auto or any width like 600px
	fit: true,   // 100% fit in a container
	closed: 'accordion', // Start closed if in accordion view
	activate: function(event) { // Callback function if tab is switched
	var $tab = $(this);
	var $info = $('#tabInfo');
	var $name = $('span', $info);
	$name.text($tab.text());
	$info.show();
	}
	});
	$('#verticalTab').easyResponsiveTabs({
	type: 'vertical',
	width: 'auto',
	fit: true
	});
	});
</script>
<!-- //script for responsive tabs -->		
<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
<!-- //stats -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->


<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap.js"></script>

    </body>
    </html>