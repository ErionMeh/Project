<?php
// Set error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 0);
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Set headers
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

// Log incoming request
$debug = true;  // Set to false in production
if ($debug) {
    error_log("Received request method: " . $_SERVER['REQUEST_METHOD']);
}

// Handle preflight requests
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

try {
    // Only accept POST requests
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception('Only POST method is allowed');
    }

    // Get JSON input
    $jsonInput = file_get_contents('php://input');
    if ($debug) {
        error_log("Received input: " . $jsonInput);
    }

    $data = json_decode($jsonInput, true);

    if (json_last_error() !== JSON_ERROR_NONE) {
        throw new Exception('Invalid JSON data provided: ' . json_last_error_msg());
    }

    // Validate required fields
    $requiredFields = [
        'paymentMethod',
        'cardNumber',
        'cvv',
        'expiryMonth',
        'expiryYear',
        'email',
        'firstName',
        'lastName',
        'address1',
        'city',
        'state',
        'zipCode',
        'terms',
        'privacy'
    ];

    foreach ($requiredFields as $field) {
        if (!isset($data[$field]) || ($data[$field] === '' && $field !== 'address2')) {
            throw new Exception("Missing required field: $field");
        }
    }

    // Validate terms and privacy acceptance
    if (!$data['terms'] || !$data['privacy']) {
        throw new Exception("You must accept the Terms and Privacy Policy");
    }

    // Basic validation
    if (strlen(preg_replace('/\D/', '', $data['cardNumber'])) !== 16) {
        throw new Exception('Invalid card number length');
    }

    if (strlen($data['cvv']) < 3 || strlen($data['cvv']) > 4) {
        throw new Exception('Invalid CVV');
    }

    if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        throw new Exception('Invalid email format');
    }

    // Validate expiry date
    $currentYear = (int)date('Y');
    $currentMonth = (int)date('m');
    
    if ((int)$data['expiryYear'] < $currentYear || 
        ((int)$data['expiryYear'] == $currentYear && (int)$data['expiryMonth'] < $currentMonth)) {
        throw new Exception('Card has expired');
    }

    // Success response
    $response = [
        'success' => true,
        'message' => 'Payment processed successfully',
        'transactionId' => uniqid('TRANS_'),
        'timestamp' => date('Y-m-d H:i:s')
    ];

    if ($debug) {
        error_log("Sending response: " . json_encode($response));
    }

    echo json_encode($response);
    exit;

} catch (Exception $e) {
    $errorResponse = [
        'success' => false,
        'message' => $e->getMessage()
    ];

    if ($debug) {
        error_log("Error occurred: " . $e->getMessage());
    }

    http_response_code(400);
    echo json_encode($errorResponse);
    exit;
}
?>