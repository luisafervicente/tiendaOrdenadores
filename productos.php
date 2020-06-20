<?php

require "./vendor/autoload.php";

use Clases\BD as BD;
use Clases\Cesta;
use Clases\Plantilla;

session_start();

//Leo los credenciales, si no estoy registrodo voy al index
$nombre = $_SESSION['nombre'] ?? null;
if (is_null($nombre)) {
     header("Location:index.php?mensaje='Debe registrarse para entrar en la tienda'");
    die();
}


$plantilla1 = Plantilla::creaPlantilla();
$productos = BD::obtieneProductos();

$cesta = Cesta::abrirCesta();
  


switch ($_POST['submit']) {
    case 'comprar':
        $cesta->llenarCesta($_POST['codigo']);
    
        $cesta->guardarCesta();
        break;
    case 'vaciar':
        $cesta->vaciarCesta();
    
        $cesta->guardarCesta();
        break;
    case 'pagar':
        header("Location:pagar.php");
        exit();
        break;
    case "x":
        $cesta->eliminarProducto($_POST['delete']);
        $cesta->guardarCesta();
        break;
    default:
        break;
}
    
if($cesta->cestaVacia())
    $disabled='disabled';
$articuloCesta = $cesta->getArticuloCesta();
$precioTotal = $cesta->getPrecioTotal();

$plantilla1->assign('articuloCesta', $articuloCesta);
$plantilla1->assign('precioTotal', $precioTotal);
//Comparto variables para visualizar en plantilla
$plantilla1->assign('productos', $productos);

$plantilla1->assign('cesta', $cesta);
$plantilla1->assign('disabled',$disabled);
//muestro la plantilla de productos
$plantilla1->display('productos.tpl');









/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

