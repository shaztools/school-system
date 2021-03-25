<?php
//set up variables to store your server details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "schoolsystem"

//create an execute connection based off creds
$conn = new mysqli($servername,$username,$password,$dbname);

//connection
//if ($conn->connect_error) {

 	# code...
 	//echo "connection failed <br>" - $conn->connect_error;
 //} else {
 	//echo "connection successfull <br>";
//}

 //create a db using sql
 //$sql = "CREATE DATABASE university";
 //checking to see if db has been created
 //if ($conn->query($sql) ===true) {
 	# code...
 	//echo "database created <br>";
 //} else { 
 	//echo "database not created  <br>" . $conn->error;
 //}
 //create a table
 $sql = "CREATE TABLE students (
 pupilname VARCHAR(250) NOT NULL,
 email VARCHAR(250) NULL,
 phoneNumber VARCHAR(250) NOT NULL,
 gender VARCHAR(250),
 age INT(11),
 reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
 //checking if the table has been created
 if ($conn->query($sql) ===true) {
# code...
 	echo "table created <br>";
} else { 
 	echo "table not created  <br>" . $conn->error;
 }
 //insert records to db
 //$sql = "INSERT INTO pupils (studentsname,email,phoneNumber,gender,age) VALUES ('Sharon Tulienge','stulienge@gmail.com','0717584032','female','28)";
 


 //variables to store users input
 //$name = $age =$email = $phone = $gender = '';

//check if submit is clicked
 //if (isset($_post['save'])) {

 //$name = $_post['studentname'];
 //$email = $_post['studentemail'];
 //$phone = $_post['phone'];
 //$age = $_post['studentage'];
 //$gender = $_post['gender'];
 
 //

 //$sql = "INSERT INTO pupils (studentname,email,phoneNumber,gender,age) VALUES ('$name', '$email', '$phone', '$gender', '$age')";
//if ($conn->query($sql) ===true) {
 	# code...
 	//echo "table created <br>";
 	//header('location: index.php'); //redirect after s
//} else { 
 	//echo "table not created  <br>" . $conn->error;
 //}

 //close


 $conn->close();
?>