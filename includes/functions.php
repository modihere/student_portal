<?php
	require_once("sessions.php");

	function password_encrypt($password){
		$hash_format = "$2y$10$";		// blowfish encryption algorithm
		$salt_length = 22;

		$salt = generate_salt($salt_length);
		$format_and_salt = $hash_format . $salt;
		$hash = crypt($password,$format_and_salt);
		return $hash;
	}

	function generate_salt($length){
		$unique_random_string = md5(uniqid(mt_rand(),true));
		$salt = substr($unique_random_string,0,$length);
		return $salt;	
	}

	function redirect_to( $location = NULL ) {
		if ( $location != NULL ) {
			header( "Location: {$location}" );
			exit;
		}
	}

	function confirm_query( $result_set ) {
		if( !$result_set ) {
		die( "Database query failed: " . mysqli_error() );
		}
	}
?>	