<?php
	require_once("includes/sessions.php");
	require_once("includes/functions.php");
?>

<?php
	$_SESSION['user_id'] = null;
	$_SESSION['email'] = null;
	redirect_to("admin_login.php");
?>	
