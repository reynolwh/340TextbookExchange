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
		<title>Textbook Exchange</title>
		<h1 style="background-color:#3300CC">
			<div style="text-align:center; font-family:Arial,Helvetica,sans-serif; color:#FFFFFF">JMU Textbook Exchange</div>
			<div style="text-align:right; font-size:16px"><a href="home.php" style="color:#FFFFFF">Home</a> <a href="logout.php" style="color:#FFFFFF">Logout</a></div>
		</h1>
	</head>
	<body style="text-align:center; background-color:#3366FF">
		<table border='1' align='center'>
			<tr>
				<th>Title</th>
				<th>ISBN</th>
				<th>Condition</th>
				<th>Price</th>
				<th colspan='2'>Actions</th>
			</tr>
		<?php
			$con = mysql_connect("localhost","jmutextbooks","jmutextbooks_1");
				if (!$con) {
				die('Could not connect: ' . mysql_error());
				}

			mysql_select_db("jmutextbooks", $con);
				
			$query = mysql_query("SELECT * FROM textbooks WHERE userID = '$id'");
			while ($row = mysql_fetch_array($query)) {
					$bookID = $row['ID'];
					$booktitle = $row['Title'];
					$bookISBN = $row['ISBN'];
					$condition = $row['BookCondition'];
					$price = $row['Price'];
								
					echo "<tr>";
						echo "<td>" . $booktitle . "</td>";
						echo "<td>" . $bookISBN . "</td>";
						echo "<td>" . $condition . "</td>";
						echo "<td>" . $price . "</td>";
						echo "<td><a href='updateform.php?bookID=$bookID' style='color:#FFFFFF'>Update</a></td>";
						echo "<td><a href='delete.php?bookID=$bookID' style='color:#FFFFFF'>Delete</a></td>";
					echo "</tr>";
			}
		?>
		</table>
	</body>
</html>