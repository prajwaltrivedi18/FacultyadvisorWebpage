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
$fid= $_POST['fid'];
$phno= $_POST['phno'];
$email= $_POST['email'];
$dob= $_POST['dob'];
$des = $_POST['des'];




// SQL query to insert data into the table
 
 $sql="INSERT INTO `facultyprofile`(`name`, `fid`, `phno`, `email`, `dob`, `des`)
  VALUES ('$name','$fid','$phno','$email','$dob','$des')";
if ($conn->query($sql) === TRUE) {
   
   echo"succes";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


// Close the connection
?>