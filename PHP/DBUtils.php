<?php
function getConn() {
	require 'dbconnect.php';
	$conn = new mysqli($dbserver, $dbuser, $dbpassword, $dbname);
		// Check Connection
	if (!$conn) {
		die("Failed to connect to MySQL: " .$mysqli->connect_error());
	}
	return $conn;
}

?>