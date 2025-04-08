<?php
$host = "localhost";
$dbname = "cswebvpn_db";
$user = "csadmin";
$pass = "yourpassword";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>
