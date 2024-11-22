<?php
$orderID = $_GET['order_id'];
echo "<h1>Thank you for your order!</h1>";
echo "<p>Your Order ID is: " . htmlspecialchars($orderID) . "</p>";
?>