<?php 
$localhost = "localhost"; #localhost
$dbusername = "root"; #username of phpmyadmin
$dbpassword = "";  #password of phpmyadmin
$dbname = "facultyadvisor";  #database name
#connection string
$conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);
 
if (isset($_POST["submit"]))
 {
     
    #file name with a random number so that similar dont get replaced
     $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
 
    #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];
   
     #upload directory path
$uploads_dir = 'student/images';
    #TO move the uploaded file to specific location
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);
$usn= $_POST['usn'];
$sslc= $_POST['sslc'];
$dp= $_POST['puc'];
$sem= $_POST['sem'];
$sgpa= $_POST['sgpa'];
$bck = $_POST['bck'];

 
    #sql query to insert into database
    $sql="INSERT INTO `acedemics`(`sslc`, `puc`, `sem`, `sgpa`, `bck`, `file`, `usn`) VALUES ('$usn','$dp','$sem','$sgpa','$bck','$pname','$usn')";
 
    if(mysqli_query($conn,$sql)){
 
        header("Location:studentprofile.html");
    }
    else{
        echo "Error";
    }
}
 
 
?>