<?php
session_start();

if (isset($_POST['submit'])) {

	require "conn.php";


	$id = $_POST['id'];
	$batchno = $_POST['batchno'];
	$name = $_POST['name'];
	$type = $_POST['type'];
	$sPrice = $_POST['sPrice'];
	$bPrice = $_POST['bPrice'];
	$profit = $_POST['profit'];
	$stock = $_POST['stock'];
	$expiryDate = $_POST['expiryDate'];

	$sql = "UPDATE  drugs SET
	batchno = '$batchno',
	name = '$name',
	type = '$type',
	sPrice = '$sPrice',
	bPrice = '$bPrice',
	profit = '$profit',
	expiryDate = '$expiryDate',
	stock = '$stock'
	WHERE id = $id
	
	";

	$res = mysqli_query($conn, $sql);

	if ($res = true) {
		$_SESSION['updated_item'] = "<div class='alert alert-success'>Item Updated successifuly </div>";
		header("Location:../drugs.php");
	} else {
		$_SESSION['failed_item'] = "<div class='alert alert-danger'> Failed to Update Item </div>";
		header("Location:../items_list.php");
	}
}
