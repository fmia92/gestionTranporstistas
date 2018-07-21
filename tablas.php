<?php
function validate($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = strip_tags  ($data);
    return $data;
}
error_reporting(E_ALL ^ E_NOTICE);

if (isset($_GET['idprovfrom'])) {
    $idprovfrom = validate($_GET['idprovfrom']);
} else {
    $idprovfrom = "";
}
$provincia = validate($_GET['provincia']);
$idprovto = validate($_GET['idprovto']);
$provinciato = validate($_GET['provinciato']);


$alto = validate($_GET['alto']);
$alto2 = validate($_GET['alto2']);
$alto3 = validate($_GET['alto3']);
$alto4 = validate($_GET['alto4']);
$alto5 = validate($_GET['alto5']);
$alto6 = validate($_GET['alto6']);

if (!is_numeric($alto) && !empty($alto)) {
?>
<div class="alert-danger">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <strong>ERROR!</strong> El alto 1 debe ser un numero
</div>
<?php 
} 
if (!is_numeric($alto2) && !empty($alto2)) {
?>
<div class="alert-danger">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <strong>ERROR!</strong> El alto 2 debe ser un numero
</div>
<?php 
}
if (!is_numeric($alto3) && !empty($alto3)) {
?>
<div class="alert-danger">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <strong>ERROR!</strong> El alto 3 debe ser un numero
</div>
<?php 
}
if (!is_numeric($alto4) && !empty($alto4)) {
?>
<div class="alert-danger">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <strong>ERROR!</strong> El alto 4 debe ser un numero
</div>
<?php 
}
if (!is_numeric($alto5) && !empty($alto5)) {
?>
<div class="alert-danger">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <strong>ERROR!</strong> El alto 5 debe ser un numero
</div>
<?php 
}
if (!is_numeric($alto6) && !empty($alto6)) {
?>
<div class="alert-danger">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <strong>ERROR!</strong> El alto 6 debe ser un numero
</div>
<?php 
}

$ancho = validate($_GET['ancho']);
$ancho2 = validate($_GET['ancho2']);
$ancho3 = validate($_GET['ancho3']);
$ancho4 = validate($_GET['ancho4']);
$ancho5 = validate($_GET['ancho5']);
$ancho6 = validate($_GET['ancho6']);

if (!is_numeric($ancho) && !empty($ancho)) {
?>
<div class="alert-danger">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <strong>ERROR!</strong> El ancho 1 debe ser un numero
</div>
<?php 
} 
if (!is_numeric($ancho2) && !empty($ancho2)) {
?>
<div class="alert-danger">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <strong>ERROR!</strong> El ancho 2 debe ser un numero
</div>
<?php 
} 
if (!is_numeric($ancho3) && !empty($ancho3)) {
?>
<div class="alert-danger">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <strong>ERROR!</strong> El ancho 3 debe ser un numero
</div>
<?php 
} 
if (!is_numeric($ancho4) && !empty($ancho4)) {
?>
<div class="alert-danger">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <strong>ERROR!</strong> El ancho 4 debe ser un numero
</div>
<?php 
} 
if (!is_numeric($ancho5) && !empty($ancho5)) {
?>
<div class="alert-danger">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <strong>ERROR!</strong> El ancho 5 debe ser un numero
</div>
<?php 
} 
if (!is_numeric($ancho6) && !empty($ancho6)) {
?>
<div class="alert-danger">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <strong>ERROR!</strong> El ancho 6 debe ser un numero
</div>
<?php 
} 


$largo = validate($_GET['largo']);
$largo2 = validate($_GET['largo2']);
$largo3 = validate($_GET['largo3']);
$largo4 = validate($_GET['largo4']);
$largo5 = validate($_GET['largo5']);
$largo6 = validate($_GET['largo6']);

if (!is_numeric($largo) && !empty($largo)) {
?>
<div class="alert-danger">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <strong>ERROR!</strong> El largo 1 debe ser un numero
</div>
<?php 
} 

if (!is_numeric($largo2) && !empty($largo2)) {
?>
<div class="alert-danger">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <strong>ERROR!</strong> El largo 2 debe ser un numero
</div>
<?php 
} 

if (!is_numeric($largo3) && !empty($largo3)) {
?>
<div class="alert-danger">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <strong>ERROR!</strong> El largo 3 debe ser un numero
</div>
<?php 
} 

if (!is_numeric($largo4) && !empty($largo4)) {
?>
<div class="alert-danger">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <strong>ERROR!</strong> El largo 4 debe ser un numero
</div>
<?php 
} 

if (!is_numeric($largo5) && !empty($largo5)) {
?>
<div class="alert-danger">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <strong>ERROR!</strong> El largo 5 debe ser un numero
</div>
<?php 
} 

if (!is_numeric($largo6) && !empty($largo6)) {
?>
<div class="alert-danger">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <strong>ERROR!</strong> El largo 6 debe ser un numero
</div>
<?php 
} 

$peso = validate($_GET['peso']);
$peso2 = validate($_GET['peso2']);
$peso3 = validate($_GET['peso3']);
$peso4 = validate($_GET['peso4']);
$peso5 = validate($_GET['peso5']);
$peso6 = validate($_GET['peso6']);

if (!is_numeric($peso) && !empty($peso)) {
?>
<div class="alert-danger">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <strong>ERROR!</strong> El peso 1 debe ser un numero
</div>
<?php 
} 
if (!is_numeric($peso2) && !empty($peso2)) {
?>
<div class="alert-danger">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <strong>ERROR!</strong> El peso 2 debe ser un numero
</div>
<?php 
} 
if (!is_numeric($peso3) && !empty($peso3)) {
?>
<div class="alert-danger">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <strong>ERROR!</strong> El peso 3 debe ser un numero
</div>
<?php 
} 
if (!is_numeric($peso4) && !empty($peso4)) {
?>
<div class="alert-danger">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <strong>ERROR!</strong> El peso 4 debe ser un numero
</div>
<?php 
} 
if (!is_numeric($peso5) && !empty($peso5)) {
?>
<div class="alert-danger">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <strong>ERROR!</strong> El peso 5 debe ser un numero
</div>
<?php 
} 
if (!is_numeric($peso6) && !empty($peso6)) {
?>
<div class="alert-danger">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <strong>ERROR!</strong> El peso 6 debe ser un numero
</div>
<?php 
} 

$reembolso = validate($_GET['reembolso']);
$reembolso2 = validate($_GET['reembolso2']);
$reembolso3 = validate($_GET['reembolso3']);
$reembolso4 = validate($_GET['reembolso4']);
$reembolso5 = validate($_GET['reembolso5']);
$reembolso6 = validate($_GET['reembolso6']);

if (!is_numeric($reembolso) && !empty($reembolso)) {
?>
<div class="alert-danger">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <strong>ERROR!</strong> El reembolso 1 debe ser un numero
</div>
<?php 
} 
if (!is_numeric($reembolso2) && !empty($reembolso2)) {
?>
<div class="alert-danger">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <strong>ERROR!</strong> El reembolso 2 debe ser un numero
</div>
<?php
} 
if (!is_numeric($reembolso3) && !empty($reembolso3)) {
?>
<div class="alert-danger">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <strong>ERROR!</strong> El reembolso 3 debe ser un numero
</div>
<?php
} 
if (!is_numeric($reembolso4) && !empty($reembolso4)) {
?>
<div class="alert-danger">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <strong>ERROR!</strong> El reembolso 4 debe ser un numero
</div>
<?php
} 
if (!is_numeric($reembolso5) && !empty($reembolso5)) {
?>
<div class="alert-danger">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <strong>ERROR!</strong> El reembolso 5 debe ser un numero
</div>
<?php
} 
if (!is_numeric($reembolso6) && !empty($reembolso6)) {
?>
<div class="alert-danger">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <strong>ERROR!</strong> El reembolso 6 debe ser un numero
</div>
<?php
} 

$idcodaut=mysqli_query($connect, "SELECT cod_com_autonoma FROM provincias WHERE id_provincia = '$idprovto'");
$idcodautAr=mysqli_fetch_array($idcodaut);

