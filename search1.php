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
    $id=$_POST['id'];
$propertytype=$_POST['propertytype'];
$cityid=$_POST['cityid'];
$bedrooms=$_POST['bedrooms'];
$bathcount=$_POST['bathcount'];
$minlistprice=$_POST['minlistprice'];
$maxlistprice=$_POST['maxlistprice'];
$purpose=$_POST['purpose'];
$image=$_POST['image'];


$sql="INSERT INTO property VALUES('".$name."','".$email."','".$phone."','".$address."','".$city."','".$minlistprice."','".$maxlistprice."','".$purpose."','".$image."')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
     echo "Unable to create record";
}
/*if ($sql->execute()) {
    echo "New record created successfully";
  } else {
    echo "Unable to create record";
  }*/

header("refresh:1; url=page3.html");
$conn->close();
}
?>	 