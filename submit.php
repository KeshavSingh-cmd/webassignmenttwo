<?php

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];

$conn = new mysqli("localhost", "root", "", "registration_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO users (fullname, email, password, phone) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $fullname, $email, $password, $phone);

if ($stmt->execute()) {
    echo "<h2>Registration Successful!</h2>";
    echo "<a href='index.html'>Go Back</a>";
} else {
    echo "Error: " . $conn->error;
}

$stmt->close();
$conn->close();

?>
