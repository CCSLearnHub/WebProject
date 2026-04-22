<?php
// Use environment variables for Render, fallback to localhost for local development
$host = getenv('DB_HOST') ?: "localhost";
$user = getenv('DB_USER') ?: "root";
$pass = getenv('DB_PASS') ?: "";
$dbname = getenv('DB_NAME') ?: "ccs_hub_db";

// Optional: Add port if your cloud database requires it
$port = getenv('DB_PORT') ?: 3306;

// Connect using mysqli
$conn = mysqli_connect($host, $user, $pass, $dbname, $port);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
