<?php

require_once __DIR__ . '../../../../utils/pdflib/vendor/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;

    $pdf = new Html2Pdf();
    $pdf->WriteHTML('<h1 class="">HOla1234</h1>');
    $pdf->Output('employees');

?>