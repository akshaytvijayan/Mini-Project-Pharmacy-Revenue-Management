<?php
session_start();
require 'includes/conn.php';
$pid = 0;
if (isset($_GET['id'])) {
    $pid = $_GET['id'];
}

if (isset($_SESSION['id'])) {
    $pid = $_SESSION['id'];
}
$dos = $_SESSION['dos'];

$res = mysqli_execute_query($conn, "select a.name, a.age, IFNULL(b.doctor, 'Doctor') from patients as a left join consultation as b on a.id=b.id where a.id=$pid");
$pat = mysqli_fetch_row($res);

$pdate = mysqli_execute_query($conn, "select pdate from payments where pid=$pid and dos='$dos' order by pdate desc");
$pdate = mysqli_fetch_row($pdate);

if (isset($pdate[0])) {
    $pdate = $pdate[0];
}


function a2r($amount)
{
    $numberToWords = [
        '0' => 'Zero',
        '1' => 'One',
        '2' => 'Two',
        '3' => 'Three',
        '4' => 'Four',
        '5' => 'Five',
        '6' => 'Six',
        '7' => 'Seven',
        '8' => 'Eight',
        '9' => 'Nine',
        '10' => 'Ten',
        '11' => 'Eleven',
        '12' => 'Twelve',
        '13' => 'Thirteen',
        '14' => 'Fourteen',
        '15' => 'Fifteen',
        '16' => 'Sixteen',
        '17' => 'Seventeen',
        '18' => 'Eighteen',
        '19' => 'Nineteen',
    ];

    $tens = [
        '2' => 'Twenty',
        '3' => 'Thirty',
        '4' => 'Forty',
        '5' => 'Fifty',
        '6' => 'Sixty',
        '7' => 'Seventy',
        '8' => 'Eighty',
        '9' => 'Ninety',
    ];

    $hundreds = [
        '1' => 'One Hundred',
        '2' => 'Two Hundred',
        '3' => 'Three Hundred',
        '4' => 'Four Hundred',
        '5' => 'Five Hundred',
        '6' => 'Six Hundred',
        '7' => 'Seven Hundred',
        '8' => 'Eight Hundred',
        '9' => 'Nine Hundred',
    ];

    $thousands = [
        '1' => 'One Thousand',
        '2' => 'Two Thousand',
        '3' => 'Three Thousand',
        '4' => 'Four Thousand',
        '5' => 'Five Thousand',
        '6' => 'Six Thousand',
        '7' => 'Seven Thousand',
        '8' => 'Eight Thousand',
        '9' => 'Nine Thousand',
    ];

    $amount = number_format($amount, 2, '.', ''); // Format amount with two decimal places

    list($rupees, $paise) = explode('.', $amount);

    $rupees = ltrim($rupees, '0'); // Remove leading zeros

    $words = [];

    if ($rupees == 0) {
        $words[] = $numberToWords[$rupees];
    } elseif ($rupees < 20) {
        $words[] = $numberToWords[$rupees];
    } elseif ($rupees < 100) {
        $words[] = $tens[$rupees[0]];
        if ($rupees[1] != 0) {
            $words[] = $numberToWords[$rupees[1]];
        }
    } elseif ($rupees >= 100 && $rupees <= 999) {
        $words[] = $hundreds[$rupees[0]];
        $remainder = substr($rupees, 1);
        if ($remainder != 0) {
            $words[] = a2r((int)$remainder);
        }
    } else {
        $words[] = $thousands[$rupees[0]];
        $remainder = substr($rupees, 1);
        if ($remainder != 0) {
            $words[] = a2r((int)$remainder);
        }
    }

    return implode(' ', $words);
}


$discount = 0;
$rs = mysqli_execute_query($conn, "SELECT discount FROM discounts WHERE pid=$pid AND dos='$dos'");
if (mysqli_num_rows($rs) > 0) {
    $rs = mysqli_fetch_row($rs);
    $discount = $rs[0];
}



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
            <h1 class="text-md font-bold text-center">PHARMACY BILL</h1>
        </div>

        <div class="flex justify-between mb-6">
            <div class=''>
                <span>
                    Patient Name: <?php echo $pat[0]; ?>
                    <br />
                    Age: <?php echo $pat[1]; ?>
                    <br />
                    Reference: <?php echo $pat[2]; ?>
                </span>
            </div>
            <div class='' align='right'>
                <span>
                    Bill date: <?php echo $pdate; ?>
                    <br />
                    Bill No.: #100<?php echo $pid; ?>
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
            $sql = "select a.name, a.drug, a.sprice, a.qty, a.total, b.batchno, b.expirydate from sales as a left join drugs as b on a.drug=b.name where pid=$pid and dos='$dos'";
            $balance = mysqli_execute_query($conn, "select sum(balance) from sales where pid=$pid and dos='$dos'");
            $balance = mysqli_fetch_row($balance)[0];




            $res = mysqli_query($conn, $sql);
            //check if there are any records in the database
            if ($res == TRUE) {
                $count = mysqli_num_rows($res);
                $sn = 0;
                $tamount = 0;
                $namount = 0;
                if ($count > 0) {
                    while ($rows = mysqli_fetch_assoc($res)) {
                        $name = $rows['name'];
                        $bno = $rows['batchno'];
                        $edate = $rows['expirydate'];
                        $drug = $rows['drug'];
                        $sprice = $rows['sprice'];
                        $qty = $rows['qty'];
                        $total = $rows['total'];
                        $tamount += floatval($total);
                        $namount += $sprice * $qty;
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
            }

            $paid = round($tamount - ($tamount * $discount / 100), 0);
            ?>
        </table>

        <div class='text-2xl font-bold text-black' align='right'>
            <span>
                <hr class=" ">
                Payable Amount : ₹ <?php echo $paid; ?> /- Only.
                <br />
            </span>
        </div>



        <hr class="mb-2">
        Rupees <?php echo a2r(intval($paid)); ?> Only.
        <br />
        <table>
            <tr>
                <td style='width: 120px'>Total Amount</td>
                <td style='width: 40px'>:</td>
                <td>₹<?php echo $tamount; ?></td>
            </tr>
            <tr>
                <td style='width: 120px'>Net Amount</td>
                <td style='width: 40px'>:</td>
                <td>₹<?php echo $namount; ?></td>
            </tr>
            <tr>
                <td style='width: 120px'>Tax Amount</td>
                <td style='width: 40px'>:</td>
                <td>₹<?php echo $tamount - $namount; ?></td>
            </tr>
            <tr>
                <td style='width: 120px'>Discount (<?php echo $discount; ?>%)</td>
                <td style='width: 40px'>:</td>
                <td>₹<?php echo round($tamount - $paid, 2); ?></td>
            </tr>
        </table>



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

    <br />
    <div align='center'>
        <a href="tester.php">Print as pdf</a>
    </div>

</body>

</html>