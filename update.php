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
	$title = $_POST['title'];
	$isbn = $_POST['isbn'];
	$condition = $_POST['condition'];
	$price = $_POST['price'];
	
	$sql=("UPDATE textbooks SET Title = '$title', ISBN = '$isbn', BookCondition = '$condition', price = '$price', userID = '$id' WHERE ID = '$bookID'");

	if (!mysql_query($sql,$con)) {
		echo "<script type=\"text/javascript\">";
		echo "window.alert('Update Failed.')";
		echo "</script>";
	}
	else {
		echo "<script type=\"text/javascript\">";
		echo "window.alert('Update Successful.')";
		echo "</script>";
	}
	
	header("Location: viewbooks.php?result=$res");

	mysql_close($con);
