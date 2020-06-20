<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-24 15:01:07
  from '/var/www/LuisaFernadezPracticaTienda/plantillas/listaProductos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e53e53314be09_87098806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb91239b04dd811137ac055e57fe935d780e10d7' => 
    array (
      0 => '/var/www/LuisaFernadezPracticaTienda/plantillas/listaProductos.tpl',
      1 => 1582556454,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e53e53314be09_87098806 (Smarty_Internal_Template $_smarty_tpl) {
?>

 
 
  

    
   <div id="productos">
     
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?> 
                <p><form method="POST" action="productos.php">
                     <input type="submit" name="submit" value="comprar"   />
                     <input type="hidden" name="codigo" value=<?php echo $_smarty_tpl->tpl_vars['producto']->value->getCodigo();?>
> 
                </form>  
                     <?php echo $_smarty_tpl->tpl_vars['producto']->value->getNombre_corto();?>
:<?php echo $_smarty_tpl->tpl_vars['producto']->value->getPVP();?>
 euros. 
                    
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

       
      
        
        <br class="divisor" />
  </div>
  <div id="pie">
    <form action='logoff.php' method='post'>
        <input type='submit' name='volver' value='Desconectar usuario dwes'/>
    </form>  
  </div>     
 <?php }
}
