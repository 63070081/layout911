<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'lovelanguage.mysql.database.azure.com', 'maxthanit@lovelanguage', '20082544Max', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$id = $_GET['ID];
$res = mysqli_query($conn, 'SELECT * FROM guestbook WHERE id = $id ');
$Result = mysqli_fetch_array($res)
<!DOCTYPE html>
<html>
<head>
	<title>Comment Form</title>
</head>
<body>
  <form action = "insert_new.php" method = "post" id="CommentForm" >
    Name:<br>
    <input type="text" name = "name" id="idName" value="<?php echo $Result['Name'];?>"> <br>
    Comment:<br>
    <textarea rows="10" cols="20" name = "comment" id="idComment" value="<?php echo $Result['Comment'];?>"></textarea><br>  
    Link:<br>
    <input type="text" name = "link" id="idLink" value="<?php echo $Result['Link'];?>"> <br><br>
    <input type="submit" id="commentBtn">
  </form> 
</body>
</html>
}
?>
