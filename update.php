<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'lovelanguage.mysql.database.azure.com', 'maxthanit@lovelanguage', '20082544Max', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$id = $_GET['id'];
$name = $_POST['name'];
$comment = $_POST['comment'];
$link = $_POST['link'];


$sql = "INSERT INTO guestbook (Name , Comment , Link) VALUES ('$name', '$comment', '$link')";
$del = "DELETE FROM guestbook WHERE id = $id";

if (mysqli_query($conn, $sql)), (mysqli_query($conn, $del)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
