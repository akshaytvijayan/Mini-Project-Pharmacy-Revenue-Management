<?php
if (isset($_POST['submit'])) {
    // Connect to the database
    require "conn.php";

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Error handling
    $error = false; // Variable to track errors

    if (empty($name) || empty($phone) || empty($username) || empty($password) || empty($confirm_password)) {
        // Display an alert for empty fields
        echo "<script>alert('Please fill in all fields');</script>";
        $error = true;
    } elseif (!preg_match("/^[a-zA-Z0-9]*/", $username)) {
        // Display an alert for invalid username format
        echo "<script>alert('Invalid username format');</script>";
        $error = true;
    } elseif ($password !== $confirm_password) {
        // Display an alert for password mismatch
        echo "<script>alert('Passwords do not match');</script>";
        $error = true;
    }

    if ($error) {
        // Errors occurred, stop further execution
        echo "<script>window.history.back();</script>"; // Go back one step in history
        exit();
    } else {
        // Check if the username is taken
        $sql = "SELECT username FROM users WHERE username = ?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: index.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $rowCount = mysqli_stmt_num_rows($stmt);
            if ($rowCount > 0) {
                header("Location: index.php?error=usernametaken&username=" . $username);
                exit();
            } else {
                // Insert data into the database
                $sql = "INSERT INTO users (name, phone, username, password) VALUES (?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: index.php?error=sqlerror");
                    exit();
                } else {
                    // Hash the password
                    $hashedPass = password_hash($password, PASSWORD_DEFAULT);

                    // Bind all parameters
                    mysqli_stmt_bind_param($stmt, "ssss", $name, $phone, $username, $hashedPass);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../../index.php?success=registered");
                }
            }
        }
    }
}
