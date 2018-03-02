<?php 
	require_once("includes/functions.php");
	require_once("includes/connection.php"); 
?>

<?php
	if(!confirm_logged_in()) redirect_to("admin_login.php");
?>


<?php	
		if(isset($_POST['submit']))
		{
			// Perform query
			// print_r($_POST);
			$email=$_POST["Email_Id"];
			$pwd=sha1($_POST["password"]);
			$f_name=$_POST["First_Name"];
			$l_name=$_POST["Last_Name"];
			$dat=$_POST["dob"];
			$age=$_POST["age"];
			$m_no=$_POST["Mobile_Number"];
			$p_adrr=$_POST["addr"];
			$pm_adrr=$_POST["Address"];
			$city=$_POST["City"];
			$pin=$_POST["Pin_Code"];
			$state=$_POST["State"];
			$country=$_POST["Country"];
			$gender=$_POST["Gender"];
			$regn_no=$_POST["regn_no"];
			$branch=$_POST["branch"];
			$course=$_POST["course"];
			$r_no=$_POST["roll_no"];
			// echo $r_no;

			$sql="SELECT * FROM student_details WHERE regn_no='$regn_no'";
			$check=mysqli_query($conn,$sql);
 		    $checkrows=mysqli_num_rows($check);

 		    if($checkrows>0) {
			      $message = "<h2>User with same registration number already exists.Try again with a different registration number</h2>";
			   } else {  
			 $query = "
		  		INSERT INTO student_details(f_name,l_name,date,age,m_no,p_addr,pm_addr,city,pin,state,country,regn_no,branch,course,roll_no,email,pwd,status) VALUES ('$f_name','$l_name','$dat','$age','$m_no','$p_adrr','$pm_adrr','$city','$pin','$state','$country','$regn_no','$branch','$course','$r_no','$email','$pwd',1)";

			$result = mysqli_query($conn,$query);

			if(!$result){
				$message = "Registration Failed" ;
			}
			else{
				$message = "Registration Successful";
			}
		}
		
			// Close the database conn
			mysqli_close($conn);
		}
?>	



<html>
	<head>
		<title>Main Page</title>
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
			<h4 align="center" style="color: #CCCCCC; margin-top: 0;"> <?php echo $message; ?> </h4>
		</div>
			
</body>
</html>
