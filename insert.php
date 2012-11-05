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
		<?php
			$con = mysql_connect("localhost","jmutextbooks","jmutextbooks_1");
			if (!$con) {
			die('Could not connect: ' . mysql_error());
			}

			mysql_select_db("jmutextbooks", $con);
			
			$title = $_POST['title'];
			$isbn = $_POST['isbn'];
			$price = $_POST['price'];
			$condition = $_POST['condition'];
			
			$query = "INSERT INTO textbooks (Title, ISBN, BookCondition, Price, userID) VALUES ('$title', '$isbn', '$condition', '$price', '$id')";
			if (!mysql_query($query,$con))
					{
						die('Error: ' . mysql_error());
					}
					else {  
						echo ('Textbook added. <br>');
						echo "<a href='home.php' style='color:#FFFFFF'>Return To Home Page</a>";
					}

			mysql_close($con);
			
		?>
	</body>
</html>	