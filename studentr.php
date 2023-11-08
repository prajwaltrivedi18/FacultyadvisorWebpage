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
$usn = $_POST['usn'];
$pwd = $_POST['pwd'];
$cpwd = $_POST['cpwd'];
if($pwd != $cpwd){
header("Location: {$_SERVER['HTTP_REFERER']}");  // Redirect to the previous page
exit();

}else{
// SQL query to insert data into the table
$sql = "INSERT INTO studentreg (usn, pwd, cpwd) VALUES ('$usn', '$pwd', '$cpwd')";

if ($conn->query($sql) === TRUE) {
   
    header("Location:student.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

// Close the connection
?>