<?php
//start a new session
session_start();

$page_title = "Add Video";

require_once 'includes/header.php';
require_once 'includes/database.php';

$title = $_GET['clip_name'];
$path =  $_GET['clip_path'];

//define sql statement
$query_str = "INSERT INTO clip VALUES (NULL, '$title', '$path')";

//execute the query
$result = @$conn->query($query_str);

//handle error
if(!$result) {
  $errno = $conn->errno;
  $errmsg = $conn->error;
  echo "Insertion failed with: ($errno) $errmsg<br/>\n";
  $conn->close();
  exit;
}


header("Location: video.php");
