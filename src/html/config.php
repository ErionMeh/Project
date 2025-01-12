<?php
session_start();


error_reporting(E_ALL);
ini_set('display_errors', 1);


$host = 'localhost';     
$dbname = 'payment_system';
$username = 'root';      
$password = '';         

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    

} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    error_log("Database connection failed: " . $e->getMessage());
    die();
}
?>