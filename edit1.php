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
$id = $_GET['ID']; // get id through query string

$del = "DELETE FROM guestbook WHERE id = $id"; // delete query

if(mysqli_query($conn, $del))
{
    echo "Go Edit";
    <td><?php echo '<a href="form.html?id='.$Result['ID'].'" class="button">Edit</a>'?></td>
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>
