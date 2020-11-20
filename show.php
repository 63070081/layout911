<html>
<head>
<title>ITF Lab</title>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'lovelanguage.mysql.database.azure.com', 'maxthanit@lovelanguage', '20082544Max', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<table width="600" border="1">
<table class="table table-dark table-hover">
  <tr>
    <th width="100"> <div align="center">Name</div></th>
    <th width="350"> <div align="center">Comment </div></th>
    <th width="150"> <div align="center">Link </div></th>
	<th width="150"> <div align="center">Action</div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['Name'];?></div></td>
    <td><?php echo $Result['Comment'];?></td>
    <td><?php echo $Result['Link'];?></td>
    <td><?php echo '<a href="formnew.html?id='.$Result['ID'].'" class="button">Edit</a>'?></td>
    <td><?php echo '<a href="delete.php?id='.$Result['ID'].'" class="button">Delete</a>'?></td>
  </div>
  </tr>
<?php
}
?>
</table>
</table>
<tr>
<td><a href="form.html" class="button">Add</a></td>
</tr>
<?php
mysqli_close($conn);
?>
</body>
</html>
