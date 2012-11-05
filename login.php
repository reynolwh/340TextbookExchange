<?php
			$con = mysql_connect("localhost","jmutextbooks","jmutextbooks_1");
			if (!$con) {
			die('Could not connect: ' . mysql_error());
			}

			mysql_select_db("jmutextbooks", $con);
			
			$email = $_POST['email'];
			$password = $_POST['password'];
			$p_word = md5($password);
			
			if ($email == "" || $password == "")
			{
				header("Location: login.html");
			}
			else
			{
				$query = "SELECT * FROM users WHERE email='$email' AND password='$p_word'";
				$result = mysql_query($query);
				
				while($row=mysql_fetch_array($result)) {
					$id = $row['ID'];
					$firstname = $row['firstname'];
					}
				
				if (mysql_num_rows($result) == 1)
				{
					session_start();
					$_SESSION['ID'] = $id;
					$greeting = "Hello, $firstname!  You are now logged in.";
				}
				else
				{
					$error = "Email/Password invalid!";
					header("Location: login.html");
				}
			}
		?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Textbook Exchange</title>
		<h1 style="text-align:center; font-family:Arial,Helvetica,sans-serif; color:#FFFFFF; background-color:#3300CC">JMU Textbook Exchange</h1>
	</head>
	<body style="text-align:center; background-color:#3366FF">
		<?php
			echo "$greeting <br />";
		?>
		<a href='home.php' style='color:#FFFFFF'> Click Here To Go To Home Page</a>
</html>