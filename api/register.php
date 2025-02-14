<?php
header("Content-Type: application/json");
include "config.php";

$data = json_decode(file_get_contents("php://input"), true);
$email = $data['email'];
$password = $data['password'];

$sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
if ($conn->query($sql) === TRUE) {
    echo json_encode(["message" => "User created"]);
} else {
    echo json_encode(["error" => "Error: " . $conn->error]);
}
?>