/* multibulto */
if (!empty($peso) && empty($peso2) && empty($peso3) && empty($peso4) && empty($peso5) && empty($peso6)) {
    $peso = $peso;
} elseif(!empty($peso) && !empty($peso2) && !empty($peso3) && !empty($peso4) && !empty($peso5) && !empty($peso7)){
    $peso = $peso + $peso2 + $peso3 + $peso4 + $peso5;
}
?>
<div class="container-fluid">
    <div>
        <h1>Precio Por empresas</h1>
    </div>
    <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
        <input type="hidden" name="provinciafrom" value="<?php echo $provincia; ?>">
        <input type="hidden" name="provinciato" value="<?php echo $provinciato; ?>">
        <input type="hidden" name="peso" value="<?php echo $peso; ?>">


        <div class="row-fluid">
            <!--ASM -->
            <div class="span2 tiny ">
                <!-- Inicio div tiny -->
                <div class="pricing-table-header-tiny">
                    <!-- Inicio tiny-header -->
                    <div id="tasa/peso">
                        <h4>

                            <?php
                            if (empty($largo2) && empty($ancho2) && empty($alto2)
                                && empty($largo3) && empty($ancho3) && empty($alto3)
                                &&empty($largo4) && empty($ancho4) && empty($alto4)
                                && empty($largo5) && empty($ancho5) && empty($alto5)
                                && empty($largo6) && empty($ancho6) && empty($alto6)) {
                                $pvasm = $largo * $ancho * $alto * 167 / 1000000;

                            } elseif (!empty($largo2) && !empty($ancho2) && !empty($alto2)
                                      && empty($largo3) && empty($ancho3) && empty($alto3)
                                      && empty($largo4) && empty($ancho4) && empty($alto4)
                                      && empty($largo5) && empty($ancho5) && empty($alto5)
                                      && empty($largo6) && empty($ancho6) && empty($alto6)) {

                                $pvasm = $largo * $ancho * $alto * 167 / 1000000;
                                $pvasm2 = $largo2 * $ancho2 * $alto2 * 167 / 1000000;
                                $pvasm = $pvasm + $pvasm2;

                            } elseif (!empty($largo2) && !empty($ancho2) && !empty($alto2)
                                      && !empty($largo3) && !empty($ancho3) && !empty($alto3)
                                      && empty($largo4) && empty($ancho4) && empty($alto4)
                                      && empty($largo5) && empty($ancho5) && empty($alto5)
                                      && empty($largo6) && empty($ancho6) && empty($alto6)) {

                                $pvasm = $largo * $ancho * $alto * 167 / 1000000;
                                $pvasm2 = $largo2 * $ancho2 * $alto2 * 167 / 1000000;
                                $pvasm3 = $largo3 * $ancho3 * $alto3 * 167 / 1000000;
                                $pvasm = $pvasm + $pvasm2 +$pvasm3;

                            } elseif (!empty($largo2) && !empty($ancho2) && !empty($alto2)
                                      && !empty($largo3) && !empty($ancho3) && !empty($alto3)
                                      && !empty($largo4) && !empty($ancho4) && !empty($alto4)
                                      && empty($largo5) && empty($ancho5) && empty($alto5)
                                      && empty($largo6) && empty($ancho6) && empty($alto6)) {
                                $pvasm = $largo * $ancho * $alto * 167 / 1000000;
                                $pvasm2 = $largo2 * $ancho2 * $alto2 * 167 / 1000000;
                                $pvasm3 = $largo3 * $ancho3 * $alto3 * 167 / 1000000;
                                $pvasm4 = $largo4 * $ancho4 * $alto4 * 167 / 1000000;
                                $pvasm = $pvasm + $pvasm2 + $pvasm3 + $pvasm4;

                            } elseif (!empty($largo2) && !empty($ancho2) && !empty($alto2)
                                      && !empty($largo3) && !empty($ancho3) && !empty($alto3)
                                      && !empty($largo4) && !empty($ancho4) && !empty($alto4)
                                      && !empty($largo5) && !empty($ancho5) && !empty($alto5)
                                      && empty($largo6) && empty($ancho6) && empty($alto6)) {
                                $pvasm = $largo * $ancho * $alto * 167 / 1000000;
                                $pvasm2 = $largo2 * $ancho2 * $alto2 * 167 / 1000000;
                                $pvasm3 = $largo3 * $ancho3 * $alto3 * 167 / 1000000;
                                $pvasm4 = $largo4 * $ancho4 * $alto4 * 167 / 1000000;
                                $pvasm5 = $largo5 * $ancho5 * $alto5 * 167 / 1000000;
                                $pvasm = $pvasm + $pvasm2 + $pvasm3 + $pvasm4 + $pvasm5;

                            }  elseif (!empty($largo2) && !empty($ancho2) && !empty($alto2)
                                       && !empty($largo3) && !empty($ancho3) && !empty($alto3)
                                       && !empty($largo4) && !empty($ancho4) && !empty($alto4)
                                       && !empty($largo5) && !empty($ancho5) && !empty($alto5)
                                       && !empty($largo6) && !empty($ancho6) && !empty($alto6)) {
                                $pvasm = $largo * $ancho * $alto * 167 / 1000000;
                                $pvasm2 = $largo2 * $ancho2 * $alto2 * 167 / 1000000;
                                $pvasm3 = $largo3 * $ancho3 * $alto3 * 167 / 1000000;
                                $pvasm4 = $largo4 * $ancho4 * $alto4 * 167 / 1000000;
                                $pvasm5 = $largo5 * $ancho5 * $alto5 * 167 / 1000000;
                                $pvasm6 = $largo6 * $ancho6 * $alto6 * 167 / 1000000;

                                $pvasm = $pvasm + $pvasm2 + $pvasm3 + $pvasm4 + $pvasm5 + $pvasm6;
                            }
                            ?>
                            <input type="hidden" name="pvasm" value="<?php echo $pvasm; ?>">
                            <?php
                            $pesotasaASM = 0;                                                 
                            if($peso>$pvasm){    
                                $pesosMayoresASM = round($peso - 20);
                                echo calcvol($peso);
                                echo "<br>";
                                if($idprovto==41){
                                    echo "CALCULO PARA SEVILLA";
                                    echo "<br>";
                                    if($peso>0 && $peso<1.1){
                                        $pesotasaASM=3.14;
                                        echo "Tasa + PESO ASM ".$pesotasaASM." €";
                                        echo "<br>";
                                    }
                                    elseif($peso>=1.1 && $peso<3.1){
                                        $pesotasaASM=3.20;
                                        echo "Tasa + PESO ASM ".$pesotasaASM.' €';
                                        echo "<br>";            
                                    }
                                    elseif($peso>=3.1 && $peso<5.1){
                                        $pesotasaASM=3.30;
                                        echo "Tasa + PESO ASM ".$pesotasaASM.' €';
                                        echo "<br>";            
                                    }
                                    else if($peso>=5.1 && $peso<10.1){
                                        $pesotasaASM=3.45;
                                        echo "Tasa + PESO ASM ".$pesotasaASM.' €';
                                        echo "<br>";            
                                    }
                                    elseif($peso>=10.1 && $peso<15.1){
                                        $pesotasaASM=3.70;
                                        echo "Tasa + PESO ASM ".$pesotasaASM.' €';
                                        echo "<br>";            
                                    }
                                    elseif($peso>=15.1 && $peso<20.1){
                                        $pesotasaASM=3.30;
                                        echo "Tasa + PESO ASM ".$pesotasaASM.' €';
                                        echo "<br>";            
                                    }
                                    elseif($peso>=20.1){
                                        $pesotasaASM= 4.30 + ($pesosMayoresASM * 0.20);
                                        echo $pesosMayoresASM;
                                        echo "<br>";
                                        echo "Tasa + PESO ASM ".number_format($pesotasaASM, 2).' €';
                                        echo "<br>";            
                                    }
                                }elseif ($idcodautAr[0]==1){
                                    echo "CALCULO REGIONAL";
                                    echo "<br>";
                                    if($peso>0 && $peso<1.1){
                                        $pesotasaASM=3.35;
                                        echo "Tasa + PESO ASM ".$pesotasaASM.' €';
                                        echo "<br>";
                                    }
                                    elseif($peso>=1.1 && $peso<3.1){
                                        $pesotasaASM=3.54;
                                        echo "Tasa + PESO ASM ".$pesotasaASM.' €';
                                        echo "<br>";            
                                    }
                                    elseif($peso>=3.1 && $peso<5.1){
                                        $pesotasaASM=3.60;
                                        echo "Tasa + PESO ASM ".$pesotasaASM.' €';
                                        echo "<br>";            
                                    }   
                                    elseif($peso>=5.1 && $peso<10.1){
                                        $pesotasaASM=3.90;
                                        echo "Tasa + PESO ASM ".$pesotasaASM.' €';
                                        echo "<br>";            
                                    }
                                    elseif($peso>=10.1 && $peso<15.1){
                                        $pesotasaASM=4.90;
                                        echo "Tasa + PESO ASM ".$pesotasaASM.' €';
                                        echo "<br>";            
                                    }           
                                    elseif($peso>=15.1 && $peso<20.1){
                                        $pesotasaASM=5.50;
                                        echo "Tasa + PESO ASM ".$pesotasaASM.' €';
                                        echo "<br>";            
                                    }   
                                    elseif($peso>=20.1){
                                        $pesotasaASM= 5.50 + ($pesosMayoresASM * 0.25);
                                        echo $pesosMayoresASM;
                                        echo "<br>";
                                        echo "Tasa + PESO ASM ".number_format($pesotasaASM, 2).' €';
                                        echo "<br>";            
                                    }   
                                } elseif ($idprovto == 7) {
                                    echo "CALCULO BALEARES";
                                    $pesosMayoresASM = round($peso - 1);
                                    echo $pesosMayoresASM;
                                    echo "<br>";
                                    if ($peso < 1.1) {
                                        $pesotasaASM = 12;
                                        echo $pesotasaASM. ' €';
                                    } elseif ($peso > 1.1) {
                                        $pesotasaASM = 12 + ($pesosMayoresASM * 2.65); 

                                    }
                                } else{
                                    echo "CALCULO PENINSULAR";
                                    echo "<br>";
                                    if($peso>0 && $peso<1.1){
                                        $pesotasaASM=3.50;
                                        echo "Tasa + PESO ASM ".$pesotasaASM.' €';
                                        echo "<br>";
                                    }
                                    elseif($peso>=1.1 && $peso<3.1){
                                        $pesotasaASM=3.70;
                                        echo "Tasa + PESO ASM ".$pesotasaASM.' €';
                                        echo "<br>";            
                                    }
                                    elseif($peso>=3.1 && $peso<5.1){
                                        $pesotasaASM=4.05;
                                        echo "Tasa + PESO ASM ".$pesotasaASM.' €';
                                        echo "<br>";            
                                    }   
                                    elseif($peso>=5.1 && $peso<10.1){
                                        $pesotasaASM=4.30;
                                        echo "Tasa + PESO ASM ".$pesotasaASM.' €';
                                        echo "<br>";            
                                    }
                                    elseif($peso>=10.1 && $peso<15.1){
                                        $pesotasaASM=5.15;
                                        echo "Tasa + PESO ASM ".$pesotasaASM.' €';
                                        echo "<br>";            
                                    }           
                                    elseif($peso>=15.1 && $peso<20.1){
                                        $pesotasaASM=7.00;
                                        echo "Tasa + PESO ASM ".$pesotasaASM.' €';
                                        echo "<br>";            
                                    }   
                                    elseif($peso>=20.1){
                                        $pesotasaASM= 7.00 + ($pesosMayoresASM * 0.28);
                                        echo "Tasa + PESO ASM ".number_format($pesotasaASM, 2).' €';
                                        echo "<br>";            
                                    }                           
                                } 

                            } elseif ($peso<$pvasm){
                                $pesosMayoresASM = round($pvasm - 20);
                                echo calcvol($pvasm);
                                echo "<br>";
                                if($idprovto==41){
                                    echo "CALCULO PARA SEVILLA";
                                    echo "<br>";
                                    if($pvasm>0 && $pvasm<1.1){
                                        $pesotasaASM=3.14;
                                        echo "Tasa + PESO ASM ".$pesotasaASM." €";
                                        echo "<br>";
                                    }
                                    elseif($pvasm>=1.1 && $pvasm<3.1){
                                        $pesotasaASM=3.20;
                                        echo "Tasa + PESO ASM ".$pesotasaASM.' €';
                                        echo "<br>";            
                                    }
                                    elseif($pvasm>=3.1 && $pvasm<5.1){
                                        $pesotasaASM=3.30;
                                        echo "Tasa + PESO ASM ".$pesotasaASM.' €';
                                        echo "<br>";            
                                    }
                                    elseif($pvasm>=5.1 && $pvasm<10.1){
                                        $pesotasaASM=3.45;
                                        echo "Tasa + PESO ASM ".$pesotasaASM.' €';
                                        echo "<br>";            
                                    }
                                    elseif($pvasm>=10.1 && $pvasm<15.1 ){
                                        $pesotasaASM=3.70;
                                        echo "Tasa + PESO ASM ".$pesotasaASM.' €';
                                        echo "<br>";            
                                    }
                                    elseif($pvasm>=15.1 && $pvasm<20.1){
                                        $pesotasaASM=4.30;
                                        echo "Tasa + PESO ASM ".$pesotasaASM.' €';
                                        echo "<br>";            
                                    }
                                    elseif($pvasm>=20.1){
                                        $pesotasaASM=4.30 + ( $pesosMayoresASM * 0.20);
                                        echo $pesosMayoresASM;
                                        echo "<br>";
                                        echo "Tasa + PESO ASM ".number_format($pesotasaASM, 2).' €';
                                        echo "<br>";            
                                    }
                                }elseif ($idcodautAr[0]==1){
                                    echo "CALCULO REGIONAL";
                                    echo "<br>";
                                    if($pvasm>0 && $pvasm<1.1){
                                        $pesotasaASM=3.35;
                                        echo "Tasa + PESO ASM ".$pesotasaASM.' €';
                                        echo "<br>";
                                    }
                                    elseif($pvasm>=1.1 && $pvasm<3.1){
                                        $pesotasaASM=3.54;
                                        echo "Tasa + PESO ASM ".$pesotasaASM.' €';
                                        echo "<br>";            
                                    }
                                    elseif($pvasm>=3.1 && $pvasm<5.1){
                                        $pesotasaASM=3.60;
                                        echo "Tasa + PESO ASM ".$pesotasaASM.' €';
                                        echo "<br>";            
                                    }   
                                    elseif($pvasm>=5.1 && $pvasm<10.1){
                                        $pesotasaASM=3.90;
                                        echo "Tasa + PESO ASM ".$pesotasaASM.' €';
                                        echo "<br>";            
                                    }
                                    elseif($pvasm>=10.1 && $pvasm<15.1){
                                        $pesotasaASM=4.90;
                                        echo "Tasa + PESO ASM ".$pesotasaASM.' €';
                                        echo "<br>";            
                                    }           
                                    elseif($pvasm>=15.1 && $pvasm<20.1){
                                        $pesotasaASM=5.50;
                                        echo "Tasa + PESO ASM ".$pesotasaASM.' €';
                                        echo "<br>";            
                                    }   
                                    elseif($pvasm>=20.1){
                                        $pesotasaASM= 5.50 + ($pesosMayoresASM * 0.25);
                                        echo $pesosMayoresASM;
                                        echo "<br>";
                                        echo "Tasa + PESO ASM ".number_format($pesotasaASM, 2).' €';
                                        echo "<br>";            
                                    }       
                                } elseif ($idprovto == 7) {
                                    echo "CALCULO BALEARES";
                                    echo "<br>";
                                    $pesosMayoresASM = round($pvasm - 1);
                                    echo $pesosMayoresASM;
                                    echo "<br>";
                                    if ($pvasm < 1) {
                                        $pesotasaASM = 12;
                                        echo $pesotasaASM. ' €';
                                    } elseif ($pvasm > 1) {
                                        $pesotasaASM = 12.00 + ($pesosMayoresASM * 2.65); 
                                        echo number_format($pesotasaASM, 2). ' €';
                                    }
                                } else{
                                    echo "CALCULO PENINSULAR";
                                    echo "<br>";
                                    if($pvasm>0 && $pvasm<=1){
                                        $pesotasaASM =3.50;
                                        echo "Tasa + PESO ASM ".$pesotasaASM.' €';
                                        echo "<br>";
                                    }
                                    elseif($pvasm>=1.1 && $pvasm<3.1){
                                        $pesotasaASM =3.70;
                                        echo "Tasa + PESO ASM ".$pesotasaASM.' €';
                                        echo "<br>";            
                                    }
                                    elseif($pvasm>=3.1 && $pvasm<5.1){
                                        $pesotasaASM =4.05;
                                        echo "Tasa + PESO ASM ".$pesotasaASM.' €';
                                        echo "<br>";            
                                    }   
                                    elseif($pvasm>=5.1 && $pvasm<10.1){
                                        $pesotasaASM =4.30;
                                        echo "Tasa + PESO ASM ".$pesotasaASM.' €';
                                        echo "<br>";            
                                    }
                                    elseif($pvasm>=10.1 && $pvasm<15.1 ){
                                        $pesotasaASM =5.15;
                                        echo "Tasa + PESO ASM ".$pesotasaASM.' €';
                                        echo "<br>";            
                                    }           
                                    elseif($pvasm>=15.1 && $pvasm<20.1){
                                        $pesotasaASM =7.00;
                                        echo "Tasa + PESO ASM ".$pesotasaASM.' €';
                                        echo "<br>";            
                                    }   
                                    elseif($pvasm>=20.1){
                                        $pesotasaASM = 7.00 + ($pesosMayoresASM * 0.28);
                                        echo "Tasa + PESO ASM ".number_format($pesotasaASM, 2).' €';
                                        echo "<br>";            
                                    }                       
                                }
                            }
                            ?>
                        </h4>
                        <input type="hidden" name="tasaasm" value="<?php echo $pesotasaASM; ?>">

                    </div>
                    <div id="fuel" hidden="">
                        <h4>

                            <?php
                            if (!empty($pesotasaASM)){
                                $fuelASM = ($pesotasaASM * 0)/100;
                                echo $fuelASM.' €';
                            } else {
                                echo "No has introducido datos";
                            }

                            ?>

                        </h4>
                        <input type="hidden" name="fuelasm" value="<?php echo $fuelASM; ?>">
                    </div>
                    <div id="Reembolso" hidden="">
                        <h4>

                            <?php
                            $reembolsoASM = ($reembolso * 1)/100;
                            if (!empty($reembolso) && !empty($pesotasaASM)) {
                                if ($reembolsoASM < 1 && !empty($reembolso)){
                                    $reembolsoASM = 1;
                                }
                                echo $reembolsoASM.' €';
                            } elseif (empty($pesotasaASM) && !empty($reembolso)) {
                                echo "No has introducido datos";
                            }
                            else {
                                echo "No has escrito ninguna cifra";
                            }
                            ?>
                        </h4>
                        <input type="hidden" name="reembolsoasm" value="<?php echo $reembolsoASM; ?>">

                    </div>
                    <div id="precio final">
                        <h4>

                            <?php
                            if (!empty($pesotasaASM)) {
                                $finalASM = $reembolsoASM + $pesotasaASM + $fuelASM;
                                echo number_format($finalASM, 2).' €';
                            } else {
                                echo "No has introducido datos";
                            }

                            ?>
                        </h4>
                        <input type="hidden" name="finalasm" value="<?php echo $finalASM; ?>">

                    </div>
                </div>
                <!-- Fin tiny-header -->
                <div class="pricing-table-features tiny-features">
                    <!-- Inicio tiny-features -->
                    <?php $nombreASM = "ASM"; ?>
                    <input type="hidden" name="nombreASM" value="<?php echo $nombreASM; ?>">

                    <img class="img-responsive" />
                </div>
                <!-- Fin tiny-features -->
                <div class="pricing-table-signup-tiny">
                    <!-- Inicio tiny-singnup -->
                    <button class="btn-tiny" type="submit" name="btnasm" onclick="alert('Has seleccionado ASM')">Elegir</button>
                </div>
                <!-- Fin tiny-signup  -->
            </div>
            <!--Fin div tiny-->

            <!-- Andalucia Transporta -->
            <div class="span2 small">
                <!-- Inicio small -->
                <div class="pricing-table-header-small">
                    <!-- Inicio small-header -->
                    <div id="tasa/peso" >
                        <h4>
                            <?php
                            if (empty($largo2) && empty($ancho2) && empty($alto2)
                                && empty($largo3) && empty($ancho3) && empty($alto3)
                                &&empty($largo4) && empty($ancho4) && empty($alto4)
                                && empty($largo5) && empty($ancho5) && empty($alto5)
                                && empty($largo6) && empty($ancho6) && empty($alto6)) {
                                $pvat = $largo * $ancho * $alto * 220 / 1000000;

                            } elseif (!empty($largo2) && !empty($ancho2) && !empty($alto2)
                                      && empty($largo3) && empty($ancho3) && empty($alto3)
                                      && empty($largo4) && empty($ancho4) && empty($alto4)
                                      && empty($largo5) && empty($ancho5) && empty($alto5)
                                      && empty($largo6) && empty($ancho6) && empty($alto6)) {

                                $pvat = $largo * $ancho * $alto * 220 / 1000000;
                                $pvat2 = $largo2 * $ancho2 * $alto2 * 220 / 1000000;
                                $pvat = $pvat + $pvat2;

                            } elseif (!empty($largo2) && !empty($ancho2) && !empty($alto2)
                                      && !empty($largo3) && !empty($ancho3) && !empty($alto3)
                                      && empty($largo4) && empty($ancho4) && empty($alto4)
                                      && empty($largo5) && empty($ancho5) && empty($alto5)
                                      && empty($largo6) && empty($ancho6) && empty($alto6)) {

                                $pvat = $largo * $ancho * $alto * 220 / 1000000;
                                $pvat2 = $largo2 * $ancho2 * $alto2 * 220 / 1000000;
                                $pvat3 = $largo3 * $ancho3 * $alto3 * 220 / 1000000;
                                $pvat = $pvat + $pvat2 +$pvat3;

                            } elseif (!empty($largo2) && !empty($ancho2) && !empty($alto2)
                                      && !empty($largo3) && !empty($ancho3) && !empty($alto3)
                                      && !empty($largo4) && !empty($ancho4) && !empty($alto4)
                                      && empty($largo5) && empty($ancho5) && empty($alto5)
                                      && empty($largo6) && empty($ancho6) && empty($alto6)) {
                                $pvat = $largo * $ancho * $alto * 220 / 1000000;
                                $pvat2 = $largo2 * $ancho2 * $alto2 * 220 / 1000000;
                                $pvat3 = $largo3 * $ancho3 * $alto3 * 220 / 1000000;
                                $pvat4 = $largo4 * $ancho4 * $alto4 * 220 / 1000000;
                                $pvat = $pvat + $pvat2 + $pvat3 + $pvat4;
                            }  elseif (!empty($largo2) && !empty($ancho2) && !empty($alto2)
                                       && !empty($largo3) && !empty($ancho3) && !empty($alto3)
                                       && !empty($largo4) && !empty($ancho4) && !empty($alto4)
                                       && !empty($largo5) && !empty($ancho5) && !empty($alto5)
                                       && empty($largo6) && empty($ancho6) && empty($alto6)) {
                                $pvat = $largo * $ancho * $alto * 220 / 1000000;
                                $pvat2 = $largo2 * $ancho2 * $alto2 * 220 / 1000000;
                                $pvat3 = $largo3 * $ancho3 * $alto3 * 220 / 1000000;
                                $pvat4 = $largo4 * $ancho4 * $alto4 * 220 / 1000000;
                                $pvat5 = $largo5 * $ancho5 * $alto5 * 220 / 1000000;

                                $pvat = $pvat + $pvat2 + $pvat3 + $pvat4 + $pvat5;
                                echo calcvol($pvat);
                            }  elseif (!empty($largo2) && !empty($ancho2) && !empty($alto2)
                                       && !empty($largo3) && !empty($ancho3) && !empty($alto3)
                                       && !empty($largo4) && !empty($ancho4) && !empty($alto4)
                                       && !empty($largo5) && !empty($ancho5) && !empty($alto5)
                                       && !empty($largo6) && !empty($ancho6) && !empty($alto6)) {
                                $pvat = $largo * $ancho * $alto * 220 / 1000000;
                                $pvat2 = $largo2 * $ancho2 * $alto2 * 220 / 1000000;
                                $pvat3 = $largo3 * $ancho3 * $alto3 * 220 / 1000000;
                                $pvat4 = $largo4 * $ancho4 * $alto4 * 220 / 1000000;
                                $pvat5 = $largo5 * $ancho5 * $alto5 * 220 / 1000000;
                                $pvat6 = $largo6 * $ancho6 * $alto6 * 220 / 1000000;

                                $pvat = $pvat + $pvat2 + $pvat3 + $pvat4 + $pvat5 + $pvat6;
                            }
                            ?>
                            <input type="hidden" name="pvat" value="<?php echo $pvat; ?>">

                            <?php
                            $pesotasaAT = 0;
                            if($peso>$pvat){
                                $pesosMayoresAT= round($peso - 300);
                                echo calcvol($peso);
                                echo "<br>";
                                if($idprovto==41){
                                    echo "CALCULO PARA SEVILLA";
                                    echo "<br>";
                                    if($peso<5.1){
                                        $pesotasaAT=2.20;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";
                                    }
                                    elseif($peso<10.1){
                                        $pesotasaAT=2.36;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    }
                                    elseif($peso<20.1){
                                        $pesotasaAT=2.95;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<30.1){
                                        $pesotasaAT=3.54;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<40.1){
                                        $pesotasaAT=4.18;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<50.1){
                                        $pesotasaAT=4.77;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<60.1){
                                        $pesotasaAT=5.35;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<70.1){
                                        $pesotasaAT=5.94;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<80.1){
                                        $pesotasaAT=6.53;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<90.1){
                                        $pesotasaAT=7.17;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<100.1){
                                        $pesotasaAT=7.76;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<125.1){
                                        $pesotasaAT=8.82;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<150.1){
                                        $pesotasaAT=10.34;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<175.1){
                                        $pesotasaAT=12.85;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<200.1){
                                        $pesotasaAT=14.46;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<250.1){
                                        $pesotasaAT=16.45;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<300.1){
                                        $pesotasaAT=18.47;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } elseif ($peso >=300.1) {
                                        $pesotasaAT= 18.47 + ($pesosMayoresAT * 0.10);
                                        echo $pesosMayoresAT;
                                        echo "<br>";
                                        echo "Tasa + PESO ASM ".number_format($pesotasaAT, 2).' €';
                                        echo "<br>";

                                    }
                                }elseif ($idcodautAr[0]==1){
                                    echo "CALCULO REGIONAL";
                                    echo "<br>";
                                    if($peso<5.1){
                                        $pesotasaAT=2.28;
                                        echo "Tasa + PESO AT ".$pesotasaAT." €";
                                        echo "<br>";
                                    }
                                    elseif($peso<10.1){
                                        $pesotasaAT=2.50;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    }
                                    elseif($peso<20.1){
                                        $pesotasaAT=3.35;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<30.1){
                                        $pesotasaAT=4.07;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<40.1){
                                        $pesotasaAT=4.82;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<50.1){
                                        $pesotasaAT=5.52;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<60.1){
                                        $pesotasaAT=6.32;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<70.1){
                                        $pesotasaAT=7.02;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<80.1){
                                        $pesotasaAT=7.76;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<90.1){
                                        $pesotasaAT=8.03;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<100.1){
                                        $pesotasaAT=8.67;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<125.1){
                                        $pesotasaAT=9.85;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<150.1){
                                        $pesotasaAT=11.52;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<175.1){
                                        $pesotasaAT=14.46;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<200.1){
                                        $pesotasaAT=16.23;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<250.1){
                                        $pesotasaAT=18.47;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<300.1){
                                        $pesotasaAT=20.78;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } elseif ($peso >=300.1) {
                                        $pesotasaAT= 20.78 + ($pesosMayoresAT * 0.12);
                                        echo $pesosMayoresAT;
                                        echo "<br>";
                                        echo "Tasa + PESO ASM ".number_format($pesotasaAT, 2).' €';
                                        echo "<br>";

                                    }            
                                } 
                                else {
                                    echo "No hay servicios para esta zona";
                                }
                            } 
                            elseif ($peso < $pvat) {
                                $pesosMayoresAT= round($pvat - 300);
                                echo calcvol($pvat);
                                echo "<br>";
                                if($idprovto==41){
                                    echo "CALCULO PARA SEVILLA";
                                    echo "<br>";
                                    if($pvat<5.1){
                                        $pesotasaAT=2.20;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";
                                    }
                                    elseif($pvat<10.1){
                                        $pesotasaAT=2.36;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    }
                                    elseif($pvat<20.1){
                                        $pesotasaAT=2.95;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvat<30.1){
                                        $pesotasaAT=3.54;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvat<40.1){
                                        $pesotasaAT=4.18;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvat<50.1){
                                        $pesotasaAT=4.77;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvat<60.1){
                                        $pesotasaAT=5.35;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvat<70.1){
                                        $pesotasaAT=5.94;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvat<80.1){
                                        $pesotasaAT=6.53;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvat<90.1){
                                        $pesotasaAT=7.17;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvat<100.1){
                                        $pesotasaAT=7.76;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvat<125.1){
                                        $pesotasaAT=8.82;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvat<150.1){
                                        $pesotasaAT=10.34;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvat<175.1){
                                        $pesotasaAT=12.85;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvat<200.1){
                                        $pesotasaAT=14.46;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvat<250.1){
                                        $pesotasaAT=16.45;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvat<300.1){
                                        $pesotasaAT=18.47;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } elseif ($pvat >=300.1) {
                                        $pesotasaAT= 18.47 + ($pesosMayoresAT * 0.10);
                                        echo $pesosMayoresAT;
                                        echo "<br>";
                                        echo number_format($pesotasaAT, 2).' €';
                                        echo "<br>";

                                    }
                                }
                                elseif ($idcodautAr[0]==1){
                                    echo "CALCULO REGIONAL";
                                    echo "<br>";
                                    if($pvat<5.1){
                                        $pesotasaAT=2.28;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";
                                    }
                                    elseif($pvat<10.1){
                                        $pesotasaAT=2.50;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    }
                                    elseif($pvat<20.1){
                                        $pesotasaAT=3.35;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvat<30.1){
                                        $pesotasaAT=4.07;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvat<40.1){
                                        $pesotasaAT=4.82;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvat<50.1){
                                        $pesotasaAT=5.52;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvat<60.1){
                                        $pesotasaAT=6.32;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvat<70.1){
                                        $pesotasaAT=7.02;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvat<80.1){
                                        $pesotasaAT=7.76;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvat<90.1){
                                        $pesotasaAT=8.03;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvat<100.1){
                                        $pesotasaAT=8.67;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvat<125.1){
                                        $pesotasaAT=9.85;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvat<150.1){
                                        $pesotasaAT=11.52;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvat<175.1){
                                        $pesotasaAT=14.46;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvat<200.1){
                                        $pesotasaAT=16.23;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvat<250.1){
                                        $pesotasaAT=18.47;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvat<300.1){
                                        $pesotasaAT=20.78;
                                        echo "Tasa + PESO AT ".$pesotasaAT.' €';
                                        echo "<br>";            
                                    } elseif ($pvat >=300.1) {
                                        $pesotasaAT= 20.78 + ($pesosMayoresAT * 0.12);
                                        echo $pesosMayoresAT;
                                        echo "<br>";
                                        echo "Tasa + PESO ASM ".number_format($pesotasaAT, 2).' €';
                                        echo "<br>";

                                    }                    
                                } else {
                                    echo "No hay servicios para esta zona";
                                }
                            }
                            ?>
                        </h4>
                        <input type="hidden" name="tasaat" value="<?php echo $pesotasaAT; ?>">

                    </div>
                    <div id="fuel" hidden="">
                        <h4>
                            <?php
                            if (!empty($pesotasaAT)) {
                                if ($idcodautAr[0] != 1) {
                                    echo "No hay datos para esta zona";
                                }  else{
                                    $fuelAT = ($pesotasaAT * 0)/100;
                                    echo $fuelAT.' €'; 
                                }
                            } else {
                                echo "No has introducido datos";
                            }
                            ?>
                        </h4>
                        <input type="hidden" name="fuelat" value="<?php echo $fuelAT; ?>">

                    </div>
                    <div id="Reembolso" hidden="">
                        <h4>
                            <?php
                            $reembolsoAT = ($reembolso * 1.5)/100;
                            if (!empty($reembolso) && !empty($pesotasaAT)) {
                                if ($idcodautAr[0] != 1) {
                                    echo "No hay datos para esta zona";
                                } else {
                                    if ($reembolsoAT < 2){
                                        $reembolsoAT = 2;
                                        echo $reembolsoAT . ' €';
                                    }
                                }
                            }elseif (empty($pesotasaAT) && !empty($reembolso)) {
                                echo "No has introducido datos";
                            }
                            else {
                                echo "No has escrito ninguna cifra";
                            }

                            ?>
                        </h4>
                        <input type="hidden" name="reembolsoat" value="<?php echo $reembolsoAT; ?>">

                    </div>
                    <div id="precio final">
                        <h4>
                            <?php
                            if ($idcodautAr[0] != 1) {
                                echo "No hay datos para esta zona";
                            } elseif ($idcodautAr[0] == 1) {
                                if (!empty($pesotasaAT)) {
                                    $finalAT = $reembolsoAT + $pesotasaAT + $fuelAT;
                                    echo number_format(($finalAT),2).' €';
                                }else {
                                    echo "no has introducido datos";
                                }
                            }
                            ?>
                        </h4>
                        <input type="hidden" name="finalat" value="<?php echo $finalAT; ?>">

                    </div>
                </div>
                <!-- Fin small-header -->
                <div class="pricing-table-features small-features">
                    <!-- Inicio small-features -->
                    <?php $nombreAT= "ANDALUCIA-TRANPORTA"; ?>
                    <input type="hidden" name="nombreat" value="<?php echo $nombreAT; ?>">
                    <img class="img-responsive" />
                </div>
                <!-- Fin small-features -->
                <div class="pricing-table-signup-small">
                    <!-- Inicio small-singnup -->
                    <button class="btn-small" type="submit" name="btnat" onclick="alert('Has seleccionado Andalucia Transporta')">Elegir</button>
                </div>
                <!-- Fin small-signup  -->
            </div>

            <!-- SEUR -->
            <div class="span2 medium">
                <!-- Inicio medium -->
                <div class="pricing-table-header-medium">
                    <!-- Inicio medium-header -->
                    <div id="tasa/peso">
                        <h4>

                            <?php
                            if (empty($largo2) && empty($ancho2) && empty($alto2)
                                && empty($largo3) && empty($ancho3) && empty($alto3)
                                &&empty($largo4) && empty($ancho4) && empty($alto4)
                                && empty($largo5) && empty($ancho5) && empty($alto5)
                                && empty($largo6) && empty($ancho6) && empty($alto6)) {
                                $pvseur = $largo * $ancho * $alto * 167 / 1000000;

                            } elseif (!empty($largo2) && !empty($ancho2) && !empty($alto2)
                                      && empty($largo3) && empty($ancho3) && empty($alto3)
                                      && empty($largo4) && empty($ancho4) && empty($alto4)
                                      && empty($largo5) && empty($ancho5) && empty($alto5)
                                      && empty($largo6) && empty($ancho6) && empty($alto6)) {

                                $pvseur = $largo * $ancho * $alto * 167 / 1000000;
                                $pvseur2 = $largo2 * $ancho2 * $alto2 * 167 / 1000000;
                                $pvseur = $pvseur + $pvseur2;

                            } elseif (!empty($largo2) && !empty($ancho2) && !empty($alto2)
                                      && !empty($largo3) && !empty($ancho3) && !empty($alto3)
                                      && empty($largo4) && empty($ancho4) && empty($alto4)
                                      && empty($largo5) && empty($ancho5) && empty($alto5)
                                      && empty($largo6) && empty($ancho6) && empty($alto6)) {

                                $pvseur = $largo * $ancho * $alto * 167 / 1000000;
                                $pvseur2 = $largo2 * $ancho2 * $alto2 * 167 / 1000000;
                                $pvseur3 = $largo3 * $ancho3 * $alto3 * 167 / 1000000;
                                $pvseur = $pvseur + $pvseur2 +$pvseur3;

                            } elseif (!empty($largo2) && !empty($ancho2) && !empty($alto2)
                                      && !empty($largo3) && !empty($ancho3) && !empty($alto3)
                                      && !empty($largo4) && !empty($ancho4) && !empty($alto4)
                                      && empty($largo5) && empty($ancho5) && empty($alto5)
                                      && empty($largo6) && empty($ancho6) && empty($alto6)) {
                                $pvseur = $largo * $ancho * $alto * 167 / 1000000;
                                $pvseur2 = $largo2 * $ancho2 * $alto2 * 167 / 1000000;
                                $pvseur3 = $largo3 * $ancho3 * $alto3 * 167 / 1000000;
                                $pvseur4 = $largo4 * $ancho4 * $alto4 * 167 / 1000000;
                                $pvseur = $pvseur + $pvseur2 + $pvseur3 + $pvseur4;

                            } elseif (!empty($largo2) && !empty($ancho2) && !empty($alto2)
                                      && !empty($largo3) && !empty($ancho3) && !empty($alto3)
                                      && !empty($largo4) && !empty($ancho4) && !empty($alto4)
                                      && !empty($largo5) && !empty($ancho5) && !empty($alto5)
                                      && empty($largo6) && empty($ancho6) && empty($alto6)) {
                                $pvseur = $largo * $ancho * $alto * 167 / 1000000;
                                $pvseur2 = $largo2 * $ancho2 * $alto2 * 167 / 1000000;
                                $pvseur3 = $largo3 * $ancho3 * $alto3 * 167 / 1000000;
                                $pvseur4 = $largo4 * $ancho4 * $alto4 * 167 / 1000000;
                                $pvseur5 = $largo5 * $ancho5 * $alto5 * 167 / 1000000;

                                $pvseur = $pvseur + $pvseur2 + $pvseur3 + $pvseur4 + $pvseur5;

                            } elseif (!empty($largo2) && !empty($ancho2) && !empty($alto2)
                                      && !empty($largo3) && !empty($ancho3) && !empty($alto3)
                                      && !empty($largo4) && !empty($ancho4) && !empty($alto4)
                                      && !empty($largo5) && !empty($ancho5) && !empty($alto5)
                                      && !empty($largo6) && !empty($ancho6) && !empty($alto6)) {
                                $pvseur = $largo * $ancho * $alto * 167 / 1000000;
                                $pvseur2 = $largo2 * $ancho2 * $alto2 * 167 / 1000000;
                                $pvseur3 = $largo3 * $ancho3 * $alto3 * 167 / 1000000;
                                $pvseur4 = $largo4 * $ancho4 * $alto4 * 167 / 1000000;
                                $pvseur5 = $largo5 * $ancho5 * $alto5 * 167 / 1000000;
                                $pvseur6 = $largo6 * $ancho6 * $alto6 * 167 / 1000000;  

                                $pvseur = $pvseur + $pvseur2 + $pvseur3 + $pvseur4 + $pvseur5 + $pvseur6;
                            }

                            ?>
                            <input type="hidden" name="pvseur" value="<?php echo $pvseur; ?>">
                            <?php
                            $pesotasaSEUR = 0;
                            if ($peso > $pvseur){
                                $pesosMayoresSEUR = round($peso - 40);
                                echo calcvol($peso);
                                echo "<br>";
                                        if ($idcodautAr[0]==1 || $idprovto == 6){
                                    echo "corto España";
                                    echo "<br>";
                                    if($peso<1.1){
                                        $pesotasaSEUR=3.71;
                                        echo $pesotasaSEUR." €";
                                        echo "<br>";
                                    }
                                    elseif($peso<3.1){
                                        $pesotasaSEUR=3.96;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    }
                                    elseif($peso<5.1){
                                        $pesotasaSEUR=4.23;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<10.1){
                                        $pesotasaSEUR=5.07;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<15.1){
                                        $pesotasaSEUR=5.43;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<20.1){
                                        $pesotasaSEUR=6.16;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<25.1){
                                        $pesotasaSEUR=6.56;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<30.1){
                                        $pesotasaSEUR=6.87;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<40.1){
                                        $pesotasaSEUR=8.23;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso>=40.1){
                                        $pesotasaSEUR= 8.23 + ($pesosMayoresSEUR * 0.34);
                                        echo "Tasa + PESO SEUR ".number_format($pesotasaSEUR, 2).' €';
                                        echo "<br>";            
                                    } 
                                } elseif ($idprovto == 1 || $idprovto== 2
                                          || $idprovto == 3 || $idprovto == 5 
                                          || $idprovto == 9 || $idprovto == 10
                                          || $idprovto == 12 || $idprovto== 13
                                          || $idprovto == 16 || $idprovto == 19 
                                          || $idprovto == 24 || $idprovto == 27
                                          || $idprovto == 28 || $idprovto== 30
                                          || $idprovto == 32 || $idprovto == 33 
                                          || $idprovto == 34 || $idprovto == 37
                                          || $idprovto == 39 || $idprovto== 40
                                          || $idprovto == 42 || $idprovto == 44 
                                          || $idprovto == 45 || $idprovto == 46
                                          || $idprovto == 47 || $idprovto== 49
                                          || $idprovto == 10 || $idprovto == 24) {

                                    echo "Medio España";
                                    echo "<br>";
                                    if($peso<1.1){
                                        $pesotasaSEUR=3.71;
                                        echo $pesotasaSEUR." €";
                                        echo "<br>";
                                    }
                                    elseif($peso<3.1){
                                        $pesotasaSEUR=3.96;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    }
                                    elseif($peso<5.1){
                                        $pesotasaSEUR=4.23;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<10.1){
                                        $pesotasaSEUR=5.90;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<15.1){
                                        $pesotasaSEUR=6.58;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<20.1){
                                        $pesotasaSEUR=7.79;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<25.1){
                                        $pesotasaSEUR=8.35;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<30.1){
                                        $pesotasaSEUR=8.78;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<40.1){
                                        $pesotasaSEUR=11.19;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso>=40.1){
                                        $pesotasaSEUR= 11.19 + ($pesosMayoresSEUR * 0.42);
                                        echo "Tasa + PESO SEUR ".number_format($pesotasaSEUR, 2).' €';
                                        echo "<br>";            
                                    } 
                                } elseif ($idprovto == 7){
                                    echo "Baleares";
                                    echo "<br>";
                                    if($peso<1.1){
                                        $pesotasaSEUR=5.23;
                                        echo $pesotasaSEUR." €";
                                        echo "<br>";
                                    }
                                    elseif($peso<3.1){
                                        $pesotasaSEUR=6.15;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    }
                                    elseif($peso<5.1){
                                        $pesotasaSEUR=6.58;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<10.1){
                                        $pesotasaSEUR=8.15;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<15.1){
                                        $pesotasaSEUR=9.11;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<20.1){
                                        $pesotasaSEUR=10.75;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<25.1){
                                        $pesotasaSEUR=12.27;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<30.1){
                                        $pesotasaSEUR=13.76;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<40.1){
                                        $pesotasaSEUR=20.75;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso>=40.1){
                                        $pesotasaSEUR= 20.75 + ($pesosMayoresSEUR * 0.62);
                                        echo "Tasa + PESO SEUR ".number_format($pesotasaSEUR, 2).' €';
                                        echo "<br>";            
                                    } 
                                }else {
                                    echo "Largo España";
                                    if($peso<1.1){
                                        $pesotasaSEUR=3.71;
                                        echo $pesotasaSEUR." €";
                                        echo "<br>";
                                    }
                                    elseif($peso<3.1){
                                        $pesotasaSEUR=3.96;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    }
                                    elseif($peso<5.1){
                                        $pesotasaSEUR=4.23;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<10.1){
                                        $pesotasaSEUR=7.00;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<15.1){
                                        $pesotasaSEUR=8.19;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<20.1){
                                        $pesotasaSEUR=9.84;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<25.1){
                                        $pesotasaSEUR=10.59;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<30.1){
                                        $pesotasaSEUR=11.45;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<40.1){
                                        $pesotasaSEUR=14.97;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso>=40.1){
                                        $pesotasaSEUR= 14.97 + ($pesosMayoresSEUR * 0.50);
                                        echo "Tasa + PESO ASM ".number_format($pesotasaSEUR, 2).' €';
                                        echo "<br>";            
                                    } 
                                }  
                            } elseif ($peso < $pvseur){                        
                                $pesosMayoresSEUR = round($pvseur - 40);
                                echo calcvol($pvseur);
                                echo "<br>";
                                if ($idcodautAr[0]==1 || $idprovto == 6){
                                    echo "corto España";
                                    echo "<br>";
                                    if($pvseur<=1){
                                        $pesotasaSEUR=3.71;
                                        echo $pesotasaSEUR." €";
                                        echo "<br>";
                                    }
                                    elseif($pvseur<=3){
                                        $pesotasaSEUR=3.96;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    }
                                    elseif($pvseur<5.1){
                                        $pesotasaSEUR=4.23;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvseur<10.1){
                                        $pesotasaSEUR=5.07;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvseur<=15){
                                        $pesotasaSEUR=5.43;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvseur<20.1){
                                        $pesotasaSEUR=6.16;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvseur<25.1){
                                        $pesotasaSEUR=6.56;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvseur<30.1){
                                        $pesotasaSEUR=6.87;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvseur<40.1){
                                        $pesotasaSEUR=8.23;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvseur>=40.1){
                                        $pesotasaSEUR= 8.23 + ($pesosMayoresSEUR * 0.34);
                                        echo "Tasa + PESO SEUR ".number_format($pesotasaSEUR, 2).' €';
                                        echo "<br>";            
                                    } 
                                } elseif ($idprovto == 1 || $idprovto== 2
                                          || $idprovto == 3 || $idprovto == 5 
                                          || $idprovto == 9 || $idprovto == 10
                                          || $idprovto == 12 || $idprovto== 13
                                          || $idprovto == 16 || $idprovto == 19 
                                          || $idprovto == 24 || $idprovto == 27
                                          || $idprovto == 28 || $idprovto== 30
                                          || $idprovto == 32 || $idprovto == 33 
                                          || $idprovto == 34 || $idprovto == 37
                                          || $idprovto == 39 || $idprovto== 40
                                          || $idprovto == 42 || $idprovto == 44 
                                          || $idprovto == 45 || $idprovto == 46
                                          || $idprovto == 47 || $idprovto== 49
                                          || $idprovto == 10 || $idprovto == 24) {

                                    echo "Medio España";
                                    echo "<br>";
                                    if($pvseur<=1){
                                        $pesotasaSEUR=3.71;
                                        echo $pesotasaSEUR." €";
                                        echo "<br>";
                                    }
                                    elseif($pvseur<=3){
                                        $pesotasaSEUR=3.96;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    }
                                    elseif($pvseur<5.1){
                                        $pesotasaSEUR=4.23;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvseur<10.1){
                                        $pesotasaSEUR=5.90;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvseur<=15){
                                        $pesotasaSEUR=6.58;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvseur<20.1){
                                        $pesotasaSEUR=7.79;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvseur<25.1){
                                        $pesotasaSEUR=8.35;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvseur<30.1){
                                        $pesotasaASM=8.78;
                                        echo $pesotasaASM.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvseur<40.1){
                                        $pesotasaSEUR=11.19;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvseur>=40.1){
                                        $pesotasaSEUR= 11.19 + ($pesosMayoresSEUR * 0.42);
                                        echo "Tasa + PESO SEUR ".number_format($pesotasaSEUR, 2).' €';
                                        echo "<br>";            
                                    } 
                                } elseif ($idprovto == 7){
                                    echo "Baleares";
                                    echo "<br>";
                                    if($pvseur<1.1){
                                        $pesotasaSEUR=5.23;
                                        echo $pesotasaSEUR." €";
                                        echo "<br>";
                                    }
                                    elseif($pvseur<3.1){
                                        $pesotasaSEUR=6.15;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    }
                                    elseif($pvseur<5.1){
                                        $pesotasaSEUR=6.58;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvseur<10.1){
                                        $pesotasaSEUR=8.15;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvseur<15.1){
                                        $pesotasaSEUR=9.11;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvseur<20.1){
                                        $pesotasaSEUR=10.75;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvseur<25.1){
                                        $pesotasaSEUR=12.27;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvseur<30.1){
                                        $pesotasaSEUR=13.76;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvseur<40.1){
                                        $pesotasaSEUR=20.75;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvseur>=40.1){
                                        $pesotasaSEUR= 20.75 + ($pesosMayoresSEUR * 0.62);
                                        echo "Tasa + PESO SEUR ".number_format($pesotasaSEUR, 2).' €';
                                        echo "<br>";            
                                    }

                                } else {
                                    if($pvseur<=1){
                                        $pesotasaSEUR=3.71;
                                        echo $pesotasaSEUR." €";
                                        echo "<br>";
                                    }
                                    elseif($pvseur<=3){
                                        $pesotasaSEUR=3.96;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    }
                                    elseif($pvseur<5.1){
                                        $pesotasaSEUR=4.23;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvseur<10.1){
                                        $pesotasaSEUR=7.00;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvseur<=15){
                                        $pesotasaSEUR=8.19;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvseur<20.1){
                                        $pesotasaSEUR=9.84;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvseur<25.1){
                                        $pesotasaSEUR=10.59;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvseur<30.1){
                                        $pesotasaSEUR=11.45;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvseur<40.1){
                                        $pesotasaSEUR=14.97;
                                        echo $pesotasaSEUR.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvseur>=40.1){
                                        $pesotasaSEUR= 14.97 + ($pesosMayoresSEUR * 0.50);
                                        echo "Tasa + PESO ASM ".number_format($pesotasaSEUR, 2).' €';
                                        echo "<br>";            
                                    } 
                                }    
                            }

                            ?>
                        </h4>
                        <input type="hidden" name="tasaseur" value="<?php echo $pesotasaSEUR; ?>">
                    </div>
                    <div id="fuel" hidden="">
                        <h4>
                            <?php
                            if (!empty($pesotasaSEUR)) {
                                $fuelSEUR = number_format(($pesotasaSEUR * 5)/100 , 2);
                                echo $fuelSEUR.' €';
                            } else {
                                echo "No has introducido datos";
                            }

                            ?>
                        </h4>
                        <input type="hidden" name="fuelseur" value="<?php echo $fuelSEUR; ?>">

                    </div>
                    <div id="Reembolso" hidden="">
                        <h4>
                            <?php
                            $reembolsoSEUR = ($reembolso * 1)/100;
                            if (!empty($reembolso) && !empty($pesotasaSEUR)) {
                                if ($reembolsoSEUR < 1.03){
                                    $reembolsoSEUR = 1.03;
                                }
                                echo $reembolsoSEUR . ' €';
                            }elseif (empty($pesotasaSEUR) && !empty($reembolso)) {
                                echo "No has introducido datos";
                            }
                            else {
                                echo "No has escrito ninguna cifra";
                            }

                            ?>
                        </h4>
                        <input type="hidden" name="reembolsoseur" value="<?php echo $reembolsoSEUR; ?>">

                    </div>
                    <div id="precio final">
                        <h4>
                            <?php
                            if (!empty($pesotasaSEUR)) {
                                $finalSEUR = $reembolsoSEUR + $pesotasaSEUR + $fuelSEUR;
                                echo number_format(($finalSEUR), 2).' €';
                            } else {
                                echo "no has introducido datos";
                            }

                            ?>
                        </h4>
                        <input type="hidden" name="finalSEUR" value="<?php echo $finalSEUR; ?>">

                    </div>
                </div>
                <!-- Fin medium-header -->
                <div class="pricing-table-features medium-features">
                    <!-- Inicio medium-features -->
                    <?php $nombreSEUR = "SEUR"; ?>
                    <input type="hidden" name="nombreSEUR" value="<?php echo $nombreSEUR; ?>">

                    <img class="img-responsive" src="" />
                </div>
                <!-- Fin medium-features -->
                <div class="pricing-table-signup-medium">
                    <!-- Inicio medium-singnup -->
                    <button  class="btn-medium" type="submit" name="btnseur" onclick="alert('Has seleccionado SEUR')">Elegir</button>
                </div>
                <!-- Fin medium-signup  -->
            </div>
            <!-- Fin medium -->

            <!-- DHL -->
            <div class="span2 pro">
                <!-- Inicio pro -->
                <div class="pricing-table-header-pro">
                    <!-- Inicio pro-header -->
                    <div id="tasa/peso" >
                        <h4>

                            <?php
                            if (empty($largo2) && empty($ancho2) && empty($alto2)
                                && empty($largo3) && empty($ancho3) && empty($alto3)
                                &&empty($largo4) && empty($ancho4) && empty($alto4)
                                && empty($largo5) && empty($ancho5) && empty($alto5)
                                && empty($largo6) && empty($ancho6) && empty($alto6)) {
                                $pvdhl = $largo * $ancho * $alto * 250 / 1000000;

                            } elseif (!empty($largo2) && !empty($ancho2) && !empty($alto2)
                                      && empty($largo3) && empty($ancho3) && empty($alto3)
                                      && empty($largo4) && empty($ancho4) && empty($alto4)
                                      && empty($largo5) && empty($ancho5) && empty($alto5)
                                      && empty($largo6) && empty($ancho6) && empty($alto6)) {
                                $pvdhl = $largo * $ancho * $alto * 250 / 1000000;
                                $pvdhl2 = $largo2 * $ancho2 * $alto2 * 250 / 1000000;
                                $pvdhl = $pvdhl + $pvdhl2;

                            } elseif (!empty($largo2) && !empty($ancho2) && !empty($alto2)
                                      && !empty($largo3) && !empty($ancho3) && !empty($alto3)
                                      && empty($largo4) && empty($ancho4) && empty($alto4)
                                      && empty($largo5) && empty($ancho5) && empty($alto5)
                                      && empty($largo6) && empty($ancho6) && empty($alto6)) {
                                $pvdhl = $largo * $ancho * $alto * 250 / 1000000;
                                $pvdhl2 = $largo2 * $ancho2 * $alto2 * 250 / 1000000;
                                $pvdhl3 = $largo3 * $ancho3 * $alto3 * 250 / 1000000;
                                $pvdhl = $pvdhl + $pvdhl2 +$pvdhl3;

                            } elseif (!empty($largo2) && !empty($ancho2) && !empty($alto2)
                                      && !empty($largo3) && !empty($ancho3) && !empty($alto3)
                                      && !empty($largo4) && !empty($ancho4) && !empty($alto4)
                                      && empty($largo5) && empty($ancho5) && empty($alto5)
                                      && empty($largo6) && empty($ancho6) && empty($alto6)) {
                                $pvdhl = $largo * $ancho * $alto * 250 / 1000000;
                                $pvdhl2 = $largo2 * $ancho2 * $alto2 * 250 / 1000000;
                                $pvdhl3 = $largo3 * $ancho3 * $alto3 * 250 / 1000000;
                                $pvdhl4 = $largo4 * $ancho4 * $alto4 * 250 / 1000000;
                                $pvdhl = $pvdhl + $pvdhl2 + $pvdhl3 + $pvdhl4;

                            }  elseif (!empty($largo2) && !empty($ancho2) && !empty($alto2)
                                       && !empty($largo3) && !empty($ancho3) && !empty($alto3)
                                       && !empty($largo4) && !empty($ancho4) && !empty($alto4)
                                       && !empty($largo5) && !empty($ancho5) && !empty($alto5)
                                       && empty($largo6) && empty($ancho6) && empty($alto6)) {
                                $pvdhl = $largo * $ancho * $alto * 250 / 1000000;
                                $pvdhl2 = $largo2 * $ancho2 * $alto2 * 250 / 1000000;
                                $pvdhl3 = $largo3 * $ancho3 * $alto3 * 250 / 1000000;
                                $pvdhl4 = $largo4 * $ancho4 * $alto4 * 250 / 1000000;
                                $pvdhl5 = $largo5 * $ancho5 * $alto5 * 250 / 1000000;

                                $pvdhl = $pvdhl + $pvdhl2 + $pvdhl3 + $pvdhl4 + $pvdhl5;

                            } elseif (!empty($largo2) && !empty($ancho2) && !empty($alto2)
                                      && !empty($largo3) && !empty($ancho3) && !empty($alto3)
                                      && !empty($largo4) && !empty($ancho4) && !empty($alto4)
                                      && !empty($largo5) && !empty($ancho5) && !empty($alto5)
                                      && !empty($largo6) && !empty($ancho6) && !empty($alto6)) {
                                $pvdhl = $largo * $ancho * $alto * 250 / 1000000;
                                $pvdhl2 = $largo2 * $ancho2 * $alto2 * 250 / 1000000;
                                $pvdhl3 = $largo3 * $ancho3 * $alto3 * 250 / 1000000;
                                $pvdhl4 = $largo4 * $ancho4 * $alto4 * 250 / 1000000;
                                $pvdhl5 = $largo5 * $ancho5 * $alto5 * 250 / 1000000;
                                $pvdhl6 = $largo6 * $ancho6 * $alto6 * 250 / 1000000;

                                $pvdhl = $pvdhl + $pvdhl2 + $pvdhl3 + $pvdhl4 + $pvdhl5 + $pvdhl6;
                            }
                            ?>
                            <input type="hidden" name="pvdhl" value="<?php echo $pvdhl; ?>">
                            <?php

                            $pesotasaDHL = 0;

                            if ($peso > $pvdhl){
                                $pesosMayoresDHL= round($peso - 1000);
                                echo calcvol($peso);
                                echo "<br>";
                                if ($idprovto == 41){
                                    echo "Zona 1";
                                    echo "<br>";
                                    if($peso<5.1){
                                        $pesotasaDHL=3.60;
                                        echo $pesotasaDHL." €";
                                        echo "<br>";
                                    }
                                    elseif($peso<10.1){
                                        $pesotasaDHL=3.60;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    }
                                    elseif($peso<20.1){
                                        $pesotasaDHL=3.60;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<30.1){
                                        $pesotasaDHL=3.60;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<40.1){
                                        $pesotasaDHL=4.05;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<50.1){
                                        $pesotasaDHL=4.62;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<60.1){
                                        $pesotasaDHL=5.17;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<70.1){
                                        $pesotasaDHL=5.75;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<80.1){
                                        $pesotasaDHL=6.33;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<90.1){
                                        $pesotasaDHL=6.93;
                                        echo $pesotasaDHL." €";
                                        echo "<br>";
                                    }
                                    elseif($peso<100.1){
                                        $pesotasaDHL=7.52;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    }
                                    elseif($peso<125.1){
                                        $pesotasaDHL=8.47;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<150.1){
                                        $pesotasaDHL=9.92;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<175.1){
                                        $pesotasaDHL=12.43;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<200.1){
                                        $pesotasaDHL=13.94;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<250.1){
                                        $pesotasaDHL=15.84;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<300.1){
                                        $pesotasaDHL=17.79;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<350.1){
                                        $pesotasaDHL=20.30;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<400.1){
                                        $pesotasaDHL=22.38;
                                        echo $pesotasaDHL." €";
                                        echo "<br>";
                                    }
                                    elseif($peso<450.1){
                                        $pesotasaDHL=24.22;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    }
                                    elseif($peso<500.1){
                                        $pesotasaDHL=26.19;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<600.1){
                                        $pesotasaDHL=29.97;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<700.1){
                                        $pesotasaDHL=33.68;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<800.1){
                                        $pesotasaDHL=37.14;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<900.1){
                                        $pesotasaDHL=40.94;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<1000.1){
                                        $pesotasaDHL=45.14;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso>=1000.1){
                                        $pesotasaDHL= 45.14 + ($pesosMayoresDHL * 0.41);
                                        echo $pesosMayoresDHL;
                                        echo "<br>";
                                        echo "Tasa + PESO DHL ".number_format($pesotasaDHL, 2).' €';
                                        echo "<br>";            
                                    } 

                                } elseif ($idprovto == 11 || $idprovto == 21 || $idprovto == 29 || $idprovto == 14) {
                                    echo "Zona 2";
                                    echo "<br>";
                                    if($peso<5.1){
                                        $pesotasaDHL=3.60;
                                        echo $pesotasaDHL." €";
                                        echo "<br>";
                                    }
                                    elseif($peso<10.1){
                                        $pesotasaDHL=3.60;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    }
                                    elseif($peso<20.1){
                                        $pesotasaDHL=3.60;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<30.1){
                                        $pesotasaDHL=3.97;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<40.1){
                                        $pesotasaDHL=4.69;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<50.1){
                                        $pesotasaDHL=5.36;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<60.1){
                                        $pesotasaDHL=6.13;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<70.1){
                                        $pesotasaDHL=6.82;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<80.1){
                                        $pesotasaDHL=7.52;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<90.1){
                                        $pesotasaDHL=7.74;
                                        echo $pesotasaDHL." €";
                                        echo "<br>";
                                    }
                                    elseif($peso<100.1){
                                        $pesotasaDHL=8.42;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    }
                                    elseif($peso<125.1){
                                        $pesotasaDHL=9.51;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<150.1){
                                        $pesotasaDHL=11.11;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<175.1){
                                        $pesotasaDHL=13.94;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<200.1){
                                        $pesotasaDHL=15.60;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<250.1){
                                        $pesotasaDHL=17.75;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<300.1){
                                        $pesotasaDHL=19.98;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<350.1){
                                        $pesotasaDHL=22.86;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<400.1){
                                        $pesotasaDHL=25.09;
                                        echo $pesotasaDHL." €";
                                        echo "<br>";
                                    }
                                    elseif($peso<450.1){
                                        $pesotasaDHL=27.45;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    }
                                    elseif($peso<500.1){
                                        $pesotasaDHL=29.80;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<600.1){
                                        $pesotasaDHL=33.68;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<700.1){
                                        $pesotasaDHL=38.01;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<800.1){
                                        $pesotasaDHL=42.16;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<900.1){
                                        $pesotasaDHL=46.58;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<1000.1){
                                        $pesotasaDHL=51.54;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso>=1000.1){
                                        $pesotasaDHL= 51.54 + ($pesosMayoresDHL * 0.47);
                                        echo "Tasa + PESO DHL ".number_format($pesotasaDHL, 2).' €';
                                        echo "<br>";              
                                    } 
                                } elseif ($idprovto == 18 || $idprovto == 23 || $idprovto == 6) {
                                    echo "zona 3";
                                    echo "<br>";
                                    if($peso<5.1){
                                        $pesotasaDHL=3.60;
                                        echo $pesotasaDHL." €";
                                        echo "<br>";
                                    }
                                    elseif($peso<10.1){
                                        $pesotasaDHL=3.60;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    }
                                    elseif($peso<20.1){
                                        $pesotasaDHL=3.60;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<30.1){
                                        $pesotasaDHL=4.51;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<40.1){
                                        $pesotasaDHL=5.44;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<50.1){
                                        $pesotasaDHL=6.22;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<60.1){
                                        $pesotasaDHL=7.01;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<70.1){
                                        $pesotasaDHL=7.82;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<80.1){
                                        $pesotasaDHL=8.61;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<90.1){
                                        $pesotasaDHL=9.37;
                                        echo $pesotasaDHL." €";
                                        echo "<br>";
                                    }
                                    elseif($peso<100.1){
                                        $pesotasaDHL=10.20;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    }
                                    elseif($peso<125.1){
                                        $pesotasaDHL=11.60;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<150.1){
                                        $pesotasaDHL=13.50;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<175.1){
                                        $pesotasaDHL=16.92;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<200.1){
                                        $pesotasaDHL=18.93;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<250.1){
                                        $pesotasaDHL=21.55;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<300.1){
                                        $pesotasaDHL=24.36;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<350.1){
                                        $pesotasaDHL=28.00;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<400.1){
                                        $pesotasaDHL=30.94;
                                        echo $pesotasaDHL." €";
                                        echo "<br>";
                                    }
                                    elseif($peso<450.1){
                                        $pesotasaDHL=33.92;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    }
                                    elseif($peso<500.1){
                                        $pesotasaDHL=37.02;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<600.1){
                                        $pesotasaDHL=44.80;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<700.1){
                                        $pesotasaDHL=50.99;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<800.1){
                                        $pesotasaDHL=57.21;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<900.1){
                                        $pesotasaDHL=63.55;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<1000.1){
                                        $pesotasaDHL=70.77;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso>=1000.1){
                                        $pesotasaDHL= 70.77 + ($pesosMayoresDHL * 0.645);
                                        echo $pesosMayoresDHL;
                                        echo "<br>";
                                        echo "Tasa + PESO DHL ".number_format($pesotasaDHL, 2).' €';
                                        echo "<br>";              
                                    } 
                                } elseif ($idprovto == 10 || $idprovto == 4 || $idprovto == 13) {
                                    echo "Zona 4";
                                    echo "<br>";
                                    if($peso<5.1){
                                        $pesotasaDHL=3.60;
                                        echo $pesotasaDHL." €";
                                        echo "<br>";
                                    }
                                    elseif($peso<10.1){
                                        $pesotasaDHL=3.60;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    }
                                    elseif($peso<20.1){
                                        $pesotasaDHL=4.18;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<30.1){
                                        $pesotasaDHL=5.42;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<40.1){
                                        $pesotasaDHL=6.53;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<50.1){
                                        $pesotasaDHL=7.47;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<60.1){
                                        $pesotasaDHL=8.43;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<70.1){
                                        $pesotasaASM=9.38;
                                        echo $pesotasaASM.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<80.1){
                                        $pesotasaDHL=10.33;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<90.1){
                                        $pesotasaDHL=11.24;
                                        echo $pesotasaDHL." €";
                                        echo "<br>";
                                    }
                                    elseif($peso<100.1){
                                        $pesotasaDHL=12.23;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    }
                                    elseif($peso<125.1){
                                        $pesotasaDHL=13.91;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<150.1){
                                        $pesotasaDHL=16.20;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<175.1){
                                        $pesotasaDHL=20.30;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<200.1){
                                        $pesotasaDHL=22.72;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<250.1){
                                        $pesotasaDHL=25.86;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<300.1){
                                        $pesotasaDHL=29.22;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<350.1){
                                        $pesotasaDHL=33.60;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<400.1){
                                        $pesotasaDHL=37.13;
                                        echo $pesotasaDHL." €";
                                        echo "<br>";
                                    }
                                    elseif($peso<450.1){
                                        $pesotasaDHL=40.69;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    }
                                    elseif($peso<500.1){
                                        $pesotasaDHL=44.42;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<600.1){
                                        $pesotasaDHL=53.75;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<700.1){
                                        $pesotasaDHL=61.16;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<800.1){
                                        $pesotasaDHL=68.65;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<900.1){
                                        $pesotasaDHL=76.26;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<1000.1){
                                        $pesotasaDHL=84.94;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso>=1000.1){
                                        $pesotasaDHL= 84.94 + ($pesosMayoresDHL * 0.774);
                                        echo $pesosMayoresDHL;
                                        echo "<br>";
                                        echo "Tasa + PESO DHL ".number_format($pesotasaDHL, 2).' €';
                                        echo "<br>";              
                                    } 
                                } elseif ($idprovto == 3 || $idprovto == 30 || $idprovto == 2
                                          || $idprovto == 16 || $idprovto == 19  || $idprovto == 45 
                                          || $idprovto == 28 || $idprovto == 40 || $idprovto == 5 
                                          || $idprovto == 37 || $idprovto == 47 || $idprovto == 49) {

                                    echo "Zona 5";
                                    echo "<br>";
                                    if($peso<5.1){
                                        $pesotasaDHL=3.60;
                                        echo $pesotasaDHL." €";
                                        echo "<br>";
                                    }
                                    elseif($peso<10.1){
                                        $pesotasaDHL=3.60;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    }
                                    elseif($peso<20.1){
                                        $pesotasaDHL=4.77;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<30.1){
                                        $pesotasaDHL=6.17;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<40.1){
                                        $pesotasaDHL=7.44;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<50.1){
                                        $pesotasaDHL=8.50;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<60.1){
                                        $pesotasaDHL=9.59;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<70.1){
                                        $pesotasaDHL=10.67;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<80.1){
                                        $pesotasaDHL=11.76;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<90.1){
                                        $pesotasaDHL=12.79;
                                        echo $pesotasaDHL." €";
                                        echo "<br>";
                                    }
                                    elseif($peso<100.1){
                                        $pesotasaDHL=13.93;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    }
                                    elseif($peso<125.1){
                                        $pesotasaDHL=15.84;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<150.1){
                                        $pesotasaDHL=18.45;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<175.1){
                                        $pesotasaDHL=23.12;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<200.1){
                                        $pesotasaDHL=25.86;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<250.1){
                                        $pesotasaDHL=29.45;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<300.1){
                                        $pesotasaDHL=33.28;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<350.1){
                                        $pesotasaDHL=38.27;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<400.1){
                                        $pesotasaDHL=42.28;
                                        echo $pesotasaDHL." €";
                                        echo "<br>";
                                    }
                                    elseif($peso<450.1){
                                        $pesotasaDHL=46.35;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    }
                                    elseif($peso<500.1){
                                        $pesotasaDHL=50.60;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<600.1){
                                        $pesotasaDHL=61.22;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<700.1){
                                        $pesotasaDHL=69.67;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<800.1){
                                        $pesotasaDHL=78.20;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<900.1){
                                        $pesotasaDHL=86.87;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<1000.1){
                                        $pesotasaDHL=96.74;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso>=1000.1){
                                        $pesotasaDHL= 96.74 + ($pesosMayoresDHL * 0.88);
                                        echo $pesosMayoresDHL;
                                        echo "<br>";
                                        echo "Tasa + PESO DHL ".number_format($pesotasaASM, 2).' €';
                                        echo "<br>";              
                                    } 

                                }elseif ($idprovto == 46 || $idprovto == 12 || $idprovto == 44
                                         || $idprovto == 50 || $idprovto == 42 || $idprovto == 9 
                                         || $idprovto == 34 || $idprovto == 24 || $idprovto ==1) {

                                    echo "Zona 6";
                                    echo "<br>";
                                    if($peso<5.1){
                                        $pesotasaDHL=3.60;
                                        echo $pesotasaDHL." €";
                                        echo "<br>";
                                    }
                                    elseif($peso<10.1){
                                        $pesotasaDHL=3.64;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    }
                                    elseif($peso<20.1){
                                        $pesotasaDHL=5.23;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<30.1){
                                        $pesotasaDHL=6.77;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<40.1){
                                        $pesotasaDHL=8.16;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<50.1){
                                        $pesotasaDHL=9.34;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<60.1){
                                        $pesotasaDHL=10.53;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<70.1){
                                        $pesotasaDHL=11.72;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<80.1){
                                        $pesotasaDHL=12.92;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<90.1){
                                        $pesotasaDHL=14.05;
                                        echo $pesotasaDHL." €";
                                        echo "<br>";
                                    }
                                    elseif($peso<100.1){
                                        $pesotasaDHL=15.28;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    }
                                    elseif($peso<125.1){
                                        $pesotasaDHL=17.39;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<150.1){
                                        $pesotasaDHL=20.24;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<175.1){
                                        $pesotasaDHL=25.36;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<200.1){
                                        $pesotasaDHL=28.39;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<250.1){
                                        $pesotasaDHL=32.34;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<300.1){
                                        $pesotasaDHL=36.53;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<350.1){
                                        $pesotasaDHL=41.99;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<400.1){
                                        $pesotasaDHL=46.41;
                                        echo $pesotasaDHL." €";
                                        echo "<br>";
                                    }
                                    elseif($peso<450.1){
                                        $pesotasaDHL=50.87;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    }
                                    elseif($peso<500.1){
                                        $pesotasaDHL=55.54;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<600.1){
                                        $pesotasaDHL=67.21;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<700.1){
                                        $pesotasaDHL=76.48;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<800.1){
                                        $pesotasaDHL=85.84;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<900.1){
                                        $pesotasaDHL=95.35;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<1000.1){
                                        $pesotasaDHL=106.17;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso>=1000.1){
                                        $pesotasaDHL= 106.17 + ($pesosMayoresDHL * 0.966);
                                        echo $pesosMayoresDHL;
                                        echo "<br>";
                                        echo "Tasa + PESO DHL ".number_format($pesotasaDHL, 2).' €';
                                        echo "<br>";              
                                    } 

                                } elseif ($idprovto == 43 || $idprovto == 8 
                                          || $idprovto == 20 || $idprovto == 31 || $idprovto == 26 ) {

                                    echo "Zona 7";
                                    echo "<br>";
                                    if($peso<5.1){
                                        $pesotasaDHL=3.64;
                                        echo $pesotasaDHL." €";
                                        echo "<br>";
                                    }
                                    elseif($peso<10.1){
                                        $pesotasaDHL=3.87;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    }
                                    elseif($peso<20.1){
                                        $pesotasaDHL=5.58;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<30.1){
                                        $pesotasaDHL=7.24;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<40.1){
                                        $pesotasaDHL=8.71;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<50.1){
                                        $pesotasaDHL=9.96;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<60.1){
                                        $pesotasaDHL=11.22;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<70.1){
                                        $pesotasaDHL=12.50;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<80.1){
                                        $pesotasaDHL=13.77;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<90.1){
                                        $pesotasaDHL=15.00;
                                        echo $pesotasaDHL." €";
                                        echo "<br>";
                                    }
                                    elseif($peso<100.1){
                                        $pesotasaDHL=16.32;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    }
                                    elseif($peso<125.1){
                                        $pesotasaDHL=18.54;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<150.1){
                                        $pesotasaDHL=21.60;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<175.1){
                                        $pesotasaDHL=27.07;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<200.1){
                                        $pesotasaDHL=30.29;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<250.1){
                                        $pesotasaDHL=34.50;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<300.1){
                                        $pesotasaDHL=38.97;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<350.1){
                                        $pesotasaDHL=44.80;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<400.1){
                                        $pesotasaDHL=49.52;
                                        echo $pesotasaDHL." €";
                                        echo "<br>";
                                    }
                                    elseif($peso<450.1){
                                        $pesotasaDHL=54.27;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    }
                                    elseif($peso<500.1){
                                        $pesotasaDHL=59.25;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<600.1){
                                        $pesotasaDHL=71.70;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<700.1){
                                        $pesotasaDHL=81.58;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<800.1){
                                        $pesotasaDHL=91.58;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<900.1){
                                        $pesotasaDHL=101.73;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<1000.1){
                                        $pesotasaDHL=113.28;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso>=1000.1){
                                        $pesotasaDHL= 113.28 + ($pesosMayoresDHL * 0.1031);
                                        echo $pesosMayoresDHL;
                                        echo "<br>";
                                        echo "Tasa + PESO DHL ".number_format($pesotasaDHL, 2).' €';
                                        echo "<br>";             
                                    } 
                                } elseif ($idprovto == 36 || $idprovto == 15
                                          ||$idprovto == 27 || $idprovto == 32
                                          || $idprovto == 33 || $idprovto == 39
                                          || $idprovto == 48 || $idprovto == 22
                                          || $idprovto == 25 || $idprovto == 17 ){

                                    echo "Zona 8";
                                    echo "<br>";
                                    if($peso<5.1){
                                        $pesotasaDHL=3.86;
                                        echo $pesotasaDHL." €";
                                        echo "<br>";
                                    }
                                    elseif($peso<10.1){
                                        $pesotasaDHL=4.11;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    }
                                    elseif($peso<20.1){
                                        $pesotasaDHL=5.93;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<30.1){
                                        $pesotasaDHL=7.68;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<40.1){
                                        $pesotasaDHL=9.25;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<50.1){
                                        $pesotasaDHL=10.58;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<60.1){
                                        $pesotasaDHL=11.93;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<70.1){
                                        $pesotasaDHL=13.28;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<80.1){
                                        $pesotasaDHL=14.63;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<90.1){
                                        $pesotasaDHL=15.92;
                                        echo $pesotasaDHL." €";
                                        echo "<br>";
                                    }
                                    elseif($peso<100.1){
                                        $pesotasaDHL=17.33;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    }
                                    elseif($peso<125.1){
                                        $pesotasaDHL=19.70;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<150.1){
                                        $pesotasaDHL=22.95;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<175.1){
                                        $pesotasaDHL=28.76;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<200.1){
                                        $pesotasaDHL=32.18;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<250.1){
                                        $pesotasaDHL=36.64;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<300.1){
                                        $pesotasaDHL=41.40;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<350.1){
                                        $pesotasaDHL=47.60;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<400.1){
                                        $pesotasaDHL=52.59;
                                        echo $pesotasaDHL." €";
                                        echo "<br>";
                                    }
                                    elseif($peso<450.1){
                                        $pesotasaDHL=57.67;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    }
                                    elseif($peso<500.1){
                                        $pesotasaDHL=62.94;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<600.1){
                                        $pesotasaDHL=76.18;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<700.1){
                                        $pesotasaDHL=86.65;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<800.1){
                                        $pesotasaDHL=97.28;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<900.1){
                                        $pesotasaDHL=108.06;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<1000.1){
                                        $pesotasaDHL=120.35;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso>=1000.1){
                                        $pesotasaDHL= 120.35 + ($pesosMayoresDHL * 0.1095);
                                        echo $pesosMayoresDHL;
                                        echo "<br>";
                                        echo "Tasa + PESO DHL ".number_format($pesotasaDHL, 2).' €';
                                        echo "<br>";             
                                    }
                                } elseif ($idprovto == 7) {
                                    echo "Zona 9";
                                    echo "<br>";
                                    if($peso<5.1){
                                        $pesotasaDHL=6.23;
                                        echo $pesotasaDHL." €";
                                        echo "<br>";
                                    }
                                    elseif($peso<10.1){
                                        $pesotasaDHL=6.66;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    }
                                    elseif($peso<20.1){
                                        $pesotasaDHL=9.59;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<30.1){
                                        $pesotasaDHL=12.42;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<40.1){
                                        $pesotasaDHL=14.96;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<50.1){
                                        $pesotasaDHL=17.12;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<60.1){
                                        $pesotasaDHL=19.29;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<70.1){
                                        $pesotasaDHL=21.47;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<80.1){
                                        $pesotasaDHL=23.67;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<90.1){
                                        $pesotasaDHL=25.74;
                                        echo $pesotasaDHL." €";
                                        echo "<br>";
                                    }
                                    elseif($peso<100.1){
                                        $pesotasaDHL=28.02;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    }
                                    elseif($peso<125.1){
                                        $pesotasaDHL=31.87;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<150.1){
                                        $pesotasaDHL=37.12;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<175.1){
                                        $pesotasaDHL=46.50;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<200.1){
                                        $pesotasaDHL=52.03;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<250.1){
                                        $pesotasaDHL=59.25;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<300.1){
                                        $pesotasaDHL=66.94;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<350.1){
                                        $pesotasaDHL=76.97;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<400.1){
                                        $pesotasaDHL=85.07;
                                        echo $pesotasaDHL." €";
                                        echo "<br>";
                                    }
                                    elseif($peso<450.1){
                                        $pesotasaDHL=93.25;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    }
                                    elseif($peso<500.1){
                                        $pesotasaDHL=101.77;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<600.1){
                                        $pesotasaDHL=123.17;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<700.1){
                                        $pesotasaDHL=140.14;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<800.1){
                                        $pesotasaDHL=157.32;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<900.1){
                                        $pesotasaDHL=174.74;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso<1000.1){
                                        $pesotasaDHL=194.60;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($peso>=1000.1){
                                        $pesotasaDHL= 194.60 + ($pesosMayoresDHL * 0.1771);
                                        echo $pesosMayoresDHL;
                                        echo "<br>";
                                        echo "Tasa + PESO DHL ".number_format($pesotasaDHL, 2).' €';
                                        echo "<br>";            
                                    } 
                                }
                            } elseif ($peso < $pvdhl) {
                                $pesosMayoresDHL= round($pvdhl - 1000);
                                echo calcvol($pvdhl);
                                echo "<br>";
                                if ($idprovto == 41){
                                    echo "Zona 1";
                                    echo "<br>";
                                    if($pvdhl<5.1){
                                        $pesotasaDHL=3.60;
                                        echo $pesotasaDHL." €";
                                        echo "<br>";
                                    }
                                    elseif($pvdhl<10.1){
                                        $pesotasaDHL=3.60;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    }
                                    elseif($pvdhl<20.1){
                                        $pesotasaDHL=3.60;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<30.1){
                                        $pesotasaDHL=3.60;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<40.1){
                                        $pesotasaDHL=4.05;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<50.1){
                                        $pesotasaDHL=4.62;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<60.1){
                                        $pesotasaDHL=5.17;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<70.1){
                                        $pesotasaDHL=5.75;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<80.1){
                                        $pesotasaDHL=6.33;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<90.1){
                                        $pesotasaDHL=6.93;
                                        echo $pesotasaDHL." €";
                                        echo "<br>";
                                    }
                                    elseif($pvdhl<100.1){
                                        $pesotasaDHL=7.52;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    }
                                    elseif($pvdhl<125.1){
                                        $pesotasaDHL=8.47;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<150.1){
                                        $pesotasaDHL=9.92;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<175.1){
                                        $pesotasaDHL=12.43;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<200.1){
                                        $pesotasaDHL=13.94;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<250.1){
                                        $pesotasaDHL=15.84;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<300.1){
                                        $pesotasaDHL=17.79;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<=350){
                                        $pesotasaDHL=20.30;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<400.1){
                                        $pesotasaDHL=22.38;
                                        echo $pesotasaDHL." €";
                                        echo "<br>";
                                    }
                                    elseif($pvdhl<450.1){
                                        $pesotasaDHL=24.22;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    }
                                    elseif($pvdhl<500.1){
                                        $pesotasaDHL=26.19;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<600.1){
                                        $pesotasaDHL=29.97;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<700.1){
                                        $pesotasaDHL=33.68;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<800.1){
                                        $pesotasaDHL=37.14;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<900.1){
                                        $pesotasaDHL=40.94;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<1000.1){
                                        $pesotasaDHL=45.14;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl>1000){
                                        $pesotasaDHL= 45.14 + ($pesosMayoresDHL * 0.41);
                                        echo $pesosMayoresDHL;
                                        echo "<br>";
                                        echo "Tasa + PESO DHL ".number_format($pesotasaDHL, 2).' €';
                                        echo "<br>";              
                                    } 



                                } elseif ($idprovto == 11 || $idprovto == 21 || $idprovto == 29 || $idprovto == 14) {
                                    echo "Zona 2";
                                    echo "<br>";
                                    if($pvdhl<5.1){
                                        $pesotasaDHL=3.60;
                                        echo $pesotasaDHL." €";
                                        echo "<br>";
                                    }
                                    elseif($pvdhl<10.1){
                                        $pesotasaDHL=3.60;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    }
                                    elseif($pvdhl<20.1){
                                        $pesotasaDHL=3.60;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<30.1){
                                        $pesotasaDHL=3.97;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<40.1){
                                        $pesotasaDHL=4.69;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<50.1){
                                        $pesotasaDHL=5.36;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<60.1){
                                        $pesotasaDHL=6.13;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<70.1){
                                        $pesotasaDHL=6.82;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<80.1){
                                        $pesotasaDHL=7.52;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<90.1){
                                        $pesotasaDHL=7.74;
                                        echo $pesotasaDHL." €";
                                        echo "<br>";
                                    }
                                    elseif($pvdhl<100.1){
                                        $pesotasaDHL=8.42;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    }
                                    elseif($pvdhl<125.1){
                                        $pesotasaDHL=9.51;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<150.1){
                                        $pesotasaDHL=11.11;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<175.1){
                                        $pesotasaDHL=13.94;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<200.1){
                                        $pesotasaDHL=15.60;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<250.1){
                                        $pesotasaDHL=17.75;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<300.1){
                                        $pesotasaDHL=19.98;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<=350){
                                        $pesotasaDHL=22.86;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<400.1){
                                        $pesotasaDHL=25.09;
                                        echo $pesotasaDHL." €";
                                        echo "<br>";
                                    }
                                    elseif($pvdhl<450.1){
                                        $pesotasaDHL=27.45;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    }
                                    elseif($pvdhl<500.1){
                                        $pesotasaDHL=29.80;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<600.1){
                                        $pesotasaDHL=33.68;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<700.1){
                                        $pesotasaDHL=38.01;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<800.1){
                                        $pesotasaDHL=42.16;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<900.1){
                                        $pesotasaDHL=46.58;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<1000.1){
                                        $pesotasaDHL=51.54;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl>1000){
                                        $pesotasaDHL= 51.54 + ($pesosMayoresDHL * 0.47);
                                        echo $pesosMayoresDHL;
                                        echo "<br>";
                                        echo "Tasa + PESO DHL ".number_format($pesotasaDHL, 2).' €';
                                        echo "<br>";              
                                    } 
                                } elseif ($idprovto == 18 || $idprovto == 23 || $idprovto == 6) {
                                    echo "zona 3";
                                    echo "<br>";
                                    if($pvdhl<5.1){
                                        $pesotasaDHL=3.60;
                                        echo $pesotasaDHL." €";
                                        echo "<br>";
                                    }
                                    elseif($pvdhl<10.1){
                                        $pesotasaDHL=3.60;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    }
                                    elseif($pvdhl<20.1){
                                        $pesotasaDHL=3.60;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<30.1){
                                        $pesotasaDHL=4.51;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<40.1){
                                        $pesotasaDHL=5.44;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<50.1){
                                        $pesotasaDHL=6.22;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<60.1){
                                        $pesotasaDHL=7.01;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<70.1){
                                        $pesotasaDHL=7.82;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<80.1){
                                        $pesotasaDHL=8.61;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<90.1){
                                        $pesotasaDHL=9.37;
                                        echo $pesotasaDHL." €";
                                        echo "<br>";
                                    }
                                    elseif($pvdhl<100.1){
                                        $pesotasaDHL=10.20;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    }
                                    elseif($pvdhl<125.1){
                                        $pesotasaDHL=11.60;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<150.1){
                                        $pesotasaDHL=13.50;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<175.1){
                                        $pesotasaDHL=16.92;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<200.1){
                                        $pesotasaDHL=18.93;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<250.1){
                                        $pesotasaDHL=21.55;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<300.1){
                                        $pesotasaDHL=24.36;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<=350){
                                        $pesotasaDHL=28.00;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<400.1){
                                        $pesotasaDHL=30.94;
                                        echo $pesotasaDHL." €";
                                        echo "<br>";
                                    }
                                    elseif($pvdhl<450.1){
                                        $pesotasaDHL=33.92;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    }
                                    elseif($pvdhl<500.1){
                                        $pesotasaDHL=37.02;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<600.1){
                                        $pesotasaDHL=44.80;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<700.1){
                                        $pesotasaDHL=50.99;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<800.1){
                                        $pesotasaDHL=57.21;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<900.1){
                                        $pesotasaDHL=63.55;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<1000.1){
                                        $pesotasaDHL=70.77;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl>1000){
                                        $pesotasaDHL= 70.77 + ($pesosMayoresDHL * 0.645);
                                        echo $pesosMayoresDHL;
                                        echo "<br>";
                                        echo "Tasa + PESO DHL ".number_format($pesotasaDHL, 2).' €';
                                        echo "<br>";              
                                    } 
                                } elseif ($idprovto == 10 || $idprovto == 4 || $idprovto == 13) {
                                    echo "Zona 4";
                                    echo "<br>";
                                    if($pvdhl<5.1){
                                        $pesotasaDHL=3.60;
                                        echo $pesotasaDHL." €";
                                        echo "<br>";
                                    }
                                    elseif($pvdhl<10.1){
                                        $pesotasaDHL=3.60;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    }
                                    elseif($pvdhl<20.1){
                                        $pesotasaDHL=4.18;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<30.1){
                                        $pesotasaDHL=5.42;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<40.1){
                                        $pesotasaDHL=6.53;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<50.1){
                                        $pesotasaDHL=7.47;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<60.1){
                                        $pesotasaDHL=8.43;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<70.1){
                                        $pesotasaDHL=9.38;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<80.1){
                                        $pesotasaDHL=10.33;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<90.1){
                                        $pesotasaDHL=11.24;
                                        echo $pesotasaDHL." €";
                                        echo "<br>";
                                    }
                                    elseif($pvdhl<100.1){
                                        $pesotasaDHL=12.23;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    }
                                    elseif($pvdhl<125.1){
                                        $pesotasaDHL=13.91;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<150.1){
                                        $pesotasaDHL=16.20;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<175.1){
                                        $pesotasaDHL=20.30;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<200.1){
                                        $pesotasaDHL=22.72;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<250.1){
                                        $pesotasaDHL=25.86;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<300.1){
                                        $pesotasaDHL=29.22;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<=350){
                                        $pesotasaDHL=33.60;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<400.1){
                                        $pesotasaDHL=37.13;
                                        echo $pesotasaDHL." €";
                                        echo "<br>";
                                    }
                                    elseif($pvdhl<450.1){
                                        $pesotasaDHL=40.69;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    }
                                    elseif($pvdhl<500.1){
                                        $pesotasaDHL=44.42;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<600.1){
                                        $pesotasaDHL=53.75;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<700.1){
                                        $pesotasaDHL=61.16;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<800.1){
                                        $pesotasaDHL=68.65;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<900.1){
                                        $pesotasaDHL=76.26;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<1000.1){
                                        $pesotasaDHL=84.94;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl>1000){
                                        $pesotasaDHL= 84.94 + ($pesosMayoresDHL * 0.774);
                                        echo $pesosMayoresDHL;
                                        echo "<br>";
                                        echo "Tasa + PESO DHL ".number_format($pesotasaDHL, 2).' €';
                                        echo "<br>";              
                                    } 
                                } elseif ($idprovto == 3 || $idprovto == 30 || $idprovto == 2
                                          || $idprovto == 16 || $idprovto == 19  || $idprovto == 45 
                                          || $idprovto == 28 || $idprovto == 40 || $idprovto == 5 
                                          || $idprovto == 37 || $idprovto == 47 || $idprovto == 49) {

                                    echo "Zona 5";
                                    echo "<br>";
                                    if($pvdhl<5.1){
                                        $pesotasaDHL=3.60;
                                        echo $pesotasaDHL." €";
                                        echo "<br>";
                                    }
                                    elseif($pvdhl<10.1){
                                        $pesotasaDHL=3.60;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    }
                                    elseif($pvdhl<20.1){
                                        $pesotasaDHL=4.77;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<30.1){
                                        $pesotasaDHL=6.17;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<40.1){
                                        $pesotasaDHL=7.44;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<50.1){
                                        $pesotasaDHL=8.50;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<60.1){
                                        $pesotasaDHL=9.59;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<70.1){
                                        $pesotasaDHL=10.67;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<80.1){
                                        $pesotasaDHL=11.76;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<90.1){
                                        $pesotasaDHL=12.79;
                                        echo $pesotasaDHL." €";
                                        echo "<br>";
                                    }
                                    elseif($pvdhl<100.1){
                                        $pesotasaDHL=13.93;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    }
                                    elseif($pvdhl<125.1){
                                        $pesotasaDHL=15.84;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<150.1){
                                        $pesotasaDHL=18.45;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<175.1){
                                        $pesotasaDHL=23.12;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<200.1){
                                        $pesotasaDHL=25.86;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<250.1){
                                        $pesotasaDHL=29.45;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<300.1){
                                        $pesotasaDHL=33.28;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<=350){
                                        $pesotasaDHL=38.27;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<400.1){
                                        $pesotasaDHL=42.28;
                                        echo $pesotasaDHL." €";
                                        echo "<br>";
                                    }
                                    elseif($pvdhl<450.1){
                                        $pesotasaDHL=46.35;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    }
                                    elseif($pvdhl<500.1){
                                        $pesotasaDHL=50.60;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<600.1){
                                        $pesotasaDHL=61.22;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<700.1){
                                        $pesotasaDHL=69.67;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<800.1){
                                        $pesotasaDHL=78.20;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<900.1){
                                        $pesotasaDHL=86.87;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<1000.1){
                                        $pesotasaDHL=96.74;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl>1000){
                                        $pesotasaDHL= 96.74 + ($pesosMayoresDHL * 0.88);
                                        echo $pesosMayoresDHL;
                                        echo "<br>";
                                        echo "Tasa + PESO DHL ".number_format($pesotasaDHL, 2).' €';
                                        echo "<br>";              
                                    } 

                                }elseif ($idprovto == 46 || $idprovto == 12 || $idprovto == 44
                                         || $idprovto == 50 || $idprovto == 42 || $idprovto == 9 
                                         || $idprovto == 34 || $idprovto == 24 || $idprovto ==1) {

                                    echo "Zona 6";
                                    echo "<br>";
                                    if($pvdhl<5.1){
                                        $pesotasaDHL=3.60;
                                        echo $pesotasaDHL." €";
                                        echo "<br>";
                                    }
                                    elseif($pvdhl<10.1){
                                        $pesotasaDHL=3.64;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    }
                                    elseif($pvdhl<20.1){
                                        $pesotasaDHL=5.23;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<30.1){
                                        $pesotasaDHL=6.77;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<40.1){
                                        $pesotasaDHL=8.16;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<50.1){
                                        $pesotasaDHL=9.34;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<60.1){
                                        $pesotasaDHL=10.53;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<70.1){
                                        $pesotasaDHL=11.72;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<80.1){
                                        $pesotasaDHL=12.92;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<90.1){
                                        $pesotasaDHL=14.05;
                                        echo $pesotasaDHL." €";
                                        echo "<br>";
                                    }
                                    elseif($pvdhl<100.1){
                                        $pesotasaDHL=15.28;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    }
                                    elseif($pvdhl<125.1){
                                        $pesotasaDHL=17.39;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<150.1){
                                        $pesotasaDHL=20.24;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<175.1){
                                        $pesotasaDHL=25.36;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<200.1){
                                        $pesotasaDHL=28.39;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<250.1){
                                        $pesotasaDHL=32.34;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<300.1){
                                        $pesotasaDHL=36.53;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<=350){
                                        $pesotasaDHL=41.99;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<400.1){
                                        $pesotasaDHL=46.41;
                                        echo $pesotasaDHL." €";
                                        echo "<br>";
                                    }
                                    elseif($pvdhl<450.1){
                                        $pesotasaDHL=50.87;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    }
                                    elseif($pvdhl<500.1){
                                        $pesotasaDHL=55.54;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<600.1){
                                        $pesotasaDHL=67.21;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<700.1){
                                        $pesotasaDHL=76.48;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<800.1){
                                        $pesotasaDHL=85.84;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<900.1){
                                        $pesotasaDHL=95.35;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<1000.1){
                                        $pesotasaDHL=106.17;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl>1000){
                                        $pesotasaDHL= 106.17 + ($pesosMayoresDHL * 0.966);
                                        echo $pesosMayoresDHL;
                                        echo "<br>";
                                        echo "Tasa + PESO DHL ".number_format($pesotasaDHL, 2).' €';
                                        echo "<br>";              
                                    } 

                                } elseif ($idprovto == 43 || $idprovto == 8 
                                          || $idprovto == 20 || $idprovto == 31 || $idprovto == 26) {

                                    echo "Zona 7";
                                    echo "<br>";
                                    if($pvdhl<5.1){
                                        $pesotasaDHL=3.64;
                                        echo $pesotasaDHL." €";
                                        echo "<br>";
                                    }
                                    elseif($pvdhl<10.1){
                                        $pesotasaDHL=3.87;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    }
                                    elseif($pvdhl<20.1){
                                        $pesotasaDHL=5.58;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<30.1){
                                        $pesotasaDHL=7.24;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<40.1){
                                        $pesotasaDHL=8.71;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<50.1){
                                        $pesotasaDHL=9.96;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<60.1){
                                        $pesotasaDHL=11.22;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<70.1){
                                        $pesotasaDHL=12.50;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<80.1){
                                        $pesotasaDHL=13.77;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<90.1){
                                        $pesotasaDHL=15.00;
                                        echo $pesotasaDHL." €";
                                        echo "<br>";
                                    }
                                    elseif($pvdhl<100.1){
                                        $pesotasaDHL=16.32;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    }
                                    elseif($pvdhl<125.1){
                                        $pesotasaDHL=18.54;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<150.1){
                                        $pesotasaDHL=21.60;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<175.1){
                                        $pesotasaDHL=27.07;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<200.1){
                                        $pesotasaDHL=30.29;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<250.1){
                                        $pesotasaDHL=34.50;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<300.1){
                                        $pesotasaDHL=38.97;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<=350){
                                        $pesotasaDHL=44.80;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<400.1){
                                        $pesotasaDHL=49.52;
                                        echo $pesotasaDHL." €";
                                        echo "<br>";
                                    }
                                    elseif($pvdhl<450.1){
                                        $pesotasaDHL=54.27;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    }
                                    elseif($pvdhl<500.1){
                                        $pesotasaDHL=59.25;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<600.1){
                                        $pesotasaDHL=71.70;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<700.1){
                                        $pesotasaDHL=81.58;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<800.1){
                                        $pesotasaDHL=91.58;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<900.1){
                                        $pesotasaDHL=101.73;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<1000.1){
                                        $pesotasaDHL=113.28;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl>1000){
                                        $pesotasaDHL= 113.28 + ($pesosMayoresDHL * 0.1031);
                                        echo $pesosMayoresDHL;
                                        echo "<br>";
                                        echo "Tasa + PESO DHL ".number_format($pesotasaDHL, 2).' €';
                                        echo "<br>";              
                                    } 
                                } elseif ($idprovto == 36 || $idprovto == 15
                                          ||$idprovto == 27 || $idprovto == 32
                                          || $idprovto == 33 || $idprovto == 39
                                          || $idprovto == 48 || $idprovto == 22
                                          || $idprovto == 25 || $idprovto == 17 ){
                                    echo "Zona 8";
                                    echo "<br>";
                                    if($pvdhl<5.1){
                                        $pesotasaDHL=3.86;
                                        echo $pesotasaDHL." €";
                                        echo "<br>";
                                    }
                                    elseif($pvdhl<10.1){
                                        $pesotasaDHL=4.11;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    }
                                    elseif($pvdhl<20.1){
                                        $pesotasaDHL=5.93;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<30.1){
                                        $pesotasaDHL=7.68;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<40.1){
                                        $pesotasaDHL=9.25;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<50.1){
                                        $pesotasaDHL=10.58;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<60.1){
                                        $pesotasaDHL=11.93;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<70.1){
                                        $pesotasaDHL=13.28;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<80.1){
                                        $pesotasaDHL=14.63;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<90.1){
                                        $pesotasaDHL=15.92;
                                        echo $pesotasaDHL." €";
                                        echo "<br>";
                                    }
                                    elseif($pvdhl<100.1){
                                        $pesotasaDHL=17.33;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    }
                                    elseif($pvdhl<125.1){
                                        $pesotasaDHL=19.70;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<150.1){
                                        $pesotasaDHL=22.95;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<175.1){
                                        $pesotasaDHL=28.76;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<200.1){
                                        $pesotasaDHL=32.18;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<250.1){
                                        $pesotasaDHL=36.64;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<300.1){
                                        $pesotasaDHL=41.40;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<=350){
                                        $pesotasaDHL=47.60;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<400.1){
                                        $pesotasaDHL=52.59;
                                        echo $pesotasaDHL." €";
                                        echo "<br>";
                                    }
                                    elseif($pvdhl<450.1){
                                        $pesotasaDHL=57.67;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    }
                                    elseif($pvdhl<500.1){
                                        $pesotasaDHL=62.94;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<600.1){
                                        $pesotasaDHL=76.18;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<700.1){
                                        $pesotasaDHL=86.65;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<800.1){
                                        $pesotasaDHL=97.28;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<900.1){
                                        $pesotasaDHL=108.06;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<1000.1){
                                        $pesotasaDHL=120.35;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl>= 1000.1){
                                        $pesotasaDHL= 120.35 + ($pesosMayoresDHL * 0.1095);
                                        echo $pesosMayoresDHL;
                                        echo "<br>";
                                        echo "Tasa + PESO DHL ".number_format($pesotasaDHL, 2).' €';
                                        echo "<br>";              
                                    }
                                }  elseif ($idprovto == 7) {
                                    echo "Zona 9";
                                    echo "<br>";
                                    if($pvdhl<5.1){
                                        $pesotasaDHL=6.23;
                                        echo $pesotasaDHL." €";
                                        echo "<br>";
                                    }
                                    elseif($pvdhl<10.1){
                                        $pesotasaDHL=6.66;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    }
                                    elseif($pvdhl<20.1){
                                        $pesotasaDHL=9.59;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<30.1){
                                        $pesotasaDHL=12.42;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<40.1){
                                        $pesotasaDHL=14.96;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<50.1){
                                        $pesotasaDHL=17.12;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<60.1){
                                        $pesotasaDHL=19.29;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<70.1){
                                        $pesotasaDHL=21.47;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<80.1){
                                        $pesotasaDHL=23.67;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<90.1){
                                        $pesotasaDHL=25.74;
                                        echo $pesotasaDHL." €";
                                        echo "<br>";
                                    }
                                    elseif($pvdhl<100.1){
                                        $pesotasaDHL=28.02;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    }
                                    elseif($pvdhl<125.1){
                                        $pesotasaDHL=31.87;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<150.1){
                                        $pesotasaDHL=37.12;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<175.1){
                                        $pesotasaDHL=46.50;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<200.1){
                                        $pesotasaDHL=52.03;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<250.1){
                                        $pesotasaDHL=59.25;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<300.1){
                                        $pesotasaDHL=66.94;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<350.1){
                                        $pesotasaDHL=76.97;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<400.1){
                                        $pesotasaDHL=85.07;
                                        echo $pesotasaDHL." €";
                                        echo "<br>";
                                    }
                                    elseif($pvdhl<450.1){
                                        $pesotasaDHL=93.25;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    }
                                    elseif($pvdhl<500.1){
                                        $pesotasaDHL=101.77;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<600.1){
                                        $pesotasaDHL=123.17;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<700.1){
                                        $pesotasaDHL=140.14;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<800.1){
                                        $pesotasaDHL=157.32;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<900.1){
                                        $pesotasaDHL=174.74;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl<1000.1){
                                        $pesotasaDHL=194.60;
                                        echo $pesotasaDHL.' €';
                                        echo "<br>";            
                                    } 
                                    elseif($pvdhl>=1000.1){
                                        $pesotasaDHL= 194.60 + ($pesosMayoresDHL * 0.1771);
                                        echo $pesosMayoresDHL;
                                        echo "<br>";
                                        echo "Tasa + PESO DHL ".number_format($pesotasaDHL, 2).' €';
                                        echo "<br>";            
                                    } 
                                }
                            }
                            ?>
                        </h4>
                        <input type="hidden" name="tasadhl" value="<?php echo $pesotasaDHL; ?>">

                    </div>
                    <div id="fuel" hidden="">
                        <h4>
                            <?php
                            if (!empty($pesotasaDHL)) {
                                $fuelDHL = number_format(($pesotasaDHL * 2.5)/100 , 2);
                                echo $fuelDHL.' €';
                            } else {
                                echo "No has introducido datos";
                            }

                            ?>
                        </h4>
                        <input type="hidden" name="fueldhl" value="<?php echo $fuelDHL; ?>">

                    </div>
                    <div id="Reembolso" hidden="">
                        <h4>
                            <?php
                            $reembolsoDHL = ($reembolso * 2)/100;
                            if (!empty($reembolso) && !empty($pesotasaDHL)) {
                                if ($reembolsoDHL < 2){
                                    $reembolsoDHL = 2;
                                }
                                echo $reembolsoDHL . ' €';
                            } elseif (empty($pesotasaDHL) && !empty($reembolso)) {
                                echo "No has introducido datos";
                            }
                            else {
                                echo "No has escrito ninguna cifra";
                            }

                            ?>
                        </h4>
                        <input type="hidden" name="reembolsodhl" value="<?php echo $reembolsoDHL; ?>">
                    </div>
                    <div id="precio final">
                        <h4>
                            <?php
                            if (!empty($pesotasaDHL)) {
                                $finalDHL = $reembolsoDHL + $pesotasaDHL +$fuelDHL;
                                echo number_format(($finalDHL),2).' €';
                            } else{
                                echo "no has introducido datos";
                            }

                            ?>
                        </h4>
                        <input type="hidden" name="finaldhl" value="<?php echo $finalDHL; ?>">

                    </div>
                </div>
                <!-- Fin pro-header -->
                <div class="pricing-table-features pro-features">
                    <!-- Inicio pro-features -->
                    <?php $nombreDHL = "DHL"; ?>
                    <input type="hidden" name="nombredhl" value="<?php echo $nombreDHL; ?>">
                    <img class="img-responsive" />
                </div>
                <!-- Fin pro-features -->
                <div class="pricing-table-signup-pro">
                    <!-- Inicio pro-singnup -->
                    <button class="btn-pro" type="submit" name="btndhl" onclick="alert('Has seleccionado DHL')">Elegir</button>
                </div>
                <!-- Fin pro-signup  -->
            </div>
            <!-- Fin pro -->

            <!-- Redur -->
            <div class="span2 ultimate">
                <!-- Inicio ultimate -->
                <div class="pricing-table-header-ultimate">
                    <!-- Inicio ultimate-header -->
                    <div id="tasa/peso">
                        <h4 ngmodule>

                            <?php
                            if (empty($largo2) && empty($ancho2) && empty($alto2)
                                && empty($largo3) && empty($ancho3) && empty($alto3)
                                &&empty($largo4) && empty($ancho4) && empty($alto4)
                                && empty($largo5) && empty($ancho5) && empty($alto5)
                                && empty($largo6) && empty($ancho6) && empty($alto6)) {
                                $pvredur = $largo * $ancho * $alto * 270 / 1000000;

                            } elseif (!empty($largo2) && !empty($ancho2) && !empty($alto2)
                                      && empty($largo3) && empty($ancho3) && empty($alto3)
                                      && empty($largo4) && empty($ancho4) && empty($alto4)
                                      && empty($largo5) && empty($ancho5) && empty($alto5)
                                      && empty($largo6) && empty($ancho6) && empty($alto6)) {

                                $pvredur = $largo * $ancho * $alto * 270 / 1000000;
                                $pvredur2 = $largo2 * $ancho2 * $alto2 * 270 / 1000000;
                                $pvredur = $pvredur + $pvredur2;

                            } elseif (!empty($largo2) && !empty($ancho2) && !empty($alto2)
                                      && !empty($largo3) && !empty($ancho3) && !empty($alto3)
                                      && empty($largo4) && empty($ancho4) && empty($alto4)
                                      && empty($largo5) && empty($ancho5) && empty($alto5)
                                      && empty($largo6) && empty($ancho6) && empty($alto6)) {

                                $pvredur = $largo * $ancho * $alto * 270 / 1000000;
                                $pvredur2 = $largo2 * $ancho2 * $alto2 * 270 / 1000000;
                                $pvredur3 = $largo3 * $ancho3 * $alto3 * 270 / 1000000;
                                $pvredur = $pvredur + $pvredur2 +$pvredur3;

                            } elseif (!empty($largo2) && !empty($ancho2) && !empty($alto2)
                                      && !empty($largo3) && !empty($ancho3) && !empty($alto3)
                                      && !empty($largo4) && !empty($ancho4) && !empty($alto4)
                                      && empty($largo5) && empty($ancho5) && empty($alto5)
                                      && empty($largo6) && empty($ancho6) && empty($alto6)) {
                                $pvredur = $largo * $ancho * $alto * 270 / 1000000;
                                $pvredur2 = $largo2 * $ancho2 * $alto2 * 270 / 1000000;
                                $pvredur3 = $largo3 * $ancho3 * $alto3 * 270 / 1000000;
                                $pvredur4 = $largo4 * $ancho4 * $alto4 * 270 / 1000000;
                                $pvredur = $pvredur + $pvredur2 + $pvredur3 + $pvredur4;

                            } elseif (!empty($largo2) && !empty($ancho2) && !empty($alto2)
                                      && !empty($largo3) && !empty($ancho3) && !empty($alto3)
                                      && !empty($largo4) && !empty($ancho4) && !empty($alto4)
                                      && !empty($largo5) && !empty($ancho5) && !empty($alto5)
                                      && empty($largo6) && empty($ancho6) && empty($alto6)) {
                                $pvredur = $largo * $ancho * $alto * 270 / 1000000;
                                $pvredur2 = $largo2 * $ancho2 * $alto2 * 270 / 1000000;
                                $pvredur3 = $largo3 * $ancho3 * $alto3 * 270 / 1000000;
                                $pvredur4 = $largo4 * $ancho4 * $alto4 * 270 / 1000000;
                                $pvredur5 = $largo5 * $ancho5 * $alto5 * 270 / 1000000;

                                $pvredur = $pvredur + $pvredur2 + $pvredur3 + $pvredur4 + $pvredur5;

                            } elseif (!empty($largo2) && !empty($ancho2) && !empty($alto2)
                                      && !empty($largo3) && !empty($ancho3) && !empty($alto3)
                                      && !empty($largo4) && !empty($ancho4) && !empty($alto4)
                                      && !empty($largo5) && !empty($ancho5) && !empty($alto5)
                                      && !empty($largo6) && !empty($ancho6) && !empty($alto6)) {
                                $pvredur = $largo * $ancho * $alto * 270 / 1000000;
                                $pvredur2 = $largo2 * $ancho2 * $alto2 * 270 / 1000000;
                                $pvredur3 = $largo3 * $ancho3 * $alto3 * 270 / 1000000;
                                $pvredur4 = $largo4 * $ancho4 * $alto4 * 270 / 1000000;
                                $pvredur5 = $largo5 * $ancho5 * $alto5 * 270 / 1000000;
                                $pvredur6 = $largo6 * $ancho6 * $alto6 * 270 / 1000000;

                                $pvredur = $pvredur + $pvredur2 + $pvredur3 + $pvredur4 + $pvredur5 + $pvredur6;
                            }
                            ?>
                            <input type="hidden" name="pvredur" value="<?php echo $pvredur; ?>">

                            <?php
                            $pesotasaREDUR = 0;

                            if ($peso > $pvredur) {
                                $pesosMayoresREDUR = round($peso - 1000);
                                echo $peso;
                                echo "<br>";
                                if ($idprovto == 41){
                                    echo "zona A";
                                    echo "<br>";
                                    if ($peso < 5.1) {
                                        $pesotasaREDUR=3.33;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    } elseif ($peso < 10.1) {
                                        $pesotasaREDUR=3.33;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 20.1) {
                                        $pesotasaREDUR=3.33;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 30.1) {
                                        $pesotasaREDUR=3.74;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 40.1) {
                                        $pesotasaREDUR=4.37;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 50.1) {
                                        $pesotasaREDUR=4.98;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 60.1) {
                                        $pesotasaREDUR=5.56;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 70.1) {
                                        $pesotasaREDUR=6.20;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 80.1) {
                                        $pesotasaREDUR=6.82;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 90.1) {
                                        $pesotasaREDUR=7.46;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 100.1) {
                                        $pesotasaREDUR=8.10;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 125.1) {
                                        $pesotasaREDUR=9.12;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 150.1) {
                                        $pesotasaREDUR=10.70;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 175.1) {
                                        $pesotasaREDUR=11.65;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 200.1) {
                                        $pesotasaREDUR=13.06;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 250.1) {
                                        $pesotasaREDUR=14.84;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 300.1) {
                                        $pesotasaREDUR=16.67;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 350.1) {
                                        $pesotasaREDUR=18.56;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 400.1) {
                                        $pesotasaREDUR=20.45;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 450.1) {
                                        $pesotasaREDUR=22.14;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 500.1) {
                                        $pesotasaREDUR=23.93;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 600.1) {
                                        $pesotasaREDUR=27.39;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 700.1) {
                                        $pesotasaREDUR=30.78;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 800.1) {
                                        $pesotasaREDUR=33.94;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 900.1) {
                                        $pesotasaREDUR=37.41;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 1000.1) {
                                        $pesotasaREDUR=41.26;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    } elseif ($peso >= 1000.1) {
                                        $pesotasaREDUR= 41.26 + ($pesosMayoresREDUR * 0.0375);
                                        echo $pesosMayoresREDUR;
                                        echo "<br>";
                                        echo "Tasa + PESO REDUR ".number_format($pesotasaREDUR, 2).' €';
                                        echo "<br>";
                                    }

                                } elseif ($idprovto == 11 || $idprovto == 29 || $idprovto == 14 || $idprovto == 21) {
                                    echo "Zona B";
                                    echo "<br>";
                                    if ($peso < 5.1) {
                                        $pesotasaREDUR=3.33;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    } elseif ($peso < 10.1) {
                                        $pesotasaREDUR=3.33;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 20.1) {
                                        $pesotasaREDUR=3.47;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 30.1) {
                                        $pesotasaREDUR=4.27;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 40.1) {
                                        $pesotasaREDUR=5.05;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 50.1) {
                                        $pesotasaREDUR=5.78;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 60.1) {
                                        $pesotasaREDUR=6.61;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 70.1) {
                                        $pesotasaREDUR=7.35;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 80.1) {
                                        $pesotasaREDUR=8.10;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 90.1) {
                                        $pesotasaREDUR=8.34;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 100.1) {
                                        $pesotasaREDUR=9.07;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 125.1) {
                                        $pesotasaREDUR=10.25;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 150.1) {
                                        $pesotasaREDUR=11.96;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 175.1) {
                                        $pesotasaREDUR=13.06;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 200.1) {
                                        $pesotasaREDUR=14.61;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 250.1) {
                                        $pesotasaREDUR=16.63;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 300.1) {
                                        $pesotasaREDUR=18.71;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 350.1) {
                                        $pesotasaREDUR=20.90;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 400.1) {
                                        $pesotasaREDUR=22.92;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 450.1) {
                                        $pesotasaREDUR=25.09;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 500.1) {
                                        $pesotasaREDUR=27.24;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 600.1) {
                                        $pesotasaREDUR=30.78;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 700.1) {
                                        $pesotasaREDUR=34.73;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 800.1) {
                                        $pesotasaREDUR=38.53;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 900.1) {
                                        $pesotasaREDUR=42.58;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 1000.1) {
                                        $pesotasaREDUR=47.11;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    } elseif ($peso >= 1000.1) {
                                        $pesotasaREDUR= 47.11 + ($pesosMayoresREDUR * 0.0429);
                                        echo $pesosMayoresREDUR;
                                        echo "<br>";
                                        echo "Tasa + PESO Redur ".number_format($pesotasaREDUR, 2).' €';
                                        echo "<br>";
                                    }
                                } elseif ($idprovto ==18 || $idprovto== 23  || $idcodautAr[0] == 11)  {
                                    echo "Zona C";
                                    echo "<br>";
                                    if ($peso < 5.1) {
                                        $pesotasaREDUR=3.33;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    } elseif ($peso < 10.1) {
                                        $pesotasaREDUR=3.33;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 20.1) {
                                        $pesotasaREDUR=3.75;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 30.1) {
                                        $pesotasaREDUR=4.87;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 40.1) {
                                        $pesotasaREDUR=5.86;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 50.1) {
                                        $pesotasaREDUR=6.71;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 60.1) {
                                        $pesotasaREDUR=7.56;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 70.1) {
                                        $pesotasaREDUR=8.42;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 80.1) {
                                        $pesotasaREDUR=9.27;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 90.1) {
                                        $pesotasaREDUR=10.09;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 100.1) {
                                        $pesotasaREDUR=10.99;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 125.1) {
                                        $pesotasaREDUR=12.50;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 150.1) {
                                        $pesotasaREDUR=14.54;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 175.1) {
                                        $pesotasaREDUR=15.85;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 200.1) {
                                        $pesotasaREDUR=17.74;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 250.1) {
                                        $pesotasaREDUR=20.19;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 300.1) {
                                        $pesotasaREDUR=22.81;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 350.1) {
                                        $pesotasaREDUR=25.59;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 400.1) {
                                        $pesotasaREDUR=28.28;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 450.1) {
                                        $pesotasaREDUR=30.99;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 500.1) {
                                        $pesotasaREDUR=33.83;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 600.1) {
                                        $pesotasaREDUR=40.95;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 700.1) {
                                        $pesotasaREDUR=46.60;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 800.1) {
                                        $pesotasaREDUR=52.29;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 900.1) {
                                        $pesotasaREDUR=58.09;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 1000.1) {
                                        $pesotasaREDUR=64.68;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    } elseif ($peso >= 1000.1) {
                                        $pesotasaREDUR= 64.68 + ($pesosMayoresREDUR * 0.0590);
                                        echo $pesosMayoresREDUR;
                                        echo "<br>";
                                        echo "Tasa + PESO Redur ".number_format($pesotasaREDUR, 2).' €';
                                        echo "<br>";
                                    }
                                } elseif ($idprovto == 4 || $idprovto == 13) {
                                    echo "Zona D";
                                    echo "<br>";
                                    if ($peso < 5.1) {
                                        $pesotasaREDUR=3.33;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    } elseif ($peso < 10.1) {
                                        $pesotasaREDUR=3.33;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 20.1) {
                                        $pesotasaREDUR=4.50;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 30.1) {
                                        $pesotasaREDUR=5.84;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 40.1) {
                                        $pesotasaREDUR=7.03;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 50.1) {
                                        $pesotasaREDUR=8.05;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 60.1) {
                                        $pesotasaREDUR=9.08;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 70.1) {
                                        $pesotasaREDUR=10.10;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 80.1) {
                                        $pesotasaREDUR=11.12;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 90.1) {
                                        $pesotasaREDUR=12.12;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 100.1) {
                                        $pesotasaREDUR=13.18;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 125.1) {
                                        $pesotasaREDUR=14.99;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 150.1) {
                                        $pesotasaREDUR=17.45;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 175.1) {
                                        $pesotasaREDUR=19.02;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 200.1) {
                                        $pesotasaREDUR=21.28;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 250.1) {
                                        $pesotasaREDUR=24.22;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 300.1) {
                                        $pesotasaREDUR=27.37;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 350.1) {
                                        $pesotasaREDUR=30.71;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 400.1) {
                                        $pesotasaREDUR=33.93;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 450.1) {
                                        $pesotasaREDUR=37.19;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 500.1) {
                                        $pesotasaREDUR=40.59;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 600.1) {
                                        $pesotasaREDUR=49.13;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 700.1) {
                                        $pesotasaREDUR=55.90;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 800.1) {
                                        $pesotasaREDUR=62.74;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 900.1) {
                                        $pesotasaREDUR=69.69;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 1000.1) {
                                        $pesotasaREDUR=77.63;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    } elseif ($peso >= 1000.1) {
                                        $pesotasaREDUR= 77.63 + ($pesosMayoresREDUR * 0.707);
                                        echo $pesosMayoresREDUR;
                                        echo "<br>";
                                        echo "Tasa + PESO Redur ".number_format($pesotasaREDUR, 2).' €';
                                        echo "<br>";
                                    }
                                } elseif ($idprovto == 2 || $idprovto == 3 
                                          || $idprovto == 5 || $idprovto == 16
                                          || $idprovto == 19 || $idprovto == 28 
                                          || $idprovto == 30 || $idprovto == 37
                                          || $idprovto == 40 || $idprovto == 45 
                                          || $idprovto == 47 || $idprovto == 49) {
                                    echo "Zona E";
                                    echo "<br>";

                                    if ($peso < 5.1) {
                                        $pesotasaREDUR=3.34;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    } elseif ($peso < 10.1) {
                                        $pesotasaREDUR=3.57;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 20.1) {
                                        $pesotasaREDUR=5.13;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 30.1) {
                                        $pesotasaREDUR=6.65;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 40.1) {
                                        $pesotasaREDUR=8.01;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 50.1) {
                                        $pesotasaREDUR=9.16;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 60.1) {
                                        $pesotasaREDUR=10.33;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 70.1) {
                                        $pesotasaREDUR=11.50;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 80.1) {
                                        $pesotasaREDUR=12.67;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 90.1) {
                                        $pesotasaREDUR=13.78;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 100.1) {
                                        $pesotasaREDUR=15.01;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 125.1) {
                                        $pesotasaREDUR=17.07;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 150.1) {
                                        $pesotasaREDUR=19.88;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 175.1) {
                                        $pesotasaREDUR=21.66;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 200.1) {
                                        $pesotasaREDUR=24.22;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 250.1) {
                                        $pesotasaREDUR=27.59;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 300.1) {
                                        $pesotasaREDUR=31.18;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 350.1) {
                                        $pesotasaREDUR=34.97;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 400.1) {
                                        $pesotasaREDUR=38.64;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 450.1) {
                                        $pesotasaREDUR=42.36;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 500.1) {
                                        $pesotasaREDUR=46.25;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 600.1) {
                                        $pesotasaREDUR=55.95;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 700.1) {
                                        $pesotasaREDUR=63.67;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 800.1) {
                                        $pesotasaREDUR=71.47;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 900.1) {
                                        $pesotasaREDUR=79.39;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 1000.1) {
                                        $pesotasaREDUR=88.42;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    } elseif ($peso >= 1000.1) {
                                        $pesotasaREDUR= 88.42 + ($pesosMayoresREDUR * 0.0805);
                                        echo $pesosMayoresREDUR;
                                        echo "<br>";
                                        echo "Tasa + PESO ASM ".number_format($pesotasaREDUR, 2).' €';
                                        echo "<br>";
                                    }
                                } elseif ($idprovto == 1 || $idprovto == 9 
                                          || $idprovto == 12 || $idprovto == 24
                                          || $idprovto == 34 || $idprovto == 42 
                                          || $idprovto == 44 || $idprovto == 46
                                          || $idprovto == 50) {
                                    echo "Zona F";
                                    echo "<br>";

                                    if ($peso < 5.1) {
                                        $pesotasaREDUR=3.66;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    } elseif ($peso < 10.1) {
                                        $pesotasaREDUR=3.92;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 20.1) {
                                        $pesotasaREDUR=5.63;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 30.1) {
                                        $pesotasaREDUR=7.29;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 40.1) {
                                        $pesotasaREDUR=8.79;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 50.1) {
                                        $pesotasaREDUR=10.07;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 60.1) {
                                        $pesotasaREDUR=11.34;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 70.1) {
                                        $pesotasaREDUR=12.63;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 80.1) {
                                        $pesotasaREDUR=13.92;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 90.1) {
                                        $pesotasaREDUR=15.13;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 100.1) {
                                        $pesotasaREDUR=16.46;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 125.1) {
                                        $pesotasaREDUR=18.73;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 150.1) {
                                        $pesotasaREDUR=21.80;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 175.1) {
                                        $pesotasaREDUR=23.76;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 200.1) {
                                        $pesotasaREDUR=26.60;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 250.1) {
                                        $pesotasaREDUR=30.30;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 300.1) {
                                        $pesotasaREDUR=34.22;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 350.1) {
                                        $pesotasaREDUR=38.38;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 400.1) {
                                        $pesotasaREDUR=42.41;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 450.1) {
                                        $pesotasaREDUR=46.49;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 500.1) {
                                        $pesotasaREDUR=50.76;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 600.1) {
                                        $pesotasaREDUR=61.42;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 700.1) {
                                        $pesotasaREDUR=69.89;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 800.1) {
                                        $pesotasaREDUR=78.45;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 900.1) {
                                        $pesotasaREDUR=87.14;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 1000.1) {
                                        $pesotasaREDUR=97.04;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    } elseif ($peso >= 1000.1) {
                                        $pesotasaREDUR= 97.04 + ($pesosMayoresREDUR * 0.0882);
                                        echo $pesosMayoresREDUR;
                                        echo "<br>";
                                        echo "Tasa + PESO ASM ".number_format($pesotasaREDUR, 2).' €';
                                        echo "<br>";
                                    }
                                } elseif ($idprovto == 8 || $idprovto == 26 
                                          || $idprovto == 31 || $idprovto == 20
                                          || $idprovto == 43) {
                                    echo "Zona G";
                                    echo "<br>";

                                    if ($peso < 5.1) {
                                        $pesotasaREDUR=3.92;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    } elseif ($peso < 10.1) {
                                        $pesotasaREDUR=4.17;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 20.1) {
                                        $pesotasaREDUR=6.01;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 30.1) {
                                        $pesotasaREDUR=7.79;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 40.1) {
                                        $pesotasaREDUR=9.39;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 50.1) {
                                        $pesotasaREDUR=10.73;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 60.1) {
                                        $pesotasaREDUR=12.09;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 70.1) {
                                        $pesotasaREDUR=13.47;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 80.1) {
                                        $pesotasaREDUR=14.84;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 90.1) {
                                        $pesotasaREDUR=16.16;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 100.1) {
                                        $pesotasaREDUR=17.58;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 125.1) {
                                        $pesotasaREDUR=19.98;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 150.1) {
                                        $pesotasaREDUR=23.27;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 175.1) {
                                        $pesotasaREDUR=25.36;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 200.1) {
                                        $pesotasaREDUR=28.37;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 250.1) {
                                        $pesotasaREDUR=32.31;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 300.1) {
                                        $pesotasaREDUR=36.50;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 350.1) {
                                        $pesotasaREDUR=40.95;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 400.1) {
                                        $pesotasaREDUR=45.26;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 450.1) {
                                        $pesotasaREDUR=49.60;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 500.1) {
                                        $pesotasaREDUR=54.15;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 600.1) {
                                        $pesotasaREDUR=65.53;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 700.1) {
                                        $pesotasaREDUR=74.56;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 800.1) {
                                        $pesotasaREDUR=83.69;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 900.1) {
                                        $pesotasaREDUR=92.97;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 1000.1) {
                                        $pesotasaREDUR=103.54;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    } elseif ($peso >= 1000.1) {
                                        $pesotasaREDUR= 103.54 + ($pesosMayoresREDUR * 0.0942);
                                        echo $pesosMayoresREDUR;
                                        echo "<br>";
                                        echo "Tasa + PESO ASM ".number_format($pesotasaREDUR, 2).' €';
                                        echo "<br>";
                                    }
                                } elseif ($idprovto == 33 || $idprovto == 48 
                                          || $idprovto == 39 || $idprovto == 17
                                          || $idprovto == 22 || $idprovto == 15 
                                          || $idprovto == 25 || $idprovto == 27
                                          || $idprovto == 32 || $idprovto == 36) {
                                    echo "Zona H";
                                    echo "<br>";

                                    if ($peso < 5.1) {
                                        $pesotasaREDUR=4.16;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    } elseif ($peso < 10.1) {
                                        $pesotasaREDUR=4.43;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 20.1) {
                                        $pesotasaREDUR=6.39;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 30.1) {
                                        $pesotasaREDUR=8.27;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 40.1) {
                                        $pesotasaREDUR=9.97;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 50.1) {
                                        $pesotasaREDUR=11.40;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 60.1) {
                                        $pesotasaREDUR=12.85;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 70.1) {
                                        $pesotasaREDUR=14.30;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 80.1) {
                                        $pesotasaREDUR=15.76;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 90.1) {
                                        $pesotasaREDUR=17.15;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 100.1) {
                                        $pesotasaREDUR=18.67;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 125.1) {
                                        $pesotasaREDUR=21.23;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 150.1) {
                                        $pesotasaREDUR=24.72;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 175.1) {
                                        $pesotasaREDUR=26.94;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 200.1) {
                                        $pesotasaREDUR=30.14;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 250.1) {
                                        $pesotasaREDUR=34.33;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 300.1) {
                                        $pesotasaREDUR=38.78;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 350.1) {
                                        $pesotasaREDUR=43.51;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 400.1) {
                                        $pesotasaREDUR=48.07;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 450.1) {
                                        $pesotasaREDUR=52.70;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 500.1) {
                                        $pesotasaREDUR=57.53;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 600.1) {
                                        $pesotasaREDUR=69.62;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 700.1) {
                                        $pesotasaREDUR=79.19;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 800.1) {
                                        $pesotasaREDUR=88.92;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 900.1) {
                                        $pesotasaREDUR=98.75;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 1000.1) {
                                        $pesotasaREDUR=109.99;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    } elseif ($peso >= 1000.1) {
                                        $pesotasaREDUR= 109.99 + ($pesosMayoresREDUR * 0.1001);
                                        echo $pesosMayoresREDUR;
                                        echo "<br>";
                                        echo "Tasa + PESO Redur ".number_format($pesotasaREDUR, 2).' €';
                                        echo "<br>";
                                    }
                                } elseif ($idcodautAr[0] == 4) {
                                    echo "zona I";
                                    echo "<br>";
                                    if ($peso < 5.1) {
                                        $pesotasaREDUR=6.72;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    } elseif ($peso < 10.1) {
                                        $pesotasaREDUR=7.17;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 20.1) {
                                        $pesotasaREDUR=10.33;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 30.1) {
                                        $pesotasaREDUR=13.38;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 40.1) {
                                        $pesotasaREDUR=16.11;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 50.1) {
                                        $pesotasaREDUR=18.45;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 60.1) {
                                        $pesotasaREDUR=20.79;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 70.1) {
                                        $pesotasaREDUR=23.14;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 80.1) {
                                        $pesotasaREDUR=25.50;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 90.1) {
                                        $pesotasaREDUR=27.72;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 100.1) {
                                        $pesotasaREDUR=30.19;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 125.1) {
                                        $pesotasaREDUR=34.34;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 150.1) {
                                        $pesotasaREDUR=39.98;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 175.1) {
                                        $pesotasaREDUR=43.57;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 200.1) {
                                        $pesotasaREDUR=48.74;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 250.1) {
                                        $pesotasaREDUR=55.50;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 300.1) {
                                        $pesotasaREDUR=62.71;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 350.1) {
                                        $pesotasaREDUR=70.35;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 400.1) {
                                        $pesotasaREDUR=77.74;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 450.1) {
                                        $pesotasaREDUR=85.22;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 500.1) {
                                        $pesotasaREDUR=93.02;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 600.1) {
                                        $pesotasaREDUR=112.57;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 700.1) {
                                        $pesotasaREDUR=128.08;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 800.1) {
                                        $pesotasaREDUR=143.78;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 900.1) {
                                        $pesotasaREDUR=159.70;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($peso < 1000.1) {
                                        $pesotasaREDUR=177.85;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    } elseif ($peso >= 1000.1) {
                                        $pesotasaREDUR= 177.85 + ($pesosMayoresREDUR * 0.1618);
                                        echo $pesosMayoresREDUR;
                                        echo "<br>";
                                        echo "Tasa + PESO Redur ".number_format($pesotasaREDUR, 2).' €';
                                        echo "<br>";
                                    }
                                }

                            } elseif ($peso < $pvredur) {
                                $pesosMayoresREDUR = round($pvredur - 1000);
                                echo calcvol($pvredur);
                                echo "<br>";
                                if ($idprovto == 41){
                                    echo "zona A";
                                    echo "<br>";
                                    if ($pvredur < 5.1) {
                                        $pesotasaREDUR=3.33;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    } elseif ($pvredur < 10.1) {
                                        $pesotasaREDUR=3.33;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 20.1) {
                                        $pesotasaREDUR=3.33;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 30.1) {
                                        $pesotasaREDUR=3.74;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 40.1) {
                                        $pesotasaREDUR=4.37;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 50.1) {
                                        $pesotasaREDUR=4.98;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 60.1) {
                                        $pesotasaREDUR=5.56;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 70.1) {
                                        $pesotasaREDUR=6.20;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 80.1) {
                                        $pesotasaREDUR=6.82;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 90.1) {
                                        $pesotasaREDUR=7.46;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 100.1) {
                                        $pesotasaREDUR=8.10;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 125.1) {
                                        $pesotasaREDUR=9.12;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 150.1) {
                                        $pesotasaREDUR=10.70;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 175.1) {
                                        $pesotasaREDUR=11.65;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 200.1) {
                                        $pesotasaREDUR=13.06;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 250.1) {
                                        $pesotasaREDUR=14.84;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 300.1) {
                                        $pesotasaREDUR=16.67;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 350.1) {
                                        $pesotasaREDUR=18.56;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 400.1) {
                                        $pesotasaREDUR=20.45;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 450.1) {
                                        $pesotasaREDUR=22.14;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 500.1) {
                                        $pesotasaREDUR=23.93;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 600.1) {
                                        $pesotasaREDUR=27.39;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 700.1) {
                                        $pesotasaREDUR=30.78;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 800.1) {
                                        $pesotasaREDUR=33.94;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 900.1) {
                                        $pesotasaREDUR=37.41;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 1000.1) {
                                        $pesotasaREDUR=41.26;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    } elseif ($pvredur >= 1000.1) {
                                        $pesotasaREDUR= 41.26 + ($pesosMayoresREDUR * 0.0375);
                                        echo $pesosMayoresREDUR;
                                        echo "<br>";
                                        echo "Tasa + PESO Redur ".number_format($pesotasaREDUR, 2).' €';
                                        echo "<br>";
                                    }

                                } elseif ($idprovto == 11 || $idprovto == 29 || $idprovto == 14 || $idprovto == 21) {
                                    echo "Zona B";
                                    echo "<br>";
                                    if ($pvredur < 5.1) {
                                        $pesotasaREDUR=3.33;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    } elseif ($pvredur < 10.1) {
                                        $pesotasaREDUR=3.33;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 20.1) {
                                        $pesotasaREDUR=3.47;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 30.1) {
                                        $pesotasaREDUR=4.27;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 40.1) {
                                        $pesotasaREDUR=5.05;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 50.1) {
                                        $pesotasaREDUR=5.78;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 60.1) {
                                        $pesotasaREDUR=6.61;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 70.1) {
                                        $pesotasaREDUR=7.35;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 80.1) {
                                        $pesotasaREDUR=8.10;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 90.1) {
                                        $pesotasaREDUR=8.34;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 100.1) {
                                        $pesotasaREDUR=9.07;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 125.1) {
                                        $pesotasaREDUR=10.25;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 150.1) {
                                        $pesotasaREDUR=11.96;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 175.1) {
                                        $pesotasaREDUR=13.06;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 200.1) {
                                        $pesotasaREDUR=14.61;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 250.1) {
                                        $pesotasaREDUR=16.63;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 300.1) {
                                        $pesotasaREDUR=18.71;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 350.1) {
                                        $pesotasaREDUR=20.90;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 400.1) {
                                        $pesotasaREDUR=22.92;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 450.1) {
                                        $pesotasaREDUR=25.09;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 500.1) {
                                        $pesotasaREDUR=27.24;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 600.1) {
                                        $pesotasaREDUR=30.78;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 700.1) {
                                        $pesotasaREDUR=34.73;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 800.1) {
                                        $pesotasaREDUR=38.53;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 900.1) {
                                        $pesotasaREDUR=42.58;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 1000.1) {
                                        $pesotasaREDUR=47.11;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    } elseif ($pvredur >= 1000.1) {
                                        $pesotasaREDUR= 47.11 + ($pesosMayoresREDUR * 0.0429);
                                        echo $pesosMayoresREDUR;
                                        echo "<br>";
                                        echo "Tasa + PESO Redur ".number_format($pesotasaREDUR, 2).' €';
                                        echo "<br>";
                                    }
                                } elseif ($idprovto ==18 || $idprovto== 23  || $idcodautAr[0] == 11)  {
                                    echo "Zona C";
                                    echo "<br>";
                                    if ($pvredur < 5.1) {
                                        $pesotasaREDUR=3.33;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    } elseif ($pvredur < 10.1) {
                                        $pesotasaREDUR=3.33;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 20.1) {
                                        $pesotasaREDUR=3.75;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 30.1) {
                                        $pesotasaREDUR=4.87;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 40.1) {
                                        $pesotasaREDUR=5.86;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 50.1) {
                                        $pesotasaREDUR=6.71;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 60.1) {
                                        $pesotasaREDUR=7.56;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 70.1) {
                                        $pesotasaREDUR=8.42;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 80.1) {
                                        $pesotasaREDUR=9.27;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 90.1) {
                                        $pesotasaREDUR=10.09;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 100.1) {
                                        $pesotasaREDUR=10.99;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 125.1) {
                                        $pesotasaREDUR=12.50;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 150.1) {
                                        $pesotasaREDUR=14.54;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 175.1) {
                                        $pesotasaREDUR=15.85;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 200.1) {
                                        $pesotasaREDUR=17.74;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 250.1) {
                                        $pesotasaREDUR=20.19;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 300.1) {
                                        $pesotasaREDUR=22.81;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 350.1) {
                                        $pesotasaREDUR=25.59;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 400.1) {
                                        $pesotasaREDUR=28.28;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 450.1) {
                                        $pesotasaREDUR=30.99;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 500.1) {
                                        $pesotasaREDUR=33.83;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 600.1) {
                                        $pesotasaREDUR=40.95;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 700.1) {
                                        $pesotasaREDUR=46.60;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 800.1) {
                                        $pesotasaREDUR=52.29;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 900.1) {
                                        $pesotasaREDUR=58.09;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 1000.1) {
                                        $pesotasaREDUR=64.68;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    } elseif ($pvredur >= 1000.1) {
                                        $pesotasaREDUR= 64.68 + ($pesosMayoresREDUR * 0.0590);
                                        echo $pesosMayoresREDUR;
                                        echo "<br>";
                                        echo "Tasa + PESO Redur ".number_format($pesotasaREDUR, 2).' €';
                                        echo "<br>";
                                    }
                                } elseif ($idprovto == 4 || $idprovto == 13) {
                                    echo "Zona D";
                                    echo "<br>";

                                    if ($pvredur < 5.1) {
                                        $pesotasaREDUR=3.33;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    } elseif ($pvredur < 10.1) {
                                        $pesotasaREDUR=3.33;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 20.1) {
                                        $pesotasaREDUR=4.50;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 30.1) {
                                        $pesotasaREDUR=5.84;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 40.1) {
                                        $pesotasaREDUR=7.03;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 50.1) {
                                        $pesotasaREDUR=8.05;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 60.1) {
                                        $pesotasaREDUR=9.08;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 70.1) {
                                        $pesotasaREDUR=10.10;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 80.1) {
                                        $pesotasaREDUR=11.12;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 90.1) {
                                        $pesotasaREDUR=12.12;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 100.1) {
                                        $pesotasaREDUR=13.18;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 125.1) {
                                        $pesotasaREDUR=14.99;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 150.1) {
                                        $pesotasaREDUR=17.45;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 175.1) {
                                        $pesotasaREDUR=19.02;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 200.1) {
                                        $pesotasaREDUR=21.28;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 250.1) {
                                        $pesotasaREDUR=24.22;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 300.1) {
                                        $pesotasaREDUR=27.37;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 350.1) {
                                        $pesotasaREDUR=30.71;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 400.1) {
                                        $pesotasaREDUR=33.93;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 450.1) {
                                        $pesotasaREDUR=37.19;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 500.1) {
                                        $pesotasaREDUR=40.59;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 600.1) {
                                        $pesotasaREDUR=49.13;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 700.1) {
                                        $pesotasaREDUR=55.90;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 800.1) {
                                        $pesotasaREDUR=62.74;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 900.1) {
                                        $pesotasaREDUR=69.69;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 1000.1) {
                                        $pesotasaREDUR=77.63;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    } elseif ($pvredur >= 1000.1) {
                                        $pesotasaREDUR= 77.63 + ($pesosMayoresREDUR * 0.707);
                                        echo $pesosMayoresREDUR;
                                        echo "<br>";
                                        echo "Tasa + PESO Redur ".number_format($pesotasaREDUR, 2).' €';
                                        echo "<br>";
                                    }
                                } elseif ($idprovto == 2 || $idprovto == 3 
                                          || $idprovto == 5 || $idprovto == 16
                                          || $idprovto == 19 || $idprovto == 28 
                                          || $idprovto == 30 || $idprovto == 37
                                          || $idprovto == 40 || $idprovto == 45 
                                          || $idprovto == 47 || $idprovto == 49) {
                                    echo "Zona E";
                                    echo "<br>";

                                    if ($pvredur < 5.1) {
                                        $pesotasaREDUR=3.34;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    } elseif ($pvredur < 10.1) {
                                        $pesotasaREDUR=3.57;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 20.1) {
                                        $pesotasaREDUR=5.13;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 30.1) {
                                        $pesotasaREDUR=6.65;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 40.1) {
                                        $pesotasaREDUR=8.01;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 50.1) {
                                        $pesotasaREDUR=9.16;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 60.1) {
                                        $pesotasaREDUR=10.33;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 70.1) {
                                        $pesotasaREDUR=11.50;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 80.1) {
                                        $pesotasaREDUR=12.67;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 90.1) {
                                        $pesotasaREDUR=13.78;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 100.1) {
                                        $pesotasaREDUR=15.01;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 125.1) {
                                        $pesotasaREDUR=17.07;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 150.1) {
                                        $pesotasaREDUR=19.88;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 175.1) {
                                        $pesotasaREDUR=21.66;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 200.1) {
                                        $pesotasaREDUR=24.22;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 250.1) {
                                        $pesotasaREDUR=27.59;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 300.1) {
                                        $pesotasaREDUR=31.18;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 350.1) {
                                        $pesotasaREDUR=34.97;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 400.1) {
                                        $pesotasaREDUR=38.64;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 450.1) {
                                        $pesotasaREDUR=42.36;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 500.1) {
                                        $pesotasaREDUR=46.25;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 600.1) {
                                        $pesotasaREDUR=55.95;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 700.1) {
                                        $pesotasaREDUR=63.67;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 800.1) {
                                        $pesotasaREDUR=71.47;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 900.1) {
                                        $pesotasaREDUR=79.39;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 1000.1) {
                                        $pesotasaREDUR=88.42;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    } elseif ($pvredur >= 1000.1) {
                                        $pesotasaREDUR= 88.42 + ($pesosMayoresREDUR * 0.0805);
                                        echo $pesosMayoresREDUR;
                                        echo "<br>";
                                        echo "Tasa + PESO Redur ".number_format($pesotasaREDUR, 2).' €';
                                        echo "<br>";
                                    }
                                } elseif ($idprovto == 1 || $idprovto == 9 
                                          || $idprovto == 12 || $idprovto == 24
                                          || $idprovto == 34 || $idprovto == 42 
                                          || $idprovto == 44 || $idprovto == 46
                                          || $idprovto == 50) {
                                    echo "Zona F";
                                    echo "<br>";

                                    if ($pvredur < 5.1) {
                                        $pesotasaREDUR=3.66;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    } elseif ($pvredur < 10.1) {
                                        $pesotasaREDUR=3.92;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 20.1) {
                                        $pesotasaREDUR=5.63;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 30.1) {
                                        $pesotasaREDUR=7.29;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 40.1) {
                                        $pesotasaREDUR=8.79;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 50.1) {
                                        $pesotasaREDUR=10.07;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 60.1) {
                                        $pesotasaREDUR=11.34;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 70.1) {
                                        $pesotasaREDUR=12.63;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 80.1) {
                                        $pesotasaREDUR=13.92;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 90.1) {
                                        $pesotasaREDUR=15.13;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 100.1) {
                                        $pesotasaREDUR=16.46;
                                        echo $v.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 125.1) {
                                        $pesotasaREDUR=18.73;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 150.1) {
                                        $pesotasaREDUR=21.80;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 175.1) {
                                        $pesotasaREDUR=23.76;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 200.1) {
                                        $pesotasaREDUR=26.60;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 250.1) {
                                        $pesotasaREDUR=30.30;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 300.1) {
                                        $pesotasaREDUR=34.22;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 350.1) {
                                        $pesotasaREDUR=38.38;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 400.1) {
                                        $pesotasaREDUR=42.41;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 450.1) {
                                        $pesotasaREDUR=46.49;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 500.1) {
                                        $pesotasaREDUR=50.76;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 600.1) {
                                        $pesotasaREDUR=61.42;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 700.1) {
                                        $pesotasaREDUR=69.89;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 800.1) {
                                        $pesotasaREDUR=78.45;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 900.1) {
                                        $pesotasaREDUR=87.14;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 1000.1) {
                                        $pesotasaREDUR=97.04;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    } elseif ($pvredur >= 1000.1) {
                                        $pesotasaREDUR= 97.04 + ($pesosMayoresREDUR * 0.09);
                                        echo $pesosMayoresREDUR;
                                        echo "<br>";
                                        echo "Tasa + PESO Redur ".number_format($pesotasaREDUR, 2).' €';
                                        echo "<br>";
                                    }
                                } elseif ($idprovto == 8 || $idprovto == 26 
                                          || $idprovto == 31 || $idprovto == 20
                                          || $idprovto == 43) {
                                    echo "Zona G";
                                    echo "<br>";

                                    if ($pvredur < 5.1) {
                                        $pesotasaREDUR=3.92;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    } elseif ($pvredur < 10.1) {
                                        $pesotasaREDUR=4.17;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 20.1) {
                                        $pesotasaREDUR=6.01;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 30.1) {
                                        $pesotasaREDUR=7.79;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 40.1) {
                                        $pesotasaREDUR=9.39;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 50.1) {
                                        $pesotasaREDUR=10.73;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 60.1) {
                                        $pesotasaREDUR=12.09;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 70.1) {
                                        $pesotasaREDUR=13.47;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 80.1) {
                                        $pesotasaREDUR=14.84;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 90.1) {
                                        $pesotasaREDUR=16.16;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 100.1) {
                                        $pesotasaREDUR=17.58;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 125.1) {
                                        $pesotasaREDUR=19.98;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 150.1) {
                                        $pesotasaREDUR=23.27;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 175.1) {
                                        $pesotasaREDUR=25.36;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 200.1) {
                                        $pesotasaREDUR=28.37;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 250.1) {
                                        $pesotasaREDUR=32.31;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 300.1) {
                                        $pesotasaREDUR=36.50;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 350.1) {
                                        $pesotasaREDUR=40.95;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 400.1) {
                                        $pesotasaREDUR=45.26;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 450.1) {
                                        $pesotasaREDUR=49.60;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 500.1) {
                                        $pesotasaREDUR=54.15;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 600.1) {
                                        $pesotasaREDUR=65.53;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 700.1) {
                                        $pesotasaREDUR=74.56;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 800.1) {
                                        $pesotasaREDUR=83.69;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 900.1) {
                                        $pesotasaREDUR=92.97;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 1000.1) {
                                        $pesotasaREDUR=103.54;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    } elseif ($pvredur >= 1000.1) {
                                        $pesotasaREDUR= 103.54 + ($pesosMayoresREDUR * 0.0942);
                                        echo $pesosMayoresREDUR;
                                        echo "<br>";
                                        echo "Tasa + PESO Redur ".number_format($pesotasaREDUR, 2).' €';
                                        echo "<br>";
                                    }
                                } elseif ($idprovto == 33 || $idprovto == 48 
                                          || $idprovto == 39 || $idprovto == 17
                                          || $idprovto == 22 || $idprovto == 15 
                                          || $idprovto == 25 || $idprovto == 27
                                          || $idprovto == 32 || $idprovto == 36) {
                                    echo "Zona H";
                                    echo "<br>";

                                    if ($pvredur < 5.1) {
                                        $pesotasaREDUR=4.16;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    } elseif ($pvredur < 10.1) {
                                        $pesotasaREDUR=4.43;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 20.1) {
                                        $pesotasaREDUR=6.39;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 30.1) {
                                        $pesotasaREDUR=8.27;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 40.1) {
                                        $pesotasaREDUR=9.97;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 50.1) {
                                        $pesotasaREDUR=11.40;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 60.1) {
                                        $pesotasaREDUR=12.85;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 70.1) {
                                        $pesotasaREDUR=14.30;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 80.1) {
                                        $pesotasaREDUR=15.76;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 90.1) {
                                        $pesotasaREDUR=17.15;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 100.1) {
                                        $pesotasaREDUR=18.67;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 125.1) {
                                        $pesotasaREDUR=21.23;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 150.1) {
                                        $pesotasaREDUR=24.72;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 175.1) {
                                        $pesotasaREDUR=26.94;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 200.1) {
                                        $pesotasaREDUR=30.14;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 250.1) {
                                        $pesotasaREDUR=34.33;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 300.1) {
                                        $pesotasaREDUR=38.78;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 350.1) {
                                        $pesotasaREDUR=43.51;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 400.1) {
                                        $pesotasaREDUR=48.07;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 450.1) {
                                        $pesotasaREDUR=52.70;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 500.1) {
                                        $pesotasaREDUR=57.53;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 600.1) {
                                        $pesotasaREDUR=69.62;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 700.1) {
                                        $pesotasaREDUR=79.19;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 800.1) {
                                        $pesotasaREDUR=88.92;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 900.1) {
                                        $pesotasaREDUR=98.75;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 1000.1) {
                                        $pesotasaREDUR=109.99;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    } elseif ($pvredur >= 1000.1) {
                                        $pesotasaREDUR= 109.99 + ($pesosMayoresREDUR * 0.1001);
                                        echo $pesosMayoresREDUR;
                                        echo "<br>";
                                        echo "Tasa + PESO Redur ".number_format($pesotasaREDUR, 2).' €';
                                        echo "<br>";
                                    }
                                } elseif ($idcodautAr[0] == 4) {
                                    echo "zona I";
                                    echo "<br>";

                                    if ($pvredur < 5.1) {
                                        $pesotasaREDUR=6.72;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    } elseif ($pvredur < 10.1) {
                                        $pesotasaREDUR=7.17;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 20.1) {
                                        $pesotasaREDUR=10.33;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 30.1) {
                                        $pesotasaREDUR=13.38;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 40.1) {
                                        $pesotasaREDUR=16.11;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 50.1) {
                                        $pesotasaREDUR=18.45;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 60.1) {
                                        $pesotasaREDUR=20.79;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 70.1) {
                                        $pesotasaREDUR=23.14;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 80.1) {
                                        $pesotasaREDUR=25.50;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 90.1) {
                                        $pesotasaREDUR=27.72;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 100.1) {
                                        $pesotasaREDUR=30.19;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 125.1) {
                                        $pesotasaREDUR=34.34;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 150.1) {
                                        $pesotasaREDUR=39.98;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 175.1) {
                                        $pesotasaREDUR=43.57;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 200.1) {
                                        $pesotasaREDUR=48.74;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 250.1) {
                                        $pesotasaREDUR=55.50;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 300.1) {
                                        $pesotasaREDUR=62.71;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 350.1) {
                                        $pesotasaREDUR=70.35;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 400.1) {
                                        $pesotasaREDUR=77.74;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 450.1) {
                                        $pesotasaREDUR=85.22;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 500.1) {
                                        $pesotasaREDUR=93.02;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 600.1) {
                                        $pesotasaREDUR=112.57;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 700.1) {
                                        $pesotasaREDUR=128.08;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 800.1) {
                                        $pesotasaREDUR=143.78;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 900.1) {
                                        $pesotasaREDUR=159.70;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    }elseif ($pvredur < 1000.1) {
                                        $pesotasaREDUR=177.85;
                                        echo $pesotasaREDUR.' €';
                                        echo "<br>";
                                    } elseif ($pvredur >= 1000.1) {
                                        $pesotasaREDUR= 177.85 + ($pesosMayoresREDUR * 0.1618);
                                        echo $pesosMayoresREDUR;
                                        echo "<br>";
                                        echo number_format($pesotasaREDUR, 2).' €';
                                        echo "<br>";
                                    }
                                }

                            }
                            ?>
                        </h4>
                        <input type="hidden" name="tasaredur" value="<?php echo $pesotasaREDUR; ?>">

                    </div>
                    <div id="fuel" hidden="">
                        <h4>
                            <?php
                            if (!empty($pesotasaREDUR)) {
                                $fuelREDUR = ($pesotasaREDUR * 0)/100;
                                echo $fuelREDUR.' €';
                            } else {
                                echo "No has introducido datos";
                            }

                            ?>
                        </h4>
                        <input type="hidden" name="fuelredur" value="<?php echo $fuelREDUR; ?>">

                    </div>
                    <div id="Reembolso" hidden="">
                        <h4>
                            <?php
                            $reembolsoREDUR = ($reembolso * 2.5)/100;
                            if (!empty($reembolso) && !empty($pesotasaREDUR)) {

                                if ($reembolsoREDUR < 3){
                                    $reembolsoREDUR = 3;
                                }
                                echo $reembolsoREDUR . ' €';
                            } elseif (empty($pesotasaREDUR) && !empty($reembolso)) {
                                echo "No has introducido datos";
                            }
                            else {
                                echo "No has escrito ninguna cifra";
                            }
                            ?>
                        </h4>
                        <input type="hidden" name="reembolsoredur" value="<?php echo $reembolsoREDUR; ?>">

                    </div>
                    <div id="precio final">
                        <h4>
                            <?php
                            if (!empty($pesotasaREDUR)) {
                                $finalREDUR = $reembolsoREDUR + $pesotasaREDUR + $fuelREDUR;
                                echo number_format(($finalREDUR),2).' €';
                            } else {
                                echo "no has introducido datos";
                            }

                            ?>
                        </h4>
                        <input type="hidden" name="finalredur" value="<?php echo $finalREDUR; ?>">
                    </div>
                </div>
                <!-- Fin ultimate-header -->
                <div class="pricing-table-features ultimate-features">
                    <!-- Inicio ultimate-features -->
                    <?php $nombreRedur = "REDUR" ;?>
                    <input type="hidden" name="nombreredur" value="<?php echo $nombreRedur; ?>">

                    <img class="img-responsive" src="" />
                </div>
                <!-- Fin ultimate-features -->
                <div class="pricing-table-signup-ultimate">
                    <!-- Inicio ultimate-singnup -->
                    <button class="btn-ultimate" tabindex="0" aria-controls="datatable-buttons" type="submit" name="btnredur" onclick="alert('Has seleccionado REDUR')">Elegir</button>
                </div>
                <!-- Fin ultimate-signup  -->
            </div>
            <!-- Fin ultimate -->
        </div>
    </form>
</div> 
