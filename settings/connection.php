<?php
// define database parameters
$user = "root";
$hostname = "localhost";
$password = "";
$database = "GRP13_2025";
$port = 3306;

// create database connection 
$conn = new mysqli($hostname, $user, $password, $database, $port);

// check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

/* echo $conn->host_info . "<br>"; */
/* echo "Database connected successfully <br>"; */
