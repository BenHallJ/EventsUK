<?php
	define("HOST", "localhost"); 					// The host you want to connect to.
	define("USER", "WebUser"); 						// The database username.
	define("PASSWORD", "P5L=;71^#rKeBMlcj<!p"); 	// The database password. 
	define("DATABASE", "BenJHall"); 				// The database name.
	 
	$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);	

	if(mysqli_connect_error())
    {
		die('Connection to database failed.');
    }
	
	// If I'm connecting via TCP/IP rather than a UNIX socket remember to add the port number as a parameter.
?>