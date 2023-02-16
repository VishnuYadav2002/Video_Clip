<?php

$host='localhost';
$user='root';
$password='';
$database='Videos';
$tblUsers='users';
$tblClip='clip';


$conn = new mysqli($host, $user, $password, $database);
if($conn->connect_error){
	die("connection failed");
}	



?>