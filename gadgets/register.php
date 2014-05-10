<?php
session_start();
require("scripts/mysql.class.php");
$msg="";
$data="";

if(isset($_POST['register']))
{
	$name=$_POST["name"];
	$surname=$_POST["lastname"];
	$address=$_POST["address"];
	$email=$_POST["email"];
	$password=$_POST["password"];
	$rpassword=$_POST["rpassword"];
	$id=$_POST['id_num'];
	
	if(!$address||!$email||!$name||!$password||!$surname||!$id||$rpassword)
	{
		$msg = " All fields required";
			
	}
	else
	{
			if(!preg_match("/[a-zA-Z0-9_\-.\]+@[a-zA-Z0-9\-]\.[a-zA-Z]{3,4}+$/",$email))
			{
				$msg = "Invalid Email ,Email should be (e.g) johannes@yahoo.com <a href='register.php'";
				
			}
			else
			{
				if(!preg_match("/[0-9]{13}/",$id_num))
				{
					$msg = "invalid id_num  <a href='register.php'";
						
				}
				else
				{
					if($password ==$rpassword )
					{
						
						
					}
					else
					{
						$msg = "Incorrect password;";	
					}	
					}
				
			}
		
	}
//$connect= new MySQLi('Localhost','root',' ','matrix_db');
/*$connect  = new mysqli("Localhost","root","","matrix_db");
	$query="insert into user values(null,'".$name."','".$surname."','".$address."','".$email."','".$id."','".$password."')";
			$result=$connect->query($query);	
			if($result >0)
			{
				$msg = "registered";
			}
			else
			{
				$msg = "not registered";	
			}*/
			
					$obj=new mysqlData();
					$error =$obj->register_user($name,$surname,$address,$email,$password,$id);
					if($error > 0)
					{
						
					}else
					{
						$msg ="not registered";
						
					}
						
				
		
	
	/*if($data >0)
	{
		
	$msg = $email." was not registered <a href='register.php'>Check Here</a>";
	}
	else
	{
		//$msg = $name." " .$email." entered exists";
	}
}
if(isset($_POST['register']))
{
	$name=$_POST["name"];
	$surname=$_POST["surname"];
	$address=$_POST["address"];
	$email=$_POST["email"];
	$password=$_POST["password"];
	$rpassword=$_POST["rpassword"];
	$id=$_POST['id'];
	if(!$address||!$email||!$name||!$password||!$surname||!$id||$rpassword)
	{
		$msg = "Provide all fields";
			
	}
	else
	{
		if(!preg_match("/[a-zA-Z0-9_\-.\]+@[a-zA-Z0-9\-]\.[a-zA-Z]{3,4}+$/",$email))
		{
			$msg = "Email should be in this format hahaha@gmail.com";
			
		}
		else
		{
			if(!preg_match("/[0-9]{13}/",$id))
			{
				$msg = "ID number not valid";	
			}
			else
			{
				if($password ==$rpassword )
				{
					
					$obj=new mysql();
					$error =$obj->register_user($name,$surname,$address,$email,$password,$id);
					if($error >0)
					{
						$msg ="Successfully registered";
						
					}
				}
				else
				{
					$msg = "Incorrect password;";	
				}	
			}
		}	
	}*/
}

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
			  <div class="clear"> 
              <form id="form2" method="post" action="">
						    <table width="399" border="0" align="center">
						      <tr>
						        <td width="98">Name</td>
						        <td width="285"><label for="name"></label>
					            <input type="text" name="name" id="name" placeholder="Enter you name" required/></td>
					          </tr>
						      <tr>
						        <td>Surname</td>
						        <td><label for="surname"></label>
					            <input type="text" name="lastname" id="surname" placeholder="Enter you surname" required/></td>
					          </tr>
						      <tr>
						        <td>Email</td>
						        <td><label for="email"></label>
 					            <input type="text" name="email" id="email" placeholder="example@example.com" required/></td>
					          </tr>
                               <tr>
						        <td>Address</td>
						        <td><label for="email"></label>
 					            <input type="text" name="address" id="address" placeholder="2027 block GG Pretoria" required/></td>
					          </tr>
						      <tr>
						        <td>ID</td>
						        <td><label for="id"></label>
					            <input type="text" name="id_num" id="id" placeholder="13 digit long" required/></td>
					          </tr>
						      <tr>
						        <td>Phone number</td>
						        <td><label for="cell"></label>
					            <input type="text" name="cell" id="cell" placeholder="0000000000" required/></td>
					          </tr>
						      <tr>
						        <td>Password</td>
						        <td><label for="pass"></label>
					            <input type="password" name="password" id="password" placeholder="more than 5 digit" required/></td>
					          </tr>
						      <tr>
						        <td>Re-Password</td>
						        <td><label for="rpass"></label>
					            <input type="password" name="rpassword" id="rpassword" placeholder="more than 5 digit"  required/></td>
					          </tr>
						      
						      <tr>
						        <td colspan="2"><div align="center"><?php echo $msg; ?></div></td>
					          </tr>
						      <tr>
						        <td colspan="2"><div align="center">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;<a href="index.php">Click here to Login</a> &lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;</div></td>
					          </tr>
						      <tr>
						        <td>&nbsp;</td>
						        <td><input type="submit" name="register" id="register" value="Register" /></td>
					          </tr>
					        </table>
					      </form>
                </div>
		  </div>
		</div>
		<div id="body">
			<div id="body-bot">
			  <div id="items">
			    <div class="clear"></div>
			  </div>
		  </div>
		</div>
	</div>


</body>
</html>
