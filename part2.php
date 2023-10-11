<?php
//Give the name of the program here
//Rebecca mazilu 11/10/2023
//This program creates a database for the client 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tennisclub";
$port = 3307;

//set the default timezone - this is necessary since MySQL 8. This is an effort to store all dates and times together with their timezones. 
//This is particularly important where there is a timestamp indicating when something happened.
date_default_timezone_set('Europe/Dublin');

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname, $port);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$firstname = $_POST['firstName'];
$surname = $_POST['surName'];

$sql = "INSERT INTO member (firstname, surname) VALUES ('$firstname', '$surname')";

mysqli_query($conn, $sql);

mysqli_close($conn);
?>