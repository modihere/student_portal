<?php 
	require_once("includes/functions.php");
	require_once("includes/sessions.php");
	require_once("includes/connection.php")
?>

<?php
	// print_r($_SESSION);
	if(!confirm_logged_in()) redirect_to("admin_login.php");
?>
<?php
	$k=$_SESSION['Email'];
	$reg=$_GET['regno'];
	$query = "SELECT * FROM student_details WHERE regn_no='$reg'";
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
						<td> <i> Gender: </i></td><td><?php 	echo $row['gender']; ?></td>
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
						<td> <i> Hobbies: </i></td><td><?php 	echo $row['hobby'].','.$row['other_hobby']; ?></td>
					</tr>
					<tr>
						<th>CLASS X</th>
					</tr>
					<tr>
						<td>Board</td><td><?php 	echo $row['xb']; ?></td>
					</tr>
					<tr>
						<td>Percentage</td><td><?php 	echo $row['xp']; ?>
						</td>
					</tr>
					<tr>
						<td>Year of Passing</td><td><?php 	echo $row['xyp']; ?></td>
					</tr>
					<tr>
						<th>CLASS XII</th>
					</tr>
					<tr>
						<td>Board</td><td><?php 	echo $row['xiib']; ?></td>
					</tr>
					<tr>
						<td>Percentage</td><td><?php 	echo $row['xiip']; ?>
						</td>
					</tr>
					<tr>
						<td>Year of Passing</td><td><?php 	echo $row['xiiyp']; ?></td>
					</tr>
					<tr>
						<th>UNDERGRADUATION</th>
					</tr>
					<tr>
						<td>Board</td><td><?php 	echo $row['ugb']; ?></td>
					</tr>
					<tr>
						<td>Percentage</td><td><?php 	echo $row['ugbp']; ?>
						</td>
					</tr>
					<tr>
						<td>Year of Passing</td><td><?php 	echo $row['ugyp']; ?></td>
					</tr>
			
			</table>
			<button onclick="myFunction()">Print this page</button>

<script>
function myFunction() {
    window.print();
}
</script>