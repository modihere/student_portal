<!doctype html>
<html>
<head>
<script type="text/javascript" src="js/valid2.js"></script>
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<title>Student Information</title>
<link rel="stylesheet" type="text/css" href="css/register.css">
<link rel="stylesheet" type="text/css" href="css/home1.css">

</head>
	<body background="images/back.jfif" >
		<h1 style="text-align:center; color: black ;">STUDENT SIGN-UP PAGE</h1>
		<div class="container">
				<ul class="navbar">
					<li><a href="home.php">Home</a></li>
					<li>
						<div class="dropdown">
							<button class="dropbtn">Login</button>
							<div class="dropdown-content">
								<a href="<?php echo 'user_login.php' ?>">Student Login</a>
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
			</div>

		<h2 style="text-align:center; color: #4bc970;background: black">ENTER YOUR DETAILS </h2>

		<form style="width: 100%" name="Student_signup" onsubmit ="return validateForm()" action="user_form_processing.php" method="post" enctype="multipart/form-data">
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
				
						<td></td><td id="errors" style="color: red"></td>
					
		 
					<!--- Last Name -->
					<tr>	
						<td>LAST NAME:</td>
						<td><input type="text"  name="Last_Name" maxlength="30" placeholder="Last Name" onfocusin="name1_in()" onfocusout="name1_out()" required="required" />
						</td>
					</tr>

					<td></td><td id="errors1" style="color: red"></td>

					<!--- Date Of Birth -->
					<tr>
						<td>DATE OF BIRTH:</td>
						<td><input type="date"  name="dob" placeholder="dd/mm/yyyy" onfocusout="dob_out()" /></td>
					</tr>
					<td></td><td id="errors3" style="color: red"></td>
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
							Male <input type="radio" name="gender" value="Male" />&nbsp;
							Female <input type="radio" name="gender" value="Female" />&nbsp;
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
					<td align="center"><input type="text" name="xb" maxlength="30" /></td>
					<td align="center"><input type="text" name="xp" maxlength="30" /></td>
					<td align="center"><input type="text" name="xyp" maxlength="30" /></td>
				</tr>
				<tr>
					<!--<td align="center">2</td> !-->
					<td align="center">Class XII</td>
					<td align="center"><input type="text" name="xiib" maxlength="30" /></td>
					<td align="center"><input type="text" name="xiip" maxlength="30" /></td>
					<td align="center"><input type="text" name="xiiyp" maxlength="30" /></td>
				</tr>
				<tr>
					<!--<td align="center">3</td> !-->
					<td align="center">Under Graduation</td>
					<td align="center"><input type="text" name="ugb" maxlength="30" /></td>
					<td align="center"><input type="text" name="ugp" maxlength="30" /></td>
					<td align="center"><input type="text" name="ugyp" maxlength="30" /></td>
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
						B.Tech<input type="radio" name="course" value="B.Tech">&nbsp;
						M.Tech<input type="radio" name="course" value="M.Tech">&nbsp;
					</td>
				</tr>
				<br>
				<tr>
					<td colspan="2">BRANCH</td>
					<td colspan="2">
						<select name="branch" onclick="branch_out()" >
							<option value="">--Select--</option>
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
				<td></td><td></td><td id="errors4" style="color: red"></td>
				<!--- Registration No -->
				<tr>
					<td colspan="2">REGISTRATION NO</td>
					<td colspan="2"><input type="number"  placeholder="" name="regn_no" maxlength="50" pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]" onclick="id_in()" /></td>
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
				<td></td><td></td><td id="errors5" style="color: red"></td>
				<br>
				<!--- Submit and Reset -->
				<tr>
					<td colspan="2">PASSWORD</td>
					<td colspan="2"><input type="password"  id="pwd" name="password" maxlength="25" placeholder="********"   onfocusin="pass_in()" onfocusout="pass_out()" required="required"></td>
				</tr>
				<td></td><td></td><td id="errors6" style="color: red"></td>
				<br>
				<tr>
					<td colspan="2">CONFIRM PASSWORD</td>
					<td colspan="2"><input type="password"  id="cpwd" name="cpassword" maxlength="25" placeholder="********" onfocusin="repass_in()" onfocusout="repass_out()" required="required"></td>

				</tr>
				<td></td><td></td><td id="errors7" style="color: red"></td>

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
	</body>
</html>