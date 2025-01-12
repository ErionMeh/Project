<?php
session_start();

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database configuration
$host = 'localhost';      // Your database host
$dbname = 'payment_system'; // Your database name
$username = 'root';       // Your database username
$password = '';          // Your database password

try {
    // Create PDO connection
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Set PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Uncomment the line below for connection testing
    // echo "Database connected successfully";

} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    error_log("Database connection failed: " . $e->getMessage());
    die();
}
?>