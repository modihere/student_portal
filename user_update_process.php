<?php 
	
	require_once("includes/connection.php");
	require_once("includes/functions.php");
	require_once("includes/functions.php");
	require_once("includes/sessions.php");
?>

<?php
	if(!confirm_logged_in()) redirect_to("user_login.php");
?>


<?php
	global $message;
	$message = "";
	if(isset($_POST['submit']))
	{
		$index = $_SESSION['id1'];
		$username = $_POST['First_Name'];
		$lastname = $_POST['Last_Name'];
		$address = $_POST['address'];
		$email = $_POST['Email_Id'];
		$mobile = $_POST['Mobile_Number'];
		$nationality = $_POST['Country'];

		$query = "UPDATE student_details SET f_name='{$username}',l_name='{$lastname}',p_addr='{$address}',email='{$email}',m_no='{$mobile}',country='{$nationality}' WHERE id = '{$index}' ";
		$result = mysqli_query($conn,$query);
		if( !$result ) {
    $message = ("Error description: " . mysqli_error($conn));
    }
		confirm_query($result);
		$message =  'Student Details Updated';
	}
?>
<html>
<head>
	<title>
		Main Page
	</title>
	<link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Lobster+Two" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/home.css">
</head>
<body background="images/background.jpg">
	<div id="header" style="text-align: center;">
		<img src="images/nit_logo.png" alt="nit_logo" style="float: left; width:100px;height:100px">
		<h1>NIT DURGAPUR</h1>
		<h2>(An Institute of National Importance under Government of India, Ministry of Human Resource Development)</h2>
	</div>
	<div class="container">
		<ul class="navbar">
			<li><a href="user.php">Home</a></li>
			<li>
				<div class="dropdown">
					<button class="dropbtn">Notices</button>
					<div class="dropdown-content">
						<a href="user_edit.php">Edit Details</a>
						<!-- <a href="admin_login.php">Administrator Login</a> -->
					</div>
				</div>
			</li>
			<li>
				<div class="dropdown">
					<button class="dropbtn">Results</button>
					<div class="dropdown-content">
					    <a href="results.php">Results</a>
					<!--    <a href="login2.html">Administration Signup</a> !-->
				  	</div>
				</div>
			</li>
			<li><a href="user_logout.php">Logout</a></li> 
		</ul>
		<p style="color: #CCCCCC" align="center"> Welcome,<?php echo($_SESSION['Email']) ?> </p>
		<h4 align="center" style="color: #CCCCCC"> <?php echo $message; ?> </h4>
	</div>
</body>
</html>
