<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-19 20:49:25
  from '/var/www/LuisaFernadezPracticaTienda/plantillas/productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e4d9f55402ff9_07692648',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34589827dd755efc007812f91228a019e7e96c10' => 
    array (
      0 => '/var/www/LuisaFernadezPracticaTienda/plantillas/productos.tpl',
      1 => 1582145347,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cesta.tpl' => 1,
    'file:listaProductos.tpl' => 1,
  ),
),false)) {
function content_5e4d9f55402ff9_07692648 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!-- Desarrollo Web en Entorno Servidor -->
<!-- Tema 5 : Programación orientada a objetos en PHP -->
<!-- Tienda Web de Luisa: login.php -->
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Tienda de Luisa: Login Tienda Web con Plantillas</title>
  <link href="tienda.css" rel="stylesheet" type="text/css">
</head>

<body class="pagproductos"> 
    <div id="encabezado">
    <h1>Listado de productos</h1>
  </div>
     
        <div id="contenedor1" style="float:right;">
           <div  id="cesta">
            <?php $_smarty_tpl->_subTemplateRender("file:cesta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
              </div>
        </div>
            
            <div id="contenedor2">
                  <?php $_smarty_tpl->_subTemplateRender("file:listaProductos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
         
            </div>

  
    
    </body>
</html><?php }
}
