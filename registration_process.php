<?php

require_once("db_connection.php");

print_r($_POST);

$username = $mysqli->real_escape_string($_POST['username']);
$password = $mysqli->real_escape_string($_POST['password']);
$name = $mysqli->real_escape_string($_POST['name']);
$phone = $mysqli->real_escape_string($_POST['phone']);
$email = $mysqli->real_escape_string($_POST['email']);
$address = $mysqli->real_escape_string($_POST['address']);

$create_user_query = "INSERT INTO tbl_user (user_name, password, user_type) VALUES (?,?,1)";
$user_id;
if($create_user_statement = $mysqli->prepare($create_user_query)){
	$create_user_statement->bind_param("ss", $username, md5($password));
	if(!$create_user_statement->execute()){
		header("location:registration.php?error=2");	
	}
	$user_id = $mysqli->insert_id;
}
else{
	header("location:registration.php?error=1");
}

$create_user_profile_query = "INSERT INTO tbl_user_profile (user_id, name, phone, email, address) VALUES (?,?,?,?,?)";
if($create_user_profile_statement = $mysqli->prepare($create_user_profile_query)) {
	$create_user_profile_statement->bind_param("isiss", $user_id, $name, $phone, $email, $address);
	if(!$create_user_profile_statement->execute()){
		header("location:registration.php?error=3");	
	}
}
else{
	header("location:registration.php?error=4");
}

header("location:index.php?success=1");
?>