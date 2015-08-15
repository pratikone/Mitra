<?php
require_once("db_connection.php");
$locationid = $pricemin = $pricemax = $jobcategory = $startdate = $startindex = null;
if(isset($_GET['locationid'])) {
	$locationid = $mysqli->real_escape_string($_GET['locationid']);
}

if(isset($_GET['pricemin'])) {
	$pricemin = $mysqli->real_escape_string($_GET['pricemin']);
}

if(isset($_GET['pricemax'])) {
	$pricemax = $mysqli->real_escape_string($_GET['pricemax']);
}

if(isset($_GET['jobcategory'])) {
	$jobcategory = $mysqli->real_escape_string($_GET['jobcategory']);
}

if(isset($_GET['startdate'])) {
	$startdate = $mysqli->real_escape_string($_GET['startdate']);
}

if(isset($_GET['startfrom'])) {
	$startindex = $mysqli->real_escape_string($_GET['startfrom']);
}

$blocksize = 10;

$fetch_job_query = "SELECT * FROM tbl_jobs, tbl_languages, tbl_job_locations, tbl_user_profile, tbl_job_types WHERE tbl_jobs.user_id = tbl_user_profile.user_id AND tbl_jobs.job_location = tbl_job_locations.location_id AND tbl_job_types.job_type_id = tbl_jobs.job_type AND tbl_languages.language_id = tbl_jobs.language_id AND tbl_jobs.start_date >= CURRENT_DATE";
if(isset($locationid) && strlen($locationid) > 0) {
	$fetch_job_query = $fetch_job_query." AND tbl_job_locations.location_pincode = ".$locationid;
}
if(isset($pricemin) && strlen($pricemin) > 0){
	$fetch_job_query = $fetch_job_query." AND tbl_jobs.job_min_cost >= ".$pricemin;
}
if(isset($pricemax) && strlen($pricemax) > 0){
	$fetch_job_query = $fetch_job_query." AND tbl_jobs.job_max_cost <= ".$pricemax;
}
if(isset($jobcategory) && strlen($jobcategory) > 0){
	$fetch_job_query = $fetch_job_query." AND tbl_jobs.job_type = ".$jobcategory;
}
if(isset($startdate) && strlen($startdate) > 0){
	$fetch_job_query = $fetch_job_query." AND STR_TO_DATE(tbl_jobs.start_date, '%d-%m-%Y') >= ".$startdate;
}
if(isset($startindex) && strlen($startindex) == 0){
	$startindex = 0;
}
$fetch_job_query = $fetch_job_query." LIMIT ".$startindex." ".$blocksize;

$result = $mysqli->query($fetch_job_query);
$job_process = array();

while( $result <> null && $row = $result->fetch_assoc()){
	$job_process[] = $row;
}

echo json_encode($job_process);


?>