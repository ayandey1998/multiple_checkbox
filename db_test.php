<?php
$host = "localhost";
$userName = "root";
$password = "";
$dbName = "js_form";

$conn=mysqli_connect($host, $userName, $password, $dbName);
if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}
?>