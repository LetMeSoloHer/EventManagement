<?php
	$conn = new mysqli('localhost', 'root', '', 'eventsystem');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>