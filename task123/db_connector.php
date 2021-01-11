<?php
    $mysqli=new mysqli("localhost", "root","","task2");
	
	if (mysqli_connect_errno()) {
		# code...
		echo 'Database Conection Failed: ', mysqli_connect_error();
		exit;
	}
	$mysqli->set_charset("utf8");
?>