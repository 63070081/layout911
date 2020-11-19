<?php

$db = mysqli_connect($conn, 'lovelanguage.mysql.database.azure.com', 'maxthanit@lovelanguage', '20082544Max', 'itflab', 3306);

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>
