<?php

session_start();

if(!isset($user_id) || strlen($user_id) <= 0){
	header("location:index.php?error=20");
}

$user_id = $_SESSION['userid'];

require_once("db_connection.php");

$job_title = $mysqli->real_escape_string($_POST['jobTitle']);
$job_description = $mysqli->real_escape_string($_POST['jobDesciption']);
$job_address = $mysqli->real_escape_string($_POST['jobAddress']);
$min_price = $mysqli->real_escape_string($_POST['minPrice']);
$max_price = $mysqli->real_escape_string($_POST['maxPrice']);
$start_date = $mysqli->real_escape_string($_POST['startDatePicker']);
$end_date = $mysqli->real_escape_string($_POST['endDatePicker']);
$job_type = $mysqli->real_escape_string($_POST['category']);
$num_people = $mysqli->real_escape_string($_POST['peopleRequired']);
$language = $mysqli->real_escape_string($_POST['language']);
$location = $mysqli->real_escape_string($_POST['location']);
$instant = 0;
if(isset($_POST['instant'])){
    //$stok is checked and value = 1
    $instant = 1;
}
else{
    //$stok is nog checked and value=0
    $instant=0;
}

print_r($_POST);

var_dump($_POST);

$insert_job_query = "INSERT INTO tbl_jobs (job_name, job_desc, job_location, job_address, job_type, instant, user_id, language_id, job_max_cost, job_min_cost, job_people_req, start_date, job_expiry_time) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, STR_TO_DATE('".$start_date."', '%d-%m-%Y'), STR_TO_DATE('".$end_date."', '%d-%m-%Y'))";
if($prepared_statement = $mysqli->prepare($insert_job_query)){
	$prepared_statement->bind_param("ssisiiiiiii", $job_title, $job_description, $location, $job_address, $job_type, $instant, $user_id, $language, $max_price, $min_price, $num_people);
	if(!$prepared_statement->execute()){
		echo $prepared_statement->errno;
		header("location:index.php?error=21");
	}
	else{
		header("location:index.php?success=11");
	}
}
else{
	header("location:index.php?error=22");
}
?>