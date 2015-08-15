<?php
	require_once("db_connection.php");	
	$user = $_POST["username"];
	$password = $_POST["password"];

	$sql = "SELECT * FROM tbl_user WHERE user_name='".$mysqli->real_escape_string($user)."' AND password='".md5($mysqli->real_escape_string($password))."'";

	$result = $mysqli->query($sql);

	if($result->num_rows != 1){
		
		header("location:error.php");
	}
	if (session_status() == PHP_SESSION_ACTIVE ) {
	session_destroy(); //destroy old session
	}
	
	session_start();
	
	$row = $result->fetch_assoc();

	$_SESSION['username'] = $row['user_name'];
	$_SESSION['userid'] = $row['user_id'];
	$_SESSION['HTTP_HOST'] = "index.php";

	echo $_SESSION['userid'];
	header("location:index.php");
	//header('Location:http://localhost/mitra/'.$_SESSION['HTTP_HOST']);
?>