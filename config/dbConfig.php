<?php
$hn = "localhost";
$un = "mm_admin"; // your database user name
$pw = "r(AsEaSMEBXtjTi4"; // your database user password
$db = "mad_mark"; // this will be your database name


// Create database connection
$conn = new mysqli($hn, $un, $pw, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
else {
    echo 'connection successful';
   }
?>