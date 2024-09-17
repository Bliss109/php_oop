<?php
//creating constants
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_oop";

try {
    // Create a new PDO instance and establish the database connection
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // Set PDO error mode to exception for better error handling
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected successfully!";
} catch (PDOException $e) {
    // Catch and display any connection error
    echo "Connection failed: " . $e->getMessage();
}

// Optional: Close the connection (PDO automatically does this when the script ends)
$conn = null;
?>
