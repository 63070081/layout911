<html>
<head>
<title>ThaiCreate.Com PHP & SQL Server (sqlsrv)</title>
</head>
<body>
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	$serverName = "localhost";
	$userName = "sa";
	$userPassword = '';
	$dbName = "mydatabase";

	$connectionInfo = array("Database"=>$dbName, "UID"=>$userName, "PWD"=>$userPassword, "MultipleActiveResultSets"=>true);

	$conn = sqlsrv_connect( $serverName, $connectionInfo);

	if( $conn === false ) {
		die( print_r( sqlsrv_errors(), true));
	}

	$sql = "DELETE FROM customer
				WHERE CustomerID = ? ";
	$params = array($_GET["CustomerID"]);

	$stmt = sqlsrv_query( $conn, $sql, $params);
	if( $stmt === false ) {
		 die( print_r( sqlsrv_errors(), true));
	}
	else
	{
		echo "Record delete successfully";
	}

	sqlsrv_close($conn);
?>
</body>
</html>
