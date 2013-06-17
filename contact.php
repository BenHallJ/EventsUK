<?php
	session_start();
?>
<!DOCTYPE html>
<!--[if IE 7]>         			<html class="no-js ie7"> 	<![endif]-->
<!--[if IE 8]>         			<html class="no-js ie8"> 	<![endif]-->
<!--[if IE 9]>         			<html class="no-js ie9"> 	<![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> 	<html class="no-js"> <!--	<![endif]-->
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="description" content="Current Affairs, Web Development, Programming, Football, Games, Staffordshire, Leek" />
		<meta name="author" content="Ben Hall" />
		
		<link rel="stylesheet" type="text/css" media="screen" href="css/general.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="css/initializr/main.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="css/initializr/normalize.css" />
		
        <script src="js/modernizr.2.6.2.js"></script>
		
		<title>BenJHall - Contact</title>
	</head>
	<body>
		<header>		
			<div id="headerContent">
				<div id="menuStrip">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="Blog.php">Blog</a></li>
						<li><a href="Projects.php">Projects</a></li>
						<li><a class="selected" href="Contact.php">Contact</a></li>
					</ul>	
				</div>
				<div id="loginStatus">
					<div>Welcome! But, you are not logged in.</div>
					<div id="loginOptions"><a href="LoginRegister.php">Register</a> | <a href="LoginRegister.php">Sign In</a></div>
				</div>
			</div>
		</header>
		
		<div id="main">
		  <?php    		
		  
		if(isset($_POST['Submit']))
		{
			$name = $_POST['name'];		  
			$email = $_POST['email'];
			$emailCheck = $_POST['emailCheck'];
			$message = $_POST['message'];	
			  
			if(empty($name) || empty($email) || empty($emailCheck) || empty($message))
			{
				echo('<form action="contact.php" method="post" name="enquiry"><table class="contactTable"><tr><td class="leftcell">Name:</td><td>');			
				echo("<input name='name' type='text' size='30' value='$name'>");
				echo('</td></tr><tr><td class="leftcell">Email:</td><td>');			
				echo("<input name='email' type='text' size='40' value='$email'>");
				echo('</td></tr><tr><td class="leftcell">Confirm Email:</td><td>');
				echo("<input name='emailCheck' type='text' size='40' value='$emailCheck'>");
				echo('</td></tr><tr><td class="leftcell">Message:</td><td>');
				echo("<textarea name='message' cols='60' rows='7' value='$message'></textarea>");
				echo('</td></tr><tr><td>&nbsp;</td><td><br><input type="image" src="../images/sendButton.jpg" name="Submit" value="Send"></td></tr></form>');
				echo('<tr><td>&nbsp;</td><td><p style="color:red">Please complete all felds before submitting.</p></td></tr></table>');
			}
			else
			{
	@		    $connection = mysql_connect("localhost", "root", "");
				
				if (!$connection)
				{
					echo "<p>Unable to establish a connection to the database for submission. Try again later.".mysql_error($connection)."</p>";
				}
				else
				{
					if (!mysql_select_db("BJayHall", $connection))
					{
						echo "<p>Unable to select the database 'books'".mysql_error($connection)."</p>";
					}
					else
					{					
	@    				$cur = mysql_query("insert into tblCustomerEnquirey (CustomerName, EMailAddress, Message) values ('$name', '$email', '$message')", $connection);
						if (!$cur)
						{
							echo "<p>Unable to execute insert: ".mysql_error($connection)."</p>";
						}
						else
						{
							echo("<p>Thank you for your message!</p><br><p> We aim to reply as soon as possible.</p><br><a href='../index.php'>Return to home</a>"); 
						}
					}
	@      			mysql_close($connection);
				}
			}
		}
		else
		{
			echo("<p> For any questions which you may have about our services.</p><p>Please fill in the fields below:</p><br>");    
		  
			echo('
		  
		  <form action="contact.php" method="post" name="enquiry">
			<table class="contactTable">
			  <tr>
				<td class="leftcell">Name:</td>
				<td><input name="name" type="text" size="30" value=""></td>
			  </tr>
			  <tr>
				<td class="leftcell">Email:</td>
				<td><input name="email" type="text" size="40" value=""></td>
			  </tr>
			  <tr>
				<td class="leftcell">Confirm Email:</td>
				<td><input name="emailCheck" type="text" size="40" value=""></td>
			  </tr>
			  <tr>
				<td class="leftcell">Message:</td>
				<td><textarea name="message" cols="60" rows="7"></textarea></td>
			  </tr>
			  <tr>
				<td>&nbsp;</td>
				<td><br><input type="image" src="../images/sendButton.jpg" name="Submit" value="Send"></td>
			  </tr>
			</table>
		  </form>
		  
		  ');
		  }	  
		   ?>	  
		</div>

		<footer>
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
