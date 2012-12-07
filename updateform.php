<?php
	session_start();
	
	if(isset($_SESSION['ID']))
	{
		$id = $_SESSION['ID'];
	}
	
	$con = mysql_connect("localhost", "jmutextbooks", "jmutextbooks_1");
			if (!$con) {
			die('Could not connect: ' . mysql_error());
			}
		mysql_select_db("jmutextbooks", $con);
		$bookID = $_GET['bookID'];
		$query=("SELECT Title, ISBN, BookCondition, Price FROM textbooks WHERE ID = '$bookID'");
		$result=mysql_query($query);
		while ($row = mysql_fetch_array($result)) {
			$title = $row['Title'];
			$isbn = $row['ISBN'];
			$condition = $row['BookCondition'];
			$price = $row['Price'];
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
		<form action = "update.php?bookID=<?php print($bookID); ?>" method = "post" />
			<table align='center'>
				<tr>
					<td>Title</td>
					<td><input type = "text" name = "title" value = "<?php print($title) ?>" /></td>
				</tr>
				<tr>
					<td>ISBN</td>
					<td><input type = "text" name = "isbn" value = "<?php print($isbn) ?>" /></td>
				</tr>
				<tr>
					<td>Condition</td>
					<td>
					<select name="condition" value = "<?php print($condition) ?>">
						<option value="Poor">Poor</option>
						<option value="Acceptable">Acceptable</option>
						<option value="Good">Good</option>
						<option value="Like New">Like New</option>
					</select>
					</td>
				</tr>
				<tr>
					<td>Price</td>
					<td><input type = "text" name = "price" value = "<?php print($price) ?>" /></td>
				</tr>
				<tr>
					<td colspan=2><input type = "submit" value = "Update" /></td>
				</tr>	
			</table>
		</form>
	</body>
</html>