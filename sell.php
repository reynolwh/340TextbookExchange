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
			<div style="text-align:right; font-size:16px"><a href="logout.php" style="color:#FFFFFF">Logout</a></div>
		</h1>
	</head>	
	<body style="text-align:center; background-color:#3366FF">	
		<form action="insert.php" method="post">
			<input type="text" name="title" placeholder="Title"><br>
			<input type="text" name="isbn" placeholder="ISBN"><br>
			<input type="text" name="price" placeholder="Price"><br>
			<select name="condition">
				<option value="Poor">Poor</option>
				<option value="Acceptable">Acceptable</option>
				<option value="Good">Good</option>
				<option value="Like New">Like New</option>
			</select><br>
		<input type="submit" value="Submit"><br>
		</form>
	</body>
</html>