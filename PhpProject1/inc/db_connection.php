<?php
$dbhost = 'localhost';
$dbusername = 'root';
$dbpasswd = '';
$db = 'web01';
// Create connection
$conn = mysqli_connect($dbhost, $dbusername, $dbpasswd, $db);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>