<?php
session_start();
require("scripts/mysql.class.php");
$msg= "";

if(isset($_POST['login']))
{
	
	
	$user=$_POST['username'];
	//$_SESSION['email'] =$user;
	$password=$_POST['password'];
	if(!$user||!$password)
	{
		$msg=  "Please enter name and password";	
		
	}
	
	$obj=new mysqlData();
	$value=$obj->user_login($user,$password);
	if($value>0)
	{
		
	$_SESSION["user"]=$user;
	$_SESSION["id"]=$value;
	
	header("Location: member.php");
	
	}
	else
	{
			$msg = 'The information is incorrect';
		
	}
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>matrix cellphone</title>
	<link rel="stylesheet" href="style.css" type="text/css" charset="utf-8" />	
    <!--<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />-->
<style type="text/css">
body,td,th {
	font-size: 12px;
}
</style>
</head>

<body>
	<div id="wrapper">
		<div id="nav">
		  <div id="nav-left">
		    <div id="nav-right">
		      <ul>
   			    <li><a href="about.php">ABOUT US</a></li>
   			    <li><a href="newPhone.php">PRODUCTS</a></li>
   			    <li><a href="register.php">REGISTER</a></li>
    			<li><a href="login.php">ADMIN</a></li>
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
					<h2 class="login"><em>user </em>login</h2>
					<form action="" method="post">
						<div id="login-username">
							<div><label for="username">username</label>: <input type="text" name="username" value="" id="username"  required/></div>
							<div><label for="password">password</label>: <input type="password" name="password" value="" id="password" required/></div>
						</div>
						<div id="login-button">
							<input type="image" src="images/btn_login.gif" name="login" value="h" id="l" />
						</div>
						<div class="clear">
							<div class="reg">
								<p>New User? <a href="register.php">REGISTER for FREE</a>
							    </p>
								<p align="center"><?php echo $msg;?></p>
							</div>
						</div>
					</form>
				</div>
				<div id="login-welcome">
					<div>
						<h2><strong>PHONES</strong>!<strong> PHONES</strong>!<strong> PHONES</strong>!</h2>
						<p>Get your self a phone and get connected  the longer you wait the more distance it become.Buy affordable cellphones which are user friendly.  </p>
				  </div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div id="body">
			<div id="body-bot">
					<h2><span>top <strong>PHONES</strong> for this month</span></h2>
					<div id="items">
					  <div class="item"><img src="images/imagesCA7GJB08.jpg" width="156" height="116" alt="D" />
                        <h3><a href="http://www.templatebeauty.com">Samsung Galaxy S5</a></h3>
                          <p>on Sale R3999.99</p>
                        <p>&nbsp;</p>
							<div><a href="about.php" class="details">MORE</a>
                        <a href="http://www.freewebsitetemplates.com" class="addtocart">add to cart</a></div>
							<div class="divider"></div>
					  </div>
						<div class="item"><img src="images/imagesCAD4R3DH.jpg" width="135" height="140" alt="TEB" />
						  <h3>Tablet </h3>
						  <p>on Sales R2499.99</p>
						  <div><a href="about.php" class="details">MORE</a>
                          <a href="http://www.freewebsitetemplates.com" class="addtocart">add to cart</a></div>
							<div class="divider"></div>
					  </div>
						<div class="clear"></div>
			  </div>
					<div id="banner">
						<img src="images/pic_5.jpg" width="256" height="109" alt="Nokia 6015i" class="left" />
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
