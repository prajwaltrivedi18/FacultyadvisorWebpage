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



$usnn = $_POST['usn'];
$password = $_POST['pwd'];

$sql = "SELECT * FROM studentreg WHERE usn='$usnn' AND pwd='$password'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  header("Location:studentprofile.html");
} else {
  echo "Sign-in failed. Invalid username or password.";
}

// Close the connection
?>