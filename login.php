<?php
	session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<!-- InstanceBegin template="/Templates/pageTemplate.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="Web Design, Creation, Staffordshire, Leek">
<meta name="author" content="Ben Hall">
<link rel="stylesheet" type="text/css" media="screen" href="../style.css">
<!-- InstanceBeginEditable name="title" -->
<title>BJayHall Web Design And Creation - Account Login</title>
<!-- InstanceEndEditable -->
</head>
<body>
<div id="loginStatus">
  <h6>You are not logged in&nbsp;&nbsp;</h6>
  <br>
</div>
<div id="main">
  <div id="header">
    <div class="tl">
      <div class="tr">
        <div id="image"> <a href="../index.php"><img src="../images/title.jpg" style="border:0px" alt="BJayHall Web Design And Creation"></a> </div>
      </div>
    </div>
  </div>
  <div id="menuStrip">
    <ul>
      <li><a href="../index.php">Home</a></li>
      <li><a href="about.html">About</a></li>
      <li><a href="services.html">Services</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="login.php">Login/Register</a></li>
    </ul>
  </div>
  <!-- InstanceBeginEditable name="pageContent" -->
  <div id="pageContent">
    <div id="subTitle"> <img src="../images/login2.jpg" alt="Login Or Create An Account"> </div>
    <table id="loginTable">
      <tr>
        <td align="right"><div id="existingUsers"> <br>
            <br>
            <br>
            <br>
            <form action="" method="post" name="login" id="loginform">
              <p>Email Address:</p>
              <input type="text" size="25" maxlength="100" name="email" id="email" value="">
              <p>Password:</p>
              <input type="password" size="25" maxlength="20" name="password" id="password" value="">
              <input type="image" src="../images/loginButton.jpg" name="login" value="Send">
            </form>
          </div></td>
        <td><div id="newUsers"> <br>
            <br>
            <br>
            <br>
            <strong style="color:#666">Welcome to BJayHall</strong>
            <p><a href="../pages/register.php" title="Register With Us"> <br>
              <img src="../images/createButton.jpg" alt="Register With Us" style="border:0px"></a></p>
          </div></td>
      </tr>
    </table>
  </div>
  <!-- InstanceEndEditable -->
  <div id="footerMenu">
    <h5>- <a href="../index.php">Home</a> | <a href="about.html">About</a> | <a href="services.html">Services</a> | <a href="contact.php">Contact</a> | <a href="login.php">Login/Register</a> - </h5>
  </div>
</div>
<div id="footer">
  <p> <a href="http://jigsaw.w3.org/css-validator/check/referer"> <img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS!"> </a> <a href="http://validator.w3.org/check?uri=referer"> <img style="border:0;width:88px;height:31px;padding-left:10px" src="http://www.w3.org/Icons/valid-html401-blue" alt="Valid HTML 4.01 Strict" height="31" width="88"></a> </p>
  <br>
  <h6>Copyright © 2010 | BJayHall UK | All rights reserved</h6>
</div>
</body>
<!-- InstanceEnd -->
</html>
