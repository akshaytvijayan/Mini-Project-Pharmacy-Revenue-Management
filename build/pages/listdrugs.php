<?php

require "includes/conn.php";
$drug = $_POST['drug'];

$query = "SELECT sprice, tax, stock, expirydate from drugs where name='$drug'";
$exc = mysqli_execute_query($conn, $query);
$res = mysqli_fetch_row($exc);

echo json_encode(['price' => $res[0], 'tax' => $res[1], 'qty' => $res[2], 'expiry' => $res[3]]);

?>