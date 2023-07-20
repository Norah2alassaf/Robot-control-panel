<?php
$data = $_POST["dir"];

$servername="localhost";
$username="root";
$password="";
$dbname="robot_control_panle";

 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

  $sql="INSERT INTO control_panle_data( id, diractions) VALUES( '', '$data')";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>
