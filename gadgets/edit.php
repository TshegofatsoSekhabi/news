<?php 
	session_start();
	
	if(!$_SESSION['admin']==1)
	{
		header("Location: index.php");
		}
		else
		{
			$msg = "Welcome Username : ".$_SESSION['email'];
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
   			    <li><a href="member.php">PROFILE</a>
   			    </li><li><a href="newPhone.php">PRODUCTS</a></li>
   			    <li><a href="edit.php">EDIT PROFILE</a>
		      </li> 
               <li><a href="products.php">VIEW PRODUCTS</a>
		      </li> 
   			    <a href="cart.php">VIEW CART</a> 
		       </ul>
		    </div>
		  </div>
			<div class="clear"></div>
		</div>
		<div id="head">
		  <div id="head-1"></div>
			<h1><img src="images/logo.jpg" width="211" height="135" alt="loglo" /></h1>
		</div>
		<div id="head-2"></div>
		<div id="login">
			<div id="login-bot">
            <form action="" method="post">
            <a href="index.php">logout</a>
			  <div class="clear"><center> <p><p><?php


$name="";
$surname="";
$id="";
$email="";
$cell="";
$password="";
$confirm="";
$user="";

 @ $db = new mysqli('localhost', 'root','','matrix_db');

  if (mysqli_connect_errno()) {
     echo "Error: Could not connect to database.  Please try again later.";
     exit;
  }
  $query = "select * from users where email ='".$_SESSION['email']."'";		
	$result = $db->query($query);
	$num_results = $result->num_rows;
	
	for($a=0; $a<$num_results; $a++)
	{
		$row=$result->fetch_assoc();
		$id=$row["ID"];
		$name=$row["Name"];
		$surname=$row["Surname"];	
		$adres=$row["Address"];
		$email=$row["email"];
		$cell=$row["phone"];	
		$confirm=$row["password"];
		$password=$row["password"];
	
	}
	
	if($_SERVER['REQUEST_METHOD']=="POST")
	{

		$name = $_POST['name'];
		$surname  = $_POST['surname'];
		//$IID = $_POST['id'];
		$pass  = $_POST['pass'];
		$rpass = $_POST['rpass'];
		//$email = $_POST['email'];
		$cell = $_POST['cell'];
		
		if($pass==$rpass)
		{
			$edit="update users set Name='$name',Surname='$surname',ID='".$id."',password='$pass',email='".$email."',phone='$cell' where ID='$id'";
		$result2=$db->query($edit);
		}
		else
		{
			echo "password doesnt match";	
		}
	}
	

$db->close();
?>&nbsp;</p>
						  <p><form name="form"  method="post"action="edit.php"><table width="399" border="0">
						      <tr>
						        <td width="98">Name</td>
						        <td width="285"><label for="name"></label>
					            <input type="text" name="name" id="name" value="<?php echo $name; ?>"/></td>
					          </tr>
						      <tr>
						        <td>Surname</td>
						        <td><label for="surname"></label>
					            <input type="text" name="surname" id="surname" value="<?php echo $surname; ?>" /></td>
					          </tr>
						      <tr>
						        <td>Email</td>
						        <td><label for="email"></label>
					            <input type="text" name="email" id="email" value="<?php echo $email; ?>" disabled="disabled"  readonly="readonly"/></td>
					          </tr>
						      <tr>
						        <td>ID</td>
						        <td><label for="id"></label>
					            <input type="text" name="id" id="id" value="<?php echo $id; ?>" disabled="disabled" readonly="readonly"/></td>
					          </tr>
						      <tr>
						        <td>Phone number</td>
						        <td><label for="cell"></label>
					            <input type="text" name="cell" id="cell"  value="<?php echo $cell; ?>"/></td>
					        </tr>
						      <tr>
						        <td>Password</td>
						        <td><label for="pass"></label>
					            <input type="password" name="pass" id="pass" value="<?php echo $password; ?>"/></td>
					          </tr>
						      <tr>
						        <td>Re-Password</td>
						        <td><label for="rpass"></label>
					            <input type="password" name="rpass" id="rpass" value="<?php echo $confirm; ?>"/></td>
					          </tr>
						      <tr>
						        <td>&nbsp;</td>
						        <td><input type="submit" name="register" id="register" value="update" /></td>
					          </tr>
					        </table></form>&nbsp;</p>&nbsp;</p></center></div>
          </form>
		</div>
		<div id="body">
		  <div id="body-bot">
		    <h2>&nbsp;</h2>
			</div>
		</div>
	</div>


</body>
</html>
