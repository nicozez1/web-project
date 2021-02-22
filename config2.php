<?php


$initials=parse_ini_file(".connect.ini");
$database = $initials["dbname_tuote"];
$username = $initials["username"];
$password = $initials["password"];
$server = $initials["servername"];

$con = mysqli_connect($server, $username, $password, $database);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}