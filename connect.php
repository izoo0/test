<?php 
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "dtest";
// db connection
$connect = new mysqli($host, $user, $pass, $dbname);
if($connect->connect_error) {
    die("Connection Failed : " . $connect->connect_error);
  } else {
    // echo "Successfully connected";
  }  
  
  ?>