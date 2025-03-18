<?php
$host = "sql102.infinityfree.com"; // Usually "localhost"
$user = "if0_38533755";
$password = "cOTjaoc0452N";
$dbname = "if0_38533755_lunova_db";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>
