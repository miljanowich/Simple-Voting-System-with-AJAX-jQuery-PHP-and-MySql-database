<?php
$servername = "localhost";
$username = "yourusername";
$password = "yourpassword";
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "create database demo";
if ($conn->query($sql) === TRUE) {
    echo "Database demo created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
$conn->close();
?>
