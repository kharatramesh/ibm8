<?php
$servername = "172.21.2.45";
$username = "root";
$password = "123";
$dbname = "priar";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, rollnumber FROM priarworld";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Name of Candidates: " . $row["firstname"]. " " . $row["rollnumber"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
