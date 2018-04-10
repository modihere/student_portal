<?php 
	require_once("includes/functions.php");
	require_once("includes/connection.php"); 
?>



<?php	
	
	$target_dir = "photos/";
	$target_file = $target_dir.basename($_FILES['image']['name']);
	#echo $target_file;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

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
			$gender=$_POST['gender'];
			#echo $gender;
			$regn_no=$_POST["regn_no"];
			$branch=$_POST["branch"];
			$course=$_POST["course"];
			$r_no=$_POST["roll_no"];
			$hobby=implode(',', $_POST['hobby']);
			$other_hobby=$_POST["other"];
			$hob=$_POST['hobby'];
			$img=$_FILES['image']['name'];
			$x1=$_POST['xb'];
			$x2=$_POST['xp'];
			$x3=$_POST['xyp'];
			$x4=$_POST['xiib'];
			$x5=$_POST['xiip'];
			$x6=$_POST['xiiyp'];
			$x7=$_POST['ugb'];
			$x8=$_POST['ugp'];
			$x9=$_POST['ugyp'];

			$check = getimagesize($_FILES['image']['tmp_name']);
		    if($check !== false) {
		        #echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        #echo "File is not an image.";
		        $uploadOk = 0;
		    }

			if ($_FILES['image']['size'] > 500000) {
    			$message = "<b><b>Sorry your file is too large</b></b>";
    			$uploadOk = 0;
				}

			#echo $img;





			// $ten_board=$_POST["ClassX_Board"];
			

			// echo $r_no;

			$sql="SELECT * FROM student_details WHERE regn_no='$regn_no' or email='$email'";
			$check=mysqli_query($conn,$sql);
 		    $checkrows=mysqli_num_rows($check);
 		    //echo $checkrows;

 		    if($checkrows>0) {
			      $message = "<b><b>User with same registration number or email already exists.Try again with a different registration number.</b></b>";
			   } 
			   else {  

			   	
			   		$other_hobby=$_POST["other"];
			 			$query = "INSERT INTO student_details(f_name,l_name,date,age,m_no,p_addr,pm_addr,city,pin,state,country,regn_no,branch,course,roll_no,email,pwd,status,hobby,other_hobby,image,gender,xb,xp,xyp,xiib,xiip,xiiyp,ugb,ugbp,ugyp) VALUES ('$f_name','$l_name','$dat','$age','$m_no','$p_adrr','$pm_adrr','$city','$pin','$state','$country','$regn_no','$branch','$course','$r_no','$email','$pwd',0,'" . $hobby . "','$other_hobby','$img','$gender','$x1','$x2','$x3','$x4','$x5','$x6','$x7','$x8','$x9')";
			 #echo $query;
			 //echo $query;
			 			$result = mysqli_query($conn,$query);


			   	
			 

			if(!$result){
				$message = "Registration failed";
				die("<b><b>Registration Failed.</b></b>");
			}
			else{
				if(move_uploaded_file($_FILES['image']['tmp_name'], $target_file))
				{
					$message = "<b><b>Registration Successful and image uploaded</b></b>";
				}
				else
				{
					$message = "Registration recorded but image couldn't be uploaded";
				}
			}
		}
		
			// Close the database connection
			mysqli_close($conn);
		}
?>	



<html>
	<head>
		<title>Main Page</title>
		<link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css?family=Lobster+Two" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/home1.css">
	</head>		  

<body background="images/background.jpg">
	<div id="header" style="text-align: center;">
		<img src="images/nit_logo.png" alt="nit_logo" style="float: left; width:100px;height:100px">
			<h1>NIT DURGAPUR</h1>
			<h2>(An Institute of National Importance under Government of India, Ministry of Human Resource Development)</h2>

		</div>
			<div class="container">
				<ul class="navbar">
					<li><a href="#home">Home</a></li>
					<li>
						<div class="dropdown">
							<button class="dropbtn">Login</button>
							<div class="dropdown-content">
								<a href="user_login.php">Student Login</a>
								<a href="admin_login.php">Administrator Login</a>
							</div>
						</div>
					</li>
					<li>
						<div class="dropdown">
							<button class="dropbtn">Signup</button>
							<div class="dropdown-content">
							    <a href="user_register.php">Student Signup</a>
							<!--    <a href="login2.html">Administration Signup</a> --!-->
						  	</div>
						</div>
					</li>
				</ul>
				<h3 align="center"> <?php echo $message ?> </h3>
			</div>	
</body>
</html>