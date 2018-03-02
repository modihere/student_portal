<?php
	require_once("includes/connection.php");
	require_once("includes/functions.php");
	require_once("includes/sessions.php");
	if(!confirm_logged_in()) redirect_to("admin_login.php");
	$query = "Select id,f_name,l_name,email,m_no,regn_no from student_details";
	$result = mysqli_query($conn,$query);
	$message="Hello";
	if(isset($_POST['submit'])){
		$count=0;
		while($row = mysqli_fetch_assoc($result))
		{
			$index = $row['id'];
			// print_r($_POST);
			if(array_key_exists($index, $_POST))
			{
				$count = $count+1;
				// echo $index;
				// print_r($_POST);
				$query = "SELECT * FROM student_details ";
			    $query .= "WHERE id = '{$index}' ";
			    $result_set = mysqli_query($conn,$query);
			    confirm_query($result_set);

			    if (mysqli_num_rows($result_set)==1)
			    {
			    	$query2 = "DELETE FROM student_details ";
			    	$query2 .= "WHERE id = '{$index}' ";
			    	$result_set2 = mysqli_query($conn,$query2);
			    	confirm_query($result_set2);
			    }
			}
		}
		global $message;
		$message= "";
		if($count<=0)  $message = 'No students were selected';
		else $message= 'Selected students deleted';
	}
	$query = "Select id,f_name,l_name,email,m_no,regn_no from student_details";
	$result = mysqli_query($conn,$query);
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
						<!--    <a href="login2.html">Administration Signup</a> !-->
					  	</div>
					</div>
				</li>
				<li><a href="admin_logout.php">Logout</a></li> 
			</ul>
			<br>
			<br>
			<h1 align="center" style="color: blue">Delete Students from database</h1>
			<h2 align="center" style="color: blue"> Registered Students</h2>
			<h4 align="center" style="color: black"> <?php echo $message; ?> </h4>
			<form action="admin_delete.php" method="POST">
				<table style="color: #black" align="center" border="1px" bordercolor="white">
					<tr>
						<th> <i> Name </i> </th>
						<th> <i> Email </i> </th>
						<th> <i> Registration No. </i> </th>
						<th> <i> Mobile No. </i></th>
					</tr>	

					<?php 
						while($row=mysqli_fetch_assoc($result)){
					?>
						<tr>
							<td> <?php 	echo $row['f_name'].' '.$row['l_name']; ?> </td>
							<td> <?php 	echo $row['email']; ?> </td>
							<td> <?php 	echo $row['regn_no']; ?> </td>
							<td> <?php 	echo $row['m_no']; ?> </td>
							<td> <input type="checkbox" name="<?php echo $row['id'] ?>"> </td>
						</tr>	

					<?php } ?>
					<tr>
						<th> <input type="submit" align="center" name="submit" value="Delete entries"> </th>
					</tr>
				</table>
			</form>
		</div>
			
</body>
</html>