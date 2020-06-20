<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-24 06:07:35
  from '/var/www/LuisaFernadezPracticaTienda/plantillas/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5368276b0515_13414782',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eaead7e83eb6ecdac9b18b0aea5654aa2addba70' => 
    array (
      0 => '/var/www/LuisaFernadezPracticaTienda/plantillas/login.tpl',
      1 => 1582524452,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5368276b0515_13414782 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!-- Desarrollo Web en Entorno Servidor -->
<!-- Tema 5 : Programación orientada a objetos en PHP -->
<!-- Tienda Web de Luisa: login.php -->
<html>
<head>
  <meta http-equiv="content-type" content="text/html charset:UTF-8">
  <title>Tienda de Luisa: Login Tienda Web con Plantillas</title>
  <link href="tienda.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div id='login'>
    <form action='index.php' method='post'>
    <fieldset >
        <legend>Login</legend>
        <div><span class='error'></span></div>
        <div class='campo'>
            <label for='nombre' >Usuario:</label><br/>
            <input type='text' name='nombre' id='usuario' maxlength="50" /><br/>
        </div>
        <div class='campo'>
            <label for='pass' >Contraseña:</label><br/>
            <input type='password' name='pass' id='password' maxlength="50" /><br/>
        </div>

        <div class='campo'>
            <input type='submit' name='submit' value='Enviar' />
        </div>
        <p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
    </fieldset>
    </form>
        <hr/>
    </div>
</body>
</html><?php }
}
