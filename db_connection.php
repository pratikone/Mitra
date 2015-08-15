<?php
$dbserver = "localhost";  
$dbuser = "root";
$dbpassword = "";
$mysqli = new mysqli($dbserver, $dbuser, $dbpassword); 
$mysqli->select_db("mitra_jobs");
// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 
?>