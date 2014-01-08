<?php
	define("DB_SERVER","localhost");
	define("DB_USER","masanori");
	define("DB_PASS","osaka777");
	define("DB_NAME","ModiShow");
	
	$connection = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

	//test if connection succeeded
	if(mysqli_connect_errno()){
		die("Database connection failed: ".mysqli_connect_error()." (".mysqli_connect_errno().")");
	}
?>