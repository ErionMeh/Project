<?php
require_once 'config/config.php';
require_once 'includes/crud_operations.php';
require_once 'includes/PaymentDashboard.php';
require_once 'includes/templates/header.php';

$dashboard = new PaymentDashboard();
echo $dashboard->renderDashboard();
?>