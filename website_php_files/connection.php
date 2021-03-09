

<?php
$host = "localhost";
$username = "root";
$password = "usbw";
$database = "test";

$mysqli = new mysqli($host, $username, $password, $database);

if($mysqli->connect_error)
{
	echo "Failed to connect to mySQL: (" . $msqli->connect_errno . ") " . $mysqi->connect_error;
}

?>