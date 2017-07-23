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
                            <li><a href="javascript:showWidget(1,1)">unanswer question</a></li>
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
											     <?php 
                                                $_subid=$_GET["subid"];
                                             $obj=new question;
                                              $result=$obj->displaysubque($_subid);
                                              if($result->num_rows>0)
                                              {
                                                    while($row =$result->fetch_assoc())
                                                    {
                                                        echo  '<div class="question">';
                                                        echo  '<div class="left">';
                                                        $_qid=$row["question_id"];
                                                         $conn=new mysqli("localhost","root","","questionery");
                                                         $result1=$conn->query("select u.*,q.* from user_tbl u,question_tbl q where u.email_id=q.fk_email_id and question_id='". $_qid ."'");
                                                            $row1=$result1->fetch_assoc();
                                                          ?> <img src="<?php echo $row1["user_image"];?>" height="50" width="50" class="avatar avatar-50 photo"><?php
                                                        echo  '</div>';
                                                        echo  '<div class="left questionMain">';                                           
                                                        echo '<h4><font color="blue">'. $row["question_title"].'</h4></font>';                                    
                                                         echo '<p>'. $row1["name"].'<p>';    
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
                                              else
                                              {
                                                    echo '<h2 class="questionTitle">No  question for this subject </h2>';
                                              }
?>
                              <div class="clear"></div>
                                        </div> 
                                                              
                                        <div class="navigation">
                                        	<!--<div class="whiteBtn right"><a href="page\2\index.htm"><span>Next Questions &raquo;</span></a></div>
                                        	<div class="whiteBtn left"></div>
                                    		<div class="clear"></div>-->
                                        </div>
                                        <!-- / Question -->
                                          
                                                                 <!--  Question -->
                                        
                                          
                                </div>
                            </div>
                        </div>
                        <!-- /Recent Questions -->
                        
                       <!-- Popular Questions -->
                        <div class="wContentBox" style="display:none;">
                        	<div class="greyBox2">
                                <div class="greyBoxInner2">
                                	<!--<p class="right"><em>Top 25 from the last 30 Days</em></p>-->
                                    
                                        <?php 
                                             $conn=new mysqli("localhost","root","","questionery");
                                                         $result=$conn->query("select * from question_tbl where question_id not in(select fk_question_id from answer_tbl)");
                                                  if($result->num_rows>0)
                                              {
                                                    while($row =$result->fetch_assoc())
                                                    {
                                                        echo  '<div class="question">';
                                                        echo  '<div class="left">';
                                                        $_qid=$row["question_id"];
                                                         $conn=new mysqli("localhost","root","","questionery");
                                                         $result1=$conn->query("select u.*,q.* from user_tbl u,question_tbl q where u.email_id=q.fk_email_id and question_id='". $_qid ."'");
                                                            $row1=$result1->fetch_assoc();
                                                          ?> <img src="<?php echo $row1["user_image"];?>" height="50" width="50" class="avatar avatar-50 photo"><?php
                                                        echo  '</div>';
                                                        echo  '<div class="left questionMain">';                                           
                                                        echo '<h4><font color="blue">'. $row["question_title"].'</h4></font>';                                    
                                                         echo '<p>'. $row1["name"].'<p>';  
                                                       
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
                                              else
                                              {
                                                    echo '<h2 class="questionTitle">Every question have answer</h2>';
                                              }
?>
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
                                <!--     <div class="question"><div class="row"> 
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
                                    </div>-->
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
