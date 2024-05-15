<?php
// Database connection parameters
$servername = "34.236.157.68:3306";
$username = "root";
$password = "";
$dbname = "site";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetching values from the login form
$name = $_POST['name'];
$surname = $_POST['surname'];
$password = $_POST['password'];

// Query to check if user exists in the database
$sql = "SELECT * FROM users WHERE name='$name' AND surname='$surname' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Login successful!";
} else {
    echo "Invalid login credentials!";
}

$conn->close();
?>
