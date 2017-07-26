<?php
session_start();
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

<body id="home">
	<?php include 'nav.php';?>
	<!-- Main Section -->
    <div id="main">
 
    	<div id="mainContent">
        	<?php include 'sidebar.php';?>            
            <!-- Center Column -->
            <div id="centerCol" class="left">
            	
                <!-- Search Form -->
				<div class="greenBox"><div class="greenBoxInner searchbox"><h2>Find a Question:</h2><form method="get" id="searchform" action="http://wordpressqa.com/instant-qa/"><div class="submitBtn right"><input type="image" id="searchsubmit" value="Submit" src="wp-content\themes\instant-qa\images\submit-search.png"></div><input type="text" name="s" id="s" class="cleardefault"></form></div></div>                <!-- Search Form -->

				<!-- Recent / Popular Questions Section -->
                <div id="tabWidget1">
                    <!-- Navigation Tabs -->
                    <div id="wTabs1">
                        <ul>
                            <li class="on"><a href="javascript:showWidget(0,1)">Recent question</a></li>
                            <li><a href="javascript:showWidget(1,1)">Popular question</a></li>
                            <li><a href="javascript:showWidget(2,1)">ask question</a></li>
                        </ul>
                    </div>
                    <div class="reset"></div>
                    <div class="bordsp10"></div>
                    <!-- /Navigation Tabs -->
                            
                    <!-- Tabs Content Blocks -->
                    <div id="wContent">
                    
                        <!-- Recent Questions -->
                        <div class="wContentBox">
                        	<div class="greyBox2">
                                <div class="greyBoxInner2">
                                	
									                                     
										                                        <!-- Question -->
                                        <div class="question">
                                            <div class="left">
												                                              <a href="http://wordpressqa.com/instant-qa/profile/demouser"><img alt='' src='http://1.gravatar.com/avatar/4e9ec1a89b19950d559b8874cc727edd?s=50&#038;d=http%3A%2F%2Fwordpressqa.com%2Finstant-qa%2Fwp-content%2Fthemes%2Finstant-qa%2Fimages%2Fdefault-user-avatar-4.jpg&#038;r=g' srcset='http://1.gravatar.com/avatar/4e9ec1a89b19950d559b8874cc727edd?s=100&amp;d=http%3A%2F%2Fwordpressqa.com%2Finstant-qa%2Fwp-content%2Fthemes%2Finstant-qa%2Fimages%2Fdefault-user-avatar-4.jpg&amp;r=g' class='avatar avatar-50 photo' height='50' width='50'></a>
                                            </div>
                                            <div class="left questionMain">
                                            	
                                               <h4><a href="beaches\look-of-the-site\index.htm">Look of the site</a></h4>
                                                                                               
                                                <p>Can the look be changed</p>                         
                                                <div class="questionByline">
                                                    <a href="beaches\look-of-the-site\index.htm#respond"><img src="wp-content\themes\instant-qa\images\num-answer-icon.png" alt="Answers"></a>
                                                    <span class="answers"><a href="beaches\look-of-the-site\index.htm#respond">view Answer</a></span>
                                                      <span class="answers"><a href="beaches\look-of-the-site\index.htm#respond">Post Answer</a></span>
                                                    <!--<span>In: <a href="category\beaches\index.htm" rel="category tag">Beaches</a></span>
                                                    <span>By: <a href="profile\demouser\index.htm" title="Posts by demoUser" rel="author">demoUser</a></span>-->
                                                     <span class="points">[<span>67</span> <img src="wp-content\themes\instant-qa\images\blue-star-points-icon.png" alt="Blue Star Level" title="Blue Star Level">]</span>
                                                    <span>Jun 26, 2017</span>
                                                </div>
                                            </div>
                                             
                                            <div class="clear"></div>
                                        </div>
                                        <!-- / Question -->
                                                                                <!-- Question -->
                                        <div class="question">
                                            <div class="left">
												                                                <a href="http://wordpressqa.com/instant-qa/profile/demouser"><img alt='' src='http://1.gravatar.com/avatar/4e9ec1a89b19950d559b8874cc727edd?s=50&#038;d=http%3A%2F%2Fwordpressqa.com%2Finstant-qa%2Fwp-content%2Fthemes%2Finstant-qa%2Fimages%2Fdefault-user-avatar-4.jpg&#038;r=g' srcset='http://1.gravatar.com/avatar/4e9ec1a89b19950d559b8874cc727edd?s=100&amp;d=http%3A%2F%2Fwordpressqa.com%2Finstant-qa%2Fwp-content%2Fthemes%2Finstant-qa%2Fimages%2Fdefault-user-avatar-4.jpg&amp;r=g' class='avatar avatar-50 photo' height='50' width='50'></a>
                                            </div>
                                            <div class="left questionMain">
                                            	
                                                <h4><a href="car-rentals\hiii\index.htm">hiii?</a></h4>
                                                                                               
                                                <p>hi test</p>                         
                                                <div class="questionByline">
                                                    <a href="car-rentals\hiii\index.htm#comments"><img src="wp-content\themes\instant-qa\images\num-answer-icon.png" alt="Answers"></a>
                                                    <span class="answers"><a href="viewans.php">View Answer</a></span>
                                                    <span class="answers"><a href="postans.php">Post Answer</a></span>
                                                  <!--  <span>In: <a href="category\car-rentals\index.htm" rel="category tag">Car Rentals</a></span>
                                                    <span>By: <a href="profile\demouser\index.htm" title="Posts by demoUser" rel="author">demoUser</a></span>-->
                                                 
                                                    <span class="points">[<span>67</span> <img src="wp-content\themes\instant-qa\images\blue-star-points-icon.png" alt="Blue Star Level" title="Blue Star Level">]</span>
                                                    <span>Jun 15, 2017</span>
                                                </div>
                                            </div>
                                             
                                            <div class="clear"></div>
                                        </div>
                                        <!-- / Question -->
                                                                                <!-- Question -->                                                                         
											                                             <!-- <a href="http://wordpressqa.com/instant-qa/profile/demouser"><img alt='' src='http://1.gravatar.com/avatar/4e9ec1a89b19950d559b8874cc727edd?s=50&#038;d=http%3A%2F%2Fwordpressqa.com%2Finstant-qa%2Fwp-content%2Fthemes%2Finstant-qa%2Fimages%2Fdefault-user-avatar-4.jpg&#038;r=g' srcset='http://1.gravatar.com/avatar/4e9ec1a89b19950d559b8874cc727edd?s=100&amp;d=http%3A%2F%2Fwordpressqa.com%2Finstant-qa%2Fwp-content%2Fthemes%2Finstant-qa%2Fimages%2Fdefault-user-avatar-4.jpg&amp;r=g' class='avatar avatar-50 photo' height='50' width='50'></a>-->
                                            	   <?php 
                                           require 'database1';       
                                              $obj=new question;
                                              $result=$obj->displayque();
                                              if($result->num_rows>0)
                                              {
                                                    while($row =$result->fetch_assoc())
                                                    {
                                                        echo  '<div class="question">';
                                                        echo  '<div class="left">';
                                                           ?> <img src="<?php echo $row["user_image"];?>" height="50" width="50" class="avatar avatar-50 photo"><?php
                                                        echo  '</div>';
                                                        echo  '<div class="left questionMain">';                                           
                                                        echo '<h4><font color="blue">'. $row["question_title"].'</h4></font>';                                    
                                                         echo '<p>'. $row["name"].'<p>';    
                                                         echo '<div class="questionByline">';
                                                   echo   '<img src="wp-content\themes\instant-qa\images\num-answer-icon.png" alt="Answers"></a>';
                                                    echo '<span class="answers"><a href="viewans.php?id='.$row["question_id"].'">view Answers | </a></span>
                                                     <span class="answers"><a href="Postans.php?id='.$row["question_id"].'">post Answers | </a></span>
                                                     
                                                    <span>'. $row["date"].'</span>
                                                </div>
                                            </div>
                                             
                                            <div class="clear"></div>
                                        </div> ';
                                                    }
                                              }
        
                                              ?>
                                                                       
                                               
                                        <!-- / Question -->
                                                                                <!-- Question -->
                                        <div class="question">
                                            <div class="left">
												                                                <a href="http://wordpressqa.com/instant-qa/profile/demouser"><img alt='' src='http://1.gravatar.com/avatar/4e9ec1a89b19950d559b8874cc727edd?s=50&#038;d=http%3A%2F%2Fwordpressqa.com%2Finstant-qa%2Fwp-content%2Fthemes%2Finstant-qa%2Fimages%2Fdefault-user-avatar-4.jpg&#038;r=g' srcset='http://1.gravatar.com/avatar/4e9ec1a89b19950d559b8874cc727edd?s=100&amp;d=http%3A%2F%2Fwordpressqa.com%2Finstant-qa%2Fwp-content%2Fthemes%2Finstant-qa%2Fimages%2Fdefault-user-avatar-4.jpg&amp;r=g' class='avatar avatar-50 photo' height='50' width='50'></a>
                                            </div>
                                            <div class="left questionMain">
                                            	
                                                <h4><a href="beaches\change-the-design-it-is-fucking-boring\index.htm">change the design it is fucking boring</a></h4>
                                                                                               
                                                <p>change this fucking design, make it more like quora or ask you fucking stupids.</p>                         
                                                <div class="questionByline">
                                                    <a href="beaches\change-the-design-it-is-fucking-boring\index.htm#comments"><img src="wp-content\themes\instant-qa\images\num-answer-icon.png" alt="Answers"></a>
                                                    <span class="answers"><a href="beaches\change-the-design-it-is-fucking-boring\index.htm#comments">view Answers</a></span>
                                                    <span class="answers"><a href="beaches\change-the-design-it-is-fucking-boring\index.htm#comments">Post Answers</a></span>
                                                  <!--  <span>In: <a href="category\beaches\index.htm" rel="category tag">Beaches</a></span>
                                                    <span>By: <a href="profile\demouser\index.htm" title="Posts by demoUser" rel="author">demoUser</a></span>-->
                                                 
                                                    <span class="points">[<span>67</span> <img src="wp-content\themes\instant-qa\images\blue-star-points-icon.png" alt="Blue Star Level" title="Blue Star Level">]</span>
                                                    <span>May 17, 2017</span>
                                                </div>
                                            </div>
                                             
                                            <div class="clear"></div>
                                        </div>
                                        <!-- / Question -->
                                                                     <!-- Question -->
                                        <div class="question">
                                            <div class="left">
												                                                <a href="http://wordpressqa.com/instant-qa/profile/surferlady"><img alt='' src='http://2.gravatar.com/avatar/5c08d18d8cfedb62753283cda09c2baa?s=50&#038;d=http%3A%2F%2Fwordpressqa.com%2Finstant-qa%2Fwp-content%2Fthemes%2Finstant-qa%2Fimages%2Fdefault-user-avatar-5.jpg&#038;r=g' srcset='http://2.gravatar.com/avatar/5c08d18d8cfedb62753283cda09c2baa?s=100&amp;d=http%3A%2F%2Fwordpressqa.com%2Finstant-qa%2Fwp-content%2Fthemes%2Finstant-qa%2Fimages%2Fdefault-user-avatar-5.jpg&amp;r=g' class='avatar avatar-50 photo' height='50' width='50'></a>
                                            </div>
                                            <div class="left questionMain">
                                            	
                                                <h4><a href="hotels\vegas\index.htm">Vegas</a></h4>
                                                                                               
                                                <p>What is the best hotel to stay in Vegas? I have about $200 a night to spend. 

