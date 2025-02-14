<?php
session_start(); // Sessions for maintaining login
header("Content-Type: application/json");
include "config.php";

$data = json_decode(file_get_contents("php://input"), true);
$email = $data['email'];
$password = $data['password'];

// Run query to find user by email
$result = $conn->query("SELECT * FROM users WHERE email='$email'");

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc(); // Fetch user data

    // Compare plain text passwords directly
    if ($password === $user['password']) {
        echo json_encode(["token" => base64_encode($email)]);
    } else {
        echo json_encode(["error" => "Invalid password"]);
    }
} else {
    echo json_encode(["error" => "User not found"]);
}

$conn->close();
?>
