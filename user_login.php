<?php
  require_once("includes/connection.php");
  require_once("includes/functions.php");
  require_once("includes/sessions.php");; 
?>

<html>
  <head>
  	<title> Student Login Page </title>
  	<link rel="stylesheet" type="text/css" href="css/login.css">
    <!-- // <script type="text/javascript" src="/javascript/login.js"></script> -->
    <script type="text/javascript" src="js/user-js.js"></script>
  <head>

<?php
  if (logged_in()) {
    redirect_to("user.php");
  }

  if (isset($_POST['submit'])) {
    $Email = $_POST['Email_Id'];
    $password = $_POST['password'];
    $hashed_password = sha1( $password );
    
    $query = "SELECT id, email FROM student_details ";
    $query .= "WHERE email = '{$Email}' ";
    $query .= "AND pwd = '{$hashed_password}' and status=1";
    $result_set = mysqli_query($conn,$query);
    global $message;
    $message = "";
    if( !$result_set ) {
    //echo("Error description: " . mysqli_error($connection));
    $message = "<h4><b>Error in connection<b></h4>";
    echo $message;
    }

   
    if (mysqli_num_rows($result_set)==1){
        $found_user = mysqli_fetch_array($result_set);
        $_SESSION['user_id'] = $found_user['id'];
        $_SESSION['Email'] = $found_user['email'];
        redirect_to("user.php");
      } else {
        $message = "<h4><b>Wrong Email or password or not accepted<b></h4>";
        
      }
    }
?>     

  <!-- <body>
      <div>
        <div id="img">  <img src = "images/back.jfif"> </img> </div> 
          <div id="navbar">
            <ul>
              <li><a href="home.php">Home</a></li>
              <li><a href="user_register.php">Register</a></li>
              <li><a href="user_login.php">Student Login</a></li>
              <li><a href="admin_login.php">Admin Login</a></li>
            </ul>
          </div>
      </div> 
      <br> <br>

    	<header style="text-align:center;">
     		 <h1> Student Login </h1>
     	</header> 	
    
      <div id="container">
       	<form action="user_login.php" method="POST" name="admin">
          <div id="login">
              <table>
                <tr> 
                  <th> Email </th>
                  <td> <input type="text" name="first_name" placeholder="Enter your Email" onfocusin="Email_Id_in()"  onfocusout="Email_Id_out()"> </td>
                </tr>
                <tr>
                  <th> Password </th>
                  <td> <input type="password" name="pass" placeholder="Enter your password"  onfocusin="pass_in()"  onfocusout="pass_out()"> </td>  
                </tr>    
              <table>
          </div>   

          <div id="submit">
            <input type="submit" name="submit" value="Submit">
            <input type="reset" value="Reset">
          </div> 
          <br>
       	</form>

        
    </div>
   </div> 
   <h2> <?php echo $message ?> </h2> 
  </body>   -->


<script type="text/javascript">
  window.history.forward();
  function noBack() { window.history.forward(); }
</script>

<head>
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Lobster+Two" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/home1.css">

</head>
<body onload="noBack();" onpageshow="if (event.persisted) noBack();" onunload="">


  <div id="header" style="text-align: center;">
    <img src="images/nit_logo.png" alt="nit_logo" style="float: left; width:100px;height:100px;opacity: 0.7">
      <h1 style="color: white">NIT DURGAPUR</h1>
      <h2>(An Institute of National Importance under Government of India, Ministry of Human Resource Development)</h2>

    </div>
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
      
  <body background="images/back.jfif">
    <form name="Student_login" onsubmit="return validate(this)" action="user_login.php" method="post">
      <h1 style="text-align:center;">STUDENT LOGIN PAGE</h1>
      <table align="center" cellpadding = "10">
          <!--- First Name -->
          <tr>
            <td>EMAIL ID:</td>
            <td><input type="text" required name="Email_Id" maxlength="50" placeholder="eg:example@gmail.com" onfocusin="email_in()" onfocusout="email_out()"/>
            </td>
            <td id="errors" style="color: red"></td>
          </tr>
          <tr>
            <td>Password :</td>
            <td><input type="password" required name="password" maxlength="50" placeholder="*******"/></td>
          </tr>
      </table>
      <h3 align="right"> <?php echo $message ?></h3>
      <div class="buttons">
        <button type="submit" name="submit">Submit</button>
        <button type="reset">Reset</button>
      </div>
      <br>
    </form>
    </div>
    <!-- <script src="${resource(dir:'js', file:'valid.js') }"></script> -->
  </body>
</html>   		