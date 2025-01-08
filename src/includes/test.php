<?php
require_once 'PaymentDashboard.php';

$dashboard = new PaymentDashboard();
echo $dashboard->renderDashboard();
?>