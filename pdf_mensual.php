<?php
$connect = mysqli_connect ("127.0.0.1", "root") or die (mysqli_error()); // Connects to the database. 
mysqli_select_db ($connect, "hogarium_apli") or die (mysqli_error()); // Selects the database
$tildes = $connect->query("SET NAMES 'utf8'");

$result = mysqli_query($connect, "SELECT * FROM factura_mayo");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
$r = mysqli_query($connect, "SELECT ROUND(SUM(precioFinal),2) FROM factura_".$meses[date('n')-1]);
$sum = mysqli_fetch_array($r);

$html .= "<html lang='en'>
    <head>
        <title>Habitum Hogar</title>
        <meta charset='UTF-8' />
        <meta name='viewport' content='width=device-width, initial-scale=1.0' />
        <link rel='stylesheet' href='assets/css/matrix-style.css' />
        <link href='font-awesome/css/font-awesome.css' rel='stylesheet' />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
        <link href='mpdf.css' rel='stylesheet' type='text/css'>
    </head>
    <body>
                <div class='span12'>
            <div class='invoice-content'>
                <div class='row-fluid invoice-head'>
                    <div class='span6 info'>
                        <h1>Habitum Hogar S.L</h1>
                        <p>P.I. LA CAMPIÑA C/ COMUNIDAD DE MADRID, 19</p>
                        <p> 41400, ÉCIJA (SEVILLA) ESPAÑA</p>
                        <p>Tlf: 955 90 19 93 </p>
                        <p>INFO@HOGARIUM.ES</p>
                    </div>
                    <div class='span 6 emision'>
                    <table>
                        <tr>
                            <th>Fecha de emisión:</th> 
                            <th>".date('d-m-y')."</th>
                        </tr>
                        <tr>
                        <th>Mes de Facturación: </th>
                        <th>".$meses[date('n')-1].'-'.date('Y')."</th>
                    </table>
                </div>
                </div>

                <div class='row-fluid'>
                    <div class='span12'>
                        <table class='table table-bordered table-invoice-full'>
                            <tr>
                                <th>EMPRESA</th>
                                <th>ORIGEN</th>
                                <th>DESTINO</th>
                                <th>PESO</th>
                                <th>TASA</th>
                                <th>FUEL</th>
                                <th>REEMBOLSO</th>
                                <th>PRECIO FINAL</th>
                            </tr>
                                        ";
while ($fila = $result->fetch_array()) {
    $html.='<tr>
                                <td>'. $fila["empresa"] .'</td>
                                <td>'.$fila["origen"].'</td>
                                <td class="right">'.$fila["destino"].'</td>
                                <td class="right">'.$fila["peso"].'kg'.'</td>
                                <td class="right">'.$fila["tasaPeso"].'€'.'</td>
                                <td class="right">'.$fila["fuel"].'€'.'</td>
                                <td class="right">'.$fila["reembolso"].'€'.'</td>
                                <td class="right" style="color: #8b0000;"><strong>'.$fila["precioFinal"].'€'.'</strong></td>
                            </tr>';
}

$html.='
                                </table>
                    </div>
                </div>
            </div>
            <div class="total">
                    <table>
                        <tr>
                            <th>Total: </th>
                            <th style="color: #01df70;">'.$sum[0].'€</th>
                        </tr>   
                    </table>
                </div>
        </div>
    </body>
</html>';

define('_MPDF_PATH','../');
include __DIR__."\mpdf60\mpdf.php";

$mpdf=new mPDF('c','A4'); 
$mpdf->SetProtection(array('print'));
$mpdf->SetTitle("Habitum Hogar");
$mpdf->SetAuthor("Fsola");
$mpdf->SetWatermarkText("Hogarium");
$mpdf->showWatermarkText = true;
$mpdf->watermark_font = 'DejaVuSansCondensed';
$mpdf->watermarkTextAlpha = 0.08;
$mpdf->SetDisplayMode('default');
$mpdf->WriteHTML($html);
$mpdf->setHTMLFooter('2017 &copy; Habitum Hogar');
$mpdf->Output('factura.pdf', 'I'); 

exit;

?>
