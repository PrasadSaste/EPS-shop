<?php
// payment_processing.php

// Start session to store user data (if needed)
session_start();

// Function to sanitize user input
function sanitizeInput($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}

// Check which payment method was used
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['card_number'])) {
        // Process Card Payment
        $name = sanitizeInput($_POST['name']);
        $card_number = sanitizeInput($_POST['card_number']);
        $expiry = sanitizeInput($_POST['expiry']);
        $cvv = sanitizeInput($_POST['cvv']);

        // Add backend validation for card details
        if (!preg_match('/^\d{16}$/', $card_number) || !preg_match('/^\d{2}\/\d{2}$/', $expiry) || !preg_match('/^\d{3}$/', $cvv)) {
            echo "Invalid card details.";
            exit;
        }

        // Implement payment gateway API here (e.g., Stripe, Razorpay)
        // Mock response
        $payment_status = "success"; // Change based on actual API response

    } elseif (isset($_POST['upi_id'])) {
        // Process UPI Payment
        $upi_id = sanitizeInput($_POST['upi_id']);

        // Add backend validation for UPI ID
        if (!filter_var($upi_id, FILTER_SANITIZE_STRING)) {
            echo "Invalid UPI ID.";
            exit;
        }

        // Implement UPI payment API
        $payment_status = "success"; // Mock response

    } elseif (isset($_POST['bank'])) {
        // Process Net Banking Payment
        $bank = sanitizeInput($_POST['bank']);

        // Process bank information
        $payment_status = "success"; // Mock response

    } else {
        echo "Invalid payment method.";
        exit;
    }

    // Handle Payment Status
    if ($payment_status === "success") {
        // Redirect to success page or perform further actions
        header("Location: ordersuccess.php");
        exit;
    } else {
        echo "Payment failed. Please try again.";
    }
} else {
    echo "Invalid request method.";
}
?>
