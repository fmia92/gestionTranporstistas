<?php
$connect = mysqli_connect ("127.0.0.1", "root") or die (mysqli_error()); // Connects to the database. 
mysqli_select_db ($connect, "hogarium_apli") or die (mysqli_error()); // Selects the database
$tildes = $connect->query("SET NAMES 'utf8'");

mysqli_query($connect, "INSERT INTO factura_old (empresa, origen, destino, peso, tasaPeso, fuel, reembolso, precioFinal, Fecha) SELECT  empresa, origen, destino, peso, tasaPeso, fuel, reembolso, precioFinal, Fecha FROM factura WHERE Fecha < DATE_FORMAT(CURDATE(), '%d-%m-%Y')");
mysqli_query($connect, "INSERT INTO factura_mayo (empresa, origen, destino, peso, tasaPeso, fuel, reembolso, precioFinal, Fecha) SELECT empresa, origen, destino, peso, tasaPeso, fuel, reembolso, precioFinal, Fecha FROM factura_old WHERE Fecha BETWEEN '01-05-2017' AND '31-05-2017'");
mysqli_query($connect, "DELETE FROM factura WHERE Fecha < DATE_FORMAT(CURDATE(), '%d-%m-%Y')");

if(isset($_POST['calcularcsv'])){
    header("location: excel.php");
}

