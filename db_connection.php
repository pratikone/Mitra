<?php

$dbserver = "";  
$dbuser = "";
$dbpassword = "";
$mysqli = new mysqli($dbserver, $dbuser, $dbpassword); 
// Check connection
if ($mysqli ->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 


?>