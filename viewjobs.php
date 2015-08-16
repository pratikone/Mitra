<?php
session_start();

$lncode = "en";
require_once("db_connection.php");
if(isset($_SESSION['lang'])){
	$lncode = $_SESSION['lang'];
}

$userid = -1;

if(isset($_SESSION['userid'])){
	$userid = $_SESSION['userid'];
}
else{
	header("location:index.php");
}

//include("translate.php");
require_once("db_connection.php");
include("header.php");
$fetch_job_query = "SELECT * FROM tbl_job_application, tbl_jobs WHERE tbl_jobs.job_id = tbl_job_application.job_id AND tbl_jobs.job_id IN (SELECT DISTINCT(tbl_jobs.job_id) FROM tbl_jobs WHERE user_id = ".$userid.")";

$result = $mysqli->query($fetch_job_query);
?>
		<br/>
		<br/>
		<br/>
		<div class="container" id="content">
		<center><h3>View Job Response</h3></center>
<?php
while($row = $result->fetch_assoc()){
	echo 
	"<div class='panel panel-primary'> ".
		"<div class='panel-body'>		   ".
		"Job Name : ". $row['job_name']  ."<br/> ". 
		"</div>	<div class='panel-footer'>". 
		"Job Location : ". $row['job_location'] ." <br/>".
		"Applicant Name : ". $row['name'] ."<br/>".
		"Contact Number : ". $row['phone'] ."<br/>".
		"Minimum Price : ". $row['job_min_cost'] ."<br/>".
		"Maximum Price : ". $row['job_max_cost'] ."<br/>".
		"Bid Amount : ". $row['bid_amount'] ."<br/>".
		"Message : ". $row['message'] ."<br/>".
		"<br /><div class='clearfix'></div></div> </div>";
}

?>