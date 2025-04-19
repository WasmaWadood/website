<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $host = "localhost";
    $username = "root";
    $db_password = "abc123";
    $database = "ice_cream_db";

    $con = new mysqli($host, $username, $db_password, $database);

    if ($con->connect_error) {
        die("Database connection failed: " . $con->connect_error);
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $con->prepare("INSERT INTO login_table (email, passwords) VALUES (?, ?)");
    if (!$stmt) {
        die("Preparation failed: " . $con->error);
    }

    $stmt->bind_param("ss", $email, $hashed_password);

    if ($stmt->execute()) {
        echo "USER DETAILS ADDED SUCCESSFULLY";
    } else {
        echo "STUDENT DETAILS NOT ADDED. Error: " . $stmt->error;
    }
    $stmt->close();
    $con->close();
}
?>
