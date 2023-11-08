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
$branch= $_POST['branch'];
$sem= $_POST['sem'];
$sdate= $_POST['sdate'];
$edate = $_POST['edate'];
$sub=$_POST['sub'];
$body=$_body['body'];




// SQL query to insert data into the table
 
 $sql="INSERT INTO `leave`(`name`, `usn`, `branch`, `sem`, `sdate`, `edate`, `sub`, `body`) 
 VALUES ('$name','$usn','$branch','$sem','$sdate','$edate','$sub','$body')";
if ($conn->query($sql) === TRUE) {
   
   header("Location:studentprofile.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


// Close the connection
?>