if(isset($_POST['btnasm'])){
    @$provinciato=$_POST['provinciato'];
    @$provinciafrom=$_POST['provinciafrom'];
    @$peso = $_POST['peso'];
    @$pvasm = $_POST['pvasm'];

    @$nombreASM = $_POST['nombreASM'];
    @$finalASM = $_POST['finalasm'];
    @$fuelasm = $_POST['fuelasm'];
    @$reembolsoasm = $_POST['reembolsoasm'];
    @$tasaasm = $_POST['tasaasm'];

    if ($peso > $pvasm) {
        mysqli_query($connect, "INSERT INTO factura (empresa, origen, destino, peso, tasaPeso, fuel, reembolso, precioFinal, Fecha)
    VALUES ('$nombreASM', '$provinciafrom', '$provinciato','$peso', '$tasaasm', '$fuelasm', '$reembolsoasm','$finalASM', DATE_FORMAT(CURDATE(), '%d-%m-%Y'))");  
    } else {
        mysqli_query($connect, "INSERT INTO factura (empresa, origen, destino, peso, tasaPeso, fuel, reembolso, precioFinal, Fecha)
    VALUES ('$nombreASM', '$provinciafrom', '$provinciato','$pvasm', '$tasaasm', '$fuelasm', '$reembolsoasm','$finalASM', DATE_FORMAT(CURDATE(), '%d-%m-%Y'))");  
    }

}

if(isset($_POST['btnat'])){
    @$provinciato=$_POST['provinciato'];
    @$provinciafrom=$_POST['provinciafrom'];
    @$peso = $_POST['peso'];
    @$pvat = $_POST['pvat'];

    @$nombreAT = $_POST['nombreat'];
    @$finalAT = $_POST['finalat'];
    @$fuelat = $_POST['fuelat'];
    @$reembolsoat = $_POST['reembolsoat'];
    @$tasaat = $_POST['tasaat'];


    if ($peso > $pvat) {
        mysqli_query($connect, "INSERT INTO factura (empresa, origen, destino, peso, tasaPeso, fuel, reembolso, precioFinal, Fecha) VALUES ('$nombreAT', '$provinciafrom', '$provinciato', '$peso', '$tasaat', '$fuelat', '$reembolsoat', '$finalAT', DATE_FORMAT(CURDATE(), '%d-%m-%Y'))");  
    } else {
        mysqli_query($connect, "INSERT INTO factura (empresa, origen, destino, peso, tasaPeso, fuel, reembolso, precioFinal, Fecha) VALUES ('$nombreAT', '$provinciafrom', '$provinciato', '$pvat', '$tasaat', '$fuelat', '$reembolsoat', '$finalAT', DATE_FORMAT(CURDATE(), '%d-%m-%Y'))");  
    }

}

if(isset($_POST['btnseur'])){
    @$provinciato=$_POST['provinciato'];
    @$provinciafrom=$_POST['provinciafrom'];
    @$peso = $_POST['peso'];
    @$pvseur = $_POST['pvseur'];


    @$nombreSEUR = $_POST['nombreSEUR'];
    @$finalSEUR = $_POST['finalSEUR'];
    @$fuelseur = $_POST['fuelseur'];
    @$reembolsoseur = $_POST['reembolsoseur'];
    @$tasaseur = $_POST['tasaseur'];

    if ($peso > $pvseur) {
        mysqli_query($connect, "INSERT INTO factura (empresa, origen, destino, peso, tasaPeso, fuel, reembolso, precioFinal, Fecha) 
    VALUES ('$nombreSEUR', '$provinciafrom', '$provinciato', '$peso', '$tasaseur', '$fuelseur', '$reembolsoseur','$finalSEUR', DATE_FORMAT(CURDATE(), '%d-%m-%Y'))"); 
    } else {
        mysqli_query($connect, "INSERT INTO factura (empresa, origen, destino, peso, tasaPeso, fuel, reembolso, precioFinal, Fecha) 
    VALUES ('$nombreSEUR', '$provinciafrom', '$provinciato', '$pvseur', '$tasaseur', '$fuelseur', '$reembolsoseur','$finalSEUR', DATE_FORMAT(CURDATE(), '%d-%m-%Y'))"); 
    }

}

if(isset($_POST['btndhl'])){
    @$provinciato=$_POST['provinciato'];
    @$provinciafrom=$_POST['provinciafrom'];
    @$peso = $_POST['peso'];
    @$pvdhl = $_POST['pvdhl'];

    @$nombreDHL = $_POST['nombredhl'];
    @$finalDHL = $_POST['finaldhl'];
    @$fuelDHL = $_POST['fueldhl'];
    @$reembolsoDHL = $_POST['reembolsodhl'];
    @$tasaDHL = $_POST['tasadhl'];

    if ($peso > $pvdhl) {
        mysqli_query($connect, "INSERT INTO factura (empresa, origen, destino,peso, tasaPeso, fuel, reembolso, precioFinal, Fecha)
    VALUES ('$nombreDHL', '$provinciafrom', '$provinciato', '$peso', '$tasaDHL', '$fuelDHL', '$reembolsoDHL','$finalDHL', DATE_FORMAT(CURDATE(), '%d-%m-%Y'))"); 
    } else {
        mysqli_query($connect, "INSERT INTO factura (empresa, origen, destino,peso, tasaPeso, fuel, reembolso, precioFinal, Fecha)
    VALUES ('$nombreDHL', '$provinciafrom', '$provinciato', '$pvdhl', '$tasaDHL', '$fuelDHL', '$reembolsoDHL','$finalDHL', DATE_FORMAT(CURDATE(), '%d-%m-%Y'))"); 
    }
}

if(isset($_POST['btnredur'])){
    @$provinciato=$_POST['provinciato'];
    @$provinciafrom=$_POST['provinciafrom'];
    @$peso = $_POST['peso'];
    @$pvredur = $_POST['pvredur'];

    @$nombreREDUR = $_POST['nombreredur'];
    @$finaREDUR = $_POST['finalredur'];
    @$fuelREDUR = $_POST['fuelredur'];
    @$reembolsoREDUR = $_POST['reembolsoredur'];
    @$tasaREDUR = $_POST['tasaredur'];

    if ($peso > $pvredur) {
        mysqli_query($connect, "INSERT INTO factura (empresa, origen, destino,peso, tasaPeso, fuel, reembolso, precioFinal, Fecha) 
    VALUES ('$nombreREDUR', '$provinciafrom', '$provinciato', '$peso', '$tasaREDUR', '$fuelREDUR', '$reembolsoREDUR','$finaREDUR', DATE_FORMAT(CURDATE(), '%d-%m-%Y'))");
    } else {
        mysqli_query($connect, "INSERT INTO factura (empresa, origen, destino,peso, tasaPeso, fuel, reembolso, precioFinal, Fecha) 
    VALUES ('$nombreREDUR', '$provinciafrom', '$provinciato', '$pvredur', '$tasaREDUR', '$fuelREDUR', '$reembolsoREDUR','$finaREDUR', DATE_FORMAT(CURDATE(), '%d-%m-%Y'))");
    }

}

if(isset($_POST['pdf'])){  
    header("location: pdf.php");

}

function calcvol($numero){
    $num=$numero;

    $frac=(int)$num;

    $decimal=$num-$frac;

    $decrounded=round($decimal, 1);

    $decrounded=round($decimal, 2);

    if($decrounded>'0.09'){
        echo $frac=$frac+1;
    }else{
        if($decrounded<'0.09'){
            echo $frac;
        }
    }

}
?>

<html>

    <head>
        <title>hogarium_apli</title>
        <meta charset="utf-8">
        <meta http-equiv="content-language" content="es_ES" />
        <meta name="author" content="fsola" />
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="calculadora" />

        <link rel="icon" type="image/png" sizes="16x16" href="http://www.mueblesdeecija.com/fabricantes-muebles/wp-content/uploads/2014/08/hogarium.png">
        <link rel="manifest" href="/manifest.json">
        <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/tabla2.css" />
    </head>

    <body >
        <?php
        //oncontextmenu="return false"
        $connect = mysqli_connect ("127.0.0.1", "root") or die (mysqli_error()); // Connects to the database. 
        mysqli_select_db ($connect, "hogarium_apli") or die (mysqli_error()); // Selects the database
        $tildes = $connect->query("SET NAMES 'utf8'");

        ?>

        <!-- Form -->
        <form id="bootstrapSelectForm" method="get" class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" enctype="multipart/form-data" name="formulario">
            <fieldset>
                <div class="row " id="contenedorFormulario">
                    <div class="icon">
                        <img src="assets/img/Hogarium3.png" alt="hogarium-logo" class="img-thumbnail">
                    </div>
                    <div class="form-group from">
                        <label class="col-xs-3 control-label"><span class="fa fa-map-marker"></span>Desde</label>
                        <div class="col-xs-5 selectContainer">
                            <select name="from" id="dynamic_select" class="form-control form-control-success" >  
                                <?php
    session_start();
              if(isset($_GET['provincia']) && isset($_GET['idprovfrom'])){
                  $provincia=$_GET['provincia'];
                  $idprovfrom=$_GET['idprovfrom'];
                                ?>
                                <option value="<?php echo $_GET['idprovfrom'];?>"><?php echo $_GET['idprovfrom'].' - '.$_GET['provincia'];?></option>
                                <?php
              }else{
                  $provincia = "";
                  $idprovfrom = "";
                                ?>
                                <option value="no introducido">Selecciona una provincia</option>    
                                <?php
                  $result = mysqli_query($connect, "Select * from provincias where id_provincia = 41");
                  while ($extraido= mysqli_fetch_array($result)) {
                                ?>
                                <option value="<?php echo 'http://127.0.0.1/hogarium_apli/index.php?idprovfrom='.$extraido['id_provincia'].'&provincia='.$extraido['provincia'] ;?>">
                                    <?php 
                      echo $extraido['id_provincia']. ' - '.$extraido['provincia'];
                                    ?>
                                </option>
                                <?php
                  }
              } 
                                ?>

                            </select>
                        </div>
                    </div>
                    <div class="form-group to">
                        <label class="col-lg-3 control-label"><span class="fa fa-map-marker"></span>A</label>

                        <div class="col-xs-5 selectContainer">
                            <select name="to" id="dynamic_select3" class="form-control selectpicker" required aria-required="true">
                                <optgroup label="España-peninsular" required>
                                    <?php 
                                    if(isset($_GET['idprovto'])
                                       && isset($_GET['provinciato'])){
                                        $provinciato=$_GET['provinciato'];
                                        $idprovto=$_GET['idprovto'];

                                    ?>

                                    <option value="<?php echo $_GET['idprovto'];?>"><?php echo $_GET['idprovto'].' - '.$_GET['provinciato'];?></option>
                                    <?php
                                    }else{
                                        $provincia = "";
                                        $idprovfrom = "";
                                    ?>
                                    <option value="no introducido">Selecciona una provincia</option>    
                                    <?php
                                        $result = mysqli_query($connect, "Select * from provincias where cod_com_autonoma NOT IN (4,5,18,19)");

                                        while ($extraido= mysqli_fetch_array($result)) {
                                    ?>
                                    <option value="<?php echo 'http://127.0.0.1/hogarium_apli/index.php?idprovfrom='.$_GET['idprovfrom'].'&provincia='.$_GET['provincia'].'&idprovto='.$extraido['id_provincia'].'&provinciato='.$extraido['provincia'] ;?>">
                                        <?php 
                                            echo $extraido['id_provincia']. ' - '.$extraido['provincia'];
                                        ?>
                                    </option>
                                    <?php
                                        }
                                    }
                                    ?>
                                </optgroup>

                                <optgroup label="España - Islas Baleares">

                                    <?php 
                                    if(isset($_GET['idprovfrom']) 
                                       && isset($_GET['provincia'])
                                       && isset($_GET['idprovto'])
                                       && isset($_GET['provinciato'])){
                                        $provinciato=$_GET['provinciato'];
                                        $idprovto=$_GET['idprovto'];

                                    ?>

                                    <option value="<?php echo $_GET['idprovto'];?>"><?php echo $_GET['idprovto'].' - '.$_GET['provinciato'];?></option>
                                    <?php
                                    }else{
                                        $provincia = "";
                                        $idprovfrom = "";
                                        $result = mysqli_query($connect, "Select * from provincias where cod_com_autonoma IN (4)");
                                        //mysqli_data_seek ($result, 0);

                                        while ($extraido= mysqli_fetch_array($result)) {
                                    ?>
                                    <option value="<?php echo str_replace(" ","%20",'http://127.0.0.1/hogarium_apli/index.php?idprovfrom='.$_GET['idprovfrom'].'&provincia='.$_GET['provincia'].'&idprovto='.$extraido['id_provincia'].'&provinciato='.$extraido['provincia']) ;?>">
                                        <?php 
                                            echo $extraido['id_provincia']. ' - '.$extraido['provincia'];
                                        ?>
                                    </option>
                                    <?php
                                        }
                                    }
                                    ?>

                                </optgroup>

                                <optgroup  label="España - Islas Canarias">
                                    <?php 
                                    if(isset($_GET['idprovfrom']) 
                                       && isset($_GET['provincia'])
                                       && isset($_GET['idprovto'])
                                       && isset($_GET['provinciato'])){
                                        $provinciato=$_GET['provinciato'];
                                        $idprovto=$_GET['idprovto'];
                                    ?>

                                    <option value="<?php echo $_GET['idprovto'];?>"><?php echo $_GET['idprovto'].' - '.$_GET['provinciato'];?></option>
                                    <?php
                                    }else{
                                        $provinciato="";
                                        $idprovto="";

                                        $result = mysqli_query($connect, "Select * from provincias where cod_com_autonoma IN (5)");
                                        //mysqli_data_seek ($result, 0);

                                        while ($extraido= mysqli_fetch_array($result)) {
                                    ?>
                                    <option value="<?php echo 'http://127.0.0.1/hogarium_apli/index.php?idprovfrom='.$_GET['idprovfrom'].'&provincia='.$_GET['provincia'].'&idprovto='.$extraido['id_provincia'].'&provinciato='.$extraido['provincia'] ;?>">
                                        <?php 
                                            echo $extraido['id_provincia']. ' - '.$extraido['provincia'];
                                        ?>
                                    </option>
                                    <?php
                                        }
                                    }
                                    ?>
                                </optgroup>

                                <optgroup  label="España - Ceuta y Melilla">
                                    <?php 
                                    if(isset($_GET['idprovfrom']) 
                                       && isset($_GET['provincia'])
                                       && isset($_GET['idprovto'])
                                       && isset($_GET['provinciato'])){
                                        $provinciato=$_GET['provinciato'];
                                        $idprovto=$_GET['idprovto'];

                                    ?>

                                    <option value="<?php echo $_GET['idprovto'];?>"><?php echo $_GET['idprovto'].' - '.$_GET['provinciato'];?></option>
                                    <?php
                                    }else{

                                        $provinciato="";
                                        $idprovto="";
                                        $result = mysqli_query($connect, "Select * from provincias where cod_com_autonoma IN (18,19)");
                                        //mysqli_data_seek ($result, 0);

                                        while ($extraido= mysqli_fetch_array($result)) {
                                    ?>
                                    <option value="<?php echo 'http://127.0.0.1/hogarium_apli/index.php?idprovfrom='.$_GET['idprovfrom'].'&provincia='.$_GET['provincia'].'&idprovto='.$extraido['id_provincia'].'&provinciato='.$extraido['provincia'] ;?>">
                                        <?php 
                                            echo $extraido['id_provincia']. ' - '.$extraido['provincia'];
                                        ?>
                                    </option>
                                    <?php
                                        }
                                    }
                                    ?>

                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <input type="hidden" name="idprovfrom" value="<?php echo $idprovfrom;?>">
                    <input type="hidden" name="provincia" value="<?php echo $provincia;?>">
                    <input type="hidden" name="idprovto" value="<?php echo $idprovto;?>">
                    <input type="hidden" name="provinciato" value="<?php echo $provinciato;?>">

                    <!-- Buttons -->
                    <div class="input-group input-group1">
                        <div class="col-lg-3">
                            <label for="inputSuccess" class="form-control-label">Peso
                                <div class="input-group-lg has-success">
                                    <input class="form-control form-control-success" id="inputSuccess" type= "text"
                                           name="peso" placeholder="introduce un valor" required autofocus  min="1">    
                                    <span class="input-group-addon" id="basic-addon3">kg</span>

                                </div>
                            </label><br>
                        </div>
                        <div class="col-lg-2">
                            <label for="inputSuccess4" class="form-control-label">Largo
                                <div class="input-group-lg has-success">
                                    <input class="form-control form-control-success" id="inputSuccess4" type= "text"
                                           name="largo" placeholder="introduce un valor" required autofocus  min="1">
                                    <span class="input-group-addon" id="basic-addon3">cm</span>
                                </div>
                            </label><br>
                        </div>
                        <div class="col-lg-2">
                            <label for="inputSuccess3" class="form-control-label">Ancho
                                <div class=" input-group-lg has-success">
                                    <input class="form-control form-control-success" id="inputSuccess3" type= "text"
                                           name="ancho" placeholder="introduce un valor" required autofocus  min="1">
                                    <span class="input-group-addon" id="basic-addon3">cm</span>
                                </div>
                            </label><br>
                        </div>
                        <div class="col-lg-2">
                            <label for="inputSuccess2" class="form-control-label">Alto
                                <div class="input-group-lg has-success">
                                    <input class="form-control form-control-success" id="inputSuccess2" type= "text"
                                           name="alto" placeholder="introduce un valor" required autofocus  min="1">
                                    <span class="input-group-addon" id="basic-addon3">cm</span>
                                </div>
                            </label><br>
                        </div>

                        <div class="col-lg-3" style="padding-right: 30px;">
                            <label for="inputSuccess4" class="form-control-label">Reembolso
                                <div class=" input-group-lg has-success">
                                    <input class="form-control form-control-success" id="inputSuccess5" type= "text"
                                           name="reembolso" placeholder="introduce un valor" min="1">
                                    <span class="input-group-addon" id="basic-addon3">€</span>
                                </div>
                            </label><br>
                        </div>
                    </div>
                    <div class="btn-group btn-group-sm">
                        <button type="submit" class="btn btn-success btn-calc">Calcular</button>
                        <button type="reset" class=" btn btn-danger btn-trash" onclick="location.href='logout.php';">Borrar datos</button>
                        <button type="button" class="btn btn-default btn-lock" onclick="location.href='lockscreen.php';"> Bloquear Pantalla</button>
                        <button type="button" class="btn  btn-info btn-circle" id="add2"><span class="fa fa-plus" ></span></button>

                    </div>
                </div>
            </fieldset>
        </form>
        <div class="clearfix"></div>
        <!-- Tablas -->
        <div class="col-lg-12 col-sm-12 col-xs-6">
            <?php 
            require_once ('tablas.php');
            ?>
            <div class="form-horizontal">
                <form id="bootstrapSelectForm" method="post" class="form-horizontal" action="<?php $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
                    <input type="hidden" name="provinciafrom" value="<?php echo $provincia; ?>">
                    <input type="hidden" name="provinciato" value="<?php echo $provinciato; ?>">
                    <div class="btn-group btn-group-md">
                        <button class="btn btn-success btn-excell" type="submit" name="calcularcsv">Excel</button>
                        <button id="pdf" class="btn btn-danger btn-pdf" name="pdf">pdf</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="footer">
            <p class="text-muted"><span class="fa fa-copyright"></span> <?php echo date('Y') ?>  Habitum Hogar. All Rights Reserved | Design by fsola </p>
            <button class="btn btn-sm btn-success" onclick="location.href='excel_mensual.php';"><span class="fa fa-file-excel-o"></span></button>
            <button class="btn btn-sm btn-danger" onclick="location.href='pdf_mensual.php';"><span class="fa fa-file-pdf-o"></span></button>
        </div>

        <script src="assets/jquery.min.js"></script>

        <!-- Core Scripts - Include with every page -->
        <script src="assets/plugins/jquery-1.10.2.js"></script>
        <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>

        <!-- Page-Level Plugin Scripts-->
        <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
        <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function() {
                $('#dataTables-example').dataTable();
            });

        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#add2").click(function() {
                    $('div.input-group1').each(function() {
                        for (var i = 6; i > 1; i--) {

                            $(this).after('<div class="input-group' + i + '"><div class="col-lg-3"><label for="inputSuccess" class="form-control-label">Peso<div class="input-group input-group-lg has-success"><input class="form-control form-control-success" id="inputSuccess" type= "text" name="peso' + i + '" placeholder="introduce un valor"  autofocus  min="0"><span class="input-group-addon" id="basic-addon3">kg</span></div></label></div><div class="col-lg-2"><label for="inputSuccess4" class="form-control-label">Largo<div class="input-group input-group-lg has-success"><input class="form-control form-control-success" id="inputSuccess4" type= "text"name="largo' + i + '" placeholder="introduce un valor"  autofocus  min="0"><span class="input-group-addon" id="basic-addon3">cm</span></div></label><br></div><div class="col-lg-2"><label for="inputSuccess3" class="form-control-label">Ancho<div class="input-group input-group-lg has-success"><input class="form-control form-control-success" id="inputSuccess3" type= "text"name="ancho' + i + '" placeholder="introduce un valor"  autofocus  min="0"><span class="input-group-addon" id="basic-addon3">cm</span></div></label><br></div><div class="col-lg-2"><label for="inputSuccess2" class="form-control-label">Alto<div class="input-group input-group-lg has-success has-feedback"><input class="form-control form-control-success" id="inputSuccess2" type= "text" name="alto' + i + '" placeholder="introduce un valor"  autofocus  min="0"><span class="input-group-addon" id="basic-addon3">cm</span></div></label><br></div><div class="col-lg-3" style="padding-right: 30px;"><label for="inputSuccess4" class="form-control-label">Reembolso<div class="input-group input-group-lg has-success"><input class="form-control form-control-success" id="inputSuccess5" type= "text" name="reembolso' + i + '" placeholder="introduce un valor" min="0"><span class="input-group-addon" id="basic-addon3">€</span></div></label><br></div> </div><br>');
                        }
                    });
                });
            });

        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.form-control').focus(function() {
                    $(this).css("border-color", "green");
                })
            })

        </script>

        <script type="text/javascript">
            $(function() {
                // bind change event to select
                $('#dynamic_select').on('change', function() {
                    var url = $(this).val(); // REQUEST selected value
                    if (url) { // require a URL
                        window.location = url; // redirect
                    }
                    return false;
                });
            });

        </script>
        <script type="text/javascript">
            $(function() {
                // bind change event to select
                $('#dynamic_select2').on('change', function() {
                    var url = $(this).val(); // REQUEST selected value
                    if (url) { // require a URL
                        window.location = url; // redirect
                    }
                    return false;
                });
            });

        </script>
        <script type="text/javascript">
            $(function() {
                // bind change event to select
                $('#dynamic_select3').on('change', function() {
                    var url = $(this).val(); // REQUEST selected value
                    if (url) { // require a URL
                        window.location = url; // redirect
                    }
                    return false;
                });
            });

        </script>
        <script type="text/javascript">
            $(function() {
                // bind change event to select
                $('#dynamic_select4').on('change', function() {
                    var url = $(this).val(); // REQUEST selected value
                    if (url) { // require a URL
                        window.location = url; // redirect
                    }
                    return false;
                });
            });

        </script>
        <script>
            var close = document.getElementsByClassName("closebtn");
            var i;

            for (i = 0; i < close.length; i++) {
                close[i].onclick = function(){
                    var div = this.parentElement;
                    div.style.opacity = "0";
                    setTimeout(function(){ div.style.display = "none"; }, 600);
                }
            }
        </script>
    </body>
</html>
