<?php
require __DIR__ . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php";
$mpdf = new \Mpdf\Mpdf();
ob_start();
include 'receipt.php';
$html = ob_get_clean();
$mpdf->WriteHTML($html);
$mpdf->Output('outputx.pdf', 'D');
?>