<?php
$server= "localhost";
$dbuser= "root";
$dbpass = "";
$dbname = "website";

$conn = mysqli_connect($server, $dbuser, $dbpass, $dbname);

if (!$conn) {
	echo "Connection failed!";
}