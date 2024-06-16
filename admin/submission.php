<?php
session_start();

// Database connection details
$conn = @mysqli_connect("localhost", "root", "", "hotel");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['sub'])) {

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $opinion = $_POST['opinion'];

    $sql = "INSERT INTO opinions (name, phone, email, opinion) VALUES ('$name','$phone','$email','$opinion')";
    $query = mysqli_query($conn, $sql);

    // Execute the statement
    if ($query == TRUE) {
        echo "<script> alert('New record created successfully');
                window.location.href = '../index.php';</script>";
    
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    mysqli_close($conn);
    session_destroy();
}
