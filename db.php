<?php
$servername = "localhost";
$username = "root";
$password =  "";
$dbname = "map";

$conn = new mysqli($serverneme,$username,$password,$dbname);
if ($conn->connect_error) {
	die("Connection Failed!".$conn->connect_error);
}else{
	//echo "Connected"
}
?>