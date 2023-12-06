<?php
session_start();

if (isset($_POST['submit'])) {
	require "conn.php";
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
		// Update data in the database
		$sql = "UPDATE users SET name=?, phone=?, username=?, password=? WHERE id=?";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../addPharmacist.php?error=sqlerror");
			exit();
		} else {
			// Hash the password
			$hashedPass = password_hash($password, PASSWORD_DEFAULT);

			// Assuming you have an 'id' parameter in your POST data
			$id = $_POST['id'];

			// Bind all parameters
			mysqli_stmt_bind_param($stmt, "ssssi", $name, $phone, $username, $hashedPass, $id);
			mysqli_stmt_execute($stmt);
			header("Location: ../pharmacist.php");
			exit();
		}
	}
}
