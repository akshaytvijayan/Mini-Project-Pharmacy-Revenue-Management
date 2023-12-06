<?php
require "conn.php";
if (isset($_POST['submit'])) {
    //echo "I was clicked";

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        // Display an alert for password mismatch
        echo "<script>alert('Passwords do not match');</script>";
        $error = true;
        echo "<script>window.history.back();</script>"; // Go back one step in history
        exit();
    } else {
        // Insert data into the database
        $sql = "INSERT INTO users (name, phone, username, password) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../addPharmacist.php?error=sqlerror");

            exit();
        } else {
            // Hash the password
            $hashedPass = password_hash($password, PASSWORD_DEFAULT);

            // Bind all parameters
            mysqli_stmt_bind_param($stmt, "ssss", $name, $phone, $username, $hashedPass);
            mysqli_stmt_execute($stmt);
            header("Location: ../pharmacist.php");
        }
    }
}
