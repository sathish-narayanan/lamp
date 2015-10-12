<?php
$dbIp="127.0.0.1";
$dbUser="root";
$dbPassword="aspire@123";
$dbName="sathish";
$link = mysqli_connect("$dbIp","$dbUser","$dbPassword","$dbName" )
or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";
if (!$link) {

	echo mysqli_connect_errno() . PHP_EOL;
	echo mysqli_connect_error() . PHP_EOL;
	exit;
}

?>