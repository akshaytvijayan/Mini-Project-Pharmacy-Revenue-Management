<?php
session_start();
require 'includes/conn.php';
if (isset($_GET['id'])) {
    $pid = $_GET['id'];
}

$res = mysqli_execute_query($conn, "select name, age from patients where id=$pid");
$pat = mysqli_fetch_row($res);


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Late Pharmacy</title>
    <meta name="robots" content="noindex, nofollow">
    <script src="https://cdn.tailwindcss.com/3.1.4"></script>
</head>

<body style='background-color: rgba(0,0,0,0.65)'>

    <div class="bg-white rounded-lg shadow-md w-2xl px-8 py-8 max-w-3xl mx-auto mt-16">
        <h1 class="font-bold text-2xl my-4 text-center uppercase text-green-600">Neethi Pharmacy</h1>
        <p class="flex justify-center text-gray-700 text-center"> CHELANNUR NEETHI LABS AND SCANS (PO) CHELANNUR <br />HO KAKKODI MUKKU
            CALICUT -673616 KERALA</p>
        <p class="flex justify-center text-gray-700">+91-495-2723272</p>
        <hr class="mb-1">
        <hr class="mb-1">
        <span class='text-sm'>GSTIN: 32AADCM8209R17Z</span>
        <div class="mb-6 mt-3">
            <h1 class="text-md font-bold text-center">TOTAL BILL</h1>
        </div>

        <div class="flex justify-between mb-6">
            <div class=''>
                <span>
                    Patient Name: <?php echo $pat[0]; ?>
                    <br />
                    Age: <?php echo $pat[1]; ?>
                </span>
            </div>
        </div>
        <hr class="mb-1">
        <hr class="mb-1">
        <table class="w-full mb-8 table ">
            <thead>

                <tr>
                    <th class="text-left font-bold text-gray-700"># &nbsp;Description</th>
                    <th class="text-center font-bold text-gray-700">Batch</th>
                    <th class="text-center font-bold text-gray-700">Expiry</th>
                    <th class="text-center font-bold text-gray-700">Quantity</th>
                    <th class="text-center font-bold text-gray-700">Rate</th>
                    <th class="text-right font-bold text-gray-700">Amount</th>
                </tr>

            </thead>

            <?php
            require "includes/conn.php";
            $res = mysqli_execute_query($conn, "select distinct(dos) from sales where pid=$pid");
            $gt = 0;
            foreach (mysqli_fetch_all($res) as $dos) {
                $dos = $dos[0];


                $sql = "select a.name, a.drug, a.sprice, a.qty, a.total, b.batchno, b.expirydate from sales as a left join drugs as b on a.drug=b.name where pid=$pid and dos='$dos'";
                $balance = mysqli_execute_query($conn, "select sum(balance) from sales where pid=$pid and dos='$dos'");
                $balance = mysqli_fetch_row($balance)[0];


            ?>
                <tr>
                    <td class="text-center font-bold text-gray-700 mt-2" colspan="6"><?php echo 'Date: ' . $dos; ?></td>
                </tr>
                <?php

                $res = mysqli_query($conn, $sql);
                //check if there are any records in the database
                if ($res == TRUE) {
                    $count = mysqli_num_rows($res);
                    $sn = 0;
                    $tamount = 0;
                    $namount = 0;
                    if ($count > 0) {
                        while ($rows = mysqli_fetch_assoc($res)) {
                            if (floatval($rows['total']) > 0) {
                                $name = $rows['name'];
                                $bno = $rows['batchno'];
                                $edate = $rows['expirydate'];
                                $drug = $rows['drug'];
                                $sprice = $rows['sprice'];
                                $qty = $rows['qty'];
                                $total = $rows['total'];
                                $tamount += floatval($total);
                                $namount += floatval($sprice) * intval($qty);
                                $batch = mysqli_execute_query($conn, "select batchno, expirydate from drugs where name='$drug'");

                ?>
                                <tbody>

                                    <tr>
                                        <td class="text-left text-gray-700"><?php echo ++$sn . ' &nbsp; ' . $drug; ?></td>
                                        <td class="text-center text-gray-700"><?php echo $bno; ?></td>
                                        <td class="text-center text-gray-700"><?php echo $edate; ?></td>
                                        <td class="text-center text-gray-700"><?php echo $qty; ?></td>
                                        <td class="text-center text-gray-700"><?php echo $sprice; ?></td>
                                        <td class="text-right text-gray-700"><?php echo $total; ?></td>
                                    </tr>



                                </tbody>

            <?php
                            }
                        }
                        $gt += $tamount;
                    }
                }
            }


            ?>
        </table>

        <div class='text-2xl font-bold text-black' align='right'>
            <span>
                <hr class=" ">
                Total Amount : ₹ <?php echo $gt; ?> /-
                <br />
            </span>
        </div>



        <hr class="mb-2">




        <div class="flex justify-between">
            <div class="text-gray-700">
            </div>
            <div class="mb-8 mt-4">
                <h2 class="text-lg font-bold mb-4">Pharmasict</h2>

            </div>

        </div>

        <div class="text-center">
            <span>********** WISH YOU A SPEEDY RECOVERY **********</span>
        </div>
    </div>

</body>

</html>