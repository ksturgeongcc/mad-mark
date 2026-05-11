<?php
$hn = "localhost";
$un = "karen"; // your database user name
$pw = "password"; // your database user password
$db = "mad_marks"; // this will be your database name


// Create database connection
$conn = new mysqli($hn, $un, $pw, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
// else {
//     echo 'connection successful';
//    }
?>