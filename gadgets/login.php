<?php
session_start();
require("scripts/admin.class.php");
//require("scripts/mysql.class.php");
//$connect  = new mysqli("Localhost","root","","pc_tops_db");
$msg = "";

if(isset($_POST['login']))
{
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	$admin=$_POST['admin'];
	
	if(!$username||$password)
			{
				$msg = "user does not exist";
				
					
			}
			else
			{if(!preg_match("/[a-zA-Z0-9_\-.\]+@[a-zA-Z0-9\-]\.[a-zA-Z]{3,4}+$/",$username))
				{
					$msg = "Incorrect password";
					
					
				}
				else
				{
					$obj=new Admin();
	$result=$obj->check($username,$password,$admin);
	echo $result;
		
		if($result=="superadmin")
		{
			
		$_SESSION["superadmin"]=$username;
		$_SESSION["password"]=$password;
		
		$msg = "super admin";
		}
		else if($result=="admin")
		{
			$_SESSION["admin"]=$username;
			$_SESSION["password"]=$password;
			$msg = "admin";
			
		}
		else
		{
			
			
		}	
				}
			}
	
	
		
}
if(isset($_SESSION['superadmin']))
		{
			//header("Location: see_admin.php");	
		
		}
		
		if(isset($_SESSION['admin']))
		{
			
			//header("Location: add_product.php");	
		}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
   			    <li><a href="newPhone.php">PRODUCTS</a></li>
   			    <li><a href="register.php">REGISTER</a></li>
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
							<div><label for="username">username</label>: <input type="text" name="username" value="" id="username" required/></div>
							<div><label for="password">password</label>: <input type="password" name="password" value="" id="password" required/></div>
                            <div><label for="password">admin</label>: <select name="admin"><option></option>
                            <option>admin</option><option>superadmin</option></select>
                            </div>
					  </div>
					<div id="login-button">
							<input type="image" src="images/btn_login.gif" name="login" value="h" id="l" />
				    </div>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p align="center"><?php echo $msg;?>&nbsp;</p>
					</form>
				</div>
				<div id="login-welcome">
					<div>
						<h2><span class="clear"><img src="images/imagesCAY5NYXG.jpg" width="191" height="137" alt="f" /></span></h2>
				  </div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div id="body">
		  <div id="body-bot">
		    <h2>&nbsp;</h2>
			</div>
		</div>
	</div>


</body>
</html>
