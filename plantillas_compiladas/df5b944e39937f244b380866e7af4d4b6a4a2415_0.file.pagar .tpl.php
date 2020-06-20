<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-24 06:15:48
  from '/var/www/LuisaFernadezPracticaTienda/plantillas/pagar .tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e536a14e5bf78_29179728',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df5b944e39937f244b380866e7af4d4b6a4a2415' => 
    array (
      0 => '/var/www/LuisaFernadezPracticaTienda/plantillas/pagar .tpl',
      1 => 1582524935,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:factura.tpl' => 1,
  ),
),false)) {
function content_5e536a14e5bf78_29179728 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="content-type" content="text/html charset:UTF-8">
  <title>Tienda de Luisa/pagar</title>
  <link href="tienda.css" rel="stylesheet" type="text/css">
</head>





<?php $_smarty_tpl->_subTemplateRender("file:factura.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
  <input name="cmd" type="hidden" value="_xclick" />
               <!--
                Mi correo de pay pall identificador email ID en profile de mi cuenta de business
                -->
  <input name="business" type="hidden" value="luisafervicente@gmail.com" />
 
   <input name="shopping_url" type="hidden" value="http://luisaFernandezdwes/infenlces.com/" />
   <input name="currency_code" type="hidden" value="EUR" />
   <input name="return" type="hidden" value="http://luisaFernandezdwes/infenlces.com/" />
   <input name="notify_url" type="hidden" value="http://luisaFernandezdwes/infenlces.com/" />
   <input name="rm" type="hidden" value="2" />     
   <input type="hidden" name="item_name" value="Compra de <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
">
   <input type="hidden" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['cesta']->value->getPrecioTotal();?>
">
   
   <input type="image" src="http://www.paypal.com/es_ES/i/btn/x-click-but01.gif" style="border:0;" name="submit" alt="Realice pagos con PayPal: es rápido, gratis y seguro">
   
</form>
 
</body>
</html><?php }
}
