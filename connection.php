<?php 
session_start();
ob_start();
$dbhost= "localhost";
$dbuser= "root";
$dbpass= "";
$dbname= "mpms_nitttrk";
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
	if($mysqli->connect_errno){
	echo "Error Occured" . $mysqli->connect_error;
  	}
?>