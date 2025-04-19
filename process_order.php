<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $contact = trim($_POST['contact']);
    $email = trim($_POST['email']);
    $address = trim($_POST['address']);
    $quantity = trim($_POST['quantity']);
    $payment = trim($_POST['payment']);

    $host = "localhost";
    $username = "root";+
    $db_password = "abc123";
    $database = "ice_cream_db";

    $con = new mysqli($host, $username, $db_password, $database);

    if ($con->connect_error) {
        die("Database connection failed: " . $con->connect_error);
    }

    $stmt = $con->prepare("INSERT INTO form_table (name, contact, email, address, quantity, payment_method) VALUES (?, ?, ?, ?, ?, ?)");
    if (!$stmt) {
        die("Preparation failed: " . $con->error);
    }

    $stmt->bind_param("ssssis", $name, $contact, $email, $address, $quantity, $payment);

    if ($stmt->execute()) {
        echo "ORDER PLACED SUCCESSFULLY";
    } else {
        echo "ORDER NOT PLACED. Error: " . $stmt->error;
    }
    
    $stmt->close();
    $con->close();
}
?>
