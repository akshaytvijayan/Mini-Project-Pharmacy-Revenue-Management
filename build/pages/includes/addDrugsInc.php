<?php
require "conn.php";
session_start();
if (isset($_POST['submit'])) {
    //echo "I was clicked";




    $batchno = $_POST['batchno'];
    $drugName = $_POST['drugName'];
    $type = $_POST['type'];
    $buyingPrice = $_POST['buyingPrice'];
    $sellingPrice = $_POST['sellingPrice'];
    $stock = $_POST['stock'];
    $tax = $_POST['tax'];
    $supplier = $_POST['supplier'];
    $expiryDate = $_POST['expiryDate'];



    //echo $drugName;
    //echo $type;
    // echo $buyingPrice;
    // echo $sellingPrice;
    //echo $profit;
    //echo $drugName;

    $checkDuplicateSql = "SELECT * FROM drugs WHERE batchno = '$batchno' AND name = '$drugName'";
    $duplicateResult = mysqli_query($conn, $checkDuplicateSql);

    if (mysqli_num_rows($duplicateResult) > 0) {
        // Drug with the same details already exists
        $_SESSION['failed'] = "<div class='alert alert-danger'>Duplicate drug entry found</div>";
        header("Location:../drugs.php");
    } else

        $sql = "INSERT INTO drugs SET 
        batchno = '$batchno',
        name = '$drugName',
        type = '$type',
        bPrice = '$buyingPrice',
        sPrice = '$sellingPrice',
        tax = '$tax',
        supplier = '$supplier',
        stock = '$stock',

        expiryDate = '$expiryDate'

    ";



    $res = mysqli_query($conn, $sql);
    if ($res) {
        $_SESSION['update'] = "<div class='alert alert-success'>Updated Successfully</div>";
        header("Location:../drugs.php");
    } else {
        $_SESSION['failed'] = "<div class='alert alert-danger'>Failed to Update: " . mysqli_error($conn) . "</div>";
        header("Location:../drugs.php");
    }
}
