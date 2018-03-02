<?php 
	
	require_once("includes/connection.php");
	require_once("includes/functions.php");
	require_once("includes/functions.php");
	require_once("includes/sessions.php");
?>

<?php
	if(!confirm_logged_in()) redirect_to("admin_login.php");
?>


<?php
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
				<li><a href="admin.php">Home</a></li>
				<li>
					<div class="dropdown">
						<button class="dropbtn">Student Info</button>
						<div class="dropdown-content">
							<a href="admin_update.php">Edit Student Info</a>
							<a href="admin_delete.php">Delete Student Info</a>
						</div>
					</div>
				</li>
				<li>
					<div class="dropdown">
						<button class="dropbtn">Student</button>
						<div class="dropdown-content">
						    <a href="admin_create.php">Add Students</a>
						    <a href="admin_show.php">Accepted Students</a>
						<!--    <a href="login2.html">Administration Signup</a> --!-->
					  	</div>
					</div>
				</li>
				<li><a href="admin_logout.php">Logout</a></li> 
			</ul>
			<h1 align="center" style="color: #CCCCCC; margin-top: 0;"> <?php echo $message ?> </h1>
		</div>
			
</body>
</html>
