<?php

require "./vendor/autoload.php";

use Dompdf\Dompdf;
use Clases\Cesta;
use Clases\Plantilla;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
//Leo los credenciales, si no estoy registrodo voy al index
$nombre = $_SESSION['nombre'] ?? null;
if (is_null($nombre)) {
    header("Location:index.php?mensaje='Debe registrarse para entrar en la tienda'");
    die();
}

$cesta = Cesta::abrirCesta();

$plantilla = Plantilla::creaPlantilla();


$arrayProductos = $cesta->getArticuloCesta();
$plantilla->assign('cesta', $cesta);
$plantilla->assign('arrayProductos', $arrayProductos);
$plantilla->assign('nombre', $nombre);

$cesta->guardarCesta();


$html = $plantilla->fetch('factura.tpl');
$tmpfile = tempnam("/tmp", "dompdf_");
file_put_contents($tmpfile, $html);


if (isset($_POST['factura'])) {
//Creamos el fichero de forma física  en nuestro sistema de ficheros
//llamado  /tmp/dompdf_  con el contenido del html de la plantilla fecht anteriormente

    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);
// (Optional) Setup the paper size and orientation
    $dompdf->setPaper('A4', 'landscape');
// Render the HTML as PDF
    $dompdf->render();
// Output the generated PDF to Browser
    $dompdf->stream("factura.pdf");
}

$plantilla->display('pagar.tpl');







 