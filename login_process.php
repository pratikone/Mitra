<?php

	require_once("db_connection.php");	
	$user = $_POST["username"];
	$password = $_POST["password"];
	
	//db call
	$sql = "SELECT * FROM tbl_user WHERE user_name='".$mysqli->real_escape_string($user)."' AND password='".$mysqli->real_escape_string($password)."'";
	echo $sql;
	$result = $mysqli->query($sql);
	var_dump($result);
	if ($result->num_rows > 1 ) 
		die("Multiple db entries by this number");
	if ($result->num_rows < 1 ) 
		die("No db entry exists by this number");

    //if some session already exists
    if (session_status() <> PHP_SESSION_NONE) {
 	    // remove all session variables
		session_unset(); 

		// destroy the session 
		session_destroy(); 
	}

	session_start();
	



?>