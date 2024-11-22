<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Gateway</title>
    <link rel="stylesheet" href="payment.css">
</head>
<body>
    <div class="payment-container">
        <h2>Select Your Payment Method</h2>
        <div class="payment-methods">
            <button class="tab-button active" onclick="openTab(event, 'card')">Card Payment</button>
            <button class="tab-button" onclick="openTab(event, 'upi')">UPI</button>
            <button class="tab-button" onclick="openTab(event, 'phonepay')">PhonePe</button>
            <button class="tab-button" onclick="openTab(event, 'gpay')">Google Pay</button>
            <button class="tab-button" onclick="openTab(event, 'netbanking')">Net Banking</button>
            <button class="tab-button" onclick="openTab(event, 'cod')">Cash on Delivery</button>
        </div>

        <div class="payment-form">
            <!-- Card Payment Form -->
            <div id="card" class="tab-content active">
                <form action="payment_processing.php" method="POST">
                    <div class="form-group">
                        <label for="name">Name on Card</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="card-number">Card Number</label>
                        <input type="text" id="card-number" name="card_number" required pattern="\d{16}" maxlength="16" placeholder="1234 5678 9123 4567">
                    </div>
                    <div class="form-group">
                        <label for="expiry">Expiry Date</label>
                        <input type="text" id="expiry" name="expiry" required pattern="\d{2}/\d{2}" maxlength="5" placeholder="MM/YY">
                    </div>
                    <div class="form-group">
                        <label for="cvv">CVV</label>
                        <input type="text" id="cvv" name="cvv" required pattern="\d{3}" maxlength="3" placeholder="123">
                    </div>
                    <button type="submit">Pay Now</button>
                </form>
            </div>

            <!-- UPI Payment Form -->
            <div id="upi" class="tab-content">
                <form action="payment_processing.php" method="POST">
                    <div class="form-group">
                        <label for="upi-id">UPI ID</label>
                        <input type="text" id="upi-id" name="upi_id" required placeholder="example@upi">
                    </div>
                    <button type="submit">Pay Now</button>
                </form>
            </div>

            <!-- PhonePe Payment -->
            <div id="phonepay" class="tab-content">
                <p>Scan the QR Code to pay via PhonePe</p>
                <img src="phonepe-qr.png" alt="PhonePe QR Code" class="qr-code">
                <button><a href="ordersucess.php">Pay Now</a></button>
            </div>

            <!-- Google Pay Payment -->
            <div id="gpay" class="tab-content">
                <p>Scan the QR Code to pay via Google Pay</p>
                <img src="" alt="Google Pay QR Code" class="qr-code">
                <button><a href="ordersucess.php">Pay Now</a></button>
            </div>

            <!-- Net Banking Form -->
            <div id="netbanking" class="tab-content">
                <form action="payment_processing.php" method="POST">
                    <div class="form-group">
                        <label for="bank">Select Bank</label>
                        <select id="bank" name="bank" required>
                            <option value="hdfc">HDFC Bank</option>
                            <option value="icici">ICICI Bank</option>
                            <option value="sbi">State Bank of India</option>
                            <option value="axis">Axis Bank</option>
                        </select>
                    </div>

                    <button><a href="ordersucess.php">Pay Now</a></button>
                </form>
            </div>

            <!-- Cash on Delivery -->
            <div id="cod" class="tab-content">
    <p>Cash on Delivery is available. Complete the payment upon product delivery.</p>
    <button><a href="ordersucess.php">Place Order</a></button>
</div>

        </div>
    </div>

    <script src="payment_script.js"></script>
</body>
</html>
