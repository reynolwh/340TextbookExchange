<?php
	session_start();
	
	if(isset($_SESSION['ID']))
	{
		$id = $_SESSION['ID'];
	}
	
	$con = mysql_connect("localhost","jmutextbooks","jmutextbooks_1");
		if (!$con) {
		die('Could not connect: ' . mysql_error());
	}

	mysql_select_db("jmutextbooks", $con);
	
	$bookID = $_GET['bookID'];
	
	$result = (mysql_query("DELETE FROM textbooks WHERE ID = '$bookID'"));
	
	if ($result) {
		header("Location: viewbooks.php");
	}