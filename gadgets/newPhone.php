<?php
require("scripts/mysql.class.php");
$obj=new mysqlData();
$msg="";
$dis_samsung=$obj->samsung_select();
$dis_nokia=$obj->nokia_select();
$dis_other=$obj->other_phones();


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>matrix cellphone</title>
	<link rel="stylesheet" href="style.css" type="text/css" charset="utf-8" />	
	
</head>

<body>
	<div id="wrapper">
		<div id="nav">
		  <div id="nav-left">
		    <div id="nav-right">
		      <ul>
   			    <li><a href="about.php">ABOUT US</a></li>
   			    <li><a href="newPhone.php">PRODUCTS</a>
   			    </li><li><a href="register.php">REGISTER</a></li>
   			  </ul>
		    </div>
		  </div>
			<div class="clear"></div>
		</div>
		<div id="head">
		  <div id="head-1"></div>
			<h1><img src="images/logo.jpg" width="211" height="135" alt="loglo" /></h1>
			<div id="navb">
			  <ul>
				  <li><a href="index.php">HOME</a></li>
				  <li><a href="contact.php">CONTACT</a></li>
			  </ul>
		  </div>
	  </div>
	  <div id="head-2"></div>
		<div id="login">
			<div id="login-bot">
				<div id="login-box">
					<h2 class="login"><em>user</em>login</h2>
					<form action="">
						<div id="login-username">
							<div><label for="username">username</label>: <input type="text" name="username" value="" id="username" /></div>
							<div><label for="password">password</label>: <input type="password" name="password" value="" id="password" /></div>
						</div>
						<div id="login-button">
							<input type="image" src="images/btn_login.gif" name="l" value="h" id="l" />
						</div>
						<div class="clear">
							<div class="reg">
							  <p>New User? <a href="http://www.freewebsitetemplates.com">REGISTER for FREE</a></p>
							  <div class="item">
							    <h3><img src="images/imagesCAW73TXS.jpg" width="128" height="105" alt="sh" /></h3>
							    <p>Smart Phones</p>
							    <div class="divider"></div>
							  </div>
								<p>&nbsp;</p>
							</div>
						</div>
					</form>
				</div>
				<div id="login-welcome">
					<div>
						<h2>GARLO!<strong> PHONES</strong>!</h2>
						<div class="item"><img src="images/imagesCAQKABH5.jpg" width="167" height="157" alt="dnh" />
						  <h3>Tablet </h3>
						  <p>&nbsp;</p>
						  <div class="divider"></div>
					  </div>
						<p>&nbsp;</p>
						<p>&nbsp;</p>
				  </div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div id="body">
		  <div id="body-bot">
					<table width="277" height="147" border="5">
  <tr>
    <td height="18" bgcolor="#FFCC99">SAMSUNG</td>
    <td bgcolor="#FFCC99">NOKIA</td>
    <td bgcolor="#FFCC99">OTHER PHONES</td>
  </tr>
  <tr>
    <td><?php  echo $dis_samsung;?></td>
    <td><?php echo $dis_nokia;?></td>
     <td><?php echo $dis_other;?></td>
  </tr>
</table>
					<div id="banner">
						<img src="images/imagesCAYSXBM8.jpg" width="256" height="109" alt="Nokia 6015i" class="left" />
						<div id="banner-text">
						  <h3>Nokia 6015i (Verizon Wireless)</h3>
							<ul>
							  <li>You talk to your families who are and close with specified time.</li>
							  <li>You can download, capture and play mp3 anytime. </li>
							</ul>
					  </div>
						<div class="clear"></div>
		    </div>
			</div>
		</div>
	</div>


</body>
</html>
