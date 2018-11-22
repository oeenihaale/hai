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
if(isset($_POST['submit']))  
{
    $name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$purpose=$_POST['purpose'];
$id=$_POST['id'];



$sql="INSERT INTO buy VALUES('".$name."','".$email."','".$phone."','".$purpose."','".$id."')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully ,
    THANK YOU 
    For further procedure contact to agents";
} else {
     echo "Unable to create record";
}
/*if ($sql->execute()) {
    echo "New record created successfully";
  } else {
    echo "Unable to create record";
  }*/

header("refresh:2; url=tobuy.html");
$conn->close();
}
?>	 