<?php

session_start();
$dos = $_SESSION['dos'];

require "conn.php";
if(isset($_POST['submit'])){
	//echo "Was clicked";
	
	$pid = $_POST['pid'];
	$discount = $_POST['discount'];
	try{
		$discount = floatval($discount);
		mysqli_execute_query($conn, "insert into discounts values ($pid, '$dos', $discount)");
		
	}catch(Exception $e){
		$discount = 0;
	}
	$amount = $_POST['amount'];
	$balance = $_POST['balance'];
	$pmethod = $_POST['pmethod'];
	$comment = $_POST['comment'];
	$total = $_POST['total'];
    $nBalance = floatval($balance) - floatval($amount);
	
    echo $nBalance;


	$sql = "INSERT INTO payments SET

	balance = '$nBalance',
	pid = '$pid',
	payment = '$amount',
	comment = '$comment',
	pmethod = '$pmethod',
	dos = '$dos'
    
	";

	$res = mysqli_query ($conn, $sql);
	if ($res = true) {
        $sql2 = "UPDATE sales SET 
        balance = balance-$amount
        WHERE pid = $pid and dos='$dos' LIMIT 1
        ";
    }
    $res2 = mysqli_query ($conn, $sql2);

    if($res2 = true){
		
		$_SESSION['paysuccess'] = "<div class='py-4 bg-gradient-to-tl from-green-600 to-lime-400 flex justify-center items-center text-white'>That Was Successifull</div>";
                        header ("Location:../bill.php");
	} 
	}else{
		$_SESSION['failed'] = "<div class='alert alert-success'> Failed to Add</div>";
                        header ("Location:../bill.php");

	}
	

