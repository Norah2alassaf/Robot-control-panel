<?php
$servername="localhost";
$username="root";
$password="";
$dbname="robot_control_panle";

 

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

  $sql="select diractions from control_panle_data order by diractions DESC LIMIT 1";
  $result = $conn->query($sql);


if ($result->num_rows > 0) {
 
  while($row = $result->fetch_assoc()) {
    echo  $row["diractions"];
  }
} else {
  echo "0 results";
}
$conn->close();


?> 