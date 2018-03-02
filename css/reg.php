<html> 
	<head>
		<title> Student Registration Page </title>
		<link rel="stylesheet" type="text/css" href="/css/style.css"> 
		<script type="text/javascript" src="/javascript/admin-js.js"></script>
	</head>

	<body>
		<div>
			<div id="img">	<img src = "/images/1.png"> </img> </div> 
			<div id="navbar">
				<ul>
				  <li><a href="home.php">Home</a></li>
				  <li><a href="reg.php">Register</a></li>
				  <li><a href="login.php">Student Login</a></li>
				  <li><a href="admin_login.php">Admin Login</a></li>
				</ul>
			</div>
		</div>	
		<br><br>

		<header style="text-align:center;">
			<h1> Student Registration</h1>
		</header>

		<div id="container">
		<form action="form_processing.php" method="POST">
          <div id="personal-details">
			<h2> Personal Details </h2>
					<table>
						<tr>
							<th> First Name </th>
							<td> <input type="text" name="first_name" placeholder="First Name"> </td>
							<th> Last Name </th>
							<td> <input type="text" name="last_name" placeholder="Last Name"> </td>
						<tr>
						
						<tr>
							<th> Address </th>
							<td> <textarea name="address" rows="3" cols="22" placeholder="Enter your address"> </textarea> </td>
						</tr>

						<tr>
							<th> Email </th>
							<td> <input type="text" name="email" placeholder="example@domain.com"> </td>
							<th> Password </th>
							<td> <input type="password" name="pass" placeholder="Minimum 7 characters"> </td>
						</tr>

						<tr>
							<th> Mobile </th>
							<td> <input type="text" name="mobile" placeholder="Enter mobile number"></td>
							<th> Re-enter Password </th>
							<td> <input type="password" name="pass1" placeholder="Enter password again"></td>
						</tr>
						
						<tr>
							<th> Date Of Birth</th>
							<td> <input type="date" name="date"> </td>
							<th> Gender </th>
							<td>
								<input type="radio" name="gender" value="male" checked> Male
								<input type="radio" name="gender" value="female"> Female
						 	</td>
						</tr>
						 
						<tr> 
						 	<th> Addition Information </th>
						 	<td> <textarea name="Info" rows="3" cols="22" placeholder="Additional Information"> </textarea> </td>
						 	<th> Nationality </th>
						 	<td> <input type="text" name="nation" placeholder"Enter your nationality"></td>
						</tr>
					</table>
		</div>
		<br><br>

		<div id="academic-details">
			<h2> Academic Details </h2>
				<table>
					<tr>
						<th> Exam </th>
						<th> Board </th>
						<th> Year Of Passing </th>
						<th> Total Marks (in %) </th>
					</tr>
					
					<tr>
						<td> X </td>
						<td>
							<select name="Board1" id="board1">
								<option value="0" selected>Select Board</option>
								<option value="CBSE">CBSE</option>
							  	<option value="ICSE">ICSE</option>
							  	<option value="State Board">State Board</option>
							  	<option value="Other">Other</option>
							</select>	
						</td>

						<td>
							<select name="Year1" id="year1">
								<option value="0" selected>Select Passing Year</option>
								<option value="2013">2013</option>
							  	<option value="2012">2012</option>
							  	<option value="2011">2011</option>
							  	<option value="2010">2010</option>
							</select>	
						</td>

						<td> <input type="text" name="percentage1" placeholder="Enter 10th Percentage"></td>
					</tr>
					
					<tr>
						<td> XII </td>
						<td>
							<select name="Board2" id="board2">
								<option value="0" selected>Select Board</option>
								<option value="CBSE">CBSE</option>
							  	<option value="ICSE">ICSE</option>
							  	<option value="State Board">State Board</option>
							  	<option value="Other">Other</option>
							</select>	
						</td>

						<td>
							<select name="Year2" id="year2">
								<option value="0" selected>Select Passing Year</option>
								<option value="2015">2015</option>
							  	<option value="2014">2014</option>
							  	<option value="2013">2013</option>
							  	<option value="2012">2012</option>
							</select>	
						</td>

						<td> <input type="text" name="percentage2" placeholder="Enter 12th Percentage"></td>
					</tr>	
				</table>
				<br>

				<table>
					<tr>
						<th> Degree </th>
						<td> 
							<input type="radio" name="degree" value="Btech" checked> Btech
							<input type="radio" name="degree" value="Mtech"> Mtech
							<input type="radio" name="degree" value="MCA"> MCA
						</td>

						<th> Branch </th>
						<td>
							<select name="Branch" id="branch">
								<option value="0" selected>Select Branch</option>
								<option value="Computer Science">Computer Science</option>
							  	<option value="Information Technology">Information Technology</option>
							  	<option value="Electronic and Communication Engineering">Electronic and Communication Engineering</option>
							  	<option value="Mechanical">Mechanical</option>
							  	<option value="Civil">Civil</option>
							  	<option value="Chemical">Chemical</option>
							  	<option value="Electrical Engineering">Electrical Engineering</option>
							  	<option value="Metallurgy">Metallurgy</option>
							  	<option value="Biotechnology">Biotechnology</option>s
							</select>	
						</td>
					</tr>

					<tr>
						<th> Registration No. </th>
						<td> <input type="text" name="reg" placeholder="Enter registration number"> </td> 
						<th> Roll No. </th>
						<td> <input type="text" name="roll" placeholder="Enter roll number"> </td> 
					</tr>	
				<table>	
				<br>	

				<table>
					<tr>
						<th> Year </th>
						<th> Odd Sem SGPA (Out of 10) </th>
						<th> Even Sem SGPA (Out of 10) </th>
					</tr>

					<tr>
						<td> 1st Year </td>
						<td> <input type="text" name="sgpa1" placeholder="Enter 1st semester SGPA"> </td>	
						<td> <input type="text" name="sgpa2" placeholder="Enter 2nd semester SGPA"> </td>	
					</tr>
					
					<tr>
						<td> 2nd Year </td>
						<td> <input type="text" name="sgpa3" placeholder="Enter 3rd semester SGPA"> </td>	
						<td> <input type="text" name="sgpa4" placeholder="Enter 4th semester SGPA"> </td>	
					</tr>

					<tr>
						<td> 3rd Year </td>
						<td> <input type="text" name="sgpa5" placeholder="Enter 5th semester SGPA"> </td>	
						<td> <input type="text" name="sgpa6" placeholder="Enter 6th semester SGPA"> </td>	
					</tr>	
				</table>
				
				<table>
					<tr>
						<th> CGPA </th>
						<td> <input type="text" name="cgpa" placeholder="Enter your CGPA"> </td> 
					</tr>
				</table>
		</div>		
		<br>

		<div id="submit">
			<input type="submit" name="submit" value="Submit">
			<input type="reset" value="Reset" name="reset">
		</div> 
	  </form>

	  <div id="footer"style="background-color:#25252D;height:50px">
			    <div>
			        <h5 style="text-align:center;margin-top:10px;color:#B2BEB5">Copyright © 2016. All Rights Reserved. National Institute of Technology, Durgapur</h5>
			    </div>
      </div>
    </div>
	</body>
</html>		