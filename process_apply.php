<?php
session_start();
require_once("db_connection.php");
$id = "-";
if(!isset($_SESSION['userid'])){
	$apply_query = "INSERT INTO tbl_job_application (job_id, name, phone, id, bid_amount, message) VALUES (?, ?, ?, ?, ?, ?)";
	if($prepared_statement = $mysqli->prepare($apply_query)){
		$prepared_statement->bind_param("isisis", $_POST['jobId'], $_POST['name'], $_POST['phone'], $id, $_POST['bidAmount'], $_POST['message']);
	}
	else{
		header("location:jobcart.php?error=14");
	}
	
}
else{
	$apply_query = "INSERT INTO tbl_job_application (job_id, user_profile_id, name, phone, id, bid_amount, message) VALUES (?, ?, ?, ?, ?, ?, ?)";
	$prepared_statement = $mysqli->prepare($apply_query);
	if($prepared_statement = $mysqli->prepare($apply_query)){
		$prepared_statement->bind_param("iisisis", $_POST['jobId'], $_SESSION['userid'], $_POST['name'], $_POST['phone'], $id, $_POST['bidAmount'], $_POST['message']);
	}
	else{
		header("location:jobcart.php?error=14");
	}
}
if(!$prepared_statement->execute()){
	header("location:jobcart.php?error=22");
	//echo "Error executing";
}
header("location:jobcart.php?success=12");
?>