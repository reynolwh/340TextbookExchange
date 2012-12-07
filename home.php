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
			<div style="text-align:right; font-size:16px"><a href="home.php" style="color:#FFFFFF">Home</a> <a href="logout.php" style="color:#FFFFFF">Logout</a></div>
		</h1>
	</head>
	<body style="text-align:center; background-color:#3366FF">
		<?php
			echo "<table align='center' style='text-align:center'>";
				echo "<tr>";
					echo "<th>What would you like to do?</th>";
				echo "</tr>";
				
				echo "<tr>";
					echo "<td><a href='search.php' style='color:#FFFFFF'>Search For Books</a></td>";
				echo "</tr>";
				
				echo "<tr>";
					echo "<td><a href='sell.php' style='color:#FFFFFF'>Sell</a></td>";
				echo "</tr>";
				
				echo "<tr>";
					echo "<td><a href='viewbooks.php' style='color:#FFFFFF'>View Books I'm Selling</a></td>";
				echo "</tr>";
			echo "</table>";
		?>
	</body>
</html>