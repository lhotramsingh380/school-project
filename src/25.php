<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "computer_science_project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result -> num_rows > 0) {
  echo "<table border='1'>";
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    foreach($row as $key => $value) {
      if (strpos($key, "email") !== false) {
        echo "<td>" . $value . "</td>";
      } else {
        echo "<td>$value</td>";
      }
    }
    echo "</tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>
