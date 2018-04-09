<?php
$dbservername="localhost";
$dbusername="root";
$dbpassword="zorinos";
#create a database in mysql first then execute this file
$dbname="my_app";
$conn=mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname) or die("ERROR, couldn't connect." . mysqli_error($conn));
?>