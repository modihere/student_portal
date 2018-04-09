<?php
	require_once("includes/sessions.php");
	require_once("includes/functions.php");
?>

<?php
	$_SESSION['user_id'] = null;
	$_SESSION['Email'] = null;
	redirect_to("user_login.php");
?>	
