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
$id = $_GET['id']; // get id through query string

$del = mysqli_query($db,"delete from guestbook where id = '$id'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    header("location:all_records.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>
