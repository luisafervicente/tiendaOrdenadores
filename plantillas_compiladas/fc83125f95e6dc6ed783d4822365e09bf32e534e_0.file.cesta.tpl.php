<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-24 15:06:47
  from '/var/www/LuisaFernadezPracticaTienda/plantillas/cesta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e53e6876cc071_10557982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc83125f95e6dc6ed783d4822365e09bf32e534e' => 
    array (
      0 => '/var/www/LuisaFernadezPracticaTienda/plantillas/cesta.tpl',
      1 => 1582556542,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e53e6876cc071_10557982 (Smarty_Internal_Template $_smarty_tpl) {
?> 


     
     
    <div id="pagcesta">
   <h3><img src="cesta.png" alt="Cesta" width="24" height="21"> Cesta</h3>
  
   
              <?php if (($_smarty_tpl->tpl_vars['cesta']->value->cestaVacia())) {?>
                    
                  <p>Cesta vacia</p>
                 
             
            <?php } else { ?>  
            <table border=0  >
           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articuloCesta']->value, 'elemento', false, 'codigo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['codigo']->value => $_smarty_tpl->tpl_vars['elemento']->value) {
?>
              <tr>
                  <td><p class="precio"><?php echo $_smarty_tpl->tpl_vars['elemento']->value['cantidad'];?>
</p></td>
                  <td><p class="nombre"><?php echo $_smarty_tpl->tpl_vars['elemento']->value['producto']->getNombre_corto();?>
</p></td>
                  <td><p class="precio"><?php echo $_smarty_tpl->tpl_vars['elemento']->value['producto']->getPVP();?>
</p>
              <td><form action="productos.php" method="post">
               <input style="color:red; font:bold" type="submit" name="submit" value="x">
               <input type="hidden" name="delete" value=<?php echo $_smarty_tpl->tpl_vars['elemento']->value['producto']->getCodigo();?>
></form></td>
              </tr>
             <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
             
            </table>
               
            <hr />
             <span class="coste">Precio Total: <?php echo $_smarty_tpl->tpl_vars['precioTotal']->value;?>
</span>
             <hr />
             <?php }?>
          
   
             <form action='productos.php' method ='post'>
    <input class="cestaAccion"  type='submit'  name='submit' value='pagar' <?php echo $_smarty_tpl->tpl_vars['disabled']->value;?>
 >
   
    <input class="cestaAccion"  type='submit' name='submit' value='vaciar' <?php echo $_smarty_tpl->tpl_vars['disabled']->value;?>
 >
    
    
</form>
<hr />
               
    </div>
    <?php }
}
