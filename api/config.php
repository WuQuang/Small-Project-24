<?php
header("Content-Type: application/json");

$host = "localhost"; #change as needed
$user = "root"; #change as needed
$password = "0.JdGRj9oyXR"; #change as needed
$database = "crud"; #change as needed

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die(json_encode(["error" => "Database connection failed: " . $conn->connect_error]));
}
?>