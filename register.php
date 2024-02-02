<?php
// Get form data
$username = $_POST["username"];
$password = $_POST["password"];
$phone = $_POST["phone"];

// Validate form data
if (empty($username) || empty($password) || empty($phone)) {
	echo "Error: All fields are required.";
	exit();
}

// Connect to database
$host = "localhost";
$user = "username";
$password = "password";
$database = "database";
$conn = mysqli_connect($host, $user, $password, $database);
if (!$conn) {
	echo "Error: Connection failed.";
	exit();
}

// Insert user data into database
$sql = "INSERT INTO users (username, password, phone) VALUES ('$username', '$password', '$phone')";
if (mysqli_query($conn, $sql)) {
	echo "Registration successful.";
} else {
	echo "Error: Registration failed.";
}

// Close database connection
mysqli_close($conn);
?>
