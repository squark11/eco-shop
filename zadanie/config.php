<?php
$host = "localhost";
$username = "root";
$password = "";
$basename = "kurs";

$db = new mysqli($host, $username, $password, $basename);

if ($db->connect_error) {
	die("Blad polaczenia " . $db->connect_error);
}
?>