</p>                         
                                                <div class="questionByline">
                                                    <a href="hotels\vegas\index.htm#comments"><img src="wp-content\themes\instant-qa\images\num-answer-icon.png" alt="Answers"></a>
                                                    <span class="answers"><a href="hotels\vegas\index.htm#comments">View Answers</a></span>
                                                     <span class="answers"><a href="hotels\vegas\index.htm#comments">post Answers</a></span>
                                                    <!--<span>In: <a href="category\hotels\index.htm" rel="category tag">Hotels</a></span>
                                                    <span>By: <a href="profile\surferlady\index.htm" title="Posts by Surferlady" rel="author">Surferlady</a></span>-->
                                                 
                                                    <span class="points">[<span>5</span> <img src="wp-content\themes\instant-qa\images\grey-star-points-icon.png" alt="Grey Star Level" title="Grey Star Level">]</span>
                                                    <span>Sep 13, 2013</span>
                                                </div>
                                            </div>
                                             
                                            <div class="clear"></div>
                                        </div>
                                        <!-- / Question -->
                                                                 <!--  Question -->
                                        <div class="question">
                                            <div class="left">
												                                                <a href="http://wordpressqa.com/instant-qa/profile/demouser"><img alt='' src='http://1.gravatar.com/avatar/4e9ec1a89b19950d559b8874cc727edd?s=50&#038;d=http%3A%2F%2Fwordpressqa.com%2Finstant-qa%2Fwp-content%2Fthemes%2Finstant-qa%2Fimages%2Fdefault-user-avatar-4.jpg&#038;r=g' srcset='http://1.gravatar.com/avatar/4e9ec1a89b19950d559b8874cc727edd?s=100&amp;d=http%3A%2F%2Fwordpressqa.com%2Finstant-qa%2Fwp-content%2Fthemes%2Finstant-qa%2Fimages%2Fdefault-user-avatar-4.jpg&amp;r=g' class='avatar avatar-50 photo' height='50' width='50'></a>
                                            </div>
                                            <div class="left questionMain">
                                            	
                                                <h4><a href="beaches\yaa-waye-qofka-jecely-goroob\index.htm">yaa waye qofka jecely goroob?</a></h4>
                                                                                               
                                                <p>Fadlan fagarkaaga ka dhibo qofka ad jecheshahay, gabar ama garoob</p>                         
                                                <div class="questionByline">
                                                    <a href="beaches\yaa-waye-qofka-jecely-goroob\index.htm#comments"><img src="wp-content\themes\instant-qa\images\num-answer-icon.png" alt="Answers"></a>
                                                    <span class="answers"><a href="beaches\yaa-waye-qofka-jecely-goroob\index.htm#comments">3 Answers</a></span>
                                                    <span>In: <a href="category\beaches\index.htm" rel="category tag">Beaches</a></span>
                                                    <span>By: <a href="profile\demouser\index.htm" title="Posts by demoUser" rel="author">demoUser</a></span>
                                                 
                                                    <span class="points">[<span>67</span> <img src="wp-content\themes\instant-qa\images\blue-star-points-icon.png" alt="Blue Star Level" title="Blue Star Level">]</span>
                                                    <span>May 15, 2017</span>
                                                </div>
                                            </div>
                                             
                                            <div class="clear"></div>
                                        </div> 
                                       <!-- / quetion -->
                                                                                <!-- extra Question1 
                                        <div class="question">
                                            <div class="left">
												                                                <a href="http://wordpressqa.com/instant-qa/profile/surferlady"><img alt='' src='http://2.gravatar.com/avatar/5c08d18d8cfedb62753283cda09c2baa?s=50&#038;d=http%3A%2F%2Fwordpressqa.com%2Finstant-qa%2Fwp-content%2Fthemes%2Finstant-qa%2Fimages%2Fdefault-user-avatar-5.jpg&#038;r=g' srcset='http://2.gravatar.com/avatar/5c08d18d8cfedb62753283cda09c2baa?s=100&amp;d=http%3A%2F%2Fwordpressqa.com%2Finstant-qa%2Fwp-content%2Fthemes%2Finstant-qa%2Fimages%2Fdefault-user-avatar-5.jpg&amp;r=g' class='avatar avatar-50 photo' height='50' width='50'></a>
                                            </div>
                                            <div class="left questionMain">
                                            	
                                                <h4><a href="beaches\best-rides\index.htm">Best Rides</a></h4>
                                                                                               
                                                <p>Anyone know if a great place to surf on the east coast?</p>                         
                                                <div class="questionByline">
                                                    <a href="beaches\best-rides\index.htm#comments"><img src="wp-content\themes\instant-qa\images\num-answer-icon.png" alt="Answers"></a>
                                                    <span class="answers"><a href="beaches\best-rides\index.htm#comments">2 Answers</a></span>
                                                    <span>In: <a href="category\beaches\index.htm" rel="category tag">Beaches</a></span>
                                                    <span>By: <a href="profile\surferlady\index.htm" title="Posts by Surferlady" rel="author">Surferlady</a></span>
                                                 
                                                    <span class="points">[<span>5</span> <img src="wp-content\themes\instant-qa\images\grey-star-points-icon.png" alt="Grey Star Level" title="Grey Star Level">]</span>
                                                    <span>Sep 13, 2013</span>
                                                </div>
                                            </div>
                                             
                                            <div class="clear"></div>
                                        </div>
                                        end  Question1  -->
                                                                                <!-- extra Question2 
                                        <div class="question">
                                            <div class="left">
												                                                <a href="http://wordpressqa.com/instant-qa/profile/travelguru"><img alt='' src='http://2.gravatar.com/avatar/596f7384cd4fe2ec35b3f2671113dc16?s=50&#038;d=http%3A%2F%2Fwordpressqa.com%2Finstant-qa%2Fwp-content%2Fthemes%2Finstant-qa%2Fimages%2Fdefault-user-avatar-1.jpg&#038;r=g' srcset='http://2.gravatar.com/avatar/596f7384cd4fe2ec35b3f2671113dc16?s=100&amp;d=http%3A%2F%2Fwordpressqa.com%2Finstant-qa%2Fwp-content%2Fthemes%2Finstant-qa%2Fimages%2Fdefault-user-avatar-1.jpg&amp;r=g' class='avatar avatar-50 photo' height='50' width='50'></a>
                                            </div>
                                            <div class="left questionMain">
                                            	
                                                <h4><a href="car-rentals\car-insurance\index.htm">Car Insurance</a></h4>
                                                                                               
                                                <p>Is it worth it to get the car insurance when you rent a car?</p>                         
                                                <div class="questionByline">
                                                    <a href="car-rentals\car-insurance\index.htm#comments"><img src="wp-content\themes\instant-qa\images\num-answer-icon.png" alt="Answers"></a>
                                                    <span class="answers"><a href="car-rentals\car-insurance\index.htm#comments">2 Answers</a></span>
                                                    <span>In: <a href="category\car-rentals\index.htm" rel="category tag">Car Rentals</a></span>
                                                    <span>By: <a href="profile\travelguru\index.htm" title="Posts by TravelGuru" rel="author">TravelGuru</a></span>
                                                 
                                                    <span class="points">[<span>12</span> <img src="wp-content\themes\instant-qa\images\grey-star-points-icon.png" alt="Grey Star Level" title="Grey Star Level">]</span>
                                                    <span>Sep 13, 2013</span>
                                                </div>
                                            </div>
                                             
                                            <div class="clear"></div>
                                        </div>
                                        end Question 2-->
                                                                                <!-- extra Question3 
                                        <div class="question">
                                            <div class="left">
												                                                <a href="http://wordpressqa.com/instant-qa/profile/inflightchica"><img alt='' src='http://0.gravatar.com/avatar/02e08124c6a267021015fb0c911603c7?s=50&#038;d=http%3A%2F%2Fwordpressqa.com%2Finstant-qa%2Fwp-content%2Fthemes%2Finstant-qa%2Fimages%2Fdefault-user-avatar-4.jpg&#038;r=g' srcset='http://0.gravatar.com/avatar/02e08124c6a267021015fb0c911603c7?s=100&amp;d=http%3A%2F%2Fwordpressqa.com%2Finstant-qa%2Fwp-content%2Fthemes%2Finstant-qa%2Fimages%2Fdefault-user-avatar-4.jpg&amp;r=g' class='avatar avatar-50 photo' height='50' width='50'></a>
                                            </div>
                                            <div class="left questionMain">
                                            	
                                                <h4><a href="activities\miami-activities\index.htm">Miami Activities</a></h4>
                                                                                               
                                                <p>I am traveling to Miami for just two days, what kind of activities would you recommend? </p>                         
                                                <div class="questionByline">
                                                    <a href="activities\miami-activities\index.htm#comments"><img src="wp-content\themes\instant-qa\images\num-answer-icon.png" alt="Answers"></a>
                                                    <span class="answers"><a href="activities\miami-activities\index.htm#comments">5 Answers</a></span>
                                                    <span>In: <a href="category\activities\index.htm" rel="category tag">Activities</a></span>
                                                    <span>By: <a href="profile\inflightchica\index.htm" title="Posts by InFlightChica" rel="author">InFlightChica</a></span>
                                                 
                                                    <span class="points">[<span>31</span> <img src="wp-content\themes\instant-qa\images\green-star-points-icon.png" alt="Green Star Level" title="Green Star Level">]</span>
                                                    <span>Sep 13, 2013</span>
                                                </div>
                                            </div>
                                             
                                            <div class="clear"></div>
                                        </div>
                                        end  Question3 -->
                                                                                <!-- extra Question4 
                                        <div class="question">
                                            <div class="left">
												                                                <a href="http://wordpressqa.com/instant-qa/profile/inflightchica"><img alt='' src='http://0.gravatar.com/avatar/02e08124c6a267021015fb0c911603c7?s=50&#038;d=http%3A%2F%2Fwordpressqa.com%2Finstant-qa%2Fwp-content%2Fthemes%2Finstant-qa%2Fimages%2Fdefault-user-avatar-4.jpg&#038;r=g' srcset='http://0.gravatar.com/avatar/02e08124c6a267021015fb0c911603c7?s=100&amp;d=http%3A%2F%2Fwordpressqa.com%2Finstant-qa%2Fwp-content%2Fthemes%2Finstant-qa%2Fimages%2Fdefault-user-avatar-4.jpg&amp;r=g' class='avatar avatar-50 photo' height='50' width='50'></a>
                                            </div>
                                            <div class="left questionMain">
                                            	
                                                <h4><a href="beaches\less-crowded-beaches\index.htm">Less Crowded Beaches</a></h4>
                                                                                               
                                                <p>I live in the southern California area, are there any beaches that are not overpopulated with people?</p>                         
                                                <div class="questionByline">
                                                    <a href="beaches\less-crowded-beaches\index.htm#comments"><img src="wp-content\themes\instant-qa\images\num-answer-icon.png" alt="Answers"></a>
                                                    <span class="answers"><a href="beaches\less-crowded-beaches\index.htm#comments">3 Answers</a></span>
                                                    <span>In: <a href="category\beaches\index.htm" rel="category tag">Beaches</a></span>
                                                    <span>By: <a href="profile\inflightchica\index.htm" title="Posts by InFlightChica" rel="author">InFlightChica</a></span>
                                                 
                                                    <span class="points">[<span>31</span> <img src="wp-content\themes\instant-qa\images\green-star-points-icon.png" alt="Green Star Level" title="Green Star Level">]</span>
                                                    <span>Sep 13, 2013</span>
                                                </div>
                                            </div>
                                             
                                            <div class="clear"></div>
                                        </div>
                                        end Question 4-->
                                        
                                        <div class="navigation">
                                        	<div class="whiteBtn right"><a href="page\2\index.htm"><span>Next Questions &raquo;</span></a></div>
                                        	<div class="whiteBtn left"></div>
                                    		<div class="clear"></div>
                                        </div>
                                
                                                                        
									
                                </div>
                            </div>
                        </div>
                        <!-- /Recent Questions -->
                        
                        <!-- Popular Questions -->
                        <div class="wContentBox" style="display:none;">
                        	<div class="greyBox2">
                                <div class="greyBoxInner2">
                                	<p class="right"><em>Top 25 from the last 30 Days</em></p>
                                    <div class="clear"></div>
                                	                                    
										                                        <div class="question">
                                            <div class="left">
												                                                <a href="http://wordpressqa.com/instant-qa/profile/demouser"><img alt='' src='http://1.gravatar.com/avatar/4e9ec1a89b19950d559b8874cc727edd?s=50&#038;d=http%3A%2F%2Fwordpressqa.com%2Finstant-qa%2Fwp-content%2Fthemes%2Finstant-qa%2Fimages%2Fdefault-user-avatar-4.jpg&#038;r=g' srcset='http://1.gravatar.com/avatar/4e9ec1a89b19950d559b8874cc727edd?s=100&amp;d=http%3A%2F%2Fwordpressqa.com%2Finstant-qa%2Fwp-content%2Fthemes%2Finstant-qa%2Fimages%2Fdefault-user-avatar-4.jpg&amp;r=g' class='avatar avatar-50 photo' height='50' width='50'></a>
                                            </div>
                                            <div class="left questionMain">
                                            	
                                                <h4><a href="car-rentals\hiii\index.htm">hiii?</a></h4>
                                                                                               
                                                <p>hi test</p>                         
                                                <div class="questionByline">
                                                    <a href="car-rentals\hiii\index.htm#comments"><img src="wp-content\themes\instant-qa\images\num-answer-icon.png" alt="Answers"></a>
                                                    <span class="answers"><a href="car-rentals\hiii\index.htm#comments">1 Answer</a></span>
                                                    <span>In: <a href="category\car-rentals\index.htm" rel="category tag">Car Rentals</a></span>
                                                    <span>By: <a href="profile\demouser\index.htm" title="Posts by demoUser" rel="author">demoUser</a></span>
                                                 
                                                    <span class="points">[<span>67</span> <img src="wp-content\themes\instant-qa\images\blue-star-points-icon.png" alt="Blue Star Level" title="Blue Star Level">]</span>
                                                    <span>Jun 15, 2017</span>
                                                </div>
                                            </div>
                                             
                                            <div class="clear"></div>
                                        </div>
                                        <!-- / Question -->
                                                                                <div class="question">
                                            <div class="left">
												                                                <a href="http://wordpressqa.com/instant-qa/profile/demouser"><img alt='' src='http://1.gravatar.com/avatar/4e9ec1a89b19950d559b8874cc727edd?s=50&#038;d=http%3A%2F%2Fwordpressqa.com%2Finstant-qa%2Fwp-content%2Fthemes%2Finstant-qa%2Fimages%2Fdefault-user-avatar-4.jpg&#038;r=g' srcset='http://1.gravatar.com/avatar/4e9ec1a89b19950d559b8874cc727edd?s=100&amp;d=http%3A%2F%2Fwordpressqa.com%2Finstant-qa%2Fwp-content%2Fthemes%2Finstant-qa%2Fimages%2Fdefault-user-avatar-4.jpg&amp;r=g' class='avatar avatar-50 photo' height='50' width='50'></a>
                                            </div>
                                            <div class="left questionMain">
                                            	
                                                <h4><a href="beaches\look-of-the-site\index.htm">Look of the site</a></h4>
                                                                                               
                                                <p>Can the look be changed</p>                         
                                                <div class="questionByline">
                                                    <a href="beaches\look-of-the-site\index.htm#respond"><img src="wp-content\themes\instant-qa\images\num-answer-icon.png" alt="Answers"></a>
                                                    <span class="answers"><a href="beaches\look-of-the-site\index.htm#respond">No Answers</a></span>
                                                    <span>In: <a href="category\beaches\index.htm" rel="category tag">Beaches</a></span>
                                                    <span>By: <a href="profile\demouser\index.htm" title="Posts by demoUser" rel="author">demoUser</a></span>
                                                 
                                                    <span class="points">[<span>67</span> <img src="wp-content\themes\instant-qa\images\blue-star-points-icon.png" alt="Blue Star Level" title="Blue Star Level">]</span>
                                                    <span>Jun 26, 2017</span>
                                                </div>
                                            </div>
                                             
                                            <div class="clear"></div>
                                        </div>
                                        <!-- / Question -->
                                                                        
                                                                        
									                                	
                                  
                                </div>
                            </div>
                        </div>
                        <!-- ask Questions -->
                        <div class="wContentBox" style="display:none;">
                        	<div class="greyBox2">
                                <div class="greyBoxInner2">
                                      <h2 class="questionTitle">your question</h2>
                                      <form action="" method="post">
                                     <center><div class="form-group">
                                    <div class="question">                                                                                
                                    <div class="row"> 
                                    <div class="col-md-3"><b><br>Title</b></div>
                                    <div class="col-md-9"> <input type="text" name="txttitle" class="form-control"></div>
                                       </div>
                                    </div>
                                    <div class="question">  
                                      <div class="row"> 
                                    <div class="col-md-3"><b><br>  question </b></div>
                                    <div class="col-md-9"> <textarea class="form-control" name="txtque">  </textarea>
                                      </div>
                                    </div>
                                    </div>
                                     <div class="question"><div class="row"> 
                                    <div class="col-md-3"><b><br> image  </b></div>
                                    <div class="col-md-9"><input type="file" name="txtimage" class="form-control">
                                    </div>
                                      </div>
                                    </div>
                                     <div class="question">                                                                                
                                     <div class="row"> 
                                    <div class="col-md-3"><b><br> date </b></div>
                                    <div class="col-md-9"><input type="text" name="txtdate" class="form-control">
                                    </div>
                                    </div>
                                    </div>
                                     <div class="question"><div class="row"> 
                                    <div class="col-md-3"><b><br>subject </b></div>
                                    <div class="col-md-9"> <input type="text" name="txtsub" class="form-control">
                                    </div>
                                    </div>
                                    </div>
                                    <input type="submit" class="btn btn-success" name="btnsubmit" value="Submit">
                                     </div>
                                     </center>
                                   <form>
                                    </div></div></div>
                    </div>
                    <!-- Tabs Content Blocks -->
                    <div class="reset"></div>
                </div>
                <!-- Recent / Popular Questions Section -->
                                
            </div>
            <!-- / Center Column -->
           <?php include 'rightsidebar.php';?>   
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
