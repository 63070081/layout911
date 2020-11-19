<?php
$servername = "lovelanguage.mysql.database.azure.com";
$username = "maxthanit@lovelanguage";
$password = "20082544Max";
$dbname = "itflab";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM guestbook WHERE id=4";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
