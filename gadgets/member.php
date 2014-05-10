<?php 
	session_start();
	
	if(isset($_POST['ok']))
	{
		header("Location: index.php");	
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
			  <div class="clear"><center> <p><?php
 @ $db = new mysqli('localhost', 'root', '','matrix_db');

  if (mysqli_connect_errno()) {
     echo "fail to connect";
     exit;
  }
  $query = "select * from user where EMAIL ='".$_SESSION["user"]."'";		
	$result = $db->query($query);
	$num_results = $result->num_rows;
	//echo $num_results;
	//echo "<p>Number of items found: ".$num_results."</p>";
	echo "<table width='300' border='15'>";
	for ($i=0; $i <$num_results; $i++) {
	$row = $result->fetch_assoc();
	echo "<tr>";
	echo "<th scope='row' bgcolor='#339900'>". "Name: ";
	echo "<td>".htmlspecialchars(stripslashes($row['NAME']));
	echo "</tr>";
	echo "<tr>";
	echo "<th scope='row' bgcolor='#339900'>"."<br />Surname: ";
	echo "<td>".stripslashes(stripslashes($row['SURNAME']));
	echo "</tr>";
	echo "<tr>";
	echo "<th scope='row' bgcolor='#339900'>"."<br />ID: ";
	echo "<td>".stripslashes(stripslashes($row['ID_NUM'])) ;
	echo "</tr>";
	echo "<tr>";
	echo "<th scope='row' bgcolor='#339900'>"."<br />Password: ";
	echo "<td>".stripslashes(stripslashes($row['PASSWORD']));
	echo "</tr>";
	echo "<tr>";
	echo "<th scope='row' bgcolor='#339900'>"."<br />Address: ";
	echo "<td>".stripslashes(stripslashes($row['ADDRESS'])) ;
	echo "</tr>";
	echo "<tr>";
	echo "<th scope='row' bgcolor='#339900'>"." <br />Email: ";
	echo "<td>".stripslashes(stripslashes($row['EMAIL']))."</strong></p>";
	echo "</tr>";
	
	}
	echo "</table>";
$db->close();
?>&nbsp;</p><input type="Submit"  name="ok" value=" OK " id="l" /></center></div>
          </form>
		</div>
		<div id="body">
		  
		</div>
	</div>


</body>
</html>
