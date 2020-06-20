<body class="pagproductos">
    <div id="contenedor">
        <h1>La maravillosa tienda de Luisa</h1>
            <h3>Nombre del cliente:{$nombre}</h3>
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
                </thead>{foreach $arrayProductos as $elemento=>$valor}
                    <tr class="pago">
                        <td class="pago">{$valor['producto']->getNombre_corto()}</td>
                        <td class="pago"> Unidades:{$valor['cantidad']}</td>
                        <td class="pago">Precio:{$valor['producto']->getPVP()}</td>
                    </tr>{/foreach}
            </table>
            <hr />
            <table>
                <thead>
                    <tr class="pago">
                        <th class="pago" colspan=2><strong>RESUMEN DE LA FACTURA</strong></th>
                </thead>
                        <tr  class="pago">
                            <td class="pago">Total articulos</td>
                            <td class="pago">{$cesta->getUnidades()}</td>
                        </tr>
                        <tr>
                            <td class="pago">Precio total Sin iva</td>
                            <td class="pago">{$cesta->getPrecioTotal()}</td>
                        </tr>
                        <tr>
                            <td class="pago">IVA 21%</td>
                            <td class="pago">{$cesta->getIva()}</td>
                        </tr>
                        <tr>
                            <td class="pago">TOTAL pagar</td>
                            <td class="pago">{$cesta->getTotalIva()}</td>
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
 
 
  
 
 
             






