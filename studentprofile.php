<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "facultyadvisor";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the form
$name = $_POST['name'];
$usn= $_POST['usn'];
$year=$_POST['year'];
$phno= $_POST['phno'];
$email= $_POST['email'];
$dob= $_POST['dob'];
$pphno=$_POST['pphno'];
$pemail = $_POST['pemail'];
$fname = $_POST['fname'];




// SQL query to insert data into the table
 
$sql="INSERT INTO `studprofile`(`name`, `usn`, `year`, `phno`, `email`, `dob`, `pphno`, `pemail`, `facultyname`) 
VALUES ('$name','$usn','$year','$phno','$email','$dob','$pphno','$pemail','$fname')";
if ($conn->query($sql) === TRUE) {
   
   
    header("Location:studentprofile.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


// Close the connection
?>