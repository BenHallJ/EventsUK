<?php
	function secure_session_start() {
		$session_name = 'UserWebSession'; 					// Set a custom session name
		$secure = false; 									// Set to true if using https.
		$httponly = true; 									// This stops javascript being able to access the session id. 
 
		ini_set('session.use_only_cookies', 1); 			// Forces sessions to only use cookies. 
		$cookieParams = session_get_cookie_params(); 		// Gets current cookies params.
		session_set_cookie_params($cookieParams["lifetime"], $cookieParams["path"], $cookieParams["domain"], $secure, $httponly); 
		session_name($session_name); 						// Sets the session name to the one set above.
		session_start(); 									// Start the php session
		session_regenerate_id(true); 						// regenerated the session, delete the old one.     
	}
	
	// Function for controling the registration process
	function register($first, $second, $gender, $email, $pass, $mysqli)
	{
		if ($insert_stmt = $mysqli->prepare("SELECT COUNT(*) FROM members WHERE email = ?")) {    
			
			// Bind params
			$insert_stmt->bind_param('s', $email); 
			
			// Execute the prepared query.
			$insert_stmt->execute();
			
			if($insert_stmt->num_rows == 1)
			{
				echo("Email address is already registered.");
			}
			else
			{
				// Escape values that we will want to display
				$first = mysql_real_escape_string($first);
				$second = mysql_real_escape_string($second);
			
				// Create salt		
				$iv = mcrypt_create_iv(32, MCRYPT_DEV_URANDOM);
				
				// Create hashed password
				$hash = hash("SHA512", $pass . $iv, false);
				
				// Get current date and time
				$joinDate = date("Y-m-d H:i:s");
				
				// Insert into members table				
				if ($insert_member_stmt = $mysqli->prepare("INSERT INTO members (forename, surname, gender, email, hashPassword, salt, joinDate, admin, accountActive) 
																VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)")) {    
																
				   $insert_member_stmt->bind_param('sssssssss', $first, $second, $gender, $email, $hash, $iv, $joinDate, 0, 1); 

				   $insert_member_stmt->execute();
				}								
			}
		}
	}
?>

