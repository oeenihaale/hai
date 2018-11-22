<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "realestate";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($_POST['submit'])){
$username=$_POST['username'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$passr=$_POST['passr'];



$sql="INSERT INTO client VALUES('".$username."','".$email."','".$pass."','".$passr."')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

header("refresh:1; url=log.html");
$conn->close();
}
?>
