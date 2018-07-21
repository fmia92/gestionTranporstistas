<?php
/*function prompt($prompt_msg){
    echo("<script type='text/javascript'> var answer = prompt('".$prompt_msg."'); </script>");

    $answer = "<script type='text/javascript'> document.write(answer); </script>";
    return($answer);
}
$msg = "Please type your name.";
$fecha = prompt($msg);*/

$connect = mysqli_connect ("127.0.0.1", "root") or die (mysqli_error()); // Connects to the database. 
mysqli_select_db ($connect, "hogarium_apli") or die (mysqli_error()); // Selects the database
$tildes = $connect->query("SET NAMES 'utf8'");

if (mysqli_connect_errno()) {
    printf("La conexión con el servidor de base de datos falló: %s\n", mysqli_connect_error());
    exit();
}
$result = mysqli_query($connect, "SELECT * FROM factura_mayo");
if($result->num_rows > 0 ){
    if (PHP_SAPI == 'cli')
        die('Este archivo solo se puede ver desde un navegador web');
    /** Se agrega la libreria PHPExcel */
    require_once 'assets/excel/lib/PHPExcel/PHPExcel.php';

    // Se crea el objeto PHPExcel
    $objPHPExcel = new PHPExcel();
    // Se asignan las propiedades del libro
    $objPHPExcel->getProperties()->setCreator("fsola") // Nombre del autor
        ->setLastModifiedBy("fsola") //Ultimo usuario que lo modificó
        ->setTitle("Precios") // Titulo
        ->setSubject("Reporte Excel L") //Asunto
        ->setDescription("Archivo excel precios") //Descripción
        ->setKeywords("reporte excel precios") //Etiquetas
        ->setCategory("Reporte excel"); //Categorias

    $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

    $tituloReporte = "Factura ".$meses[date('n')-1].'-'.date('Y');
    $titulosColumnas = array('EMPRESA', 'Destino', 'Origen', 'TASA', 'Fuel', 'Reembolso', 'Final', 'Fecha');
    $objPHPExcel->setActiveSheetIndex(0)
        ->mergeCells('A1:H1');


    // Se agregan los titulos del reporte
    $objPHPExcel->setActiveSheetIndex(0)
        ->setCellValue('A1',$tituloReporte) // Titulo del reporte
        ->setCellValue('A3',  $titulosColumnas[0])  //Titulo de las columnas
        ->setCellValue('B3',  $titulosColumnas[1])
        ->setCellValue('C3',  $titulosColumnas[2])
        ->setCellValue('D3',  $titulosColumnas[3])
        ->setCellValue('E3',  $titulosColumnas[4])
        ->setCellValue('F3', $titulosColumnas[5])
        ->setCellValue('G3', $titulosColumnas[6])
        ->setCellValue('H3', $titulosColumnas[7]);

    $i = 4; //Numero de fila donde se va a comenzar a rellenar
    while ($fila = $result->fetch_array()) {

        $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A'.$i, $fila['empresa'])
            ->setCellValue('B'.$i, $fila['origen'])
            ->setCellValue('C'.$i, $fila['destino'])
            ->setCellValue('D'.$i, $fila['tasaPeso'])
            ->setCellValue('E'.$i, $fila['fuel'])
            ->setCellValue('F'.$i, $fila['reembolso'])
            ->setCellValue('G'.$i, $fila['precioFinal'])
            ->setCellValue('H'.$i, $fila['Fecha']);
        $i++;
        $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue("F".$i, "Total")
            ->setCellValue("G".$i, "=SUM(G3:G".($i-1).")");
    }


    $estiloTituloReporte = array(
        'font' => array(
            'name'      => 'Verdana',
            'bold'      => true,
            'italic'    => false,
            'strike'    => false,
            'size' =>16,
            'color'     => array(
                'rgb' => 'f6faff'
            )
        ),
        'fill' => array(
            'type'  => PHPExcel_Style_Fill::FILL_SOLID,
            'color' => array(
                'argb' => '34495E')
        ),
        'borders' => array(
            'allborders' => array(
                'style' => PHPExcel_Style_Border::BORDER_NONE
            )
        ),
        'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
            'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
            'rotation' => 0,
            'wrap' => TRUE
        )
    );

    $estiloTituloColumnas = array(
        'font' => array(
            'name'  => 'Arial',
            'bold'  => true,
            'color' => array(
                'rgb' => 'FFFFFF'
            )
        ),
        'fill' => array(
            'type'       => PHPExcel_Style_Fill::FILL_GRADIENT_LINEAR,
            'rotation'   => 90,
            'startcolor' => array(
                'rgb' => '3c6ac6'
            ),
            'endcolor' => array(
                'argb' => '3c6ac6'
            )
        ),
        'borders' => array(
            'top' => array(
                'style' => PHPExcel_Style_Border::BORDER_MEDIUM ,
                'color' => array(
                    'rgb' => '143860'
                )
            ),
            'bottom' => array(
                'style' => PHPExcel_Style_Border::BORDER_MEDIUM ,
                'color' => array(
                    'rgb' => '143860'
                )
            ),

            'left' => array(
                'style' => PHPExcel_Style_Border::BORDER_MEDIUM ,
                'color' => array(
                    'rgb' => '143860'
                )
            ),

            'right' => array(
                'style' => PHPExcel_Style_Border::BORDER_MEDIUM ,
                'color' => array(
                    'rgb' => '143860'
                )
            )

        ),
        'alignment' =>  array(
            'horizontal'=> PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
            'vertical'  => PHPExcel_Style_Alignment::VERTICAL_CENTER,
            'wrap'      => TRUE
        )
    );

    $estiloInformacion = new PHPExcel_Style();
    $estiloInformacion->applyFromArray( array(
        'font' => array(
            'name'  => 'Arial',
            'bold' => true,
            'color' => array(
                'rgb' => '000f1e'
            )
        ),
        'fill' => array(
            'type'  => PHPExcel_Style_Fill::FILL_SOLID,
            'color' => array(
                'argb' => 'cfe7ff')
        ),
        'borders' => array(
            'left' => array(
                'style' => PHPExcel_Style_Border::BORDER_THIN ,
                'color' => array(
                    'rgb' => '3a2a47'
                )
            ),

            'right' => array(
                'style' => PHPExcel_Style_Border::BORDER_THIN ,
                'color' => array(
                    'rgb' => '3a2a47'
                )
            ),

            'bottom' => array(
                'style' => PHPExcel_Style_Border::BORDER_THIN ,
                'color' => array(
                    'rgb' => '3a2a47'
                )
            )
        ),
        'alignment' =>  array(
            'horizontal'=> PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
            'vertical'  => PHPExcel_Style_Alignment::VERTICAL_CENTER,
            'wrap'      => TRUE
        )
    ));

    $objPHPExcel->getActiveSheet()->getStyle('A1:H1')->applyFromArray($estiloTituloReporte);
    $objPHPExcel->getActiveSheet()->getStyle('A3:H3')->applyFromArray($estiloTituloColumnas);
    $objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion, "A4:H".$i);

    $objPHPExcel->getActiveSheet()->getStyle('D4:G'.$i)->getNumberFormat()->applyFromArray(
        array(
            'code' => PHPExcel_Style_NumberFormat::FORMAT_CURRENCY_EUR_SIMPLE
        )
    );



    for($i = 'A'; $i <= 'H'; $i++){
        $objPHPExcel->setActiveSheetIndex(0)->getColumnDimension($i)->setAutoSize(TRUE);
    }

    // Se asigna el nombre a la hoja
    $objPHPExcel->getActiveSheet()->setTitle('Precios');

    // Se activa la hoja para que sea la que se muestre cuando el archivo se abre
    $objPHPExcel->setActiveSheetIndex(0);

    // Inmovilizar paneles
    $objPHPExcel->getActiveSheet(0)->freezePane('A4');
    $objPHPExcel->getActiveSheet(0)->freezePaneByColumnAndRow(0,5);

    //// Set Orientation, size and scaling
    $objPHPExcel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_PORTRAIT);
    $objPHPExcel->getActiveSheet()->getPageSetup()->setPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_A4);
    $objPHPExcel->getActiveSheet()->getPageSetup()->setFitToPage(true);
    $objPHPExcel->getActiveSheet()->getPageSetup()->setFitToWidth(1);
    $objPHPExcel->getActiveSheet()->getPageSetup()->setFitToHeight(0);

    // Se manda el archivo al navegador web, con el nombre que se indica, en formato 2007
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="factura.xlsx"');
    header('Cache-Control: max-age=0');

    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
    $objWriter->save('php://output');
    exit;
}
else{
    print_r('No hay resultados para mostrar');
}
?>