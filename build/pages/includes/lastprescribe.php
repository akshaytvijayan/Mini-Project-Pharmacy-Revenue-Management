<?php
session_start();
require "conn.php";


if (isset($_POST['submit'])) {
	$pid = $_POST['id'];
	$name = $_POST['name'];
	$gtotal = $_POST['total'];
	$drugs = $_SESSION['drugs'];
	$ch = true;



	echo json_encode($drugs);




	foreach ($drugs as $drug) {
		if (isset($drug[4])) {
			$total = floatval($drug[4]);
			$sql = "INSERT INTO sales SET
			pid = '$pid',
			qty = '$drug[3]',
			sprice = '$drug[1]',
			name = '$name',
			drug = '$drug[0]',
			total= '$total',
			balance= '$total'
			";
			$ch = false;



			$res = mysqli_query($conn, $sql);

			if ($res == true) {
				echo $drug[0];
				$_SESSION['sessionpatient'] = $pid;
				$sql2 = " UPDATE drugs SET
				stock = stock-$drug[3]
				WHERE name = '$drug[0]';
			";
				$res2 = mysqli_query($conn, $sql2);
			}
		}
	}


	// if ($res2 == true) {
	// 	$sql3 = "INSERT INTO payments SET
	// 	pid = '$pid',
	// 	balance = '$gtotal',
	// 	payment = 0,
	// 	comment = 'Unpaid',

	// 	";
	// }
	// $res3 = mysqli_query($conn, $sql3);

	unset($_SESSION['drugs']);


	if ($res2 == true) {
		$_SESSION['prescriptionSuccess'] = "<div class='py-4 bg-gradient-to-tl from-green-600 to-lime-400 flex justify-center items-center text-white'>That Was Successifull</div>";
		header("Location:../patients.php");
	} else {
		$_SESSION['failed'] = "<div class='alert alert-danger'> Failed to Update</div>";
		header("Location:../patients.php");
	}
}
