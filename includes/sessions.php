<?php 
	require_once("functions.php");
	session_start();
	function logged_in() {
		return isset( $_SESSION['user_id'] );
	}
	function confirm_logged_in() {
		if ( !logged_in() ) {
			return false;
			redirect_to("admin_login.php");
		}
		else return true;
	}
?>	
