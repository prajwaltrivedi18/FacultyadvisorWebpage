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
$fid = $_POST['fid'];
$pwd = $_POST['pwd'];
$cpwd = $_POST['cpwd'];



if($pwd != $cpwd){
header("Location: {$_SERVER['HTTP_REFERER']}");  // Redirect to the previous page
exit();

}else{
// SQL query to insert data into the table
$sql = "INSERT INTO facultyreg (fid, pwd, cpwd) VALUES ('$fid', '$pwd', '$cpwd')";

if ($conn->query($sql) === TRUE) {
   
    header("Location:facutly.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}


?>