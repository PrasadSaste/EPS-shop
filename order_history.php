<?php
require 'connection.php'; // Ensure this file establishes a database connection

// Fetch data from user_items and items tables for confirmed orders
$sql = "
    SELECT 
        u.user_id, 
        u.order_id, 
        u.status, 
        i.name AS item_name, 
        i.price AS item_price, 
        NOW() AS order_date
    FROM users_items u
    JOIN items i ON u.item_id = i.id
    WHERE u.status = 'Confirmed ' ";

$result = $con->query($sql);

if ($result && $result->num_rows > 0) {
    echo "<h1>Order History</h1>";
    echo "<table border='1' cellpadding='10' cellspacing='0'>
            <tr>
                <th>User ID</th>
                <th>Order ID</th>
                <th>Status</th>
                <th>Item Name</th>
                <th>Item Price</th>
                <th>Order Date</th>
            </tr>";

    // Loop through the results and display each order
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . htmlspecialchars($row['user_id']) . "</td>
                <td>" . htmlspecialchars($row['order_id']) . "</td>
                <td>" . htmlspecialchars($row['status']) . "</td>
                <td>" . htmlspecialchars($row['item_name']) . "</td>
                <td>" . htmlspecialchars($row['item_price']) . "</td>
                <td>" . htmlspecialchars($row['order_date']) . "</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "<p>No confirmed orders found.</p>";
}

// Close the connection
$con->close();
?>
