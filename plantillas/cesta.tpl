 


     
     
    <div id="pagcesta">
   <h3><img src="cesta.png" alt="Cesta" width="24" height="21"> Cesta</h3>
  
   
              {if ($cesta->cestaVacia())}
                    
                  <p>Cesta vacia</p>
                 
             
            {else}  
            <table border=0  >
           {foreach $articuloCesta as $codigo=>$elemento}
              <tr>
                  <td><p class="precio">{$elemento['cantidad']}</p></td>
                  <td><p class="nombre">{$elemento['producto']->getNombre_corto()}</p></td>
                  <td><p class="precio">{$elemento['producto']->getPVP()}</p>
              <td><form action="productos.php" method="post">
               <input style="color:red; font:bold" type="submit" name="submit" value="x">
               <input type="hidden" name="delete" value={$elemento['producto']->getCodigo()}></form></td>
              </tr>
             {/foreach}
             
            </table>
               
            <hr />
             <span class="coste">Precio Total: {$precioTotal}</span>
             <hr />
             {/if}
          
   
             <form action='productos.php' method ='post'>
    <input class="cestaAccion"  type='submit'  name='submit' value='pagar' {$disabled} >
   
    <input class="cestaAccion"  type='submit' name='submit' value='vaciar' {$disabled} >
    
    
</form>
<hr />
               
    </div>
    