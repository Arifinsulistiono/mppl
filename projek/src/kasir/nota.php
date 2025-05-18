<?php
require '../vendor/dompdf/autoload.inc.php';
use Dompdf\Dompdf;

$dompdf = new Dompdf();
$html = '<h1>Nota Pembayaran</h1><p>Nama: Pasien A</p><p>Total: Rp50.000</p>';
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream("nota.pdf", array("Attachment" => 0));
?>