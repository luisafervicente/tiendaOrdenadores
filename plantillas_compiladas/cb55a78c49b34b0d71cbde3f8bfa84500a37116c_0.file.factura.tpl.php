<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-24 15:07:00
  from '/var/www/LuisaFernadezPracticaTienda/plantillas/factura.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e53e694afa0d0_99043876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb55a78c49b34b0d71cbde3f8bfa84500a37116c' => 
    array (
      0 => '/var/www/LuisaFernadezPracticaTienda/plantillas/factura.tpl',
      1 => 1582556792,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e53e694afa0d0_99043876 (Smarty_Internal_Template $_smarty_tpl) {
?><body class="pagproductos">
    <div id="contenedor">
        <h1>La maravillosa tienda de Luisa</h1>
            <h3>Nombre del cliente:<?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
</h3>
            <hr />
            <br class="divisor" />
        <div class="pago">
            <table id="tablaPagar" class="pago">
                <thead>
                    <tr class="pago">
                        <th class="pago">Articulo</th>
                        <th class="pago">Cantidad</th>
                        <th class="pago">Precio Unitario</th>
                    </tr>
                </thead><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayProductos']->value, 'valor', false, 'elemento');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['elemento']->value => $_smarty_tpl->tpl_vars['valor']->value) {
?>
                    <tr class="pago">
                        <td class="pago"><?php echo $_smarty_tpl->tpl_vars['valor']->value['producto']->getNombre_corto();?>
</td>
                        <td class="pago"> Unidades:<?php echo $_smarty_tpl->tpl_vars['valor']->value['cantidad'];?>
</td>
                        <td class="pago">Precio:<?php echo $_smarty_tpl->tpl_vars['valor']->value['producto']->getPVP();?>
</td>
                    </tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
            <hr />
            <table>
                <thead>
                    <tr class="pago">
                        <th class="pago" colspan=2><strong>RESUMEN DE LA FACTURA</strong></th>
                </thead>
                        <tr  class="pago">
                            <td class="pago">Total articulos</td>
                            <td class="pago"><?php echo $_smarty_tpl->tpl_vars['cesta']->value->getUnidades();?>
</td>
                        </tr>
                        <tr>
                            <td class="pago">Precio total Sin iva</td>
                            <td class="pago"><?php echo $_smarty_tpl->tpl_vars['cesta']->value->getPrecioTotal();?>
</td>
                        </tr>
                        <tr>
                            <td class="pago">IVA 21%</td>
                            <td class="pago"><?php echo $_smarty_tpl->tpl_vars['cesta']->value->getIva();?>
</td>
                        </tr>
                        <tr>
                            <td class="pago">TOTAL pagar</td>
                            <td class="pago"><?php echo $_smarty_tpl->tpl_vars['cesta']->value->getTotalIva();?>
</td>
                        </tr>
                    </table>
        </div>
        <form action="pagar.php" method="post">
        <input type='submit' name="factura" value="factura">
        </form>
    </div>
       <div id="pie">
            <form action='logoff.php' method='post'>
            <input type='submit' name='volver' value='Desconectar usuario dwes'/>
            </form>  
       </div>
</body>
 
 
  
 
 
             






<?php }
}
