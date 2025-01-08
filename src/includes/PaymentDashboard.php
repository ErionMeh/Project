<?php
require_once __DIR__ . '/../config/config.php';
require_once 'crud_operations.php';

class PaymentDashboard {
    private $crudOperations; // Kjo do të zëvendësojë PaymentCRUD
    
    public function __construct() {
        $this->crudOperations = new CrudOperations(); // Krijo instancë të CrudOperations
    }
    
    public function getPaymentStatistics() {
        $conn = getDBConnection();
        $stats = array();
        
        // Total number of payments
        $result = $conn->query("SELECT COUNT(*) as total FROM payments");
        $stats['total_payments'] = $result->fetch_assoc()['total'];
        
        // Payments by payment method
        $result = $conn->query("SELECT payment_method, COUNT(*) as count 
                              FROM payments 
                              GROUP BY payment_method");
        $stats['payment_methods'] = $result->fetch_all(MYSQLI_ASSOC);
        
        // Payments in last 24 hours
        $result = $conn->query("SELECT COUNT(*) as recent 
                              FROM payments 
                              WHERE created_at >= DATE_SUB(NOW(), INTERVAL 24 HOUR)");
        $stats['recent_payments'] = $result->fetch_assoc()['recent'];
        
        // Newsletter subscribers
        $result = $conn->query("SELECT COUNT(*) as subscribers 
                              FROM payments 
                              WHERE newsletter = 'yes'");
        $stats['newsletter_subscribers'] = $result->fetch_assoc()['subscribers'];
        
        // Payments by state
        $result = $conn->query("SELECT state, COUNT(*) as count 
                              FROM payments 
                              GROUP BY state 
                              ORDER BY count DESC 
                              LIMIT 5");
        $stats['top_states'] = $result->fetch_all(MYSQLI_ASSOC);
        
        // Monthly payment trends
        $result = $conn->query("SELECT 
                                DATE_FORMAT(created_at, '%Y-%m') as month,
                                COUNT(*) as count
                              FROM payments
                              GROUP BY DATE_FORMAT(created_at, '%Y-%m')
                              ORDER BY month DESC
                              LIMIT 6");
        $stats['monthly_trends'] = $result->fetch_all(MYSQLI_ASSOC);
        
        $conn->close();
        return $stats;
    }
    
    public function renderDashboard() {
        $stats = $this->getPaymentStatistics();
        
        // Gjenerimi i HTML për dashboard-in
        $html = '<div class="dashboard">';
        
        // Total payments card
        $html .= '<div class="stat-card">';
        $html .= '<h3>Total Payments</h3>';
        $html .= '<p class="stat-number">' . number_format($stats['total_payments']) . '</p>';
        $html .= '</div>';
        
        // Recent payments card
        $html .= '<div class="stat-card">';
        $html .= '<h3>Last 24 Hours</h3>';
        $html .= '<p class="stat-number">' . number_format($stats['recent_payments']) . '</p>';
        $html .= '</div>';
        
        // Newsletter subscribers card
        $html .= '<div class="stat-card">';
        $html .= '<h3>Newsletter Subscribers</h3>';
        $html .= '<p class="stat-number">' . number_format($stats['newsletter_subscribers']) . '</p>';
        $html .= '</div>';
        
        // Payment methods breakdown
        $html .= '<div class="stat-card wide">';
        $html .= '<h3>Payment Methods</h3>';
        $html .= '<ul>';
        foreach ($stats['payment_methods'] as $method) {
            $html .= '<li>' . htmlspecialchars($method['payment_method']) . ': ' . 
                    number_format($method['count']) . '</li>';
        }
        $html .= '</ul>';
        $html .= '</div>';
        
        // Top states
        $html .= '<div class="stat-card wide">';
        $html .= '<h3>Top States</h3>';
        $html .= '<ul>';
        foreach ($stats['top_states'] as $state) {
            $html .= '<li>' . htmlspecialchars($state['state']) . ': ' . 
                    number_format($state['count']) . '</li>';
        }
        $html .= '</ul>';
        $html .= '</div>';
        
        // Monthly trends
        $html .= '<div class="stat-card wide">';
        $html .= '<h3>Monthly Trends</h3>';
        $html .= '<ul>';
        foreach ($stats['monthly_trends'] as $trend) {
            $html .= '<li>' . $trend['month'] . ': ' . 
                    number_format($trend['count']) . ' payments</li>';
        }
        $html .= '</ul>';
        $html .= '</div>';
        
        $html .= '</div>';
        
        return $html;
    }
}
?>
