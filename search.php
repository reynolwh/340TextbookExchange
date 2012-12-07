<?php
	session_start();
	
	if(isset($_SESSION['ID']))
	{
		$id = $_SESSION['ID'];
	}
?>	
<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Textbook Exchange</title>
		<h1 style="background-color:#3300CC">
			<div style="text-align:center; font-family:Arial,Helvetica,sans-serif; color:#FFFFFF">JMU Textbook Exchange</div>
			<div style="text-align:right; font-size:16px"><a href="home.php" style="color:#FFFFFF">Home</a>  <a href="logout.php" style="color:#FFFFFF">Logout</a></div>
		</h1>
	</head>	
	<body style="text-align:center; background-color:#3366FF">	
		<form action="results.php" method="post">
			<input type="text" name="title" placeholder="Title"><br>
			<input type="text" name="isbn" placeholder="ISBN"><br>
			<input type="submit" value="Search"><br>
		</form>
	</body>
</html>