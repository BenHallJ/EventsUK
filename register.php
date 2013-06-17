<?php
	require 'includes/db_connect.php';
	require 'includes/functions.php';
	secure_session_start();
	
	// Declare error varibale
	$error = false;
	
	// If details have been posted to this page, send them to the register function for processing
	if (isset($_POST['submit'])) {	
		// Array of required fields
		$required = array('forename', 'surname', 'email', 'password');
		
		// Check that all the required fields have been filled in
		foreach($required as $field) {
			if (empty($_POST[$field])) {
				$error = true;
			}
		}	
	
		// If there are no errors, then register
		if (!$error) {		
			register($_POST['forename'], $_POST['surname'], $_POST['title'], $_POST['email'], $_POST['password'], $mysqli);
		}
	}
	else
	{
		// If nothing has been posted
	}
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
		<link rel="stylesheet" media="screen" href="css/register.main.css" />
		
        <script src="js/modernizr.2.6.2.js"></script>
		
		<title>BenJHall Register</title>
	<body>
		<header id="mainHeader">		
			<div id="headerContent">
				<div id="menuStrip">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="blog.php">Blog</a></li>
						<li><a href="projects.php">Projects</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>	
				</div>
				<div id="loginStatus">
					<div>Welcome! But, you are not logged in.</div>
					<div id="loginOptions"><a href="register.php">Register</a> | <a href="login.php">Sign In</a></div>
				</div>
			</div>
		</header>	
	
		<div id="main">

			<h2>Your Details</h2>
			<div id="textBorder">
			  <p> Please complete the fields below:</p>
			  <form action="<?php echo($_SERVER['PHP_SELF']) ?>" method="post" name="register">
				<table class="contactTable">
				  <tr>
					<td class="leftcell">Email:</td>
					<td><input name="email" type="text" maxlength="50" value=""></td>
				  </tr>
				  <tr>
					<td class="leftcell">Confirm Email:</td>
					<td><input name="confirmemail" type="text" maxlength="50" value=""></td>
				  </tr>
				  <tr>
					<td class="leftcell">Password:</td>
					<td><input name="password" type="password" value=""></td>
				  </tr>
				  <tr>
					<td class="leftcell">Confirm Password:</td>
					<td><input name="confirmpassword" type="password" value=""></td>
				  </tr>
				  <tr>
					<td class="leftcell">&nbsp;</td>
					<td>&nbsp;</td>
				  </tr>
				  <tr>
					<td class="leftcell">Title:</td>
					<td>
					  <select name="title" id="title">
						<option value="M">Mr</option>
						<option value="F">Mrs</option>
						<option value="F">Miss</option>
					  </select>
					</td>
				  </tr>
				  <tr>
					<td class="leftcell">Forename:</td>
					<td><input name="forename" type="text" maxlength="40" value=""></td>
				  </tr>
				  <tr>
					<td class="leftcell">Surname:</td>
					<td><input name="surname" type="text" maxlength="40" value=""></td>
				  </tr>
				</table>
				<input type="submit" name="submit" value="Send"></td>
			  </form>
			  <?php if ($error) { echo('Please ensure all of the fields have been filled in.'); }?> 
			</div>
		  </div>
		  
		<footer id="mainFooter">
			<div id="footerContent">
				<div id="footerInfo">Copyright © 2012 | BenJHall | Website designed, created and hosted by Ben Hall</div>
				<div id="footerSocial">
					<a href="https://twitter.com/#!/_BenHall"><img src="images/TwitterIcon.png" alt="Twitter" /></a>
					<a href="http://www.facebook.com/BenHallJ"><img src="images/FacebookIcon.png" alt="Facebook" /></a>
				</div>
			</div>
		</footer>
	</body>
</html>