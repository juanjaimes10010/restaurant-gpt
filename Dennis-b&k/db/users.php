<?php
// Establish a connection to the MySQL database
require_once "credentials.php";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Prepare the SQL statement with placeholders for values
$stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");

// Bind the parameters to the statement
$name = "John Smith";
$email = "john@example.com";
$password = "mypassword123";
$stmt->bind_param("sss", $name, $email, $password);

// Execute the statement
if ($stmt->execute() === TRUE) {
  echo "User created successfully";
} else {
  echo "Error creating user: " . $conn->error;
}

// Close the statement and database connection
$stmt->close();
$conn->close();
