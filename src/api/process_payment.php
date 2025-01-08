<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

require_once __DIR__ . '/../config/config.php';

function encryptData($data, $key = 'your-secret-key') {
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
    $encrypted = openssl_encrypt($data, 'aes-256-cbc', $key, 0, $iv);
    if ($encrypted === false) {
        throw new Exception("Data encryption failed");
    }
    return base64_encode($iv . $encrypted);
}

function validateInput($data) {
    $errors = [];
    
    if (!isset($data->cardNumber) || !preg_match('/^\d{16}$/', $data->cardNumber)) {
        $errors[] = "Invalid card number";
    }
    
    if (!isset($data->cvv) || !preg_match('/^\d{3,4}$/', $data->cvv)) {
        $errors[] = "Invalid CVV";
    }
    
    if (!isset($data->email) || !filter_var($data->email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email";
    }
    
    if (!isset($data->firstName) || strlen($data->firstName) < 2) {
        $errors[] = "First name is required";
    }
    
    if (!isset($data->lastName) || strlen($data->lastName) < 2) {
        $errors[] = "Last name is required";
    }
    
    return $errors;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $rawInput = file_get_contents('php://input');
        error_log('Raw input: ' . $rawInput); // Debug log
        
        $data = json_decode($rawInput);
        
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new Exception('Invalid JSON data: ' . json_last_error_msg());
        }
        
        $errors = validateInput($data);
        if (!empty($errors)) {
            throw new Exception(implode(", ", $errors));
        }
        
        $conn = getDBConnection();
        
        $encryptionKey = ' 6020c6d2b43620a0661430500392d2d72d77affa5519ff1106a8b7742ed12233';
        $encryptedCard = encryptData($data->cardNumber, $encryptionKey);
        $encryptedCVV = encryptData($data->cvv, $encryptionKey);
        
        $stmt = $conn->prepare("INSERT INTO payments (
            payment_method, card_number, cvv, expiry_month, expiry_year,
            email, first_name, last_name, address1, address2,
            city, state, zip_code, save_info, newsletter, promotions
        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        
        if (!$stmt) {
            throw new Exception("Prepare failed: " . $conn->error);
        }
        
        $saveInfo = isset($data->saveInfo) ? ($data->saveInfo ? 1 : 0) : 0;
        $newsletter = isset($data->newsletter) ? ($data->newsletter ? 1 : 0) : 0;
        $promotions = isset($data->promotions) ? ($data->promotions ? 1 : 0) : 0;
        
        $stmt->bind_param(
            "ssssssssssssssss",
            $data->paymentMethod,
            $encryptedCard,
            $encryptedCVV,
            $data->expiryMonth,
            $data->expiryYear,
            $data->email,
            $data->firstName,
            $data->lastName,
            $data->address1,
            $data->address2,
            $data->city,
            $data->state,
            $data->zipCode,
            $saveInfo,
            $newsletter,
            $promotions
        );
        
        // Execute statement
        if (!$stmt->execute()) {
            throw new Exception("Execute failed: " . $stmt->error);
        }
        
        // Close statement and connection
        $stmt->close();
        $conn->close();
        
        // Success response
        echo json_encode([
            'success' => true,
            'message' => "Payment processed successfully"
        ]);
        
    } catch (Exception $e) {
        http_response_code(400);
        echo json_encode([
            'success' => false,
            'message' => $e->getMessage()
        ]);
    }
} else {
    http_response_code(405);
    echo json_encode([
        'success' => false,
        'message' => "Method not allowed"
    ]);
}
?>
