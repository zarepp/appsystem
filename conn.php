<?php
	$conn = new mysqli('us-cdbr-iron-east-02.cleardb.net', 'b24b5bddd7cd09', 'd6cf68d7', 'heroku_df473506942c883');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>