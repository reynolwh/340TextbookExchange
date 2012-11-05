		<?php
			$con = mysql_connect("localhost","jmutextbooks","jmutextbooks_1");
			if (!$con) {
			die('Could not connect: ' . mysql_error());
			}

			mysql_select_db("jmutextbooks", $con);
			$email = $_POST['email'];
			$password = $_POST['password'];
			$p_word = md5($password);
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];

			$sql= "INSERT INTO users (email, password, firstname, lastname) VALUES ('$email', '$p_word', '$firstname', '$lastname')";
			
			while ($row = mysql_fetch_array($query)) {
				$id = $row['ID'];
				
			}
			
			if (!mysql_query($sql,$con))
				{
				die('Error: ' . mysql_error());
				}
			else {  
				$_SESSION['ID'] = $id;
				$greeting = "Your account has been created. <br />";
				}

			mysql_close($con);
				
		?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Textbook Exchange</title>
		<h1 style="text-align:center; font-family:Arial,Helvetica,sans-serif; color:#FFFFFF; background-color:#3300CC">JMU Textbook Exchange</h1>
	</head>	
	<body style="text-align:center; background-color:#3366FF">
		<?php $greeting; ?>
		<a href='home.php' style='color:#FFFFFF'>Go to Home Page</a>
	</body>
</html>	
