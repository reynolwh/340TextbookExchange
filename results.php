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
			
			$query = mysql_query("SELECT * FROM textbooks WHERE Title = '$title' OR ISBN = '$isbn' ORDER BY Price");
			
			while ($row = mysql_fetch_array($query)) {
					$booktitle = $row['Title'];
					$bookISBN = $row['ISBN'];
					$condition = $row['BookCondition'];
					$price = $row['Price'];
					$userID = $row['userID'];
						
					$query2 = mysql_query("SELECT * FROM users WHERE ID = '$userID'");
						
					while ($user = mysql_fetch_array($query2)) {
						$email = $user['email'];
					}
					
				echo "<table border='1' align='center'>";
					echo "<tr>";
						echo "<th>Price</th>";
						echo "<th>Title</th>";
						echo "<th>ISBN</th>";
						echo "<th>Condition</th>";
						echo "<th>Seller</th>";
					echo "</tr>";
								
					echo "<tr>";
						echo "<td>" . $price . "</td>";
						echo "<td>" . $booktitle . "</td>";
						echo "<td>" . $bookISBN . "</td>";
						echo "<td>" . $condition . "</td>";
						echo '<td><a href="mailto:' . $email . '">' . $email . '</a></td>';
					echo "</tr>";
				echo "</table>";
			}
		?>
	</body>
</html>