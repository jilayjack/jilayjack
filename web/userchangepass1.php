<?php
session_start();
?>
<!DOCTYPE html>
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

    <body  >
<?php 
//include 'nav.php';
//include 'side.php';


?>

<div class="header" id="home">
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Your Profile <span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="agile_inner_drop_nav_info">
									<div class="col-sm-6 multi-gd-img1 multi-gd-text ">
										<a href="mens.html"><img src="images/top2.jpg" alt=" "/></a>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="userprofile.php">View Profile</a></li>
											<li><a href="mens.html">Update Profile</a></li>
											<li><a href="mens.html">Change Password</a></li>
											<li><a href="home.php">Sign Out</a></li>
											
                                            </a></li>
										</ul>
									</div>
				
         </a></li>
			
    	</ul>
	</div>
</div>



<form method="post" action="<?php echo $_SERVER["PHP_SELF"]?>">
<div>



<div class="jumbotron">
 <center> <h1>Change Password</h1></center>
  
  <br>
<div class="col-md-5">

</div>


<div class="span9">
  
 <div class="input-group input-group-lg">
<center>
  
  <input type="password" name="txtpass" class="form-control" placeholder="Old-Password" aria-describedby="sizing-addon1" >
</center>
  
  <center>
 <input type="password" name="txtpass1" class="form-control" placeholder="New-Password" aria-describedby="sizing-addon1" ><br>
<input type="password" name="txtpass2" class="form-control" placeholder="Retype New-Password" aria-describedby="sizing-addon1" >

</center>
<center><a href>Forgot Password ?</a></center>
</div>

<br>
<center>
<button class="btn btn-danger" name="sub" >Submit</button>
</div>
</div>
</form>

<?php 
       if($_SERVER["REQUEST_METHOD"]=="POST"){
$email=$_SESSION["Username"];

           $opass=$_POST["txtpass"];
           $npass=$_POST["txtpass1"];
           $rnpass=$_POST["txtpass2"];
        
           $conn=new mysqli("localhost","root","","miniproject");
       
  //
$sql="select * from user_tbl where pk_email_id='".$email."'";
        $result=$conn->query($sql);
        $row=$result->fetch_assoc();

$pass=$row["user_password"];

echo $pass;
  // echo $npass;
//echo $rnpass;


if($npass==$rnpass)
{
$sql="select * from user_tbl where pk_email_id='".$email."' and user_password='".$opass."'";
        $result=$conn->query($sql);
        if($result->num_rows==1){
        $sql="update user_tbl set user_password='".$npass."',user_cpassword='".$rnpass."' where pk_email_id='".$email."' ";
 
    //echo $sql;
if($conn->query($sql)===true){
    echo "sucessfull";

}
else
{
    echo "please enter old password";
}
        }
}

    

else
{
    echo "unsucessfull";
}
       }
   
   
   
   
   
   
   
?>



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