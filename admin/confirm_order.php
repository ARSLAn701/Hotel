<?php
// confirm_order.php

// Check if the request method is POST and if orderId is set
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['orderId'])) {
    $orderId = $_POST['orderId'];

    // Connect to the database
    $conn = mysqli_connect('localhost', 'id22317382_hotel', '', 'hotel');

    // Check if the connection is successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Update the status in the original database
    $query = "UPDATE mealbook SET stat='Confirmed' WHERE ID='$orderId'";
    $result = mysqli_query($conn, $query);

    // Check if the update was successful
    if ($result) {
        // Fetch the confirmed order from the database
        $query = "SELECT * FROM mealbook WHERE ID='$orderId'";
        $result = mysqli_query($conn, $query);

        // Check if the order was found
        if ($result && mysqli_num_rows($result) > 0) {
            // Store the confirmed order in another file or database
            $confirmed_order = mysqli_fetch_assoc($result);

            // Example: Store in another file
            $file = fopen("confirmed_orders.txt", "a");
            fwrite($file, json_encode($confirmed_order) . "\n");
            fclose($file);

            // Return success response
            $response = array('success' => true);
            echo json_encode($response);
        } else {
            // If order not found, return error
            $response = array('success' => false, 'error' => 'Order not found');
            echo json_encode($response);
        }
    } else {
        // If update fails, return error
        $response = array('success' => false, 'error' => 'Failed to update status');
        echo json_encode($response);
    }

    // Close connection
    mysqli_close($conn);
} else {
    // If orderId is not set, return an error
    $response = array('success' => false, 'error' => 'Order ID is missing');
    echo json_encode($response);
}
?>
