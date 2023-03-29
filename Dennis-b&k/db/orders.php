<?php
// Establish a connection to the MySQL database
require_once "credentials.php";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Define the SQL query to create the 'orders' table
$sql = "CREATE TABLE orders (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
customer_name VARCHAR(30) NOT NULL,
order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
total_amount DECIMAL(10,2) NOT NULL
)";

// Execute the SQL query to create the 'orders' table
if ($conn->query($sql) === TRUE) {
  echo "Table orders created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

// Close the database connection
$conn->close();
