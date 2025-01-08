<?php

require_once __DIR__ . '/../config/config.php';

class CrudOperations {
    private $conn;
    
    public function __construct() {
        $this->conn = getDBConnection();
    }
    
    public function getPaymentById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM payments WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $payment = $result->fetch_assoc();
        
        if ($payment) {
            $payment['card_number'] = decryptData($payment['card_number']);
            $payment['cvv'] = decryptData($payment['cvv']);
        }
        
        $stmt->close();
        return $payment;
    }
    
    public function getAllPayments() {
        $result = $this->conn->query("SELECT id, payment_method, email, first_name, last_name, created_at FROM payments");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    
    public function updatePayment($id, $data) {
        $sql = "UPDATE payments SET 
                email = ?, first_name = ?, last_name = ?,
                address1 = ?, address2 = ?, city = ?,
                state = ?, zip_code = ?, newsletter = ?,
                promotions = ?, updated_at = CURRENT_TIMESTAMP
                WHERE id = ?";
                
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssssssssssi",
            $data['email'],
            $data['firstName'],
            $data['lastName'],
            $data['address1'],
            $data['address2'],
            $data['city'],
            $data['state'],
            $data['zipCode'],
            $data['newsletter'],
            $data['promotions'],
            $id
        );
        
        $success = $stmt->execute();
        $stmt->close();
        return $success;
    }
    
    public function deletePayment($id) {
        $stmt = $this->conn->prepare("DELETE FROM payments WHERE id = ?");
        $stmt->bind_param("i", $id);
        $success = $stmt->execute();
        $stmt->close();
        return $success;
    }
    
    public function getUserPreferences($email) {
        $stmt = $this->conn->prepare("SELECT * FROM users_preferences WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $preferences = $result->fetch_assoc();
        $stmt->close();
        return $preferences;
    }
    
    public function __destruct() {
        $this->conn->close();
    }
}
?>
