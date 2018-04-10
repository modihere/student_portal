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
			# echo $firstname;
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
				<form name="Student_signup" onsubmit ="return validateForm()" action="user_form_process.php" method="post" enctype="multipart/form-data">
			<legend>
				<span class="number">1</span>
				<b> Personal Information :</b>
			</legend>
			<fieldset style="background-color: #35B393">
				<table align="center" cellpadding = "10">
					<!--- First Name -->
					<tr>
						<td>FIRST NAME:</td>
						<td><input type="text"  name="First_Name" maxlength="30" placeholder="First Name" onfocusin="name_in()" onfocusout="name_out()" required="required" value="<?php  echo $row2['f_name'] ?>" />
						</td>
					</tr>
		 
					<!--- Last Name -->
					<tr>	
						<td>LAST NAME:</td>
						<td><input type="text"  name="Last_Name" maxlength="30" placeholder="Last Name" onfocusin="name1_in()" onfocusout="name1_out()" required="required" value="<?php  echo $row2['l_name'] ?>" />
						</td>
					</tr>

					<!--- Date Of Birth -->
					<tr>
						<td>DATE OF BIRTH:</td>
						<td><input type="date"  name="dob" placeholder="dd/mm/yyyy" onfocusout="dob_out()" value="<?php  echo $row2['date'] ?>"/></td>
					</tr>
					<tr>	
						<td>AGE:</td>
						<td><input type="text" name="age" maxlength="10" placeholder="age" onclick="getage()" value="<?php  echo $row2['age'] ?>"/>
						</td>
					</tr>
					<!--- Mobile Number -->
					<tr>
						<td>MOBILE NUMBER:</td>
						<td><input type="text"  name="Mobile_Number" maxlength="10" placeholder="(10 digit number)" onfocusin="Mobile_Number_in()" onfocusout="Mobile_Number_out()" required="required" value="<?php  echo $row2['m_no'] ?>"/></td>
					</tr>
					<!--- Gender -->
					<tr>
						<td>GENDER:</td>
						<td>
							Male <input type="radio" name="gender" value="Male"
							<?php echo ($row2['gender'] == 'Male')?'checked':'';?> />
							Female <input type="radio" name="gender" value="Female"
							<?php echo ($row2['gender'] == 'Female')?'checked':'';?>/>
						</td>
					</tr>
					<!--- Address -->
					<tr>
						<td>
							PRESENT ADDRESS: 
						</td>
						<td>
							<textarea  name="addr"  rows="4" cols="30" placeholder="eg:" required="required" value="<?php  echo $row2['pm_addr'] ?>"></textarea>
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
							<textarea name="Address" rows="4" cols="30" placeholder="eg:" value="<?php  echo $row2['p_addr'] ?>"></textarea>
						</td>
					</tr>
					<!--- City -->
					<tr>
						<td>CITY:</td>
						<td>
							<input type="text"  name="City" maxlength="30" placeholder="eg. " required="required" value="<?php  echo $row2['city'] ?>"/>
						</td>
					</tr>
					<!--- Pin Code -->
					<tr>
						<td>PIN CODE</td>
						<td>
							<input type="text" name="Pin_Code" maxlength="6" placeholder="eg. 516503" pattern="[0-9][0-9][0-9][0-9][0-9][0-9]" required="required" value="<?php  echo $row2['pin'] ?>"/>
						</td>
					</tr>
					<!--- State -->
					<tr>
						<td>STATE</td>
						<td>
							<input type="text"  name="State" maxlength="30" placeholder="eg. " required="required" value="<?php  echo $row2['state'] ?>"/>
						</td>
					</tr>
				 
					<!--- Country -->
					<tr>
						<td>COUNTRY</td>
						<td><input type="text"  name="Country" placeholder="eg." required="required" value="<?php  echo $row2['country'] ?>"/></td>
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
					<td align="center"><input type="text" name="xb" maxlength="30" value="<?php  echo $row2['xb'] ?>"/></td>
					<td align="center"><input type="text" name="xp" maxlength="30" value="<?php  echo $row2['xp'] ?>"/></td>
					<td align="center"><input type="text" name="xyp" maxlength="30" value="<?php  echo $row2['xyp'] ?>"/></td>
				</tr>
				<tr>
					<!--<td align="center">2</td> !-->
					<td align="center">Class XII</td>
					<td align="center"><input type="text" name="xiib" maxlength="30" value="<?php  echo $row2['xiib'] ?>"/></td>
					<td align="center"><input type="text" name="xiip" maxlength="30" value="<?php  echo $row2['xiip'] ?>"/></td>
					<td align="center"><input type="text" name="xiiyp" maxlength="30" value="<?php  echo $row2['xiiyp'] ?>"/></td>
				</tr>
				<tr>
					<!--<td align="center">3</td> !-->
					<td align="center">Under Graduation</td>
					<td align="center"><input type="text" name="ugb" maxlength="30" value="<?php  echo $row2['ugb'] ?>"/></td>
					<td align="center"><input type="text" name="ugp" maxlength="30" value="<?php  echo $row2['ugbp'] ?>"/></td>
					<td align="center"><input type="text" name="ugyp" maxlength="30" value="<?php  echo $row2['ugyp'] ?>"/></td>
				</tr>
				<tr>
					<!--<td align="center">4</td> !-->
					<td align="center">Post Graduation</td>
					<td align="center"><input type="text" name="pgb" maxlength="30" /></td>
					<td align="center"><input type="text" name="pgp" maxlength="30" /></td>
					<td align="center"><input type="text" name="pgyp" maxlength="30" /></td>
				</tr>
			</table>
			<table>
				<tr>
					<td colspan="2">COURSES APPLIED FOR: </td>
					<td>
						B.Tech<input type="radio" name="course" value="B.Tech" <?php echo ($row2['course']=='B.Tech'?'checked':'')?> />&nbsp;
						M.Tech<input type="radio" name="course" value="M.Tech" <?php echo ($row2['course']=='M.Tech'?'checked':'')?> />&nbsp;
					</td>
				</tr>
				<br>
				<tr>
					<td colspan="2">BRANCH</td>
					<td colspan="2">
						<select name="branch">
							<option value="<?php echo $row2['branch'] ?>"><?php echo $row2['branch'] ?></option>
							<option value="0">--Select--</option>
							<option value="BT" <?php if ($row2['branch'] == "BT") echo "selected='selected'";?> >Biotechnology</option>
							<option value="CHE" <?php if ($row2['branch'] == "CHE") echo "selected='selected'";?>>CHEMICAL ENGINEERING</option>
							<option value="CIV" <?php if ($row2['branch'] == "CIV") echo "selected='selected'";?>>Civil engineering</option>
							<option value="CSE" <?php if ($row2['branch'] == "CSE") echo "selected='selected'";?>>Computer Science and engineering</option>
							<option value="ECE" <?php if ($row2['branch'] == "ECE") echo "selected='selected'";?>>Electronics and communication Engineering</option>
							<option value="IT" <?php if ($row2['branch'] == "IT") echo "selected='selected'";?>>Information Technology</option>
							<option value="ME" <?php if ($row2['branch'] == "ME") echo "selected='selected'";?>>Mechanical engineering</option>
							<option value="MME" <?php if ($row2['branch'] == "MME") echo "selected='selected'";?>>Metallurgical and materials engineering</option>
						</select>
					</td>
				</tr>
				<!--- Registration No -->
				<tr>
					<td colspan="2">REGISTRATION NO</td>
					<td colspan="2"><input type="text"  placeholder="" name="regn_no" maxlength="50" pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]" value="<?php  echo $row2['regn_no'] ?>"/></td>
				</tr>
				<!--- Roll No-->
				<tr>
					<td colspan="2">ROLL NO</td>
					<td colspan="2"><input type="text"  name="roll_no" maxlength="50" placeholder="" onclick="getstudentid()" value="<?php  echo $row2['roll_no'] ?>"/></td>
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
							Sports <input type="checkbox" name="hobby[]" value="Sports" />
							Reading <input type="checkbox" name="hobby[]" value="Reading" />
							Singing <input type="checkbox" name="hobby[]" value="Singing" />
						    Dancing <input type="checkbox" name="hobby[]" value="Dancing" />
						    Painting <input type="checkbox" name="hobby[]" value="Painting" />
						</td>
					</tr>
					
						<td>SPECIFY OTHER:</td>
						<td>
							<textarea  name="other"  rows="4" cols="25" placeholder="Write you some other hobbies here:"></textarea>

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
					<td colspan="2"><input placeholder="example@gmail.com"  type="text" name="Email_Id" maxlength="50" onfocusin="email_in()" onfocusout="email_out()" required="required" value="<?php  echo $row2['email'] ?>"></td>
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
				<input  type="file" name="image" id="image" accept="image/*">
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