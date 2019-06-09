<?php
	$conn = new mysqli('35.225.202.254', 'root', 'opensesame', 'apsystem');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>