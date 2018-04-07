<?php 
	require_once("includes/functions.php");
	require_once("includes/sessions.php");
	require_once("includes/connection.php")
?>

<?php
	// print_r($_SESSION);
	if(!confirm_logged_in()) redirect_to("user_login.php");
?>
<?php
	// echo $_SESSION['Email'];
	// $index = $_SESSION['user_id'];
	// $query = "SELECT * FROM student_details ";
	// $query .= "WHERE email = '$_SESSION['Email']' ";
	// echo "string";
	$k=$_SESSION['Email'];
	$query = "SELECT * FROM student_details WHERE email='$k'";
	$result = mysqli_query($conn,$query);
	//echo $result;
	//echo "string1";
			$row = mysqli_fetch_assoc($result);
			//echo $row2;
			$firstname = $row['f_name'];
			//echo $firstname;
			$lastname = $row['l_name'];
			$address = $row['p_addr'];
			$email = $row['email'];
			$mobile = $row['m_no'];
			$nationality = $row['country'];
			$image=$row['image'];
			#echo $image;

			 // print_r($result_set);
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
	<script type="text/javascript" src="js/valid2.js"></script>
</head>
<body>
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
					<button class="dropbtn">Details</button>
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

		<p style="color: black; margin-top: 0; font-size: 30px;"  align="center"> Welcome <?php echo($firstname.' '.$lastname) ?> </p>
		<table style="color: black" align="center" border="1px" bordercolor="black" >

			<tr>
			<td style="text-align: center;">CURRICULUM VIATE</td><td><?php echo "<img src='photos/".$row['image']."'  width='210' height='250' align='center' />"; ?> </td>
		</tr>
	
					<tr>
						<td> <i> Name: </i></td><td><?php 	echo $row['f_name'].' '.$row['l_name']; ?> </td>
					</tr>
					<tr>
						<td> <i> Email: </i></td><td><?php 	echo $row['email']; ?> </td>
					</tr>
					
					<tr>	
						<td> <i> Registration No.: </i> </td><td><?php 	echo $row['regn_no']; ?> </td>
					</tr>
					<tr>	
						<td> <i> Mobile No.: </i></td><td><?php 	echo $row['m_no']; ?></td>
					</tr>
					<tr>	
						<td> <i> Date of Birth: </i></td><td><?php 	echo $row['date']; ?></td>
					</tr>
					<tr>	
						<td> <i> Age: </i></td><td><?php 	echo $row['age']; ?></td>
					</tr>
					<tr>	
						<td> <i> Permanent Address: </i></td><td><?php 	echo $row['p_addr']; ?></td>
					</tr>
					<tr>	
						<td> <i> City: </i></td><td><?php 	echo $row['city']; ?></td>
					</tr>
					<tr>	
						<td> <i> Pin Code: </i></td><td><?php 	echo $row['pin']; ?></td>
					</tr>
					<tr>	
						<td> <i> Country: </i></td><td><?php 	echo $row['country']; ?></td>
					</tr>
					<tr>	
						<td> <i> Registration Number: </i></td><td><?php 	echo $row['regn_no']; ?></td>
					</tr>
					<tr>	
						<td> <i> Branch: </i></td><td><?php 	echo $row['branch']; ?></td>
					</tr>
					<tr>	
						<td> <i> Course: </i></td><td><?php 	echo $row['course']; ?></td>
					</tr>
					<tr>	
						<td> <i> Roll Number: </i></td><td><?php 	echo $row['roll_no']; ?></td>
					</tr>
					<tr>	
						<td> <i> Hobbies: </i></td><td><?php 	echo $row['hobby']; ?></td>
					</tr>
					<tr>
						<th>CLASS X</th>
					</tr>
					<tr>
						<td>Board</td><td>CISCE</td>
					</tr>
					<tr>
						<td>Percentage</td><td>91.4%
						</td>
					</tr>
					<tr>
						<td>Year of Passing</td><td>2013</td>
					</tr>
					<tr>
						<th>CLASS XII</th>
					</tr>
					<tr>
						<td>Board</td><td></td>
					</tr>
					<tr>
						<td>Percentage</td><td>
						</td>
					</tr>
					<tr>
						<td>Year of Passing</td><td></td>
					</tr>
					<tr>
						<th>UNDERGRADUATION</th>
					</tr>
					<tr>
						<td>Board</td><td></td>
					</tr>
					<tr>
						<td>Percentage</td><td>
						</td>
					</tr>
					<tr>
						<td>Year of Passing</td><td></td>
					</tr>
					<tr> <td>The information here are true to the best of my knowledge.</td><td style="text-align: right;">sig.</td></tr>
			
			</table>
			<button onclick="myFunction()">Print this page</button>

<script>
function myFunction() {
    window.print();
}
</script>
	</div>
</body>
</html>