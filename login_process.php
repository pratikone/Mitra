<?php
	require_once("db_connection.php");	
	$user = $_POST["username"];
	$password = $_POST["password"];

	$sql = "SELECT * FROM tbl_user WHERE user_name='".$mysqli->real_escape_string($user)."' AND password='".md5($mysqli->real_escape_string($password))."'";

	$result = $mysqli->query($sql);

	if($result->num_rows != 1){
		
		header("location:error.php");
	}
	
	session_start();
	
	$row = $result->fetch_assoc();

	$_SESSION['username'] = $row['user_name'];
	$_SESSION['userid'] = $row['user_id'];
	$_SESSION['HTTP_HOST'] = "index.php";

	header("location:index.php");
?>