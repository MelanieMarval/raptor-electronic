<?php

require_once __DIR__ . '../../../../lib/TCPDF-master/tcpdf.php';

$pdf = new TCPDF();
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Raptor-Electronic');
$pdf->SetTitle($_POST['reporte_name']);

$pdf->setPrintHeader(true);
$pdf->SetHeaderData('/raptor-logo.png', 50, 'Raptor Electronic'.' CA', 'by Melanie Marval'."\n".'melaniemarval@gmail.com');
$pdf->setPrintFooter(false);
$pdf->SetMargins(20, 20, 20, false);
$pdf->SetAutoPageBreak(true, 20);
$pdf->SetFont('Helvetica', '', 9);
$pdf->AddPage();

$allEmployees = (new AdminController)->printReport();



$table = ' <table border=".1"  cellpadding="4"  class="table table-hover table-striped">
                <thead>
                    <tr bgcolor="#212529" style="color: white; font-weight: bold">
                        <th>Cedula</th>
                        <th>Nombre</th>
                        <th>Cargo</th>
                        <th>Telefono</th>
                        <th>Correo</th>
                        <th>Fecha Nacimiento</th>
 
                    </tr>
                </thead>
                <tbody>';
$counter = 0;
foreach ($allEmployees as $row => $item) {
    $counter++;
    if (($counter % 2) == 1) {$color = '#d3d3d3';} else { $color = '';}
    $table .= ' <tr bgcolor="'.$color.'">
                    <td>'.$item['ci'].'</td>
                    <td>'.$item['name'].'</td>
                    <td>'.$item['position'].'</td>
                    <td>'.$item['phone_number'].'</td>
                    <td>'.$item['email'].'</td>
                    <td>'.$item['birthday'].'</td>
                </tr>';
}
$table .= '</tbody>
           </table>';

$pdf->writeHTML($table,true, 0, true, 0);
ob_clean();      // Clean any content of the output buffer
$pdf->lastPage();
$pdf->Output('empleados_test.pdf');

?>