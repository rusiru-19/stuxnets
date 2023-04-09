<?php

$sname= "localhost";
$unmae= "root";
$password = "rusiru@0819";

$db_name = "login";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}