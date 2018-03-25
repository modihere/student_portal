<?php 
	require_once("includes/functions.php");
	require_once("includes/connection.php"); 
	require_once("includes/sessions.php");
?>

<?php
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
	// echo "string1";
			$row2 = mysqli_fetch_assoc($result);
			$firstname = $row2['f_name'];
			 echo $firstname;
			$lastname = $row2['l_name'];
			$address = $row2['p_addr'];
			$email = $row2['email'];
			$mobile = $row2['m_no'];
			$nationality = $row2['country'];
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
				<form name="Student_signup" onsubmit ="return validateForm()" action="user_form_processing.php" method="post">
			<legend>
				<span class="number">1</span>
				<b> Personal Information :</b>
			</legend>
			<fieldset style="background-color: #35B393">
				<table align="center" cellpadding = "10">
					<!--- First Name -->
					<tr>
						<td>FIRST NAME:</td>
						<td><input type="text"  name="First_Name" maxlength="30" placeholder="First Name" onfocusin="name_in()" onfocusout="name_out()" required="required" />
						</td>
					</tr>
		 
					<!--- Last Name -->
					<tr>	
						<td>LAST NAME:</td>
						<td><input type="text"  name="Last_Name" maxlength="30" placeholder="Last Name" onfocusin="name1_in()" onfocusout="name1_out()" required="required" />
						</td>
					</tr>

					<!--- Date Of Birth -->
					<tr>
						<td>DATE OF BIRTH:</td>
						<td><input type="date"  name="dob" placeholder="dd/mm/yyyy" onfocusout="dob_out()" /></td>
					</tr>
					<tr>	
						<td>AGE:</td>
						<td><input type="text" name="age" maxlength="10" placeholder="age" onclick="getage()" />
						</td>
					</tr>
					<!--- Mobile Number -->
					<tr>
						<td>MOBILE NUMBER:</td>
						<td><input type="text"  name="Mobile_Number" maxlength="10" placeholder="(10 digit number)" onfocusin="Mobile_Number_in()" onfocusout="Mobile_Number_out()" required="required" /></td>
					</tr>
					<!--- Gender -->
					<tr>
						<td>GENDER:</td>
						<td>
							Male <input type="radio" name="Gender" value="Male" />
							Female <input type="radio" name="Gender" value="Female" />
						</td>
					</tr>
					<!--- Address -->
					<tr>
						<td>
							PRESENT ADDRESS: 
						</td>
						<td>
							<textarea  name="addr"  rows="4" cols="30" placeholder="eg:" required="required"></textarea>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							Same<input  type="radio" name="address" value="1" onclick="getaddress()">&nbsp;
							Different<input type="radio" name="address" value="0">&nbsp;
						</td>
					</tr>
					<tr>
						<td>
							PERMANENT ADDRESS: 
						</td>
						<td>
							<textarea name="Address" rows="4" cols="30" placeholder="eg:" ></textarea>
						</td>
					</tr>
					<!--- City -->
					<tr>
						<td>CITY:</td>
						<td>
							<input type="text"  name="City" maxlength="30" placeholder="eg. " required="required" />
						</td>
					</tr>
					<!--- Pin Code -->
					<tr>
						<td>PIN CODE</td>
						<td>
							<input type="text" name="Pin_Code" maxlength="6" placeholder="eg. 516503" pattern="[0-9][0-9][0-9][0-9][0-9][0-9]" required="required" />
						</td>
					</tr>
					<!--- State -->
					<tr>
						<td>STATE</td>
						<td>
							<input type="text"  name="State" maxlength="30" placeholder="eg. " required="required" />
						</td>
					</tr>
				 
					<!--- Country -->
					<tr>
						<td>COUNTRY</td>
						<td><input type="text"  name="Country" placeholder="eg." required="required" /></td>
					</tr>
				</table>
			</fieldset>
		<br>
		<legend><span class="number">2</span><b> Academic Details </b></legend>
		<fieldset style="background-color: #35B393 ">
			<br>
			<table>
				<!--- Qualification-->
				<thead>
					<tr>
						<td>QUALIFICATION:</td>
					</tr>
					<tr>
						<!--<td align="center"><b>Sl.No.</b></td> !-->
						<td align="center"><b>Examination</b></td>
						<td align="center"><b>Board</b></td>
						<td align="center"><b>Percentage</b></td>
						<td align="center"><b>Year of Passing</b></td>
					</tr>
				</thead>
				<tr>
					<!--<td align="center">1</td> !-->
					<td align="center">Class X</td>
					<td align="center"><input type="text" name="ClassX_Board" maxlength="30" /></td>
					<td align="center"><input type="text" name="ClassX_Percentage" maxlength="30" /></td>
					<td align="center"><input type="text" name="ClassX_YrOfPassing" maxlength="30" /></td>
				</tr>
				<tr>
					<!--<td align="center">2</td> !-->
					<td align="center">Class XII</td>
					<td align="center"><input type="text" name="ClassXII_Board" maxlength="30" /></td>
					<td align="center"><input type="text" name="ClassXII_Percentage" maxlength="30" /></td>
					<td align="center"><input type="text" name="ClassXII_YrOfPassing" maxlength="30" /></td>
				</tr>
				<tr>
					<!--<td align="center">3</td> !-->
					<td align="center">Under Graduation</td>
					<td align="center"><input type="text" name="ug_board" maxlength="30" /></td>
					<td align="center"><input type="text" name="ug_percentage" maxlength="30" /></td>
					<td align="center"><input type="text" name="ug_yrofpassing" maxlength="30" /></td>
				</tr>
				<tr>
					<!--<td align="center">4</td> !-->
					<td align="center">Post Graduation</td>
					<td align="center"><input type="text" name="pg_board" maxlength="30" /></td>
					<td align="center"><input type="text" name="pg_percentage" maxlength="30" /></td>
					<td align="center"><input type="text" name="pg_yrofpassing" maxlength="30" /></td>
				</tr>
			</table>
			<table>
				<tr>
					<td colspan="2">COURSES APPLIED FOR: </td>
					<td>
						B.Tech<input type="radio" name="course" value="B.Tech">&nbsp;
						M.Tech<input type="radio" name="course" value="M.Tech">&nbsp;
					</td>
				</tr>
				<br>
				<tr>
					<td colspan="2">BRANCH</td>
					<td colspan="2">
						<select name="branch">
							<option value="0">--Select--</option>
							<option value="BT">Biotechnology</option>
							<option value="CHE">CHEMICAL ENGINEERING</option>
							<option value="CIV">Civil engineering</option>
							<option value="CSE">Computer Science and engineering</option>
							<option value="ECE">Electronics and communication Engineering</option>
							<option value="IT">Information Technology</option>
							<option value="ME">Mechanical engineering</option>
							<option value="MME">Metallurgical and materials engineering</option>
						</select>
					</td>
				</tr>
				<!--- Registration No -->
				<tr>
					<td colspan="2">REGISTRATION NO</td>
					<td colspan="2"><input type="text"  placeholder="" name="regn_no" maxlength="50" pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]" /></td>
				</tr>
				<!--- Roll No-->
				<tr>
					<td colspan="2">ROLL NO</td>
					<td colspan="2"><input type="text"  name="roll_no" maxlength="50" placeholder="" onclick="getstudentid()" /></td>
				</tr>
				</table>
				</fieldset>
				<br>
				<legend><span class="number">3</span><b> Hobbies </b></legend>
				<fieldset style="background-color: #35B393">
				<table>
					<tr>
						<td>HOBBIES:</td>
						<td>
							Sports <input type="checkbox" name="hobby" value="sports" />
							Reading <input type="checkbox" name="hobby" value="reading" />
							Singing <input type="checkbox" name="hobby" value="singing" />
						    Dancing <input type="checkbox" name="hobby" value="dancing" />
						    Painting <input type="checkbox" name="hobby" value="painting" />
						    Others <input class="xshow" type="checkbox" name="hobby" />
						</td>
					</tr>
					<tr class="show">
						<td>SPECIFY:</td>
						<td>
							<textarea  name="addr"  rows="4" cols="25" placeholder="Write you some other hobbies here:"></textarea>
						</td>
					</tr>
				</table>
				</fieldset>
				<br>
				<legend><span class="number">4</span><b> Login Details </b></legend>
				<fieldset style="background-color: #35B393">
				<table>
				
				<!--- Email Id -->
				<tr>
					<td colspan="2">EMAIL ID</td>
					<td colspan="2"><input placeholder="example@gmail.com"  type="text" name="Email_Id" maxlength="50" onfocusin="email_in()" onfocusout="email_out()" required="required"></td>
				</tr>
				<br>
				<!--- Submit and Reset -->
				<tr>
					<td colspan="2">PASSWORD</td>
					<td colspan="2"><input type="password"  id="pwd" name="password" maxlength="25" placeholder="********"   required="required"></td>
				</tr>
				<br>
				<tr>
					<td colspan="2">CONFIRM PASSWORD</td>
					<td colspan="2"><input type="password"  id="cpwd" name="cpassword" maxlength="25" placeholder="********"  required="required"></td>
				</tr>
				<br>	
			</table>
			<div class="buttons">
				<button type="submit" name="submit">Submit</button>
				<button type="reset">Reset</button>
			</div>
		</fieldset>
	</form>
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
    		$(".show").hide();
    		$('input[type=checkbox]').change(function(){
	        	var isShow = $(this).hasClass('xshow');
	        	if (isShow) {
	        		$(".show").show();	
	        	} else {
	        		$(".show").hide();
	        	}
    		});
		});
	</script>
      </div>

	</body>
</html>		