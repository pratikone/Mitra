<?php
	require_once("db_connection.php");	
	$user = $_POST["username"];
	$password = $_POST["password"];

	$sql = "SELECT * FROM tbl_user WHERE user_name='".$mysqli->real_escape_string($user)."' AND password='".$mysqli->real_escape_string($password)."'";

	$result = $mysqli->query($sql);

	if($result->num_rows != 1){
		header("location:index.php");
	}
    //if some session already exists
    if (session_status() <> PHP_SESSION_NONE) {
 	    // remove all session variables
		session_unset(); 

		// destroy the session 
		session_destroy(); 
	}

	session_start();
	
	$row = $result->fetch_assoc();

	$_SESSION['username'] = $row['user_name'];
	$_SESSION['userid'] = $row['user_id'];
	header("location:default.php")
?>