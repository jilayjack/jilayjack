<?php
session_start();
//$conn = mysql_connect("localhost","root","");
//mysql_select_db("phppot_examples",$conn);


?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script src="share/js/jquery-3.2.1.min.js"></script>
<!-- latest complied and minified css-->
<link rel="stylesheet" href="share/css/bootstrap.min.css">
<!--optional theme-->
<link rel="stylesheet" href="share/css/bootstrap-theme.min.css">
<!-- latest complied and minified javascript-->
<script src="share/js/bootstrap.min.js"></script>
<title> Instant Q&amp;A</title>
<link rel="stylesheet" type="text/css" href="wp-content\themes\instant-qa\style.css"> 
<link rel="stylesheet" type="text/css" href="wp-content\themes\instant-qa\color-schemes\blue-meadow\blue-meadow-styles.css"> 
<link rel="pingback" href="http://wordpressqa.com/instant-qa/xmlrpc.php">
<link rel='dns-prefetch' href='//s.w.org'>
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/wordpressqa.com\/instant-qa\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.7.5"}};
			!function(a,b,c){function d(a){var b,c,d,e,f=String.fromCharCode;if(!k||!k.fillText)return!1;switch(k.clearRect(0,0,j.width,j.height),k.textBaseline="top",k.font="600 32px Arial",a){case"flag":return k.fillText(f(55356,56826,55356,56819),0,0),!(j.toDataURL().length<3e3)&&(k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57331,65039,8205,55356,57096),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57331,55356,57096),0,0),c=j.toDataURL(),b!==c);case"emoji4":return k.fillText(f(55357,56425,55356,57341,8205,55357,56507),0,0),d=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55357,56425,55356,57341,55357,56507),0,0),e=j.toDataURL(),d!==e}return!1}function e(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i,j=b.createElement("canvas"),k=j.getContext&&j.getContext("2d");for(i=Array("flag","emoji4"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='A2A_SHARE_SAVE-css' href='wp-content\plugins\add-to-any\addtoany.min.css?ver=1.13' type='text/css' media='all'>
<script type='text/javascript' src='wp-includes\js\jquery\jquery.js?ver=1.12.4'></script>
<script type='text/javascript' src='wp-includes\js\jquery\jquery-migrate.min.js?ver=1.4.1'></script>
<script type='text/javascript' src='wp-content\plugins\add-to-any\addtoany.min.js?ver=1.0'></script>
<link rel='https://api.w.org/' href='wp-json\index.htm'>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc.xml?rsd">
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes\wlwmanifest.xml"> 

<script type="text/javascript">
var a2a_config=a2a_config||{};a2a_config.callbacks=a2a_config.callbacks||[];a2a_config.templates=a2a_config.templates||{};
</script>
<script type="text/javascript" src="http://static.addtoany.com/menu/page.js" async="async"></script>
<!--[if IE 6]>
    <script src="http://wordpressqa.com/instant-qa/wp-content/themes/instant-qa/js/DD_belatedPNG_0.0.7a-min.js"></script>
    <script>
      DD_belatedPNG.fix('img, #main, #topNav');
    </script>
    <link rel="stylesheet" type="text/css" href="http://wordpressqa.com/instant-qa/wp-content/themes/instant-qa/styles-ie6.css"/>
<![endif]--> 
<!--[if IE 7]>
	<link rel="stylesheet" type="text/css" href="http://wordpressqa.com/instant-qa/wp-content/themes/instant-qa/styles-ie7.css"/>
<![endif]--> 

<script type="text/javascript" src="wp-content\themes\instant-qa\js\tab-widget.js"></script>

</head>
<?php 


?>
<body id="home">
	<?php include 'hnav.php';?>
	<!-- Main Section -->
    <div id="main">
    	<div id="mainContent">
        	<?php include 'sidebar1.php';?>            
            <!-- Center Column -->
            <div id="centerCol" class="left">
            	
                <!-- Search Form -->
				<div class="greenBox"><div class="greenBoxInner searchbox"><center><br><font size="15" >Sign up</font></center></div></div>                <!-- Search Form -->
	<!-- Main Box -->
                <div class="greyBox3">
                    <div class="greyBoxInner3">
                    	                        
                       
                        
                        <!-- Show Form Errors -->
						                        <!-- / Show Form Errors -->
                      	
                        <div class="formImage right"><img src="wp-content\themes\instant-qa\images\signup-image.png" alt="Sign Up"></div>
                  			<!-- Sign Up Form -->
							<form name="signupform" id="signupform" action="sign.php" method="post">
                               <div class="message"><?php if(isset($message)) { echo $message; } ?></div>
 
                                <label> Username:<span class="asterixRequired">*</span></label>
                                <fieldset><input type="text" name="txtuname" id="new_user_login" class="text" value="" required></fieldset>
                                
                                
                                
                                <label> Email Address:<span class="asterixRequired">*</span></label><br>
                                <fieldset><input type="text" class="text" name="txtemail" id="user_email" value=""  required></fieldset>
	                          <label> Password:<span class="asterixRequired">*</span></label>
                                <fieldset><input type="password" name="txtpass" id="password1" class="text" value=""  required></fieldset>
      							
                                <label>Mobile no</span></label><br>
                                <fieldset><input type="text" name="txtno"  class="text" value=""  required></fieldset>
                                  <label>Upload your Image</span></label><br>
                                <fieldset><input type="file"  class="form-control" name="txtimg"  required ></fieldset>
                                
                                  <label><br>Gender<span class="asterixRequired">*</span></label><br>
                                <input type="radio" name="gender" value="female"   checked>female<input type="radio" name="gender" value="male">male</div>
     <label>Captcha Code<br/><input name="captcha_code" type="text"  required><br></label>
<img src="captcha_code.php" />

                                <div class="divider"></div>
                                
                            	<div class="signup"><input type="image" name="signup_submit" id="signup_submit" src="wp-content\themes\instant-qa\images\signup-now-btn.png" value="Sign Up Now"></div>
                                
                            	<input type="hidden" name="signup_post" value="1">
                                
                            </form>
                  			<!-- / Sign Up Form -->
							
                            <div class="divider"></div>
                            <div class="post">
                                <div class="whiteBtn right"><a href="login.php"><span>Log In Now</span></a></div>
                                <p class="right buttonDesText">Already a member? </p>
                                <div class="clear"></div>
                            </div>
                            
                                                </div>
                </div>
            	<div class="reset"></div>
               	<!-- / Main Box -->

            </div>
            <!-- / Center Column -->
           <?php include 'rightsidebar1.php';?>   
<div class="clear"></div>


        </div>
               
    </div>
    <!-- / Main Section -->


	<!-- Footer Section -->
     <?php include 'footer.php';?>   
    </div>
    <!-- / Footer Section -->
    <script type='text/javascript' src='wp-includes\js\wp-embed.min.js?ver=4.7.5'></script>
    		<script type="text/javascript">
			var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
			document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
			</script>
			<script type="text/javascript">
			var pageTracker = _gat._getTracker("UA-1616923-21");
			pageTracker._initData();
			pageTracker._trackPageview();
                        pageTracker._trackPageLoadTime();
		</script>
	</body>
</html>
