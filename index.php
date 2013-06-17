<?php
	require 'includes/db_connect.php';
	require 'includes/functions.php';
	secure_session_start();
?>
<!DOCTYPE html>
<!--[if IE 7]>         			<html class="no-js ie7"> 	<![endif]-->
<!--[if IE 8]>         			<html class="no-js ie8"> 	<![endif]-->
<!--[if IE 9]>         			<html class="no-js ie9"> 	<![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> 	<html class="no-js"> <!--	<![endif]-->
	<head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<meta name="author" content="Ben Hall" />		
		<meta name="description" content="Current Affairs, Web Development, Programming, Cycling, Football, Games, Staffordshire, Leek" />
		
		<link rel="stylesheet" media="screen" href="css/initializr/main.css" />
		<link rel="stylesheet" media="screen" href="css/initializr/normalize.min.css" />		
		
		<link rel="stylesheet" media="screen" href="css/general.css" />
		<link rel="stylesheet" media="screen" href="css/index.main.css" />
		
        <script src="js/modernizr.2.6.2.js"></script>
		
		<title>What-is-on.co.uk</title>
	</head>
	<body>		
		<header id="mainHeader">		
			<div id="headerContent">
				<a href="index.php">
					<img src="images/title_image.jpg" alt="Home" />
				</a>
			
				<div id="loginStatus">
					<div id="loginOptions"><a href="register.php">Register</a> | <a href="login.php">Sign In</a></div>
				</div>
			</div>
		</header>
		
		<div id="menuStrip">
			<div></div>
			<ul>
				<li><a class="selected" href="#">Home</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="#">Projects</a></li>
				<li><a href="#">Contact</a></li>
			</ul>	
		</div>
		
		<noscript><div class="noscript"><p>JavaScript is either not supported or it is disabled in this Browser. To make the most of this site you will need to enable JavaScript!</p></div></noscript>
		
		<div id="main">
			<div class="leftCol">		
				<div class="panel">
					<h4>Search Panel</h3>
					<p>Some search doofers:</p>
					<input type="text" value="Kedywords..." />
					<select style="margin-top:5px;">
						<option disabled="" selected="">Select a date...</option>
						<option>Today</option>
						<option>Tomorrow</option>
						<option>In a week</option>
					</select>
				</div>
				<div class="panel">
					<h4>Popular Events</h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque feugiat augue ac mi commodo tempor. Suspendisse lobortis purus ut erat posuere pharetra. Aliquam fringilla condimentum euismod. Mauris vitae ante non sapien ullamcorper vestibulum vel ac nunc.		
				</div>
				<div class="panel">
					<h4>A Panel</h4>Fusce ipsum purus, dignissim ut scelerisque eu, tempor in tellus. Duis eget turpis ut lacus tincidunt molestie et id ligula. Suspendisse pretium nisi eget enim ultricies in semper purus aliquet.	
				</div>
			</div>
		
			<div class="rightCol recentContainer">			
				<article class="post">		
				  <header>
					<h2>Whats Is On?</h2>
				  </header>
				  <p>Currently under construction! Need to get red arrows!</p>
				  <p>Fusce ac pharetra sem. Curabitur cursus, eros nec dignissim semper, lorem neque varius sem, sagittis imperdiet dolor ipsum eu lacus. Mauris sem mi, blandit eu ultricies ut, congue bibendum risus.</p>
				  <footer>
					Published on 18/06/2013  by <a href="#">Ben Hall</a><div class="commentButton"><img src="images/right_arrow.png" /><div>Comments (0)</div></div>
				  </footer>
				  
				  <div class="commentContainer">	
					  <div class="commentGroup">		  
					  </div>
					  <div class="newComment">
						  <textarea></textarea>
						  <input type="button" value="Submit" />
					  </div>
				  </div>	
				  
				</article>
				
				<article class="post">	
				  <header>
					<h2>Boilerplate and Initializr</h2>
				  </header>
				  <p>Implemented boilerplate and initializr. It is good.</p>
				  <footer>
					Published on 18/06/2013  by <a href="#">Ben Hall</a><div class="commentButton"><img src="images/right_arrow.png" /><div>Comments (1)</div></div>
				  </footer>
				  
				  <div class="commentContainer">	
					  <div class="commentGroup">
						  <div class="comment">
							<div class="text">Finally! Good news.</div>	
							<div class="date">Published on 18/06/2013 2 by <a href="#">Ben Hall</a></div>	
						  </div>			  
					  </div>
					  <div class="newComment">
						  <textarea></textarea>
						  <input type="button" value="Submit" />
					  </div>
				  </div>				  
				</article>
				
				<article class="post">	
				  <header>
					<h2>Enter the JavaScript</h2>
				  </header>
				  <p>Site restyled. Chnaged theme and layout.</p>
				  <p>Proin id purus eros. Mauris sed justo urna. Donec porta libero non quam consequat condimentum. Vestibulum placerat orci eget justo auctor cursus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
				  <footer>
					Published on 18/06/2013 by <a href="#">Ben Hall</a><div class="commentButton"><img src="images/right_arrow.png" /><div>Comments (2)</div></div>
				  </footer>				  
				  
				  <div class="commentContainer">	
					  <div class="commentGroup">
						  <div class="comment">
							<div class="text">I do quite like JavaScript</div>	
							<div class="date">Published on 18/06/2013  by Anon</div>	
						  </div>	
						  <div class="comment">
							<div class="text">I love a bit of coding in my spare time.</div>	
							<div class="date">Published on 18/06/2013  by <a href="#">Bradley Wiggins</a></div>	
						  </div>							  
					  </div>
					  <div class="newComment">
						  <textarea></textarea>
						  <input type="button" value="Submit" />
					  </div>
				  </div>				  
				</article>
								
			</div>
		</div>
		
		<footer id="mainFooter">
			<div id="footerTop" class="footerSection">			
				<div id="divFooterInfo">
					<div class="footerInfoDiv">
						<p>Service & Support</p>
						<span>Get answers now in our <a href="#">support center</a></span>
					</div>
					<div class="footerInfoDiv">
						<p>Feedback</p>
						<span>How could we improve? <a href="#">Tell us how we're doing</a></span>
					</div>
					<div class="footerInfoDiv">
						<p>Join the conversation</p>
						<a href="https://twitter.com/#!/_BenHall"><img src="images/icon_facebook.png" alt="Twitter" /></a>
						<a href="http://www.facebook.com/BenHallJ"><img src="images/icon_twitter.png" alt="Facebook" /></a>		
						<a href="#"><img src="images/icon_gplus.png" alt="Google Plus" /></a>		
						<a href="#"><img src="images/icon_blog.png" alt="Blog" /></a>					
					</div>
				</div>
			</div>
			<div id="footerBottom" class="footerSection">
				<div id="divFooterMenu"><a href="#">About Us</a> | <a href="#">Terms & Conditions</a> | <a href="#">Get Listed</a> | <a href="#">Advertising</a> | <a href="#">PR Agencies</a> | <a href="#">Join what-is-on</a></div>
				<div id="divFooterCopyright">Copyright © 2013 | WhatIsOn | Website designed, created and hosted by WhatIsOn Organisation</div>
			</div>
		</footer>
	</body>
	
	<script src="js/jquery-2.0.2.min.js"></script>
	<script src="js/jquery-ui-1.10.3.min.js"></script>	
	
	<script src="js/general.js"></script>
</html>
