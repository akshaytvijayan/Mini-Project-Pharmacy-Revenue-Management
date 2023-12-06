<?php
session_start();

if (isset($_POST['submit'])) {
	require "conn.php";

	$id = $_POST['id'];
	$batchno = $_POST['batchno'];
	$name = $_POST['name'];
	$type = $_POST['type'];
	$newSPrice = $_POST['sPrice'];
	$bPrice = $_POST['bPrice'];
	$profit = $_POST['profit'];
	$newStock = $_POST['stock'];
	$expiryDate = $_POST['expiryDate'];

	// Retrieve existing sPrice and stock from the database
	$selectSql = "SELECT sPrice, stock FROM drugs WHERE id = $id";
	$selectResult = mysqli_query($conn, $selectSql);

	if ($selectResult && mysqli_num_rows($selectResult) > 0) {
		$row = mysqli_fetch_assoc($selectResult);
		$existingSPrice = $row['sPrice'];
		$existingStock = $row['stock'];

		// Calculate the total sPrice and stock
		$totalSPrice = $existingSPrice + $newSPrice;
		$totalStock = $existingStock + $newStock;

		// Update the existing entry with the new total sPrice and stock
		$updateSql = "UPDATE drugs SET
            batchno = '$batchno',
            name = '$name',
            type = '$type',
            sPrice = '$totalSPrice',
            bPrice = '$bPrice',
            profit = '$profit',
            expiryDate = '$expiryDate',
            stock = '$totalStock'
            WHERE id = $id";

		$updateResult = mysqli_query($conn, $updateSql);

		if ($updateResult) {
			$_SESSION['updated_item'] = "<div class='alert alert-success'>Item Updated successfully</div>";
			header("Location:../drugs.php");
		} else {
			$_SESSION['failed_item'] = "<div class='alert alert-danger'>Failed to Update Item</div>";
			header("Location:../items_list.php");
		}
	} else {
		$_SESSION['failed_item'] = "<div class='alert alert-danger'>Failed to Retrieve Existing Data</div>";
		header("Location:../items_list.php");
	}
}
